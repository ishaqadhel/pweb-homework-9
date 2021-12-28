<?php
    require_once 'core/init.php';  
    require_once 'components/header.php';

    if (Input::get('submit'))
    {
        $student->create(array(
            'name' => Input::get('name'),
            'old_school' => Input::get('old_school'),
            'address' => Input::get('address')
        ));
    }

    error_reporting(0);
?>

<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
    <div class="relative max-w-xl mx-auto">
        <svg
            class="absolute left-full transform translate-x-1/2"
            width="404"
            height="404"
            fill="none"
            viewBox="0 0 404 404"
            aria-hidden="true"
        >
            <defs>
                <pattern
                    id="85737c0e-0916-41d7-917f-596dc7edfa27"
                    x="0"
                    y="0"
                    width="20"
                    height="20"
                    patternUnits="userSpaceOnUse"
                >
                    <rect
                        x="0"
                        y="0"
                        width="4"
                        height="4"
                        class="text-gray-200"
                        fill="currentColor"
                    />
                </pattern>
            </defs>
            <rect
                width="404"
                height="404"
                fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"
            />
        </svg>
        <svg
            class="absolute right-full bottom-0 transform -translate-x-1/2"
            width="404"
            height="404"
            fill="none"
            viewBox="0 0 404 404"
            aria-hidden="true"
        >
            <defs>
                <pattern
                    id="85737c0e-0916-41d7-917f-596dc7edfa27"
                    x="0"
                    y="0"
                    width="20"
                    height="20"
                    patternUnits="userSpaceOnUse"
                >
                    <rect
                        x="0"
                        y="0"
                        width="4"
                        height="4"
                        class="text-gray-200"
                        fill="currentColor"
                    />
                </pattern>
            </defs>
            <rect
                width="404"
                height="404"
                fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"
            />
        </svg>
        <div class="text-center">
            <h2
                class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"
            >
                Create Student
            </h2>
        </div>
        <div class="mt-12">
            <form
                action="/student-create.php"
                method="POST"
                class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8"
            >
                <div class="sm:col-span-2">
                    <label
                        for="name"
                        class="block text-sm font-medium text-gray-700"
                        >Name</label
                    >
                    <div class="mt-1">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            autocomplete="organization"
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                        />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label
                        for="old_school"
                        class="block text-sm font-medium text-gray-700"
                        >Old School</label
                    >
                    <div class="mt-1">
                        <input
                            id="old_school"
                            name="old_school"
                            type="text"
                            autocomplete="old_school"
                            required
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                        />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label
                        for="address"
                        class="block text-sm font-medium text-gray-700"
                        >Address</label
                    >
                    <div class="mt-1">
                        <textarea
                            id="address"
                            name="address"
                            rows="4"
                            required
                            class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"
                        ></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button
                        type="submit"
                        name="submit"
                        value="createStudent"
                        class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Submit
                    </button>
                </div>
                <div class="sm:col-span-2">
                    <a
                        href="/index.php"
                        class="w-full inline-flex text-indigo-600 items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Back To Home
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
