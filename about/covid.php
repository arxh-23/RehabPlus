<?php
require "../config.php";
include '../view/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid-19</title>
    <link rel="stylesheet" href="cov.css">
</head>
<body>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<!--        SECTION D   -->
<section id="section-d" class="grid">
    <div class="box">
        <img id="myImg" alt="Virtual Schedule" src="../resources/images/vaccine%20proof%20message.png">
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, sed.</div>
        </div>
    </div>

    <div class="box">

        <img id="myImg" alt="Virtual Schedule" src="../resources/images/gym%20procedures%20website_sept%2018%202021.png">
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, sed.</div>
        </div>

    </div>
</section>

</body>
</html>

<?php include '../view/footer.php' ?>
