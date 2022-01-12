<?php

namespace App\Http\Livewire;

use App\Models\Property;
use App\Models\City;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class PropertiesTable extends PowerGridComponent
{
    use ActionButton;
    public array $perPageValues = [0, 5, 10, 15, 20];
    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    
    

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showPerPage(5)
            ->showSearchInput()
            ->showRecordCount('full');
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Property::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('price',function(Property $property) {
                return  '₱' . number_format($property->price, 2);
              })
            ->addColumn('province',function(Property $property) {
                if($property->province == 1){
                    $property->province = 'Bukidnon';
                }elseif($property->province == 2){
                    $property->province = 'Camiguin';
                }elseif($property->province == 3){
                    $property->province = 'Lanao Del Norte';
                
                }elseif($property->province == 4){
                    $property->province = 'Misamis Occidental';
                
                }elseif($property->province == 5){
                    $property->province = 'Misamis Oriental';
                }
                return $property->province;
              })
            ->addColumn('city',function(Property $property){
                if($property->city == 1){
                    $property->city = 'Cagayan de Oro';
                }elseif($property->city == 2){
                    $property->city = 'Iligan';
                }elseif($property->city == 3){
                    $property->city = 'Tangub';
                }elseif($property->city == 4){
                    $property->city = 'Malaybalay';
                }elseif($property->city == 5){
                    $property->city = 'Valencia';
                }elseif($property->city == 6){
                    $property->city = 'Gingoog';
                }elseif($property->city == 7){
                    $property->city = 'El Salvador';
                }elseif($property->city == 8){
                    $property->city = 'Oroquieta';
                }elseif($property->city == 9){
                    $property->city = 'Ozamiz';
                }
                return $property->city;
            })
            ->addColumn('location')
            ->addColumn('latitude')
            ->addColumn('longitude')
            ->addColumn('description')
            ->addColumn('developer')
            ->addColumn('rooms');
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('ID')
                ->field('id'),

            Column::add()
                ->title('NAME')
                ->field('name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('PRICE')
                ->field('price')
                ->makeInputRange(),

            Column::add()
                ->title('PROVINCE')
                ->field('province')
                ->makeInputText()
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('CITY')
                ->field('city')
                ->sortable()
                ->makeInputText()
                ->searchable(),

            Column::add()
                ->title('LOCATION')
                ->field('location')
                ->sortable()
                ->makeInputText()
                ->searchable(),

            Column::add()
            ->title('ROOMS')
            ->field('rooms')
            ->makeInputRange(),

            Column::add()
                ->title('LATITUDE')
                ->field('latitude')
                ->makeInputRange()
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('LONGITUDE')
                ->field('longitude')
                ->makeInputRange()
                ->sortable()
                ->searchable(),
            Column::add()
                ->title('DEVELOPER')
                ->field('developer')
                ->sortable()
                ->searchable()
                ->makeInputText(),
  

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */

     /**
     * PowerGrid Property action buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    
    public function actions(): array
    {
        $route = [];
        if(auth()->user()->is_admin == 1){
            $route = [
                Button::add('edit')
                    ->caption('Edit')
                    ->target('')
                    ->class('btn bg-indigo cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
                    ->route('admin.property.edit', ['property' => 'id']),
     
                Button::add('destroy')
                    ->caption('Delete')
                    ->target('')
                    ->class('btn bg-red cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
                    ->route('admin.property.destroy', ['property' => 'id'])
                    ->method('delete')
             ];
        }else{
            $route = [
                Button::add('edit')
                    ->caption('Edit')
                    ->target('')
                    ->class('btn bg-indigo cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
                    ->route('agent.property.edit', ['property' => 'id']),
     
                Button::add('destroy')
                    ->caption('Delete')
                    ->target('')
                    ->class('btn bg-red cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
                    ->route('agent.property.destroy', ['property' => 'id'])
                    ->method('delete')
            ];
        };
       return $route;

    }
    

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

     /**
     * PowerGrid Property Update.
     *
     * @param array<string,string> $data
     */

    
    public function update(array $data ): bool
    {
       try {
           $updated = Property::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
    
}
