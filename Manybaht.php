<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manybaht</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
    * {
        font-family: 'Kanit', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .btn {
        color: #fff;
        background-color: #f8bbd0;
        transition: transform .2s;
    }

    .btn:hover {
        color: #fff;
        transform: scale(1.05)
    }

    .accordion button {
        transition: transform .2s;
    }

    .accordion button:hover {
        color: #fff;
        background-color: #f8bbd0;
        transform: scale(1.01)
    }

    .card-header code {
        color: #42bd41;
    }
</style>

<body>
    <div class="container mt-5">
        <a href="./index.php" class="btn"><i class="fa-solid fa-backward-step"></i> Back</a>
        <div class="card my-2 accordion" id="accordionExample">
            <div class="card-header">
                <p class="fw-bold my-auto">Manybaht - Commanda <code>{ / }</code></p>
                <div class=""><a href="https://play.manybahtpage.com" target="_blank">https://play.manybahtpage.com</a></div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        <p class="my-auto">Filters</p>
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/filters</code> - ฟิลเตอร์</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        <p class="my-auto">Leave</p>
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/leave</code> - คำสั่งออกจากห้องเสียง</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        <p class="my-auto">Loop</p>
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/loop</code> - วนเพลงซ้ำ</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        <p class="my-auto">Nowplaying</p>
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/nowplaying</code> - ดูเพลงที่กำลังเล่นอยู่ล่าสุด</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        <p class="my-auto">Pause</p>
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/pause </code> - คำสั่งหยุดเพลงชั่วคราว</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        <p class="my-auto">Play</p>
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/Play</code> - คำสั่งเปิดเพลง</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        <p class="my-auto">Queue</p>
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/queue</code> - ดูคิวเพลง</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        <p class="my-auto">Resume</p>
                    </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/resume</code> - คำสั่งดำเนินเล่นเพลงต่อ</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        <p class="my-auto">Skip</p>
                    </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/skip</code> - ข้ามเพลงปัจจุบัน</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                        <p class="my-auto">Volume</p>
                    </button>
                </h2>
                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <p><code id="textToCopy">/volume</code> - ตั้งค่าความดังของบอท</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("footer.php") ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/32411b90f0.js" crossorigin="anonymous"></script>

</html>