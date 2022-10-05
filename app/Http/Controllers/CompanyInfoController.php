<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class CompanyInfoController extends Controller
{
    




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        if (auth()->user()->role == 1) {
            $company_info = CompanyInfo::firstOrFail();
            return view('backend.company-info.view', compact('company_info'));
        }
        
    }





    /*
    |--------------------------------------------------------------------------
    |                              UPDATE METHOD
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $company_info = CompanyInfo::find($id);

        // Validation Portion
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'contact' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'logo' => 'image|mimes:png,PNG',
        ], [
            '*.required'    => "This field is required.",
            '*.string'      => "Input string data only.",
            '*.max'         => "This field must not be greater than 255 characters.",
            'email.email'   => "Please input a valid email.",
            'logo.image'    => "Please select a image file.",
            'logo.image'    => "The logo must be a file of type: png, PNG.",
        ]);

        // Logo Portion
        if ($request->hasFile('logo')) {
            if ($company_info->logo != 'logo.png') {
                unlink(base_path('public/backend/assets/images/logo/' . $company_info->logo));
            }
            
            $logo = Image::make($request->logo);
            $logo_name = auth()->id() . $request->name . "Logo" . "." . $request->logo->getClientOriginalExtension();
            $logo->save(base_path('public/backend/assets/images/logo/' . $logo_name));

            $company_info->update([
                'logo' => $logo_name,
            ]);
        }

        // update Portion
        $company_info->update([
            'name'          => $request->name,
            'email'         => $request->email,
            'contact'       => $request->contact,
            'location'      => $request->location,
            'updated_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully updated your Company Information');

    }
}
