@extends('layouts.bcon') @section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">用户列表</h3>
		<div class="panel-options">

			<a data-toggle="modal" href='#userAddModel'>
				<i class="fa fa-plus-circle"></i>
				添加用户
			</a>
			<a href="{{route('role.index')}}">
				管理角色
			</a>
		</div>
	</div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th> </th>
				<th> 用户名 </th>
				<th> 邮箱 </th>
				<th> 创建时间 </th>
				<th> 修改时间 </th>
				<th> 操作 </th>

			</tr>
		</thead>
		<tbody>
			@foreach($users as $item) 
			<tr>
				<td> </td>
				<td> {{$item->name}} </td>
				<td> {{$item->email}} </td>
				<td> {{$item->created_at}} </td>
				<td> {{$item->updated_at}} </td>
				<td> 
					<a href="{{ route('user.edit',['id'=>$item->id]) }}" class="btn btn-secondary btn-sm btn-icon icon-left">
					修改
					</a> 

					<a href="{{ route('user.delete',['id'=>$item->id]) }}" class="btn btn-danger btn-sm btn-icon icon-left">
					删除
					</a>

					{{--  <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					查看
					</a>   --}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $users->links() }}

</div>

@endsection @section('importCSS')

<div class="modal fade" id="userAddModel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">添加用户</h4>
			</div>
			<div class="modal-body">

				<form action="{{ route('user.add') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">用户名</label>
						<div class="col-sm-10">
							<input type="text" name="name" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">邮箱</label>
						<div class="col-sm-10">
							<input type="email" name="email" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">个人封面</label>
						<div class="col-sm-10">
							<input type="file" name="myimg" accept="image/gif,image/jpeg,image/jpg,image/png" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">密码</label>
						<div class="col-sm-10">
							<input type="password" name="pws" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">确认密码</label>
						<div class="col-sm-10">
							<input type="password" name="pwd_confirmation" class="form-control" value="" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">提交</button>
						</div>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection