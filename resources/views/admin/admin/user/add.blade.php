@extends('layout.index');
@section('title','用户添加');
@section('content');
  <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">用户添加</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="panel-body">
        <div class="row">
		@if (count($errors) > 0)
		<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
		</ul>
		</div>
		@endif
            <div class="col-lg-6">
                <form role="form" action="{{url('/admin/user/insert')}}" method="post" enctype="multipart/form-data">

              <!--   <div class="alert alert-danger alert-dismissable">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a class="alert-link" href="#">Alert Link</a>.
              
              </div> -->
                    <div class="form-group">
                        <label>用户名</label>
                        <input type="text" name="username" value="{{old('username')}}" class="form-control">
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>密码</label>
                        <input type="password" name="password"  class="form-control">
                        <p class="help-block"></p>
                    </div>
                     <div class="form-group">
                        <label>确认密码</label>
                        <input type="password" name="repassword" class="form-control">
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>邮箱</label>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control">
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>手机号</label>
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>头像上传</label>
                        <input type="file" name="pic">
                    </div>
                    {{csrf_field()}}
               		<button class="btn btn-success" type="submit">提交</button>
               		<button class="btn btn-danger" type="reset">重置</button>
                </form>



            </div>


           
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
    
@endsection