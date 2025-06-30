<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    karyawan: Object
});

const form = useForm({
    nama_lengkap: props.karyawan.nama_lengkap,
    email: props.karyawan.email,
    posisi: props.karyawan.posisi,
    tanggal_masuk: props.karyawan.tanggal_masuk,
    gaji: props.karyawan.gaji,
});

const submit = () => {
    form.put(route('karyawan.update', props.karyawan.id));
};
</script>

<template>
    <Head title="Edit Karyawan" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Karyawan</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                         <form @submit.prevent="submit">
                            <div class="mb-4">
                                <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <input type="text" v-model="form.nama_lengkap" id="nama_lengkap" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <div v-if="form.errors.nama_lengkap" class="text-red-600 text-sm mt-1">{{ form.errors.nama_lengkap }}</div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" v-model="form.email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <div v-if="form.errors.email" class="text-red-600 text-sm mt-1">{{ form.errors.email }}</div>
                            </div>

                            <div class="mb-4">
                                <label for="posisi" class="block text-sm font-medium text-gray-700">Posisi</label>
                                <input type="text" v-model="form.posisi" id="posisi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <div v-if="form.errors.posisi" class="text-red-600 text-sm mt-1">{{ form.errors.posisi }}</div>
                            </div>

                            <div class="mb-4">
                                <label for="tanggal_masuk" class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                                <input type="date" v-model="form.tanggal_masuk" id="tanggal_masuk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <div v-if="form.errors.tanggal_masuk" class="text-red-600 text-sm mt-1">{{ form.errors.tanggal_masuk }}</div>
                            </div>

                            <div class="mb-4">
                                <label for="gaji" class="block text-sm font-medium text-gray-700">Gaji</label>
                                <input type="number" v-model="form.gaji" id="gaji" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <div v-if="form.errors.gaji" class="text-red-600 text-sm mt-1">{{ form.errors.gaji }}</div>
                            </div>
                            
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" :disabled="form.processing" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>