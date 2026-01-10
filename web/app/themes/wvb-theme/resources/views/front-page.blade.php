{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.notifications')

{{--    @include('partials.grote-club-actie')--}}
    @include('partials.slider')

{{--    @if($_SERVER['REMOTE_ADDR'] === '77.162.38.121')--}}
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="w-100" style="background: #BC2F27; border-radius:10px; padding: 20px 25px; color: #fff;">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <h4 style="font-weight:bold;">Samen bouwen aan de toekomst</h4>
                                <p>De bouw van onze nieuwe kantine is gestart! Help mee en doneer voor deze nieuwe kantine en voor onze jeugd. Alle kleine beetjes helpen!</p>
                            </div>
                            <div class="col-12 col-xl-6">
                                <form action="" method="POST" class="inline-flex gap-2 items-center justify-center mt-4">
                                    @php wp_nonce_field('home_donation_action', 'home_donation_nonce'); @endphp
                                    <div class="row">
                                        <div class="col-12 col-xl-7">
                                            <div class="input-group w-100">
                                                <span class="input-group-addon" style="padding:10px; font-size:1.25rem; font-weight:bold;">€</span>
                                                <input type="number"
                                                       name="home_donation_amount"
                                                       placeholder="Type hier je bedrag"
                                                       step="0.50"
                                                       min="1"
                                                       required
                                                       class="form-control"
                                                       aria-label="Doneer">
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-5">
                                            <button type="submit" name="donate_submit" class="btn btn-lg font-weight-bold btn-primary bg-green-600 text-white px-9 w-100 py-2 rounded">
                                                Doneer nu
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    @endif--}}

    @include('partials.sponsoren')
    @include('partials.news-home')
    @include('partials.program-and-news')
    @include('partials.bc-cta')
    @include('partials.about-wvb-home')
    @include('partials.follow-on-twitter')
@endsection
