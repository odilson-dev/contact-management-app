<template>
    <Head title="Show Contact" />
    <FrontendLayout>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Show Contact</h5>
                <Link
                    :href="route('contact.index')"
                    class="bg-red-600 text-white rounded mb-4 inline-block py-2 px-5"
                    >Back</Link
                >
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label>Name</label>

                        <p>{{ contact.name }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <p>{{ contact.email }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Phone number</label>
                        <p>{{ contact.phone_number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3";

import FrontendLayout from "@/Layouts/FrontendLayout.vue";

defineProps({
    contact: Object,
});
</script>
