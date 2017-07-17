@extends('admin.layout')

@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品添加
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">商品添加</a></li>
        <li class="active">添加</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">添加</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/dosp')}}">
              {{ csrf_field() }}
       
              <input type="hidden" name="id" value="">
               

                <div class="form-group">
                  <label for="exampleInputEmail1">商品名称</label>
                 <input type="text" name="name"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">商品价格</label>
                 <input type="text"  name="pirce"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">商品描述</label>
                 <input type="text"  name="monut"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">商品图片</label>
                  <input type="file" name="pricute" id="exampleInputFile">

                  <p class="help-block">选择商品图片</p>
                </div>
              </div>
              <!-- /.box-body -->


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        



        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection