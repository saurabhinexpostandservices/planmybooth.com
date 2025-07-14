<x-layout.public>
    <div class="container mx-auto flex justify-center p-4">
        <div
            class="bg-white p-8 rounded-xl shadow-lg text-center w-11/12 max-w-md transform transition duration-500 hover:scale-105">
            <h1 class="text-3xl font-bold text-gray-800 mb-3">Email Verification</h1>
            <p class="text-gray-600 text-sm mb-5">You need to verify your email address before you can proceed.</p>

            @if (session()->has('status'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md">
                    {{ session('status') }}
                </div>
            @endif

            @if (session()->has('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('verification.resend') }}" method="POST" class="mb-4">
                @csrf
                <input type="email" name="email" value="{{ auth()->user()->email }}" readonly
                    class="w-full px-4 py-3 border border-gray-300 rounded-md bg-gray-200 text-center text-gray-700 mb-4" />
                <button type="submit"
                    class="bg-gradient-to-r from-[#314755] via-[#26a0da] to-[#314755] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-11 py-3 w-full">
                    Resend Verification Email
                </button>
            </form>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full text-white py-3 rounded-md shadow-md bg-[#AE2333] transition duration-300 ease-in-out">
                    Logout
                </button>
            </form>
        </div>
    </div>
</x-layout.public>
