@extends('auth.layout.app')
@section('content')
    <!--start wrapper-->

    @include('auth.layout.includes.navigation')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="reset-passowrd">
                    <div class="card radius-10 w-100">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4>Reset password</h4>
                                <p>You will receive an e-mail in maximum 60 seconds</p>
                            </div>
                            <form action="{{ route('password.update') }}" method="post" class="form-body row g-3">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="email" name="email" class="form-control" id="">
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="inputPassword">
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end wrapper-->
@endsection
