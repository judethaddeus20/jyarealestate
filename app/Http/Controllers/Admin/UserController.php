<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\Property;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreUserRequest;

use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {   
        User::create($request->validated());
        toast('User successfully added!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect()->route('admin.user.index');
    }


    public function show(User $user)
    {
        //
    }


    public function edit($id)
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Admin',
            ],
            [
                'id' => 0,
                'name' => 'Sales Agent',
            ]
        ];
       
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user','roles'));
    }

 
    public function update(StoreUserRequest $request, User $user)
    {   
        $user->update($request->all());
        toast('User successfully updated!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user)
    {
        
        $alert = Alert::warning('Performing Action','User has been deleted')
        ->showConfirmButton('Continue', '#041d3a');
        if($alert){
            $user->delete();
        }
        return back();
        

    }
}
