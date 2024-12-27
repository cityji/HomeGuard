<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        #form-wrapper {
        height: auto;
        transition: height 0.5s ease-in-out;
        }
        </style>
    <?php
include './anchor.php';
?>

<body>
    <?php
require_once './components/Nav.php';
?>

<!-- login screen -->
<div class="flex justify-center items-center h-screen bg-gray-50">
<div>
    <div class="relative w-96 bg-white ring-8 ring-gray-100 border border-gray-200 rounded-xl overflow-hidden">
      <!-- Tabs -->
      <div class="flex border-b">
        <button id="tab-login" class="flex-1 py-5 text-center font-medium border-b border-blue-500 text-blue-500">
          Login
        </button>
        <button id="tab-register" class="flex-1 py-5 text-center font-medium border-b hover:border-gray-300">
          Register
        </button>
      </div>

      <!-- Expanding Forms -->
      <div id="form-wrapper" class="transition-all duration-500 ease-in-out">
        <!-- Login Form -->
        <div id="login-form" class="space-y-4 p-10">
          <div>
            <label for="email" class="block text-xs font-medium text-gray-700 uppercase">Email</label>
            <input type="email" id="login-email" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Email">
          </div>
          <div>
            <label for="password" class="block text-xs font-medium text-gray-700 uppercase">Password</label>
            <div class="relative">
              <input type="password" id="login-password" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Password">
              <button type="button" id="login-toggle-password" class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                <!-- Eye Icon -->
                <!-- Same SVG as before -->
              </button>
            </div>
          </div>
          <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600">Login</button>
        </div>

        <!-- Register Form -->
        <div id="register-form" class="space-y-4 p-10 hidden">
          <div>
            <label for="email" class="block text-xs uppercase font-medium text-gray-700">Email</label>
            <input type="email" id="register-email" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Email">
          </div>
          <div>
            <label for="password" class="block text-xs uppercase font-medium text-gray-700">Password</label>
            <input type="password" id="register-password" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Password">
            <div id="password-strength" class="mt-2 text-sm"></div>
          </div>
          <div>
            <label for="confirm-password" class="block text-xs uppercase font-medium text-gray-700">Confirm Password</label>
            <input type="password" id="confirm-password" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Confirm Password">
            <div id="password-match" class="mt-2 text-sm"></div>
          </div>
          <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600">Register</button>
        </div>
      </div>
    </div>



   <div class="text-center mt-10">
    <p class="text-xs uppercase mb-5 text-gray-400">Follow us on</p>
    <div class="space-x-2 text-xl text-gray-500">
      <a href="https://twitter.com/pixellionmm" target="_blank"><i class='bx bxl-twitter'></i></a>
      <a href="https://www.facebook.com/PixellionCreative/" target="_blank"><i class='bx bxl-linkedin'></i></a>
      <a href="https://www.linkedin.com/company/pixellion-creative" target="_blank"><i class='bx bxl-facebook'></i></a>
    </div>
  </div>
    </div>
</div>
</div>

</body>
<script>
    document.addEventListener("DOMContentLoaded", () => {
  const loginTab = document.getElementById("tab-login");
  const registerTab = document.getElementById("tab-register");
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");
  const formWrapper = document.getElementById("form-wrapper");

  loginTab.addEventListener("click", () => {
    loginTab.classList.add("border-blue-500", "text-blue-500");
    registerTab.classList.remove("border-blue-500", "text-blue-500");
    loginForm.classList.remove("hidden");
    registerForm.classList.add("hidden");
    formWrapper.style.height = `${loginForm.offsetHeight}px`; // Smooth transition to login form
  });

  registerTab.addEventListener("click", () => {
    registerTab.classList.add("border-blue-500", "text-blue-500");
    loginTab.classList.remove("border-blue-500", "text-blue-500");
    registerForm.classList.remove("hidden");
    loginForm.classList.add("hidden");
    formWrapper.style.height = `${registerForm.offsetHeight}px`; // Smooth transition to register form
  });

  // Set initial height to login form
  formWrapper.style.height = `${loginForm.offsetHeight}px`;
});


</script>

</html>