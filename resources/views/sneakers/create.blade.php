@extends('layouts.app')
@section('title', 'Create Page')
@section('content')
<div class="card">
  <div class="card-header">Create a Sneaker</div>
  <div class="card-body">
      <form action="{{ route('sneakers.store') }}" method="post">
        {!! csrf_field() !!}
        <div class="mb-3">
          <label>Name</label></br>
          @error('name')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror            
          <input type="text" name="name" id="name" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>Colorway</label></br>
          @error('colorway')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror          
          <input type="text" name="colorway" id="colorway" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>Brand</label></br>
          @error('brand')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror          
          <input type="text" name="brand" id="brand" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>Description</label></br>
          @error('description')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror          
          <input type="text" name="description" id="description" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>Release date</label></br>
          @error('releasedate')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror          
          <input type="text" name="releasedate" id="releasedate" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>Retail price</label></br>
          @error('retailprice')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror          
          <input type="number" name="retailprice" id="retailprice" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>Price</label></br>
          @error('price')
          <span class="invalid-feedback d-block" role="alert">
            <strong>*{{ $message }}</strong>
          </span>
          @enderror          
          <input type="number" name="price" id="price" class="form-control"></br>
        </div>

        <div class="mb-3">
          <input type="submit" value="Save" class="btn btn-primary"></br>
        </div>
    </form>
  
  </div>
</div>
@stop