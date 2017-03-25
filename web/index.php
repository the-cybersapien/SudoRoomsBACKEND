<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sudo Rooms</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="res/material.min.css">
    <script src="res/material.min.js"></script>
    <link rel="stylesheet" href="res/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="application/javascript">
        function httpGetAsync(theUrl, callback) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.status == 200){
                    callback(xmlHttp.responseText);
                }
                else
                    callback("Error!");
            };
            xmlHttp.open("GET", theUrl, true);
            xmlHttp.send(null);
        }


    </script>

</head>
<body>
    <div class="mdl-js-layout mdl-layout mdl-layout--fixed-header mdl-layout--no-drawer-button">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Sudo Rooms Demo</span>
                <div class="mdl-layout-spacer"></div>
            </div>
        </header>

        <p id="s1"></p>
        <main class="mdl-layout__content" id="content-show">



                <?php
                    for ($a = 0; $a < 4; $a++){
                        echo "<div class=\"mdl-grid\">";
                        for($i = 0; $i < 10; $i++){
                            $guest_name = "Name $i";
                            echo "<div class=\"room-card room-card-unlocked mdl-cell mdl-cell--1-col mdl-card mdl-shadow--2dp\">";
                            echo "<div class=\"mdl-card__title mdl-card--expand\">";
                            echo "<h4 id=\"room_number\">";
                            echo "Room Number $i";
                            echo "</h4>";
                            echo "</div>";
                            echo "<div class=\"mdl-card__actions mdl-card&#45;&#45;border mdl-card__title-text\">";
                            echo "<span class=\"room-card__name\" id=\"guest_name\">$guest_name</span>";
                            echo "</div>";
                            echo "<div class=\"mdl-layout-spacer\"></div>";
                            echo "</div>";
                        }
                        echo "</div>";
                    }
                ?>

                <!--<div class="room-card room-card-locked mdl-card mdl-shadow&#45;&#45;2dp">-->
                    <!--<div class="mdl-card__title mdl-card&#45;&#45;expand">-->
                        <!--<h4 id="room_number">-->
                            <!--Room Number 302-->
                        <!--</h4>-->
                    <!--</div>-->
                    <!--<div class="mdl-card__actions mdl-card&#45;&#45;border mdl-card__title-text">-->
                        <!--<span class="room-card__name" id="guest_name">Aditya Aggarwal</span>-->
                    <!--</div>-->
                    <!--<div class="mdl-layout-spacer"></div>-->
                <!--</div>-->

            </div>

        </main>
    </div>

    
    <script>
        var parent = $(".mdl-grid")[0];
        for (var i =0; i < 40; i++){
            
            var frame = $("<div>", {"class": "room-card room-card-locked mdl-card mdl-shadow--2dp"});
            var title = $("<div>", {"class": "mdl-card__title mdl-card--expand"});
            var head = $("<h5>", {"id": "room_number"});
            head.text(i.toString());
            var sub = $("<div>", {"class": "mdl-card__actions mdl-card--border mdl-card__title-text"});
            var name = $("<span>", {"class": "room-card__name", "id": "guest_name"});
            sub.append(html(name));
            console.log(html(name));
            title.appendChild(head);
            frame.appendChild(title);
            parent.appendChild(frame);
        }
        
    </script>

    <script>
        function call(txt) {
            document.getElementById("s1").innerHTML = txt;
        }
        httpGetAsync("http://192.168.2.214/sudorooms/customer/request_open.php?room=15&action=OPEN", call);
    </script>

</body>
</html>