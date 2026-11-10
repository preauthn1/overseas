<template>
  <div class="ui-design">
    <img src="@/assets/images/companyServer/ui/955.png" class="max-[768px]:hidden">
    <img src="@/assets/images/companyServer/ui/757.png" class="min-[767px]:hidden">
    <div class="mt-6">
      <ContentTitle title="UI/Original Design"></ContentTitle>
      <div class="text-white text-sm text-center mx-1254 m-auto pl-3.5 pr-3.5">
        {{
          $t('美观的UI搭配优质的创意可以帮助客户更好地查看产品开发完成后的实现效果，同时我们提供原画设计服务，可按照客户需要可设计出风格不同、色彩丰富的原画')
        }}
      </div>
    </div>
    <div class="design-scope mt-6">
      <ContentTitle title="Design scope"></ContentTitle>
      <div class="design-scope-content">
        我们按照客户提出的具体设计需求来设计UI/原画，例如网站/App界面UI设计、站点Logo、BANNER设计、Spine动画、标志设计、宣传单、海报、画册、游戏角色设计等
      </div>
    </div>
    <div class="material-case">
      <ContentTitle title="Material Case"></ContentTitle>
      <div class="overflow-hidden">
        <div class="material-case-content relative" :style="{fontSize:fontSize+'px'}">
          <img src="@/assets/images/companyServer/ui/671-7.png" class="absolute img-671-6">
          <img src="@/assets/images/companyServer/ui/671-7.png" class="absolute img-671-7">
          <img src="@/assets/images/companyServer/ui/671-7.png" class="absolute img-671-8">

          <img src="@/assets/images/companyServer/ui/798.png" class="absolute img-798">
          <img src="@/assets/images/companyServer/ui/page3.png" class="absolute img-page3">
          <img src="@/assets/images/companyServer/ui/chang.png" class="absolute img-chang">

          <img src="@/assets/images/companyServer/ui/803.png" class="absolute img-803">
          <img src="@/assets/images/companyServer/ui/671-10.png" class="absolute img-671-10">
          <img src="@/assets/images/companyServer/ui/671-11.png" class="absolute img-671-11">
          <img src="@/assets/images/companyServer/ui/page2.png" class="absolute img-page2">
          <img src="@/assets/images/companyServer/ui/4.png" class="absolute img-4">
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import {onMounted, ref} from "vue";
import ContentTitle from "@/components/ContentTitle.vue";

let fontSize = ref(16);
// 设置 em 函数
function setRem () {
  const scale = document.documentElement.clientWidth / 1920
  fontSize.value = (16 * Math.min(scale, 2))>10?16 * Math.min(scale, 2):10
}
onMounted(()=>{
  setRem()
})
window.onresize = function () {
  setRem()
}
// setRem()

</script>
<style scoped lang="less">
.material-case{
  //min-height: 1200px;
}
.ui-design-name {
  background-image: url("@/assets/images/home/background.png");
  background-repeat: no-repeat;
  background-position: center center;
  height: 122px;
  background-size: contain;
}

.ui-design-name {
  //width: 416px;
  height: 122px;
  //background: url("@/assets/images/home/background.png") no-repeat;
  margin: 0 auto;
  position: relative;

  &-center {
    font-family: 'D-DIN';
    font-weight: bold;
    font-size: 45px;
    position: absolute;
    //width: 100%;
    left: 50%;
    top: 50%;
    //text-align: center;
    transform: translate(-50%, -75%);
    --stroke-width: 4px;
    --background-gradient: linear-gradient(45deg, #A43AEE 0%, #22FF4E 100%);
    --text-gradient: linear-gradient(45deg, white 0%, #Fff 100%);
  }
}

.text {
  position: relative;
}

.text::before,
.text::after {
  content: attr(data-text);
  display: block;
  background-clip: text;
  color: transparent;
}

.text::before {
  position: absolute;
  inset: 0;
  background-image: var(--background-gradient);
  -webkit-text-stroke: var(--stroke-width);
}

.text::after {
  position: relative;
  z-index: 1;
  background-image: var(--text-gradient);
}

.design-scope {
  width: 100%;
  height: 338px;
  position: relative;
  background: #212244;
  @media (max-width: 767px){
    height: 240px !important;
    background-image: url("@/assets/images/companyServer/ui/807-1.png");
    background-repeat: no-repeat;
    background-size: contain;
    //background-position: right center;
    padding: 10px;
  }
}

.design-scope-content {
  @media (min-width: 768px){
    background-image: url("@/assets/images/companyServer/ui/807.png");
    background-repeat: no-repeat;
    background-size: contain;
    background-position: right bottom;
    height: 248px;
  }
  text-align: center;
  color: #FFFFFF;
  //position: absolute;
  //top: 80px;
  width: 100%;
  left: 0;
  //padding-top: 100px;
}

.material-case-content {
  width: 67.2em;
  //position: relative;
  margin: 0 auto;
  min-height: 1000px;
  //left: 50%;
  //transform: translateX(-50%);
}
@media (max-width: 672px) {
  .material-case-content{
    transform: translateX(calc((100vw - 672px) / 2));
  }
}
.img-chang {
  width: 33.19em;
  height: 15.5em;
  top: 0;
  left: 50%;
  transform: translateX(-55%);
}

.img-798 {
  width: 16.38em;
  height: 20.56em;
  top: 11.81em;
  right: 13.5em;
}

.img-671-7 {
  width: 16.38em;
  height: 20.56em;
  top: -9em;
  right: 13.57em;
}

.img-671-8 {
  width: 12.19em;
  height: 17.13em;
  right: 0;
  top: 13.94em;
}

.img-671-6 {
  width: 16.31em;
  height: 20.56em;
  left: 0;
  top: 4.06em;
}
.img-page3{
  width: 16.38em;
  height: 20.56em;
  left: 4.81em;
  top: 26em;
}
.img-page2{
  width: 18.81em;
  height: 41.31em;
  top: 16.5em;
  left: 50%;
  transform: translateX(-55%);
}
.img-803{
  width: 11.81em;
  height: 15.19em;
  right: 13.5em;
  top: 34.13em;
}
.img-671-10{
  width: 10.5em;
  height: 17.19em;
  right: 15em;
  top:43.5em;
}
.img-671-11{
  width: 14.88em;
  height: 20.56em;
  left: 7.06em;
  top:49.25em
}
.img-4{
  width: 28.81em;
  height: 15.31em;
  left: 50%;
  transform: translateX(-50%);
  top: 58.38em;
}
</style>
