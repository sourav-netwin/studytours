<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Application Step 2</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/generalphp.css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/layout.css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/ddlevelsfiles/ddlevelsmenu-base.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/css/ddlevelsfiles/ddlevelsmenu.js"></script>
<script type="text/javascript">
	ddlevelsmenu.setup("ddtopmenubar", "topbar");
</script>
<style type="text/css">

h5{
	font-family: Lucida Grande, Verdana, Sans-serif;
	margin:10px 10px 10px 0;
	font-size: 11px;
	color: #aaa57c;

}
.small{
	font-size: 9px;
	color: #999;
}
form {
	
	font-family: Lucida Grande, Verdana, Sans-serif;
	font-size: 11px;
	background:#fff; 
	color: #aaa57c;
	display: block;
	
	padding:0 0 0 0px;
}

input {
	margin:0 0 10px 0;
	border:1px solid #ccc;
	background-color:#f5f5f5;
}
.location {
 display:block;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 9px;
 color: #3d7db5;
 margin:0 0 0 16px;
 list-style-type:square ;
}
.block_brown{
	margin:10px 0 4px 0;
	padding:10px; 
	border:2px solid #d5d1af; 
	background:#EBF0CC; 
	color: #aaa57c;
}

</style>
</head>
<body>
<center>
<div id="main">
<div id="container">
		<img src="<?php echo base_url(); ?>images/up_job.jpg"/>
		<div id="menu_up">
			<?php $this->load->view('menu_up');?>
		</div>
		<div id="left">
			<img src="<?php echo base_url(); ?>images/image001.jpg">
			<div class="boxsilver_right">
				<img align="middle" src="<?php echo base_url(); ?>images/cube.png">&nbsp;Location:
		
				<ul class="location">
				<li>BATH</li>
				<li>BEDFORD</li>
				<li>CAMBRIDGE</li>
				<li>CANTERBURY</li>
				<li>CHELMSFORD</li>
				<li>CHELTENHAM</li>
				<li>CHESTER</li>
				<li>EDINBURGH</li>
				<li>LEEDS</li>
				<li>LEICESTER</li>
				<li>LONDON DOCKLANDS</li>
				<li>LONDON ROEHAMPTON</li>
				<li>NORWICH</li>
				<li>PLYMOUTH</li>
				<li>PORTSMOUTH</li>
				<li>SHEFFIELD</li>
				<li>ST. ANDREWS</li>
				<li>DUBLIN</li>
				<li>GALWAY</li>
				</ul>
			</div>
		</div>
		
		<div id="middle">		
		<h1 class="blu">Application Form</h1>
			<?php echo $this->validation->error_string; 
				  $idsegment="/appform/insertinfo_two/" . $this->uri->segment(3);
				  
			?>
			
			

			<?php echo form_open_multipart($idsegment); ?>
			
			

			<input type="hidden" name="idannuncio" value="<?php echo $this->uri->segment(3) ?>" />
			<br/>
			
			<div class="block_brown">
				Contact details: Permanent home address 2010
			</div> 
			<h5>Permament Address Until</h5>
			Day <?php
				  $options = array(
                                  '1'=> '1',
                                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12',
				  '13'=> '13',
				  '14'=> '14',
				  '15'=> '15',
				  '16'=> '16',
				  '17'=> '17',
				  '18'=> '18',
				  '19'=> '19',
				  '20'=> '20',
				  '21'=> '21',
				  '22'=> '22',
				  '23'=> '23',
				  '24'=> '24',
				  '25'=> '25',
				  '26'=> '26',
				  '27'=> '27',
				  '28'=> '28',
				  '29'=> '29',
				  '30'=> '30',
				  '31'=> '31'
                );

			echo form_dropdown('dayaddress', $options);
			?>
			Month <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12'
                );

			echo form_dropdown('monthaddress', $options);
			?>
			<h5>Address</h5>
			<input type="text" name="address" value="<?php echo $this->validation->address;?>" size="55" />
			<h5>Town City</h5>
			<input type="text" name="towncity" value="<?php echo $this->validation->towncity;?>" size="25" />
			<h5>County </h5>
			<input type="text" name="county" value="" size="25" />
			<h5>PostCode</h5>
			<input type="text" name="postcode" value="<?php echo $this->validation->postcode;?>" size="25" />
			<h5>Country</h5>
			<select name="country">
			<option value="">Country</option>
			<option value="Afganistan">Afghanistan</option>
			<option value="Albania">Albania</option>
			<option value="Algeria">Algeria</option>
			<option value="American Samoa">American Samoa</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola">Angola</option>
			<option value="Anguilla">Anguilla</option>
			<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
			<option value="Bonaire">Bonaire</option>
			<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
			<option value="Botswana">Botswana</option>
			<option value="Brazil">Brazil</option>
			<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
			<option value="Brunei">Brunei</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burundi">Burundi</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada">Canada</option>
			<option value="Canary Islands">Canary Islands</option>
			<option value="Cape Verde">Cape Verde</option>
			<option value="Cayman Islands">Cayman Islands</option>
			<option value="Central African Republic">Central African Republic</option>
			<option value="Chad">Chad</option>
			<option value="Channel Islands">Channel Islands</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Christmas Island">Christmas Island</option>
			<option value="Cocos Island">Cocos Island</option>
			<option value="Colombia">Colombia</option>
			<option value="Comoros">Comoros</option>
			<option value="Congo">Congo</option>
			<option value="Cook Islands">Cook Islands</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Cote DIvoire">Cote D'Ivoire</option>
			<option value="Croatia">Croatia</option>
			<option value="Cuba">Cuba</option>
			<option value="Curaco">Curacao</option>
			<option value="Cyprus">Cyprus</option>
			<option value="Czech Republic">Czech Republic</option>
			<option value="Denmark">Denmark</option>
			<option value="Djibouti">Djibouti</option>
			<option value="Dominica">Dominica</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="East Timor">East Timor</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Equatorial Guinea">Equatorial Guinea</option>
			<option value="Eritrea">Eritrea</option>
			<option value="Estonia">Estonia</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="Falkland Islands">Falkland Islands</option>
			<option value="Faroe Islands">Faroe Islands</option>
			<option value="Fiji">Fiji</option>
			<option value="Finland">Finland</option>
			<option value="France">France</option>
			<option value="French Guiana">French Guiana</option>
			<option value="French Polynesia">French Polynesia</option>
			<option value="French Southern Ter">French Southern Ter</option>
			<option value="Gabon">Gabon</option>
			<option value="Gambia">Gambia</option>
			<option value="Georgia">Georgia</option>
			<option value="Germany">Germany</option>
			<option value="Ghana">Ghana</option>
			<option value="Gibraltar">Gibraltar</option>
			<option value="Great Britain">Great Britain</option>
			<option value="Greece">Greece</option>
			<option value="Greenland">Greenland</option>
			<option value="Grenada">Grenada</option>
			<option value="Guadeloupe">Guadeloupe</option>
			<option value="Guam">Guam</option>
			<option value="Guatemala">Guatemala</option>
			<option value="Guinea">Guinea</option>
			<option value="Guyana">Guyana</option>
			<option value="Haiti">Haiti</option>
			<option value="Hawaii">Hawaii</option>
			<option value="Honduras">Honduras</option>
			<option value="Hong Kong">Hong Kong</option>
			<option value="Hungary">Hungary</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Iran">Iran</option>
			<option value="Iraq">Iraq</option>
			<option value="Ireland">Ireland</option>
			<option value="Isle of Man">Isle of Man</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jordan">Jordan</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Kiribati">Kiribati</option>
			<option value="Korea North">Korea North</option>
			<option value="Korea Sout">Korea South</option>
			<option value="Kuwait">Kuwait</option>
			<option value="Kyrgyzstan">Kyrgyzstan</option>
			<option value="Laos">Laos</option>
			<option value="Latvia">Latvia</option>
			<option value="Lebanon">Lebanon</option>
			<option value="Lesotho">Lesotho</option>
			<option value="Liberia">Liberia</option>
			<option value="Libya">Libya</option>
			<option value="Liechtenstein">Liechtenstein</option>
			<option value="Lithuania">Lithuania</option>
			<option value="Luxembourg">Luxembourg</option>
			<option value="Macau">Macau</option>
			<option value="Macedonia">Macedonia</option>
			<option value="Madagascar">Madagascar</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Malawi">Malawi</option>
			<option value="Maldives">Maldives</option>
			<option value="Mali">Mali</option>
			<option value="Malta">Malta</option>
			<option value="Marshall Islands">Marshall Islands</option>
			<option value="Martinique">Martinique</option>
			<option value="Mauritania">Mauritania</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mayotte">Mayotte</option>
			<option value="Mexico">Mexico</option>
			<option value="Midway Islands">Midway Islands</option>
			<option value="Moldova">Moldova</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Montserrat">Montserrat</option>
			<option value="Morocco">Morocco</option>
			<option value="Mozambique">Mozambique</option>
			<option value="Myanmar">Myanmar</option>
			<option value="Nambia">Nambia</option>
			<option value="Nauru">Nauru</option>
			<option value="Nepal">Nepal</option>
			<option value="Netherland Antilles">Netherland Antilles</option>
			<option value="Netherlands">Netherlands (Holland, Europe)</option>
			<option value="Nevis">Nevis</option>
			<option value="New Caledonia">New Caledonia</option>
			<option value="New Zealand">New Zealand</option>
			<option value="Nicaragua">Nicaragua</option>
			<option value="Niger">Niger</option>
			<option value="Nigeria">Nigeria</option>
			<option value="Niue">Niue</option>
			<option value="Norfolk Island">Norfolk Island</option>
			<option value="Norway">Norway</option>
			<option value="Oman">Oman</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Palau Island">Palau Island</option>
			<option value="Palestine">Palestine</option>
			<option value="Panama">Panama</option>
			<option value="Papua New Guinea">Papua New Guinea</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Peru">Peru</option>
			<option value="Phillipines">Philippines</option>
			<option value="Pitcairn Island">Pitcairn Island</option>
			<option value="Poland">Poland</option>
			<option value="Portugal">Portugal</option>
			<option value="Puerto Rico">Puerto Rico</option>
			<option value="Qatar">Qatar</option>
			<option value="Republic of Montenegro">Republic of Montenegro</option>
			<option value="Republic of Serbia">Republic of Serbia</option>
			<option value="Reunion">Reunion</option>
			<option value="Romania">Romania</option>
			<option value="Russia">Russia</option>
			<option value="Rwanda">Rwanda</option>
			<option value="St Barthelemy">St Barthelemy</option>
			<option value="St Eustatius">St Eustatius</option>
			<option value="St Helena">St Helena</option>
			<option value="St Kitts-Nevis">St Kitts-Nevis</option>
			<option value="St Lucia">St Lucia</option>
			<option value="St Maarten">St Maarten</option>
			<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
			<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
			<option value="Saipan">Saipan</option>
			<option value="Samoa">Samoa</option>
			<option value="Samoa American">Samoa American</option>
			<option value="San Marino">San Marino</option>
			<option value="Sao Tome & Principe">Sao Tome &amp; Principe</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Senegal">Senegal</option>
			<option value="Seychelles">Seychelles</option>
			<option value="Sierra Leone">Sierra Leone</option>
			<option value="Singapore">Singapore</option>
			<option value="Slovakia">Slovakia</option>
			<option value="Slovenia">Slovenia</option>
			<option value="Solomon Islands">Solomon Islands</option>
			<option value="Somalia">Somalia</option>
			<option value="South Africa">South Africa</option>
			<option value="Spain">Spain</option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Sudan">Sudan</option>
			<option value="Suriname">Suriname</option>
			<option value="Swaziland">Swaziland</option>
			<option value="Sweden">Sweden</option>
			<option value="Switzerland">Switzerland</option>
			<option value="Syria">Syria</option>
			<option value="Tahiti">Tahiti</option>
			<option value="Taiwan">Taiwan</option>
			<option value="Tajikistan">Tajikistan</option>
			<option value="Tanzania">Tanzania</option>
			<option value="Thailand">Thailand</option>
			<option value="Togo">Togo</option>
			<option value="Tokelau">Tokelau</option>
			<option value="Tonga">Tonga</option>
			<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
			<option value="Tunisia">Tunisia</option>
			<option value="Turkey">Turkey</option>
			<option value="Turkmenistan">Turkmenistan</option>
			<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
			<option value="Tuvalu">Tuvalu</option>
			<option value="Uganda">Uganda</option>
			<option value="Ukraine">Ukraine</option>
			<option value="United Arab Erimates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="United States of America">United States of America</option>
			<option value="Uraguay">Uruguay</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="Vanuatu">Vanuatu</option>
			<option value="Vatican City State">Vatican City State</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Vietnam">Vietnam</option>
			<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
			<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
			<option value="Wake Island">Wake Island</option>
			<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
			<option value="Yemen">Yemen</option>
			<option value="Zaire">Zaire</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe">Zimbabwe</option>
			</select>
			<h5>Telephone</h5>
			<input type="text" name="telephone" value="<?php echo $this->validation->telephone;?>" size="25" />
			<h5>Mobile</h5>
			<input type="text" name="mobile" value="" size="20" />
			<h5>Fax</h5>
			<input type="text" name="fax" value="" size="20" />
			<h5>Available for summer work from</h5>
			Day <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12',
				  '13'=> '13',
				  '14'=> '14',
				  '15'=> '15',
				  '16'=> '16',
				  '17'=> '17',
				  '18'=> '18',
				  '19'=> '19',
				  '20'=> '20',
				  '21'=> '21',
				  '22'=> '22',
				  '23'=> '23',
				  '24'=> '24',
				  '25'=> '25',
				  '26'=> '26',
				  '27'=> '27',
				  '28'=> '28',
				  '29'=> '29',
				  '30'=> '30',
				  '31'=> '31'
                );

			echo form_dropdown('dayworkfrom', $options);
			?>
			Month <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12'
                );

			echo form_dropdown('monthworkfrom', $options);
			?>
			<h5>Available for summer work until</h5>
			Day <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12',
				  '13'=> '13',
				  '14'=> '14',
				  '15'=> '15',
				  '16'=> '16',
				  '17'=> '17',
				  '18'=> '18',
				  '19'=> '19',
				  '20'=> '20',
				  '21'=> '21',
				  '22'=> '22',
				  '23'=> '23',
				  '24'=> '24',
				  '25'=> '25',
				  '26'=> '26',
				  '27'=> '27',
				  '28'=> '28',
				  '29'=> '29',
				  '30'=> '30',
				  '31'=> '31'
                );

			echo form_dropdown('dayworkuntil', $options);
			?>
			Month <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12'
                );

			echo form_dropdown('monthworkuntil', $options);
			?>
			<h5>Would you consider work at any other time of the year?</h5>
			<?php
				  $options = array(
                  ''=> '',
				  'no'=> 'Yes',
                  'yes'=> 'No'
                );

			echo form_dropdown('othertime', $options);
			?>
			<h5>Available from</h5>
			Day <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12',
				  '13'=> '13',
				  '14'=> '14',
				  '15'=> '15',
				  '16'=> '16',
				  '17'=> '17',
				  '18'=> '18',
				  '19'=> '19',
				  '20'=> '20',
				  '21'=> '21',
				  '22'=> '22',
				  '23'=> '23',
				  '24'=> '24',
				  '25'=> '25',
				  '26'=> '26',
				  '27'=> '27',
				  '28'=> '28',
				  '29'=> '29',
				  '30'=> '30',
				  '31'=> '31'
                );

			echo form_dropdown('dayothertime', $options);
			?>
			Month <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12'
                );

			echo form_dropdown('monthothertime', $options);
			?>
			<h5>Available until</h5>
			Day <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12',
				  '13'=> '13',
				  '14'=> '14',
				  '15'=> '15',
				  '16'=> '16',
				  '17'=> '17',
				  '18'=> '18',
				  '19'=> '19',
				  '20'=> '20',
				  '21'=> '21',
				  '22'=> '22',
				  '23'=> '23',
				  '24'=> '24',
				  '25'=> '25',
				  '26'=> '26',
				  '27'=> '27',
				  '28'=> '28',
				  '29'=> '29',
				  '30'=> '30',
				  '31'=> '31'
                );

			echo form_dropdown('dayothertimeuntil', $options);
			?>
			Month <?php
				  $options = array(
                  '1'=> '1',
                  '2'=> '2',
				  '3'=> '3',
				  '4'=> '4',
				  '5'=> '5',
				  '6'=> '6',
				  '7'=> '7',
				  '8'=> '8',
				  '9'=> '9',
				  '10'=> '10',
				  '11'=> '11',
				  '12'=> '12'
                );

			echo form_dropdown('monthothertimeuntil', $options);
			?>
			<h5>Have you worked for PLUS before?</h5>
			<?php
				  $options = array(
                   ''=>'',
				  'yes'=>'Yes',
                  'no'=>'No'
                );

			echo form_dropdown('workplusbefore', $options, '');
			?>
			<h5>Please state dates, location and position worked</h5>
			<textarea NAME="commentsworkplus" COLS=40 ROWS=6></textarea>
			
			<h5>Due to the temporary nature of our summer posts, PLUS cannot employ applicants who require work permits or visas to work in the UK. Are there any restrictions to your residence in the UK which might affect your right to take up employment in the UK? </h5>
			<?php
				 $options = array(
                   ''=>'',
				  'yes'=>'Yes',
                  'no'=>'No'
                );

			echo form_dropdown('restriction', $options, '');
			?>

			<h5>In compliance with The Protection of Children Act 1999, applicants are advised that police checks may be carried out to ensure suitability to work with children. This post is subject to the Rehabilitation of Offenders Act 1974 You should complete this section if you have any court action pending against you, been cautioned, or have any criminal convictions that are not considered 'spent' under the Rehabilitation of Offenders Act 1974.
			Have you ever been cautioned /convicted of a criminal offence / have any hearings pending? 
			</h5>
			
			<select name="criminal">
				<option value="<?php echo $this->validation->set_select('criminal'); ?>"></option>
				<option value="no">No</option>
				<option value="yes" >Yes</option>
			</select>
			
			<h5>If yes, please give further information</h5>
			<textarea NAME="criminalinfo" COLS=40 ROWS=6></textarea>
			
			<div style="display:block; margin:10px; padding:10px;float:right;"><input type="submit" value="Next" /></div>
			</form>
			
</div>	
	<div id="right">
		<img  src="<?php echo base_url(); ?>images/image001_small.jpg">
		
	</div>
		
	<div id="footer">init</div>		
</div>
</center>

</body>
