<?php

namespace App\Services;

use Vinkla\Instagram\Instagram as VinklaInstagram;
use Cache;

class Instagram
{
    public $token;
    public $instagram;

    public function __construct()
    {
        $this->token = config('app.instagram.parlamentojuvenilrj');
        $this->instagram = new VinklaInstagram($this->token);
    }

    public function getImagesUrl($count = 0)
    {
        return Cache::remember('getImagesUrl', 15, function () use ($count) {
            return collect($this->instagram->media(['count' => $count]))->map(
                function ($item) {
                    return $item->images->standard_resolution->url;
                }
            );
        });
    }
}
