<?php

namespace App\Http\Controllers;

use App\Models\CompanySocial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CompanySocialController extends Controller
{
    




    /*
    |--------------------------------------------------------------------------
    |                              INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $company_socials = CompanySocial::all();
        return view('backend.company-social.view', compact('company_socials'));
    }





    /*
    |--------------------------------------------------------------------------
    |                            SOCIAL STATUS METHOD
    |--------------------------------------------------------------------------
    */
    public function socialStatus(Request $request)
    {
        $social = CompanySocial::find($request->social_id);
        $social->status = $request->status;
        $social->save();

        return response()->json(['success' => 'Status changed successfully.']);
    }





    /*
    |--------------------------------------------------------------------------
    |                              CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('backend.company-social.add');
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
            'nameicon'  => 'required|string|max:255',
            'link'      => 'required|url|string|max:255',
        ], [
            '*.required'    => "This field is required.",
            '*.string'      => "Input string data only.",
            '*.max'         => "This field must not be greater than 255 characters.",
            'link.url'      => "The link must be a valid URL.",
        ]);

        // Insert Portion
        $nameicon = explode('|||' , $request->nameicon);
        $name = $nameicon[0];
        $icon = $nameicon[1];

        CompanySocial::insert([
            'name'          => $name,
            'logo'          => $icon,
            'link'          => $request->link,
            'created_at'    => Carbon::now(),
        ]);

        return back()->with('success', 'Successfully created Social Media');
    }





    /*
    |--------------------------------------------------------------------------
    |                              DESTROY METHOD
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        CompanySocial::find($id)->delete();
        return back()->with('success', 'Successfully deleted Social Media');
    }
}
