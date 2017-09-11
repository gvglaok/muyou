@extends('layouts.bcon') @section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">角色列表</h3>
		<div class="panel-options">
			<a data-toggle="modal" href='#roleAddModel'>
				<i class="fa fa-plus-circle"></i>
				添加角色
			</a>
			<a href=" ">
				管理角色
			</a>
		</div>
	</div>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>check</th>
				<th>角色</th>
				<th>显示名称</th>
				<th>描述</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach($roles as $item)
			<tr>
				<td>
					<input type="checkbox" value="">
				</td>
				<td> {{$item -> name}} </td>
				<td> {{$item -> display_name}}</td>
				<td>{{$item -> description}}</td>
				<td>
					<a href="{{ route('role.update',['id'=>$item->id]) }}" class="btn btn-secondary btn-sm btn-icon icon-left">
					修改
					</a> 
					<a href="{{ route('role.destroy',['id'=>$item->id]) }}" class="btn btn-danger btn-sm btn-icon icon-left">
					删除
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>

@endsection

@section('importCSS')
	

<div class="modal fade" id="roleAddModel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">添加角色</h4>
			</div>
			<div class="modal-body">

				<form action="{{ route('role.store') }}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">角色名(英文)</label>
						<div class="col-sm-10">
							<input type="text" name="name" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">显示名称</label>
						<div class="col-sm-10">
							<input type="text" name="dname" class="form-control" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">描述</label>
						<div class="col-sm-10">
							<input type="text" name="description" class="form-control" value="">
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