<template>
    <div class="d-flex flex-column h-100">
        <Header/>
        <slot/>
        <Footer/>
    </div>
</template>

<script>

import Header from "@/layouts/main/Header";
import Footer from "@/layouts/main/Footer";

export default {
    name: "Main",
    components: {
        Header,
        Footer,
    }
}
</script>

<style scoped>

</style>