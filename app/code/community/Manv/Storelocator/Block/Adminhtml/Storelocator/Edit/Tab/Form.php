<?php
class Manv_Storelocator_Block_Adminhtml_Storelocator_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("storelocator_form", array("legend"=>Mage::helper("storelocator")->__("Item information")));

				
						$fieldset->addField("name", "text", array(
						"label" => Mage::helper("storelocator")->__("Name"),
						"name" => "name",
						));
					
						$fieldset->addField("address", "text", array(
						"label" => Mage::helper("storelocator")->__("Address"),
						"name" => "address",
						));
					
						$fieldset->addField("zipcode", "text", array(
						"label" => Mage::helper("storelocator")->__("Zipcode"),
						"name" => "zipcode",
						));
					
						$fieldset->addField("city", "text", array(
						"label" => Mage::helper("storelocator")->__("City"),
						"name" => "city",
						));
					
						$fieldset->addField("country_id", "text", array(
						"label" => Mage::helper("storelocator")->__("Country"),
						"name" => "country_id",
						));
					
						$fieldset->addField("phone", "text", array(
						"label" => Mage::helper("storelocator")->__("Phone"),
						"name" => "phone",
						));
					
						$fieldset->addField("fax", "text", array(
						"label" => Mage::helper("storelocator")->__("Fax"),
						"name" => "fax",
						));
					
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("storelocator")->__("Description"),
						"name" => "description",
						));
					
						$fieldset->addField("store_url", "text", array(
						"label" => Mage::helper("storelocator")->__("Store_url"),
						"name" => "store_url",
						));
					
						$fieldset->addField("email", "text", array(
						"label" => Mage::helper("storelocator")->__("Email"),
						"name" => "email",
						));
					
						$fieldset->addField("tradinghours", "text", array(
						"label" => Mage::helper("storelocator")->__("Trading Hours"),
						"name" => "tradinghours",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('storelocator')->__('Store Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("lat", "text", array(
						"label" => Mage::helper("storelocator")->__("Latitude"),
						"name" => "lat",
						));
					
						$fieldset->addField("longt", "text", array(
						"label" => Mage::helper("storelocator")->__("Longitude"),
						"name" => "longt",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('storelocator')->__('Status'),
						'values'   => Manv_Storelocator_Block_Adminhtml_Storelocator_Grid::getValueArray15(),
						'name' => 'status',
						));
						$fieldset->addField("radius", "text", array(
						"label" => Mage::helper("storelocator")->__("Radius"),
						"name" => "radius",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getStorelocatorData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getStorelocatorData());
					Mage::getSingleton("adminhtml/session")->setStorelocatorData(null);
				} 
				elseif(Mage::registry("storelocator_data")) {
				    $form->setValues(Mage::registry("storelocator_data")->getData());
				}
				return parent::_prepareForm();
		}
}
