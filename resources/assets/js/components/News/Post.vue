<template>
    <li>
        <div class="nk-social-activity-avatar"><a href="#">
            <img :src="image" :alt="author"></a></div>
        <div class="nk-social-activity-content">
            <div class="nk-social-activity-meta">
            <a :href="authorUrl">{{ author }}</a> posted an update <a href="#" class="nk-social-activity-meta-time">
                {{ postedOn }}
            </a>
            </div>
            <div class="nk-social-activity-text">
                 <slot></slot>
            </div>
            <div class="nk-social-activity-actions">
                <span class="nk-action-heart" v-if="votes">
                    <span class="like-icon ion-android-favorite-outline"></span>
                    <span class="liked-icon ion-android-favorite"></span>
                    <span class="num">{{ votes }}</span>
                </span>
                <a href="#" v-if="comments">
                    <span class="ion-chatbubbles"></span>
                    Comment <span class="nk-badge">12</span>
                </a>
                <a href="#" v-if="favoriteUrl"><span class="ion-android-star"></span> Favorite</a>
                <a href="#" v-if="deleteUrl"><span class="ion-trash-b"></span> Delete</a>
            </div>
        </div>
    </li>
</template>

<script>
    export default {
        name: "post",
        props: {
            favoriteUrl: String,
            deleteUrl: String,
            votes:{
                type: Number,
                default:0
            },
            author: String,
            postedOn: String,
            authorUrl: {
                type: String,
                default: '#'
            },
            image: String,
            comments: {
                type: Boolean,
                default: false
            }
        }
    }
</script>

<style scoped>

</style>