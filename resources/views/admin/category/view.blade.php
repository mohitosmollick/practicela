@extends('admin.components.layouts')

@section('title')
    Catagory
@endsection

@section('content')

    <h3 class="p-3">Single Category</h3>

    <div class="row justify-content-center">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Name</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>{{$singleCategory->name}}</td>
                <td>{{$singleCategory->status}}</td>
            </tr>
        </table>
    </div>

@endsection
