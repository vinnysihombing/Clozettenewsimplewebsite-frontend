<template>
  <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mx-auto">
                <form v-on:submit.prevent="register">
                    <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                     <div class="form group">
                        <label for="email">Username</label>
                        <input type="text" v-model="username" class="form-control" name="username" placeholder="username">
                    </div>
                    <div class="form group">
                        <label for="email">Email Address</label>
                        <input type="email" v-model="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form group">
                        <label for="password">Password</label>
                        <input type="password" v-model="password" class="form-control" name="password" placeholder="password">
                    </div>
                     <div class="form group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" v-model="confirm_password" class="form-control" name="confirm_password" placeholder="confirm password">
                    </div>
                    <div class="form group">
                        <label for="bio">Bio</label>
                        <input type="text" v-model="confirmpassword" class="form-control" name="bio" placeholder="Bio">
                    </div>
                     <div class="form group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" v-model="no_telp" class="form-control" name="no_telp" placeholder="Nomor Telepon">
                    </div>
                    <div class="form group">
                        <label for="negara">Negara</label>
                        <input type="text" v-model="negara" class="form-control" name="negara" placeholder="Negara">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block">Register</button>
                </form>
            </div>
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
      confirm_password:'',
      bio:'',
      no_telp:'',
      negara:''
    }
  },
  methods:{
    register(){
      axios.post('/api/register',
      {
        username: this.username,
        email: this.email,
        password: this.password,
        confirm_password: this.confirm_password,
        bio: this.bio,
        no_telp: this.no_telp,
        reg_country: this.negara
      })
      .then((res) => {
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