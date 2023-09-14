{{-- <source src="{{url('assets/images/video.mp4')}}" type="video/mp4" /> --}}


@extends('layouts.test')
@section('title', 'Listings Page - Index')

@section('content')

    <h1>Hello mofo</h1>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->




    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><del>$80 000</del> <em>$70 000</em></h2>
                        <p>House &nbsp;/&nbsp; For Sale &nbsp;/&nbsp; 100 sq m &nbsp;/&nbsp; 2010</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/vacation-image-1-1200x600.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/vacation-image-1-1200x600.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/vacation-image-1-1200x600.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br>
            <br>

            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><i class="fa fa-cog"></i> Property Specs</a></li>
                        <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Property Description</a></li>
                        <li><a href='#tabs-3'><i class="fa fa-phone"></i> Contact Details</a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content' style="width: 100%;">
                        <article id='tabs-1'>
                            <h4>Property Specs</h4>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Type</label>

                                    <p>House</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>Bedroom</label>

                                    <p>4</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>Bathroom</label>

                                    <p>4</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>Floor area</label>

                                    <p>80 sq m</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>Country</label>

                                    <p>United Kingdom</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>State</label>

                                    <p>London</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>City</label>

                                    <p>London</p>
                                </div>

                                <div class="col-sm-6">
                                    <label>Zip code</label>

                                    <p>SE7 8HW</p>
                                </div>
                            </div>
                        </article>

                        <article id='tabs-2'>
                            <h4>Property Description</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia doloremque sit, enim
                                sint odio corporis illum perferendis, unde repellendus aut dolore doloribus minima qui
                                ullam vel possimus magnam ipsa deleniti.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus ab
                                numquam magnam aliquid, odit provident consectetur corporis eius blanditiis alias nulla
                                commodi qui voluptatibus laudantium quaerat tempore possimus esse nam sed accusantium
                                inventore? Sapiente minima dicta sed quia sunt?</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum qui, corrupti
                                consequuntur. Officia consectetur error amet debitis esse minus quasi, dicta suscipit
                                tempora, natus, vitae voluptatem quae libero. Sunt nulla culpa impedit! Aliquid
                                cupiditate, impedit reiciendis dolores, illo adipisci, omnis dolor distinctio voluptas
                                expedita maxime officiis maiores cumque sequi quaerat culpa blanditiis. Quia tenetur
                                distinctio rem, quibusdam officiis voluptatum neque!</p>
                        </article>

                        <article id='tabs-3'>
                            <h4>Contact Details</h4>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Name</label>

                                    <p>John Smith</p>
                                </div>
                                <div class="col-sm-6">
                                    <label>Phone</label>

                                    <p>123-456-789 </p>
                                </div>
                                <div class="col-sm-6">
                                    <label>Mobile phone</label>
                                    <p>456789123 </p>
                                </div>
                                <div class="col-sm-6">
                                    <label>Email</label>
                                    <p><a href="#">john@carsales.com</a></p>
                                </div>
                            </div>

                            <img src="assets/images/map.jpg" class="img-fluid" alt="">
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-us">
                        <div class="contact-form">
                            <form action="#" id="contact">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Enter full name"
                                                required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Enter email address"
                                                required="">
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Enter phone"
                                                required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <input type="text" class="form-control" placeholder="From date"
                                                        required="">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <fieldset>
                                                    <input type="text" class="form-control" placeholder="To date"
                                                        required="">
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Send Request</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
@endsection
