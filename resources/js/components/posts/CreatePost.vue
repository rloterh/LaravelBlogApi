<template>
  <div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-16">
      <div class="max-w-md mx-auto bg-white shadow p-8 rounded-lg">
        <h2 class="text-3xl font-semibold text-center mb-6">Create Post</h2>
        <form @submit.prevent="createPost">
          <div class="mb-4">
            <label for="title" class="block font-semibold">Title</label>
            <input v-model.trim="title" type="text" id="title" name="title" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div class="mb-4">
            <label for="description" class="block font-semibold">Description</label>
            <textarea v-model.trim="description" id="description" name="description" rows="4" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required></textarea>
          </div>
          <div class="mb-4">
            <label for="image" class="block font-semibold">Image URL</label>
            <input v-model.trim="image" type="url" id="image" name="image" class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
          </div>
          <div>
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CreatePost',
  data() {
    return {
      title: '',
      description: '',
      image: '',
    };
  },
  methods: {
    createPost() {
      // Your create post logic here
      // You can make an API request to create a new post using the entered data
    },
  },
};
</script>

<style>
/*  */
</style>
