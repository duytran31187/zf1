<?php
class IndexController extends Zend_Controller_Action{ 
    public function indexAction() { 
     $data= array(
      'title' => 'Zend Framework',
      'author'=> 'Kenny',
      'date'  => '20-11-2009',
      'website'=> 'www.QHOnline.Info'
     );
     $this->view->info =$data;
    } 
}



