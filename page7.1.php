<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="./css/stylenavigation.css">
</head>

<body>
    <header>
        <nav>
            <!--  nav items    -->
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
            <div class="show-menu" style="color: #2A505A;"><?php echo htmlspecialchars($_SESSION["username"]); ?></div>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <main>
        <h1 style="color: #8BD2EC; text-align: center;">???????????????????????? Button</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>Button</h4>
                    <p></p>
                    <p></p>
                    <p>?????????????????? (Botton) ???????????? Symbol ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                        <br> ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????
                    </p>
                    <p style="color:#FCEE9E">&lt;Button&gt; ???????????????????????????????????????????????????????????? &lt;/Button&gt;</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>????????????????????????????????????????????? Button</h4>
                    <p></p>
                    <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??? ????????? <br> 4 ?????????????????? ????????? B I U S ????????????</p>
                    <p style="color:#FCEE9E"> 1. &lt;button&gt; &lt;b&gt; Example &lt;/b&gt; &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ????????????????????????????????????????????? <button> <b> Example </b></button> </p>
                    <p style="color:#FCEE9E"> 2. &lt;button&gt; &lt;I&gt; Example &lt;/I&gt; &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ????????????????????????????????????????????? <button> <I> Example </I></button> </p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>???????????????????????????????????? Button </h4>
                    <p></p>
                    <p></p>
                    <p>?????????????????????????????????????????????????????????????????? Button ????????????????????????????????????????????????????????????????????? ???????????? </p>
                    <p style="color:#FCEE9E"> &lt; button &gt; <br> &lt; img src = "??????????????????????????????" &gt; <br> &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ????????????????????????????????????????????? <button> <img src="./image/profile.png" width="35px" height="35px"> </button> </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>???????????????????????????????????????????????? Button</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>??????????????????????????????????????????????????????????????? Button ????????????????????????????????????????????????????????????????????? ???????????? </p>
                    <p style="color:#FCEE9E"> &lt; button style = "background-color <br> :??????????????????/??????????????????;"&gt; ????????????????????? &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ????????????????????????????????????????????? <button style="background-color: red;"> ?????????????????????????????????????????????????????? </button> </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>?????????????????????????????????????????????????????????????????? Button</h4>
                    <p></p>
                    <p></p><p></p><p></p><p></p>
                    <p></p>
                    <p>?????????????????????????????????????????????????????????????????????????????????????????? Button ?????????????????????????????????????????????????????????????????????????????? ???????????????????????????</p>
                    <p style="color:#FCEE9E"> &lt; button style = "background-image:<br> :url(??????????????????????????????);"" &gt; ????????????????????? &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ????????????????????????????????????????????? <button style="background-image: url(image\profile.png);"> ?????????????????????????????????????????????????????? </button> </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p><p></p><p></p><p></p><p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>?????????????????????????????????????????????????????? BUtton</h4>
                    <p></p>
                    <p></p><p></p><p></p><p></p>
                    <p></p>
                    <p>??????????????????????????????????????????????????????????????? Button ????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????</p>
                    <p style="color:#FCEE9E"> &lt; button style = "width:????????????????????????????????????; <br> height:??????????????????????????????" &gt; ????????????????????? &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ????????????????????????????????????????????? <button style="width: 60px; height:30px"> ????????????????????? </button> </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p><p></p><p></p><p></p><p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>???????????????????????? function ??????????????????????????????</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>????????????????????????????????? function ????????????????????????????????? Button ???????????????????????????</p>
                    <p style="color:#FCEE9E"> 1. ??????????????????????????? Reload ??????????????????????????? onClick = "window.location.reload()" </p>
                    <p style="color:#FCEE9E"> 2. ??????????????????????????????????????????        ???????????????????????????  onClick = "window.location = 'http://????????????????????????'    " </p>
                    <p style="color:#FCEE9E"> 3. ??????????????????????????????????????????????????? ???????????????????????????  onClick = "history.go(1)"</p>
                    <p style="color:#FCEE9E"> 4. ??????????????????????????????????????????????????? ??????????????????????????? onClick = "history.go(-1)"</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page8.php">Next</a></span>
        </aside>
    </main>
</body>

</html>