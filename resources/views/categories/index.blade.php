@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Danh sách danh mục</h1>

        {{-- Nút thêm danh mục --}}
        <div class="d-flex justify-content-between mb-4">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Thêm danh mục</a>
        </div>

        {{-- Hiển thị thông báo lỗi nếu có --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Hiển thị thông báo thành công nếu có --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Bảng danh sách danh mục --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>STT</th> <!-- Số thứ tự -->
                        <th>Tên danh mục</th>
                        <th>Hình ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td> <!-- Hiển thị số thứ tự -->
                            <td>{{ $category->name }}</td>
                            <td>
                                <img src="{{ $category->image ? asset('storage/' . $category->image) : 'https://via.placeholder.com/100' }}" alt="{{ $category->name }}" class="img-thumbnail" width="100">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
