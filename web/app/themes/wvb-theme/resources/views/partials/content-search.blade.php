<article class="search-item">
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}" title="{!! get_the_title() !!}" class="text-decoration-none">{!! get_the_title() !!}</a></h2>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
    <p class="mb-0">
      <a href="{!! get_permalink() !!}" class="btn btn-primary btn-rounded read-more" title="Lees verder">Lees verder<i class="fal fa-angle-right ml-2"></i></a>
    </p>
  </div>
</article>
