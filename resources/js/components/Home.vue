<template>
  <div class="bg-gray-100 min-h-screen">
    <!-- Hero Section -->
    <header class="bg-blue-600 text-white py-16">
      <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to the Blog App</h1>
        <p class="text-lg">Share your thoughts, ideas, and stories with the world.</p>
        <div class="mt-6">
          <router-link to="/register" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded mr-4 hover:bg-blue-600 hover:text-white">Register</router-link>
          <router-link to="/login" class="bg-transparent border-2 border-white text-white font-semibold px-6 py-3 rounded hover:bg-white hover:text-blue-600">Login</router-link>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section class="container mx-auto mt-16">
      <div class="flex items-center justify-between">
        <div class="w-1/2">
          <h2 class="text-3xl font-bold mb-4">About Us</h2>
          <p class="text-gray-600 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor est tellus, at mollis orci dignissim vel.</p>
        </div>
        <img src="/images/about_image.jpg" alt="About Us" class="w-1/2 rounded-lg shadow-lg">
      </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-16">
      <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Our Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-blue-200 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">User Registration</h3>
            <p>Register to the platform and create your own account to start sharing your posts.</p>
          </div>
          <div class="bg-green-200 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Create and Manage Posts</h3>
            <p>Create, edit, and delete your blog posts with ease.</p>
          </div>
          <div class="bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Engage with Others</h3>
            <p>Like and comment on posts to interact with other users.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'Home',
};
</script>

<style>
/*  */
</style>
