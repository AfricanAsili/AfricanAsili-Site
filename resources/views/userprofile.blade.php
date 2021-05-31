@extends('layouts.starter')

@extends('layouts.nav')
@section('content')
    <div class="container-fluid" style="background-color: #F1F1F1;">
        <div class="row">
            <div class="col-lg">
                <div class="row">
                    <div class="col-lg" style="height: 200px;background-image: url('/images/sergey-pesterev-unsplash.jpg');background-size: cover;background-position: center;">
                        <div class="row">
                            <div class="col-lg">
                                <img src="/images/user_prof.png" alt="" class="img-fluid" style="border-radius: 50%;border: 1px solid white;padding: 0;height: 150px;margin: 3% 42%;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <img src="/images/orange_camera.png" alt="" class="img-fluid" style="margin: -6% 50%;height: 30px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <img src="/images/orange_camera.png" alt="" class="img-fluid" style="margin: -7% 0 0 96%;height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2" style="font-family: poppins;padding-top: 8dp;height: 100%;">
                        <div class="row">
                            <div class="col-lg" style="background-color: white;margin:5px 10px 5px 5px;border: 1px solid #CECECE;">
                                <small><strong>Intro</strong></small><br>
                                <small style="font-size: 10px;min-height: 150px;">The son of great konki. A carpenter in the making and other thing. A king in the making. He loves to eat and has a best frind named scooby. A 9 year old dog who adores him.</small>
                                <h5 style="margin-top: 15px;">Mekatilili Wa Menza</h5>
                                <hr>
                                <ul class="list-group" style="list-style: none;">
                                    <li><small style="font-size: 10px;">Profile Views: 23</small></li>
                                    <li><small style="font-size: 10px;">Lives in Rongai, Nairobi, Kenya</small></li>
                                    <li><small style="font-size: 10px;">From Njoro, Nakuru, Kenya</small></li>
                                    <li><small style="font-size: 10px;">Joined on 8th June, 2022</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row" style="margin-bottom: 1%;">
                            <div class="col-lg" style="margin-top: 5px;">
                                <div class="row" style="background-color: white;border-radius: 5px;margin: 0 10px;padding: 8px;">
                                    <div class="col-lg-1" style="height: 50px; width: 50px;border-radius: 50%;background-image: url('/images/sergey-pesterev-unsplash.jpg');background-size: cover;"></div>
                                    <div class="col-lg-11">
                                        <div class="row">
                                            <div class="col-lg">
                                                <textarea placeholder="Share a piece of history?" rows="3" style="width: 100%;margin-top: 1%; border: none;font-family: poppins;"></textarea>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 2%;">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-8">
                                                <div class="row" style="font-family: poppins;">
                                                    <div class="col-lg-3">
                                                        <img src="/images/camera.png" alt="" class="img-fluid" style="height: 30px;display: inline;"><span><small>Photo</small></span>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <img src="/images/youtube.png" alt="" class="img-fluid" style="height: 30px;display: inline;"><span><small>Video</small></span>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <img src="/images/map.png" alt="" class="img-fluid" style="height: 30px;display: inline;"><span><small>Location</small></span>
                                                    </div>
                                            
                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg" style="margin: 5px;">
                                <div class="row" style="background-color: white;margin: 5px;padding-top: 20px;border-radius: 15px;">
                                    <div class="col-lg">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <img src="/images/user_prof.png" alt="" class="img-fluid" style="height: 70px; border-radius: 50%;box-shadow: 0 1;">
                                            </div>
                                            <div class="col-lg-9">
                                                <div style="margin-left: -11%;">
                                                    <small><strong>Earnest Yung</strong></small><br>
                                                    <small class="text-muted">Kenyan born youtuber who's inlove with videography and making lasting ..</small><br>
                                                    <small>8h</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <img src="/images/menu.png" alt="" class="img-fluid" style="height: 20px;float: right;">
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 1%;margin-bottom: 1%;">
                                            <div class="col-lg">
                                                <small>Did you know that chyulu hills located in Manullo Cameroon used to serve as the centerpiece home of the Takaki Tribe. It's said that the piece at the center glows in the night to ward off evil spirits <a href="#" style="text-decoration: none;">...read more</a></small>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;margin-top: 1%;margin-bottom: 1%;">
                                            <div class="col-lg-4">
                                                <img src="/images/like.png" alt="" class="img-fluid" style="height: 20px; width: 20px;display: inline-block;margin-right: 5px;"><h6 class="text-muted" style="display: inline-block;"> LIKE</h6><small class="text-muted"> 24</small>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/images/comment.png" alt="" class="img-fluid" style="height: 20px; width: 20px;display: inline-block;margin-right: 5px;"><h6 class="text-muted" style="display: inline-block;"> COMMENT</h6><small class="text-muted"> 324</small>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/images/share.png" alt="" class="img-fluid" style="height: 20px; width: 20px;display: inline-block;margin-right: 5px;"><h6 class="text-muted" style="display: inline-block;"> SHARE</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="row" style="background-color: white;margin: 10px;padding-top: 20px;border-radius: 15px;">
                                    <div class="col-lg">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <img src="/images/user_prof.png" alt="" class="img-fluid" style="height: 70px; border-radius: 50%;box-shadow: 0 1;">
                                            </div>
                                            <div class="col-lg-9">
                                                <div style="margin-left: -11%;">
                                                    <small><strong>Earnest Yung</strong></small><br>
                                                    <small class="text-muted">Kenyan born youtuber who's inlove with videography and making lasting ..</small><br>
                                                    <small>8h</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <img src="/images/menu.png" alt="" class="img-fluid" style="height: 20px;float: right;">
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 1%;margin-bottom: 1%;">
                                            <div class="col-lg">
                                                <small>Did you know that chyulu hills located in Manullo Cameroon used to serve as the centerpiece home of the Takaki Tribe. It's said that the piece at the center glows in the night to ward off evil spirits <a href="#" style="text-decoration: none;">...read more</a></small>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;margin-top: 1%;margin-bottom: 1%;">
                                            <div class="col-lg-4">
                                                <img src="/images/like.png" alt="" class="img-fluid" style="height: 20px; width: 20px;display: inline-block;margin-right: 5px;"><h6 class="text-muted" style="display: inline-block;"> LIKE</h6><small class="text-muted"> 24</small>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/images/comment.png" alt="" class="img-fluid" style="height: 20px; width: 20px;display: inline-block;margin-right: 5px;"><h6 class="text-muted" style="display: inline-block;"> COMMENT</h6><small class="text-muted"> 324</small>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/images/share.png" alt="" class="img-fluid" style="height: 20px; width: 20px;display: inline-block;margin-right: 5px;"><h6 class="text-muted" style="display: inline-block;"> SHARE</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg" style="background-color: white; margin: 5px 10px 5px 5px;border: 1px solid #CECECE;">
                                <h5><strong>Topics of Interest</strong></h5>
                                <p>#King Leopold #Folklore #Traditions #WorldWarII #Foods #Pre1900 #Colonization</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg" style="background-color: white; margin: 5px 10px 5px 5px;border: 1px solid #CECECE;">
                                <h5 style="text-align: center;"><strong>Shared Media</strong></h5>
                                <p>#King Leopold #Folklore #Traditions #WorldWarII #Foods #Pre1900 #Colonization</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg" style="background-color: white; margin: 5px 10px 5px 5px;border: 1px solid #CECECE;">
                                <h5 style="text-align: center;"><strong>Bookmarks</strong></h5>
                                <p>#King Leopold #Folklore #Traditions #WorldWarII #Foods #Pre1900 #Colonization</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection