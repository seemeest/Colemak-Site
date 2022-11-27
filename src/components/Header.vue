<script setup>
defineProps({
    headerFormat: {
        required: true,
        type: String
    }
})
</script>

<template>
    <header v-if="headerFormat == 'guest'">
        <img src="../assets/oggetto-1.png" alt="oggettoS" class="logo">
        <ol>
            <li>
                <RouterLink :to="{name: 'login'}">Вход</RouterLink>
            </li>
            <li>
                <RouterLink :to="{name: 'registration'}">Регистрация</RouterLink>
            </li>
        </ol>

    </header>
    <header v-else-if="headerFormat == 'compact'">
        <RouterLink :to="{name: 'main'}">
            <img src="../assets/oggetto-1.png" alt="oggettoS" class="logo">
        </RouterLink>
    </header>
    <header v-else-if="headerFormat == 'profile'">
        <img src="../assets/oggetto-1.png" alt="oggettoS" class="logo">
        <div>
            <span>Выход</span>
        </div>
    </header>
</template>

<style scoped>

header {
    background-color: #F11321;
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    width: 170px;
    height: 38px;
}
</style>
