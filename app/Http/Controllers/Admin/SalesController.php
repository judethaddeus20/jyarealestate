<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sales;
use App\Models\User;
use App\Models\Property;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreSaleRequest;
class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $properties;
    public $users;
    public $sales;
    public $categories;

    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        $this->sales = Sales::all();

        $this->categories = Category::whereNotNull('parent_id')->get();
        View::share(['properties' => $this->properties, 'users' => $this->users,'categories'=>$this->categories,'sales'=>$this->sales]);
    }

    public function index()
    {
        return view('admin.sales.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleRequest $request)
    {
        
        $sales = Sales::create($request->validated());
        toast('Sale successfully added!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect('admin/sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('sales')->findOrFail($id);
        return view('admin.sales.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        
        $sales->update($request->all());
        $sales->save();
        toast('Sale successfully updated!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect()->route('admin.sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        $alert = Alert::warning('Performing Action','Sale deleted successfully!');
        if($alert){
            $sales->delete();
        }
        return back();
    }
}
