<script setup>
import MainLayout from '../MainLayout.vue';
</script>

<template>
  <MainLayout>
    <section id="contact" class="py-16 bg-gray-50">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8">Contact Us</h2>
        <p class="text-gray-600 mb-8">We'd love to hear from you. Please fill out the form below to get in touch with us!</p>

        <!-- Contact Form -->
        <form action="#" method="POST" class="space-y-6">
          <div class="flex flex-col sm:flex-row sm:space-x-4">
            <div class="flex-1">
              <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
              <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex-1">
              <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
              <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
          </div>

          <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
            <textarea id="message" name="message" rows="4" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>

          <div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Send Message</button>
          </div>
        </form>
      </div>
    </section>
  </MainLayout>
</template>

<style scoped>
/* You can add custom styles for the form elements here */
</style>
