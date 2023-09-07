@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Return Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Name</th>
										<th>Percentage</th>
										<th>Select Product</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->name}}</td>
										<td>{{$item->percentage}}</td>
										<td>{{$item->product_name}}</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection
