@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-6">
        {{-- <div class=""> --}}
            <div class="card shadow">
                <div class="card-header">
                    <h4>Category Lists</h4>
                </div>
                <br>
                <div class="card-body mx-2">
                    @foreach ($category as $item)
                        <div class="row justify-content-between">
                            <p>{{ $item->category_name }}</p>
                            <a href="{{ route('categoryDelete',$item->id) }}"><i class="fa-solid fa-trash text-danger"></i></a>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        {{-- </div> --}}
    </div>
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-header">
                <h4>Create Courses</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('createCategory') }}" method="post">
                    @csrf
                    <div class="p-3">
                        <label for="">Course Category</label>
                        <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ old('category_name')}}" placeholder="Input Course Category Name">
                        @error('category_name')
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
