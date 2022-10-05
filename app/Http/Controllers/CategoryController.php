<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
   




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.view', compact('categories'));
    }





    /*
    |--------------------------------------------------------------------------
    |                            CATEFORY STATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function categoryStatus(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->status = $request->status;
        $category->save();

        return response()->json(['success' => 'Status changed successfully.']);
    }





    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('backend.category.add');
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
            'name'              => 'required|unique:categories,name',
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
        $img->save(base_path('public/backend/assets/images/category/' . $img_name));

        // Insert Portion
        Category::insert([
            'name'          => $request->name,
            'image'         => $img_name,
            'created_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created your Category');
    }





    /*
    |--------------------------------------------------------------------------
    |                              EDIT METHOD
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
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

            $category = Category::find($id);

            unlink(base_path('public/backend/assets/images/category/' . $category->image));

            $img        = Image::make($request->image);
            $img_name   = auth()->id() . $request->name . "." . $request->image->getClientOriginalExtension();
            $img->save(base_path('public/backend/assets/images/category/' . $img_name));

            $category->update([
                'image'         => $img_name,
                'updated_at'    => Carbon::now(),
            ]);
        }

        // Name Update Portion
        else {
            $request->validate([
                'name'              => 'required|unique:categories,name',
            ], [
                'name.required'     => 'This field is required',
                'name.unique'       => 'Please give a unique name',
            ]);

            Category::find($id)->update([
                'name'          => $request->name,
                'updated_at'    => Carbon::now(),
            ]);
        }

        return back()->with('success', 'Successfully updated your Category');
    }





    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $category = Category::find($id);
        
        $category->delete();
        unlink(base_path('public/backend/assets/images/category/' . $category->image));
        return back()->with('success', 'Successfully deleted your Category');
    }
}
