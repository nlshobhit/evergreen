@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Inventory Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Product Name</th>
										<th>Product Type</th>
										<th>ManuFacturer</th>
										<th>Vendor Name</th>
										<th>Number Of Pieces</th>
										<th>Product Dimension</th>
                                        <th>Store Name</th>
                                        <th>Per Piece Price</th>
                                        <th>Total Value</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->product_name}}</td>
										<td>{{$item->product_type}}</td>
										<td>{{$item->manufacturer}}</td>
										<td>{{$item->vendor_name}}</td>
										<td>{{$item->no_of_pieces}}</td>
										<td>{{$item->product_dimension}}</td>
                                        <td>{{$item->store_name}}</td>
                                        <td>{{$item->per_piece_price}}</td>
                                        <td>{{$item->total_value}}</td>
                                        <td>
                                            <a href="{{route('edit.inventory',$item->id)}}" class="btn btn-secondary">Edit</a>
                                        </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
