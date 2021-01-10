
#
# Table structure for table 'tx_simplenews_domain_model_content'
#
CREATE TABLE tx_simplenews_domain_model_content (
   title varchar(255) DEFAULT '' NOT NULL,
   bodytext mediumtext,
   teaser text,
   display varchar(100) DEFAULT '' NOT NULL,
   type varchar(100) DEFAULT '' NOT NULL,
   status TINYINT(1) NOT NULL DEFAULT '1',
   note text DEFAULT '',
   sort int(11) NOT NULL DEFAULT '0',
   create_time DATETIME DEFAULT CURRENT_TIMESTAMP,
   update_time DATETIME DEFAULT CURRENT_TIMESTAMP,
   author varchar(255) DEFAULT '' NOT NULL,
   hidden tinyint(4) DEFAULT '0' NOT NULL,
);