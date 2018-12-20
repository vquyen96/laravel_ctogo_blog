<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use File;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $categories = Category::all();
        return view( 'admin.category.category', compact('categories') );
    }

    public function postAddCategory(Request $request)
    {
    	$category = new Category;
    	$category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->image = $request->image;
        $category->icon = $request->icon;
        $category->status = $request->status;
    	return back();
    }

    public function getDeleteCategory($id,Request $request)
    {
    	$category = Category::find($id);
    	$this->handleDeleteImage($category->image);
    	Category::destroy($id);
    	return back();
    }

    protected function handleDeleteImage($image)
	{
		foreach( explode(',',$image) as $image ){
			File::delete('storage/app/image/'.$image,'storage/app/image/resized-'.$image);
		}
		return ;
	}
}
