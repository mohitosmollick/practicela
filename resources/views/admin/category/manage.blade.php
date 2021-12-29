@extends('admin.components.layouts')

@section('title')
    Catagory
@endsection

@section('content')

 <h3 class="p-3">Manage Category</h3>

 @if(session()->has('message'))
     <div class="{{session('type')}} text-success">{{session('message')}}</div>
     @endif
    <table class="table table-bordered table-striped">
        <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($catagory as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->slug}}</td>
            <td>{{ucfirst($row->status)}}</td>
            <td>
                <a href="{{ route('admin.category.show',$row->id) }}" class="btn btn-sm btn-primary">View</a>
                <a href="{{ route('admin.category.edit',$row->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('admin.category.destroy', $row->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
    {{$catagory->links()}}
@endsection
