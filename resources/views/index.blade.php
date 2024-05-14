@extends('master')

@section('title', 'Sign Up')

@section('content')
    <div class="form-container">
        <form id="form" action="/users" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>{{ Lang::get('Dictionary.signup') }}</h3>
            <div class="input-control">
                <input type="text" id="fullname" placeholder="{{ Lang::get('Dictionary.fullname') }}" name="fullname">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="text" id="name" placeholder="{{ Lang::get('Dictionary.username') }}" name="username">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="date" id="birthdate" placeholder="{{ Lang::get('Dictionary.birthdate') }}" name="birthdate">
                <div class="error"></div>
            </div>
            <button id="checkactors" method="GET" type="submit" >{{ Lang::get('Dictionary.checkactors') }}</button>
            <div class="input-control">
                <input type="text" id="phone" placeholder="{{ Lang::get('Dictionary.phone') }}" name="phone">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="text" id="address" placeholder="{{ Lang::get('Dictionary.address') }}" name="address">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="password" id="password" placeholder="{{ Lang::get('Dictionary.password') }}" name="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="password" id="cpassword" placeholder="{{ Lang::get('Dictionary.confirmpass') }}">
                <div class="error"></div>
            </div>
            <div>
                <label for="photo">{{ Lang::get('Dictionary.photoUpload') }}</label>
            </div>
            <div class="input-control">
                <input type="file" id="photo" name="photo">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="email" id="email" placeholder="{{ Lang::get('Dictionary.email') }}" name="email">
                <div class="error"></div>
            </div>
            <input id="submitform" type="submit" name="submit" value="{{ Lang::get('Dictionary.register') }}" class="form-btn">
            {{-- <p>"{{ Lang::get('Dictionary.login') }}" <a href="">Login</a></p> --}}
        </form>
    </div>
    <div class="actorscontainer">
    <ul id="actors" ></ul>
    </div>
@endsection


