@extends('templates.opt-signup-form.layouts.header')

@section('content')

    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled text-center mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row opt_form">
        <form action="/opt-create" class="col-12" id="form" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="box col-12 mb-4">
                    <h2 class="text-center mb-4">Create Your Cam Account Now!</h2>

                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name') }}" required>

                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ old('last_name') }}" required>

                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="phone">Cell Phone (Optional but recommended):</label>
                        <input type="text" name="phone" id="phone" class="form-control bfh-phone{{ $errors->has('phone') ? ' is-invalid' : '' }}" data-format="+1 (ddd) ddd-dddd" value="{{ old('phone') }}">

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit">Submit</button>
                    </div>
                </div><!-- box -->
            </div><!-- row -->
        </form>
    </div><!-- row -->

@endsection
