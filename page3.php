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
        <h1 style="color: #8BD2EC; text-align: center;">การจัดการข้อความ</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>การแทรกข้อความในภาษา HTML</h4>
                    <p></p>
                    <p></p>
                    <p>สำหรับการใส่ข้อความลงในเว็บเพจ ด้วยภาษา HTML นั้น ข้อความที่ต้องการจะให้ปรากฎบนจอภาพ จะต้องใส่ข้อความมาในส่วนของ &lt;body&gt;… &lt;/body&gt; รวมถึงการจัดรูปแบบข้อความ ตัวอักษร รูปแบบต่าง ๆ</p>
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
                    <h4>การจัดย่อหน้า</h4>
                    <p></p>
                    <p></p>
                    <p>&lt;p&gt; ย่อหน้าที่ 1 &lt;/p&gt; </p>
                    <p>&lt;p&gt; ย่อหน้าที่ 2 &lt;/p&gt; </p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การขึ้นบรรทัดใหม่</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>บรรทัดที่ 1 &lt;br&gt; </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การขีดเส้นคั่น</h4>
                    <p></p>
                    <p></p>
                    <p> &lt;p&gt; เนื้อหาบทที่ 1 &lt;/p&gt; </p>
                    <p> &lt;hr&gt; </p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>ข้อความที่เป็นหัวเรื่อง</h4>
                    <p></p>
                    <p></p>
                    <p> &lt;h1&gt;......Heading 1......&lt;/h1&gt; <br> &lt;h2&gt;......Heading 2......&lt;/h2&gt; <br> &lt;h3&gt;......Heading 3......&lt;/h3&gt; <br> &lt;h4&gt;......Heading 4......&lt;/h4&gt; <br> &lt;h5&gt;......Heading 5......&lt;/h5&gt; <br> &lt;h6&gt;......Heading 6......&lt;/h6&gt; </p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การกำหนดอักษรตัวยกขึ้น </h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> &lt;sup&gt; ข้อความ &lt;/sup&gt; </p>
                    <p style="color:#FCEE9E"> เมื่อเรียกใช้งานจะมีตัวอย่างดังนี้ X <sup> 2 </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การกำหนดอักษรห้อยลง</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> &lt;sub&gt; ข้อความ &lt;/sub&gt; </p>
                    <p style="color:#FCEE9E"> เมื่อเรียกใช้งานจะมีตัวอย่างดังนี้ CO <sub> 2 </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page3.1.php">Next</a></span>
        </aside>

    </main>
</body>

</html>