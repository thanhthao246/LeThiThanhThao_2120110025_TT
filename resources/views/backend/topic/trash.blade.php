@extends('layouts.admin')
@section('title','tất cả danh mục sản phẩm')
@section('conten')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TẤT CẢ DANH MỤC</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></a></li>
              <li class="breadcrumb-item active">Tất cả danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <button class="btn-sm btn-danger" type="submit">
                Xóa
              </button>
            </div>
              <div class="col-md-6 text-right">
                <a href="{{route('category.index')}}" class="btn btn-sm btn-info">
                  Quay về danh sách
                </a>
              </div>
          </div>
        </div>
        <div class="card-body">
          @includeIf('backend.message_alert')
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width:20px;" class="text-center">#</th>
                <th style="width:90px;" class="text-center">Hình ảnh</th>
                <th>tên danh mục</th>
                <th>slug</th>
                <th style="width:160px;" class="text-center">Ngày đăng</th>
                <th style="width:170px;" class="text-center">Chức năng</th>
                <th style="width:20px;" class="text-center">Id</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list_category as $category)
                   
              <tr>
                <td class="text-center">
                  <input type="checkbox">
                </td>
                <td>
                  <img class="img-fluid" src="{{asset('images/category/'.$category->image)}}" alt="{{$category->image}}">
                </td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td class="text-center">{{$category->created_at}}</td>
                <td class="text-center">
                  <a href="{{ route('category.restore', ['category'=>$category->id])}}" class="ntn btn-sm btn-success">
                    <i class="fas fa-plus"></i>                  </a>
                  <a href="{{ route('category.destroy', ['category'=>$category->id])}}" class="ntn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
                <td class="text-center">{{$category->id}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
         
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection