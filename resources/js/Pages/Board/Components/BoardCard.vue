<template>
    <div class="w-1/3 border border-gray-300 p-6 shadow-sm rounded-sm">
        <h2 class="text-xl font-bold uppercase">{{ board.title }}</h2>
        <p class="text-sm font-light mb-6">{{ board.description }}</p>

        <div class="flex justify-end">
            <Link :href="`/boards/${board.id}`" class="px-4 py-2 bg-green-500 text-white rounded-full">View board</Link>   
        </div>     
    </div>
</template>

<script setup>
    defineProps({
        board: Object
    })
</script>