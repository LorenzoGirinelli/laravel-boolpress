<template>
    <div class="container">
        <h1>Tutti i post</h1>
    </div>
</template>

<script>
export default {
    name: 'Posts',
    data: function() {
        return {
            posts: []
        };
    },
    methods: {
        getPosts: function() {
            // Faremo la chiamata API per prenderci i post
            axios.get('/api/posts')
            .then((response) => {
                this.posts = response.data.results;
            });
        }
    },
    created: function() {
        this.getPosts();
    }
}
</script> 