#QPdfJs

pdf.js wrapper for Yii Framework
## Feature
Embedded pdf file in your web using pdf.js library.


## Requirements 
* [Yii Framework](http://yiiframework.com/) - Yii 1.1 or above
* [pdf.js](https://github.com/mozilla/pdf.js)

## Installing and configuring
* Download and extract to extension folder.
* Download latest [pdf.js](https://github.com/mozilla/pdf.js), and copy all files to pdfJs/assets folder. There are several libraries were modified for Yii Framework with prefix yii_* in assets/web/ include in this extension. Overwrite assets/web folder but make sure if yii_* files is not overwritten.

## Usage
In your view

~~~
[php]

$this->widget('ext.pdfJs.QPdfJs',array(
  'url'=>$this->createUrl('/file/view',array('id'=>$model->id,'format'=>Files::PDF)),

~~~

## Parameter
string `$url` : pdf file url  
array `$options` : optional option to pdf.js viewer

### Default options


~~~
[php]
 $options=Array(
    // Default sidebar state
      'sideBarOpen'=>false,

    // ltr = left to right, rtl=right to left
      'direction'=>'ltr',

    // Button visible state
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

~~~

## Resource
* [pdf.js](https://github.com/mozilla/pdf.js)
* [Github](https://github.com/luckynvic/QPdfJs) - source
* [Demo](http://dev.cyber313.com/ext_dev/index.php?r=site/pdfViewer)