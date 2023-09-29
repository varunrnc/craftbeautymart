<?php

namespace App\Http\Controllers\Admin\Category;

use App\Helper\ApiRes;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
        return view('admin.category.category');
    }

    public function save(Request $req)
    {
        $category = new Category();
        $category->title = $req->category;
        $status = $category->save();

        if ($status) {
            return redirect()->back()->with('success', 'New Category Added Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something Error!');
        }
    }

    public function status(Request $req)
    {
        $category = Category::Where('id', $req->id)->first();
        if($category->status == '1') {
            $category->status = '0';
            $status = $category->update();
            if ($status) {
                return  ApiRes::success('Status Changed Successfully!');
            } else {
                return  ApiRes::error();
            }
        }else{
            $category->status = '1';
            $status = $category->update();
            if ($status) {
                return  ApiRes::success('Status Changed Successfully!');
            } else {
                return  ApiRes::error();
            }
        }
    }

    public function deleteCategory(Request $req) {
        $status = Category::Where('id', $req->id)->delete();
        if ($status) {
            return  ApiRes::success('Category Deleted Successfully!');
        } else {
            return  ApiRes::error();
        }
    }
}
