@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Vendor Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Vendor Company Name</th>
										<th>Vendor Representative Name</th>
										<th>Vendor Product</th>
										<th>Vendor From</th>
										<th>Date</th>
										<th>Vendor Address</th>
                                        <th>Vendor Billing Details</th>
                                        <th>Others</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->vendor_company_name}}</td>
										<td>{{$item->vendor_representative_name}}</td>
										<td>{{$item->vendor_product}}</td>
										<td>{{$item->vendor_from}}</td>
										<td>{{$item->date}}</td>
										<td>{{$item->vendor_address}}</td>
                                        <td>{{$item->vendor_billing_details}}</td>
                                        <td>{{$item->others}}</td>
                                        <td>
                                            <a href="{{route('edit.vendor',$item->id)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{route('delete.vendor',$item->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
