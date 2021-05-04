@extends('layouts.admin')

@section('content')

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Stocks Available</h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Products</th>
                                        <th scope="col">Available</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ice Block</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ice Crused</td>
                                        <td>Block</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                </div>

@endsection