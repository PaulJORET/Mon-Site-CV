<template>
    <div id="about-me" class="d-flex flex-column">
        <div id="top-about-me" class="lien-relatif"></div>
        <div class="title">
            <h1>About me</h1>
            <div class="separator"></div>
        </div>
        <div class="d-flex">
            <div style="height: 600px; width: 50%; background-color: red">
                <img src="" alt="" />
            </div>
            <div
                class="d-flex flex-column justify-content-center align-items-center p-20 gap-1"
                style="width: 50%; height: 600px"
            >
                <h2>Paul Joret</h2>
                <div class="separator"></div>
                <h3>Développeur WEB FullSatck</h3>
                <p>
                    Je m'appelle Paul Joret. Je suis passionné d'informatique
                    depuis mon plus age, Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Tempora a possimus quisquam. Magnam maxime
                    laudantium quae modi voluptate nihil, odio quam incidunt
                    ratione repellendus consequatur. Harum animi eveniet itaque!
                    Fugit!
                </p>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts"></script>

<style scoped lang="scss">
#about-me{
    position: relative;
    color: var(--text-color);
}
p {
    max-width: 400px;
    text-align: center;
    font-size: 16.5px;
    line-height: 1.5;
}
</style>
