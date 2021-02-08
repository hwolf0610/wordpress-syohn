<?php
/**
 * @package Harry_Naruto
 * @version 1.0.0
 */
/*
Plugin Name: Dashboard for Home Retail
Plugin URI: http://wordpress.org/plugins
Description: This is a plugin for manage upload new home information in syohn.com
Author: Harry Naruto
Version: 1.0.0
Author URI: https://harry-naruto.herokuapp.com/
License: GPL2
*/

register_activation_hook( __FILE__, 'crudOperationsTable');

function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();

  $table_name_home_retail_file_name_changer = $wpdb->prefix . '_home_retail_file_name_changer';
  $sql = "CREATE TABLE `$table_name_home_retail_file_name_changer` (
		`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`file1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		PRIMARY KEY(home_id)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_file_name_changer'") != $table_name_home_retail_file_name_changer) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_File_uploader_test = $wpdb->prefix . '_home_retail_Multi_File_uploader';
  $sql = "CREATE TABLE `$table_name_home_retail_File_uploader_test` (
		`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`file1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`file2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file8` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file9` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file10` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file13` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file15` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file16` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file17` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file18` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file19` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file20` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file22` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`file23` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		PRIMARY KEY(home_id)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_File_uploader_test'") != $table_name_home_retail_File_uploader_test) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  //   CREATE TABLE Persons (
