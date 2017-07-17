@extends('admin.layout')

@section('content')
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        添加友情链接
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页 </a></li>
        <li><a href="#">添加友情链接</a></li>
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
              <h3 class="box-title">快速添加</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="get" action="{{ url('/admin/py/xg')}}">
              {{ csrf_field() }}
                
                <input type="hidden" name="id" value="">
                <div class="form-group">
                  <label for="exampleInputEmail1">友情链接名</label>
                  <input type="text"  name="linkname" class="form-control" id="exampleInputEmail1" placeholder="请输入友情链接名称">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">友情链接地址</label>
                  <input type="text" name="url" class="form-control" id="exampleInputPassword1" placeholder="请输入友情链接地址">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword2">友情链接描述</label>
                  <input type="text" name="content" class="form-control" id="exampleInputPassword2" placeholder="请输入友情链接描述">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword2">友情连接排序</label>
                  <input type="text"  name="ordernum" class="form-control" id="exampleInputPassword2" placeholder="请输入友情链接序号">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
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