<script>
import { ref } from 'vue';

export default {
    setup() {
        const file = ref(null);

        const onFileChange = (e) => {
            file.value = e.target.files[0];
        };

        return {
            onFileChange,
        };
        console.log(onFileChange);
    },
};
</script>

<template>
    <input type="file" id="Image" @change="onFileChange($event)" />
</template>
  