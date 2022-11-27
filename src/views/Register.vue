<script setup>
</script>
<template>
    <div id="body">
        <div id="reg">
            <img id="garland" src="../components/img/reg/regРесурс%2016.png" alt="">
            <img id="register" src="../components/img/reg/regРесурс%201.png" alt="">
            <div>
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="Фамилия">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Пароль">
                <input id="ps" type="text" placeholder="Подтвердите пароль">
                <button>Зарегистрироваться</button>
                <p class="color-black">
                    Есть акаунт?
                    <RouterLink :to="{name: 'login'}">
                        Войдите!
                    </RouterLink>
                </p>
            </div>
            <img id="tree1r" src="../components/img/avt/vhodРесурс%201.png" alt="">
            <img id="tree2r" src="../components/img/avt/vhodРесурс%202.png" alt="">
        </div>
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
</style>