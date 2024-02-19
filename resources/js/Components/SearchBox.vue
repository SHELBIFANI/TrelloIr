<script setup>


</script>

<template>

    <div class="flex items-center">
        <input v-model="search" @input="searching = true" @keydown="searching = true" @keydown.escape="searching = false"
            @keydown.shift.tab="searching = false" type="text"
            class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            placeholder="Search..." />
        <!-- <svg v-if="searching" class="animate-spin -mr-10 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8V2.5a.5.5 0 011 0V4a8 8 0 01-8 8z">
            </path>
        </svg> -->
        <div v-if="search.length > 0" class="absolute bg-white mt-1 rounded w-64">
            <ul>
                <li v-for="result in searchResults" class="text-sm">
                    <Link :href="result.url" @click="search = ''" class="block px-4 py-2 hover:bg-gray-100">
                        {{ result.title }}
                    </Link>
                </li>
            </ul>
        </div>
    </div>

</template>