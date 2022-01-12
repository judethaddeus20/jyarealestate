<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;

use App\Models\Area;
use App\Models\Amenity;
use App\Models\Room;
use App\Models\Property;
use App\Models\Province;
use App\Models\City;
use App\Models\Municipality;
use App\Models\Image;
use App\Models\Category;
use App\Models\User;
use App\Models\Sales;
use App\Models\Video;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $properties;
    public $users;
    public $categories;
    public $provinces;
    public $cities;
    public $municipalities;

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
            'categories' => $this->categories,
            'sales' => $this->sales,
            'provinces' => $this->provinces,
            'cities' => $this->cities,
            'municipalities' => $this->municipalities,
        ]);
    }
    public function index()
    {
        
        return view('admin.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.property.create');
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
        $property->cities()->attach(['city' => $request->city] , ['property_id'=> $property->id]);
       
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
        if($request->validate([
            'area.*.image' => 'required',
            ]))
            {
                foreach($request->area as $area){
                    $areaOriginal = md5(rand(1,100)).'.'.strtolower($area['image']->getClientOriginalExtension());
                    $areaUploadPath = 'properties/images/area/';
                    $areaURL = $areaUploadPath.$areaOriginal;  
                    $area['image']->move($areaUploadPath,$areaOriginal);
                    
                    Area::insert([
                        'file'=> $areaURL,
                        'description'=> $area['description'],
                        'property_id' => $property->id,
                        'created_at'=> now(),
                    ]);
                }

                foreach($request->room as $room){
                    $roomOriginal = md5(rand(1,100)).'.'.strtolower($room['image']->getClientOriginalExtension());
                    $roomUploadPath = 'properties/images/room/';
                    $roomURL = $roomUploadPath.$roomOriginal;  
                    $room['image']->move($roomUploadPath,$roomOriginal);
                    
                    Room::insert([
                        'file'=> $roomURL,
                        'description'=> $room['description'],
                        'property_id' => $property->id,
                        'created_at'=> now(),
                    ]);
                }

                foreach($request->amenities as $amenity){
                    $amenityOriginal = md5(rand(1,100)).'.'.strtolower($amenity['image']->getClientOriginalExtension());
                    $amenityUploadPath = 'properties/images/amenity/';
                    $amenityURL = $amenityUploadPath.$amenityOriginal;  
                    $amenity['image']->move($amenityUploadPath,$amenityOriginal);
                    
                    Amenity::insert([
                        'file'=> $amenityURL,
                        'description'=> $amenity['description'],
                        'property_id' => $property->id,
                        'created_at'=> now(),
                    ]);
                }
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
        return redirect('admin/property');
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
        $categories = Category::whereNotNull('parent_id')->get();
        $property = Property::findOrFail($id);
        return view('admin.property.edit',compact('property','categories')); 
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
        $property->update($request->all());
        toast('Property successfully updated!','success')->showCloseButton()->position('top-end')->autoClose(2500);
        return redirect('admin/property');
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

    public function getCity($id){
        $data = City::select('name','id','province_id')->where('province_id',$id)->get();
        return response()->json($data);
    }

    public function getMunicipality($id){
        $getProvince = City::findOrFail($id);

        $data = Municipality::select('name','id','province_id')->where('province_id',$getProvince['province_id'])->get();
        return response()->json($data);
    }
}
