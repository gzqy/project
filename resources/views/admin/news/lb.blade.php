@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       广告管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">广告管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">广告</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(session('info'))
              <div class="alert alert-danger">
              {{ session('info') }}
              </div>
            @endif
         
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>广告名</th>
                  <th>广告内容</th>
                  <th>广告图片</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $val)
                <tr class="parent">
                  <td class="ids">{{$val->id}}</td>
                  <td class="name">{{$val->adname}}</td>
                  <td>{{$val->adkey}}</td>                  
                  <td><img style="width:35px;" src="/uploads/avatar/{{ $val->adlogo}}"></td>                                               
                  <td><a href="{{url('/admin/gg/xg')}}">编辑</a> || <a href="{{url('/admin/gg/del')}}/{{$val->id}}">删除</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            

</script>
@endsection
