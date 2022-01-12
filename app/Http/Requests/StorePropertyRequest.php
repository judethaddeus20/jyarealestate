<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:5', 'max:25'
            ],
            'price' => [
                'required', 'numeric','min:1000000','max:100000000'
            ],
            'province' => [
                'required',
            ],
            'city' => [
                'required_with:province',
            ],
            'municipality' => [
                'sometimes','required'
            ],
            'location' => [
                'required',
            ],
            'latitude' => [
                'required', 'numeric','min:0','max:180'
            ],
            'longitude' => [
                'required', 'numeric','min:0','max:180'
            ],
            'description' => [
                'required', 'min:10','max:1000'
            ],
            'developer' => [
                'required', 'min:10','max:50'
            ],
            'rooms' => [
                'required', 'min:0','max:25'
            ],
            'photos' => [
                'required'
            ],
            'video' => [
                'required','mimes:mp4'
            ],
            'photos.*' => [
                'min:5', 'mimes:jpeg,png,jpg,gif,svg' ,'dimensions:min_width=350,min_height350'
            ],
            'url' => [
                'required','url',
            ],
            'area.*.image' => [
                'required','image'
            ],
            'room.*.image' => [
                'required','image'
            ],
            'amenities.*.image' => [
                'required','image'
            ],
            'area.*.description' => [
                'sometimes','min:5'
            ],
            'room.*.description' => [
                'sometimes','min:5'
            ],
            'amenities.*.description' => [
                'sometimes','min:5'
            ],
            
        ];
    }
    public function messages()
    {
        return [
            'price.required' => 'Price is required',
            'name.required' => 'Name is required',
            'rooms.required' => 'Rooms is required',
            'province.required' => 'Province is required',
            'city.required' => 'City is required',
            'location.required' => 'Location is required',
            
            'latitude.required' => 'Latitude is required',
            'longitude.required' => 'Longitude is required',
            'description.required' => 'Description is required',
            'developer.required' => 'Developer is required',
            'photos.required' => 'Photos are required',
            'video.required' => 'Video is required',
            'url.required' => 'URL is required',

            'room.*.description.required' => 'Room description is required',
            'amenities.*.description.required' => 'Amenities description is required',
            'area.*.description.required' => 'Area description is required',

            'area.*.image.required' => 'Area image required',
            'amenities.*.image.required' => 'Amenities image required',
            'room.*.image.required' => 'Room image required'
            
        ];
    }
}
