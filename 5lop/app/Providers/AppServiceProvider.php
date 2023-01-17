<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/* ProductService */
use App\Services\ProductService;
use App\Service\Interfaces\ProductServiceInterface;
/* ProductRepository */
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface;

/* CategoryService */
use App\Services\Category\CategoryService;
use App\Services\Category\CategoryServiceInterface;

/* ProductRepository */
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

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
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);

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
