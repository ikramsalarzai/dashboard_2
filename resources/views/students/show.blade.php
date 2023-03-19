<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Clinic | Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->

    <link href="{{ URL::asset('assets/vendor/fonts/boxicons.css')}}" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/css/rtl/core.css')}}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href=".{{ URL::asset('assets/vendor/css/rtl/theme-default.css')}}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/demo.css')}}" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/libs/select2/select2.css')}}" />
    <!-- Helpers -->
    <script src="{{ URL::asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />

    <link rel="stylesheet"
        href="{{URL::asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ URL::asset('assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ URL::asset('assets/js/config.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">

<body>

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- order List Table -->
        <div class="card">
            <div class="d-flex justify-content-between">
                <h5 class="card-header">
                    Student Details
                </h5>
            </div>
            <div class="card-datatable table-responsive">
                <div class="text-center my-0 py-0">
                    <img class="card-img-top w-50" src="{{URL::asset('assets/nebosh.jpeg')}}" alt="">
                    
                    <div class="card-header">
                        <h4 class="card-title">This is a Valid Certificate</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text"><b>Learner Name:</b> &nbsp;&nbsp;&nbsp; {{$student->name}}</p>

                    <p class="card-text"><b>Learner Number:</b>&nbsp;&nbsp;&nbsp; {{$student->learner_number}}</p>
                    <p class="card-text"><b>Course Name:</b>&nbsp;&nbsp;&nbsp; {{$student->course_name}}</p>
                    <p class="card-text"><b>SQA Reference:</b>&nbsp;&nbsp;&nbsp; {{$student->sqa}}</p>
                    <p class="card-text"><b>Date Awarded:</b>&nbsp;&nbsp;&nbsp; {{$student->date}}</p>
                    <p class="card-text mb-0"><b>Certificate:</b>&nbsp;&nbsp;&nbsp; {{$student->certificate}}</p>
                    <div class="card-footer text-muted text-center">
                        Please Ensure that the detail on the printed certificate match the verified detail above.
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ URL::asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{ URL::asset('assets/vendor/libs/hammer/hammer.js')}}"></script>

    <script src="{{ URL::asset('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->


    <!-- Vendors JS -->

    <script src="{{ URL::asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->

</body>

</html>