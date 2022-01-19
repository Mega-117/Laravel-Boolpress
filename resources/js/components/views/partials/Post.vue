<template>
  <div>
    <h2>{{ post.title }}</h2>
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