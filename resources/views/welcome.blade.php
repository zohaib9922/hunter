@extends('layouts.master')
@section('title') Home @endsection
@section('content')
<!-- MAIN -->
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="our-partners p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-center">
                    <h4 class="color-white font-600 upper-case lts-4">Our Partners</h4>
                </div>
                <div class="p-3 deskstop-partner-slider col-12 d-flex flex-center">
                    <ul class="carousel col-12 d-flex flex-center">
                        <li class="first-li"><a href="#"><img src="/images/previous.svg"></a></li>
                        <li ><img src="{{ url('/images/dummy-logo.png') }}"></li>
                        <li><img src="{{ url('/images/dummy-logo.png') }}"></li>
                        <li class="pd-13-25"><img src="{{ url('/images/dummy-logo.png') }}"></li>
                        <li><img src="{{ url('/images/dummy-logo.png') }}"></li>
                        <li><img src="{{ url('/images/dummy-logo.png') }}"></li>
                        <li class="last-li"><a href="#"><img src="/images/next-icon.svg"></a></li>
                    </ul>
                </div>
                <div class="pd-0 mobile-partner-slider col-12 d-flex flex-center">
                    <ul class="carousel pd-0 col-12 d-flex flex-center">
                        <li class="first-li"><a href="#"><img src="/images/previous.svg"></a></li>
                        <li><img src="/images/dummy-logo.png"</li>
                        <li class="pd-13-25"><img src="/images/dummy-logo.png"</li>
                        <li class="mr-0"><img src="/images/dummy-logo.png"</li>
                        <li class="last-li"><a href="#"><img src="/images/next-icon.svg"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="our-work p-5 pt-5">
        <div class="container section center-text">
            <div class="row d-flex flex-center">
                <div class="col-12 d-flex pt-5 flex-center">
                    <h4 class="color-light-black font-600 upper-case desktop-h4 lts-4">Let's start your hunt today!</h4>
                    <h4 class="color-light-black font-600 upper-case mobile-h4 lts-4">Let's start your hunt</br> today!</h4>

                </div>
                <div class="col-12">
                    <span class="sperater-grey">Sperater</span>
                </div>
                <div class="col-12 m-0 p-0 d-flex  flex-center">
                    <h1 class="p-3 pl-0 m-0 lts-4 home-box-mobile-h1 color-light-black color-red font-600">How 'MyHunter' Works</h1>
                </div>
                <div class="col-8 col-xxl-12  center-text d-flex pt-2 flex-center">
                    <p class="work-paragraph">Why do you need a hunter? Your dedicated insurance hunter will do what they know best! No generic call center, just good advice when surviving in the insurance land space.</p>
                </div>
            </div>
            <div class="row d-flex pb-5 home-box-parent home-box pb-87 flex-center pt-3 small-p">
                <div class="col-3 d-flex p-3 flex-center">    
                </div>
                <div class="col-4 home-box mobile-pd  bg-gry circle-border d-flex pd-37 text-block flex-center">    
                    <div class="row">
                        <div class="col-12 d-flex flex-center">                    
                            <h5><b>Meet Your Hunter!</b></h5>
                        </div>
                        <div class="col-12 d-flex flex-center">                    
                            <p>You will be matched with a professionally Licensed Insurance Hunter who will protect you from the threats the marketplace throws at you!</p>                    
                        </div>
                    </div>                
                </div>
                <div class="col-1">    
                </div>
                <div class="col-4 bg-gry mobile-pd home-box circle-border d-flex pd-37 text-block flex-center">    
                    <div class="row">
                        <div class="col-12 d-flex flex-center">                    
                            <h5><b>Complete The Hunt</b></h5>
                        </div>
                        <div class="col-12 d-flex flex-center">                    
                            <p>Our system is easy to use!  one you find your best insurance. YourHunter will finalize and complete the process all over!</p>                    
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="row pb-5 d-flex pt-5 home-box home-box-parent flex-center pt-3 small-p">
                
                <div class="col-4 bg-gry mobile-pd  home-box circle-border d-flex pd-37 text-block flex-center">    
                    <div class="row">
                        <div class="col-12 d-flex flex-center">                    
                            <h5><b>Eye On The Prize!</b></h5>
                        </div>
                        <div class="col-12 d-flex flex-center">                    
                            <p>Fill out our customized application to allow your hunter to search out a personalized discounted rate in the wild Insurance Marketplace.</p>                    
                        </div>
                    </div>                
                </div>
                <div class="col-1">    
                </div>
                <div class="col-4 bg-gry mobile-pd  home-box circle-border d-flex pd-37 text-block flex-center">    
                    <div class="row">
                        <div class="col-12 d-flex flex-center">                    
                            <h5><b>Start The Hunt</b></h5>
                        </div>
                        <div class="col-12 d-flex flex-center">                    
                            <p>Sit Back and relax as your personal hunter quickly finds the best insurance package for your trap to take hold of!</p>                    
                        </div>
                    </div>                  
                </div>
                <div class="col-3 home-box d-flex p-3 flex-center">    
                </div>
            </div>
        </div>
    </div>

    <div class="dedicated-section bg-blue p-5 pt-5">
        <div class="container center-text">
            <div class="row d-flex flex-center">
                <div class="col-12 d-flex pt-5 flex-center">
                    <h4 class="color-red font-600 upper-case mobile-h4 lts-4">dedicated insurance marketplace</h4>                    
                </div>
                <div class="col-12">
                    <span class="sperater-grey-small">Sperater</span>
                </div>
                <div class="col-12 d-flex pt-2 flex-center">
                    <h1 class="p-3 pl-0 lts-4 color-white color-red font-600">Insurance For Your Needs</h1>
                </div>
                <div class="col-7 center-text d-flex pt-2 flex-center">
                    <p class="work-dedicated color-grey">Why MyHunter? We are your dedicated insurance marketplace hunter. Not your typical call center, just good advice from a professional insurance hunter.<span class="color-yellow bold"><i>We make the Difference!</i></span></p>
                </div>
            </div>
            
        </div>
        <div class="container pt-69 cards-parent center-text">
            <div class="row card-section-bottom d-flex flex-center">
                <div class="card ">
                    <img class="card-img-top" src="/images/card-image-1.svg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Auto ins.</h5>
                      <p class="card-text">We will give you multiple price options from carriers to make sure you get a fair price..</p>
                    </div>
                    <div class="card-bottom active">
                        <a href="">Get a Qoute Now!</a>
                    </div>
                </div>
                <div class="card ">
                    <img class="card-img-top" src="/images/card-image-2.svg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Home Ins.</h5>
                      <p class="card-text">Your Hunter Advisor will help you every step of the way, so don't worry you're in good hands.</p>
                    </div>
                    <div class="card-bottom">
                        <a href="">Get a Qoute Now!</a>
                    </div>
                </div>
                <div class="card ">
                    <img class="card-img-top last-img" src="/images/card-image-3.svg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Business Ins.</h5>
                      <p class="card-text">Business insurance is important, you need to be protected and we are here to help you.</p>
                    </div>
                    <div class="card-bottom ">
                        <a href="">Get a Qoute Now!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-pink pd-100">
        <div class="container  cards-parent center-text">
            <div class="row">
                <div class="col-6 hunter-img">
                    <img src="/images/meet-hunter.svg">
                </div> 

                <div class="col-6 hunter-mobile-img align-left">
                    <h4 class="lts-4 bold upper-case m-0 color-pink">Meet your Hunter (male & female)</h4>
                    <div class="col-12 pd-0">
                        <span class="sperater-grey-small ">Sperater</span>
                    </div>
                        <h1 class="p-2 pl-0 lts-4 color-light-black font-600 font-35-left">At 'MyHunter' we are in Insurance hunt together! Give us a call now..</h1>
                        
                        <div class="row">
                            <div class="col-6 ">
                                <ul class="meet-hunter-li">
                                    <li class="drop-down">Competitive Rates</li>
                                    <li> Peace of Mind</li>
                                </ul>
                            </div>
                            <div class="col-6 ">
                                <ul class="meet-hunter-li">
                                    <li class="drop-down">Personalized Touch</li>
                                    <li>Your Dedicated Hunter!</li>
                                </ul>
                            </div>

                        </div>
                    

                    <div class="header-block-btn d-flex">
                        <button type="button" class="btn btn-warning bg-yellow p-2 wd-40"><a class="text-dark  font-600" href="#">Start To Get Your Quote</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5 bg-grey">
        <div class="container  center-text">
            <div class="row d-flex flex-center">
                <div class="col-12 d-flex  flex-center">
                    <h4 class=" font-600 upper-case m-0 color-light-black lts-4">Our Testimonials!</h4>                    
                </div>
                <div class="col-12 pd-0">
                    <span class="sperater-grey-small ">Sperater</span>
                </div>
                <div class="col-12 d-flex  flex-center">
                    <h1 class="p-3 mr-10-negative pb-0 pl-0 lts-4  color-red font-600">What 'MyHunter' Clients Say</h1>
                </div>
            </div>
            
        </div>

        <div class="container  pt-60 testimonail-parent cards-parent center-text">
            <div class="row card-section-bottom testimonials-section d-flex flex-center">
                <div class="testimonials-card card ">
                    <img class="card-img-top" src="/images/testimonail-pic-1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Angelina Mac.</h5>
                        <p class="card-text">"Had a great experience in getting insurance through you. Would gladly recommend you to friends and family! You were very fast an efficient."</p>
                    </div>
                </div>
                <div class="card testimonials-card  ">
                    <img class="card-img-top" src="/images/testimonail-pic-2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Fernandes Mark</h5>
                        <p class="card-text">"Thank you for helping me at a particularly difficult time in my life. I would not be able to manage all the details of getting my car back on the road without your input"</p>
                    </div>
                </div>
                <div class="card testimonials-card  ">
                    <img class="card-img-top" src="/images/testimonail-pic-3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Mary J.</h5>
                        <p class="card-text">"I had a positive experience and very good customer service. Quick and easy. I will highly recommend to those who does not experience them yet"</p>
                    </div>
                </div>
            </div>
            <div class="col-12  pb-37 dots">
                <img src="/images/dots.png">
            </div>
        </div>
    </div>
</body>

</html>

<!-- end MAIN -->
@endsection
