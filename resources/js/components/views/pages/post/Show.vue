<template>
  <div class="card">
    <div class="card-body">
      <h2>{{ post.title }}</h2>
      <h6>Categoria: {{ post.category.name }}</h6>
      <h6>Autore: {{ post.user.name }}</h6>
      <h6>Pubblicazione: {{ post.created_at }}</h6>
      <h6>tag: {{ post.tag }}</h6>

      <p>{{ post.text }}</p>
    </div>
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