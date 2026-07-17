<div>
    <div class="relative h-72 bg-black  flex items-center justify-center">
        <img
            src="{{ asset('/images/header.jpg') }}"
            alt="{{ $title }}"
            class="absolute inset-0 w-full h-full object-cover opacity-40 object-center"
        >
        <div class="relative z-10 flex items-center justify-center h-full">
            <h1 data-aos="fade-up" class="text-white text-3xl  md:text-5xl font-bold font-head capitalize ">{{ $title }}</h1>
        </div>
    </div>
</div>
