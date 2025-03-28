@extends('layout')
@section('title', 'Home')
@section('content')

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Feeds List</h4>
            </div>
            <div class="card-body">

                @session("success")
                <div class="alert alert-success">{{$value}}</div>
                @endsession
                <a href="{{route('feeds.create')}}" class="btn btn-success btn-sm mb-3">Create Feed</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="50px">ID</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th width="200px">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($feeds as $feed)
                            <tr>
                                <td>{{$feed->id}}</td>
                                <td>{{$feed->title}}</td>
                                <td>{{$feed->body}}</td>
                                <td>
                                    <form action="{{route('feeds.destroy', $feed->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('feeds.show', $feed->id)}}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{route('feeds.edit', $feed->id)}}" class="btn btn-info btn-sm">Edit</a>

                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>

    </div>


@endsection




