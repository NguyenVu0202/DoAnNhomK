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
                            <h2>Quản Lý Hóa Đơn</h2>
                        </div>
                    </div>
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
					@foreach($order as $orders)
                        <tr>
                            <td>{{ $orders->id_order }}</td>
                            <td>{{ $orders->id_user }}</td>
                            <td>{{ $orders->total_order }}</td>
                            <td>{{ $orders->address }}</td>
                            <td>{{ $orders->created_at }}</td>
                            <td>
								<a href="{{ route('admin.adminDetailsOrderIndex', ['id_order' => $orders->id_order]) }}" class="mx-1">Xem</a>
                                <a href="{{ route('admin.adminDetailsOrderDelete', ['id_order' => $orders->id_order]) }}">Xóa</a>
                            </td>
                        </tr>
					@endforeach
                    </tbody>
                </table>
            </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $order->links() }}</div>
        <div class="col-md-5"></div>
        </div>
        </div>
    </div>
</main>
@endsection