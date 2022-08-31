<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-12 rounded-xl border border-gray-200">
            <h1 class="text-center text-lg font-bold">Login</h1>

            <form action="/sessions" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="border border-gray-400 p-2 w-full"
                        value="{{ old('email') }}"
                        required
                    >

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Login
                    </button>
                </div>

                {{--                @if ($errors->any())--}}
                {{--                    <ul>--}}
                {{--                        @foreach($errors->all() as $error)--}}
                {{--                            <li class="text-red-500 text-xs">{{ $error }}</li>--}}
                {{--                        @endforeach--}}
                {{--                    </ul>--}}
                {{--                @endif--}}

            </form>
        </main>
    </section>
</x-layout>
