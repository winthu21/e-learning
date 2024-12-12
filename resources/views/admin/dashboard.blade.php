@extends('admin.layouts.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- CoursesApplied -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('appliedCourse') }}">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Courses Applied by Users</div>
                                <div class="h5 mb-0 font-weight-bold text-success">{{ $totalCoursesApplied }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-book-open-reader fa-3x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- User Count -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('userList') }}">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Users Count</div>
                                <div class="h5 mb-0 font-weight-bold text-primary">{{ $usersCount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-users fa-3x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Course Category -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('createCategoryPage') }}">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Course Categories</div>
                                <div class="h5 mb-0 font-weight-bold text-info">{{ $courseCategory }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-list fa-3x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Courses -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('course') }}">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    All Courses</div>
                                <div class="h5 mb-0 font-weight-bold text-warning">{{ $allCourses }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-book-open fa-3x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Table --}}
    <div class="row">
        <!-- Admin Table -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <a href="{{ route('adminList') }}">
                    <div class="card-header py-3">
                        <h5 class="text-danger">Admin Lists ({{ $adminCount }})</h5>
                    </div>
                </a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adminList as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Table -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <a href="{{ route('userList') }}">
                    <div class="card-header py-3">
                        <h5>User Lists ({{ $usersCount }})</h5>
                    </div>
                </a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userList as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
