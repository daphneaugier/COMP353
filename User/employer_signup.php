<?php
  include_once "../config.inc.php";
  include_once "../functions.inc.php";

  my_page_start("Web Career Portal - Sign Up Page");

?>
    <div class="container">
 <div class="py-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="0">
  </div>

  <div class="signup-form row justify-content-center">
    <div class="col-md-6 order-md-2 mb-4">
      <h2>Employer Sign Up </h2>
      <form action="process_new_user.php" method="POST" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" required>
          <div class="invalid-feedback">
            Please enter a valid password.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter a valid address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" name="address2" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select name="country" class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
               <option value="Afganistan">Afghanistan</option>
               <option value="Albania">Albania</option>
               <option value="Algeria">Algeria</option>
               <option value="American Samoa">American Samoa</option>
               <option value="Andorra">Andorra</option>
               <option value="Angola">Angola</option>
               <option value="Anguilla">Anguilla</option>
               <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
               <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
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
               <option value="Cote DIvoire">Cote DIvoire</option>
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
               <option value="Indonesia">Indonesia</option>
               <option value="India">India</option>
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
               <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
               <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
               <option value="Saipan">Saipan</option>
               <option value="Samoa">Samoa</option>
               <option value="Samoa American">Samoa American</option>
               <option value="San Marino">San Marino</option>
               <option value="Sao Tome & Principe">Sao Tome & Principe</option>
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
               <option value="Trinidad & Tobago">Trinidad & Tobago</option>
               <option value="Tunisia">Tunisia</option>
               <option value="Turkey">Turkey</option>
               <option value="Turkmenistan">Turkmenistan</option>
               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
               <option value="Tuvalu">Tuvalu</option>
               <option value="Uganda">Uganda</option>
               <option value="United Kingdom">United Kingdom</option>
               <option value="Ukraine">Ukraine</option>
               <option value="United Arab Erimates">United Arab Emirates</option>
               <option value="United States of America">United States</option>
               <option value="Uraguay">Uruguay</option>
               <option value="Uzbekistan">Uzbekistan</option>
               <option value="Vanuatu">Vanuatu</option>
               <option value="Vatican City State">Vatican City State</option>
               <option value="Venezuela">Venezuela</option>
               <option value="Vietnam">Vietnam</option>
               <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
               <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
               <option value="Wake Island">Wake Island</option>
               <option value="Wallis & Futana Is">Wallis & Futana Is</option>
               <option value="Yemen">Yemen</option>
               <option value="Zaire">Zaire</option>
               <option value="Zambia">Zambia</option>
               <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select name="state" class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="membership">Membership Type</label>
            <select class="custom-select d-block w-100" name="membership" id="membership" required>
              <option value="Prime">Prime $50/Monthly</option>
              <option value="Gold">Gold $100/Monthly</option>
            </select>
            <div class="invalid-feedback">
              Please select a membership type.
            </div>
          </div>
        </div>
      
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" value="Credit Card" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" value="Debit Card" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" value="Paypal" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" name="cardholderName" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" name="cc-number" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" name="cc-expiration" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" name="cc-cvv" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="Submit" value="Create Account">
      </form>
      <div class="text-center">
        Already have an account? 
      <a href="../index.php">Sign in</a>
    </div>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020</p>
  </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>
