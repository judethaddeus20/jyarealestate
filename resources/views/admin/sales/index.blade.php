@extends('layouts.app')

@section('content')
    
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                    <div class="card-header bg-transparent">
                        
                    </div>
                    <div class="card-body">
                        
                        @livewire('sales-table')
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection

