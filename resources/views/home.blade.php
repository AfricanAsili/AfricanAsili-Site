@extends('layouts.starter')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">African Asili</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User prof</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

   <div class="container-fluid" style="margin-top: 4%;background-color: #F1F1F1;">
       <div class="row" style="padding-top: 20px;padding-left: 10px;">
        <div class="col-lg-2">
            <div class="row" style="border: 1px solid #CECECE;background-color: white;">
                <div class="col-lg">
                    <div class="row" style="background-image: url('/images/sergey-pesterev-unsplash.jpg');height: 150px;background-size: cover;">
                        <div class="col-lg">
                            <div class="row" style="background-image: url('/images/sergey-pesterev-unsplash.jpg'); height: 100px; width: 100px;background-size: cover;margin: 40% auto;border-radius: 50%;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <h5 style="padding-top: 30px;">Mekatilili Wa Menza</h5>
                            <p class="text-muted"> <small>The son of great konki. A carpenter in the making and other thing</small></p>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 5px;">
                        <div class="col-lg">
                            <ul class="list-group" style="list-style: none;">
                                <li><small>Profile View: 23</small></li>
                                <li><small>Post Views: 128</small></li>
                                <li><small>Following: 13</small></li>
                                <li><small>Followers: 43</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color: white;border: 1px solid #CECECE;margin-top: 5px;margin-bottom: 6%;">
                <div class="col-lg">
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-lg">
                            <h6>Groups & People</h6>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-lg">

                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="/images/sergey-pesterev-unsplash.jpg" alt="" class="img-fluid" style="border-radius: 50%;height: 30px; width: 30px;">
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <small>HistoryKe</small>
                                        <small class="text-muted" style="font-size: 8px;">Creating partnership content to the..</small>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="/images/sergey-pesterev-unsplash.jpg" alt="" class="img-fluid" style="border-radius: 50%;height: 30px; width: 30px;">
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <small>HistoryKe</small>
                                        <small class="text-muted" style="font-size: 8px;">Creating partnership content to the..</small>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="/images/sergey-pesterev-unsplash.jpg" alt="" class="img-fluid" style="border-radius: 50%;height: 30px; width: 30px;">
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <small>HistoryKe</small>
                                        <small class="text-muted" style="font-size: 8px;">Creating partnership content to the..</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <small><strong>View more recommendations</strong></small>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg">

                    <div class="row" style="background-color: white;border-radius: 5px;margin: 0 10px;padding: 8px;">
                        <div class="col-lg-1" style="height: 50px; width: 50px;border-radius: 50%;background-image: url('/images/sergey-pesterev-unsplash.jpg');background-size: cover;"></div>
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-lg">
                                    <textarea placeholder="Share a piece of history?" rows="3" style="width: 100%;margin-top: 1%; border: none;"></textarea>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 2%;">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img src="/images/camera.png" alt="" class="img-fluid" style="height: 30px;display: inline;"><span>Photo</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="/images/youtube.png" alt="" class="img-fluid" style="height: 30px;display: inline;"><span>Video</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="/images/map.png" alt="" class="img-fluid" style="height: 30px;display: inline;"><span>Location</span>
                                        </div>
                                
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-2">
           <div class="row" style="padding-right: 5px;">
               <div class="col-lg" style="background-color: white;border: 1px solid #CECECE;">
                    <h5 style="font-weight: bold;margin-top:5px;">Trend Topics</h5>
                    <div class="row">
                        <div class="col-lg">
                            <small>Trending in DRC</small>
                            <p class="display4">#King Leopold</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <ul class="list-group" style="list-style: none;">
                                <li><p>#Folklore</p></li>
                                <li><p>#WorldWar II</p></li>
                                <li><p>#Traditions</p></li>
                            </ul>
                        </div>
                    </div>

               </div>
           </div>
        </div>
       </div>
   </div>
@endsection