<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Jawharacategory;
use App\Models\Jawharacproduct;
use App\Models\SingleGlassJarPageContent;
use Illuminate\Http\Request;
use App\Models\SingleMetallicTinsPageContent;
use App\Models\SinglePetJarPageContent;
use App\Models\SinglePlasticBarrelsPageContent;
use App\Models\SinglePlasticPailsPageContent;
use App\Models\SinglePlasticPouchPageContent;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $posts = Post::latest()->paginate(10);
        $singleplasticbarrels = SinglePlasticBarrelsPageContent::where('jawharacproducts_id',$id)->get();
        $singleplasticpouchpage = SinglePlasticPouchPageContent::where('jawharacproducts_id',$id)->get();
        $singleplasticpailspage = SinglePlasticPailsPageContent::where('jawharacproducts_id',$id)->get();
        $singleglassjar = SingleGlassJarPageContent::where('jawharacproducts_id',$id)->get();
        $singlemetallictins = SingleMetallicTinsPageContent::where('jawharacproducts_id',$id)->get();
        $singlepetjar = SinglePetJarPageContent::where('jawharacproducts_id',$id)->get();
        $product = Jawharacproduct::find($id);
        $title=Jawharacproduct::where('id',$id)->first()->title;
        $categories = Jawharacategory::all();

        return view('front.singleproduct',compact('singleglassjar','product','title',
        'singlemetallictins'
        ,'singlepetjar'
        ,'singleplasticpailspage'
        ,'singleplasticpouchpage'
        ,'singleplasticbarrels'
        ,'categories'
    ));
    }
    public function categoryproduct($id)
    {
        // $posts = Post::latest()->paginate(10);
        $category = Jawharacategory::find($id);
        $title=Jawharacategory::where('id',$id)->first()->title;
        $categories = Jawharacategory::all();

        return view('front.categoryproduct', compact('category','title','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $categories = Jawharacategory::all();

        return view('front.contactus', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create(array_merge($request->only('title', 'description', 'body'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('posts.index')
            ->withSuccess(__('Post created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->only('title', 'description', 'body'));

        return redirect()->route('posts.index')
            ->withSuccess(__('Post updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->withSuccess(__('Post deleted successfully.'));
    }
}