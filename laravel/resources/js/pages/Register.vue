<template>
  <div class="container">
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
              <div class="col-md-6 offset-md-6">
                <form v-on:submit-prevent="onSubmit">
                    <div class="alert alert-danger" v-if="errors.length">
                      <ul class="mb-8">
                        <li v-for="(error, index) in errors" :key= "index" >{{ error }}

                        </li>
                      </ul>
                    </div>
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
  </div>
</template>
<script>
export default {
  name: 'register',
  props: ['app'],
  data(){
    return{
      username:'',
      email:'',
      password:'',
      confirm_password:'',
      bio:'',
      no_telp:'',
      negara:'',
      errors: []
    }
  },
  methods:{
    onSubmit(){
      this.errors = [];
      if (!this.username){
        this.errors.push ('Username is required')
      }
      if (!this.password){
        this.errors.push ('Password is required.');
      }
      if (!this.confirm_password){
        this.errors.push ('Password Confirmation is required');
      }
      if (!this.password !== this.confirm_password){
        this.errors.push ('Password Tidak Sama');
      }
      if (!this.errors.length){
        const data = {
          username: this.username,
          email: this.email,
          password: this.password,
          confirm_password: this.confirm_password,
          bio: this.bio,
          no_telp: this.no_telp,
          negara: this.negara
        };
        this.app.req
        .post('auth/register', data)
        .then(response =>{
          this.app.user = response.data;
          this.$router.push("/");
        }).catch(error => {
          this.errors.push(error.response.data.error)
        });
      }
    }
  }
}
</script>