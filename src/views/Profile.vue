<script setup>

</script>

<template>
    <main>
        <div id="prof">
            <div id="one">
                <img id="deerP" src="../components/img/avt/vhodРесурс 6.png" alt="">
                <img id="garlandP" src="../components/img/reg/regРесурс 17.png" alt="">
                <h1 class="color-red">User name</h1>
            </div>
            <ol>
                <li>
                    <router-link :to="{name: 'gift'}">Кому дарить подарки</router-link>
                </li>
                <li>
                    <router-link :to="{name: 'event'}">События</router-link>
                </li>
                <li>
                    <router-link :to="{name: 'group'}">Группы</router-link>
                </li>
            </ol>
            <div id="table-wrapper">
                <div id="table-scroll">
                    <router-view>

                    </router-view>
                </div>
            </div>
        </div>
    </main>


</template>

<style>

.table {
    width: 685px;
    border: none;
    margin-bottom: 20px;
    border-collapse: separate;
    max-height: 10px;
    overflow: scroll;
}

.table thead th {
    font-weight: bold;
    text-align: left;
    border: none;
    padding: 10px 15px;
    background: white;
    font-size: 14px;
    border-top: 1px solid #ddd;
    color: #F11321;
}

.table tr th:first-child, .table tr td:first-child {
    border-left: 1px solid #ddd;
}

.table tr th:last-child, .table tr td:last-child {
    border-right: 1px solid #ddd;
}

.table thead tr th:first-child {
    border-radius: 5px 0 0 0;
}

.table thead tr th:last-child {
    border-radius: 0 5px 0 0;
}

.table tbody td {
    text-align: left;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    vertical-align: top;
}

.table tbody tr {
    background-color: #d11321;
}

.table tbody tr:last-child td {
    border-bottom: 1px solid #ddd;
}

.table tbody tr:last-child td:first-child {
    border-radius: 0 0 0 5px;
}

.table tbody tr:last-child td:last-child {
    border-radius: 0 0 5px 0;
}

#table-wrapper {
    position:relative;
}
#table-scroll {
    height:500px;
    overflow:auto;
    margin-top:20px;
}
#table-wrapper table {

}
#table-wrapper table thead th .text {
    position:absolute;
    top:-20px;
    z-index:2;
    height:20px;
    width:35%;
    border:1px solid red;
}

ol {
    display: flex;
    width: 700px;
    justify-content: center;
    padding: 0;
}

ol > li {
    margin-right: 30px;
    cursor: pointer;
    border: 1px solid white;
    border-radius: 5px;
    padding: 5px;
}

#prof {
    width: 100%;
    height: 84vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

#two > div > div {
    color: #F11321 !important;
}

#one {
    background-color: white;
    width: 700px;
    border-radius: 5px;
    color: #F11321;
}

#one {
    height: 150px;
    margin-bottom: 25px;
}

#one img {
    position: relative;
}

#one h1 {
    position: relative;
    top: -140px;
    text-align: center;
}

#deerP {
    top: -76px;
    left: -88px;
}

#garlandP {
    top: -100px;
    left: 177px;
}

</style>