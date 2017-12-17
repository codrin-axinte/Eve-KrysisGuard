<template>
    <li>
        <div class="nk-forum-icon" v-if="icon">
            <span :class="icon"></span>
        </div>
        <div class="nk-forum-title">
            <h3>
                <a :href="url">{{ title }}</a>
                <span class="ion-checkmark-circled" v-if="completed"></span>
            </h3>
            <div class="nk-forum-title-sub"><slot></slot></div>
        </div>
        <div class="nk-forum-count">{{ votes }} votes</div>
        <div class="nk-forum-activity-avatar">
            <img :src="authorImage" :alt="authorName"></div>
        <div class="nk-forum-activity">
            <div class="nk-forum-activity-title" :title="authorName"><a
                    href="#" v-text="authorName"></a></div>
            <div class="nk-forum-activity-date">{{ date }}</div>
        </div>
    </li>
</template>

<script>
    export default {
        name: "task",
        props: [
            'url',
            'icon',
            'title',
            'votes',
            'authorImage',
            'authorName',
            'date',
            'completed'
        ]
    }
</script>

<style scoped>

</style>