<template>
  <div class="product">
    <img src="@/assets/images/companyServer/product/953.png" class="product-topImg max-[768px]:hidden">
    <img src="@/assets/images/companyServer/product/726.png" class="product-topImg min-[767px]:hidden">
    <div class="flex justify-center flex-wrap">
      <div class="product-item">
        <div class="product-item-name text-BrilliantGreen text-xl flex items-center justify-center">
          <span>{{ $t("Web端网站开发") }}</span></div>
        <div class="text-white text-sm md:mt-5">
          {{ $t('根据客户要求、定制开发基于电脑PC访问的浏览器网站系统、例如购物网站、电商网站、交易网站、应用类网站等') }}
        </div>
        <img src="@/assets/images/companyServer/product/web2.png">
      </div>
      <div class="product-item lg:ml-5 lg:mr-5">
        <div class="product-item-name text-BrilliantGreen text-xl flex items-center justify-center">
          <span>{{ $t('手机APP开发') }}</span></div>
        <div class="text-white  text-sm md:mt-5">
          {{ $t('根据客户提供的功能需求描述，我们提供从App功能原型图制作、交互优化、开发、上架部署、运营支撑的完整服务') }}
        </div>
        <img src="@/assets/images/companyServer/product/app.png">
      </div>
      <div class="product-item">
        <div class="product-item-name text-BrilliantGreen text-xl flex items-center justify-center">
          <span>{{ $t('后台管理系统') }}</span></div>
        <div class="text-white text-sm md:mt-5">
          {{ $t('根据客户需求可定制基于浏览器访问的B/S管理系统，如OA办公系统、客户管理、ERP、库存管理、生产管理、财务管理、行政办公、项目任务管理、企业标准管理等管理系统') }}
        </div>
        <img src="@/assets/images/companyServer/product/web.png">
      </div>
    </div>
    <div class="development-process pl-3.5 pr-3.5">
<!--      <div class="development-process-name">-->
<!--        <div class="development-process-name-center">-->
<!--          <span class="text" :data-text="$t('Development Process')"></span>-->
<!--        </div>-->
<!--      </div>-->
      <ContentTitle title="Development Process"></ContentTitle>
      <ul class="text-white text-sm ">
        <li class="mb-1">01 客户提出需求，进行需求调研</li>
        <li class="mb-1">02 设计原型、UI，制定软件开发方案</li>
        <li class="mb-1">03 双方对项目费用和开发周期达成一致签订合同后，您只需支付40%的首付款便启动定制软件开发流程</li>
        <li class="mb-1">04 开发过程中，经过您的同意，我们会不断提供给您我们的进度和开发过程中的软件供您试用</li>
        <li class="mb-1">05 您对软件或者网站最终功能确认满意后，交付另外60%的余款，执行软件交付</li>
        <li class="mb-1">06 我们会提供技术支持和培训</li>
        <li class="mb-1">07 您在软件使用过程中碰到任何问题都可以在我们这得到解决</li>
      </ul>
      <div class="relative pl-12 pr-12 pt-20 pb-8 flow-chart mt-6">
        <img src="@/assets/images/companyServer/product/598.png" class="max-[768px]:hidden">
        <img src="@/assets/images/companyServer/product/508.png" class="min-[767px]:hidden">
        <div class="flow-item-1 absolute">
          <img src="@/assets/images/companyServer/product/581.png">
          <p class="text-BrilliantGreen text-xl flow-item-name">需求调研</p>
          <p class="text-white text-sm">功能详解</p>
          <p class="text-white text-sm">设计规划软件流程</p>
        </div>
        <div class="flow-item-2 absolute">
          <img src="@/assets/images/companyServer/product/594.png">
          <p class="text-BrilliantGreen text-xl flow-item-name">原型/UI制作</p>
          <p class="text-white text-sm">模块分解</p>
          <p class="text-white text-sm">制作功能原型/UI图</p>
        </div>
        <div class="flow-item-3 absolute">
          <img src="@/assets/images/companyServer/product/594-2.png">
          <p class="text-BrilliantGreen text-xl flow-item-name">整体开发</p>
          <p class="text-white text-sm">流程编写</p>
          <p class="text-white text-sm">模块开发</p>
        </div>
        <div class="flow-item-4 absolute">
          <img src="@/assets/images/companyServer/product/594-1.png">
          <p class="text-BrilliantGreen text-xl flow-item-name">产品验收</p>
          <p class="text-white text-sm">整体模块测试</p>
          <p class="text-white text-sm">上线验收</p>
        </div>
        <div class="flow-item-5 absolute">
          <img src="@/assets/images/companyServer/product/595.png">
          <p class="text-BrilliantGreen text-xl flow-item-name">后期维护</p>
          <p class="text-white text-sm">问题答疑</p>
          <p class="text-white text-sm">技术运营支持</p>
        </div>
      </div>

      <div class="development-process-bottom mt-5">
        <div class="text-BrilliantGreen text-base">{{$t('开发周期')}}</div>
        <div class="text-sm text-white mt-2">{{$t('根据您定制的功能模块的多少来合理商定开发周期，在开发过程中您查看不同阶段下的功能模块完成情况')}}</div>
        <div class="text-BrilliantGreen text-base mt-2">{{$t('价格')}}</div>
        <div class="text-sm text-white mt-2">{{$t('根据您定制的功能模块的多少来合理商定价格，这也是定制开发的一大优势')}}</div>
        <div class="text-BrilliantGreen text-base mt-2">{{$t('软件维护')}}</div>
        <ul class="text-sm text-white mt-2">
          <li>01{{$t('按照事先协商好的维护协议操作')}}</li>
          <li class="mt-1">02{{$t('如果属于软件升级或者功能优化，费用另外商议')}}</li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script setup>
