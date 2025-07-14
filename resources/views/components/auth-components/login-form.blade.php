 <!-- Login Form -->
 <div id="login-form" class="p-8 bg-white rounded shadow-lg w-96 md:w-1/2 mx-auto mt-10 border">
     <h1 class="text-2xl font-semibold mb-6 text-center">Login</h1>
     <form id="login" action={{ route('auth.login') }} method="POST">
         @csrf
         @if (session('error'))
             <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                 <strong class="font-bold">Error!</strong>
                 <span class="block sm:inline">{{ session('error') }}</span>
             </div>
         @endif
         @if (session('success'))
             <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                 role="alert">
                 <strong class="font-bold">Success!</strong>
                 <span class="block sm:inline">{{ session('success') }}</span>
             </div>
         @endif
         <div class="mb-4">
             <label for="email" class="block text-sm font-medium mb-1">Email</label>
             <input type="email" id="email" name="email"
                 class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                 placeholder="Enter your email" required value="{{ old('email') }}">
             @error('email')
                 <p class="text-red-500 text-xs italic">{{ $message }}</p>
             @enderror
         </div>
         <div class="mb-4">
             <label for="password" class="block text-sm font-medium mb-1">Password</label>
             <input type="password" id="password" name="password"
                 class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                 placeholder="Enter your password" required>
             @error('password')
                 <p class="text-red-500 text-xs italic">{{ $message }}</p>
             @enderror
         </div>

         <button type="submit"
             class="bg-[#0087b8] hover:bg-[#006b91] hover:bg-[position:right_center] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-11 py-3 w-full">
             Login
         </button>


     </form>
     <div class="mt-4 text-center">
         <a href={{ route('forgot-password') }} id="forgot-password"
             class="text-sm text-[#AE2333] hover:underline">Forgot Password?</a> |
         <a href={{ route('register') }} id="create-account"
             class="text-sm text-[#2797CD] hover:underline">Create Account</a>
     </div>
 </div>
