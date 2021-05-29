@extends('layouts.admin')

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Reservations</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>

                                            <th>Order Number</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Date of Reservation</th>
                                            <th scope="col">Order Type</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Down Payment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total Price</th>
                                              <th scope="col">Balance</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="customtable">
                                        @forelse ($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->customer->firstname}} {{$order->customer->lastname}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{$order->ice_type}}</td>
                                            <td>{{$order->order_qty}}</td>
                                            <td>{{$order->down_payment}}</td>
                                            <td>

                                                @if($order->order_status =='approved')
                                                approved order
                                                @elseif($order->order_status =='paid')
                                                paid
                                                @else
                                                pending
                                                @endif
                                            </td>
                                            <td>
                                                {{$order->order_qty* $order->current_price}}
                                            </td>
                                               <td>
                                                {{$order->order_qty* $order->current_price - $order->down_payment }}
                                            </td>
                                            @if($order->order_status !='paid')
                                    <td>
                                        <a href="/remove/order/{{$order->id}}" class="btn btn-primary"> Cancel/Remove  </a>
                                             <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data_value="{{ $order->id}}" data-target="#exampleModal-{{$order->id}}">
                                            Approved
                                        </button>

                                        <a href="/claim/order/{{$order->id}}" class="btn btn-primary"> Claim  </a>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Approve Order</h5>
                                                <button type="button" class="close" data-dismiss="modal" data_value="{{$order->id}}" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="Approve Order!">
                                                    <form action="/approve/order/{{$order->id}}" method="get">
                                                        @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Down Payment</label>
                                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="down_payment" placeholder="Enter down payment amount">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                    </div>
                                                    </form>


                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                </td>
                                        </tr>
                                        @endif
                                        @empty
                                        no reservation!
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection
