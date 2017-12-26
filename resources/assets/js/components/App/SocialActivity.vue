<template>
    <li>
        <div class="nk-social-activity-avatar">
            <a :href="url">
                <img :src="image" :alt="author">
            </a>
        </div>
        <div class="nk-social-activity-content">
            <slot></slot>
        </div>
    </li>
</template>

<script>
    export default {
        name: "app-social-activity",
        props: {
            author: String,
            image: String,
            url: {
                type:String,
                default: '#'
            },
        }
    }
</script>

<style scoped>

</style>