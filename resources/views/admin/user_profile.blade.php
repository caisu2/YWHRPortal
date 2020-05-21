@extends('user.layouts.app')

@section('content')
    @include('common.image_modal')
    <div class="dashboard-wrapper">
        <div class="dashboard-influence">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h3 class="mb-2">Applicant Profile </h3>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Applicant Profile
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- content  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- influencer profile  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card influencer-profile-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="text-center">
                                            <img src="{{ asset('storage/'.$data['profile']->recent)}}" alt="User Avatar"
                                                 class="rounded-circle user-avatar-xxl">
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                        <div class="user-avatar-info">
                                            <div class="m-b-20">
                                                <div class="user-avatar-name">
                                                    <h2 class="mb-1"> {{ $data['profile']->name }} </h2>
                                                </div>
                                                <div class="rating-star  d-inline-block">

                                                </div>
                                            </div>
                                            <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                            <div class="user-avatar-address">
                                                <p class="border-bottom pb-3">
                                            <span class="d-xl-inline-block d-block mb-2"><i
                                                    class="fa fa-map-marker-alt mr-2 text-primary "></i>{{ $data['profile']->address }}</span>
                                                    <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Expected Salary: {{ number_format($data['profile']->salary, 2) }}  </span>
                                                    <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Cellphone Number: {{ $data['profile']->cellphone_no }}
                                                            </span>
                                                    <span
                                                        class=" mb-2 d-xl-inline-block d-block ml-xl-4">{{ $data['profile']->age }} Year Old </span>
                                                </p>
                                                <div class="mt-3">
{{--                                                    <a href="#" class="badge badge-light mr-1">Fitness</a> <a href="#"--}}
{{--                                                                                                              class="badge badge-light mr-1">Life--}}
{{--                                                        Style</a> <a href="#" class="badge badge-light">Gym</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end influencer profile  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- widgets   -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- four widgets   -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total views   -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-muted">CV</h5>
                                    <button class="btn btn-outline-dark btn-xs btn-rounded" data-id="{{ $data['profile']->id }}" id="cv"><i class="fa fa-eye"> SHOW</i> </button>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                    <i class="fa fa-file-pdf fa-fw fa-sm text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total views   -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total followers   -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-muted">About Me</h5>
                                    <button class="btn btn-outline-dark btn-xs btn-rounded" data-id="{{ $data['profile']->id }}" id="audio"><i class="fa fa-eye"> SHOW</i> </button>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                    <i class="fa fa-audio-description fa-fw fa-sm text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total followers   -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- partnerships   -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Office Setup</h5>
                                    <button class="btn btn-outline-dark btn-xs btn-rounded" data-title="Office Setup" data-toggle="modal" data-target="#imageModal" data-link="{{ $data['profile']->office }}" id="office_setup"><i class="fa fa-eye"> SHOW</i> </button>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                    <i class="fa fa-images fa-fw fa-sm text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end partnerships   -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- total earned   -->
                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Internet Speed</h5>
                                    <button class="btn btn-outline-dark btn-xs btn-rounded" data-title="Internet Speed" data-toggle="modal" data-target="#imageModal" data-link="{{ $data['profile']->internet }}" id="internet"><i class="fa fa-eye"> SHOW</i> </button>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                    <i class="fa fa-images fa-fw fa-sm text-brand"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end total earned   -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end widgets   -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- campaign activities   -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="section-block">
                            <h3 class="section-title">Job History</h3>
                        </div>
                        <div class="card">
                            <div class="campaign-table table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Position</th>
                                        <th class="border-0">Starting Salary</th>
                                        <th class="border-0">Ending Salary</th>
                                        <th class="border-0">Note</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['jobhistory'] as $data)
                                            <tr>
                                                <td>{{ $data->position }}</td>
                                                <td>{{ number_format($data->starting, 2) }}</td>
                                                <td>{{ number_format($data->ending, 2) }}</td>
                                                <td>{{ $data->note }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end campaign activities   -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end content  -->
                <!-- ============================================================== -->
            </div>
        </div>
        <div class="footer" style="position: absolute; bottom: 0;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

