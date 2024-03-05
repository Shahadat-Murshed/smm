@extends('admin.layouts.app')

@section('title')
    @lang('Tier Settings')
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Name</th>
                        <th>Threshold</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tiers as $tier)
                    <tr>
                        <td>{{$tier->level}}</td>
                        <td>{{$tier->name}}</td>
                        <td>{{$tier->threshold}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection