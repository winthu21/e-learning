@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2>Courses</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">User</th>
                                <th class="text-center">Course</th>
                                <th class="text-center">Course Category</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $item)
                                <tr>
                                    <td class=" align-content-center text-center">{{ $item->course_name}}</td>
                                    <td class=" align-content-center text-center">{{ $item->category }}</td>
                                    <td class=" align-content-center text-center">{{ Str::limit($item->description, 120, '...') }}</td>
                                    <td class=" align-content-center text-center"><img class="" style="height: 100px" src="{{ asset('/admin/courseImage/'.$item->image) }}"></td>
                                    <td class=" align-content-center text-center"><a href="{{ route('courseDetailsPage',$item->id) }}"><i class="fa-solid fa-circle-info"></i></a></td>
                                    <td class=" align-content-center text-center"><a href="{{ route('courseUpdatePage',$item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td class=" align-content-center text-center"><a href="{{ route('createDelete',$item->id) }}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
