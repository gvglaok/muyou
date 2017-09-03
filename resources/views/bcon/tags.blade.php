@extends('layouts.bcon')

@section('content')


	<div role="tabpanel">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#first" aria-controls="first" role="tab" data-toggle="tab">Tag管理</a>
			</li>
			<li role="presentation">
				<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Tag层级管理</a>
			</li>
		</ul>
	
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="first">

				<form role="form" class="form-inline" method="post" action="{{ route('qa_tag') }}">
					{{ csrf_field() }}
					
					<div class="form-group">
						Tag快速添加：<input name="tags" class="form-control"  data-role="tagsinput" size="25" >
					</div>
					
					<div class="form-group">
						<button class="btn btn-secondary btn-single">OK</button>
					</div>
					
				</form>
				
				<br>
				
				<div class="panel panel-flat">
					  <div class="panel-heading">
							<h3 class="panel-title">未分类标签:</h3>
					  </div>
					  <div class="panel-body">
					  	
					 	@foreach($tags as $item)
						<form style="display:inline" action="{{ route( 'tags.destroy',['id'=>$item->id] ) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE')}}
							<div class="btn-group btn-group-sm" role="group" >
								
								<button id="tagBtn{{ $item->id }}" tid="{{ $item->id }}" tag="{{ $item->tag }}" type="button" class="btn btn-primary">{{ $item->tag }}</button>
								
								<button type="submit" class="btn btn-primary"> 	<i class="fa fa-times"></i>	</button>
								
							</div>
						</form>

						@endforeach
					  </div>
				</div>	

			</div>

			<div role="tabpanel" class="tab-pane" id="tab">
				2
			</div>
		</div>
	</div>
	
	<div class="dd">
	    <ol class="dd-list">
	        <li class="dd-item" data-id="1">
	            <div class="dd-handle">Item 1	
	            	<span class="pull-right"> 
	            		<a href="1"><i class="fa fa-edit"></i>修改</a> 
	            		<a href="2"><i class="fa fa-trash"></i>删除</a> 
	            	</span>
	            </div>
	        </li>
	        <li class="dd-item" data-id="2">
	            <div class="dd-handle">Item 2</div>
	        </li>
	        <li class="dd-item" data-id="3">
	            <div class="dd-handle">Item 3</div>
	            <ol class="dd-list">
	                <li class="dd-item" data-id="4">
	                    <div class="dd-handle">Item 4</div>
	                </li>
	                <li class="dd-item" data-id="5" data-foo="bar">
	                    <div class="dd-nodrag">Item 5</div>
	                </li>
	            </ol>
	        </li>
	    </ol>
	</div>
	<div class="dd" id="nestable-json"></div>

        <script>
        
        </script>

	
@endsection

@section('importCSS')


<link rel="stylesheet" type="text/css" href="/import/jquery.nestable.min.css">
<link rel="stylesheet" type="text/css" href="/import/bootstrap-tagsinput.css">

<div class="modal fade" id="updataTagModel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">标签修改</h4>
			</div>
			<div class="modal-body">
				
				<form id="updateTagForm" action="/bc/tags/" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">标签</label>
						<div class="col-sm-10">
							<input type="text" name="tag" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">标签描述</label>
						<div class="col-sm-10">
							<input type="text" name="info" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-2 control-label">显示名称</label>
						<div class="col-sm-10">
							<input type="text" name="sname" class="form-control" value="" required="required">
						</div>
					</div>			
					
			
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
							<button type="submit" class="btn btn-primary">保存修改</button>
						</div>
					</div>
				</form>
				
			</div>

		</div>
	</div>
</div>
@endsection
@section('importJS')
<script type="text/javascript" src="/import/jquery.nestable.min.js"></script>
<script type="text/javascript" src="/import/bootstrap-tagsinput.min.js"></script>

<script type="text/javascript">
	$(function() {
		//$('.dd').nestable({ /* config options */ });
		var json = '[{"id":1,"content":"11bar"},{"id":2,"content":"bar22"},{"id":3,"content":"bar333","children":[{"id":4},{"id":5,"content":"bar"}]}]';
        var options = {'json': json}
        $('#nestable-json').nestable(options);
		// tag updata
		$("[id^='tagBtn']").click(function(){
			var tid = $(this).attr("tid");
			var tag = $(this).attr("tag");
			$("#updateTagForm").attr('action',"/bc/tags/"+tid);
			$("[name='tag']").val(tag);
			$("#updataTagModel").modal('show');
		});

		
	});
</script>
@endsection