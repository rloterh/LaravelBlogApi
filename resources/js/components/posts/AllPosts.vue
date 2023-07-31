<template>
  <div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-16">
      <h2 class="text-3xl font-semibold mb-6">All Posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div v-for="post in posts" :key="post.id" class="bg-white rounded-lg shadow p-6">
          <h3 class="text-xl font-semibold mb-2">{{ post.title }}</h3>
          <img :src="post.image" alt="Post Image" class="w-full rounded-lg mb-4">
          <p class="text-gray-600">{{ post.description }}</p>
          <div class="mt-4 flex items-center justify-between">
            <router-link :to="`/posts/${post.id}`" class="text-blue-600 hover:underline">Read More</router-link>
            <button @click="likePost(post.id)" :disabled="post.liked" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700" v-if="userLoggedIn">Like</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AllPosts',
  data() {
    return {
      posts: [], // Your array of posts
      userLoggedIn: true, // Set this to true/false based on user authentication status
    };
  },
  methods: {
    likePost(postId) {
      // Your like post logic here
      // You can make an API request to like the post with the given postId
    },
  },
};
</script>

<style>
/* */
</style>
