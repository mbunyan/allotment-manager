## bootstrap4 GridView

- Original GridView action buttons used icons
- Not keen on icons, so:
- Alternative below uses Bootstrap button methods

```php
[
    'class' => 'yii\grid\ActionColumn',
    'buttons' => [
        'update' =>  function ($url, $model) {
            return Html::a('edit', $url, [
                'title' => 'update',
                'role' => 'button',
                'class' => 'btn btn-outline-primary p-1',
            ]);
        },
        'view' =>  function ($url, $model) {
            return Html::a('view', $url, [
                'title' =>  'view',
                'role' => 'button',
                'class' => 'btn btn-outline-info p-1',
            ]);
        },
        'delete' => function ($url, $model) {
            return Html::a('delete', $url, [
                'title' => 'delete',
                'role' => 'button',
                'class' => 'btn btn-danger p-1',
            ]);
        }
    ]
],
```
Create ```class ActionColumn extends \yii\grid\ActionColumn``` in ```/components/grid```. Replace built in action column ```['class' => 'yii\grid\ActionColumn'],``` with ```['class' => 'app\components\grid\ActionColumn'],```.

### Pagination
- In page using GridView, edit ```GridView::widget```
- by adding ```'pager' => ['class' => \yii\bootstrap4\LinkPager::class],```
- after ```'dataProvider'```
