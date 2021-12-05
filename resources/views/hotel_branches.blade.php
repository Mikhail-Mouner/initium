@extends('layouts.app')

@section('title',"Hotel ($hotel->hotel_name)")
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Hotel ({{ $hotel->hotel_name }})</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">No Of Rooms</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hotel->branches as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->branch_name }}</td>
                                        <td>{{ $data->location->location_name }}</td>
                                        <td>{{ $rooms_count = $data->rooms->count() }}</td>
                                        <td>
                                            @if($rooms_count > 0)
                                                <a href="{{ route('hotel_branch_rooms',[$hotel->hotel_slug,$data->id]) }}">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal" data-target="#modelId" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-eye-fill"
                                                             viewBox="0 0 16 16">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>
                                                        Rooms
                                                    </button>
                                                </a>
                                            @else
                                                No Room
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
