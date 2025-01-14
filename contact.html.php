
<?php 
// session start
session_start();

// Retrieve the error message from the session
$error_recaptcha =  $_SESSION['errors']['recaptcha'] ?? '';

// Check if the mail was sent successfully
$mail_response = "";
$error = "";
if (isset($_SESSION['success'])) {
  $mail_response = $_SESSION['success'] ?? '';
  unset($_SESSION['success']);
}

// Display the first error message if it exists
if (isset($_SESSION['errors']) && is_array($_SESSION['errors'])) {
  // Get the first error
  $firstError = array_shift($_SESSION['errors']);

  // Display the first error
  if ($firstError) {
    $error = $firstError;
  }

  // Optionally unset the errors if you don't want to keep them in the session
  unset($_SESSION['errors']);
}
?>

<?php include('layouts/header.php')?>

  <!-- Main Content -->
  <main >
    <section class="pb-[250px] pt-[75px]" >
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap gap-4 items-center justify-center xl:justify-between">
          <!-- Image Section -->
          <div class="p-6 rounded-md">
            <img src="./public/images/contact-qrcode.svg" alt="QR Code Generator" loading="lazy" width="500"
              height="500" class="max-w-full h-auto">
          </div>
          <!-- Form Section -->
          <div class="bg-white xl:w-1/2 p-7 rounded-xl shadow-lg w-full break-words">

            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Contact us to learn about <br> <span
                class="text-violet-600 title-bottom-style break-words">freeqrcodes.link </span></h1>
            <p class="mb-8 text-center text-gray-600 text-lg">
              We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.
            </p>

            <!-- Alert -->
          <?php if ($mail_response): ?>

            <div id="alert-3"
              class="max-w-3xl mx-auto mb-16 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 "
              role="alert">
           
              <div class="ms-3 text-sm font-medium">
                <?= $mail_response ?? "" ?>
              </div>
              <button onclick="dismissAlert()" type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <i class="fa-solid fa-xmark"></i>
              </button>
            </div>

            <?php endif; ?>

            <?php if ($error): ?>
            <div id="alert-3"
              class="max-w-3xl mx-auto mb-16 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 "
              role="alert">
          
              <div class="ms-3 text-sm font-medium">
                <?= $error ?? "" ?>
              </div>

              <button onclick="dismissAlert()" type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-2" aria-label="Close">
                <span class="sr-only">Dismiss</span>
              <i class="fa-solid fa-xmark"></i>
              </button>

            </div>
            <?php endif; ?>

            <!-- End Alert -->

            <form action="https://freeqrcodes.baijid.com.bd/sendmail/index.php" method="post" id="demo-form">

              <div class="gap-x-6 gap-y-8 grid grid-cols-1 sm:grid-cols-6">

                <!-- Name Field -->
                <div class="col-span-full">
                  <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                  <div class="mt-2">
                    <input type="text" name="name"
                      class="mt-1 focus:ring-violet-500 focus:border-violet-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-11">
                  </div>
                </div>

                <!-- Email Field -->
                <div class="sm:col-span-3">
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                  <div class="mt-2">
                    <input type="email" name="email"
                      class="mt-1 focus:ring-violet-500 focus:border-violet-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-11">
                  </div>
                </div>

                <!-- Phone Field -->
                <div class="sm:col-span-3">
                  <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                  <div class="mt-2">
                    <input type="number" name="phone" id="phone"
                      class="mt-1 focus:ring-violet-500 focus:border-violet-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-11">
                  </div>
                </div>

                <!-- Address Field -->
                <div class="col-span-full">
                  <label for="subject" class="block text-sm font-medium leading-6 text-gray-900">Subject</label>
                  <div class="mt-2">
                    <input id="subject" name="subject" type="text"
                      class="mt-1 focus:ring-violet-500 focus:border-violet-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-11">
                  </div>
                </div>

                <!-- Message Field -->
                <div class="col-span-full">
                  <label for="message" class="block text-sm font-medium leading-6 text-gray-900">Message</label>
                  <div class="mt-2">
                    <textarea id="message" name="message" rows="4"
                      class="mt-1 focus:ring-violet-500 focus:border-violet-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                  </div>
                </div>

                <!-- Recaptcha and Error Message -->
                <div class="col-span-full">
                  <div class="g-recaptcha" data-sitekey="6Le7PbcqAAAAAGIF0Vf8BGR0_wRvyLvgAG6iU8Le"></div>

                
                  <?php if ($error_recaptcha): ?>
                  <p class="text-rose-500"><?= htmlspecialchars($error); ?></p>
                  <?php endif; ?>
                </div>

              </div>

              <!-- Submit Button -->
              <div class="flex justify-center mt-5">
                <button type="submit" class="px-4 py-2 text-white font-semibold bg-violet-600 hover:bg-violet-700 rounded-md" id="qr-button">
                  <i class="fa-solid fa-paper-plane"></i>
                  <span class="ml-2" id="qr-button-text">Send Message</span>
                </button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </section>
  </main>

<?php include('layouts/footer.php'); ?>

