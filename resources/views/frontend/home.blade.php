@extends('frontend.Components.layouts')

@section('title')
    blog section
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Home Page</div>
    </div>
    <x-single-post post="This is our first post">

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta,
        a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta,
        a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!
    </x-single-post>



@endsection
