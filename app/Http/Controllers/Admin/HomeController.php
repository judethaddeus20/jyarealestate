<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Property;
use App\Models\Sales;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
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
    public $sales;

    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        $this->sales = Sales::all();

        View::share(['properties' => $this->properties, 'users' => $this->users, 'sales' => $this->sales]);
    }

    public function index()
    {   
        $chart = 
            (new ColumnChartModel())
        ->setTitle('Expenses by Type')
        ->addColumn('Weekly', 100, '#f6ad55')
        ->addColumn('Monthly', 200, '#fc8181')
        ->addColumn('Yearly', 300, '#90cdf4');
        /* $this->sales = Sales::select('price')->get();
        dd($this->sales); */
        $properties = Property::all();
        $users = User::all();
        return view('admin.home',compact('users','properties','chart'));
    }
}
