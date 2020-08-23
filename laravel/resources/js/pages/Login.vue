<template>
  <div class="container">
        <div class="card">
            <div class="card-header">Login</div>
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
  </div>
</template>
<script>
export default {
  name: 'login',
  props: ['app'],
  data(){
    return{
      email:'',
      password:'',
      errors: []
    }
  },
  methods:{
    onSubmit(){
      this.errors = [];
      if (!this.email){
        this.errors.push ('email is required')
      }
      if (!this.password){
        this.errors.push ('Password is required.');
      }
      if (!this.errors.length){
        const data = {
          email: this.email,
          password: this.password,
        };
        this.app.req
        .post('auth/login', data)
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