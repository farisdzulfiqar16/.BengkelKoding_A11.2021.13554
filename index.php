<?php
include 'DB.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">

    <!-- Bootstrap offline -->

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Bootstrap Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">

    <title>To Do List</title>   <!--Judul Halaman-->
    <h3>
        To Do List
        <small class="text-muted">
            Catat semua hal yang akan kamu kerjakan disini.
        </small>
    </h3>
    <hr>
</head>
<body>
    <!--Form Input Data-->

<form class="form row" method="POST" action="" name="myForm" onsubmit="return(validate());">
    <!-- Kode php untuk menghubungkan form dengan database -->
    <?php
    $isi = '';
    $tgl_awal = '';
    $tgl_akhir = '';
    if (isset($_GET_GET['id'])) {
        $ambil = mysqli_query($mysqli,
        "SELECT * FROM kegiatan
        WHERE id='" . $_GET['id'] . "'");
        while ($row = mysqli_fetch_array($ambil)) {
            $isi = $row['isi'];
            $tgl_awal = $row['tgl_awal'];
            $tgl_akhir = $row['tgl_akhir'];
        }
    ?>
        <input type="hidden" name="id" value="<?php echo
        $_GET['id'] ?>">
    <?php
    }
    ?>
    <div class="col">
        <label for="inputIsi" class="form-label fw-bold">
            Kegiatan
        </label>
        <input type="text" class="form-control" name="isi" id="inputIsi" placeholder="Kegiatan" value="<?php echo $isi ?>">
    </div>
    <div class="col">
        <label for="inputTanggalAwal" class="form-label fw-bold">
            Tanggal Awal
        </label>
        <input type="date" class="form-control" name="tgl_awal" id="inputTanggalAwal" placeholder="Tanggal Awal" value="<?php echo $tgl_awal ?>">
    </div>
    <div class="col mb-2">
        <label for="inputTanggalAkhir" class="form-label fw-bold">
        Tanggal Akhir
        </label>
        <input type="date" class="form-control" name="tgl_akhir" id="inputTanggalAkhir" placeholder="Tanggal Akhir" value="<?php echo $tgl_akhir ?>">
    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary rounded-pill px-3" name="simpan">Simpan</button>
    </div>
</form>

    <!-- Table-->
<table class="table table-hover">
    <!-- thead atau baris judul -->
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Awal</th>
            <th scope="col">Akhir</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <th>1</th>
                <td>Belajar Pemrograman</td>
                <td>2024-05-01</td>
                <td>2024-05-02</td>
                <td>
                    <a class="btn btn-warning rounded-pill px-3" type="button" 
                    href="#">Belum</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>2</th>
                <td>Olah Raga Pagi</td>
                <td>2024-05-03</td>
                <td>2024-05-04</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>3</th>
                <td>Diskusi Kelompok</td>
                <td>2024-05-05</td>
                <td>2024-05-06</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>4</th>
                <td>Jalan-jalan ke Kampus</td>
                <td>2024-05-07</td>
                <td>2024-05-08</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>5</th>
                <td>Belajar Database</td>
                <td>2024-05-09</td>
                <td>2024-05-10</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>6</th>
                <td>Main Game Bersama</td>
                <td>2024-05-11</td>
                <td>2024-05-12</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>7</th>
                <td>Olah Raga Futsal</td>
                <td>2024-05-13</td>
                <td>2024-05-14</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>8</th>
                <td>Mengerjakan Tugas Akhir</td>
                <td>2024-05-15</td>
                <td>2024-05-16</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>9</th>
                <td>Belajar Algoritma</td>
                <td>2024-05-17</td>
                <td>2024-05-18</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>10</th>
                <td>Nongkrong di Kafe</td>
                <td>2024-05-19</td>
                <td>2024-05-20</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>11</th>
                <td>Workshop Teknologi</td>
                <td>2024-05-21</td>
                <td>2024-05-22</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>12</th>
                <td>Belajar Jaringan Komputer</td>
                <td>2024-05-23</td>
                <td>2024-05-24</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>13</th>
                <td>Game Night</td>
                <td>2024-05-25</td>
                <td>2024-05-26</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>14</th>
                <td>Jalan-jalan ke Mall</td>
                <td>2024-05-27</td>
                <td>2024-05-28</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>15</th>
                <td>Olah Raga Basket</td>
                <td>2024-05-29</td>
                <td>2024-05-30</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>16</th>
                <td>Belajar Web Development</td>
                <td>2024-05-31</td>
                <td>2024-06-01</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>17</th>
                <td>Minum Kopi Bersama</td>
                <td>2024-06-02</td>
                <td>2024-06-03</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>18</th>
                <td>Belajar Machine Learning</td>
                <td>2024-06-04</td>
                <td>2024-06-05</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>19</th>
                <td>Jalan-jalan di Taman</td>
                <td>2024-06-06</td>
                <td>2024-06-07</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>20</th>
                <td>Belajar Mobile Development</td>
                <td>2024-06-08</td>
                <td>2024-06-09</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>21</th>
                <td>Olah Raga Renang</td>
                <td>2024-06-10</td>
                <td>2024-06-11</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>22</th>
                <td>Belajar UI/UX Design</td>
                <td>2024-06-12</td>
                <td>2024-06-13</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>23</th>
                <td>Game Kompetisi</td>
                <td>2024-06-14</td>
                <td>2024-06-15</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>24</th>
                <td>Jalan-jalan ke Museum</td>
                <td>2024-06-16</td>
                <td>2024-06-17</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>25</th>
                <td>Belajar Sistem Operasi</td>
                <td>2024-06-18</td>
                <td>2024-06-19</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>26</th>
                <td>Olah Raga Badminton</td>
                <td>2024-06-20</td>
                <td>2024-06-21</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>27</th>
                <td>Diskusi Proyek</td>
                <td>2024-06-22</td>
                <td>2024-06-23</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>28</th>
                <td>Menghadiri Seminar</td>
                <td>2024-06-24</td>
                <td>2024-06-25</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>29</th>
                <td>Jalan-jalan ke Pantai</td>
                <td>2024-06-26</td>
                <td>2024-06-27</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>30</th>
                <td>Belajar Cloud Computing</td>
                <td>2024-06-28</td>
                <td>2024-06-29</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>31</th>
                <td>Nongkrong di Perpustakaan</td>
                <td>2024-06-30</td>
                <td>2024-07-01</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>32</th>
                <td>Belajar Keamanan Siber</td>
                <td>2024-07-02</td>
                <td>2024-07-03</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>33</th>
                <td>Olah Raga Yoga</td>
                <td>2024-07-04</td>
                <td>2024-07-05</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>34</th>
                <td>Membaca Buku Teknologi</td>
                <td>2024-07-06</td>
                <td>2024-07-07</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>35</th>
                <td>Jalan-jalan ke Kebun Binatang</td>
                <td>2024-07-08</td>
                <td>2024-07-09</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>36</th>
                <td>Belajar Teknologi Blockchain</td>
                <td>2024-07-10</td>
                <td>2024-07-11</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>37</th>
                <td>Olah Raga Sepak Bola</td>
                <td>2024-07-12</td>
                <td>2024-07-13</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>38</th>
                <td>Belajar Koding di Hackathon</td>
                <td>2024-07-14</td>
                <td>2024-07-15</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>39</th>
                <td>Jalan-jalan ke Festival</td>
                <td>2024-07-16</td>
                <td>2024-07-17</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>40</th>
                <td>Belajar Analisis Data</td>
                <td>2024-07-18</td>
                <td>2024-07-19</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>41</th>
                <td>Olah Raga Lari</td>
                <td>2024-07-20</td>
                <td>2024-07-21</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>42</th>
                <td>Nonton Film Bersama</td>
                <td>2024-07-22</td>
                <td>2024-07-23</td>                
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>43</th>
                <td>Belajar Testing Perangkat Lunak</td>
                <td>2024-07-24</td>
                <td>2024-07-25</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>44</th>
                <td>Olah Raga Bola Basket</td>
                <td>2024-07-26</td>
                <td>2024-07-27</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>45</th>
                <td>Jalan-jalan ke Acara Musik</td>
                <td>2024-07-28</td>
                <td>2024-07-29</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>46</th>
                <td>Belajar Pemrograman Web</td>
                <td>2024-07-30</td>
                <td>2024-07-31</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>47</th>
                <td>Sepedaan</td>
                <td>2024-05-23</td>
                <td>2024-05-24</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>47</th>
                <td>Jalan-jalan ke Tempat Wisata</td>
                <td>2024-08-05</td>
                <td>2024-08-06</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>48</th>
                <td>Belajar Dasar-Dasar AI</td>
                <td>2024-08-03</td>
                <td>2024-08-04</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

            <tr>
                <th>50</th>
                <td>Olah Raga Lari Malam</td>
                <td>2024-08-07</td>
                <td>2024-08-08</td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" type="button" 
                    href="#">Sudah</a>
                </td>
                <td>
                    <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                    <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                </td>
            </tr>

        </tbody>

    <tbody>
    <?php
            if (isset($_POST['simpan'])) {
                if (isset($_POST['id'])) {
                    // Update existing record
                    $ubah = mysqli_query($mysqli, "UPDATE kegiatan SET
                                                    isi = '" . $_POST['isi'] . "',
                                                    tgl_awal = '" . $_POST['tgl_awal'] . "',
                                                    tgl_akhir = '" . $_POST['tgl_akhir'] . "'
                                                    WHERE id = '" . $_POST['id'] . "'");
                } else {
                    // Insert new record
                    $tambah = mysqli_query($mysqli, "INSERT INTO kegiatan (isi, tgl_awal, tgl_akhir, status)
                                                    VALUES (
                                                        '" . $_POST['isi'] . "',
                                                        '" . $_POST['tgl_awal'] . "',
                                                        '" . $_POST['tgl_akhir'] . "',
                                                        '0'
                                                    )");
                }

                echo "<script>
                        document.location='index.php';
                    </script>";
            }

            if (isset($_GET['aksi'])) {
                if ($_GET['aksi'] == 'hapus') {
                    // Delete record
                    $hapus = mysqli_query($mysqli, "DELETE FROM kegiatan WHERE id = '" . $_GET['id'] . "'");
                } elseif ($_GET['aksi'] == 'ubah_status') {
                    // Update status
                    $ubah_status = mysqli_query($mysqli, "UPDATE kegiatan SET
                                                        status = '" . $_GET['status'] . "'
                                                        WHERE id = '" . $_GET['id'] . "'");
                }

                echo "<script>
                        document.location='index.php';
                    </script>";
            }
            ?>

        
    </tbody>
</table>

    

</body>
</html>