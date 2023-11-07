<?php 
    include("header.php")
?>
        <!-- service-area -->
        <section class="service-area wrap-pading-top">
            <div class="container wrap-bottom-30">
                <span class="breadcumb-kategori">
                    Home > <strong> Daftar Member </strong>
                </span>
            </div>
            <div class="bg-red">
                <div class="container">
                    <h1>Daftar Sebagai Member</h1>
                    <span>Bakal banyak untung jadi Member TOKOKANGCUCI</span>
                    <div class="bg-ilusi">
                        <img src="img/Ilustrasi3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container wrap-btm-footer">
                <div class="row">
                    <form action="" class="form-primerer">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="box-regis pr-right">
                            <span class="cart-title-head">Data Diri</span>
                            <div class="form-primer">
                                <div class="form-group">
                                    <label for="nama">Nama Pemilik Usaha</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Pemilik Usaha">
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Nama Usaha</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Nama Usaha">
                                </div>
                                <div class="form-group">
                                    <label for="pengiriman">Alamat KTP</label>
                                    <textarea class="form-control" id="pengiriman" rows="3" placeholder="Alamat KTP"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Jawa Barat</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kota / Kabupaten</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Bogor</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kecamatan</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Sukadamai</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Kode Pos</label>
                                    <input type="text" class="form-control" id="pos" placeholder="Kode Pos">
                                </div>
                                <div class="form-group">
                                    <label for="nama">No Aktif Handphone</label>
                                    <input type="text" class="form-control" id="nama" placeholder="No Aktif Handphone">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Email</label>
                                    <input type="email" class="form-control" id="nama" placeholder="Email">
                                </div>

                                <div class="form-group f-upload">
                                    <label for="gambar">Upload Foto Identitas*</label>
                                    <div class="bx-file">
                                        <div class="img-load">
                                            <img id="thumbnail" src="img/bx-file.png" alt="Thumbnail">
                                        </div>
                                        <div class="for-file">
                                            <!-- <label for="gambar">Pilih Gambar:</label> -->
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" accept="image/*">
                                                <label class="custom-file-label" for="gambar">Upload Foto Identitas</label>
                                            </div>
                                            <div class="for-info-file">
                                                <span>
                                                    <strong>Image Requirements</strong><br>
                                                    File format: JPG/JPEG/PNG<br>
                                                    Max file size: 1 MB<br>
                                                    Rasio: 3:4
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="bx-jas-send">
                                    <span class="cart-title-head">Alamat Usaha Saat Ini</span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pengiriman">Alamat Usaha</label>
                                    <textarea class="form-control" id="pengiriman" rows="3" placeholder="Alamat KTP"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Jawa Barat</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kota / Kabupaten</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Bogor</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kecamatan</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Sukadamai</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Kode Pos</label>
                                    <input type="text" class="form-control" id="pos" placeholder="Kode Pos">
                                </div>
                                <div class="form-group">
                                    <label for="pos">Titik Lokasi Usaha</label>
                                    <div class="form-group-cus">
                                        <label for="pos">Lintang :</label>
                                        <input type="text" class="form-control-cus" id="latitude" placeholder="41.40338">
                                    </div>
                                    <div class="form-group-cus">
                                        <label for="pos">Bujur :</label>
                                        <input type="text" class="form-control-cus" id="longitude" placeholder="2.17403">
                                    </div>
                                    
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="box-regis pl-cus">
                            <span class="cart-title-head">Kondisi Lokasi</span>
                            <div class="form-primer">
                                <div class="form-group">
                                    <label for="provinsi">Situasi Sekitar Lokasi</label>
                                    <select class="form-control" name="situasi_lokasi" id="situasi_lokasi">
                                        <option value="ramai">Ramai</option>
                                        <option value="sedang">Sedang</option>
                                        <option value="lainya">Kondisi Lainnya</option>
                                    </select>
                                    <div class="other">
                                        <span class="note-s">Isi sesuai kondisi yang paling relevan (bisa ditambahkan disini kondisi lainnya)</span>
                                        <input type="text" name="other_lokasi" class="form-control os" id="other_lokasi" placeholder="Isi Sendiri Kondisi Lokasi">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Jenis Kendaraan Melaju</label>
                                    <select class="form-control" id="jenis_kendaraan_melaju">
                                        <option value="">Roda Dua</option>
                                        <option value="">Roda Tiga</option>
                                        <option value="">Roda Empat</option>
                                    </select>
                                    <div class="other-note">
                                        <span class="note-s">Pilih jenis kendaraan yang melaju</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Kecepatan Rata-Rata Kendaraan</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Km/Jam">
                                    <div class="other-note">
                                        <span class="note-s">Direkomendasikan kecepatan max.30 km/jam</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Jumlah Motor Melaju</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Jumlah/Menit">
                                    <div class="other-note">
                                        <span class="note-s">Isi Jumlah motor yang melaju per menit</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Jumlah Mobil Melaju</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Jumlah/Menit">
                                    <div class="other-note">
                                        <span class="note-s">Isi Jumlah mobil yang melaju per menit</span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="provinsi">Jenis Pencucian</label>
                                    <select class="form-control" id="jenis_kendaraan_melaju">
                                        <option value="">Motor & Mobil</option>
                                        <option value="">Motor</option>
                                        <option value="">Mobil</option>
                                    </select>
                                    <div class="other-note">
                                        <span class="note-s">Pilih jenis kendaraan yang dicuci</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Jumlah Kendaraan Dicuci Perhari</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Jumlah/8 Jam">
                                    <div class="other-note">
                                        <span class="note-s">Untuk usaha sudah berjalan</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Potensi Kendaraan Dicuci Perhari</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Jumlah/8 Jam">
                                    <div class="other-note">
                                        <span class="note-s">Untuk usaha baru mulai</span>
                                    </div>
                                </div>

                                <div class="form-group f-upload">
                                    <label for="gambar">Upload Foto Lokasi Usaha</label>
                                    <div class="bx-file">
                                        <div class="img-load">
                                            <img id="thumbnail2" src="img/bx-file.png" alt="Thumbnail">
                                        </div>
                                        <div class="for-file">
                                            <!-- <label for="gambar">Pilih Gambar:</label> -->
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar2" accept="image/*">
                                                <label class="custom-file-label label-2" for="gambar2">Upload Foto Identitas</label>
                                            </div>
                                            <div class="for-info-file">
                                                <span>
                                                    <strong>Image Requirements</strong><br>
                                                    File format: JPG/JPEG/PNG<br>
                                                    Max file size: 1 MB<br>
                                                    Rasio: 3:4
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bx-jas-send">
                                    <span class="cart-title-head">Kondisi Air</span>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Sumber Air</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Sumur</option>
                                        <option value="">PDAM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Air Berbau</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">TIDAK</option>
                                        <option value="">IYA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Air Berwarna</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">YA</option>
                                        <option value="">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Level Kesadahan Air (TDS)</label>
                                    <input type="text" disabled class="form-control" id="handphone" placeholder="ppm">
                                    <div class="other-note">
                                        <span class="note-s">Di isi oleh pusat setelah survey</span>
                                    </div>
                                </div>

                                <div class="bx-jas-send">
                                    <span class="cart-title-head">Kondisi Listrik</span>
                                </div>
                                <div class="form-group">
                                    <label for="handphone">Daya Listrik Terpasang</label>
                                    <input type="text" class="form-control" id="handphone" placeholder="Kwh">
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Sering Pemadaman Listrik</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Sering</option>
                                        <option value="">Kadang-Kadang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Kemungkinan Tambah Daya & Perubahan Jenis Tarif Listrik</label>
                                    <select class="form-control" id="provinsi">
                                        <option value="">Sering</option>
                                        <option value="">Kadang-Kadang</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="handphone"><span class="t-red">Saya Ingin dikunjungi Oleh Tim Teknis tanggal</span></label>
                                    <input type="date" class="form-control" id="handphone" placeholder="Kwh">
                                </div>
                                
                                <div class="bx-jas-send">
                                    <div class="cart-note">
                                        <span>Semua data isian wajib di isi dan tidak bisa melanjutkan proses berikutnya jika tidak diisi</span>
                                    </div>
                                    <div class="cart-privacy">
                                        <span>Dengan mendaftar, Anda menyetujui pemrosesan data pribadi Anda oleh TOKOKANGCUCI, sebagaimana tercantum dalam Kebijakan Privasi Kami.</a></span>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btx primer-border">Kirim Pendaftaran Member</button>
                            </div>
                        </div>
                    </div>
                    </form>
               
                </div>
            </div>  
            
        </section>
       
        <section class="cta-area" style="background-image:url(img/bg-member.png)">
            
            <!-- <div class="text-container text-center">
                <div class="call-to-action">
                    <h1>Bergabung Menjadi Member Kami</h1>
                    <h2>Join our membership</h2>
                    <div class="call-to-action">
                        <a href="" target="blank" class="bt-primer-white">Daftar</a>
                        <a href="" target="blank" class="bt-primer-white">Masuk</a>
                    </div>
                </div>
            </div> -->
                
        </section>
        <script>
        document.getElementById('gambar').addEventListener('change', function() {
            var file = this.files[0];
            // var fileName = file.name;
            if (file.name.length > 10) {
                var fileName = file.name.slice(0, 20);
            }
            console.log(fileName);
            var label = document.querySelector('.custom-file-label');
            label.innerHTML = fileName;
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail').src = e.target.result;
                document.getElementById('thumbnail').style.display = 'block';
            }
            reader.readAsDataURL(file);
        });

        document.getElementById('gambar2').addEventListener('change', function() {
            var file = this.files[0];
            // var fileName = file.name;
            if (file.name.length > 10) {
                var fileName = file.name.slice(0, 20);
            }
            console.log(fileName);
            var label = document.querySelector('.label-2');
            label.innerHTML = fileName;
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail2').src = e.target.result;
                document.getElementById('thumbnail2').style.display = 'block';
            }
            reader.readAsDataURL(file);
        });


    </script>
  <?php include("footer.php") ?>