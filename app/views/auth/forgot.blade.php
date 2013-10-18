@extends('master')

@section('content')
<form method="POST" action="{{ (Confide::checkAction('UserController@do_forgot_password')) ?: URL::to('/user/forgot') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

    <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
    <div class="input-append">
        <input placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">

        <input class="button" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
    </div>

    @if ( Session::get('error') )
        <div class="alert-box alert">{{{ Session::get('error') }}}</div>
    @endif

    @if ( Session::get('notice') )
        <div class="alert-box">{{{ Session::get('notice') }}}</div>
    @endif
</form>
@stop