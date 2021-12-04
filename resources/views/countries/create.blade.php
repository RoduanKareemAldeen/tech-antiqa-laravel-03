@extends('layouts.app', ['activePage' => 'country', 'titlePage' => 'Country'])
@section('content')
    <div class="content">
        <div class="section">
            <div class="container">
                <ul>
                    @foreach ($errors->all() as $error) @endforeach
                </ul>
                <!--USER FORME-->
                <form action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off" class="form-horizontal">
                    @csrf
                    <!--STATIC -->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"> Add a New Country</h4>
                            <p class="card-category">{{ __('Country') }}</p>
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
                            <!--NAME -->
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class=" form-control @error('name')is-danger @enderror" name=" name"
                                            id="input-name" type="text" placeholder="{{ __('Name') }}"
                                            aria-required="true" />
                                        @error('name')
                                            <div class="help is-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--SUBMIT-->
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
