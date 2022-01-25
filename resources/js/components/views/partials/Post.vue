<template>
  <div>
    <h2>{{ post.title }}</h2>
    <h6>Categoria: {{ post.category.name }}</h6>
    <h6>Autore: {{ post.user.name }}</h6>

    <p>{{ post.text }}</p>
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