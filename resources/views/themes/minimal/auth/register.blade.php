@extends($theme.'layouts.app')
@section('title','REGISTER')
@section('content')
    <!-- LOGIN-SIGNUP -->
    <section id="login-signup">
        <div class="container">
            <div class="row justify-content-center">

                {{-- @if(isset($templates['register'][0]) && $content = $templates['register'][0])
                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="wrapper">
                                <div class="login-info-wrapper">
                                    <h5 class="h5 mb-30">@lang(@$content->description->title)</h5>
                                    <p>@lang(@$content->description->description)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif --}}


                <div class="col-lg-6">
                    <div
                        class="form-wrapper w-100 h-100 d-flex flex-column align-items-start justify-content-center pl-65">
                        <h4 class="h4 text-uppercase mb-30">@lang('REGISTER')</h4>


                        <form method="POST" action="{{ route('register') }}" class="form-content w-100">
                            @csrf
                            <div class="signup">
                                <div class="row">
                                    @if(session()->get('sponsor') != null)
                                        <div class="col-md-12">
                                            <div class="form-group mb-30">
                                                @if ($sponsorRole == "Ambassador")
                                                    <label>@lang('Ambassador Name')</label>
                                                @elseif ($sponsorRole == "Affiliate")
                                                    <label>@lang('Affiliate Name')</label>
                                                @elseif ($sponsorRole == "User")
                                                    <label>@lang('User Name')</label>
                                                @endif

                                                <input type="text" name="sponsor" class="form-control" id="sponsor"
                                                       placeholder="{{trans('Sponsored By') }}"
                                                       value="{{session()->get('sponsor')}}" readonly>
                                            </div>
                                        </div>
                                    @endif
                                    @if(session()->get('role') != null)
                                        <div class="col-md-12">
                                            <div class="form-group mb-30">
                                                <label>@lang('Registering As Affiliate')
                                                </label>
                                                <input type="text" hidden name="role" class="form-control" id="role"
                                                value="{{session()->get('role')}}">
                                            </div>
                                        </div>
                                    @endif
                                    @if(session()->get('sponsor') != null)
                                        <input type="text" name="role" class="form-control d-none" id="role"
                                            value="Affiliate" readonly>
                                    @endif

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control " type="text" name="firstname"
                                                   value="{{old('firstname')}}" placeholder="@lang('First Name')">
                                            @error('firstname')
                                            <p class="text-danger  mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control " type="text" name="lastname"
                                                   value="{{old('lastname')}}" placeholder="@lang('Last Name')">
                                            @error('lastname')
                                            <p class="text-danger  mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control " type="text" name="username"
                                                   value="{{old('username')}}" placeholder="@lang('Username')">
                                            @error('username')
                                            <p class="text-danger  mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="email"
                                                   value="{{old('email')}}"
                                                   placeholder="@lang('Email Address')">
                                            @error('email')
                                            <p class="text-danger  mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group ">
                                                <div class="input-group-prepend w-30">
                                                    <select name="phone_code" class="form-control country_code">
                                                        @foreach($countries as $value)
                                                            <option value="{{$value['phone_code']}}"
                                                                    data-name="{{$value['name']}}"
                                                                    data-code="{{$value['code']}}"
                                                                {{$country_code == $value['code'] ? 'selected' : ''}}
                                                            > {{$value['phone_code']}} <strong>({{$value['name']}}
                                                                    )</strong>
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <input type="text" name="phone" class="form-control pl-3"
                                                       value="{{old('phone')}}"
                                                       placeholder="Your Phone Number">
                                            </div>

                                            @error('phone')
                                            <p class="text-danger  mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control " type="password" name="password"
                                                   placeholder="@lang('Password')">
                                            @error('password')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control " type="password" name="password_confirmation"
                                                   placeholder="@lang('Confirm Password')">
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <a class="btn-forgetpass"
                                           href="{{ route('login') }}">@lang("Already have account?")</a>
                                    </div>
                                </div>


                                @if(basicControl()->reCaptcha_status_registration)
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            {!! NoCaptcha::renderJs(session()->get('trans')) !!}
                                            {!! NoCaptcha::display([]) !!}
                                            @error('g-recaptcha-response')
                                            <span class="text-danger mt-1">@lang($message)</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif

                            </div>

                            <button class="btn mt-20" type="submit">@lang('Submit')</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /LOGIN-SIGNUP -->
@endsection
@push('script')
@endpush
