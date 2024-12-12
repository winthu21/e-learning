@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-2">
        <h2>Course Details</h2>
        <div class="p-3">
            <label for="">Course Image</label>
            <img src="{{ asset('admin/courseImage/'.$course->image) }}" class="w-50" alt="">
        </div>
        <div class="p-3">
            <label for="">Course Name</label>
            <input type="text" class="form-control" disabled value="{{ $course->course_name }}">
        </div>
        <div class="p-3">
            <label for="">Course Category</label>
            <input type="text" class="form-control" disabled value="{{ $course->category }}">
        </div>
        <div class="p-3">
            <label for="">Course Description</label>
            <Textarea class="form-control" disabled>{{ $course->description}} </Textarea>
        </div>
        <div class="p-3">
            <a href="{{ route('course') }}"><button class="btn btn-primary">Back</button></a>
            <a href="{{ route('courseUpdatePage',$course->id) }}"><button class="btn btn-danger">Edit</button></a>
        </div>
    </div>
</div>

@endsection
