<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },

    canRegisterAccount: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <!-- div form login -->
        <div
            class="w-10/12 flex items-center justify-center border-solid border-2 border-sky-500 rounded-lg bg-silvercustom">
            <div class="w-1/2 ">
                <span class="ml-5 text-5xl font-Kanit font-bold text-black">
                    Sing In
                </span>
                <form @submit.prevent="submit">
                    <div class="ml-5 mr-5 mt-8">
                        <InputLabel for="email" value="Email" class="ml-2" />
                        <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                            autocomplete />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>


                    <div class="ml-5 mr-5 mt-5">
                        <InputLabel for="password" value="Password" class="ml-2" />
                        <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required placeholder="Type your password"
                            autocomplete="current-password" />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>
                    <div class="mt-4 ml-5 ">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ms-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>
                    <div class="flex justify-between mt-4">
                        <span class="ml-5">
                            Don't have an account?
                            <Link :href="route('register')"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Sing Up
                            </Link>
                        </span>

                        <Link v-if="canResetPassword" :href="route('password.request')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-5">
                        Forgot your password?
                        </Link>
                    </div>

                    <div class="flex items-center justify-center mt-4">

                        <PrimaryButton class="text-sky-400" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Sing In
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
