<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\Category;
use App\Models\Province;
use App\Models\Municipality;
use App\Models\City;
use App\Models\Sales;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;
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
    public $sales;
    public $provinces;
    public $cities;
    public $municipalities;
    public $categories;
    public function __construct()
    {
        $this->properties = Property::all();
        $this->users = User::all();
        $this->sales = Sales::all();
        $this->provinces = Province::all();
        $this->cities = City::all();
        $this->municipalities = Municipality::all();
        $this->categories = Category::whereNotNull('parent_id')->get();
                            
        View::share([
            'properties' => $this->properties, 
            'users' => $this->users,
            'categories'=>$this->categories,
            'sales'=>$this->sales,
            'provinces' => $this->provinces,
            'cities' => $this->cities,
            'municipalities' => $this->municipalities,
        ]);
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
    public function store(StorePropertyRequest $request)
    {
        
        $property = Property::create($request->validated());
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
        if($videoFile = $request->file('video')){
            $videoName = md5(rand(1,100));
            $videoExtension = strtolower($videoFile->getClientOriginalExtension());
            $videoOriginal = $videoName.'.'.$videoExtension;  
            $videoUploadPath = 'properties/videos/';
            $videoUrl = $videoUploadPath.$videoOriginal;
            $videoFile->move($videoUploadPath,$videoOriginal);
        }
        Image::insert([
            'name' => implode('|',$photo),
            'property_id' => $property->id,
            'created_at' => now(),
        ]);

        // Store Videos
        Video::insert([
            'name' => $videoUrl,
            'property_id' => $property->id,
            'created_at' => now(),
        ]);
        toast('Property successfully added!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect('agent/property');
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
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('agent.property.edit',compact('property'));
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
        $property->categories()->sync($request->input('categories'));
        $property->touch();
        $user->update($request->all());
        toast('Property successfully updated!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect('agent/property');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $alert = Alert::warning('Performing Action','Property deleted successfully!');
        if($alert){
            $property->delete();
        }
        return back();
    }
}
