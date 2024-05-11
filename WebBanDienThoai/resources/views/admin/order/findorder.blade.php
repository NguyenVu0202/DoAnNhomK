@extends('admin.dashboard')


<!-- Product section-->
@section('content')
<main class="category-form">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Tìm Kiếm Hóa Đơn</h2>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-5 form-wrapper">
                    <form action="{{ route('admin.adminSearchOrder') }}">
                        <input type="text" name="id">
                        <input type="submit" value="Tìm kiếm">
                    </form>
                </div>
                <table class="table table-striped table-hover">				
                    <thead>
                        <tr>                   
                            <th>ID_Order</th>
                            <th>ID_User</th>
                            <th>Price</th>
                            <th>Address</th>
                            <th>Created_at</th>
                        </tr>
                    </thead>					
                    <tbody>
                        @if($order)
                            <tr>
                                <td>{{ $order->id_order }}</td>
                                <td>{{ $order->id_user }}</td>
                                <td>{{ $order->total_order }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.adminDetailsOrderIndex', ['id_order' => $order->id_order]) }}" class="mx-1">Xem</a>
                                    <a href="{{ route('admin.adminDetailsOrderDelete', ['id_order' => $order->id_order]) }}">Xóa</a>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="6">Không tìm thấy mã hóa đơn này</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection