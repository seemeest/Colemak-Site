<script setup>

</script>

<template>
    <div id="body">
        <main id="avt">
            <img id="deer" src="../components/img/avt/vhodРесурс%206.png" alt="">
            <img id="entrance" src="../components/img/avt/vhodРесурс%207.png" alt="">
            <div>
                <input type="text" placeholder="Логин">
                <input type="text" placeholder="Пароль">
                <button>Войти</button>
                <p class="color-black">
                    Нет акаунта?
                    <RouterLink :to="{name: 'registration'}">
                        Зарегистрируйся!
                    </RouterLink>
                </p>
            </div>
            <img id="tree1a" src="../components/img/avt/vhodРесурс%201.png" alt="">
            <img id="tree2a" src="../components/img/avt/vhodРесурс%202.png" alt="">
        </main>
    </div>
</template>

<style scoped>
* {
    margin: 0;
    padding: 0;
}

#body {
    width: 100%;
    height: 84vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}


#avt {
    width: 550px;
    height: 400px;
    background-color: white;
    border-radius: 5px;
}

#avt img {
    position: relative;
}

#deer {
    top: -76px;
    left: -88px;
}

#entrance {
    top: -75px;
    left: -100px;
}

#avt div {
    position: relative;
    top: -60px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

#avt input, #avt button {
    background-color: #F11321;
    border: none;
    padding: 10px;
    margin-bottom: 20px;
    color: white;
    border-radius: 10px;
}

#avt input {
    width: 350px;
    font-size: 20px;
}

#avt button {
    font-size: 30px;
    margin-top: 10px;
}

#avt button:hover {
    background-color: #d11321;
    cursor: pointer;
}

#avt input::placeholder {
    color: white;
    font-size: 20px;
}

#avt p {
    font-size: 20px;
    margin-top: 5px;
}

#avt a {
    color: #F11321;
}

#avt a:hover {
    color: #d11321;
}

#tree1a {
    top: -282px;
    left: -66px;
}

#tree2a {
    top: -279px;
    left: 340px;
}


#reg {
    width: 550px;
    height: 450px;
    background-color: white;
    border-radius: 5px;
}

#reg img {
    position: relative;
}

#garland {
    top: -17px;
    left: -19px;
}

#register {
    top: -80px;
    left: 115px;
    height: 60px;
    margin-bottom: 5px;
}

#reg div {
    position: relative;
    top: -70px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

#reg input, #reg button {
    background-color: #F11321;
    border: none;
    padding: 10px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 20px;
    color: white;
    border-radius: 10px;
}

#reg input::placeholder {
    color: white;
    font-size: 17px;
}

#reg input {
    font-size: 17px;
}

#reg button {
    font-size: 25px;
    margin-top: 20px;
    margin-bottom: 30px;
}

#reg button:hover {
    background-color: #d11321;
    cursor: pointer;
}

#ps {
    width: 300px;
}

#reg p {
    font-size: 20px;
    width: 100%;
    text-align: center;
}

#reg a {
    color: #F11321;
}

#reg a:hover {
    color: #d11321;
}

#tree1r {
    top: -281px;
    left: -66px;
}

#tree2r {
    top: -278px;
    left: 340px;
}


#prof div {
    background-color: white;
    width: 700px;
    border-radius: 5px;
}

#one {
    background-color: white;
    width: 80vw;
    height: 150px;
    margin-bottom: 100px;
}

#two {
    background-color: white;
    width: 80vw;
    height: 200px;
    margin-bottom: 50px;
}

#three {
    background-color: white;
    width: 80vw;
    height: 200px;
}

#one img, #two img, #three img {
    position: relative;
}

#deerP {
    top: -76px;
    left: -88px;
}

#garlandP {
    top: -100px;
    left: 177px;
}

#tree1p {
    top: 36px;
    left: -66px;
}

#tree2p {
    top: 37px;
    left: 539px;
    height: 100px;
}

#tree3p {
    top: 51px;
    left: -43px;
    width: 80px;
}

#tree4p {
    top: 52px;
    left: 566px;
    height: 150px;
}

</style>