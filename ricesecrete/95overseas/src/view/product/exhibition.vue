<template>
    <div class=" select-none px-3 lg:px-0" @mousemove="getMouseLocal">
        <div class=" relative w-full pt-16 pl-7 select-none">
            <img class="select-none hidden lg:block" src="@/assets/images/product_head.png" alt="">
            <img class="select-none block lg:hidden" src="@/assets/images/product_head_mb.png" alt="">
            <div class=" absolute top-0 left-28 text-white text-3xl hidden lg:block">
                <TextEffects :content="productInfo.porductName" />
            </div>

            <div class="absolute top-8 left-1 block lg:hidden">
                <div class=" relative">
                    <span
                        class=" text-left bg-gradient-to-r from-[#A43AEE] to-[#22FF4E] bg-clip-text text-transparent text-3xl font-bold ">
                        {{ productInfo.porductName }} </span>
                    <span
                        class="text-left drop-shadow-[-1px_1px_1px_#050508] text-white text-3xl font-bold absolute -top-0.5 left-1">
                        {{ productInfo.porductName }} </span>
                </div>
            </div>
        </div>

        <section class=" mt-3">
            <ContentTitle title="PRODUCT INTRODUCTION" />
            <div
                class=" text-sm w-full max-w-[1200px] mx-auto bg-gradient-to-b py-4 px-5 text-white from-[rgba(156,48,243,.25)] to-[rgba(34,255,78,.25)]">
                {{ productInfo.porductIntroduction }}</div>
        </section>

        <section class=" mt-6 lg:mt-10">
            <ContentTitle title="FEATURES" />
            <div
                class=" max-w-[1200px] mx-auto relative flex flex-wrap items-stretch gap-[10vw] xl:gap-60 justify-between">
                <div class="introduce_card_bg w-full md:w-[320px] lg:w-[380px] xl:w-[434px] h-[300px] md:h-[300px] xl:h-[236px]"
                    v-for="(item, index) in productInfo.porductFeatures" :key="index">
                    <div class="introduce_card px-4">
                        <div
                            class=" w-2/3 py-2 mt-[1px] bg-gradient-to-b from-[#A43AEE] to-[#22FF4E] mx-auto rounded-b-xl text-center text-[#22FF4E] text-xl font-bold">
                            {{ item.title }}</div>
                        <div class="overflow-y-auto mt-4 text-sm leading-7 text-white">
                            {{ item.content }}
                        </div>
                    </div>
                </div>

                <div class=" absolute hidden md:block top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -z-10">
                    <img class=" xl:w-[464px] h-auto object-cover" src="@/assets/images/home/product_center_img.png"
                        alt="">
                </div>
            </div>
        </section>

        <!-- @mousemove="getMouseLocal" -->
        <section class=" mt-6 lg:mt-10 w-full overflow-hidden">
            <ContentTitle title="PRODUCT DEMO" />
            <div class="banner_wrap">
                <div class="transform_box" :style="{ '--rx': rx, '--ry': ry, '--tx': tx, '--ty': ty }">
                    <swiper :effect="'coverflow'" :loop="true" :observer="true" :grabCursor="true"
                        :centeredSlides="true" :slidesPerView="'auto'" :coverflowEffect="{
                            stretch: 280,
                            depth: 360,
                            modifier: 1,
                            slideShadows: false,
                            opacity: 0
                        }" :pagination="true" :modules="[EffectCoverflow]" class="mySwiper transform_box_swiper">
                        <swiper-slide v-for="(item, index) in productInfo.banner" :key="index">
                            <img class="" :src="item.imageUrl" />
                        </swiper-slide>
                    </swiper>
                </div>
            </div>
        </section>
    </div>
    <div class=" w-full max-w-[1200px] h-[calc(fit-content+4px)] mx-auto acount_card_bg p-0.5">
        <div class=" bg-[#212243] px-4 md:px-8 lg:px-16 rounded-[15px]">
            <div v-for="(item, index) in productInfo.demonstrateDemo" :key="index"
                class=" w-full py-4 flex items-start gap-2 justify-between text-white border-b border-[rgba(255,255,255,0.25)] last:border-none">
                <div class=" flex-1 w-1/2 flex flex-col items-start gap-2">
                    <div class=" text-[#22FF4E] text-xs md:text-sm">{{ item.typeName }}</div>
                    <a :href="item.address" target="_black"
                        class=" max-w-full truncate text-ellipsis text-xs md:text-sm hover:underline">{{
                            item.address }}</a>
                </div>

                <div class="flex-1 max-w-[220px] w-full  flex flex-col items-start gap-2">
                    <div class="text-[#22FF4E] text-xs md:text-sm">演示账号及密码</div>
                    <div class="text-xs md:text-sm">用户名:
                        <span :id="`foo` + index">{{ item.acountName }}</span>
                        <button class="btn" data-clipboard-action="copy" :data-clipboard-target="`#foo` + index">复制</button>
                    </div>
                    
                    <div class=" text-xs md:text-sm">密码:
                        <span :id="`password` + index">{{ item.passWord }}</span>
                        <button class="btn" data-clipboard-action="copy" :data-clipboard-target="`#password` + index">复制</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script setup>
