@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('products/register') }}" role="button"> {{ __('New products') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('productss List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
name
 </th>
<th>
 unit
 </th>
 <th>
 price
 </th>
 <th>
 quantity
 </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 @foreach($products as $products)
 <tr>
 <td> {{ $products->id }}</td>
 <td> {{ $products->name }}</td>
 <td> {{ $products->unit }}</td>
 <td> {{ $products->price }}</td>
 <td> {{ $products->quantity}}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/products/search/{{ $products->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/products/edit/{{$products->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/products/delete/{{ $products->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection