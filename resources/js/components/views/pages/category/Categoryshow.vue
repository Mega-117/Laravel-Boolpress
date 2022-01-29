<template>
  <div>
    <h1>pagine category show</h1>
    <div class="card mb-2" v-for="posts in postFilter" :key="posts.id">
      <div class="card-body">
        <h2>{{ posts.title }}</h2>
        <h6>Categoria: {{ posts.category.name }}</h6>
        <h6>Autore: {{ posts.user.name }}</h6>
        <h6>Pubblicazione: {{ posts.created_at }}</h6>
        <h6>tag: {{ posts.tag }}</h6>

        <p>{{ posts.text }}</p>
        <br />
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "App",
  data() {
    return {
      postFilter: [],
    };
  },
  methods: {
    getData() {
      const url = "/api/category/" + this.$route.params.id;
      axios.get(url).then((resp) => {
        this.postFilter = resp.data;
      });
    },
  },
  mounted() {
    this.getData();
  },
};
</script>

<style>
</style>