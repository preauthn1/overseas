<template>
  <div class="app">
    <Header></Header>
    <div class="app-content" @click="appClick()">
      <router-view></router-view>
    </div>
    <foot></foot>
    <back-to-top></back-to-top>
  </div>
</template>

<script setup>
// import Header from './view/Header.vue'
import Header from '@/components/Header.vue'
import Foot from "./view/foot.vue";
import BackToTop from "@/components/BackToTop.vue";
const appClick = () => {
  console.log(2222);
}
</script>

<style lang="less">

  @import "@/assets/fonts/font.css";
  img{
    -webkit-user-drag: none;
  }
  .app-content{
    margin-top: 62px;
    min-height: calc(100vh - 440px);
    @media (max-width: 768px){
      min-height: calc(100vh - 280px) !important;
    }
  }


</style>
