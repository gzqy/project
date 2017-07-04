@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       用户管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">用户管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看用户列表</h3>
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
                  <th>用户名</th>
                  <th>邮箱</th>
                  <th>头像</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{ $val->id }}</td>
                  <td class="name">{{ $val->name }}
                  </td>
                  <td>{{ $val->email }}</td>
                  <td><img style="width:35px;" src="/uploads/avatar/{{ $val->avatar }}"></td>
                  <td><a href="{{ url('/admin/user/edit')}}/{{$val->id}}">编辑</a> <a href="{{ url('/admin/user/delete')}}/{{$val->id}}">删除</a></td>
                </tr>
               @endforeach
                </tbody>
                
              </table>
              {{ $data->appends($request)->links() }}
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
@section('js')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$(".name").one('dblclick',aaa);
function aaa(){
		var td=$(this);


		//获取id
		var id=$(this).parent('.parent').find('.ids').html();
		//alert(id);
		//获取原来的值
		var oldName=$(this).html();
		//创建输入框
		var inp=$("<input type='text'>");
		inp.val(oldName);
		$(this).html(inp);
		//直接选中
		inp.select();
		inp.on('blur',function(){

		//获取新的名字
		var newName=inp.val();
		//执行ajax
		$.ajax('/admin/user/ajaxrename',{
			type:'POST',
			data:{id:id,name:newName},
			success:function(data){
				if(data=='0'){
					alert('用户名已存在');
					td.html(oldName);
				}else if(data=='1'){
					//获取当前内容
					td.html(newName);
				}else{
					alert('修改失败');
				}
				//alert(data);
			},
			error:function(data){
				alert('数据异常');
			},
			dataType:'json'
		 });
			td.one('dblclick',aaa);
		});
	};
</script>
@endsection
