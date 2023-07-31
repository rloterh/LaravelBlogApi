<template>
  <div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-16">
      <div class="max-w-md mx-auto bg-white shadow p-8 rounded-lg">
        <h2 class="text-3xl font-semibold text-center mb-6">Login</h2>
        <form @submit.prevent="loginUser">
          <div class="mb-4">
            <label for="email" class="block font-semibold">Email</label>
            <input v-model.trim="email" type="email" id="email" name="email" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div class="mb-6">
            <label for="password" class="block font-semibold">Password</label>
            <input v-model.trim="password" type="password" id="password" name="password" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div>
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Login',
  data() {
    return {
      email: '',
      password: '',
    };
  },
  methods: {
    loginUser() {
      // Your login logic here
      // You can make an API request to authenticate the user
    },
  },
};
</script>

<style>
/* */
</style>
