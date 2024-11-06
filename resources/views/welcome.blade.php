<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            ::after,
            ::before {
                --tw-content: ''
            }

            :host,
            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            [type=button],
            [type=reset],
            [type=submit],
            button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dd,
            dl,
            figure,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            menu,
            ol,
            ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            [role=button],
            button {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            audio,
            canvas,
            embed,
            iframe,
            img,
            object,
            svg,
            video {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden] {
                display: none
            }

            *,
            ::before,
            ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0px
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-mx-3 {
                margin-left: -0.75rem;
                margin-right: -0.75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .grid {
                display: grid
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-full {
                width: 100%
            }

            .w-\[calc\(100\%\+8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .gap-2 {
                gap: 0.5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: 0.5rem
            }

            .rounded-md {
                border-radius: 0.375rem
            }

            .rounded-sm {
                border-radius: 0.125rem
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: rgb(255 45 32 / 0.1)
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #FF2D20
            }

            .object-cover {
                object-fit: cover
            }

            .object-top {
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem
            }

            .pt-3 {
                padding-top: 0.75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
            }

            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: 0.875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-semibold {
                font-weight: 600
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .underline {
                -webkit-text-decoration-line: underline;
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms
            }

            .duration-300 {
                transition-duration: 300ms
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .hover\:text-black\/70:hover {
                color: rgb(0 0 0 / 0.7)
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / 0.2)
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            @media (min-width: 640px) {
                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0px
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity))
                }
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-white\/50 {
                    color: rgb(255 255 255 / 0.5)
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:text-white\/70 {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:hover\:text-white\/80:hover {
                    color: rgb(255 255 255 / 0.8)
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
                }
            }
        </style>
    @endif
</head>

<body class="relative bg-[#202239] text-white font-sans">
    <header class="fixed top-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center p-4 bg-white/10 rounded-[50px] mt-3 md:px-8">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <span class="text-orange-400">fin</span>Track
            </div>

            <!-- Hamburger Menu Icon -->
            <button id="menu-btn" class="md:hidden focus:outline-none" onclick="toggleMenu()">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>

            <!-- Navigation Menu and Buttons for Desktop -->
            <div id="menu"
                class="hidden h-1/2 fixed inset-20 bg-black bg-opacity-80 md:bg-opacity-0 md:relative md:flex md:inset-auto md:bg-transparent flex-col md:flex-row md:items-center md:space-x-6 p-8 md:p-0">
                <nav class="flex flex-col md:flex-row md:items-center md:space-x-6 space-y-4 md:space-y-0 text-center">
                    <a href="#home" class="text-white hover:text-blue-300">Home</a>
                    <a href="#about" class="text-white hover:text-blue-300">About</a>
                    <a href="#howitworks" class="text-white hover:text-blue-300">How it works</a>
                    <a href="#team" class="text-white hover:text-blue-300">Our team</a>
                </nav>

                <!-- Buttons (will also be in the dropdown on mobile) -->
                <div
                    class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4 md:mt-0 text-center max-lg:w-full">
                    <button
                        class="w-[130px] h-[45.25px] bg-[#d9d9d9]/0 rounded-[35px] border-2 border-[#5a98e8] max-lg:w-full">Login</button>
                    <button
                        class="w-[130px] h-[45.25px] bg-[#5a98e8] rounded-[59px] border border-[#202239] max-lg:w-full"">Register</button>
                </div>
            </div>
        </div>

    </header>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }
    </script>




    <!-- Hero Section -->
    <section class="px-8 max-lg:px-6 pt-12 max-lg:pt-20" id="home">
        <div class="m-6 max-lg:m-0 container mx-auto flex justify-center items-center">
            <h1
                class="text-[12px] md:text-3xl font-semibold mb-4 flex items-center mt-12 max-lg:mt-4 text-center space-x-2">
                <span>Atur keuangan organisasimu dengan</span>
                <span class="text-orange-400">fin</span>Track
            </h1>

        </div>
        <div
            class=" md:h-[450px] max-lg:py-8 bg-white bg-opacity-10 rounded-[20px] container mx-auto flex justify-between items-center px-7 max-lg:px-4 ">
            <div class="md:w-1/2 max-lg:space-y-4 max-lg:w-full">
                <p class="text-[#ffae4d] text-xl max-lg:text-sm font-semibold">
                    Semua jadi mudah hanya dengan,
                </p>
                <h1 class="text-[90px] font-bold font-['Poppins'] max-lg:text-5xl leading-[132.06px] ">
                    <span class="text-orange-400">fin</span>Track
                </h1>
                <p class="text-lg mb-6 max-lg:text-sm text-balance">finTrack memudahkan organisasi dalam mencatat
                    transaksi, mengelola anggaran, dan membuat laporan keuangan terperinci dengan antarmuka yang ramah
                    pengguna dan efisien</p>
                <button
                    class="w-[420px] max-lg:w-44 h-14 max-lg:h-10 max-lg:textsm bg-[#d9d9d9]/0 rounded-[35px] border-2 border-[#5a98e8] hover:bg-blue-500 hover:text-white">Get
                    Started</button>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex max-lg:hidden justify-center">
                <img src="{{ asset('images/home-character.png') }}" alt="Illustration">
            </div>
        </div>

    </section>

    <!-- About Section -->
    <section class="py-20 max-lg:py-10 px-8 max-lg:px-6" id="about">
        <div class="container mx-auto md:px-6">
            <div class="relative md:inline-flex md:flex-col items-center max-lg:text-center  mb-4">
                <h2 class="text-2xl font-bold ">
                    About <span class="text-orange-400">fin</span>Track?
                </h2>
                <div class="w-full mt-1 h-2 bg-white rounded-full"></div>
            </div>
            <div
                class=" md:h-[305px] max-lg:py-8 bg-white/10 rounded-[20px] container mx-auto flex justify-between items-center px-7 ">
                <div class="md:w-1/2 mt-10 max-lg:hidden md:mt-0 flex justify-center">
                    <img src="{{ asset('images/Team-pana.png') }}" alt="Illustration">
                    <!-- Ganti URL gambar dengan URL gambar yang sesuai -->
                </div>
                <div>

                    <p class="md:w-[667px] text-left max-lg:text-justify text-xl max-lg:text-sm font-medium space-x-1 ">
                        <span>Fintrack adalah platform praktis
                            buat bantuin</span><span class="text-[#EC8305]">komunitas</span><span
                            style="text-white text-2xl font-semibold font-['Poppins']"> atau </span><span
                            class="text-[#EC8305]">komunitas</span><span> dalam mencatat dan memantau transaksi keuangan
                            dengan mudah dan teratur. Fintrack juga bantu catat semua jenis laporan keuangan lengkap
                            dengan bukti transaksi fisik biar semuanya transparan dan gampang dilacak.</span>
                    </p>
                </div>
            </div>

            <div
                class="flex max-lg:flex-col max-lg:mt-10 items-center justify-between max-lg:justify-center space-y-6 md:space-y-0  text-white md:ml-20 font-semibold">
                <!-- Kolom Kiri: Daftar Fitur -->
                <div class="space-y-6 md:w-1/2 max-lg:w-full">
                    <!-- Fitur 1 -->
                    <div class="flex items-start">
                        <div
                            class="bg-gradient-to-r from-[#2c506699] to-[#d4d4d499] p-4 flex items-center md:w-[600px] w-full h-[102px] rounded-[17px] shadow-lg  md:mr-12">
                            <img src="{{ asset('images/Graph square.svg') }}"alt="Icon 1"
                                class="md:w-[59px] h-[59px]  mr-3">
                            <p class="text-white  max-lg:text-sm">Rekapitulasi pendapatan, pengeluaran, dan saldo
                                otomatis.</p>
                        </div>
                        <div class="text-4xl font-bold text-gray-300 opacity-50 pt-8 ml-10 max-lg:hidden">1</div>
                    </div>

                    <!-- Fitur 2 -->
                    <div class="flex items-start">
                        <div class="text-4xl font-bold text-gray-300 opacity-50 pt-8 mr-10 max-lg:hidden">2</div>
                        <div
                            class="bg-gradient-to-r from-[#2c506699] to-[#d4d4d499] p-4 flex items-center md:w-[600px] h-[102px] rounded-[17px] shadow-lg md:ml-12">
                            <img src="{{ asset('images/Report.svg') }}" alt="Icon 2" class=" mr-3 w-[59px] h-[59px] ">
                            <p class="text-white max-lg:text-sm">Laporan kas mingguan dengan status pembayaran tiap
                                anggota.</p>
                        </div>
                    </div>

                    <!-- Fitur 3 -->
                    <div class="flex items-start">
                        <div
                            class="bg-gradient-to-r from-[#2c506699] to-[#d4d4d499] p-4 flex items-center md:w-[600px] w-full h-[102px] rounded-[17px] shadow-lg md:mr-12">
                            <img src="{{ asset('images/Fi Br Time Check.svg') }}" alt="Icon 3"
                                class="w-[59px] h-[59px]  mr-3">
                            <p class="text-white max-lg:text-sm ">Akses kapan saja untuk laporan keuangan yang rapi dan
                                terorganisir.
                            </p>
                        </div>
                        <div class="text-4xl font-bold text-gray-300 opacity-50 pt-8 ml-10 max-lg:hidden">3</div>
                    </div>
                </div>

                <!-- Kolom Kanan: Ilustrasi Besar -->
                <div class="flex justify-end md:w-1/2 max-lg:hidden w-full items-center">
                    <div class="block">
                        <div class="flex justify-end relative top-20 right-16">
                            <div class="">
                                <h2 class="text-2xl font-bold ">
                                    Fitur <span class="text-orange-400">fin</span>Track?
                                </h2>
                                <div class=" text-right justify-items-end mt-1 h-2 bg-white rounded-full"></div>
                            </div>
                        </div>
                        <img src="{{ asset('images/features.png') }}" class="" alt="Illustration">
                    </div>
                </div>
            </div>
    </section>

    <!--how section -->
    <section class="py-20 pr-8 max-lg:pr-6 max-lg:py-10 max-lg:px-6" id="howitworks">
        <div class="min-h-screen text-white max-lg:text-center">
            <!-- Header -->
            <div class="text-center mb-8 flex  justify-center items-center">
                <div class="relative inline-flex flex-col items-center mb-4 ">
                    <h1 class="text-2xl font-bold">How <span class="text-[#f6a935]">fin</span>Track works</h1>
                    <div class="w-full mt-1 h-2 bg-white rounded-full"></div>
                </div>
            </div>


            <!-- Konten Utama -->
            <div class="flex gap-4 max-md:block max-md:space-y-8">
                <!-- Sisi Kiri: Ilustrasi Dashboard -->
                <div class="w-full md:w-2/3 flex justify-center">
                    <img src="{{ asset('images/mockup how.png') }}" alt="Dashboard Illustration" class=" mr-48px">
                </div>

                <!-- Sisi Kanan: Deskripsi Fitur -->
                <div class="w-full md:w-3/4 space-y-12 mr-12">
                    <!-- Bagian Laporan Keuangan -->
                    <div class="max-lg:flex-col">
                        <div
                            class="relative inline-flex flex-col items-center md:ml-72 mb-4 max-lg:text-center max-lg:flex-col">
                            <h2 class="text-xl font-semibold text-gray-300 ">Laporan keuangan</h2>
                            <div class="w-full mt-0 h-2 bg-orange-400 rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-br-none shadow-md text-right max-lg:flex-col max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Akses Menu Laporan Keuangan</h3>
                                <p class="text-xs text-gray-200">Pilih menu Laporan Keuangan di sidebar untuk diarahkan
                                    ke halaman laporan keuangan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-bl-none shadow-md max-lg:flex-col max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Menambah Nama Laporan Keuangan</h3>
                                <p class="text-xs text-gray-200">Di halaman ini, Anda bisa menambah banyak nama laporan
                                    keuangan sesuai kebutuhan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tr-none shadow-md text-right max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Mengakses Detail Laporan Keuangan</h3>
                                <p class="text-xs text-gray-200">Klik card laporan keuangan yang sudah dibuat untuk
                                    masuk ke detail laporan keuangan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tl-none shadow-md max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Ringkasan Pemasukan, Pengeluaran, dan Saldo</h3>
                                <p class="text-xs text-gray-200">Anda dapat melihat ringkasan data pemasukan,
                                    pengeluaran, serta sisa saldo.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Uang Kas -->
                    <div>
                        <div class="relative inline-flex flex-col items-center md:ml-80 mb-4 ">
                            <h2 class="text-xl font-semibold text-gray-300 ">Uang Kas</h2>
                            <div class="w-full mt-0 h-2 bg-orange-400 rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-br-none shadow-md text-right max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2 text-11px">Akses Menu Uang Kas</h3>
                                <p class="text-xs text-gray-200">Pilih menu Uang Kas di sidebar. Ini akan membawa Anda
                                    ke halaman yang serupa dengan menu laporan keuangan, khusus untuk laporan keuangan
                                    kas.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-bl-none shadow-md max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Menambah Laporan Keuangan Kas</h3>
                                <p class="text-xs text-gray-200">Anda dapat menambahkan beberapa nama laporan keuangan
                                    kas beserta jumlah uang kas mingguan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tr-none shadow-md text-right max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Mengakses Detail Laporan Kas</h3>
                                <p class="text-xs text-gray-200">Setelah berhasil menambahkan laporan, akan muncul card
                                    dengan nama yang telah dibuat. Klik card ini untuk masuk ke halaman data keuangan
                                    kas.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tl-none shadow-md text justify max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Status Pembayaran</h3>
                                <p class="text-xs text-gray-200">Jika checkbox di minggu ke-4 sudah ditandai, status
                                    pembayaran otomatis berubah menjadi Lunas. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Team Section -->
    <section class="py-20 px-8 max-lg:px-6" id="team">
        <div class="">
            <!-- Konten Utama -->
            <div class="w-full">
                <!-- Judul Bagian -->
                <div class="text-center mb-12">
                    <div class="relative inline-flex flex-col items-center ml-8 mb-4">
                        <h2 class="text-2xl font-bold max-lg:text-center">
                            Meet the <span class="text-orange-400">Team</span>
                        </h2>
                        <div class="w-full mt-1 h-2 bg-white rounded-full"></div>
                    </div>

                </div>

                <!-- Konten Utama: Card Tim -->
                <div
                    class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-8 ">
                    <!-- Card Tim 1 -->
                    <div class="bg-[#3c4a60] p-6 rounded-xl  flex items-center space-x-4 shadow-lg max-lg:flex-col ">
                        <div class="md:w-1/2 mt-10 md:mt-0  w-248 h-231 max-lg:mb-2">
                            <img src="{{ asset('images/alif eca.png') }}" alt="Illustration"
                                class="w-[195px] h-[231px] rounded-xl">
                        </div>
                        <div class="text-left max-lg:pt-2 max-lg:text-center">
                            <h3 class="text-lg font-semibold text-white">Alif Essa Nurcahyani</h3>
                            <p class="text-sm text-blue-300">alifessanurcahyani@gmail.com</p>
                            <p class="text-sm text-gray-300">Front-End Developer</p>
                            <p class="text-sm text-gray-300">S1 Informatika</p>
                        </div>
                    </div>

                    <!-- Card Tim 2 -->
                    <div class="bg-[#3c4a60] p-6 rounded-xl  flex items-center space-x-4 shadow-lg max-lg:flex-col">
                        <div class="md:w-1/2 mt-10 md:mt-0  w-248 h-231">
                            <img src="{{ asset('images/bila.jpg') }}" alt="Illustration"
                                class="w-[190px] h-[231px] rounded-xl">
                        </div>
                        <div class="text-left max-lg:pt-2 max-lg:text-center">
                            <h3 class="text-lg font-semibold text-white">Fathiya Salsabila</h3>
                            <p class="text-sm text-blue-300">salsabilafathiya7@gmail.com</p>
                            <p class="text-sm text-gray-300">Mobile development enthusiast</p>
                            <p class="text-sm text-gray-300">S1 Informatika</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
    <section>
        <!-- Kotak Footer dengan Copyright -->
        <div class="bg-[#3c4a60] w-full  text-center p-10 mt-12 mb-0 ">
            <p class="text-xl font-semibold text-gray-400 max-lg:text-sm">
                © Copyright powered by <span class="text-orange-400">fin</span>Track
            </p>
        </div>
    </section>

</body>

</html>
