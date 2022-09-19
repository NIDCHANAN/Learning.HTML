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
        <h1 style="color: #8BD2EC; text-align: center;">การจัดการ Form</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>การสร้าง Form ในภาษา HTML</h4>
                    <p></p>
                    <p></p>
                    <p>การสร้างฟอร์มใน html โดยฟอร์มที่ได้จะถูกใช้ในการส่งข้อมูลไปยังเซิฟเวอร์ แท็กที่ใช้ในการสร้างฟอร์มคือ</p>
                    <p style="color:#FCEE9E">&lt;form&gt;........&lt;/form&gt;</p>
                    <p>โดยประเภท input มี 6 รูปแบบ ดังนี้</p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>1. input text</h4>
                    <p></p>
                    <p></p>
                    <p>เป็นช่องรับข้อมูลประเภทพิมพ์ข้อความและแสดงข้อความในช่องรับข้อมูล</p>
                    <p style="color:#916848">ใช้รูปแบบ &lt;input type= "text" <br> size= "ตัวเลข" name="ชื่อช่องข้อมูล" Maxlength= "ตัวเลข" value="ข้อความ" &gt; </p>
                    <p style="color:#FCEE9E">โดย Maxlength เป็นการกำหนดความยาวสูงสุดของข้อความที่พิมพ์ลงไปในช่องรับข้อมูล </p>
                    <p style="color:#FCEE9E">และ Value เป็นการกำหนดข้อความนั้น ให้แสดงค่าอัตโนมัติ โดยปรากฏ ในช่องรับข้อมูลทุกครั้ง </p>
                    <p style="color:#EED6D3">จะมีลักษณะดังนี้ <input type="text" size="20" name="text" Maxlength="25" value=""> </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>2. input password</h4>
                    <p></p>
                    <p></p>
                    <p>เป็นช่องรับข้อมูลประเภทพิมพ์ข้อความพิมพ์ข้อความเหมือน text แต่จะแสดงข้อความเป็น ? แทนตัวอักษร</p>
                    <p style="color:#916848">ใช้รูปแบบ &lt; input type= "password" <br> size= "ตัวเลข" name="ชื่อช่องข้อมูล" Maxlength= "ตัวเลข"  value="ข้อความ"&gt; </p>
                    <p style="color:#FCEE9E">โดย Maxlength เป็นการกำหนดความยาวสูงสุดของข้อความที่พิมพ์ลงไปในช่องรับข้อมูล </p>
                    <p style="color:#FCEE9E">และ Value เป็นการกำหนดข้อความนั้นให้แสดงค่าอัตโนมัติ โดยปรากฏในช่องรับข้อมูลทุกครั้ง </p>
                    <p style="color:#EED6D3">จะมีลักษณะดังนี้ <input type="password" size="20" name="pass" Maxlength="25" value=""> </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>3. input  radio</h4>
                    <p></p>
                    <p></p> <p></p> 
                    <p>เป็นการนำเข้าของข้อมูลในลักษณะวงกลม โดยให้เลือกข้อมูลอย่างใดอย่างหนึ่ง เช่น การกำหนดเพศ หรือสถานภาพของบุคคล</p>
                    <p style="color:#916848">ใช้รูปแบบ &lt; input type="radio"  <br> name="ชื่อช่อง" value="ข้อความ" checked &gt; </p>
                    <p style="color:#FCEE9E">โดย Check เป็นการกำหนดให้เลือกอัตโนมัติตั้งแต่แรก</p>
                    <p style="color:#EED6D3">จะมีลักษณะดังนี้ <input type="radio" name="radio" value="Test" checked>ทดสอบ1 </p>
                    <p style="color:#EED6D3">  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name="radio" value="Test1" >ทดสอบ2 </p>
                    <p></p> <p></p><p></p><p></p> <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>4. input checkbox</h4>
                    <p></p>
                    <p></p>
                    <p>เป็นการนำข้อมูลเข้าในลักษณะกรอบสี่เหลี่ยมให้เลือกได้มากกว่า 1 รายการ</p>
                    <p style="color:#916848">ใช้รูปแบบ &lt;input type="checkbox" <br> name="ชื่อช่อง" value="ข้อความ" checked &gt; </p>
                    <p style="color:#FCEE9E">โดย Check เป็นการกำหนดให้เลือกอัตโนมัติตั้งแต่แรก</p>
                    <p style="color:#EED6D3">จะมีลักษณะดังนี้ <input type="checkbox" name="radio" value="Test" checked>Check 1 </p>
                    <p style="color:#EED6D3">  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox" name="radio" value="Test1" checked>Check 2 </p>
                    <p style="color:#EED6D3">  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox" name="radio" value="Test1" >Check 3 </p>
                    <p></p><p></p> <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>5. input submit</h4>
                    <p></p>
                    <p></p><p></p><p></p><p></p><p></p><p></p>
                    <p>เป็นการนำข้อมูลทั้งหมดในฟอร์ม โดยโปรแกรม เบราว์เซอร์ ส่งไปยังเซิร์ฟเวอร์</p>
                    <p style="color:#916848">ใช้รูปแบบ &lt;type="submit"  value="ข้อความ" &gt; </p>
                    <p style="color:#EED6D3">จะมีลักษณะดังนี้ <input type="submit"  value="Submit"></p>
                    <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>6. input reset</h4>
                    <p></p>
                    <p></p><p></p><p></p><p></p><p></p><p></p>
                    <p>เป็นการลบข้อมูลทั้งหมดในฟอร์ม โดยให้ทำการกรอกข้อมูลใหม่</p>
                    <p style="color:#916848">ใช้รูปแบบ &lt;type="reset"  value="ข้อความ" &gt; </p>
                    <p style="color:#EED6D3">จะมีลักษณะดังนี้ <input type="reset"  value="reset"></p>
                    <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4 style="background-color: #577460;">รูปแบบการเขียนโครงสร้าง Form </h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;">&lt;form&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &lt;input type= ".........."&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &lt;input type= ".........."&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &lt;input type= ".........."&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&lt;/form&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./game1.php">Next</a></span>
        </aside>

    </main>
</body>

</html>