<?php

use App\Models\Experience;

// Fetch all experiences from the database
$experiences = Experience::all();



?> 
<!-- Experience Start -->
<div class="experience" id="experience">
    <div class="container">
        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Resume</p>
            <h2>Working Experience</h2>
        </header>
        <div class="timeline">
            @foreach ($experiences as $experience)
                <div class="timeline-item {{ $loop->iteration % 2 == 0 ? 'right' : 'left' }} wow slideIn{{ $loop->iteration % 2 == 0 ? 'Right' : 'Left' }}" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">
                            {{ $experience->time_period }}
                        </div>
                        <h2>{{ $experience->title }}</h2>
                        <h4>{{ $experience->company_and_address}}</h4>
                        <p>{{ $experience->des }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Job Experience End -->
