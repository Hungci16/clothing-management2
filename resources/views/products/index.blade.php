@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Quản lý sản phẩm</h1>

        {{-- Hiển thị thông báo thành công hoặc lỗi --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Nút thêm sản phẩm mới --}}
        <div class="d-flex justify-content-between mb-4">
            <a href="{{ route('products.create') }}" class="btn btn-primary">+ Thêm sản phẩm mới</a>
            <!-- <a href="#" class="btn btn-secondary">Xem chi tiết</a> -->
        </div>

        {{-- Hiển thị bảng chi tiết sản phẩm --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Size</th>
                        <th>Màu</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng trong kho</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="text-center">
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->product_code }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->color }}</td>
                            <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/100' }}" width="80" class="img-thumbnail" alt="{{ $product->name }}">
                            </td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    {{-- Nút sửa --}}
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                    {{-- Nút xóa --}}
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                    {{-- Thêm vào giỏ hàng --}}
                                    <!-- <form action="{{ route('cart.add', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <div class="input-group input-group-sm">
                                            <input type="number" name="quantity" class="form-control" value="1" min="1" style="width: 80px;">
                                            <button type="submit" class="btn btn-success">Thêm</button>
                                        </div>
                                    </form> -->
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection