<template>
<!--navigation bar-->
<nav class="navbar navbar-expand-lg  main-header">

        <div class="container nav-warp d-flex">


          <div class="d-flex">
            <a class="navbar-brand logo-text" href="/">
              LOGO <span>HERE</span>
            </a>
            <p class="h-tel"><i class="fas fa-phone-alt"></i><span>03-1234-5678</span><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:mpm_secretary@management-partners.co.jp">mpm_secretary@management-partners.co.jp</a></p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="gNav">
            <li>
              <router-link :to="{ name: 'News' }"> ニュース（ホーム）</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'nursingSearch' }"><i class="fas fa-phone-alt"></i>介護施設検索</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'hospital_search' }"> 病院検索</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'jobSearch' }">求人検索</router-link>
            </li>
          </ul>

          <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarSupportedContent">
              <div class="d-flex">
                <ul class="navbar-nav ml-auto pc  d-flex justify-content-end">
                  
                  <li class="nav-item" v-if="!$auth.check()">
                    <router-link :to="{name: 'register'}" class="nav-link pad-free"> <i class="fas fa-phone-alt"></i>事業者 登録</router-link>
                  </li>
                  <li class="nav-item" v-if="!$auth.check()">
                    <router-link :to="{name: 'login'}" class="nav-link pad-free">事業者 ログイン</router-link>
                  </li>
                  <li class="social-link" v-if="!$auth.check()"><a href="http://localhost:8000/registerForm"><i class="fab fa-twitter"></i></a></li>
                  <li class="social-link" v-if="!$auth.check()"><a href="http://localhost:8000/registerForm"><i class="fab fa-facebook-f"></i></a></li>
        
                  <li class="nav-item col-12 userprofile-name pc" v-else>
                 
                  </li>
                  <li v-if="$auth.check()" class="nav-item btn login-register-btn col-lg-6 p-lr-0">
                      <a href="#" @click.prevent="$auth.logout()">Logout</a>
                  </li>
                </ul>
              </div>
          </div>



        </div>

      </nav>

  <!--end navigation bar-->

</template>
<script>
  export default {
    
    computed: {
 
},

  }
</script>