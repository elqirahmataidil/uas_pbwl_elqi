@extends('layouts.app')

@section('content')
<header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <center><h2>SIJAP</h2></center> 
        <center><h4>Hemat, Cepat, Dan Terpecaya</h4></center>
       
      
            <div class="card">
                <div class="card-header">{{ __('SIJAP') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Mengenal Cara Kerja Jasa Ekspedisi

Setelah mengenal dan memahami seperti apa pengertian dari jasa ekspedisi, sedikit banyak Anda juga perlu tahu mengenai cara kerja dari jasa ekspedisi yang biasa Anda gunakan untuk mengantarkan barang yang Anda kirimkan atau mengantarkan barang pesanan Anda dari marketplace.

Perusahaan yang bergerak di bidang ekspedisi biasanya akan melakukan beberapa tahapan sebelum melakukan pengiriman, secara singkat dapat dilihat seperti penjelasan di bawah ini:

Memeriksa Barang Masuk dan yang Akan Dikirim
Di tahapan yang paling awal, akan dilakukan screening terhadap semua barang yang masuk untuk dikirimkan. Pemeriksaan awal biasanya dilakukan oleh petugas di kantor cabang pelayanan ekspedisi. Petugas akan menanyakan barang apa yang dikirim dan memastikan tidak ada barang berbahaya.

Semua jasa ekspedisi akan menolak pengiriman barang berbahaya yang melanggar hukum. Hal ini sesuai dengan peraturan yang telah ditetapkan. Jasa ekspedisi tentu tidak mau terlibat apabila ada konsumen yang mengirim barang yang ilegal.

Proses Pengemasan Barang yang Akan Dikirim
Meskipun konsumen sudah mengemas barang sebelum diserahkan ke pihak jasa ekspedisi, biasanya jasa ekspedisi akan memberikan packing tambahan untuk membedakan barang-barang yang akan dikirimkan. Oleh sebabnya, konsumen harus jujur saat ditanya paket apa yang akan dikirimkan.

Treatment untuk paket yang berisi pakaian tentu akan berbeda dengan treatment untuk barang pecah belah atau makanan. Semua paket akan dipisahkan dan dikemas dengan label yang sesuai dengan isi paket tersebut.

Mengurus Administrasi
Sebelum barang diberangkatkan, masih ada proses yang harus dilakukan yakni mengurus administrasi pada pihak-pihak terkait misalnya bea cukai. Terlebih lagi, jika Anda mengirimkan barang-barang seperti furniture yang dipesan dari toko atau sepeda motor.

Tentunya akan ada pemeriksaan administrasi tambahan yang membutuhkan informasi dan data diri penerima secara lebih jelas. Semua ini akan diurus oleh pihak ekspedisi sebelum semua paket diberangkatkan.

Mengecek Transportasi yang Akan Digunakan
Tahap terakhir adalah memeriksa kelayakan transportasi yang akan digunakan. Pengecekkan kendaraan meliputi kondisi fisik kendaraan, kondisi mesin serta driver yang akan mengantarkan paket.

Sama halnya dengan konsumen yang menanti paketnya tiba dengan selamat, pihak ekspedisi pun ingin memberikan pelayanan yang prima pada konsumennya dengan cara mengecek kelayakan kendaraan ekspedisi serta kurir yang akan berangkat.

Mengenal Layanan Logistik Biteship
Jasa ekspedisi adalah jasa pengiriman barang. Mengetahui cara kerja dari jasa ekspedisi kurang lengkap jika Anda belum mengetahui mengenai layanan logistik yang bekerja sama dengan berbagai ekspedisi, Biteship.

Biteship sendiri merupakan sebuah inovasi yang berupa platform yang didirikan pada tahun 2019 oleh Mirsa Sadikin dan Afra Fausan. Platform ini merupakan solusi bagi Anda untuk mempermudah pengiriman yang berkaitan dengan bisnis Anda.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
