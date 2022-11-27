<script setup>

</script>

<template>
    <main>
        <div id="main">
            <h1>Тайный санта.</h1>
            <p>Играйте в Тайного Санту с коллегами и друзьями, всей семьёй или просто со знакомыми и подписчиками.</p>
        </div>
        <img id="santa" src="../assets/santa.png" alt="Santa">
    </main>
</template>

<style scoped>
main {
    width: 100%;
    min-height: 100%;
    background-color: #F11321;
    display: flex;
    flex-direction: column;
    padding: 0% 10% 0% 10%;
    align-items: center;
}

#main {
    width: 350px;
    font-size: 20px;
    text-align: center;
    margin-bottom: 10%;
    margin-top: 10%;
}

#main h1 {
    margin-bottom: 10px;
}

#santa {
    width: 52%;
    position: absolute;
    bottom: 0;
    right: 0;
    filter: blur(1px) drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}
</style>