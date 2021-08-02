<template>
  <div class="container">
      <Card v-for="post in posts" :key="post.id" :item='post' />
  </div>
</template>

<script>
import Card from '../components/Card';

export default {
    name: 'Blog',
    components: {
        Card
    },
    data() {
        return {
            posts: []
        }
    },
    created() {
      axios
        .get('http://127.0.0.1:8000/api/posts')
        .then(res=>{
            this.posts = res.data;
        });
    }
}
</script>

<style scoped>
    .container::after {
        content: '';
        display: table;
        clear: both;
    }
</style>