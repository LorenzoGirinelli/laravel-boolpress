<template>
    <div class="container">
        <h1>Tutti i post</h1>

        <div class="row row-cols-3">
                <!-- Single post card -->
                <div v-for="post in posts" :key="post.id" class="col">
                    <div class="card my-2">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">{{ post.title }}</h5>
                            <p class="card-text">{{ truncateText(post.content, 50) }}</p>
                        </div>
                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                        </ul> -->
                        <!-- <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                        </div> -->
                    </div>
                </div>
                <!-- End Single post card -->
            </div>

            <nav>
                <ul class="pagination">
                    <!-- class disabled all li per disabilitare un link -->
                    <li class="page-item" :class="{ 'disabled': currentPage == 1 }">
                        <a @click="getPosts(currentPage - 1)" class="page-link" href="#">Previous</a>
                    </li>
                    <!-- <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li> -->
                    <li class="page-item" :class="{ 'disabled': currentPage == lastPage }">
                        <a @click="getPosts(currentPage + 1)" class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
    </div>
</template>

<script>
export default {
    name: 'Posts',
    data: function() {
        return {
            posts: [],
            currentPage: 1,
            lastPage: false
        };
    },
    methods: {
        getPosts: function(pageNumber) {
            // Faremo la chiamata API per prenderci i post
            axios.get('/api/posts', {
                params: {
                    page: pageNumber
                }
            })
            .then((response) => {
                this.posts = response.data.results.data;
                this.currentPage = response.data.results.current_page;
                this.lastPage = response.data.results.last_page;
            });
        },

        truncateText: function(text, maxCharsNumber) {
            // Prende un testo, se il testo è più lungo di x caratteri
            // lo taglia e aggiunge 3 puntini alla fine
            if(text.length > maxCharsNumber) {
                return text.substr(0, maxCharsNumber) + '...';
            }
            return text;
        }
    },
    created: function() {
        this.getPosts(1);
    }
}
</script> 