<?php

namespace App\Http\Livewire;

use App\Models\Sales;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class SalesTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;
    public array $perPageValues = [0, 5, 10, 15, 20];
    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this
            ->showPerPage(5)
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
        return Sales::query();
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
            ->addColumn('agent_name')
            ->addColumn('property_name')
            ->addColumn('branch')
            ->addColumn('developer')
            ->addColumn('model')
            ->addColumn('number_of_unit')
            ->addColumn('date_reserved')
            ->addColumn('price',function(Sales $sales) {
                return  '₱ ' . number_format($sales->price, 2);
              });

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
                ->field('id')
                ->sortable(),

            Column::add()
                ->title('AGENT')
                ->field('agent_name')
                ->sortable()
                ->makeInputText(),
            Column::add()
                ->title('CLIENT')
                ->field('client_name')
                ->sortable()
                ->makeInputText(),
            Column::add()
                ->title('PROPERTY')
                ->field('property_name')
                ->sortable()
                ->makeInputText(),
            Column::add()
                ->title('BRANCH')
                ->field('branch')
                ->sortable()
                ->makeInputText(),
            Column::add()
                ->title('DEVELOPER')
                ->field('developer')
                ->sortable()
                ->makeInputText(),
                
            Column::add()
                ->title('MODEL')
                ->field('category')
                ->sortable()
                ->makeInputText(),

            Column::add()
                ->title('NUMBER OF UNIT')
                ->field('number_of_unit')
                ->sortable()
                ->makeInputRange(),

            Column::add()
                ->title('DATE RESERVED')
                ->field('date_reserved')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('date_reserved'),
            // Column::add()
            //     ->title('CREATED AT')
            //     ->field('created_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker('created_at'),

            // Column::add()
            //     ->title('UPDATED AT')
            //     ->field('updated_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker('updated_at'),

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
     * PowerGrid Sales action buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption('Edit')
               ->target('')
               ->class('btn bg-indigo cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('admin.sales.edit', ['sale' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->target('')
               ->class('btn bg-red cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('admin.sales.destroy', ['sale' => 'id'])
               ->method('delete')
        ];
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
     * PowerGrid Sales Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Sales::query()->findOrFail($data['id'])
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
    */
}
