<template>
    <component :is="layout">
        <router-view :layout.sync="layout"/>
    </component>
</template>

<script>

export default {
    name: 'App',
    data() {
        return {
            layout: 'Main'
        }
    },
}

</script>

<style lang="scss">

</style>