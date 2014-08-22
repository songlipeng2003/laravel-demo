<?php
return array(
    'title'=>'产品管理',
    'single'=>'product',
    'model'=>'Product',

    'columns'=>array(
        'id',
        'title',
        'created_at',
        'updated_at'
    ),

    'filters' => array(
        'title',
    ),

    'edit_fields'=>array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'content' => array(
            'title' => 'Content',
            'type' => 'text',
        ),
    ),
);