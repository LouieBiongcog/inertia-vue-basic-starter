<script setup>
import MainLayout from '../MainLayout.vue';
import ProductCard from '../../Components/ProductCard.vue'

const products = [
  {
    name: 'Burger Overload',
    description: 'An epic tower of flavor, where every layer bursts with juicy patties, melted cheese, crispy bacon, and a medley of toppings—too much of a good thing? Not when its this delicious!',
    image: '/images/burger.jpeg'
  },
  {
    name: 'Pizza',
    description: 'A mouthwatering masterpiece piled high with melted cheese, savory meats, fresh veggies, and all the toppings your heart desires—its pizza like youve never experienced before!',
    image: '/images/pizza.jpg'
  },
  {
    name: 'Roasted Chicken',
    description: 'A delightful Crispilicous Roasted Chicken for family and friends.',
    image: '/images/roastedChicken.jpeg'
  },
  {
    name: 'Fillet Fillet',
    description: 'A golden, crispy fillet piled with layers of tender, flaky fish, perfectly seasoned and served with a generous helping of creamy sauces—this is seafood indulgence at its finest!',
    image: '/images/fishFillet.jpeg'
  },
  {
    name: 'Green Salad',
    description: 'A vibrant bowl of fresh greens, crisp veggies, and a rainbow of colorful toppings, all tossed in a zesty dressing—light, refreshing, and bursting with flavor in every bite!',
    image: '/images/greenSalad.jpeg'
  },
  {
    name: 'Chicken Adobo',
    description: 'A savory symphony of tender chicken simmered in a rich blend of soy sauce, vinegar, garlic, and aromatic spices—Chicken Adobo is a Filipino classic that bursts with bold, mouthwatering flavors in every bite!',
    image: '/images/chickenAdobo.jpeg'
  }
];
</script>

<template>
  <MainLayout>
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16">
      <div class="container mx-auto text-center">
        <h1 class="text-4xl font-semibold">Products</h1>
        <p class="mt-4 text-xl">Browse through our wide selection of amazing products.</p>
      </div>
    </section>

    <!-- Product Listing Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto">
        <div class="text-center">
          <h2 class="text-3xl font-semibold text-gray-800">Our Featured Products</h2>
          <p class="mt-4 text-lg text-gray-600">Find the best products for your needs, from gadgets to home essentials.</p>
        </div>

        <!-- Product Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mt-8">
          <ProductCard v-for="(product, index) in products" :key="index" :product="product" />
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<style scoped>
/* You can add custom styles for the entire page here */
</style>
