<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Preview Dataset</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/header-footer-fixed.css">
</head>

<body>
    <div class="header">
        <div class="header-logo">DCamp</div>
        <div class="header-list">
            <ul>
                <li><a href="">Logout</a> </li>
                <li><a href="">Pengguna</a> </li>
                <li><a href="">Dataset</a> </li>
                <li><a href="">Beranda</a> </li>
            </ul>
        </div>
    </div>

    <div class="container ml-5">
        <div class="row">
            <div class="col-md-10">
                <div class="mt-4">
                    <h1>Preview Dataset</h1>
                    <hr style="max-width:65%; margin-left:0;">
                </div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="inputJudul">Judul</label>
                        <input type="text" class="form-control" id="inputJudul" name="inpJudul" placeholder="Judul..">
                    </div>
                    <div class="form-group">
                        <label for="inputDeskripsi">Deskripsi</label>
                        <textarea class="form-control" id="inputDeskripsi" rows="3" name="inpDeskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Kategori</label>
                        <input type="text" class="form-control" id="inputKategori" name="inpKategori"
                            placeholder="Kategori..">
                    </div>
                    <div class="form-group">
                        <label for="inputSumber">Sumber</label>
                        <input type="text" class="form-control" id="inputSumber" name="inpSumber"
                            placeholder="Sumber..">
                    </div>
                    <div class="form-group">
                        <label for="inputJlhData">Jumlah Data</label>
                        <input type="text" class="form-control" id="inputJlhData" name="inpJlhData"
                            placeholder="Jumlah data..">
                    </div>
                    <button type="submit" class="btn tombol" name="preview_dataset" value="Save"
                        style="margin-bottom:3rem; background-color: red; color:white;">Edit</button>
                    <button type="submit" class="btn tombol" name="preview_dataset" value="Save"
                        style="margin-bottom:3rem; background-color: red; color:white;">Download</button><br>
                </form>
            </div>
        </div>

    </div>


    <div class="footer" style="height:80px;">
        <div class="footer-place" style="line-height: 1.25;">
            Universitas Lambung Mangkurat <br>
            Jl. Brigjen H. Hasan Basri Kota Banjarmasin 70123 <br>
            Telp. 0511-3306671
        </div>
        <div class="footer-list">
            Copyright &copy; DCamp 2021
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>