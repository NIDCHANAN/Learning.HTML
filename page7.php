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
        <h1 style="color: #8BD2EC; text-align: center;">การเชื่อมโยง (Link)</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>Hyper links</h4>
                    <p></p>
                    <p></p>
                    <p>ก็คือการเชื่อมโยงจากหน้าเว็บเราไปยังที่ต่าง ๆ ซึ่งเรียกว่า Hyper links หรือทำการเชื่อมโยง (link) ภายในเอกสารของเราเองหรือเรียกว่า Anchors ซึ่งการสร้างลิงค์ของเอกสาร HTML ทั้งสองแบบนั้นจะสร้างโดยแท็ก &lt;a&gt; เหมือนกัน การสร้าง links <br> จะสร้างโดยใช้โครงสร้าง</p>
                    <p style="color:#FCEE9E">&lt;a href="/url"&gt;Link text&lt;/a&gt;</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>การเชื่อมโยงข้อมูลในเอกสาร</h4>
                    <p></p>
                    <p>สร้างการเชื่อมโยง หน้าชื่อของจุดเชื่อมโยงต้องมีเครื่องหมาย # โดยมีรูปแบบคำสั่งดังนี้ </p>
                    <p style="color:#FCEE9E"> &lt;a name="ข้อความที่ทำการเชื่อมโยง"&gt; &lt;/a&gt; </p>
                    <p style="color:#FCEE9E">&lt;a href="#ชื่อจุดเชื่อมโยง"&gt; ข้อความที่ปรากฏบนหน้าเว็บเพจ &lt;/a&gt; </p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การเชื่อมโยงไปยังเว็บเพจอื่น</h4>
                    <p></p>
                    <p></p>
                    <p>สามารถสร้างการเชื่อมโยงไปยังไฟล์ต่าง ๆ ด้วยการใช้แอททริบิวต์ href ดังต่อไปนี้ </p>
                    <p style="color:#FCEE9E"> &lt; a href="ชื่อเอกสาร"&gt;ข้อความจุดเชื่อมโยง &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"> <a href="./page7.php"> เชื่อมเว็บเพจอื่น </a> </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การเชื่อมโยงข้อมูลไปยังเว็บไซต์อื่น</h4>
                    <p></p>
                    <p></p>
                    <p>การเชื่อมโยงสามารถใช้ทั้งข้อความและรูปภาพเป็นจุดเชื่อมโยงได้ ดังนี้</p>
                    <p style="color:#FCEE9E"> &lt; a href="URL"&gt;ข้อความจุดเชื่อมโยง &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"> <a href="www.google.com"> เชื่อมเว็บไซต์อื่น </a> </p>
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
                    <h4>การเชื่อมโยงโดยการใช้รูปภาพ</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>เปลี่ยนข้อความที่ปรากฎบนหน้าเว็บเพจเป็นคำสั่งที่ใช้แสดงรูปภาพ ดังนี้</p>
                    <p style="color:#FCEE9E"> &lt; a href="URL"&gt; &lt;img src="รูปภาพ"&gt; &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"> เช่น &lt;a href="www.google.com"&gt; <br> &lt;img src="./image/images1" width="10px" height="10px"&gt; &lt;/a&gt; </p>
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
                    <h4>การเชื่อมโยงไปยังไฟล์อื่น</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>เชื่อมโยงข้อมูลจากหน้าเว็บเพจไปยังไฟล์ข้อมูลต่าง ๆ</p>
                    <p style="color:#FCEE9E"> &lt; a href="ชื่อไฟล์.นามสกุล"&gt; ข้อความที่ปรากฏบนหน้าเว็บเพจ &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"> เช่น &lt;a href="exam.zip"&gt; Download &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"><a href="exam.zip">Download </a></p>
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
                    <h4>การส่งจดหมายอิเล็กทรอนิกส์</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>กระบวนการหนึ่งที่สามารถเชื่อมโยงการติดต่อสื่อสารระหว่างผู้พัฒนาเว็บกับผู้ใช้งานเว็บ</p>
                    <p style="color:#FCEE9E"> &lt; a href="mailto:ชื่ออีเมล์แอดเดรส"&gt; ข้อความที่ปรากฏบนหน้าเว็บเพจ &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"> เช่น <br> &lt;a href="mailto:62030027@kmitl.ac.th"&gt; Email &lt;/a&gt; </p>
                    <p style="color:#FCEE9E"> <a href="mailto:62030027@kmitl.ac.th">Email </a></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page7.1.php">Next</a></span>
        </aside>
    </main>
</body>

</html>