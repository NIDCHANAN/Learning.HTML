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
        <h1 style="color: #8BD2EC; text-align: center;">การตกแต่งตาราง</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>การแทรกรูปในตาราง</h4>
                    <p></p>
                    <p></p>
                    <p>&lt;img src="ชื่อไฟล์" &gt; </p>
                    <p>โดยระบุตำแหน่งที่จัดเก็บไฟล์ภาพต่อท้าย</p>
                    <p style="color: #FCEE9E;">เช่น &lt;th&gt; &lt;img src="pig.png" &gt; &lt;/th&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าตารางส่วนหัว ช่องแรกจะมีภาพ Pig.png</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การเปลี่ยนรูปพื้นหลังตาราง</h4>
                    <p></p>
                    <p></p>
                    <p>&lt;background ="ตำแหน่งรูปภาพ" &gt; </p>
                    <p>โดยระบุตำแหน่งที่จัดเก็บไฟล์ภาพต่อท้าย</p>
                    <p style="color: #FCEE9E;">เช่น &lt;table background="bg.png"&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าตารางจะมีพื้นหลังคือภาพ bg.pbg</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การตีเส้นตาราง</h4>
                    <p></p>
                    <p></p>
                    <p>&lt;table border="ความหนาของเส้น"&gt; </p>
                    <p>โดยสามารถระบุได้เป็นตัวเลข ตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;">เช่น &lt;table border=“10PX”&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่า เส้นขอบตารางจะมีความหนา 10PX</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>การจัดตำแหน่งข้อความในตาราง</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>&lt;valign=”ตำแหน่งของข้อมูล” &gt; </p>
                    <p>โดยระบุตำแหน่งที่ต้องการ ดังนี้ </p>
                    <p>1. top (จัดอยู่ด้านบน) </p>
                    <p>2. middle (จัดอยู่ตรงกลาง) </p>
                    <p>3. buttom (จัดอยู่ด้านล่าง) </p>
                    <p style="color: #FCEE9E;">เช่น &lt;tr valign="buttom"&gt;..... &lt;/tr&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าข้อความตารางแถวแรกจะชิดตารางด้านล่าง</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การปรับขนาดเซลล์</h4>
                    <p></p>
                    <p></p>
                    <p>&lt;colspan="จำนวนคอลัมน์ที่ต้องการขยาย"&gt; </p>
                    <p>โดยระบุจำนวนคอลัมน์ที่ต้องการขยายได้สูงสุดเท่าที่มี</p>
                    <p style="color: #FCEE9E;">เช่น &lt;td colspan="3"&gt;....&lt;/td&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าคอลัมน์นี้จะมีขนาด 3 ช่อง จากปกติ 1 ช่อง</p>
                    <p>&lt;rowspan="จำนวนแถวที่ต้องการขยาย"&gt; </p>
                    <p>โดยระบุจำนวนแถวที่ต้องการขยายได้สูงสุดเท่าที่มี</p>
                    <p style="color: #FCEE9E;">เช่น &lt;td rowspan="2"&gt;....&lt;/td&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าแถวนี้จะมีขนาด 2 ช่อง จากปกติ 1 ช่อง</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การปรับความห่างของข้อมูล</h4>
                    <p></p>
                    <p></p>
                    <p>&lt;cellspacing="ระยะห่างข้อมูล"&gt; </p>
                    <p>โดยสามารถระบุได้เป็นตัวเลข ตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;">เช่น &lt;table cellspacing="5px"&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าตารางนี้จะมีระยะห่างของข้อมูล 5PX</p>
                    <p>&lt;cellpadding="ระยะที่ต้องการเว้น"&gt; </p>
                    <p>โดยสามารถระบุได้เป็นตัวเลข ตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;">เช่น &lt;table cellpadding="5px"&gt;</p>
                    <p style="color: #FCF6BD;">หมายความว่าตารางนี้จะมีการเว้นระยะ 5PX</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page7.php">Next</a></span>
        </aside>
    </main>

</body>

</html>