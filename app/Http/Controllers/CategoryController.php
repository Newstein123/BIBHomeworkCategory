<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
// use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index() {
        $categories= Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create() {
        return view('categories.create');
    }

    public function store(CategoryRequest $request) {
       
             $category = new Category();
            $category -> title = $request->title ;
            $category -> body = $request->body;
            $category -> created_at = now();
            $category -> updated_at = now();

            $category -> save();
           return redirect('categories/index');
    }
    public function show($id) {
        $categories = Category::find($id);
        return view('categories.show', compact('categories'));
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('/categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request,$id) {
        $category = Category::find($id);

        $category-> title= $request->title;
        $category -> body= $request->title;
        $category -> updated_at = now();
        $category -> save();
      return redirect('categories/index');
        
    }

    public function destroy($id) {
        
        Category::destroy($id);
        return redirect('categories/index');
    }
}
