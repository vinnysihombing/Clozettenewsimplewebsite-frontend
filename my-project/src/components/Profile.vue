<template>
<div class="container">
    <div class="jumbotron mt-5">
        <div class="col-sm08 mx-auto">
            <h1>Profile</h1>
        </div>
        <table class="table col-md-6 mx-md-auto">
            <tbody>
            <tr>
                <td>Nama</td>
                <td>{{whole_name}}
            </tr>
            <tr>
                <td>Email</td>
                <td>{{email}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</template>
<script>
import axios from 'axios'
export default {
  data(){
    this.getUser().then(res=>{
      this.whole_name=res.user.name
      this.email=res.user.email
      return res
    })
    return{
      whole_name:'',
      email:''
    }
  },
  methods:{
    getUser(){
      return axios.get('/api/profile', {
        headers:{
          Authorization:'bearer $(localStorage.usertoken)'
        }
      })
      .then(res=>{
        return res.data
      })
      .catch(err=>{
        console.log(err)
      })
    }
  }
}
</script>