@extends('cus.layout') @section('content')

<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2  col-lg-6 col-lg-offset-3">

            <form action="{{ route('user.login') }}" method="POST" class="reg_box form-horizontal" role="form">
                <br>
                {{ csrf_field()}}
                <legend>  &nbsp;&nbsp;&nbsp; 😃  沐游登录 </legend>

                <div class="form-group">
                    <lable class="control-lable col-sm-4">邮箱</lable>
                    <div class="col-sm-6 ">
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <lable class="control-lable col-sm-4">密码</lable>
                    <div class="col-sm-6 ">
                        <input type="password" name="pwd" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">确认</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>

@endsection