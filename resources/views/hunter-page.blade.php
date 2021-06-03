@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<header>
    <div class="header-inner">
        <div class="start-a-quote-parent">
            <div class="container">
                <div class="row header-top">
                    <div class="col-4 pl-0">
                        <div class="logo">
                            <img src="/images/logo.png">
                        </div>
                    </div>
                    <div class="col-8 pd-0 d-flex flex-center flex-end">
                        <div class="top-menu">
                            <ul class="d-flex">
                                <li class="hunt-li" ><button type="button" class="btn bg-yellow btn-warning p-2 "><a class="text-dark  font-600" href="#">My Hunter</a></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row d-flex flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <h1 class="p-3 pl-0 lts-4 color-light-black font-600">"Here's Your Hunter"</h1>
                </div>
            </div>
            <div class="row d-flex mt-15 flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <div class="card form-card">
                        <div class="hunter-select-box">
                            <div class="hunter-info col-11 d-flex pd-0 flex-center">
                                <div class="hunter-name">
                                    <h4 class="color-red">Best advisor</h4>
                                </div>
                                <div class="hunter-info-box d-flex pd-0 col-12">
                                    <div class="box-left col-6">
                                        <img src="/images/hunter-box-image.png">
                                    </div>
                                    <div class="box-right col-6 pd-0">
                                        <h5 class="color-light-black">Lisa Staffen</h5>
                                        <ul>
                                            <li>(855) 289-6609</li>
                                            <li>Ext. 0091</li>
                                            <li>lisastaffen@hunterplace.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <ul>
                                    <li>Enter Vehicles and Drivers Info</li>
                                    <li>Compare Offers</li>
                                    <li>Purchase your best value Insurance</li>
                                </ul>
                            </div>
                            <input type="submit" name="Continue" value="Continue" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>

@endsection
