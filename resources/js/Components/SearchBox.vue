<script setup>
import { ref } from 'vue';

//i need to get data from input text
const search = ref('');

const submit = () => {
    //send data to backend
    console.log(search.value);

}

</script>

<template>

    
        <!--add search box and send data-->
        <form action="{{  }}" method="GET">
            <div class="flex items-center">
                <input type="text" class="h-8 form-control w-80 rounded-3xl border-2" placeholder="Search" v-model="search">
                <button type="submit" class="btn btn-primary absolute" @click="submit">
                    <img class="relative left-[280px]" src="@/Asset/icons8-search.svg">
                </button>
            </div>
        </form>

</template>