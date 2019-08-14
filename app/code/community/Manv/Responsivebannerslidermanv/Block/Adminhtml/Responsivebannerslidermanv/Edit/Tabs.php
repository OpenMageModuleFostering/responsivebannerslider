<?php
class Manv_Responsivebannerslidermanv_Block_Adminhtml_Responsivebannerslidermanv_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("responsivebannerslidermanv_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("responsivebannerslidermanv")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("responsivebannerslidermanv")->__("Item Information"),
				"title" => Mage::helper("responsivebannerslidermanv")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("responsivebannerslidermanv/adminhtml_responsivebannerslidermanv_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
