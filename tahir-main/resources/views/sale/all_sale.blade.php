@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Sale Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Customer Name</th>
                                        <th>Customer Number</th>
										<th>Customer Location</th>
                                        <th>Product Name</th>
                                        <th>Number Of Pieces</th>
                                        <th>Cost</th>
                                        <th>Total Cost Price</th>
                                        <th>Total Sold Price</th>
                                        <th>Profit And Loss</th>
                                        <th>Advance Payment</th>
                                        <th>Pending Payment</th>
                                        <th>Seller Name</th>
                                        <th>Add Incentive (%)</th>
                                        <th>Percentage Amount</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                      <td>{{$key + 1}}</td>
                                      <td>{{$item->customer_name}}</td>
                                      <td>{{$item->customer_number}}</td>
                                      <td>{{$item->customer_location}}</td>
                                      <td>{{$item->product_name}}</td>
                                      <td>{{$item->no_of_pieces}}</td>
                                      <td>{{$item->cost}}</td>
                                      <td>{{$item->cost_price}}</td>
                                      <td>{{$item->sold_price}}</td>
                                      <td>{{$item->profit_loss}}</td>
                                      <td>{{$item->advance_payment}}</td>
                                      <td>{{$item->pending_payment}}</td>
                                      <td>{{$item->full_name}}</td>
                                      <td>{{$item->add_incentive}}</td>
                                      <td>{{$item->percentage}}</td>
                                      <td>
                                        <a href="{{route('edit.sale',$item->id)}}" class="btn btn-secondary">Edit</a>
                                        <a href="{{route('delete.sale',$item->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
