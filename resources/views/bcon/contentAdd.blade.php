@extends('layouts.bcon') @section('content')
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
				<li><a href="#"> 分类 3</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">二级分类 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
</nav>

<div class="row">
	<div class="col-xs-12 col-md-12 ">

		<div class="panel panel-default">
			<div class="panel-body">

				<form action="" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }} {{ method_field('PUT') }}
					<div class="form-group">
						<label for="input" class="col-sm-1 control-label">标题</label>
						<div class="col-sm-9">
							<input type="text" name="title" class="form-control" value="" required="required">
						</div>
						<!-- <div class="col-sm-1">
							<input type="text" name="author" class="form-control" value="" required="required" placeholder="作者">
						</div>
						<label for="input" class="col-sm-1 control-label">2017-09-04</label> -->
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-1 control-label">关键词</label>
						<div class="col-sm-11">
							<input type="text" name="tags" data-role="tagsinput" class="form-control" value="" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-1 control-label">简要</label>
						<div class="col-sm-11">
							<input type="text" name="info" class="form-control" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-1 control-label">内容</label>
						<div class="col-sm-11">
							<textarea name="content" class="form-control wysihtml5" data-stylesheet-url="assets/js/wysihtml5/lib/css/wysiwyg-color.css" required="required"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-1">
							<button type="submit" class="btn btn-primary">提交</button>
						</div>
					</div>
				</form>

			</div>
		</div>


	</div>
</div>


@endsection 

@section('importCSS')
<link rel="stylesheet" href="/bcon/assets/js/wysihtml5/src/bootstrap-wysihtml5.css">
<!-- <link rel="stylesheet" type="text/css" href="/import/bootstrap-tagsinput.css"> -->

@endsection 
@section('importJS')

<script src="/bcon/assets/js/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="/bcon/assets/js/wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script src="/bcon/assets/js/wysihtml5/src/locales/bootstrap-wysihtml5.zh-CN.js"></script>
<script type="text/javascript" src="/import/bootstrap-tagsinput.min.js"></script>

<script>

</script>
@endsection