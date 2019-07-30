<?php
declare(strict_types=1);

namespace SocialShareLinker;

class PinterestLinker extends AbstractLinker implements SocialShareLinkerInterface
{
    protected const API_URL = 'https://pinterest.com/pin/create/button/';

    public function getLink() : string
    {
        $params = [
            'url' => $this->url
        ];

        if(!empty($this->imageUrl)) {
            $params['media'] = $this->imageUrl;
        }

        if(!empty($this->title)) {
            $params['description'] = sprintf('%s:%s',
                $this->title,
                $this->description
            );
        }

        return $this->formatUrl($params);
    }
}