@extends('layouts.admin_master')
@section('report')
    active show-sub
@endsection
@section('reports')
    active
@endsection
@section('admin_content')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <div class="iq-sidebar-logo">
          <div class="top-logo">
             <a href="index.html" class="logo">
             <img src="images/logo.png" class="img-fluid" alt="">
             <span>Sofbox</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">DETE WISE ORDERS</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('reports') }}">home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Date wie Orders</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Date Wise Orders</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                        <div class="form-group mb-0">
                                            <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Invoice</th>
                                    <th class="text-center">TNX No</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            {{-- @php
                                $sl = 1;
                            @endphp --}}
                            <tbody>
                                @forelse ($order as $item)
                            <tr>
                                <td>{{ $order->firstItem()+$loop->index }}</td>
                                {{-- <td class="text-center">{{ $sl ++ }}</td> --}}
                                <td class="text-center">{{ $item->invoice_no }}</td>
                                <td class="text-center">{{ $item->order_date }}</td>
                                <td class="text-center">{{ $item->transaction_id }}</td>
                                <td class="text-center">{{ $item->amount}} ৳</td>
                                <td>
                                    @if ($item->status == 'Pending')
                                        <span class="badge" style="background: rgb(68, 71, 66); color:white; font-size:14px;">
                                        {{ ucwords($item->status) }}</span>
                                    @endif
                                    @if ($item->status == 'Confirm')
                                        <span class="badge" style="background: #20adc0; color:white;font-size:14px;">
                                            {{ ucwords($item->status) }}</span>
                                    @endif
                                    @if ($item->status == 'Processing')
                                        <span class="badge" style="background: #4e2c85; color:white;font-size:14px;">
                                        {{ ucwords($item->status) }}</span>
                                    @endif
                                    @if ($item->status == 'Picked')
                                            <span class="badge" style="background: #1dcc43; color:white;font-size:14px;">
                                            {{ ucwords($item->status) }}</span>
                                    @endif
                                    @if ($item->status == 'Shipping')
                                            <span class="badge" style="background: #2410d3; color:white;font-size:14px;">
                                            {{ ucwords($item->status) }}</span>
                                    @endif
                                    @if ($item->status == 'Delivered')
                                            <span class="badge" style="background: #089914; color:white;font-size:14px;">
                                                {{ ucwords($item->status) }}</span>
                                    @endif
                                    @if ($item->status == 'Cancel')
                                            <span class="badge" style="background: #f82307; color:white;font-size:14px;">
                                            {{ ucwords($item->status) }}</span>
                                    @endif
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Ordr View" href="{{ url('admin/order/view/'.$item->id) }}"><i class="ri-eye-line"></i></a>

                                    </div>
                                </td>
                                </tr>
                                @empty
                                <h4 class="mt-3 text-danger" >Data Not Found Please Try Again</h4>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $order->links() }}
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection
