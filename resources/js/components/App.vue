<template>
  <div id="app" class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <router-link to="/" class="text-xl font-semibold">Blog App</router-link>
        <div>
          <router-link to="/login" class="mr-4">Login</router-link>
          <router-link to="/register">Register</router-link>
        </div>
      </div>
    </nav>

    <div class="container mx-auto mt-4">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
  name: 'App',
};
</script>

<style>
/* */
</style>
