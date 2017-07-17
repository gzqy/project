@extends('admin.layout')

@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        举报面板
        <small>举报</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页 </a></li>
        <li><a href="#">举报面板</a></li>
        <li class="active">举报</li>
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
              <h3 class="box-title">快速举报</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="get" action="{{ url('/admin/jb')}}">
              {{ csrf_field() }}
                
                <input type="hidden" name="id" value="">
                <div class="form-group">
                  <label for="exampleInputEmail1">您的姓名</label>
                  <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder="请输入您的姓名">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">您举报人的姓名</label>
                  <input type="text" name="jbname" class="form-control" id="exampleInputPassword1" placeholder="请输入您举报人的姓名">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword2">您举报的内容</label>
                  <input type="text" name="content" class="form-control" id="exampleInputPassword2" placeholder="请输入您举报的内容">
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