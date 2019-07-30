<?php
declare (strict_types = 1);

namespace SocialShareLinker;

interface SocialShareLinkerInterface
{
    public function setUrl(string $url) : AbstractLinker;

    public function setDescription(string $description) : AbstractLinker;

    public function setImageUrl(string $url) : AbstractLinker;

    public function setTitle(string $title) : AbstractLinker;

    public function getLink() : string;
}