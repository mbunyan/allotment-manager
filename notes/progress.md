# Actions diary

## setup yii2 basic
```bash
composer create-project --prefer-dist yiisoft/yii2-app-basic allotment-manager
```
Environment is 'development'.

## 1. folders added to root
- add /data with .gitignore ```* !.gitignore```
- for test data, for sqlite db, json, csv, sql
- add /notes
- for notes, actions, changelog

## 2. config\web.php

Apply pretty URLs

Add after aliases:

```php
'name' => 'Allotments',
    'components' => [
        'formatter' => [
            'locale' => 'en_GB',
            'language' => 'en-GB',
            'dateFormat' => 'yyyy-MM-dd',
            'currencyCode' => 'GBP',
        ],
```

## 3. Mail testing
- direct to file system
- default directs messages to ```@runtime/mail```
- create: ```/data/mail``` with ```.gitignore``` all content
- in ```/config/web.php``` add ```'fileTransportPath' => '@app/data/mail'``` to 'mailer' array setting.
- in ```config\params.php``` update params for mail and user config
```php
return [
    'adminEmail' => 'admin@stick.local',
    'senderEmail' => 'noreply@stick.local',
    'supportEmail' => 'support@stick.local',
    'senderName' => 'stick.local mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,
];
```

## 4. Apply Bootstrap 4 & CSS fixes
- [Basic template changes](02_bootstrap4_basic_template.md)
- Navigation
- Forms
- Alert
- Change GridView action buttons

## 5. UUID
- ```composer require ramsey/uuid```
- preferred over manual manipulation and less complex libraries
