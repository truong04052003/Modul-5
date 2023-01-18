<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\Product\ProductServiceInterface;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }
  
    public function index(Request $request)
    {
        $products = $this->productService->all($request);
        // dd($products);
        return view('admin.products.index',compact('products'));
    }
  
    public function create()
    {
        $products = Product::all();
        return view('admin.products.create', compact('products'));
    }

   
    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('products.index');
    }

  
    public function show(Product $product)
    {
        //
    }

   
    public function edit(Product $product)
    {
        //
    }

 
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

 

    }

 
