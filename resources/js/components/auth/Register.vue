<template>
  <div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-16">
      <div class="max-w-md mx-auto bg-white shadow p-8 rounded-lg">
        <h2 class="text-3xl font-semibold text-center mb-6">Register</h2>
        <form @submit.prevent="registerUser">
          <div class="mb-4">
            <label for="name" class="block font-semibold">Name</label>
            <input v-model.trim="name" type="text" id="name" name="name" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div class="mb-4">
            <label for="email" class="block font-semibold">Email</label>
            <input v-model.trim="email" type="email" id="email" name="email" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div class="mb-4">
            <label for="password" class="block font-semibold">Password</label>
            <input v-model.trim="password" type="password" id="password" name="password" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div class="mb-6">
            <label for="password_confirmation" class="block font-semibold">Confirm Password</label>
            <input v-model.trim="passwordConfirmation" type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div>
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Register',
  data() {
    return {
      name: '',
      email: '',
      password: '',
      passwordConfirmation: '',
    };
  },
  methods: {
    registerUser() {
      // Your registration logic here
      // You can make an API request to register the user
    },
  },
};
</script>

<style>
/*  */
</style>
