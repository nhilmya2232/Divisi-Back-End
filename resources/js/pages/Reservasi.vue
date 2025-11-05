<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import Hero from '../components/Hero1.vue'
import { ref } from 'vue'

const nama = ref('')
const whatsapp = ref('')
const layanan = ref('')
const barang = ref([])
const alamat = ref('')
const pembayaran = ref('')
const tanggal = ref('')

const barangOptions = ['Selimut', 'Boneka', 'Karpet', 'Sepatu', 'Alat Ibadah', 'Handuk']

const toggleBarang = (item) => {
  if (barang.value.includes(item)) {
    barang.value = barang.value.filter((b) => b !== item)
  } else {
    barang.value.push(item)
  }
}

const submitForm = () => {
  alert('Pesanan berhasil disimpan! 😊')
}
</script>

<template>
<<<<<<< HEAD
  <Head title="Reservasi - RonaLaundry" />
  <div class="flex flex-col min-h-screen bg-pink-100 pt-15">
=======
  <div class="bg-blue-50 min-h-screen flex flex-col pt-15">
>>>>>>> origin/fitur-gusti
    <!-- Navbar -->
    <Navbar />

    <!-- Hero Section -->
    <Hero />

    <!-- Main Content -->
    <main class="flex items-start justify-center flex-grow px-6 py-16">
      <div
<<<<<<< HEAD
        class="w-full max-w-3xl p-10 bg-white border border-pink-200 shadow-lg rounded-2xl"
=======
        class="bg-white shadow-lg rounded-2xl p-10 w-full max-w-3xl border border-blue-200"
>>>>>>> origin/fitur-gusti
      >
        <h2 class="mb-8 text-3xl font-semibold text-center text-gray-800">
          Reservasi Layanan
        </h2>

        <!-- Form -->
        <form
          @submit.prevent="submitForm"
          class="grid grid-cols-1 text-gray-700 gap-y-5"
        >
          <!-- Nama -->
          <div>
            <label class="block mb-1 font-medium">Nama Lengkap</label>
            <input
              v-model="nama"
              type="text"
              placeholder="Masukkan nama Anda"
<<<<<<< HEAD
              class="w-full p-3 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-2 focus:ring-pink-400"
=======
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 outline-none"
>>>>>>> origin/fitur-gusti
              required
            />
          </div>

          <!-- WhatsApp -->
          <div>
            <label class="block mb-1 font-medium">Nomor WhatsApp</label>
            <input
              v-model="whatsapp"
              type="tel"
              placeholder="08123456789"
              inputmode="numeric"
              pattern="[0-9]*"
              maxlength="15"
<<<<<<< HEAD
              class="w-full p-3 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-2 focus:ring-pink-400"
=======
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 outline-none"
>>>>>>> origin/fitur-gusti
              @input="whatsapp = whatsapp.replace(/[^0-9]/g, '')"
              required
            />
          </div>

          <!-- Jenis Layanan -->
          <div>
            <label class="block mb-2 font-medium">Pilih Jenis Layanan</label>
            <div class="grid grid-cols-3 gap-3">
              <button
                v-for="option in ['Biasa', 'Kilat']"
                :key="option"
                type="button"
                @click="layanan = option"
                :class="[
                  'p-3 rounded-lg font-medium shadow-sm transition-all border',
                  layanan === option
                    ? 'bg-blue-500 text-white border-blue-500 shadow-md'
                    : 'bg-gray-100 text-gray-700 border-gray-200 hover:bg-blue-100 hover:border-blue-300'
                ]"
              >
                {{ option }}
              </button>
            </div>
          </div>

          <!-- Jenis Barang -->
          <div>
<<<<<<< HEAD
            <label class="block mb-1 font-medium">Jenis Barang</label>
            <input
              v-model="barang"
              type="text"
              placeholder="Contoh: Sprei, Jaket, Bantal"
              class="w-full p-3 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-2 focus:ring-pink-400"
              required
            />
