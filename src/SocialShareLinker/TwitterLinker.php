<?php
declare(strict_types=1);

namespace SocialShareLinker;

class TwitterLinker extends AbstractLinker implements SocialShareLinkerInterface
{
    protected const API_URL = 'https://twitter.com/intent/tweet';

    public function getLink(): string
    {
        $params = [
          'url' => $this->url
        ];

        if(!empty($this->title)) {
            $params['text'] = sprintf('%s:%s',
                $this->title,
                $this->description
            );
        }

        return $this->formatUrl($params);
    }
}