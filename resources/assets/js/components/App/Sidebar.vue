<template>
<!--
START: Sidebar

Additional Classes:
    .nk-sidebar-left
    .nk-sidebar-right
    .nk-sidebar-sticky
-->
    <aside :class="options">
        <slot></slot>
    </aside>
</template>

<script>
    export default {
        name: "app-sidebar",
        props: {
            sticky: {
                type: Boolean,
                default: false
            },
            right: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            options(){
                let cls = 'nk-sidebar';

                if(this.$props.right){
                    cls += ' nk-sidebar-right';
                } else {
                    cls += ' nk-sidebar-left';
                }

                if(this.$props.sticky){
                    cls += ' nk-sidebar-sticky';
                }

                return cls;
            }
        }
    }
</script>

<style scoped>

</style>