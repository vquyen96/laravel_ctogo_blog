@extends('admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="base/css/bootstrap-tokenfield.css">
<link rel="stylesheet" type="text/css" href="news/css/news.css">
@stop
@section('javascript')
<script type="text/javascript" src="base/js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="news/js/news.js"></script>
@stop

@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Bài viết</h1>
		</div>
	</div>	
</div>
<form method="post" class="news-form" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Sửa bài viết</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Title bài viết</label>
							<input required="" type="text" class="form-control"  placeholder="Enter title" name="title" value="{{$article->title}}">
						</div>
						<div class="form-group">
							<label class="bold">Summary</label>
							<textarea required="" class="form-control" name="summary">{!!$article->summary!!}</textarea>
							<p class="help-block italic">Phần chữ đậm đầu bài viết</p>
						</div>
						<div class="form-group">
							<label class="bold">Bài viết nổi bật</label>
							<div class="form-control">
							<input type="radio" name="hot" value="0" @if($article->hot == 0) checked="" @endif> Không
							<br>
							<input type="radio" name="hot" value="1" @if($article->hot == 1) checked="" @endif> Có
							</div>
						</div>
						<div class="form-group">
							<label class="bold">Danh mục:</label>
							<div class="form-control">
							@foreach($categories as $category)
							<input type="checkbox" name="category[]" multiple="" value="{{$category->id}}" @if(in_array($category->id, $category_article)  ) checked="" @endif> {{$category->name}}
							<br>
							@endforeach
							</div>
						</div>
					</div><!-- /.box-body -->
				</div>
			</div>

			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Ảnh đại diện</label>
							<input type="file" id="file" name="image[]" style="display: none" onchange="changeImg(this)">
							<img id="add-image" src="{{ asset('storage/app/image/'.$article->image) }}">
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-12 col-lg-6">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<label class="bold">Nội dung bài viết</label>
							<textarea required="" class="form-control" name="content">{!!$article->content!!}</textarea>
						</div>
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{csrf_field()}}
</form>
@stop