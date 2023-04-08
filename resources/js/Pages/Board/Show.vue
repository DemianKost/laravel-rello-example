<template>
    <Header />
    <div class="container mx-auto mt-6">
        
        <div class="w-full shadow-md p-5">
            <h2 class="text-xl mb-3">Create a new task</h2>
            <form @submit.prevent="createTask()" class="flex items-center space-x-3">
                <div class="w-1/3">
                    <label>Task: </label>
                    <input v-model="form.body" type="text" class="shadow-sm px-4 py-2 rounded-sm w-full" />
                </div>
                <div class="w-1/3">
                    <label>Category: </label>
                    <select v-model="form.category" class="shadow-sm px-4 py-2 rounded-sm w-full">
                        <option value="1" selected>To do</option>
                        <option value="2">Do today</option>
                        <option value="3">In progress</option>
                        <option value="4">Done</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <button type="submit" class="bg-green-500 rounded-sm text-white px-4 py-2 w-full">Add task</button>
                </div>
            </form>
        </div>

        <div class="tasks__container w-full flex space-x-3 mt-10">

            <BoardColumn title="To do" :tasks="tasks.to_do" />
            <BoardColumn title="Do today" :tasks="tasks.do_today" />
            <BoardColumn title="In progress" :tasks="tasks.in_progress" />
            <BoardColumn title="Done" :tasks="tasks.done" />

        </div>
        
    </div>
</template>

<script setup>
    import { useForm } from '@inertiajs/vue3'
    import BoardColumn from './Components/BoardColumn.vue';

    let props = defineProps({
        board: Object,
        tasks: Array
    })

    const form = useForm({
        board_id: props.board.id,
        body: '',
        category: ''
    })

    function createTask()
    {
        form.post('/tasks');

        form.body = '';
        form.category = '';
    }
</script>