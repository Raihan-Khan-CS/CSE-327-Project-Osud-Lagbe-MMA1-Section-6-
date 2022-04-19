@extends('layouts.frontend_master')

@section('frontend_content')
 <!-- Breadcrumb Area start -->
 <section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">My Profile</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- account area start -->

<section class="mb-3 mt-5" style="width: 90%; margin-left:5%">
    <div class="row" >
        <div class="col-lg-2">
            @include('user.inc.leftbar')
        </div>
        <div class="col-lg-10">
            <form action="{{ route('update.user.image') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_img" value="{{ Auth::user()->image }}">
                <div class="card" style="width: 80%; margin-left:20%">
                    <div class="card-header">
                        <h4 class="text-center"> Hi------ <strong style="color: red">{{ Auth::user()->name }}</strong>  Update Your Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="{{asset (Auth::user()->image) }}" width="80" alt="">
                                <label for="">Your Profile Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save Profile Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- account area end -->
@endsection
