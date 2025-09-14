{{-- resources/views/auth/custom-login.blade.php --}}
<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 p-6 bg-gray-100 shadow rounded">
        <h2 class="text-2xl font-bold mb-4">Sign in to your account</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-danger p-3">Login</button>
        </form>
    </div>
</x-guest-layout>
