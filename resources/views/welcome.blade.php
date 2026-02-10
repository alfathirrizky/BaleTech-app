<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icons/logo.jpeg') }}" type="image/jpeg">
    @vite('resources/css/app.css')
    <title>Bale Tech Solutions</title>
</head>
<body class="antialiased">
    <x-navbar brand="Bale Tech Solutions"></x-navbar>
    <section id="hero" class="flex h-screen max-w-full justify-center items-center bg-[url(/img/bg.jpg)] bg-cover bg-center" style="background-image: url('{{ asset('img/bg.jpg') }}')">
        <div class="flex flex-col md:flex-row gap-10 items-center">
            <img src="{{ asset('img/hero.png') }}" alt="Hero Image" class="h-96 max-w-lg mx-auto mt-8 rounded-2xl p-2 bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold text-center text-blue-700">Welcome to Bale Tech Solutions</h1>
                <p class="text-gray-200 font-semibold">Innovative tech solutions for modern businesses.</p>
                <p class="text-gray-200 text-sm">Build Websites • Mobile Apps • Software Solutions.</p>
                <button class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-2 px-4 rounded-2xl text-xs mt-4 cursor-pointer">Get Started</button>
            </div>
        </div>
    </section>
    <section id="services" class="flex items-center justify-center p-30 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 flex flex-col w-full gap-10">
            <div>
                <h2 class="text-4xl font-bold text-center">Our Services</h2>
                <p class="text-center text-gray-600">We offer a wide range of services to help your business thrive in the digital world.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-bold mb-2">Web Development</h3>
                    <p class="text-slate-800">Custom web applications tailored to your business needs.</p>
                    <ul class="text-slate-600 text-sm">
                        <li class="mt-2">• Responsive Design</li>
                        <li class="mt-2">• E-commerce Solutions</li>
                        <li class="mt-2">• CMS Integration</li>
                        <li class="mt-2">• Responsive Design</li>
                        <li class="mt-2">• E-commerce Solutions</li>
                        <li class="mt-2">• CMS Integration</li>
                        <li class="mt-2">• Responsive Design</li>
                        <li class="mt-2">• E-commerce Solutions</li>
                        <li class="mt-2">• CMS Integration</li>
                    </ul>
                    <h2 class="text-lg font-bold mt-4">Start from Rp 300.000</h2>
                    <button class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-2 px-4 rounded-2xl text-xs mt-1 cursor-pointer">Learn More</button>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-bold mb-2">Mobile Apps</h3>
                    <p class="text-slate-800">Native and cross-platform mobile applications for iOS and Android.</p>
                    <ul class="text-slate-600 text-sm">
                        <li class="mt-2">• User-friendly Interfaces</li>
                        <li class="mt-2">• Performance Optimization</li>
                        <li class="mt-2">• Regular Updates</li>
                        <li class="mt-2">• User-friendly Interfaces</li>
                        <li class="mt-2">• Performance Optimization</li>
                        <li class="mt-2">• Regular Updates</li>
                        <li class="mt-2">• User-friendly Interfaces</li>
                        <li class="mt-2">• Performance Optimization</li>
                        <li class="mt-2">• Regular Updates</li>
                    </ul>
                    <h2 class="text-lg font-bold mt-4">Start from Rp 200.000</h2>
                    <button class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-2 px-4 rounded-2xl text-xs mt-1 cursor-pointer">Learn More</button>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-bold mb-2">UI/UX Design</h3>
                    <p class="text-slate-800">User-centered design that enhances user experience and engagement.</p>
                    <ul class="text-slate-600 text-sm">
                        <li class="mt-2">• Wireframing & Prototyping</li>
                        <li class="mt-2">• Visual Design</li>
                        <li class="mt-2">• Usability Testing</li>
                        <li class="mt-2">• Wireframing & Prototyping</li>
                        <li class="mt-2">• Visual Design</li>
                        <li class="mt-2">• Usability Testing</li>
                        <li class="mt-2">• Wireframing & Prototyping</li>
                        <li class="mt-2">• Visual Design</li>
                        <li class="mt-2">• Usability Testing</li>
                    </ul>
                    <h2 class="text-lg font-bold mt-4">Start from Rp 100.000</h2>
                    <button class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-2 px-4 rounded-2xl text-xs mt-1 cursor-pointer">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center items-center p-10" id="contact">
        <div class="flex flex-col w-5xl h-96 justify-center items-center bg-[url(/img/bg.jpg)] bg-center bg-cover m-10 rounded-2xl shadow-md" style="background-image: url('{{ asset('img/bg.jpg') }}')">
            <h1 class="text-white text-3xl font-bold">contact us</h1>
            <p class="text-white text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, dolor.</p>
            <div class="flex items-center justify-center gap-2 border border-white/20 rounded-4xl bg-white/30 backdrop-blur-md p-3 shadow-lg mt-4">
                <input 
                type="email" 
                placeholder="Your Email....." 
                class="px-4 py-2 rounded-2xl w-80 text-sm text-white focus:outline-none"
                >
                <button 
                class="bg-blue-600 hover:bg-blue-300 transition duration-300 text-white font-semibold py-2 px-4 rounded-2xl text-sm cursor-pointer"
                >
                Subscribe
                </button>
            </div>
        </div>
    </section>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>