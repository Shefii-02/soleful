<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Soleful</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Ensure the search bar is positioned correctly */
        .search {
            position: relative;
            width: 40px;
            height: 40px;
       
            box-shadow: 0 4px 24px hsla(222, 68%, 12%, 0.1);
            border-radius: 4rem;
            padding: 10px;
            overflow: hidden;
            transition: width 0.5s cubic-bezier(0.9, 0, 0.3, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Input styling */
        .search__input {
            border: none;
            outline: none;
            width: 100%;
            /* Full width within the container */
            height: 100%;
            border-radius: 4rem;
            padding-left: 14px;
            font-family: var(--body-font);
            font-size: var(--small-font-size);
            font-weight: 500;
            opacity: 0;
            pointer-events: none;
            transition: opacity 1.5s;
        }

        /* Search button styling */
        .search__button {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 10px;
            margin: auto;
            display: grid;
            place-items: center;
            cursor: pointer;
            transition: transform 0.6s cubic-bezier(0.9, 0, 0.3, 0.9);
        }

        .search__icon,
        .search__close {
            color: var(--white-color);
            font-size: 1.5rem;
            position: absolute;
            transition: opacity 0.5s cubic-bezier(0.9, 0, 0.3, 0.9);
        }

        .search__close {
            opacity: 0;
            /* Hidden by default */
        }

        /* When search bar expands */
        .show-search {
            width: 100%;
        }

        .show-search .search__input {
            opacity: 1;
            pointer-events: initial;
        }

        .show-search .search__button {
            transform: rotate(90deg);
        }

        .show-search .search__icon {
            opacity: 0;
        }

        .show-search .search__close {
            opacity: 1;
        }

        /*=============== BREAKPOINTS ===============*/
        @media screen and (min-width: 576px) {
            .show-search {
                width: 450px;
                /* Larger width for medium screens */
            }
        }
    </style>
    @stack('header')
</head>

<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <!--=======================Javascript============================-->
    <!--=== All Vendor Js ===-->
    <script src="/assets/js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="/assets/js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="/assets/js/active.js"></script>
    <script>
        const toggleSearch = (search, button) => {
            const searchBar = document.getElementById(search),
                searchButton = document.getElementById(button),
                closeButton = searchBar.querySelector('.search__close'); // Close button

            searchButton.addEventListener('click', () => {
                // Toggle the show-search class to expand the search bar
                searchBar.classList.toggle('show-search');
            });

            closeButton.addEventListener('click', () => {
                // Close the search bar if close button is clicked
                searchBar.classList.remove('show-search');
            });
        };

        toggleSearch('search-bar', 'search-button');
    </script>
</body>

@stack('footer')
</html>
