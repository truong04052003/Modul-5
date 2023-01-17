<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\Interfaces\PostServiceInterface;

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
    }

  
    public function create()
    {
        //
    }


    public function store(StorePostRequest $request)
    {
        
    }

   
    public function show(Post $post)
    {
        //
    }

  
    public function edit(Post $post)
    {
        //
    }

  
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

  
    public function destroy(Post $post)
    {
        //
    }
}
