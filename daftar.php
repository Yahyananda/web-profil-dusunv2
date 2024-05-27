<?php

include './koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo/lestari.png">
    <title>Lingkungan Pule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="prosespen.php" method="POST">
        <section class="h-100 regis ">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4 h-100">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://img.freepik.com/free-photo/vertical-shot-wooden-passage-reflective-small-lake-mountain-range-horizon_181624-37099.jpg?w=360&t=st=1686326726~exp=1686327326~hmac=12de058bc33591469844b3953bc44a4ff22be8e27594be2273a653c201b37e69" alt="Sample photo" class="img-fluid w-100" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Lingkungan Pule registration member account
                                        </h3>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">nama</label>
                                            <input type="text" name="name" class="form-control form-control-lg" value="<?php echo @$nama; ?>" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo @$username; ?>" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Password</label>
                                            <input type="password" name="password" class="form-control form-control-lg" value="<?php echo @$password; ?>" required />
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-warning btn-lg ms-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>