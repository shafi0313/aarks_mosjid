<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function edit()
    {
        return view('dashboard.about.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'about_text'  => 'required',
            'about_image' => 'nullable|image|mimes:png,jpeg,jpg,JPG,PNG,JPEG|max:1024',
        ]);
        Setting(['about_text' => $request->about_text])->save();
        if($request->hasFile('about_image')){
            $image = imageUpdate($request, 'about_image', 'about', 'uploads/images/about/', Setting('about_image'));
            Setting(['about_image' => $image])->save();
        }

        try{
            Alert::success('Success', 'About Updated Successfully');
            return redirect()->route('admin.dashboard');
        }catch (\Exception $exception){
            Alert::error('Error', $exception->getMessage());
            return back();
        }
    }
}
