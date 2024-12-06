<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pengaturan Users <a href="" class="bg-blue-400 p-2 rounded-md text-white text-sm">+ Tambah User</a>
        </h2>
    </x-slot>
    <x-slot name="headerRight">
        <form action="" method="get">
            <x-text-input id="search" name="search" type="text" class="p-1 m-0 md:w-72 w-80 mt-3 md:mt-0" value=""
                placeholder="masukkan kata kunci..." />
            <x-secondary-button class="p-1" type="submit">cari</x-secondary-button>
        </form>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg overflow-x-auto">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap table-fixed">
                        <thead>
                            <tr class="text-center font-bold">
                                <td class="border px-6 py-4 w-[80px]">No</td>
                                <td class="border px-6 py-4">Nama</td>
                                <td class="border px-6 py-4 lg:w-[250px] hidden lg:table-cell">Waktu Daftar</td>
                                <td class="border px-6 py-4 lg:w-[120px] hidden lg:table-cell">Verifikasi Email</td>
                                <td class="border px-6 py-4 lg:w-[120px] hidden lg:table-cell">Block</td>
                                <td class="border px-6 py-4 lg:w-[200px] w-[100px]">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-6 py-4">1</td>
                                <td class="border px-6 py-4">
                                    <div>17 Agustus 2024</div>
                                    <div class="block lg:hidden text-sm text-gray-500">verifikasi email: sudah</div>
                                    <div class="block lg:hidden text-sm text-gray-500">
                                        Block:
                                        <a href="">
                                            <span class="text-blue-600">tidak</span>
                                        </a>
                                    </div>
                                </td>

                                <td class="border px-6 py-4 text-gray-500 text-sm text-center hidden lg:table-cell">
                                    17 Agustus 2024
                                </td>
                                <td class="border px-6 py-4 text-gray-500 text-sm text-center hidden lg:table-cell">
                                    sudah
                                </td>
                                <td class="border px-6 py-4 text-gray-500 text-sm text-center hidden lg:table-cell">
                                    <a href="">
                                        <span class="text-blue-600">tidak</span>
                                    </a>
                                </td>
                                <td class="border px-6 py-4 text-center">
                                    <a href="" class="text-blue-600 hover:text-blue-400 px-2">edit</a>
                                    <form class="inline" onsubmit="return confirm('Yakin mau hapus data ini?')"
                                        action="" method="post">
                                        <button type='submit' class='text-red-600 hover:text-red-400 px-2'>
                                            hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-5">
                    <!-- pager -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>