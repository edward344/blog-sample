<?php include 'header.php'; ?>

<form action="upload_profile.php" method="POST" enctype="multipart/form-data">

  <h3>Photo</h3>
    
  <div class="form-group">
    <label for="profile-photo">Upload a new photo (GIF, JPG or PNG; limit 2MB)</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
  <h3>Profile</h3>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" value="carlos@gmail.com" id="email">
  </div>

  <div class="form-group">
    <label for="email">Full Name:</label>
    <input type="text" name="name" class="form-control" value="Eduardo Alejandro Grando" id="email">
  </div>
  
    <label for="gender">Gender:</label>
   <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" value="Male" checked>Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" value="Female">Female
      </label>
    </div>
    
    <div class="form-group">
      <label for="country">Country:</label>
      <select class="form-control" id="sel1" name="country">
        <option>Afghanistan</option>
        <option>Albania</option>
        <option>Algeria</option>
        <option>Andorra</option>
        <option>Angola</option>
        <option>Antigua & Deps</option>
        <option>Argentina</option>
        <option>Armenia</option>
        <option>Australia</option>
        <option>Austria</option>
        <option>Azerbaijan</option>
        <option>Bahamas</option>
        <option>Bahrain</option>
        <option>Bangladesh</option>
        <option>Barbados</option>
        <option>Belarus</option>
        <option>Belgium</option>
        <option>Belize</option>
        <option>Benin</option>
        <option>Bhutan</option>
        <option>Bolivia</option>
        <option>Bosnia Herzegovina</option>
        <option>Botswana</option>
        <option>Brazil</option>
        <option>Brunei</option>
        <option>Bulgaria</option>
        <option>Burkina</option>
        <option>Burundi</option>
        <option>Cambodia</option>
        <option>Cameroon</option>
        <option>Canada</option>
        <option>Cape Verde</option>
        <option>Central African Rep</option>
        <option>Chad</option>
        <option>Chile</option>
        <option>China</option>
        <option>Colombia</option>
        <option>Comoros</option>
        <option>Congo</option>
        <option>Congo {Democratic Rep}</option>
        <option>Costa Rica</option>
        <option>Croatia</option>
        <option>Cuba</option>
        <option>Cyprus</option>
        <option>Czech Republic</option>
        <option>Denmark</option>
        <option>Djibouti</option>
        <option>Dominica</option>
        <option>Dominican Republic</option>
        <option>East Timor</option>
        <option>Ecuador</option>
        <option>Egypt</option>
        <option>El Salvador</option>
        <option>Equatorial Guinea</option>
        <option>Eritrea</option>
        <option>Estonia</option>
        <option>Ethiopia</option>
        <option>Fiji</option>
        <option>Finland</option>
        <option>France</option>
        <option>Gabon</option>
        <option>Gambia</option>
        <option>Georgia</option>
        <option>Germany</option>
        <option>Ghana</option>
        <option>Greece</option>
        <option>Grenada</option>
        <option>Guatemala</option>
        <option>Guinea</option>
        <option>Guinea-Bissau</option>
        <option>Guyana</option>
        <option>Haiti</option>
        <option>Honduras</option>
        <option>Hungary</option>
        <option>Iceland</option>
        <option>India</option>
        <option>Indonesia</option>
        <option>Iran</option>
        <option>Iraq</option>
        <option>Ireland {Republic}</option>
        <option>Israel</option>
        <option>Italy</option>
        <option>Ivory Coast</option>
        <option>Jamaica</option>
        <option>Japan</option>
        <option>Jordan</option>
        <option>Kazakhstan</option>
        <option>Kenya</option>
        <option>Kiribati</option>
        <option>Korea North</option>
        <option>Korea South</option>
        <option>Kosovo</option>
        <option>Kuwait</option>
        <option>Kyrgyzstan</option>
        <option>Laos</option>
        <option>Latvia</option>
        <option>Lebanon</option>
        <option>Lesotho</option>
        <option>Liberia</option>
        <option>Libya</option>
        <option>Liechtenstein</option>
        <option>Lithuania</option>
        <option>Luxembourg</option>
        <option>Macedonia</option>
        <option>Madagascar</option>
        <option>Malawi</option>
        <option>Malaysia</option>
        <option>Maldives</option>
        <option>Mali</option>
        <option>Malta</option>
        <option>Marshall Islands</option>
        <option>Mauritania</option>
        <option>Mauritius</option>
        <option>Mexico</option>
        <option>Micronesia</option>
        <option>Moldova</option>
        <option>Monaco</option>
        <option>Mongolia</option>
        <option>Montenegro</option>
        <option>Morocco</option>
        <option>Mozambique</option>
        <option>Myanmar, {Burma}</option>
        <option>Namibia</option>
        <option>Nauru</option>
        <option>Nepal</option>
        <option>Netherlands</option>
        <option>New Zealand</option>
        <option>Nicaragua</option>
        <option>Niger</option>
        <option>Nigeria</option>
        <option>Norway</option>
        <option>Oman</option>
        <option>Pakistan</option>
        <option>Palau</option>
        <option>Panama</option>
        <option>Papua New Guinea</option>
        <option>Paraguay</option>
        <option>Peru</option>
        <option>Philippines</option>
        <option>Poland</option>
        <option>Portugal</option>
        <option>Qatar</option>
        <option>Romania</option>
        <option>Russian Federation</option>
        <option>Rwanda</option>
        <option>St Kitts & Nevis</option>
        <option>St Lucia</option>
        <option>Saint Vincent & the Grenadines</option>
        <option>Samoa</option>
        <option>San Marino</option>
        <option>Sao Tome & Principe</option>
        <option>Saudi Arabia</option>
        <option>Senegal</option>
        <option>Serbia</option>
        <option>Seychelles</option>
        <option>Sierra Leone</option>
        <option>Singapore</option>
        <option>Slovakia</option>
        <option>Slovenia</option>
        <option>Solomon Islands</option>
        <option>Somalia</option>
        <option>South Africa</option>
        <option>South Sudan</option>
        <option>Spain</option>
        <option>Sri Lanka</option>
        <option>Sudan</option>
        <option>Suriname</option>
        <option>Swaziland</option>
        <option>Sweden</option>
        <option>Switzerland</option>
        <option>Syria</option>
        <option>Taiwan</option>
        <option>Tajikistan</option>
        <option>Tanzania</option>
        <option>Thailand</option>
        <option>Togo</option>
        <option>Tonga</option>
        <option>Trinidad & Tobago</option>
        <option>Tunisia</option>
        <option>Turkey</option>
        <option>Turkmenistan</option>
        <option>Tuvalu</option>
        <option>Uganda</option>
        <option>Ukraine</option>
        <option>United Arab Emirates</option>
        <option>United Kingdom</option>
        <option>United States</option>
        <option>Uruguay</option>
        <option>Uzbekistan</option>
        <option>Vanuatu</option>
        <option>Vatican City</option>
        <option>Venezuela</option>
        <option>Vietnam</option>
        <option>Yemen</option>
        <option>Zambia</option>
        <option>Zimbabwe</option>        
      </select>
    </div>
    
    <div class="form-group">
      <label for="city">City, State:</label>
      <input type="text" name="city" class="form-control" value="Corrientes" id="city">
    </div>
    
   <h3>Profile Questions</h3>
   
   <div class="form-group">
      <label for="type of vegetarian">Type of vegetarian:</label>
      <select class="form-control" id="vegetarian-type" name="vegetarian-type">
        <option>Vegan</option>
        <option>Vegetarian</option>
        <option>Lacto-Ovo vegetarian</option>
        <option>Ovo vegetarian</option>
        <option>Lacto vegetarian</option>
        <option>New vegetarian</option>
        <option>Raw vegan</option>
        <option>Fruitarian</option>
        <option>Pescatarian</option>
        <option>Semi vegetarian</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="relation">Relationship Status:</label>
      <select class="form-control" id="relationship-status" name="relationship-status">
        <option>Single</option>
        <option>In a relationship</option>
        <option>Engaged</option>
        <option>Married</option>
        <option>It's complicated</option>
        <option>In an open relationship</option>
        <option>Widowed</option>
        <option>Seperated</option>
        <option>Divorced</option>
      </select>
    </div>
    
    <label for="about">About:</label>
    <textarea class="form-control" name="about" rows="5" id="about"></textarea>
    
    <br>
    
  <button name="submit" type="submit" class="btn btn-primary">Save</button>
</form>

<?php include 'footer.php'; ?>