//     ID int NOT NULL,
//     LastName varchar(255) NOT NULL,
//     FirstName varchar(255),
//     Age int,
//     PRIMARY KEY (Age),
//     CONSTRAINT UC_Person UNIQUE (ID,LastName)
// );

  $table_name_home_retail_broker = $wpdb->prefix . '_home_retail_broker';
  $sql = "CREATE TABLE `$table_name_home_retail_broker` (
		`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_first_name` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_last_name` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_phone` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_email` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_co_listing_agent` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_broker_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_borker_desctrip` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_listing_date` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_selling_commission` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_selling_commission_percentage` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_type_in_number` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_type_in_number_percentage` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_buying_agent_commision` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_buying_agent_commision_percentaeg` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_seller_agreement_type_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_prospect_excemt_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`broker_agent_agreement_services_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_broker'") != $table_name_home_retail_broker) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_information = $wpdb->prefix . '_home_retail_information';
  $sql = "CREATE TABLE `$table_name_home_retail_information` (
		`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`next_other_check_41_heater` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_select_6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_select_7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_41` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_select_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_select_5_textarea3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`desc_broker_owner_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`Description_select_FAMILY_ROOM_length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`other_sec_description_check_312_other` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`other_sec_description_ZONE_Low_risk_z_other` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_13` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_15` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_16` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_17` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_18` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_19` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_111` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_112` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_113` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_114` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_115` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_116` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_117` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_1_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_Buying_Agent_Commi_des` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_Buying_Agent_Commi_des_sct` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_22` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_23` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_31` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_32` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_33` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_34` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_35` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_3_textarea2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_txt_abt_time_Remaining` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_txt_abt_Warranty_Company` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information__txt5_abt_bd_monthly` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information__txt5_abt_cpy_name` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		`information_checkbox_12_NA_7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
		PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_information'") != $table_name_home_retail_information) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_type = $wpdb->prefix . '_home_retail_type';
  $sql = "CREATE TABLE `$table_name_home_retail_type` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Type_checkbox_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Type_checkbox_1_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_checkbox_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_checkbox_2_textarea2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_type_textarea_tax_amount` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_select_owner_3_ss` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_select_owner_1_first_name` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_select_owner_1_last_name` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_textarea_deep_book` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `desc_broker_owner_textarea_dropdown` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_15` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_textarea_Deed_page` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_16` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_textarea_PID_1234` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_17` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_textarea_plat_book_1234` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_18` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_19` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12__land_lot` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_10` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `desc_special_ass` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `desc_special_ass_text` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_111` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_tax_year` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_112` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_113` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_total_real_estate` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_114` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_sale_price_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_115` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_select_32_Broker_lease_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_select_32_Broker_lease` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_116` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_textarea_lease` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_117` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_type'") != $table_name_home_retail_type) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_address = $wpdb->prefix . '_home_retail_address';
  $sql = "CREATE TABLE `$table_name_home_retail_address` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `property_address_street_address1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_118` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_UNIT1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_119` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_country_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_city1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_120` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_state1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_121` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_zip_code1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_122` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_geo_lat` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_geo_long` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_124` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_city_limits_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_126` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_historic_district_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_127` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_first_name_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_last_name1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_phone1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_email1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_SUBDIVISION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_132` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_SECONDARY_SUBDIVISION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_133` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HOA_select1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_134` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HOA_INITIATION_FEE_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_135` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HOA_MONTHLY_FEE_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_136` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_ELEMENTARY_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_ELEMENTARY_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_137` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_ELEMENTARY_2_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_ELEMENTARY_2_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_138` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_MIDDLE_SCHOOL_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_MIDDLE_SCHOOL_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_139` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_MIDDLE_SCHOOL_2_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_MIDDLE_SCHOOL_2_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_140` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HIGH_SCHOOL_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HIGH_SCHOOL_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HIGH_SCHOOL_2_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_HIGH_SCHOOL_2_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_142` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `PROPERTY_DESCRIPTION_PROPERTY_TAG_LINE_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `PROPERTY_DESCRIPTION_PROPERTY_DESCRIPTION_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_144` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `PROPERTY_DESCRIPTION_year_built_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_145` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `property_address_geo_long_GPS_LOCATION_LIN` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_124_GPS_LOCATION_LIN` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_address'") != $table_name_home_retail_address) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_1 = $wpdb->prefix . '_home_retail_description_1';
  $sql = "CREATE TABLE `$table_name_home_retail_description_1` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Description_select_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Description_select_22` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_23` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_24` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_25` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_26` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_27` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_27_CONSTRUCTION_TYPE_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_146` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_31` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_32` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Description_select_33` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_34` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_35` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_36` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_37` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_38` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_39` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_310` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_310_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_147` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_LOT_ACRES_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_148` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_LOT_SQUARE_FOOTAGE_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_149` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_LOT_DIMENTIONS_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_150` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_KITCHEN_length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_KITCHEN_width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_002` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_DINING_ROOM_length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_DINING_ROOM_width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_LIVING_ROOM_length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_LIVING_ROOM_width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_FAMILY_ROOM_width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_PANTRY_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_PANTRY_width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MUDROOM_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_1'") != $table_name_home_retail_description_1) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_2 = $wpdb->prefix . '_home_retail_description_2';
  $sql = "CREATE TABLE `$table_name_home_retail_description_2` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Description_select_MUDROOM_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_OFFICE_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_OFFICE_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_1_2_BATH_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_1_2_BATH_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_GARAGE_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_GARAGE_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_8` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CARPORT_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CARPORT_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_9` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_PATIO_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_PATIO_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_DECK_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_DECK_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MEDIA_ROOM_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MEDIA_ROOM_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BONUS_ROOM_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BONUS_ROOM_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MASTER_BEDROOM_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MASTER_BEDROOM_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MASTER_BATHROOM_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MASTER_BATHROOM_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MASTER_CLOSET_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_MASTER_CLOSET_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BEDROOM_1_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BEDROOM_1_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_8` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CLOSET_1_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CLOSET_1_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_n_9` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BEDROOM_2_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BEDROOM_2_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CLOSET_2_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CLOSET_2_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BEDROOM_3_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_2'") != $table_name_home_retail_description_2) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_3 = $wpdb->prefix . '_home_retail_description_3';
  $sql = "CREATE TABLE `$table_name_home_retail_description_3` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Description_select_BEDROOM_3_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CLOSET_3_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_CLOSET_3_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BATHROOM_1_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BATHROOM_1_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BATHROOM_2_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BATHROOM_2_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BATHROOM_3_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_BATHROOM_3_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_OTHER_1_description` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_OTHER_1_Length_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_OTHER_1_Width_input` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_143_001_m_8` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12321` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12322` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12323` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12324` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12325` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12326` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12327` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12328` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12329` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123211` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123212` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123213` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123214` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123215` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123216` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123217` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123218` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123218_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_151` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_512_dropdownChanges` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_512_dropdownChanges_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_152` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12321123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12322123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox12323123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_3_checkbox123218_textarea123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_checkbox123123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_checkbox12321123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_3'") != $table_name_home_retail_description_3) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_4 = $wpdb->prefix . '_home_retail_description_4';
  $sql = "CREATE TABLE `$table_name_home_retail_description_4` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Description_select_4_checkbox12322123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_checkbox12323123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_checkbox123218123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_checkbox123218_textarea123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_154` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_HANDICAP_ACCESSIBLE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_155` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_RAMP_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_156` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_ACCESSIBLE_ENTRANCE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_157` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_BATHROOM_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_158` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_ELEVATOR_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_159` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_HALLWAYS_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_160` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_KITCHEN_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_161` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_WATERFRONT_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_162` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_select_4_WATER_ACCESS_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_163` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_22` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_23` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_24` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_25` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_26` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_27` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_28` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_29` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_210` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_211` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_212` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_213` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_214` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_215` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_216` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_217` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_218` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_219` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_220` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_221` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_222` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_223` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_4'") != $table_name_home_retail_description_4) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_5 = $wpdb->prefix . '_home_retail_description_5';
  $sql = "CREATE TABLE `$table_name_home_retail_description_5` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `other_sec_description_check_224` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_225` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_226` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_227` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_228` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_229` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_230` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_231` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_232` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_233` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_234` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_235` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_236` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_237` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_164` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_COBRA_ZONE_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_165` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_FEDERAL_FLOOD_INSURANCE_AVAILBLE_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_166` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_PROPERTY_LOCATION_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_167` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_A_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_31` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_AE_A1_30_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_32` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_AH_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_33` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_AO_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_34` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_AR_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_35` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_A999` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_36` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_V_111` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_37` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_VE_V1_30` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_38` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_X_shaded` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_39` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_Moderate_risk` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_310` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_X_Unshaded` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_311` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_ZONE_Low_risk_z` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_168` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_SQUARE_FOOTAGE_HEATED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_169` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_5'") != $table_name_home_retail_description_5) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_6 = $wpdb->prefix . '_home_retail_description_6';
  $sql = "CREATE TABLE `$table_name_home_retail_description_6` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `other_sec_description_SQUARE_FOOTAGE_SEPARATE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_170` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_41` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_42` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_43` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_44` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_45` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_46` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_47` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_48` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_49` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_410` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_411` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_412` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_412_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_171` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_51` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_52` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_53` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_54` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_55` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_56` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_56_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_172` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_OF_ROOMS_123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_173` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_6_select_1_GARAGE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_6_select_1_GARAGE_select_garage` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `information_checkbox_12_NA_174` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_7_select_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_7_select_1_CARPORT_garage` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_175` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_8` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_81` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_82` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_83` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_84` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_85` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_86` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_87` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_88` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_89` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_810` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_810_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_176` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_9` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_6'") != $table_name_home_retail_description_6) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_7 = $wpdb->prefix . '_home_retail_description_7';
  $sql = "CREATE TABLE `$table_name_home_retail_description_7` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `other_sec_description_check_91` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_92` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_93` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_94` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_95` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_96` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_97` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_98` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_99` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_check_99_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_177` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_OF_FULL_BATHS_show_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_178` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_OF_1_2_BATHS_show_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_bedroom_show_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_textarea_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `other_sec_description_textarea_3_desc` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_181` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_PROPERTY_STORIES_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_182` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_13` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_15` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_16` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_17` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_18` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_18_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_183` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_21123` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_21123_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_184` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_22` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_23` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_24` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_26` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_25` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_25_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_185` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_3` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_31` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_32` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_34` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_33` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_7'") != $table_name_home_retail_description_7) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_8 = $wpdb->prefix . '_home_retail_description_8';
  $sql = "CREATE TABLE `$table_name_home_retail_description_8` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `next_other_check_33_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_186` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_4` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_41` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_42` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_43` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_188` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_41_descrip_DEPTH` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_41_descrip_DATE_INSTALLED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_44` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_45` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_46` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_47` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_48` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_45_descrip_DATE_INSTALLED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_45_descrip_WHEN_LAST_EMPTIED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_5` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_51` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_52` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_53` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_54` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_55` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_190` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_52_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_56` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_57` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_58` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_59` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_510` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_511` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_512` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_512_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_191` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_513` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_514` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_515` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_515_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_192` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_6` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_61` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_62` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_63` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_64` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_65` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_66` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_67` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_68` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_69` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_8'") != $table_name_home_retail_description_8) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_9 = $wpdb->prefix . '_home_retail_description_9';
  $sql = "CREATE TABLE `$table_name_home_retail_description_9` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `next_other_check_610` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_611` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_612` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_613` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_614` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_615` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_616` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_617` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_618` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_619` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_620` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_621` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_622` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_623` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_624` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_625` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_626` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_627` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_628` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_629` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_630` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_631` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_632` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_633` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_634` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_635` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_636` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_637` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_637_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_193` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_7` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_71` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_72` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_73` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_74` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_75` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_76` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_77` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_78` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_79` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_710` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_711` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_712` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_712_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_194` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_8` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_81` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_82` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_9'") != $table_name_home_retail_description_9) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_10 = $wpdb->prefix . '_home_retail_description_10';
  $sql = "CREATE TABLE `$table_name_home_retail_description_10` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `next_other_check_83` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_84` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_85` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_86` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_87` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_88` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_89` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_810` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_811` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_812` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_813` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_814` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_815` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_816` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_816_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_195` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_9` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_91` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_92` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_93` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_94` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_95` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_96` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_97` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_98` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_99` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_910` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_910_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_196` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_911` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_912` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_913` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_914` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_915` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_916` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_917` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_918` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_919` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_920` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_other_check_920_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_197` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_text_select` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_text_Length` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_text_width_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_198` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_text_MEAN_HIGH_WATER_DEPTH` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_199` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_10'") != $table_name_home_retail_description_10) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_description_11 = $wpdb->prefix . '_home_retail_description_11';
  $sql = "CREATE TABLE `$table_name_home_retail_description_11` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `next_2_other_check_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_13` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_15` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_16` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_17` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_18` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_19` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_110` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_111` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_112` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_113` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_114` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_115` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_115_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1100` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_22` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_23` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_24` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_25` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_26` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_27` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_28` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_29` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_210` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_211` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_212` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_213` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_214` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_215` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_216` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_217` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_218` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_219` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_220` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_221` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_222` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_223` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1101` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `next_2_other_check_223_textarea` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_description_11'") != $table_name_home_retail_description_11) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_instruction = $wpdb->prefix . '_home_retail_instruction';
  $sql = "CREATE TABLE `$table_name_home_retail_instruction` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Instructions_checkbox_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_13` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_15` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_16` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_17` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_18` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_19` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_111` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_112` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_113` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_114` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_115` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_116` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_117` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_118` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instructions_checkbox_119` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1102` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1102_List_all_special` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_11` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_12` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_13` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_14` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1104` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_21` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1105` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_31` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_32` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_33` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_34` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Distribution_checkbox_35` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `information_checkbox_12_NA_1106` varchar(220) , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_instruction'") != $table_name_home_retail_instruction) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_photo_upload = $wpdb->prefix . '_home_retail_photo_upload';
  $sql = "CREATE TABLE `$table_name_home_retail_photo_upload` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
		`home_seller_kind` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
		`home_retail_regex_id` varchar(255) NOT NULL , 
		`home_retail_user_information` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `pdf_document_upload` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `file_upload_EXTERIOR_LANDSCAPING` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_EXTERIOR_HOUSE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_EXTERIOR_POOL` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_EXTERIOR_SHED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_EXTERIOR_OTHER` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_GARAGE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_MUD_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_LIVING_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_DINING_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_FAMILY_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_MEDIA_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_BASEMENT_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_KITCHEN_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_PANTRY_ROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_HALF_BATH` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_OFFICE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_BEDROOMS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_BATHROOMS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_MASTER_BEDROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_MASTER_CLOSET` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_OTHER` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_PDF_DOCUMENTS_UPLOAD` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `file_upload_INTERIOR_MASTER_BATHROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  PRIMARY KEY(home_id),
    UNIQUE (home_retail_regex_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_photo_upload'") != $table_name_home_retail_photo_upload) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

  $table_name_home_retail_instruction_blue_box = $wpdb->prefix . '_home_retail_instruction_blue_box';
  $sql = "CREATE TABLE `$table_name_home_retail_instruction_blue_box` (
	`home_id` int(220) NOT NULL AUTO_INCREMENT,
  `Broker_Broker_Agent` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Co_Listing_Agent` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Broker` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Listing_Date` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Selling_Commission` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Buying_Agent_Commission` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Sellers_Agreement_Type` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Prospect_Exempt` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Broker_Agreement_Services` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Information_PROPERTY_INFORMATION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,
  `Information_PURCHASE_OPTIONS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_Buying_Agent_Commission` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_SELLER_REPRESENTATION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_POSSESSION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_AUCTION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_STIPULATION_OF_SALE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_HOME_WARRANTY` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Information_TERMITE_BOND` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_PROPERTY_CATEGORY_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_PROPERTY_CATEGORY_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_LEGAL_TAXES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_OWNER_OWNERS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Deed_Book` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Broker_Owner` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Deed_Page` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_PID` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Plat_Book` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Plat_Page` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Land_Lot` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Special_Assessment` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Tax_Year` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_Zoning` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_TOTAL_REAL_ESTATE_PROPERTY_TAX` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_SALE_PRICE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_LEASE_PRICE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Type_LEASE_GROSS_YEARLY_INCOME` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_STREET_ADDRESS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_GEO_LAT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_GEO_LONG` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_CITY_LIMITS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_HISTORIC_DISTRICT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_SUBDIVISION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_SECONDARY_SUBDIVISION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_HOA` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_HOA_INITIATION_FEE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_HOA_MONTHLY_FEE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_SCHOOL_DISTRICT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_ELEMENTARY` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_ELEMENTARY_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_MIDDLE_SCHOOL` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_MIDDLE_SCHOOL_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_HIGH_SCHOOL` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `ADDRESS_HIGH_SCHOOL_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PROPERTY_TAG_LINE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PROPERTY_DESCRIPTION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_YEAR_BUILT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_CONSTRUCTION_TYPE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_FOUNDATION_TYPE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_LOT_ACRES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_LOT_SQUARE_FOOTAGE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_LOT_DIMENTIONS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_ROOM_DIMENSIONS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PARKING` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_RV_BOAT_PARKING` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PARKING_MAINTENANCE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_TRASH` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_HANDICAP_ACCESSIBLE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_RAMP` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_ACCESSIBLE_ENTRANCE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_BATHROOM` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_ELEVATOR` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_HALLWAYS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_KITCHEN` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_WATERFRONT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_WATER_ACCESS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_WATERVIEW` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_COBRA_ZONE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PROPERTY_LOCATION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_FLOOD_ZONE_TYPE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_SQUARE_FOOTAGE_HEATED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_SQUARE_FOOTAGE_SEPARATE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PROPERTY_LEVELS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_BASEMENT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_OF_ROOMS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_GARAGE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_CARPORT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PORCH_BALCONY_DECK` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_ROOF` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_OF_FULL_BATHS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_OF_1_2_BATHS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_OF_BEDROOMS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_MASTER_BEDROOM_LOCATION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PROPERTY_STORIES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_HEATING_SOURCE_1` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_HEATING_SOURCE_2` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_INTERIOR_HEATING_SOURCE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_INTERIOR_COOLING` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_WATER` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_SEWER` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_ELECTRIC` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_POOL_SPA` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_PETS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_COMMUNITY_AMENITIES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_EXTERIOR_FEATURES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_EXTERIOR_FINISHES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_FENCING` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_ATTIC_SPACE` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_BOAT_SLIP` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_MEAN_HIGH_WATER_DEPTH` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_BUILDING_GREEN_CERTIFIED` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Description_GREEN_BUILDING_FEATURES` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Instruction_SHOWING_INSTRUCTIONS` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `listin_SELLER_OPT_OUT` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `listin_SELLER_OPT_IN` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `listin_OUTSIDE_DISTRIBUTION` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Photo_EXTERIOR` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Photo_INTERIOR` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `Document_PDF_s` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci , 
  `gps_geo_location` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci ,  
  PRIMARY KEY(home_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  $sql_insert_default = "INSERT INTO `$table_name_home_retail_instruction_blue_box` (`home_id`, `Broker_Broker_Agent`, `Broker_Co_Listing_Agent`, `Broker_Broker`, `Broker_Listing_Date`, `Broker_Selling_Commission`, `Broker_Buying_Agent_Commission`, `Broker_Sellers_Agreement_Type`, `Broker_Prospect_Exempt`, `Broker_Agreement_Services`, `Information_PROPERTY_INFORMATION`, `Information_PURCHASE_OPTIONS`, `Information_Buying_Agent_Commission`, `Information_SELLER_REPRESENTATION`, `Information_POSSESSION`, `Information_AUCTION`, `Information_STIPULATION_OF_SALE`, `Information_HOME_WARRANTY`, `Information_TERMITE_BOND`, `Type_PROPERTY_CATEGORY_1`, `Type_PROPERTY_CATEGORY_2`, `Type_LEGAL_TAXES`, `Type_OWNER_OWNERS`, `Type_Deed_Book`, `Type_Broker_Owner`, `Type_Deed_Page`, `Type_PID`, `Type_Plat_Book`, `Type_Plat_Page`, `Type_Land_Lot`, `Type_Special_Assessment`, `Type_Tax_Year`, `Type_Zoning`, `Type_TOTAL_REAL_ESTATE_PROPERTY_TAX`, `Type_SALE_PRICE`, `Type_LEASE_PRICE`, `Type_LEASE_GROSS_YEARLY_INCOME`, `ADDRESS_STREET_ADDRESS`, `ADDRESS_GEO_LAT`, `ADDRESS_GEO_LONG`, `ADDRESS_CITY_LIMITS`, `ADDRESS_HISTORIC_DISTRICT`, `ADDRESS_SUBDIVISION`, `ADDRESS_SECONDARY_SUBDIVISION`, `ADDRESS_HOA`, `ADDRESS_HOA_INITIATION_FEE`, `ADDRESS_HOA_MONTHLY_FEE`, `ADDRESS_SCHOOL_DISTRICT`, `ADDRESS_ELEMENTARY`, `ADDRESS_ELEMENTARY_2`, `ADDRESS_MIDDLE_SCHOOL`, `ADDRESS_MIDDLE_SCHOOL_2`, `ADDRESS_HIGH_SCHOOL`, `ADDRESS_HIGH_SCHOOL_2`, `Description_PROPERTY_TAG_LINE`, `Description_PROPERTY_DESCRIPTION`, `Description_YEAR_BUILT`, `Description_CONSTRUCTION_TYPE`, `Description_FOUNDATION_TYPE`, `Description_LOT_ACRES`, `Description_LOT_SQUARE_FOOTAGE`, `Description_LOT_DIMENTIONS`, `Description_ROOM_DIMENSIONS`, `Description_PARKING`, `Description_RV_BOAT_PARKING`, `Description_PARKING_MAINTENANCE`, `Description_TRASH`, `Description_HANDICAP_ACCESSIBLE`, `Description_RAMP`, `Description_ACCESSIBLE_ENTRANCE`, `Description_BATHROOM`, `Description_ELEVATOR`, `Description_HALLWAYS`, `Description_KITCHEN`, `Description_WATERFRONT`, `Description_WATER_ACCESS`, `Description_WATERVIEW`, `Description_COBRA_ZONE`, `Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE`, `Description_PROPERTY_LOCATION`, `Description_FLOOD_ZONE_TYPE`, `Description_SQUARE_FOOTAGE_HEATED`, `Description_SQUARE_FOOTAGE_SEPARATE`, `Description_PROPERTY_LEVELS`, `Description_BASEMENT`, `Description_OF_ROOMS`, `Description_GARAGE`, `Description_CARPORT`, `Description_PORCH_BALCONY_DECK`, `Description_ROOF`, `Description_OF_FULL_BATHS`, `Description_OF_1_2_BATHS`, `Description_OF_BEDROOMS`, `Description_MASTER_BEDROOM_LOCATION`, `Description_PROPERTY_STORIES`, `Description_HEATING_SOURCE_1`, `Description_HEATING_SOURCE_2`, `Description_INTERIOR_HEATING_SOURCE`, `Description_INTERIOR_COOLING`, `Description_WATER`, `Description_SEWER`, `Description_ELECTRIC`, `Description_POOL_SPA`, `Description_PETS`, `Description_COMMUNITY_AMENITIES`, `Description_EXTERIOR_FEATURES`, `Description_EXTERIOR_FINISHES`, `Description_FENCING`, `Description_ATTIC_SPACE`, `Description_BOAT_SLIP`, `Description_MEAN_HIGH_WATER_DEPTH`, `Description_BUILDING_GREEN_CERTIFIED`, `Description_GREEN_BUILDING_FEATURES`, `Instruction_SHOWING_INSTRUCTIONS`, `listin_SELLER_OPT_OUT`, `listin_SELLER_OPT_IN`, `listin_OUTSIDE_DISTRIBUTION`, `Photo_EXTERIOR`, `Photo_INTERIOR`, `Document_PDF_s`) VALUES (NULL, 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box');";
  // INSERT INTO `wp_hwolf_home_retail_instruction_blue_box` (`home_id`, `Information_PROPERTY_INFORMATION`, `Information_PURCHASE_OPTIONS`, `Information_Buying_Agent_Commission`, `Information_SELLER_REPRESENTATION`, `Information_POSSESSION`, `Information_AUCTION`, `Information_STIPULATION_OF_SALE`, `Information_HOME_WARRANTY`, `Information_TERMITE_BOND`, `Type_PROPERTY_CATEGORY_1`, `Type_PROPERTY_CATEGORY_2`, `Type_LEGAL_TAXES`, `Type_OWNER_OWNERS`, `Type_Deed_Book`, `Type_Broker_Owner`, `Type_Deed_Page`, `Type_PID`, `Type_Plat_Book`, `Type_Plat_Page`, `Type_Land_Lot`, `Type_Special_Assessment`, `Type_Tax_Year`, `Type_Zoning`, `Type_TOTAL_REAL_ESTATE_PROPERTY_TAX`, `Type_SALE_PRICE`, `Type_LEASE_PRICE`, `Type_LEASE_GROSS_YEARLY_INCOME`, `ADDRESS_STREET_ADDRESS`, `ADDRESS_GEO_LAT`, `ADDRESS_GEO_LONG`, `ADDRESS_CITY_LIMITS`, `ADDRESS_HISTORIC_DISTRICT`, `ADDRESS_SUBDIVISION`, `ADDRESS_SECONDARY_SUBDIVISION`, `ADDRESS_HOA`, `ADDRESS_HOA_INITIATION_FEE`, `ADDRESS_HOA_MONTHLY_FEE`, `ADDRESS_SCHOOL_DISTRICT`, `ADDRESS_ELEMENTARY`, `ADDRESS_ELEMENTARY_2`, `ADDRESS_MIDDLE_SCHOOL`, `ADDRESS_MIDDLE_SCHOOL_2`, `ADDRESS_HIGH_SCHOOL`, `ADDRESS_HIGH_SCHOOL_2`, `Description_PROPERTY_TAG_LINE`, `Description_PROPERTY_DESCRIPTION`, `Description_YEAR_BUILT`, `Description_CONSTRUCTION_TYPE`, `Description_FOUNDATION_TYPE`, `Description_LOT_ACRES`, `Description_LOT_SQUARE_FOOTAGE`, `Description_LOT_DIMENTIONS`, `Description_ROOM_DIMENSIONS`, `Description_PARKING`, `Description_RV_BOAT_PARKING`, `Description_PARKING_MAINTENANCE`, `Description_TRASH`, `Description_HANDICAP_ACCESSIBLE`, `Description_RAMP`, `Description_ACCESSIBLE_ENTRANCE`, `Description_BATHROOM`, `Description_ELEVATOR`, `Description_HALLWAYS`, `Description_KITCHEN`, `Description_WATERFRONT`, `Description_WATER_ACCESS`, `Description_WATERVIEW`, `Description_COBRA_ZONE`, `Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE`, `Description_PROPERTY_LOCATION`, `Description_FLOOD_ZONE_TYPE`, `Description_SQUARE_FOOTAGE_HEATED`, `Description_SQUARE_FOOTAGE_SEPARATE`, `Description_PROPERTY_LEVELS`, `Description_BASEMENT`, `Description_OF_ROOMS`, `Description_GARAGE`, `Description_CARPORT`, `Description_PORCH_BALCONY_DECK`, `Description_ROOF`, `Description_OF_FULL_BATHS`, `Description_OF_1_2_BATHS`, `Description_OF_BEDROOMS`, `Description_MASTER_BEDROOM_LOCATION`, `Description_PROPERTY_STORIES`, `Description_HEATING_SOURCE_1`, `Description_HEATING_SOURCE_2`, `Description_INTERIOR_HEATING_SOURCE`, `Description_INTERIOR_COOLING`, `Description_WATER`, `Description_SEWER`, `Description_ELECTRIC`, `Description_POOL_SPA`, `Description_PETS`, `Description_COMMUNITY_AMENITIES`, `Description_EXTERIOR_FEATURES`, `Description_EXTERIOR_FINISHES`, `Description_FENCING`, `Description_ATTIC_SPACE`, `Description_BOAT_SLIP`, `Description_MEAN_HIGH_WATER_DEPTH`, `Description_BUILDING_GREEN_CERTIFIED`, `Description_GREEN_BUILDING_FEATURES`, `Instruction_SHOWING_INSTRUCTIONS`, `listin_SELLER_OPT_OUT`, `listin_SELLER_OPT_IN`, `listin_OUTSIDE_DISTRIBUTION`, `Photo_EXTERIOR`, `Photo_INTERIOR`, `Document_PDF_s`) VALUES (NULL, 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box', 'This is instruction for upload home information blue box');
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_home_retail_instruction_blue_box'") != $table_name_home_retail_instruction_blue_box) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    dbDelta($sql_insert_default);
  }
 

}

//add Main menu and sub menu
add_action('admin_menu', 'addMenuHooks');

function addMenuHooks(){
  add_menu_page('Dashboard for Home Retail', 'Dashboard for Home Retail', 'manage_options', 'home_retail_dashboard', 'hwolf0610_database_controller','dashicons-bank', 20);
	add_submenu_page(null, 'delete_home_data_in_database', 'delete_home_data_in_database', 'manage_options', 'delete_home_data_in_database', 'hwolf0610_home_Data_delete'); 
  add_submenu_page('home_retail_dashboard', 'UPLOAD_INSTRUCTION', 'UPLOAD_INSTRUCTION', 'manage_options', 'UPLOAD_INSTRUCTION', 'HOME_Upload_Instruction_from'); 
  add_submenu_page('home_retail_dashboard', 'FILE_UPLOADER', 'FILE_UPLOADER', 'manage_options', 'FILE_UPLOADER', 'hwolf0610_FILE_UPLOAD_TESTER'); 
  add_submenu_page('home_retail_dashboard', 'Check_Uploaded_Home_photo', 'Check_Uploaded_Home_photo', 'manage_options', 'Check_Uploaded_Home_photo', 'hwolf0610_Check_Uploaded_Home_photo'); 
  add_submenu_page('home_retail_dashboard', 'upload_file_name_change', 'upload_file_name_change', 'manage_options', 'upload_file_name_change', 'hwolf0610_upload_file_name_change'); 
	// add_submenu_page('home_retail_dashboard', 'ADD_NEW_DATA', 'ADD_NEW_DATA', 'manage_options', 'ADD_NEW_DATA', 'hwolf0610_Data_create'); 
	// add_submenu_page(null, 'UPDATE_DATA', 'update_data', 'manage_options', 'UPDATE_OWN_DATA', 'hwolf0610_Data_update'); 
	// add_submenu_page(null, 'Test_get_data', 'Test_get_data', 'manage_options', 'Test_get_data', 'hwolf0610_Test_get_data'); 
  }

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'Home_Retail_Instruction_blue_box.php');
require_once(ROOTDIR . 'file_uploader_tester.php');
require_once(ROOTDIR . 'Check_Uploaded_Home_photo.php');
require_once(ROOTDIR . 'change_file_name_on_upload.php');

  //DATABASE CONTROLLER
  function hwolf0610_database_controller(){
    ?>
<h1 style='text-align:center'>HOME RETAIL DASHBOARD</h1>
    <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'home-ratil/images/plugin_widget.jfif'?>" style='width: 100%;height: 350px;'>
    <h2 style='text-align:center;margin-top:50px;'>Uploaded Home information</h2>
    <?php

    global $wpdb;
    $table_name_home_retail_information = $wpdb->prefix . '_home_retail_information';
    $table_name_home_retail_type = $wpdb->prefix . '_home_retail_type';
    $table_name_home_retail_address = $wpdb->prefix . '_home_retail_address';
    $table_name_home_retail_instruction = $wpdb->prefix . '_home_retail_instruction';
    $table_name_home_retail_photo_upload = $wpdb->prefix . '_home_retail_photo_upload';
    $table_name_home_retail_broker = $wpdb->prefix . '_home_retail_broker';

    $table_name_home_retail_description_1 = $wpdb->prefix . '_home_retail_description_1';
    $table_name_home_retail_description_2 = $wpdb->prefix . '_home_retail_description_2';
    $table_name_home_retail_description_3 = $wpdb->prefix . '_home_retail_description_3';
    $table_name_home_retail_description_4 = $wpdb->prefix . '_home_retail_description_4';
    $table_name_home_retail_description_5 = $wpdb->prefix . '_home_retail_description_5';
    $table_name_home_retail_description_6 = $wpdb->prefix . '_home_retail_description_6';
    $table_name_home_retail_description_7 = $wpdb->prefix . '_home_retail_description_7';
    $table_name_home_retail_description_8 = $wpdb->prefix . '_home_retail_description_8';
    $table_name_home_retail_description_9 = $wpdb->prefix . '_home_retail_description_9';
    $table_name_home_retail_description_10 = $wpdb->prefix . '_home_retail_description_10';
    $table_name_home_retail_description_11 = $wpdb->prefix . '_home_retail_description_11';

    $rows_test = $wpdb->get_results("SELECT * FROM $table_name_home_retail_address ORDER BY home_id ASC");
    foreach ($rows_test as $row ){
      echo "<div>$row->property_address_street_address1</div>";
    }



    $rows = $wpdb->get_results("SELECT * FROM $table_name_home_retail_information LEFT JOIN $table_name_home_retail_type ON $table_name_home_retail_information.home_id = $table_name_home_retail_type.home_id LEFT JOIN $table_name_home_retail_address ON $table_name_home_retail_address.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_instruction ON $table_name_home_retail_instruction.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_photo_upload ON $table_name_home_retail_photo_upload.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_1 ON $table_name_home_retail_description_1.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_2 ON $table_name_home_retail_description_2.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_3 ON $table_name_home_retail_description_3.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_4 ON $table_name_home_retail_description_4.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_5 ON $table_name_home_retail_description_5.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_6 ON $table_name_home_retail_description_6.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_7 ON $table_name_home_retail_description_7.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_8 ON $table_name_home_retail_description_8.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_9 ON $table_name_home_retail_description_9.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_description_10 ON $table_name_home_retail_description_10.home_id = $table_name_home_retail_information.home_id  LEFT JOIN $table_name_home_retail_description_11 ON $table_name_home_retail_description_11.home_id = $table_name_home_retail_information.home_id LEFT JOIN $table_name_home_retail_broker ON $table_name_home_retail_broker.home_id = $table_name_home_retail_information.home_id   ORDER BY $table_name_home_retail_information.home_id ASC");
    
    // $table_name_home_retail_address = $wpdb->prefix . '_home_retail_address';
    // $rows = $wpdb->get_results("SELECT * FROM $table_name_home_retail_address ORDER BY home_id ASC");
    echo "<table class='wp-list-table widefat fixed'>";
  
	foreach ($rows as $row ){
		$file_upload_EXTERIOR_LANDSCAPING=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_LANDSCAPING;
		$file_upload_EXTERIOR_HOUSE=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_HOUSE;
    $file_upload_EXTERIOR_POOL=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_POOL;
    $file_upload_EXTERIOR_SHED=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_SHED;
    $file_upload_EXTERIOR_OTHER=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_EXTERIOR_OTHER;
    $file_upload_INTERIOR_GARAGE=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_GARAGE;
    $file_upload_INTERIOR_MUD_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MUD_ROOM;
    $file_upload_INTERIOR_LIVING_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_LIVING_ROOM;
    $file_upload_INTERIOR_DINING_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_DINING_ROOM;
    $file_upload_INTERIOR_FAMILY_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_FAMILY_ROOM;
    $file_upload_INTERIOR_MEDIA_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MEDIA_ROOM;
    $file_upload_INTERIOR_BASEMENT_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_BASEMENT_ROOM;
    $file_upload_INTERIOR_KITCHEN_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_KITCHEN_ROOM;
    $file_upload_INTERIOR_PANTRY_ROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_PANTRY_ROOM;
    $file_upload_INTERIOR_HALF_BATH=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_HALF_BATH;
    $file_upload_INTERIOR_OFFICE=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_OFFICE;
    $file_upload_INTERIOR_BEDROOMS=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_BEDROOMS;
    $file_upload_INTERIOR_BATHROOMS=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_BATHROOMS;
    $file_upload_INTERIOR_MASTER_BEDROOM=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MASTER_BEDROOM;
    $file_upload_INTERIOR_MASTER_CLOSET=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_MASTER_CLOSET;
    $file_upload_INTERIOR_OTHER=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_INTERIOR_OTHER;

    $file_upload_PDF_URL=get_home_url()."/wp-content/uploads/home_retail_database/".$row->file_upload_PDF_DOCUMENTS_UPLOAD;

		echo "<tr>";
		echo "<td colspan='16'><span style='font-size: 30px;display: flex;justify-content: center;'><u >$row->home_id</u>&nbsp;&nbsp;&nbsp;$row->home_seller_kind</span></td></tr><tr>";
		echo "<td>$row->property_address_country_select</td>";	
		echo "<td>$row->broker_agent_first_name</td>";	
		echo "<td>$row->information_checkbox_11</td>";	
		echo "<td>$row->Type_checkbox_11</td>";	
		echo "<td>$row->Description_select_2</td>";	
		echo "<td>$row->Description_select_MUDROOM_Width_input</td>";	
		echo "<td>$row->Description_select_BEDROOM_3_Width_input</td>";	
		echo "<td>$row->Description_select_4_checkbox12322123</td>";	
		echo "<td>$row->other_sec_description_check_224</td>";	
		echo "<td>$row->other_sec_description_check_4</td>";	
		echo "<td>$row->other_sec_description_check_91</td>";	
		echo "<td>$row->next_other_check_4</td>";	
		echo "<td>$row->next_other_check_610</td>";	
		echo "<td>$row->next_other_check_83</td>";	
		echo "<td>$row->next_2_other_check_11</td>";	
		echo "<td>$row->Instructions_checkbox_11</td>";	
		echo "<td><a href='$file_upload_PDF_URL' target='_blank'>PDF_Instruction</a></td></tr>";	
    echo"<tr>";
    echo "<td>$row->file_upload_EXTERIOR_LANDSCAPING <img src=$file_upload_EXTERIOR_LANDSCAPING style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_EXTERIOR_HOUSE <img src=$file_upload_EXTERIOR_HOUSE style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_EXTERIOR_POOL <img src=$file_upload_EXTERIOR_POOL style='width:50px;height:50px;'></td>";	
   
    echo "<td>$row->file_upload_EXTERIOR_SHED <img src=$file_upload_EXTERIOR_SHED style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_EXTERIOR_OTHER <img src=$file_upload_EXTERIOR_OTHER style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_GARAGE <img src=$file_upload_INTERIOR_GARAGE style='width:50px;height:50px;'></td>";	
    
    echo "<td>$row->file_upload_INTERIOR_MUD_ROOM <img src=$file_upload_INTERIOR_MUD_ROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_LIVING_ROOM <img src=$file_upload_INTERIOR_LIVING_ROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_DINING_ROOM <img src=$file_upload_INTERIOR_DINING_ROOM style='width:50px;height:50px;'></td>";	
   
    echo "<td>$row->file_upload_INTERIOR_FAMILY_ROOM <img src=$file_upload_INTERIOR_FAMILY_ROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_MEDIA_ROOM <img src=$file_upload_INTERIOR_MEDIA_ROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_BASEMENT_ROOM <img src=$file_upload_INTERIOR_BASEMENT_ROOM style='width:50px;height:50px;'></td>";	
  
    echo "<td>$row->file_upload_INTERIOR_KITCHEN_ROOM <img src=$file_upload_INTERIOR_KITCHEN_ROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_PANTRY_ROOM <img src=$file_upload_INTERIOR_PANTRY_ROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_HALF_BATH <img src=$file_upload_INTERIOR_HALF_BATH style='width:50px;height:50px;'></td>";	
   
    echo "<td>$row->file_upload_INTERIOR_OFFICE <img src=$file_upload_INTERIOR_OFFICE style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_BEDROOMS <img src=$file_upload_INTERIOR_BEDROOMS style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_BATHROOMS <img src=$file_upload_INTERIOR_BATHROOMS style='width:50px;height:50px;'></td>";	
    echo "</tr>";
    echo"<tr>";
    echo "<td>$row->file_upload_INTERIOR_MASTER_BEDROOM <img src=$file_upload_INTERIOR_MASTER_BEDROOM style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_MASTER_CLOSET <img src=$file_upload_INTERIOR_MASTER_CLOSET style='width:50px;height:50px;'></td>";	
    echo "<td>$row->file_upload_INTERIOR_OTHER <img src=$file_upload_INTERIOR_OTHER style='width:50px;height:50px;'></td>";	
		// echo "<td><a href='".admin_url('admin.php?page=delete_home_data_in_database&id='.$row->home_id)."'>Delete</a></td>";
		echo "</tr>";}
	echo "</table></form>";  
}

function hwolf0610_home_Data_delete () {
$id = $_GET['id'];
  global $wpdb;
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_address WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_broker WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_1 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_2 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_3 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_4 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_5 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_10 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_11 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_6 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_7 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_8 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_description_9 WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_information WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_instruction WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_photo_upload WHERE home_id = %s",$id));
  $wpdb->query($wpdb->prepare("DELETE FROM $wpdb->prefix ._home_retail_type WHERE home_id = %s",$id));

  wp_redirect( admin_url('admin.php?page=home_retail_dashboard') );
    exit(); 
}
   



//add dashboard widget
add_action('wp_dashboard_setup', 'registerDashboardWidget');
function registerDashboardWidget() { 
  wp_add_dashboard_widget('HOME RETAIL OVERVIEW', 'HOME RETAIL OVERVIEW', 'myPluginDashboardWidget');
}
 
function myPluginDashboardWidget() {
//   $plugin_url = get_home_url()."/wp-admin/admin.php?page=home_retail_dashboard";
  $plugin_url = "/admin.php?page=home_retail_dashboard";
//   <a href=$plugin_url target='_blank' >Go to Plugin</a> 
  
  ?>
  <h1 style='text-align:center'>Dashboard for HOME RETAIL</h1>
  <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'home-ratil/images/plugin_widget.jfif'?>" width='100%' style='border-radius: 50px;border: 25px' />
  <p style='text-align:center'>This is my Home retail data manager plugin's dashboard widget.</p>
  <?php
}