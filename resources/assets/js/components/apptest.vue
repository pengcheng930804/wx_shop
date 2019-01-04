<template>
    <div>
        <h1>Hello, {{msg}}</h1>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                msg: 'Vue'
            }
        }
    }
</script>

<style></style>