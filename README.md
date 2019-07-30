# Social Share Linker

## So what is it?
A simple library to build API urls to common social media sites.
You just populate the link to your page, a title and description, a preview image and it will handle the rest.


## Example

```php

$linker = new PinterestLinker();

$linker->setUrl("http://www.example.com/blog/article.html");
$linker->setTitle("Page Title");
$linker->setDescription("Brief summary of article");
$linker->setImageUrl("http://www.example.com/image.jpg");

$link = $linker->getLink();
```
returns 
```
https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.example.com%2Fblog%2Farticle.html&media=http%3A%2F%2Fwww.example.com%2Fimage.jpg&description=Page+Title%3ABrief+summary+of+article
```
