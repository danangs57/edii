<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <!-- component -->
    <div class="relative min-h-screen flex items-center justify-center bg-center bg-white-500 py-12 px-4 sm:px-6 lg:px-8 bg-white-500 bg-no-repeat bg-cover relative items-center"
      >
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-lg mr-auto">Form Pelamar</h2>
                        <div class="w-12 h-12 mr-4 flex-none ">
                            <img class="w-12 h-12 mr-4"
                            src="{{asset('storage/edii-logo.PNG')}}"
                            alt="Avatar Upload">
                        </div>
                    </div>
                    <div class="mt-5">
                        <form class="form" action="{{route('pelamar.store')}}" method="post">
                            @csrf 
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Posisi Yang Dilamar<abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="Posisi"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="posisi"
                                        >
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Nama <abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="Nama Lengkap"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="nama"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">No. KTP<abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="No.KTP"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="no_ktp"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Tempat,Tanggal Lahir <abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="TTL"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="ttl"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Jenis Kelamin <abbr
                                            title="required">*</abbr></label>
                                    <select placeholder="Kelamin"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="kelamin"
                                        id="integration_shop_name">
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Agama <abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="Agama"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="agama"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Golongan Darah <abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="Golongan Darah"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="darah"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Status <abbr
                                            title="required">*</abbr></label>
                                    <select placeholder="Agama"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="status"
                                        id="integration_shop_name">
                                            <option value="lajang">Lajang</option>
                                            <option value="menikah">Menikah</option>
                                    </select>
                          
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                            </div>
                          
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Alamat<abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="Alamat"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="alamat"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Email <abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="Email"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="email"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Orang Terdekat Yang Dapat Dihubungi<abbr
                                            title="required">*</abbr></label>
                                    <input placeholder="No.Tlp & Hubungan"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="alamat"
                                        id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                              
                            </div>
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class=" font-semibold text-gray-600 py-2">Github</label>
                                <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                    <div class="flex">
                                        <span
                                            class="flex items-center leading-normal bg-grey-lighter border-1 rounded-r-none border border-r-0 border-blue-300 px-3 whitespace-no-wrap text-grey-dark text-sm w-12 h-10 bg-blue-300 justify-center items-center  text-xl rounded-lg text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                        </span>
                                    </div>
                                    <input name="link" type="text"
                                        class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow"
                                        placeholder="https://">
                                </div>
                            </div>
                            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Pendidikan Terakhir</label>
                                    <input placeholder="Pendidikan"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="pendidikan_terakhir" id="integration_street_address">
                                </div>
                                
                            </div>
                            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Riwayat Pelatihan</label>
                                    <textarea required="" name="riwayat_pelatihan" id=""
                                    class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                    placeholder="Enter your comapny info" spellcheck="false"></textarea>
                                </div>
                                
                            </div>
                            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Riwayat Pekerjaan</label>
                          
                                    <div class="grid gap-4 grid-cols-5 grid-rows-2">
                                        <input placeholder="Pekerjaan"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[0][nama]" id="integration_street_address">
                                        <input placeholder="Sertifikasi"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[0][sertifikasi]" id="integration_street_address"> 
                                        <input placeholder="Tahun"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[0][tahun]" id="integration_street_address">
                                        <input placeholder="Gaji Terakhir"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[0][gaji]" id="integration_street_address"> 
                                        <input placeholder="Posisi Terakhir"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[0][posisi]" id="integration_street_address"> 
                          
                          
                                        <input placeholder="Pekerjaan"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[1][nama]" id="integration_street_address">
                                        <input placeholder="Sertifikasi"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[1][sertifikasi]" id="integration_street_address"> 
                                        <input placeholder="Tahun"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[1][tahun]" id="integration_street_address">
                                        <input placeholder="Gaji Terakhir"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[1][gaji]" id="integration_street_address"> 
                                        <input placeholder="Posisi Terakhir"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="riwayat_pekerjaan[1][posisi]" id="integration_street_address"> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                <label class="font-semibold text-gray-600 py-2">Kemampuan</label>
                                <textarea required="" name="kemampuan" id=""
                                    class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                    placeholder="Tuliskan Keahlian dan Kemampuan mu saat ini" spellcheck="false"></textarea>
                            </div>
                          
                            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Bersedia Ditempatkan Dimana Saja</label>
                                    <select placeholder="Agama"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                    required="required" type="text" name="penempatan"
                                    id="integration_shop_name">
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                </select>
                                </div>
                                
                            </div>
                          
                            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Upah Yang Diharapkan / Bulan</label>
                                    <input placeholder="Upah/Bulan"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        type="text" name="upah" id="integration_street_address">
                                </div>
                                
                            </div>
                          
                            <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                <button
                                    class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                    Cancel </button>
                                <button
                                    class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
