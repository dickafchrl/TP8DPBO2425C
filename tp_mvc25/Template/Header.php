<!-- layout.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademis</title>
    <!-- Link to Bootstrap CSS or your custom styles -->
    <link rel="stylesheet" href="Assets/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">REKTOR HEBAT</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo (!isset($_GET['controller']) || $_GET['controller'] == 'dosen') ? 'active' : ''; ?>" href="index.php?controller=dosen&action=index">dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'matakuliah') ? 'active' : ''; ?>" href="index.php?controller=matakuliah&action=index">mata kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'jadwal') ? 'active' : ''; ?>" href="index.php?controller=jadwal&action=index">jadwal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container my-4">
        <?php echo $content; ?>