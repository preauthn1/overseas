<template>
    <div
        class=" flex items-center justify-center h-20 md:h-24 lg:h-28 bg-[url('@/assets/images/home/background.png')] bg-[auto_100%] bg-no-repeat bg-center">
        <div class=" relative pr-2">
            <span
                class=" text-center bg-gradient-to-r from-[#A43AEE] to-[#22FF4E] bg-clip-text text-transparent text-xl md:text-3xl lg:text-[42px] font-bold ">
                {{title}}</span>
            <span
                class="text-center drop-shadow-[-1px_1px_1px_#050508] text-white text-xl md:text-3xl lg:text-[42px] font-bold absolute -top-0.5 left-1.5">
                {{title}}</span>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    title:{
        type:String,
        required: true
    }
})
</script>