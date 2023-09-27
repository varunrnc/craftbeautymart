<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Helper\ApiRes;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('admin.brand.brand', compact('brand'));
    }

    public function save(Request $req)
    {
        $brand = new Brand();
        $brand->title = $req->brand;
        $status = $brand->save();

        if ($status) {
            return redirect()->back()->with('success', 'New Brand Added Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something Error!');
        }
    }

    public function status(Request $req)
    {
        $brand = Brand::Where('id', $req->id)->first();
        if($brand->status == '1') {
            $brand->status = '0';
            $status = $brand->update();
            if ($status) {
                return  ApiRes::success('Status Changed Successfully!');
            } else {
                return  ApiRes::error();
            }
        }else{
            $brand->status = '1';
            $status = $brand->update();
            if ($status) {
                return  ApiRes::success('Status Changed Successfully!');
            } else {
                return  ApiRes::error();
            }
        }
    }

    public function deleteBrand(Request $req) {
        $status = Brand::Where('id', $req->id)->delete();
        if ($status) {
            return  ApiRes::success('Brand Deleted Successfully!');
        } else {
            return  ApiRes::error();
        }
    }
}
