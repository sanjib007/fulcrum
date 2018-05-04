@extends('layouts.master')

@section('content')

    <section class="slider mb-15">
        <div class="slider-container owl-carousel owl-theme">
            <div class="slider-item" style="background-image: url('{{asset('assets/images/slider-bg.jpg')}}')">
                <div class="slider-content">
                    <h2>Fulcrum Design LLC</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam<br>nonumy eirmod tempor
                        invidunt ut labore et dolore magna<br>aliquyam erat, sed diam voluptua.</p>
                    <a href="#" class="btn btn-red">Get Started Now</a>
                </div>
            </div> <!-- slider-item -->
            <div class="slider-item" style="background-image: url('{{asset('assets/images/slider-bg')}}.jpg')">
                <div class="slider-content">
                    <h2>Fulcrum Design LLC</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam<br>nonumy eirmod tempor
                        invidunt ut labore et dolore magna<br>aliquyam erat, sed diam voluptua.</p>
                    <a href="#" class="btn btn-red">Get Started Now</a>
                </div>
            </div> <!-- slider-item -->
            <div class="slider-item" style="background-image: url('{{asset('assets/images/slider-bg.jpg')}}')">
                <div class="slider-content">
                    <h2>Fulcrum Design LLC</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam<br>nonumy eirmod tempor
                        invidunt ut labore et dolore magna<br>aliquyam erat, sed diam voluptua.</p>
                    <a href="#" class="btn btn-red">Get Started Now</a>
                </div>
            </div> <!-- slider-item -->
        </div> <!-- slider-container -->
    </section> <!-- slider -->

    <section class="features sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-head text-center">
                        <h2 class="sec-title">Our Features</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 featureHover">
                    <div class="feature text-center" style="background-color:#E7E6E6;">
                        <i class="fas fa-globe"></i>
                        <h5>Innovation</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, necessitatibus. Deserunt?</p>
                    </div>
                </div>
                <div class="col-md-3 featureHover">
                    <div class="feature text-center" style="background-color:#E7E6E6;">
                        <i class="fas fa-clock"></i>
                        <h5>Solution</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, necessitatibus. Deserunt?</p>
                    </div>
                </div>
                <div class="col-md-3 featureHover">
                    <div class="feature text-center" style="background-color:#E7E6E6;">
                        <i class="fas fa-road"></i>
                        <h5>Consultancy</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, necessitatibus. Deserunt?</p>
                    </div>
                </div>
                <div class="col-md-3 featureHover">
                    <div class="feature text-center" style="background-color:#E7E6E6;">
                        <i class="fas fa-heart"></i>
                        <h5>web development</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, necessitatibus. Deserunt?</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- features -->

    <section class="panel-section">
        <div class="panel-block">
            <div class="panel-column">
                <div class="panel-media" style="background-image: url({{asset('assets/images/bg-01.jpg')}})">
                    <a href="#" class="btn-plus btn-plus-br btn-plus-js"><i class="fas fa-plus"></i></a>
                </div>
                <div class="panel-intro-ovl ovl-lfc">
                    <h3>The Firm</h3>
                    <p>Developpement/Integration</p>
                    <div class="des">
                        <span>Service</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, magni suscipit laboriosam
                            totam quisquam vel.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis natus id nemo iste quam
                            sint?</p>
                    </div>
                    <a href="#" class="btn btn-trans">See More</a>
                </div>
            </div> <!-- panel-column -->
            <div class="panel-column">
                <div class="panel-intro">
                    <h3>Web Development</h3>
                    <p>Developpement/Integration, CMS & E-commerces</p>
                    <div class="des">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, sed! Corporis praesentium
                            ullam, nulla, accusamus quis distinctio illum vel quas inventore enim sunt explicabo
                            incidunt iure.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti id eveniet beatae,
                            repellendus repellat asperiores esse quasi sed, soluta non explicabo natus, culpa
                            repudiandae!</p>
                    </div>
                </div>
                <div class="panel-txt-ovl">
                    <h2>Web Development</h2>
                </div>
            </div> <!-- panel-column -->
        </div> <!-- panel-block -->
    </section> <!-- panel-section -->

    <section class="panel-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-block">
                        <div class="panel-column">
                            <div class="panel-intro text-right">
                                <h3>Digital Marketing</h3>
                                <p>Digital Marketing, Search Engine Optimization</p>
                                <div class="des">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, sed! Corporis
                                        praesentium ullam, nulla, accusamus quis distinctio illum vel quas inventore
                                        enim sunt explicabo incidunt iure.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti id eveniet
                                        beatae, repellendus repellat asperiores esse quasi sed, soluta non explicabo
                                        natus, culpa repudiandae!</p>
                                </div>
                            </div>
                            <div class="panel-txt-ovl">
                                <h2>Digital Marketing</h2>
                            </div>
                        </div> <!-- panel-column -->
                        <div class="panel-column">
                            <div class="panel-media"
                                 style="background-image: url('{{asset('assets/images/bg-02.jpg')}}')">
                                <a href="#" class="btn-plus btn-plus-bl btn-plus-js"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="panel-intro-ovl ovl-rtc">
                                <h3>Digital Marketing</h3>
                                <p>Search Engine Optimization</p>
                                <div class="des">
                                    <span>Service</span>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, magni suscipit
                                        laboriosam totam quisquam vel.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis natus id nemo iste
                                        quam sint?</p>
                                </div>
                                <a href="#" class="btn btn-trans">See More</a>
                            </div>
                        </div> <!-- panel-column -->
                    </div> <!-- panel-block -->
                </div> <!-- column -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- panel-section -->

    <section class="panel-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-block">
                        <div class="panel-column">
                            <div class="panel-media"
                                 style="background-image: url('{{asset('assets/images/bg-01.jpg')}}')">
                                <a href="#" class="btn-plus btn-plus-br btn-plus-js"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="panel-intro-ovl ovl-lfc">
                                <h3>Web Development</h3>
                                <p>Developpement/Integration</p>
                                <div class="des">
                                    <span>Service</span>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, magni suscipit
                                        laboriosam totam quisquam vel.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis natus id nemo iste
                                        quam sint?</p>
                                </div>
                                <a href="#" class="btn btn-trans">See More</a>
                            </div>
                        </div> <!-- panel-column -->
                        <div class="panel-column">
                            <div class="panel-intro">
                                <h3>Web Development</h3>
                                <p>Developpement/Integration, CMS & E-commerces</p>
                                <div class="des">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, sed! Corporis
                                        praesentium ullam, nulla, accusamus quis distinctio illum vel quas inventore
                                        enim sunt explicabo incidunt iure.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti id eveniet
                                        beatae, repellendus repellat asperiores esse quasi sed, soluta non explicabo
                                        natus, culpa repudiandae!</p>
                                </div>
                            </div>
                            <div class="panel-txt-ovl">
                                <h2>Web Development</h2>
                            </div>
                        </div> <!-- panel-column -->
                    </div> <!-- panel-block -->
                </div> <!-- column -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- panel-section -->

    <section class="visions sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-head text-center">
                        <h2 class="sec-title">Our Vision</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="vision">
                        <div class="v-head">
                            <h4>Vision Title</h4>
                            <i class="far fa-clone"></i>
                        </div>
                        <div class="v-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ipsum quos pariatur natus
                                officia libero voluptate fuga adipisci aliquid reprehenderit!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vision">
                        <div class="v-head">
                            <h4>Vision Title</h4>
                            <i class="far fa-clone"></i>
                        </div>
                        <div class="v-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ipsum quos pariatur natus
                                officia libero voluptate fuga adipisci aliquid reprehenderit!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vision">
                        <div class="v-head">
                            <h4>Vision Title</h4>
                            <i class="far fa-clone"></i>
                        </div>
                        <div class="v-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ipsum quos pariatur natus
                                officia libero voluptate fuga adipisci aliquid reprehenderit!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="vision">
                        <div class="v-head">
                            <h4>Vision Title</h4>
                            <i class="far fa-clone"></i>
                        </div>
                        <div class="v-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ipsum quos pariatur natus
                                officia libero voluptate fuga adipisci aliquid reprehenderit!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- visions -->

@endsection
@section('script')
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script>
        $(document).ready(function () {
            //featureHover
            $('.featureHover').hover(function () {
                $(this).stop().animate({
                    top: -50
                }, 900, "easeOutBounce");
            }, function () {
                $(this).stop().animate({
                    top: 0
                }, 900, "easeOutBounce");
            });
        });
    </script>
@endsection

@section('css')
    <style>
        .nav-img > li > a {
            width: 174px;
        }
    </style>
@endsection