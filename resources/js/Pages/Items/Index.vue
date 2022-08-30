<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import FlashMessage from '@/Components/FlashMessage.vue';

defineProps({
  items: Array,
})

</script>

<template>

  <Head title="Dashboard" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <section class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto">
              <FlashMessage />
              <div class="flex flex-col text-center w-full mb-10">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">商品一覧</h1>
              </div>
              <div class="flex pl-4  mt-4 lg:w-2/3 mb-10 w-full mx-auto">
                <Link as="button" :href="route('items.create')"
                  class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                商品登録</Link>
              </div>
              <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                  <thead>
                    <tr>
                      <th
                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                        ID</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                        商品名</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                        価格</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                        状態</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in items" :key="item.id">
                      <td class="px-4 py-3">
                        <Link class="text-blue-400" :href="route('items.show', { item: item.id })">
                        {{  item.id  }}
                        </Link>
                      </td>
                      <td class="px-4 py-3">{{  item.name  }}</td>
                      <td class="px-4 py-3">{{  item.price  }}</td>
                      <td class="px-4 py-3">
                        <span v-if="item.is_selling === 1">販売中</span>
                        <span v-if="item.is_selling === 0">停止中</span>
                        <span></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </section>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
