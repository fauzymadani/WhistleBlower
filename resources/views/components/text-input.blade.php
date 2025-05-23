@props(['disabled' => false])

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => '
            border-gray-300 dark:border-gray-700
            bg-white dark:bg-[#1e1e1e]
            text-gray-900 dark:text-gray-100
            placeholder-gray-400 dark:placeholder-gray-500
            focus:border-indigo-500 dark:focus:border-indigo-400
            focus:ring-indigo-500 dark:focus:ring-indigo-400
            rounded-md shadow-sm dark:shadow-none
            transition duration-150 ease-in-out
        '
    ]) !!}
/>

