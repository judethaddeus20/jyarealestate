<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class AgentPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $properties;
    public $users;
    public $categories;
    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        $this->categories = Category::whereNotNull('parent_id')->get();                                 
        View::share(['properties' => $this->properties, 'users' => $this->users,'categories'=>$this->categories]);
    }

    public function index()
    {
        return view('agent.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $property = new Property([
            'name' => $request->name,
            'price' => $request->price,
            'location' => $request->location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'description' => $request->description,
            'developer' => $request->developer,
            'rooms' => $request->rooms,
            
        ]);
        $property->save();
        $property->categories()->attach(['category_id' => $request->categories],['property_id' => $property->id]);

        // Store Photos
        $photo = array();
        
        if($files = $request->file('photos')){
            foreach ($files as $file) {
                
                $photo_name = md5(rand(1,100));
                $ext = strtolower($file->getClientOriginalExtension());
                $photoOriginal = $photo_name.'.'.$ext;  
                $upload_path = 'properties/images/';
                $photoUrl = $upload_path.$photoOriginal;
                $file->move($upload_path,$photoOriginal);
                $photo[] = $photoUrl;
            }
        }      
        Image::insert([
            'name' => implode('|',$photo),
            'property_id' => $property->id,
            'created_at' => now(),
        ]);

        // Store Videos
        return back()->with('success','Property added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
