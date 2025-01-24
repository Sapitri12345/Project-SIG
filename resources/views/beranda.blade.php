<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .utama {
            padding: 50px;
            margin: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .utama2 {
            padding: 50px;
            margin: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px; 
            flex-wrap: wrap;
            border: 50px;
            text-align: justify;
        }

        .button {
            padding-top: 20px;
        }

        .manfaat {
            padding: 50px;
            margin: 10px;
            text-align: center;
        }

        .manfaat2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .image {
            border-radius: 20px;
            width: 300px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .hero1 {
            padding-left: 50px;
        }

        .hero2 {
            padding-left: 100px;
            padding-right: 50px;
            text-align: justify;
        }

        .hero {
            padding: 50px;
            margin: 10px;
            text-align: center;
            background-color: #e3f2fd;
        }
    </style>
</head>

<body>
    @include('component.navbar')
    <div class="utama">
        <div class="hero1">
            <img src="https://puskom.uma.ac.id/wp-content/uploads/2024/12/image-1.png" alt="">
        </div>
        <div class="hero2">
            <h1>Selamat Datang</h1>
            Website ini akan membahas tentang apa aja yang berhubungan dengan Sistem Informasi Geografis loh, tetap
            berada di website ini ya dan eksplore terus agar kamu mendapatkan informasi yang pasti akan menambah
            wawasan kamu.
        </div>
    </div>
    <div class="utama2">
        <div class="card" style="width: 16rem;">
            <img src="https://mediaindonesia.com/cdn-cgi/image/width=800,quality=80,format=webp/https://asset.mediaindonesia.com/news/2023/08/15/peta-indonesia-dan-38-provinsi.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Menyajikan seluruh titik lokasi provinsi yang ada di seluruh indonesia</p>
            </div>
        </div>
        <div class="card" style="width: 16rem;">
            <img src="https://batamtoday.com/media/news/penduduk-indonesia1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Menyajikan informasi tentang data-data kependudukan masyarakat dengan basis peta</p>
            </div>
        </div>
        <div class="card" style="width: 16rem;">
            <img src="https://pgnlng.co.id/wp-content/uploads/2024/11/noaa-0fitIxDWJSU-unsplash-scaled.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Memudahkan bagi kalian untuk melihat data-data yang bersifat angka</p>
            </div>
        </div>
        <div class="card" style="width: 16rem;">
            <img src="https://1.bp.blogspot.com/-JeBo0LNne_k/X_mKMSy1HII/AAAAAAAAElI/rnQCvFFhKqQY_NtOnQZVUwZyL8WcFQjtACLcBGAsYHQ/w640-h332/images%2B%252839%2529.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Menyajikan data-data Non-Spasial lainnya berupa visualisasi peta</p>
            </div>
        </div>
    </div>
    <div class="hero">
        <h1>Lalu apa itu SIG?</h1>
        Sistem Informasi Geografis (SIG) adalah alat yang kuat untuk mengumpulkan, mengelola, menganalisis, dan
        memvisualisasikan data yang berkaitan dengan lokasi dan wilayah geografis. Dengan SIG, data geospasial dapat
        diolah untuk memberikan wawasan yang lebih mendalam, mendukung perencanaan yang lebih baik, serta membantu
        pengambilan keputusan yang berbasis data. 
    </div>
    <div class="manfaat">
        <h1>Apa sih Manfaat dari SIG?</h1> 
        <div class="manfaat2">
            <div>
                <img class="image" src="https://simtaru.kaltimprov.go.id/storage/posts/November2021/inzHNMwlfBhHVBjmv5QO.png" alt="">
                <p>Perecanaan Wilayah dan Tata Ruang</p>
            </div>
            <div>
                <img class="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSttCkoRYuP823PdzHYRhx5Gk6GrGb7jaEUYA&s" alt="">
                <p>Manajemen Sumber Daya Alam</p>
            </div>
            <div>
                <img class="image" src="https://arvento.id/wp-content/uploads/2024/03/image_2024-03-07_154225090.png" alt="">
                <p >Transportasi dan Navigasi</p>
            </div>
        </div>
    </div>
    @include('component.footer')
</body>

</html>