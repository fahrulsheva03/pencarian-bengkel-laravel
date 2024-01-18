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

    <!-- ***** Header Area Start ***** -->
    @include('user.layouts.navbar')

    <!-- ***** Header Area End ***** -->

    <div class="second-page-heading" style="background-image: ../../{{ asset($data->gambar) }}">
        <div class="container">
            <div class="row">
                @csrf
                <div class="col-lg-12">
                    <h2>{{ $data->nama_bengkel }}</h2>
                    <h4>{{ $data->alamat }}</h4>
                    <p>{{ $data->keterangan }}</p>
                </div>

            </div>
        </div>
    </div>

    <div class="more-info reservation-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4>Make a Phone Call</h4>
                        <a href="#">+123 456 789 (0)</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Contact Us via Email</h4>
                        <a href="#">company@email.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Visit Our Offices</h4>
                        <a href="#">24th Street North Avenue London, UK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <img src="{{ asset($data->gambar) }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>


    @include('user.layouts.footer')
</body>

</html>
