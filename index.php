<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Nilai by Fattah</title>
    <link rel="shortcut icon" href="images/rgi2.webp" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url("images/prof4.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aplikasi Nilai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=".">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=santri">Santri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=mapel">Mata Diklat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=instruktur">Instuktur</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-2 mb-4">
        <?php include_once ('tkj.php'); ?>
    </div>
        <div class="fixed-bottom">
            <div class="card">
                <div class="card-body">
                    &copy; 2024-<?=date('Y')?> web dev TKJ 31
                    <span class="float-end">
                    Versi 1.0 by<a href="http://fattah.rf.gd" target="_blank" rel="noopener noreferrer">Fattah</a>
                    </span>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>