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
			<h1 class="zz-heading">User</h1>
		</div>
	</div>	
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-6">
			<form method="post" action="{{ asset('admin/user/add') }}">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm người dùng</h3>
					</div>
					<div class="box-body row">
						<div class="col-12 col-md-6 col-lg-6">
							<input required="" class="form-control" type="text" name="name" placeholder="Tên">
							<br>
							<input required="" class="form-control" type="email" name="email" placeholder="Email">
						</div>
						<div class="col-12 col-md-6 col-lg-6">
							<select required="" class="form-control" name="level">
								<option value="1">Admin</option>
								<option value="2" selected="">Staff</option>
							</select>
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
						<th data-sortable="true" data-field="name">Tên</th>
						<th data-sortable="true" data-field="email">Email</th>
						<th data-sortable="true" data-field="level">Quyền</th>
						<th>Chỉnh sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>
							@if($user->level == 1) Admin @endif 
							@if($user->level == 2) Staff @endif 
						</td>
						<td>
							<a href="{{ asset('admin/user/delete/'.$user->id) }}" class="table-action btn btn-danger btn-sm" title="Delete"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop