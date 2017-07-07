@extends('admin.layout')

@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        网站配置修改
        <small>修改</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页 </a></li>
        <li><a href="#">网站配置修改</a></li>
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
              <h3 class="box-title">修改</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/wzxg')}}">
              {{ csrf_field() }}
       

               @foreach($data as $key=>$val)
                <div class="form-group">
                  <label for="exampleInputEmail1">网站名</label>
                 <input type="text" placeholder="{{$val->webname}}" name="webname"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">关键字</label>
                 <input type="text" placeholder="{{$val->keyword}}" name="keyword"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">LOGO</label>
                  <input type="file" name="logo" id="exampleInputFile">

                  <p class="help-block">选择你的LOGO</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">网站版权</label>
                 <input type="text" placeholder="{{$val->copy}}" name="copy"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">网站状态</label>
                 <input type="text" placeholder="{{$val->status}}" name="status"/>
                </div>
                @endforeach
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