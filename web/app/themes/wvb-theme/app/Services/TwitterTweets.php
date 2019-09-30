<?php

namespace App\Services;

class TwitterTweets
{
    public function tweets()
    {
        $settings = [
            'oauth_access_token' => YOUR_OAUTH_ACCESS_TOKEN,
            'oauth_access_token_secret' => YOUR_OAUTH_ACCESS_TOKEN_SECRET,
            'consumer_key' => YOUR_CONSUMER_KEY,
            'consumer_secret' => YOUR_CONSUMER_SECRET
        ];

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name=WarnsveldseBoys&count=6&tweet_mode=extended&include_rts=false';
        $requestMethod = 'GET';

        $twitter = new \TwitterAPIExchange($settings);
        $json = $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        $request = json_decode($json);

        return $request;
    }
}
