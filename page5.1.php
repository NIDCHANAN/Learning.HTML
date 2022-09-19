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
        <h1 style="color: #8BD2EC; text-align: center;">การแทรก Video</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>การแทรก Video</h4>
                    <p></p>
                    <p> วิดีโอ คือ มัลติมีเดียที่สามารถแสดงภาพเคลื่อนไหวพร้อมเสียงบรรยายได้ การนำเสนอวิดีโอมีหลายรูปแบบ
                        เช่น วิดีโอเพื่อการศึกษา วิดีโอเพื่อความบันเทิงประโยชน์ของวิดีโอมีมากมาย นอกจากให้ความรู้ ให้ความบันเทิงยังสามารถสร้างรายได้ให้กับผู้ใช้งาน
                        เช่น วิดีโอนำเสนอสินค้า ผลิตภัณฑ์ ต่าง ๆ เป็นต้น </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>การแทรก Video</h4>
                    <p></p>
                    <p></p>
                    <p> attribute อีกหลาย ๆ ตัว เพื่อเพิ่มลูกเล่น และความสะดวกสบายให้กับ Element นี้ด้วย </p>
                    <p style="text-align: left;">1. Autoplay = Video เล่นอัตโนมัติเมื่อเปิดเซ้บไซต์</p>
                    <p style="text-align: left;">2. Controls = เพิ่มปุ่มการควบคุม Video (ควรใส่ทุกครั้ง)</p>
                    <p style="text-align: left;">3. height = ความสูงของ Video (ควรใส่ทุกครั้ง) </p>
                    <p style="text-align: left;">4. width = ความกว้างของ Videp (ควรใส่ทุกครั้ง)</p>
                    <p style="text-align: left;">5. loop = ให้ Video เล่นซ้ำหลังจากเล่นจบทุกครั้ง</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4 style="background-color: #577460;">โครงสร้างการแทรก Video </h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &lt;video &gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &lt;source src="ชื่อไฟล์" type="นามสกุลไฟล์"&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;source src="ชื่อไฟล์" type="นามสกุลไฟล์"&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;source src="ชื่อไฟล์" type="นามสกุลไฟล์"&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left; font-size: 12px;">&nbsp; &lt;/video&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>
        </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page5.2.php">Next</a></span>
        </aside>
    </main>

</body>

</html>