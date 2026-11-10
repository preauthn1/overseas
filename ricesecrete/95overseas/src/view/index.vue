<template>
  <div class="index">
    <img src="../assets/images/home/index.png" class="width-full" alt="">
    <ContentTitle title="PRODUCT LIST"></ContentTitle>
    <div class="index_content">
      <swiper :slidesPerView="slidesPerView" :spaceBetween="10" :loop="true" :centeredSlides="true" :autoplay="{
        delay: 2500, disableOnInteraction: false,
      }" :pagination="{
        clickable: true,
      }" :navigation="true" :modules="modules" class="mySwiper">
        <!--<swiper-slide>-->
        <!--  <div class="swiper_content">-->
        <!--    <div class="content">-->
        <!--      <img src="../assets/images/home/95.png" class="content_img" alt="">-->
        <!--      <div class="content_detail">-->
        <!--        <span>95+游戏平台</span>-->
        <!--        <div class="product_detail">-->
        <!--          <span>95+游戏平台是一个面向全球用户开放的，以提供集成游戏给用户带来娱乐体验的全新平台，-->
        <!--            平台内提供丰富多样的游戏供玩家体验，玩家通过体验游戏、组建团队以及完成活动任务获得丰厚的金额奖励，-->
        <!--            同时平台独特的会员制度让用户升级不同会员以后获得更多的利益，让玩家玩的越多，收获越多！-->
        <!--          </span>-->
        <!--        </div>-->
        <!--        <div class="content_btn">-->
        <!--          <button class="btn" @click="understand('/exhibition/2')">了解详情</button>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</swiper-slide>-->
        <swiper-slide>
          <div class="swiper_content">
            <div class="content">
              <img src="../assets/images/home/StoneX.png" class="content_img" alt="">
              <div class="content_detail">
                <span>StoneX外汇交易App</span>
                <div class="product_detail">
                  <span>StoneX 外汇交易App是一款交易应用程序，用户可实时查看应用获取到市场数据和图表，
                    选择应用中展示的外汇产品或者数字货币产品即可进行交易，
                    通过实时获取市场交易行情以便于用户随时随地获取可操作的信息并做出交易决策，从而获取报酬。
                  </span>
                </div>
                <div class="content_btn">
                  <button class="btn" @click="understand('/exhibition/3')">了解详情</button>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="swiper_content">
            <div class="content">
              <img src="../assets/images/home/HAI.png" class="content_img" alt="">
              <div class="content_detail">
                <span>海仓网购物平台</span>
                <div class="product_detail">
                  <span>海仓网购物平台专注于为客提供快速、安全、便捷的一站式在线购物体验，
                    平台商品品种类广泛，涵盖时尚、消费电子产品、家居用品、玩具和运动器材。
                    海仓网始终致力于为客户提供最好的服务，包括多种付款方式、免费退货以及广泛的客户服务和保修承诺。
                    我们不断扩大产品范围和提供最优质的产品，
                    您可以随处找到，触手可及，让您感受到网上购物从未如此简单！</span>
                </div>
                <div class="content_btn">
                  <button class="btn" @click="understand('/exhibition/4')">了解详情</button>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="swiper_content">
            <div class="content">
              <img src="../assets/images/home/inlotto.png" class="content_img" alt="">
              <div class="content_detail">
                <span>inlotto彩票App</span>
                <div class="product_detail">
                  <span>inlotto彩票App作为一款全新的线上售卖彩票的应用程序，吸纳了多种多样的彩票玩法提供给用户，
                    用户在应用中充值后通过购买彩票赚取利润即可提现，为用户打造了更加便捷、安全玩彩票的绝佳平台。
                  </span>
                </div>
                <div class="content_btn">
                  <button class="btn" @click="understand('/exhibition/5')">了解详情</button>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="swiper_content">
            <div class="content">
              <img src="../assets/images/home/bkng.png" class="content_img" alt="">
              <div class="content_detail">
                <span>酒店刷单App</span>
                <div class="product_detail">
                  <span>酒店刷单App是一款联合酒店相关产品的刷单类应用程序，用户在应用中可通过抢单的方式完成订单任务后赚取丰厚的佣金奖励
                  </span>
                </div>
                <div class="content_btn">
                  <button class="btn" @click="understand('/exhibition/6')">了解详情</button>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="swiper_content">
            <div class="content">
              <img src="../assets/images/home/quantify.png" class="content_img" alt="">
              <div class="content_detail">
                <span>AITAEX量化交易系统</span>
                <div class="product_detail">
                  <span>AITAEX量化交易平台作为领先潮流的加密货币交易所，是基于资深的加密货币专业人士和金融领域的精英丰富经验理论搭建而成，
                    平台具备高性能的AI计算能力，用于交易加密货币和实时监测和分析加密货币市场的动态。
                  </span>
                </div>
                <div class="content_btn">
                  <button class="btn" @click="understand('/exhibition/1')">了解详情</button>
                </div>
              </div>
            </div>

          </div>
        </swiper-slide>
      </swiper>
      <div>
        <ContentTitle title="Company Services"></ContentTitle>
        <div class="services">
          <div class="services_fontcolor">
            <div class="service_title">
              1,产品定制开发
            </div>
            <div class="service_detail">
              <span class="service_dateil_content">
                我们根据客户需求量身定制开发各类产品，帮助客户确定对应系统或产品的具体需求，并管理和维护其整个生命周期。</span>
            </div>
            <div class="mb-4">
              <span class="understand" @click="understand('/ProductCustom')">
                了解详情>
              </span>
            </div>
            <div class="flex justify-between mb-10 product_develoment">
              <div class="relative">
                <div class="product_cus">
                  <img src="../assets/images/home/serve_web.png" class="product_cus_img serve_web" alt="">
                </div>
                <div class="product_background">
                  <span class="product_background_title">WEB端网站开发</span>
                </div>
              </div>
              <div class="relative">
                <div class="product_cus">
                  <img src="../assets/images/home/serve_app.png" class="product_cus_img serve_app" alt="">
                </div>
                <div class="product_background">
                  <span class="product_background_title">手机APP开发</span>
                </div>
              </div>
              <div class="relative">
                <div class="product_cus">
                  <img src="../assets/images/home/backstage.png" class="product_cus_img backstage" alt="">
                </div>
                <div class="product_background">
                  <span class="product_background_title">后台管理系统</span>
                </div>
              </div>
            </div>
            <div class="service_title">
              2,广告投放引流
            </div>
            <div class="service_detail">
              <span class="service_dateil_content">
                我们有成熟的广告引流体系，可为客户在国内外各大平台进行广告投放，吸引其他用户查看。</span>
            </div>
            <div class="mb-2.5">
              <span class="understand" @click="understand('/Ad')">
                了解详情>
              </span>
            </div>
            <div class="mb-2.5">
              <div class="flex justify-between mb-2.5">
                <img src="../assets/images/home/facebook.png" class="adv" alt="">
                <img src="../assets/images/home/tiktok.png" class="adv" alt="">
                <img src="../assets/images/home/Bing.png" class="adv" alt="">
              </div>
              <div class="flex justify-between">
                <img src="../assets/images/home/Google.png" class="adv_google" alt="">
                <img src="../assets/images/home/yahoo.png" class="adv_facebook" alt="">
              </div>
            </div>
            <div class="service_title">
              3,UI/原画设计
            </div>
            <div class="service_detail">
              <span class="service_dateil_content">
                我们提供多样的UI/原画设计，根据客户需要可设计不同场景的图片、logo、人物角色等。</span>
            </div>
            <div class="mb-2.5">
              <span class="understand" @click="understand('/UIDesign')">
                了解详情>
              </span>
            </div>
            <div>
              <swiper :spaceBetween="30" :centeredSlides="true" :autoplay="{
                delay: 2500, disableOnInteraction: false,
              }" :pagination="{
                clickable: true,
              }" :navigation="true" :modules="modules" class="mySwiper">

                <swiper-slide>
                  <div class="foot_swiper">
                    <img src="../assets/images/home/banner_background.png" class="foot_swiper_header" alt="">
                    <div v-if="is_hide" class="text-stroke swiper_less_title">
                      <span class="text-stroke-text" data-text="UI设计"></span>
                    </div>
                    <img src="../assets/images/home/index_foot_banner.png" class="foot_swiper_img" alt="">
                    <div class="swiper_detail">
                      <span>
                        UI设计可帮助客户预知产品开发后的页面效果，对不满意的设计可提前调整，有效帮助产品的实际设计与期望效果达到一致
                      </span>
                    </div>
                    <div class="seiper_datail_block">
                      <img src="../assets/images/home/banner_background.png" class="foot_swiper_background" alt="">
                      <div class="foot_swiper_title_ui text-stroke">
                        <span class="text-stroke-text" data-text="UI设计"></span>
                      </div>
                      <div>
                        <span class="text-sm">
                          UI设计可帮助客户预知产品开发后的页面效果，对不满意的设计可提前调整，有效帮助产品的实际设计与期望效果达到一致
                        </span>
                      </div>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div class="foot_swiper">
                    <img src="../assets/images/home/banner_background.png" class="foot_swiper_header" alt="">
                    <div v-if="is_hide" class="swiper_less_title text-stroke">
                      <span class="text-stroke-text" data-text="原画设计"></span>
                    </div>
                    <img src="../assets/images/home/yh.png" class="foot_swiper_img" alt="">
                    <div class="swiper_detail">
                      <span>
                        原画设计可以用来探索和展示产品的外观，功能和用户体验，它将想象与现实连接起来，能够让客户的创意通过图片的形式完美展示出来
                      </span>
                    </div>
                    <div class="seiper_datail_block">
                      <img src="../assets/images/home/banner_background.png" class="foot_swiper_background" alt="">
                      <div class="foot_swiper_title text-stroke">
                        <span class="text-stroke-text" data-text="原画设计"></span>
                      </div>
                      <div>
                        <span class="text-sm">
                          原画设计可以用来探索和展示产品的外观，功能和用户体验，它将想象与现实连接起来，能够让客户的创意通过图片的形式完美展示出来
                        </span>
                      </div>
                    </div>
                  </div>
                </swiper-slide>
              </swiper>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import { useRouter } from 'vue-router';
