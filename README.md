# slim-json-helpers

A clone of the removed aporat/slim-json-helpers

[![Latest Stable Version](https://poser.pugx.org/org_heigl/slim-json-helpers/version.png)](https://packagist.org/packages/org_heigl/slim-json-helpers)
[![Composer Downloads](https://poser.pugx.org/org_heigl/slim-json-helpers/d/total.png)](https://packagist.org/packages/org_heigl/slim-json-helpers)
[![Build Status](https://travis-ci.com/heiglandreas/slim-json-helpers.svg?branch=master)](https://travis-ci.com/heiglandreas/slim-json-helpers)[![Code Coverage](https://scrutinizer-ci.com/g/heiglandreas/slim-json-helpers/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/heiglandreas/slim-json-helpers/?branch=master)
[![License](https://poser.pugx.org/heiglandreas/slim-json-helpers/license.svg)](https://packagist.org/packages/org_heigl/slim-json-helpers)


## Requirements ##

* PHP >= 5.5


## Usage ##

```php

use Slim\Http\Request as Request;
use JsonHelpers\Renderer as JsonRenderer;

$app = new \Slim\App($settings);

// register the json response and error handlers
$jsonHelpers = new JsonHelpers\JsonHelpers($app->getContainer());
$jsonHelpers->registerResponseView();
$jsonHelpers->registerErrorHandlers();


$this->post('/users', function (Request $request, Response $response, $args)
{
  $user_id = $request->getParam('user_id');
  
   $data = [
        'user_id' => $user_id
    ];

    $response = $this->view->render($response, 200, $data);
    return $response;

  });
}
```
