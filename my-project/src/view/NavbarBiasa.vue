<template>
<body>
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
      
      <li class="nav-item">
        <router-link class="nav-link" to="/">Home<router-link>
      </li>
      <li v-if="auth==''" class="nav-item">
        <router-link class="nav-link" to="/login">Login<router-link>
      </li>
      <li v-if="auth=='loggedin'" class="nav-item">
        <router-link class="nav-link" to="/register">Register<router-link>
      </li>
      <li v-if="auth=='loggedin'" class="nav-item">
        <router-link class="nav-link" to="/profile">Profile<router-link>
      </li>
      <li v-if="auth=='loggedin'" class="nav-item">
        <router-link class="nav-link" href="">Logut<router-link>
      </li>

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
<br/>
<!--Body-->
<div class="card mb-3">
 <a href="/"><img src="//cimg.clozette.co.id/img/dl-banner-in-house-beauty.jpg" alt="" style="width:75%;"></a>
  <div class="card-body">
    <h5 class="card-title">Clozette Insider</h5>
    <p class="card-text"><small class="text-muted">Community Trend Stories & News From Brands We Love</small></p>
  </div>
</div>
<img src="//cimg.clozette.co.id/img/community/about_v2/com_hijab.png" title="Hijab Community" style="width:65%;">
<img src="//cimg.clozette.co.id/img/community/about_v2/com_fashion.png" title="Fashion Community" style="width:65%;">
<img src="//cimg.clozette.co.id/img/community/about_v2/com_similar.jpg" title="Buy similar" style="width:65%;">
<img src="//cimg.clozette.co.id/img/community/about_v2/com_share.jpg" title="Share" style="width:65%;">
<img src="//cimg.clozette.co.id/img/community/about_v2/text_bottom.jpg" title="Sign Up" style="width:35%;">
<br/>
<button class="button button2"><router-link to="/register" class="nav-link">SIGN-UP NOW!</router-link></button>
<button class="button button2"><router-link to="/login" class="nav-link">LOGIN NOW!</router-link></button>
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
</div>
</body>
</template>

<script>
import EventBus from './EventBus'

export default {
  data(){
    return{
      auth:'',
      user:''
    }
  },
  methods:{
    logout(){
      localStorage.removeItem('usertoken')
    }
  },
  maunted(){
    EventBus.$on('logged-in', status=>{
      this.auth=status
    })
  }
}
</script>
