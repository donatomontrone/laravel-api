@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary py-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p class="mb-3">Welcome to your dashboard click on the button below to be redirected to your profile, otherwise you can reach your projects through the navbar.</p>
                    <div class="profile-image w-25">
                        <img src="{{Auth::user()->userDetail->profile_image}}" class="rounded-circle img-fluid" alt="{{Auth::user()}} profile image">
                    </div>
                    <h3>{{Auth::user()->name}}</h3>
                    <h6 class="fw-bold">Status : <span class="fw-normal text-success"> {{Auth::user()->userDetail->status}}</span></h6>
                    <a href="{{route('profile.edit')}}" class="btn btn-outline-danger d-inline-block ms-auto mt-5">Go to Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
