<?php

//menu items
add_action('admin_menu','sinetiks_schools_modifymenu');
function sinetiks_schools_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('Schools', //page title
	'Schools', //menu title
	'manage_options', //capabilities
	'sinetiks_schools_list', //menu slug
	sinetiks_schools_list //function
	);
	
	//this is a submenu
	add_submenu_page('sinetiks_schools_list', //parent slug
	'Add New School', //page title
	'Add New', //menu title
	'manage_options', //capability
	'sinetiks_schools_create', //menu slug
	'sinetiks_schools_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update School', //page title
	'Update', //menu title
	'manage_options', //capability
	'sinetiks_schools_update', //menu slug
	'sinetiks_schools_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'schools-list.php');
require_once(ROOTDIR . 'schools-create.php');
require_once(ROOTDIR . 'schools-update.php');



Broker_Broker_Agent
Broker_Co_Listing_Agent
Broker_Broker
Broker_Listing_Date
Broker_Selling_Commission
Broker_Buying_Agent_Commission
Broker_Sellers_Agreement_Type
Broker_Prospect_Exempt
Broker_Agreement_Services

Information_PROPERTY_INFORMATION
Information_PURCHASE_OPTIONS
Information_Buying_Agent_Commission
Information_SELLER_REPRESENTATION
Information_POSSESSION
Information_AUCTION
Information_STIPULATION_OF_SALE
Information_HOME_WARRANTY
Information_TERMITE_BOND

Type_PROPERTY_CATEGORY_1
Type_PROPERTY_CATEGORY_2
Type_LEGAL_TAXES
Type_OWNER_OWNERS
Type_Deed_Book
Type_Broker_Owner
Type_Deed_Page
Type_PID
Type_Plat_Book
Type_Plat_Page
Type_Land_Lot
Type_Special_Assessment
Type_Tax_Year
Type_Zoning
Type_TOTAL_REAL_ESTATE_PROPERTY_TAX
Type_SALE_PRICE
Type_LEASE_PRICE
Type_LEASE_GROSS_YEARLY_INCOME


ADDRESS_STREET_ADDRESS
ADDRESS_GEO_LAT
ADDRESS_GEO_LONG
ADDRESS_CITY_LIMITS
ADDRESS_HISTORIC_DISTRICT
ADDRESS_SUBDIVISION
ADDRESS_SECONDARY_SUBDIVISION
ADDRESS_HOA
ADDRESS_HOA_INITIATION_FEE
ADDRESS_HOA_MONTHLY_FEE
ADDRESS_SCHOOL_DISTRICT
ADDRESS_ELEMENTARY
ADDRESS_ELEMENTARY_2
ADDRESS_MIDDLE_SCHOOL
ADDRESS_MIDDLE_SCHOOL_2
ADDRESS_HIGH_SCHOOL
ADDRESS_HIGH_SCHOOL_2

Description_PROPERTY_TAG_LINE
Description_PROPERTY_DESCRIPTION
Description_YEAR_BUILT
Description_CONSTRUCTION_TYPE
Description_FOUNDATION_TYPE
Description_LOT_ACRES
Description_LOT_SQUARE_FOOTAGE
Description_LOT_DIMENTIONS
Description_ROOM_DIMENSIONS
Description_PARKING
Description_RV_BOAT_PARKING
Description_PARKING_MAINTENANCE
Description_TRASH
Description_HANDICAP_ACCESSIBLE
Description_RAMP
Description_ACCESSIBLE_ENTRANCE
Description_BATHROOM
Description_ELEVATOR
Description_HALLWAYS
Description_KITCHEN
Description_WATERFRONT
Description_WATER_ACCESS
Description_WATERVIEW
Description_COBRA_ZONE
Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE
Description_PROPERTY_LOCATION
Description_FLOOD_ZONE_TYPE
Description_SQUARE_FOOTAGE_HEATED
Description_SQUARE_FOOTAGE_SEPARATE
Description_PROPERTY_LEVELS
Description_BASEMENT
Description_OF_ROOMS
Description_GARAGE
Description_CARPORT
Description_PORCH_BALCONY_DECK
Description_ROOF
Description_OF_FULL_BATHS
Description_OF_1_2_BATHS
Description_OF_BEDROOMS
Description_MASTER_BEDROOM_LOCATION
Description_PROPERTY_STORIES
Description_HEATING_SOURCE_1
Description_HEATING_SOURCE_2
Description_INTERIOR_HEATING_SOURCE
Description_INTERIOR_COOLING
Description_WATER
Description_SEWER
Description_ELECTRIC
Description_POOL_SPA
Description_PETS
Description_COMMUNITY_AMENITIES
Description_EXTERIOR_FEATURES
Description_EXTERIOR_FINISHES
Description_FENCING
Description_ATTIC_SPACE
Description_BOAT_SLIP
Description_MEAN_HIGH_WATER_DEPTH
Description_BUILDING_GREEN_CERTIFIED
Description_GREEN_BUILDING_FEATURES

Instruction_SHOWING_INSTRUCTIONS
listin_SELLER_OPT_OUT
listin_SELLER_OPT_IN
listin_OUTSIDE_DISTRIBUTION

Photo_EXTERIOR
Photo_INTERIOR
Document_PDF_s





