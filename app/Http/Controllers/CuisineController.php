<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CuisineController extends Controller
{





    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('backend.cuisine.view', compact('cuisines'));
    }





    /*
    |--------------------------------------------------------------------------
    |                            CUISINE STATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function cuisineStatus(Request $request)
    {
        $cuisine = Cuisine::find($request->cuisine_id);
        $cuisine->status = $request->status;
        $cuisine->save();

        return response()->json(['success' => 'Status changed successfully.']);
    }





    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('backend.cuisine.add');
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
            'name'              => 'required|unique:cuisines,name',
            'image'             => 'required|image|mimes:jpg,jpeg,JPG,JPEG',
        ], [
            'name.required'     => 'This field is required',
            'name.unique'       => 'Please give a unique name',
            'image.required'    => 'This field is required',
            'image.image'       => 'Please choose a image file',
            'image.mimes'       => 'Please choose only jpg & jpeg file',
        ]);

        // Image Portion
        $img        = Image::make($request->image);
        $img_name   = auth()->id() . $request->name . "." . $request->image->getClientOriginalExtension();
        $img->save(base_path('public/backend/assets/images/cuisine/' . $img_name));

        // Insert Portion
        Cuisine::insert([
            'name'          => $request->name,
            'image'         => $img_name,
            'created_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created your Cuisine');
    }





    /*
    |--------------------------------------------------------------------------
    |                              EDIT METHOD
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $cuisine = Cuisine::find($id);
        return view('backend.cuisine.edit', compact('cuisine'));
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        // Image Update Portion
        if ($request->hasFile('image')) {
            $request->validate([
                'image'             => 'required|image|mimes:jpg,jpeg,JPG,JPEG',
            ], [
                'image.required'    => 'This field is required',
                'image.image'       => 'Please choose a image file',
                'image.mimes'       => 'Please choose only jpg & jpeg file',
            ]);

            $cuisine = Cuisine::find($id);

            unlink(base_path('public/backend/assets/images/cuisine/' . $cuisine->image));

            $img        = Image::make($request->image);
            $img_name   = auth()->id() . $request->name . "." . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/cuisine/' . $img_name));

            $cuisine->update([
                'image'         => $img_name,
                'updated_at'    => Carbon::now(),
            ]);
        }

        // Name Update Portion
        else {
            $request->validate([
                'name'              => 'required|unique:cuisines,name',
            ], [
                'name.required'     => 'This field is required',
                'name.unique'       => 'Please give a unique name',
            ]);

            Cuisine::find($id)->update([
                'name'          => $request->name,
                'updated_at'    => Carbon::now(),
            ]);
        }

        return back()->with('success', 'Successfully updated your Cuisine');
    }





    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        Cuisine::find($id)->delete();
        return back()->with('success', 'Successfully deleted your Cuisine');
    }
}
