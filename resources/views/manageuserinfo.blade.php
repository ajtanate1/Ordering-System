@extends('layouts.admin')

@section('content')


<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Customer List</h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as  $user)
                                    <tr>

                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->firstname}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <button class="btn btn-primary"> Update
                                                 </button>
                                        </td>
                                    </tr>
                                    @empty
                                      <h1 class="text-danger ">  no customer </h1>

                                    @endforelse


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

@endsection
