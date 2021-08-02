<template>
  <div class="container">
      <div>
        <router-view></router-view>
      </div>
  </div>
</template>

<script>
export default {
    name: 'App',
    components: {}
}
</script>

<style scoped>
    .container {
        width: 100%;
        height: 100vh;
        text-align: center;
    }
</style>>