<?php include('layouts/header.php'); ?>

  <!-- Main Content -->
  <main class="flex-grow mx-auto w-full overflow-x-hidden " style="margin-top: -80px;">

    <div class="relative 
    before:absolute before:content-[''] before:top-[-7%] before:left-[-200px] before:w-[300px] before:h-[300px] before:bg-[radial-gradient(circle,rgba(124,58,237,0.2)_0%,hsla(0,0%,100%,0)_70%)] before:z-[-1] 
after:absolute after:content-[''] after:top-[-2%] after:right-[-200px] after:w-[300px] after:h-[300px] after:bg-[radial-gradient(circle,rgba(124,58,237,0.5)_0%,hsla(0,0%,100%,0)_70%,rgba(37,99,235,0.3)_0%,hsla(0,0%,100%,0)_70%)] after:z-[-1]
sm:before:top-[-12%] sm:before:left-[-300px] sm:before:w-[500px] sm:before:h-[500px]
sm:after:top-[-5%] sm:after:right-[-300px] sm:after:w-[500px] sm:after:h-[500px]
lg:before:top-[-20%] lg:before:left-[-400px] lg:before:w-[900px] lg:before:h-[900px]
lg:after:top-[-5%] lg:after:right-[-400px] lg:after:w-[900px] lg:after:h-[900px]">

      <div class="container mx-auto px-4  pb-20" style="padding-top: 150px;">
        <div class="text-center max-w-3xl mx-auto">

          <h1 class="font-bold leading-[35px] lg:leading-[58px] lg:text-5xl mb-6 sm:leading-[45px] sm:text-4xl text-3xl text-gray-900">
            Create Professional <br> QR Codes <span class="text-violet-600 title-bottom-style">Completely Free</span>
          </h1>

          <p class="text-base text-lg w-full lg:w-[85%] mx-auto text-gray-600">Generate free customizable QR codes
            for any purpose - URLs, text, email, and more. No sign-up required, completely free.</p>
        </div>
      </div>

      <!-- QR Code Generator -->
      <div class="max-w-7xl mx-auto pb-20 px-4" id="qr-generator">

        <form action="https://freeqrcodes.link/generate.php" method="post" id="qr-form">
          <div class="flex-wrap md:flex rounded-l-xl rounded-r-xl shadow-lg">
            <div class="bg-white border-r flex-1 md:min-w-96 rounded-l-xl">

              <div class="border-b p-4 rounded-t-lg">
                <ul class="flex flex-wrap gap-2">
                  <li class="relative flex-grow">
                    <input type="radio" id="url" name="qr_type" value="url" class="peer sr-only" checked="">
                    <div 
                      class="flex items-center min-w-36 p-2 bg-white border border-gray-300 rounded-md cursor-pointer peer-checked:ring-2 peer-checked:ring-violet-500 peer-checked:border-transparent">
                      <div class="bg-neutral-100 rounded mr-2 w-8 h-8 flex items-center justify-center">
                        <i class="fa-solid fa-globe"></i>
                      </div>
                      <span>URL</span>
        </div>
                  </li>

                  <li class="relative flex-grow">
                    <input type="radio" id="text" name="qr_type" value="text" class="peer sr-only">
                    <div 
                      class="flex items-center min-w-36 p-2 bg-white border border-gray-300 rounded-md cursor-pointer peer-checked:ring-2 peer-checked:ring-violet-500 peer-checked:border-transparent">
                      <div class="bg-neutral-100 rounded mr-2 w-8 h-8 flex items-center justify-center">
                        <i class="fa-regular fa-file-lines"></i>
                      </div>
                      <span>Text</span>
                    </div>
                  </li>

                  <li class="relative flex-grow">
                    <input type="radio" id="email" name="qr_type" value="email" class="peer sr-only">
                    <div 
                      class="flex items-center min-w-36 p-2 bg-white border border-gray-300 rounded-md cursor-pointer peer-checked:ring-2 peer-checked:ring-violet-500 peer-checked:border-transparent">
                      <div class="bg-neutral-100 rounded mr-2 w-8 h-8 flex items-center justify-center">
                        <i class="fa-solid fa-envelope"></i>
                      </div>
                      <span>Email</span>
                    </div>
                  </li>

                  <li class="relative flex-grow">
                    <input type="radio" id="phone" name="qr_type" value="phone" class="peer sr-only">
                    <div
                      class="flex items-center min-w-36 p-2 bg-white border border-gray-300 rounded-md cursor-pointer peer-checked:ring-2 peer-checked:ring-violet-500 peer-checked:border-transparent">
                      <div class="bg-neutral-100 rounded mr-2 w-8 h-8 flex items-center justify-center">
                        <i class="fa-solid fa-phone"></i>
                      </div>
                      <span>Phone</span>
                    </div>
                  </li>

                </ul>
              </div>

              <div class="p-4 flex flex-col space-y-6">

                <div id="qr_content_wrapper">
                  <div class="qr_type_url">
                    <label class="block text-gray-700"><i class="fa-solid fa-link"></i> URL </label>
                    <input type="text" name="qr_content"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-violet-500 focus:border-violet-500 sm:text-sm"
                      placeholder="https://example.com" required="">
                  </div>
                </div>

                <!-- Styles collapse -->
                <button type="button"
                  class="text-gray-900 bg-gray-100 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-md text-sm px-5 py-2.5"
                  data-bs-toggle="collapse" data-bs-target="#style_container"><i class="fa-solid fa-qrcode"></i>
                  Customize Design</button>

                <div class="collapse hidden" id="style_container">
                  <div class="mb-4">
                    <label for="style" class="block mb-3"><i class="fas fa-qrcode fa-sm text-muted mr-1"></i>
                      Style</label>

                    <div class="flex flex-wrap gap-2">
                      <!-- Square style option -->
                      <div>
                        <div>
                          <input type="radio" name="style" id="style" value="square" class="hidden peer" checked="checked"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-square-full fa-sm mr-1"></i> Square
                          </div>
                        </div>
                      </div>

                      <!-- Dot style option -->
                      <div>
                        <div>
                          <input type="radio" name="style" value="dot" class="hidden peer" required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-circle fa-sm mr-1"></i> Dot
                          </div>
                        </div>
                      </div>

                      <!-- Rounded style option -->
                      <div>
                        <div>
                          <input type="radio" name="style" value="round" class="hidden peer" required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-square fa-sm mr-1"></i> Rounded
                          </div>
                        </div>
                      </div>

                      <!-- Heart style option -->
                      <div>
                        <div>
                          <input type="radio" name="style" value="heart" class="hidden peer" required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-heart fa-sm mr-1"></i> Heart
                          </div>
                        </div>
                      </div>

                      <!-- Diamond style option -->
                      <div>
                        <div>
                          <input type="radio" name="style" value="diamond" class="hidden peer" required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-gem fa-sm mr-1"></i> Diamond
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="mb-4">
                    <label for="inner_eye_style" class="block mb-3">
                      <i class="fas fa-circle fa-sm text-muted mr-1"></i> Eye-ball
                    </label>

                    <div class="flex flex-wrap gap-2">

                      <!-- Square inner eye option -->
                      <div>
                        <div>
                          <input type="radio" name="inner_eye_style" id="inner_eye_style"  value="square" class="hidden peer"
                            checked="checked" required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-square-full fa-sm mr-1"></i> Square
                          </div>
                        </div>
                      </div>

                      <!-- Circle inner eye option -->
                      <div>
                        <div>
                          <input type="radio" name="inner_eye_style" value="dot" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-circle fa-sm mr-1"></i> Dot
                          </div>
                        </div>
                      </div>

                      <!-- Rounded inner eye option -->
                      <div>
                        <div>
                          <input type="radio" name="inner_eye_style" value="rounded" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-square fa-sm mr-1"></i> Rounded
                          </div>
                        </div>
                      </div>

                      <!-- Diamond inner eye option -->
                      <div>
                        <div>
                          <input type="radio" name="inner_eye_style" value="diamond" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-gem fa-sm mr-1"></i> Diamond
                          </div>
                        </div>
                      </div>

                      <!-- Flower inner eye option -->
                      <div>
                        <div>
                          <input type="radio" name="inner_eye_style" value="flower" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-seedling fa-sm mr-1"></i> Flower
                          </div>
                        </div>
                      </div>

                      <!-- Leaf inner eye option -->
                      <div>
                        <div>
                          <input type="radio" name="inner_eye_style" value="leaf" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-leaf fa-sm mr-1"></i> Leaf
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="mb-4">
                    <label for="outer_eye_style" class="block mb-3">
                      <i class="fas fa-dot-circle fa-sm text-muted mr-1"></i> Eye Frame
                    </label>

                    <div class="flex flex-wrap gap-2">
                      <!-- Square outer eye option -->
                      <div>
                        <div>
                          <input type="radio" name="outer_eye_style" id="outer_eye_style" value="square" class="hidden peer"
                            checked="checked" required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-square-full fa-sm mr-1"></i> Square
                          </div>
                        </div>
                      </div>

                      <!-- Pointy outer eye option -->
                      <div>
                        <div>
                          <input type="radio" name="outer_eye_style" value="pointy" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fa-brands fa-bitbucket fa-sm mr-1"></i> Pointy
                          </div>
                        </div>
                      </div>

                      <!-- Circle outer eye option -->
                      <div>
                        <div>
                          <input type="radio" name="outer_eye_style" value="circle" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-circle-dot fa-sm mr-1"></i> Circle
                          </div>
                        </div>
                      </div>

                      <!-- Rounded outer eye option -->
                      <div>
                        <div>
                          <input type="radio" name="outer_eye_style" value="rounded" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-square fa-sm mr-1"></i> Rounded
                          </div>
                        </div>
                      </div>

                      <!-- Flower outer eye option -->
                      <div>
                        <div>
                          <input type="radio" name="outer_eye_style" value="flower" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-seedling fa-sm mr-1"></i> Flower
                          </div>
                        </div>
                      </div>

                      <!-- Leaf outer eye option -->
                      <div>
                        <div>
                          <input type="radio" name="outer_eye_style" value="leaf" class="hidden peer"
                            required="required">
                          <div
                            class="cursor-pointer bg-gray-50 px-3 py-2 rounded-md peer-checked:bg-violet-100 peer-checked:border-violet-500 peer-checked:border-2 hover:bg-gray-100 transition">
                            <i class="fas fa-leaf fa-sm mr-1"></i> Leaf
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <!-- Branding collapse -->
                <button type="button"
                  class="text-gray-900 bg-gray-100 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-md text-sm px-5 py-2.5"
                  data-bs-toggle="collapse" data-bs-target="#branding_container"><i class="fa-solid fa-palette"></i>
                  Branding</button>

                <div class="collapse hidden" id="branding_container">
                  <div>

                    <div class="mb-4">

                      <label  class="block"><i class="fas fa-image fa-sm text-muted mr-1"></i> Logo</label>

                      <div class="mt-2 flex items-center space-x-4">

                        <div class="flex-grow">
                          <label
                            class="block p-3 bg-gray-50 text-center rounded-md cursor-pointer hover:bg-gray-100 border border-gray-300">
                            <span class="sr-only">Choose qr code brand logo</span>
                            <input type="file" name="logo"
                              class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 focus:outline-none"
                              accept=".jpg, .jpeg, .png">
                          </label>
                        </div>
                        <img id="qr_code_logo_preview" src="#" alt="Logo Preview"
                          class="hidden w-16 h-16 object-contain border border-gray-300 rounded-md">
                      </div>

                      <div>
                        <a href="#" id="remove_logo" class="hidden text-gray-500 hover:text-red-500 text-sm">
                          <div class="my-3">
                            <i class="fa-solid fa-trash-alt mr-1"></i>
                            Remove selected file
                          </div>
                        </a>

                        <small class="block mt-1 text-gray-500">Upload a logo in <b>jpg, jpeg, or png</b> format to be
                          displayed in the QR code.</small>
                      </div>

                    </div>

                    <div class="mb-4">
                      <label for="logo_size" class="block"><i class="fas fa-expand-arrows-alt fa-sm mr-1"></i> Logo
                        Size</label>
                      <div class="mt-2 flex items-center space-x-4">
                        <input type="range" name="logo_size" id="logo_size" min="5" max="60" value="25"
                          class="flex-grow bg-gray-200 rounded-lg appearance-none cursor-pointer h-2"
                          onchange="javascript:this.nextElementSibling.innerText = this.value + '%'">
                        <span id="logo_size_value" class="text-gray-700 w-12 text-center">25%</span>
                      </div>
                      <small class="block text-gray-500">Adjust the size of the logo within the QR code.</small>
                    </div>

                    <div class="mb-4">
                      <div class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="1" class="hidden peer" name="logo_spotlight"
                          onchange="javascript:document.getElementById('qr_error_correction').value = 'H';">
                        <div
                          class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-violet-300 rounded-full peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-violet-600">
                        </div>
                        <span class="ms-3 text-sm font-medium text-gray-900">Spotlight the Logo</span>
                      </div>

                      <small class="block text-gray-500">For best results, please set the error correction level to
                        <b>High</b> in the options.</small>

                    </div>

                  </div>
                </div>

                <!-- Options collapse -->
                <button type="button"
                  class="text-gray-900 bg-gray-100 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-md text-sm px-5 py-2.5"
                  data-bs-toggle="collapse" data-bs-target="#options_container"><i class="fa-solid fa-cog"></i>
                  Options</button>

                <div class="collapse hidden" id="options_container">
                  <div class="my-3">
                    <div class="mb-4">
                      <label for="qr_size" class="block"><i class="fas fa-expand-arrows-alt fa-sm mr-1"></i> Dimension
                        Size</label>
                      <div class="mt-2 flex items-center space-x-4">
                        <input type="range" name="qr_size" id="qr_size" min="100" max="1000" value="400" step="50"
                          class="flex-grow bg-gray-200 rounded-lg appearance-none cursor-pointer h-2"
                          onchange="javascript:this.nextElementSibling.innerText = this.value + 'px'">
                        <span id="qr_size_value" class="text-gray-700 w-12 text-center">400px</span>
                      </div>
                      <small class="block text-gray-500">Adjust the size of the QR code.</small>
                    </div>

                    <div class="mb-4">
                      <label for="qr_margin" class="block"><i class="fas fa-arrows-alt fa-sm mr-1"></i> Margin</label>
                      <div class="mt-2 flex items-center space-x-4">
                        <input type="range" name="margin" id="qr_margin" min="0" max="10" value="2"
                          class="flex-grow bg-gray-200 rounded-lg appearance-none cursor-pointer h-2"
                          onchange="javascript:this.nextElementSibling.innerText = this.value + 'px'">
                        <span id="qr_margin_value" class="text-gray-700 w-12 text-center">2px</span>
                      </div>
                      <small class="block text-gray-500">Adjust the margin around the QR code.</small>
                    </div>

                    <div class="mb-4">
                      <label for="qr_error_correction" class="block"><i class="fas fa-check fa-sm mr-1"></i> Error
                        correction capability</label>
                      <select name="ecc" id="qr_error_correction"
                        class="mt-3 block w-full border-gray-300 rounded-md shadow-sm focus:ring-violet-500 focus:border-violet-500 sm:text-sm">
                        <option value="L">Low (7% recoverable)</option>
                        <option selected="" value="M">Medium (15% recoverable)</option>
                        <option value="Q">Quartile (25% recoverable)</option>
                        <option value="H">High (30% recoverable)</option>
                      </select>
                      <small class="block text-gray-500">Select the error correction level for the QR code.</small>
                    </div>
                  </div>
                </div>

                <div>
                  <button type="submit"
                    class="px-4 py-2 text-white font-semibold bg-violet-600 hover:bg-violet-700 rounded-md"
                    id="qr-button">
                    <i class="fa-solid fa-qrcode"></i>
                    <span class="ml-2" id="qr-button-text">Generate QR Preview</span>
                  </button>
                </div>

              </div>

            </div>

            <div class="bg-violet-50 md:max-w-96 min-w-72 mx-auto p-4 rounded-r-xl">
              <div class="rounded text-center md:shrink-0 p-6" id="qr-result">
                <div class="shadow-md rounded-lg bg-white inline-block">
                  <img src="public/images/placeholder.png" alt="qr code placeholder" class="object-contain" width="250">

                </div>
              </div>

              <div class="mb-8 text-center print:hidden">

                <div id="is_readable" class="hidden text-green-500 text-sm mt-1">
                  <i class="fas fa-check-circle mr-1"></i> QR Code seems to be readable.
                </div>

                <small class="text-sm">
                  <i class="fas fa-info-circle text-gray-500 mr-1"></i>
                  <span class="text-gray-500">Scan the QR code to test it before production</span>
                </small>

                <div id="is_not_readable" class="hidden text-yellow-500 text-sm mt-1">
                  <i class="fas fa-exclamation-circle mr-1"></i> QR Code might not be readable. Adjust your QR code
                  settings or content.
                </div>
              </div>

              <div class="mt-4 space-y-2">
                <!-- Multiple format download buttons -->
                <button type="button"
                  class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 disabled:opacity-50"
                  id="download-qr-jpeg" disabled="">
                  <i class="fa-solid fa-file-image"></i> JPEG
                </button>
                <button type="button"
                  class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 disabled:opacity-50"
                  id="download-qr-png" disabled="">
                  <i class="fa-solid fa-file-image"></i> PNG
                </button>
                <button type="button"
                  class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 disabled:opacity-50"
                  id="download-qr-svg" disabled="">
                  <i class="fa-solid fa-file-code"></i> SVG
                </button>
                <button type="button"
                  class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 disabled:opacity-50"
                  id="download-qr-pdf" disabled="">
                  <i class="fa-solid fa-file-pdf"></i> PDF
                </button>
              </div>
            </div>

          </div>
        </form>

      </div>
    </div>

    <!-- Hero Section -->

    <section class="bg-gray-50 pb-20 pt-20">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between">

          <!-- Content Section -->
          <div class="w-full lg:w-1/2 order-2 lg:order-1 text-center lg:text-left">

            <h3 class="text-3xl font-extrabold mb-4 sm:text-4xl">
              Create High Quality <span class="text-violet-600 title-bottom-style"> QR Code</span> with ease and customization
            </h3>

            <p class="leading-relaxed text-gray-600 mb-6">
              Make high-quality, customized QR codes effortlessly, whether for URLs, WiFi passwords, text, emails, or phone numbers. It's ideal for businesses, events, and personal use.
            </p>

            <p class="leading-relaxed text-gray-600 mb-6">
              link is trusted by thousands for fast, seamless QR code creation. 
              Start creating your free QR codes today and experience them at your convenience!
            </p>

            <div class="flex items-center min-w-52 mt-10">
              <a href="#qr-generator"
                class="px-4 py-2 text-white font-semibold bg-violet-600 hover:bg-violet-700 rounded-md">Get Started -
                It's Free<i class="fa fa-arrow-right ml-1 transform -rotate-45"></i></a>
            </div>

          </div>

          <!-- Image Section -->
          <div class="flex justify-center items-center lg:justify-end lg:order-2 lg:w-1/2 order-1 w-full lg:mb-0 mb-8 ">
            <img src="./public/images/scan-qrcode.svg" alt="QR Code Generator" loading="lazy" width="400" height="300"
              class="max-w-full h-auto">
          </div>

        </div>
      </div>
    </section>

    <!-- feature section -->
    <section id="features" class="bg-white pt-20 pb-20">
      <div class="max-w-7xl mx-auto px-4">
        <div class="max-w-3xl mb-10 mx-auto text-center">
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4 md:max-w-4xl mx-auto">
            Which QR Codes can I create <span class="text-violet-600 title-bottom-style">for free?</span>
          </h2>
          <p class="text-lg lg:w-[85%] max-w-md md:max-w-3xl md:mt-5 mx-auto sm:text-lg text-base text-gray-600 w-full">
            These free Static QR Codes never expire. Once created, they are yours permanently, but you can't modify the
            content or monitor scan statistics.
          </p>
        </div>

        <div class="flex flex-wrap gap-6 justify-center max-w-7xl mb-4 mx-auto">
          <!-- URL QR Code -->
          <div class="bg-violet-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow w-full sm:w-[48%] lg:w-[32%] lg:h-[178px]">
            <div class="flex gap-2 items-center mb-1">
              <div class="me-2"><img src="./public/images/icons/share-icon.svg" alt="Seamless URL Sharing"  width="35" height="35"></div>
              <h3 class="font-semibold text-xl font-bold">Seamless URL Sharing</h3>
            </div>
            <p class="text-gray-600">
              Easily create QR codes for any URL with a user-friendly and intuitive interface that makes sharing and accessing links quick, simple, and efficient.
            </p>
          </div>

          <!-- Email QR Code -->
          <div class="bg-violet-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow w-full sm:w-[48%] lg:w-[32%] lg:h-[178px]">
            <div class="flex gap-2 items-center mb-1">
              <div class="me-2"><img src="./public/images/icons/email.svg" alt="Instant Email Access"  width="35" height="35"></div>
              <h3 class="font-semibold text-xl font-bold">Instant Email Access</h3>
            </div>
            <p class="text-gray-600">Generate QR codes for email addresses that instantly open an email client with
              pre-filled details, perfect for quick outreach and promotional use.</p>
          </div>

          <!-- Text QR Code -->
          <div class="bg-violet-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow w-full sm:w-[48%] lg:w-[32%] lg:h-[178px]">
            <div class="flex gap-2 items-center mb-2">
              <div class="me-2"><img src="./public/images/icons/text.svg" alt="Universal Text Sharing" width="35" height="35"></div>
              <h3 class="font-semibold text-xl font-bold">Universal Text Sharing</h3>
            </div>
            <p class="text-gray-600">
              Quickly generate QR codes for text that can be shared universally, making it easier and more convenient for others to access and read the content.
            </p>
          </div>

          <!-- Wifi QR Code -->
          <div class="bg-violet-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow w-full sm:w-[48%] lg:w-[32%] lg:h-[178px]">
            <div class="flex items-center gap-2 ">
              <div class="me-2"><img src="./public/images/icons/wifi.svg" alt="Effortless Wi-Fi Access"  width="35" height="35"></div>
              <h3 class="font-semibold text-xl font-bold">Effortless Wi-Fi Access</h3>
            </div>
            <p class="text-gray-600">Create a QR code that lets others connect to your Wi-Fi network effortlessly,
              without
              entering the password, for fast internet access.</p>
          </div>

          <!-- Phone QR Code -->
          <div class="bg-violet-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow w-full sm:w-[48%] lg:w-[32%] lg:h-[178px]">
            <div class="flex gap-2 items-center mb-1">
              <div class="me-2"><img src="./public/images/icons/call.svg" alt="Quick Call Dialer"  width="35" height="35"></div>
              <h3 class="font-semibold text-xl font-bold">Quick Call Dialer</h3>
            </div>
            <p class="text-gray-600">
              Generate a QR code that will dial a phone number directly when scanned, making it quick and easy for people to initiate calls with a single scan.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- Brand Section -->
    <section class="overflow-hidden pb-20 pt-20 relative z-[2]">

      <img alt="payment-method" loading="lazy" width="1728" height="862" decoding="async" data-nimg="1" class="absolute" style="width: 100%;height: 100%;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: -1;" src="./public/images/shape3.webp">

      <div class="max-w-3xl mb-16 mx-auto px-4 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4 ">
          Explore <span class="text-violet-600 title-bottom-style">Our Trusted Brands</span> Your Gateway to Innovation
          and Excellence
        </h2>
      </div>

      <div class="max-w-7xl mx-auto px-4">

              <!-- Flexbox for Brand Cards (Top Row) -->
      <div class="flex flex-wrap gap-4 justify-center max-w-7xl mb-4 mx-auto">
        <!-- Brand Cards -->
        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://alpha.net.bd/" target="_blank" class="inline-block">
            <img src="./public/images/brands/alpha_net.svg" alt="Alpha Net" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://cfl-it.com/" target="_blank" class="inline-block">
            <img src="./public/images/brands/cfl-it.svg" alt="CFL IT" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.godigital.com.bd/" target="_blank" class="inline-block">
            <img src="./public/images/brands/godigital.svg" alt="Go Digital BD" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.vps.com.bd/" target="_blank" class="inline-block">
            <img src="./public/images/brands/vps.com.bd.svg" alt="VPS.com.bd" class="w-full h-full" loading="lazy">
          </a>
        </div>

      </div>

      <!-- Flexbox for Brand Cards (Middle Row) -->
      <div class="flex flex-wrap gap-4 justify-center  mb-4 mx-auto">



        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://residentialvps.com/" target="_blank" class="inline-block">
            <img src="./public/images/brands/residential_vps.svg" alt="Residential VPS" class="w-full h-full"
              loading="lazy">
          </a>
        </div>
        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.pbx.com.bd/" target="_blank" class="inline-block">
            <img src="./public/images/brands/alpha_pbx.svg" alt="Alpha PBX" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.sms.net.bd/" target="_blank" class="inline-block">
            <img src="./public/images/brands/alpha_sms.svg" alt="Alpha SMS" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://ipbxphone.com/" target="_blank" class="inline-block">
            <img src="./public/images/brands/ipbxphone.svg" alt="IPBX Phone" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://virtue.works/" target="_blank" class="inline-block">
            <img src="./public/images/brands/virtue-work.svg" alt="Virtue Works" class="w-full h-full" loading="lazy">
          </a>
        </div>

      </div>

      <!-- Flexbox for Brand Cards (Bottom Row) -->
      <div class="flex flex-wrap gap-4 justify-center mb-4">



        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.hotelmotels.info/" target="_blank" class="inline-block">
            <img src="./public/images/brands/hotel-motels.png" alt="Hotel Motels" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.hotelmotels.info/" target="_blank" class="inline-block">
            <img src="./public/images/brands/dojos-info.svg" alt="Hotel Motels" class="w-full h-full" loading="lazy">
          </a>
        </div>

        <div
          class="text-center  bg-white py-2 lg:py-3 px-3 lg:px-5 rounded-[10px] flex justify-center items-center transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg flex-shrink-0 w-full sm:w-[180px] sm:h-[60px] md:w-[190px] md:h-[70px]">
          <a href="https://www.hotelmotels.info/" target="_blank" class="inline-block">
            <img src="./public/images/brands/pizzashops-info.svg" alt="Hotel Motels" class="w-full h-full"
              loading="lazy">
          </a>
        </div>

      </div>

        <div class="flex items-center justify-center min-w-52 mt-10">
          <a href="brands.html" class="px-4 py-2 text-white font-semibold bg-violet-600 hover:bg-violet-700 rounded-md">About All Brands<i class="fa fa-arrow-right ml-1 transform -rotate-45"></i></a>
        </div>

      </div>
      
    </section>
    <!-- Achievements Section -->

    <section id="how-it-works" class="bg-white  pt-20 pb-[250px]">
      <div class="lg:px-8 max-w-7xl mx-auto px-4 sm:px-6">
    
        <div class="max-w-3xl mb-10 mx-auto text-center">
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4 md:max-w-4xl mx-auto">
            Our <span class="text-violet-600 title-bottom-style"> Achievements</span>
          </h2>
          <p class="text-lg lg:w-[85%] max-w-md md:max-w-3xl md:mt-5 mx-auto sm:text-lg text-base text-gray-600 w-full">
            We take pride in our achievements, serving millions globally <br> with innovative solutions.
          </p>
        </div>
    
        <div class="gap-8 grid md:grid-cols-3">
          <div class="text-center">
            <div class="flex justify-center items-center bg-violet-100 mx-auto mb-4 rounded-full w-[70px] h-[70px] font-bold text-violet-600 text-lg">
              + 5M
            </div>
            <h3 class="mb-2 font-semibold text-xl">QR Codes Generated</h3>
            <p class="text-gray-600">Over 5 million QR codes created for various business, personal, marketing, and creative purposes.</p>
          </div>
          <div class="text-center">
            <div class="flex justify-center items-center bg-violet-100 mx-auto mb-4 rounded-full w-[70px] h-[70px] font-bold text-violet-600 text-lg">
              + 10K
            </div>
            <h3 class="mb-2 font-semibold text-xl">Businesses Served</h3>
            <p class="text-gray-600">We have successfully helped over 10,000 businesses create custom QR codes for marketing and branding.</p>
          </div>
          <div class="text-center">
            <div class="flex justify-center items-center bg-violet-100 mx-auto mb-4 rounded-full w-[70px] h-[70px] font-bold text-violet-600 text-lg">
              + 100
            </div>
            <h3 class="mb-2 font-semibold text-xl">Countries Reached</h3>
            <p class="text-gray-600">Our QR codes have reached users in over 100 countries worldwide, making global connections effortless.</p>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php include('layouts/footer.php'); ?>