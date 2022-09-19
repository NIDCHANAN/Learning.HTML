<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link href="./css/Game1.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li class="dropdown"><a class="dropdown-btn more" href="./page1.php">vocabulary</a> </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page2.php">HTML</a></li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page3.php">Text</a>
                    <div class="dropdown-menu">
                        <a href="./page3.1.php">text decoration</a>
                    </div>
                </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page4.php">List</a></li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page5.php">Images</a>
                    <div class="dropdown-menu">
                        <a href="./page5.1.php">Video</a>
                        <a href="./page5.2.php">Sound</a>
                    </div>
                </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page6.php">Table</a>
                    <div class="dropdown-menu">
                        <a href="./page6.1.php">table decoration</a>
                    </div>
                </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page7.php">Link</a>
                    <div class="dropdown-menu">
                        <a href="./page7.1.php">Button</a>
                    </div>
                </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page8.php">Form</a> </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./game1.php">Game Example</a> </li>
                <li><a href="./logout.php">Logout</a> </li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="hangman">
            <div class="menu">
                <div class="game-state">
                    <span class="game-state__text">ACTIVE GAME</span>
                </div>
                <div class="fails">FAILS: 0/5</div>
                <button class="new-game">NEW GAME</button>
            </div>
            <div class="word"></div>
            <div class="keyboard">
                <div class="key">A</div>
                <div class="key">B</div>
                <div class="key">C</div>
                <div class="key">D</div>
                <div class="key">E</div>
                <div class="key">F</div>
                <div class="key">G</div>
                <div class="key">H</div>
                <div class="key">I</div>
                <div class="key">J</div>
                <div class="key">K</div>
                <div class="key">L</div>
                <div class="key">M</div>
                <div class="key">N</div>
                <div class="key">O</div>
                <div class="key">P</div>
                <div class="key">Q</div>
                <div class="key">R</div>
                <div class="key">S</div>
                <div class="key">T</div>
                <div class="key">U</div>
                <div class="key">V</div>
                <div class="key">W</div>
                <div class="key">X</div>
                <div class="key">Y</div>
                <div class="key">Z</div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="./JS/functiongame.js"></script>
</body>

</html>