<template>
    <Head title="Contacts" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contact List
            </h2>
        </template>

        <div
            v-if="$page.props.flash.message"
            class="alert bg-green-200 mt-4 mx-5 px-4 py-2"
        >
            {{ $page.props.flash.message }}
        </div>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5></h5>
                <Link
                    :href="route('contact.create')"
                    class="bg-blue-500 text-white p-3 rounded mb-4"
                    >Add Contact</Link
                >
            </div>

            <table class="w-full bg-white border border-gray-200 shadow">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-left border">Id</th>
                        <th class="py-2 px-4 text-left border">Name</th>
                        <th class="py-2 px-4 text-left border">Phone</th>
                        <th class="py-2 px-4 text-left border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(contact, index) in contacts" :key="index">
                        <td class="py-2 px-4 border">{{ contact.id }}</td>
                        <td class="py-2 px-4 border">{{ contact.name }}</td>
                        <td class="py-2 px-4 border">
                            {{ contact.phone_number }}
                        </td>
                        <td class="py-2 px-4 border">
                            <Link
                                :href="route('contact.show', contact.id)"
                                class="px-2 oy-1 text-sm bg-blue-300 text-dark me-2 rounded inline-block"
                                >Show</Link
                            >
                            <Link
                                :href="route('contact.edit', contact.id)"
                                class="px-2 oy-1 text-sm bg-green-500 text-white me-2 rounded inline-block"
                                >Edit</Link
                            >
                            <button
                                type="submit"
                                @click="deleteContact(contact.id)"
                                class="px-2 oy-1 text-sm bg-red-600 text-white me-2 rounded inline-block"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link, Head, useForm } from "@inertiajs/vue3";

const form = useForm({});
const deleteContact = (contactId) => {
    if (confirm("Are you sure you want to delete this contact?")) {
        form.delete(route("contact.destroy", contactId));
    }
};
defineProps({
    contacts: Array,
});
</script>
