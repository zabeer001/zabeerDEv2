@extends('layouts.master_other_pages') <!-- Extending the master layout -->

@section('title', 'Projects') <!-- Setting the title -->

@section('content') <!-- This is where the landing page content goes -->
    <br><br><br> <br> <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-success text-white text-center">
                        <h2>{{ $project->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            <strong>Description:</strong> <br> {{ $project->description }}
                        </p>
                        @if ($project->git_link)
                        <p>
                            <strong>GitHub Repository:</strong>
                            <a href="{{ $project->git_link }}" target="_blank">{{ $project->git_link }}</a>
                        </p>
                        @endif
                    </div>
                    @if ($project->live_link)
                        <div class="card-footer text-center">
                            <a href="{{ $project->live_link }}" class="btn btn-primary" target="_blank">View on Live</a>
                        </div>
                    @else
                        <div class="card-footer text-center">
                            <a href="{{ $project->git_link }}" class="btn btn-primary" target="_blank">View on GitHub</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