import {ref} from "vue";
import ContentTitle from "@/components/ContentTitle.vue";

</script>
<style scoped lang="less">
.product-topImg {
  //height: 533px;
  //max-width: 1703px;
}

.product-item:nth-child(1) {
  background-image: url("@/assets/images/companyServer/product/item1.png");
  //background-size: cover;
}

.product-item:nth-child(2) {
  background-image: url("@/assets/images/companyServer/product/item2.png");
}

.product-item:nth-child(3) {
  background-image: url("@/assets/images/companyServer/product/item3.png");
}
@media (max-width: 768px) {
  .product-item:nth-child(1) {
    background-image: url("@/assets/images/companyServer/product/item-3-app.png");
    background-size: contain;
    img{
      width: 143px;
    }
    margin-right: 14px;
  }

  .product-item:nth-child(2) {
    background-image: url("@/assets/images/companyServer/product/item-1-app.png");
    background-size: contain;
    margin-right: 14px;

  }

  .product-item:nth-child(3) {
    background-image: url("@/assets/images/companyServer/product/item-2-app.png");
    background-size: contain;
    img{
      width: 90px;
    }
  }
}
.product-item {
  background-repeat: no-repeat;
  //background-size: cover;
  width: 337px;
  min-height: 366px;
  position: relative;
  padding: 66px 20px 0;
  margin-top: 14px;
  @media (max-width: 768px) {
    padding: 45px 10px 0;
    width: 168px;
    min-height: auto;
    height: 210px !important;
    div:nth-child(2) {
      font-size: 10px;
      line-height: 12px;
    }
    &-name{
      width: 131px !important;
      height: 36px !important;
      font-size: 10px;
    }
  }
  img {
    margin: 0 auto;
  }

  &-name {
    width: 261px;
    height: 71px;
    background-image: url("@/assets/images/companyServer/product/577.png");
    background-repeat: no-repeat;
    background-size: cover;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    top: -5px;

  }
}

.development-process {
  max-width: 1284px;
  margin: 0 auto;
  &-name {
    width: 416px;
    height: 122px;
    background: url("@/assets/images/home/background.png") no-repeat;
    margin: 0 auto;
    position: relative;
  }
  &-bottom{
    background: url("@/assets/images/companyServer/product/580.png") no-repeat;
    @media (max-width: 768px){
      background: url("@/assets/images/companyServer/product/57.png") no-repeat;
    }
    padding: 26px 23px;
    min-height: 242px;
  }
}
@media (min-width: 769px) {
  .flow-item-1{
    left: 0;
    top: 50%;
    transform: translateY(-50%);
  }
  .flow-item-2{
    top: 0;
    left: 16%;
  }
  .flow-item-3{
    bottom: 0;
    left: 38%;
  }
  .flow-item-4{
    top: 0;
    left: 58%;
  }
  .flow-item-5{
    bottom: 0;
    left: 80%;
  }
}

@media (max-width: 768px) {
  .flow-chart>div>img{
    width: 40px;
  }
  .flow-item-name{
    font-size: 16px !important;
    line-height: 16px !important;
  }
  .flow-chart>div>p{
    font-size: 12px;
  }

  .flow-item-1{
    left: 0px;
    top: 50%;
    transform: translateY(-50%);
  }
  .flow-item-2{
    top: 0;
    left: 40%;
  }
  .flow-item-3{
    top: 40%;
    right: 0px;
  }
  .flow-item-4{
    bottom: 0;
    left: 58%;
  }
  .flow-item-5{
    bottom: 0;
    left: 20%;
  }
}
</style>
