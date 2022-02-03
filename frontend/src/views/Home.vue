<template>
    <div>
        <Slider/>
    </div>
</template>

<script>
// @ is an alias to /src

import Main from "@/layouts/main/Main";
import Slider from "@/components/Slider/Slider";

export default {
    name: 'Home',
    components: {Slider},
    created() {
        this.$emit('update:layout', Main)
    },
}
</script>
