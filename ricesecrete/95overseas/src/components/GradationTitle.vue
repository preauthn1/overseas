<template>
  <div class="gradation-title">
    <div class="text-stroke">
      <span class="text-stroke-text" :data-text="title"></span>
    </div>
  </div>
</template>
<script setup>
  const props = defineProps(['title'])
</script>
<style scoped lang="less">
.gradation-title{
  height: 122px;
  background-image: url("@/assets/images/home/background.png");
  background-repeat: no-repeat;
  background-position: center center;
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: contain;
  @media(max-width: 768px){
    height: 61px !important;
  }
}
</style>
