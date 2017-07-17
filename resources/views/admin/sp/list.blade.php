@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       商品管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">商品管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">商品</h3>
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
                  <th>商品名</th>
                  <th>商品价格</th>
                  <th>商品描述</th>
                  <th>商品图片</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dd as $key => $val)
                <tr class="parent">
                  <td class="ids">{{$val->id}}</td>
                  <td class="name">{{$val->name}}</td>
                  <td>{{$val->pirce}}</td>                  
                  <td>{{$val->monut}}</td>                  
                  <td><img style="width:35px;" src="/uploads/pricute/{{ $val->pricute}}"></td>                                               
                  <td><a href="{{url('/admin/sp/del')}}/{{$val->id}}">下架</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            

</script>
@endsection
