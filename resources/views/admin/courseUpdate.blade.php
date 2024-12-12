@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-2">
        <h2>Update Courses</h2>
        <form action="{{ route('courseUpdate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $course->id }}">
            <input type="hidden" name="oldImageName" value="{{ $course->image }}">
            <div class="p-3">
                <label for="">Edit Course Image</label>
                <img class="img-thumbnail w-50" id="output" src="{{ asset('/admin/courseImage/'.$course->image) }}" alt="">
                <input type="file" class="form-control @error('courseImage') is-invalid @enderror" name="courseImage" onchange="loadFile(event)">
                @error('courseImage')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="p-3">
                <label for="">Course Name</label>
                <input type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name',$course->course_name) }}" placeholder="Input Course Title">
                @error('course_name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="p-3">
                <label for="">Course Category</label>
                <select name="course_category_id" class="form-control  @error('course_category_id') is-invalid @enderror">
                    <option value="">Choose Category...</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}" @if (old('course_category_id',$course->course_category_id) == $item->id) selected @endif>{{ $item->category }}</option>
                    @endforeach
                </select>
                @error('course_category_id')
                    <small class=" invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="p-3">
                <label for="">Course Description</label>
                <Textarea class="form-control @error('description') is-invalid @enderror" cols="30" rows="5" name="description" placeholder="Input Course Description">{{ old('description',$course->description) }}</Textarea>
                @error('description')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="p-3">
                <input type="submit" class="btn btn-primary" value="Save">
                <a href="{{ route('course') }}"><button class="btn btn-danger mx-3">Cancel</button></a>
            </div>
        </form>
    </div>
</div>

@endsection
