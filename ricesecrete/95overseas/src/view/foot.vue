<template>
  <div class="footer">
    <!--    <object type="image/svg+xml" data="../assets/1.svg" width="100%" height="50px"></object>-->
    <img src="@/assets/1.svg" class="curve">
    <div class="footer-content text-white">
      <div class="footer-content-center">
        <div class="flex justify-center items-start">
          <img src="../assets/images/header/95chuhai.png" class="foot-logo max-[768px]:hidden">
          <div class="flex-1">
            <div class="flex justify-around">
              <div class="text-white text-sm sm:text-3xl">{{ $t('联系我们') }}</div>
              <div class="max-[768px]:hidden">&nbsp;</div>
            </div>
            <div class="flex mt-6 sm:mt-12 justify-around text-sm lg:text-base">
              <a href="https://t.me/alon550">
                <div class="flex items-center">
                  <img src="@/assets/images/foot/44.png" class="w-11 h-11 mr-4 max-[768px]:w-6 max-[768px]:h-6">
                  <span>Telegram</span>
                </div>
              </a>
              <a href="https://wa.me/639671175857">
                <div class="flex items-center ">
                  <img src="@/assets/images/foot/45.png" class="w-11 h-11 mr-4 max-[768px]:w-6 max-[768px]:h-6">
                  <span>Whatsapp</span>
                </div>
              </a>
            </div>
            <div class="text-white text-sm text-center mt-4">
          Copyright@九五出海
        </div>
          </div>
        </div>

      </div>
    </div>


  </div>
</template>

<script setup>
</script>

<style lang="less" scoped>

.footer {
  //height: 434px;
  //background: #212243;
  position: relative;
  //z-index: 999;
  background-image: url("../assets/images/foot/foot1.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position: left top;
}

.footer-content {
  width: 100%;
  //min-height: 200px;
  background: #212243;
  padding-bottom: 14px;
}

.footer-content-center {
  max-width: 1298px;
  margin: 0 auto;
}

.foot-logo {
  width: 120px;
  //height: 86px;
  //margin-right: 100px;
}

.curve {
  width: 100%;
  height: 200px;
  @media (max-width: 768px) {
    height: 100px !important;
  }
}
</style>
