<div class="min-h-screen w-full">
    <section class="relative overflow-hidden py-20 w-full bg-gradient-to-b from-indigo-600 via-blue-500 to-transparent">
        <div class="w-full px-4 md:px-8">
            <!-- Animated background elements -->
            <div class="absolute inset-0">
                <div
                    class="absolute top-20 left-10 w-72 h-72 bg-cyan-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                <div
                    class="absolute top-40 right-10 w-72 h-72 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                <div
                    class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
                <div
                    class="absolute bottom-40 right-20 w-72 h-72 bg-cyan-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-6000"></div>
            </div>

            <div class="relative z-10 flex flex-col items-center justify-center min-h-[80vh]">
                <!-- Main content -->
                <div class="text-center space-y-8">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
                            Welcome to Our GABSAB Service
                        </span>
                    </h1>

                    <p class="text-xl md:text-2xl lg:text-3xl text-white/90 max-w-3xl mx-auto">
                        Experience high-speed internet like never before
                    </p>

                    <div class="flex flex-wrap justify-center gap-4 mt-8">
                        <a href="register"
                           class="px-8 py-4 text-lg font-semibold rounded-full bg-white text-indigo-600 hover:bg-indigo-50 transform hover:scale-105 transition-all duration-300 shadow-xl">
                            Sign Up Now
                        </a>
                        <a href="login"
                           class="px-8 py-4 text-lg font-semibold rounded-full bg-indigo-600/20 text-white border-2 border-white/30 backdrop-blur-sm hover:bg-indigo-600/30 transform hover:scale-105 transition-all duration-300">
                            Learn More
                        </a>
                    </div>

                    <!-- Features Section -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                        <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300">
                            <svg class="w-12 h-12 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <h3 class="text-xl font-bold text-white mb-2">High-Speed Internet</h3>
                            <p class="text-white/80">Lightning-fast connectivity for all your needs</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300">
                            <svg class="w-12 h-12 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <h3 class="text-xl font-bold text-white mb-2">Secure Connection</h3>
                            <p class="text-white/80">Advanced security protocols to protect your data</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300">
                            <svg class="w-12 h-12 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <h3 class="text-xl font-bold text-white mb-2">24/7 Support</h3>
                            <p class="text-white/80">Round-the-clock customer service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <p class="bg-gradient-to-r from-green-400 to-yellow-500 bg-clip-text text-3xl font-bold tracking-tight
            text-transparent sm:text-5xl lg:text-6xl text-gray-400 mb-10 justify-center ml-10 lg:ml-96 lg:px-52">Our
                Flexible Plans</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                @foreach($datas as $index => $data)
                    <div
                        class="group relative transform transition-all duration-300 hover:-translate-y-4 hover:shadow-2xl">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-{{ ['red', 'yellow', 'blue'][$index % 3] }}-400 to-{{ ['red', 'yellow', 'blue'][$index % 3] }}-600 opacity-50 rounded-3xl blur-lg group-hover:opacity-75 transition duration-300"></div>

                        <div class="relative bg-white p-6 rounded-3xl shadow-lg overflow-hidden">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-{{ ['red', 'yellow', 'blue'][$index % 3] }}-100 -rotate-45 translate-x-1/3 -translate-y-1/3"></div>

                            <div class="relative z-10 text-center">
                                <div class="flex justify-center mb-6">
                                    <div
                                        class="w-24 h-24 rounded-full border-4 border-{{ ['red', 'yellow', 'blue'][$index % 3] }}-300 overflow-hidden shadow-lg">
                                        <img
                                            src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"
                                            alt="{{ $data->name }}"
                                            class="w-full h-full object-cover"
                                        />
                                    </div>
                                </div>

                                <h3 class="text-3xl font-bold text-gray-400 mb-4">{{ $data->name }}</h3>

                                <div class="flex justify-center items-center space-x-2 mb-4">
                                    <span class="text-gray-500 text-xl">GHC</span>
                                    <span
                                        class="text-4xl font-extrabold text-{{ ['red', 'yellow', 'blue'][$index % 3] }}-600">{{ $data->price }}</span>
                                </div>

                                <div class="flex justify-center items-center space-x-2 mb-6">
                                    <span class="text-gray-500 text-lg">Quantity:</span>
                                    <span class="text-2xl font-bold text-gray-400">{{ $data->quantity }}GB</span>
                                </div>

                                <div class="space-y-3 mb-8">
                                    <div class="flex items-center text-gray-600">
                                        <svg class="w-6 h-6 mr-3 text-{{ ['red', 'yellow', 'blue'][$index % 3] }}-500"
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Quantity: <span
                                                class="font-bold text-gray-400">{{$data->quantity}}GB</span></span>
                                    </div>

                                    @for($i = 1; $i <= 15; $i++)
                                        @if($data->{'adv_'.$i})
                                            <div class="flex items-center text-gray-600">
                                                <svg
                                                    class="w-6 h-6 mr-3 text-{{ ['red', 'yellow', 'blue'][$index % 3] }}-500"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span>{{ $data->{'adv_'.$i} }}</span>
                                            </div>
                                        @endif
                                    @endfor
                                </div>


                                @if(\Illuminate\Support\Facades\Auth::user())
                                <a href="{{route('admin.dashboard')}}"
                                   class="group inline-flex items-center justify-center w-full py-4 px-6 bg-gradient-to-r
                                   from-yellow-500
                                     text-white font-bold rounded-xl transition-all duration-300
                                   hover:shadow-xl hover:scale-105">
                                    Choose Plan
                                    <svg
                                        class="ml-3 w-6 h-6 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                                @else
                                    <a href="{{route('login')}}"
                                       class="group inline-flex items-center justify-center w-full py-4 px-6 bg-gradient-to-r
                                   from-blue-500
                                     text-white font-bold rounded-xl transition-all duration-300
                                   hover:shadow-xl hover:scale-105">
                                        Choose Plan
                                        <svg
                                            class="ml-3 w-6 h-6 transform group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

</div>
