<template>
  <nav class="fixed top-0 left-0 w-full bg-pink-400 text-white shadow-md z-50">
    <div class="w-full flex justify-between items-center px-2 py-3">
      <!-- 🔹 Logo -->
      <div class="bg-white p-2 rounded-xl shadow-md flex items-center ml-2">
        <img src="/images/logo.png" alt="Logo" class="h-10 w-auto" />
      </div>

      <!-- 🔹 Menu Navigasi -->
      <ul class="flex space-x-4">
        <li>
          <Link
            href="/"
            class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md transition"
          >
            Beranda
          </Link>
        </li>
        <li>
          <Link
            href="/cek-status"
            class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md transition"
          >
            Cek Status
          </Link>
        </li>
        <li>
          <Link
            href="/reservasi"
            class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md transition"
          >
            Reservasi
          </Link>
        </li>
      </ul>

      <!-- 🔹 Bagian kanan -->
      <div class="flex items-center gap-3 mr-2 relative">
        <!-- Kalau belum login -->
        <template v-if="!user">
          <Link
            href="/login"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-1.5 rounded-md transition"
          >
            Login
          </Link>
          <Link
            href="/register"
            class="bg-green-500 hover:bg-green-600 text-white px-4 py-1.5 rounded-md transition"
          >
            Sign Up
          </Link>
        </template>

        <!-- Kalau sudah login -->
        <template v-else>
          <div
            class="flex items-center justify-center bg-white rounded-full border-[3px] border-pink-400 p-1.5 shadow-md hover:scale-105 hover:shadow-lg transition cursor-pointer"
            @click.stop="toggleDropdown"
          >
            <span class="material-icons text-black text-3xl">person</span>
          </div>

          <!-- 🔹 Dropdown menu -->
          <div
            v-if="showDropdown"
            class="absolute top-14 right-0 bg-white text-gray-800 rounded-lg shadow-lg w-40 py-2 border border-gray-200 z-50"
          >
            <Link
              href="/user-profile"
              class="block px-4 py-2 hover:bg-pink-100 transition"
            >
              Profile
            </Link>
            <button
              @click="logout"
              class="block w-full text-left px-4 py-2 hover:bg-pink-100 transition"
            >
              Logout
            </button>
          </div>
        </template>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { Link, usePage, router } from '@inertiajs/vue3'

const page = usePage()
const user = page.props.auth?.user // ✅ pakai optional chaining biar aman
const showDropdown = ref(false)

function toggleDropdown() {
  showDropdown.value = !showDropdown.value
}

function handleClickOutside(e) {
  const dropdown = document.querySelector('.relative')
  if (dropdown && !dropdown.contains(e.target)) {
    showDropdown.value = false
  }
}

function logout() {
  router.post('/logout', {}, {
    onFinish: () => {
      showDropdown.value = false
      router.visit('/landing')
    }
  })
}

onMounted(() => {
  window.addEventListener('click', handleClickOutside)
})

onBeforeUnmount(() => {
  window.removeEventListener('click', handleClickOutside)
})
</script>

<style scoped>
nav {
  font-family: "Poppins", sans-serif;
}
</style>
