<ul class="pagination">
    {!!
        paginate_links([
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => '/page/%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $news_query->max_num_pages,
            'prev_text' => '<i class="fal fa-angle-left"></i>',
            'next_text' => '<i class="fal fa-angle-right"></i>',
        ])
    !!}
</ul>