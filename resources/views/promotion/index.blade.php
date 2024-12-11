@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Danh Sách Chương Trình Khuyến Mãi</h2>

    <!-- Hiển thị thông báo thành công hoặc lỗi nếu có -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Nút thêm mới chương trình khuyến mãi -->
    <div class="mb-3">
        <a href="{{ route('promotions.create') }}" class="btn btn-primary">Thêm Khuyến Mãi Mới</a>
    </div>

    <!-- Bảng danh sách khuyến mãi -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Khuyến Mãi</th>
                    <th>Loại Khuyến Mãi</th>
                    <th>Giảm Giá Cố Định</th>
                    <th>Giảm Giá %</th>
                    <th>Ngày Bắt Đầu</th>
                    <th>Ngày Kết Thúc</th>
                    <th class="text-center">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($promotions as $promotion)
                    <tr>
                        <td>{{ $promotion->id }}</td>
                        <td>{{ $promotion->name }}</td>
                        <td>
                            @if ($promotion->type == 'product')
                                Giảm giá theo sản phẩm
                            @else
                                Giảm giá toàn bộ đơn hàng
                            @endif
                        </td>
                        <td>{{ $promotion->discount_amount ? number_format($promotion->discount_amount, 0, ',', '.') . ' VNĐ' : '-' }}</td>
                        <td>{{ $promotion->discount_percent ? $promotion->discount_percent . '%' : '-' }}</td>
                        <td>{{ date('d/m/Y', strtotime($promotion->start_date)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($promotion->end_date)) }}</td>
                        <td class="text-center">
                            <!-- Nút chỉnh sửa -->
                            <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-sm btn-warning">Chỉnh Sửa</a>

                            <!-- Nút xóa -->
                            <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Không có chương trình khuyến mãi nào.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
