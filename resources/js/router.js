import VueRouter from 'vue-router'
// Pages
import Home from './components/home'
import Register from './pages/Register'
import Login from './pages/Login'
import Dashboard from './pages/user/Dashboard'
import AdminDashboard from './pages/admin/Dashboard'

import Newsdetails from "./components/Newsdetails.vue";
import hospitalSearch from "./components/hospitalSearch.vue";
import JobApply from "./components/JobApply.vue";
import jobapplylist from "./components/jobapplylist.vue";
import customerlist from "./components/customerlist.vue";
import JobSearchListComponent from "./components/JobSearchListComponent.vue";
import JobOfferComponent from "./components/JobOfferComponent.vue";
import job_details from "./components/job_details.vue";
import news_list from "./components/news_list.vue";
import create_news from "./components/create_news.vue";
import categorylist from "./components/categorylist.vue";
import createcategory from "./components/createcategory.vue";
import stationlist from "./components/stationlist.vue";
import createstation from "./components/createstation.vue";
import editstation from "./components/editstation.vue"; 
import FacilitiesListComponent from "./components/FacilitiesListComponent.vue";
import CreateFacilityComponent from "./components/CreateFacilityComponent.vue";
import custedit from "./components/custedit.vue";
import CustomerSearchListComponent from "./components/CustomerSearchListComponent.vue";
import NewsSearchListComponent from "./components/NewsSearchListComponent.vue";
import map from "./components/map.vue";
import EditFacilityComponent from "./components/EditFacilityComponent.vue";
import editcategory from "./components/editcategory.vue";
import createcustomer from "./components/CreateCustomer.vue";
import joboffercreate from "./components/JobOfferCreate.vue";
import editPost from "./components/editNewsPost.vue";
import Profile from "./components/Profile.vue";
import JobOfferList from "./components/JobOfferList.vue";
import ProfileEdit from "./components/ProfileEdit.vue";
import ProfilePublish from "./components/ProfilePublish.vue";
import advertisement from "./components/advertisement.vue";
import createmedicalacceptance from "./components/createmedicalacceptance.vue";
import medicalacceptancelist from "./components/medicalacceptancelist.vue";
import editmedicalacceptance from "./components/editmedicalacceptance.vue";
import userPasswordResetList from "./components/userPasswordResetList.vue";
import HospitalHistory from "./components/HospitalHistory.vue";
import favouriteHospital from "./components/favouriteHospital.vue";
import NursingHistory from "./components/NursingHistory.vue";
import HospitalProfile from "./components/HospitalProfile.vue";
import NursingProfile from "./components/NursingProfile.vue";
import VideoUpload from "./components/VideoUpload.vue";
import GoogleMap from "./components/GoogleMap.vue";
import type from "./components/Type.vue";
import typelist from "./components/TypeList.vue";
import subject from "./components/Subject.vue";
import subjectlist from "./components/SubjectList.vue";
import advertisementlist from "./components/advertisementlist.vue";
import editadvertisement from "./components/editadvertisement.vue";
import comment from "./components/Comment.vue";
import commentlist from "./components/commentlist.vue";
import featurelist from "./components/FeatureList.vue";
import favouriteNursing from "./components/favouriteNursing.vue";
import passport from "./components/passport.vue";
import specialfeature from "./components/CreateSpecialFeature.vue";
import nursingFavouriteMail from "./components/nursingFavouriteMail.vue";
import nursingMailConfirm from "./components/nursingMailConfirm.vue";
import modal from './components/modal.vue';
import termsAndConditions from './components/termsAndConditions.vue';
import occupation from './components/occupation.vue';
import occupationlist from './components/occupationlist.vue';
import nursingSearch from './components/nursingSearch.vue';
import jobSearch from './components/jobSearch.vue';
import News from './components/News.vue';
import Unauthorized from './components/403.vue';

import menu from './components/menu/Menu.vue';



