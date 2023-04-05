<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanders Hauling</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
     tailwind.config = {
      theme: {
        extend: {
          colors: {
            'sanders-orange': '#E65236',
            'sanders-blue': '#0C1E44',
          }
        }
      }
    }
  </script>
</head>
<body>

  <div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Sanders Hauling</span>
            <img class="h-16 w-auto" src="./assets/sander-hauling-main-logo.svg" alt="Sanders Hauling LLC">
          </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="tel:8032093896" class="rounded-md bg-sanders-orange px-5 py-3.5 text-sm font-semibold text-white flex items-center shadow-sm hover:bg-sanders-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sanders-orange">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>

            Give Us A Call
          </a>
        </div>
      </nav>
    </header>

    <div class="relative isolate overflow-hidden pt-14 min-h-screen">
      <img src="./assets/bg-large.jpeg" alt="Sanders Hauling" class="absolute inset-0 -z-10 h-full w-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="relative mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="flex mb-8 justify-center">
          <div class="relative rounded-full font-bold px-3 py-1 text-sm leading-6 text-white ring-1 ring-white/30 bg-white bg-opacity-10">
            Serving York, Chester, and Lancaster Counties
          </div>
        </div>
        <div class="text-center px-10 sm:px-0">
          <h1 class="text-5xl font-bold tracking-tight text-white sm:text-6xl">Big loads, <span class="text-sanders-orange underline italic">big dreams</span>. Stay tuned for our new website launch!</h1>
          <p class="mt-6 text-lg leading-8 text-gray-200">Here at Sanders Hauling, we're hard at work creating a new online experience to help better serve our customers. In the meantime, gives a call at <a href="tel:8032093896" class="text-sanders-orange underline">803-209-3896</a> for all of your material hauling needs. Starting a new outdoor project? We deliver mulch, gravel, sand, topsoil, and much more right to your front door.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="tel:8032093896" class="rounded-md bg-sanders-orange px-5 py-3.5 text-sm font-semibold text-white shadow-sm hover:bg-sanders-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sanders-orange">Call Us Now</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
  </div>

</body>
</html>