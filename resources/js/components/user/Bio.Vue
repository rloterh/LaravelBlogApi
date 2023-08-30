<template>
  <div class="p-4">
    <h2 class="text-2xl font-bold">{{ user.name }}'s Bio</h2>
    <p>Member since {{ formatDate(user.created_at) }}</p>
    <p>Number of posts: {{ user.posts.length }}</p>
    <!-- Display Create Post button -->
    <table class="mt-4 w-full">
      <thead>
        <tr>
          <th>Title</th>
          <th>Created Date</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="post in user.posts" :key="post.id">
          <td>{{ post.title }}</td>
          <td>{{ formatDate(post.created_at) }}</td>
          <td><button @click="editPost(post)">Edit</button></td>
          <td><button @click="deletePost(post)">Delete</button></td>
        </tr>
      </tbody>
    </table>
    <!-- Display Edit Post modal -->
  </div>
</template>

<script>
export default {
  name: 'UserBio',
  props: ['user'],
  methods: {
    formatDate(date) {
      // Implement a function to format the date
    },
    editPost(post) {
      // Implement the edit post functionality
    },
    deletePost(post) {
      // Implement the delete post functionality
    },
  },
}
</script>
