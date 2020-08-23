<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Post;
use App\Category;
use JWTAuth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('id');
        $categories = Category::all();
        return response()->json([
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required','max:255','unique:posts',
            // 'image' => 'image',
            'body' => 'required','max:255',
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = JWTAuth::parseToken()->authenticate()->id;
     
     if ($request->hasFile('image')) {
         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         $location = public_path('/images/' . $filename);
         Image::make($image)->resize(800, 600)->save($location);
         $post->image = $filename;
     }
        $post->save();
        return response()->json([
             'post' => $post,
             'message' => 'post has been added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if (JWTAuth::parseToken()->authenticate()->id != $post->user_id) {
            abort(404);
        }
        if ($post == null) {
            abort(404);
        }
        $categories = Category::all();
        return response()->json([
            'post' => $post,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (JWTAuth::parseToken()->authenticate()->id != $post->user_id) {
            abort(404);
        }
        if ($post == null) {
            abort(404);
        }
        $this->validate($request, [
            'title' => 'equired','max:255','unique:posts','title',$id,
            'image' => 'image',
            'body' => 'required','max:255'
        ]);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category;
        $post->user_id = JWTAuth::parseToken()->authenticate();
        $user_id = $user->id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->resize(100,600)->save($location);
            if ($post->image != null) {
                Storage::delete($post->image);
            }
            $post->image = $filename;
        }
        $post->save();
        if (isset($request->tags)) {
            $post->friends()->sync($request->tags);
        }

        Session::flash('success', 'Post was successfully added');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (JWTAuth::parseToken()->authenticate()->id != $post->user_id) {
            abort(404);
        }
        if ($post == null) {
            abort(404);
        }
        if ($post->image != null) {
            Storage::delete($post->image);
        }
        $post->delete();
        
        return response()->json([
            'message' => 'post has been deleted'
        ]);
    }
}
