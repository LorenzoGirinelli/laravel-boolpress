<template>
    <div>
        <Newsletter />
        <Posts />
    </div>
</template>

<script>
import Newsletter from '../components/Newsletter.vue';
import Posts from '../components/Posts.vue';
export default {
    name: 'LatestNews',
    components: {
        Newsletter,
        Posts
    }
}
</script> 