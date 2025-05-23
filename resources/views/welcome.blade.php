@extends('layouts.app')

@section('title', 'Welcome Page')

@section('meta')
    <meta name="description" content="We are passionate about connecting high-quality food and beverage products with businesses that share our commitment to excellence.">
    <meta name="keywords" content="Lim Siang Huat, F&B Distributor, Indonesia, Food and Beverage">
    <meta name="author" content="Lim Siang Huat">
@endsection

@push('plugins-scripts')
    @vite(['resources/js/swiper-plugins.js', 'resources/js/motion-plugin.js'])
@endpush

@section('content')

    <section>
        <!-- Swiper Carousel -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                @if ($banners)

                    @foreach ($banners as $banner)
                        <div class="swiper-slide relative">
                            <img src="{{ asset($banner->image_url) }}" alt="{{ $banner->title }}" class="w-full aspect-square xl:aspect-[4/2] object-cover">
                            <div class="banner-title">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.5">{!! nl2br($banner->title) !!}</span>
                                <a href="{{ $banner->url }}" class="btn-learn-more-banner">LEARN MORE</a>
                            </div>
                        </div>
                    @endforeach

                @else
                    <!-- Slide 1 -->
                    <div class="swiper-slide relative">
                        <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 1" class="w-full aspect-square xl:aspect-[4/2] object-cover">
                        <div class="banner-title">
                            <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.5">GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </span>
                            <a href="#" class="btn-learn-more-banner">EXPLORE MORE</a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide relative">
                        <img src="{{ asset('img/placeholder/hero.jpg') }}" alt="Hero Image 2" class="w-full aspect-square xl:aspect-[4/2] object-cover">
                        <div class="banner-title">
                            <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.5">GLOBALLY ALIGNED, <br>INDONESIAN ROOTED </span>
                            <a href="#" class="btn-learn-more-banner">LEARN MORE</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="pt-12 pb-10">
        <div class="container mx-auto px-2 lg:px-0">
            <div class="font-semibold text-2xl text-left pb-5 relative">
                <p>
                    <span>At Lim Siang Huat</span> <br>
                    <span>We're a partner in your success.</span>
                </p>

                <div class="absolute inset-0 bg-red-500 h-1 w-48 mt-auto"></div>
            </div>
        </div>

        <div class="container mx-auto mt-10">
            <div class="grid grid-cols-1 lg:grid-cols-5 min-h-[572px]">
                <div class="relative h-full col-span-3">

                    <div class="relative lg:absolute lg:pl-10 py-10 bg-[#F2F2F2] lg:inset-0 lg:w-[108%] lg:rounded-2xl h-min ">
                        <div class="max-w-none xl:max-w-[74%] space-y-3 md:space-y-3 xl:space-y-5 px-2 lg:px-0">
                            <p class="text-2xl">WHO WE ARE</p>
                            <h1 class="text-5xl font-semibold leading-16">F&B Distributor Since <span class="italic text-red-500 text-5xl font-bold">2002</span></h1>
                            <p>We are passionate about connecting high-quality food and beverage products with businesses that share our commitment to excellence.</p>
                            <p class="font-bold underline text-lg mb-5">We Commit to These Values</p>

                            <div class="w-full grid lg:grid-cols-2 xl:grid-cols-3 gap-2.5 max-w-3/5 lg:max-w-none mx-auto">
                                <div class="flex flex-col gap-2 items-center px-4 pb-4 pt-4 bg-white rounded-4xl shadow-2xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Archive.png') }}" alt="">
                                    <p class="text-lg text-center leading-[22px]">work with <br> <span class="leading-5 text-2xl font-bold text-red-500 uppercase italic">passion</span></p>
                                </div>
                                <div class="flex flex-col gap-2 items-center px-4 pb-4 pt-4 bg-white rounded-4xl shadow-2xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Check-Round.png') }}" alt="">
                                    <p class="text-lg text-center leading-[22px]"><span class="leading-5 text-2xl font-bold text-red-500 uppercase italic">value & respect</span> <br> our relations </p>
                                </div>
                                <div class="flex flex-col gap-2 items-center px-4 pb-4 pt-4 bg-white rounded-4xl shadow-2xl">
                                    <img class="w-14 h-14" src="{{ asset('img/icons/Icon-Group.png') }}" alt="">
                                    <p class="text-lg text-center leading-[22px]">strength of <br> <span class="leading-5 text-2xl font-bold text-red-500 uppercase italic">Teamwork</span></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="relative h-full col-span-2">
                    <div class="relative lg:absolute lg:bottom-[-2px] pt-10 lg:ml-[-19%]">
                        <div class="lg:w-max lg:h-max relative group overflow-hidden rounded-none lg:rounded-4xl cursor-pointer">
                            <img src="{{ asset('img/placeholder/Industrial.png') }}" alt="" class="w-auto mr-auto group-hover:scale-110 group-hover:-translate-x-1 group-hover:translate-y-1 transition-all duration-500 ease-in-out">

                            <div class="absolute lg:top-0 lg:right-0">
                                <div class="w-max-h-max">
                                    <span>
                                        <img src="{{ asset('img/icons/play-youtube.png') }}" alt="" class="shadow-2xl group-hover:scale-125 group-hover:-translate-x-1.5 group-hover:translate-y-1.5 delay-300 transition-all duration-500 ease-in-out">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-16 lg:mt-36 space-y-5 px-2 lg:px-0">
            <p class="text-2xl text-center">DISTRIBUTION</p>
            <h2 class="section-title text-center">Present in Key Provinces, <br>
                Dedicated to <span class="italic text-red-500 font-bold">Serving You</span>.</h2>
                <p class="text-center text-xl">Over the past 20 years, LSH Indonesia has expanded into five different cities <br>
                    and continues to grow, establishing a strong presence throughout the country.</p>

                <div class="relative mt-9">
                    <img src="{{ asset('img/placeholder/maps.png') }}" class="w-full h-auto" alt="">

                    <div class="absolute inset-0">
                        <svg class="w-full h-full" width="1112" height="410" viewBox="0 0 1112 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Frame 4">
                                <!-- Batam -->
                                <circle cx="219" cy="122" r="7" fill="#E31D1C" />
                                <circle cx="219" cy="122" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Jakarta -->
                                <circle cx="276" cy="296" r="7" fill="#E31D1C" />
                                <circle cx="276" cy="296" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Surabaya -->
                                <circle cx="416" cy="319" r="7" fill="#E31D1C" />
                                <circle cx="416" cy="319" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Bali -->
                                <circle cx="488" cy="347" r="7" fill="#E31D1C" />
                                <circle cx="488" cy="347" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Sulawesi 1 -->
                                <circle cx="645" cy="185" r="7" fill="#E31D1C" />
                                <circle cx="645" cy="185" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>

                                <!-- Sulawesi 2 -->
                                <circle cx="665" cy="240" r="7" fill="#E31D1C" />
                                <circle cx="665" cy="240" r="7" fill="none" stroke="rgba(227, 29, 28, 0.5)" stroke-width="2">
                                    <animate attributeName="r" from="7" to="20" dur="1.5s" repeatCount="indefinite" />
                                    <animate attributeName="opacity" from="1" to="0" dur="1.5s" repeatCount="indefinite" />
                                </circle>
                            </g>
                        </svg>
                    </div>

                </div>

                {{-- Learn More Button --}}
                <a href="{{ route('distribution') }}#channel" class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max mx-auto mt-9">
                    <span class="font-medium">
                        Learn More
                    </span>

                    <span class="inline-block ml-2">
                        <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38 20C38 31.0457 29.4934 40 19 40C8.50659 40 0 31.0457 0 20C0 8.9543 8.50659 0 19 0C29.4934 0 38 8.9543 38 20Z" fill="#E31D1C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.38 19.75L20.7615 15.4852L21.9052 14.5148L26.9836 20.5L21.9052 26.4852L20.7615 25.5148L24.38 21.25H12C11.5858 21.25 11.25 20.9142 11.25 20.5C11.25 20.0858 11.5858 19.75 12 19.75H24.38Z" fill="white"/>
                            </svg>
                    </span>
                </a>
        </div>

        <div class="container mx-auto mt-10 lg:mt-36 space-y-5">
            <h2 class="text-center section-title">We <span class="italic text-red-500 font-bold">Know the Route</span>, <br>
                We Understand the Channels.</h2>
            <p class="text-center text-xl">
                With strong access to General Trade, Modern Trade, and HoReCa, <br> we ensure your products reach key markets efficiently and effectively.
            </p>


            {{-- create a stacked card scroll driven section page --}}
            <div class="card_distribution__wrapper">
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 italic text-xl">01</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="text-6xl font-semibold leading-16">Hotel <br>
                                    Restaurant <br>
                                    Cafe </h5>
                                <a href="{{ route('distribution') }}#hotel-restaurant-cafe" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max">
                                    <span class="font-normal text-2xl">
                                        Discover More
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="w-full h-full">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper swiper-dis-content-0"
                                        data-class-name="swiper-dis-content-0">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-0" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-0" />
                                <div class="swiper-pagination pagination-swiper-dis-content-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 italic text-xl">02</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="text-6xl font-semibold leading-16">General <br>
                                    Trade</h5>
                                <a href="{{ route('distribution') }}#general-trade" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max">
                                    <span class="font-normal text-2xl">
                                        Discover More
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="w-full h-full relative">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper swiper-dis-content-1"
                                        data-class-name="swiper-dis-content-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-pagination pagination-swiper-dis-content-1"></div>
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-1" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-1" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the_card">
                    <div class="the_card_content">
                        <div class="distribution-card">
                            <div class="distribution-body">
                                <span data-swiper-parallax="-200" data-swiper-parallax-opacity="0.1" data-swiper-parallax-x="-100%"
                                    class="text-red-500 italic text-xl">03</span>
                                <h5 data-swiper-parallax="-300" data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="text-6xl font-semibold leading-16">Modern <br>
                                    Trade</h5>
                                <a href="{{ route('distribution') }}#modern-trade" data-swiper-parallax-y="-100" data-swiper-parallax-x="100%"
                                    data-swiper-parallax-duration="500" data-swiper-parallax-opacity="0"
                                    class="rounded-full pl-5 pr-2 py-1 border border-slate-600 flex items-center w-max">
                                    <span class="font-normal text-2xl">
                                        Discover More
                                    </span>

                                    <span class="inline-block ml-2">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 29C22.732 29 29 22.732 29 15C29 7.26801 22.732 1 15 1C7.26801 1 1 7.26801 1 15C1 22.732 7.26801 29 15 29ZM15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7203 12.4592L13.8329 11.7258L14.2022 10.272L19.2931 11.5652L18.7937 16.794L17.3005 16.6514L17.5838 13.6858L11.5579 17.928C11.2192 18.1664 10.7514 18.0852 10.5129 17.7465C10.2745 17.4078 10.3557 16.9399 10.6944 16.7015L16.7203 12.4592Z"
                                                fill="#E31D1C" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="distribution-body-carousel">
                                <div class="w-full h-full relative">
                                    {{-- add more swiper --}}
                                    <div data-swiper="bulkswiper" class="swiper swiper-dis-content-2"
                                        data-class-name="swiper-dis-content-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-3-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-1-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('img/placeholder/thumb-2-1.png') }}" alt=""
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination pagination-swiper-dis-content-2"></div>
                                <x-frontend.utils.arrow-prev className="left-arrow-swiper left-arrow-swiper-dis-content-2" />
                                <x-frontend.utils.arrow-next className="right-arrow-swiper right-arrow-swiper-dis-content-2" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
