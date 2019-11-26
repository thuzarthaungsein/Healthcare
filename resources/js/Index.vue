<template>

    <div id="main" class="col-md-10 offset-md-1 main-content pad-free">
    <button onclick="topFunction()" id="myBtn">Top</button>
            <HeaderMenu></HeaderMenu>

            <div class="sidebar-scroll container-fluid">
              <div class="row">
                      <asideMenu v-if="$auth.check()"></asideMenu>
<!-- login ================================================================================================== -->
                  <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pad-free" v-if="$auth.check()" id="content-all">
                      <div class="maintab-content" id="v-pills-tabContent">
                            <!--section one-->
                            <section>
                                <div class="container-fluid main-wrapper">
                                    <!--slider for ads-->
                                    <div class="col-md-auto pad-free">
                                      
                                    </div>
                                        <!--end slider for ads-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-12 col-lg-12 col-md-10 tab">
                                        <!-- vue component -->
                                            <router-view :key="$route.fullPath"></router-view>
                                      </div>
                                        <div class="col-12 col-lg-2 col-md-4" style="display:none">
                                            <!--related news-->
                                            <div class="m-b-10 ads-card">
                                                <!--ads slider-->
                                                <div style="display: block; overflow: hidden;border-radius:0.25rem;">
                                                   <div id="slider2_container" style="position: relative; float: left; top: 0px; left: 0px; width:167px; height:100%; overflow: hidden;">
                                                    <!-- Slides Container -->
                                                        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 167px; height: 100%; overflow: hidden;" class="side-ad-slider"> </div>
                                                    <!-- Trigger -->
                                                  </div>
                                                </div>
                                                <!--end ads slider-->
                                            </div>
                                            <div class="card m-b-10 ads-card">
                                                <div class="card-body">
                                                  <h5 class="card-title text-center">二つ目の広告</h5>
                                                    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                                    <img src="/images/logo_japanese_horizontal.png" alt="" class="img-responsivie" style="width:100%">
                                                </div>
                                            </div>
                                            <div class="card m-b-10 ads-card2">
                                                <div class="card-body today">
                                                    <ul id="menu" class="list-group list-group-flush"> </ul>
                                                </div>
                                            </div>
                                            <!-- end related news-->
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid footer footer-div">
                                      <span>Copyright©Management Partners Corp.All Rights Reserved. </span>
                                </div>
                            </section>
                            </div>
                      </div>

<!-- not login================================================================================================================ -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-free"  v-if="!$auth.check()" id="content-all">
                        <div class="maintab-content" id="v-pills-tabContent">
                            <!--section one-->
                            <section>
                                <div class="container-fluid main-wrapper">
                                    <!--slider for ads-->
                                    <div class="col-md-auto pad-free">
                                    <div class="row col-md-12 pad-free fixed-ads-fluid" style="hight:200px">
                                            <ads_slider></ads_slider>
                                    </div>
                                    </div>
                                        <!--end slider for ads-->
                                    <div class="row justify-content-md-center">
                                        <div class="col-12 col-lg-12 col-md-10 tab">
                                        <!-- vue component -->
                                            <router-view :key="$route.fullPath"></router-view>
                                      </div>
                                        <div class="col-12 col-lg-2 col-md-4" style="display:none">
                                            <!--related news-->
                                            <div class="m-b-10 ads-card">
                                                <!--ads slider-->
                                                <div style="display: block; overflow: hidden;border-radius:0.25rem;">
                                                   <div id="slider2_container" style="position: relative; float: left; top: 0px; left: 0px; width:167px; height:100%; overflow: hidden;">
                                                    <!-- Slides Container -->
                                                        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 167px; height: 100%; overflow: hidden;" class="side-ad-slider"> </div>
                                                    <!-- Trigger -->
                                                  </div>
                                                </div>
                                                <!--end ads slider-->
                                            </div>
                                            <div class="card m-b-10 ads-card">
                                                <div class="card-body">
                                                  <h5 class="card-title text-center">二つ目の広告</h5>
                                                    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                                    <img src="/images/logo_japanese_horizontal.png" alt="" class="img-responsivie" style="width:100%">
                                                </div>
                                            </div>
                                            <div class="card m-b-10 ads-card2">
                                                <div class="card-body today">
                                                    <ul id="menu" class="list-group list-group-flush"> </ul>
                                                </div>
                                            </div>
                                            <!-- end related news-->
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid footer footer-div">
                                      <span>Copyright©Management Partners Corp.All Rights Reserved. </span>
                                </div>
                            </section>
                            </div>
                        </div>
                      
                     
                 
              </div>
            </div>
       
    </div>
</template>
<script>
  import HeaderMenu from './components/menu/Menu.vue'
  import asideMenu from './components/menu/asideMenu.vue'
  export default {
    data() {
      return {
      
      }
    },
    components: {
      HeaderMenu,
      asideMenu
    }, 

    mounted(){
        this.axios.get('auth/user').then(res=>{
            console.log(res)
        })
        }

   
  }
</script>



