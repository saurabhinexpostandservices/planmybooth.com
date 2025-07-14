<x-layout.public>
    <div class="container mx-auto flex justify-center min-h-screen p-4">
        <div class="w-full max-w-md">
            <div class="bg-[#d3e4ec] shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold text-center mb-4">{{ __('Reset Password') }}</h2>
              
                <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
                    @csrf

                    <!-- Token hidden input -->
                    <input type="hidden" name="token" value="{{ $token }}">

                    <!-- Email input -->
                    <div>
                        <label for="email"
                            class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-300 @error('email') border-red-500 @enderror"
                            name="email" value="{{ $email }}" required autofocus>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div>
                        <label for="password"
                            class="block text-sm font-medium text-gray-700">{{ __('New Password') }}</label>
                        <input id="password" type="password"
                            class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-300 @error('password') border-red-500 @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password input -->
                    <div>
                        <label for="password-confirm"
                            class="block text-sm font-medium text-gray-700">{{ __('Confirm New Password') }}</label>
                        <input id="password-confirm" type="password"
                            class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-300"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-gradient-to-r from-[#314755] via-[#26a0da] to-[#314755] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-11 py-3">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</x-layout.public>
