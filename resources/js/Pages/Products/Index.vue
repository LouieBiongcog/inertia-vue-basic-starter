<script setup>
import { defineProps, ref } from 'vue';

const props = defineProps({
    products: Array,
    categories: Array
});

const selectedCategory = ref(null);

const filteredProducts = () => {
    if (!selectedCategory.value) return props.products;
    return props.products.filter(p => p.category.id === selectedCategory.value);
};
</script>

<template>
    <div class="flex">

        <div class="w-1/4 bg-gray-100 p-4">
            <h2 class="text-xl font-bold mb-2">Categories</h2>
            <ul>
                <li
                    v-for="category in categories"
                    :key="category.id"
                    class="mb-1 cursor-pointer"
                    :class="{ 'font-bold': selectedCategory === category.id }"
                    @click="selectedCategory = category.id"
                >
                    {{ category.name }}
                </li>
            </ul>
        </div>


        <div class="w-3/4 p-4">
            <h2 class="text-xl font-bold mb-4">Products</h2>
            <table class="table-auto w-full border">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-2">Product Name</th>
                        <th class="px-4 py-2">Product Description</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Wholesale Price</th>
                        <th class="px-4 py-2">Retail Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in filteredProducts()" :key="product.id" class="border">
                        <td class="px-4 py-2">{{ product.name }}</td>
                        <td class="px-4 py-2">{{ product.description }}</td>
                        <td class="px-4 py-2">{{ product.category.name }}</td>
                        <td class="px-4 py-2">{{ product.wholesale_price }}</td>
                        <td class="px-4 py-2">{{ product.retail_price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped>

</style>
