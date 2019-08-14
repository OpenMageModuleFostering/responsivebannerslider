<?php
	
class Manv_Responsivebannerslidermanv_Block_Adminhtml_Responsivebannerslidermanv_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "responsivebannerslidermanv";
				$this->_controller = "adminhtml_responsivebannerslidermanv";
				$this->_updateButton("save", "label", Mage::helper("responsivebannerslidermanv")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("responsivebannerslidermanv")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("responsivebannerslidermanv")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("responsivebannerslidermanv_data") && Mage::registry("responsivebannerslidermanv_data")->getId() ){

				    return Mage::helper("responsivebannerslidermanv")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("responsivebannerslidermanv_data")->getId()));

				} 
				else{

				     return Mage::helper("responsivebannerslidermanv")->__("Add Item");

				}
		}
}