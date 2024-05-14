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
                            <a href="{{ route('post.indexaddpost') }}" class="btn btn-success" data-toggle="modal"><i
                                    class="bi bi-pencil"></i><span>Thêm Bài Viết</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Mã bài viết</th>
                            <th>Tên bài viết</th>
                            <th>Nội dung bài viết</th>
                            <th>Tên ảnh</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id_post }}</td>
                            <td>{{ $post->title_post }}</td>
                            <td>{{ $post->content_post }}</td>
                            <td>
                                <ul>
                                    @foreach($postImages[$post->id_post] as $imageName)
                                    <li>{{ $imageName }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="{{ route('post.indexupdatepost', ['id' => $post->id_post]) }}" class="mx-1">Sửa</a>
                                <a
                                    href="{{ route('post.deletepost', ['id' => $post->id_post]) }}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2"></div>
            <div class="col-md-5"></div>
        </div>
    </div>
</main>
@endsection