<script setup>
import { ref } from 'vue'
import MainLayout from './MainLayout.vue';

const message = ref("This is an Inertia App.")
</script>

<template>
  <MainLayout>
    <!-- Hero Section or Heading -->
    <section class="bg-blue-600 text-white py-16">
      <div class="container mx-auto text-center px-4">
        <h1 class="text-4xl font-semibold sm:text-3xl md:text-4xl">Hello World!</h1>
        <p class="mt-4 text-xl sm:text-lg md:text-xl">{{ message }}</p>
      </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto text-center px-4">
        <h2 class="text-3xl font-semibold text-gray-800 sm:text-2xl md:text-3xl">Welcome to Inertia.js App</h2>
        <p class="mt-4 text-lg text-gray-600 sm:text-base md:text-lg">
          This app uses Inertia.js for smooth client-side navigation with Vue.js.
          Tailwind CSS is used for fast and flexible styling.
        </p>
      </div>
    </section>

    <!-- Another Content Section for Demonstration -->
    <section class="py-16 bg-white">
      <div class="container mx-auto text-center px-4">
        <h3 class="text-2xl font-semibold text-gray-800 sm:text-xl md:text-2xl">Why Inertia.js?</h3>
        <ul class="list-disc mt-4 text-lg text-gray-600 space-y-2 sm:text-base md:text-lg">
          <li>Full Page Reloads are Eliminated</li>
          <li>Easy Server-Side Rendering with Client-Side Navigation</li>
          <li>Seamless Experience Between Server & Client</li>
        </ul>
      </div>
    </section>
  </MainLayout>
</template>

<style scoped>
/* Add any additional styling here */
</style>
