<template>
    <Head title="Show Contact" />
    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Show contact
                </h2>
                <Link
                    :href="route('contact.index')"
                    class="bg-red-600 text-white rounded inline-block py-2 px-5"
                    >Back</Link
                >
            </div>
        </template>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <div class="mt-4 mx-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label>Name</label>

                        <p>{{ contact.name }}</p>
                    </div>

                    <div class="mb-3">
                        <label>Phone number</label>
                        <p>{{ contact.phone_number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3";

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    contact: Object,
});
</script>
