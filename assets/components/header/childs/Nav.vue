<template>
    <ul class="d-flex gap-1">
        <li>
            <a href="#header">Home</a>
        </li>
        <li>
            <a href="#top-about-me">About me</a>
        </li>
        <li>
            <a href="#top-cv">CV</a>
        </li>
        <li>
            <a href="#top-projects">My Projects</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>
</template>
<script setup lang="ts">
</script>

<style scoped lang="scss">
ul{
    li{
        padding: 0 0.5rem;
        transition: all 0.2s;
        border-bottom: 1px solid transparent;
    }
    li:hover {
        border-bottom: 1px solid var(--gray-1);
    }
}
a{
    font-weight: 500;
    font-size: 1.5rem;
    text-transform: uppercase;
}
</style>