// Routes
const routes = [
  
{
  path: '/Unauthorized',
  name: 'Unauthorized',
  component: Unauthorized,
},

  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: {
      auth: false
    }
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      auth: false
    }
  },
  // USER ROUTES
  {
    path: '/dashboard',
    name: 'dashboard',
    component: Dashboard,
    meta: {
      auth: true
    }
  },
  // ADMIN ROUTES
  {
    path: '/admin',
    name: 'admin.dashboard',
    component: AdminDashboard,
    meta: {
      auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/Unauthorized'}
    }
  },

   {
        name: 'News',
        path: '/',
        component: News,
        meta: {
          auth: undefined
        }
    },
  
    {
        name: 'jobSearch',
        path: '/jobSearch',
        component: jobSearch
    },
    {
        name: 'nursingSearch',
        path: '/nursingSearch',
        component: nursingSearch
    },
    {
        name: "passport",
        path: "/passport",
        component: passport
    },

    {
        name: "newdetails",
        path: "/newsdetails/:id",
        component: Newsdetails
    },
    {
        name: "hospital_search",
        path: "/hospital_search",
        component: hospitalSearch
    },
    {
        name: "jobapply",
        path: "/jobapply/:job_id",
        component: JobApply
    },
    {
        name: "customerlist",
        path: "/customerlist",
        component: customerlist,
        meta: {
          auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/Unauthorized'}
        }
    },
    {
        name: "customersearchlist",
        path: "/customersearchlist",
        component: CustomerSearchListComponent
    },
    {
        name: "newssearchlist",
        path: "/newssearchlist",
        component: NewsSearchListComponent
    },
    {
        name: "custedit",
        path: "/custsedit",
        component: custedit
    },
    {
        name: "jobsearchlist",
        path: "/jobsearchlist",
        component: JobSearchListComponent
    },

    {
        name: "job_details",
        path: "/job_details/:id",
        component: job_details
    },
    {
        name: "news_list",
        path: "/news_list",
        component: news_list,
        meta: {
          auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/Unauthorized'}
        }
    },
    {
        name: "create_news",
        path: "/create_news",
        component: create_news
    },
    {
        name: "editPost",
        path: "/editPost",
        component: editPost
    },
    {
        name: "categorylist",
        path: "/categorylist",
        component: categorylist
    },
    {
        name: "createcategory",
        path: "/createcategory",
        component: createcategory
    },
    {
        name: "editcategory",
        path: "/editcategory",
        component: editcategory
    },
    {
        name: "stationlist",
        path: "/stationlist",
        component: stationlist
    },
    {
        name: "createstation",
        path: "/createstation",
        component: createstation
    },
    {
        name: "editstation",
        path: "/editstation",
        component: editstation
    },
    {
        name: "facilitieslist",
        path: "/facilitieslist",
        component: FacilitiesListComponent
    },
    {
        name: "createfacility",
        path: "/createfacility",
        component: CreateFacilityComponent,
        meta: {
            requiresAuth: true
          }

    },

    {
        name: "editfacility",
        path: "/editfacility",
        component: EditFacilityComponent
    },
    {
        name: "createcustomer",
        path: "/createcustomer",
        component: createcustomer
    },
    {
        name: "profile",
        path: "/profile",
        component: Profile
    },
    {
        name: "profiledit",
        path: "/profiledit",
        component: ProfileEdit
    },
    {
        name: "jobofferlist",
        path: "/jobofferlist",
        component: JobOfferList
    },
    {
        name: "joboffercreate",
        path: "/joboffercreate",
        component: joboffercreate
    },
    {
        name: "profilepublish",
        path: "/profilepublish",
        component: ProfilePublish
    },
    {
        name: "hospital_history",
        path: "/hospital_history",
        component: HospitalHistory
    },
    {
        name: "createmedicalacceptance",
        path: "/createmedicalacceptance",
        component: createmedicalacceptance
    },

    {
        name: "medicalacceptancelist",
        path: "/medicalacceptancelist",
        component: medicalacceptancelist
    },

    {
        name: "editmedicalacceptance",
        path: "/editmedicalacceptance",
        component: editmedicalacceptance
    },
    {
        name: "userPasswordResetList",
        path: "/userPasswordResetList",
        component: userPasswordResetList
    },
    {
        name: "advertisement",
        path: "/advertisement",
        component: advertisement
    },

    {
        name: "favouriteHospital",
        path: "/favouriteHospital",
        component: favouriteHospital
    },
    {
        name: "favouriteNursing",
        path: "/favouriteNursing",
        component: favouriteNursing
    },
    {
        name: "type",
        path: "/type",
        component: type
    },
    {
        name: "typelist",
        path: "/typelist",
        component: typelist
    },
    {
        name: "subject",
        path: "/subject",
        component: subject
    },
    {
        name: "subjectlist",
        path: "/subjectlist",
        component: subjectlist
    },
    {
        name: "ads",
        path: "/ads",
        component: advertisementlist
    },
    {
        name: "editadvertisement",
        path: "/editads",
        component: editadvertisement
    },
    {
      name: 'nursing_history',
      path: '/nursing_history',
      component: NursingHistory
    },
    {
      name: 'google_map',
      path: '/google_map',
      component: GoogleMap
    },
  {
    name: 'videoupload',
    path: '/videoupload',
    component: VideoUpload
  },
  {
    name: 'comment',
    path: '/comment/:customer_id',
    component: comment
  },
  {
    name: 'commentlist',
    path: '/commentlist',
    component: commentlist
  },
  {
    name: 'specialfeature',
    path: '/specialfeature',
    component: specialfeature
  },
  {
    name: 'featurelist',
    path: '/featurelist',
    component: featurelist
  },
  {
    name: 'nursingFavouriteMail',
    path: '/nursingFavouriteMail',
    component: nursingFavouriteMail
  },
  {
    name: 'nursingMailConfirm',
    path: '/nursingMailConfirm',
    component: nursingMailConfirm
  },
  {
    name: 'modal',
    path: '/modal',
    component: modal
  },
  {
    name: 'termsAndConditions',
    path: '/termsAndConditions',
    component: termsAndConditions
  },

  {
    name: 'occupation',
    path: '/occupation',
    component: occupation
  },

  {
    name: 'occupationlist',
    path: '/occupationlist',
    component: occupationlist
  },
  {
    name:'jobapplylist',
    path:'/jobapplylist',
    component:jobapplylist
  },



]
const router = new VueRouter({
  history: true,
  mode: 'history',
  routes,
})
export default router