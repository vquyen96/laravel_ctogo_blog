@extends('admin.master')
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
<link rel="stylesheet" type="text/css" href="news/css/news.css">
@stop
@section('javascript')
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
@stop

@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Tin tức</h1>
		</div>
	</div>	
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<a class="btn btn-primary white btn-add" href="{{ asset('admin/article/add') }}">Đăng bài viết</a>
			<table data-pagination="true" data-search="true" data-toggle="table">
				<thead>
					<tr>
						<th data-width="25px" data-sortable="true" data-field="news_id">Stt</th>
						<th data-sortable="true" data-field="news_name">Title</th>
						<th data-sortable="true" data-field="created_at">Ngày đăng</th>
						<th>Chỉnh sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td><form method="post" action="{{ asset('admin/article/change-order/'.$article->stt ) }}">{{csrf_field()}}<input name="stt" style="width: 45px; text-align: center" type="text" value="{{$article->stt}}"></form></td>
						<td><a href="{{ asset('admin/article/edit/'.$article->id) }}" style="color: unset; text-decoration: none;">{{$article->title}}</a></td>
						<td>{{$article->created_at}}</td>
						<td>
							<a href="{{ asset('admin/article/edit/'.$article->id) }}" class="table-action btn btn-info btn-sm" title="Delete"><i class="far fa-edit"></i></a>
							<a href="{{ asset('admin/article/delete/'.$article->id) }}" class="table-action btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop