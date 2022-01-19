<template>
  <div id="wrap">
    <header class = main-header>

      <img src = "../assets/images/logo.png" alt ="Logo" />

      <div class="header-text">
        <h1>PASTA MERCH</h1>
      </div>

      <form class="search" onsubmit="return false;">
        <input v-model="searchInfo" type="search" name="" placeholder="search" class="input" />
        <input type="submit" name="" value="" class="submit" @click = "search()" />
      </form>

      <nav>
        <a href="#"><h2 class = "about-header">Cabinet</h2></a>
        <a href="#"><h2 class = "about-header">My cart</h2></a>
        <router-link :to="{name: 'About'}">
          <h2 class = "about-header">About</h2>
        </router-link>
      </nav>

    </header>
  </div>
</template>

<script>

import CartInfo from "./CartInfo";
export default {
  name: "Header",
  components: {CartInfo},
  data() {
      return{
          searchInfo: null
      }
  },
  methods: {
      search(){
          this.$emit("searchChanged", this.searchInfo)
          console.log(this.searchInfo)
      }
  }
}
</script>

<style  src="../assets/styles/header_style.css">
</style>
