@extends('layouts.master')

@section('content')

    <section class="contact sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-block">
                        <div class="contact-info text-center">
                            <div class="info-des">
                                <h4><span>lorem ipsum dolor sit amet</span>lorem ipsum dolor sit</h4>
                                <span class="c-name">Fulcrum &copy;</span><br>
                                <address>44 Shirley Ave.<br>West Chicago, IL 60185</address>
                                <span><strong>contact@fulcrum.com</strong></span><br>
                                <span><strong>801-716-4544</strong></span><br>
                                <span class="ft-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                            </div>
                        </div>
                        <div class="contact-form">
                            <h2>Contact Us</h2>
                            <form action="#" class="form-contact">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-red btn-fw btn-lg">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- contact -->

@endsection

