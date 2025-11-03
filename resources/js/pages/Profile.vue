<template>
  <UserLayout>
    <div class="flex">
      <!-- 🔹 Konten Profil (kanan sidebar) -->
      <div class="flex-1 bg-pink-50 min-h-screen font-poppins">
        <div
          class="w-full bg-white shadow-xl rounded-3xl overflow-hidden border border-pink-200 mx-auto"
        >
          <!-- 🔹 Header Profil -->
          <div class="text-slate-600 w-full flex items-center p-8 gap-6">
            <div
              class="h-24 w-24 bg-white rounded-full flex items-center justify-center shadow-lg"
            >
              <span class="material-icons text-pink-500 text-7xl">person</span>
            </div>

            <!-- text to the right of the icon -->
            <div class="flex flex-col justify-center text-left">
              <!-- 🔹 Username & Email -->
              <h2 class="mt-0 text-2xl font-bold">{{ user.username }}</h2>
              <p class="text-slate-600/80 text-sm">{{ user.email }}</p>
            </div>
          </div>

          <!-- 🔹 Statistik Laundry -->
          <div
            class="grid grid-cols-3 text-center py-6 bg-pink-100 border-t border-b border-pink-200"
          >
            <div>
              <p class="text-sm text-gray-600">Total Transaksi</p>
              <p class="text-xl font-bold text-pink-600">12x</p>
            </div>
            <div>
              <p class="text-sm text-gray-600">Status</p>
              <p class="text-xl font-bold text-pink-600">Langganan</p>
            </div>
            <div>
              <p class="text-sm text-gray-600">Favorit</p>
              <p class="text-xl font-bold text-pink-600">Express</p>
            </div>
          </div>

          <!-- 🔹 Detail Pengguna -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-8 bg-pink-50/30">
            <div>
              <h3
                class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2"
              >
                Data Diri
              </h3>
              <div class="space-y-3 text-gray-700">
                <div class="bg-white border border-pink-100 rounded-xl p-3">
                  <p class="text-sm text-gray-500">Nama Lengkap</p>
                  <p class="font-semibold text-gray-400 italic">
                    Belum diisi
                  </p>
                </div>
                <div class="bg-white border border-pink-100 rounded-xl p-3">
                  <p class="text-sm text-gray-500">Nomor Telepon</p>
                  <p class="font-semibold text-gray-400 italic">
                    Belum diisi
                  </p>
                </div>
                <div class="bg-white border border-pink-100 rounded-xl p-3">
                  <p class="text-sm text-gray-500">Jenis Kelamin</p>
                  <p class="font-semibold text-gray-400 italic">
                    Belum diisi
                  </p>
                </div>
              </div>
            </div>

            <div>
              <h3
                class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2"
              >
                Alamat
              </h3>
              <div class="space-y-3 text-gray-700">
                <div class="bg-white border border-pink-100 rounded-xl p-3">
                  <p class="text-sm text-gray-500">Alamat Lengkap</p>
                  <p class="font-semibold text-gray-400 italic">
                    Belum diisi
                  </p>
                </div>
                <div class="bg-white border border-pink-100 rounded-xl p-3">
                  <p class="text-sm text-gray-500">Catatan Lokasi</p>
                  <p class="font-semibold text-gray-400 italic">
                    Belum diisi
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- 🔹 Riwayat Terakhir -->
          <div class="p-8 bg-white border-t border-pink-100">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">
              Riwayat Terakhir
            </h3>
            <p class="text-gray-700">
              Laundry 5kg -
              <span class="text-pink-600 font-semibold">Express</span>
              (selesai <b>2 jam yang lalu</b>)
            </p>
          </div>

          <!-- 🔹 Tombol Aksi -->
          <div class="p-6 bg-pink-50 flex justify-center gap-4">
            <button
              class="bg-gradient-to-r from-pink-500 to-pink-600 text-white font-semibold px-6 py-2 rounded-full shadow hover:scale-105 transition duration-300"
            >
              Edit Profil
            </button>

            <button
              class="bg-white border border-pink-400 text-pink-600 font-semibold px-6 py-2 rounded-full shadow hover:scale-105 hover:shadow-lg hover:bg-pink-50 transition duration-300"
            >
              Reservasi Lagi!
            </button>
          </div>
        </div>
      </div>
    </div>
  </UserLayout>
</template>

<script setup>
import UserLayout from "@/layouts/UserLayout.vue";
import { usePage } from "@inertiajs/vue3";

// 🔹 Ambil data user dari Laravel (props Inertia)
const page = usePage();
const user = page.props.user || { username: "Pengguna", email: "email@contoh.com" };
</script>

<style scoped>
.material-icons {
  font-size: 72px;
}
</style>
