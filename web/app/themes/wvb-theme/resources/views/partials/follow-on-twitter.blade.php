<div class="section section-follow-on-twitter mb-5">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                <h3 class="text-center color-black mb-4">Volg ons op <span class="color-primary font-weight-semi-bold">Twitter</span></h3>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled tweets text-center">
                            <li class="tweet-item">
                                RT @Warnsveld1: De boys en @Overwetering delen de punten! Na een sterke eerste helft van de boys kwamen de gasten uit Olst in de tweede hel...
                            </li>
                        </ul>
                    </div>
{{--                    {{ dd($tweets) }}--}}
                    {{--@php $i = 0 @endphp--}}
                    {{--@foreach($tweets as $tweet)--}}
                        {{--@php--}}
                            {{--$reg_exUrl = "/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";--}}
                            {{--preg_match($reg_exUrl, $tweet->full_text, $url);--}}

                            {{--if (! empty($url)) {--}}
                                {{--$text = preg_replace($reg_exUrl, "<a href=\"$url[0]\" target=\"_blank\">{$url[0]}</a> ", $tweet->full_text);--}}
                            {{--} else {--}}
                                {{--$text = $tweet->full_text;--}}
                            {{--}--}}

                            {{--$a = explode(' ', $text);--}}
                            {{--$x = preg_replace('/\#(.*)/', '<a href="https://twitter.com/hashtag/$1" target="_blank">#$1</a>', $a);--}}
                            {{--$tweet->full_text = implode(' ', $x);--}}
                        {{--@endphp--}}
                        {{--@if($i > 1) @break @endif--}}
                        {{--<div class="col-12">--}}
                            {{--<div class="tweet-item">--}}
                                {{--<p class="date">@WarnsveldseBoys - {{ mysql2date('d M Y H:i', $tweet->created_at) }}</p>--}}
                                {{--<p class="tweet">--}}
                                    {{--{!! $tweet->full_text !!}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@php $i++ @endphp--}}
                    {{--@endforeach--}}
                </div>
            </div>
        </div>
    </div>
</div>