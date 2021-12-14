<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Support\Facades\View;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $properties;
    public $users;
    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        View::share(['properties' => $this->properties, 'users' => $this->users]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
    {
        $properties = Property::all();
        $users = User::all();
        return view('agent.home',compact('properties','users'));
    }
}
