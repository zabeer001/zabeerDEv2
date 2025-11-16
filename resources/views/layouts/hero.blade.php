<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <p>I'm</p>
                        <h1>{{ $name }}</h1>
                        <h2></h2>
                        <div class="typed-text">{{ $typedText }}</div>
                    </div>
                    <div class="hero-btn">
                        <a class="btn" href="https://github.com/zabeer001/resume/raw/refs/heads/main/zabeer.docx">Resume</a>
<a class="btn" href="https://github.com/zabeer001" target="_blank" rel="noopener noreferrer">Github</a>
                        {{-- <a class="btn" href="">Contact Me</a>  --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="{{ asset('frontend/img/hero.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</div>
