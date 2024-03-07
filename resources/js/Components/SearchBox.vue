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
                <input type="text" class="h-6 border-0 form-control w-80 rounded-3xl bg-silvercustom outline-none" placeholder="Search" v-model="search">
                <button type="submit" class="btn btn-primary absolute" @click="submit">
                    <img class="relative left-[290px] h-5" src="@/Asset/icons8-search.svg">
                </button>
            </div>
        </form>

</template>