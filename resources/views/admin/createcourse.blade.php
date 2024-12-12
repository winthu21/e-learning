@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-2">
        <div class="card shadow">
            <div class="card-header">
                <h2>Create Courses</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('createCourse') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3">
                        <label for="">Input Course Image</label>
                        <img src="" class="img-thumbnail w-50" id="output" alt="">
                        <input type="file" class="form-control @error('courseImage') is-invalid @enderror" name="courseImage" onchange="loadFile(event)">
                        @error('courseImage')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="p-3">
                        <label for="">Course Name</label>
                        <input type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name')}}" placeholder="Input Course Title">
                        @error('course_name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="p-3">
                        <label for="">Category</label>
                        <select name="course_category_id" class="form-control @error('course_category_id') is-invalid @enderror">
                            <option value="">Choose Course Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}" @if (old('course_category_id') == $item->id) selected @endif>{{ $item->category }}</option>
                            @endforeach
                        </select>
                        @error('course_category_id')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="p-3">
                        <label for="">Course Description</label>
                        <Textarea class="form-control @error('description') is-invalid @enderror" cols="30" rows="5" name="description" placeholder="Input Course Description">{{ old('description') }}</Textarea>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="p-3">
                        <button class="submit btn-primary form-control">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
