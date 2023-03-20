<template>
    <div id="footer">
        <h1>Footer</h1>
        <Contact />
        <NavFooter />
    </div>
</template>
<script setup lang="ts">
import Contact from "./childs/Contact.vue";
import NavFooter from "./childs/NavFooter.vue";
</script>

<style scoped lang="scss">
#footer{
    background-color: yellow;
}
</style>
