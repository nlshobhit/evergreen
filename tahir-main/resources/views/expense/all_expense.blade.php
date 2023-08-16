@extends('admin.master')
@section('content')
<h6 class="mb-0 text-uppercase">All Expense Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Id</th>
										<th>Expense Type</th>
										<th>Expense Amount</th>
                                        <th>Expense Date</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($data as $key => $item)
									<tr>
                                        <td>{{$key + 1}}</td>
										<td>{{$item->expense_type}}</td>
										<td>{{$item->expense_amount}}</td>
										<td>{{\Carbon\Carbon::parse($item->return_date)->format('d F, Y')}}</td>
                                        <td>
                                            <a href="{{route('edit.expense',$item->id)}}" class="btn btn-secondary">Edit</a>
                                            <a href="{{route('delete.expense',$item->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection