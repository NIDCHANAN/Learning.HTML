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
        <h1 style="color: #8BD2EC; text-align: center;">การแทรกรูปภาพ (Images)</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>การแทรกรูปภาพ (Images)</h4>
                    <p></p>
                    <p> ภาพประกอบที่นำมาใช้ประกอบเนื้อเรื่องในสื่อแบบต่าง ๆ นอกจากจะต้องคำนึงถึงเนื้อหาแล้วยังต้องคำนึงถึงคุณภาพที่เหมาะสมสำหรับการผลิตด้วย เพราะภาพนั้นอาจจะต้องผ่านการผลิตหลายขั้นตอน </p>
                    <p>ซึ่งบางงานกว่าจะสำเร็จ อาจจะทำให้ภาพที่ปรากฏบนสื่อนั้นด้อยคุณภาพลงไปได้ไม่มากก็น้อย ดังนั้นจึงควรพิจารณาเลือกรูปภาพที่มีคุณภาพเพียงพอ </p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>การแทรกรูปภาพ</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> คำสั่ง &lt;img src='path/ชื่อไฟล์'&gt;.....&lt;/img&gt; <br> เมื่อต้องการใช้งานรูปภาพแบบไฟล์ </p>
                    <p>และ คำสั่ง &lt;img URL='ที่อยู่ข้อรูปภาพ'&gt;.....&lt;/img&gt; <br> เมื่อต้องการใช้งานรูปภาพแบบ URL Address</p>
                    <p style="color: #75464A;">หมายเหตุ : สังเกตที่ path จะใช้เครื่องหมาย สแลช (/) ถ้าใส่เครื่องหมายผิดก็จะไม่แสดงภาพเช่นกัน เนื่องจากหาภาพจากการอ้างอิงไม่พบ</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การใช้รูปภาพเป็นพื้นหลัง</h4>
                    <p></p>
                    <p></p>
                    <p> การเปลี่ยนพื้นหลังเว็บเพจให้เป็นรูปภาพ ใช้คำสั่งแอตทริบิวต์ background โดยมีรูปแบบการใช้คำสั่งดังนี้ </p>
                    <p> &lt;body background=" ชื่อไฟล์รูปภาพ" หรือ ชื่อ "path(ที่เก็บรูปภาพ)/ชื่อไฟล์"หรือ "image URL"&gt;</p>
                    <p style="color: #75464A;">หมายเหตุ : สังเกตที่ path จะใช้เครื่องหมาย สแลช (/) ถ้าใส่เครื่องหมายผิดก็จะไม่แสดงภาพเช่นกัน เนื่องจากหาภาพจากการอ้างอิงไม่พบ</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>การปรับขนาดรูปภาพ</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>จะใช้ width="ความกว้าง" height="ความสูง" <br> โดยการกำหนดขนาดตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;"> เช่น &lt;img src=" path(ที่เก็บรูปภาพ)/ชื่อไฟล์" width="10PX" height="10PX" &gt;</p>
                    <p style="color: #FCEE9E;">ดังนั้นจะได้รูปที่มีขนาดความกว้าง และความสูง 10PX</p>
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
                    <h4>การกำหนดระยะห่างระหว่างภาพ</h4>
                    <p></p>
                    <p>จะใช้คำสั่ง vspace(Vertical Space) เป็นการเว้นช่องว่างระหว่างรูปภาพกับข้อความทางด้านแนวตั้ง <br> โดยการกำหนดระยะตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;"> เช่น &lt;img src=" path(ที่เก็บรูปภาพ)/ชื่อไฟล์" vspace="10PX" &gt;</p>
                    <p style="color: #FCEE9E;">ดังนั้นจะได้รูปที่มีช่องว่างทางแนวตั้ง 10PX</p>
                    <p>ส่วนคำสั่ง hspace(Horizontal Space) เป็นการเว้นช่องว่างระหว่างรูปภาพกับข้อความทางด้านแนวนอน <br> โดยการกำหนดระยะตามด้วยหน่วยวัด </p>
                    <p style="color:#FADCDC;"> เช่น &lt;img src=" path(ที่เก็บรูปภาพ)/ชื่อไฟล์" hspace="15PX" &gt;</p>
                    <p style="color: #FADCDC;">ดังนั้นจะได้รูปที่มีช่องว่างทางแนวนอน 15PX</p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การใส่กรอบรูปภาพ </h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>จะใช้ border="ขนาดของกรอบ" <br> โดยการกำหนดขนาดตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;"> เช่น &lt;img src=" path(ที่เก็บรูปภาพ)/ชื่อไฟล์" border="5px" &gt;</p>
                    <p style="color: #FCEE9E;">ดังนั้นจะได้รูปที่มีกรอบสีดำ ขนาด 5PX</p>
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
        </div>
        <aside>
            <span class='pulse-button'><a href="./page5.1.php">Next</a></span>
        </aside>
    </main>

</body>

</html>