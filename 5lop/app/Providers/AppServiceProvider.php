<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/* ProductService */
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
/* ProductRepository */
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;



/* CategoryService */
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

use App\Services\Category\CategoryService;
use App\Services\Category\CategoryServiceInterface;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        /*
            Các interface không thể dùng để khởi tạo đối tượng
            Binding interface với một lớp giúp chúng ta có thể dùng được
            Tắt dòng binding là thấy tai hại liền :)
        */
        // đăng ký product
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(ProductServiceInterface::class, ProductService::class);

        // đăng ký category
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
