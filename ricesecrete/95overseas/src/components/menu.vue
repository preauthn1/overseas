<template>
  <div class="Menu">
    <template v-for="menu in menuList">
      <div class="h-12 flex justify-between items-center text-white menu-item" :class="routePath==menu.path?'active':''"
           @click="selectMenu(menu)">
        <span>{{ menu.meta.title }}</span>
        <div>
          <img v-if="selectMenuTitle != menu.meta.title" src="@/assets/images/home/array.png" alt="" class="w-2">
          <img v-else src="@/assets/images/home/up.png" alt="" class="w-3">
        </div>
      </div>
      <div v-if="menu.children&&menu.children" class="text-white pt-2 pb-2">
        <div v-show="selectMenuTitle == menu.meta.title">
          <div v-for="chilMenu in menu.children" class="pb-4 children-menu-item" :class="routePath==chilMenu.path?'active':''" @click="selectMenu(chilMenu)">
            <div>{{ chilMenu.meta.title }}</div>
          </div>
        </div>
      </div>
    </template>
    <template v-if="false">
      <div class="index"
           :style="[active == 0 ? `background: linear-gradient(90deg, rgba(179,78,248,0.67), rgba(184,91,246,0));` : ``]"
           @click="handleJump('/home')">
        <div v-if="active == 0" class="index_active"></div>
        <span :class="[active == 0 ? `home` : ``]">首页</span>
        <div>
          <img src="@/assets/images/home/array.png" alt="">
        </div>
      </div>
      <div class="index"
           :style="[active == 1 ? `background: linear-gradient(90deg, rgba(179,78,248,0.67), rgba(184,91,246,0));` : ``]"
           @click="chang_product('production')">
        <div v-if="active == 1" class="index_active"></div>
        <span :class="[active == 1 ? `home` : ``]">产品展示</span>
        <div>
          <img v-if="!product" src="@/assets/images/home/array.png" alt="">
          <img v-else src="@/assets/images/home/up.png" alt="">
        </div>
      </div>
      <div class="line">
      </div>
      <div v-if="product">
        <div class="list">量化交易系统</div>
        <div class="list">商场销售网站</div>
        <div class="list">T系统</div>
        <div class="list">A系统</div>
      </div>
      <div class="index"
           :style="[active == 2 ? `background: linear-gradient(90deg, rgba(179,78,248,0.67), rgba(184,91,246,0));` : ``]"
           @click="chang_product('serve')">
        <div v-if="active == 2" class="index_active"></div>
        <span :class="[active == 2 ? `home` : ``]">公司服务</span>
        <div>
          <img v-if="!serve" src="@/assets/images/home/array.png" alt="">
          <img v-else src="@/assets/images/home/up.png" alt="">
        </div>
      </div>
      <div class="line">
      </div>
      <div v-if="serve">
        <div class="list" @click="handleJump('/productCustom')">产品定制研发</div>
        <div class="list" @click="handleJump('/ad')">广告投放引流</div>
        <div class="list" @click="handleJump('/uiDesign')">UI/原画设计</div>
      </div>
      <div class="index"
           :style="[active == 3 ? `background: linear-gradient(90deg, rgba(179,78,248,0.67), rgba(184,91,246,0));` : ``]"
           @click="handleJump('/about')">
        <div v-if="active == 3" class="index_active"></div>
        <span :class="[active == 3 ? `home` : ``]">关于我们</span>
        <div>
          <img src="@/assets/images/home/array.png" alt="">
        </div>
      </div>
      <div class="line">
      </div>
    </template>
  </div>
</template>

<script setup>
import {ref, watch} from 'vue';
import routes from '@/router/routes'  //直接拿路由list做菜单；
import {useRoute, useRouter} from 'vue-router'
import useSettingStore from '@/store/setting.js'
const settingStore = useSettingStore();
const route = useRoute()
const router = useRouter()
const emit = defineEmits(['customEvent'])
const props = defineProps(['menuList'])
let routePath = ref('/')
let selectMenuTitle = ref('')
const product = ref(false)
const serve = ref(false)
const active = ref(0)
console.log({routes});
watch(() => route.path, (newName, oldName) => {
  console.log({route});
  // currentRoute.value = route.matched[0].meta.title;
  routePath.value = newName;
});
const selectMenu = (item) => {
  if (item.children && item.children.length > 0) {
    selectMenuTitle.value == item.meta.title ? selectMenuTitle.value = '' : selectMenuTitle.value = item.meta.title
  } else {
    settingStore.setOpenMenu();
    router.push({path: item.path})
  }

}
const chang_product = (data) => {
  if (data == 'production') {
    active.value = 1
    product.value = !product.value
  } else {
    active.value = 2
    serve.value = !serve.value
  }

}
const handleJump = (data) => {
  emit('customEvent', data)
  if (data == '/home') {
    active.value = 0
    router.push('/')

  } else if (data == '/about') {
    active.value = 3
    router.push(data)
  }
}
</script>

<style lang="less" scoped>
.Menu {
  //margin: 10px;
  height: calc(100vh - 62px);
  position: fixed;
  top: 62px;
  width: 100%;
  background: #0F0F2C;
  z-index: 9999;
  padding: 15px 14px 0;
  transform: translateX(100%);
  transition: all 0.5s ease;
}
.index {
  display: flex;
  justify-content: space-between;
  font-family: Alibaba PuHuiTi 2.0;
  align-items: center;
  /* background: linear-gradient(90deg, rgba(179,78,248,0.67), rgba(184,91,246,0)); */
  height: 60px;
  color: #FFFFFF;
  font-weight: normal;
  font-size: 20px;
}

.index_active {
  width: 6px;
  height: 60px;
  background: #A423FE;
}

.home {
  margin-left: 20px;
  flex: 1;
}

.production {
  margin-top: 10px;
  display: flex;
  align-items: center;
  height: 60px;
  color: #FFFFFF;
  font-weight: normal;
  font-size: 20px;
}

.line {
  height: 3px;
  background: #777786;
  opacity: 0.23;
}

.list {
  font-family: Alibaba PuHuiTi 2.0;
  font-weight: normal;
  color: #777786;
  font-size: 16px;
  margin: 20px 0;
  cursor: pointer;

  &:hover {
    color: #FFFFFF;
  }
}

.menu-item {
  border-bottom: 2px solid rgba(119, 119, 134, 0.23);
}

.children-menu-item {
  color: #777786;
  height: 40px;
  line-height: 40px;
}

.active {
  background: linear-gradient(90deg, rgba(179, 78, 248, 0.38), rgba(184, 91, 246, 0));
  //opacity: 0.38;
  border-left: 3px solid #A423FE;
  padding-left: 10px;
}
</style>
