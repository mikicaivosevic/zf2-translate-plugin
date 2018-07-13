# Simple translation controller plugin

## Installation Zend 3
`composer require mikica/zf2-translate-plugin`

## Installation Zend 2
`composer require mikica/zf2-translate-plugin "^1.0"`

You need to register new module. Add in file config/application.config.php: 

```
'modules' => array(
    '...',
    'ZfTranslate'
),
```

The module is ready to use. 

## Usage in controller

```php
<?php

$this->translate('translate word');
$this->translate('translate word', 'locale');
```
