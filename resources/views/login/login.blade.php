@extends('loginLayout.loginHeader')
@section('content')


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        @if (session('message'))
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">Error</span>
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            @if (session('message'))
            <div class="err-msg animate__animated animate__shakeX">
                <i class="ri-error-warning-fill fs-5">{{ session('message') }}</i>
            </div>
            @endif
            <div class="login-form">
                <form method="post" action="{{url('login')}}">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="" placeholder="Password">
                    </div>

                    <!-- <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button> -->
                    <input type="submit" name="admin_login" value="Sign in" class="btn btn-success btn-flat m-b-30 m-t-30">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection