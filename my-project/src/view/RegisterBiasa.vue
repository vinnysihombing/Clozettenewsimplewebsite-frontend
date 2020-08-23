<template>
<div>
  <div class="hello">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="logo-continer" align="center">
	    <a href="/" onclick="_gaq.push(['_trackEvent', 'Home', 'click_header_logo', 'Clozette Header Logo']);">
      <img src="//cimg.clozette.co.id/img/static/cid-new-logo.png"></a>
      <div class="header clearfix"></div>
<br/>
<!--Navigasi-->

<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="width:75%;">
  <a class="navbar-brand" href="#">Clozette</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" 
  aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
    <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tutorials
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item">
            <router-link to="/hijab" class="nav-link">Hijab</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/diyproject" class="nav-link" >DIY Project </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/nails" class="nav-link" >Nails</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/hair" class="nav-link" >Hair</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/makeup" class="nav-link" >Make Up</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/skincare" class="nav-link" >Skin Case</router-link>
          </li>
        </div>
      </li>

      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Insiders
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item">
            <router-link to="/beauty" class="nav-link">Beauty</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/hijab" class="nav-link" >Hijab</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/fashion" class="nav-link" >Fashion</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/lifestyle" class="nav-link" >Lifestyle</router-link>
          </li>
        </div>
      </li>
    </ul>
  </div>
  
   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" id="navbarDropdown" 
       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nama User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item">
            <router-link to="/profile" class="nav-link">Profile</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/post" class="nav-link" >Post</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/kategori" class="nav-link" >Kategori</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/user" class="nav-link" >Users</router-link>
          </li>
        </div>
      </li>
    </ul>
