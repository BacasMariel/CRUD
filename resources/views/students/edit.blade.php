@extends('layout.layout')
@section('content')
 
<div class="card">
  <div class="card-header text-center">Edit Student</div>
  <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
          {{ implode('', $errors->all()) }}
        </div>
      @endif
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
      @endif
      <div class="row justify-content-center">
        <div class="col-md-5">
          <form action="{{ url('student/' .$students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
            <a href="{{ route('student.index') }}" class="btn btn-danger">Cancel</a>
            <input type="submit" value="Update" class="btn btn-success"></br>
          </form>
        </div>
      </div>
   
  </div>
</div>
 
@stop