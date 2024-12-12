<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #270d63;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575d63;
            text-decoration: none;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .topbar {
            width: calc(100% - 250px);
            background-color: #f8f9fa;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 250px;
            z-index: 1050;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="text-center mb-3">
            E-Learning
            <h2>Admin Dashboard</h2>
        </div>
        <a href="{{ route('adminDashboard') }}">Dashboard</a>
        <a href="{{ route('createCategoryPage') }}">Create Course Category</a>
        <a href="{{ route('createCoursePage') }}">Create Course</a>
        <a href="{{ route('course') }}">Courses List</a>
        <a href="{{ route('adminList') }}">Admin and user list</a>
        <a href="{{ route('appliedCourse') }}">User applied course list</a>
        <div class="p-2">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" class="form-control btn btn-danger" value="Logout">
            </form>
        </div>

    </div>

    <div class="topbar" style="opacity: 100">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Dashboard</h4>
            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#">{{ auth()->user()->name }}</a>
                    <button class="form-contorl submit btn btn-outline-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="container-fluid">
            <!-- Dashboard Content -->
            <div id="dashboard" class="pt-5">

                @yield('content')

                @include('sweetalert::alert')

            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    {{-- image thumbnail loadfile --}}
    <script>
        function loadFile(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0])
        }

    </script>

    <!-- Laravel Echo and Pusher Setup -->
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        import Echo from 'laravel-echo';
        window.Pusher = require('pusher-js');
        window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '{{ env('MIX_PUSHER_APP_KEY') }}',
            cluster: '{{ env('MIX_PUSHER_APP_CLUSTER') }}',
            forceTLS: true
        });
        window.Echo.channel('admin-notifications').listen('CourseApplied', (e) => {
            alert(e.message);
        }); <
        /body>

        <
        /html>
