@extends('layouts.bcon')

@section('content')

<div class="panel panel-default">
      <div class="panel-heading">
            <h3 class="panel-title">修改用户</h3>
      </div>
      <div class="panel-body">
            <img src="/storage/{{ $user->userinfo->cover_img or ""}}" height="150px" class="img-thumbnail">
            <br>
            <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="uid" value="{{ $user->id }}">
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">邮箱</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">个人封面</label>
                    <div class="col-sm-10">
                        <input type="file" name="myimg" accept="image/gif,image/jpeg,image/jpg,image/png" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">角色</label>
                    <div class="col-sm-10">
                       
                       @foreach($roles as $item)
                       <span class="checkbox">
                           <label>
                               <input type="checkbox" name="role[]" value="{{$item -> id}}"
                               checked
                               >
                               {{$item -> name}}
                           </label>
                       </span>
                        @endforeach
                       
                    </div>
                </div>
                {{-- 修改密码<div class="form-group">
                    <label for="input" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-10">
                        <input type="password" name="pws" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">确认密码</label>
                    <div class="col-sm-10">
                        <input type="password" name="pwd_confirmation" class="form-control" value="">
                    </div>
                </div>  --}}

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
      </div>
</div>

@endsection