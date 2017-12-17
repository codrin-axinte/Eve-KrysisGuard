<template>
    <div class="nk-blog-post" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
        <div class="nk-post-thumb">
            <div class="nk-post-type" v-if="icon"><span :class="icon"></span></div>
            <div class="nk-post-category" v-if="category"><a href="#" v-text="category"></a></div>
            <a :href="url">
                <img :src="image" :alt="title" class="nk-img-stretch"></a></div>
        <div class="nk-post-content">
            <div data-mouse-parallax-z="2"><h2 class="nk-post-title h1">
                <a :href="url" v-text="title"></a></h2>
                <div class="nk-post-date" v-text="date"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "post-card",
        props: ['url', 'date', 'title', 'image', 'category', 'icon']
    }
</script>

<style scoped>

</style>