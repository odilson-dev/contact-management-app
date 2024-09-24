<template>
    <Head title="Create Contact" />
    <FrontendLayout>
        <div v-if="$page.props.flash.message" class="alert">
        {{ $page.props.flash.message }}
      </div>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Create Contact</h5>
                <Link
                    :href="route('contact.index')"
                    class="bg-red-600 text-white rounded mb-4 inline-block py-2 px-5"
                    >Back</Link
                >
            </div>
            <form @submit.prevent="saveContact">
                <div class="grid grid-cols-2 gap-4">
                <div class="col-span-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" v-model="form.name" class="py-1 w-full"></input>
                        <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" v-model="form.email" class="py-1 w-full"></input>
                        <div v-if="errors.email" class="text-red-500">{{ errors.email }}</div>
                    </div>
                    <div class="mb-3">
                        <label>Phone number</label>
                        <input type="tel" v-model="form.phone_number" class="py-1 w-full"></input>
                        <div v-if="errors.phone_number" class="text-red-500">{{ errors.phone_number }}</div>
                    </div>
                    
                    

                    <button type="submit" class="bg-blue-500 text-white py-2 px-5 rounded mb-4">Save</button>
                </div>
            </div>
            </form>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Link, Head, useForm } from "@inertiajs/vue3";

defineProps({
    errors: Object
})

const form = useForm({
    name: "",
    email: "",
    phone_number: "",
});

const saveContact = () => {
    const res = form.post(route('contact.store'));
    if(res){
        form.reset()
    }
}
</script>
