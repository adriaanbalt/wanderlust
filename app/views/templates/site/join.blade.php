@section('content')

<div id='join'>

<h1>JOIN THE BAND</h1>

<form name="f" id="joinnForm" method="post" action="/thankyou.php" enctype="multipart/form-data">
		
	<div class="container">
		<h2>1. Contact Information</h2>
		<div class="info">
			<p>Fill out this information so we can follow up with you in the future.</p>
		</div>

		<div class="fSet">
			<fieldset>
				<label for="">First Name *</label>
				<input type="text" id="fname" name="fname" required />
			</fieldset>
			<fieldset>
				<label for="">Last Name *</label>
				<input type="text" id="lname" name="lname" required />
			</fieldset>
			<fieldset class="address">
				<label for="">Address *</label>
				<input type="text" id="address" name="address" required />
				<input type="text" id="address1" name="address1" />
			</fieldset>
			<fieldset>
				<label for="">Apt / Suite</label>
				<input type="text" id="apt" name="apt" />
			</fieldset>
			<fieldset>
				<label for="">City *</label>
				<input type="text" id="city" name="city" required />
			</fieldset>
			<fieldset>
				<label for="">State / Province *</label>
				<select name="state" class="formTextHolder2" required>
					<option>State of Residence</option>
					<option>AL</option>
					<option>AK</option>
					<option>AZ</option>
					<option>AR</option>
					<option>CA
					<option>CO</option>
					<option>CT</option>
					<option>DE</option>
					<option>DC</option>
					<option>FL</option>
					<option>GA</option>
					<option>HI</option>
					<option>ID</option>
					<option>IL</option>
					<option>IN</option>
					<option>IA</option>
					<option>KS</option>
					<option>KY</option>
					<option>LA</option>
					<option>ME</option>
					<option>MD</option>
					<option>MA</option>
					<option>MI</option>
					<option>MN</option>
					<option>MS</option>
					<option>MO</option>
					<option>MT</option>
					<option>NE</option>
					<option>NV</option>
					<option>NH</option>
					<option>NJ</option>
					<option>NM</option>
					<option>NY</option>
					<option>NC</option>
					<option>ND</option>
					<option>OH</option>
					<option>OK</option>
					<option>OR</option>
					<option>PA</option>
					<option>RI</option>
					<option>SC</option>
					<option>SD</option>
					<option>TN</option>
					<option>TX</option>
					<option>UT</option>
					<option>VT</option>
					<option>VA</option>
					<option>WA</option>
					<option>WV</option>
					<option>WI</option>
					<option>WY</option>
					<option>PR-Puerto Rico</option>
					<option>Canadian Prov</option>
					<option>AB-Alberta</option>
					<option>BC-British Columbia</option>
					<option>MB-Manitoba</option>
					<option>NB-New Brunswick</option>
					<option>NF-Newfoundland</option>
					<option>NT-Northwest Territories</option>
					<option>NU-Nunavut</option>
					<option>NS-Nova Scotia</option>
					<option>ON-Ontario</option>
					<option>PE-Prince Edward Island
					<option>QC-Quebec
					<option>SK-Saskatchewan</option>
					<option>YT-Yukon Territories</option>
					<option>NA-INTERNATIONAL</option>
				</select>
			</fieldset>

			<fieldset>
				<label for="">Country *</label>
				<select id="country" name="country" required>
					<option selected="selected">Country of Residence</option>
					<option>United States</option>
					<option>Canada</option>
					<option>United Kingdom</option>
					<option>Albania</option>
					<option>Algeria</option>
					<option>American Samoa</option>
					<option>Andorra</option>
					<option>Angola</option>
					<option>Anguilla</option>
					<option>Antigua and Barbuda</option>
					<option>Argentina</option>
					<option>Armenia</option>
					<option>Aruba</option>
					<option>Australia</option>
					<option>Austria</option>
					<option>Azerbaijan</option>	<option>Bahamas</option>
					<option>Bahrain</option>
					<option>Bangladesh</option>	<option>Barbados</option>
					<option>Belarus</option>
					<option>Belgium</option>
					<option>Belize</option>
					<option>Benin</option>
					<option>Bermuda</option>
					<option>Bhutan</option>
					<option>Bolivia</option>
					<option>Bosnia and Herzegovina</option>
					<option>Botswana</option>
					<option>Bouvet Island</option>
					<option>Brazil</option>
					<option>Brunei Darussalam</option>
					<option>Bulgaria</option>
					<option>Burkina Faso</option>
					<option>Burundi</option>
					<option>Cambodia</option>
					<option>Cameroon</option>
					<option>Canada</option>
					<option>Cape Verde</option>
					<option>Cayman Islands</option>
					<option>Central African Republic</option>
					<option>Chad</option>
					<option>Chile</option>
					<option>China</option>
					<option>Colombia</option>
					<option>Comoros</option>
					<option>Congo</option>
					<option>Congo</option>
					<option>Cook Islands</option>
					<option>Costa Rica</option>
					<option>Ivory Coast</option>
					<option>Croatia (Hrvatska)</option>
					<option>Cuba</option>
					<option>Cyprus</option>
					<option>Czech Republic</option>
					<option>Denmark</option>
					<option>Djibouti</option>
					<option>Dominica</option>
					<option>Dominican Republic</option>
					<option>Ecuador</option>
					<option>Egypt</option>
					<option>El Salvador</option>
					<option>Equatorial Guinea</option>
					<option>Eritrea</option>
					<option>Estonia</option>
					<option>Ethiopia</option>
					<option>Falkland Islands</option>
					<option>Faroe Islands</option>
					<option>Fiji</option>
					<option>Finland</option>
					<option>France</option>
					<option>French Guiana</option>
					<option>French Polynesia</option>
					<option>Gabon</option>
					<option>Gambia</option>
					<option>Georgia</option>
					<option>Germany</option>
					<option>Ghana</option>
					<option>Gibraltar</option>
					<option>Greece</option>
					<option>Greenland</option>
					<option>Grenada</option>
					<option>Guadeloupe</option>
					<option>Guam</option>
					<option>Guatemala</option>
					<option>Guinea</option>
					<option>Guinea-Bissau</option>
					<option>Guyana</option>
					<option>Haiti</option>
					<option>Honduras</option>
					<option>Hong Kong</option>
					<option>Hungary</option>
					<option>Iceland</option>
					<option>India</option>
					<option>Indonesia</option>
					<option>Iran</option>
					<option>Iraq</option>
					<option>Ireland</option>
					<option>Israel</option>
					<option>Italy</option>
					<option>Jamaica</option>
					<option>Japan</option>
					<option>Jordan</option>
					<option>Kazakhstan</option>
					<option>Kenya</option>
					<option>Kiribati</option>
					<option>Korea</option>
					<option>Kuwait</option>
					<option>Kyrgyzstan</option>
					<option>Laos</option>
					<option>Latvia</option>
					<option>Lebanon</option>
					<option>Lesotho</option>
					<option>Liberia</option>
					<option>Libyan</option>
					<option>Liechtenstein</option>
					<option>Lithuania</option>
					<option>Luxembourg</option>
					<option>Macao</option>
					<option>Macedonia, </option>
					<option>Madagascar</option>
					<option>Malawi</option>
					<option>Malaysia</option>
					<option>Maldives</option>
					<option>Mali</option>
					<option>Malta</option>
					<option>Marshall Islands</option>
					<option>Martinique</option>
					<option>Mauritania</option>
					<option>Mauritius</option>
					<option>Mexico</option>
					<option>Micronesia</option>
					<option>Moldova, Republic of</option>
					<option>Monaco</option>
					<option>Mongolia</option>
					<option>Montserrat</option>
					<option>Morocco</option>
					<option>Mozambique</option>
					<option>Myanmar</option>
					<option>Namibia</option>
					<option>Nauru</option>
					<option>Nepal</option>
					<option>Netherlands</option>
					<option>Netherlands Antilles</option>
					<option>New Caledonia</option>
					<option>New Zealand</option>
					<option>Nicaragua</option>
					<option>Niger</option>
					<option>Nigeria</option>
					<option>Niue</option>
					<option>Norfolk Island</option>
					<option>Northern Mariana Islands</option>
					<option>Norway</option>
					<option>Oman</option>
					<option>Pakistan</option>
					<option>Palau</option>
					<option>Panama</option>
					<option>Papua New Guinea</option>
					<option>Paraguay</option>
					<option>Peru</option>
					<option>Philippines</option>
					<option>Pitcairn</option>
					<option>Poland</option>
					<option>Portugal</option>
					<option>Puerto Rico</option>
					<option>Qatar</option>
					<option>R&eacute;union</option>
					<option>Romania</option>
					<option>Russian Federation</option>
					<option>Rwanda</option>
					<option>Saint Helena</option>
					<option>Saint Kitts and Nevis</option>
					<option>Saint Lucia</option>
					<option>Saint Pierre</option>
					<option>Saint Vincent</option>
					<option>Samoa</option>
					<option>San Marino</option>
					<option>Sao Tome and Principe</option>
					<option>Saudi Arabia</option>
					<option>Senegal</option>
					<option>Seychelles</option>
					<option>Sierra Leone</option>
					<option>Singapore</option>
					<option>Slovakia</option>
					<option>Slovenia</option>
					<option>Solomon Islands</option>
					<option>Somalia</option>
					<option>South Africa</option>
					<option>Spain</option>
					<option>Sri Lanka</option>
					<option>Sudan</option>
					<option>Suriname</option>
					<option>Swaziland</option>
					<option>Sweden</option>
					<option>Switzerland</option>
					<option>Syrian Arab Republic</option>
					<option>Taiwan</option>
					<option>Tajikistan</option>
					<option>Tanzania</option>
					<option>Thailand</option>
					<option>Togo</option>
					<option>Tokelau</option>
					<option>Tonga</option>
					<option>Trinidad and Tobago</option>
					<option>Tunisia</option>
					<option>Turkey</option>
					<option>Turkmenistan</option>
					<option>Turks</option>
					<option>Tuvalu</option>
					<option>Uganda</option>
					<option>Ukraine</option>
					<option>United Arab Emirates</option>
					<option>United Kingdom</option>
					<option>United States</option>
					<option>Uruguay</option>
					<option>Uzbekistan</option>
					<option>Vanuatu</option>
					<option>Venezuela</option>
					<option>Vietnam</option>
					<option>Virgin Islands (British)</option>
					<option>Virgin Islands (US)</option>
					<option>Wallis</option>
					<option>Western Sahara</option>
					<option>Yemen</option>
					<option>Serbia</option>
					<option>Zambia</option>
					<option>Zimbabwe</option>
					<option>Montenegro</option>
				</select>
			</fieldset>
			<fieldset>
				<label for="">Zip Code *</label>
				<input type="text" id="zip" name="zip" required />
			</fieldset>
			<fieldset class="tel">
				<label>Telephone *</label>
				<input type="tel"  name="phone" value="" placeholder="(###) ### - ####" original-title="(area code) xxx-xxxx" required />
				<div> – </div> 
				<input type="text" name="countryCode" value="" placeholder="###" maxlength="5" original-title="(country code)" />
			</fieldset>
			<fieldset>
				<label for="">Email *</label>
				<input type="text" id="email" name="email" required />
			</fieldset>
		</div>
	</div>
	<!-- /end step one -->
				

	<div class="container">
		<h2>2. Personal Information</h2>
		<div class="info">
			<p>Please complete all the information below.</p>
		</div>
		
		<div class="fSet">
			<fieldset class="radiobutton">
				<label for="">Gender *</label>
				<input checked type="radio" name="gender" value="female" class="radiobtn" id="fcont" onClick="javascript:female();" />
				<p title="first">Female</p>
				<input type="radio" name="gender" value="male" class="radiobtn" id="mcont" onClick="javascript:male();" />
				<p>Male</p>
			</fieldset>
			<fieldset class="birthday">
				<label for="">Birthday *</label>
				<select name="bdyear" class="year" onchange="ofAge();" required >
					<option selected="selected" value="-1">Year</option>
					<option>2000</option>
					<option>1999</option>
					<option>1998</option>
					<option>1997</option>
					<option>1996</option>
					<option>1995</option>
					<option>1994</option>
					<option>1993</option>
					<option>1992</option>
					<option>1991</option>
					<option>1990</option>
					<option>1989</option>
					<option>1988</option>
					<option>1987</option>
					<option>1986</option>
					<option>1985</option>
					<option>1984</option>
					<option>1983</option>
					<option>1982</option>
					<option>1981</option>
					<option>1980</option>
					<option>1979</option>
					<option>1978</option>
					<option>1977</option>
					<option>1976</option>
					<option>1975</option>
					<option>1974</option>
					<option>1973</option>
					<option>1972</option>
					<option>1971</option>
					<option>1970</option>
					<option>1969</option>
					<option>1968</option>
					<option>1967</option>
					<option>1966</option>
					<option>1965</option>
					<option>1964</option>
					<option>1963</option>
					<option>1962</option>
					<option>1961</option>
					<option>1960</option>
					<option>1959</option>
					<option>1958</option>
					<option>1957</option>
					<option>1956</option>
					<option>1955</option>
					<option>1954</option>
					<option>1953</option>
					<option>1952</option>
					<option>1951</option>
					<option>1950</option>
					<option>1949</option>
					<option>1948</option>
					<option>1947</option>
					<option>1946</option>
					<option>1945</option>
					<option>1944</option>
					<option>1943</option>
					<option>1942</option>
					<option>1941</option>
				</select>
				<select name="bdday" class="day" onchange="ofAge();" required>
					<option selected="selected" value="-1" >Day</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>
				<select name="bdmonth" class="month" onchange="ofAge();" required>
					<option selected="selected" value="-1" >Month</option>
					<option value="1" >January</option>
					<option value="2" >February</option>
					<option value="3" >March</option>
					<option value="4">April</option>
					<option value="5" >May</option>
					<option value="6" >June</option>
					<option value="7" >July</option>
					<option value="8" >August</option>
					<option value="9" >September</option>
					<option value="10" >October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
			</fieldset>
			<fieldset id="consenta" style="display:none; ">
				<label for="">*parent/guardian name</label>
				<input type="text" id="parentname" name="parentname" />
			</fieldset>
			<fieldset id="consentb" style="display:none; ">
				<label for="">*parent/guardian phone</label>
				<input type="text" id="parentphone" name="parentphone" />
			</fieldset>
			<fieldset id="bio">
				<p class="directions">Tell us all about yourself, especially why you want to be a Model.</p>
				<textarea id="about_me" name="question"></textarea>
			</fieldset>
		</div>
	</div>
	<!-- /end of step 2 -->

	<form method="POST" enctype="multipart/form-data" action="/apply/Flashupload.php" id="image-upload-form" class='hidden'>
		<input name="FileData" type="file" id="upload-image" onchange="uploadImage()" />
		<input type="hidden" id="image-slot" name="image" value="" />
		<input type="hidden" id="is-video" name="is_video" value="" />
		<input type="hidden" id="DID" name="DID" value="" />
		<input type="hidden" id="slot-id" name="" value="" />
	</form>
	
</form>	

</div>
@stop
