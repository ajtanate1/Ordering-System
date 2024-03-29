@extends('layouts.admin')

@section('content')

<div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Registration</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" method="POST" action="{{ route('registration') }}" class="mt-5">
                            @csrf
                            <div>
                                <h3>Account</h3>
                                <section>
                                    <label for="userName">User name *</label>
                                    <input id="userName" name="userName" type="text" class="required form-control" required>
                                    <label for="password">Password *</label>
                                    <input id="password" name="password" required autocomplete="new-password" type="password" class="required form-control" required>
                                    <label for="confirm">Confirm Password *</label>
                                    <input id="confirm" name="password_confirmation" required autocomplete="new-password" type="password" class="required form-control" required>
                                    <p>(*) Mandatory</p>
                                </section>
                                <h3>Profile</h3>
                                <section>
                                    <label for="name">First name *</label>
                                    <input id="name" name="firstname" type="text" class="required form-control" required>
                                    <label for="surname">Last name *</label>
                                    <input id="surname" name="lastname" type="text" class="required form-control" required>
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" class="required email form-control" required>
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" class=" form-control" required>
                                    <p>(*) Mandatory</p>
                                </section>

                                <h3>Finish</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required" required>
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </section>
                            </div>
                            <button type="submit" class="btn btn-primary">Save </button>
                        </form>
                    </div>
                </div>


@endsection
