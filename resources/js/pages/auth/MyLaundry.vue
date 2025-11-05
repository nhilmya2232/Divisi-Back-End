<template>
  <UserLayout>
    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-2xl font-bold text-gray-800">My Laundry</h2>
    </div>

    <!-- Orders List -->
    <div class="space-y-6">
      <div
        v-for="order in activeOrders"
        :key="order.id"
        class="bg-white border border-pink-100 rounded-2xl p-6 shadow-md transition duration-200 hover:shadow-lg"
      >
        <!-- Header Card -->
        <div class="flex justify-between items-center">
          <div>
            <div class="flex items-center gap-3">
              <div
                class="bg-pink-400 text-white w-8 h-8 flex items-center justify-center rounded-full font-semibold"
              >
                {{ String(order.id).padStart(2, '0') }}
              </div>
              <h3 class="text-lg font-semibold text-gray-800">
                {{ order.service }}
              </h3>
            </div>
            <div class="text-sm text-gray-500 mt-1 flex items-center gap-1">
              <span class="material-icons text-sm">schedule</span>
              {{ order.date }}
            </div>
          </div>

          <button
            @click="toggleDetail(order.id)"
            class="bg-pink-400 hover:bg-pink-500 text-white px-4 py-1 rounded-lg text-sm shadow transition"
          >
            {{ expandedOrder === order.id ? 'Tutup ▲' : 'Lihat Detail ▼' }}
          </button>
        </div>

        <!-- Detail -->
        <transition name="fade">
          <div
            v-if="expandedOrder === order.id"
            class="mt-5 text-sm text-gray-700 space-y-4"
          >
            <!-- Identitas -->
            <div>
              <p class="font-semibold mb-2">Identitas Pemesan</p>
              <table class="w-full mb-2">
                <tbody>
                  <tr>
                    <td class="py-1">Nama Pemesan</td>
                    <td class="py-1 text-right text-gray-600">
                      {{ order.customer }}
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">Alamat</td>
                    <td class="py-1 text-right text-gray-600">
                      {{ order.address }}
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">Jadwal Pengambilan</td>
                    <td class="py-1 text-right text-gray-600">
                      {{ order.pickupDate }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Detail Order -->
            <div>
              <p class="font-semibold mb-2">Detail Order</p>
              <table class="w-full mb-4">
                <tbody>
                  <tr>
                    <td class="py-1">Jenis Layanan</td>
                    <td class="py-1 text-right">{{ order.service }}</td>
                  </tr>
                  <tr>
                    <td class="py-1">Harga per Kg</td>
                    <td class="py-1 text-right">
                      Rp {{ order.pricePerKg.toLocaleString() }}
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">Status</td>
                    <td
                      class="py-1 text-right font-semibold"
                      :class="{
                        'text-yellow-500': order.status === 'Proses',
                        'text-green-500': order.status === 'Selesai'
                      }"
                    >
                      {{ order.status }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Tombol Hapus -->
            <div class="flex justify-end mt-4">
              <button
                class="text-red-500 hover:underline"
                @click="deleteOrder(order.id)"
              >
                Hapus
              </button>
            </div>
          </div>
        </transition>
      </div>

      <!-- Kalau kosong -->
      <p v-if="activeOrders.length === 0" class="text-gray-500 text-center mt-10">
        Tidak ada pesanan aktif saat ini 😌
      </p>
    </div>
  </UserLayout>
</template>

<script setup>
import UserLayout from '@/layouts/UserLayout.vue'
import { ref, computed } from 'vue'

const expandedOrder = ref(null)
const orders = ref([
  {
    id: 1,
    customer: 'Siti Aisyah',
    service: 'Cuci Kiloan Reguler',
    address: 'Jl. Merpati No. 21, Bandung',
    pickupDate: 'Selasa, 23 Desember 2025',
    pricePerKg: 7000,
    status: 'Proses',
    date: '19 Desember 2025 | 11:00 WIB'
  },
  {
    id: 2,
    customer: 'Rizky Putra',
    service: 'Cuci Express',
    address: 'Jl. Cendrawasih No. 10, Cimahi',
    pickupDate: 'Rabu, 24 Desember 2025',
    pricePerKg: 9000,
    status: 'Selesai',
    date: '20 Desember 2025 | 09:30 WIB'
  }
])

// 🔹 Hanya tampilkan order yang belum selesai
const activeOrders = computed(() =>
  orders.value.filter(o => o.status !== 'Selesai')
)

const toggleDetail = (id) => {
  expandedOrder.value = expandedOrder.value === id ? null : id
}

const deleteOrder = (id) => {
  if (confirm('Yakin ingin menghapus pesanan ini?')) {
    orders.value = orders.value.filter(o => o.id !== id)
  }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

.material-icons {
  font-size: 16px;
  vertical-align: middle;
}

.fade-enter-active,
.fade-leave-active {
  transition: all 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
  transform: translateY(-5px);
}
</style>