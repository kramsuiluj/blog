<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-12 rounded-xl border border-gray-200">
            <h1 class="text-center text-lg font-bold">Register</h1>
            <form action="/register" method="POST">

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        id="username"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >
                </div>

            </form>
        </main>
    </section>
</x-layout>
