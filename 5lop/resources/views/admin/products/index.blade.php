<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <div class="container-fluid px-4">
    <h1>Danh Mục Sản Phẩm</h1>
    {{-- Tìm kiếm --}}
    <div class="col-6">
      <form class="form-inline" action="" >
        <div class="row">
          <div class="col-8">
            <div class="form-group">
              <input name="key" class="form-control"placeholder="Tìm kiếm sản phẩm">
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-default bg-info">Tìm kiếm</button>
          </div>
        </div>
      </form>
    </div> <br>
    <table class="table">
      <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
      <a href="" class="btn btn-primary">Thùng rác</a> 
      <a href="" class="btn btn-primary">Xuất file</a>
      <thead>
        
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Giá</th>
          <th scope="col">Thể loại</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Ảnh</th>
          <th scope="col" class="text-right">Hành động</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $key => $product)
        <tr>
          <th scope="row">{{++$key}}</th>
          <th scope="row">{{$product->name}}</th>
          <th scope="row">{{number_format($product->price)}} VNĐ</th>
          <th scope="row">{{$product->category_id}}</th>
          <th scope="row">{{$product->description}}</th>
          <td>
            <img src="{{ asset('admin/uploads/'. $product->image) }}" alt="" width="100px" height="100px">
          </td>
          <td class="text-right">
            <form action="{{route('products.destroy',[$product->id])}}" method="post">
              @method('DELETE')
              @csrf
          <a class="btn btn-warning" href="{{ route('products.show', $product->id) }}">Chi tiết</a>
              <a href="{{route('products.edit',[$product->id])}}" class="btn btn-success">Edit</a>
              <button onclick="return confirm('Bạn có chắc chắn xóa không?');" class="btn btn-danger">Xóa</button>
             
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="col-6">
      <div class=" d-flex justify-content-around">
        {{-- {{ $items->appends(request()->input())->links() }} --}}
      </div>
    </div>
  </div>
</body>

</html>
