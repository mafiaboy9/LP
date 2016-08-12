@extends('layout.index');
@section('title','用户列表页')
@section('content');
 <div class="col-lg-12"> 
   <div class="row"> 
    <div class="col-lg-12"> 
     <h1 class="page-header">用户列表</h1> 
    </div> 
    <!-- /.col-lg-12 --> 
   </div> 
   <div class="panel panel-default"> 
    <div class="panel-heading">
     
    </div> 
    <!-- /.panel-heading --> 
    <div class="panel-body"> 
     <div class="dataTable_wrapper"> 
      <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
       
    <form action="{{url('/admin/user/index')}}" method="get">
       <div class="row">
            <div class="col-sm-6">
                <div class="dataTables_length" id="dataTables-example_length">
                  <label>显示 <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                      <option value="5" 
                        @if(!empty($request['num']) && $request['num'] == 5)
                            selected 
                        @endif
                      >5</option>

                      <option value="10"
                            @if(!empty($request['num']) && $request['num'] == 10)
                                selected 
                            @endif
                      >10</option>
                      <option value="15"
                            @if(!empty($request['num']) && $request['num'] == 15)
                                selected 
                            @endif
                      >15</option>
                      <option value="25"
                            @if(!empty($request['num']) && $request['num'] == 25)
                                selected 
                            @endif
                      >25</option>
                  </select>条数</label>
                </div>
            </div>
        <div class="col-sm-6">
            <div id="dataTables-example_filter" class="dataTables_filter">
              <label>关键字搜索:<input 
                @if(!empty($request['keywords']))
                    value="{{$request['keywords']}}"
                @endif
               name="keywords" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example" /></label>
              <button class="btn btn-success">搜索</button>
             </div>
        </div>
    </form>
       </div>
    

       <div class="row">
        <div class="col-sm-12">
         <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info"> 
          <thead> 
           <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 177px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 199px;" aria-label="Browser: activate to sort column ascending">用户名</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 180px;" aria-label="Platform(s): activate to sort column ascending">邮箱</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 153px;" aria-label="Engine version: activate to sort column ascending">状态</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 111px;" aria-label="CSS grade: activate to sort column ascending">头像</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 111px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
           </tr> 
          </thead> 
          <tbody> 
          @foreach($users as $k => $v)
           <tr class="gradeA odd" role="row"> 
            <td class="sorting_1 sid">{{$v->id}}</td> 
            <td>{{$v->username}}</td> 
            <td>{{$v->email}}</td> 
            <td class="center">{{str_replace([1,2],['未激活','激活'],$v->status)}}</td> 
            <td class="center"><img width="50px" src="{{$v->pic}}" alt=""></td> 
            <td class="center">

            <a href="/admin/user/edit?id={{$v->id}}" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
            改</a>
            
            <button class="btn btn-danger btn-circle btn_delete" type="button" ><i class="fa fa-heart"></i>
            删</button>             
            </td>

           </tr>
           @endforeach    
          </tbody> 
         </table>
        </div>
       </div>
       <div class="row">
       
        <div class="col-sm-6">
         <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">  
          {!! $users->appends($request)->render() !!}

         </div>
        </div>
       </div>
      </div> 
     </div> 
     <!-- /.table-responsive --> 
    </div> 
    <!-- /.panel-body --> 
   </div> 
   <!-- /.panel --> 
  </div>
@endsection
    
@section('myjs')
    <script type="text/javascript">
    //获取删除按钮绑定单击事件

        $('.btn_delete').click(function(){
           //获取id
           var id = $(this).parents('tr').find('.sid').html();
           var btn = $(this);

           /*
            1.报错 post请求 在layout里添加meta标签
             <meta name="csrf-token" content="{{ csrf_token() }}">

            2.设置全局配置如下

           */
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           //发送ajax post请求
           $.post('{{url("/admin/user/delete")}}',{id:id},function(data){
            if(data == 1){
                btn.parents('tr').remove();
            }

           });

        })
    </script>
@show
