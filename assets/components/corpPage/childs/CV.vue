<template>
    <div id="cv">
        <div id="top-cv" class="lien-relatif"></div>
        <div class="title2">
            <h1>CV</h1>
            <div class="separator"></div>
        </div>
        <div>
            <div class="d-flex justify-content-center gap-1">
                <img
                    src=""
                    alt=""
                />
                <img
                    src=""
                    alt=""
                    class="midle"
                />
                <img
                    src=""
                    alt=""
                />
            </div>
            <div class="d-flex justify-content-center">
                <p>Télécharger <a href="">mon cv</a> ici</p>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts"></script>

<style scoped lang="scss">
#cv {
    background-color: var(--gray-3);
    position: relative;
}
p{
    color: var(--text-primary-color);
    font-size: 1.5rem;
    a{
        color: var(--primary-2);
        transition: all 0.3s;
        border-bottom: 1px solid transparent;
    }
    a:hover {
        color: var(--primary-2);
        border-bottom: 1px solid var(--primary-2);
    }
}
img {
    height: 100px;
    width: 100px;
    background-color: green;
    border-radius: 6px;
}
.midle {
    width: 150px;
}
</style>
