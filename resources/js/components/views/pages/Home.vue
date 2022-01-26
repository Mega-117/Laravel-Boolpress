<template>
  <div>
    <div class="row">
      <div class="col">
        <Post v-for="post in postsList" :key="post.id" :post="post">
          <h3>{{ post.title }}</h3>
          <h6>Categoria: {{ post.category_id }}</h6>
          <h6>Autore: {{ post.user_id }}</h6>
          <p>{{ post.text }}</p>
        </Post>
      </div>
    </div>
    <div class="row">
      <div class="col justify-content-center d-flex">
        <nav>
          <ul class="pagination">
            <li>
              <button
                v-if="currentPage != 1"
                class="page-link"
                @click="getData(currentPage - 1)"
              >
                Indietro
              </button>
            </li>
            <li
              v-for="page of lastPage"
              :key="page"
              class="page-item"
              :class="{ active: currentPage === page }"
            >
              <button class="page-link" @click="getData(page)">
                {{ page }}
              </button>
            </li>
            <li>
              <button
                v-if="currentPage != lastPage"
                class="page-link"
                @click="getData(currentPage + 1)"
              >
                Avanti
              </button>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Post from "../partials/Post.vue";

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