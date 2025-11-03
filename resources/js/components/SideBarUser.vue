<template>
  <aside
    class="fixed top-0 left-0 w-64 h-full bg-pink-400 text-white flex flex-col justify-between shadow-lg z-50"
  >
    <!-- 🔹 Bagian Atas -->
    <div>
      <div class="p-4 flex items-center space-x-2">
        <img src="/images/logo.png" class="h-10 rounded-lg bg-white p-1" />
        <h1 class="text-lg font-bold">Rona Laundry</h1>
      </div>

      <nav class="mt-6">
        <ul class="space-y-2">
          <li v-for="menu in menus" :key="menu.text" class="px-3">
            <a
              :href="menu.link"
              class="flex items-center gap-2 py-2 px-4 rounded-xl transition-all duration-200 ease-in-out"
              :class="
                isActive(menu.link)
                  ? 'bg-[#3cb4ff] shadow-md'
                  : 'hover:bg-[#5ec7ff]/80 hover:shadow-sm'
              "
            >
              <span class="material-icons text-white">{{ menu.icon }}</span>
              <span>{{ menu.text }}</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- 🔹 Bagian Logout -->
    <div class="border-t border-white/40 mx-3 mb-4 pt-3">
      <a
        href="/login"
        class="flex items-center gap-2 py-2 px-4 rounded-xl transition-all duration-200 ease-in-out hover:bg-[#ff4d4d]/90 hover:shadow-sm"
      >
        <span class="material-icons text-white">logout</span>
        Logout
      </a>
    </div>
  </aside>
</template>

<script setup>
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();

// 🔹 Tambahkan Beranda paling atas
const menus = ref([
  { text: "Beranda", icon: "home", link: "/landing" },
  { text: "My Profile", icon: "person", link: "/user-profile" },
  { text: "My Laundry", icon: "local_laundry_service", link: "/historyp" },
  { text: "Laundry History", icon: "history", link: "/auth-historyp" },
]);

const isActive = (link) => page.url.startsWith(link);
</script>

<style scoped>
.material-icons {
  font-size: 20px;
}
</style>