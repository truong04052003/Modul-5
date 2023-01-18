<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\Interfaces\PostServiceInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $items = $this->postService->all($request);
        // dd($items);
        return view('admin.posts.index', compact('items'));
    }


    public function create()
    {
        return view('admin.posts.create');
    }


    public function store(StorePostRequest $request)
    {
        
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'price' => 'required',
        // ], [
        //     'name.required' => 'Không được để trống',
        //     'price.required' => 'Vui lòng nhập giá',

        // ]);
        // if ($validator->fails()) {
        //     return redirect()->route('posts.create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        $this->postService->store($request);
        return redirect()->route('posts.index');
    }


    public function show( $id)
    {
        // $postsshow = Post::findOrFail($id);
        // return view('admin.posts.show', compact('postshow'));
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }


    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $post->name = $request->name;
        $post->price = $request->price;      
        $post->save();
        return redirect()->route('posts.index');
    }


    public function destroy(Post $post)
    {
        //
    }
}
