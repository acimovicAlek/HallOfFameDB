<?php
    include 'Partials/header.php';
?> 
<div class = "container">
            <div class = "row">
                <div class = "heading">Gallery!</div>
            </div>
            <div class = "cont_gallery">
            <div class = "row gallery">
                <div class = "col span_1 gallery">
                    <img class="gallery" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
                <div class = "col span_1 gallery">
                    <img class="gallery" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
                <div class = "col span_1 gallery">
                    <img class="gallery" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
                <div class = "col span_1 gallery">
                    <img class="gallery" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
            </div>
            <div class = "row gallery">
                <div class = "col span_1 gallery">
                    <img class="gallery image" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
                <div class = "col span_1 gallery">
                    <img class="gallery image" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
                <div class = "col span_1 gallery">
                    <img class="gallery image" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
                <div class = "col span_1 gallery">
                    <img class="gallery image" alt="image" onclick="openImage(this.src)" src="img/celeb.jpg">
                </div>
            </div>
    </div>
</div>
        <div class="image_show" id  = "image_show" onclick="closeImage()">
    <div id = "image_container_div" class="image_container">
        <img id = "image_container" src = "" alt = "">
    </div>
</div>
<?php
    include 'Partials/footer.php';
?>
