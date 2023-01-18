<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <div class="container-fluid px-4">
        {{-- @section('content') --}}
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <h1>Thêm sản phẩm</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Giá</label>
                    <input type="text" class="form-control" name="price">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="form-label">Thể loại</label>
                    <select class="form-select" name="category_id">
                        <?php foreach ($products as $category) : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php endforeach; ?>
                    </select> <br>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ảnh</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <input type="text" class="form-control" name="description">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger btn-xs" href="{{ route('products.index') }}">Back</a>
            </form>


        </div>
    </body>

    </html>