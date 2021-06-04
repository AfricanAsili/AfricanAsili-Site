@extends('layouts.starter')
@extends('layouts.nav')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <div class="row">
                    <div class="col-lg" style="height: 200px;background-image: url('/images/sergey-pesterev-unsplash.jpg');background-size: cover;background-position: center;">
                        <div class="row">
                            <div class="col-lg">
                                <img src="/images/africanasili_whitelogo.png" alt="" class="img-fluid" style="padding: 0;height: 150px;margin: 2% 35%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 7px;background-color: #F1F1F1;">
                    <div class="col-lg-2" style="">
                        <div class="row" style="padding: 0 5px;">
                            <div class="col-lg" style="height: 100px;background-image:url('/images/sergey-pesterev-unsplash.jpg');background-size: cover;">
                                <h4 style="font-family: poppins;font-weight: bold;color: white;text-align:center;margin-top: 30%;">QUICK LINKS</h4>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 5px;">
                            <div class="col-lg" style="height: 200px; background-color: white; border: 1px solid #CECECE;">
                                <p style="font-size: 10px;">Click on any of the links below to jump directly to that subject</p>
                                <ul class="list-group" style="list-style: none;">
                                    <li>1.0 The Story</li>
                                    <li>2.0 Our Story</li>
                                    <li>3.0 The Team</li>
                                    <li>4.0 Contributing</li>
                                    <li>5.0 Want to Help?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg">
                                <h2 style="text-align: center;font-weight: bold;font-size: 50px;">ABOUT US</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection