<? $out = $_GET['output'] ?? 0; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "styles/css/Normalize.css">
    <link rel="stylesheet" href="styles/css/styles.css">


    <title>Multiplication table.</title>
</head>
<body class = 'preload'>

    <!-- =[ PRELOADER ]= -->
    <div id = "preloader"></div>
    <script>
        let preloader = document.getElementById('preloader');

        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.classList.add('hidden');
                document.body.className = 'loaded';
            }, 1000);
        });
    </script>

    
    <!-- [ NAVBAR ] -->
    <nav>
        <button class = 'ico menu'>
            <svg class="icon">
                <use xlink:href="imgs/icons.svg#ico-menu"></use>
            </svg>
        </button>

        <h1 class = 'logo'>Multiplication table.</h1>

        <button class = 'ico enter'>
            <svg class="icon">
                <use xlink:href="imgs/icons.svg#ico-enter"></use>
            </svg>
            enter
        </button>
        
    </nav>


    <!-- [ MAIN ] -->
    <main>

        <!-- [ sidebar ] -->
        <aside>
            <ul>
                <li class="navlink" <? if( $out == 0 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=0">Show all</a></li>
                <li class="navlink" <? if( $out == 2 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=2">Only "2"</a></li>
                <li class="navlink" <? if( $out == 3 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=3">Only "3"</a></li>
                <li class="navlink" <? if( $out == 4 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=4">Only "4"</a></li>
                <li class="navlink" <? if( $out == 5 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=5">Only "5"</a></li>
                <li class="navlink" <? if( $out == 6 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=6">Only "6"</a></li>
                <li class="navlink" <? if( $out == 7 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=7">Only "7"</a></li>
                <li class="navlink" <? if( $out == 8 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=8">Only "8"</a></li>
                <li class="navlink" <? if( $out == 9 ) echo 'active' ?>><a href="index.php?layout=<?=$layout ?? 'block'?>&output=9">Only "9"</a></li>
            </ul>
        </aside>

        <!-- [ content ] -->
        <div class = 'content'>

            <? require('print_table.php'); ?>

        </div>

    </main>

    <!-- [ FOOTER ] -->
    <footer>
        <span>Layout: </span>
        <a href="index.php?output=<?=$output?>&layout=block" <? if( $layout == 'block' ) echo 'active' ?>>Block</a> | 
        <a href="index.php?output=<?=$output?>&layout=table" <? if( $layout == 'table' ) echo 'active' ?>>Table</a>
    </footer>


    <script>

        let form         = document.querySelector('.form');
        let gallery      = document.querySelector('.gallery');

        let link_form    = document.querySelectorAll('li.navlink')[0];
        let link_gallery = document.querySelectorAll('li.navlink')[1];

        link_form.addEventListener('click', function() {
            form.removeAttribute('hidden');
            gallery.setAttribute('hidden', '');
        });
        link_gallery.addEventListener('click', function() {
            gallery.removeAttribute('hidden');
            form.setAttribute('hidden', '');
        });

    </script>

</body>
</html>
