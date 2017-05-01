@extends('layouts.main')

@section('content')
    <table class="table">
      <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody id="products-list" name="products-list">
        @foreach ($produks as $product)
        <tr id="product{{$product->id}}">
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->details}}</td>
          <td>
          <button class="btn btn-warning btn-detail open_modal" value="{{$product->id}}">Edit</button>
          <button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
