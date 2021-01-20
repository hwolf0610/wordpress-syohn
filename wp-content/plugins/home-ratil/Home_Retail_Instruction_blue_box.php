<?php
function HOME_Upload_Instruction_from(){
    ?>
<style>
    .head_container{
        display:flex;
        width:100%;
        margin-top:30px;
    }
    .head_image{
        margin-right: 20px;
        margin-bottom: 20px;
        width:50%;
        height:200px;
    }
    .head_text_style{
        display: flex;
        justify-content: center;
        margin-top: 60px;
        padding: 10px;
        width:50%;
    }
    textarea{
        height: 80px;
    }
    td{
        vertical-align: middle !important;
        font-weight: bolder  !important;
    }
    .save-form-btn{
        position: fixed;
        top: 300px;
        right: 10px;
        z-index: 100;
    }
    @media(max-width:600px){
        .head_text_style{
            /* height: 42px; */
            font-size: 20px;
            text-align: center;
        }
        textarea{
             height: 150px;
        }
    }    
    </style>
    <div class="head_container">
        <h1 class='head_text_style'>HOME UPLOAD INSTRUCTION FORM</h1>
        <img class="head_image"  src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'home-ratil/images/used_home_instruction_text_menu.jfif'?>"> 
    </div>
    
    <?php
    global $wpdb;
	$table_name_home_retail_instruction_blue_box = $wpdb->prefix . '_home_retail_instruction_blue_box';
    $rows = $wpdb->get_results("SELECT * FROM $table_name_home_retail_instruction_blue_box ORDER BY home_id ASC");
    ?> 
        <form method="post" action="https://syohn.com/wp-json/home_retail/post_data_from_database_instruction_blue_box">
            <input type='submit' name="update" value='Save' class='button save-form-btn'>
        <!-- <form method="post" action="http://localhost/wp-form/wp-json/home_retail/post_data_from_database_instruction_blue_box"> -->
    <?php
    
    // $current_user = wp_get_current_user();
    // $subdir = $current_user->user_login;
    // echo $subdir;
	echo "<table class='wp-list-table widefat fixed' border='1' style='text-align:center'>";
	echo "<tr><th>Property Name</th><th>Blue Box Instruction</th></tr>";
	foreach ($rows as $row ){    
        echo "<tr><td>HOME_ID</td><td>$row->home_id<input type='hidden' name='home_id' value='$row->home_id'></td></tr>";

        echo "<tr><td>Broker_Broker_Agent</td><td><textarea name='Broker_Broker_Agent' style='width:100%'>$row->Broker_Broker_Agent</textarea></td></tr>";
        echo "<tr><td>Broker_Co_Listing_Agent</td><td><textarea name='Broker_Co_Listing_Agent' style='width:100%'>$row->Broker_Co_Listing_Agent</textarea></td></tr>";
        echo "<tr><td>Broker_Broker</td><td><textarea name='Broker_Broker' style='width:100%'>$row->Broker_Broker</textarea></td></tr>";
        echo "<tr><td>Broker_Listing_Date</td><td><textarea name='Broker_Listing_Date' style='width:100%'>$row->Broker_Listing_Date</textarea></td></tr>";
        echo "<tr><td>Broker_Selling_Commission</td><td><textarea name='Broker_Selling_Commission' style='width:100%'>$row->Broker_Selling_Commission</textarea></td></tr>";
        echo "<tr><td>Broker_Buying_Agent_Commission</td><td><textarea name='Broker_Buying_Agent_Commission' style='width:100%'>$row->Broker_Buying_Agent_Commission</textarea></td></tr>";
        echo "<tr><td>Broker_Sellers_Agreement_Type</td><td><textarea name='Broker_Sellers_Agreement_Type' style='width:100%'>$row->Broker_Sellers_Agreement_Type</textarea></td></tr>";
        echo "<tr><td>Broker_Prospect_Exempt</td><td><textarea name='Broker_Prospect_Exempt' style='width:100%'>$row->Broker_Prospect_Exempt</textarea></td></tr>";
        echo "<tr><td>Broker_Agreement_Services</td><td><textarea name='Broker_Agreement_Services' style='width:100%'>$row->Broker_Agreement_Services</textarea></td></tr>";
       
        echo "<tr><td>Information_PROPERTY_INFORMATION</td><td><textarea name='Information_PROPERTY_INFORMATION' style='width:100%'>$row->Information_PROPERTY_INFORMATION</textarea></td></tr>";
        echo "<tr><td>Information_PURCHASE_OPTIONS</td><td><textarea name='Information_PURCHASE_OPTIONS'  style='width:100%'>$row->Information_PURCHASE_OPTIONS</textarea></td></tr>";
        echo "<tr><td>Information_Buying_Agent_Commission</td><td><textarea name='Information_Buying_Agent_Commission'  style='width:100%'>$row->Information_Buying_Agent_Commission</textarea></td></tr>";
        echo "<tr><td>Information_SELLER_REPRESENTATION</td><td><textarea name='Information_SELLER_REPRESENTATION'  style='width:100%'>$row->Information_SELLER_REPRESENTATION</textarea></td></tr>";
        echo "<tr><td>Information_POSSESSION</td><td><textarea name='Information_POSSESSION'  style='width:100%'>$row->Information_POSSESSION</textarea></td></tr>";
        echo "<tr><td>Information_AUCTION</td><td><textarea name='Information_AUCTION'  style='width:100%'>$row->Information_AUCTION</textarea></td></tr>";
        echo "<tr><td>Information_STIPULATION_OF_SALE</td><td><textarea name='Information_STIPULATION_OF_SALE'  style='width:100%'>$row->Information_STIPULATION_OF_SALE</textarea></td></tr>";
        echo "<tr><td>Information_HOME_WARRANTY</td><td><textarea name='Information_HOME_WARRANTY'  style='width:100%'>$row->Information_HOME_WARRANTY</textarea></td></tr>";
        echo "<tr><td>Information_TERMITE_BOND</td><td><textarea name='Information_TERMITE_BOND'  style='width:100%'>$row->Information_TERMITE_BOND</textarea></td></tr>";

        echo "<tr><td>Type_PROPERTY_CATEGORY_1</td><td><textarea name='Type_PROPERTY_CATEGORY_1'  style='width:100%'>$row->Type_PROPERTY_CATEGORY_1</textarea></td></tr>";
        echo "<tr><td>Type_PROPERTY_CATEGORY_2</td><td><textarea name='Type_PROPERTY_CATEGORY_2'  style='width:100%'>$row->Type_PROPERTY_CATEGORY_2</textarea></td></tr>";
        echo "<tr><td>Type_LEGAL_TAXES</td><td><textarea name='Type_LEGAL_TAXES'  style='width:100%'>$row->Type_LEGAL_TAXES</textarea></td></tr>";
        echo "<tr><td>Type_OWNER_OWNERS</td><td><textarea name='Type_OWNER_OWNERS'  style='width:100%'>$row->Type_OWNER_OWNERS</textarea></td></tr>";
        echo "<tr><td>Type_Deed_Book</td><td><textarea name='Type_Deed_Book'  style='width:100%'>$row->Type_Deed_Book</textarea></td></tr>";
        echo "<tr><td>Type_Broker_Owner</td><td><textarea name='Type_Broker_Owner'  style='width:100%'>$row->Type_Broker_Owner</textarea></td></tr>";
        echo "<tr><td>Type_Deed_Page</td><td><textarea name='Type_Deed_Page'  style='width:100%'>$row->Type_Deed_Page</textarea></td></tr>";
        echo "<tr><td>Type_PID</td><td><textarea name='Type_PID'  style='width:100%'>$row->Type_PID</textarea></td></tr>";
        echo "<tr><td>Type_Plat_Book</td><td><textarea name='Type_Plat_Book'  style='width:100%'>$row->Type_Plat_Book</textarea></td></tr>";
        echo "<tr><td>Type_Plat_Page</td><td><textarea name='Type_Plat_Page'  style='width:100%'>$row->Type_Plat_Page</textarea></td></tr>";
        echo "<tr><td>Type_Land_Lot</td><td><textarea name='Type_Land_Lot'  style='width:100%'>$row->Type_Land_Lot</textarea></td></tr>";
        echo "<tr><td>Type_Special_Assessment</td><td><textarea name='Type_Special_Assessment'  style='width:100%'>$row->Type_Special_Assessment</textarea></td></tr>";
        echo "<tr><td>Type_Tax_Year</td><td><textarea name='Type_Tax_Year'  style='width:100%'>$row->Type_Tax_Year</textarea></td></tr>";
        echo "<tr><td>Type_Zoning</td><td><textarea name='Type_Zoning'  style='width:100%'>$row->Type_Zoning</textarea></td></tr>";
        echo "<tr><td>Type_TOTAL_REAL_ESTATE_PROPERTY_TAX</td><td><textarea name='Type_TOTAL_REAL_ESTATE_PROPERTY_TAX'  style='width:100%'>$row->Type_TOTAL_REAL_ESTATE_PROPERTY_TAX</textarea></td></tr>";
        echo "<tr><td>Type_SALE_PRICE</td><td><textarea name='Type_SALE_PRICE'  style='width:100%'>$row->Type_SALE_PRICE</textarea></td></tr>";
        echo "<tr><td>Type_LEASE_PRICE</td><td><textarea name='Type_LEASE_PRICE'  style='width:100%'>$row->Type_LEASE_PRICE</textarea></td></tr>";
        echo "<tr><td>Type_LEASE_GROSS_YEARLY_INCOME</td><td><textarea name='Type_LEASE_GROSS_YEARLY_INCOME'  style='width:100%'>$row->Type_LEASE_GROSS_YEARLY_INCOME</textarea></td></tr>";


        echo "<tr><td>ADDRESS_STREET_ADDRESS</td><td><textarea name='ADDRESS_STREET_ADDRESS'  style='width:100%'>$row->ADDRESS_STREET_ADDRESS</textarea></td></tr>";
        echo "<tr><td>ADDRESS_GEO_LAT</td><td><textarea name='ADDRESS_GEO_LAT'  style='width:100%'>$row->ADDRESS_GEO_LAT</textarea></td></tr>";
        echo "<tr><td>ADDRESS_GEO_LONG</td><td><textarea name='ADDRESS_GEO_LONG'  style='width:100%'>$row->ADDRESS_GEO_LONG</textarea></td></tr>";
        echo "<tr><td>ADDRESS_CITY_LIMITS</td><td><textarea name='ADDRESS_CITY_LIMITS'  style='width:100%'>$row->ADDRESS_CITY_LIMITS</textarea></td></tr>";
        echo "<tr><td>ADDRESS_HISTORIC_DISTRICT</td><td><textarea name='ADDRESS_HISTORIC_DISTRICT'  style='width:100%'>$row->ADDRESS_HISTORIC_DISTRICT</textarea></td></tr>";
        echo "<tr><td>ADDRESS_SUBDIVISION</td><td><textarea name='ADDRESS_SUBDIVISION'  style='width:100%'>$row->ADDRESS_SUBDIVISION</textarea></td></tr>";
        echo "<tr><td>ADDRESS_SECONDARY_SUBDIVISION</td><td><textarea name='ADDRESS_SECONDARY_SUBDIVISION'  style='width:100%'>$row->ADDRESS_SECONDARY_SUBDIVISION</textarea></td></tr>";
        echo "<tr><td>ADDRESS_HOA</td><td><textarea name='ADDRESS_HOA'  style='width:100%'>$row->ADDRESS_HOA</textarea></td></tr>";
        echo "<tr><td>ADDRESS_HOA_INITIATION_FEE</td><td><textarea name='ADDRESS_HOA_INITIATION_FEE'  style='width:100%'>$row->ADDRESS_HOA_INITIATION_FEE</textarea></td></tr>";
        echo "<tr><td>ADDRESS_HOA_MONTHLY_FEE</td><td><textarea name='ADDRESS_HOA_MONTHLY_FEE'  style='width:100%'>$row->ADDRESS_HOA_MONTHLY_FEE</textarea></td></tr>";
        echo "<tr><td>ADDRESS_SCHOOL_DISTRICT</td><td><textarea name='ADDRESS_SCHOOL_DISTRICT'  style='width:100%'>$row->ADDRESS_SCHOOL_DISTRICT</textarea></td></tr>";
        echo "<tr><td>ADDRESS_ELEMENTARY</td><td><textarea name='ADDRESS_ELEMENTARY'  style='width:100%'>$row->ADDRESS_ELEMENTARY</textarea></td></tr>";
        echo "<tr><td>ADDRESS_ELEMENTARY_2</td><td><textarea name='ADDRESS_ELEMENTARY_2'  style='width:100%'>$row->ADDRESS_ELEMENTARY_2</textarea></td></tr>";
        echo "<tr><td>ADDRESS_MIDDLE_SCHOOL</td><td><textarea name='ADDRESS_MIDDLE_SCHOOL'  style='width:100%'>$row->ADDRESS_MIDDLE_SCHOOL</textarea></td></tr>";
        echo "<tr><td>ADDRESS_MIDDLE_SCHOOL_2</td><td><textarea name='ADDRESS_MIDDLE_SCHOOL_2'  style='width:100%'>$row->ADDRESS_MIDDLE_SCHOOL_2</textarea></td></tr>";
        echo "<tr><td>ADDRESS_HIGH_SCHOOL</td><td><textarea name='ADDRESS_HIGH_SCHOOL'  style='width:100%'>$row->ADDRESS_HIGH_SCHOOL</textarea></td></tr>";
        echo "<tr><td>ADDRESS_HIGH_SCHOOL_2</td><td><textarea name='ADDRESS_HIGH_SCHOOL_2'  style='width:100%'>$row->ADDRESS_HIGH_SCHOOL_2</textarea></td></tr>";

        echo "<tr><td>Description_PROPERTY_TAG_LINE</td><td><textarea name='Description_PROPERTY_TAG_LINE'  style='width:100%'>$row->Description_PROPERTY_TAG_LINE</textarea></td></tr>";
        echo "<tr><td>Description_PROPERTY_DESCRIPTION</td><td><textarea name='Description_PROPERTY_DESCRIPTION'  style='width:100%'>$row->Description_PROPERTY_DESCRIPTION</textarea></td></tr>";
        echo "<tr><td>Description_YEAR_BUILT</td><td><textarea name='Description_YEAR_BUILT'  style='width:100%'>$row->Description_YEAR_BUILT</textarea></td></tr>";
        echo "<tr><td>Description_CONSTRUCTION_TYPE</td><td><textarea name='Description_CONSTRUCTION_TYPE'  style='width:100%'>$row->Description_CONSTRUCTION_TYPE</textarea></td></tr>";
        echo "<tr><td>Description_FOUNDATION_TYPE</td><td><textarea name='Description_FOUNDATION_TYPE'  style='width:100%'>$row->Description_FOUNDATION_TYPE</textarea></td></tr>";
        echo "<tr><td>Description_LOT_ACRES</td><td><textarea name='Description_LOT_ACRES'  style='width:100%'>$row->Description_LOT_ACRES</textarea></td></tr>";
        echo "<tr><td>Description_LOT_SQUARE_FOOTAGE</td><td><textarea name='Description_LOT_SQUARE_FOOTAGE'  style='width:100%'>$row->Description_LOT_SQUARE_FOOTAGE</textarea></td></tr>";
        echo "<tr><td>Description_LOT_DIMENTIONS</td><td><textarea name='Description_LOT_DIMENTIONS'  style='width:100%'>$row->Description_LOT_DIMENTIONS</textarea></td></tr>";
        echo "<tr><td>Description_ROOM_DIMENSIONS</td><td><textarea name='Description_ROOM_DIMENSIONS'  style='width:100%'>$row->Description_ROOM_DIMENSIONS</textarea></td></tr>";
        echo "<tr><td>Description_PARKING</td><td><textarea name='Description_PARKING'  style='width:100%'>$row->Description_PARKING</textarea></td></tr>";
        echo "<tr><td>Description_RV_BOAT_PARKING</td><td><textarea name='Description_RV_BOAT_PARKING'  style='width:100%'>$row->Description_RV_BOAT_PARKING</textarea></td></tr>";
        echo "<tr><td>Description_PARKING_MAINTENANCE</td><td><textarea name='Description_PARKING_MAINTENANCE'  style='width:100%'>$row->Description_PARKING_MAINTENANCE</textarea></td></tr>";
        echo "<tr><td>Description_TRASH</td><td><textarea name='Description_TRASH'  style='width:100%'>$row->Description_TRASH</textarea></td></tr>";
        echo "<tr><td>Description_HANDICAP_ACCESSIBLE</td><td><textarea name='Description_HANDICAP_ACCESSIBLE'  style='width:100%'>$row->Description_HANDICAP_ACCESSIBLE</textarea></td></tr>";
        echo "<tr><td>Description_RAMP</td><td><textarea name='Description_RAMP'  style='width:100%'>$row->Description_RAMP</textarea></td></tr>";
        echo "<tr><td>Description_ACCESSIBLE_ENTRANCE</td><td><textarea name='Description_ACCESSIBLE_ENTRANCE'  style='width:100%'>$row->Description_ACCESSIBLE_ENTRANCE</textarea></td></tr>";
        echo "<tr><td>Description_BATHROOM</td><td><textarea name='Description_BATHROOM'  style='width:100%'>$row->Description_BATHROOM</textarea></td></tr>";
        echo "<tr><td>Description_ELEVATOR</td><td><textarea name='Description_ELEVATOR'  style='width:100%'>$row->Description_ELEVATOR</textarea></td></tr>";
        echo "<tr><td>Description_HALLWAYS</td><td><textarea name='Description_HALLWAYS'  style='width:100%'>$row->Description_HALLWAYS</textarea></td></tr>";
        echo "<tr><td>Description_KITCHEN</td><td><textarea name='Description_KITCHEN'  style='width:100%'>$row->Description_KITCHEN</textarea></td></tr>";
        echo "<tr><td>Description_WATERFRONT</td><td><textarea name='Description_WATERFRONT'  style='width:100%'>$row->Description_WATERFRONT</textarea></td></tr>";
        echo "<tr><td>Description_WATER_ACCESS</td><td><textarea name='Description_WATER_ACCESS'  style='width:100%'>$row->Description_WATER_ACCESS</textarea></td></tr>";
        echo "<tr><td>Description_WATERVIEW</td><td><textarea name='Description_WATERVIEW'  style='width:100%'>$row->Description_WATERVIEW</textarea></td></tr>";
        echo "<tr><td>Description_COBRA_ZONE</td><td><textarea name='Description_COBRA_ZONE'  style='width:100%'>$row->Description_COBRA_ZONE</textarea></td></tr>";
        echo "<tr><td>Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE</td><td><textarea name='Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE'  style='width:100%'>$row->Description_FEDERAL_FLOOD_INSURANCE_AVAILBLE</textarea></td></tr>";
        echo "<tr><td>Description_PROPERTY_LOCATION</td><td><textarea name='Description_PROPERTY_LOCATION'  style='width:100%'>$row->Description_PROPERTY_LOCATION</textarea></td></tr>";
        echo "<tr><td>Description_FLOOD_ZONE_TYPE</td><td><textarea name='Description_FLOOD_ZONE_TYPE'  style='width:100%'>$row->Description_FLOOD_ZONE_TYPE</textarea></td></tr>";
        echo "<tr><td>Description_SQUARE_FOOTAGE_HEATED</td><td><textarea name='Description_SQUARE_FOOTAGE_HEATED'  style='width:100%'>$row->Description_SQUARE_FOOTAGE_HEATED</textarea></td></tr>";
        echo "<tr><td>Description_SQUARE_FOOTAGE_SEPARATE</td><td><textarea name='Description_SQUARE_FOOTAGE_SEPARATE'  style='width:100%'>$row->Description_SQUARE_FOOTAGE_SEPARATE</textarea></td></tr>";
        echo "<tr><td>Description_PROPERTY_LEVELS</td><td><textarea name='Description_PROPERTY_LEVELS'  style='width:100%'>$row->Description_PROPERTY_LEVELS</textarea></td></tr>";
        echo "<tr><td>Description_BASEMENT</td><td><textarea name='Description_BASEMENT'  style='width:100%'>$row->Description_BASEMENT</textarea></td></tr>";
        echo "<tr><td>Description_OF_ROOMS</td><td><textarea name='Description_OF_ROOMS'  style='width:100%'>$row->Description_OF_ROOMS</textarea></td></tr>";
        echo "<tr><td>Description_GARAGE</td><td><textarea name='Description_GARAGE'  style='width:100%'>$row->Description_GARAGE</textarea></td></tr>";
        echo "<tr><td>Description_CARPORT</td><td><textarea name='Description_CARPORT'  style='width:100%'>$row->Description_CARPORT</textarea></td></tr>";
        echo "<tr><td>Description_PORCH_BALCONY_DECK</td><td><textarea name='Description_PORCH_BALCONY_DECK'  style='width:100%'>$row->Description_PORCH_BALCONY_DECK</textarea></td></tr>";
        echo "<tr><td>Description_ROOF</td><td><textarea name='Description_ROOF'  style='width:100%'>$row->Description_ROOF</textarea></td></tr>";
        echo "<tr><td>Description_OF_FULL_BATHS</td><td><textarea name='Description_OF_FULL_BATHS'  style='width:100%'>$row->Description_OF_FULL_BATHS</textarea></td></tr>";
        echo "<tr><td>Description_OF_1_2_BATHS</td><td><textarea name='Description_OF_1_2_BATHS'  style='width:100%'>$row->Description_OF_1_2_BATHS</textarea></td></tr>";
        echo "<tr><td>Description_OF_BEDROOMS</td><td><textarea name='Description_OF_BEDROOMS'  style='width:100%'>$row->Description_OF_BEDROOMS</textarea></td></tr>";
        echo "<tr><td>Description_MASTER_BEDROOM_LOCATION</td><td><textarea name='Description_MASTER_BEDROOM_LOCATION'  style='width:100%'>$row->Description_MASTER_BEDROOM_LOCATION</textarea></td></tr>";
        echo "<tr><td>Description_PROPERTY_STORIES</td><td><textarea name='Description_PROPERTY_STORIES'  style='width:100%'>$row->Description_PROPERTY_STORIES</textarea></td></tr>";
        echo "<tr><td>Description_HEATING_SOURCE_1</td><td><textarea name='Description_HEATING_SOURCE_1'  style='width:100%'>$row->Description_HEATING_SOURCE_1</textarea></td></tr>";
        echo "<tr><td>Description_HEATING_SOURCE_2</td><td><textarea name='Description_HEATING_SOURCE_2'  style='width:100%'>$row->Description_HEATING_SOURCE_2</textarea></td></tr>";
        echo "<tr><td>Description_INTERIOR_HEATING_SOURCE</td><td><textarea name='Description_INTERIOR_HEATING_SOURCE'  style='width:100%'>$row->Description_INTERIOR_HEATING_SOURCE</textarea></td></tr>";
        echo "<tr><td>Description_INTERIOR_COOLING</td><td><textarea name='Description_INTERIOR_COOLING'  style='width:100%'>$row->Description_INTERIOR_COOLING</textarea></td></tr>";
        echo "<tr><td>Description_WATER</td><td><textarea name='Description_WATER'  style='width:100%'>$row->Description_WATER</textarea></td></tr>";
        echo "<tr><td>Description_SEWER</td><td><textarea name='Description_SEWER'  style='width:100%'>$row->Description_SEWER</textarea></td></tr>";
        echo "<tr><td>Description_ELECTRIC</td><td><textarea name='Description_ELECTRIC'  style='width:100%'>$row->Description_ELECTRIC</textarea></td></tr>";
        echo "<tr><td>Description_POOL_SPA</td><td><textarea name='Description_POOL_SPA'  style='width:100%'>$row->Description_POOL_SPA</textarea></td></tr>";
        echo "<tr><td>Description_PETS</td><td><textarea name='Description_PETS'  style='width:100%'>$row->Description_PETS</textarea></td></tr>";
        echo "<tr><td>Description_COMMUNITY_AMENITIES</td><td><textarea name='Description_COMMUNITY_AMENITIES'  style='width:100%'>$row->Description_COMMUNITY_AMENITIES</textarea></td></tr>";
        echo "<tr><td>Description_EXTERIOR_FEATURES</td><td><textarea name='Description_EXTERIOR_FEATURES'  style='width:100%'>$row->Description_EXTERIOR_FEATURES</textarea></td></tr>";
        echo "<tr><td>Description_EXTERIOR_FINISHES</td><td><textarea name='Description_EXTERIOR_FINISHES'  style='width:100%'>$row->Description_EXTERIOR_FINISHES</textarea></td></tr>";
        echo "<tr><td>Description_FENCING</td><td><textarea name='Description_FENCING'  style='width:100%'>$row->Description_FENCING</textarea></td></tr>";
        echo "<tr><td>Description_ATTIC_SPACE</td><td><textarea name='Description_ATTIC_SPACE'  style='width:100%'>$row->Description_ATTIC_SPACE</textarea></td></tr>";
        echo "<tr><td>Description_BOAT_SLIP</td><td><textarea name='Description_BOAT_SLIP'  style='width:100%'>$row->Description_BOAT_SLIP</textarea></td></tr>";
        echo "<tr><td>Description_MEAN_HIGH_WATER_DEPTH</td><td><textarea name='Description_MEAN_HIGH_WATER_DEPTH'  style='width:100%'>$row->Description_MEAN_HIGH_WATER_DEPTH</textarea></td></tr>";
        echo "<tr><td>Description_BUILDING_GREEN_CERTIFIED</td><td><textarea name='Description_BUILDING_GREEN_CERTIFIED'  style='width:100%'>$row->Description_BUILDING_GREEN_CERTIFIED</textarea></td></tr>";
        echo "<tr><td>Description_GREEN_BUILDING_FEATURES</td><td><textarea name='Description_GREEN_BUILDING_FEATURES'  style='width:100%'>$row->Description_GREEN_BUILDING_FEATURES</textarea></td></tr>";

        echo "<tr><td>Instruction_SHOWING_INSTRUCTIONS</td><td><textarea name='Instruction_SHOWING_INSTRUCTIONS'  style='width:100%'>$row->Instruction_SHOWING_INSTRUCTIONS</textarea></td></tr>";
        echo "<tr><td>listin_SELLER_OPT_OUT</td><td><textarea name='listin_SELLER_OPT_OUT'  style='width:100%'>$row->listin_SELLER_OPT_OUT</textarea></td></tr>";
        echo "<tr><td>listin_SELLER_OPT_IN</td><td><textarea name='listin_SELLER_OPT_IN'  style='width:100%'>$row->listin_SELLER_OPT_IN</textarea></td></tr>";
        echo "<tr><td>listin_OUTSIDE_DISTRIBUTION</td><td><textarea name='listin_OUTSIDE_DISTRIBUTION'  style='width:100%'>$row->listin_OUTSIDE_DISTRIBUTION</textarea></td></tr>";

        echo "<tr><td>Photo_EXTERIOR</td><td><textarea name='Photo_EXTERIOR'  style='width:100%'>$row->Photo_EXTERIOR</textarea></td></tr>";
        echo "<tr><td>Photo_INTERIOR</td><td><textarea name='Photo_INTERIOR'  style='width:100%'>$row->Photo_INTERIOR</textarea></td></tr>";
        echo "<tr><td>Document_PDF_s</td><td><textarea name='Document_PDF_s'  style='width:100%'>$row->Document_PDF_s</textarea></td></tr>";
	echo "</table>";
  }
  ?><input type='submit' name="update" value='Save' class='button'></form><?php
}

?>