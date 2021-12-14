@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="table-responsive">
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="id">#</th>
                                            <th scope="col" class="sort" data-sort="name">Name</th>
                                            <th scope="col" class="sort" data-sort="location">Location</th>
                                            <th scope="col" class="sort" data-sort="Price">Price</th>
                                            <th scope="col" class="sort" data-sort="developer">Developer</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @forelse($properties as $property)
                                        <tr>
                                            <th scope="row">
                                                <span>{{$property->id}}</span>
                                            </th>
                                            <td class="name">
                                                {{ucfirst($property->name)}}
                                            </td>
                                            <td class="location">
                                                {{$property->location}}
                                            </td>
                                            <td class="price">
                                                ₱{{number_format($property->price,2)}}
                                            </td>
                                            <td class="developer">
                                                {{$property->developer}}
                                            </td>
                                            
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        @empty
                                            <span>No data in the database...</span>
                                        @endforelse        
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush