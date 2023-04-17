<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function edit()
    {
        return view('dashboard.banner.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner_text'  => 'required',
            'banner_image' => 'nullable|image|mimes:png,jpeg,jpg,JPG,PNG,JPEG|max:1024',
        ]);
        Setting(['banner_text' => $request->banner_text])->save();
        if($request->hasFile('banner_image')){
            $image = imageUpdate($request, 'banner_image', 'banner', 'uploads/images/banner/', Setting('banner_image'));
            Setting(['banner_image' => $image])->save();
        }

        try{
            Alert::success('Success', 'Banner Updated Successfully');
            return redirect()->route('admin.dashboard');
        }catch (\Exception $exception){
            Alert::error('Error', $exception->getMessage());
            return back();
        }
    }
}
