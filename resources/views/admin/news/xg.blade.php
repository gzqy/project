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
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/gg/xg')}}">
              {{ csrf_field() }}
       
             <input type="hidden" name="id" value="{{$data->first()->id}}">
               @foreach($data as $key=>$val)
                <div class="form-group">
                  <label for="exampleInputEmail1">广告名</label>
                 <input type="text" placeholder="{{$val->adname}}" name="adname"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">广告内容</label>
                 <input type="text" placeholder="{{$val->adkey}}" name="adkey"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">广告图像</label>
                  <input type="file" name="adlogo" id="exampleInputFile">

                  <p class="help-block">选择广告图像</p>
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