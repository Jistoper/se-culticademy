<div class="w-full py-10 text-white bg-gray-200" style="background-image: url(dist/img/background.png); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
            <div class="col-span-12 md:col-span-7 flex flex-col gap-4 lg:gap-8">
                <h1
                    class="text-center md:text-start text-2xl font-semibold md:text-6xl text-white flex items-center justify-center md:justify-start">
                    {{-- <img src="dist\img\logo.png" alt="Culticademy Logo" class="icon icon-tabler icon-tabler-brand-tabler"
                        width="40" height="40"> --}}
                    Culticademy
                </h1>
                {{-- <p class="text-sm md:text-lg text-center md:text-start text-white">
                    Selamat Datang di Culticademy
                </p> --}}
                <p class="text-sm md:text-lg text-center md:text-start text-white">
                    Persiapkan dirimu untuk meraih sukses di dunia pertanian dengan belajar dari para ahli dan praktisi di bidangnya. Culticademy hadir untuk membantu kamu meningkatkan skill dan pengetahuan di bidang pertanian melalui kursus online yang mudah diakses dari mana saja. Dapatkan pelajaran mengenai teknik bercocok tanam, manajemen pertanian, dan penggunaan teknologi modern dalam pertanian. Kembangkan potensi pertanian dan perbaiki kualitas hidup petani Indonesia bersama Culticademy. Persiapkan dirimu dari sekarang dan tingkatkan skillmu dalam bidang pertanian sekarang juga!
                </p>
                <div class="flex flex-row gap-4 items-center justify-center md:justify-start">
                    <a href="{{ route('course.index') }}"
                        class="px-4 py-2 rounded-lg bg-white text-white hover:scale-105 hover:duration-200 flex items-center gap-2 text-sm border-2 border-culti-green-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.8" stroke="#054141" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="19" x2="21" y2="19"></line>
                            <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                        </svg>
                        <span class="text-culti-green-3 font-bold">Lihat Course</span>
                    </a>
                    <a href="{{ route('forum.index') }}"
                        class="px-4 py-2 rounded-lg bg-culti-green-3 text-white hover:scale-105 hover:duration-200 flex items-center gap-2 text-sm border border-culti-green-3">
                        <img width="28" height="28" src="https://img.icons8.com/sf-regular/48/FFFFFF/chat.png" alt="chat"/>
                        <span class="font-bold">Lihat Forum</span>
                    </a>
                </div>
            </div>
            {{-- <div class="hidden md:flex md:col-span-5">
                <img src="dist\img\logo.png" class="object-cover">
            </div> --}}
        </div>
    </div>
</div>
