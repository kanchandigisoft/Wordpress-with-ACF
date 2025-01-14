<?php
/**
 *
 * Template name: Wiki
 *
 * @package storefront
 *
 */
get_header(); ?>

   <section class="breadcrumbs show-md">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>></span></li>
                        <li><a href="<?php the_field('breadcrumb_link'); ?>"><?php the_field('breadcrumb_text'); ?></a></li>
                        <li><span>></span></li>
                        <li class="current"><?php the_field('breadcrumb_title'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row pad-md-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4 pad-xs-25 show-md">
                    <div class="chapterbox numbered sticky" id="sticker">
                        <h5>Contents</h5>
                        <?php if( have_rows('contents_table') ): ?>

                        <ul>

                        <?php while ( have_rows('contents_table') ) : the_row(); ?>

                        <li class=""><a href="#<?php the_sub_field('link'); ?>"><?php the_sub_field('name'); ?></a></li>

                        <?php endwhile; ?>

                        </ul>

                        <?php else : ?>

                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-xs-12 col-md-8 pad-xs-25 rte">
                    <h1 class="h2"><?php the_title(); ?></h1>
                    <?php if( have_rows('contents_table') ): ?>

                        <?php while ( have_rows('contents_table') ) : the_row(); ?>

                            <div id="<?php the_sub_field('link'); ?>">
                                <h3><?php the_sub_field('name'); ?></h3>
                                <?php the_sub_field('content'); ?>
                            </div>

                        <?php endwhile; ?>

                        <?php else : ?>

                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>