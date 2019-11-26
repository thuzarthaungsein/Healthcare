<template>
<div class="col-lg-2 col-md-12 col-sm-12 pad-free custom-sidebar" id="admin-side-menu">
    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <div class="adminview-sidebar pc">
            <li>
               <router-link to="/" class="nav-link"><i class="fa fa-home"></i>&nbsp;ホーム</router-link>
            </li>
            <li  v-if="$auth.check(2)">
               <router-link to="/news_list" class="nav-link"><i class="fa fa-newspaper"></i>&nbsp;ニュース一覧</router-link>
            </li>
            <li v-if="$auth.check(2)">
               <router-link to="/categorylist" class="nav-link" ><i class="fa fa-file"></i>&nbsp;カテゴ一覧</router-link>
            </li>
            <li v-if="$auth.check(2)"><router-link to="/facilitieslist" class="nav-link" ><i class="fa fa-sun"></i>&nbsp;施設一覧</router-link></li>
            <li v-if="$auth.check(2)"><router-link to="/featurelist" class="nav-link" ><i class="fa fa-list"></i>&nbsp;&nbsp;特殊機能</router-link></li>
            <li v-if="$auth.check(2)"><router-link to="/occupationlist" class="nav-link"><i class="fa fa-suitcase"></i>&nbsp;&nbsp;職業</router-link></li>
            <li v-if="$auth.check(2)"><router-link to="/subjectlist" class="nav-link"><i class="fa fa-user-md"></i>&nbsp;&nbsp;医学科目</router-link></li>
            <li v-if="$auth.check(2)">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed nav-link text-pre"><i class="fa fa-user-lock"></i>&nbsp;管理者確認管理者確認</a>
                <ul class="list-unstyled collapse" id="pageSubmenu" style="">
                    <li><router-link to="/userPasswordResetList" class="nav-link"><i class="fa fa-undo"></i>&nbsp;事業者パスワードリセット</router-link></li>
                    <li><router-link to="/customerlist" class="nav-link"><i class="fa fa-user"></i>&nbsp;事業者</router-link></li>
                </ul>
            </li>
            <li  v-if="$auth.check(2)"><router-link to="/ads" class="nav-link"><i class="fa fa-globe"></i>&nbsp;広告</router-link></li>

            <li v-if="$auth.check(1)"><router-link to="/profiledit" class="nav-link"><i class="fa fa-map" ></i>&nbsp;&nbsp;  プロファイル編集</router-link></li>
            <li v-if="$auth.check(1)"><router-link to="/profile" class="nav-link"><i class="fa fa-map"></i>&nbsp;&nbsp;  マイページ</router-link></li>
            <li v-if="$auth.check(1)"><router-link to="/jobofferlist" class="nav-link"><i class="fa fa-edit" ></i>&nbsp;&nbsp;  仕事一覧</router-link></li>
           
            <li v-if="$auth.check()">
                <a href="#" @click.prevent="$auth.logout()" class="nav-link">Logout</a>
            </li>
            </div>
        </ul>
    </div>
</template>

<script>
  export default {
    data() {
      return {
       
      }
    },
    mounted() {
       
       
    },

  }
</script>