import ContentTitle from "@/components/ContentTitle.vue";
const modules = ref([Pagination, Autoplay, Navigation])
const slidesPerView = ref(3)
const is_hide = ref(true)
const width = window.innerWidth

if (width < 768 && width > 510) {

  slidesPerView.value = 2

} else if (width < 510) {

  slidesPerView.value = 1

} else if (width > 768) {

  is_hide.value = false

}

window.onresize = function () {

  const width = window.innerWidth

  if (width < 768 && width > 510) {

    slidesPerView.value = 2

    is_hide.value = true

  } else if (width < 510) {

    slidesPerView.value = 1

    is_hide.value = true

  } else if (width > 768) {

    slidesPerView.value = 3

    is_hide.value = false
  }
}
const router = useRouter()

const understand = (data) => {

  router.push(data)
}
</script>

<style lang="less" scoped>
.index {
  @media(max-width:768px) {
    margin: auto 10px;
  }
}

.index_img {
  width: 88%;
}

.index_content {
  max-width: 1000px;
  margin: 0 auto;
}

.production_list {
  display: flex;
  margin-top: 20px;
  color: #FFFFFF;
  justify-content: center;


}

.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  .swiper_content {
    margin: 0 auto;
    width: 100%;
    height: 370px;

    .content {
      border-radius: 10px;
      padding: 2px;
      background: linear-gradient(85deg, #A43AEE, #9B491F);
    }

    .content_img {
      width: 100%;
      border-radius: 10px 10px 0px 0px;
      height: 180px;
      object-fit: fill;
    }

    .content_detail {
      background: #212243;
      color: #FFFFFF;
      height: 150px;
      padding: 10px;
      border-radius: 0px 0px 8px 8px;

      .product_detail {
        font-size: 12px;
        margin-top: 10px;
        margin-bottom: 10px;

        span {
          overflow: hidden;
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 2;
        }
      }

      .content_btn {
        text-align: center;
        margin: 20px;
        font-size: 15px;

        .btn {
          padding: 5px 14px;
          border-radius: 8px;
          color: #FFFFFF;
          background: linear-gradient(185deg, #A423FE, #22FF4E);
          font-size: 15px;
          cursor: pointer;
        }
      }
    }
  }
}

.services {
  max-width: 800px;
  margin: 0 auto;

  .services_fontcolor {
    color: #FFFFFF;

    .service_title {
      font-weight: normal;
      font-size: 20px;
      color: #22FF4E;

    }

    .service_detail {
      margin: 10px 0px;

      .service_dateil_content {
        font-weight: normal;
        font-size: 12px;
        color: #FFFFFF;
      }
    }

    .understand {
      font-weight: normal;
      font-size: 12px;
      color: #22FF4E;
      cursor: pointer;
    }
  }
}

.product_cus {
  background: #212243;
  border-radius: 8px;
  width: 250px;
  height: 150px;

  @media(max-width:841px) {
    width: 173px;
    height: 87px;
  }

  @media(max-width:570px) {
    width: 109px;
    height: 80px;
  }

  @media(max-width:366px) {
    width: 98px;
    height: 66px;
  }

  @media(max-width:343px) {
    width: 79px;
    height: 55px;
  }

  .product_cus_img {
    padding: 10px;
    margin: 0 auto;
  }
}

.product_background {
  position: absolute;
  background: linear-gradient(177deg, #A423FE, #22FF4E);
  border-radius: 15px;
  width: 100%;
  height: 150px;
  top: 30px;
  left: 3%;
  z-index: -2;

  @media(max-width:841px) {
    top: 19px;
    height: 95px;
  }

  @media(max-width:570px) {
    top: 10px;
    height: 95px;
  }

  @media(max-width:366px) {
    top: 10px;
    height: 77px;
  }

  @media(max-width:343px) {
    top: 10px;
    height: 65px;
  }

  .product_background_title {
    position: absolute;
    z-index: 3;
    text-align: center;
    top: 129px;
    left: 35%;
    font-size: 14px;

    @media(max-width:841px) {
      top: 76px;
      left: 28%;
    }

    @media(max-width:570px) {
      left: 14px;
      font-size: 10px;
    }

    @media(max-width:366px) {
      left: 11px;
      font-size: 10px;
      top: 61px;
    }

    @media(max-width:343px) {
      left: 10px;
      font-size: 9px;
      top: 49px;
    }
  }
}

.services_content {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;

  @media(max-width:295px) {
    flex-wrap: wrap;
    /* justify-content: start; */
    gap: 5px;
  }

  .services_header {
    background: #212243;
    border-radius: 8px;
    max-width: 200px;

    .service_img {
      width: 160px;
      padding: 20px 30px;

      @media(max-width:768px) {
        width: 107px;
        padding: 9px 10px;
      }

      @media(max-width:500px) {
        width: 77px;
        padding: 2px 10px;
      }

      @media(max-width:344px) {
        width: 63px;

      }
    }
  }
}

.product_develoment {
  @media(max-width:277px) {
    flex-wrap: wrap;
    gap: 30px;
  }
}

.serve_web {
  width: 65%;

  @media(max-width:570px) {
    width: 100%;
  }
}

.serve_app {
  width: 76%;

  @media(max-width:570px) {
    width: 100%;
  }
}

.backstage {
  width: 45%;

  @media(max-width:570px) {
    width: 68%;
  }
}

.adv {
  width: 32%;
}

.adv_google {
  width: 56%;
}

.adv_facebook {
  width: 42%;
}

.foot_swiper {
  height: 300px;
  display: flex;
  gap: 10px;

  @media(max-width:768px) {
    height: 460px;
    display: block;
  }
}

.swiper_less_title {
  font-size: 16px;
  position: relative;
  top: -81px;
  left: 40%;

  @media(min-width:468px) {
    left: 45%;
  }
}

.foot_swiper_img {
  width: 60%;
  max-height: 210px;
  object-fit: contain;

  @media(max-width:768px) {
    width: 100%;
  }
}

.foot_swiper_background {
  width: 50%;
  margin: 0 auto;
}

.foot_swiper_header {
  margin: 0 auto;
  width: 200px;

  @media(min-width:768px) {
    display: none;
  }
}

.swiper_detail {
  font-size: 14px;

  @media(min-width:768px) {
    display: none;
  }
}

.seiper_datail_block {
  @media(max-width: 768px) {
    display: none;
  }
}

.foot_swiper_title_ui {
  font-size: 16px;
  position: relative;
  top: -60px;
  left: 45%;
}

.foot_swiper_title {
  font-size: 16px;
  position: relative;
  top: -60px;
  left: 42%;
}
</style>
