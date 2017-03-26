<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="refresh" content="30"><title>Sudo Rooms</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="res/material.min.css">
    <script src="res/material.min.js"></script>
    <link rel="stylesheet" href="res/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="mdl-js-layout mdl-layout mdl-layout--fixed-header mdl-layout--no-drawer-button">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Sudo Rooms</span>
            <div class="mdl-layout-spacer"></div>
        </div>
    </header>

    <p id="s1"></p>
    <main class="mdl-layout__content" id="content-show">

        <div class="mdl-grid">

            <div class="room-card room-card-unlocked staffaccess mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <h4 id="room_number">
                        Room Number 000
                    </h4>
                </div>
            </div>

            <?php
            $content = file_get_contents('http://192.168.2.214/sudorooms/staff/getroomdata.php');

            $jArray = json_decode($content, true);
            foreach ($jArray as $item) {
                $room_num = $item['RoomNum'];
                $isOpen = $item['isOpen'];
                if($isOpen == "yes" && $staffaccess = "yes"){
                    echo "<div class=\"room-card room-card-unlocked-staff-access mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp\">";
                } elseif ($isOpen == "yes") {
                    # code...
                    echo "<div class=\"room-card room-card-unlocked mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp\">";
                } else {
                    echo "<div class=\"room-card room-card-locked mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp\">";
                }
                echo "<div class=\"mdl-card__title mdl-card--expand\">";
                echo "<h4 id=\"room_number\">";
                echo "Room Number $room_num";
                echo "</h4>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

    </main>
</div>
</body>
</html>