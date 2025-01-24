<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .utama {
            padding: 50px;
            margin: 10px;
            text-align: center;
        }


        .manfaat {
            padding: 50px;
            margin: 10px;
            text-align: center;
            background-color: #e3f2fd;
        }

        .manfaat2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .image {
            border-radius: 20px;
            width: 200px;
            height: 300px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .hero1 {
            padding-left: 50px;
        }

        .hero2 {
            text-align: center;
        }
    </style>
</head>

<body>
    @include('component.navbar')
    <div class="utama">
        <div class="hero2">
            <h1>SIG</h1>
            Website ini berisi informasi wilayah yang ada di Provinsi Sulawesi tengah yang mana, untuk masing-masing
            kabupaten terdapat perbedaan penyajian data dengan 5 jenis data non spasial. Data yang ditampilkan berupa
            pemetaan data Kepadatan Penduduk, Lama Sekolah, Rata-rata Pendapatan, Tingkat Kemiskinan, dan Tingkat
            Kematian. Website ini ditujukan untuk UAS mata kuliah Sistem Informasi Geografis. Diharapkan Informasi yang
            disajikan dapat dimengerti.
        </div>
    </div>
    <div class="manfaat">
        <h1>Team yang Terlibat</h1>
        <div class="manfaat2">
            <div>
                <img class="image"
                    src="{{ asset('image/aisyah.jpg') }}" alt="">
                <p>Aisyah Farhanah</p>
            </div>
            <div>
                <img class="image"
                    src="{{ asset('image/ira.jpg') }}"
                    alt="">
                <p>Ira Kusuma Wardani</p>
            </div>
            <div>
                <img class="image" src="{{ asset('image/pipit.jpg') }}"
                    alt="">
                <p>Sapitri</p>
            </div>
            <div>
                <img class="image" src="{{ asset('image/elsa.jpg') }}"
                    alt="">
                <p>Elsa Amelia Nurwahyuni</p>
            </div>
        </div>
    </div>
    @include('component.footer')


</body>

</html>