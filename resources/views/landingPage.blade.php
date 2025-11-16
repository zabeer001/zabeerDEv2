@extends('layouts.master') <!-- Extending the master layout -->

@section('title', 'zabeer.dev') <!-- Setting the title -->

@section('content') <!-- This is where the landing page content goes -->
    <!-- Include Hero Section -->

    @include('layouts.hero', ['name' => $name, 'typedText' => $typedText]) <!-- Pass variables to the partial -->
    @include('layouts.about') 
   
    {{-- @include('layouts.service')  --}}
    @include('layouts.experience') 
    @include('layouts.portfolio_projects') 
    @include('layouts.price') 
    @include('layouts.testimonial') 
    

        <!-- About Start -->
        
        <!-- About End -->

@endsection


