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
                      <th>管理</th>
                    </tr>
                     
                @foreach($data as $key=>$val) 
                <tr >             
                       <th  class="ids">{{ $val->name }}</th>
                       <th  class="ids"><a href="{{ url('/home/delfrd')}}/{{$val->id}}"> 删除 </a> ||<a href="{{ url('/home/addfrd')}}/{{$val->id}}"> 确定添加 </a></th>
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
@endsection


 