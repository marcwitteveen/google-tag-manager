# google-tag-manager-php
This class provides some simple PHP helper functions for implementing Google Tag Manager within your website.

## Getting Started
You can install this package using Composer by adding this line to your composer.json ```require``` statement.
```json
"marcwitteveen/google-tag-manager": "dev-master"
```

And then run from terminal:
```Bash
sudo composer update
```

## Code Sample
```php
use MarcWitteveen\Gtm\Gtm;

Gtm::renderHeadTag('GTM-XXXXXX');
/* This will render the following code:
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXX');</script>
<!-- End Google Tag Manager -->
*/

Gtm::renderBodyTag('GTM-XXXXXX');
/* This will render the following code:
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
*/
```

## Methods:

- ```Gtm::renderHeadTag($container_id = "")```
- ```Gtm::renderBodyTag($container_id = "")```

## ```renderHeadTag``` Method

#### Description
Renders a Google Tag Manager container that needs to be placed as high in the <head> of the page as possible.

#### Parameters
- ```$container_id``` (required): The id of your container. You can get this value from your Google Tag Manager account admin panel.

## ```renderBodyTag``` Method

#### Description
Optional: Renders a Google Tag Manager container that needs to be placed immediately after the opening <body> tag.

#### Parameters
- ```$container_id``` (required): The id of your container. You can get this value from your Google Tag Manager account admin panel.
