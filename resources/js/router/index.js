import Vue from 'vue';
import VueRouter from 'vue-router';

// Import components for routing
import Home from '../views/Home.vue';
import Register from '../views/Register.vue';
import Login from '../views/Login.vue';
import AllPosts from '../views/AllPosts.vue';
import CreatePost from '../views/CreatePost.vue';
import PostDetails from '../views/PostDetails.vue';
import EditPost from '../views/EditPost.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/register',
    name: 'Register',
    component: Register,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
  },
  {
    path: '/posts',
    name: 'AllPosts',
    component: AllPosts,
  },
  {
    path: '/posts/create',
    name: 'CreatePost',
    component: CreatePost,
    meta: { requiresAuth: true },
  },
  {
    path: '/posts/:id',
    name: 'PostDetails',
    component: PostDetails,
  },
  {
    path: '/posts/:id/edit',
    name: 'EditPost',
    component: EditPost,
    meta: { requiresAuth: true }, 
  },

];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
