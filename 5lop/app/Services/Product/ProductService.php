<?php

namespace App\Services\Product;
use App\Repositories\ProductRepositoryInterface;
use App\Services\ProductServiceInterface;
use App\Services\BaseService;

class ProductService extends BaseService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface  $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /* Triển khai các phương thức trong ProductServiceInterface */
    public function all($request){
        return $this->productRepository->all($request);
    }
    public function find($id){
        return $this->productRepository->find($id);
    }
    public function store($request){
        return $this->productRepository->store($request);
    }
    public function update($request, $id){
        return $this->productRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->productRepository->destroy($id);
    }
}