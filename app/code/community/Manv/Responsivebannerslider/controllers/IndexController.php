<?php
class Manv_Responsivebannerslider_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Responsive banner slider"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("responsive banner slider", array(
                "label" => $this->__("Responsive banner slider"),
                "title" => $this->__("Responsive banner slider")
		   ));

      $this->renderLayout(); 
	  
    }
}