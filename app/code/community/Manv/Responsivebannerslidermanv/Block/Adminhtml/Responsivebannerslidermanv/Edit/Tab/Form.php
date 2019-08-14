<?php
class Manv_Responsivebannerslidermanv_Block_Adminhtml_Responsivebannerslidermanv_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("responsivebannerslidermanv_form", array("legend"=>Mage::helper("responsivebannerslidermanv")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("responsivebannerslidermanv")->__("title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('responsivebannerslidermanv')->__('image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("responsivebannerslidermanv")->__("description"),
						"name" => "description",
						));
					
						$fieldset->addField("url", "text", array(
						"label" => Mage::helper("responsivebannerslidermanv")->__("url"),
						"name" => "url",
						));
					
						$fieldset->addField("status", "text", array(
						"label" => Mage::helper("responsivebannerslidermanv")->__("status"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "status",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getResponsivebannerslidermanvData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getResponsivebannerslidermanvData());
					Mage::getSingleton("adminhtml/session")->setResponsivebannerslidermanvData(null);
				} 
				elseif(Mage::registry("responsivebannerslidermanv_data")) {
				    $form->setValues(Mage::registry("responsivebannerslidermanv_data")->getData());
				}
				return parent::_prepareForm();
		}
}
