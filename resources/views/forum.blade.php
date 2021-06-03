@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<!-- MAIN -->
<!DOCTYPE html>
<html lang="en">
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
                    <h4 class="lts-4 color-red">Welcome to Canada's best</h4>
                    <h1 class="p-3 pl-0 lts-4 color-light-black font-600">Insurance Hunting Marketplace.</h1>
                </div>
            </div>
            <div class="row d-flex mt-15 flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <div class="card form-card">
                        <form class="quote-form" id="quote-form" method="POST" action="{{ route('add.forum') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="field">
                                <label>Postal Code</label>
                                <input type="text" name="postalcode" required value="" placeholder="Used to provide an accurate quote" autofocus >
                            </div>
                            <div class="field">
                                <label>Phone No.</label>
                                <input type="text" name="number" value="" required placeholder="So we can contact you." autofocus >
                            </div>
                            <div class="field">
                                <label>Email</label>
                                <input type="text" name="email" value="" required placeholder="This will be your login info." autofocus >
                            </div>
                            <div class="field">
                                <label>Insurance Type</label>
                                <select name="insurancetype" value="" type="text" required placeholder="This will be your login info." autofocus >
                                    <option value="select1">select</option>
                                    <option value="saab">select2</option>
                                    <option value="mercedes">select3</option>
                                </select>
                            </div>
                            <input type="submit" name="Continue" value="Continue" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>
</html>


<!-- end MAIN -->
@endsection
@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<!-- MAIN -->
<!DOCTYPE html>
<html lang="en">
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
                    <h4 class="lts-4 color-red">Welcome to Canada's best</h4>
                    <h1 class="p-3 pl-0 lts-4 color-light-black font-600">Insurance Hunting Marketplace.</h1>
                </div>
            </div>
            <div class="row d-flex mt-15 flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <div class="card form-card">
                        <form class="quote-form" id="quote-form" method="POST" action="{{ route('add.forum') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="field">
                                <label>Postal Code</label>
                                <input type="text" name="postalcode" required value="" placeholder="Used to provide an accurate quote" autofocus >
                            </div>
                            <div class="field">
                                <label>Phone No.</label>
                                <input type="text" name="number" value="" required placeholder="So we can contact you." autofocus >
                            </div>
                            <div class="field">
                                <label>Email</label>
                                <input type="text" name="email" value="" required placeholder="This will be your login info." autofocus >
                            </div>
                            <div class="field">
                                <label>Insurance Type</label>
                                <select name="insurancetype" value="" type="text" required placeholder="This will be your login info." autofocus >
                                    <option value="select1">select</option>
                                    <option value="saab">select2</option>
                                    <option value="mercedes">select3</option>
                                </select>
                            </div>
                            <input type="submit" name="Continue" value="Continue" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>
</html>


<!-- end MAIN -->
@endsection