</nav>
   <!-- Full Page Intro -->
          <div class="view" style="background-image: url('https://www.clozette.co.id/cd/img/xlogin_page_bg_bianca.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row mt-5">
                  <!--Grid column-->
                  <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                  <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6 col-xl-5 mb-4">
                    <!--Form-->
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="white-text"></i> Sign up</h3>
                          <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <div class="md-form">
                          <input type="text" v-model="username" id="form3" class="white-text form-control" placeholder="Username">
                        </div>
                        <br/>
                        <div class="md-form">
                          <input type="email" v-model="email" id="form2" class="white-text form-control"  placeholder="Your Email Address">
                        </div>
                        <br/>
                        <div class="md-form">
                          <input type="password" v-model="password" id="form4" class="white-text form-control"  placeholder="Password">
                        </div>
                        <br/>
                        <div class="md-form">
                          <input type="password" v-model="confirmpassword" id="form5" class="white-text form-control" placeholder="Confirm Password">
                        </div>
                        <br/>
                         <div class="md-form">
                          <input type="text" v-model="bio" id="form6" class="white-text form-control" placeholder="Bio">
                        </div>
                        <br/>
                         <div class="md-form">
                          <input type="text" v-model="no_telp" id="form7" class="white-text form-control" placeholder="No Telepon">
                        </div>
                        <br/>
                    <div class="form-group">
                      <div class="white-text form-control">
                          <select name="reg_country" v-model="reg_country" id="reg_country" size="1" onkeydown="if(event.keyCode==13){document.getElementById('sign-up-but').click();}">
                            <option value="" disabled="" selected="" style="display:none;" >Pilih Negara</option>
                              <option value="Indonesia" selected="selected">Indonesia</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Thailand">Thailand</option>
                              <option value="India">India</option>
                              <option value="China">China</option>
                              <option value="Australia">Australia</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Japan">Japan</option>
                              <option value="Korea, South Korea">Korea, South Korea</option>
                              <option value="Taiwan">Taiwan</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                              <option value="Vietnam">Vietnam</option>
                              <option value="-">--------------------------------------</option>
                              <option value="Afghanistan">Afghanistan</option>
                              <option value="Albania">Albania</option>
                              <option value="Algeria">Algeria</option>
                              <option value="American Samoa">American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antarctica">Antarctica</option>
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
                              <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Bouvet Island">Bouvet Island</option>
                              <option value="Brazil">Brazil</option>
                              <option value="Chagos Islands">Chagos Islands</option>
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
                              <option value="Congo Democratic Republic">Congo Democratic Republic</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Cote D'ivoire">Cote D'ivoire</option>
                              <option value="Croatia">Croatia</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
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
                              <option value="French South. Territories">French South. Territories</option>
                              <option value="Gabon">Gabon</option>
                              <option value="Gambia">Gambia</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Germany">Germany</option>
                              <option value="Ghana">Ghana</option>
                              <option value="Gibraltar">Gibraltar</option>
                              <option value="Greece">Greece</option>
                              <option value="Greenland">Greenland</option>
                              <option value="Grenada">Grenada</option>
                              <option value="Guadeloupe">Guadeloupe</option>
                              <option value="Guam">Guam</option>
                              <option value="Guatemala">Guatemala</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guinea-bissau">Guinea-bissau</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Heard &amp; Mcdonald Islands">Heard &amp; Mcdonald Islands</option>
                              <option value="Holy See">Holy See</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Korea, North Korea">Korea, North Korea</option>
                              <option value="Korea, South Korea">Korea, South Korea</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Laos">Laos</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon">Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macao">Macao</option>
                              <option value="Macedonia">Macedonia</option>
                              <option value="Madagascar">Madagascar</option>
                              <option value="Malawi">Malawi</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Maldives">Maldives</option>
                              <option value="Mali">Mali</option>
                              <option value="Malta">Malta</option>
                              <option value="Marshall Islands">Marshall Islands</option>
                              <option value="Martinique">Martinique</option>
                              <option value="Mauritania">Mauritania</option>
                              <option value="Mauritius">Mauritius</option>
                              <option value="Mayotte">Mayotte</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Micronesia">Micronesia</option>
                              <option value="Moldova">Moldova</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Namibia">Namibia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="Netherlands Antilles">Netherlands Antilles</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau">Palau</option>
                              <option value="Palestinian Territory">Palestinian Territory</option>
                              <option value="Panama">Panama</option>
                              <option value="Papua New Guinea">Papua New Guinea</option>
                              <option value="Paraguay">Paraguay</option>
                              <option value="Peru">Peru</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Pitcairn">Pitcairn</option>
                              <option value="Poland">Poland</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Qatar">Qatar</option>
                              <option value="Reunion">Reunion</option>
                              <option value="Romania">Romania</option>
                              <option value="Russian Federation">Russian Federation</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="St Helena">St Helena</option>
                              <option value="St Kitts &amp; Nevis">St Kitts &amp; Nevis</option>
                              <option value="St Lucia">St Lucia</option>
                              <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                              <option value="St Vincent, The Grenadines">St Vincent, The Grenadines</option>
                              <option value="Samoa">Samoa</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Serbia &amp; Montenegro">Serbia &amp; Montenegro</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra Leone">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Georgia">South Georgia</option>
                              <option value="Spain">Spain</option>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Svalbard &amp; Jan Mayen">Svalbard &amp; Jan Mayen</option>
                              <option value="Swaziland">Swaziland</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                              <option value="Taiwan">Taiwan</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania">Tanzania</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Timor-leste">Timor-leste</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Uganda">Uganda</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                              <option value="Uruguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Vietnam">Vietnam</option>
                              <option value="Virgin Islands, British">Virgin Islands, British</option>
                              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                              <option value="Wallis &amp; Futuna">Wallis &amp; Futuna</option>
                              <option value="Western Sahara">Western Sahara</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div>
                      <div id="reg_country_error" class="control-error"><span></span></div>
                    </div>  
                        <div class="text-center mt-4">
                          <button class="btn btn-lang btn-primary btn-block"> Sign Up</button>
                          <!-- <button class="button button3"><router-link to="/login" class="nav-link">Sign Up</router-link></button> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/.Form-->
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
<!--Footer-->
<br/>
<br/>
<footer>
<div class="clear"></div>
<div class="footer">
<div class="about-menu-div">
<ul>
  <li>
    <span>ABOUT</span>
  </li>
  <li>
    <span>HELP</span>
  </li>
  <li>
    <span>FOLLOW US</span>
  </li>
   <li>
    <span>MOBILE APPS</span>
  </li>
  <li>
    <span>CLOZETTE GROUP</span>
  </li>
  <li>
    <span>PARTNER SITES</span>
  </li>

   <li><a>Corporate Information</a></li>
   <li><a href="mailto:hello@clozette.co">Contact Us</a></li>
   <li><a href="https://www.facebook.com/ClozetteIndonesia" target="_blank">Facebook</a></li>
   <li><a href="https://play.google.com/store/apps/details?id=co.clozette.shoppe" target="_blank">Clozette Shoppe</a></li>
    <li><a href="http://www.clozette.co" target="_blank">Clozette.co</a></li>
    <li><a href="http://femaledaily.com/" target="_blank">Female Daily</a></li>
    <li><a href="/info/company_news">Company News</a></li>
    <li><a href="/info/help">My Virtual Closet</a></li>
    <li><a href="https://twitter.com/clozetteid" target="_blank">Twitter</a></li>
    <li><a target="_blank"></a></li>
    <li><a href="http://id.clozette.com" target="_blank">Clozette Indonesia</a></li>
    <li><a href="http://mommiesdaily.com/" target="_blank">Mommies Daily</a></li>
	<li><a href="/info/terms">Terms of Use</a></li>
    <li><a href="/info/help">Account Settings</a></li>
    <li><a href="https://instagram.com/clozetteid" target="_blank">Instagram</a></li>
    <li><a target="_blank"></a></li>
    <li><a href="http://www.oshare.com.tw" target="_blank">O SHa'Re Taiwan</a></li>
    <li><a href="http://www.glamasia.com/" target="_blank">Glam Asia</a></li>
    <li><a href="/info/privacy">Privacy Policy</a></li>
    <li><a href="/info/help">Key Sections</a></li>
    <li><a href="https://www.youtube.com/user/clozetteid" target="_blank">YouTube</a></li>
    <li><a target="_blank"></a></li>
    <li><a href="http://clozette.glam.jp" target="_blank">Glam Clozette Japan</a></li>
    <li><a target="_BLANK" href="http://www35t.glam.com/jsadclick.act?8^2^a93ea9642e37e88feacbc45148728555^115174139528665382311^1646228586^0^/^888x10^204571623^25299855^-1^-1^-1^204571623^0^0^402865931883653^^^0^^SG^0^0^0^^SINGAPORE^5000^0^None^0^^@http://www.glam.com"><img src="http://indo.zettecdn.com/static/mood-glam.gif" width="110" height="16"></a></li>
    <li><a href="/info/copyright">Copyright</a></li>
