<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2024 <a href="#">Pencarian Bengkel</a> Fadhel.
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=" {{ asset('xoobengkel/vendor/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('xoobengkel/vendor/bootstrap/js/bootstrap.min.js') }} "></script>

<script src="{{ asset('xoobengkel/assets/js/isotope.min.js') }} "></script>
<script src="{{ asset('xoobengkel/assets/js/owl-carousel.js') }} "></script>
<script src="{{ asset('xoobengkel/assets/js/wow.js') }} "></script>
<script src="{{ asset('xoobengkel/assets/js/tabs.js') }} "></script>
<script src="{{ asset('xoobengkel/assets/js/popup.js') }}"></script>
<script src="{{ asset('xoobengkel/assets/js/custom.js') }} "></script>

<script>
    function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
    });
</script>
