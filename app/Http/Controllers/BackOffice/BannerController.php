<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function viewBanner()
    {
        $banners = Banner::all();
        return view('backoffice.banner', compact('banners'));
    }

    public function storeBanner(Request $request)
    {
        if($request->new_arquivo){
            $request->validate([
                'new_arquivo' => 'dimensions:max_width=1290,max_height=600'
            ]);

            $file = $request->file('new_arquivo')->store('public/banners');
            $name_file = $request->file('new_arquivo')->getClientOriginalName();

            $banner = Banner::create([
                'banner_name' => $name_file,
                'path' => str_replace('public/', '', $file),
            ]);

            return response()->json($banner->id);
        }

        if($request->arquivo){
            $request->validate([
                'arquivo' => 'dimensions:max_width=1290,max_height=600'
            ]);
            $banner = Banner::find($request->id);

            Storage::delete('public/'.$banner->path);

            $file = $request->file('arquivo')->store('public/banners');
            $name_file = $request->file('arquivo')->getClientOriginalName();

            $banner->update([
                'banner_name' => $name_file,
                'path' => str_replace('public/', '', $file),
            ]);

            return response()->json($banner->id);
        }
    }

    public function destroyBanner(Request $request)
    {
        $banner = Banner::find($request->id);

        Storage::delete('public/'.$banner->path);

        $banner->delete();

        return response()->json();
    }
}
