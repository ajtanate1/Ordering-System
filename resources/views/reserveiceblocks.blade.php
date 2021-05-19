@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Order Ice blocks</h5>
        <div class="card">
            <div class="card-body">
              <form action="/customer/order" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Quantity</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="order_qty" placeholder="Enter Order Quantity" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"name="ice_type" value="ice_block" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Ice Block
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ice_type" value="ice_crushed"  id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Ice Crushed
                    </label>
                  </div>
                <button type="submit" class="btn btn-primary"> Order Now </button>
              </form>
            </div>
          </div>

    </div>
</div>


@endsection
