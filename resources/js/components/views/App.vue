<template>
  <div class="container">
    <h1>pagina VUE rotta ANY {{ messaggio }}</h1>
    <a href="/login">login</a>
    <br />
    <a href="/register">registrati</a>

    <hr />

    <Post v-for="post in postsList" :key="post.id" :post="post">
      <h3>{{ post.title }}</h3>
      <p>{{ post.text }}</p>
    </Post>
  </div>
</template>

<script>
import axios from "axios";
import Post from "./partials/Post.vue";

export default {
  name: "App",
  components: { Post },
  data() {
    return {
      messaggio: "Benvenuto",
      postsList: [],
    };
  },
  mounted() {
    axios.get("/api/all-posts").then((resp) => {
      this.postsList = resp.data;
    });
  },
};
</script>

<style>
</style>