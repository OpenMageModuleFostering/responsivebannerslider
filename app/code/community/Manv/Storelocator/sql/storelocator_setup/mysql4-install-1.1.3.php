<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table {$this->getTable('manvstorelocator')} (id int not null auto_increment, name varchar(100), address varchar(255),zipcode varchar(100),city varchar(100),country_id varchar(100),phone varchar(100),fax varchar(100),description varchar(255),store_url varchar(100),email varchar(100),tradinghours varchar(100),radius varchar(100),image varchar(100),lat varchar(100),longt varchar(100),status varchar(100),primary key(id));

INSERT INTO {$this->getTable('manvstorelocator')} (`name`, `address`, `zipcode`, `city`, `country_id`, `phone`, `fax`, `description`, `store_url`, `email`, `tradinghours`, `radius`, `image`, `lat`, `longt`, `status`) VALUES ('Jaipur Store', 'Jaipur', '302018', 'Jaipur', 'India', '7792047479', NULL, 'Jaipur Store', 'http://www.magentocommerce.com/magento-connect/developer/sharmamanvendra', 'sharmamanvendra6@gmail.com', '7:00 To 8:00PM', '306', 'storelocator/storelocator/14948.jpg', '26.849542700000000000', '75.819621099999950000', '0');


		
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
