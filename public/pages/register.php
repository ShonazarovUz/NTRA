<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('your-image-url-here.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* Optional: Add a dark overlay to make the form stand out more */
    .overlay {
      background-color: rgba(0, 0, 0, 0.5);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
  </style>
</head>

<body class="flex font-sans items-center justify-center h-screen relative">

  <!-- Optional: Overlay -->
  <div class="overlay"></div>

  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-md w-full relative z-10">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-300 text-center mb-6">Register</h1>
    <form action="/ads/create" method="post" class="space-y-4">

      <!-- Username Field -->
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Username</label>
        <input id="username" name="username"
          class="mt-1 block w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
          type="text" placeholder="Username" required />
      </div>

      <!-- Position Field -->
      <div>
        <label for="position" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Position</label>
        <input id="position" name="position"
          class="mt-1 block w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
          type="text" placeholder="Position" required />
      </div>

      <!-- Gender Field -->
      <div>
        <label for="gender" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gender</label>
        <select id="gender" name="gender"
          class="mt-1 block w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>

      <!-- Phone Field -->
      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
        <input id="phone" name="phone"
          class="mt-1 block w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
          type="tel" placeholder="Phone" required />
      </div>

      <!-- Email Field -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
        <input id="email" name="email"
          class="mt-1 block w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
          type="email" placeholder="Email" required />
      </div>

      <!-- Password Field -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
        <input id="password" name="password"
          class="mt-1 block w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
          type="password" placeholder="Password" required />
      </div>

      <!-- Register Button -->
      <button type="submit"
        class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Register
      </button>
    </form>

    <div class="text-center mt-4 text-sm text-gray-600 dark:text-gray-400">
      <p>Already have an account? <a href="/login" class="text-blue-500 hover:text-blue-600">Log in</a></p>
    </div>
  </div>
</body>

</html>
