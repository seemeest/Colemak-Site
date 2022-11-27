<script setup>
defineProps({
    footerAlign: {
        required: true,
        type: String
    }
})

</script>

<template>
    <footer>
        <span>
            © 2022-2022 colimak
        </span>
    </footer>
</template>

<style scoped>
footer {
    position: absolute;
    bottom: 0px;
    right: 15px;
    background-color: #F11321;
    width: 100%;
    text-align: v-bind(footerAlign);
}
</style>