@extends('home.uselay')

@section('content')

            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>基本信息</h3>
               <div class="col-md-8">
                    
                        <form class="form-light mt-20" role="form" enctype="multipart/form-data" method="post" action="{{ url('/home/user/dupdate')}}">
                          {{ csrf_field() }}
                            @if(session('info'))
                                <div class="form-group">
                                    
                                        <p class="text-danger">{{session('info')}}</p>
                                    
                                </div>
                            @endif
                            <div class="form-group">
                                <p><label>qq</label></p>
                                <input type="text" name="qq"  value="{{ $data->qq }}" class="form-control" placeholder="qq">
                            </div>
                            <div class="form-group">
                                <p><label>签名</label></p>
                                <input type="text" name="sign" value="{{ $data->sign }}" class="form-control"  placeholder="签名">
                            </div>
                            <div class="form-group">
                                <p><label>家庭地址</label></p>
                                <input type="text" name="address" value="{{ $data->address }}"class="form-control" placeholder="家庭地址">
                            </div>
                            <div class="form-group">
                                <p><label>自我介绍</label></p>
                                <input type="text" name="myself"  value="{{ $data->myself }}" class="form-control" placeholder="自我介绍">
                            </div>
                             <div class="form-group">
                                <p><label>学历</label></p>
                                <input type="text" name="edu" value="{{ $data->edu }}" class="form-control" placeholder="学历">
                            </div>
                             <div class="form-group">
                                <p><label>性别</label></p>
                                
                                <label><input name="sex"  type="radio" value="m" />男 </label> 
                                <label><input name="sex"  type="radio" value="w" />女 </label> 
  
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


 