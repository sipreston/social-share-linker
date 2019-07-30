<?php
declare(strict_types=1);


namespace SocialShareLinker;

abstract class AbstractLinker
{
    protected const API_URL = '';
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $title;

    public function setUrl(string $url) : AbstractLinker
    {
        $url = trim($url);

        if(empty($url)) {
            throw new LinkerException('Page to link to can not be empty');
        }

        $this->url = $url;

        return $this;
    }

    public function setDescription(string $description) : AbstractLinker
    {
        $this->description = trim($description);

        return $this;
    }

    public function setImageUrl(string $imageUrl) : AbstractLinker
    {
        $this->imageUrl = trim($imageUrl);

        return $this;
    }

    public function setTitle(string $title) : AbstractLinker
    {
        $this->title = trim($title);

        return $this;
    }

    protected function formatUrl(array $params) : string
    {
        if(empty(static::API_URL)) {
            throw new LinkerException('API Url was empty');
        }

        return sprintf('%s?%s',
            static::API_URL,
            http_build_query($params)
        );
    }
}