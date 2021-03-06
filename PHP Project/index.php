<?php
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);

require($_SERVER['DOCUMENT_ROOT'] . '/PHP Project/scripts/Session Control/activeUser.php');
require($_SERVER['DOCUMENT_ROOT'] . '/PHP Project/scripts/Session Control/setMenu.php');

ob_start();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Drvenija ba</title>

    <link rel="stylesheet" href="lib/css/dropdown.css">
    <link rel="stylesheet" href="lib/css/index.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="lib/js/index.js"></script>
    <script type="text/javascript" src="lib/js/dropdown.js"></script>
</head>

<BODY>

<!--Meni-->
<div id="meni" class="row">
    <div id="moto" class="column one">

        <div class="dropdownJS">
            <button onclick="myFunction()" class="dropbtnJS">☰ Drvenija.ba</button>
            <div id="myDropdownJS" class="dropdownJS-content">
                <input type="text" placeholder="Pretraži.." id="myInput" onkeyup="filterFunction()">
                <?php
                    updateMenu();
                ?>
            </div>
        </div>
        <br>
        Skromni sponzor roditelja i učenika.
    </div>
    <div class="column two"><h2> <a id="aboutUsLink" href="#aboutUsCaption">O nama</a> </h2></div> <!--O nama-->
    <div class="column two"> <!--Usluge-->
        <div class="dropdown">
            <button id="realMenu" class="dropbtn">Usluge</button>
            <div class="dropdown-content">
                <a href="pages/buy.php">Kupi</a>
                <a href="pages/sell.php">Prodaj/zamjeni</a>
            </div>
        </div>
    </div>
    <div class="column two"><h2> 👤 <?php setActiveUser(); ?> </a></h2>
    </div> <!--Prijava-->

</div>

