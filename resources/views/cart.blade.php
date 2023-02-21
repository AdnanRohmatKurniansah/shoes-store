@extends('layout.main')

@section('fill')
    <div class="container">
        <table class="table" style="margin-top: 130px; margin-bottom: 100px">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th> 
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                <tr>
                    <td><img src="{{ asset('storage/' . $cart->product->image) }}" class="img-fluid" style="width: 50px"></td>
                    <td>{{ $cart->product->name }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>Rp {{ $cart->product->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection