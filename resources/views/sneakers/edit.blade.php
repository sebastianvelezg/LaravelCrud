@extends('layouts.app')
@section('title', 'Edit Page')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      <form action="{{ route('sneakers.update',$sneakers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" 
          value="{{$sneakers->id}}" id="id" />

        <div class="mb-3">
          <label>Name</label></br>
          @error('name')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="text" name="name" id="name" 
            value="{{$sneakers->name}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>colorway</label></br>
          @error('colorway')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="text" name="colorway" id="colorway" 
            value="{{$sneakers->colorway}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>brand</label></br>
          @error('brand')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="text" name="brand" id="brand" 
            value="{{$sneakers->brand}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>description</label></br>
          @error('description')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="text" name="description" id="description" 
            value="{{$sneakers->description}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>releasedate</label></br>
          @error('releasedate')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="text" name="releasedate" id="releasedate" 
            value="{{$sneakers->releasedate}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>retailprice</label></br>
          @error('retailprice')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="number" name="retailprice" id="retailprice" 
            value="{{$sneakers->retailprice}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <label>price</label></br>
          @error('price')
            <span class="invalid-feedback d-block" role="alert">
              <strong>*{{ $message }}</strong>
            </span>
          @enderror
          <input type="number" name="price" id="price" 
            value="{{$sneakers->price}}" class="form-control"></br>
        </div>

        <div class="mb-3">
          <input type="submit" value="Update" class="btn btn-primary"></br>
        </div>
    </form>
  
  </div>
</div>
@stop