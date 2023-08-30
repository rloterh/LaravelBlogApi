<template>
  <nav class="bg-gray-900 text-white p-4 flex items-center justify-between">
    <div class="flex items-center">
      <a href="/" class="font-bold text-lg logo">TravelBlog</a>
      <!-- Nav Links: Home, Categories -->
      <!-- Display Bio link only if user is signed in -->
    </div>
    <div class="flex items-center">
      <!-- Display Username and Logout link if user is signed in -->
      <!-- Display Login/Sign Up links if user is not signed in -->
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavigationBar',
}
</script>

<style scoped>
.logo {
  /* Apply blend modes and effects to make it look like a logo */
}
</style>


<!-- <script>
import axios from 'axios'
import router from '@/js/router'
import store from '@/js/stores'

export default {
  mounted() {
    axios.interceptors.response.use(function (response) {
      return response;
    }, function (error) {
      if (error.response.status === 401 || error.response.status === 419) {
        if(error.response.data.message === 'CSRF token mismatch.') return
        store.dispatch('logout')
        router.replace({name: 'Login'})
      } else if(error.response.status === 403) {
        router.push({name: 'VerifyEmail'})
      } else if(error.response.status === 423) {
        router.push({name: 'ConfirmPassword'})
      }

      return Promise.reject(error);
    });
  },
}
</script> -->
