<template>
    <div>
        <h2 class="nk-title display-4" v-text="title"></h2>
        <div class="nk-gap-2"></div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="lead">
                    <slot></slot>
                </p>
                <div class="nk-gap-2"></div>
                <a :href="url" class="nk-btn nk-btn-lg link-effect-4" v-if="url" v-text="button"></a>
                <slot name="links"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "app-page-error",
        props: {
            title: String,
            url: {
                type: String,
                default:'/'
            },
            button: {
                type: String,
                default: 'Dock Me!'
            }
        }
    }
</script>

<style scoped>

</style>