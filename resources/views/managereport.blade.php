@extends('layouts.admin')

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">List of Paid Orders</h5><!-- Button trigger modal -->

                                <br>

                                <div class="text-left">
                                <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal1">
                                    Yearly Report
                                    </button>
                                </div>
                                <div class="text-left">

                                        <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-lg active mt-3" data-toggle="modal" data-target="#exampleModal">
                                        Monthly Report
                                    </button>

                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Yearly Report</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                                      </div>
                                    <div class="modal-body">
                                  <form action="/yearly/report" method="GET">
                                          @csrf
                                    <div class="form-group">
                                            <label for="exampleInputEmail1">Select Year</label>
                                            <input type="date" class="form-control" name="year">
                                    </div>
                                    <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">See Report</button>
                            </div>
                                </form>
                           </div>
                          </div>
                         </div>
                        </div>





                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Monthly Report</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="/monthly/report" method="GET">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Select Date</label>
                                                                <input type="month" class="form-control" name="month">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">See Report</button>
                                                            </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    </div>
                                                </div>
                                </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <h5>List of Paid Orders</h5>
                                        <tr>
                                            <th>Order Number</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Date of Reservation</th>

                                            <th scope="col">Quantity</th>
                                            <th scope="col">Downpayment</th>
                                            <th scope="col">Fullpayment</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="customtable">
                                        @forelse ($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->customer->firstname}} {{$order->customer->lastname}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{$order->order_qty}}</td>
                                            <td>{{$order->down_payment}}</td>
                                            <td>{{$order->order_qty*$order->product->price}}</td>

                                            <td>
                                                @if($order->order_status =='approved')
                                                approved order
                                                @elseif($order->order_status =='paid')
                                                paid
                                                @else
                                                pending
                                                @endif
                                            </td>
                                        @empty
                                        no result!
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>


                        </div>

@endsection
