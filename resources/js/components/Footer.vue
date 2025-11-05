<template>
    <footer class="bg-pink-200 py-10 text-gray-900">
        <div
            class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 sm:grid-cols-3"
        >
            <div class="flex items-center space-x-3">
                <div
                    class="flex items-center rounded-xl bg-white p-2 shadow-md"
                >
                    <img
                        src="/images/logo.png"
                        alt="RonaLaundry Logo"
                        class="h-10 w-auto"
                    />
                </div>
            </div>
            <div>
                <h3 class="mb-3 text-lg font-semibold">Menu</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="/landing" class="hover:underline">Beranda</a>
                    </li>
                    <li>
                        <a href="/order" class="hover:underline">Cek Status</a>
                    </li>
                    <li>
                        <a href="/reservasi" class="hover:underline"
                            >Reservasi</a
                        >
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="mb-3 text-lg font-semibold">Kontak</h3>
                <ul class="space-y-2">
                    <li>087844590030</li>
                    <li>rona_laundry</li>
                    <li>
                        Jl. Kapulago Barat II No.3<br />
                        RT.01 RW.10 Pajang, Laweyan,<br />
                        Surakarta
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</template>

<script lang="ts">
export default {
    name: 'Footers',
};
</script>

<style scoped>
footer {
    border-top: 1px solid #e5e7eb;
}
</style>
