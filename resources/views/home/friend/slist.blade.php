@extends('home.uselay')

@section('content')

  <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>好友列表</h3>
               <div class="col-md-8">
                    
                        
              {{ csrf_field() }}
                @if(session('info'))
                    <div class="form-group">
                        
                            <p class="text-danger">{{session('info')}}</p>
                        
                    </div>
                @endif
                

                 <div >
                 <table class="table table-bordered table-hover">
                     <tr class="parent">
                      <th>用户名</th>
                      <th>id</th>
                      <th>管理</th>
                    </tr>
                     
                @foreach($data as $key=>$val) 
                
                <tr class="parent">             
                    <th  class="name">{{ $val->name }}</th>
                     <th  class="iss">{{ $val->id }}</th>
                    <th  class="ids">
                   <!-- Button trigger modal -->
                      <button class="sx_btn btn btn-default">发私信</button>
                      <button style="display: none;" type="button" id="slist" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        模态框
                      </button>
                    </th>
                    
               </tr> 
                @endforeach
                  
                </div>
                </table>
                      
                       
                </div>
              
            </section>
            <!-- /main -->
            
           

        </div>
    </section>
    <!-- /container -->
     <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  <form action="/home/send" method="post">
                  {{ csrf_field() }}
                    私信：
                    <input type="text" name="content" >
                    <input id="form_id" type="hidden" name="fid" >
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">提交</button>
                  </form>
                </div>
              </div>
            </div>
          </div>


    @endsection
@section('js')
<script type="text/javascript">
$('.sx_btn').on('click', function(){
    $(this).next().click();
   var id = $(this).parents('.parent').find('.iss').html();
   $('#form_id').attr('value', id);
   
}); 

  
</script>
@endsection
  
 