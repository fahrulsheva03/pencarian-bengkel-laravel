@include('user.layouts.header')



<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    @include('user.layouts.navbar')

    <!-- ***** Main Banner Area Start ***** -->
    <section id="section-1">
        <div class="content-slider">
            <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
            <input type="radio" id="banner2" class="sec-1-input" name="banner">
            <input type="radio" id="banner3" class="sec-1-input" name="banner">
            <input type="radio" id="banner4" class="sec-1-input" name="banner">
            <div class="slider">

                <div id="top-banner-1" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Welcome To </h2>
                            <h1>Pencarian Bengkel</h1>
                        </div>
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>

                <div id="top-banner-2" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Welcome To </h2>
                            <h1>Pencarian Bengkel</h1>
                        </div>
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>

                <div id="top-banner-3" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Welcome To </h2>
                            <h1>Pencarian Bengkel</h1>
                        </div>
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>

                <div id="top-banner-4" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Welcome To </h2>
                            <h1>Pencarian Bengkel</h1>
                        </div>
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>






            </div>
            <nav>

            </nav>
        </div>
    </section>

    <div class="visit-country">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="items">
                        <div class="row">
                            @foreach ($datas as $d)
                                <div class="col-lg-12">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">
                                                <div class="image">
                                                    <img src="{{ asset($d->gambar) }} " alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-7">
                                                <div class="right-content">
                                                    <h4> {{ $d->nama_bengkel }} </h4>
                                                    <div class="main-button">
                                                        <a href=" {{ url('detail/' . $d->id) }} ">Detail</a>
                                                    </div>
                                                    <p> {{ $d->keterangan }} </p>
                                                    <ul class="info">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="side-bar-map">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                                        width="100%" height="550px" frameborder="0"
                                        style="border:0; border-radius: 23px; " allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.layouts.footer')

</body>

</html>



{{-- @include('user.layouts.footer') --}}
