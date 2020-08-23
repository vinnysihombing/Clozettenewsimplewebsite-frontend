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
          <div class="view" style="background-image: url('https://www.clozette.co.id/cd/img/xlogin_page_bg_bianca.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; width:75%;">
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
                            <form v-on:submit.prevent="login">
                            <i class="white-text"></i> Login</h3>
                          <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <a href="#" class="fb btn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                        <div class="OR-container" id="OR-container-id">
                            <h5>atau</h5>
                        </div>
                        <div class="md-form">
                          <input type="email" v-model="email" id="form2" class="white-text form-control" placeholder="Your Email Address">
                        </div>
                        <br/>
                        <div class="md-form">
                          <input type="password" v-model="password" id="form4" class="white-text form-control" placeholder="Password">
                        </div>
                        <div class="alert">
			                <input type="checkbox" name="lf_remember_me" value="1" checked="">  Ingat saya		
                        </div>
                        <div class="text-center mt-4">
                          <!-- <button class="button button3"><router-link to="/" class="nav-link">Login</router-link></button> -->
                        <button class="btn btn-lg btn-primary btn-blog">Login</button>
                       
                        </div>
                        <a href="/account/login/resetpass" style="color: #000;">
				            Lupa kata sandi?			
                        </a>
                        <br/>
                        <br/>
                            <button class="button button4"><router-link to="/register" class="nav-link">Belum memiliki akun?<br>Daftar Sekarang!</router-link></button>	
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
import EventBus from './EventBus'
export default {
  data(){
    return{
      email:'',
      password:''
    }
  },
  methods:{
    login(){
      axios.post('/api/login',
      {
        email: this.email,
        password: this.password
      })
      .then((res) => {
        localStorage.setItem('userToken', res.data.token)
        this.email=''
        this.password=''
        router.push({
          name:'Profile'})
        })
      .catch((err) => {
        console.log(err)
        })
        this.emitMethod()
        },
        emitMethod(){
          EventBus.$emit('logged-in', 'loggedin')
      }
    }
  }
</script>
<style scoped>
.alert{
        color: #fff;
    font-size: 16px;
}
.fb {
  background-color: #3B5998;
  color: white;
  width:100%;
}
.button4 {
  background-color: #FF1761;
  border: 2px solid #3d9fd841;
  color: #FF1761;
  width:100%;
    -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
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
  background-color: #3d9fd841;
}

.md-form label {
  color: #ffffff;
  position:center;
}

h6 {
  line-height: 1.7;
}

</style>