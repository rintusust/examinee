@extends('layouts.app')

@section('content')
<section>
    <div class="container-fluid bg-primary text-light pt-5">
        <div class="page-title text-center">
        
            <h3>Instructor Courses</h3>
            @include('scholar.nav')
        </div>
    
    </div>
</section>
<section>
    <div class="container">
        <div class="row py-3">
            <div class="col">
                <h3>Courses</h3>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort By
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="javascript:void(0)" ><span>Recently Accessed</span></a>
                                 <a class="dropdown-item" href="javascript:void(0)" ><span>Recently Enrolled</span></a>
                                 <a class="dropdown-item" href="javascript:void(0)" ><span>Title: A-to-Z</span></a>
                                 <a class="dropdown-item" href="javascript:void(0)" ><span>Title: Z-to-A</span></a>
                                 <a class="dropdown-item" href="javascript:void(0)"><span>Completion: 0% to 100%</span></a>
                                 <a class="dropdown-item" href="javascript:void(0)"><span>Completion: 100% to 0%</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <form class="" _lpchecked="1">
                            <label for="search-courses-input" class="control-label sr-only">Search my courses</label><span class="input-group"><input placeholder="Search my courses" required="" autocomplete="off" id="search-courses-input" class="form-control" value=""><span class="input-group-btn"><button aria-label="Search my courses" type="submit" class="btn btn-secondary" disabled=""><span class="fas fa-search"></span></button>
                            </span>
                            </span>
                        </form>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-primary">Create Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <new-course></new-course>
            </div>
        </div>
        <div class="row">
            <div class="col col-3">
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Course Title</h5>
                        <p class="card-text">Some quick example text to build on the Course Title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Course Title</h5>
                        <p class="card-text">Some quick example text to build on the Course Title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Course Title</h5>
                        <p class="card-text">Some quick example text to build on the Course Title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Course Title</h5>
                        <p class="card-text">Some quick example text to build on the Course Title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Course Title</h5>
                        <p class="card-text">Some quick example text to build on the Course Title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection