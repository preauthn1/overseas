<template>
  <div class="header flex items-start">
    <div class=" w-full h-[calc(100%-2px)] bg-[#212244]">
      <div class="header-content">
        <img src="@/assets/images/header/95chuhai.png" class="w-10 sm:w-16" @click="handleJump" alt="">
        <div class="menu min-[767px]:hidden">
          <img v-if="settingStore.openMenu" src="@/assets/images/header/switch.png" class="menu_icon"
            @click="handleMenu">
          <img v-else src="@/assets/images/header/menu_1x.png" @click="handleMenu" class="menu_icon">
        </div>
        <div class="navigation text-white">
          <template v-for="(item, index) in menuList">
            <div class="navigation_item pl-8 pr-8" v-if="item.children && item.children.length">
              <div @click="selectRoute(item)" class="navigation_item-content"
                :class="selectRouteTitle == item.meta.title ? 'active' : ''">
                <div :class="selectRouteTitle == item.meta.title ? 'active-bg' : ''" class="text-center">
                  <div class="menu-title pl-8 pr-8"
                    :class="!selectRouteTitle && currentRoute == item.meta.title ? 'menu-active' : ''">{{ item.meta.title }}
                  </div>
                  <div class="dropdown-content" v-show="selectRouteTitle == item.meta.title">
                    <div v-for="(item2, index2) in item.children" @click="goPage(item2, item)"
                      :class="routePath == item2.path ? 'menu-active' : ''">
                      {{ item2.meta.title }}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation_item pl-8 pr-8" :class="routePath == item.path ? 'menu-active' : ''" @click="goPage(item)"
              v-else>
              {{ item.meta.title }}
            </div>
          </template>
          <!--        <div class="navigation_item pl-8 pr-8" :class="routePath=='Home'?'menu-active':''" @click="goPage('Home')">-->
          <!--          首页-->
          <!--        </div>-->
          <!--        <div class="navigation_item pl-8 pr-8">-->
          <!--          <div @click="serve_Dropdown=false;production_Dropdown=!production_Dropdown" class="navigation_item-content"-->
          <!--               :class="production_Dropdown?'active':''">-->
          <!--            <div :class="production_Dropdown?'active-bg':''" class="text-center">-->
          <!--              <div class="menu-title pl-8 pr-8">产品展示</div>-->
          <!--              <div class="dropdown-content" v-show="production_Dropdown">-->
          <!--                <div @click="goPage('ProductCustom')" :class="routePath=='ProductCustom'?'menu-active':''">量化交易系统</div>-->
          <!--                <div @click="goPage('Ad')" :class="routePath=='Ad'?'menu-active':''">商城销售网站</div>-->
          <!--                <div @click="goPage('UIDesign')" :class="routePath=='UIDesign'?'menu-active':''">UI/T系统</div>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--        <div class="navigation_item pl-8 pr-8">-->
          <!--            <div @click="production_Dropdown=false;serve_Dropdown=!serve_Dropdown" class="navigation_item-content"-->
          <!--                 :class="serve_Dropdown?'active':''">-->
          <!--              <div :class="serve_Dropdown?'active-bg':''" class="text-center">-->
          <!--                <div class="menu-title pl-8 pr-8">公司服务</div>-->
          <!--                <div class="dropdown-content" v-show="serve_Dropdown">-->
          <!--                  <div @click="goPage('ProductCustom')" :class="routePath=='ProductCustom'?'menu-active':''">产品定制研发</div>-->
          <!--                  <div @click="goPage('Ad')" :class="routePath=='Ad'?'menu-active':''">广告投放引流</div>-->
          <!--                  <div @click="goPage('UIDesign')" :class="routePath=='UIDesign'?'menu-active':''">UI/原画设计</div>-->
          <!--                </div>-->
          <!--              </div>-->
          <!--            </div>-->
          <!--        </div>-->
          <!--        <div class="navigation_item pl-8 pr-8" @click="goPage('About')" :class="routePath=='About'?'menu-active':''">-->
          <!--          关于我们-->
          <!--        </div>-->
        </div>
      </div>
    </div>

  </div>
  <Menu :class="settingStore.openMenu ? 'open-menu' : ''" :menu-list="menuList"></Menu>
  <!--  <div class="mask" v-if="selectRouteTitle" @click="selectRouteTitle=''"></div>-->
</template>
<script setup>
import routes from '@/router/routes'  //直接拿路由list做菜单;

