<template>
    <section>
        <div class="container">
            <h2>Errore 404 non siamo riusciti a trovare ciò che cercavi</h2>

            <router-link class="nav-link" :to="{ name: 'blog' }">Torna al blog per leggere contenuti interessanti</router-link>
        </div>
    </section>
</template>

<script>
export default {
    name: 'NotFound'
}
</script> 