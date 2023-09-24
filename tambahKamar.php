<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ./login.php");
    exit;
}

$detail = [
    "name" => "Grand Atma",
    "tagline" => "Hotel & Resort",
    "page_title" => "Grand Atma Hotel & Resort",
    "logo" => "./assets/images/crown.png"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kamar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $detail["logo"]; ?>" />

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/css/poppins.min.css">

    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header class="fixed-top scrolled" id="navbar">
        <nav class="container nav-top py-2">
            <a href="./" class="rounded bg-white py-2 px-3 d-flex align-items-center nav-home-btn">
                <img src="<?php echo $detail["logo"]; ?>" class="crown-logo" />
                <div>
                    <p class="mb-0 fs-5 fw-bold"><?php echo $detail["name"]; ?></p>
                    <p class="small mb-0"><?php echo $detail["tagline"]; ?></p>
                </div>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="./dashboard.php" class="nav-link active">Admin Panel</a></li>
                <li class="nav-item"><a href="./processLogout.php" class="nav-link text-danger">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main style="padding-top: 84px;" class="container">
    <div class="row">
    <div class="col-lg-6">
        <h2 class="mt-5 mb-3 border-bottom fw-bold">Tambah Kamar</h2>
        <form action="./processTambahKamar.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="namaKamar" class="form-label">Nama Kamar</label>
                <input type="text" class="form-control" id="namaKamar" name="namaKamar" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Kamar</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Tipe Kamar</label>
                <select class="form-select" id="tipe" name="tipe" required>
                    <option value="standard">Standard</option>
                    <option value="superior">Superior</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Kamar</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
        </form>
    </main>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>