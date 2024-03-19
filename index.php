<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/32411b90f0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="./img/Banner-Discord-Hunsa.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item img_img">
                    <a href="https://discord.gg/pfRZ436Rt9"><img src="./img/Banner-link.png" class=" d-block w-100 " alt="..."></a>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div>
                    <h4>คำแนะนำ</h4>
                    <div>
                        📌คำแนะนำ❗หากจำเป็นแนะนำให้ปิดการแจ้งเตือนห้อง ⁠<div class="btn btn-sm" style="background-color: pink;">🎵︱▪เปิดเพลง▪🌸</div> / <div class="btn btn-sm" style="background-color: pink;">🎵︱shira</div> / <div class="btn btn-sm" style="background-color: pink;">꒰🎶꒱・maprangmusic</div> เนื่องจากห้องนั้นมีการส่งข้อความบ่อยครั้ง อาจรบกวรการใช้งานของท่านได้<br>
                        📢 มีบางห้องที่น่าสนใจสามารถดูได้ที่ <div class="btn btn-sm mt-1" style="background-color: pink;">🔖│ห้องเพิ่มเติม</div>⁠
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/script.js"></script>

</html>