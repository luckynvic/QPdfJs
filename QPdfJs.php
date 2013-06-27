<?php

/**
 * Description of QPdfJs
 * wrapper for pdf.js 
 * modified file from orgin
 * _viewer.php = viewer.html
 * yii_viewer.css = viewer.css
 * yii_viewer.js = viewer.js
 *
 * @author Lucky Vic <luckynvic@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version 0.1
 */

class QPdfJs extends CWidget
{

 
  public $url;
  
  public $options=array(

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


  public function init(){

     // check valid direction, default to ltr;
    if(!in_array($this->options['direction'],array('rtl','ltr')))
      $this->options['direction']='ltr';

  }

  public function run()
  {
    // Publish extension assets
    $basePath=Yii::getPathOfAlias('ext.pdfJs.assets');
    $baseUrl=Yii::app()->getAssetManager()->publish($basePath);

    $this->render('_viewer',array(
      'baseUrl'=>$baseUrl,
      'url'=>$this->url,
      'options'=>$this->options,
      ));
  }
  
}
?>