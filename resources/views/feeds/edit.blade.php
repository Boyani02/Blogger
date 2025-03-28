@extends('layout')
@section('title', 'Edit')
@section('content')

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Feed Edit</h4>
            </div>
            <div class="card-body">
                <a href="{{route('feeds')}}" class="btn btn-info btn-sm mb-3">Back</a>

                <form action="{{route('feeds.update',$feed->id )}}" method="POST">
                    @csrf

                    @method('PUT')
                    <div class="mt-2">
                        <label for="">Title:</label>
                        <input type="text" name="title" placeholder="title" class="form-control" value="{{$feed->title}}">
                        @error("title")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="">Body:</label>
                        <textarea name="body" placeholder="body" class="form-control">{{$feed->body}}</textarea>
                        @error("body")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success btn-sm" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>

    </div>


@endsection




