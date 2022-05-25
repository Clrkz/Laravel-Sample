@extends('admin.layout')

@section('content')
  <div class="container-fluid">
   Hello World.
  </div>
@endsection

@section('javascript')
    <script src="{{ asset('assets/js/main.js') }}"></script> 
	<script>
	$(function(){
		alert('Jquery Init');
	});
	</script>
@endsection