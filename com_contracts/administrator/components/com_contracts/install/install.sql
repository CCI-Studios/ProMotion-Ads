CREATE TABLE IF NOT EXISTS `#__contracts_contracts` (
	`contracts_contract_id` SERIAL,
	
	`enabled` TINYINT(1) DEFAULT "1",
	`signed` TINYINT(1) DEFAULT "0",
	`password` CHAR(10) NOT NULL,
	
	`contracts_campaign_id` BIGINT(20) NOT NULL,
	`contracts_driver_id` BIGINT(20) NOT NULL
) ENGINE=MyISAM;

CREATE OR REPLACE VIEW `#__contracts_contracts_view` AS 
SELECT c.*, d.name as 'driver_name', a.title as 'campaign_title' FROM yxpzl_contracts_contracts AS c
	LEFT JOIN #__contracts_drivers AS d ON c.contracts_driver_id=d.contracts_driver_id
	LEFT JOIN #__contracts_campaigns AS a ON c.contracts_campaign_id=a.contracts_campaign_id