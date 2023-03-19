@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- order List Table -->
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">
                students list
            </h5>
        </div>
        <div class="card-datatable table-responsive">
            <table id="order-table" class=" display table border-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Learner #</th>
                        <th>Name</th>
                        <th>Course Name</th>
                        <th>SQA</th>
                        <th>Date Awaded</th>
                        <th>Certificate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td class="text-capitalize text-primary">
                            <small> {{$student->learner_number}}</small>
                        </td>
                        <td>
                            <small class="text-danger text-capitalize">
                                {{$student->name}}
                            </small>
                        </td>
                        <td>{{$student->course_name}}</td>
                        <td>{{$student->sqa}}</td>
                        <td>
                            <small class="text-primary text-capitalize">
                                {{$student->date}}
                            </small>
                        </td>

                        <td>
                            <small class="text-dark text-capitalize">
                                {{$student->certificate}}
                            </small>
                        </td>
                        <td>
                            <small class="text-primary text-capitalize">
                                <span>Edit</span>
                            </small>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>




@endsection