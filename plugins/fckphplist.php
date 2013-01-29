<?php

/*
 * plugin for phpList to provide the FCKeditor in the compose campaign page
 * 
 * works with the FCKeditor version 2.6.8
 * 
 */


class fckphplist extends phplistPlugin {
  public $name = "FCKeditor plugin for phpList";
  public $coderoot = "fckphplist/";
  public $editorProvider = true;
  public $version = "0.1";
  public $authors = 'Michiel Dethmers';
  public $enabled = 0;
  
  function fckphplist() {
    parent::phplistplugin();
    $this->coderoot = dirname(__FILE__).'/fckphplist/';
  }

  function adminmenu() {
    return array(
    );
  }
  
  function editor($fieldname,$content) {
    include_once $this->coderoot.'/fckeditor/fckeditor.php';
    if (!class_exists('FCKeditor')) return 'Editor class not found';
    $oFCKeditor = new FCKeditor($fieldname) ;
    $oFCKeditor->BasePath = 'plugins/fckphplist/fckeditor/';
    $oFCKeditor->ToolbarSet = 'Default' ;
    $oFCKeditor->Value = $content;
    $w = getConfig("fckeditor_width");
    $h = getConfig("fckeditor_height");
    if ($_SESSION["fckeditor_height"]) {
      $h = sprintf('%d',$_SESSION["fckeditor_height"]);
    }

    # for version 2.0
    if ($h < 400) {
      $h = 400;
    }
    $oFCKeditor->Height = $h;
    $oFCKeditor->Width = $w;
    return $oFCKeditor->CreateHtml();
  }

}
