@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Transport Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Transport Type</th>
										<th>Transport Amount</th>
										<th>Transport Location</th>
                                        <th>Product Name</th>
										<th>Transport Date</th>
                                        <th>Product Id</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->transport_type}}</td>
										<td>{{$item->transport_amount}}</td>
										<td>{{$item->transport_location}}</td>
                                        <td>{{$item['sale']['product_name']}}</td>
										<td>{{\Carbon\Carbon::parse($item->date)->format('d F, Y')}}</td>
                                        <td>{{$item->product_id}}</td>
                                        <td>
                                            <a href="{{route('edit.transport',$item->id)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{route('delete.transport',$item->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
