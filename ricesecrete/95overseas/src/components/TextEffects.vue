<template>
    <div>
        <div id="magic" ref="magicContainer"></div>
    </div>
</template>

<script setup>
import * as THREE from 'three';
import { FontLoader } from 'three/addons/loaders/FontLoader.js';
import { Environment } from '@/utils/textThree.js';
import {onMounted,ref,watch} from 'vue'

const props = defineProps({
    content:{
        type:String,
        required: true
    }
})

onMounted(() => {
    preload()
})


let typo = ref(null)
const fontFamily = new URL('@/assets/fonts/filtered_font.json', import.meta.url).href
const preload = () => {
    const manager = new THREE.LoadingManager();
    manager.onLoad = () => {
        const environment = new Environment(typo.value, particle,props.content);
        watch(() => props.content, (newContent) => {
            environment.updateContent(newContent);
        });
    };
    const loader = new FontLoader(manager);
    const font = loader.load(fontFamily, 
    (font) => {
        typo.value = font;
    });

    const particle = new THREE.TextureLoader(manager).load('https://res.cloudinary.com/dfvtkoboz/image/upload/v1605013866/particle_a64uzf.png');
}


</script>

<style>
#magic {
  width: 800px;
  height: 300px;
  display: block;
  font-weight: bold;
  font-family: 'Inter,system-ui,Avenir,Helvetica,Arial,sans-serif' !important; 
}
</style>