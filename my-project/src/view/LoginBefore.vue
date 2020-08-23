<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mx-auto">
                <form v-on:submit.prevent="login">
                    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                    <div class="form group">
                        <label for="email">Email Address</label>
                        <input type="email" v-model="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form group">
                        <label for="password">Password</label>
                        <input type="password" v-model="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block">Login</button>
                </form>
            </div>
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

</style>