<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Category;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $property = Property::all();
        $category = Category::all();
        $subCategories = $category->whereNotNull('parent_id');
        $datetimeToday = Carbon::now('Asia/Manila');

        return view('welcome',compact('property','category','subCategories','datetimeToday'));
    }

    public function property(Property $property)
    {   
        return view('property.show',compact('property'));
    }
    
}
