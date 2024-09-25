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
            <div>
                <h1>ID:{{ contact.id }}</h1>
                <h1>Name: {{ contact.name }}</h1>
                <h1>Email: {{ contact.email }}</h1>
                <h1>Phone number: {{ contact.phone_number }}</h1>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3";

defineProps({
    contact: Object,
});
</script>
