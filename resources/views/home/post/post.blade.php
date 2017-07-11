


   

            <!-- 占位符 -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/post/dopost')}}">
              {{ csrf_field() }}
               @if(session('info'))
              <div class="alert alert-danger">
              {{ session('info') }}
              </div>
            @endif
              <div class="form-group">
                  <label for="exampleInputName">标题</label>
                  <input type="text" value="ttt"  name="title"  class="form-control" id="exampleInputEmail1" >
                </div>
              <div class="box-body">
   
                <div class="form-group">
                  <label for="exampleInputEmail1">内容</label>
                  <input type="text" value="ccc" name="content" class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱">
                </div>
                
                 <!-- 隐藏域 -->
                  <input type="hidden" value="20" name="uid" >
                  <input type="hidden" value="1" name="tid" >
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
              </div>
            </form>
         
<!-- 占位符 -->
