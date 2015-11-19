#Simple translation controller plugin

##Installation
`composer install mikica/zf2-translate-plugin`

You need to register new module. Add in file config/application.config.php: 

```
'modules' => array(
    '...',
    'ZfTranslate'
),
```

Voila! The module is ready to use. 

##Usage in controller

```php
<?php

$this->translate('translate word');
$this->translate('translate word', 'locale');
```
