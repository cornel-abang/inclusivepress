@extends('layouts.app')
@section('content')
    <div class="site-content">
        <div class="atbs-block atbs-block--fullwidth module-contact">
            <div class="atbs-block__inner">
                <div class="section-main">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d193595.66904233702!2d-73.979681!3d40.69748800000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1627980608498!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="section-sub">
                    <div class="container">
                        <div class="section-sub__inner">
                            <div class="contact-heading">
                                <h1>
                                     Contact Us
                                </h1>
                                <p class="contact-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                            </div>
                            
                        <div class="contact-form">
                            <form action="#">
                                <label for="fname">Name:</label>
                                <input type="text" id="fname" name="name"><br><br>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email"><br><br>
    
                                <label for="contactform-message">Message</label>
                                <textarea class="required form-control" id="contactform-message" name="contactform-message" rows="6" cols="30" aria-required="true"></textarea>
                                <button class="btn contactform-submit" type="submit" id="contactform-submit" name="contactform-submit" value="submit">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-content -->

   @endsection