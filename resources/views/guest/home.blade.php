@extends('layouts.app')

@section('content')

    <!-- Top Container -->
    <section class="top-container">
        <header class="showcase">
            <video  height="700x" width="880px" type="video/mp4" autoplay controls>
                <source src="/videos/Aquaculture.mp4">
            </video>
        </header>
        <div class="top-box top-box-a">
            <a href="/formRegister" class="btn btn-join">Join Us !</a>
            <p class="benefits" style="font-size: 30px">Become our member and get all the great features in this website !</p>

        </div>
        <div class="top-box top-box-b">
            <h4 style="font-size: 45px">Membership</h4>
            <p class="price">Rp. 50.000/mo</p>
            <a href="/formRegister" class="btn btn-join">Join Now !</a>
        </div>
    </section>

    <h1 class="title">Smart Facts</h1>

    <div class="displayimage">
        <img src="images/faktor.png">
        <img src="images/fishfeeding.jpg">
        <img src="images/nutrisi.png">
        <img src="images/sirkulasinutrisi.jpg">
    </div>


@endsection


