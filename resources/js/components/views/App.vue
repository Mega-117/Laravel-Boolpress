<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="text-primary">pagina VUE rotta ANY {{ messaggio }}</h1>
        <div>
          <a href="/login">login</a>
          <br />
          <a href="/register">registrati</a>
        </div>
        <div>
          <a href="/">home</a>
          <br />
          <a href="/about">about</a>
          <br />
          <a href="/contact">contact</a>
        </div>
      </div>
      <hr />
    </div>
    <router-view></router-view>
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
      currentPage: 1,
      lastPage: null,
    };
  },
  methods: {
    getData(page = 1) {
      axios.get("/api/all-posts?page=" + page).then((resp) => {
        this.postsList = resp.data.data;
        this.currentPage = resp.data.current_page;
        this.lastPage = resp.data.last_page;
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