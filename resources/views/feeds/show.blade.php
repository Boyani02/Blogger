@extends('layout')
@section('title', 'View')
@section('content')

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Feed View</h4>
            </div>
            <div class="card-body">
                <a href="{{route('feeds')}}" class="btn btn-info btn-sm mb-3">Back</a>

                <div class="mt-4">
                    <p><strong>Title:</strong> {{$feed->title}}</p>
                    <p><strong>Body:</strong> {{$feed->body}}</p>
                </div>
            </div>
        </div>

    </div>


@endsection




