@extends('admin.components.layouts')

@section('title')
    Catagory
@endsection

@section('content')

    <h3 class="p-3">Update Category</h3>

    <div class="row justify-content-center">
        <div class="col-md-6">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('message'))
                <div class="alert alert-{{session('type')}}">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    Update Category
                </div>
                <form action="{{ route('admin.category.update',$singleCategory->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $singleCategory->name }}" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="name">Status</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  id="active" name="status" value="active" class="custom-control-input" {{ $singleCategory->status=='active'?'checked':' '}}>
                                <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  id="inactive" name="status" value="inactive" class="custom-control-input" {{ $singleCategory->status=='inactive'?'checked':' '}}>
                                <label class="custom-control-label" for="inactive">Inactive</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success ">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
