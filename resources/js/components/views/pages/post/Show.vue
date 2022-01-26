<template>
  <div>
    <h1>show</h1>
    <h3>{{ post.title }}</h3>
    <p>{{ post.text }}</p>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      post: [],
    };
  },
  methods: {
    fetchPost() {
      const url = "/api/posts/" + this.$route.params.id;
      axios.get(url).then((resp) => {
        this.post = resp.data;
      });
    },
  },
  mounted() {
    this.fetchPost();
  },
};
</script>

<style>
</style>