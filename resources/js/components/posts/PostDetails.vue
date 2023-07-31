<template>
  <div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-16">
      <div class="max-w-md mx-auto bg-white shadow p-8 rounded-lg">
        <h2 class="text-3xl font-semibold mb-4">{{ post.title }}</h2>
        <img :src="post.image" alt="Post Image" class="w-full rounded-lg mb-4">
        <p class="text-gray-600 mb-6">{{ post.description }}</p>
        <div class="flex items-center justify-between">
          <div class="text-blue-600 font-semibold">Likes: {{ post.likes }}</div>
          <button @click="likePost" :disabled="post.liked" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700" v-if="userLoggedIn">Like</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PostDetails',
  data() {
    return {
      post: {
        title: 'Post Title', // Placeholder for post title
        image: 'https://via.placeholder.com/400x300', // Placeholder for post image URL
        description: 'Post description goes here', // Placeholder for post description
        likes: 0, // Placeholder for number of likes
        liked: false, // Placeholder for checking if the user has already liked the post
      },
      userLoggedIn: true, // Set this to true/false based on user authentication status
    };
  },
  methods: {
    likePost() {
      // Your like post logic here
      // You can make an API request to like the post and update the number of likes and liked status
    },
  },
};
</script>

<style>
/* */
</style>
