@extends('layouts.web.frame')

@section('content') 

<section id="home">
    <div class="container-fluid">
        <div class="row">
            <div id="slides">
                <ul class="slides-container">
                    <li>
                        <img src="{{url('web/images/slider-1.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="container">
                                <div class="row height100">
                                    <div class="col-md-4 col-sm-8 offset-1 col-10 align-self-center">
                                       <h2 class="color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                                        <p class="color-white">Fusce scelerisque fermentum magna ac laoreet. Nunc fermentum consequat bibendum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{url('web/images/slider-2.jpg')}}" alt="">
                        <div class="overlay">
                            Slide two
                        </div>
                    </li>
                    <li>
                        <img src="{{url('web/images/slider-3.jpg')}}" alt="">
                        <div class="overlay">
                            Slide three
                        </div>
                    </li>
                </ul>
                <nav class="slides-navigation">
                    <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </nav>
                <div class="bounce-btn"><i class="fa fa-angle-double-down ml-2 mr-2" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
    
</section>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img">
                <img src="{{url('web/images/iphone.png')}}" class="width100">
            </div>
            <div class="col-md-6">
                <div class="text">    
                    <h2 class="title"><strong>ABOUT RAI</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta enim ut metus pharetra, eget scelerisque nisi consequat. Duis molestie lectus ut tortor pellentesque, sit amet suscipit ipsum semper. Aliquam enim mi, rutrum eu dui nec, malesuada elementum libero. In quis mattis libero. Aenean sed felis orci. Sed vel augue non libero consectetur vehicula et in nunc. Praesent non molestie lorem, rutrum rutrum nibh. Ut at efficitur lectus. Nunc tincidunt vitae magna ac finibus. Pellentesque vestibulum metus id aliquam vestibulum. Cras at metus mi. Duis eget pellentesque leo. Morbi accumsan felis at odio viverra imperdiet. Quisque nec lectus turpis. Quisque porta nec quam eu dignissim. Sed sed efficitur lacus, non vulputate nunc.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Integer mollis purus quis enim aliquam, sed laoreet elit sodales.</li>
                        <li>Donec malesuada nisl sit amet nunc venenatis egestas.</li>
                        <li>Vivamus non lacus eu metus condimentum accumsan at ac est.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="products">
    <div class="diagonal">
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="title color-white mb-4"><strong>Products</strong></h2>
                    </div>
                    <div class="col-md-4 col-sm-6 product-item">
                        <div class="card mb-3">
                            <img class="card-img-top width100" src="{{url('web/images/grayscale.jpg')}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title color-medium">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-block">
                                <button class="btn btn-pink width100" data-toggle="modal" data-target="#product-popup">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 product-item">
                        <div class="card mb-3">
                            <img class="card-img-top width100" src="{{url('web/images/grayscale.jpg')}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title color-medium">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-block">
                                <button class="btn btn-pink width100" data-toggle="modal" data-target="#product-popup">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 product-item">
                        <div class="card mb-3">
                            <img class="card-img-top width100" src="{{url('web/images/grayscale.jpg')}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title color-medium">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-block">
                                <button class="btn btn-pink width100" data-toggle="modal" data-target="#product-popup">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 product-item">
                        <div class="card mb-3">
                            <img class="card-img-top width100" src="{{url('web/images/grayscale.jpg')}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title color-medium">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-block">
                                <button class="btn btn-pink width100" data-toggle="modal" data-target="#product-popup">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 product-item">
                        <div class="card mb-3">
                            <img class="card-img-top width100" src="{{url('web/images/grayscale.jpg')}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title color-medium">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-block">
                                <button class="btn btn-pink width100" data-toggle="modal" data-target="#product-popup">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 product-item">
                        <div class="card mb-3">
                            <img class="card-img-top width100" src="{{url('web/images/grayscale.jpg')}}" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title color-medium">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-block">
                                <button class="btn btn-pink width100" data-toggle="modal" data-target="#product-popup">View More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-5 mb-5">
                        <a href="#" id="productload" class="btn btn-white pr-5 pl-5"><strong>Load More</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.467218563822!2d106.7793339142043!3d-6.201929162480522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBinus+University%2C+Anggrek+Campus!5e0!3m2!1sen!2sid!4v1508727225228" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 borderbot-grey mb-5">
                <form class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="title color-medium mb-3"><strong>Find More About Us</strong></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name*</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone Number*</label>
                            <input type="text" class="form-control" placeholder="(Optional)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Subject*</label>
                            <select class="form-control">
                                <option>About Us</option>
                                <option>Products</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Message*</label>
                            <textarea class="form-control" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="profilepic uploadphoto">
                                <div class="form-group">
                                    <label class="label">
                                        <i class="fa fa-camera" aria-hidden="true"></i>
                                        <span class="title">Click to Upload File</span>
                                        <input type="file" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-pink pl-5 pr-5">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-12 text-center items">
                <h4 class="color-medium"><strong>Follow Us in</strong></h4>
                <div class="separator"></div>
                <div class="socialmedia mt-4 mb-3">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="http://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.plus.google.com/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-center items">
                <h4 class="color-medium"><strong>Get in Touch</strong></h4>
                <div class="separator"></div>
                <div class="text mt-4 mb-3">
                    <p class="mb-0"><a href="#">rai@rai.com</a></p>
                    <p class="mb-0">+628 8888 8888</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-center items">
                <h4 class="color-medium"><strong>Find Us</strong></h4>
                <div class="separator"></div>
                <div class="text mt-4 mb-3">
                    <p><strong>Binus University</strong><br>RT.1/RW.9, Jl. Kb. Jeruk Raya No.27, RT.1/RW.9, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection