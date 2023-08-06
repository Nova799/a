<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../connexion.php");
} else {
    if ($_SESSION["user"]["role"] != "admin") {
        header("Location: ../connexion.php");
    }
} ?>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard | User </title>

    <?php include_once('layout_link_css.php') ?>
    <link rel="stylesheet" href="./css/evo-calendar.min.css">
    <link rel="stylesheet" href="./css/evo-calendar.royal-navy.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* body{
        } */
        .hero {
            width: 100%;
            height: 90%;

            /* background: linear-gradient(45deg, #83B8D7, #BAA6FD); */
            display: grid;

        }

        */ #calendar {
            width: 90%;
            margin: 40px auto;
        }

        div.calendar-inner {
            height: 100%
        }

        div.calendar-sidebar {
            background-color: #198754 !important;
        }

        .calendar-sidebar>span#sidebarToggler {
            background-color: #0a693d !important;
            -webkit-box-shadow: 0 5px 10px -3px #0a693d !important;
            box-shadow: 0 5px 10px -3px #0a693d !important
        }

        .calendar-events {
            background-color: #198754 !important;
        }

        .calendar-table th[colspan="7"] {
            color: #198754 !important
        }

        .calendar-day .day.calendar-today {
            background-color: #0a693d !important;
            -webkit-box-shadow: 0 5px 10px -3px #0a693d !important;
            box-shadow: 0 5px 10px -3px #0a693d !important
        }

        #eventListToggler {
            background-color: #0a693d !important;
            -webkit-box-shadow: 0 5px 10px -3px #0a693d !important;
            box-shadow: 0 5px 10px -3px #0a693d !important
        }
    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

</head>

<body class="sidebar-dark">
    <div class="container-scroller">

        <?php include('header_top.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper pt-0">
            <!-- partial:partials/_settings-panel.html -->
            <?php include('header_left.php') ?>

            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">
                    <div class="hero">
                        <div id="calendar"></div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">

                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by CINEF
                                SAS. Copyright © 2021. All rights
                                reserved.</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->

        </div>
        <div id="dialog" title="Ajouter un évenement" class="p-4">
            <div class="mb-3">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="desc">Description</label>
                <textarea id="desc" cols="30" rows="10" class="form-control" style="height: 100px;"></textarea>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="ddebut">Date de début</label>
                    <input type="date" class="form-control" id="ddebut">
                </div>
                <div class="col-md-6">
                    <label for="hdebut">Heure de début</label>
                    <input type="time" class="form-control" id="hdebut">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="ddebut">Date de fin</label>
                    <input type="date" class="form-control" id="dfin">
                </div>
                <div class="col-md-6">
                    <label for="hdebut">Heure de fin</label>
                    <input type="time" class="form-control" id="hfin">
                </div>
            </div>
            <div class="mb-3">
                <label for="everyYear">Tout les ans ?</label>
                <input type="checkbox" id="everyYear" class="check-input ms-3">
            </div>
            <div class="text-center">
                <button class="btn btn-primary mx-auto" id="submit">Enregistrer</button>
            </div>
        </div>
        <!-- container-scroller -->

        <?php include('layout_link_js.php') ?>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- <script src="./js/jquery-ui.js"></script> -->
        <script src="./js/evo-calendar.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function () {
                var dialog = $("#dialog");
                dialog.dialog({
                    autoOpen: false,
                    modal: true,
                    width: "35%",
                    resizable: false
                });
                $.ajax({
                    url: "./agenda_T.php",
                    method: "GET",
                    success: function (data) {
                        $('#calendar').evoCalendar('addCalendarEvent', JSON.parse(data)["data"])
                    }
                }),
                    $('#calendar').evoCalendar({
                        theme: 'Royal Navy',
                        language: "fr",
                        todayHighlight: true,
                        firstDayOfWeek: 1,
                        sidebarDisplayDefault: false,
                        eventHeaderFormat: "d MM yyyy",
                        calendarEvents: [
                            {
                                id: 'bHay68s', // Event's ID (required)
                                name: "New Year", // Event name (required)
                                date: "January/1/2020", // Event date (required)
                                type: "holiday", // Event type (required)
                                everyYear: true // Same event every year (optional)
                            },
                            {
                                id: "sdffsfzeffz",
                                name: "Vacation Leave",
                                badge: "02/13 - 02/15", // Event badge (optional)
                                date: ["02/13/2024", "02/15/2024"], // Date range
                                description: "Vacation leave for 3 days.", // Event description (optional)
                                type: "event",
                                color: "#63d867" // Event custom color (optional)
                            }
                        ]
                    })
                var cal = $("#calendar");
                $("#calendar > div.calendar-inner").append("<center><button class='btn btn-secondary mt-5' id='btnAdd'>Ajouter un évenement</button></center>");
                $("button#btnAdd").on({
                    click: function () {
                        dialog
                            .attr({})
                            .dialog("open")
                    }
                })
                $("button#submit").on({
                    click: function () {
                        for (var elem of $("input")) {
                            if ($(elem).val() == "" || $(elem).val() == null || !$(elem).val()) {
                                alert("Nothing to do");
                                return 0;
                            }
                        }
                        $.ajax({
                            url: "./agenda_T.php",
                            method: "POST",
                            data: {
                                title: $("#title").val(),
                                desc: $("#desc").val(),
                                ddebut: $("#ddebut").val(),
                                dfin: $("#dfin").val(),
                                hdebut: $("#hdebut").val(),
                                hfin: $("#hfin").val(),
                                everyYear: $("#everyYear").prop("checked")
                            },
                            success: function (data) {
                                console.log(data)
                                $('#calendar').evoCalendar('addCalendarEvent', JSON.parse(data)["data"])
                            }
                        }),
                            dialog.dialog("close");
                        location.href = location.href
                    }
                })
            })
        </script>

</body>

</html>