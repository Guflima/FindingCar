@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('verify_mail.title')</div>

                <div class="loader" style="display: none;"></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Reenviamos o link de confirmação para')}} <strong>{{auth()->user()->email}}</strong>
                        </div>
                    @endif

                    @lang('verify_mail.message') <strong>{{auth()->user()->email}}</strong> @lang('verify_mail.message_two')
                    <br>
                    @lang('verify_mail.message_three') <a href="{{ route('verification.resend') }}" class="upLoader" >@lang('verify_mail.click_here')</a>.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
