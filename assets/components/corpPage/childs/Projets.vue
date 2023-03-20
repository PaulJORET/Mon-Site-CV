<template>
    <div id="projects">
        <div id="top-projects" class="lien-relatif"></div>
        <div class="title">
            <h1>My Projects</h1>
            <div class="separator"></div>
        </div>
        <div id="contener" class="d-flex flex-wrap justify-content-around px-30">
            <div id="bloc" class="d-flex flex-column align-items-center">
                <div style="width: 100%;">
                    <img
                        src=""
                        alt=""
                        style="
                            height: 200px;
                            width: 100%;
                            background-color: yellow;
                        "
                    />
                </div>
                <div class="d-flex flex-column align-items-center mt-20">
                    <h2 class="mb-20">project 1</h2>
                    <div class="separator"></div>
                    <ul class="d-flex flex-wrap justify-content-center gap-1">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Bootstrap</li>
                        <li>Symfony</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reprehenderit quae laudantium eaque harum repellendus, natus sunt voluptatibus ut officiis iusto at ab perferendis architecto asperiores perspiciatis deserunt accusamus non.</p>
                </div>
            </div>
            <div id="bloc" class="d-flex flex-column align-items-center">
                <div style="width: 100%;">
                    <img
                        src=""
                        alt=""
                        style="
                            height: 200px;
                            width: 100%;
                            background-color: yellow;
                        "
                    />
                </div>
                <div class="d-flex flex-column align-items-center mt-20">
                    <h2 class="mb-20">project 1</h2>
                    <div class="separator"></div>
                    <ul class="d-flex flex-wrap justify-content-center gap-1">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Bootstrap</li>
                        <li>Symfony</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reprehenderit quae laudantium eaque harum repellendus, natus sunt voluptatibus ut officiis iusto at ab perferendis architecto asperiores perspiciatis deserunt accusamus non.</p>
                </div>
            </div>
            <div id="bloc" class="d-flex flex-column align-items-center">
                <div style="width: 100%;">
                    <img
                        src=""
                        alt=""
                        style="
                            height: 200px;
                            width: 100%;
                            background-color: yellow;
                        "
                    />
                </div>
                <div class="d-flex flex-column align-items-center mt-20">
                    <h2 class="mb-20">project 1</h2>
                    <div class="separator"></div>
                    <ul class="d-flex flex-wrap justify-content-center gap-1">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Bootstrap</li>
                        <li>Symfony</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reprehenderit quae laudantium eaque harum repellendus, natus sunt voluptatibus ut officiis iusto at ab perferendis architecto asperiores perspiciatis deserunt accusamus non.</p>
                </div>
            </div>
            <div id="bloc" class="d-flex flex-column align-items-center">
                <div style="width: 100%;">
                    <img
                        src=""
                        alt=""
                        style="
                            height: 200px;
                            width: 100%;
                            background-color: yellow;
                        "
                    />
                </div>
                <div class="d-flex flex-column align-items-center mt-20">
                    <h2 class="mb-20">project 1</h2>
                    <div class="separator"></div>
                    <ul class="d-flex flex-wrap justify-content-center gap-1">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Bootstrap</li>
                        <li>Symfony</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reprehenderit quae laudantium eaque harum repellendus, natus sunt voluptatibus ut officiis iusto at ab perferendis architecto asperiores perspiciatis deserunt accusamus non.</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts"></script>

<style scoped lang="scss">
#projects {
    position: relative;
    color: var(--text-primary-color);
    padding-bottom: 4rem;
}
#bloc {
    width: 26%;
    margin-bottom: 4rem;
    background-color: var(--gray-3);
    padding: 1rem;
    border-radius: 6px;
    transition: all 0.3s;
    cursor: pointer;
}
#bloc:hover {
    scale: 1.05;
    box-shadow: 0px 7px 10px var(--gray-3);
}
p {
    text-align: center;
}
ul {
    li {
        color: var(--primary-1);
        font-size: 1.4rem;
    }
}
img {
    border-radius: 6px;
}
</style>
