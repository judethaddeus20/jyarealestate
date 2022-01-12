<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Sales;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $properties;
    public $users;
    public $sales;
    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        $this->sales = Sales::all();
        View::share(['properties' => $this->properties, 'users' => $this->users, 'sales' => $this->sales]);
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
