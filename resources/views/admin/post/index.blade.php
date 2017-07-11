@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       发帖管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">发帖管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看发帖列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(session('info'))
              <div class="alert alert-danger">
              {{ session('info') }}
              </div>
            @endif
            <form action="{{ url('/admin/user/index') }}"  method="get">
            <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                  <label>Select</label>
                  <select name="num" class="form-control">
                    <option value="10"
          @if(!empty($request['num']) && $request['num']=='10')
            selected='selected'
          @endif
                    >10</option>
                    <option value="15"
          @if(!empty($request['num']) && $request['num']=='15')
            selected='selected'
          @endif
                    >15</option>
                    <option value="20"
          @if(!empty($request['num']) && $request['num']=='20')
            selected='selected'
          @endif
                    >20</option>
                    <option value="50"
          @if(!empty($request['num']) && $request['num']=='50')
            selected='selected'
          @endif
                    >50</option>
                    <option value="100"
          @if(!empty($request['num']) && $request['num']=='100')
            selected='selected'
          @endif
                    >100</option>
                  </select>
              </div>
              </div>
              <div class="col-md-4 col-md-offset-6">
              <div class="input-group input-group-sm">
                  <input value="{{ $request['keywords'] or '' }}"  type="text" name="keywords" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">搜索</button>
                    </span>
                </div>
              </div>
             </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>标题</th>
                  <th>内容</th>
                  <th>uid</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{ $val->id }}</td>
                  <td class="name">{{ $val->title }}</td>
                  <td>{{ $val->uid }}</td>
                  
                  <td><a href="">编辑</a> <a href="">删除</a></td>
                </tr>
               @endforeach
                </tbody>
                
              </table>
              <!-- {{ $data->appends($request)->links() }} -->
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

