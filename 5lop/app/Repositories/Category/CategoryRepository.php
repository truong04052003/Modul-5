<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

    function getModel()
    {
        return Category::class;
    }

    public function all($request)
    {
      
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