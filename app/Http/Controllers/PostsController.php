<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\categories;
use App\Models\User;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = posts::get();

        return view('posts.posts', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.postcreate',[
            'categories'=> categories::all(),
            'users'=> User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['user_id'] = $request->user_id;
        $data['category_id'] = $request->category_id;
        $data['body'] = $request->body;

        posts::create($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id ){
        $data = posts::find($id);

        return view('posts.postedit', compact('data'), [
            'categories'=> categories::all(),
            'users'=> User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['user_id'] = $request->user_id;
        $data['category_id'] = $request->category_id;
        $data['body'] = $request->body;

        posts::whereId($id)->update($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request,$id){
        
        $data = posts::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.posts.index');

    }
}
