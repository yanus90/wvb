<div class="col-md-6">
    <article class="entry card">
        <div class="entry__img-holder card__img-holder">
            <a href="{{ get_the_permalink($post['ID']) }}" title="{!! $post['post_title'] !!}">
                <div class="thumb-container thumb-70">
                    {{--<img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/content/grid/grid_post_1.jpg" src="<?php echo get_template_directory_uri(); ?>/assets/images/content/grid/grid_post_1.jpg" class="entry__img lazyload" alt="{!! $post['post_title'] !!}">--}}
                    {!! get_the_post_thumbnail($post['ID']) !!}
                </div>
            </a>
            <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
        </div>

        <div class="entry__body card__body">
            <div class="entry__header">

                <h2 class="entry__title">
                    <a href="{{ get_the_permalink($post['ID']) }}">{!! $post['post_title'] !!}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                        <span>{{ __('door') }}</span>
                        <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" title="{{ get_the_author() }}">{{ get_the_author() }}</a>
                    </li>
                    <li class="entry__meta-date">
                        {{ get_the_date() }}
                    </li>
                </ul>
            </div>
            <div class="entry__excerpt">
                <?php
                $content_arr = get_extended($post['post_content']);
                echo apply_filters('the_content', wp_strip_all_tags($content_arr['main']));
                ?>
            </div>
        </div>
    </article>
</div>