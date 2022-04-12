@extends('layout.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      <div class="card-body">
        <a href="{{ route('student.index') }}" class="btn btn-primary">go back</a>
        <br/>
        <br/>
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
      </div>
       
    </hr>
  
  </div>
</div>