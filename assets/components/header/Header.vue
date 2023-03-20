<template>
    <div id="header">
        <div
            id="nav-header"
            class="d-flex justify-content-between align-items-center px-20 fixed width-100"
            :class="{ active: scroll.isActive }"
        >
            <Logo />
            <Nav />
        </div>
        <div>
            <Banniere />
        </div>
    </div>
</template>
<script setup>
import Nav from "./childs/Nav.vue";
import Banniere from "./childs/Banniere.vue";
import Logo from "./childs/Logo.vue";
import { reactive } from "vue";

const scroll = reactive({
    isActive: false,
    y: window.pageYOffset,
});

window.addEventListener("scroll", () => {
    scroll.y = window.pageYOffset;
    if (window.pageYOffset === 0) {
        scroll.isActive = false;
    }
    if (window.pageYOffset > 0) {
        scroll.isActive = true;
    }
});
</script>

<style lang="scss">
#nav-header {
    transition: all 0.4s;
    background-color: var(--gray-3);
    color: white;
    a {
        color: white;
    }
    border-bottom: 1px solid var(--gray-2);
    z-index: 10;
}
.active {
    background-color: white !important;
    a {
        color: var(--text-color) !important;
    }
    border: none !important;
    box-shadow: 0px 5px 10px var(--gray-3);
    li:hover {
        border-bottom: 1px solid var(--gray-3) !important;
    }
    img {
        width: 60px;
        height: 60px;
    }
}
</style>
