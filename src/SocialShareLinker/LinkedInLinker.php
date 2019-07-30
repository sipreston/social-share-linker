<?php
declare(strict_types=1);

namespace SocialShareLinker;

class LinkedInLinker extends AbstractLinker implements SocialShareLinkerInterface
{
    protected const API_URL = 'https://www.linkedin.com/shareArticle';

    public function getLink(): string
    {
        $params = [
            'mini' => true,
            'url' => $this->url
        ];

        if(!empty($this->title)) {
            $params['title'] = $this->title;
        }

        if(!empty($this->description)) {
            $params['summary'] = $this->description;
        }

        return $this->formatUrl($params);
    }
}