@extends('home.uselay')

@section('content')


            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>基本信息</h3>
               <div class="col-md-8">
                    
                        <form class="form-light mt-20" role="form" enctype="multipart/form-data" method="post" action="{{ url('/home/user/update')}}">
                          {{ csrf_field() }}
                            @if(session('info'))
                                <div class="form-group">
                                    
                                        <p class="text-danger">{{session('info')}}</p>
                                    
                                </div>
                            @endif
                            
                            <div class="form-group">
                                <p><label>姓名</label></p>
                                <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="Your name">
                            </div>
                        
                           <div class="form-group">
                                <label>密码</label>
                                <input type="text" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label>头像</label>
                                <input type="file" name="avatar"  >
                            </div>
                        
                         
                            <button type="submit" class="btn btn-two">确认</button><p><br/></p>
                        </form>
                    </div>
              
            </section>
            <!-- /main -->

           

        </div>
    </section>
    <!-- /container -->
  
@endsection


 