<template>
    <Head title="Edit Contact" />
    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Edit contact
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
         
            <form @submit.prevent="updateContact">
                <div class="grid grid-cols-3 gap-4">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" v-model="form.name" class="py-1 w-full" ></input>
                        <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                    </div>
                   
                    <div class="mb-3">
                        <label>Phone number</label>
                        <input type="tel" v-model="form.phone_number" class="py-1 w-full"></input>
                        <div v-if="errors.phone_number" class="text-red-500">{{ errors.phone_number }}</div>
                    </div>
                    
                    

                    <button type="submit" :disabled="form.processing" class="bg-blue-500 text-white py-2 px-5 rounded mb-4">
                        <span v-if="form.processing">Updating...</span>
                        <span v-else>Update</span>
                    </button>
                </div>
            </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link, Head, useForm } from "@inertiajs/vue3";

const props = defineProps({
    contact: Object,
    errors: Object    
});

const form = useForm({
    name: props.contact.name,
    email: props.contact.email,
    phone_number: props.contact.phone_number,
});

const updateContact = () => {
    const res = form.put(route('contact.update', props.contact.id));
    if(res){
        form.reset()
    }
}
</script>
