<template>
  <div class="card mb-2">
    <div class="card-body">
      <h2>{{ post.title }}</h2>
      <h6>Categoria: {{ post.category.name }}</h6>
      <h6>Autore: {{ post.user.name }}</h6>
      <h6>Pubblicazione: {{ post.created_at }}</h6>
      <h6>tag: {{ post.tag }}</h6>

      <p>{{ post.text }}</p>
      <br />
      <router-link :to="'/post/' + post.id">Dettagli</router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: "Post",
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style>
</style>