@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       友情链接列表
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">友情链接列表</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">友情链接列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="{{ url('/admin/py/list') }}"  method="post">
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>友情链接名称</th>
                  <th>友情链接地址</th>
                  <th>友情链接描述</th>
                  <th>友情链接排序</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td>{{ $val->id }}</td>
                  <td>{{ $val->linkname }}</td>
                  <td>{{ $val->url }}</td>                  
                  <td>{{$val->content}}</td>
                  <td>{{ $val->ordernum }}</td>
                  <td><a href="{{url('/admin/py/xg')}}/{{$val->id}}">编辑</a>||<a href="{{url('/admin/py/del')}}/{{$val->id}}">删除</a></td>
                </tr>
               @endforeach
              
                </tbody>
                
              </table>
            

</script>
@endsection
