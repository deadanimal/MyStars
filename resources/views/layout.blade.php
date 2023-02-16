<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Stars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <style>
        .table-wrapper .table {
            margin-bottom: 0
        }

        .table-wrapper:not(:last-child) {
            margin-bottom: 1.5rem
        }

        @media screen and (max-width: 1023px) {
            .table-wrapper {
                overflow-x: auto
            }
        }

        .b-table {
            transition: opacity 86ms ease-out
        }

        @media screen and (min-width: 769px),
        print {
            .b-table .table-mobile-sort {
                display: none
            }
        }

        .b-table .icon {
            transition: transform 150ms ease-out, opacity 86ms ease-out
        }

        .b-table .icon.is-desc {
            transform: rotate(180deg)
        }

        .b-table .icon.is-expanded {
            transform: rotate(90deg)
        }

        .b-table .table {
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0);
            border-radius: 4px;
            border-collapse: separate
        }

        .b-table .table th {
            font-weight: 600
        }

        .b-table .table th .th-wrap {
            display: flex;
            align-items: center
        }

        .b-table .table th .th-wrap .icon {
            margin-left: .5rem;
            margin-right: 0;
            font-size: 1rem
        }

        .b-table .table th .th-wrap.is-numeric {
            flex-direction: row-reverse;
            text-align: right
        }

        .b-table .table th .th-wrap.is-numeric .icon {
            margin-left: 0;
            margin-right: .5rem
        }

        .b-table .table th .th-wrap.is-centered {
            justify-content: center;
            text-align: center
        }

        .b-table .table th.is-current-sort {
            border-color: #7a7a7a;
            font-weight: 700
        }

        .b-table .table th.is-sortable:hover {
            border-color: #7a7a7a
        }

        .b-table .table th.is-sortable,
        .b-table .table th.is-sortable .th-wrap {
            cursor: pointer
        }

        .b-table .table th .multi-sort-cancel-icon {
            margin-left: 10px
        }

        .b-table .table th.is-sticky {
            position: -webkit-sticky;
            position: sticky;
            left: 0;
            z-index: 3 !important;
            background: #fff
        }

        .b-table .table tr.is-selected .checkbox input:checked+.check {
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3Cpath style='fill:hsl(171deg, 100%25, 41%25)' d='M 0.04038059,0.6267767 0.14644661,0.52071068 0.42928932,0.80355339 0.3232233,0.90961941 z M 0.21715729,0.80355339 0.85355339,0.16715729 0.95961941,0.2732233 0.3232233,0.90961941 z'%3E%3C/path%3E%3C/svg%3E") no-repeat center center
        }

        .b-table .table tr.is-selected .checkbox input+.check {
            border-color: #fff
        }

        .b-table .table tr.is-empty:hover {
            background-color: rgba(0, 0, 0, 0)
        }

        .b-table .table .is-chevron-cell,
        .b-table .table .is-checkbox-cell {
            width: 40px
        }

        .b-table .table .is-chevron-cell {
            vertical-align: middle
        }

        .b-table .table .is-checkbox-cell .checkbox {
            vertical-align: middle
        }

        .b-table .table .is-checkbox-cell .checkbox.b-checkbox {
            margin-right: 0
        }

        .b-table .table .is-checkbox-cell .checkbox .check {
            transition: none
        }

        .b-table .table tr.detail {
            box-shadow: inset 0 1px 3px #dbdbdb;
            background: #fafafa
        }

        .b-table .table tr.detail .detail-container {
            padding: 1rem
        }

        .b-table .table:focus {
            border-color: #485fc7;
            box-shadow: 0 0 0 .125em rgba(72, 95, 199, .25)
        }

        .b-table .table.is-bordered th.is-current-sort,
        .b-table .table.is-bordered th.is-sortable:hover {
            border-color: #dbdbdb;
            background: #f5f5f5
        }

        .b-table .table td.is-sticky {
            position: -webkit-sticky;
            position: sticky;
            left: 0;
            z-index: 1;
            background: #fff
        }

        .b-table .table td.is-image-cell .image {
            margin: 0 auto;
            width: 1.5rem;
            height: 1.5rem
        }

        .b-table .table td.is-progress-cell {
            min-width: 5rem;
            vertical-align: middle
        }

        .b-table .table-wrapper.has-sticky-header {
            height: 300px;
            overflow-y: auto
        }

        @media screen and (max-width: 768px) {
            .b-table .table-wrapper.has-sticky-header.has-mobile-cards {
                height: initial !important;
                overflow-y: initial !important
            }
        }

        .b-table .table-wrapper.has-sticky-header tr:first-child th {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 2;
            background: #fff
        }

        @media screen and (max-width: 768px) {
            .b-table .table-wrapper.has-mobile-cards thead {
                display: none
            }

            .b-table .table-wrapper.has-mobile-cards tfoot th {
                border: 0;
                display: inherit
            }

            .b-table .table-wrapper.has-mobile-cards tr {
                box-shadow: 0 2px 3px rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .1);
                max-width: 100%;
                position: relative;
                display: block
            }

            .b-table .table-wrapper.has-mobile-cards tr td {
                border: 0;
                display: inherit
            }

            .b-table .table-wrapper.has-mobile-cards tr td:last-child {
                border-bottom: 0
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(:last-child) {
                margin-bottom: 1rem
            }

            .b-table .table-wrapper.has-mobile-cards tr:not([class*=is-]) {
                background: inherit
            }

            .b-table .table-wrapper.has-mobile-cards tr:not([class*=is-]):hover {
                background-color: inherit
            }

            .b-table .table-wrapper.has-mobile-cards tr.detail {
                margin-top: -1rem
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td {
                display: flex;
                width: auto;
                justify-content: space-between;
                text-align: right;
                border-bottom: 1px solid #f5f5f5
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td:before {
                content: attr(data-label);
                font-weight: 600;
                padding-right: .5rem;
                text-align: left
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-image-cell .image {
                width: 6rem;
                height: 6rem;
                margin: 0 auto .5rem
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-progress-cell span,
            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-progress-cell progress {
                display: flex;
                width: 45%;
                align-items: center;
                align-self: center
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-checkbox-cell,
            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-image-cell {
                border-bottom: 0 !important
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-checkbox-cell:before,
            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-actions-cell:before {
                display: none
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-label-hidden:before,
            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-image-cell:before {
                display: none
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-label-hidden span {
                display: block;
                width: 100%
            }

            .b-table .table-wrapper.has-mobile-cards tr:not(.detail):not(.is-empty):not(.table-footer) td.is-label-hidden.is-progress-col progress {
                width: 100%
            }
        }

        .b-table .table-wrapper.is-card-list thead {
            display: none
        }

        .b-table .table-wrapper.is-card-list tfoot th {
            border: 0;
            display: inherit
        }

        .b-table .table-wrapper.is-card-list tr {
            box-shadow: 0 2px 3px rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .1);
            max-width: 100%;
            position: relative;
            display: block
        }

        .b-table .table-wrapper.is-card-list tr td {
            border: 0;
            display: inherit
        }

        .b-table .table-wrapper.is-card-list tr td:last-child {
            border-bottom: 0
        }

        .b-table .table-wrapper.is-card-list tr:not(:last-child) {
            margin-bottom: 1rem
        }

        .b-table .table-wrapper.is-card-list tr:not([class*=is-]) {
            background: inherit
        }

        .b-table .table-wrapper.is-card-list tr:not([class*=is-]):hover {
            background-color: inherit
        }

        .b-table .table-wrapper.is-card-list tr.detail {
            margin-top: -1rem
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td {
            display: flex;
            width: auto;
            justify-content: space-between;
            text-align: right;
            border-bottom: 1px solid #f5f5f5
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td:before {
            content: attr(data-label);
            font-weight: 600;
            padding-right: .5rem;
            text-align: left
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-image-cell .image {
            width: 6rem;
            height: 6rem;
            margin: 0 auto .5rem
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-progress-cell span,
        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-progress-cell progress {
            display: flex;
            width: 45%;
            align-items: center;
            align-self: center
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-checkbox-cell,
        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-image-cell {
            border-bottom: 0 !important
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-checkbox-cell:before,
        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-actions-cell:before {
            display: none
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-label-hidden:before,
        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-image-cell:before {
            display: none
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-label-hidden span {
            display: block;
            width: 100%
        }

        .b-table .table-wrapper.is-card-list tr:not(.detail):not(.is-empty):not(.table-footer) td.is-label-hidden.is-progress-col progress {
            width: 100%
        }

        .b-table.is-loading {
            position: relative;
            pointer-events: none;
            opacity: .5
        }

        .b-table.is-loading:after {
            animation: spinAround 500ms infinite linear;
            border: 2px solid #dbdbdb;
            border-radius: 9999px;
            border-right-color: rgba(0, 0, 0, 0);
            border-top-color: rgba(0, 0, 0, 0);
            content: "";
            display: block;
            height: 1em;
            position: relative;
            width: 1em;
            position: absolute;
            top: 4em;
            left: calc(50% - 2.5em);
            width: 5em;
            height: 5em;
            border-width: .25em
        }

        .b-table.has-pagination .table-wrapper {
            margin-bottom: 0
        }

        .b-table.has-pagination .table-wrapper+.notification {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }
    </style>
</head>

<body>

    @include('sweetalert::alert')


    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/logo.png"> 
                My Stars
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">

                @if (Auth::guest())
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon has-text-primary ">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </span>
                            <span>
                            Action
                            </span>
                        </a>

                        <div class="navbar-dropdown">
                            @if (Auth::user()->user_type == 'creator')
                                <a class="navbar-item" href="/briefs">
                                    Explore active briefs
                                </a>

                                <a class="navbar-item" href="/posts">
                                    View all of my posts
                                </a>
                            @endif

                            @if (Auth::user()->user_type == 'brand')
                                <a class="navbar-item" href="/briefs">
                                    List of my briefs
                                </a>

                                <a class="navbar-item" href="/briefs/create">
                                    Create a new brief
                                </a>
                            @endif
                        </div>
                    </div>
                @endif



            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        @if (Auth::guest())
                            <a class="button is-primary" href="/register">
                                <strong>Register</strong>
                            </a>
                            <a class="button is-info" href="/dashboard">
                                <strong>Dashboard</strong>
                            </a>
                        @else
                            <a class="button is-primary" href="/dashboard">
                                <strong>Dashboard</strong>
                            </a>
                            <form method="POST" action="/logout">
                                @csrf
                                <button class="button is-danger" type="submit"><strong>Log Out</strong></button>

                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>My Stars</strong> is developed with &#10084; by <a href="https://dcb.my">DCB Platform Ltd.</a>
                {{-- The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>. --}}
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });

        });
    </script>
</body>

</html>
