<?php

use App\Models\Skill;

// Fetch all skills from the database
$skills = Skill::all();

?>

<style>
    .section-header {
        text-align: center !important;
        margin-bottom: 40px;
    }

    .about-text {
        text-align: center;
        max-width: 700px;
        margin: 0 auto;
    }

    .skills {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn-primary {
        display: block;
        margin: 20px auto 0 auto;
    }
</style>


<div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="mt-5">
                <div class="about-content">
                    <div class="section-header text-left">
                        <p>Learn About Me</p>
                        <h2>Skills</h2>
                    </div>

                    <div class="skills row g-3">
                        @foreach ($skills as $skill)
                            <div class="col-md-4 mt-4">
                                <div class="card shadow-sm p-3">
                                    <img src="{{ asset('storage/' . $skill->image) }}" alt="{{ $skill->name }}"
                                        class="card-img-top" style="height: 150px; object-fit: contain;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $skill->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
