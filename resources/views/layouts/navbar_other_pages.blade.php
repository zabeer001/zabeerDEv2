<style>
    @media (min-width: 992px) {
    .navbar {
     position: absolute; */
        width: 100%; */
        padding: 30px 60px;
        background: red !important;
        border-bottom: 1px dashed rgba(256, 256, 256, .2); */
         z-index: 9; 
    }
}
</style>
<div class="navbar navbar-expand-lg bg-light navbar-light" style="background-color: red;">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand">zabeer</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">Skills</a>
                <a href="#experience" class="nav-item nav-link">Experience</a>
                <a href="#price" class="nav-item nav-link">Price</a>
                <a href="#portfolio" class="nav-item nav-link">Live Projects</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>