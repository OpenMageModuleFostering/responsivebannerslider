<?php

class Manv_Responsivebannerslidermanv_Block_Adminhtml_Responsivebannerslidermanv_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("responsivebannerslidermanvGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("ASC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("responsivebannerslidermanv/responsivebannerslidermanv")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("responsivebannerslidermanv")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("responsivebannerslidermanv")->__("title"),
				"index" => "title",
				));
				$this->addColumn("url", array(
				"header" => Mage::helper("responsivebannerslidermanv")->__("url"),
				"index" => "url",
				));
				$this->addColumn("status", array(
				"header" => Mage::helper("responsivebannerslidermanv")->__("status"),
				"index" => "status",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_responsivebannerslidermanv', array(
					 'label'=> Mage::helper('responsivebannerslidermanv')->__('Remove Responsivebannerslidermanv'),
					 'url'  => $this->getUrl('*/adminhtml_responsivebannerslidermanv/massRemove'),
					 'confirm' => Mage::helper('responsivebannerslidermanv')->__('Are you sure?')
				));
			return $this;
		}
			

}