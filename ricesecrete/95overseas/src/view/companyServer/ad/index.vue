<template>
  <div class="ad">
    <img src="@/assets/images/companyServer/ad/967.png" class="max-[768px]:hidden">
    <img src="@/assets/images/companyServer/ad/746.png" class="min-[767px]:hidden">
<!--    <div class="ui-design-name">-->
<!--      <div class="ui-design-name-center text-stroke">-->
<!--        <span class="text-stroke-text" :data-text="$t('Advertising and traffic diversion')"></span>-->
<!--      </div>-->
<!--    </div>-->
    <ContentTitle title="Advertising and traffic diversion" />
    <div class="text-white text-sm mx-1254 m-auto pl-3.5 pr-3.5">
      在数字化的时代，海外广告已成为电商主流，让人们无需受制于地域距离，实现信息的即时传递和全球触达。作为一支专注于在Facebook，TikTok，Google等平台上开展海外广告投流的团队，我们致力于帮助你的品牌跨越国界，触及全球受众，让你的声音在社交网络上回荡。
    </div>
    <div class="design-scope">
<!--      <div class="ui-design-name flex justify-center items-center">-->
<!--        <div class="text-stroke">-->
<!--          <span class="text-stroke-text" :data-text="$t('Our advantage')"></span>-->
<!--        </div>-->
<!--      </div>-->
      <ContentTitle title="Our advantage" />

      <div class="design-scope-content">
        <ul class="text-sm text-white">
          <li class="text-BrilliantGreen">1、海外投流团队</li>
          <li>
            我们拥有经验丰富的Facebook，TikTok，Google等广告专家团队，熟悉平台规则和最新趋势，能够为客户量身定制有效的推广策略。
          </li>
          <li class="text-BrilliantGreen">2、精准定位能力</li>
          <li>
            通过Facebook，TikTok，Google等广告平台的精细化定位功能，我们能够帮助客户准确锁定目标受众群体，提高广告曝光度和转化率。
          </li>
          <li class="text-BrilliantGreen ">3、数据分析与优化</li>
          <li>我们注重数据分析，不断优化广告投放效果，确保每一笔广告支出都物有所值，帮助客户获得最佳回报。</li>
        </ul>
      </div>
    </div>
    <div class="our-service ">
      <div class="mt-12 flex justify-center max-[768px]:flex-col  max-[768px]:items-center">
        <div class="our-service-content pl-3 flex items-center flex-col min-[768px]:hidden">
          <div class="our-service-name text-stroke flex justify-center items-center">
            <span class="text-stroke-text text-3xl" data-text="海外广告投放"></span>
          </div>
          <div class="text-white">精准的广告投放服务，帮助你在Facebook，TikTok，Google等平台上推广品牌、产品和活动，增加用户转化和销售额。</div>
        </div>
        <div class="our-service-img max-[768px]:mt-12">
          <img src="@/assets/images/companyServer/ad/689.png" alt="">
        </div>
        <div class="our-service-content pl-3 flex items-center flex-col max-[768px]:hidden" >
          <div class="our-service-name text-stroke flex justify-center items-center">
            <span class="text-stroke-text text-3xl" data-text="海外广告投放"></span>
          </div>
          <div class="text-white">精准的广告投放服务，帮助你在Facebook，TikTok，Google等平台上推广品牌、产品和活动，增加用户转化和销售额。</div>
        </div>
      </div>

      <div class="flex justify-center mt-12 max-[768px]:flex-col max-[768px]:items-center">
        <div class="our-service-content pr-3 max-[768px]:flex flex-col items-center">
          <div class="our-service-name text-stroke flex justify-center items-center">
            <span class="text-stroke-text text-3xl" data-text="社交媒体管理"></span>
          </div>
          <div class="text-white">定制化的社交媒体管理方案，帮助你提升品牌知名度、用户互动和忠诚度。</div>
        </div>
        <div class="our-service-img max-[768px]:mt-12">
          <img src="@/assets/images/companyServer/ad/702-1.png" alt="">
        </div>

      </div>

      <div class="flex justify-center mt-12 max-[768px]:flex-col  max-[768px]:items-center">
        <div class="our-service-content pl-3 flex items-center flex-col min-[768px]:hidden">
          <div class="our-service-name text-stroke flex justify-center items-center">
            <span class="text-stroke-text text-3xl" data-text="数据分析与报告"></span>
          </div>
          <div class="text-white">详尽的数据分析和报告服务，让你了解广告效果和用户反馈，为下一步决策提供依据。</div>
        </div>
        <div class="our-service-img max-[768px]:mt-12">
          <img src="@/assets/images/companyServer/ad/702.png" alt="">
        </div>
        <div class="our-service-content pl-3 flex items-center flex-col max-[768px]:hidden">
          <div class="our-service-name text-stroke flex justify-center items-center">
            <span class="text-stroke-text text-3xl" data-text="数据分析与报告"></span>
          </div>
          <div class="text-white">详尽的数据分析和报告服务，让你了解广告效果和用户反馈，为下一步决策提供依据。</div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>

import ContentTitle from "@/components/ContentTitle.vue";
</script>
<style scoped lang="less">
.ui-design-name {
  background-image: url("@/assets/images/home/background.png");
  background-repeat: no-repeat;
  background-position: center center;
  height: 122px;
  background-size: contain;
  max-width: 1254px;
  @media(max-width: 768px){
    height: 61px !important;
  }
}

.ui-design-name {
  //width: 416px;
  //height: 122px;
  //background: url("@/assets/images/home/background.png") no-repeat;
  margin: 0 auto;
  position: relative;

  &-center {
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
  height: 350px;
  position: relative;
  //background: #212244;
  background-image: url("@/assets/images/companyServer/ad/958.png");
  background-repeat: no-repeat;
  background-size: cover;
  padding: 14px;
  margin-top: 30px;
}

.design-scope-content {
  height: 248px;
  color: #FFFFFF;
  background-position: right bottom;
  //position: absolute;
  top: 122px;
  width: 100%;
  left: 0;
  //padding-top: 100px;
  display: flex;
  //align-items: center;
  justify-content: center;
}
.our-service-item{
  display: grid;
  gap: 20px;
  grid-template-areas:"simg content";
}
.our-service-img {
  grid-area: simg;
  width: 90%;
  //height: 21.13rem;
  max-width: 592px;
  aspect-ratio: 592 / 338;
  background: linear-gradient(0deg, #34E166, #991AFF);
  border-radius: 15px;
  position: relative;

  img {
    width: 100%;
    height: 100%;
    border-radius: 15px;
    left: -28px;
    top: -28px;
    position: absolute;
  }
}
.our-service-content{
  grid-area: content;
  width: 90%;
  max-width: 592px;
}
.our-service-name{
  width: 259px;
  height: 190px;
  background-image: url("@/assets/images/companyServer/ad/950.png");
  background-repeat: no-repeat;
  background-size: cover;
  @media (max-width: 768px){
    width: 130px;
    height: 95px;
    .text-stroke-text{
      font-size: 15px !important;
    }
  }
}

.our-service{
  padding: 20px;
}
</style>
