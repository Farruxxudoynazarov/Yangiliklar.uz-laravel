<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Str;
use App\Models\Tag;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // dd($posts->image);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $categories = Category::all();

        $tags=Tag::all();


        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'body_uz' => 'required',
            'body_ru' => 'required',
            'category_id' => 'required'
        ]);
        $requestData= $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('site/image/posts', $image_name);
            $requestData['image'] =$image_name;
        }
        
        // dd($requestData);
        // $requestData['slug'] = Str::slug($request->title_uz);
        $post = Post::create($requestData);

        $post->tags()->attach($request->tags);
        
        return redirect()->route('admin.post.index')->with('success', 'Post created succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {      
        
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'body_uz' => 'required',
            'body_ru' => 'required',
            'category_id' => 'required'
        ]);
        $requestData= $request->all();
        if(empty($request->is_special)){
            $requestData['is_special']=0; 
        };

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('site/image/posts', $image_name);
            $requestData['image'] =$image_name;
        }


        // $requestData['slug'] = Str::slug($request->title_uz);

        $post->update($requestData);
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.post.index')->with('success', 'Post Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.post.index');
    }

    public function upload(Request $request){
        if($request->hasFile('upload')){

            $filename = time().'-'.$request->file('upload')->getClientOriginalName();
            $request->file('upload')->move('site/images/posts', $filename);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('site/images/posts/.$filename');
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg') <script/>";
            @header('Content-type: text/html;charset=utf-8');
            echo $response;
        }
    }
}
