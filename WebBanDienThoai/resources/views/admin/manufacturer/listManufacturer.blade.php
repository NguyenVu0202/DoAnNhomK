@extends('admin.dashboard')


<!-- Product section-->
@section('content')
<main class="listmanufacturer-form">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Quản Lý Hãng Sản Xuất</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('manufacturer.addmanufacturer') }}" class="btn btn-success"
                                data-toggle="modal"><i class="bi bi-pencil"></i><span>Thêm Hãng sản xuất</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Mã Hãng</th>
                            <th>Tên Hãng</th>
                            <th>Ảnh Hãng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($manufacturers as $manufacturer)
                        <tr>
                            <td>{{ $manufacturer->id }}</td>
                            <td>{{ $manufacturer->name_manufacturer }}</td>
                            <td><img src="{{ asset('uploads/manufacturerimage/' . $manufacturer->image_manufacturer) }}"
                                    alt="" style="width: 40%;height: 100px;margin: 20px;"></td>
                            <td>
                                <a href="{{ route('manufacturer.updateindex', ['id' => $manufacturer->id_manufacturer]) }}"
                                    class="mx-1">Sửa</a>
                                <a
                                    href="{{ route('manufacturer.deletemanufacturer', ['id' => $manufacturer->id_manufacturer]) }}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $manufacturers->links() }}</div>
            <div class="col-md-5"></div>
        </div>
    </div>
</main>
@endsection