import { onBeforeUnmount, onMounted, ref, watch } from "vue";
import { useRoute, useRouter } from "vue-router";
import useSettingStore from '@/store/setting'
import Menu from "@/components/menu.vue";
const settingStore = useSettingStore();
const router = useRouter()
let is_open = ref(true);
let routePath = ref('/')
// let production_Dropdown = ref(false);
// let serve_Dropdown = ref(false);
const route = useRoute();
let menuList = ref(JSON.parse(JSON.stringify(routes)));
menuList.value.splice(1, 0, {
  meta: { title: '产品展示' },
  children: [
    { path: '/exhibition/1', meta: { title: 'AITAEX量化交易平台' } },
    { path: '/exhibition/2', meta: { title: '95+游戏平台' } },
    { path: '/exhibition/3', meta: { title: 'StoneX外汇交易App' } },
    { path: '/exhibition/4', meta: { title: '海仓网购物平台' } },
    { path: '/exhibition/5', meta: { title: 'inlotto彩票App' } },
    { path: '/exhibition/6', meta: { title: '酒店刷单App' } },
  ]
})
let selectRouteTitle = ref('')
let currentRoute = ref('')  //当前点击的路由名称，
watch(() => route.path, (newName, oldName) => {
  console.log({ route });
  // currentRoute.value = route.meta.title;
  currentRoute.value = route.matched[0].meta.title;
  routePath.value = newName;
});
const handleMenu = () => {
  settingStore.setOpenMenu()
}
const goPage = (page, fatherRoute) => {
  router.push({
    path: page.path
  })
  if (fatherRoute) {
    currentRoute.value = fatherRoute.meta.title;
  } else {
    selectRouteTitle.value = ''
    currentRoute.value = page.meta.title;
  }
}
const selectRoute = (item) => {
  if (selectRouteTitle.value == item.meta.title) {
    selectRouteTitle.value = ''
  } else {
    selectRouteTitle.value = item.meta.title
  }
}
const handleJump = ()=>{
  router.push('/')
}
const clickFn = () => {
  console.log(2);
  if (selectRouteTitle.value) {
    selectRouteTitle.value = ''
  }
}
onMounted(() => {
  let dom = document.querySelectorAll('.app-content')[0]
  console.log({ dom });
  dom.addEventListener('click', function () {
    if (selectRouteTitle.value) {
      selectRouteTitle.value = ''
    }
  })
})
onBeforeUnmount(() => {
  let dom = document.querySelectorAll('.app-content')[0]
  dom.removeEventListener('click', function () {
    console.log(234);
  })
})
</script>
<style scoped lang="less">
.header {
  height: 62px;
  background: linear-gradient(85deg, #A43AEE, #22FF4E);
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  z-index: 9999;

  // border: 2px solid;
  // border-image: linear-gradient(85deg, #A43AEE, #22FF4E) 2 2;
  &-content {
    height: 60px;
    width: 100%;
    max-width: 1500px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    height: 100%;
    padding: 0 14px;
    justify-content: space-between;
  }
}

.navigation {
  flex: 1;
  display: flex;
  justify-content: space-around;
  height: 100%;

  @media (max-width: 768px) {
    display: none !important;
  }
}

.navigation_item,
.menu-title {
  height: 62px;
  line-height: 62px;
  //background: #212244;
  z-index: 9999;
  cursor: pointer;
}

.active {
  border-radius: 0px 0px 10px 10px;
  background: linear-gradient(85deg, #A43AEE, #F9C81D);
}

.active-bg {
  background: #212244;
  border-radius: 0px 0px 10px 10px;
}

.navigation_item-content {
  padding: 0 3px 3px;

}

.dropdown-content {
  div {
    padding: 5px;
    height: 58px;
    line-height: 58px;

    &:hover {
      border-top: 5px solid #A423FE;
      background: linear-gradient(179deg, rgba(179, 78, 248, 0.38), rgba(184, 91, 246, 0.38));
      //opacity: 0.38;
      box-sizing: border-box;
      line-height: 57px !important;
    }
  }

}

.slide-vertical-enter-active,
.slide-vertical-leave-active {
  transition: all 1.5s ease;
}

.slide-vertical-enter,
.slide-vertical-leave-to {
  transform: translateY(-100%);
  /* 从上到下滑动 */
  //opacity: 0; /* 可选：添加淡入淡出效果 */
}

.menu-active {
  border-top: 5px solid #A423FE;
  background: linear-gradient(179deg, rgba(179, 78, 248, 0.38), rgba(184, 91, 246, 0.38));
  //opacity: 0.38;
  box-sizing: border-box;
  line-height: 57px !important;
}

.open-menu {
  transform: translateX(0) !important;
}

.mask {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.menu_icon {
  width: 22px;
  height: 20px;
}
</style>
