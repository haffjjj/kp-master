<?php get_header(); ?>
<div class="container">
    <div class="banner row">
        <div class="col col-banner-title">
            <div class="banner-title">
                <h2>
                    <?php echo esc_attr(get_option('option_banner_title')); ?>
                </h2>
                <p class="banner-subtitle">
                    <?php echo esc_attr(get_option('option_banner_subtitle')); ?>
                </p>
                <br>
                <div class="more">
                    <a href="<?php echo esc_attr(get_option('option_banner_buttonlink')); ?>">
                        <?php echo esc_attr(get_option('option_banner_buttonnama')); ?>
                    </a>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="banner-background">

            </div>
        </div>
    </div>
</div>


<div class="sambutan">
    <div class="title">
        <h4>Sambutan</h4>
        <div class="title-line"></div>
    </div>

    <div class="sambutan-profile">
        <div style="background-image:url(<?php echo esc_attr(get_option('option_sambutan_img')); ?>)" class="sambutan-profile-photo">
        </div>
        <h5>
            <?php echo esc_attr(get_option('option_sambutan_nama')); ?>
        </h5>
        <h6>
            <?php echo esc_attr(get_option('option_sambutan_jabatan')); ?>
        </h6>
    </div>

    <div class="sambutan-isi" align="center">
        <p>
            <?php echo esc_attr(get_option('option_sambutan_content')); ?>
        </p>
    </div>

</div>

<div class="sejarah">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sejarah-logo">

                </div>
            </div>
            <div class="col">
                <div class="title">
                    <h4>Tentang</h4>
                    <div class="title-line"></div>
                </div>
                <div class="sejarah-post">
                    <h5>
                        <?php echo esc_attr(get_option('option_tentang_title')); ?>
                    </h5>
                    <p>
                        <?php echo esc_attr(get_option('option_tentang_content')); ?>
                    </p>
                    <br>
                    <!-- <span class="more">Selengkapnya</span> -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="berita-index">
    <div class="title">
        <h4>Berita Terbaru</h4>
        <div class="title-line"></div>
    </div>
    <div class="row berita-isi">
        <?php 
        $recent_post = ts_recentpost('berita', 3);
        ?>

        <div class="col-8 berita-isi-1">
            <div style="background-image:url(<?php
                                            if (has_post_thumbnail($recent_post[0]['ID'])) {
                                                echo get_the_post_thumbnail_url($recent_post[0]['ID'],'large');
                                            } else {
                                                echo " ";
                                            }

                                            ?>)" class="berita-isi-img-1"></div>
            <h6 class="berita-title">
                <a href="<?php echo $recent_post[0]['guid'] ?>">
                    <?php echo $recent_post[0]['post_title'] ?>
                </a>
            </h6>
            <p class="berita-dateby">
                <?php echo date('j F Y ', strtotime($recent_post[0]['post_date'])) . $recent_post[0]["comment_count"] . ' komentar '; ?>
            </p>
        </div>
        <div class="col-4 berita-isi-2">
            <div class="berita-isi-2-1">
                <div style="background-image:url(<?php
                                                if (has_post_thumbnail($recent_post[1]['ID'])) {
                                                    echo get_the_post_thumbnail_url($recent_post[1]['ID'],'medium');
                                                } else {
                                                    echo " ";
                                                }

                                                ?>)" class="berita-isi-img-2"></div>
                <h6 class="berita-title">
                    <a href="<?php echo $recent_post[1]['guid'] ?>">
                        <?php echo $recent_post[1]['post_title'] ?>
                    </a>
                </h6>
                <p class="berita-dateby">
                    <?php echo date('j F Y ', strtotime($recent_post[1]['post_date'])) . $recent_post[1]["comment_count"] . ' komentar '; ?>
                </p>
            </div>
            <div class="berita-isi-2-2">
                <div style="background-image:url(<?php
                                                if (has_post_thumbnail($recent_post[2]['ID'])) {
                                                    echo get_the_post_thumbnail_url($recent_post[2]['ID'],'medium');
                                                } else {
                                                    echo " ";
                                                }

                                                ?>)" class="berita-isi-img-2"></div>
                <h6 class="berita-title">
                    <a href="<?php echo $recent_post[2]['guid'] ?>">
                        <?php echo $recent_post[2]['post_title'] ?>
                    </a>
                </h6>
                <p class="berita-dateby">
                    <?php echo date('j F Y ', strtotime($recent_post[2]['post_date'])) . $recent_post[2]["comment_count"] . ' komentar '; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="berita-more more">
        <a href="<?php echo get_site_url() ?>/category/berita">Selengkapnya</a>
    </div>
</div>



<div class="prestasi">
    <div class="container">
        <div class="title">
            <h4>Prestasi</h4>
            <div class="title-line"></div>
        </div>

        <div class="prestasi-content">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->


                    <?php

                    $recent_post = ts_recentpost('prestasi', 3);
                    foreach ($recent_post as $value) {
                        ?>

                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php
                                if (has_post_thumbnail($value['ID'])) {
                                    ?>
                                        <div style="background-image:url(<?php echo get_the_post_thumbnail_url($value['ID'],'large') ?>)" class="prestasi-img"></div>
                                        <?php

                                } else {
                                    ?>
                                            <div style="background-image:url()" class="prestasi-img"></div>
                                            <?php

                                    }
                                    ?>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="prestasi-content-title">
                                        <a target="blank" href="<?php echo $value['guid'] ?>">
                                            <?php echo $value['post_title'] ?>
                                        </a>
                                    </h6>
                                    <p class="berita-dateby prestasi-date">
                                        <?php echo date('j F Y ', strtotime($value['post_date'])) . $value["comment_count"] . ' komentar '; ?>
                                    </p>
                                    <div class="prestasi-content-content">
                                        <?php echo wp_trim_words($value['post_content'], 45, null) ?>
                                    </div>
                                    <div class="more">
                                        <a target="blank" href="<?php echo $value['guid'] ?>">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                }
                ?>



                </div>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>

<div class="galeri">
    <div class="title">
        <h4>Galeri</h4>
        <div class="title-line"></div>
    </div>
    <div>
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div style="background-image:url(<?php echo esc_attr(get_option('option_galeri_1')); ?>)" class="galeri-img"></div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image:url(<?php echo esc_attr(get_option('option_galeri_2')); ?>)" class="galeri-img"></div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image:url(<?php echo esc_attr(get_option('option_galeri_3')); ?>)" class="galeri-img"></div>
                </div>
            </div>

            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>


<?php get_footer(); ?>