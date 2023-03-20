<template>
    <div
        id="banniere"
        class="d-flex flex-column justify-content-center align-items-center"
    >
        <h1>Paul Joret</h1>
        <h2>Développeur Web FullStack</h2>
        <br />
        <ul class="d-flex gap-1">
            <li>HTML</li>
            <li>CSS</li>
            <li>SCSS</li>
            <li>Vue3</li>
            <li>Angular</li>
            <li>PHP</li>
            <li>Symfony</li>
        </ul>
    </div>
</template>
<script setup lang="ts"></script>

<style scoped lang="scss">
h1 {
    font-size: 5rem;
}
ul {
    li {
        font-size: 1.5rem;
    }
}
#banniere {
    min-height: 100vh;
    background-color: var(--gray-3);
}
</style>
