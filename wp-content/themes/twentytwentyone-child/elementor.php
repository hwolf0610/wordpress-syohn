<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #133c55;
            display: flex;
            justify-content: center;
        }

        .add_new_html_form {
            display: flex;
        }

        textarea {
            box-shadow: 2px, green;
            border-radius: inherit;
            box-sizing: border-box;
            size: 5px;
            border-bottom-width: 5px;
            border-width: 5px;
            background: #133c55;
            color: white;
            height: 70px;
        }

        @media(max-width: 600px) {
            .tab {
                display: block;
            }

            .add_new_html_form {
                display: block;
            }

            textarea {
                height: 100px;
            }
        }


        .tablinks {
            color: white;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: rgb(39, 167, 117);
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: white;
            color: #133c55;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        p,
        label {
            font: 1rem 'Fira Sans', sans-serif;
        }

        input {
            margin: .4rem;
        }

        .second-radio {
            margin-top: 20px
        }



        input {
            cursor: pointer;
        }

        h2 {
            text-align: center;
            display: flex;
            justify-content: center;
            font-family: 'eicons';
        }

        h3,
        h4,
        h5,
        h6 {
            display: flex;
            font-family: 'eicons';
        }

        input[type=text] {
            background: #133c55;
            border-radius: 5px;
            border-block-style: inherit;
            color: white;

        }

        .elementor-column-wrap {
            width: 150%;
        }

        .control-button-style {
            border-radius: 5px;
            border: 3px;
            background: #133c55;
            color: white;
            width: 60px;
            text-align: center;
            display: flex;
            justify-content: center;
            padding: 5px;
            cursor: pointer;
            margin-right: 10px;
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <!-- <body onLoad="openCity(event, 'Information')"> -->

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'broker_agent')" id="only_show_broker_agents">BROKER / AGENTS
        </button>
        <button class="tablinks" onclick="openCity(event, 'Information')">PROPERTY INFORMATION </button>
        <button class="tablinks" onclick="openCity(event, 'Type')">PROPERTY TYPE </button>
        <button class="tablinks" onclick="openCity(event, 'Address')">PROPERTY ADDRESS </button>
        <button class="tablinks" onclick="openCity(event, 'Description')">PROPERTY DESCRIPTION</button>
        <button class="tablinks" onclick="openCity(event, 'Instructions')">SHOWING INSTRUCTIONS</button>
        <button class="tablinks" onclick="openCity(event, 'Distribution')">LISTING DISTRIBUTION</button>
        <button class="tablinks" onclick="openCity(event, 'photo_upload')">PHOTO UPLOAD</button>
        <button class="tablinks" onclick="openCity(event, 'pdf_documents')">PDF DOCUMENTS</button>
    </div>
    <form action="http://localhost/wp-form/wp-json/home_retail/get_kind/formdata" method="post" enctype='multipart/form-data'
        id="nameform">
        <input type="hidden" id="home_seller_kind" name="home_seller_kind">
        <!-- Tab 1 -->
        <div id="broker_agent" class="tabcontent" style="padding: 25px;">
            <div>
                <h1> Broker/Agent </h1>
                <textarea></textarea>
                <input type="text" placeholder="First Name " name="broker_agent_first_name"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <input type="text" placeholder="Last Name " name="broker_agent_last_name"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <input type="text" placeholder="Phone " name="broker_agent_phone"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <input type="text" placeholder="Email " name="broker_agent_email"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
            </div>

            <div>
                <h3>Co-Listing Agent</h3>
                <textarea></textarea>
                <input type="text" placeholder="Type in Co-Listing Agents Real Estate Agency name"
                    name="broker_agent_co_listing_agent"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
            </div>

            <div>
                <h3>Broker</h3>
                <textarea></textarea>
                <select name="broker_agent_broker_select">
                    <option value="Broker 1" selected>Broker 1</option>
                    <option value="Broker 2">Broker 2</option>
                    <option value="Broker 3">Broker 3</option>
                    <option value="Broker 4">Broker 4</option>
                    <option value="Broker 5">Broker 5</option>
                    <option value="Broker 6">Broker 6</option>
                </select>
                <input type="text" style="background: rgb(241, 241, 120);color: black;width: 100%;"
                    name="broker_agent_borker_desctrip" />
            </div>

            <div>
                <h3><b>Listing Date</b></h3>
                <textarea></textarea>
                <div class="second-radio">
                    <select name="broker_agent_listing_date">
                        <option value="Agency 1">Agency 1</option>
                        <option value="Agency 2" selected>Agency 2</option>
                        <option value="Agency 3" selected>Agency 3</option>
                        <option value="Agency 4" selected>Agency 4</option>
                        <option value="Agency 5" selected>Agency 5</option>
                        <option value="Agency 6" selected>Agency 6</option>
                    </select>
                </div>
            </div>

            <div>
                <h3><b>Selling Agent & Co-Listing Agent Commission</b></h3>
                <textarea></textarea>
                <input type="text" placeholder="Selling Agent Type in number"
                    name="broker_agent_selling_commission"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <h4>Percentage</h4>
                <select name="broker_agent_selling_commission_percentage">
                    <option value="0.5%">0.5%</option>
                    <option value="1%">1%</option>
                    <option value="1.5%">1.5%</option>
                    <option value="2%">2%</option>
                    <option value="2.5%">2.5%</option>
                    <option value="3%">3%</option>
                    <option value="3.5%">3.5%</option>
                    <option value="4%">4%</option>
                    <option value="4.5%">4.5%</option>
                    <option value="5%">5%</option>
                    <option value="5.5%">5.5%</option>
                    <option value="6%">6%</option>
                </select>
                <input type="text" placeholder="Co-Listing Agent  Type in number"
                    name="broker_agent_type_in_number"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <h4>Percentage</h4>
                <select name="broker_agent_type_in_number_percentage">
                    <option value="0.5%">0.5%</option>
                    <option value="1%">1%</option>
                    <option value="1.5%">1.5%</option>
                    <option value="2%">2%</option>
                    <option value="2.5%">2.5%</option>
                    <option value="3%">3%</option>
                    <option value="3.5%">3.5%</option>
                    <option value="4%">4%</option>
                    <option value="4.5%">4.5%</option>
                    <option value="5%">5%</option>
                    <option value="5.5%">5.5%</option>
                    <option value="6%">6%</option>
                </select>
            </div>

            <div>
                <h3><b>Buying Agent Commission</b></h3>
                <textarea></textarea>
                <input type="text" placeholder="Type in number" name="broker_agent_buying_agent_commision"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <h4>Percentage</h4>
                <select name="broker_agent_buying_agent_commision_percentaeg">
                    <option value="0.5%">0.5%</option>
                    <option value="1%">1%</option>
                    <option value="1.5%">1.5%</option>
                    <option value="2%">2%</option>
                    <option value="2.5%">2.5%</option>
                    <option value="3%">3%</option>
                    <option value="3.5%">3.5%</option>
                    <option value="4%">4%</option>
                    <option value="4.5%">4.5%</option>
                    <option value="5%">5%</option>
                    <option value="5.5%">5.5%</option>
                    <option value="6%">6%</option>
                </select>
            </div>

            <div>
                <h3><b>Sellers Agreement Type</b></h3>
                <textarea></textarea>
                <div class="second-radio">
                    <select name="broker_agent_seller_agreement_type_select">
                        <option value="Exclusive Right To Sell" selected>Exclusive Right To Sell</option>
                        <option value="Exclusive Agency">Exclusive Agency</option>
                        <option value="Open Listing Agreement">Open Listing Agreement</option>
                        <option value="Net Listing Agreement">Net Listing Agreement</option>
                    </select>
                </div>
            </div>

            <div>
                <h3><b>Prospect Exempt</b></h3>
                <textarea></textarea>
                <div class="second-radio">
                    <select name="broker_agent_prospect_excemt_select">
                        <option value="yes">Yes</option>
                        <option value="no" selected>No</option>
                    </select>
                </div>
            </div>

            <div>
                <h3><b>Agreement Services</b></h3>
                <textarea></textarea>
                <div class="second-radio">
                    <select name="broker_agent_agreement_services_select">
                        <option value="Full Service">Full Service</option>
                        <option value="Limited Service" selected>Limited Service</option>
                    </select>
                </div>
            </div>

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(1, 'Information')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>

        </div>

        <!-- Tab 1 -->
        <div id="Information" class="tabcontent" style="padding: 25px;">
            <!-- <textarea placeholder="Please fill out the information below to the best of your ability. If you don’t know an answer, then mark the N/A or Don’t Know box. All other information associated to a question in this section should be listed in the yellow boxes provided accordingly that are not associated with a specific check box."></textarea> -->
            <h2>PROPERTY INFORMATION </h2><br />
            <div style="padding: 10px;font-size: 15px;background: #133c55;color: white;">
                Please, fill out the information below, to the best of your ability. If you do not know an answer, mark
                the
                N/A or Don’t Know box. All other information, associated to a specific question, in this section, should
                be
                listed in the yellow box provided when you check the other box.
            </div>

            <h3><b>PURCHASE OPTIONS </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_11" name="information_checkbox_11" value="Sale" checked
                    onchange="display_none_textarea()">
                <label for="information_checkbox_11">Sale</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12" name="information_checkbox_12" value="Lease">
                <label for="information_checkbox_12">Lease</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_13" name="information_checkbox_13" value="Rental">
                <label for="information_checkbox_13">Rental</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_14" name="information_checkbox_14" value="Timeshare">
                <label for="information_checkbox_14">Timeshare</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_15" name="information_checkbox_15"
                    value="Build To Suit">
                <label for="information_checkbox_15">Build To Suit</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_16" name="information_checkbox_16"
                    value="Construction to Permanent">
                <label for="information_checkbox_16">Construction to Permanent</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_17" name="information_checkbox_17"
                    value="Lease/Purchase option">
                <label for="information_checkbox_17">Lease/Purchase option</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_18" name="information_checkbox_18" value="FHA">
                <label for="information_checkbox_18">FHA</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_19" name="information_checkbox_19"
                    value="Seller Financing">
                <label for="information_checkbox_19">Seller Financing</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_111" name="information_checkbox_111" value="VA Loan">
                <label for="information_checkbox_111">VA Loan</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_112" name="information_checkbox_112" value="Auction">
                <label for="information_checkbox_112">Auction</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_113" name="information_checkbox_113" value="Cash">
                <label for="information_checkbox_113">Cash</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_114" name="information_checkbox_114"
                    value="Conventional">
                <label for="information_checkbox_114">Conventional</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_115" name="information_checkbox_115"
                    value="Loan Assumption">
                <label for="information_checkbox_115">Loan Assumption</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_116" name="information_checkbox_116" value="USDA Loan">
                <label for="information_checkbox_116">USDA Loan</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_117" name="information_checkbox_117" value="Other"
                    onclick="information_checkbox_1_otherCheckbox(this)">
                <label for="information_checkbox_117">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" name="information_checkbox_1_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"
                    id="information_checkbox_1_textarea"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1" name="information_checkbox_12_NA_1"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_1">N/A or Don’t Know</label>
            </div>

            <div id="visble_only_agent_out">
                <h3><b>Buying Agent Commission</b></h3>
                <textarea></textarea>
                <input type="text" placeholder="Type in number"
                    name="information_Buying_Agent_Commi_des"
                    style="background: rgb(241, 241, 120);color: black;width: 100%;" />
                <h4>Percentage</h4>
                <select name="information_Buying_Agent_Commi_des_sct">
                    <option value="0.5%">0.5%</option>
                    <option value="1%">1%</option>
                    <option value="1.5%">1.5%</option>
                    <option value="2%">2%</option>
                    <option value="2.5%">2.5%</option>
                    <option value="3%">3%</option>
                    <option value="3.5%">3.5%</option>
                    <option value="4%">4%</option>
                    <option value="4.5%">4.5%</option>
                    <option value="5%">5%</option>
                    <option value="5.5%">5.5%</option>
                    <option value="6%">6%</option>
                </select>
            </div>

            <h3><b>SELLER REPRESENTATION </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_21" name="information_checkbox_21"
                    value="Has owned the property for at least one year" checked>
                <label for="information_checkbox_21">Has owned the property for at least one year</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_22" name="information_checkbox_22"
                    value="As NOT owned the property for at least one year">
                <label for="information_checkbox_22">As NOT owned the property for at least one year</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_23" name="information_checkbox_23"
                    value="Does NOT yet own the property">
                <label for="information_checkbox_23">Does NOT yet own the property</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_2" name="information_checkbox_12_NA_2"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_2">N/A or Don’t Know</label>
            </div>

            <h3><b>POSSESSION</b></h3>
            <textarea></textarea><br />
            <div>
                <input type="checkbox" id="information_checkbox_31" name="information_checkbox_31" value="At Closing"
                    checked>
                <label for="information_checkbox_31">At Closing</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_32" name="information_checkbox_32" value="Negotiable">
                <label for="information_checkbox_32">Negotiable</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_33" name="information_checkbox_33" value="Immediate">
                <label for="information_checkbox_33">Immediate</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_34" name="information_checkbox_34"
                    value="Subject to Tenant Rights">
                <label for="information_checkbox_34">Subject to Tenant Rights</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_35" name="information_checkbox_35" value="Other"
                    onclick="information_checkbox_3_otherCheckbox2(this)">
                <label for="information_checkbox_35">Other</label>
            </div>

            <textarea placeholder="Input information here" id="information_checkbox_3_textarea2"
                name="information_checkbox_3_textarea2"
                style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>

            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_3" name="information_checkbox_12_NA_3"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_3">N/A or Don’t Know</label>
            </div>

            <h3><b>AUCTION</b></h3>
            <textarea placeholder=""></textarea>
            <!-- FYI: If the house is to be auctioned off check yes or no. List details in the description area. -->
            <select id="information_checkbox_41">
                <option value="yes">Yes</option>
                <option value="no" selected>No</option>
            </select>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_4" name="information_checkbox_12_NA_4"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_4">N/A or Don’t Know</label>
            </div>

            <h3><b>STIPULATION OF SALE</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select onchange="information_select_5_dropdownChanges()" id="information_select_5">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="information_select_5_textarea3"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_5" name="information_checkbox_12_NA_5"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_5">N/A or Don’t Know</label>
            </div>

            <h3><b>HOME WARRANTY</b></h3>
            <textarea placeholder=""></textarea>
            <!-- FYI: Does the house come with a home warranty check yes or no. If yes give details. -->
            <div class="second-radio">
                <select onchange="information_select_6_dropdownChanges2()" id="information_select_6">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio" id="information_select_6_textarea4" style="display:none;">
                <textarea placeholder="Input information here about Time Remaining"
                    name="information_txt_abt_time_Remaining"
                    style=" background: rgb(241, 241, 120);color: black;"></textarea>
                <textarea placeholder="Input information here about Warranty Company"
                    name="information_txt_abt_Warranty_Company"
                    style=" background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_6" name="information_checkbox_12_NA_6"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_6">N/A or Don’t Know</label>
            </div>

            <h3><b>TERMITE BOND</b></h3>
            <textarea></textarea>
            <div class="second-radio">
                <select onchange="information_select_7_dropdownChanges3()" id="information_select_7">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio" id="information_select_7_textarea5" style="display:none; ">
                <textarea placeholder="Input information here about Bond or Monthly amount"
                    name="information__txt5_abt_bd_monthly"
                    style="background: rgb(241, 241, 120);color: black;"></textarea>
                <textarea placeholder="Input information here about Company Name"
                    name="information__txt5_abt_cpy_name"
                    style="background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_7" name="information_checkbox_12_NA_7"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_7">N/A or Don’t Know</label>
            </div>

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <div id="visble_only_agent_out2">
                    <a onclick="go_next_section(0, 'broker_agent')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                </div>                
                <a onclick="go_next_section(2, 'Type')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>
        </div>


        <!-- Tab 2 -->
        <div id="Type" class="tabcontent" style="padding: 25px;">
            <h2>PROPERTY TYPE </h2><br />
            <h3>PROPERTY CATEGORY 1</h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_11" name="Type_checkbox_11" value="Residential" checked>
                <label for="Type_checkbox_11">Residential</label>
            </div>

            <div class="second-radio">
                <input type="radio" id="Type_checkbox_12" name="Type_checkbox_11" value="Commercial">
                <label for="Type_checkbox_12">Commercial</label>
            </div>

            <div class="second-radio">
                <input type="radio" id="Type_checkbox_13" name="Type_checkbox_11" value="Other"
                    onchange="Type_checkbox_1_otherCheckbox(this)">
                <label for="Type_checkbox_13">Other</label>
            </div>

            <div class="second-radio">
                <textarea placeholder="Input information here" id="Type_checkbox_1_textarea"
                    name="Type_checkbox_1_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_11" name="information_checkbox_12_NA_11"
                    value="dewey">
                <label for="information_checkbox_12_NA_11">N/A or Don’t Know</label>
            </div>

            <h3>PROPERTY CATEGORY 2</h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_21" name="Type_checkbox_21" value="Land" checked>
                <label for="Type_checkbox_21">Land</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_22" name="Type_checkbox_21" value="Single Family Unit">
                <label for="Type_checkbox_22">Single Family Unit</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_23" name="Type_checkbox_21" value="Multi-Family Unit">
                <label for="Type_checkbox_23">Multi-Family Unit</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_24" name="Type_checkbox_21" value="Townhome">
                <label for="Type_checkbox_24">Townhome</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_25" name="Type_checkbox_21" value="office building">
                <label for="Type_checkbox_25">office building</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_26" name="Type_checkbox_21" value="office space">
                <label for="Type_checkbox_26">office space</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_27" name="Type_checkbox_21" value="Boat Slip">
                <label for="Type_checkbox_27">Boat Slip</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_28" name="Type_checkbox_21" value="Efficiency">
                <label for="Type_checkbox_28">Efficiency</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_29" name="Type_checkbox_21" value="Studio">
                <label for="Type_checkbox_29">Studio</label>
            </div>
            <div class="second-radio">
                <input type="radio" id="Type_checkbox_211" name="Type_checkbox_21" value="other"
                    onclick="Type_checkbox_2_otherCheckbox2(this)">
                <!-- onchange="Type_checkbox_2_otherCheckbox2(this)" -->
                <label for="Type_checkbox_211">other</label>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Type_checkbox_2_textarea2"
                    name="Type_checkbox_2_textarea2"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_12" name="information_checkbox_12_NA_12"
                    value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_12">N/A or Don’t Know</label>
            </div>

            <h3>LEGAL & TAXES</h3>
            <textarea></textarea>
            <h3>TAX AMOUNT</h3>
            <textarea name="property_type_textarea_tax_amount"
                style="background: rgb(241, 241, 120);color: black;"></textarea>
            <div class="second-radio">
                <h4>OWNER/OWNERS</h4>
                <textarea></textarea>
                <h5>Are there multiple owners?</h5>
                <div id="Type_select_owner">
                    <select id="Type_select_owner_3_ss" onchange="Type_select_owner_select()"
                        name="Type_select_owner_3_ss">
                        <option value="Yes">Yes</option>
                        <option value="No" selected>No</option>
                    </select><br />
                </div>

                <div style='display:none;' id="Type_select_31_owner_div">
                    <h6>owner 1 </h6>
                    <div class="add_new_html_form">
                        <input type='text' placeholder='first name' name="Type_select_owner_1_first_name"
                            style="background: rgb(241, 241, 120);color: black;">
                        <input type='text' placeholder='last name' name="Type_select_owner_1_last_name"
                            style="background: rgb(241, 241, 120);color: black;">
                        <a onclick="add_more_owner()" class="control-button-style"><span style="color: white;">ADD OTHER
                                OWNER</span></a>
                    </div>
                </div>

                <div id="Type_select_32_owner_div">
                    <div class="add_new_html_form">
                        <input type='text' placeholder='first name' name="Type_select_owner_1_first_name"
                            style='background: rgb(241, 241, 120);color: black;width:100%'>
                        <input type='text' placeholder='last name' name="Type_select_owner_1_last_name"
                            style='background: rgb(241, 241, 120);color: black;width:100%'>
                    </div>
                </div>

                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_13" name="information_checkbox_12_NA_13"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_13">N/A or Don’t Know</label>
                </div>

                <h4>Deed Book</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_Deed" placeholder="Deed Book"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_textarea_deep_book"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_14" name="information_checkbox_12_NA_14"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_14">N/A or Don’t Know</label>
                </div>

                <h4>Broker Owner</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_Deed_page" placeholder="Deed Page"> -->
                <select id="desc_broker_owner" name="desc_broker_owner_textarea_dropdown" onchange="if(this.value=='Yes'){document.getElementById('desc_broker_owner_textarea').style.display='block'}else{document.getElementById('desc_broker_owner_textarea').style.display='none'}">
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
                </select><br />
                <textarea id="desc_broker_owner_textarea"
                    style="display:none;background: rgb(241, 241, 120);color: black;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_15" name="information_checkbox_12_NA_15"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_15">N/A or Don’t Know</label>
                </div>

                <h4>Deed Page</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_Deed" placeholder="Deed Page"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_textarea_Deed_page"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_16" name="information_checkbox_12_NA_16"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_16">N/A or Don’t Know</label>
                </div>

                <h4>PID</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_PID" placeholder="PID"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_textarea_PID_1234"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_17" name="information_checkbox_12_NA_17"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_17">N/A or Don’t Know</label>
                </div>

                <h4>Plat Book</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%;" id="Type_select_3_Plat" placeholder="Plat Book"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_textarea_plat_book_1234"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_18" name="information_checkbox_12_NA_18"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_18">N/A or Don’t Know</label>
                </div>

                <h4>Plat Page</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%;" id="Type_select_3_Plat_page" placeholder="Plat Page"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_19" name="information_checkbox_12_NA_19"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_19">N/A or Don’t Know</label>
                </div>

                <h4>Land Lot #</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_Land" placeholder="Land Lot"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_checkbox_12__land_lot"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_10" name="information_checkbox_12_NA_10"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_10">N/A or Don’t Know</label>
                </div>

                <h4>Special Assessment</h4>
                <textarea></textarea>
                <select id="desc_special_ass" name="desc_special_ass" onchange="if(this.value=='Yes'){document.getElementById('desc_special_ass_text').style.display='block'}else{document.getElementById('desc_special_ass_text').style.display='none'}">
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
                </select><br />
                <textarea id="desc_special_ass_text" name="desc_special_ass_text"
                    style="display:none;background: rgb(241, 241, 120);color: black;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_111" name="information_checkbox_12_NA_111"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_111">N/A or Don’t Know</label>
                </div>

                <h4>Tax Year</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_Special" placeholder="Tax Year"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_checkbox_12_tax_year"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_112" name="information_checkbox_12_NA_112"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_112">N/A or Don’t Know</label>
                </div>

                <h4>Zoning</h4>
                <textarea></textarea>
                <!-- <input type="text" style="width:100%; " id="Type_select_3_Zoning" placeholder="Zoning"> -->
                <textarea style="background: rgb(241, 241, 120);color: black;"
                    name="information_checkbox_12_textarea"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_113" name="information_checkbox_12_NA_113"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_113">N/A or Don’t Know</label>
                </div>
            </div>

            <h3>TOTAL REAL ESTATE PROPERTY TAX </h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="information_checkbox_12_total_real_estate"></textarea>
            <div class="second-radio">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_114" name="information_checkbox_12_NA_114"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_114">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3>SALE PRICE </h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="information_checkbox_12_sale_price_textarea"></textarea>
            <div class="second-radio">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_115" name="information_checkbox_12_NA_115"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_115">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3>LEASE PRICE </h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="Type_select_32_Broker_lease_textarea"></textarea>
            <div class="second-radio">
                <div class="second-radio">
                    <input type="radio" id="Type_select_32_Broker_lease_year" name="Type_select_32_Broker_lease"
                        value="Yearly">
                    <label for="Type_select_32_Broker_lease_year">Yearly </label>
                </div>
                <div class="second-radio">
                    <input type="radio" id="Type_select_32_Broker_lease_month" name="Type_select_32_Broker_lease"
                        value="Monthly">
                    <label for="Type_select_32_Broker_lease_month">Monthly</label>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_116" name="information_checkbox_12_NA_116"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_116">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3>LEASE GROSS YEARLY INCOME </h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="information_checkbox_12_textarea_lease"></textarea>
            <div class="second-radio">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_117" name="information_checkbox_12_NA_117"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_117">N/A or Don’t Know</label>
                </div>
            </div><br />


            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(1, 'Information')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                <a onclick="go_next_section(3, 'Address')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>

        </div>


        <!-- Tab 3 -->
        <div id="Address" class="tabcontent" style="padding: 25px;">
            <h2>PROPERTY ADDRESS </h2>
            <div style="margin-left:15px; margin-right:15px">
                <h3>STREET ADDRESS</h3>
                <textarea></textarea>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%"
                    name="property_address_street_address1" placeholder="Street Address"></textarea>
                <!-- <input type="text" style="background: rgb(241, 241, 120);color: black;width:100%"
                placeholder="Street Address"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_118" name="information_checkbox_12_NA_118"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_118">N/A or Don’t Know</label>
                </div>

                <h3>UNIT # </h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_UNIT1" placeholder="UNIT #"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="UNIT #"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_119" name="information_checkbox_12_NA_119"
                        value="N/A or Don’t Know">
                    <label for="information_checkbox_12_NA_119">N/A or Don’t Know</label>
                </div>

                <h3>COUNTRY</h3>
                <select id="Address_select_1" name="property_address_country_select">
                    <option value="United States" selected>United States</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="AndorrA">AndorrA</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D\'Ivoire">Cote D\'Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="no">Dominican Republic</option>
                    <option value="no">Ecuador</option>
                    <option value="no">Egypt</option>
                    <option value="no">El Salvador</option>
                    <option value="no">Equatorial Guinea</option>
                    <option value="no">Eritrea</option>
                    <option value="no">Estonia</option>
                    <option value="no">Ethiopia</option>
                    <option value="no">Falkland Islands (Malvinas)</option>
                    <option value="no">Faroe Islands</option>
                    <option value="no">Fiji</option>
                    <option value="no">Finland</option>
                    <option value="no">France</option>
                    <option value="no">French Guiana</option>
                    <option value="no">French Polynesia</option>
                    <option value="no">French Southern Territories</option>
                    <option value="no">Gabon</option>
                    <option value="no">Gambia</option>
                    <option value="no">Georgia</option>
                    <option value="no">Germany</option>
                    <option value="no">Ghana</option> 'GH'},
                    <option value="no">Gibraltar</option> 'GI'},
                    <option value="no">Greece</option> 'GR'},
                    <option value="no">Greenland</option> 'GL'},
                    <option value="no">Grenada</option> 'GD'},
                    <option value="no">Guadeloupe</option> 'GP'},
                    <option value="no">Guam</option> 'GU'},
                    <option value="no">Guatemala</option> 'GT'},
                    <option value="no">Guernsey</option> 'GG'},
                    <option value="no">Guinea</option> 'GN'},
                    <option value="no">Guinea-Bissau</option> 'GW'},
                    <option value="no">Guyana</option> 'GY'},
                    <option value="no">Haiti</option> 'HT'},
                    <option value="no">Heard Island and Mcdonald Islands</option> 'HM'},
                    <option value="no">Holy See (Vatican City State)</option> 'VA'},
                    <option value="no">Honduras</option> 'HN'},
                    <option value="no">Hong Kong</option> 'HK'},
                    <option value="no">Hungary</option> 'HU'},
                    <option value="no">Iceland</option> 'IS'},
                    <option value="no">India</option> 'IN'},
                    <option value="no">Indonesia</option> 'ID'},
                    <option value="no">Iran, Islamic Republic Of</option> 'IR'},
                    <option value="no">Iraq</option> 'IQ'},
                    <option value="no">Ireland</option> 'IE'},
                    <option value="no">Isle of Man</option> 'IM'},
                    <option value="no">Israel</option> 'IL'},
                    <option value="no">Italy</option> 'IT'},
                    <option value="no">Jamaica</option> 'JM'},
                    <option value="no">Japan</option> 'JP'},
                    <option value="no">Jersey</option> 'JE'},
                    <option value="no">Jordan</option> 'JO'},
                    <option value="no">Kazakhstan</option> 'KZ'},
                    <option value="no">Kenya</option> 'KE'},
                    <option value="no">Kiribati</option> 'KI'},
                    <option value="no">Korea, Democratic People\'S Republic of</option> 'KP'},
                    <option value="no">Korea, Republic of</option> 'KR'},
                    <option value="no">Kuwait</option> 'KW'},
                    <option value="no">Kyrgyzstan</option> 'KG'},
                    <option value="no">Lao People\'S Democratic Republic</option> 'LA'},
                    <option value="no">Latvia</option> 'LV'},
                    <option value="no">Lebanon</option> 'LB'},
                    <option value="no">Lesotho</option> 'LS'},
                    <option value="no">Liberia</option> 'LR'},
                    <option value="no">Libyan Arab Jamahiriya</option> 'LY'},
                    <option value="no">Liechtenstein</option> 'LI'},
                    <option value="no">Lithuania</option> 'LT'},
                    <option value="no">Luxembourg</option> 'LU'},
                    <option value="no">Macao</option> 'MO'},
                    <option value="no">Macedonia, The Former Yugoslav Republic of</option> 'MK'},
                    <option value="no">Madagascar</option> 'MG'},
                    <option value="no">Malawi</option> 'MW'},
                    <option value="no">Malaysia</option> 'MY'},
                    <option value="no">Maldives</option> 'MV'},
                    <option value="no">Mali</option> 'ML'},
                    <option value="no">Malta</option> 'MT'},
                    <option value="no">Marshall Islands</option> 'MH'},
                    <option value="no">Martinique</option> 'MQ'},
                    <option value="no">Mauritania</option> 'MR'},
                    <option value="no">Mauritius</option> 'MU'},
                    <option value="no">Mayotte</option> 'YT'},
                    <option value="no">Mexico</option> 'MX'},
                    <option value="no">Micronesia, Federated States of</option> 'FM'},
                    <option value="no">Moldova, Republic of</option> 'MD'},
                    <option value="no">Monaco</option> 'MC'},
                    <option value="no">Mongolia</option> 'MN'},
                    <option value="no">Montserrat</option> 'MS'},
                    <option value="no">Morocco</option> 'MA'},
                    <option value="no">Mozambique</option> 'MZ'},
                    <option value="no">Myanmar</option> 'MM'},
                    <option value="no">Namibia</option> 'NA'},
                    <option value="no">Nauru</option> 'NR'},
                    <option value="no">Nepal</option> 'NP'},
                    <option value="no">Netherlands</option> 'NL'},
                    <option value="no">Netherlands Antilles</option> 'AN'},
                    <option value="no">New Caledonia</option> 'NC'},
                    <option value="no">New Zealand</option> 'NZ'},
                    <option value="no">Nicaragua</option> 'NI'},
                    <option value="no">Niger</option> 'NE'},
                    <option value="no">Nigeria</option> 'NG'},
                    <option value="no">Niue</option> 'NU'},
                    <option value="no">Norfolk Island</option> 'NF'},
                    <option value="no">Northern Mariana Islands</option> 'MP'},
                    <option value="no">Norway</option> 'NO'},
                    <option value="no">Oman</option> 'OM'},
                    <option value="no">Pakistan</option> 'PK'},
                    <option value="no">Palau</option> 'PW'},
                    <option value="no">Palestinian Territory, Occupied</option> 'PS'},
                    <option value="no">Panama</option> 'PA'},
                    <option value="no">Papua New Guinea</option> 'PG'},
                    <option value="no">Paraguay</option> 'PY'},
                    <option value="no">Peru</option> 'PE'},
                    <option value="no">Philippines</option> 'PH'},
                    <option value="no">Pitcairn</option> 'PN'},
                    <option value="no">Poland</option> 'PL'},
                    <option value="no">Portugal</option> 'PT'},
                    <option value="no">Puerto Rico</option> 'PR'},
                    <option value="no">Qatar</option> 'QA'},
                    <option value="no">Reunion</option> 'RE'},
                    <option value="no">Romania</option> 'RO'},
                    <option value="no">Russian Federation</option> 'RU'},
                    <option value="no">RWANDA</option> 'RW'},
                    <option value="no">Saint Helena</option> 'SH'},
                    <option value="no">Saint Kitts and Nevis</option> 'KN'},
                    <option value="no">Saint Lucia</option> 'LC'},
                    <option value="no">Saint Pierre and Miquelon</option> 'PM'},
                    <option value="no">Saint Vincent and the Grenadines</option> 'VC'},
                    <option value="no">Samoa</option> 'WS'},
                    <option value="no">San Marino</option> 'SM'},
                    <option value="no">Sao Tome and Principe</option> 'ST'},
                    <option value="no">Saudi Arabia</option> 'SA'},
                    <option value="no">Senegal</option> 'SN'},
                    <option value="no">Serbia and Montenegro</option> 'CS'},
                    <option value="no">Seychelles</option> 'SC'},
                    <option value="no">Sierra Leone</option> 'SL'},
                    <option value="no">Singapore</option> 'SG'},
                    <option value="no">Slovakia</option> 'SK'},
                    <option value="no">Slovenia</option> 'SI'},
                    <option value="no">Solomon Islands</option> 'SB'},
                    <option value="no">Somalia</option> 'SO'},
                    <option value="no">South Africa</option> 'ZA'},
                    <option value="no">South Georgia and the South Sandwich Islands</option> 'GS'},
                    <option value="no">Spain</option> 'ES'},
                    <option value="no">Sri Lanka</option> 'LK'},
                    <option value="no">Sudan</option> 'SD'},
                    <option value="no">Suriname</option> 'SR'},
                    <option value="no">Svalbard and Jan Mayen</option> 'SJ'},
                    <option value="no">Swaziland</option> 'SZ'},
                    <option value="no">Sweden</option> 'SE'},
                    <option value="no">Switzerland</option> 'CH'},
                    <option value="no">Syrian Arab Republic</option> 'SY'},
                    <option value="no">Taiwan, Province of China</option> 'TW'},
                    <option value="no">Tajikistan</option> 'TJ'},
                    <option value="no">Tanzania, United Republic of</option> 'TZ'},
                    <option value="no">Thailand</option> 'TH'},
                    <option value="no">Timor-Leste</option> 'TL'},
                    <option value="no">Togo</option> 'TG'},
                    <option value="no">Tokelau</option> 'TK'},
                    <option value="no">Tonga</option> 'TO'},
                    <option value="no">Trinidad and Tobago</option> 'TT'},
                    <option value="no">Tunisia</option> 'TN'},
                    <option value="no">Turkey</option> 'TR'},
                    <option value="no">Turkmenistan</option> 'TM'},
                    <option value="no">Turks and Caicos Islands</option> 'TC'},
                    <option value="no">Tuvalu</option> 'TV'},
                    <option value="no">Uganda</option> 'UG'},
                    <option value="no">Ukraine</option> 'UA'},
                    <option value="no">United Arab Emirates</option> 'AE'},
                    <option value="no">United Kingdom</option> 'GB'},
                    <option value="no">United States Minor Outlying Islands</option> 'UM'},
                    <option value="no">Uruguay</option> 'UY'},
                    <option value="no">Uzbekistan</option>
                    <option value="no">Vanuatu</option>
                    <option value="no">Venezuela</option>
                    <option value="no">Viet Nam</option>
                    <option value="no">Virgin Islands</option>
                    <option value="no">Virgin Islands</option>
                    <option value="no">Wallis and Futuna</option>
                    <option value="no">Western Sahara</option>
                    <option value="no">Yemen</option>
                    <option value="no">Zambia</option>
                    <option value="no">Zimbabwe</option>
                </select>

                <h3>CITY</h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_city1" placeholder="City"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="City"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_120" name="information_checkbox_12_NA_120"
                        value="dewey">
                    <label for="information_checkbox_12_NA_120">N/A or Don’t Know</label>
                </div>

                <h3>STATE</h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_state1" placeholder="State"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="State"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_121" name="information_checkbox_12_NA_121"
                        value="dewey">
                    <label for="information_checkbox_12_NA_121">N/A or Don’t Know</label>
                </div>


                <h3>ZIP CODE </h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_zip_code1" placeholder="Zip Code #"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="Zip Code #"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_122" name="information_checkbox_12_NA_122"
                        value="dewey">
                    <label for="information_checkbox_12_NA_122">N/A or Don’t Know</label>
                </div>

                <h3>GEO LAT</h3>
                <textarea></textarea>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_geo_lat" placeholder="GEO Lat"></textarea>
                <!-- <input type="text" style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;" placeholder="GEO Lat"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_123" name="information_checkbox_12_NA_123"
                        value="dewey">
                    <label for="information_checkbox_12_NA_123">N/A or Don’t Know</label>
                </div>
                <h3>GEO LONG</h3>
                <textarea></textarea>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_geo_long" placeholder="GEO Long"></textarea>
                <!-- <input type="text" style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;" placeholder="GEO Long"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_124" name="information_checkbox_12_NA_124"
                        value="dewey">
                    <label for="information_checkbox_12_NA_124">N/A or Don’t Know</label>
                </div>
            </div>

            <div class="second-radio">
                <h3>CITY LIMITS</h3>
                <textarea></textarea>
                <select id="Address_select_2" name="property_address_city_limits_1">
                    <option value="yes" selected>yes</option>
                    <option value="no">no</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_126" name="information_checkbox_12_NA_126"
                        value="dewey">
                    <label for="information_checkbox_12_NA_126">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div class="second-radio">
                <h3>HISTORIC DISTRICT</h3>
                <textarea></textarea>
                <select id="Address_select_3" onchange="Address_select_3()" name="property_address_historic_district_1">
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_127" name="information_checkbox_12_NA_127"
                        value="dewey">
                    <label for="information_checkbox_12_NA_127">N/A or Don’t Know</label>
                </div>
            </div><br />
            <div id="Address_select_3_descrip" style="display: none;">
                <h3>FIRST NAME</h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_first_name_1" placeholder="First Name"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="First Name"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_128" name="information_checkbox_12_NA_128"
                        value="dewey">
                    <label for="information_checkbox_12_NA_128">N/A or Don’t Know</label>
                </div>
                <h3>LAST NAME</h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_last_name1" placeholder="Last Name"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="Last Name"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_129" name="information_checkbox_12_NA_129"
                        value="dewey">
                    <label for="information_checkbox_12_NA_129">N/A or Don’t Know</label>
                </div>
                <h3>PHONE</h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_phone1" placeholder="Phone"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="Phone"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_130" name="information_checkbox_12_NA_130"
                        value="dewey">
                    <label for="information_checkbox_12_NA_130">N/A or Don’t Know</label>
                </div>
                <h3>EMAIL</h3>
                <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                    name="property_address_email1" placeholder="Email"></textarea>
                <!-- <input type="text" style="width:100%;height: 50px;" placeholder="Email"> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_131" name="information_checkbox_12_NA_131"
                        value="dewey">
                    <label for="information_checkbox_12_NA_131">N/A or Don’t Know</label>
                </div>
            </div>

            <h3>SUBDIVISION</h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                name="property_address_SUBDIVISION" placeholder="Subdivision"></textarea>
            <!-- <input type="text" placeholder="Subdivision" style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_132" name="information_checkbox_12_NA_132"
                    value="dewey">
                <label for="information_checkbox_12_NA_132">N/A or Don’t Know</label>
            </div>

            <h3>SECONDARY SUBDIVISION</h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                name="property_address_SECONDARY_SUBDIVISION" placeholder="Secondary Subdivision"></textarea>
            <!-- <input type="text" placeholder="Secondary Subdivision"
            style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_133" name="information_checkbox_12_NA_133"
                    value="dewey">
                <label for="information_checkbox_12_NA_133">N/A or Don’t Know</label>
            </div>

            <div class="second-radio">
                <h3>HOA</h3>
                <textarea></textarea>
                <select id="Address_select_4" name="property_address_HOA_select1">
                    <option value="yes" selected>yes</option>
                    <option value="no">no</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_134" name="information_checkbox_12_NA_134"
                        value="dewey">
                    <label for="information_checkbox_12_NA_134">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3>HOA INITIATION FEE</h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                name="property_address_HOA_INITIATION_FEE_textarea" placeholder="HOA Initiation Fee"></textarea>
            <!-- <input type="text" placeholder="HOA Initiation Fee"
            style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_135" name="information_checkbox_12_NA_135"
                    value="dewey">
                <label for="information_checkbox_12_NA_135">N/A or Don’t Know</label>
            </div>

            <h3>HOA MONTHLY FEE</h3>
            <textarea></textarea>
            <textarea style="background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"
                name="property_address_HOA_MONTHLY_FEE_textarea" placeholder="HOA Monthly Fees"></textarea>
            <!-- <input type="text" placeholder="HOA Monthly Fees"
            style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_136" name="information_checkbox_12_NA_136"
                    value="dewey">
                <label for="information_checkbox_12_NA_136">N/A or Don’t Know</label>
            </div>

            <div class="second-radio">
                <h3>SCHOOL DISTRICT</h3>
                <textarea></textarea>
                <!-- <select id="Address_select_5">
                <option value="yes" selected>yes</option>
                <option value="no">no</option>
            </select> -->
            </div><br />

            <div class="second-radio">
                <h3>ELEMENTARY</h3>
                <textarea></textarea>
                <select id="Address_select_6" name="property_address_ELEMENTARY_select"
                    onchange="if(this.value == 'yes'){document.getElementById('Address_select_6_textarea').style.display='block'}else{document.getElementById('Address_select_6_textarea').style.display='none'}">
                    <!-- <select id="Address_select_6" onchange="Address_select_6()" name="property_address_ELEMENTARY_select"> -->
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <textarea id="Address_select_6_textarea" name="property_address_ELEMENTARY_textarea"
                    style="display: none; background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_137" name="information_checkbox_12_NA_137"
                        value="dewey">
                    <label for="information_checkbox_12_NA_137">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div class="second-radio">
                <h3>ELEMENTARY 2</h3>
                <textarea></textarea>
                <select id="Address_select_7" name="property_address_ELEMENTARY_2_select"
                    onchange="if(this.value == 'yes'){document.getElementById('Address_select_7_textarea').style.display='block'}else{document.getElementById('Address_select_7_textarea').style.display='none'}">
                    <!-- <select id="Address_select_7" onchange="Address_select_7()" name="property_address_ELEMENTARY_2_select"> -->
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <textarea id="Address_select_7_textarea" name="property_address_ELEMENTARY_2_textarea"
                    style="display: none; background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_138" name="information_checkbox_12_NA_138"
                        value="dewey">
                    <label for="information_checkbox_12_NA_138">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div class="second-radio">
                <h3>MIDDLE SCHOOL </h3>
                <textarea></textarea>
                <select id="Address_select_8" name="property_address_MIDDLE_SCHOOL_select"
                    onchange="if(this.value == 'yes'){document.getElementById('Address_select_8_textarea').style.display='block'}else{document.getElementById('Address_select_8_textarea').style.display='none'}">
                    <!-- <select id="Address_select_8" onchange="Address_select_8()"
                    name="property_address_MIDDLE_SCHOOL_select"> -->
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <textarea id="Address_select_8_textarea" name="property_address_MIDDLE_SCHOOL_textarea"
                    style="display: none; background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_139" name="information_checkbox_12_NA_139"
                        value="dewey">
                    <label for="information_checkbox_12_NA_139">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div class="second-radio">
                <h3>MIDDLE SCHOOL 2</h3>
                <textarea></textarea>
                <select id="Address_select_9" name="property_address_MIDDLE_SCHOOL_2_select"
                    onchange="if(this.value == 'yes'){document.getElementById('Address_select_9_textarea').style.display='block'}else{document.getElementById('Address_select_9_textarea').style.display='none'}">
                    <!-- <select id="Address_select_9" onchange="Address_select_9()"
                    name="property_address_MIDDLE_SCHOOL_2_select"> -->
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <textarea id="Address_select_9_textarea" name="property_address_MIDDLE_SCHOOL_2_textarea"
                    style="display: none; background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_14012" name="information_checkbox_12_NA_14012"
                        value="dewey">
                    <label for="information_checkbox_12_NA_14012">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div class="second-radio">
                <h3>HIGH SCHOOL</h3>
                <textarea></textarea>
                <select id="Address_select_10" name="property_address_HIGH_SCHOOL_select"
                    onchange="if(this.value == 'yes'){document.getElementById('Address_select_10_textarea').style.display='block'}else{document.getElementById('Address_select_10_textarea').style.display='none'}">
                    <!-- <select id="Address_select_10" onchange="Address_select_10()"
                    name="property_address_HIGH_SCHOOL_select"> -->
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <textarea id="Address_select_10_textarea" name="property_address_HIGH_SCHOOL_textarea"
                    style="display: none; background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_140" name="information_checkbox_12_NA_140"
                        value="dewey">
                    <label for="information_checkbox_12_NA_140">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div class="second-radio">
                <h3>HIGH SCHOOL 2</h3>
                <textarea></textarea>
                <select id="Address_select_11" name="property_address_HIGH_SCHOOL_2_select"
                    onchange="if(this.value == 'yes'){document.getElementById('Address_select_11_textarea').style.display='block'}else{document.getElementById('Address_select_11_textarea').style.display='none'}">
                    <!-- <select id="Address_select_11" onchange="Address_select_11()"
                    name="property_address_HIGH_SCHOOL_2_select"> -->
                    <option value="yes">yes</option>
                    <option value="no" selected>no</option>
                </select>
                <textarea id="Address_select_11_textarea" name="property_address_HIGH_SCHOOL_2_textarea"
                    style="display: none; background: rgb(241, 241, 120);color: black;width:100%;height: 50px;"></textarea>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_142" name="information_checkbox_12_NA_142"
                        value="dewey">
                    <label for="information_checkbox_12_NA_142">N/A or Don’t Know</label>
                </div>
            </div><br />

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(2, 'Type')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                <a onclick="go_next_section(4, 'Description')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>

        </div>


        <!-- Tab 4 -->
        <div id="Description" class="tabcontent" style="padding: 25px;">
            <h2>PROPERTY DESCRIPTION </h2>

            <h3>PROPERTY TAG LINE</h3>
            <textarea placeholder="Property Tag Line"></textarea>
            <input type="text" style="background: rgb(241, 241, 120);color: black;width:100%"
                name="PROPERTY_DESCRIPTION_PROPERTY_TAG_LINE_input">
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143" name="information_checkbox_12_NA_143"
                    value="dewey">
                <label for="information_checkbox_12_NA_143">N/A or Don’t Know</label>
            </div>

            <h3>PROPERTY DESCRIPTION</h3>
            <textarea placeholder="Property Description"></textarea>
            <input type="text" style="background: rgb(241, 241, 120);color: black;width:100%"
                name="PROPERTY_DESCRIPTION_PROPERTY_DESCRIPTION_input">
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_144" name="information_checkbox_12_NA_144"
                    value="dewey">
                <label for="information_checkbox_12_NA_144">N/A or Don’t Know</label>
            </div>

            <div class="second-radio">
                <h3>YEAR BUILT</h3>
                <textarea></textarea>
                <input type="text" style="background: rgb(241, 241, 120);color: black;width:100%"
                    name="PROPERTY_DESCRIPTION_year_built_input">

                <!-- <select id="Description_select_1">
                <option value="yes" selected>1800</option>
                <option value="no">1801</option>
                <option value="no">1802</option>
                <option value="no">....</option>
                <option value="no">2021</option>
                <option value="no">2022</option>
                <option value="no">2023</option>
            </select> -->
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_145" name="information_checkbox_12_NA_145"
                        value="dewey">
                    <label for="information_checkbox_12_NA_145">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3>CONSTRUCTION TYPE</h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_2" name="Description_select_2" value="Wood Frame" checked>
                <label for="Description_select_2">Wood Frame</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_21" name="Description_select_21" value="Masonry/Block">
                <label for="Description_select_21">Masonry/Block</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_22" name="Description_select_22" value="Concrete">
                <label for="Description_select_22">Concrete</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_23" name="Description_select_23" value="Steel Frame">
                <label for="Description_select_23">Steel Frame</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_24" name="Description_select_24" value="Brick/Stone">
                <label for="Description_select_24">Brick/Stone</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_25" name="Description_select_25" value="Log">
                <label for="Description_select_25">Log</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_26" name="Description_select_26" value="Modular">
                <label for="Description_select_26">Modular</label>
            </div>
            <div class="second-radio">
                <input type="checkbox"
                    onclick="if(this.checked){ document.getElementById('Description_select_27_textarea').style.display = 'block';}else{document.getElementById('Description_select_27_textarea').style.display = 'none';}"
                    id="Description_select_27" name="Description_select_27" value="other" />
                <!-- <input type="checkbox" id="Description_select_27" name="Description_select_27" value="other"
                    onchange="Description_select_27(this)"> -->
                <label for="Description_select_27">other</label>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Description_select_27_textarea"
                    name="Description_select_27_CONSTRUCTION_TYPE_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_146" name="information_checkbox_12_NA_146"
                    value="dewey">
                <label for="information_checkbox_12_NA_146">N/A or Don’t Know</label>
            </div>

            <!-- <select id="Description_select_2" onchange="Description_select_2_dropdownChanges3()">
                <option value="yes" selected>Wood Frame</option>
                <option value="no">Masonry/Block</option>
                <option value="no">Concrete</option>
                <option value="no">Steel Frame</option>
                <option value="no">Brick/Stone</option>
                <option value="no">Log</option>
                <option value="no">Modular</option>
                <option value="other">other</option>
            </select>
        </div><br />
        <div class="second-radio">
            <textarea id="Description_select_2_textarea"
                style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
        </div><br /> -->

            <h3>FOUNDATION TYPE</h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3" name="Description_select_3" value="Block" checked>
                <label for="Description_select_3">Block</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_31" name="Description_select_31" value="Crawl Space">
                <label for="Description_select_31">Crawl Space</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_32" name="Description_select_32" value="Pilings">
                <label for="Description_select_32">Pilings</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_33" name="Description_select_33" value="Slab">
                <label for="Description_select_33">Slab</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_34" name="Description_select_34" value="Brick & Mortar">
                <label for="Description_select_34">Brick & Mortar</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_35" name="Description_select_35" value="ICF">
                <label for="Description_select_35">ICF</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_36" name="Description_select_36" value="Concrete">
                <label for="Description_select_36">Concrete</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_37" name="Description_select_37" value="Raised">
                <label for="Description_select_37">Raised</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_38" name="Description_select_38" value="Walkout">
                <label for="Description_select_38">Walkout</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_39" name="Description_select_39" value="Permanent">
                <label for="Description_select_39">Permanent</label>
            </div>
            <div class="second-radio">
                <input type="checkbox"
                    onclick="if(this.checked){ document.getElementById('Description_select_310_textarea').style.display = 'block';}else{document.getElementById('Description_select_310_textarea').style.display = 'none';}"
                    id="Description_select_310" name="Description_select_310" value="other" />
                <!-- <input type="checkbox" id="Description_select_310" name="Description_select_310" value="other"
                    onchange="Description_select_310(this)"> -->
                <label for="Description_select_310">other</label>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Description_select_310_textarea"
                    name="Description_select_310_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_147" name="information_checkbox_12_NA_147"
                    value="dewey">
                <label for="information_checkbox_12_NA_147">N/A or Don’t Know</label>
            </div>

            <!-- <select id="Description_select_3" onchange="Description_select_3_dropdownChanges4()">
                <option value="yes" selected>Block</option>
                <option value="no">Crawl Space</option>
                <option value="no">Pilings</option>
                <option value="no">Slab</option>
                <option value="no">Brick & Mortar</option>
                <option value="no">ICF</option>
                <option value="no">Concrete</option>
                <option value="no">Raised</option>
                <option value="no">Walkout</option>
                <option value="no">Permanent</option>
                <option value="other">other</option>
            </select>
        </div><br />
        <div class="second-radio">
            <textarea id="Description_select_3_textarea2"
                style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
        </div><br /> -->

            <h3>LOT ACRES</h3>
            <textarea></textarea>
            <textarea placeholder="Lot Acres" style="background: rgb(241, 241, 120);color: black;width:100%"
                name="Description_select_LOT_ACRES_textarea"> </textarea>
            <!-- <input type="text" placeholder="Lot Acres" style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_148" name="information_checkbox_12_NA_148"
                    value="dewey">
                <label for="information_checkbox_12_NA_148">N/A or Don’t Know</label>
            </div>

            <h3>LOT SQUARE FOOTAGE</h3>
            <textarea></textarea>
            <textarea placeholder="Lot Square Footage" name="Description_select_LOT_SQUARE_FOOTAGE_textarea"
                style="background: rgb(241, 241, 120);color: black;width:100%"></textarea>
            <!-- <input type="text" placeholder="Lot Square Footage"
            style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_149" name="information_checkbox_12_NA_149"
                    value="dewey">
                <label for="information_checkbox_12_NA_149">N/A or Don’t Know</label>
            </div>

            <h3>LOT DIMENTIONS</h3>
            <textarea></textarea>
            <textarea placeholder="Lot Dimensions" name="Description_select_LOT_DIMENTIONS_textarea"
                style="background: rgb(241, 241, 120);color: black;width:100%"></textarea>
            <!-- <input type="text" placeholder="Lot Dimensions" style="background: rgb(241, 241, 120);color: black;width:100%"> -->
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_150" name="information_checkbox_12_NA_150"
                    value="dewey">
                <label for="information_checkbox_12_NA_150">N/A or Don’t Know</label>
            </div>

            <h3>ROOM DIMENSIONS</h3>
            <textarea></textarea>
            <h4>KITCHEN</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_KITCHEN_length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_KITCHEN_width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_002" name="information_checkbox_12_NA_143_002"
                    value="dewey">
                <label for="information_checkbox_12_NA_143_002">N/A or Don’t Know</label>
            </div>
            <h4>DINING ROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_DINING_ROOM_length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_DINING_ROOM_width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_1"
                    name="information_checkbox_12_NA_143_001_1" value="dewey">
                <label for="information_checkbox_12_NA_143_001_1">N/A or Don’t Know</label>
            </div>
            <h4>LIVING ROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_LIVING_ROOM_length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_LIVING_ROOM_width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_2"
                    name="information_checkbox_12_NA_143_001_2" value="dewey">
                <label for="information_checkbox_12_NA_143_001_2">N/A or Don’t Know</label>
            </div>
            <h4>FAMILY ROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_FAMILY_ROOM_width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_FAMILY_ROOM_width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_3"
                    name="information_checkbox_12_NA_143_001_3" value="dewey">
                <label for="information_checkbox_12_NA_143_001_3">N/A or Don’t Know</label>
            </div>
            <h4> PANTRY</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_PANTRY_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_PANTRY_width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_4"
                    name="information_checkbox_12_NA_143_001_4" value="dewey">
                <label for="information_checkbox_12_NA_143_001_4">N/A or Don’t Know</label>
            </div>
            <h4>MUDROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_MUDROOM_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_MUDROOM_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_5"
                    name="information_checkbox_12_NA_143_001_5" value="dewey">
                <label for="information_checkbox_12_NA_143_001_5">N/A or Don’t Know</label>
            </div>
            <h4>OFFICE</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_OFFICE_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_OFFICE_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_6"
                    name="information_checkbox_12_NA_143_001_6" value="dewey">
                <label for="information_checkbox_12_NA_143_001_6">N/A or Don’t Know</label>
            </div>
            <h4>½ BATH</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_1_2_BATH_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_1_2_BATH_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_7"
                    name="information_checkbox_12_NA_143_001_7" value="dewey">
                <label for="information_checkbox_12_NA_143_001_7">N/A or Don’t Know</label>
            </div>
            <h4>GARAGE</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_GARAGE_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_GARAGE_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_8"
                    name="information_checkbox_12_NA_143_001_8" value="dewey">
                <label for="information_checkbox_12_NA_143_001_8">N/A or Don’t Know</label>
            </div>
            <h4>CARPORT</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_CARPORT_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_CARPORT_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_9"
                    name="information_checkbox_12_NA_143_001_9" value="dewey">
                <label for="information_checkbox_12_NA_143_001_9">N/A or Don’t Know</label>
            </div>
            <h4>PATIO</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_PATIO_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_PATIO_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_1"
                    name="information_checkbox_12_NA_143_001_n_1" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_1">N/A or Don’t Know</label>
            </div>
            <h4>DECK</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_DECK_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_DECK_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_2"
                    name="information_checkbox_12_NA_143_001_n_2" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_2">N/A or Don’t Know</label>
            </div>
            <h4>MEDIA ROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_MEDIA_ROOM_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_MEDIA_ROOM_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_3"
                    name="information_checkbox_12_NA_143_001_n_3" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_3">N/A or Don’t Know</label>
            </div>
            <h4>BONUS ROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BONUS_ROOM_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BONUS_ROOM_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_4"
                    name="information_checkbox_12_NA_143_001_n_4" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_4">N/A or Don’t Know</label>
            </div>
            <h4>MASTER BEDROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_MASTER_BEDROOM_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_MASTER_BEDROOM_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_5"
                    name="information_checkbox_12_NA_143_001_n_5" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_5">N/A or Don’t Know</label>
            </div>
            <h4>MASTER BATHROOM</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_MASTER_BATHROOM_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_MASTER_BATHROOM_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_6"
                    name="information_checkbox_12_NA_143_001_n_6" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_6">N/A or Don’t Know</label>
            </div>
            <h4>MASTER CLOSET</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_MASTER_CLOSET_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_MASTER_CLOSET_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_7"
                    name="information_checkbox_12_NA_143_001_n_7" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_7">N/A or Don’t Know</label>
            </div>
            <h4>BEDROOM 1</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BEDROOM_1_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BEDROOM_1_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_8"
                    name="information_checkbox_12_NA_143_001_n_8" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_8">N/A or Don’t Know</label>
            </div>
            <h4>CLOSET 1</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_CLOSET_1_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_CLOSET_1_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_n_9"
                    name="information_checkbox_12_NA_143_001_n_9" value="dewey">
                <label for="information_checkbox_12_NA_143_001_n_9">N/A or Don’t Know</label>
            </div>
            <h4>BEDROOM 2</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BEDROOM_2_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BEDROOM_2_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_1"
                    name="information_checkbox_12_NA_143_001_m_1" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_1">N/A or Don’t Know</label>
            </div>
            <h4>CLOSET 2</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_CLOSET_2_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_CLOSET_2_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_2"
                    name="information_checkbox_12_NA_143_001_m_2" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_2">N/A or Don’t Know</label>
            </div>
            <h4>BEDROOM 3</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BEDROOM_3_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BEDROOM_3_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_3"
                    name="information_checkbox_12_NA_143_001_m_3" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_3">N/A or Don’t Know</label>
            </div>
            <h4>CLOSET 3</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_CLOSET_3_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_CLOSET_3_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_4"
                    name="information_checkbox_12_NA_143_001_m_4" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_4">N/A or Don’t Know</label>
            </div>
            <h4>BATHROOM 1</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BATHROOM_1_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BATHROOM_1_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_5"
                    name="information_checkbox_12_NA_143_001_m_5" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_5">N/A or Don’t Know</label>
            </div>
            <h4>BATHROOM 2</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BATHROOM_2_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BATHROOM_2_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_6"
                    name="information_checkbox_12_NA_143_001_m_6" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_6">N/A or Don’t Know</label>
            </div>
            <h4>BATHROOM 3</h4>
            <div style="display: flex;">
                <input type="text" placeholder="Length" name="Description_select_BATHROOM_3_Length_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
                <span>x</span>
                <input type="text" placeholder="Width" name="Description_select_BATHROOM_3_Width_input"
                    style="background:  rgb(241, 241, 120);color: black;width:100%">
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_7"
                    name="information_checkbox_12_NA_143_001_m_7" value="dewey">
                <label for="information_checkbox_12_NA_143_001_m_7">N/A or Don’t Know</label>
            </div>
            <div class="second-radio">
                <input type="checkbox"
                    onclick="if(this.checked){ document.getElementById('description_select_3_checkbox123_other_div').style.display = 'block';}else{document.getElementById('description_select_3_checkbox123_other_div').style.display = 'none';}"
                    id="description_select_3_checkbox123_other" name="description_select_3_checkbox123_other"
                    value="Other" />
                <!-- <input type="checkbox" onclick="description_select_3_checkbox123_other(this)"
                    id="description_select_3_checkbox123_other" > -->
                <label for="description_select_3_checkbox123_other">Other</label>
            </div>
            <div style="display:none;" id="description_select_3_checkbox123_other_div">
                <h4>OTHER</h4>
                <div style="margin-right: 13px;">
                    <input type="text" placeholder="Describe Other Here" name="Description_select_OTHER_1_description"
                        style="background:  rgb(241, 241, 120);color: black;width:100%">
                </div>
                <div style="display: flex;">
                    <input type="text" placeholder="Length" name="Description_select_OTHER_1_Length_input"
                        style="background:  rgb(241, 241, 120);color: black;width:100%">
                    <span>x</span>
                    <input type="text" placeholder="Width" name="Description_select_OTHER_1_Width_input"
                        style="background:  rgb(241, 241, 120);color: black;width:100%">
                </div>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_143_001_m_8"
                    name="information_checkbox_12_NA_143_001_m_8" value="N/A or Don’t Know">
                <label for="information_checkbox_12_NA_143_001_m_8">N/A or Don’t Know</label>
            </div>
            <div id="add_more_room_div" style="margin-top: 10px;">
                <a onclick="add_more_room_size()" class="control-button-style"><span style="color: white;">ADD
                    </span></a>
            </div>


            <h3><b>PARKING</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123" name="Description_select_3_checkbox123"
                    value="Off Street" checked>
                <label for="Description_select_3_checkbox123">Off Street</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12321" name="Description_select_3_checkbox12321"
                    value="On Street">
                <label for="Description_select_3_checkbox12321">On Street</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12322" name="Description_select_3_checkbox12322"
                    value="Alley">
                <label for="Description_select_3_checkbox12322">Alley</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12323" name="Description_select_3_checkbox12323"
                    value="No Frontage">
                <label for="Description_select_3_checkbox12323">No Frontage</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12324" name="Description_select_3_checkbox12324"
                    value="Public, City, State">
                <label for="Description_select_3_checkbox12324">Public, City, State</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12325" name="Description_select_3_checkbox12325"
                    value="Assigned">
                <label for="Description_select_3_checkbox12325">Assigned</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12326" name="Description_select_3_checkbox12326"
                    value="Lighted">
                <label for="Description_select_3_checkbox12326">Lighted</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12327" name="Description_select_3_checkbox12327"
                    value="Security">
                <label for="Description_select_3_checkbox12327">Security</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12328" name="Description_select_3_checkbox12328"
                    value="Unpaved">
                <label for="Description_select_3_checkbox12328">Unpaved</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12329" name="Description_select_3_checkbox12329"
                    value="Dirt">
                <label for="Description_select_3_checkbox12329">Dirt</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123211"
                    name="Description_select_3_checkbox123211" value="Paved">
                <label for="Description_select_3_checkbox123211">Paved</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123212"
                    name="Description_select_3_checkbox123212" value="On Street">
                <label for="Description_select_3_checkbox123212">On Street</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123213"
                    name="Description_select_3_checkbox123213" value="Shared">
                <label for="Description_select_3_checkbox123213">Shared</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123214"
                    name="Description_select_3_checkbox123214" value="Underground">
                <label for="Description_select_3_checkbox123214">Underground</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123215"
                    name="Description_select_3_checkbox123215" value="Carport">
                <label for="Description_select_3_checkbox123215">Carport</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123216"
                    name="Description_select_3_checkbox123216" value="Circular">
                <label for="Description_select_3_checkbox123216">Circular</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123217"
                    name="Description_select_3_checkbox123217" value="None">
                <label for="Description_select_3_checkbox123217">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" onclick="Description_checkbox_2221_otherCheckbox(this)"
                    id="Description_select_3_checkbox123218" name="Description_select_3_checkbox123218" value="Other">
                <label for="Description_select_3_checkbox123218">Other</label>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Description_select_3_checkbox123218_textarea"
                    name="Description_select_3_checkbox123218_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_151" name="information_checkbox_12_NA_151"
                    value="dewey">
                <label for="information_checkbox_12_NA_151">N/A or Don’t Know</label>
            </div>

            <h3><b>RV/BOAT PARKING</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select
                    onchange="if(this.value =='yes'){document.getElementById('Description_select_512_dropdownChanges_textarea').style.display='block'}else{document.getElementById('Description_select_512_dropdownChanges_textarea').style.display='none'}"
                    id="Description_select_512_dropdownChanges" name="Description_select_512_dropdownChanges">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Description_select_512_dropdownChanges_textarea"
                    name="Description_select_512_dropdownChanges_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_152" name="information_checkbox_12_NA_152"
                    value="dewey">
                <label for="information_checkbox_12_NA_152">N/A or Don’t Know</label>
            </div>

            <h3><b>PARKING MAINTENANCE</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox123123"
                    name="Description_select_3_checkbox123123" value="Maintained" checked>
                <label for="Description_select_3_checkbox123123">Maintained</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12321ttt"
                    name="Description_select_3_checkbox12321ttt" value="Not Maintained">
                <label for="Description_select_3_checkbox12321ttt">Not Maintained</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12322_private"
                    name="Description_select_3_checkbox12322_private" value="Private">
                <label for="Description_select_3_checkbox12322_private">Private</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_3_checkbox12323123"
                    name="Description_select_3_checkbox12323123" value="Unpaved">
                <label for="Description_select_3_checkbox12323123">Unpaved</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" onclick="Description_checkbox_1232221_otherCheckbox(this)"
                    id="Description_select_3_checkbox123218123" name="Description_select_3_checkbox123218"
                    value="Other">
                <label for="Description_select_3_checkbox123218123">Other</label>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Description_select_3_checkbox123218_textarea123"
                    name="Description_select_3_checkbox123218_textarea123"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_153" name="information_checkbox_12_NA_153"
                    value="dewey">
                <label for="information_checkbox_12_NA_153">N/A or Don’t Know</label>
            </div>

            <h3><b>TRASH</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_4_checkbox123123"
                    name="Description_select_4_checkbox123123" value="Community Trash Removal" checked>
                <label for="Description_select_4_checkbox123123">Community Trash Removal</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_4_checkbox12321123"
                    name="Description_select_4_checkbox12321123" value="No Trash Removal">
                <label for="Description_select_4_checkbox12321123">No Trash Removal</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_4_checkbox12322123"
                    name="Description_select_4_checkbox12322123" value="Supply Your Can">
                <label for="Description_select_4_checkbox12322123">Supply Your Can</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_4_checkbox12323123"
                    name="Description_select_4_checkbox12323123" value="Can Supplied">
                <label for="Description_select_4_checkbox12323123">Can Supplied</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_4_checkbox12323123_recycling"
                    name="Description_select_4_checkbox12323123_recycling" value="Recycling">
                <label for="Description_select_4_checkbox12323123_recycling">Recycling</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Description_select_4_checkbox123218123"
                    name="Description_select_4_checkbox123218123" value="Other"
                    onclick="if(this.checked){ document.getElementById('Description_select_4_checkbox123218_textarea123').style.display = 'block';}else{document.getElementById('Description_select_4_checkbox123218_textarea123').style.display = 'none';}" />
                <!-- <input type="checkbox" onclick="Description_select_4_checkbox123218123(this)"
                    id="Description_select_4_checkbox123218123" name="Description_select_4_checkbox123218123"
                    value="Other"> -->
                <label for="Description_select_4_checkbox123218123">Other</label>
            </div>
            <div class="second-radio">
                <textarea placeholder="Input information here" id="Description_select_4_checkbox123218_textarea123"
                    name="Description_select_4_checkbox123218_textarea123"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_154" name="information_checkbox_12_NA_154"
                    value="dewey">
                <label for="information_checkbox_12_NA_154">N/A or Don’t Know</label>
            </div>

            <h3><b>HANDICAP ACCESSIBLE</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_HANDICAP_ACCESSIBLE">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_155" name="information_checkbox_12_NA_155"
                        value="dewey">
                    <label for="information_checkbox_12_NA_155">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>RAMP</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_RAMP_1">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_156" name="information_checkbox_12_NA_156"
                        value="dewey">
                    <label for="information_checkbox_12_NA_156">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>ACCESSIBLE ENTRANCE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_ACCESSIBLE_ENTRANCE">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_157" name="information_checkbox_12_NA_157"
                        value="dewey">
                    <label for="information_checkbox_12_NA_157">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>BATHROOM </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_BATHROOM_123">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_158" name="information_checkbox_12_NA_158"
                        value="dewey">
                    <label for="information_checkbox_12_NA_158">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>ELEVATOR </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_ELEVATOR_123">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_159" name="information_checkbox_12_NA_159"
                        value="dewey">
                    <label for="information_checkbox_12_NA_159">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>HALLWAYS </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_HALLWAYS_123">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_160" name="information_checkbox_12_NA_160"
                        value="dewey">
                    <label for="information_checkbox_12_NA_160">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>KITCHEN </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_KITCHEN_123">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_161" name="information_checkbox_12_NA_161"
                        value="dewey">
                    <label for="information_checkbox_12_NA_161">N/A or Don’t Know</label>
                </div>
            </div>

            <!-- ============================== -->
            <h3><b>WATERFRONT </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="Description_select_4_WATERFRONT_123">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_162" name="information_checkbox_12_NA_162"
                        value="dewey">
                    <label for="information_checkbox_12_NA_162">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>WATER ACCESS </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select id="other_sec_description_sele_1" name="Description_select_4_WATER_ACCESS_123"
                    onchange="if(this.value == 'yes'){document.getElementById('other_sec_description_div_1').style.display='block'}else{document.getElementById('other_sec_description_div_1').style.display='none'}">
                    <!-- <select id="other_sec_description_sele_1" onchange="other_sec_description_sele_1()"
                    name="Description_select_4_WATER_ACCESS_123"> -->
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div style="display: none;" id="other_sec_description_div_1">
                <div class="second-radio">
                    <input type="checkbox" id="other_sec_description_check_1" name="other_sec_description_check_1"
                        value="Boat Dock" checked>
                    <label for="other_sec_description_check_1">Boat Dock</label>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="other_sec_description_check_11" name="other_sec_description_check_11"
                        value="Boat Ramp">
                    <label for="other_sec_description_check_11">Boat Ramp</label>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="other_sec_description_check_12" name="other_sec_description_check_12"
                        value="Bulkhead">
                    <label for="other_sec_description_check_12">Bulkhead</label>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="other_sec_description_check_13" name="other_sec_description_check_13"
                        value="Boat Lift">
                    <label for="other_sec_description_check_13">Boat Lift</label>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="other_sec_description_check_14" name="other_sec_description_check_14"
                        value="Boat Slip">
                    <label for="other_sec_description_check_14">Boat Slip</label>
                </div>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_163" name="information_checkbox_12_NA_163"
                    value="dewey">
                <label for="information_checkbox_12_NA_163">N/A or Don’t Know</label>
            </div>

            <h3><b>WATERVIEW </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_2" name="other_sec_description_check_2"
                    value="Canal View" checked>
                <label for="other_sec_description_check_2">Canal View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_21" name="other_sec_description_check_21"
                    value="Creek Front">
                <label for="other_sec_description_check_21">Creek Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_22" name="other_sec_description_check_22"
                    value="Deeded Beach Access">
                <label for="other_sec_description_check_22">Deeded Beach Access</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_23" name="other_sec_description_check_23"
                    value="Deeded Water Rights">
                <label for="other_sec_description_check_23">Deeded Water Rights</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_24" name="other_sec_description_check_24"
                    value="Harbor">
                <label for="other_sec_description_check_24">Harbor</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_25" name="other_sec_description_check_25"
                    value="ICW View">
                <label for="other_sec_description_check_25">ICW View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_26" name="other_sec_description_check_26"
                    value="Lake View">
                <label for="other_sec_description_check_26">Lake View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_27" name="other_sec_description_check_27"
                    value="Marina View">
                <label for="other_sec_description_check_27">Marina View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_28" name="other_sec_description_check_28"
                    value="Marsh View">
                <label for="other_sec_description_check_28">Marsh View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_29" name="other_sec_description_check_29"
                    value="Ocean View">
                <label for="other_sec_description_check_29">Ocean View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_210" name="other_sec_description_check_210"
                    value="Partial Ocean View">
                <label for="other_sec_description_check_210">Partial Ocean View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_211" name="other_sec_description_check_211"
                    value="Pond Front">
                <label for="other_sec_description_check_211">Pond Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_212" name="other_sec_description_check_212"
                    value="River Front">
                <label for="other_sec_description_check_212">River Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_213" name="other_sec_description_check_213"
                    value="Sailboat Access">
                <label for="other_sec_description_check_213">Sailboat Access</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_214" name="other_sec_description_check_214"
                    value="Canal Front">
                <label for="other_sec_description_check_214">Canal Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_215" name="other_sec_description_check_215"
                    value="Cove">
                <label for="other_sec_description_check_215">Cove</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_216" name="other_sec_description_check_216"
                    value="Creek View">
                <label for="other_sec_description_check_216">Creek View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_217" name="other_sec_description_check_217"
                    value="Deeded Water Access">
                <label for="other_sec_description_check_217">Deeded Water Access</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_218" name="other_sec_description_check_218"
                    value="Deeded Waterfront">
                <label for="other_sec_description_check_218">Deeded Waterfront</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_219" name="other_sec_description_check_219"
                    value="ICW Front">
                <label for="other_sec_description_check_219">ICW Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_220" name="other_sec_description_check_220"
                    value="Lake Front">
                <label for="other_sec_description_check_220">Lake Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_221" name="other_sec_description_check_221"
                    value="Marina Front">
                <label for="other_sec_description_check_221">Marina Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_222" name="other_sec_description_check_222"
                    value="Ocean Front">
                <label for="other_sec_description_check_222">Ocean Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_223" name="other_sec_description_check_223"
                    value="Ocean View">
                <label for="other_sec_description_check_223">Ocean View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_224" name="other_sec_description_check_224"
                    value="Pond View">
                <label for="other_sec_description_check_224">Pond View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_225" name="other_sec_description_check_225"
                    value="River View">
                <label for="other_sec_description_check_225">River View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_226" name="other_sec_description_check_226"
                    value="Salt Marsh">
                <label for="other_sec_description_check_226">Salt Marsh</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_227" name="other_sec_description_check_227"
                    value="South Front">
                <label for="other_sec_description_check_227">South Front</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_228" name="other_sec_description_check_228"
                    value="Sound View">
                <label for="other_sec_description_check_228">Sound View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_229" name="other_sec_description_check_229"
                    value="Water Access Community">
                <label for="other_sec_description_check_229">Water Access Community</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_230" name="other_sec_description_check_230"
                    value="Water View">
                <label for="other_sec_description_check_230">Water View</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_231" name="other_sec_description_check_231"
                    value="First Row">
                <label for="other_sec_description_check_231">First Row</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_232" name="other_sec_description_check_232"
                    value="Second Row">
                <label for="other_sec_description_check_232">Second Row </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_233" name="other_sec_description_check_233"
                    value="Third Row">
                <label for="other_sec_description_check_233">Third Row </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_234" name="other_sec_description_check_234"
                    value="Southside">
                <label for="other_sec_description_check_234">Southside </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_235" name="other_sec_description_check_235"
                    value="Water Depth 4+">
                <label for="other_sec_description_check_235">Water Depth 4+ </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_236" name="other_sec_description_check_236"
                    value="Waterfront Community">
                <label for="other_sec_description_check_236">Waterfront Community </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_237" name="other_sec_description_check_237"
                    value="None">
                <label for="other_sec_description_check_237">None </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_164" name="information_checkbox_12_NA_164"
                    value="dewey">
                <label for="information_checkbox_12_NA_164">N/A or Don’t Know</label>
            </div>

            <h3><b>COBRA ZONE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="other_sec_description_COBRA_ZONE_select">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_165" name="information_checkbox_12_NA_165"
                        value="dewey">
                    <label for="information_checkbox_12_NA_165">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>FEDERAL FLOOD INSURANCE AVAILBLE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="other_sec_description_FEDERAL_FLOOD_INSURANCE_AVAILBLE_select">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_166" name="information_checkbox_12_NA_166"
                        value="dewey">
                    <label for="information_checkbox_12_NA_166">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>PROPERTY LOCATION </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select name="other_sec_description_PROPERTY_LOCATION_select">
                    <option value="Island ">Island </option>
                    <option value="Mainland" selected>Mainland</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_167" name="information_checkbox_12_NA_167"
                        value="dewey">
                    <label for="information_checkbox_12_NA_167">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>FLOOD ZONE TYPE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_3" name="other_sec_description_check_3"
                    value="ZONE A" checked>
                <label for="other_sec_description_check_3">ZONE A</label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_A_1"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_31" name="other_sec_description_check_31"
                    value="ZONE AE, A1-30">
                <label for="other_sec_description_check_31">ZONE AE, A1-30</label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_AE_A1_30_1"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_32" name="other_sec_description_check_32"
                    value="ZONE AH">
                <label for="other_sec_description_check_32">ZONE AH </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_AH_1"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_33" name="other_sec_description_check_33"
                    value="ZONE AO">
                <label for="other_sec_description_check_33">ZONE AO </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_AO_123"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_34" name="other_sec_description_check_34"
                    value="ZONE AR">
                <label for="other_sec_description_check_34">ZONE AR </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_AR_123"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_35" name="other_sec_description_check_35"
                    value="ZONE A99">
                <label for="other_sec_description_check_35">ZONE A99 </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_A999"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_36" name="other_sec_description_check_36"
                    value="ZONE V">
                <label for="other_sec_description_check_36">ZONE V </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_V_111"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_37" name="other_sec_description_check_37"
                    value="ZONE VE, V1-30">
                <label for="other_sec_description_check_37">ZONE VE, V1-30 </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_VE_V1_30"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_38" name="other_sec_description_check_38"
                    value="Zone X Shaded">
                <label for="other_sec_description_check_38">Zone X Shaded </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_X_shaded"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_39" name="other_sec_description_check_39"
                    value="Moderate-risk zones ">
                <label for="other_sec_description_check_39">Moderate-risk zones </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_Moderate_risk"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_310" name="other_sec_description_check_310"
                    value="Zone X Unshaded">
                <label for="other_sec_description_check_310">Zone X Unshaded </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_X_Unshaded"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_311" name="other_sec_description_check_311"
                    value="Low-risk zones">
                <label for="other_sec_description_check_311"> Low-risk zones </label>
            </div>
            <textarea style="background: rgb(241, 241, 120);color: black;"
                name="other_sec_description_ZONE_Low_risk_z"></textarea>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_168" name="information_checkbox_12_NA_168"
                    value="dewey">
                <label for="information_checkbox_12_NA_168">N/A or Don’t Know</label>
            </div>
            <!-- <div class="second-radio">
            <input type="checkbox" id="other_sec_description_check_38" name="other_sec_description_check_38"
                value="huey">
            <label for="other_sec_description_check_38">Zone </label>
        </div>
        <div class="second-radio">
            <input type="checkbox" id="other_sec_description_check_39" name="other_sec_description_check_39"
                value="huey">
            <label for="other_sec_description_check_39">Zone </label>
        </div>
        <div class="second-radio">
            <input type="checkbox" id="other_sec_description_check_310" name="other_sec_description_check_310"
                value="huey">
            <label for="other_sec_description_check_310">Zone </label>
        </div>
        <div class="second-radio">
            <input type="checkbox" id="other_sec_description_check_311" name="other_sec_description_check_311"
                value="huey">
            <label for="other_sec_description_check_311">Zone </label>
        </div>
        <div class="second-radio">
            <input type="checkbox" id="other_sec_description_check_312" name="other_sec_description_check_312"
                value="huey">
            <label for="other_sec_description_check_312">Zone </label>
        </div> -->

            <div class="second-radio">
                <h3>SQUARE FOOTAGE HEATED</h3>
                <textarea></textarea>
                <input type="text" placeholder="Square Footage Heated"
                    name="other_sec_description_SQUARE_FOOTAGE_HEATED"
                    style="background: rgb(241, 241, 120);color: black;width:100%">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_169" name="information_checkbox_12_NA_169"
                        value="dewey">
                    <label for="information_checkbox_12_NA_169">N/A or Don’t Know</label>
                </div>

                <h3>SQUARE FOOTAGE SEPARATE</h3>
                <textarea></textarea>
                <input type="text" placeholder="Square Footage Separate"
                    name="other_sec_description_SQUARE_FOOTAGE_SEPARATE"
                    style="background: rgb(241, 241, 120);color: black;width:100%">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_170" name="information_checkbox_12_NA_170"
                        value="dewey">
                    <label for="information_checkbox_12_NA_170">N/A or Don’t Know</label>
                </div>

            </div><br />

            <h3><b>PROPERTY LEVELS </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_4" name="other_sec_description_check_4"
                    value="One" checked>
                <label for="other_sec_description_check_4">One</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_41" name="other_sec_description_check_41"
                    value="Two">
                <label for="other_sec_description_check_41">Two</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_42" name="other_sec_description_check_42"
                    value="Three">
                <label for="other_sec_description_check_42">Three </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_43" name="other_sec_description_check_43"
                    value="4 stories or more">
                <label for="other_sec_description_check_43">4 stories or more </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_44" name="other_sec_description_check_44"
                    value="One & Half">
                <label for="other_sec_description_check_44">One & Half </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_45" name="other_sec_description_check_45"
                    value="1st Floor Unit">
                <label for="other_sec_description_check_45">1st Floor Unit </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_46" name="other_sec_description_check_46"
                    value="2nd Floor Unit">
                <label for="other_sec_description_check_46">2nd Floor Unit </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_47" name="other_sec_description_check_47"
                    value="3rd Floor Unit">
                <label for="other_sec_description_check_47">3rd Floor Unit </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_48" name="other_sec_description_check_48"
                    value="4th or other Floor unit">
                <label for="other_sec_description_check_48">4th or other Floor unit </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_49" name="other_sec_description_check_49"
                    value="Basement">
                <label for="other_sec_description_check_49">Basement </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_410" name="other_sec_description_check_410"
                    value="End Unit">
                <label for="other_sec_description_check_410">End Unit </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_411" name="other_sec_description_check_411"
                    value="Middle Unit">
                <label for="other_sec_description_check_411">Middle Unit </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_412" name="other_sec_description_check_412"
                    value="other"
                    onclick="if(this.checked){ document.getElementById('other_sec_description_check_412_textarea').style.display = 'block';}else{document.getElementById('other_sec_description_check_412_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="other_sec_description_check_412" name="other_sec_description_check_412"
                    value="huey" onclick="other_sec_description_check_412(this)"> -->
                <label for="other_sec_description_check_412">other </label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="other_sec_description_check_412_textarea"
                    name="other_sec_description_check_412_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_171" name="information_checkbox_12_NA_171"
                    value="dewey">
                <label for="information_checkbox_12_NA_171">N/A or Don’t Know</label>
            </div>

            <h3><b>BASEMENT </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_5" name="other_sec_description_check_5"
                    value="Dirt" checked>
                <label for="other_sec_description_check_5">Dirt</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_51" name="other_sec_description_check_51"
                    value="Not Finished">
                <label for="other_sec_description_check_51">Not Finished</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_52" name="other_sec_description_check_52"
                    value="Finished Full">
                <label for="other_sec_description_check_52">Finished Full </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_53" name="other_sec_description_check_53"
                    value="Finished Partial ">
                <label for="other_sec_description_check_53">Finished Partial </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_54" name="other_sec_description_check_54"
                    value="Outside Entrance">
                <label for="other_sec_description_check_54">Outside Entrance </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_55" name="other_sec_description_check_55"
                    value="None">
                <label for="other_sec_description_check_55">None </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_56" name="other_sec_description_check_56"
                    value="other"
                    onclick="if(this.checked){ document.getElementById('other_sec_description_check_56_textarea').style.display = 'block';}else{document.getElementById('other_sec_description_check_56_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="other_sec_description_check_56" name="other_sec_description_check_56"
                    onclick="other_sec_description_check_56(this)" value="huey"> -->
                <label for="other_sec_description_check_56">Other </label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="other_sec_description_check_56_textarea"
                    name="other_sec_description_check_56_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_172" name="information_checkbox_12_NA_172"
                    value="dewey">
                <label for="information_checkbox_12_NA_172">N/A or Don’t Know</label>
            </div>

            <div class="second-radio">
                <h3># OF ROOMS</h3>
                <textarea></textarea>
                <input type="text" placeholder="# of rooms" name="other_sec_description_OF_ROOMS_123"
                    style="background: rgb(241, 241, 120);color: black;width:100%">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_173" name="information_checkbox_12_NA_173"
                        value="dewey">
                    <label for="information_checkbox_12_NA_173">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3><b>GARAGE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select id="other_sec_description_check_6_select_1" name="other_sec_description_check_6_select_1_GARAGE"
                    onchange="if(this.value =='yes'){document.getElementById('other_sec_description_check_6_select_2').style.display='block'}else{document.getElementById('other_sec_description_check_6_select_2').style.display='none'}">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio" id="other_sec_description_check_6_select_2" style="display: none;">
                <select name="other_sec_description_check_6_select_1_GARAGE_select_garage">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>
                    <option value="3.5">3.5</option>
                    <option value="4">4</option>
                    <option value="4.5">4.5</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_174" name="information_checkbox_12_NA_174"
                    value="dewey">
                <label for="information_checkbox_12_NA_174">N/A or Don’t Know</label>
            </div>

            <h3><b>CARPORT </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select id="other_sec_description_check_7_select_1" name="other_sec_description_check_7_select_1"
                    onchange="if(this.value =='yes'){document.getElementById('other_sec_description_check_7_select_2').style.display='block'}else{document.getElementById('other_sec_description_check_7_select_2').style.display='none'}">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio" id="other_sec_description_check_7_select_2" style="display: none;">
                <select name="other_sec_description_check_7_select_1_CARPORT_garage">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>
                    <option value="3.5">3.5</option>
                    <option value="4">4</option>
                    <option value="4.5">4.5</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_175" name="information_checkbox_12_NA_175"
                    value="dewey">
                <label for="information_checkbox_12_NA_175">N/A or Don’t Know</label>
            </div>

            <h3><b>PORCH / BALCONY / DECK </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_8" name="other_sec_description_check_8"
                    value="Balcony" checked>
                <label for="other_sec_description_check_8">Balcony</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_81" name="other_sec_description_check_81"
                    value="Deck">
                <label for="other_sec_description_check_81">Deck</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_82" name="other_sec_description_check_82"
                    value="Porch">
                <label for="other_sec_description_check_82">Porch </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_83" name="other_sec_description_check_83"
                    value="Concrete">
                <label for="other_sec_description_check_83">Concrete </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_84" name="other_sec_description_check_84"
                    value="Patio">
                <label for="other_sec_description_check_84">Patio </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_85" name="other_sec_description_check_85"
                    value="Screened">
                <label for="other_sec_description_check_85">Screened </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_86" name="other_sec_description_check_86"
                    value="Enclosed">
                <label for="other_sec_description_check_86">Enclosed </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_87" name="other_sec_description_check_87"
                    value="Open">
                <label for="other_sec_description_check_87">Open </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_88" name="other_sec_description_check_88"
                    value="Covered">
                <label for="other_sec_description_check_88">Covered </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_89" name="other_sec_description_check_89"
                    value="None">
                <label for="other_sec_description_check_89">None </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_810" name="other_sec_description_check_810"
                    value="Other"
                    onclick="if(this.checked){ document.getElementById('other_sec_description_check_810_textarea').style.display = 'block';}else{document.getElementById('other_sec_description_check_810_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="other_sec_description_check_810" name="other_sec_description_check_810"
                    onclick="other_sec_description_check_810(this)" value="Other"> -->
                <label for="other_sec_description_check_810">Other </label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="other_sec_description_check_810_textarea"
                    name="other_sec_description_check_810_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_176" name="information_checkbox_12_NA_176"
                    value="dewey">
                <label for="information_checkbox_12_NA_176">N/A or Don’t Know</label>
            </div>

            <h3><b>ROOF </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_9" name="other_sec_description_check_9"
                    value="Architectural Shingle" checked>
                <label for="other_sec_description_check_9">Architectural Shingle</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_91" name="other_sec_description_check_91"
                    value="Membrane">
                <label for="other_sec_description_check_91">Membrane</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_92" name="other_sec_description_check_92"
                    value="Shake">
                <label for="other_sec_description_check_92">Shake </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_93" name="other_sec_description_check_93"
                    value="Slate">
                <label for="other_sec_description_check_93">Slate </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_94" name="other_sec_description_check_94"
                    value="Tile">
                <label for="other_sec_description_check_94">Tile </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_95" name="other_sec_description_check_95"
                    value="Composite">
                <label for="other_sec_description_check_95">Composite </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_96" name="other_sec_description_check_96"
                    value="Metal">
                <label for="other_sec_description_check_96">Metal </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_97" name="other_sec_description_check_97"
                    value="Shingle">
                <label for="other_sec_description_check_97">Shingle </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_98" name="other_sec_description_check_98"
                    value="Tar & Gravel">
                <label for="other_sec_description_check_98">Tar & Gravel </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="other_sec_description_check_99" name="other_sec_description_check_99"
                    value="Other"
                    onclick="if(this.checked){ document.getElementById('other_sec_description_check_99_textarea').style.display = 'block';}else{document.getElementById('other_sec_description_check_99_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="other_sec_description_check_99" name="other_sec_description_check_99"
                    onclick="other_sec_description_check_99(this)" value="huey"> -->
                <label for="other_sec_description_check_99">Other </label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="other_sec_description_check_99_textarea"
                    name="other_sec_description_check_99_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_177" name="information_checkbox_12_NA_177"
                    value="dewey">
                <label for="information_checkbox_12_NA_177">N/A or Don’t Know</label>
            </div>

            <div class="second-radio">
                <h3># OF FULL BATHS</h3>
                <textarea></textarea>
                <div id="add_bath_room">
                    <h6>FULL BATHS 1</h6>
                    <div class="add_new_html_form">
                        <input type="text" placeholder="#  of Full Baths" name="information_OF_FULL_BATHS_show_1"
                            style="background: rgb(241, 241, 120);color: black;width:100%">
                        <a onclick="add_bath_room()" class="control-button-style"><span style="color: white;">ADD MORE
                                FULL BATHS</span></a>
                    </div>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_178" name="information_checkbox_12_NA_178"
                        value="dewey">
                    <label for="information_checkbox_12_NA_178">N/A or Don’t Know</label>
                </div>

                <h3># OF 1/2 BATHS</h3>
                <textarea></textarea>
                <div id="add_bath_1_2_BATH_room">
                    <h6># OF 1/2 BATHS 1</h6>
                    <div class="add_new_html_form">
                        <input type="text" placeholder="# of 1/2 Baths" name="information_OF_1_2_BATHS_show_1"
                            style="background: rgb(241, 241, 120);color: black;width:100%">
                        <a onclick="add_bath_1_2_BATH_room()" class="control-button-style"><span
                                style="color: white;">ADD MORE 1/2 BATHS</span></a>
                    </div>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_179" name="information_checkbox_12_NA_179"
                        value="dewey">
                    <label for="information_checkbox_12_NA_179">N/A or Don’t Know</label>
                </div>

                <h3># OF BEDROOMS</h3>
                <textarea></textarea>
                <div id="add_bath_BEDROOMS">
                    <h6>BEDROOMS 1</h6>
                    <div class="add_new_html_form">
                        <input type="text" placeholder="#  of Bedrooms" name="information_bedroom_show_1"
                            style="background: rgb(241, 241, 120);color: black;width:100%">
                        <a onclick="add_bath_BEDROOMS()" class="control-button-style"><span style="color: white;">ADD
                                MORE BEDROOMS</span></a>
                    </div>
                </div>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_180" name="information_checkbox_12_NA_180"
                        value="dewey">
                    <label for="information_checkbox_12_NA_180">N/A or Don’t Know</label>
                </div>

            </div><br />

            <h3><b>MASTER BEDROOM LOCATION </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select id="other_sec_description_textarea_3" name="other_sec_description_textarea_3"
                    onchange="if(this.value == 'other'){document.getElementById('other_sec_description_textarea_3_desc').style.display='block'}else{document.getElementById('other_sec_description_textarea_3_desc').style.display='none'}">
                    <option value="first floor" selected>first floor</option>
                    <option value="second floor">second floor</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div id="other_sec_description_textarea_3_desc" style="display:none">
                <textarea placeholder="you MUST type in what other means"
                    style="background: rgb(241, 241, 120);color: black;" name="other_sec_description_textarea_3_desc">
        </textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_181" name="information_checkbox_12_NA_181"
                    value="dewey">
                <label for="information_checkbox_12_NA_181">N/A or Don’t Know</label>
            </div>

            <div class="second-radio">
                <h3>PROPERTY STORIES</h3>
                <textarea></textarea>
                <input type="text" placeholder="Property Stories" name="information_checkbox_PROPERTY_STORIES_1"
                    style="background: rgb(241, 241, 120);color: black;width:100%">
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_182" name="information_checkbox_12_NA_182"
                        value="dewey">
                    <label for="information_checkbox_12_NA_182">N/A or Don’t Know</label>
                </div>
            </div><br />

            <h3><b>HEATING SOURCE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_1" name="next_other_check_1" value="Natural Gas" checked>
                <label for="next_other_check_1">Natural Gas</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_11" name="next_other_check_11" value="Propane Buried">
                <label for="next_other_check_11">Propane Buried</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_12" name="next_other_check_12" value="Oil Buried">
                <label for="next_other_check_12">Oil Buried </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_13" name="next_other_check_13" value="Propane Above Ground">
                <label for="next_other_check_13">Propane Above Ground </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_14" name="next_other_check_14" value="Oil Above Ground ">
                <label for="next_other_check_14">Oil Above Ground </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_15" name="next_other_check_15" value="Wood">
                <label for="next_other_check_15">Wood </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_16" name="next_other_check_16" value="Electric">
                <label for="next_other_check_16">Electric </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_17" name="next_other_check_17" value="None">
                <label for="next_other_check_17">None </label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_18" name="next_other_check_18" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_18_textarea').style.display = 'block';}else{document.getElementById('next_other_check_18_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_18" name="next_other_check_18"
                    onclick="next_other_check_18(this)" value="huey"> -->
                <label for="next_other_check_18">Other </label>
            </div>
            <div id="next_other_check_18_textarea" style="display:none">
                <textarea placeholder="you MUST type in what other means" name="next_other_check_18_textarea"
                    style="background: yellow;color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_183" name="information_checkbox_12_NA_183"
                    value="dewey">
                <label for="information_checkbox_12_NA_183">N/A or Don’t Know</label>
            </div>

            <h3><b>HEATING SOURCE</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_2" name="next_other_check_2" value="Leased" checked>
                <label for="next_other_check_2">Leased</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_21" name="next_other_check_21" value="Owned">
                <label for="next_other_check_21">Owned</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_21123" name="next_other_check_21123" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_21123_textarea').style.display = 'block';}else{document.getElementById('next_other_check_21123_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_21123" name="next_other_check_21123" value="Other"> -->
                <label for="next_other_check_21123">Other</label>
            </div>

            <div id="next_other_check_21123_textarea" style="display:none">
                <textarea placeholder="you MUST type in what other means" name="next_other_check_21123_textarea"
                    style="background: yellow;color: black;"></textarea>
            </div>

            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_184" name="information_checkbox_12_NA_184"
                    value="dewey">
                <label for="information_checkbox_12_NA_184">N/A or Don’t Know</label>
            </div>

            <h3><b> INTERIOR HEATING SOURCE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_22" name="next_other_check_22" value="Force Air" checked>
                <label for="next_other_check_22">Force Air</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_23" name="next_other_check_23" value="Hot Water">
                <label for="next_other_check_23">Hot Water</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_24" name="next_other_check_24" value="Wood">
                <label for="next_other_check_24">Wood</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_26" name="next_other_check_26" value="None">
                <label for="next_other_check_26">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_25" name="next_other_check_25" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_25_textarea').style.display = 'block';}else{document.getElementById('next_other_check_25_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_25" name="next_other_check_25" value="Other"> -->
                <label for="next_other_check_25">Other</label>
            </div>

            <div id="next_other_check_25_textarea" style="display:none">
                <textarea placeholder="you MUST type in what other means" name="next_other_check_25_textarea"
                    style="background: yellow;color: black;"></textarea>
            </div>

            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_185" name="information_checkbox_12_NA_185"
                    value="dewey">
                <label for="information_checkbox_12_NA_185">N/A or Don’t Know</label>
            </div>

            <h3><b> INTERIOR COOLING </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_3" name="next_other_check_3" value="Force Air" checked>
                <label for="next_other_check_3">Force Air</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_31" name="next_other_check_31" value="Window Units">
                <label for="next_other_check_31">Window Units</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_32" name="next_other_check_32" value="Attic Fan">
                <label for="next_other_check_32">Attic Fan</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_34" name="next_other_check_34" value="None">
                <label for="next_other_check_34">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_33" name="next_other_check_33" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_33_textarea').style.display = 'block';}else{document.getElementById('next_other_check_33_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_33" name="next_other_check_33" value="huey"> -->
                <label for="next_other_check_33">Other</label>
            </div>
            <div id="next_other_check_33_textarea" style="display:none">
                <textarea placeholder="you MUST type in what other means" name="next_other_check_33_textarea"
                    style="background: yellow;color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_186" name="information_checkbox_12_NA_186"
                    value="dewey">
                <label for="information_checkbox_12_NA_186">N/A or Don’t Know</label>
            </div>

            <h3><b>WATER</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_4" name="next_other_check_4" value="City" checked>
                <label for="next_other_check_4">City</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_41" name="next_other_check_41" value="Well">
                <label for="next_other_check_41">Well</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_42" name="next_other_check_42" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_41_descrip').style.display = 'block';}else{document.getElementById('next_other_check_41_descrip').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_42" name="next_other_check_42" value="huey"
                    onclick="next_other_check_41(this)"> -->
                <label for="next_other_check_42">Other</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_43" name="next_other_check_43" value="None">
                <label for="next_other_check_43">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_188u" name="information_checkbox_12_NA_188u"
                    value="dewey">
                <label for="information_checkbox_12_NA_188u">N/A or Don’t Know</label>
            </div>
            <div class="second-radio" id="next_other_check_41_descrip" style="display: none;">
                <h3>FILL IN DEPTH</h3>
                <input type="text" placeholder="Fill in: DEPTH" style="background: yellow;color: black;width:100%"
                    name="next_other_check_41_descrip_DEPTH">
                <h3>FILL IN DATE INSTALLED</h3>
                <input type="text" placeholder="Fill In: DATE INSTALLED"
                    name="next_other_check_41_descrip_DATE_INSTALLED"
                    style="background: yellow;color: black;width:100%">
            </div><br />

            <h3><b>SEWER</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_44" name="next_other_check_44" value="City" checked>
                <label for="next_other_check_44">City</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_45" name="next_other_check_45" value="Conventional Septic">
                <label for="next_other_check_45">Conventional Septic</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_46" name="next_other_check_46" value="Sand Mound">
                <label for="next_other_check_46">Sand Mound</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_47" name="next_other_check_47" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_45_descrip').style.display = 'block';}else{document.getElementById('next_other_check_45_descrip').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_47" name="next_other_check_47" value="huey"
                    onclick="next_other_check_45(this)"> -->
                <label for="next_other_check_47">Other</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_48" name="next_other_check_48" value="None">
                <label for="next_other_check_48">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_188" name="information_checkbox_12_NA_188"
                    value="dewey">
                <label for="information_checkbox_12_NA_188">N/A or Don’t Know</label>
            </div>
            <div class="second-radio" id="next_other_check_45_descrip" style="display: none;">
                <h3>DATE INSTALLED</h3>
                <input type="text" placeholder="DATE INSTALLED" name="next_other_check_45_descrip_DATE_INSTALLED"
                    style="background: rgb(241, 241, 120);color: black;width:100%">
                <h3>WHEN LAST EMPTIED</h3>
                <input type="text" placeholder="WHEN LAST EMPTIED" name="next_other_check_45_descrip_WHEN_LAST_EMPTIED"
                    style="background: rgb(241, 241, 120);color: black;width:100%">
            </div><br />

            <h3><b>ELECTRIC</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_5" name="next_other_check_5" value="Underground" checked>
                <label for="next_other_check_5">Underground</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_51" name="next_other_check_51" value="Overhead">
                <label for="next_other_check_51">Overhead</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_52" name="next_other_check_52" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_52_textarea').style.display = 'block';}else{document.getElementById('next_other_check_52_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_52" name="next_other_check_52" value="huey"
                    onclick="next_other_check_52(this)"> -->
                <label for="next_other_check_52">Other</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_53" name="next_other_check_53" value="100 Amp">
                <label for="next_other_check_53">100 Amp</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_54" name="next_other_check_54" value="200 Amp">
                <label for="next_other_check_54">200 Amp</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_55" name="next_other_check_55" value="None">
                <label for="next_other_check_55">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_190" name="information_checkbox_12_NA_190"
                    value="dewey">
                <label for="information_checkbox_12_NA_190">N/A or Don’t Know</label>
            </div>
            <div>
                <textarea placeholder="Describe Other Here" id="next_other_check_52_textarea"
                    name="next_other_check_52_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>

            <h3><b>POOL & SPA </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_56" name="next_other_check_56" value="Above Ground" checked>
                <label for="next_other_check_56">Above Ground</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_57" name="next_other_check_57" value="Hot Tub">
                <label for="next_other_check_57">Hot Tub</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_58" name="next_other_check_58" value="In Ground">
                <label for="next_other_check_58">In Ground</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_59" name="next_other_check_59" value="None">
                <label for="next_other_check_59"> None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_510" name="next_other_check_510" value="Community">
                <label for="next_other_check_510">Community</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_511" name="next_other_check_511" value="Personal">
                <label for="next_other_check_511">Personal</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_512" name="next_other_check_512" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_512_textarea').style.display = 'block';}else{document.getElementById('next_other_check_512_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_512" name="next_other_check_512"
                    onclick="next_other_check_512(this)" value="Other"> -->
                <label for="next_other_check_512">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_512_textarea"
                    name="next_other_check_512_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_191" name="information_checkbox_12_NA_191"
                    value="dewey">
                <label for="information_checkbox_12_NA_191">N/A or Don’t Know</label>
            </div>

            <h3><b>PETS</b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_513" name="next_other_check_513" value="Pets" checked>
                <label for="next_other_check_513">Pets</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_514" name="next_other_check_514" value="No Pets">
                <label for="next_other_check_514">No Pets</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_515" name="next_other_check_515" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_515_textarea').style.display = 'block';}else{document.getElementById('next_other_check_515_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_515" name="next_other_check_515"
                    onclick="next_other_check_515(this)" value="huey"> -->
                <label for="next_other_check_515">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_515_textarea"
                    name="next_other_check_515_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_192" name="information_checkbox_12_NA_192"
                    value="dewey">
                <label for="information_checkbox_12_NA_192">N/A or Don’t Know</label>
            </div>

            <h3><b>COMMUNITY AMENITIES </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_6" name="next_other_check_6" value="Tennis Courts" checked>
                <label for="next_other_check_6">Tennis Courts</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_61" name="next_other_check_61" value="Basketball Courts">
                <label for="next_other_check_61">Basketball Courts</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_62" name="next_other_check_62" value="Walking Trails">
                <label for="next_other_check_62">Walking Trails</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_63" name="next_other_check_63" value="Biking Trails">
                <label for="next_other_check_63">Biking Trails</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_64" name="next_other_check_64" value="Baseball Fields">
                <label for="next_other_check_64">Baseball Fields</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_65" name="next_other_check_65" value="Soccer Fields">
                <label for="next_other_check_65">Soccer Fields</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_66" name="next_other_check_66" value="Open Fields">
                <label for="next_other_check_66">Open Fields</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_67" name="next_other_check_67" value="Club House">
                <label for="next_other_check_67">Club House</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_68" name="next_other_check_68" value="Flood Insurance">
                <label for="next_other_check_68">Flood Insurance</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_69" name="next_other_check_69" value="Golf Course">
                <label for="next_other_check_69">Golf Course</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_610" name="next_other_check_610"
                    value="Horseback Riding Trails">
                <label for="next_other_check_610">Horseback Riding Trails</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_611" name="next_other_check_611" value="Horse Stalls">
                <label for="next_other_check_611">Horse Stalls</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_612" name="next_other_check_612"
                    value="Community Area Maintained">
                <label for="next_other_check_612">Community Area Maintained</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_613" name="next_other_check_613" value="Storage Area">
                <label for="next_other_check_613">Storage Area</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_614" name="next_other_check_614" value="Common Area">
                <label for="next_other_check_614">Common Area</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_615" name="next_other_check_615" value="Cable">
                <label for="next_other_check_615">Cable</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_616" name="next_other_check_616" value="Fitness Center">
                <label for="next_other_check_616">Fitness Center</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_617" name="next_other_check_617" value="Gated Community">
                <label for="next_other_check_617">Gated Community</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_618" name="next_other_check_618" value="Heating Cooling">
                <label for="next_other_check_618">Heating Cooling</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_619" name="next_other_check_619" value="Horses Allowed">
                <label for="next_other_check_619">Horses Allowed</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_620" name="next_other_check_620"
                    value="Onsite Laundry Facility">
                <label for="next_other_check_620">Onsite Laundry Facility</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_621" name="next_other_check_621" value="Maintenance Roads">
                <label for="next_other_check_621">Maintenance Roads</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_622" name="next_other_check_622"
                    value="Maintenance Facility">
                <label for="next_other_check_622">Maintenance Facility</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_623" name="next_other_check_623" value="Master Insurance">
                <label for="next_other_check_623">Master Insurance</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_624" name="next_other_check_624" value="Pest Control">
                <label for="next_other_check_624">Pest Control</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_625" name="next_other_check_625"
                    value="Community Playground">
                <label for="next_other_check_625">Community Playground</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_626" name="next_other_check_626" value="Onsite Restaurants">
                <label for="next_other_check_626">Onsite Restaurants</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_627" name="next_other_check_627" value="Security">
                <label for="next_other_check_627">Security</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_628" name="next_other_check_628" value="Sidewalks">
                <label for="next_other_check_628">Sidewalks</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_629" name="next_other_check_629" value="Storage Lot">
                <label for="next_other_check_629">Storage Lot</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_630" name="next_other_check_630" value="Grounds Maintained">
                <label for="next_other_check_630">Grounds Maintained</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_631" name="next_other_check_631" value="Marina">
                <label for="next_other_check_631">Marina</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_632" name="next_other_check_632" value="Management Fee">
                <label for="next_other_check_632">Management Fee</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_633" name="next_other_check_633" value="Public Picnic Area">
                <label for="next_other_check_633">Public Picnic Area</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_634" name="next_other_check_634" value="Pool Outdoor">
                <label for="next_other_check_634">Pool Outdoor</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_635" name="next_other_check_635" value="Pool Indoor">
                <label for="next_other_check_635">Pool Indoor</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_636" name="next_other_check_636" value="No Amenities">
                <label for="next_other_check_636">No Amenities</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_637" name="next_other_check_637" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_637_textarea').style.display = 'block';}else{document.getElementById('next_other_check_637_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_637" name="next_other_check_637"
                    onclick="next_other_check_637()" value="huey"> -->
                <label for="next_other_check_637">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_637_textarea"
                    name="next_other_check_637_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_193" name="information_checkbox_12_NA_193"
                    value="dewey">
                <label for="information_checkbox_12_NA_193">N/A or Don’t Know</label>
            </div>

            <h3><b>EXTERIOR FEATURES </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_7" name="next_other_check_7" value="DP 50 windows" checked>
                <label for="next_other_check_7">DP 50 windows</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_71" name="next_other_check_71" value="Gas Grill">
                <label for="next_other_check_71">Gas Grill</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_72" name="next_other_check_72" value="Security Lighting">
                <label for="next_other_check_72">Security Lighting</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_73" name="next_other_check_73" value="Shutters-Functional">
                <label for="next_other_check_73">Shutters-Functional</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_74" name="next_other_check_74" value="Hurricane Shutters">
                <label for="next_other_check_74">Hurricane Shutters</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_75" name="next_other_check_75" value="Storm Windows">
                <label for="next_other_check_75">Storm Windows</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_76" name="next_other_check_76" value="Thermal Windows">
                <label for="next_other_check_76">Thermal Windows</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_77" name="next_other_check_77" value="Exterior Kitchen">
                <label for="next_other_check_77">Exterior Kitchen</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_78" name="next_other_check_78" value="Storm Doors">
                <label for="next_other_check_78">Storm Doors</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_79" name="next_other_check_79" value="Gas Logs">
                <label for="next_other_check_79">Gas Logs</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_710" name="next_other_check_710" value="Outdoor Shower">
                <label for="next_other_check_710">Outdoor Shower</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_711" name="next_other_check_711" value="Thermal Doors">
                <label for="next_other_check_711">Thermal Doors</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_712" name="next_other_check_712" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_712_textarea').style.display = 'block';}else{document.getElementById('next_other_check_712_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_712" name="next_other_check_712"
                    onclick="next_other_check_712(this)" value="huey"> -->
                <label for="next_other_check_712">other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_712_textarea"
                    name="next_other_check_712_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_194" name="information_checkbox_12_NA_194"
                    value="dewey">
                <label for="information_checkbox_12_NA_194">N/A or Don’t Know</label>
            </div>

            <h3><b>EXTERIOR FINISHES </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_8" name="next_other_check_8" value="Aluminum" checked>
                <label for="next_other_check_8">Aluminum</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_81" name="next_other_check_81" value="Block">
                <label for="next_other_check_81">Block</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_82" name="next_other_check_82" value="Brick Veneer">
                <label for="next_other_check_82">Brick Veneer</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_83" name="next_other_check_83" value="Brick">
                <label for="next_other_check_83">Brick</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_84" name="next_other_check_84" value="Fiber Cement">
                <label for="next_other_check_84">Fiber Cement</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_85" name="next_other_check_85" value="Steel Siding">
                <label for="next_other_check_85">Steel Siding</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_86" name="next_other_check_86" value="Stucco">
                <label for="next_other_check_86">Stucco</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_87" name="next_other_check_87" value="Synthetic Stucco">
                <label for="next_other_check_87">Synthetic Stucco</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_88" name="next_other_check_88" value="Composition">
                <label for="next_other_check_88">Composition</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_89" name="next_other_check_89" value="Log">
                <label for="next_other_check_89">Log</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_810" name="next_other_check_810" value="Stone">
                <label for="next_other_check_810">Stone</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_811" name="next_other_check_811" value="Concrete">
                <label for="next_other_check_811">Concrete</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_812" name="next_other_check_812" value="Wood Siding">
                <label for="next_other_check_812">Wood Siding</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_813" name="next_other_check_813" value="Asbestos">
                <label for="next_other_check_813">Asbestos</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_814" name="next_other_check_814" value="Bat and Board">
                <label for="next_other_check_814">Bat and Board</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_815" name="next_other_check_815" value="Vinyl Siding">
                <label for="next_other_check_815">Vinyl Siding</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_816" name="next_other_check_816" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_816_textarea').style.display = 'block';}else{document.getElementById('next_other_check_816_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_816" name="next_other_check_816"
                    onclick="next_other_check_816(this)" value="huey"> -->
                <label for="next_other_check_816">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_816_textarea"
                    name="next_other_check_816_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_195" name="information_checkbox_12_NA_195"
                    value="dewey">
                <label for="information_checkbox_12_NA_195">N/A or Don’t Know</label>
            </div>

            <h3><b>FENCING </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_9" name="next_other_check_9" value="Brick" checked>
                <label for="next_other_check_9">Brick</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_91" name="next_other_check_91" value="Electric">
                <label for="next_other_check_91">Electric</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_92" name="next_other_check_92" value="Invisible">
                <label for="next_other_check_92"> Invisible</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_93" name="next_other_check_93" value="Partial">
                <label for="next_other_check_93">Partial</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_94" name="next_other_check_94" value=" Split Rail">
                <label for="next_other_check_94"> Split Rail</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_95" name="next_other_check_95" value="Wood">
                <label for="next_other_check_95"> Wood</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_96" name="next_other_check_96" value="Chain Link">
                <label for="next_other_check_96">Chain Link</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_97" name="next_other_check_97" value="Full">
                <label for="next_other_check_97"> Full</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_98" name="next_other_check_98" value="Metal-Decorative">
                <label for="next_other_check_98">Metal-Decorative</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_99" name="next_other_check_99" value="Vinyl">
                <label for="next_other_check_99">Vinyl</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_910" name="next_other_check_910"
                    onclick="if(this.checked){ document.getElementById('next_other_check_910_textarea').style.display = 'block';}else{document.getElementById('next_other_check_910_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_910" name="next_other_check_910"
                    onclick="next_other_check_910(this)" value="huey"> -->
                <label for="next_other_check_910">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_910_textarea"
                    name="next_other_check_910_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_196" name="information_checkbox_12_NA_196"
                    value="dewey">
                <label for="information_checkbox_12_NA_196">N/A or Don’t Know</label>
            </div>

            <h3><b>ATTIC SPACE </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_911" name="next_other_check_911" value="Access Only"
                    checked>
                <label for="next_other_check_911">Access Only</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_912" name="next_other_check_912" value="No Access">
                <label for="next_other_check_912">No Access</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_913" name="next_other_check_913" value="Eave Storage">
                <label for="next_other_check_913"> Eave Storage</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_914" name="next_other_check_914" value="Floored Partial">
                <label for="next_other_check_914">Floored Partial</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_915" name="next_other_check_915" value="Floored Total">
                <label for="next_other_check_915"> Floored Total</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_916" name="next_other_check_916" value="Stairs Permanent">
                <label for="next_other_check_916"> Stairs Permanent</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_917" name="next_other_check_917" value="Stairs Pulldown">
                <label for="next_other_check_917">Stairs Pulldown</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_918" name="next_other_check_918" value="Walk-In">
                <label for="next_other_check_918"> Walk-In</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_919" name="next_other_check_919" value="None">
                <label for="next_other_check_919">None</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_other_check_920" name="next_other_check_920" value="other"
                    onclick="if(this.checked){ document.getElementById('next_other_check_920_textarea').style.display = 'block';}else{document.getElementById('next_other_check_920_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_other_check_920" name="next_other_check_920"
                    onclick="next_other_check_920(this)" value="huey"> -->
                <label for="next_other_check_920">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_other_check_920_textarea"
                    name="next_other_check_920_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_197" name="information_checkbox_12_NA_197"
                    value="dewey">
                <label for="information_checkbox_12_NA_197">N/A or Don’t Know</label>
            </div>

            <h3><b>BOAT SLIP </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <select id="next_2_other_text_select" name="next_2_other_text_select" onchange="next_2_other_text()">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>
            <div class="second-radio" id="next_2_other_text" style="display: none;">
                <h3>LENGTH</h3>
                <input type="text" placeholder="Type Length " name="next_2_other_text_Length"
                    style=" background: rgb(241, 241, 120);color: black;width:100%">
                <h3>WIDTH</h3>
                <input type="text" placeholder="Type Width" name="next_2_other_text_width_1"
                    style=" background: rgb(241, 241, 120);color: black;width:100%">
            </div><br />
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_198" name="information_checkbox_12_NA_198"
                    value="dewey">
                <label for="information_checkbox_12_NA_198">N/A or Don’t Know</label>
            </div>

            <h3><b>MEAN HIGH WATER DEPTH </b> </h3><br />
            <textarea></textarea>
            <div class="second-radio">
                <select name="next_2_other_text_MEAN_HIGH_WATER_DEPTH">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="second-radio">
                    <input type="checkbox" id="information_checkbox_12_NA_199" name="information_checkbox_12_NA_199"
                        value="dewey">
                    <label for="information_checkbox_12_NA_199">N/A or Don’t Know</label>
                </div>
            </div>

            <h3><b>BUILDING GREEN CERTIFIED </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_1" name="next_2_other_check_1" value="DOE Challenge Home"
                    checked>
                <label for="next_2_other_check_1">DOE Challenge Home</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_11" name="next_2_other_check_11"
                    value="Eco Select Program">
                <label for="next_2_other_check_11">Eco Select Program</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_12" name="next_2_other_check_12"
                    value="Environment for living">
                <label for="next_2_other_check_12"> Environment for living</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_13" name="next_2_other_check_13" value="EPA Water Sense">
                <label for="next_2_other_check_13">EPA Water Sense</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_14" name="next_2_other_check_14"
                    value="GHBT Green Cert Homes">
                <label for="next_2_other_check_14"> GHBT Green Cert Homes</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_15" name="next_2_other_check_15" value="Hero Code Home">
                <label for="next_2_other_check_15"> Hero Code Home</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_16" name="next_2_other_check_16" value="LEED-H Certified">
                <label for="next_2_other_check_16">LEED-H Certified</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_17" name="next_2_other_check_17" value="NC Healthy Blt H">
                <label for="next_2_other_check_17"> NC Healthy Blt H</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_18" name="next_2_other_check_18"
                    value="Earth Craft House">
                <label for="next_2_other_check_18">Earth Craft House</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_19" name="next_2_other_check_19"
                    value="Fortified Home Build">
                <label for="next_2_other_check_19">Fortified Home Build</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_110" name="next_2_other_check_110"
                    value="Green Built Home">
                <label for="next_2_other_check_110">Green Built Home</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_111" name="next_2_other_check_111" value="HERS Rated">
                <label for="next_2_other_check_111">HERS Rated</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_112" name="next_2_other_check_112"
                    value="NAHB Certified home">
                <label for="next_2_other_check_112">NAHB Certified home</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_113" name="next_2_other_check_113"
                    value="Energy Star Home">
                <label for="next_2_other_check_113">Energy Star Home</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_114" name="next_2_other_check_114"
                    value="EPA Indoor Air Purifier">
                <label for="next_2_other_check_114">EPA Indoor Air Purifier</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_115" name="next_2_other_check_115" value="other"
                    onclick="if(this.checked){ document.getElementById('next_2_other_check_115_textarea').style.display = 'block';}else{document.getElementById('next_2_other_check_115_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_2_other_check_115" name="next_2_other_check_115"
                    onclick="next_2_other_check_115(this)" value="huey"> -->
                <label for="next_2_other_check_115">Other</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_2_other_check_115_textarea"
                    name="next_2_other_check_115_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1100" name="information_checkbox_12_NA_1100"
                    value="dewey">
                <label for="information_checkbox_12_NA_1100">N/A or Don’t Know</label>
            </div>

            <h3><b>GREEN BUILDING FEATURES </b> </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_2" name="next_2_other_check_2" value="Active Solar"
                    checked>
                <label for="next_2_other_check_2">Active Solar</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_21" name="next_2_other_check_21"
                    value="Electric Car Charger">
                <label for="next_2_other_check_21">Electric Car Charger</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_22" name="next_2_other_check_22"
                    value="EPA Water Sense Plum">
                <label for="next_2_other_check_22"> EPA Water Sense Plum</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_23" name="next_2_other_check_23" value="Geo Thermal Heat">
                <label for="next_2_other_check_23">Geo Thermal Heat</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_24" name="next_2_other_check_24" value="LED Lighting">
                <label for="next_2_other_check_24"> LED Lighting</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_25" name="next_2_other_check_25" value="Passive Solar">
                <label for="next_2_other_check_25"> Passive Solar</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_26" name="next_2_other_check_26"
                    value="Drought Res landscape">
                <label for="next_2_other_check_26">Drought Res landscape</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_27" name="next_2_other_check_27"
                    value="Energy Star Appliances">
                <label for="next_2_other_check_27"> Energy Star Appliances</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_28" name="next_2_other_check_28" value="Fresh Air Vent">
                <label for="next_2_other_check_28">Fresh Air Vent</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_29" name="next_2_other_check_29"
                    value="High Efficiency Toilets">
                <label for="next_2_other_check_29">High Efficiency Toilets</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_210" name="next_2_other_check_210"
                    value="Low Voc Paint/Var">
                <label for="next_2_other_check_210">Low Voc Paint/Var</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_211" name="next_2_other_check_211"
                    value="Programmable Thermostats">
                <label for="next_2_other_check_211">Programmable Thermostats</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_212" name="next_2_other_check_212"
                    value="Radiant Heated Floors">
                <label for="next_2_other_check_212">Radiant Heated Floors</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_213" name="next_2_other_check_213" value="Sealed Attic">
                <label for="next_2_other_check_213">Sealed Attic</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_214" name="next_2_other_check_214"
                    value="Sealed Crawl Space">
                <label for="next_2_other_check_214">Sealed Crawl Space</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_215" name="next_2_other_check_215"
                    value="Solar Hot Water">
                <label for="next_2_other_check_215">Solar Hot Water</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_216" name="next_2_other_check_216"
                    value="Solar Photovoltaic">
                <label for="next_2_other_check_216">Solar Photovoltaic</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_217" name="next_2_other_check_217"
                    value="Rain Cistern Collection">
                <label for="next_2_other_check_217">Rain Cistern Collection</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_218" name="next_2_other_check_218"
                    value="Sealed Fireplace">
                <label for="next_2_other_check_218">Sealed Fireplace</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_219" name="next_2_other_check_219" value="Solar Act Heat">
                <label for="next_2_other_check_219">Solar Act Heat</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_220" name="next_2_other_check_220"
                    value="Solar Passive Heat">
                <label for="next_2_other_check_220">Solar Passive Heat</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_221" name="next_2_other_check_221"
                    value="Tankless Water Heater">
                <label for="next_2_other_check_221">Tankless Water Heater</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_222" name="next_2_other_check_222" value="NONE">
                <label for="next_2_other_check_222">NONE</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="next_2_other_check_223" name="next_2_other_check_223" value="other"
                    onclick="if(this.checked){ document.getElementById('next_2_other_check_223_textarea').style.display = 'block';}else{document.getElementById('next_2_other_check_223_textarea').style.display = 'none';}" />
                <!-- <input type="checkbox" id="next_2_other_check_223" name="next_2_other_check_223"
                    onclick="next_2_other_check_223(this)" value="huey"> -->
                <label for="next_2_other_check_223">Other</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1101" name="information_checkbox_12_NA_1101"
                    value="dewey">
                <label for="information_checkbox_12_NA_1101">N/A or Don’t Know</label>
            </div>
            <div>
                <textarea placeholder="Input information here" id="next_2_other_check_223_textarea"
                    name="next_2_other_check_223_textarea"
                    style="display:none; background: rgb(241, 241, 120);color: black;"></textarea>
            </div>

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(3, 'Address')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                <a onclick="go_next_section(5, 'Instructions')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>
        </div>


        <!-- Tab 5 -->
        <div id="Instructions" class="tabcontent" style="padding: 25px;">
            <h2>SHOWING INSTRUCTIONS </h2>

            <div class="second-radio">
                <textarea></textarea>
                <input type="checkbox" id="Instructions_checkbox_11" name="Instructions_checkbox_11"
                    value="Appointment Required" checked>
                <label for="Instructions_checkbox_11">Appointment Required</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_12" name="Instructions_checkbox_12"
                    value="Call Listing Office">
                <label for="Instructions_checkbox_12">Call Listing Office</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_13" name="Instructions_checkbox_13"
                    value="Listing Agent Present">
                <label for="Instructions_checkbox_13">Listing Agent Present</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_14" name="Instructions_checkbox_14" value="Lockbox">
                <label for="Instructions_checkbox_14">Lockbox</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_15" name="Instructions_checkbox_15" value="No Lockbox">
                <label for="Instructions_checkbox_15">No Lockbox</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_16" name="Instructions_checkbox_16" value="No Sign">
                <label for="Instructions_checkbox_16">No Sign</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_17" name="Instructions_checkbox_17"
                    value="Show Anytime">
                <label for="Instructions_checkbox_17">Show Anytime</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_18" name="Instructions_checkbox_18" value="Vacant">
                <label for="Instructions_checkbox_18">Vacant</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_19" name="Instructions_checkbox_19"
                    value="Call Listing Agents">
                <label for="Instructions_checkbox_19">Call Listing Agents</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_111" name="Instructions_checkbox_111"
                    value="Key at office">
                <label for="Instructions_checkbox_111">Key at office</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_112" name="Instructions_checkbox_112"
                    value="No Showings">
                <label for="Instructions_checkbox_112">No Showings</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_113" name="Instructions_checkbox_113"
                    value="On Site Agent">
                <label for="Instructions_checkbox_113">On Site Agent</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_114" name="Instructions_checkbox_114"
                    value="Restricted Hours">
                <label for="Instructions_checkbox_114">Restricted Hours</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_115" name="Instructions_checkbox_115" value="Tenants">
                <label for="Instructions_checkbox_115">Tenants</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_116" name="Instructions_checkbox_116" value="Occupied">
                <label for="Instructions_checkbox_116">Occupied</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_117" name="Instructions_checkbox_117"
                    value="Onsite Pets">
                <label for="Instructions_checkbox_117">Onsite Pets</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_118" name="Instructions_checkbox_118"
                    value="See Pet Remarks">
                <label for="Instructions_checkbox_118">See Pet Remarks</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Instructions_checkbox_119" name="Instructions_checkbox_119" value="Remarks">
                <label for="Instructions_checkbox_119">Remarks</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1102" name="information_checkbox_12_NA_1102"
                    value="dewey">
                <label for="information_checkbox_12_NA_1102">N/A or Don’t Know</label>
            </div>
            <textarea placeholder="List all special instruction here for agents"
                name="information_checkbox_12_NA_1102_List_all_special"
                style=" background: rgb(241, 241, 120);color: black;"></textarea>

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(4, 'Description')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                <a onclick="go_next_section(6, 'Distribution')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>

        </div>


        <!-- Tab 6 -->
        <div id="Distribution" class="tabcontent" style="padding: 25px;">
            <h2>LISTING DISTRIBUTION </h2>

            <h3>SELLER OPT OUT</h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_11" name="Distribution_checkbox_11"
                    value="Seller Directs Listing to be EXCLUDED from Internet" checked>
                <label for="Distribution_checkbox_11">Seller Directs Listing to be EXCLUDED from Internet</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_12" name="Distribution_checkbox_12"
                    value="Seller Directs Address to be EXCLUDED from   Internet">
                <label for="Distribution_checkbox_12">Seller Directs Address to be EXCLUDED from Internet</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_13" name="Distribution_checkbox_13"
                    value="Seller Directs Listing to NOT be used in AVM’s on the  Internet">
                <label for="Distribution_checkbox_13">Seller Directs Listing to NOT be used in AVM’s on the
                    Internet</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_14" name="Distribution_checkbox_14"
                    value="Seller Directs Listing to NOT allow comments on    Internet">
                <label for="Distribution_checkbox_14">Seller Directs Listing to NOT allow comments on Internet</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1104" name="information_checkbox_12_NA_1104"
                    value="dewey">
                <label for="information_checkbox_12_NA_1104">N/A or Don’t Know</label>
            </div>

            <h3>SELLER OPT IN </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_21" name="Distribution_checkbox_21"
                    value="Seller Directs Listing to be posted on the Internet" checked>
                <label for="Distribution_checkbox_21">Seller Directs Listing to be posted on the Internet</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1105" name="information_checkbox_12_NA_1105"
                    value="dewey">
                <label for="information_checkbox_12_NA_1105">N/A or Don’t Know</label>
            </div>

            <h3>OUTSIDE DISTRIBUTION </h3>
            <textarea></textarea>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_31" name="Distribution_checkbox_31" value="Redfin"
                    checked>
                <label for="Distribution_checkbox_31">Redfin</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_32" name="Distribution_checkbox_32" value="Zillow">
                <label for="Distribution_checkbox_32">Zillow</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_33" name="Distribution_checkbox_33" value="Trulia">
                <label for="Distribution_checkbox_33">Trulia</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_34" name="Distribution_checkbox_34"
                    value="Realtor.com">
                <label for="Distribution_checkbox_34">Realtor.com</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="Distribution_checkbox_35" name="Distribution_checkbox_35" value="List Hub">
                <label for="Distribution_checkbox_35">List Hub</label>
            </div>
            <div class="second-radio">
                <input type="checkbox" id="information_checkbox_12_NA_1106" name="information_checkbox_12_NA_1106"
                    value="dewey">
                <label for="information_checkbox_12_NA_1106">N/A or Don’t Know</label>
            </div>

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(5, 'Instructions')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                <a onclick="go_next_section(7, 'photo_upload')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>
        </div>

        <!-- Tab 7 -->
        <div id="photo_upload" class="tabcontent" style="padding: 25px;">
            <h2>PHOTO UPLOAD </h2>
            <h3>EXTERIOR</h3>
            <textarea></textarea>
            <div>
                <h4>LANDSCAPING </h4>
                <input type="file" style="width: 100%;" name="file_upload_EXTERIOR_LANDSCAPING">
                <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
            </div>
            <div>
                <h4>HOUSE </h4>
                <input type="file" style="width: 100%;" name="file_upload_EXTERIOR_HOUSE">
            </div>
            <div>
                <h4>POOL </h4>
                <input type="file" style="width: 100%;" name="file_upload_EXTERIOR_POOL">
            </div>
            <div>
                <h4>SHED </h4>
                <input type="file" style="width: 100%;" name="file_upload_EXTERIOR_SHED">
            </div>
            <div>
                <h4>OTHER </h4>
                <input type="file" style="width: 100%;" name="file_upload_EXTERIOR_OTHER">
            </div>

            <h3>INTERIOR</h3>
            <textarea></textarea>
            <div>
                <h4>GARAGE </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_GARAGE">
            </div>
            <div>
                <h4>MUD ROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_MUD_ROOM">
            </div>
            <div>
                <h4>LIVING ROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_LIVING_ROOM">
            </div>
            <div>
                <h4>DINING ROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_DINING_ROOM">
            </div>
            <div>
                <h4>FAMILY ROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_FAMILY_ROOM">
            </div>
            <div>
                <h4>MEDIA ROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_MEDIA_ROOM">
            </div>
            <div>
                <h4>BASEMENT </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_BASEMENT_ROOM">
            </div>
            <div>
                <h4>KITCHEN </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_KITCHEN_ROOM">
            </div>
            <div>
                <h4>PANTRY </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_PANTRY_ROOM">
            </div>
            <div>
                <h4>HALF BATH </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_HALF_BATH">
            </div>
            <div>
                <h4>OFFICE </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_OFFICE">
            </div>
            <div>
                <h4>BEDROOMS </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_BEDROOMS">
            </div>
            <div>
                <h4>BATHROOMS </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_BATHROOMS">
            </div>
            <div>
                <h4>MASTER BEDROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_MASTER_BEDROOM">
            </div>
            <div>
                <h4>MASTER BATHROOM </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_MASTER_BATHROOM">
            </div>
            <div>
                <h4>MASTER CLOSET </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_MASTER_CLOSET">
            </div>
            <div>
                <h4>OTHER </h4>
                <input type="file" style="width: 100%;" name="file_upload_INTERIOR_OTHER">
            </div>

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(6, 'Distribution')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
                <a onclick="go_next_section(8, 'pdf_documents')" class="control-button-style"><span
                        style="color: white;">Next</span></a>
            </div>
        </div>


        <!-- Tab 8 -->
        <div id="pdf_documents" class="tabcontent" style="padding: 25px;">
            <h2>PDF DOCUMENTS UPLOAD</h2>
            <h3>PDF's</h3>
            <textarea name="pdf_document_upload"></textarea>
            <input type="file" style="width: 100%;" name="file_upload_PDF_DOCUMENTS_UPLOAD">

            <div style="display: flex;justify-content: flex-end;margin-top: 30px;">
                <a onclick="go_next_section(7, 'photo_upload')" class="control-button-style"><span
                        style="color: white;">Back</span></a>
            </div>
            <div style="display: flex;justify-content: center;">
                <input type="submit" value="SUBMIT" style="border-radius: 15px;background:#133c55;color: white; ">
            </div>
        </div>

    </form>

    <script type="text/javascript">
       localStorage.setItem("real_link_kind","Broker" );
        console.log("localStorage:",localStorage.getItem("real_link_kind"));
        window.ownerCount = 1
        window.full_bath = 1
        window.bath_1_2_bath = 1
        window.bedroom = 1
        window.add_more_room = 1

        if (localStorage.getItem("real_link_kind") == "Broker") {
            document.getElementById('visble_only_agent_out').style.display = "none"

            document.getElementById('broker_agent').style.display = "block";
            default_tablink = document.getElementsByClassName("tablinks")
            default_tablink[0].className += " active"
            window.scrollTo(0, 0);
        }

        if (localStorage.getItem("real_link_kind") != "Broker") {
            document.getElementById('only_show_broker_agents').style.display = "none"
            document.getElementById('visble_only_agent_out2').style.display = "none"

            document.getElementById('Information').style.display = "block";
            default_tablink = document.getElementsByClassName("tablinks")
            default_tablink[1].className += " active"
            window.scrollTo(0, 0);
        }

        function go_next_section(key, tabIdName) {
            window.scrollTo(0, 0);
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabIdName).style.display = "block";
            default_tablink = document.getElementsByClassName("tablinks")
            default_tablink[key].className += " active"
        }

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function information_checkbox_1_otherCheckbox(information_checkbox_117) {
            var information_checkbox_1_textarea = document.getElementById("information_checkbox_1_textarea");
            information_checkbox_1_textarea.style.display = information_checkbox_117.checked ? "block" : "none";
        }

        function information_checkbox_3_otherCheckbox2(information_checkbox_35) {
            var information_checkbox_1_textarea = document.getElementById("information_checkbox_3_textarea2");
            information_checkbox_1_textarea.style.display = information_checkbox_35.checked ? "block" : "none";
        }

        function information_select_5_dropdownChanges() {
            if (document.getElementById("information_select_5").value == "yes") {
                document.getElementById("information_select_5_textarea3").style.display = "block";
            } else {
                document.getElementById("information_select_5_textarea3").style.display = "none";
            }

        }
        function information_select_6_dropdownChanges2() {
            if (document.getElementById("information_select_6").value == "yes") {
                document.getElementById("information_select_6_textarea4").style.display = "block";
            } else {
                document.getElementById("information_select_6_textarea4").style.display = "none";
            }
        }
        function desc_special_ass() {
            if (document.getElementById("desc_special_ass").value == "Yes") {
                document.getElementById("desc_special_ass_text").style.display = "block";
            } else {
                document.getElementById("desc_special_ass_text").style.display = "none";
            }
        }

        function desc_broker_owner() {
            if (document.getElementById("desc_broker_owner").value == "Yes") {
                document.getElementById("desc_broker_owner_textarea").style.display = "block";
            } else {
                document.getElementById("desc_broker_owner_textarea").style.display = "none";
            }
        }

        function information_select_7_dropdownChanges3() {
            if (document.getElementById("information_select_7").value == "yes") {
                document.getElementById("information_select_7_textarea5").style.display = "block";
            } else {
                document.getElementById("information_select_7_textarea5").style.display = "none";
            }
        }

        function Type_checkbox_1_otherCheckbox(Type_checkbox_13) {
            var information_checkbox_1_textarea = document.getElementById("Type_checkbox_1_textarea");
            information_checkbox_1_textarea.style.display = Type_checkbox_13.checked ? "block" : "none";
        }


        function next_other_check_712(next_other_check_712) {
            var next_other_check_712_textarea = document.getElementById("next_other_check_712_textarea");
            next_other_check_712_textarea.style.display = next_other_check_712.checked ? "block" : "none";
        }

        function Type_checkbox_2_otherCheckbox2(Type_checkbox_211) {
            var information_checkbox_1_textarea = document.getElementById("Type_checkbox_2_textarea2");
            information_checkbox_1_textarea.style.display = Type_checkbox_211.checked ? "block" : "none";
        }

        function Description_select_27(Description_select_27) {
            var Description_select_27_textarea = document.getElementById("Description_select_27_textarea");
            Description_select_27_textarea.style.display = Description_select_27.checked ? "block" : "none";
        }

        function Description_select_310(Description_select_310) {
            var Description_select_310_textarea = document.getElementById("Description_select_310_textarea");
            Description_select_310_textarea.style.display = Description_select_310.checked ? "block" : "none";
        }



        function Description_checkbox_2221_otherCheckbox(Description_select_3_checkbox123218) {
            var Description_select_3_checkbox123218_textarea = document.getElementById("Description_select_3_checkbox123218_textarea");
            Description_select_3_checkbox123218_textarea.style.display = Description_select_3_checkbox123218.checked ? "block" : "none";
        }

        function Description_select_512_dropdownChanges(val) {
            var element = document.getElementById('Description_select_512_dropdownChanges_textarea');
            if (val == 'yes')
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }

        function Description_checkbox_1232221_otherCheckbox(Description_select_3_checkbox123218123) {
            var Description_select_3_checkbox123218_textarea123 = document.getElementById("Description_select_3_checkbox123218_textarea123");
            Description_select_3_checkbox123218_textarea123.style.display = Description_select_3_checkbox123218123.checked ? "block" : "none";
        }

        function Description_select_4_checkbox123218123(Description_select_4_checkbox123218123) {
            var Description_select_4_checkbox123218_textarea123 = document.getElementById("Description_select_4_checkbox123218_textarea123");
            Description_select_4_checkbox123218_textarea123.style.display = Description_select_4_checkbox123218123.checked ? "block" : "none";
        }

        function other_sec_description_sele_1() {
            if (document.getElementById("other_sec_description_sele_1").value == "yes") {
                document.getElementById("other_sec_description_div_1").style.display = "block";
            } else {
                document.getElementById("other_sec_description_div_1").style.display = "none";
            }
        }

        function other_sec_description_check_412(other_sec_description_check_412) {
            var other_sec_description_check_412_textarea = document.getElementById("other_sec_description_check_412_textarea");
            other_sec_description_check_412_textarea.style.display = other_sec_description_check_412.checked ? "block" : "none";
        }

        function next_other_check_18(next_other_check_18) {
            var next_other_check_18_textarea = document.getElementById("next_other_check_18_textarea");
            next_other_check_18_textarea.style.display = next_other_check_18.checked ? "block" : "none";
        }

        function next_other_check_21123(next_other_check_21123) {
            var next_other_check_21123_textarea = document.getElementById("next_other_check_21123_textarea");
            next_other_check_21123_textarea.style.display = next_other_check_21123.checked ? "block" : "none";
        }

        function next_other_check_33(next_other_check_33) {
            var next_other_check_33_textarea = document.getElementById("next_other_check_33_textarea");
            next_other_check_33_textarea.style.display = next_other_check_33.checked ? "block" : "none";
        }

        function next_other_check_25(next_other_check_25) {
            var next_other_check_25_textarea = document.getElementById("next_other_check_25_textarea");
            next_other_check_25_textarea.style.display = next_other_check_25.checked ? "block" : "none";
        }


        function other_sec_description_check_56(other_sec_description_check_56) {
            var other_sec_description_check_56_textarea = document.getElementById("other_sec_description_check_56_textarea");
            other_sec_description_check_56_textarea.style.display = other_sec_description_check_56.checked ? "block" : "none";
        }

        function other_sec_description_check_6_select_1() {
            if (document.getElementById("other_sec_description_check_6_select_1").value == "yes") {
                document.getElementById("other_sec_description_check_6_select_2").style.display = "block";
            } else {
                document.getElementById("other_sec_description_check_6_select_2").style.display = "none";
            }
        }

        function other_sec_description_check_7_select_1() {
            if (document.getElementById("other_sec_description_check_7_select_1").value == "yes") {
                document.getElementById("other_sec_description_check_7_select_2").style.display = "block";
            } else {
                document.getElementById("other_sec_description_check_7_select_2").style.display = "none";
            }
        }

        function other_sec_description_check_810(other_sec_description_check_810) {
            var other_sec_description_check_810_textarea = document.getElementById("other_sec_description_check_810_textarea");
            other_sec_description_check_810_textarea.style.display = other_sec_description_check_810.checked ? "block" : "none";
        }

        function other_sec_description_check_99(other_sec_description_check_99) {
            var other_sec_description_check_99_textarea = document.getElementById("other_sec_description_check_99_textarea");
            other_sec_description_check_99_textarea.style.display = other_sec_description_check_99.checked ? "block" : "none";
        }

        function other_sec_description_textarea_3() {
            if (document.getElementById("other_sec_description_textarea_3").value == "other") {
                document.getElementById("other_sec_description_textarea_3_desc").style.display = "block";
            } else {
                document.getElementById("other_sec_description_textarea_3_desc").style.display = "none";
            }
        }

        function next_other_check_41(next_other_check_41) {
            var next_other_check_41_descrip = document.getElementById("next_other_check_41_descrip");
            next_other_check_41_descrip.style.display = next_other_check_41.checked ? "block" : "none";
        }

        function description_select_3_checkbox123_other(description_select_3_checkbox123_other) {
            var description_select_3_checkbox123_other_div = document.getElementById("description_select_3_checkbox123_other_div");
            description_select_3_checkbox123_other_div.style.display = description_select_3_checkbox123_other.checked ? "block" : "none";
        }

        function next_other_check_45(next_other_check_45) {
            var next_other_check_45_descrip = document.getElementById("next_other_check_45_descrip");
            next_other_check_45_descrip.style.display = next_other_check_45.checked ? "block" : "none";
        }

        function next_other_check_512(next_other_check_512) {
            var next_other_check_512_textarea = document.getElementById("next_other_check_512_textarea");
            next_other_check_512_textarea.style.display = next_other_check_512.checked ? "block" : "none";
        }

        function next_other_check_515(next_other_check_515) {
            var next_other_check_515_textarea = document.getElementById("next_other_check_515_textarea");
            next_other_check_515_textarea.style.display = next_other_check_515.checked ? "block" : "none";
        }

        function next_other_check_637(next_other_check_637) {
            var next_other_check_637_textarea = document.getElementById("next_other_check_637_textarea");
            next_other_check_637_textarea.style.display = next_other_check_637.checked ? "block" : "none";
        }

        function next_other_check_816(next_other_check_816) {
            var next_other_check_816_textarea = document.getElementById("next_other_check_816_textarea");
            next_other_check_816_textarea.style.display = next_other_check_816.checked ? "block" : "none";
        }

        function next_other_check_910(next_other_check_910) {
            var next_other_check_910_textarea = document.getElementById("next_other_check_910_textarea");
            next_other_check_910_textarea.style.display = next_other_check_910.checked ? "block" : "none";
        }

        function next_other_check_920(next_other_check_920) {
            var next_other_check_920_textarea = document.getElementById("next_other_check_920_textarea");
            next_other_check_920_textarea.style.display = next_other_check_920.checked ? "block" : "none";
        }

        function next_2_other_check_223(next_2_other_check_223) {
            var next_2_other_check_223_textarea = document.getElementById("next_2_other_check_223_textarea");
            next_2_other_check_223_textarea.style.display = next_2_other_check_223.checked ? "block" : "none";
        }

        function next_2_other_check_115(next_2_other_check_115) {
            var next_2_other_check_115_textarea = document.getElementById("next_2_other_check_115_textarea");
            next_2_other_check_115_textarea.style.display = next_2_other_check_115.checked ? "block" : "none";
        }

        function next_other_check_52(next_other_check_52) {
            var next_other_check_52_textarea = document.getElementById("next_other_check_52_textarea");
            next_other_check_52_textarea.style.display = next_other_check_52.checked ? "block" : "none";
        }

        function next_2_other_text() {
            if (document.getElementById("next_2_other_text_select").value == "yes") {
                document.getElementById("next_2_other_text").style.display = "block";
            } else {
                document.getElementById("next_2_other_text").style.display = "none";
            }
        }

        function Address_select_3() {
            if (document.getElementById("Address_select_3").value == "yes") {
                document.getElementById("Address_select_3_descrip").style.display = "block";
            } else {
                document.getElementById("Address_select_3_descrip").style.display = "none";
            }
        }

        function Address_select_6() {
            if (document.getElementById("Address_select_6").value == "yes") {
                document.getElementById("Address_select_6_textarea").style.display = "block";
            } else {
                document.getElementById("Address_select_6_textarea").style.display = "none";
            }
        }

        function Address_select_7() {
            if (document.getElementById("Address_select_7").value == "yes") {
                document.getElementById("Address_select_7_textarea").style.display = "block";
            } else {
                document.getElementById("Address_select_7_textarea").style.display = "none";
            }
        }

        function Address_select_8() {
            if (document.getElementById("Address_select_8").value == "yes") {
                document.getElementById("Address_select_8_textarea").style.display = "block";
            } else {
                document.getElementById("Address_select_8_textarea").style.display = "none";
            }
        }

        function Address_select_9() {
            if (document.getElementById("Address_select_9").value == "yes") {
                document.getElementById("Address_select_9_textarea").style.display = "block";
            } else {
                document.getElementById("Address_select_9_textarea").style.display = "none";
            }
        }

        function Address_select_10() {
            if (document.getElementById("Address_select_10").value == "yes") {
                document.getElementById("Address_select_10_textarea").style.display = "block";
            } else {
                document.getElementById("Address_select_10_textarea").style.display = "none";
            }
        }

        function Address_select_11() {
            if (document.getElementById("Address_select_11").value == "yes") {
                document.getElementById("Address_select_11_textarea").style.display = "block";
            } else {
                document.getElementById("Address_select_11_textarea").style.display = "none";
            }
        }



        function Type_select_owner_select() {
            var Type_select_31_owner_div = document.getElementById("Type_select_31_owner_div");
            var Type_select_32_owner_div = document.getElementById("Type_select_32_owner_div");

            if (document.getElementById("Type_select_owner_3_ss").value == "Yes") {
                Type_select_31_owner_div.style.display = "block";
                Type_select_32_owner_div.style.display = "none";
            } else {
                Type_select_31_owner_div.style.display = "none";
                Type_select_32_owner_div.style.display = "flex";
            }
        }

        function add_more_owner() {
            window.ownerCount++;
            var btn = document.createElement("div");
            btn.innerHTML = "  <div><h6>owner " + window.ownerCount + " </h6>  <div class='add_new_html_form'  >  <input type='text' placeholder='first name' style='background: rgb(241, 241, 120);color: black;' >   <input type='text' placeholder='last name' style='background: rgb(241, 241, 120);color: black;' ><a onclick='add_more_owner()' class='control-button-style'><span style='color: white;'>ADD OTHER OWNER</span></a>  </div> <br/></div>";
            var Type_select_31_owner_div = document.getElementById("Type_select_31_owner_div");
            // document.body.appendChild(btn);
            Type_select_31_owner_div.appendChild(btn);
        }
        function add_bath_room() {
            window.full_bath++;
            var btn = document.createElement("div");
            btn.innerHTML = "  <div><h6>FULL BATHS " + window.full_bath + " </h6>  <div class='add_new_html_form'>  <input type='text' style='background: rgb(241, 241, 120);color: black;width:100%' ><a onclick='add_bath_room()' class='control-button-style'><span style='color: white;'>ADD MORE FULL BATHS</span></a></div> <br/></div>";
            var Type_select_31_owner_div = document.getElementById("add_bath_room");
            // document.body.appendChild(btn);
            Type_select_31_owner_div.appendChild(btn);
        }

        function add_bath_1_2_BATH_room() {
            window.bath_1_2_bath++;
            var btn = document.createElement("div");
            btn.innerHTML = "  <div><h6># OF 1/2 BATHS " + window.bath_1_2_bath + " </h6>  <div class='add_new_html_form' >  <input type='text' style='background: rgb(241, 241, 120);color: black;width:100%' ><a onclick='add_bath_1_2_BATH_room()' class='control-button-style'><span style='color: white;'>ADD MORE 1/2 BATHS</span></a> <br/></div>";
            var Type_select_31_owner_div = document.getElementById("add_bath_1_2_BATH_room");
            // document.body.appendChild(btn);
            Type_select_31_owner_div.appendChild(btn);
        }

        function add_bath_BEDROOMS() {
            window.bedroom++;
            var btn = document.createElement("div");
            btn.innerHTML = "  <div><h6>BEDROOMS " + window.bedroom + " </h6>  <div class='add_new_html_form' >  <input type='text' style='background: rgb(241, 241, 120);color: black;width:100%' ><a onclick='add_bath_BEDROOMS()' class='control-button-style'><span style='color: white;'>ADD MORE BEDROOMS</span></a></div> <br/></div>";
            var Type_select_31_owner_div = document.getElementById("add_bath_BEDROOMS");
            // document.body.appendChild(btn);
            Type_select_31_owner_div.appendChild(btn);
        }

        function add_more_room_size() {
            var btn = document.createElement("div");
            btn.innerHTML = "  <div><h6>Additional Room " + window.add_more_room + " </h6>  <div class='add_new_html_form'> <input type='text' placeholder='Room Name' style ='background: rgb(241, 241, 120);color: black;width:100%' >  <div style='display: flex;'>   <input type='text' placeholder='Length' style='background:  rgb(241, 241, 120);color: black;width:100%'>  <span>x</span> <input type='text' placeholder='Width' style='background:  rgb(241, 241, 120);color: black;width:100%'> </div><a onclick='add_more_room_size()' class='control-button-style'><span style='color: white;'>ADD</span></a></div><br /></div>";
            var Type_select_31_owner_div = document.getElementById("add_more_room_div");
            // document.body.appendChild(btn);
            Type_select_31_owner_div.appendChild(btn);
            window.add_more_room++;
        }




    </script>

</body>
<!-- 18624159025 -->

</html>