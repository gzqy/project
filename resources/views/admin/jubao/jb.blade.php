@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       用户举报列表
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">用户举报列表</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">用户举报列表</h3>
            </div>
            <!-- /.box-header -->


            <div class="box-body">
            <form action="{{ url('/admin/del')}}"  method="post">

             @if(session('info'))
              <div class="alert alert-danger">
              {{ session('info') }}
              </div>
            @endif


            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>举报人姓名</th>
                  <th>举报内容</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td>{{ $val->id }}</td>
                  <td>{{ $val->name }}</td>
                  <td>{{ $val->content }}</td>                           
                  <td><a href="{{url('/admin/del')}}/{{$val->id}}">删除</a></td>
                </tr>
               @endforeach
              
                </tbody>
                
              </table>
            

</script>
@endsection
