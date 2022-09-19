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
        <h1 style="color: #8BD2EC; text-align: center;">การสร้าง Button</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>Button</h4>
                    <p></p>
                    <p></p>
                    <p>ปุ่มกด (Botton) เป็น Symbol ประเภทหนึ่งที่ทำให้ผู้ใช้สามารถโต้ตอบกับชิ้นงานที่สร้างขึ้นได้
                        <br> โดยเราสามารถนำปุ่มกดมาใช้งานประยุกต์ร่วมกับคำสั่งได้อย่างหลากหลาย โดยมีรูปแบบคำสั่งดังนี้
                    </p>
                    <p style="color:#FCEE9E">&lt;Button&gt; ข้อความที่แสดงบนปุ่ม &lt;/Button&gt;</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>รูปแบบข้อความใน Button</h4>
                    <p></p>
                    <p>สามารถใส่รูปแบบข้อความในปุ่มด้วยแท็กต่าง ๆ ได้ <br> 4 รูปแบบ คือ B I U S เช่น</p>
                    <p style="color:#FCEE9E"> 1. &lt;button&gt; &lt;b&gt; Example &lt;/b&gt; &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ได้ลักษณะดังนี้ <button> <b> Example </b></button> </p>
                    <p style="color:#FCEE9E"> 2. &lt;button&gt; &lt;I&gt; Example &lt;/I&gt; &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ได้ลักษณะดังนี้ <button> <I> Example </I></button> </p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การแสดงรูปบน Button </h4>
                    <p></p>
                    <p></p>
                    <p>สามารถใส่รูปในปุ่มด้วย Button เพื่อเพิ่มความสวยงามได้ เช่น </p>
                    <p style="color:#FCEE9E"> &lt; button &gt; <br> &lt; img src = "ไฟล์รูปภาพ" &gt; <br> &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ได้ลักษณะดังนี้ <button> <img src="./image/profile.png" width="35px" height="35px"> </button> </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>เติมสีพื้นให้กับ Button</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>สามารถใส่สีในปุ่มด้วย Button เพื่อเพิ่มความสวยงามได้ เช่น </p>
                    <p style="color:#FCEE9E"> &lt; button style = "background-color <br> :รหัสสี/ชื่อสี;"&gt; ข้อความ &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ได้ลักษณะดังนี้ <button style="background-color: red;"> เชื่อมเว็บไซต์อื่น </button> </p>
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
                    <h4>เติมรูปภาพเป็นพื้นหลัง Button</h4>
                    <p></p>
                    <p></p><p></p><p></p><p></p>
                    <p></p>
                    <p>สามารถใช้รูปภาพเป็นพื้นหลังของ Button เพื่อให้แทรกข้อความแสดงทับ ได้ดังนี้</p>
                    <p style="color:#FCEE9E"> &lt; button style = "background-image:<br> :url(ไฟล์รูปภาพ);"" &gt; ข้อความ &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ได้ลักษณะดังนี้ <button style="background-image: url(image\profile.png);"> เชื่อมเว็บไซต์อื่น </button> </p>
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
                    <h4>การกำหนดขนาดให้กับ BUtton</h4>
                    <p></p>
                    <p></p><p></p><p></p><p></p>
                    <p></p>
                    <p>สามารถกำหนดขนาดให้กับ Button เพื่อให้เหมาะสมกับพื้นที่จัดวาง ได้ดังนี้</p>
                    <p style="color:#FCEE9E"> &lt; button style = "width:ค่าความกว้าง; <br> height:ค่าความสูง" &gt; ข้อความ &lt;/button&gt; </p>
                    <p style="color:#FCEE9E"> ได้ลักษณะดังนี้ <button style="width: 60px; height:30px"> ข้อความ </button> </p>
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
                    <h4>การเพิ่ม function ให้กับปุ่ม</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>สามารถเพิ่ม function การทำงานของ Button ได้ดังนี้</p>
                    <p style="color:#FCEE9E"> 1. คลิกเพื่อ Reload ใช้คำสั่ง onClick = "window.location.reload()" </p>
                    <p style="color:#FCEE9E"> 2. คลิกเพื่อลิงค์        ใช้คำสั่ง  onClick = "window.location = 'http://เว็บไซต์'    " </p>
                    <p style="color:#FCEE9E"> 3. คลิกเพื่อเดินหน้า ใช้คำสั่ง  onClick = "history.go(1)"</p>
                    <p style="color:#FCEE9E"> 4. คลิกเพื่อย้อนกลับ ใช้คำสั่ง onClick = "history.go(-1)"</p>
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