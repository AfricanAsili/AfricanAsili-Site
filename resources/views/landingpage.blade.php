@extends('layouts.main')

@section('content')
<!-- <img src="/images/sergey-pesterev-unsplash.jpg" alt="image"> -->
<div class="container-fluid" style="background-image:url('/images/sergey-pesterev-unsplash.jpg'); background-size: cover;height: 100vh;background-repeat: no-repeat;">
    <div class="row" style="">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="row gy-4" style="margin-top: 16%;">
                <div class="col-lg-12">
                    <img src="/images/africanasili_whitelogo.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg mx-auto">
                    <a class="btn btn-primary mx-auto" style="display:block;background-color: #264653;border-radius:0;color:rgb(255, 255, 255);margin: 0 auto;font-family:Poppins;font-weight:bold;border:none;width: 20%;padding: 15px 10px;" href="/home">GET STARTED</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <div class="row" style="margin: 100px 0;">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <ul class="" style="list-style: none;width: 100%;text-align: center;color: white;">
                <li style="margin-right: 7%;display: inline-block;"><h4>FAQs</h4></li>
                <li style="margin-right: 7%;display: inline-block;"><h4>About Us</h4></li>
                <li style="margin-right: 7%;display: inline-block;"><h4>cc</h4></li>
                <li style="margin-right: 7%;display: inline-block;"><h4>WorkWithUs</h4></li>
            </ul>
        </div>
        <div class="col-lg-3">
            <small style="color: white;">Image on Unsplash by Sergey <a href="https://unsplash.com/photos/wdMWMHXUpsc">Pesterev</a></small>
        </div>
    </div>
</div>
@endsection