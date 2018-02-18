<footer>
    <div class="footer-info-wrapper">
        <div class="row footer-info">
            <div class="col footer-tentang">
                <h5>Tentang</h5>
                <h6>
                    <?php echo esc_attr(get_option('option_tentang_title')); ?>
                </h6>
                <p>
                    <?php echo esc_attr(get_option('option_tentang_content')); ?>
                </p>
            </div>
            <div class="col footer-kontak">
                <h5>Kontak Kami</h5>
                <p>
                    <?php echo esc_attr(get_option('option_kontak_jalan')); ?>
                </p>
                <p>
                    <span class="glyphicon glyphicon-earphone"></span>
                    <?php echo esc_attr(get_option('option_kontak_nomor')); ?>
                </p>
                <p>
                    <?php echo esc_attr(get_option('option_kontak_website')); ?>
                </p>
                <div class="kontak-sosial">
                    <a href="<?php echo esc_attr(get_option('option_kontak_fb')); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/_assets/img/social/fb.png" alt="">
                    </a>
                    <a href="<?php echo esc_attr(get_option('option_kontak_tw')); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/_assets/img/social/tw.png" alt="">
                    </a>
                    <a href="<?php echo esc_attr(get_option('option_kontak_ig')); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/_assets/img/social/ig.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col footer-lokasi">
                <h5>Lokasi Kami</h5>
                <div id="map"></div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -7.3647326,
                            lng: 109.2331294
                        };
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 17,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy;
            <?php echo date('Y'); ?> Copyright
            <?php bloginfo('name'); ?>
        </p>
    </div>

</footer>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh-S941a5gnMzgyWjmvYiB8du_BsJK2Ck&callback=initMap">
</script>

<script src="<?php echo get_template_directory_uri() ?>/_assets/swiper/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/_assets/swiper/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/_assets/swiper/js/swiper.esm.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/_assets/swiper/js/swiper.esm.bundle.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
        autoplay: {
        delay: 3000,
  },

    })
</script>
<script src="<?php echo get_template_directory_uri() ?>/_assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/_assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/_assets/js/bootstrap.min.js"></script>
</body>

</html>