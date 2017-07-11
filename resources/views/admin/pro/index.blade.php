@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       问题反馈管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">问题反馈管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看问题反馈列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
            <form action="{{ url('/admin/user/index') }}"  method="get">
            <div class="row">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  @if(session('info'))
                    <div class="alert alert-danger">
                    {{ session('info') }}
                    </div>
                 @endif
                <tr>
                  <th>ID</th>
                  <th>问题标题</th>
                  <th>问题描述</th>
                
                </tr>
                </thead>
                <tbody>

                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td >{{ $val->id }}</td>
                  <td >{{ $val->title }}</td>
                  <td>{{ $val->content }}</td>
                 
                  <td><a href="{{ url('/admin/pro/del')}}/{{$val->id}}">处理</a></td>
                </tr>
               @endforeach
                </tbody>
                
              </table>
              
            </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div> 

@endsection


