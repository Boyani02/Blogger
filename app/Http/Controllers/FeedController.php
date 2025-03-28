<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index(Request $request){
        $feeds = Feed::all();
        return view('feed',compact('feeds'));
    }

    public function create(Request $request){
        return view('feeds.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        Feed::create([
            "title" => $request-> title,
            "body" => $request-> body
        ]);

        return redirect()->route('feeds')->with('success','Feed created successfully');
    }

    public function show(Request $request, $id){
        $feed = Feed::find($id);
        return view('feeds.show',compact('feed'));
    }

    public function edit(Request $request, $id){
        $feed = Feed::find($id);
        return view('feeds.edit',compact('feed'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        $feed = Feed::find($id);
        $feed->update([
            "title" => $request->title,
            "body" => $request->body
        ]);

        return redirect()->route('feeds')->with('success','Feed updated successfully');
    }

    public function destroy(Request $request, $id){
        Feed::find($id)->delete();
        return redirect()->route('feeds')->with('success','Feed deleted successfully');
    }
}
