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