<div class="subpage"  id="subpage">

    <!--Welcome info-->
    <div class="row" id="welcomeInfo">
        <div id="coverPhoto" class="column three"><img id="drvenija" src="resources/pictures/knjige2.jpg">
            <h1 id="naslovZaSliku">Drvenija.ba je stranica za
            prodaju i razmjenu udžbenika iz osnovnih i srednjih škola.
            </h1>
        </div>
    </div>

    <!--O nama-->
    <div class="row" id="aboutUs">
        <div class="column three">
            <h2 id="aboutUsCaption">O nama</h2>
            <h3 id="naslovZaSlikuINHERIT">Drvenija.ba je stranica za prodaju i razmjenu udžbenika iz osnovnih i srednjih škola.</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus magna et ante commodo, id interdum lacus blandit. Aliquam accumsan faucibus nisl nec hendrerit. Cras sodales nec justo sit amet consectetur. Aenean egestas faucibus augue nec dapibus. Suspendisse lacinia purus imperdiet convallis tempor. Pellentesque nibh justo, rutrum eu velit in, tincidunt blandit est. Aliquam justo lectus, scelerisque et arcu in, fringilla ullamcorper ex.

                Fusce varius urna nec lacus placerat, id tincidunt elit posuere. Nunc vulputate est eu porttitor tempor. Praesent id dapibus diam, in imperdiet ipsum. Maecenas sollicitudin felis efficitur neque tincidunt, vel placerat lacus imperdiet. Aenean scelerisque a mauris ullamcorper lacinia. Fusce scelerisque varius finibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc vulputate elementum efficitur. Donec euismod tellus justo, vel luctus metus feugiat ac. Sed lacinia nibh a dui bibendum efficitur. Integer dapibus rhoncus urna. Praesent sit amet tristique lacus. Ut sit amet augue ut metus ultricies fermentum. Nullam nec ligula a risus scelerisque consequat et sed justo. Aliquam erat volutpat.

                Suspendisse potenti. Etiam tincidunt ante non elit viverra, vel efficitur eros auctor. Fusce justo est, auctor sed consequat ultrices, sagittis in ante. Integer hendrerit luctus leo sed ornare. Etiam faucibus egestas mollis. Ut eget mollis ex. Cras elit enim, finibus vel vulputate at, tempus sed turpis. Quisque feugiat sem quis nibh finibus consequat. Sed et nibh justo. Integer ligula urna, laoreet nec iaculis eget, vestibulum a eros. Mauris ultrices nunc a dui sagittis elementum. Quisque tincidunt urna eu tempus posuere. Curabitur et lacus sem. Curabitur consectetur arcu nec lectus sagittis sodales. Fusce faucibus enim et eros efficitur, quis volutpat velit pellentesque.

                Aliquam maximus porta magna, id porttitor elit pellentesque id. Nam interdum ullamcorper maximus. Mauris ipsum sapien, fermentum et aliquam ac, malesuada sit amet nisi. Fusce non pretium leo. Quisque ligula dui, sagittis in turpis a, ullamcorper iaculis velit. Donec sollicitudin quam quis risus ullamcorper interdum. Morbi nec mattis massa, non efficitur odio. Maecenas sit amet nibh mi. Fusce vitae felis ut tortor interdum mollis. Proin pellentesque posuere lacus non ultricies. Morbi porta ultrices tortor ut gravida.

                Curabitur congue elit eu orci pharetra, eget gravida ante ullamcorper. Sed dolor nisl, vestibulum rhoncus mi et, aliquam congue ex. Maecenas suscipit consectetur urna et lacinia. Proin luctus elit tortor, luctus vestibulum eros dapibus quis. Ut felis justo, faucibus et est in, condimentum fermentum tellus. Sed sollicitudin sapien sed enim dictum, id laoreet orci rutrum. Integer fermentum magna ex, ac varius quam pharetra nec.
            </p>
        </div>
    </div>

    <!--Share button-->
    <div class="row">
        <div id="shareButton" class="column three">
            <div class="dropdown">
                <button class="dropbtn">Tračaj</button>
                <div class="dropdown-content">
                    <a href="https://www.facebook.com/">Facebook</a>
                    <a href="http://www.viber.com/en/">Viber</a>
                    <a href="https://www.google.com/gmail/about/">Mail</a>
                </div>
            </div>
        </div>
    </div>

    <!--Usluge-->
    <div class="row">
        <div id="uslugeCaption" class="column three">
            <h2 id="naslovZaBookShelf">Usluge</h2>
        </div> <!--Usluge naslov-->
    </div>
    <div class="row">
        <div class="column four">
            <h3>Prodaja/Razmjena</h3> <!--Prodaja & zamjena-->
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum metus dapibus, malesuada enim eu, volutpat nibh. Integer ultricies tincidunt quam. Integer sed facilisis purus. Fusce arcu ipsum, facilisis id risus a, viverra tincidunt massa. Curabitur bibendum erat nec risus fringilla fermentum. Ut malesuada faucibus commodo. Cras a ipsum sed nisl ultricies aliquam tristique ut dui. In vel nulla est. Morbi posuere metus sit amet lectus ornare, ut dictum lectus vulputate. Sed suscipit metus metus, tempus ultricies nisi tempus non. Fusce interdum, nisi in fringilla maximus, tortor magna convallis elit, eget pretium nunc nibh a nibh.

                Mauris egestas interdum lobortis. Vestibulum congue rhoncus volutpat. Nulla laoreet mauris nunc, quis mollis nisi blandit quis. Aliquam et dictum est, ac molestie odio. Sed quis tortor mattis, fringilla tortor sed, vehicula eros. Nunc elementum condimentum magna, sit amet blandit nisi. Aenean vehicula ut ante non accumsan. Donec vitae libero a arcu laoreet imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec in interdum quam, in imperdiet sapien. Vivamus condimentum nisi ac mauris venenatis, eget egestas felis suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam sed nunc commodo, vehicula nulla ac, cursus massa.

                Cras semper nisl non blandit tempus. Mauris sed nibh sollicitudin, tristique neque ac, auctor nibh. Ut eu dui in erat porttitor interdum id vitae ex. Aliquam erat volutpat. Vivamus ut ligula maximus, congue tellus id, bibendum nulla. Aenean a arcu leo. Aenean lacus dui, convallis ut viverra at, ultricies sit amet sapien. Aliquam malesuada ornare condimentum. Nulla mattis eleifend venenatis. Donec feugiat turpis vel semper condimentum. Nulla finibus tempus ante quis ullamcorper. Nulla sagittis pulvinar augue nec maximus. Mauris sodales massa et ligula tincidunt pretium ullamcorper vitae massa.
            </p>
            <p id="prodajLine">
                <button class="dropbtn"> <a id="prodajButton" href="javascript:loadSubPage('prodaj.html')">Prodaj/razmjeni</a></button>
            </p>
        </div>
        <div class="column four">
            <h3>Kupovina</h3> <!--Kupovina-->
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium sapien tortor. Donec pharetra lacinia velit. Pellentesque sit amet erat ut urna vestibulum tincidunt lacinia a lorem. Nulla pretium risus est, at efficitur odio volutpat venenatis. Nullam aliquet pretium lectus, sed luctus mi pulvinar sit amet. Fusce venenatis quam ante, vitae iaculis turpis fermentum et. Nulla condimentum nulla eget orci venenatis vestibulum. Morbi tempor ipsum et ligula lacinia tincidunt. In hac habitasse platea dictumst. Etiam eget mi ullamcorper, elementum lorem in, commodo tortor.

                Donec aliquet pulvinar dolor id volutpat. Nulla ut tincidunt nibh. Phasellus vel dapibus urna. Quisque porta sem vel ante volutpat auctor. Integer vitae ligula tempus, fringilla libero nec, vehicula augue. Etiam dolor eros, bibendum quis feugiat at, ullamcorper id quam. Vestibulum id dapibus dolor, ac finibus nisl. Etiam commodo dolor vitae feugiat ultrices. Aenean id vehicula ligula. Donec neque ipsum, venenatis sodales laoreet ut, rhoncus suscipit lectus. Etiam at justo sed lectus mattis molestie. Donec a tortor sit amet elit ultrices pretium.

                Vivamus venenatis bibendum dolor non interdum. Phasellus felis augue, iaculis vitae rhoncus nec, efficitur vitae massa. Sed sit amet est felis. Morbi cursus non orci a pellentesque. Donec fermentum diam tellus, fringilla vehicula tortor aliquam vel. Vivamus vitae dui mi. Nullam quis dignissim risus. Nulla sem augue, commodo in ex in, lacinia tincidunt massa. Etiam sit amet commodo elit. Sed eleifend laoreet euismod. Quisque fringilla scelerisque tristique. Cras lobortis dignissim lectus eu consectetur. Ut bibendum molestie tellus aliquet accumsan. Cras convallis nisl eget scelerisque dapibus.
            </p>
            <p id="kupiLine">
                <button class="dropbtn"><a id="kupiButton" href="javascript:loadSubPage('kupi.html')">Kupi</a></button>
            </p>
        </div>
    </div>

    <!--Copyright-->
    <div class="row">
        <div id="copyright" class="column three">Made with ♥ by Amer Šurković in Sarajevo. ©</div>
    </div>

</div>

</BODY>

</html>