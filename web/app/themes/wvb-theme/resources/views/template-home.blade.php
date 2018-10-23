{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.featured_home')
    <div class="main-container container pt-24" id="main-container">
        <div class="row">
            <div class="col-lg-8 blog__content">
                @include('partials.latest-posts')
            </div>
            @include('partials.sidebar-home')
        </div>
        <div class="text-center pb-48">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/placeholder_728.jpg" alt="">
            </a>
        </div>

        <section class="section mb-0">
            <div class="title-wrap title-wrap--line title-wrap--pr">
                <h3 class="section-title">editors picks</h3>
            </div>

            <!-- Slider -->
            <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/carousel/carousel_post_1.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="#">9 Things to Consider Before Accepting a New Job</a>
                            </h2>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/carousel/carousel_post_2.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="#">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                            </h2>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/carousel/carousel_post_3.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="#">(Infographic) Is Work-Life Balance Even Possible?</a>
                            </h2>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/carousel/carousel_post_4.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="#">Is Uber Considering To Sell its Southeast Asia Business to Grab?</a>
                            </h2>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/carousel/carousel_post_2.jpg');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="#">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                            </h2>
                        </div>
                        <a href="#" class="thumb-url"></a>
                    </div>
                </article>
            </div> <!-- end slider -->

        </section> <!-- end carousel posts -->


        <!-- Posts from categories -->
        <section class="section mb-0">
            <div class="row">

                <!-- Technology -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">technology</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/thumb/thumb_post_1.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="#">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Need a Website for Your Business? Google Can Help</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Here Are Ways You Can Earn From the Sharing Economy</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">19 Crazy Facts You Probably Didn't Know About Google</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">What Household Chores Would Filipinos Love to Assign to Robots?</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end technology -->

                <!-- Travel -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">travel</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/thumb/thumb_post_2.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="#">4 credit card tips to make business travel easier</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">5 deadliest luxury vacation spots on Earth</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">These 4 startups can send you to work and travel abroad</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">9 mind-blowing travel destinations for adventure seekers</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">These Small Business Ideas Are Great for Entrepreneurial Children</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end travel -->

                <!-- Cryptocurrency -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">Cryptocurrency</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/thumb/thumb_post_3.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="#">UN’s WFP Building Up Blockchain-Based Payments System</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Cryptocurrency Markets: Weekly Trading Overview (06-13 October)</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">MyEtherWallet Opens the Ethereum Universe for You</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Put Your Money Where Your Marketing Is</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">3 ways for startups to master the art of emailing</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end cryptocurrency -->

                <!-- Investment -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">Investment</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/content/thumb/thumb_post_4.jpg');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="#">14 easy, low-cost ways authors can promote their books</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Financial Adviser: 4 ways to know how much dividends you should pay</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">3 cash flow rules first-time business owners need to know</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Common credit mistakes new business owners make</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="#">Ask these 2 questions every time you make a purchase</a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end investment -->

            </div>
        </section> <!-- end posts from categories -->

        <!-- Video posts -->
        <section class="section mb-24">
            <div class="title-wrap title-wrap--line">
                <h3 class="section-title">Videos</h3>
                <a href="#" class="all-posts-url">View All</a>
            </div>
            <div class="row card-row">
                <div class="col-md-6">
                    <article class="entry card">
                        <div class="entry__img-holder card__img-holder">
                            <a href="#">
                                <div class="thumb-container thumb-65">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/content/grid/grid_post_5.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/images/" class="entry__img lazyload" alt="" />
                                </div>
                            </a>
                            <div class="entry__play-time"><i class="ui-play"></i>3:21</div>
                        </div>

                        <div class="entry__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">What Days and Hours are PH Online Shoppers Most Likely to Buy?</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="entry card">
                        <div class="entry__img-holder card__img-holder">
                            <a href="#">
                                <div class="thumb-container thumb-65">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/content/grid/grid_post_6.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/images/" class="entry__img lazyload" alt="" />
                                </div>
                            </a>
                            <div class="entry__play-time"><i class="ui-play"></i>3:21</div>
                        </div>

                        <div class="entry__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">Want to work at Tesla? This program guarantees you a job after graduation</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section> <!-- end video posts -->


        <!-- Content Secondary -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">

                <!-- Worldwide News -->
                <section class="section">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">Worldwide</h3>
                        <a href="#" class="all-posts-url">View All</a>
                    </div>

                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_1.jpg)">
                            <a href="#" class="thumb-url"></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_1.jpg" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">Business</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">These Are the 20 Best Places to Work in 2018</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>

                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_2.jpg)">
                            <a href="#" class="thumb-url"></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_2.jpg" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">Fashion</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">This Co-Working Space is a One-Stop Shop</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>

                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_3.jpg)">
                            <a href="#" class="thumb-url"></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_3.jpg" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">Mining</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">This 6-Year-Old Kid Reportedly Earned US$11 Million on YouTube</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>

                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_4.jpg)">
                            <a href="#" class="thumb-url"></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_4.jpg" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">World</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">Rating Agency Breaks with Financial Community </a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>

                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_5.jpg)">
                            <a href="#" class="thumb-url"></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_5.jpg" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--red">Investment</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">Decentralized Exchanges (DEX) – What Are They?</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>

                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_6.jpg)">
                            <a href="#" class="thumb-url"></a>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/list/list_post_6.jpg" alt="" class="entry__img d-none">
                            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--cyan">Technology</a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="#">Decentralized Exchanges (DEX) – What Are They?</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                            </div>
                        </div>
                    </article>
                </section> <!-- end worldwide news -->

                <!-- Pagination -->
                <nav class="pagination">
                    <span class="pagination__page pagination__page--current">1</span>
                    <a href="#" class="pagination__page">2</a>
                    <a href="#" class="pagination__page">3</a>
                    <a href="#" class="pagination__page">4</a>
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
                </nav>

            </div> <!-- end posts -->

            <!-- Sidebar 1 -->
            <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

                <!-- Widget Ad 300 -->
                <aside class="widget widget_media_image">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/placeholder_336.jpg" alt="">
                    </a>
                </aside> <!-- end widget ad 300 -->

                <!-- Widget Categories -->
                <aside class="widget widget_categories">
                    <h4 class="widget-title">Categories</h4>
                    <ul>
                        <li><a href="#">World <span class="categories-count">5</span></a></li>
                        <li><a href="#">Lifestyle <span class="categories-count">7</span></a></li>
                        <li><a href="#">Business <span class="categories-count">5</span></a></li>
                        <li><a href="#">Fashion <span class="categories-count">8</span></a></li>
                        <li><a href="#">Investment <span class="categories-count">10</span></a></li>
                        <li><a href="#">Technology <span class="categories-count">6</span></a></li>
                    </ul>
                </aside> <!-- end widget categories -->

                <!-- Widget Recommended (Rating) -->
                <aside class="widget widget-rating-posts">
                    <h4 class="widget-title">Recommended</h4>
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="#">
                                <div class="thumb-container thumb-60">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/content/review/review_post_1.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/images/" class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">

                                <h2 class="entry__title">
                                    <a href="#">UN’s WFP Building Up Blockchain-Based Payments System</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                                <ul class="entry__meta">
                                    <li class="entry__meta-rating">
                                        <i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star-empty"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="#">
                                <div class="thumb-container thumb-60">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/content/review/review_post_2.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/images/" class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">

                                <h2 class="entry__title">
                                    <a href="#">4 credit card tips to make business travel easier</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>by</span>
                                        <a href="#">DeoThemes</a>
                                    </li>
                                    <li class="entry__meta-date">
                                        Jan 21, 2018
                                    </li>
                                </ul>
                                <ul class="entry__meta">
                                    <li class="entry__meta-rating">
                                        <i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star"></i><!--
                      --><i class="ui-star-empty"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </aside>
            </aside>
        </div>

    </div>
@endsection