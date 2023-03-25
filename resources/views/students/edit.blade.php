@extends('layout.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <!-- Billing Address -->
                <h5 class="card-header">Add New Students</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('students.update',$student->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="firstname" class="form-label">Learner Number</label>
                                    <input type="text" name="learner_number" required class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="firstname" class="form-label">Course Name</label>
                                    <input type="text" name="course_name" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">SQA Reference</label>
                                <input type="text" name="sqa" class="form-control" id="">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Date Awarded</label>
                                <input type="date" name="date" class="form-control" id="">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Certificate Number</label>
                                <input type="text" name="certificate" class="form-control" id="">
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection