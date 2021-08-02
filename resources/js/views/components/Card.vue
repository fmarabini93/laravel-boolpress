<template>
  <div class="card">
      <h2>{{item.title}}</h2>
      <p>{{item.content}}</p>
  </div>
</template>

<script>
export default {
    name: 'Card',
    props: {
        item: Object
    }
}
</script>

<style scoped>
    .card {
        width: calc(100% / 5 - 40px);
        height: 200px;
        margin: 20px;
        float: left;
        overflow: auto;
    }
</style>