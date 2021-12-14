<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Property;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public $properties;
    public $users;

    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        View::share(['properties' => $this->properties, 'users' => $this->users]);
    }

    public function index()
    {
        $properties = Property::all();
        $users = User::all();
        return view('admin.home',compact('users','properties'));
    }
}
