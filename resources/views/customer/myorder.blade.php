@extends('layouts.admin')

@section('content')


<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">My Order List</h5>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Product </th>
                                                <th>Order Quantity</th>
                                                <th>Order Status</th>
                                                <th>Price each Ice</th>
                                                <th>Downpayment</th>
                                                <th>Total</th>


{{-- {{dd()}} --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ( $orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->ice_type}}</td>
                                                <td>{{$order->order_qty}}</td>
                                                <td>
                                                    @if($order->order_status =='approved')
                                                    approved order
                                                    @elseif($order->order_status =='paid')
                                                    paid
                                                    @else
                                                    pending
                                                    @endif
                                                </td>
                                                <td>{{$order->product->price}}</td>
                                                <td>{{$order->down_payment}}</td>
                                                <td>{{$order->order_qty*$order->product->price}}</td>
                                            </tr>
                                            @empty
                                               <h1>  no order found!</h1>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection
