<html>
<head>
    <title>Test</title>
    {{ stylesheet() }}
</head>
<body>

<header>
    <div class="container">

        <div class="row">
            <div class="three columns">
                <a href="index.php"><img src="http://placehold.it/200x60"></a>
            </div>
            <div class="nine columns">
                <nav>
                    <ul>
                        <li><a href="services/adoption-foster-care.php">Adopt and Foster</a></li>
                        <li><a href="services/">Services</a></li>
                        <li><a href="culinary-academy/">Culinary Academy</a></li>
                        <li><a href="blog/">Blog</a></li>
                        <li><a href="get-involved/">Get Involved</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</header>
@yield('content')

{{ script() }}
</body>
</html>