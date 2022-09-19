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
        <h1 style="color: #8BD2EC; text-align: center;">การตกแต่งข้อความ <br> (text decoration)</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>Attributes </h4>
                    <p></p>
                    <p></p>
                    <p>เป็นส่วนขยายความสามารถของ Tag จะต้องใส่ภายในเครื่องหมาย &lt; &gt; ในส่วน Tag เปิดเท่านั้น <br> Tag คำสั่ง HTML แต่ละคำสั่ง จะมี Attribute แตกต่างกันไป มีจำนวนไม่เท่ากัน
                        <br> การระบุ Attribute มากกว่า 1 Attribute ให้ใช้ช่องว่างเป็นตัวคั่น
                    </p>
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
                    <h4>การจัดตำแหน่งตัวอักษร</h4>
                    <p></p>
                    <p></p>
                    <p>จะใช้ Attribute --&gt; Align = ' ' ในการจัดตำแหน่ง <br> โดยมี 3 คำสั่ง คือ
                    <p> 'Center' = ตรงกลาง </p>
                    <p> 'left' = ชิดฝั่งซ้าย </p>
                    <p> 'right' = ชิดฝั่งขวา </p>
                    <p style="color: #FCEE9E;"> เช่น &lt;p style = "Align: center;"&gt;.............&lt;/p&gt;</p>
                    <p></p>
                    <p></p>

                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การกำหนดขนาดตัวอักษร</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p>จะใช้ Attribute --&gt; font-size = ' ' กำหนดขนาด <br> โดยการใส่ตัวเลข 1-7 หรือกำหนดขนาดตามด้วยหน่วยวัด </p>
                    <p style="color: #FCEE9E;"> เช่น &lt;p style = "font-size: 7;"&gt;.............&lt;/p&gt;</p>
                    <p style="color: #FCEE9E;"> หรือ &lt;p style = "font-size: 20px;"&gt;.............&lt;/p&gt;</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การกำหนดรูปแบบตัวอักษร</h4>
                    <p></p>
                    <p></p>
                    <p>จะใช้ Attribute --&gt; font-family = ' ' กำหนด <br> โดยการใส่ชื่อรูปแบบตัวอักษรที่ต้องการ </p>
                    <p style="color: #FCEE9E;"> เช่น &lt;p style = "font-family: Tahoma;"&gt;.............&lt;/p&gt;</p>
                    <p style="color: #FCEE9E;"> หรือ &lt;p style = "font-family: TH Sarabun;"&gt;.............&lt;/p&gt;</p>
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
                    <h4>การกำหนดตัวหนา</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> การกำหนดอักษรตัวหนา คือ แท็ก &lt;b&gt; </p>
                    <p style="color: #FCEE9E;">ตัวอย่างการเรียกใช้งานคำสั่ง &lt;b&gt;........&lt;/b&gt; </p>
                    <p style="color: #FCEE9E;">เมื่อเรียกใช้งานจะมีลักษณะดังนี้ <b>ตัวหนา</b></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การกำหนดตัวเอียง</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> การกำหนดอักษรตัวเอียง คือ แท็ก &lt;I&gt; </p>
                    <p style="color: #FCEE9E;">ตัวอย่างการเรียกใช้งานคำสั่ง &lt;I&gt;........&lt;/I&gt; </p>
                    <p style="color: #FCEE9E;">เมื่อเรียกใช้งานจะมีลักษณะดังนี้ <I>ตัวเอียง</I></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>การกำหนดตัวอักษรขีดเส้นใต้</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> การกำหนดการขีดเส้นใต้ตัวอักษร คือ แท็ก &lt;U&gt; </p>
                    <p style="color: #FCEE9E;">ตัวอย่างการเรียกใช้งานคำสั่ง &lt;U&gt;........&lt;/U&gt; </p>
                    <p style="color: #FCEE9E;">เมื่อเรียกใช้งานจะมีลักษณะดังนี้ <U>เส้นใต้อักษร</U></p>
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
                    <h4>การขีดเส้นกลางตัวอักษร</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> การกำหนดเส้นกลางตัวอักษร คือ แท็ก &lt;S&gt; </p>
                    <p style="color: #FCEE9E;">ตัวอย่างการเรียกใช้งานคำสั่ง &lt;S&gt;........&lt;/S&gt; </p>
                    <p style="color: #FCEE9E;">เมื่อเรียกใช้งานจะมีลักษณะดังนี้ <S>เส้นกลางตัวอักษร</S></p>
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
                    <h4>การกำหนดสีตัวอักษร</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p> จะใช้ Attribute --&gt; Color = ' ' กำหนดสี <br> โดยการใส่ชื่อสี หรือ Code Color ตามต้องการ </p>
                    <p style="color: #FCEE9E;">เช่น &lt;p style = "color: yello;"&gt;.....&lt;/p&gt; </p>
                    <p style="color: #FCEE9E;">หรือ &lt;p style = "color: #FCEE9E;"&gt;.....&lt;/p&gt; </p>
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
                    <h4>การกำหนดตัวอักษรเคลื่อนที่</h4>
                    <p></p>
                    <p>จะใช้ Attribute --&gt; marquee direction = ' ' เพื่อเคลื่อนที่ โดยมี 4 ทิศทางคือ </p>
                    <p>"left" = วิ่งจากขวาไปซ้าย</p>
                    <p>"right" = วิ่งจากซ้ายไปขวา</p>
                    <p>"down" = วิ่งจากด้านล่างขึ้นข้างบน</p>
                    <p>"up" = วิ่งจากด้านล่างขึ้นข้างบน</p>
                    <p style="color: #FCEE9E; font-size: 12px;"> เช่น &lt;marquee direction="left"&gt;.... &lt;/marquee&gt; </p>
                    <p style="color: #FCEE9E;">เมื่อเรียกใช้งานจะมีลักษณะดังนี้ <marquee direction="left">ข้อความ</marquee>
                    </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page4.php">Next</a></span>
        </aside>

    </main>
</body>

</html>