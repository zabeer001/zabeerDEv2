<?php

use App\Models\Project;

// Fetch all skills from the database
$projects = Project::orderBy('created_at', 'desc')->get();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Portfolio</p>
            <h2>Projects</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-filter">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-1">Web Design</li>
                    <li data-filter=".filter-2">Mobile Apps</li>
                    <li data-filter=".filter-3">Game Dev</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container mt-5">
            @foreach ($projects as $project)
            <a href="{{ route('projects.show', $project) }}">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="portfolio-wrap">
        
                        {{-- Project Image --}}
                        @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" class="img-fluid">
                        @else
                            <img src="{{ asset('images/default-project.jpg') }}" alt="Default Image" class="img-fluid">
                        @endif
        
                        {{-- Project Text --}}
                        <div class="portfolio-text">
                            <h3>{{ $project->name }}</h3>
                            <i class="fa-brands fa-laravel fa-2x" style="color: #ff0000;"></i>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        


        </div>
    </div>
</div>
<!-- Portfolio End -->
