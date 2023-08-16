@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Staff Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Full Name</th>
										<th>Department</th>
										<th>Date of Joining</th>
										<th>Mobile Number</th>
										<th>Address</th>
										<th>Salary</th>
                                        <th>Shift Timing</th>
                                        <th>Add Incentive</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->full_name}}</td>
										<td>{{$item->department}}</td>
										<td>{{$item->date_of_joining}}</td>
										<td>{{$item->mobile_number}}</td>
										<td>{{$item->address}}</td>
										<td>{{$item->salary}}</td>
                                        <td>{{$item->shift_timing}}</td>
                                        <td>{{$item->add_incentive}}</td>
                                        <td>
                                            <a href="{{route('edit.staff',$item->id)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{route('delete.staff',$item->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
