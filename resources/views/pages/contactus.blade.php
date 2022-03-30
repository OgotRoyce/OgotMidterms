@extends('layouts.master')
@section('css')
    
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      Contact Us
    </div>
    <div class="card-body">
      <h5 class="card-title">LET'S TALK!</h5>
      <p class="card-text">We would be happy to answer your inquiries.</p>
      <a href="#" class="btn btn-primary">Email Us</a>
    </div>
    <div class="card">
        <div class="card-body">
         Developer: {{ $name }} - {{$email}}
        </div>
      </div>
  </div>
@endsection

@section('script')

@endsection