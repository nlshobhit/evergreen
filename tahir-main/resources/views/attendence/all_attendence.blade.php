@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Attendence Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Emplyoee Name</th>
										<th>Attendence</th>
                                        <th>Date</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                      <td>{{$key + 1}}</td>
                                      <td>{{$item->full_name}}</td>
                                      <td>{{$item->attendence}}</td>
                                      <td>{{$item->attendence_date}}</td>
                                      <td>


                                        <a href="{{route('edit.attendence',$item->id)}}" class="btn btn-secondary">Edit</a>
                                        <a href="{{route('delete.attendence',$item->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
