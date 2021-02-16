# 2. Apply Bootstrap 4
- remove bootstrap 3 using:
- ```composer remove yiisoft/yii2-bootstrap```
- install Bootstrap 4 using:
- ```composer require yiisoft/yii2-bootstrap4```

## Bootstrap 4 bug hunt
- Error: Failed to instantiate component or class "yii\bootstrap\BootstrapAsset"
- In 'assets\AppAsset.php' change:
```php
public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
```
to:
```php
public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
```
- Error: Class 'yii\bootstrap\NavBar' not found
- In 'views\layouts\main.php' change:
```php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
```
to:
```php
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
```

### Alert widget
- Error: Class 'yii\bootstrap\Widget' not found
- In 'widgets\Alert.php' change:
- ```class Alert extends \yii\bootstrap\Widget```
- to ```class Alert extends \yii\bootstrap4\Widget```
- and
- ```echo \yii\bootstrap\Alert::widget([```
- to: ```echo \yii\bootstrap4\Alert::widget([```

### reload front page
- Navigation is probably not visible and top nav bar not well defined
- In 'views\layouts\main.php' change NavBar options:
- ```'class' => 'navbar-inverse navbar-fixed-top',```
- to: ```'class' => 'navbar-expand-lg navbar-dark bg-dark',```
- Note: class 'navbar' is added automatically by widget
- In 'views\layouts\main.php' change Nav::widget options:
- - ```'class' => 'navbar-nav navbar-right',```
- to: ```'class' => 'navbar-nav ml-auto',```
- See options for position, fixed-nav, colors at: [Bootstrap4](https://getbootstrap.com/docs/4.5/components/navbar/)

### Navigate to Contact or Login pages
- Error: Class 'yii\bootstrap\ActiveForm' not found
- In 'views\site\contact.php' change:
- ```use yii\bootstrap\ActiveForm;```
- to: ```use yii\bootstrap4\ActiveForm;```
- In 'views\site\login.php' change:
- ```use yii\bootstrap\ActiveForm;```
- to: ```use yii\bootstrap4\ActiveForm;```

### Logout link
- May notice Logout link does not align horizontal with other top nav links
- Bootstrap4 buttons have different padding from links
- Live with it, or in ```'views\layouts\main.php'``` change:
- ```'class' => 'btn btn-link logout'```
- to ```'class' => 'btn btn-link logout p-2'```
- or ```btn btn-primary``` shows white button with black text
- See: [Spacing in Bootstrap4](https://getbootstrap.com/docs/4.5/utilities/spacing)
- Logout in hamburger is not vertically aligned perfectly, but acceptable
- Change button class 'btn-link', which shows as blue, to 'btn-dark', to provide better contrast with 'navbar-dark'. Look for similar accessibility issue with other navbar colours.

## GridView
- [GridView Actions and pagination](03_bootstrap4_gridview.md)

## Forms and Search forms
- Change form using ```use yii\widgets\ActiveForm;```, often created by Gii
- To: ```use yii\bootstrap4\ActiveForm;```
Some form styles may benefit by:
- Change: ```ActiveForm::begin();```
- to: ```ActiveForm::begin(['layout' => 'horizontal']);```
