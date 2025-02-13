<script setup>
import MainLayout from '../MainLayout.vue';
</script>

<template>
  <MainLayout>
    <!-- Hero Section for Categories -->
    <section class="bg-blue-600 text-white py-16">
      <div class="container mx-auto text-center">
        <h1 class="text-4xl font-semibold">Categories</h1>
        <p class="mt-4 text-xl">Explore all the categories of products available in our store.</p>
      </div>
    </section>

    <!-- Categories List Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto">
        <div class="text-center">
          <h2 class="text-3xl font-semibold text-gray-800">Browse Our Categories</h2>
          <p class="mt-4 text-lg text-gray-600">Select a category below to explore our products.</p>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-8">
          <!-- Category Card 1 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-semibold text-gray-800">Electronics</h3>
            <p class="mt-2 text-gray-600">Browse the latest gadgets, smartphones, and more.</p>
          </div>

          <!-- Category Card 2 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-semibold text-gray-800">Fashion</h3>
            <p class="mt-2 text-gray-600">Discover the latest trends in fashion and accessories.</p>
          </div>

          <!-- Category Card 3 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-semibold text-gray-800">Home & Garden</h3>
            <p class="mt-2 text-gray-600">Find everything for your home and garden needs.</p>
          </div>

          <!-- Category Card 4 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-semibold text-gray-800">Sports & Outdoors</h3>
            <p class="mt-2 text-gray-600">Explore sporting goods and outdoor equipment.</p>
          </div>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<style scoped>
/* You can add custom styles for the category cards here */
</style>
