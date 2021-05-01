<header>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow fixed-top">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">Тест сайт CodeIgniter</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">

            <?php
            
            $menu = [
                [
                    'uri' => "/", 
//                    'uri' => "/welcome/", 
//                    'uri2' => '/', 
                    'name' => 'страница welcome'
                    ],
                ['uri' => "/page1/", 'name' => 'страница 1'],
                ['uri' => "/page1/start/", 'name' => 'страница 1 / старт'],
                ['uri' => "/page2/", 'name' => 'страница 2'],
            ];

            foreach ($menu as $m) {

                echo '<a class = "p-2 text-dark" href = "' . $m['uri'] . '">'
                . ( ( $_SERVER['REQUEST_URI'] == $m['uri'] || ( isset($m['uri2']) && $_SERVER['REQUEST_URI'] == $m['uri2'] ) ) ? '<b>' : '' )
                . $m['name'] 
                //.' ( '.$_SERVER['REQUEST_URI'].' ) '
                . ( ( $_SERVER['REQUEST_URI'] == $m['uri'] || ( isset($m['uri2']) && $_SERVER['REQUEST_URI'] == $m['uri2'] ) ) ? '</b>' : '' )
                . '</a>';
            }
            
            ?>

        </nav>
        <!--<a class = "btn btn-outline-primary" href = "#">Sign up</a>-->
    </div>

    <br/>
    <br/>
    <br/>

</header>