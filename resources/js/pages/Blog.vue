<template>
    <div>
        <Posts />
        <Newsletter />
    </div>
</template>

<script>
import Posts from '../components/Posts.vue';
import Newsletter from '../components/Newsletter.vue';
export default {
    name: 'Blog',
    components: {
        Posts,
        Newsletter
    }
}
</script> 