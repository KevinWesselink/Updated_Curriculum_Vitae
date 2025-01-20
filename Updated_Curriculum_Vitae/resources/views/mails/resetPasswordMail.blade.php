<!DOCTYPE html>
<html>
<head>
    <title>{{ __('reset_password_mail.subject') }}</title>
    <style>
        /* Inlined Tailwind CSS (gebruik tools zoals Maizzle voor automatisch inline-styling) */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-green-500 text-white text-center py-6">
            <h1 class="text-2xl font-bold">{{ __('reset_password_mail.greeting') }}</h1>
        </div>

        <!-- Body -->
        <div class="p-6 text-gray-800">
            <p class="mb-4">{{ __('reset_password_mail.message') }}</p>

            <!-- Button -->
            <div class="text-center">
                <a href="{{ $resetUrl }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded inline-block">
                    {{ __('reset_password_mail.button') }}
                </a>
            </div>

            <p class="mt-6 text-center">{{ __('reset_password_mail.salutation') }}</p>
        </div>

        <!-- Footer -->
        <div class="bg-gray-200 text-center text-sm text-gray-600 py-4">
            <p>{{ __('reset_password_mail.subcopy') }}</p>
            <p class="mt-2">{{ __('reset_password_mail.footer') }}</p>
        </div>
    </div>
</body>
</html>
