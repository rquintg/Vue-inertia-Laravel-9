<template>
    <Head title="Lista de entradas" />
    <AppLayout>
        <Link v-if="permissions.posts_manage" :href="route('posts.create')" class="inline-block px-4 py-3 bg-cyan-700 text-white rounded mb-4"><i class="fa-solid fa-calendar-plus"></i></Link>

        <table class="font-mono w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <thead>
            <tr>
                <th class=" bg-gray-100 text-center">
                    <span class="text-2xl leading-4 font-medium text-red-600 uppercase tracking-wider"><i class="fa-solid fa-language"></i></span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Asignatura</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Creditos</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Profesor</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-none font-medium text-gray-500 uppercase tracking- ">Pre-requisito</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Trabajo Autonomo</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Trabajo Dirigido</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Semestre</span>
                </th>

                <th class="py-3 bg-gray-50 text-center">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Creado</span>
                </th>
                <th class="py-3 bg-gray-50 text-center">
                    <span v-if="permissions.posts_manage" class="rounded-full text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Acciones</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <tr v-for="(post, index) in posts" :key="posts.id">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center bg-gray-100">
                    {{ index + 1 }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.title }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.content }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.prof }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.prereq }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.horasautonomo }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.horasdirigido }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.sem }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    {{ post.created_at }}
                </td>
                <td class="py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                    <Link v-if="permissions.posts_manage" :href="route('posts.edit', post.id)" class="px-2 py-1 bg-cyan-700 text-white rounded font-bold uppercase">Editar</Link>
                    <br>
                    <br>
                    <button v-if="permissions.posts_manage" @click="destroy(post.id)" type="button" class="px-2 py-1 bg-red-700 text-white rounded font-bold uppercase">
                        Borrar
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </AppLayout>
</template>

<script>
import AppLayout from "../../Layouts/App"
import { Head, Link } from "@inertiajs/inertia-vue3"
import {Inertia} from "@inertiajs/inertia";

export default {
    components: {
        AppLayout, Head, Link
    },
    props: {
        posts: Object,
        permissions: Object,
    },
    setup() {
        const destroy = (id) => {
            Swal.fire({
                title: 'Estas Seguro?',
                text: 'No puedes recuperar esta opcion!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, borrar!',
                confirmButtonColor: '#ef4444',
                timer: 10000,
                timerProgressBar: true,
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    Inertia.delete(route('posts.destroy', id))
                    Swal.fire(
                        'Borrado!',
                        'La asignatura fue eliminada.',
                        'success'
                    )
                }
            })


        }

        return { destroy }
    }
}
</script>