import TextEffects from '@/components/TextEffects.vue'
import ContentTitle from '@/components/ContentTitle.vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';
import { EffectCoverflow } from 'swiper/modules';
import { ref, onMounted, watch, nextTick } from 'vue'
import porductDataMap from "@/utils/porduct_map.js"
import { useRoute } from "vue-router";
import Clipboard from 'clipboard'
var clipboard = new Clipboard('.btn')


const route = useRoute()
const productInfo = ref({})

onMounted(() => {
    if (route.params.id) {
        productInfo.value = porductDataMap.get(Number(route.params.id)) || porductDataMap.get(1)
    }
})

watch(() => route.params.id, (newId, oldId) => {
    nextTick(() => {
        productInfo.value = porductDataMap.get(Number(newId))
    })
});

const rx = ref(0)
const ry = ref(0)
const tx = ref(0)
const ty = ref(0)
const size = ref({
    width: document.documentElement.clientWidth,
    height: document.documentElement.clientHeight
})

const getMouseLocal = (e) => {
    var t = size.value,
        s = t.width,
        a = t.height,
        i = e.x,
        n = e.y,
        r = 16;
    ry.value = (i / (s / (2 * r)) - r).toFixed(1) + "deg",
        rx.value = (r - n / (a / (2 * r))).toFixed(1) + "deg",
        // mx.value = i,
        // my.value = n,
        tx.value = ((i - size.value.width / 2) / 8).toFixed(1) + "px",
        ty.value = ((n - size.value.height / 2) / 8).toFixed(1) + "px"
}
</script>


<style lang="less" scoped>
.introduce_card_bg {
    position: relative;
    background: linear-gradient(85deg, #140C5D, #D80EF4, #200C68);
    border-radius: 15px;
    padding: 2px;

    &:nth-child(2) {
        background: linear-gradient(85deg, #140C5D, #0CFB59, #200C68);
    }

    &:nth-child(3) {
        background: linear-gradient(85deg, #140C5D, #F46A0E, #200C68);
    }

    &:nth-child(4) {
        background: linear-gradient(85deg, #140C5D, #DCF40E, #200C68);
    }
}

.introduce_card {
    width: 100%;
    height: 100%;
    background: #212243;
    border-radius: 15px;
}

.transform_box {
    transform: perspective(2000px) translate(var(--tx), var(--ty)) rotateX(var(--rx)) rotateY(var(--ry));
    transform-style: preserve-3d;
    transition: all .1s;

    @media(max-width:900px) {
        transform: perspective(2000px) translate(0, 0) rotateX(0) rotateY(0);
    }
}

.swiper {
    width: 100%;
    padding: 50px 0;

    @media(max-width:900px) {
        padding: 32px 0;
    }
}

.swiper-slide {
    background-position: center;
    background-size: cover;
    border-radius: 15px;
    overflow: hidden;
}

.swiper-slide img {
    display: block;
    width: 100%;
}

.banner_wrap {
    max-width: 100%;
    width: 1200px;
    height: auto;
    margin: 0 auto;
    overflow: hidden;

    @media(max-width:900px) {
        height: auto
    }
}

.transform_box_swiper {

    overflow: visible !important;
    transform-style: preserve-3d;
}

.swiper-slide {
    width: 65%;
    height: 100%;

    @media(max-width:900px) {
        width: 100%;
    }
}

.acount_card_bg {
    position: relative;
    border-radius: 15px;
    background: linear-gradient(85deg, #140C5D, #0CFB59, #200C68);
}
.btn{
    background: linear-gradient(90deg, #A423FE, #22FF4E);
    border-radius: 50px;
    width: 30px;
    height: 15px;
    line-height: 15px;
    margin-left: 3px;
    font-size: 10px;
}
</style>