<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Food;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FoodController extends Controller
{
    




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $foods = Food::all();
        return view('backend.food.view', compact('foods'));
    }





    /*
    |--------------------------------------------------------------------------
    |                            FOOD STATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function foodStatus(Request $request)
    {
        $food = Food::find($request->food_id);
        $food->status = $request->status;
        $food->save();

        return response()->json(['success' => 'Status changed successfully.']);
    }





    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        $cuisines   = Cuisine::all();
        $categories = Category::all();
        
        return view('backend.food.add', compact('cuisines', 'categories'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              STORE METHOD
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        // Validation Portion
        $request->validate([
            'name'          => 'required|unique:foods,name',
            'image'         => 'required|image|mimes:jpg,jpeg,JPG,JPEG',
            'quantity'      => 'required|numeric',
            'price'         => 'required|numeric',
        ], [
            '*.required'        => 'This field is required.',
            'name.unique'       => 'Please choose a unique name.',
            'image.image'       => 'Please select a image file.',
            'image.mimes'       => 'Please select a jpg or jpeg file.',
            'price.numeric'     => 'Please give a numeric number.',
            'quantity.numeric'  => 'Please give a numeric number.',
        ]);

        // Image Portion
        $img = Image::make($request->image);
        $img_name = auth()->id() . $request->name . "." . $request->image->getClientOriginalExtension();
        $img->save(base_path('public/backend/assets/images/food/' . $img_name));

        // Insert Portion
        Food::insert([
            'name'          => $request->name,
            'image'         => $img_name,
            'cuisine_id'    => $request->cuisine_id,
            'category_id'   => $request->category_id,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'details'       => $request->details,
            'created_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created your Food');
    }





    /*
    |--------------------------------------------------------------------------
    |                              EDIT METHOD
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $cuisines   = Cuisine::all();
        $categories = Category::all();
        $food = Food::find($id);

        return view('backend.food.edit', compact('cuisines', 'categories','food'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $food = Food::find($id);

        // Validation Portion
        $request->validate([
            'cuisine_id'    => 'required',
            'category_id'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
            'discount'      => 'required|numeric|max:100',
            'image'         => 'image|mimes:jpg,jpeg,JPG,JPEG',

        ], [
            '*.required'    => 'This field is required.',
            '*.numeric'     => 'Please give a numeric number.',
            'discount.max'  => 'discount must not be greater than 100.',
            'image.image'   => 'Please select a image file.',
            'image.mimes'   => 'Please select a jpg or jpeg file.',
        ]);

        // Image Portion
        if ($request->hasFile('image')) {
            unlink(base_path('public/backend/assets/images/food/' . $food->image));
            $img = Image::make($request->image);
            $img_name = auth()->id() . $request->name . "." . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/food/' . $img_name));

            $food->update([
                'image' => $img_name,
            ]);
        }

        // update Portion
        $food->update([
            'cuisine_id'    => $request->cuisine_id,
            'category_id'   => $request->category_id,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'discount'      => $request->discount,
            'details'       => $request->details,
            'updated_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated your Food');
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE NAME METHOD
    |--------------------------------------------------------------------------
    */
    public function updateName(Request $request, $id)
    {
        // Validation Portion
        $request->validate([
            'name'          => 'required|unique:foods,name',
        ], [
            'name.required' => 'This field is required',
            'name.unique'   => 'Please choose a unique name.',
        ]);

        // Update Portion
        Food::find($id)->update([
            'name'          => $request->name,
            'updated_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated your Food Name');
    }





    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $food = Food::find($id);

        $food->delete();
        unlink(base_path('public/backend/assets/images/food/' . $food->image));
        return back()->with('success', 'Successfully deleted your Food');
    }
}
