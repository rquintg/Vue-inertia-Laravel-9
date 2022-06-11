<template>
    <Head title="Nuevo Registro" />
    <AppLayout>
        <form @submit.prevent="form.post(route('posts.store'))">
            <div class="grid grid-cols-2 gap-4">
                <div class="font-mono">
                    <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">
                        Asignatura
                    </label>
                    <input v-model="form.title" type="text" id="title" class="block mt-1 w-80 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.title" class="text-red-600">
                        {{ errors.title }}
                    </div>
                </div>

                <div>
                    <label for="content" class="block font-medium text-sm text-gray-700">
                        Creditos
                    </label>
                    <input v-model="form.content" type="text" id="content" class="block mt-1 w-80 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.content" class="text-red-600">
                        {{ errors.content }}
                    </div>
                </div>

                <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">
                        Profesor
                    </label>
                    <input v-model="form.prof" type="text" id="prof" class="block mt-1 w-80 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.prof" class="text-red-600">
                        {{ errors.prof }}
                    </div>
                </div>

                <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">
                        Asignatura Pre-requisito
                    </label>
                    <input v-model="form.prereq" type="text" id="prereq" class="block mt-1 w-80 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.prereq" class="text-red-600">
                        {{ errors.prereq }}
                    </div>
                </div>
                </div>

                <div class="font-mono">
                    <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">
                        Horas de trabajo autonomo
                    </label>
                    <input v-model="form.horasautonomo" type="text" id="horasautonomo" class="block mt-1 w-80 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.horasautonomo" class="text-red-600">
                        {{ errors.horasautonomo }}
                    </div>
                </div>

                <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">
                        Horas de trabajo dirigido
                    </label>
                    <input v-model="form.horasdirigido" type="text" id="horasdirigido" class="block mt-1 w-80 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.horasdirigido" class="text-red-600">
                        {{ errors.horasdirigido }}
                    </div>
                </div>


                <div>
                    <!-- <label for="prof" class="block font-medium text-sm text-gray-700">
                        Profesor
                    </label> -->
                    <!-- <input v-model="form.prof" type="text" id="prof" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"> -->
                    <br>
                    <span> Semestre: {{ form.sem }}</span>
                    <br>
                    <select v-model="form.sem" type="text" id="sem" class="block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-32 ">
                        <option disabled value="">Elegir</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                    <div v-if="errors.sem" class="text-red-600">
                        {{ errors.sem }}
                    </div>
                </div>

                <div>
                    <img src="https://instructure-uploads.s3.amazonaws.com/account_129840000000000001/attachments/90704/Logo_IUD.png" alt="Girl in a jacket" width="430" height="130">
                </div>
            </div>

                </div>

            <div class="flex font-mono">
                    <button type="submit" @click="pff" :disabled="form.processing" class="rounded-full inline-block px-4 py-3 bg-cyan-700 text-white rounded-lg">
                        Guardar
                    </button>
                    <Link :href="route('posts.index')" class="rounded-full ml-2 inline-block px-4 py-3 bg-yellow-500 rounded-lg">
                        Cancelar
                    </Link>
            </div>
        </form>
    </AppLayout>
</template>

<script>
import AppLayout from "../../Layouts/App"
import { Head, Link, useForm } from "@inertiajs/inertia-vue3"

export default {
    components: {
        AppLayout, Head, Link
    },
    props: {
        errors: Object
    },
    setup() {
        const form = useForm({
            title: '',
            content: '',
            prof: '',
            prereq: '',
            horasautonomo: '',
            horasdirigido: '',
            sem: ''
        })

        const pff = () => {

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Asignatura registrada',
                showConfirmButton: false,
                timer: 2000
            })

        }

        return { form, pff }
    }
}
</script>
