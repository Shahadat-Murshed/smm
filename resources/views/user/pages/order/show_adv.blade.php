@extends('user.layouts.app')
@section('title',__('Orders'))

@section('content')
    <div class="container-fluid px-3 user-service-list ">
        <div class="row my-3 justify-content-between mx-lg-5">
            <div class="col-md-12">
                <ol class="breadcrumb center-items">
                    <li><a href="{{route('user.home')}}">@lang('Home')</a></li>
                    <li class="active">@lang('Order List')</li>
                </ol>

                <div class="card my-3">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>


        <div class="row my-3 justify-content-between align-items-center mx-lg-5">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">

                        <div class="row justify-content-between align-items-start">
                            <div class="col-sm-12">
                                <div class="my-4">
                                    @php
                                        $lastSegment = collect(request()->segments())->last();
                                    @endphp
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link @if(Request::routeIs('user.orderV2.index') || Request::routeIs('user.orderV2.search') ) active @endif"
                                               href="{{ route('user.orderV2.index') }}">@lang('All Orders')</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="table-responsive ">
                            <table class="categories-show-table table table-striped text-center ">
                                <thead>
                                <tr>
                                    <th scope="col">@lang('Order ID')</th>
                                    <th scope="col">@lang('Category')</th>
                                    <th scope="col">@lang('Service_details')</th>
                                    <th scope="col">@lang('Price')</th>
                                    <th scope="col">@lang('Quantity')</th>
                                    <th scope="col">@lang('Status')</th>
                                    <th scope="col">@lang('Reason')</th>
                                    <th scope="col">@lang('Current Counter')</th>
                                    <th scope="col">@lang('Order AT')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($orders as $key => $order)
                                    <tr>
                                        <td> {{$order->id}} </td>
                                        <td>@lang(optional($order->category)->category_title)</h5></td>
                                        @php
                                            $jsonData  = json_decode($order->service_details, true);
                                            
                                        @endphp
                                        <td>
                                            {{data_get($jsonData, 'service.service_title')}}
                                        </td>
                                        <td>@lang($order->price) @lang(config('basic.currency'))</td>
                                        <td>@lang($order->total_quantity)</td>
                                        <td>@lang($order->status)</td>
                                        <td>@lang($order->reason)</td>
                                        <td>@lang($order->current_counter?? 'N/A')</td>
                                        <td>@lang(dateTime($order->added_on, 'd/m/Y - h:i A' ))</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%" class="text-center text-danger">@lang('No Data found')</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $orders->appends($_GET)->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="infoModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h5 class="modal-title">@lang('Note')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="info-reason"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-dark"
                            data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="description">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" id="servicedescription">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    <a href="" type="submit" class="btn btn-primary order-now">@lang('Order Now')</a>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="refillModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h5 class="modal-title">@lang('Order Refill Confirm')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        ×
                    </button>
                </div>

                <div class="modal-body">
                    <p>@lang("Are you really want to refill this orders")</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><span>@lang('No')</span></button>
                    <form action="" method="post" id="refillConfirm">
                        @csrf
                        @method('put')

                        <button type="submit" class="btn btn-primary "><span>@lang('Yes')</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        'use strict';
        $(document).on('click', '.infoBtn', function () {
            var modal = $('#infoModal');
            var id = $(this).data('service_id');
            var orderRoute = "{{route('user.order.create')}}" + '?serviceId=' + id;
            $('.order-now').attr('href', orderRoute);
            modal.find('.info-reason').html($(this).data('reason'));
        });

        $(document).on('click', '#details', function () {
            var title = $(this).data('servicetitle');
            var id = $(this).data('service_id');

            var orderRoute = "{{route('user.order.create')}}" + '?serviceId=' + id;
            $('.order-now').attr('href', orderRoute);

            var description = $(this).data('description');
            $('#title').text(title);
            $('#servicedescription').text(description);
        });

        $(document).on('click', '.refilOrderBtn', function () {
            let route = $(this).data('route');
            $('#refillConfirm').attr('action', route);
        });
    </script>
@endpush
