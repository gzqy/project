@extends('admin.layout')

@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        友情链接修改
        <small>修改</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页 </a></li>
        <li><a href="#">友情链接修改</a></li>
        <li class="active">修改</li>
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
              <h3 class="box-title">修改</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
           
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/py/doxg')}}/{{ $data->id }}">
              {{ csrf_field() }}
                



                     
                <div class="form-group">
                  <label for="exampleInputEmail1">友情链接名称</label>
                 <input type="text" value="{{ $data->linkname }}" placeholder="" name="linkname"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">友情链接地址</label>
                 <input type="text" value="{{ $data->url }}" placeholder="" name="url"/>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">友情链接内容</label>
                 <input type="text" value="{{ $data->url }}" placeholder="" name="content"/>
                </div>   
                <div class="form-group">
                  <label for="exampleInputPassword1">友情链接序号</label>
                 <input type="text" value="{{ $data->ordernum }}" placeholder="" name="ordernum"/>
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