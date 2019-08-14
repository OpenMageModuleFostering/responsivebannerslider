<?php


class Manv_Responsivebannerslidermanv_Block_Adminhtml_Responsivebannerslidermanv extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_responsivebannerslidermanv";
	$this->_blockGroup = "responsivebannerslidermanv";
	$this->_headerText = Mage::helper("responsivebannerslidermanv")->__("Responsivebannerslidermanv Manager");
	$this->_addButtonLabel = Mage::helper("responsivebannerslidermanv")->__("Add New Item");
	parent::__construct();
	
	}

}