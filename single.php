<?php
/**
 *
 * Template name: 
 *
 * @package storefront
 */

get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="breadcrumbs show-md">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>></span></li>
                        <li><a href="/shopify-blog/">Shopify Blog</a></li>
                        <li><span>></span></li>
                        <li class="current"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<div class="hup-blog-body">
    <section id="chapter-one" >
        <div class="wrapper">
            <div class="row pad-md-20 pad-top-bottom sticky-parent">
                <div class="col-xs-12 col-md-4 pad-xs-25 show-md sticky">

                    <?php if( get_field('chapters_on_off') ): ?>

                    <div class="chapterbox numbered" id="sticker">
                        <h5>Chapter Guide</h5>
                        
                        <?php if( have_rows('chapter_guide') ): ?> 

                            <ul class="post_chapters">

                            <?php while ( have_rows('chapter_guide') ) : the_row(); ?>

                                <li class=""><a class="" href="<?php the_sub_field('chapter_link'); ?>"><?php the_sub_field('chapter_text'); ?></a></li>

                            <?php endwhile; ?>

                            </ul>

                        <?php else : ?>

                        <?php endif; ?>

                    </div>

                            <?php endif; ?>

                </div>
                <div class="col-xs-12 col-md-8 pad-xs-25 rte sticky-sibling">

                          <?php $image = get_field('post_thumbnail'); $size = 'full'; 
                                               if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    <h1 class="h2"><?php the_title() ?></h1>
                    <div>
                        <div class="author"><div class="fill"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatar-giles.jpg" /><div class="details"><span>by Giles Thomas</span><span class="lightgrey-text">Last updated on <?php the_date(); ?></span></div></div></div>
                    </div>

                    <?php the_content(); ?>
                    
                    <?php if( have_rows('content') ): ?>

                    <?php while ( have_rows('content') ) : the_row(); ?>

                    <?php if( get_row_layout() == 'chapters' ): ?>

                        <h3><?php the_sub_field('chapters_title'); ?></h3>

                        <?php if( have_rows('chapters_array') ): ?>

                            <div class="row wide">

                        <?php while ( have_rows('chapters_array') ) : the_row(); ?>

                            <div class="col-xs-6 col-sm-4 chapter pad-xs-10 pad-sm-25">
                            <div class="rounded" style="background:url('<?php the_sub_field('chapter_image'); ?>') no-repeat center center; background-size:cover;">
                                <a href="#<?php the_sub_field('chapter_link'); ?>"><img src="<?php the_sub_field('chapter_image'); ?>"></a>
                            </div>
                            <a href="#<?php the_sub_field('chapter_link'); ?>"><h5 style="color:#50c6aa"><?php the_sub_field('chapter_number'); ?></h5></a>
                            <?php the_sub_field('chapter_description'); ?>
                        </div>

                        <?php endwhile; ?>

                            </div>

                        <?php else : ?>

                        <?php endif; ?>

                    <?php elseif( get_row_layout() == 'chapter_header' ):  ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="white-text" id="<?php the_sub_field('chapter_id'); ?>" style="background:#50c6aa;">
                            <div class="wrapper">
                                <div class="row pad-xs-60 pad-lg-60 pad-top-bottom">
                                    <div class="col-xs-12 col-md-4 pad-xs-25 show-md">
                                    </div>
                                    <div class="col-xs-12 col-md-8 pad-xs-0">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h5 class="nomarginbottom"><?php the_sub_field('chapter_number'); ?></h5>
                                                <div class="sp-10"></div>
                                                <h2><?php the_sub_field('chapter_header'); ?></h2>
                                            </div>
                                        </div>
                                        <div class="row middle-xs">
                                            <div class="col-xs-8 col-sm-5 col-lg-4 pad-xs-25">
                                                <div class="round" style="background:url('<?php the_sub_field('chapter_image'); ?>') no-repeat center center; background-size:cover;">
                                                    <img src="<?php the_sub_field('chapter_image'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-lg-8 pad-xs-25">
                                                <p><?php the_sub_field('chapter_description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="wrapper">
                                <div class="row pad-md-20 pad-top-bottom">
                                     <div class="col-xs-12 col-md-4 pad-xs-25 show-md"></div>
                                     <div class="col-xs-12 col-md-8 pad-xs-25 rte">


                    <?php elseif( get_row_layout() == 'pro_tip' ):  ?>

                         <div class="protip">

                            <?php if( get_sub_field('header_on_off') ): ?>

                              <h5><?php the_sub_field('header'); ?></h5>

                             <?php endif; ?>

                            <p><?php the_sub_field('description'); ?></p>
                        </div>

                    <?php elseif( get_row_layout() == 'call_out' ):  ?>

                        <div class="callout">
                            <p><?php the_sub_field('header'); ?></p>
                            <button class="large"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_text'); ?></a></button>
                        </div>

                    <?php elseif( get_row_layout() == 'the_content' ):  ?>

                        <?php the_sub_field('the_content'); ?>

                    <?php elseif( get_row_layout() == 'advert' ):  ?>

                        <div class="row rounded border ad">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 hup_advert_img_padding">
                            <img src="<?php the_sub_field('advert_image'); ?>" class="hup_advert_img">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 pad-xs-30 pad-sm-50 first-sm last-md first-lg white">
                            <h5><?php the_sub_field('advert_small'); ?></h5>
                            <h3 class="matter"><?php the_sub_field('advert_title'); ?></h3>
                            <div class="sp-5"></div>
                            <p class="lightgrey-text"><?php the_sub_field('advert_description'); ?></p>
                            <div class="sp-20"></div>
                            <button class="large fullwidth"><a href="<?php the_sub_field('advert_link'); ?>"><?php the_sub_field('advert_button_text'); ?></a></button>
                        </div>
                    </div>

                    <?php elseif( get_row_layout() == 'gmail' ):  ?>

                    <div id="gmail">
                        <div class="head" >
                            <div>New Message</div>
                        </div>
                        <div class="message">
                            <div class="row border-bottom">
                                <span class="contact">Giles Thomas (wholedesignstudios.com)</span>
                            </div>
                            <div class="row border-bottom">
                                <span class="label"><?php the_sub_field('subject'); ?></span>
                            </div>
                            <div class="row">
                                <?php the_sub_field('email_content'); ?>
                            </div>
                        </div>
                    </div>

                    <?php endif; ?>

                    <?php endwhile; ?>

                    <?php else : ?>

                    <?php endif; ?>

                    <?php the_field('convertkit_embed'); ?>

                    <?php the_field('convertkit_pop_up'); ?>
                 
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>

    <?php else : ?>

    <?php endif; ?>

    <!--<section class="green white-text">
        <div class="wrapper">
            <div class="row center-xs pad-xs-40 pad-sm-60 pad-md-80 pad-top-bottom">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7">
                    <h4>Get the latest Shopify apps, marketing strategies and optimization advice sent to your inbox bi-weekly</h4>
                    <div class="sp-40"></div>
                    <div id="insider" class="insetbutton">
                        <input type="text" placeholder="Email Address" class="browser-default whiteborder">
                        <button class="red">Send me the Insider Email</button>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
</div>

<?php get_footer(); ?>

<!-- <script>
    window.onscroll = function() { stickyFunction() };

    var toc = document.querySelector(".sticky-toc");
    var sticky = toc.offsetTop;

    function stickyFunction() {
        if (window.pageYOffset >= sticky) {
            toc.classList.add("sticky")
        } else {
            toc.classList.remove("sticky");
        }
    } 
</script> -->
