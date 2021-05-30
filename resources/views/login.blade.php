@extends('layouts.starter')

@section('content')
<div class="container-fluid" style="background-image: url('/images/africa_map.png'); height: 100vh;background-size: cover;">
    <div class="row" style="background-color: #264653af;height: 100vh;">
        <div class="col-lg-8" style="height: 80%;background-color: white;margin: auto;">
            <div class="row" style="height: 100%;">
                <div class="col-lg-6" style="height: 100%;background-image:url('/images/forest_bike.png');background-position: right bottom;">
                    <div class="row" style="background-color: #2a9d908c;height: 100%;">
                        <div class="col-lg">
                            <img src="/images/discover_africa.png" alt="" class="img-fluid" style="width:90%;margin: 10% auto;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg">
                            <img src="/images/africanasili_smaller_logo.png" alt="" class="img-fluid" style="margin: 3% 25%;">
                            <h3 style="text-align: center;font-family: poppins;font-weight: 2000;margin: 5% 0;"><strong>SIGNIN</strong></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <input class="userinput_input" type="text" placeholder="Email Address" style="width: 100%;border:none;font-family: poppins;padding-bottom: 5px;border-bottom: 1px solid gray;">
                                </div>
                                <div class="col-lg-2">
                                    <img src="/images/mail.png" alt="" class="img-fluid" style="height: 20px;">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10%;">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <input class="userinput_input" type="text" placeholder="Password" style="width: 100%;border:none;font-family: poppins;padding-bottom: 5px;border-bottom: 1px solid gray;">
                                </div>
                                <div class="col-lg-2">
                                    <img src="/images/passkey.png" alt="" class="img-fluid" style="height: 30px;margin-left: -13%;">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5%;">
                                <div class="col-lg-12">
                                    <button class="btn" style="background-color: #264653;font-family: poppins;color:white;border:none;border-radius:0;margin-left: 40%;padding: 10px 20px;">LET'S GO</button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 4%;">
                                <div class="col-lg">
                                    <p style="font-family: poppins;text-align: center;">Don't have an account? <a href="/signup" style="text-decoration: none;font-weight: bold;font-size: 20px;">SignUp</a> </p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10%;font-family: poppins;">
                                <div class="col-lg-6">
                                    <p style="text-align: left;"><a href="/aboutus" style="text-decoration: none;">About Us</a></p>
                                </div>
                                <div class="col-lg-6">
                                    <p style="text-align: right;"><a href="/aboutus" style="text-decoration: none;">FAQs</a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection