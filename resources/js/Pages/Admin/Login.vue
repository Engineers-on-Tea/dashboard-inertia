<script setup>
import AuthLayout from './Layouts/AuthLayout.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('dashboard.login.submit'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
<template>
    <Head :title="$page.props.setting['title']" />
    <AuthLayout>
        <form class="auth-form mt-2" :action="route('dashboard.login.submit')" method="POST" @submit.prevent="submit">
            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" v-model="form.email"
                    placeholder="john@example.com" aria-describedby="email" tabindex="1" autofocus />
                    <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                        <small>Forgot Password?</small>
                    </a>
                </div>
                <div class="input-group input-group-merge form-password-toggle">
                    <input type="password" class="form-control form-control-merge" id="password" name="password"
                        v-model="form.password" tabindex="2"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
            </div>
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" name="remember"
                        v-model="form.remember" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
            </div>
            <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
        </form>
    </AuthLayout>
</template>
