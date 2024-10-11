<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="relative flex flex-col w-full max-w-[640px] min-h-screen gap-5 mx-auto bg-[#F5F5F0]">
        <div id="top-bar" class="flex justify-between items-center px-4 mt-[60px]">
            <a href="index.html">
                <img src="assets/images/icons/back.svg" class="w-10 h-10" alt="icon">
            </a>
            <p class="font-bold text-lg leading-[27px]">Look Details</p>
            <div class="dummy-btn w-10"></div>
        </div>
        <section id="gallery" class="flex flex-col gap-[10px]">
            <div class="flex w-full h-[250px] shrink-0 overflow-hidden px-4">
                <img id="main-thumbnail" src="assets/images/thumbnails/Nike Air Humara Shoes (0).png"
                    class="w-full h-full object-contain object-center" alt="thumbnail">
            </div>
            <div class="swiper w-full overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !w-fit py-[2px]">
                        <label
                            class="thumbnail-selector flex flex-col shrink-0 w-20 h-20 rounded-[20px] p-[10px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700] has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700]">
                            <input type="radio" name="image" class="hidden" checked>
                            <img src="assets/images/thumbnails/Nike Air Humara Shoes (0).png"
                                class="w-full h-full object-contain" alt="thumbnail">
                        </label>
                    </div>
                    <div class="swiper-slide !w-fit py-[2px]">
                        <label
                            class="thumbnail-selector flex flex-col shrink-0 w-20 h-20 rounded-[20px] p-[10px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700] has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700]">
                            <input type="radio" name="image" class="hidden" checked>
                            <img src="assets/images/thumbnails/Nike Air Humara Shoes (1).png"
                                class="w-full h-full object-contain" alt="thumbnail">
                        </label>
                    </div>
                    <div class="swiper-slide !w-fit py-[2px]">
                        <label
                            class="thumbnail-selector flex flex-col shrink-0 w-20 h-20 rounded-[20px] p-[10px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700] has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700]">
                            <input type="radio" name="image" class="hidden" checked>
                            <img src="assets/images/thumbnails/Nike Air Humara Shoes (2).png"
                                class="w-full h-full object-contain" alt="thumbnail">
                        </label>
                    </div>
                    <div class="swiper-slide !w-fit py-[2px]">
                        <label
                            class="thumbnail-selector flex flex-col shrink-0 w-20 h-20 rounded-[20px]  p-[10px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700] has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700]">
                            <input type="radio" name="image" class="hidden" checked>
                            <img src="assets/images/thumbnails/Nike Air Humara Shoes (3).png"
                                class="w-full h-full object-contain" alt="thumbnail">
                        </label>
                    </div>
                    <div class="swiper-slide !w-fit py-[2px]">
                        <label
                            class="thumbnail-selector flex flex-col shrink-0 w-20 h-20 rounded-[20px] p-[10px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700] has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700]">
                            <input type="radio" name="image" class="hidden" checked>
                            <img src="assets/images/thumbnails/Nike Air Humara Shoes (4).png"
                                class="w-full h-full object-contain" alt="thumbnail">
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <section id="info" class="flex flex-col gap-[14px] px-4">
            <div class="flex items-center justify-between">
                <h1 id="title" class="font-bold text-2xl leading-9">Green Style Lite Flying Pro Kit</h1>
                <div class="flex flex-col items-end shrink-0">
                    <div class="flex items-center gap-1">
                        <img src="assets/images/icons/Star 1.svg" class="w-[26px] h-[26px]" alt="star">
                        <span class="font-semibold text-xl leading-[30px]">4.5</span>
                    </div>
                    <p class="text-sm leading-[21px] text-[#878785]">(18,485 reviews)</p>
                </div>
            </div>
            <p id="desc" class="leading-[30px]">Vintage details elevate an icon for timeless style that's easy to
                wear. Premium leather gives these kicks a classic feel while canvas and exposed foam on the tongue pair.
            </p>
        </section>
        <div id="brand" class="flex items-center gap-4 px-4">
            <div class="w-[70px] h-[70px] rounded-[20px] bg-white overflow-hidden">
                <img src="assets/images/logos/nike.svg" class="w-full h-full object-contain" alt="brand logo">
            </div>
            <div class="flex flex-col">
                <h2 class="text-sm leading-[21px]">Brand</h2>
                <div class="flex items-center gap-1">
                    <h3 class="font-bold text-lg leading-[27px]">Nike Indonesia</h3>
                    <img src="assets/images/icons/arrow-left.svg" class="w-5 h-5" alt="icon">
                </div>
            </div>
        </div>
        <form action="booking.html" class="flex flex-col gap-3">
            <div class="flex flex-col gap-3 px-4">
                <h2 class="font-bold">Choose Size</h2>
                <div class="flex items-center flex-wrap gap-[10px]">
                    <label
                        class="relative flex justify-center min-w-[83px] w-fit rounded-2xl ring-1 ring-[#2A2A2A] p-[14px] transition-all duration-300 has-[:checked]:bg-white has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700] hover:ring-2 hover:ring-[#FFC700]">
                        <input type="radio" name="size" value="EU 40"
                            class="absolute top-1/2 left-1/2 opacity-0" required>
                        <span class="font-semibold">EU 40</span>
                    </label>
                    <label
                        class="relative flex justify-center min-w-[83px] w-fit rounded-2xl ring-1 ring-[#2A2A2A] p-[14px] transition-all duration-300 has-[:checked]:bg-white has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700] hover:ring-2 hover:ring-[#FFC700]">
                        <input type="radio" name="size" value="EU 42"
                            class="absolute top-1/2 left-1/2 opacity-0" required>
                        <span class="font-semibold">EU 42</span>
                    </label>
                    <label
                        class="relative flex justify-center min-w-[83px] w-fit rounded-2xl ring-1 ring-[#2A2A2A] p-[14px] transition-all duration-300 has-[:checked]:bg-white has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700] hover:ring-2 hover:ring-[#FFC700]">
                        <input type="radio" name="size" value="EU 45"
                            class="absolute top-1/2 left-1/2 opacity-0" required>
                        <span class="font-semibold">EU 45</span>
                    </label>
                    <label
                        class="relative flex justify-center min-w-[83px] w-fit rounded-2xl ring-1 ring-[#2A2A2A] p-[14px] transition-all duration-300 has-[:checked]:bg-white has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700] hover:ring-2 hover:ring-[#FFC700]">
                        <input type="radio" name="size" value="EU 50"
                            class="absolute top-1/2 left-1/2 opacity-0" required>
                        <span class="font-semibold">EU 50</span>
                    </label>
                    <label
                        class="relative flex justify-center min-w-[83px] w-fit rounded-2xl ring-1 ring-[#2A2A2A] p-[14px] transition-all duration-300 has-[:checked]:bg-white has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700] hover:ring-2 hover:ring-[#FFC700]">
                        <input type="radio" name="size" value="EU 52"
                            class="absolute top-1/2 left-1/2 opacity-0" required>
                        <span class="font-semibold">EU 52</span>
                    </label>
                    <label
                        class="relative flex justify-center min-w-[83px] w-fit rounded-2xl ring-1 ring-[#2A2A2A] p-[14px] transition-all duration-300 has-[:checked]:bg-white has-[:checked]:ring-2 has-[:checked]:ring-[#FFC700] hover:ring-2 hover:ring-[#FFC700]">
                        <input type="radio" name="size" value="EU 54"
                            class="absolute top-1/2 left-1/2 opacity-0" required>
                        <span class="font-semibold">EU 54</span>
                    </label>
                </div>
            </div>
            <div id="form-bottom-nav" class="relative flex h-[100px] w-full shrink-0 mt-5">
                <div class="fixed bottom-5 w-full max-w-[640px] z-30 px-4">
                    <div class="flex items-center justify-between rounded-full bg-[#2A2A2A] p-[10px] pl-6">
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-[20px] leading-[30px] text-white">Rp 18.500.000</p>
                            <p class="text-sm leading-[21px] text-[#878785]">One pair shoes</p>
                        </div>
                        <button type="submit" class="rounded-full p-[12px_20px] bg-[#C5F277] font-bold">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/details.js') }}"></script>
</body>

</html>
