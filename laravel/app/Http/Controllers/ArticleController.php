<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use JWTAuth;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc('id');
        $categories = Category::all();
        return response()->json([
            'articles' => $articles,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'title' => 'required',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->category_id = $request->category_id;
        $article->user_id = JWTAuth::parseToken()->authenticate()->id;
     
     if ($request->hasFile('image')) {
         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         $location = public_path('/images/' . $filename);
         Image::make($image)->resize(800, 600)->save($location);
         $article->image = $filename;
     }
        $article->save();
        return response()->json([
             'article' => $article,
             'message' => 'article has been added'
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
        return response()->json($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        return view('article.edit', compact('article', 'categories'));
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
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image',
            'categories' => 'required',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('article'))
            {
                Storage::disk('public')->makeDirectory('article');
            }
//            delete old post image
            if(Storage::disk('public')->exists('article/'.$article->image))
            {
                Storage::disk('public')->delete('article/'.$article->image);
            }
            $articleImage = Image::make($image)->resize(1600,1066)->save();
            Storage::disk('public')->put('post/'.$imageName,$articleImage);

        } else {
            $imageName = $article->image;
        }

        $article->user_id = Auth::id();
        $article->title = $request->title;
        $article->slug = $slug;
        $article->image = $imageName;
        $article->body = $request->body;
        if(isset($request->status))
        {
            $article->status = true;
        }else {
            $article->status = false;
        }
        $article->is_approved = true;
        $article->save();

        $article->categories()->sync($request->categories);
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Storage::disk('public')->exists('article/'.$article->image))
        {
            Storage::disk('public')->delete('article/'.$article->image);
        }
        $article->categories()->detach();
        $article->delete();
        return redirect()->back();
    }
}
