<?php
/**
 * Template Name: Cancel
**
 */ 
get_header(); ?>

<section class="breadcrumbs show-sm">
    <div class="wrapper">
        <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
            <div class="col pad-xs-25 pad-left-right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php the_field('breadcrumb_link'); ?>"><?php the_field('breadcrumb_text'); ?></a></li>
                    <li><span>></span></li>
                    <li class="current"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="" class="">
    <div class="wrapper">
        <div class="row pad-xs-0 pad-top-bottom">
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h1><?php the_field('title'); ?></h1>
                        <p>Before you go, maybe we can help…</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                <h2>Let's talk first</h2>
                <p>Chat with our CEO Giles and learn how to get more out of this service or switch to a better plan or service</p>
                <button class="red"><a target="_blank" href="https://calendly.com/gilesadamthomas/chat/">Book a call</a></button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                <h2>Need a break?</h2>
                <p>Pause your account and postpone billing, you won’t lose your data.</p>
                <button class=""><a href="/my-account/subscriptions/">Pause your service</a></button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                <h2 class="lightgrey-text">Cancel my service</h2>
                <p>Cancelling your service will make all work stop. You may lose data and business insights.</p>
                <p><a href="/my-account/subscriptions/">Cancel my service</a></p>
            </div>
            <div class="sp-40"></div>
            <div class="col-xs-12 col-sm-6 col-md-12 pad-xs-25">
                <div class="protip_red">
                    <h2 class="red-text">Warning</h2>
                    <p >If you are cancelling your service because you are unhappy with the results, first speak with your head of department or CEO Giles. Learn how we can test new channels to find profitable paid campaigns. The fastest route to getting a successful marketing channel is with us, we are already set up and understand your business, marketing takes time and requires testing.</p><button class="red"><a href="https://calendly.com/gilesadamthomas/chat/">Book a call</a></button>
                </div>
            </div>
            <div class="sp-40"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>