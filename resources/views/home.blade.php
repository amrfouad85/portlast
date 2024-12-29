<!-- resources/views/welcome.blade.php -->
 
@extends('layouts.app')

@section('content')
<div>
    <header class="w-dvw absolute top-0 left-1/2 -translate-x-1/2 z-[1000] py-4">
        <div class="max-w-[120rem] text-gray-50 px-6 md:px-8 lg:px-10">
            <nav class="w-full flex flex-row items-center font-sans">
                <a class="text-gray-50" href="/">
                    <svg class="h-8 w-8" viewBox="0 0 512 512" fill="none" xmlns="http://google.com">
                        <rect x="94" y="81" width="40" height="350" fill="currentColor"></rect>
                        <rect x="264" y="81" width="40" height="350" fill="currentColor"></rect>
                        <circle cx="199" cy="131" r="50" fill="currentColor"></circle>
                        <circle cx="199" cy="246" r="50" fill="currentColor"></circle>
                        <circle cx="369" cy="131" r="50" fill="currentColor"></circle>
                        <circle cx="369" cy="246" r="50" fill="currentColor"></circle>
                    </svg>
                </a>
                <div class="flex-1 relative hidden md:flex items-center justify-center">
                    <ul class="mx-auto inline-flex gap-6 text-xl font-light">
                        <li><a class="font-bold relative after:h-px after:content-[''] after:w-full after:absolute after:top-full after:bg-accent-500 after:left-0 after:translate-y-1" href="">Home</a></li>
                        <li><a href="">About me </a></li>
                        <li><a href="">Projects </a></li>
                        
                    </ul>
                    <ul class="absolute right-0">
                        <li class="relative">
                            <a class=" h-10 rounded-lg flex items-center justify-center text-base bg-accent-500 leading-none px-12 uppercase" href="">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="h-dvh w-dvw max-h-[80rem] relative">
        <div class="absolute inset-0 z-[1]">
            <img class="h-full w-full object-cover object-center" src="{{ asset('pic/cute-cat-with-computer.jpg') }}" alt="Cute cat with computer">
        </div>
        <div class="max-w-[120rem] mx-auto h-full relative z-[2] px-6 md:px-8 lg:px-10">
            <div class="h-full w-full  flex flex-col relative space-y-6">
                <div class="mt-auto mb-0 text-gray-50 md:pb-36 space-y-6">
                    <span class="font-bold text-5xl text-accent-500 ">Amr Abdelrazik</span>
                    <h1 class="text-3xl md:text-5xl max-w-[30rem] font-medium">FULL STACK SOFTWARE DEVELOPER </h1>
                    <p class="max-w-[30rem] font-bold ml-4 before:content-[''] relative before:absolute before:w-px before:h-full before:left-0 before:top-0 before:-translate-x-4 before:bg-accent-500 md:text-base text-sm">HERE WHAT I CAN USE FOR WORK </p>
                    <div class=" flex gap-4">
                        <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">HTML</button>
                        <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">CSS</button>
                        <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">BOOTSTRAP</button>
                        <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">Tailwind</button>
                        <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">PHP</button>
                        <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">LARAVEL</button>
                       
                    </div>
                    <div class=" flex gap-4">
                      <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">JAVA SCRIPT </button>
                      <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">REACT</button>
                      <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">EXPRESS</button>
                      <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">MONGO DB </button>
                      <button class="inline-block text-base font-medium px-12 py-2 bg-accent-400 rounded-lg cursor-pointer">NODE JS</button>

                    </div>
                </div>
                <div class="md:absolute md:right-0 md:bottom-32 text-gray-50 my-16">
                    <ul class="flex md:flex-col items-center justify-center gap-2">
                        <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                            <a href="" class="block h-full w-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-current " viewBox="0 0 24 24">
                                    <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M18 2a1 1 0 0 1 .993.883L19 3v4a1 1 0 0 1-.883.993L18 8h-3v1h3a1 1 0 0 1 .991 1.131l-.02.112l-1 4a1 1 0 0 1-.858.75L17 15h-2v6a1 1 0 0 1-.883.993L14 22h-4a1 1 0 0 1-.993-.883L9 21v-6H7a1 1 0 0 1-.993-.883L6 14v-4a1 1 0 0 1 .883-.993L7 9h2V8a6 6 0 0 1 5.775-5.996L15 2z"></path>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                            <a href="" class="h-full w-full block p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full fill-current ">
                                    <path d="M256.283 47.553c70.693 0 128 54.682 118 128.931-2.072 15.388-3.422 31.483-4.26 44.759 0 0 2.402 4.253 12.664 4.253 6.071 0 14.895-1.543 27.596-6.354 2.236-.847 4.377-1.241 6.377-1.241 7.918 0 13.615 5.931 14.123 12.271.426 5.31-4.564 11.199-8.371 13.009-13.766 6.542-46.991 10.063-46.991 32.638 0 22.576 22.362 46.656 40.862 63.713S480 360.602 480 360.602s.283 21.57-31.717 29.097c-32 7.524-32.1 5.712-33.25 13.796-2.133 14.979-1.535 21.378-11.248 21.378-1.672 0-3.651-.19-6.002-.558-8.23-1.291-19.239-3.644-31.121-3.644-11.216 0-23.21 2.353-31.584 3.644-2.35.369-4.33.558-6.002.558-9.713 0-9.115-6.399-11.248-21.378-1.149-8.084-1.25-6.272-33.25-13.796C263.07 382.172 263 360.602 263 360.602s23.05-24.344 41.55-41.401c18.501-17.057 40.862-41.137 40.862-63.713 0-22.576-33.225-26.096-46.991-32.638-3.807-1.81-8.797-7.699-8.371-13.009.508-6.34 6.205-12.271 14.123-12.271 2 0 4.141.394 6.377 1.241 12.701 4.811 21.525 6.354 27.596 6.354 10.261 0 12.664-4.253 12.664-4.253-.837-13.276-2.188-29.371-4.26-44.759-10-74.249 47.307-128.931 118-128.931zm0 16.904c-61.062 0-110.793 46.451-101.633 112.292 2.238 16.622 3.803 33.696 4.868 46.857 3.564 3.183 13.71 3.59 29.136-2.73 2.3-.873 4.513-1.368 6.561-1.368 12.166 0 19.684 8.604 20.364 17.095 1.223 14.748-14.167 26.244-24.82 32.465 7.393 6.831 18.19 18.14 28.752 29.105 18.529 18.339 38.598 38.216 38.598 61.091 0 14.72-8.303 24.7-17.92 29.65 4.153 6.118 12.323 6.194 26.216 2.708 2.848-.66 5.758-.996 8.646-.996 12.159 0 25.127 2.477 34.256 4.174 7.091 1.113 7.207-.143 8.856-12.182 1.28-9.025 1.47-6.917 38.122-15.07 19.923-4.679 21.019-8.293 21.019-12.695-7.159-7.256-29.486-25.489-41.167-37.309-11.68-11.819-45.387-46.025-45.387-81.286 0-35.261 33.707-69.467 45.387-81.286 11.681-11.82 34.008-30.053 41.167-37.309 0-4.402-1.096-8.016-21.019-12.695-36.652-8.153-36.842-6.045-38.122-15.07-1.649-12.039-1.765-13.295-8.856-12.182-9.129 1.697-22.097 4.174-34.256 4.174-2.888 0-5.798-.336-8.646-.996-13.893-3.486-22.063-3.41-26.216 2.708-9.617-4.95-17.92-14.93-17.92-29.65 0-22.875 20.069-42.752 38.598-61.091 10.562-10.965 21.359-22.274 28.752-29.105-10.653-6.221-26.043-17.717-24.82-32.465.68-8.491 8.198-17.095 20.364-17.095 2.048 0 4.261.495 6.561 1.368 15.426 6.32 25.572 5.913 29.136 2.73 1.065-13.161 2.63-30.235 4.868-46.857 9.16-65.841-40.571-112.292-101.633-112.292zm-31.51 136.468c1.306 0 2.366.896 2.366 2v4c0 1.104-1.06 2-2.366 2h-8.268c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h8.268zm62.951-16c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-37.122c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h37.122zm-92.707 48c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-24.268c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h24.268zm68.78-16c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-75.756c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h75.756zm-116.463 32c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-16.268c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h16.268zm92.707-16c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-100.975c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h100.975zm-18.829-16c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-83.122c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h83.122zm-45.951 32c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-37.268c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h37.268zm38.73 16c1.305 0 2.365.896 2.365 2v4c0 1.104-1.06 2-2.365 2h-75.976c-1.305 0-2.365-.896-2.365-2v-4c0-1.104 1.06-2 2.365-2h75.976z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                            <a href="" class="h-full w-full block p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-current" viewBox="0 0 24 24">
                                    <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M7 4h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-4.764l-3.518 2.514A.6.6 0 0 1 8 22.4V20H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3z"></path>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                            <a href="" class="h-full w-full block p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-full h-full fill-current">
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                    <path fill="currentColor" d="M24 12c2.131 0 2.388.008 3.229.047 3.11.142 4.84 1.626 5.377 1.968a10.196 10.196 0 0 1 2.616 2.686c.21.315.393.596.558.85.32.49.16.877-.146 1.145-.286.252-2.45 1.297-2.914 1.514-.42.198-.707.232-.992-.191a6.31 6.31 0 0 0-.334-.485c-.38-.508-.753-.997-1.418-1.274-.692-.289-1.48-.314-2.009-.319-.67-.006-.871-.01-2.611-.01-1.74 0-1.945.005-2.614.01-.528.005-1.316.03-2.008.319-.665.277-1.038.766-1.419 1.274-.15.201-.28.372-.334.485-.285.423-.571.389-.992.191-.464-.217-2.628-1.262-2.914-1.514-.305-.268-.466-.655-.145-1.145.165-.254.348-.535.558-.85a10.188 10.188 0 0 1 2.616-2.686c.537-.342 2.267-1.826 5.377-1.968.841-.039 1.098-.047 3.229-.047zm-7.201 14.855c2.658 0 4.811 2.145 4.811 4.798S19.457 36.45 16.799 36.45c-2.658 0-4.811-2.145-4.811-4.797 0-2.653 2.153-4.798 4.811-4.798zm16.803.017c2.611 0 4.728 2.106 4.728 4.7s-2.117 4.7-4.728 4.7-4.728-2.106-4.728-4.7 2.117-4.7 4.728-4.7zM24 14.904c-3.353 0-6.074 2.71-6.074 6.052S20.647 27.008 24 27.008s6.074-2.71 6.074-6.052-2.721-6.052-6.074-6.052z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                            <a href="" class="h-full w-full block p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-current" viewBox="0 0 24 24">
                                    <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M6 9h2v10H6V9zm10 0h2v10h-2V9zm-5 0h2v10h-2V9zm1-4c1.654 0 3 1.346 3 3H9c0-1.654 1.346-3 3-3zm0-2a5 5 0 0 0-5 5v10.5a1.5 1.5 0 0 0 1.5 1.5h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5z"></path>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-dvw h-2/5 bg-gradient-to-t from-gray-900/100 via-gray-900/90 to-transparent absolute bottom-0 z-[1]"></div>
    </section>
</div>
@endsection
