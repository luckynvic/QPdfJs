#QPdfJs

pdf.js wrapper for Yii Framework

## Feature
Embeded pdf file in your web by pdf.js library

## Requirements 
* [Yii Framework](http://yiiframework.com/) - Yii 1.1 or above
* [pdf.js](https://github.com/mozilla/pdf.js)

## Installing and configuring
* Download and extract to folder extension.
* Download [pdf.js](https://github.com/mozilla/pdf.js), and copy all pdf.js library to extension assets. There are several library was modified for Yii Framework with name yii_* in assets/web/ inlcude in this extension.

## Usage
In your view
```php
<?php 
  	$this->widget('ext.pdfJs.QPdfJs',array(
			'url'=>$this->createUrl('/file/view',array('id'=>$model->id,'format'=>Files::PDF)),
?>
```

## Parameter
string $url : pdf file url
array $options : optional option to pdf.js viewer

### Default option
```php

 $options=Array(
    // Default sidebar state
      'sideBarOpen'=>false,

    // ltr = left to right, rtl=right to left
      'direction'=>'ltr',

    // Button visible state

      'sideBarOpen'=>false,
        // ltr = left to right, rtl=right to left
      'direction'=>'ltr',

      'buttons'=>array(
        'sidebarToggle'=>true,
        'viewFind'=>true,
        'pageUp'=>true,
        'pageDown'=>true,        
        'zoomIn'=>true,
        'zoomOut'=>true,
        'scaleSelect'=>true,
        'presentationMode'=>true,
        'print'=>false,
        'openFile'=>false,
        'download'=>false,
        'viewBookmark'=>false,
        )
    );
```