<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\teachersssss;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        return view('home');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
     public function showCategories(Request $request)
    {
        $categories = Category::all();
        $selectedCategoryId = $request->input('category_id');
        
        if ($selectedCategoryId) {
            $courses = Course::where('idcategory', $selectedCategoryId)->get();
        } else {
            $courses = Course::all();
        }

        return view('categories', compact('categories', 'courses', 'selectedCategoryId'));
    }
    public function showCourse($idcurso)
    {
        $course = Course::findOrFail($idcurso);
        return view('course', compact('course'));
    }

}
