<template>
    {{msg}}left
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                msg :'测试'
            }
        }
    }
</script>