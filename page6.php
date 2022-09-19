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
        <h1 style="color: #8BD2EC; text-align: center;">การแทรกตาราง (Table)</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>การแทรกตาราง (Table)</h4>
                    <p></p>
                    <p> การใช้ตารางเหมาะสำหรับการนำเสนอข้อมูลจำนวนมาก โดยตารางสามารถใช้งานได้หลายแบบตั้งแต่ใช้เป็นตารางธรรมดาเพื่อแสดงค่าตัวเลขทางสถิติหรือตัวเลขที่มีความสัมพันธ์กัน
                        ซึ่งการใช้ตารางนำเสนอข้อมูลแบบนี้ทำให้เห็นการเปรียบเทียบที่ชัดเจน และการประยุกต์ใช้ตารางกับข้อมูลประเภทอื่นๆ
                        เช่น ข้อความ หรือรูปภาพเพื่อช่วยออกแบบโฮมเพจ (เว็บเพจหน้าแรก) ซึ่งตารางสามารถจัดองค์ประกอบต่าง ๆ ได้อย่างเป็นสัดส่วนและอยู่ในตำแหน่งที่ต้องการได้</p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>คำอธิบายโครงสร้างของตาราง</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> &lt;table&gt; กำหนดการสร้างตาราง &lt;/table&gt;</p>
                    <p> &lt;caption&gt; ข้อความอธิบายตาราง &lt;/caption&gt;</p>
                    <p> &lt;tr&gt; แถวของตารางในแนวนอน &lt;/tr&gt;</p>
                    <p> &lt;th&gt; หัวเรื่องในคอลัมน์ &lt;/th&gt;</p>
                    <p> &lt;td&gt; กำหนดข้อมูลในตาราง &lt;/td&gt;</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
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
                    <h4 style="background-color: #577460;">โครงสร้างตาราง</h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &lt;table &gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &lt;caption&gt;............&lt;/caption&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt; </p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;th&gt;.......&lt;/th&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;th&gt;.......&lt;/th&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt; </p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt; </p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;.......&lt;/td&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;.......&lt;/td&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt; </p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt; </p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;.......&lt;/td&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;.......&lt;/td&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt; </p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &lt;/table&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>

        </div>
        <aside>
            <span class='pulse-button'><a href="./page6.1.php">Next</a></span>
        </aside>
    </main>

</body>

</html>