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
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appliedCourse as $item)
                                <tr>
                                    <td class=" align-content-center text-center">{{ $item->name }}</td>
                                    <td class=" align-content-center text-center">{{ $item->course_name }}</td>
                                    <td class=" align-content-center text-center">
                                        @foreach ($courseCategory as $category)
                                            @if ($category->id == $item->course_category_id)
                                                {{$category->category_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class=" align-content-center text-center">{{ $item->status }}</td>
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
