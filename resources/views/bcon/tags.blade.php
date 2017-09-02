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
				
				文章Tag:
				<span class="label label-info">Label 1 
					 &times;
				</span>
				<span class="label label-info">Label 2
					 &times; 
				</span>
				<span class="label label-info">Label 3</span>
				<span class="label label-info">Label 4</span>
				<span class="label label-info">Label 5</span>

			</div>

			<div role="tabpanel" class="tab-pane" id="tab">
				
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


	
@endsection

@section('importCSS')
<link rel="stylesheet" type="text/css" href="/import/jquery.nestable.min.css">
<link rel="stylesheet" type="text/css" href="/import/bootstrap-tagsinput.css">
@endsection
@section('importJS')
<script type="text/javascript" src="/import/jquery.nestable.min.js"></script>
<script type="text/javascript" src="/import/bootstrap-tagsinput.min.js"></script>

<script type="text/javascript">
	$(function() {
		$('.dd').nestable({ /* config options */ });
	});
</script>
@endsection