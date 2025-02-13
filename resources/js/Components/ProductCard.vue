<script setup>
defineProps({
  product: {
    type: Object,
    required: true
  }
});
</script>

<!-- js/components/ProductCard.vue -->
<template>
  <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
    <img :src="product.image" :alt="product.name" class="w-full h-64 object-cover rounded-md">
    <h3 class="text-xl font-semibold text-gray-800 mt-4">{{ product.name }}</h3>
    <p class="mt-2 text-gray-600">{{ product.description }}</p>
    <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">View Details</button>
  </div>
</template>

<style scoped>
/* You can add custom styles for each product card here */
</style>
