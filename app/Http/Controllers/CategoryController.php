<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class CategoryController extends Controller
{
    public function getCategories()
    {

         $categories = Category::all();
        //for web route
       return view('admin-pages.challenge_screen',compact('categories'));
     }

     public function putCategory(Request $request, $categoryId)
     {

      $validator = Validator::make($request->all(), [
           'name' => 'required',
             'description' => 'required',
         ]);

        if ($validator->fails()) {
             return redirect('admin-pages.challenge_screen');
         }

         $category = Category::find($categoryId);

         if (!$category) {
            return back()->withErrors('Category not found');
         }
         $category->update([
             'name' => $request->input('name'),
             'description' => $request->input('description'),
         ]);
         return view('admin-pages.challenge_screen');
     }

     public function deleteCategory($categoryId)
     {
        $category = Category::find($categoryId);

         if (!$category) {
                return back()->withErrors('category not found');
        }
         $category->delete();
             return redirect()->with('Category deleted successfuly');
     }
}
