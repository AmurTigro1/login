@extends('templates.base')

@section('content')

<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-6">Login</h1>
        <form hx-trigger="submit" hx-post="/api/login" hx-target="#main-content" hx-swap='innerHTML' class="flex flex-col">
            @csrf
            <div>
                <label for="email" class="block">Email:</label>
                <input type="text" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="password" class="block">Password:</label>
                <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Login</button>
        </form>
    </div>
    <div id="error-message"></div>
</div>
