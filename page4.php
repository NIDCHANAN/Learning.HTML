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
        <h1 style="color: #8BD2EC; text-align: center;">การแสดงลำดับรายการ (List)</h1>
        <div class="flex-container">
            <div>
                <div class="scc-box-1">
                    <h4>การแสดงลำดับรายการ (List)</h4>
                    <p></p>
                    <p>จะช่วยให้การแสดงผลของข้อมูลในหน้าเอกสารดูเข้าใจง่ายยิ่งขึ้น มีการแบ่งข้อมูลออกเป็นหมวดหมู่ดูสะอาดตา </p>
                    <p>โดยการแสดงรายการให้เป็นไปตามลำดับความสำคัญ จะทำให้เอกสารเป็นระเบียบสวยงาม อ่านได้ง่าย</p>
                    <p>มีอยู่ 3 แบบด้วยกัน ดังนี้</p>
                    <p>1. แบบไม่มีลำดับ (Unordered List)</p>
                    <p>2. แบบมีลำดับ (Order List)</p>
                    <p>3. แบบหัวข้อย่อย (Definition List)</p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4>รายการแบบไม่มีลำดับ (Unordered List)</h4>
                    <p></p>
                    <p></p>
                    <p> คำสั่ง &lt;UL&gt;.....&lt;/UL&gt; การแสดงรายการแบบไม่มีเลขลำดับ (Unorder หรือ Bullet List) <br> เป็นคำสั่งที่ใช้แสดงรายการโดยใช้เครื่องหมายเป็นตัวแสดงนำหน้าข้อความโดยไม่จำเป็นต้องเรียงตามลำดับก่อน-หลัง </p>
                    <p style="text-align: left;">โดยมีชนิดของเครื่องหมายดังนี้</p>
                    <p style="text-align: left; color: #293242; ">&nbsp; &nbsp; &nbsp; &nbsp; DISC จะมีสัญลักษณ์เป็นวงกลมทึบ (ค่าปกติ) </p>
                    <p style="text-align: left; color: #293242; "> &nbsp; &nbsp; &nbsp; &nbsp;CIRCLE จะมีสัญลักษณ์เป็นวงกลมโปร่ง</p>
                    <p style="text-align: left; color: #293242; "> &nbsp; &nbsp; &nbsp; &nbsp;SQUARE จะมีสัญลักษณ์เป็นสี่เหลี่ยมทึบ</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>

                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>รายการแบบมีลำดับ <br> (Order List)</h4>
                    <p></p>
                    <p></p>
                    <p>จะใช้ &lt;OL&gt;..... &lt;/OL&gt; ซึ่งย่อมาจาก <br> Ordered List คือข้อมูลรายการแบบมีหมายเลข
                        <br>เรียงลำดับจากน้อยไปหามากกำกับอยู่หน้าแต่ละรายการ โดยมีส่วนประกอบภายใน คือ &lt;LI&gt;
                    </p>
                    <p>โดยมี type = ชนิดของการแสดงผลแบบรายการ ดังนี้</p>
                    <p style="text-align: left; color: #293242; "> &nbsp; &nbsp; &nbsp; &nbsp;1. I , i เป็นการแสดงผลแบบโรมัน</p>
                    <p style="text-align: left; color: #293242;">&nbsp; &nbsp; &nbsp; &nbsp;2. A , a เป็นการแสดงผลแบบภาษาอังกฤษ</p>
                    <p style="text-align: left; color: #293242;">&nbsp; &nbsp; &nbsp; &nbsp;3. 1 เป็นการแสดงผลลำดับรายการปกติ (Default)</p>
                    <p>และมี Attibute start = การเริ่มของค่าของรายการ (สามารถกำหนดค่าเริ่มต้นได้)</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4>รายการแบบหัวข้อย่อย <br> (Definition List)</h4>
                    <p></p>
                    <p></p>
                    <p> โดยมีคำสั่งที่เกี่ยวข้องอยู่ 3 คำสั่งด้วยกัน คือ และคำสั่ง </p>
                    <p> &nbsp; 1. &lt;DL&gt;.... &lt;/DL&gt; เพื่อบอกว่ารายการย่อยมีลักษณะเป็น แบบใช้นิยาม </p>
                    <p> 2. &lt;DT&gt; ใช้บอกส่วนที่เป็นเรื่องของแต่ละรายการย่อย</p>
                    <p> 3. &lt;DD&gt; บอกส่วนที่เป็นรายละเอียดในรายการย่อยนั้น</p>
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
        </div>
        <div class="flex-container">
            <div>
                <div class="scc-box margin-last">
                    <h4 style="background-color: #577460;">โครงสร้างรายการแบบไม่มีลำดับ </h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;UL TPYE = ...&gt;....ชื่อเรื่อง....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....&lt;/LI&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....&lt;/LI&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....&lt;/LI&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....&lt;/LI&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/UL&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4 style="background-color: #577460;">โครงสร้างรายการแบบมีลำดับ </h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;OL TYPE=... START=...&gt;....ชื่อเรื่อง....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;LI&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/OL&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>
            <div>
                <div class="scc-box margin-last">
                    <h4 style="background-color: #577460;">โครงสร้างรายการแบบหัวข้อย่อย</h4>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;DL&gt;....ชื่อเรื่อง....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;DT&gt;....ข้อความ....&lt;DD&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;DT&gt;....ข้อความ....&lt;DD&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;DT&gt;....ข้อความ....&lt;DD&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;DT&gt;....ข้อความ....&lt;DD&gt;....ข้อความ....</p>
                    <p style="background-color: #9A9E8D; text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/DL&gt;</p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                    <p style="background-color: #9A9E8D; text-align: left;"></p>
                </div>
            </div>
        </div>
        <aside>
            <span class='pulse-button'><a href="./page5.php">Next</a></span>
        </aside>
    </main>

</body>

</html>