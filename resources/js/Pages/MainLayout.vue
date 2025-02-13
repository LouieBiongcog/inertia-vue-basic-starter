<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const isMenuOpen = ref(false);
  const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
  };
</script>

<template>
  <div>
    <!-- Navigation Bar -->
    <nav class="bg-blue-600 p-4">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Logo or Title -->
        <div class="text-white text-2xl font-bold">
          Sample Navigating
        </div>

        <!-- Links -->
        <div class="hidden lg:flex space-x-6">
          <Link href="/" class="text-white hover:text-gray-300 transition duration-200">Home</Link>
          <Link href="/products" class="text-white hover:text-gray-300 transition duration-200">Products</Link>
          <Link href="/categories" class="text-white hover:text-gray-300 transition duration-200">Categories</Link>
          <Link href="/contact" class="text-white hover:text-gray-300 transition duration-200">Contact Us</Link>
        </div>

        <!-- Mobile Menu Icon -->
        <div class="lg:hidden flex items-center">
          <button @click="toggleMenu" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Links (hidden by default on large screens) -->
      <div v-show="isMenuOpen" class="lg:hidden bg-blue-600">
        <div class="flex flex-col space-y-4 py-4">
          <Link href="/" class="text-white hover:text-gray-300 transition duration-200">Home</Link>
          <Link href="/products" class="text-white hover:text-gray-300 transition duration-200">Products</Link>
          <Link href="/categories" class="text-white hover:text-gray-300 transition duration-200">Categories</Link>
          <Link href="/contact" class="text-white hover:text-gray-300 transition duration-200">Contact Us</Link>
        </div>
      </div>
    </nav>

    <!-- Slot for other components -->
    <slot />
  </div>
</template>

<style scoped>
/* You can add custom styles here if needed */
</style>
