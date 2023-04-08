<template>
    <div class="tasks__col w-1/4 shadow-sm p-4">
        <h2 class="text-xl font-bold uppercase">{{ title }}</h2>
        <hr class="mb-3">
        <div>

            <TaskCard v-for="task in tasks" :key="task.id" :task="task" />

        </div>
    </div>
</template>

<script setup>
    import TaskCard from './TaskCard.vue'

    defineProps({
        title: String,
        tasks: Array
    })
</script>