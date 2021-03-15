<div class="bg-white">
    <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
        <div class="mt-6">
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 mb-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>
{{--  
background-color: #3bb78f;
background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);  --}}