=======
            <label class="block font-medium mb-1">Jenis Barang</label>
            <div class="grid grid-cols-3 gap-3">
              <button
                v-for="item in barangOptions"
                :key="item"
                type="button"
                @click="toggleBarang(item)"
                :class="[
                  'p-3 rounded-lg font-medium shadow-sm transition-all border',
                  barang.includes(item)
                    ? 'bg-blue-500 text-white border-blue-500 shadow-md'
                    : 'bg-gray-100 text-gray-700 border-gray-200 hover:bg-blue-100 hover:border-blue-300'
                ]"
              >
                {{ item }}
              </button>
            </div>
>>>>>>> origin/fitur-gusti
          </div>

          <!-- Alamat -->
          <div>
            <label class="block mb-1 font-medium">Alamat</label>
            <textarea
              v-model="alamat"
              rows="2"
              placeholder="Masukkan alamat lengkap Anda"
<<<<<<< HEAD
              class="w-full p-3 border border-gray-300 rounded-md shadow-sm outline-none resize-none focus:ring-2 focus:ring-pink-400"
=======
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 outline-none resize-none"
>>>>>>> origin/fitur-gusti
              required
            ></textarea>
          </div>

          <!-- Pembayaran -->
          <div>
            <label class="block mb-2 font-medium">Metode Pembayaran</label>
            <div class="grid grid-cols-3 gap-3">
              <button
                v-for="option in ['QRIS', 'Transfer', 'Cash']"
                :key="option"
                type="button"
                @click="pembayaran = option"
                :class="[
                  'p-3 rounded-lg font-medium shadow-sm transition-all border',
                  pembayaran === option
                    ? 'bg-blue-500 text-white border-blue-500 shadow-md'
                    : 'bg-gray-100 text-gray-700 border-gray-200 hover:bg-blue-100 hover:border-blue-300'
                ]"
              >
                {{ option }}
              </button>
            </div>
          </div>

          <!-- Tanggal -->
          <div>
            <label class="block mb-1 font-medium">Tanggal Pengambilan</label>
            <input
              v-model="tanggal"
              type="date"
<<<<<<< HEAD
              class="w-full p-3 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-2 focus:ring-pink-400"
=======
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 outline-none"
>>>>>>> origin/fitur-gusti
              required
            />
          </div>

          <!-- Tombol Submit -->
          <div class="flex justify-center mt-8">
            <button
              type="submit"
              class="bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold px-10 py-3 rounded-full shadow-md hover:scale-105 transition-all transform"
            >
              Selesai Pesanan
            </button>
          </div>
        </form>

        <!-- Ringkasan Pesanan -->
        <div
          v-if="nama || layanan"
<<<<<<< HEAD
          class="p-5 mt-10 border border-gray-200 rounded-lg shadow-inner bg-gray-50"
=======
          class="bg-blue-50 p-5 rounded-lg mt-10 shadow-inner border border-blue-200"
>>>>>>> origin/fitur-gusti
        >
          <h3 class="mb-2 font-semibold text-gray-800">Ringkasan Pesanan:</h3>
          <ul class="space-y-1 text-sm text-gray-700">
            <li><strong>Nama:</strong> {{ nama }}</li>
            <li><strong>WhatsApp:</strong> {{ whatsapp }}</li>
            <li><strong>Layanan:</strong> {{ layanan }}</li>
            <li><strong>Barang:</strong> {{ barang.join(', ') }}</li>
            <li><strong>Alamat:</strong> {{ alamat }}</li>
            <li><strong>Pembayaran:</strong> {{ pembayaran }}</li>
            <li><strong>Tanggal:</strong> {{ tanggal }}</li>
          </ul>
        </div>
      </div>
    </main>

    <Footer />
  </div>
</template>

<style scoped>
main {
  font-family: "Poppins", sans-serif;
}
</style>