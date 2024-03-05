@extends('admin.layouts.app')
@section('title')
    @lang($page_title)
@endsection
@section('content')
    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered">
                    <thead class="thead-primary">
                    <tr>
                        <th scope="col" class="text-center">
                            <input type="checkbox" class="form-check-input check-all tic-check" name="check-all"
                                   id="check-all">
                            <label for="check-all"></label>
                        </th>
                        <th scope="col">@lang('Package Title')</th>
                        <th scope="col">@lang('Description')</th>
                        <th scope="col">@lang('Price')</th>
                        <th scope="col">@lang('Price Monthly')</th>
                        <th scope="col">@lang('Price Annually')</th>
                        <th scope="col">@lang('Status')</th>
                        <th scope="col">@lang('Action')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" id="chk-{{ $package->id }}"
                                       class="form-check-input row-tic tic-check"
                                       name="check" value="{{ $package->id }}" data-id="{{ $package->id }}">
                                <label for="chk-{{ $package->id }}"></label>
                            </td>
                            <td data-label="@lang('Package Title')">{{$package->package_name}}</td>
                            <td data-label="@lang('Description')">{{$package->description}}</td>
                            <td data-label="@lang('Price')">{{$package->price}}</td>
                            <td data-label="@lang('Subscribable')">{{$package->price_monthly}}</td>
                            <td data-label="@lang('Subscribable')">{{$package->price_annually}}</td>
                            <td data-label="@lang('Status')">
                                <span
                                    class="badge badge-pill {{ $package->status == 0 ? 'badge-danger' : 'badge-success' }}">{{ $package->status == 0 ? 'Inactive' : 'Active' }}</span>
                            </td>
                            <td data-label="@lang('Action')">
                                <a href="{{route('admin.package.edit',[$package->id])}}"
                                   class="btn btn-primary btn-rounded btn-sm" title="@lang('Edit')">
                                    <i class="fa fa-edit"
                                       aria-hidden="true"></i>
                                </a>

                                @if($package->status == 0)
                                    <a href="javascript:void(0)"
                                       class="btn btn-success btn-rounded btn-sm status-change"
                                       data-toggle="modal"
                                       data-target="#statusMoldal"
                                       data-route="{{route('admin.package.destroy',[$package->id])}}">
                                        <i class="fa fa-check-circle  "
                                           aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a href="javascript:void(0)"
                                       class="btn btn-danger btn-rounded btn-sm status-change"
                                       data-toggle="modal"
                                       data-target="#statusMoldal"
                                       data-route="{{route('admin.package.destroy',[$package->id])}}">
                                        <i class="fa fa-times-circle  "
                                           aria-hidden="true"></i>
                                    </a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- {{ $paginate->appends($_GET)->links() }} --}}
            </div>
        </div>
    </div>

    <div class="modal fade" id="statusMoldal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h5 class="modal-title">@lang('Confirm Status Change')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" id="statusForm">
                    @csrf
                    @method("delete")
                    <div class="modal-body">
                        <h2><i class="fas fa-sync-alt position-absolute"></i></h2>
                        <div class="body-centent pl-5">
                            <p>@lang('Are you want to change the current status')</p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><span>@lang('No')</span>
                        </button>
                        <button type="submit" class="btn btn-primary"><span>@lang('Yes')</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

@endsection

@push('js-lib')
    <script src="{{ asset('assets/global/js/jquery-ui.min.js') }}"></script>
@endpush

@push('js')
    <script>
            "use strict";
            var status = null;

            $(document).on('click', '#check-all', function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
            $(document).on('change', ".row-tic", function () {
                let length = $(".row-tic").length;
                let checkedLength = $(".row-tic:checked").length;
                if (length == checkedLength) {
                    $('#check-all').prop('checked', true);
                } else {
                    $('#check-all').prop('checked', false);
                }
            });

            $(document).on('click', '.status-change', function () {
                let route = $(this).data('route');
                $('#statusForm').attr('action', route);
            });

            $(document).on('click', '.dropdown-menu', function (e) {
                e.stopPropagation();
            });


            //all checked click function
    </script>
@endpush
