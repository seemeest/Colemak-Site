<script setup>
import MyHeader from './components/Header.vue';
import MyFooter from './components/Footer.vue';
import {computed} from "vue";
import router from "./router/index.js";

let footerSetting = computed(() => {
    return router.currentRoute.value.meta.footer
})

let headerSetting = computed(() => {
    return router.currentRoute.value.meta.header
})

</script>

<template>
    <MyHeader v-bind:header-format="headerSetting.format" />

    <RouterView>

    </RouterView>

    <MyFooter v-bind:footer-align="footerSetting.align" />
</template>

<style scoped>

</style>
