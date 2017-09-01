@extends('layouts.bcon')

@section('content')

	<div class="panel panel-default">
	
		<div class="panel-heading">
			<h3 class="panel-title">菜单分类管理</h3>
			<span>添加菜单</span>
		</div>

		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#contentMenu" aria-controls="contentMenu" role="tab" data-toggle="tab">内容管理菜单</a>
				</li>
				<li role="presentation">
					<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
				</li>
			</ul>
		
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="contentMenu">
					<ul class="list-group">
						<li class="list-group-item">
							<span class="badge">5</span>
							Item 1
							<input type="text">
						</li>
						<li class="list-group-item">
							<span class="badge">10</span>
							Item 2
						</li>
						<li class="list-group-item">
							<span class="badge">15</span>
							Item 3
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab">...</div>
			</div>
		</div>

		
	</div>
	
@endsection