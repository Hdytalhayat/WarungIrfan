@extends('layouts.frontend')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary">
                        <h4>Order view
                            <a class="btn btn-danger text-white float-end" href="{{ url('my-order') }}">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h6>Shipping Detail</h6>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border p-2">{{ $orders->first_name }}</div>
                                <label for="">Last Name</label>
                                <div class="border p-2">{{ $orders->last_name }}</div>
                                <label for="">Phone Number</label>
                                <div class="border p-2">{{ $orders->phone }}</div>
                                <label for="">Shipping Address</label>
                                <div class="border p-2">
                                    {{ $orders->address }}
                                    {{ $orders->city }}
                                    {{ $orders->province }}
                                </div>
                                <label for="">Postal Code</label>
                                <div class="border p-2">{{ $orders->postal }}</div>
                            </div>
                            <div class="col-md-6">
                                <h6>Order Detail</h6>
                                <hr>
                                <table class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->Orderitem as $item)
                                            <tr>
                                                <td>{{ $item->menu->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>Rp.{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/menu/'.$item->menu->image) }}" width="50px" alt="Sevice image..">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total : <span class="float-end">Rp.{{ $orders->total_price }}</span> </h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection