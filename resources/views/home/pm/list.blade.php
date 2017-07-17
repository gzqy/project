@extends('home.uselay')

@section('content')

  <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>私信列表</h3>
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
                       <th>发送者</th>
                      <th>内容</th>
                      <th>管理</th>
                    </tr>
                     
                @foreach($data as $key=>$val) 
                <tr > 
                    <th  class="ids">{{ $val->name }}</th>            
                    <th  class="iss">{{ $val->content }}</th>
                    <th  class="iss"><a href="{{ url('home/delpm')}}/{{ $val->id }}">删除</a></th>
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
   


    @endsection
  



 