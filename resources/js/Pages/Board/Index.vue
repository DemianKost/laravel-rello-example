<template>
    <Header />
    <div class="container mx-auto">
        
        <div v-if="boards" class="w-full flex space-x-4 mt-10">

            <BoardCard
                v-for="board in boards"
                :key="board.id"
                :board="board"
            />
        
        </div>

    </div>
</template>

<script setup>
    import BoardCard from './Components/BoardCard.vue';

    let props = defineProps({
        boards: Array
    })
</script>