<template>
    <div class="nk-widget">
        <h4 class="nk-widget-title" v-if="title">{{ title }}</h4>
        <div><slot></slot></div>
    </div>
</template>

<script>
    export default {
        name: "app-widget",
        props: ['title']
    }
</script>

<style scoped>

</style>