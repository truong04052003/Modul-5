<?php 
namespace App\Repositories;

interface ProductRepositoryInterface extends RepositoryInterface{
    function paginate($request);
}