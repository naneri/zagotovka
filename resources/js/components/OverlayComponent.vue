<template>
    <div v-show="isLoading" class="overlay dark">
        <i class="fas fa-2x fa-sync-alt"></i>
    </div>
</template>

<script>
    export default {
        props: {
            isLoading: Boolean
        }
    }
</script>
