<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Inscription</div>
            <div class="card-body">
                <div class="alert alert-danger" v-if="has_error && !success">
                    <p v-if="error == 'registration_validation_error'">Validation error (s), please consult the message (s) below.</p>
                    <p v-else>Error, can not register at the moment. If the problem persists, please contact an administrator.</p>
                </div>
                <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                    <div class="form-group">
                        <input type="file" @change="onFileChange" v-bind="img"/>
                        <div id="preview">
                            <img v-if="url" :src="url" class="img-thumbnail img" />
                        </div>
                    </div>
               
                      
                    <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.username }">
                        <label for="usrename">User Name</label>
                        <input type="text" id="username" class="form-control" placeholder="John Smith" v-model="username">
                        <span class="help-block text-danger" v-if="has_error && errors.username">{{ errors.username[0] }}</span>
                    </div>
                    <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.email }">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email">
                        <span class="help-block text-danger" v-if="has_error && errors.email">{{ errors.email[0] }}</span>
                    </div>
                    <div class="form-group">
                      <label>Select Cities:</label>
                      <select class='form-control custom-select' v-model="city" @change="getTownship() , show ^= show">
                        <option value="">Select City</option>
                        <option v-for ="city in cities"  :value='city.id'>{{ city.city_name }}</option>
                      </select>
                    </div>
                    <div class="" v-bind:class="{'is-hide form-group' : show }"> 
                      <label>Select Township:</label>
                      <select class='form-control custom-select' v-model='township' >
                        <option value="">Select township</option>
                        <option v-for ="township in townships"   :value='township.id'>{{ township.township_name }}</option>
                      </select>
                    </div>
                    <div class=""  @change="getType()"> 
                      <label>Select Township:</label>
                      <select class='form-control custom-select' v-model='type' >
                      <option value="">タイプを選択</option>
                      <option :value="1">病院</option>
                      <option :value="2">看護</option>
                      </select>
                    </div>
                    <div class="custom-control custom-radio" v-for="type in types" :key="type.id">
                      <input type="radio" class="custom-control-input" :value="type.id" v-model="typ" :id="type.id">
                      <label class="custom-control-label" :for="type.id" >{{type.name}}</label>
                    </div>
                    <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.password }">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" v-model="password">
                        <span class="help-block text-danger" v-if="has_error && errors.password">{{ errors.password[0] }}</span>
                    </div>
                    <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.password }">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" class="form-control" v-model="password_confirmation">
                    </div>
                    <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.phone }">
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone" class="form-control"  v-model="phone">
                        <span class="help-block text-danger" v-if="has_error && errors.phone">{{ errors.phone[0] }}</span>
                    </div>
                    <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.address }">
                        <label for="usrename">Address</label>
                        <input type="text" id="address" class="form-control" placeholder="John Smith" v-model="address">
                        <span class="help-block text-danger" v-if="has_error && errors.address">{{ errors.address[0] }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        images:'',
        username: '',
        email: '',
        cities: [],
        city : '',
        townships :[],
        township :'',
        type:'',
        typ:[],
        types:[],
        phone:'',
        address:'',
        password: '',
        password_confirmation: '',
        has_error: false,
        error: '',
        errors: {},
        success: false,
        show: true,
        url: '',
      }
      
    },

    methods: {
      getCities() {
         this.axios.get('auth/getCities/')
         .then(function (response) {
          this.cities = response.data;
          }.bind(this));
      },
      getTownship(){
        this.axios.get('auth/township',{
          params:{
            city:this.city
          },
        }).then((response)=>{
          this.townships = response.data
        })
      },
      getType(){
        this.axios.get('auth/getTypes',{
          params:{
            type:this.type
          },
        }).then((response)=>{ 
          this.types = response.data
          console.log(response.data)
        })
      },
      onFileChange(e) {
      const file = e.target.files[0];
      this.images = file.name;
      this.url = URL.createObjectURL(file);
    },
      register() {
        var app = this
        this.$auth.register({
          data: {
            images:app.images,
            username:app.username,
            email: app.email,
            password: app.password,
            password_confirmation: app.password_confirmation,
            city:app.city,
            township:app.township,
            typ:app.typ,
            phone:app.phone,
            address:app.address
          },
          success: function () {
            this.$swal({
          title: 'What is your Name?',
          input: 'text',
          inputPlaceholder: 'Enter your name here',
          showCloseButton: true,
        });
            //app.success = true
            //this.$router.push({name: 'login', params: {successRegistrationRedirect: true}})
          },
          error: function (res) {
            console.log(res.response.data.errors)
            app.has_error = true
            app.error = res.response.data.error
            app.errors = res.response.data.errors || {}
          }
        })
      }

    },
    created(){
      this.getCities()
    }
    
  }
</script>

<style>
.is-hide{
  display:none;
}

.img{
    opacity: 1;
    transition: 0.5s;
    width:200px;
    height:200px;
  }
</style>