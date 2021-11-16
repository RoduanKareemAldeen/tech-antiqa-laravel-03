@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => 'User Mangement'])
@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <ul>
                    @foreach ($errors->all() as $error) @endforeach
                </ul>
                <!--USER FORME-->
                <form action="{{ route('users.store') }}" method="POST" autocomplete="off" class="form-horizontal">
                    @csrf
                    <!--STATIC SECTION-->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> Create New User</h4>
                            <p class="card-category">{{ __('User information') }}</p>
                        </div>
                        <div class="card-body ">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!--NAME SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Full Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" id="input-name" type="text" placeholder="{{ __(' Full Name') }}"
                                            aria-required="true" />
                                        @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--PASSWORD SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Password') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            input type="password" name="password" placeholder="{{ __('Password') }}"
                                            value="" required />
                                        @if ($errors->has('password'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--EMAIL SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" id="input-email" type="email" placeholder="{{ __('Email') }}"
                                            required />
                                        @if ($errors->has('email'))
                                            <span id="email-error" class="error text-danger"
                                                for="input-email">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--PHONE SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                            name="phone" id="input-phone" type="numbric" placeholder="{{ __('phone') }}"
                                            required />
                                        @if ($errors->has('phone'))
                                            <span id="phone-error" class="error text-danger"
                                                for="input-phone">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--BIRTHDATE SECTION-->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Birthdate') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('birthdate') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}"
                                            name="birthdate" id="input-birthdate" type="date"
                                            placeholder="{{ __('birthdate') }}" required />
                                        @if ($errors->has('birthdate'))
                                            <span id="birthdate-error" class="error text-danger"
                                                for="input-birthdate">{{ $errors->first('birthdate') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--AGREMENT SECTION-->
                            <div class="row ">
                                <label class="col-sm-7">
                                    <input type="checkbox">
                                    I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                        </div>
                        <!--SUBMIT SECTION-->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection