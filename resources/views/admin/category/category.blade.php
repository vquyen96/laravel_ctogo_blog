@extends('admin.master')
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
<link rel="stylesheet" type="text/css" href="user/css/user.css">
@stop
@section('javascript')
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
@stop

@section('main')
<div class="container-fluid zz-section">
	<div class="row">
		<div class="col-12">
			<h1 class="zz-heading">Quản lý danh mục</h1>
		</div>
	</div>	
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-6">
			<form method="post" action="{{ asset('admin/category/add') }}">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm danh mục</h3>
					</div>
					<div class="box-body row">
						<div class="col-12 col-md-6 col-lg-6">
							<input required="" class="form-control" type="text" name="name" placeholder="Tên">
						</div>
						<div class="col-12 col-md-6 col-lg-6">
							<input required="" class="form-control" type="text" name="icon" placeholder="Icon">
							<br>
							<i style="font-style: italic; font-size: 12px;">* Copy đoạn mã ({{'<i>...</i>'}}) của icon trên <a href="https://fontawesome.com/icons?d=gallery">fontawesome</a> vào đây</i>
						</div>
						<div class="col-12 col-md-6 col-lg-6">
							<input required="" class="form-control" type="hidden" name="image" placeholder="Image" value="image">
							<input required="" class="form-control" type="hidden" name="status" placeholder="Image" value="1">
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<table data-pagination="true" data-search="true" data-toggle="table">
				<thead>
					<tr>
						<th data-sortable="true" data-field="id">ID</th>
						<th data-sortable="true" data-field="name">Tên danh mục</th>
						<th data-sortable="true" data-field="icon">Icon</th>
						<th>Chỉnh sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						<td>{!!$category->icon!!}</td>
						<td>
							<a href="{{ asset('admin/category/delete/'.$category->id) }}" class="table-action btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop