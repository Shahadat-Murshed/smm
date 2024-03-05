@extends('admin.layouts.app')
@section('title')
    @lang($user->username)
@endsection
@section('content')


    <div class="m-0 m-md-4 my-4 m-md-0">
        <div class="row">

            <div class="col-sm-4">
                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title">@lang('Profile')</h4>
                        <div class="form-group">
                            <div class="image-input">
                                <label for="image-upload" id="image-label"><i
                                        class="fas fa-upload"></i></label>
                                <img id="image_preview_container" class="preview-image"
                                        style="max-width: 200px"
                                        src="{{getFile(config('location.user.path').$user->image)}}"
                                        alt="@lang('User Image')">
                            </div>
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <h3> @lang(ucfirst($user->username))</h3>
                        <p>@lang('Joined At') @lang($user->created_at->format('d M,Y h:i A')) </p>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title">@lang('User information')</h4>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">@lang('Email')
                                <span>{{ $user->email }}</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">@lang('Username')
                                <span>{{ $user->username }}</span></li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">@lang('Status')
                                <span
                                    class="badge badge-{{($user->status==1) ? 'success' :'danger'}} success badge-pill">{{($user->status==1) ? trans('Active') : trans('Inactive')}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">@lang('Balance')
                                <span>{{ getAmount($user->balance, config('basic.fraction_number')) }} @lang(config('basic.currency')) </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title">@lang('Role')</h4>
                        <form method="post" action="{{ route('admin.user-role.update', $user->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>@lang('Select Role')</label>
                                    <select name="role" class="form-control">
                                        <option value="" disabled>@lang('Select Role')</option>
                                            <option {{$user->role == 'Ambassador' ?  'selected' : ''}} value="Ambassador">Ambassador </option>
                                            <option {{$user->role == 'Affiliate' ?  'selected' : ''}} value="Affiliate">Affiliate</option>
                                            <option {{$user->role == 'User' ?  'selected' : ''}} value="User">User</option>
                                    </select>
                                    @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="submit-btn-wrapper mt-md-3  text-center text-md-left">
                                <button type="submit"
                                        class=" btn waves-effect waves-light btn-rounded btn-primary btn-block">
                                    <span>@lang('Change User Role')</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

