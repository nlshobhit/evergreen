@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Store Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Store Name</th>
										<th>Address</th>
										<th>Mobile Number</th>
										<th>Manager Name</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->store_name}}</td>
										<td>{{$item->address}}</td>
										<td>{{$item->mobile_number}}</td>
										<td>{{$item->manager_name}}</td>
                                        <td>
                                            <a href="{{route('edit.store',$item->id)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{route('delete.store',$item->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
