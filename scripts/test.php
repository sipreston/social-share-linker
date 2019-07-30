<?php

use SocialShareLinker\FacebookLinker;
use SocialShareLinker\LinkedInLinker;
use SocialShareLinker\TwitterLinker;
use SocialShareLinker\PinterestLinker;

require '../vendor/autoload.php';

example(); die;
testLinkers();

function testLinkers()
{
    $url = "https://www.devpond.net/2019/05/21/securing-your-website-with-ssl-part-2-free-certificates-with-lets-encrypt/";
    $title = "Page Title";
    $description = "Description of article";
    $image = "https://www.devpond.net/wp-content/uploads/2019/02/cropped-23467285_10159682144620217_8247908484029863451_o.jpg";

    $formattedLinks = [];

    foreach(getLinkers() as $linker) {
        $linker->setUrl($url);
        $linker->setTitle($title);
        $linker->setDescription($description);
        $linker->setImageUrl($image);

        $formattedLinks[] = $linker->getLink();
    }

    var_dump($formattedLinks);
}

/**
 * @return \SocialShareLinker\SocialShareLinkerInterface[]
 */
function getLinkers()
{
    return [
      'Facebook'    => new FacebookLinker(),
      'Twitter'     => new TwitterLinker(),
      'LinkedIn'    => new LinkedInLinker(),
      'Pinterest'   => new PinterestLinker()
    ];
}

function example()
{
    $linker = new PinterestLinker();

    $linker->setUrl("http://www.example.com/blog/article.html");
    $linker->setTitle("Page Title");
    $linker->setDescription("Brief summary of article");
    $linker->setImageUrl("http://www.example.com/image.jpg");

    echo $linker->getLink();
}