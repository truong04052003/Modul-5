<?php
namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

  
    public function all($request){
        $result = $this->model->all();
        return $result;
    }
 
    public function store($request)
    {
        $products = $this->model;
        $products->name = $request['name'];
        $products->price = $request['price'];
        $products->category_id = $request['category_id'];
        $products->description = $request['description'];
        $products->image = $request['image'];
        $products->save();

    }
    public function update($id, $data)
    {

    }
    public function delete($id)
    {

    }
    public function getTrashed()
    {

    }
    public function restore($id)
    {

    }
    public function force_destroy($id)
    {
        
    }
}