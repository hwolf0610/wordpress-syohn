<?php
add_action( 'rest_api_init', 'add_form_data_into_custom_database' );
// API custom endpoints for WP-REST API
// http://localhost/wp-form/wp-json/home_retail/add/formdata
function add_form_data_into_custom_database() {
    register_rest_route('home_retail', '/add/formdata', array(
            'methods'  => 'POST',
            'callback' => 'add_formdata',
        )
    );
   }
function add_formdata($request){
    //Broker/Agent
	$broker_agent_first_name=$request['broker_agent_first_name'];
	$broker_agent_last_name=$request['broker_agent_last_name'];
	$broker_agent_phone=$request['broker_agent_phone'];
	$broker_agent_email=$request['broker_agent_email'];
	$broker_agent_co_listing_agent=$request['broker_agent_co_listing_agent'];
	$broker_agent_broker_select=$request['broker_agent_broker_select'];
	$broker_agent_borker_desctrip=$request['broker_agent_borker_desctrip'];
	$broker_agent_listing_date=$request['broker_agent_listing_date'];
	$broker_agent_selling_agents_co_listing_agent_commission=$request['broker_agent_selling_agents_co_listing_agent_commission'];
	$broker_agent_selling_agents_co_listing_agent_commission_percentage=$request['broker_agent_selling_agents_co_listing_agent_commission_percentage'];
	$broker_agent_selling_agents_co_listing_agent_type_in_number=$request['broker_agent_selling_agents_co_listing_agent_type_in_number'];
	$broker_agent_selling_agents_co_listing_agent_type_in_number_percentage=$request['broker_agent_selling_agents_co_listing_agent_type_in_number_percentage'];
	$broker_agent_buying_agent_commision=$request['broker_agent_buying_agent_commision'];
	$broker_agent_buying_agent_commision_percentaeg=$request['broker_agent_buying_agent_commision_percentaeg'];
	$broker_agent_seller_agreement_type_select=$request['broker_agent_seller_agreement_type_select'];
	$broker_agent_prospect_excemt_select=$request['broker_agent_prospect_excemt_select'];
    $broker_agent_agreement_services_select=$request['broker_agent_agreement_services_select'];
    

    //Property Information
    // ******PURCHASE OPTIONS
	$property_information_purchase_option_sale = $request['information_checkbox_11'];
	$property_information_purchase_option_Lease = $request['information_checkbox_12'];
	$property_information_purchase_option_Rental = $request['information_checkbox_13'];
	$property_information_purchase_option_Timeshare = $request['information_checkbox_14'];
	$property_information_purchase_option_Build_To_Suit = $request['information_checkbox_15'];
	$property_information_purchase_option_Construction_to_Permanent = $request['information_checkbox_16'];
	$property_information_purchase_option_Lease_Purchase_option = $request['information_checkbox_17'];
	$property_information_purchase_option_FHA = $request['information_checkbox_18'];
	$property_information_purchase_option_Seller_Financing = $request['information_checkbox_19'];
	$property_information_purchase_option_VA_Loan = $request['information_checkbox_111'];
	$property_information_purchase_option_Auction = $request['information_checkbox_112'];
	$property_information_purchase_option_Cash = $request['information_checkbox_113'];
	$property_information_purchase_option_Conventional = $request['information_checkbox_114'];
	$property_information_purchase_option_Loan_Assumption = $request['information_checkbox_115'];
	$property_information_purchase_option_USDA_Loan = $request['information_checkbox_116'];
	$property_information_purchase_option_Other = $request['information_checkbox_117'];
	$property_information_purchase_option_N_A_or_Dont_Know = $request['information_checkbox_12_NA_1'];
    $property_information_purchase_option_description = $request['information_checkbox_1_textarea'];
    
    // **********Buying Agent Commission
	$property_information_Buying_Agent_Commission_description = $request['property_information_Buying_Agent_Commission_description'];
    $property_information_Buying_Agent_Commission_description_select = $request['property_information_Buying_Agent_Commission_description_select'];
    
    // *************SELLER REPRESENTATION
	$property_information_SELLER_REPRESENTATION_checkbox_Has_owned_the_property = $request['information_checkbox_21'];
	$property_information_SELLER_REPRESENTATION_checkbox_As_NOT_owned_the_property = $request['information_checkbox_22'];
	$property_information_SELLER_REPRESENTATION_checkbox_Does_NOT_yet = $request['information_checkbox_23'];
    $property_information_SELLER_REPRESENTATION_checkbox_N_A_or_Dont_Know = $request['information_checkbox_12_NA_2'];
    
    // **********POSSESSION
	$property_information_POSSESSION_checkbox_At_Closing = $request['information_checkbox_31'];
	$property_information_POSSESSION_checkbox_Negotiable = $request['information_checkbox_32'];
	$property_information_POSSESSION_checkbox_Immediate = $request['information_checkbox_33'];
	$property_information_POSSESSION_checkbox_Subject_to_Tenant_Rights = $request['information_checkbox_34'];
	$property_information_POSSESSION_checkbox_Other = $request['information_checkbox_35'];
	$property_information_POSSESSION_checkbox_description = $request['information_checkbox_3_textarea2'];
    $property_information_POSSESSION_checkbox_N_A_or_Dont_Know = $request['information_checkbox_12_NA_3'];
    
    // ********AUCTION
	$property_information_AUCTION_dropdown = $request['information_checkbox_41'];
    $property_information_AUCTION_dropdown_N_A_or_Dont_Know = $request['information_checkbox_12_NA_4'];
    
    // ********STIPULATION OF SALE
	$property_information_STIPULATION_OF_SALE_dropdown = $request['information_select_5'];
	$property_information_STIPULATION_OF_SALE_dropdown_description = $request['information_select_5_textarea3'];
    $property_information_STIPULATION_OF_SALE_dropdown_N_A_or_Dont_Know = $request['information_checkbox_12_NA_5'];

    // *****HOME WARRANTY
	$property_information_HOME_WARRANTY_dropdown = $request['information_select_6'];
	$property_information_HOME_WARRANTY_dropdown_description_about_time_Remaining = $request['information_select_6_textarea4_about_time_Remaining'];
	$property_information_HOME_WARRANTY_dropdown_description_about_Warranty_Company = $request['information_select_6_textarea4_about_Warranty_Company'];
    $property_information_HOME_WARRANTY_dropdown_N_A_or_Dont_Know = $request['information_checkbox_12_NA_6'];

    // *******TERMITE BOND
	$property_information_TERMITE_BOND_dropdown = $request['information_select_7'];
	$property_information_TERMITE_BOND_dropdown_description_about_bond_monthly = $request['information_select_7_textarea5_about_bond_monthly'];
	$property_information_TERMITE_BOND_dropdown_description_about_company_name = $request['information_select_7_textarea5_about_company_name'];
    $property_information_TERMITE_BOND_dropdown_N_A_or_Dont_Know = $request['information_checkbox_12_NA_7'];


    // PROPERTY TYPE
    // **********PROPERTY CATEGORY 1
	$property_TYPE_PROPERTY_CATEGORY_1_radio = $request['Type_checkbox_11'];
	$property_TYPE_PROPERTY_CATEGORY_1_radio_description = $request['Type_checkbox_1_textarea']; 
    $property_TYPE_PROPERTY_CATEGORY_1_radio_N_A_or_Dont_Know = $request['information_checkbox_12_NA_11'];

    // *********PROPERTY CATEGORY 2
	$property_TYPE_PROPERTY_CATEGORY_2_radio = $request['Type_checkbox_21'];
	$property_TYPE_PROPERTY_CATEGORY_2_radio_description = $request['Type_checkbox_2_textarea2']; 
    $property_TYPE_PROPERTY_CATEGORY_2_radio_N_A_or_Dont_Know = $request['information_checkbox_12_NA_12'];

    // *****LEGAL & TAXES
    // ))))TAX AMOUNT
    $property_TYPE_LEGAL_TAXES_TAX_AMOUNT = $request['property_type_textarea_tax_amount'];
    // ))))OWNER/OWNERS
    $property_TYPE_LEGAL_TAXES_OWNER_OWNERS_dropdown = $request['Type_select_owner_3_ss']; 
    $property_TYPE_LEGAL_TAXES_OWNER_OWNERS_dropdown_1_first_name = $request['Type_select_owner_1_first_name']; 
    $property_TYPE_LEGAL_TAXES_OWNER_OWNERS_dropdown_1_last_name = $request['Type_select_owner_1_last_name'];     
    $property_TYPE_LEGAL_TAXES_OWNER_OWNERS_dropdown_N_A_or_Dont_Know = $request['information_checkbox_12_NA_13'];
    // ))))))Deed Book
    $property_TYPE_LEGAL_TAXES_Deed_Book_textarea = $request['information_textarea_deep_book']; 
    $property_TYPE_LEGAL_TAXES_Deed_Book_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_14']; 
    // ))))))Broker Owner    
    $property_TYPE_LEGAL_TAXES_Broker_Owner_dropdown = $request['desc_broker_owner_textarea_dropdown']; 
    $property_TYPE_LEGAL_TAXES_Broker_Owner_dropdown_textarea = $request['desc_broker_owner_textarea']; 
    $property_TYPE_LEGAL_TAXES_Broker_Owner_dropdown_N_A_or_Dont_Know = $request['information_checkbox_12_NA_15']; 
    // )))))Deed Page
    $property_TYPE_LEGAL_TAXES_Deed_Page_textarea = $request['information_textarea_Deed_page']; 
    $property_TYPE_LEGAL_TAXES_Deed_Page_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_16']; 
    // )))))PID
    $property_TYPE_LEGAL_TAXES_PID_textarea = $request['information_textarea_PID_1234']; 
    $property_TYPE_LEGAL_TAXES_PID_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_17']; 
    // ))))Plat Book
    $property_TYPE_LEGAL_TAXES_Plat_Book_textarea = $request['information_textarea_plat_book_1234']; 
    $property_TYPE_LEGAL_TAXES_Plat_Book_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_18']; 
    // ))))Plat Page
    $property_TYPE_LEGAL_TAXES_Plat_page_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_19']; 
    // )))Land Lot #
    $property_TYPE_LEGAL_TAXES_land_lot_textarea = $request['information_checkbox_12__land_lot']; 
    $property_TYPE_LEGAL_TAXES_land_lot_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_10']; 
    // ))))))Special Assessment
    $property_TYPE_LEGAL_TAXES_Special_Assessment_dropdown = $request['desc_special_ass']; 
    $property_TYPE_LEGAL_TAXES_Special_Assessment_dropdown_description = $request['desc_special_ass_text']; 
    $property_TYPE_LEGAL_TAXES_Special_Assessment_dropdown_description_N_A_or_Dont_Know = $request['information_checkbox_12_NA_111']; 
    // )))))Tax Year
    $property_TYPE_LEGAL_TAXES_tax_year_select = $request['information_checkbox_12_tax_year']; 
    $property_TYPE_LEGAL_TAXES_tax_year_select_N_A_or_Dont_Know = $request['information_checkbox_12_NA_112']; 
    // ))))Zoning
    $property_TYPE_LEGAL_TAXES_zoning_select = $request['information_checkbox_12_textarea']; 
    $property_TYPE_LEGAL_TAXES_zoning_select_N_A_or_Dont_Know = $request['information_checkbox_12_NA_113']; 

    // *****TOTAL REAL ESTATE PROPERTY TAX
    $property_TYPE_TOTAL_REAL_ESTATE_PROPERTY_TAX_select = $request['information_checkbox_12_total_real_estate']; 
    $property_TYPE_TOTAL_REAL_ESTATE_PROPERTY_TAX_select_N_A_or_Dont_Know = $request['information_checkbox_12_NA_114']; 

    // *****SALE PRICE
    $property_TYPE_SALE_PRICE_select = $request['information_checkbox_12_sale_price_textarea']; 
    $property_TYPE_SALE_PRICE_select_N_A_or_Dont_Know = $request['information_checkbox_12_NA_115']; 

    // ******LEASE PRICE
    $property_TYPE_LEASE_PRICE_radio_description = $request['Type_select_32_Broker_lease_textarea']; 
    $property_TYPE_LEASE_PRICE_radio = $request['Type_select_32_Broker_lease']; 
    $property_TYPE_LEASE_PRICE_radio_N_A_or_Dont_Know = $request['information_checkbox_12_NA_116']; 

    // *****LEASE GROSS YEARLY INCOME
    $property_TYPE_LEASE_GROSS_YEARLY_INCOME_textarea = $request['information_checkbox_12_textarea_lease']; 
    $property_TYPE_LEASE_GROSS_YEARLY_INCOME_textarea_N_A_or_Dont_Know = $request['information_checkbox_12_NA_117']; 


   // PROPERTY ADDRESS


    // PHOTO UPLOAD
    // *********EXTERIOR
    $PHOTO_UPLOAD_EXTERIOR_LANDSCAPING = $_FILES['file_upload_EXTERIOR_LANDSCAPING']['name'] ;
    $PHOTO_UPLOAD_EXTERIOR_HOUSE =$_FILES['file_upload_EXTERIOR_HOUSE']['name'] ;
    $PHOTO_UPLOAD_EXTERIOR_POOL =$_FILES['file_upload_EXTERIOR_POOL']['name'] ;
    $PHOTO_UPLOAD_EXTERIOR_SHED =$_FILES['file_upload_EXTERIOR_SHED']['name'] ; 
    $PHOTO_UPLOAD_EXTERIOR_OTHER = $_FILES['file_upload_EXTERIOR_OTHER']['name'] ;

    // ********INTERIOR
    $PHOTO_UPLOAD_INTERIOR_GARAGE = $_FILES['file_upload_INTERIOR_GARAGE']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_MUD_ROOM = $_FILES['file_upload_INTERIOR_MUD_ROOM']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_LIVING_ROOM = $_FILES['file_upload_INTERIOR_LIVING_ROOM']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_DINING_ROOM = $_FILES['file_upload_INTERIOR_DINING_ROOM']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_FAMILY_ROOM = $_FILES['file_upload_INTERIOR_FAMILY_ROOM']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_MEDIA_ROOM = $_FILES['file_upload_INTERIOR_MEDIA_ROOM']['name'];
    $PHOTO_UPLOAD_INTERIOR_BASEMENT = $_FILES['file_upload_INTERIOR_BASEMENT_ROOM']['name'] ; 
    $PHOTO_UPLOAD_INTERIOR_KITCHEN = $_FILES['file_upload_INTERIOR_KITCHEN_ROOM']['name'];
    $PHOTO_UPLOAD_INTERIOR_PANTRY = $_FILES['file_upload_INTERIOR_PANTRY_ROOM']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_HALF_BATH = $_FILES['file_upload_INTERIOR_HALF_BATH']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_OFFICE = $_FILES['file_upload_INTERIOR_OFFICE']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_BEDROOMS = $_FILES['file_upload_INTERIOR_BEDROOMS']['name'] ; 
    $PHOTO_UPLOAD_INTERIOR_BATHROOMS = $_FILES['file_upload_INTERIOR_BATHROOMS']['name'];
    $PHOTO_UPLOAD_INTERIOR_MASTER_BEDROOM = $_FILES['file_upload_INTERIOR_MASTER_BEDROOM']['name'] ;
    $PHOTO_UPLOAD_INTERIOR_MASTER_BATHROOM  = $_FILES['file_upload_INTERIOR_MASTER_BATHROOM']['name'] ; 
    $PHOTO_UPLOAD_INTERIOR_MASTER_CLOSET = $_FILES['file_upload_INTERIOR_MASTER_CLOSET']['name'] ; 
    $PHOTO_UPLOAD_INTERIOR_OTHER = $_FILES['file_upload_INTERIOR_OTHER']['name'] ;

    // PDF DOCUMENTS UPLOAD
    // $PDF_DOCUMENTS_UPLOAD_description = $_FILES['pdf_document_upload']['name'] ; 
    $PDF_DOCUMENTS_UPLOAD_PDF = $_FILES['file_upload_PDF_DOCUMENTS_UPLOAD']['name'] ;

    $Total_array = (array)$_POST;
    $Total_array['file_upload_EXTERIOR_LANDSCAPING'] = $PHOTO_UPLOAD_EXTERIOR_LANDSCAPING;
    $Total_array['file_upload_EXTERIOR_HOUSE'] = $PHOTO_UPLOAD_EXTERIOR_HOUSE;
    $Total_array['file_upload_EXTERIOR_POOL'] = $PHOTO_UPLOAD_EXTERIOR_POOL;
    $Total_array['file_upload_EXTERIOR_SHED'] = $PHOTO_UPLOAD_EXTERIOR_SHED;
    $Total_array['file_upload_EXTERIOR_OTHER'] = $PHOTO_UPLOAD_EXTERIOR_OTHER;

    $Total_array['file_upload_INTERIOR_GARAGE'] = $PHOTO_UPLOAD_INTERIOR_GARAGE;
    $Total_array['file_upload_INTERIOR_MUD_ROOM'] = $PHOTO_UPLOAD_INTERIOR_MUD_ROOM;
    $Total_array['file_upload_INTERIOR_LIVING_ROOM'] = $PHOTO_UPLOAD_INTERIOR_LIVING_ROOM;
    $Total_array['file_upload_INTERIOR_DINING_ROOM'] = $PHOTO_UPLOAD_INTERIOR_DINING_ROOM;
    $Total_array['file_upload_INTERIOR_FAMILY_ROOM'] = $PHOTO_UPLOAD_INTERIOR_FAMILY_ROOM;
    $Total_array['file_upload_INTERIOR_MEDIA_ROOM'] = $PHOTO_UPLOAD_INTERIOR_MEDIA_ROOM;
    $Total_array['file_upload_INTERIOR_BASEMENT_ROOM'] = $PHOTO_UPLOAD_INTERIOR_BASEMENT;
    $Total_array['file_upload_INTERIOR_KITCHEN_ROOM'] = $PHOTO_UPLOAD_INTERIOR_KITCHEN;
    $Total_array['file_upload_INTERIOR_PANTRY_ROOM'] = $PHOTO_UPLOAD_INTERIOR_PANTRY;
    $Total_array['file_upload_INTERIOR_HALF_BATH'] = $PHOTO_UPLOAD_INTERIOR_HALF_BATH;
    $Total_array['file_upload_INTERIOR_OFFICE'] = $PHOTO_UPLOAD_INTERIOR_OFFICE;
    $Total_array['file_upload_INTERIOR_BEDROOMS'] = $PHOTO_UPLOAD_INTERIOR_BEDROOMS;
    $Total_array['file_upload_INTERIOR_BATHROOMS'] = $PHOTO_UPLOAD_INTERIOR_BATHROOMS;
    $Total_array['file_upload_INTERIOR_MASTER_BEDROOM'] = $PHOTO_UPLOAD_INTERIOR_MASTER_BEDROOM;
    $Total_array['file_upload_INTERIOR_MASTER_CLOSET'] = $PHOTO_UPLOAD_INTERIOR_MASTER_CLOSET;
    $Total_array['file_upload_INTERIOR_OTHER'] = $PHOTO_UPLOAD_INTERIOR_OTHER;
    $Total_array['file_upload_PDF_DOCUMENTS_UPLOAD'] = $PDF_DOCUMENTS_UPLOAD_PDF;
    $Total_array = (object)$Total_array;
    $response = $Total_array ;    
    return $response;






    






    




	// $property_information_purchase_option_sale = $request['information_checkbox_11'];

    
    // return [
	// 	'broker_agent_first_name'		=> $broker_agent_first_name,
	// 	'broker_agent_last_name'    	=> $broker_agent_last_name,
	// 	'broker_agent_phone'     	=> $broker_agent_phone,
	// 	'broker_agent_email'     	=> $broker_agent_email,
	// 	'broker_agent_co_listing_agent'     	=> $broker_agent_co_listing_agent,
	// 	'broker_agent_broker_select'     	=> $broker_agent_broker_select,
	// 	'broker_agent_borker_desctrip'     	=> $broker_agent_borker_desctrip,
	// 	'broker_agent_listing_date'     	=> $broker_agent_listing_date,
	// 	'broker_agent_selling_agents_co_listing_agent_commission'     	=> $broker_agent_selling_agents_co_listing_agent_commission,
	// 	'broker_agent_selling_agents_co_listing_agent_commission_percentage'     	=> $broker_agent_selling_agents_co_listing_agent_commission_percentage,
	// 	'broker_agent_selling_agents_co_listing_agent_type_in_number'     	=> $broker_agent_selling_agents_co_listing_agent_type_in_number,
	// 	'broker_agent_selling_agents_co_listing_agent_type_in_number_percentage'     	=> $broker_agent_selling_agents_co_listing_agent_type_in_number_percentage,
	// 	'broker_agent_buying_agent_commision'     	=> $broker_agent_buying_agent_commision,
	// 	'broker_agent_buying_agent_commision_percentaeg'     	=> $broker_agent_buying_agent_commision_percentaeg,
	// 	'broker_agent_seller_agreement_type_select'     	=> $broker_agent_seller_agreement_type_select,
	// 	'broker_agent_prospect_excemt_select'     	=> $broker_agent_prospect_excemt_select,
	// 	'broker_agent_agreement_services_select'     	=> $broker_agent_agreement_services_select
    // ];
     
}
?>