</ul>
<div class="clearfix">
  <a href="/"><img left src="//cimg-indo.clozette.co.id/static/clozetteIndo-logo-reverse.png" style="width:400px;"></a>
  <li><a target="_blank"></a></li>
</div>
    <p style="text-align:right;margin-top:-10px;">Palma One Building, 10th Floor, Suite 1004 Jl. HR Rasuna Said Kav. X2 No. 4, Jakarta 12950, Indonesia</p>
		<br/>
    <p style="float:right;margin-top:-37px;">Copyright © <!---->2016  Clozette Pte Ltd</p>
</div>	 
</div>
</footer>
</div>
</div>

</template>
<script>
import axios from 'axios'
import router from '../router'
export default {
  data(){
    return{
      username:'',
      email:'',
      password:'',
      confirmpassword:'',
      bio:'',
      no_telp:'',
      reg_country:''
    }
  },
  methods:{
    register(){
      axios.post('/api/register',
      {
        username: this.username,
        email: this.email,
        password: this.password,
        confirmpassword: this.confirmpassword,
        bio: this.bio,
        no_telp: this.no_telp,
        reg_country: this.reg_country
      })
      .then((res) => {
        // localStorage.setItem('userToken', res.data.token)
        // this.username=''
        // this.email=''
        // this.password=''
        // this.confirmpassword=''
        // this.bio=''
        // this.no_telp=''
        console.log(res)
        router.push({name:'Login'})
        })
      .catch((err) => {
        console.log(err)
        })
        }
      }
    }
</script>
<style scoped>
html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 100px;
  }
}
@media (min-width: 80px) and (max-width: 85px) {
  html,
  body,
  header,
  .view {
    height: 65px;
  }
}

.top-nav-collapse {
  background-color: #3f51b5 !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #3f51b5 !important;
  }
}

.rgba-gradient {
  background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
  background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%));
  background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
}

.card {
  background-color: rgba(0, 0, 0, 0.75);
}

.md-form label {
  color: #ffffff;
}

h6 {
  line-height: 1.7;
}


</style>