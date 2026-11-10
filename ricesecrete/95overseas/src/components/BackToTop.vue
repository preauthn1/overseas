<template>
  <div class="back-to-top">

    <img src="@/assets/images/foot/35.png" @click="toTop">
    <a href="https://t.me/kaiwen7985">
      <img src="@/assets/images/foot/44.png">
    </a>
    <a href="https://wa.me/6285761732395">
      <img src="@/assets/images/foot/45.png">
    </a>
  </div>
</template>
<script setup>
const toTop = () => {
  window.scroll({top: 0, behavior: 'smooth'});
}
</script>
<style scoped lang="less">
.back-to-top {
  z-index: 9998;
  width: 70px;
  height: 200px;
  //background: rgba(33, 34, 67, 0.28);
  //border-radius: clip-path: inset(0 round 12rpx);
  // border: 2px solid;
  //clip-path: inset(0 round 7px);
  // border-image: linear-gradient(85deg, #A43AEE, #F9C81D) 2 2;
  display: flex;
  align-items: center;
  justify-content: space-around;
  flex-direction: column;
  position: fixed;
  right: 40px;
  bottom: 243px;

  img {
    width: 50px;
    height: 50px;
  }

  @media (max-width: 768px) {
    width: 49px;
    height: 149px;
    right: 20px;
    bottom: 100px;
    img {
      width: 37px;
      height: 37px;
    }
  }
}
</style>
