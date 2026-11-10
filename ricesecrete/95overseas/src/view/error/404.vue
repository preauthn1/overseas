<template>
  <div class="text-white text-center pt-20 flex flex-col items-center">
<!--    <img src="@/assets/images/error/404.png">-->
    <div class="text-2xl">Not Found</div>
    <!-- <div class="mt-6">找不到网页！</div> -->
    <div class="text-gray-600 mt-6">对不起，您正在寻找的页面不存在。尝试检查URL的错误，然后按浏览器上的刷新按钮或尝试在我们的应用程序中找到其他内容。</div>
    <router-link to="/" class="bullshit__return-home">
      返回首页
    </router-link>
  </div>
</template>
<script setup>

</script>
<style scoped lang="less">
.bullshit__return-home{
  display: block;
  float: left;
  width: 110px;
  height: 36px;
  background: linear-gradient(90deg, #A423FE, #22FF4E);
  opacity: 0;
  border-radius: 100px;
  text-align: center;
  color: #ffffff;
  font-size: 14px;
  line-height: 36px;
  cursor: pointer;
  animation-name: slideUp;
  animation-duration: 0.5s;
  animation-delay: 0.3s;
  animation-fill-mode: forwards;
  margin-top: 40px;
}
@keyframes slideUp {
  0% {
    transform: translateY(60px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 0.5;
  }
}
</style>
