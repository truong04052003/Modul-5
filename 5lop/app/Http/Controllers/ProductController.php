<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductServiceInterface;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductServiceInterface $productService){
        $this->productService = $productService;
    }
  
    public function index(Request $request)
    {
        $items = $this->productService->all($request);
    }

  
    public function create()
    {
        //
    }

   
    public function store(StoreProductRequest $request)
    {
        //
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

 
    public function destroy(Product $product)
    {
        //
    }
}
