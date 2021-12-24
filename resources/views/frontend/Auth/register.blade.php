@extends('frontend.Components.layouts')

@section('title')
    Sigle Post
@endsection

@section('content')


    <div class="card">
        <div class="card-header">
            User Register Form
        </div>
        <div class="card-body">



            <form action="{{ route('user.registation') }} " method="POST" role="form" class=" p-4 dip" enctype="multipart/form-data">
                @csrf
                @if(session('messag'))
                    <div class="alert alert-{{session('type')}}">{{session('messag')  }}</div>
                @endif

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror "  name="name" value="{{old('name')}}" id="name" placeholder="Your Name:" />
                    @error('name') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}" placeholder="Input Email:"   />
                    @error('email') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{old('password')}}" placeholder="Your Password:"   />

                </div>

                <div class="form-group">
                    <label for="confirm_password"> Confirm Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="confirm_password" id="confirm_password" value="{{old('confirm_password')}}" placeholder="Confirm Password:"   />
                    @error('password') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="photo">Poto</label>
                    <input type="file" class="form-control " name="photo" id="photo" />
                    @error('photo') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>

                <input type="submit" class="btn btn-success" name="submit" value="Submit">
                <input type="reset" class="btn btn-success" name="" value="Reset">
            </form>

        </div>
    </div>
@endsection
