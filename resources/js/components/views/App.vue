<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
          <div class="container-fluid px-0">
            <!-- <a class="navbar-brand" href="/">Logo</a> -->

            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <router-link
                    class="nav-link active"
                    aria-current="page"
                    to="/"
                    >Home</router-link
                  >
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/about">about</router-link>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/contact"
                    >contact</router-link
                  >
                </li>
              </ul>
              <div class="flex">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <h1 class="text-primary">pagina VUE rotta ANY</h1>
        <br />
        <h2>Lista post:</h2>
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
    console.log(this.$route);
  },
};
</script>

<style>
</style>