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
                            <h2>Quản Lý Danh Mục</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('category.createCategory') }}" class="btn btn-success" data-toggle="modal"><i
                                    class="bi bi-pencil"></i><span>Thêm Danh Mục</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">				
                    <thead>
                        <tr>                   
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>					
                    <tbody>
					@foreach($categories as $cates)
                        <tr>
                            <td>{{ $cates->id_category }}</td>
                            <td>{{ $cates->name_category }}</td>
                            <td>
								<a href="{{ route('category.updateindex', ['id' => $cates->id_category]) }}" class="mx-1">Sửa</a>
                                <a href="{{ route('category.deleteCategory', ['id' => $cates->id_category]) }}">Xóa</a>
                            </td>
                        </tr>
					@endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $categories->links() }}</div>
            <div class="col-md-5"></div>
        </div>
    </div>
</main>
@endsection