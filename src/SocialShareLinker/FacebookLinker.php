<?php
declare(strict_types=1);

namespace SocialShareLinker;

class FacebookLinker extends AbstractLinker implements SocialShareLinkerInterface
{
    protected const API_URL = 'https://www.facebook.com/sharer/sharer.php';

    public function getLink(): string
    {
        $params = [
          'u' => $this->url
        ];

        return $this->formatUrl($params);
    }
}