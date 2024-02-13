<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <div
            class="w-10/12 flex items-center justify-center border-solid border-2 border-sky-500 rounded-lg bg-silvercustom">
            <div class="w-1/2 ">
                <span class="ml-5 text-5xl font-Kanit font-bold text-black">
                    Register
                </span>
                <form @submit.prevent="submit">
                    <div class="mt-4">
                        <InputLabel for="name" value="Name" class="ml-6"/>

                        <div class="flex justify-center">
                            <TextInput id="name" type="text" class="w-11/12 mt-1 block" v-model="form.name" required autofocus
                            autocomplete="name" />
                        </div>

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="email" value="Email" class="ml-6"/>

                        <div class="flex justify-center">
                            <TextInput id="email" type="email" class="w-11/12 mt-1 block" v-model="form.email" required
                            autocomplete="username" />
                        </div>

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password" value="Password" class="ml-6"/>

                        <div class="flex justify-center">
                            <TextInput id="password" type="password" class="mt-1 block w-11/12" v-model="form.password" required
                            autocomplete="new-password" />
                        </div>

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password" class="ml-6"/>

                        <div class="flex justify-center">
                            <TextInput id="password_confirmation" type="password" class="mt-1 block w-11/12"
                            v-model="form.password_confirmation" required autocomplete="new-password" />
                        </div>

                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    </div>

                    <div class="ml-6 mt-5">
                        <Link :href="route('login')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Already registered?
                        </Link>
                    </div>

                    <div class="flex items-center justify-center mt-4">

                        <PrimaryButton class="" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Register
                        </PrimaryButton>
                    </div>
                </form>
            </div>
            <!-- div image -->
            <div class="w-1/2 h-full bg-slate-500">
                <img src="../../../../public/TrelloIr.png" alt="image" class="w-full h-full object-cover rounded-e-lg">
            </div>
        </div>
    </GuestLayout>
</template>
