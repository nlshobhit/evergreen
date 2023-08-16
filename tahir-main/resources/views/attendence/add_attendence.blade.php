@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Add Attendence</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.attendence')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Select Enplyoee</label>
                            <div class="col-md-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="full_name">
                                    <option selected="">Staff Name</option>
                                    @foreach ($data as $item)
                                    <option value="{{$item->full_name}}">{{$item->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Attendence</label>
                            <div class="col-sm-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="attendence">
                                    <option selected>Attendence</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                  </select>
                            </div>
                        </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Attendence Date</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="attendence_date">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary px-5">Add Attendence</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->
@endsection
