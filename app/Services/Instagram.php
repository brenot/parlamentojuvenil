<?php

namespace App\Services;

use Vinkla\Instagram\Instagram as VinklaInstagram;
use Cache;
use Instagram\Api as InstagramApi;
use Exception;

class Instagram
{
    public $token;
    public $instagram;

    public function __construct()
    {
        $this->token = config('app.instagram.token');
        $this->instagram = new VinklaInstagram($this->token);
    }

    public function getImagesUrl($count = 0)
    {
        try {
            return Cache::remember('getImagesUrl', 15, function () use (
                $count
            ) {
                $api = new InstagramApi();

                $api->setUserName(config('app.instagram.username'));

                $feed = $api->getFeed();

                return collect($feed->medias)
                    ->map(function ($item) {
                        return $item->displaySrc;
                    })
                    ->slice(0, $count);
            });
        } catch (Exception $e) {
            info($e->getMessage());
            return collect([]);
        }
    }
}
