@extends('layouts.app')
@section('content')
  	<div style="display: flex; height: 100vh; justify-content: center; align-items: center;">
  		<div style="text-align: center;">
			<img style="width: 260px;" src="{{ asset('images/404-not-found.webp') }}">
			<h3 style="text-transform: uppercase; margin-bottom: 0;">Page Not Found</h3>
			<p style="padding-bottom: 10px; padding-top: 5px; margin-bottom: 0;">The page you are looking for might have been removed or temporarily unavailable.</p>
			<a class="link" style="width: 130px !important; text-transform: uppercase;" href="{{route('welcome')}}">Go To Home</a>
		</div>
	</div>
@endsection