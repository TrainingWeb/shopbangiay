@extends('layouts.page')
@section('title','contact')
@section('content')
<!-- Phần Content -->
<div class="content" style="overflow:hidden">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.4911881252697!2d108.24589881441828!3d16.091872188866922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217f1b88622f3%3A0xcdcefc4ae7ba3fa9!2zNzkgVsO1IER1eSBOaW5oLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1522203911083"
            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container">
            <h3 class="please text-center pt-3 pb-5">PLEASE CONTACT US!</h3>
            <div class="contact-form mb-5">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">YOUR REPRESENT ANY COMPANY?</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">WHAT YOUR NAME?</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">WHAT'S YOUR TELEPHONE NUMBER?</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">WHAT'S YOUR EMAIL ADDRESS?</label>
                            <input type="email" class="form-control" id="inputPassword4" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">OPTION CONTACT</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">SUBSTANCE CONTACT</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="submit text-center">
                        <button type="submit" class="btn pt-2">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Hết phần Content -->
@endsection