<?php 
namespace App\Repositories;

interface CategoryRepositoryInterface extends RepositoryInterface{
    function paginate($request);
}