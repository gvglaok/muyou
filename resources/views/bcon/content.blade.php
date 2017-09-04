@extends('layouts.bcon')

@section('content')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">选择文章分类</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">class 1</a></li>
					<li><a href="#">class 2</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">搜索</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">二级分类 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>

					<li><a href="{{route('artical.create')}}"> <i class="fa fa-plus"></i>添加文章 </a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<ul class="list-group">
				<li href="#" class="list-group-item">
					
					<span class="pull-right">
						<a class="text-success" href="#"><i class="fa fa-eye"></i>查看</a>
						<a class="text-info" href="#">修改</a>
						<a class="text-danger" href="#">删除</a>
					</span>

					<span class="badge">点击数：5</span>

					<span class="text-info pull-right">关键词：tag1,tag1,tag1,</span>

					<a href="">文章标题</a> 
				</li>
				<li href="#" class="list-group-item">
					<span class="pull-right">
						<a class="text-success" href="#"><i class="fa fa-eye"></i>查看</a>
						<a class="text-info" href="#">修改</a>
						<a class="text-danger" href="#">删除</a>
					</span>

					<span class="badge">点击数：5</span>
					
					<span class="text-info pull-right">关键词：tag1,tag1,tag1,</span>
					<a href="">文章标题</a> 
				</li>
				<li href="#" class="list-group-item">
					<span class="pull-right">
						<a class="text-success" href="#"><i class="fa fa-eye"></i>查看</a>
						<a class="text-info" href="#">修改</a>
						<a class="text-danger" href="#">删除</a>
					</span>

					<span class="badge">点击数：5</span>
					
					<span class="text-info pull-right">关键词：tag1,tag1,tag1,</span>
					<a href="">文章标题</a> 
				</li>
			</ul>

		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav aria-label="Page navigation">
			  <ul class="pagination">
				<li>
				  <a href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				  </a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
				  <a href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				  </a>
				</li>
			  </ul>
			</nav>
		</div>
	</div>
	
@endsection

@section('importCSS')
	<link rel="stylesheet" type="text/css" href="/bcon/assets/js/selectboxit/jquery.selectBoxIt.css">
@endsection

@section('importJS')

@endsection