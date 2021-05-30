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
                        <th scope="col">Address</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)

                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <th scope="row">{{$user->firstname}}</th>
                        <th scope="row">{{$user->lastname}}</th>
                        <th scope="row">{{$user->address}}</th>
                        <th scope="row">{{$user->mobile}}</th>
                        <td>
                            <a href="/edit/customer/{{$user->id}}" class="btn btn-primary"> Update
                            </a>
                        </td>
                        @empty
                        no users found
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
