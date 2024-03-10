<script setup>
import AuthNav from '@/Layouts/AuthenticatedLayout.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { defineProps } from 'vue';

const form = reactive({
    name: null,
    description: null,
    label: null,
    errors: {}
})

const props = defineProps({
    errors: Object
})

function submit() {
    router.post(route('boards.store'), form)
}

</script>

<template>
    <AuthNav />
    <div class="w-full h-auto">
        <form @submit.prevent="submit">
            <div class="w-full h-auto mt-10 sm:mt-0">
                <div class=" flex flex-col items-center">
                    <div class="md:col-span-1 ml-40 w-full">
                        <div class="px-4 sm:px-0 p-5 flex flex-col justify-start">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Create a new Board</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Fill in the form to create a new board.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2 w-11/12">
                        <div class="shadow-2xl sm:overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6 ">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6">
                                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" v-model="form.name" id="name" name="name" autocomplete="name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-red-600" v-if="errors.name">{{ errors.name }}</p>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                        <textarea id="description" name="description" v-model="form.description" rows="3"
                                            class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                        <p class="mt-2 text-sm text-red-600" v-if="form.errors.description" v-text="form.errors.description"></p>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="label" class="block text-sm font-medium text-gray-700">Label</label>
                                        <input type="text" v-model="form.label" id="label" name="label" autocomplete="label"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-red-600" v-if="form.errors.label" v-text="form.errors.label"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right sm:px-6 flex items-center justify-center w-full">
                                <PrimaryButton type="submit" class="w-full">
                                    Create
                                </PrimaryButton>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<!-- <script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  first_name: null,
  last_name: null,
  email: null,
})

function submit() {
    router.post(route('boards.store'), form)
}
</script>

<template>
  <form @submit.prevent="submit">
    <label for="first_name">First name:</label>
    <input id="first_name" v-model="form.first_name" />
    <label for="last_name">Last name:</label>
    <input id="last_name" v-model="form.last_name" />
    <label for="email">Email:</label>
    <input id="email" v-model="form.email" />
    <button type="submit">Submit</button>
  </form>
</template> -->