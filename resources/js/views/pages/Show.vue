<template>
  <div class="container">
      <h1>{{post.title}}</h1>
      <p>{{post.content}}</p>
  </div>
</template>

<script>
export default {
    name: 'Show',
    data() {
        return {
            post: {}
        }
    },
    created() {
        axios
            .get(`http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`)
            .then(res=>{this.post = res.data});
    }
}
</script>

<style scoped>
    .container {
        text-align: center;
    }
</style>