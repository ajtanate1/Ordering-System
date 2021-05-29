@extends('layouts.admin')

@section('content')

<div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Update Customer</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" method="POST" action="/update/customer/{{$user->id}}" class="mt-5">
                            @csrf
                            @method('put')
                            <div>
                                <h3>Profile</h3>
                                <section>
                                    <label for="name">First name *</label>
                                    <input id="name" name="firstname" type="text" value="{{$user->firstname}}"class="required form-control" required>
                                    <label for="surname">Last name *</label>
                                    <input id="surname" name="lastname" type="text" value="{{$user->lastname}}" class="required form-control" required>
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" value="{{$user->email}}" class="required email form-control" required>
                                    <label for="address">Contact No.</label>
                                    <input id="mobile" name="mobile" type="text" value="{{$user->mobile}}" class=" form-control" required>
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" value="{{$user->address}}" class=" form-control" required>
                                    <p>(*) Mandatory</p>
                                </section>

                                <h3>Finish</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required" required>
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </section>
                            </div>
                            <button  type="submit" class="btn btn-primary">Save </button>

                        </form>
                    </div>
                </div>


@endsection
