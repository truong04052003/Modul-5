<?php
namespace App\Repositories\Eloquents;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\EloquentRepository;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

  
    public function paginate($request){
        $result = $this->model->paginate();
        return $result;
    }
}