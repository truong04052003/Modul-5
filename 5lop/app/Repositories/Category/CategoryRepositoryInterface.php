<?php 
namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface extends RepositoryInterface{
    function paginate($request);
}