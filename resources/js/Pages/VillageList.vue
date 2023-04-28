<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Page } from 'v-page'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Поселки</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div  v-for="(item) in $page.props.villages.data" style="align-items: center" class="py-5 px-2 d-flex align-items-center my- bg-white overflow-hidden shadow-sm">
                <a :href="'village/'+item.id">
                    {{ item.name }}</a>

                <hr >
            </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
