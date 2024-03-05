@extends('user.layouts.app')
@section('title')
    @lang('Refer new affiliate')
@endsection
@section('content')
    <div class="container">
        <div>
            <ol class="breadcrumb center-items">
                <li><a href="{{route('user.home')}}">@lang('Home')</a></li>
                <li class="active"> @lang('Dashboard')</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(!blank($referral_current))
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('Current affiliate link')</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Current link: </label>
                                <div class="form-group">
                                    <input type="text" id="url" value="{{ $referral_current['hash'] }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="percentage">Percentage</label>
                                <div class="form-group">
                                    <input type="text" value="{{ $referral_current['percentage'] }}" disabled class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="max_current">Max usage/Current Usage</label>
                                <div class="form-group">
                                    <input type="text" value="{{$referral_current['max_usage']}}/{{$referral_current['current_usage']}}" disabled class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" onclick="copyFunction()">Copy</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Your affiliates
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Email</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $referredUsers = json_decode($referral_current['registered_users'], true); 
                                    $users = \App\Models\User::whereIn('id', $referredUsers)->get();
                                @endphp
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ($user->base_percentage / config('referral.base_percentage')) * 100 }} %</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new link</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.refer.affiliate.store') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control" value="{{route('register.sponsor',['sponsor' => auth()->user()->username, 'hash' => $new_hash ])}}" readonly name="hash">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="percentage">Commission</label>
                                        <input type="number" min="10" max="100" class="form-control" name="percentage" value="{{ old('percentage') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="max_usage">Limit</label>
                                        <input type="number" min="1" max="500" class="form-control" value="{{ old('max_usage') }}" name="max_usage" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    function copyFunction() {
        var copyText = document.getElementById("url");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        /*For mobile devices*/
        document.execCommand("copy");
        Notiflix.Notify.Success(`Copied: ${copyText.value}`);
    }
</script>
@endpush