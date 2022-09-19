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
                <li class="dropdown"><a class="dropdown-btn more" href="./page1.php">vocabulary</a></li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page2.php">HTML</a></li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page3.php">Text</a>
                    <div class="dropdown-menu">
                        <a href="./page3.1.php">text decoration</a>
                    </div>
                </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page4.php">List</a> </li>
                <li class="dropdown"><a class="dropdown-btn more" href="./page5.phpฮ">Images</a>
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
                <li class="dropdown"><a class="dropdown-btn more" href="./page8.php">Form</a></li>
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
        <h1 style="color: #8BD2EC; text-align: center;">HTML คืออะไร ?</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>ภาษา HTML คือ</h4>
                    <p></p>
                    <p></p>
                    <p>ภาษา HTML ย่อมาจาก HyperText Markup Language เป็น ภาษาคอมพิวเตอร์ที่ใช้สร้างหน้าเว็บ (Web Page) <br>
                        ในรูปแบบของ ไฟล์ HTML (คือไฟล์ที่มีนามสกุลเป็น .htm หรือ .html) ซึ่งมีเว็บเบราว์เซอร์ (Web Browser) <br>
                        เป็นโปรแกรมที่ใช้แปลงไฟล์ HTML เพื่อ แสดงผล</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <h1 style="color: #8BD2EC; text-align: center;">โครงสร้างภาษา HTML</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>โครงสร้างของไฟล์ภาษา HTML</h4>
                    <p></p>
                    <p></p>
                    <p>มีทั้งหมด 2 ส่วน คือ</p>
                    <p>1. ส่วนที่เป็นข้อมูลที่ต้องการแสดง</p>
                    <p>2. ส่วนที่เป็นคำสั่งแท็ก (TAG)</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <!-- <p>คำสั่งเริ่มต้นของเอกสาร HTML <br> &lt;HTML&gt;..........&lt;/HTML&gt; คำสั่ง &lt;HTML&gt; เป็นคำสั่งเริ่มต้นในการเขียนโปรแกรมและคำสั่ง &lt;/HTML&gt;
                         เป็นการสิ้นสุดโปรแกรม HTML คำสั่งนี้จะไม่แสดงผลในโปรแกรมเว็บเบราเซอร์ แต่ต้องเขียนเพื่อให้เกิดความเป็นระบบของงาน 
                         และเพื่อจะให้รู้ว่าเอกสารนี้เป็นเอกสารของภาษา HTML ส่วนหัวเรื่องเอกสารเว็บ (Head Section)</p> -->
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>โครงสร้างภาษา HTML</h4>
                    <p></p>
                    <p></p>
                    <p>สำหรับภาษา HTML จะมีโครงสร้าง 2 ส่วนคือ </p>
                    <p>1. ส่วนหัว (HEAD)</p>
                    <p>2. ส่วนเนื้อหาของเอกสาร (BODY)</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <!-- <p>โดยภาษา HTML ย่อมาจาก HyperText Markup Language เป็น ภาษาคอมพิวเตอร์ที่ใช้สร้างหน้าเว็บ (Web Page) <br>
                    ในรูปแบบของ ไฟล์ HTML (คือไฟล์ที่มีนามสกุลเป็น .htm หรือ .html) ซึ่งมีเว็บเบราว์เซอร์ (Web Browser) <br>
                    เป็นโปรแกรมที่ใช้แปลงไฟล์ HTML เพื่อ แสดงผล</p> -->
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>ส่วนหัวเรื่อง</h4>
                    <p></p>
                    <p></p>
                    <p>Head Section <br> เป็นส่วนที่ใช้อธิบายเกี่ยวกับข้อมูลเฉพาะของหน้าเว็บนั้น ๆ เช่น <br>
                        ชื่อเรื่องของหน้าเว็บ (Title), ชื่อผู้จัดทำเว็บ(Author), คีย์เวิร์ดสำหรับการค้นหา (Keyword) </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>ส่วนเนื้อหา</h4>
                    <p></p>
                    <p></p>
                    <p>Body Section <br> เป็นส่วนเนื้อหาหลักของหน้าเว็บ ซึ่งการแสดงผลจะต้องใช้ Tag จำนวนมาก ขึ้นอยู่กับลักษณะของข้อมูล <br>
                        เช่น ข้อความ, รูปภาพ, เสียง, วีดิโอ หรือไฟล์ต่าง ๆ <br>
                        โดยเป็นส่วนการทำงานหลักของหน้าเว็บ</p>
                    <p></p>
                    <p></p>
                </div>
            </div>

        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4 style="background-color: #577460;">รูปแบบการเขียนโครงสร้าง HTMT </h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;">&lt;HTML&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &lt;Head&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;Title&gt;...... &lt;/Title&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &lt;/Head&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &lt;Body&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;Header&gt;...... &lt;/Header&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;Main&gt;...... &lt;/Main&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;Footer&gt;...... &lt;/Footer&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &lt;/Body&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&lt;/HTML&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page3.php">Next</a></span>
        </aside>
    </main>

</body>

</html>