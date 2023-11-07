<?php include("header-member.php"); ?>
        <!-- service-area -->
        <section class="service-area wrap-pading-top">
            <div class="container wrap-bottom-30">
                <span class="breadcumb-kategori">
                    Home > <strong> Member Dashboard </strong>
                </span>
            </div>
            <div class="bg-red">
                <div class="container">
                    <h1>Member Dashboard</h1>
                            <!-- <span>Bakal banyak untung jadi Member TOKOKANGCUCI</span> -->
                    <div class="bg-ilusi">
                        <img src="img/Ilustrasi3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container wrap-btm-footer">
                <div class="row">
                   
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="box-dashboard">
                            <div class="main-ds">
                                <div class="ds-profile">
                                    <img src="img/profile.jpg" alt="">
                                    <div class="dsp-text">
                                        <p>Bacharuddin J Habibie</p>
                                        <span>TokoKangCuci</span>
                                        <div class="dsp-rating">
                                            <span>Rating Member:</span>
                                            <div class="rate">
                                                <div class="star star-solid"></div>
                                                <div class="star star-solid"></div>
                                                <div class="star star-solid"></div>
                                                <div class="star star-solid"></div>
                                                <div class="star star-none"></div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-ds">
                                <div class="ds-menu">
                                    <span>Profil Saya</span>
                                    <ul class="ds-sub-menu">
                                        <li class="active"><a href="dashboard-member.html">Biodata Diri</a></li>
                                        <li><a href="dashboard-m-kondisi-usaha.html">Kondisi Lokasi Usaha</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-ds">
                                <div class="ds-menu">
                                    <span>Pembelian</span>
                                    <ul class="ds-sub-menu">
                                        <li class=""><a href="dashboard-transaksi.html">Daftar Transaksi</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="main-ds">
                                <div class="ds-menu">
                                    <span>Member</span>
                                    <ul class="ds-sub-menu">
                                        <li class=""><a href="dashboard-list-member.html">Daftar Member</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                                
                            <div class="ds-logout">
                                <a href="" class="ds-logout">Keluar Akun</a>
                            
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <div class="bx-ds-content">
                            
                            <h1 class="title-ds-content">Biodata Diri</h1>
                            <div class="row ds-content">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                    <h1 class="head-content">Ubah Foto Profil</h1>
                                    <form action="">
                                        <div class="change-profil">
                                            <div class="form-group">
                                                <!-- <label for="gambar">Upload Foto Lokasi Usaha</label> -->
                                                <div class="bx-file">
                                                    <div class="img-load">
                                                        <img id="thumbnail" src="img/profile.jpg" alt="Thumbnail">
                                                    </div>
                                                    <div class="for-file">
                                                        <!-- <label for="gambar">Pilih Gambar:</label> -->
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="gambar" accept="image/*">
                                                            <label class="custom-file-label" for="gambar">Upload Foto Baru</label>
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
                                        </div>
                                        <div class="for-btn">
                                            <button type="submit" class="b-for-save">Simpan Foto</button>
                                        </div>
                                        <div class="for-btn">
                                            <a class="b-for-pw" data-toggle="modal" data-target="#editPWModal">Ubah Kata Sandi</a>
                                        </div>
                                        <div class="map-profil">
                                            <span>Lokasi Usaha</span>
                                            <div class="bx-map-p">
                                                <div id="map2"></div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                                    <h1 class="head-content">Ubah Biodata Diri</h1>
                                    <div class="view-profil">
                                        <div class="vp-title">
                                            Nama Pemilik
                                        </div>
                                        <div class="ct-title">
                                            Bacharuddin J Habibie
                                        </div>
                                    </div>
                                    <div class="view-profil">
                                        <div class="vp-title">
                                            Nama Usaha
                                        </div>
                                        <div class="ct-title">
                                            TokoKangCuci
                                        </div>
                                    </div>
                                    <div class="view-profil">
                                        <div class="vp-title">
                                            Alamat KTP
                                        </div>
                                        <div class="ct-title">
                                            Jl.Alamat KTP Rt.01 Rw.02 Komplek Contoh KTP No.12, Kota Bogor, Kec.Sukasari, Kel.Sukadamai 19210
                                        </div>
                                    </div>
                                    <div class="view-profil">
                                        <div class="vp-title">
                                            Alamat Usaha
                                        </div>
                                        <div class="ct-title">
                                            Jl.Alamat KTP Rt.01 Rw.02 Komplek Contoh KTP No.12, Kota Bogor, Kec.Sukasari, Kel.Sukadamai 19210
                                        </div>
                                    </div>
                                    <div class="view-profil">
                                        <div class="vp-title">
                                            No.Aktif Handphone
                                        </div>
                                        <div class="ct-title">
                                            +62 81234567890
                                        </div>
                                    </div>
                                    <div class="view-profil">
                                        <div class="vp-title">
                                            Email
                                        </div>
                                        <div class="ct-title">
                                            email@gmail.com
                                        </div>
                                    </div>
                                    <div class="edit-btn">
                                        <a class="btx primer-solid" data-toggle="modal" data-target="#editMemberModal">Ubah Biodata Diri <img src="img/icon-edit.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
             
                </div>
            </div>  
            
        </section>
       

    <script>
        document.getElementById('gambar').addEventListener('change', function() {
            var file = this.files[0];
            // var fileName = file.name;
            if (file.name.length > 10) {
                var fileName = file.name.slice(0, 20);
            }else{
                var fileName = file.name;
            }
            // console.log(file.name);
            var label = document.querySelector('.custom-file-label');
            label.innerHTML = fileName;
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail').src = e.target.result;
                document.getElementById('thumbnail').style.display = 'block';
            }
            reader.readAsDataURL(file);
        });

       
    </script>
    <!-- Modal Edit Password -->
    <div class="modal fade" id="editPWModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                        <g clip-path="url(#clip0_161_3396)">
                          <path d="M6.153 35.8472C4.14728 33.9101 2.54746 31.5928 1.44687 29.0307C0.346277 26.4686 -0.233034 23.713 -0.257264 20.9247C-0.281494 18.1363 0.249842 15.371 1.30574 12.7902C2.36164 10.2094 3.92095 7.86469 5.8927 5.89294C7.86445 3.9212 10.2091 2.36188 12.79 1.30598C15.3708 0.250086 18.1361 -0.28125 20.9244 -0.25702C23.7128 -0.232789 26.4684 0.346521 29.0305 1.44711C31.5926 2.5477 33.9098 4.14753 35.847 6.15324C39.6723 10.1139 41.789 15.4185 41.7411 20.9247C41.6933 26.4308 39.4848 31.6979 35.5912 35.5914C31.6976 39.485 26.4306 41.6935 20.9244 41.7414C15.4183 41.7892 10.1136 39.6726 6.153 35.8472ZM23.94 21.0002L29.883 15.0572L26.922 12.0962L21 18.0392L15.057 12.0962L12.096 15.0572L18.039 21.0002L12.096 26.9432L15.057 29.9042L21 23.9612L26.943 29.9042L29.904 26.9432L23.961 21.0002H23.94Z" fill="black"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_161_3396">
                            <rect width="42" height="42" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg></span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="title-form">
                        <span >Ubah Kata Sandi</span>
                    </div>
                    
                    <div class="row">
                        <form action="" class="form-primerer">
                            
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            
                            <div class="box-regis for-formpw">
                                <span class="cart-title-head">Data Diri</span>
                                <div class="form-primer">
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="email" class="form-control" id="nama" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="handphone">Password Lama</label>
                                        <input type="password" class="form-control" id="handphone" placeholder="*****">
                                    </div>
                                    <div class="bx-jas-send">
                                        <span class="cart-title-head">Kata Sandi Baru</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="handphone">Password Baru</label>
                                        <input type="password" class="form-control" id="handphone" placeholder="*****">
                                    </div>
                                    <div class="form-group">
                                        <label for="handphone">Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" id="handphone" placeholder="*****">
                                    </div>
                                   
                                   
                                </div>
                            </div>
                        </div>
                     
                        </form>
                   
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btx primer-border" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btx primer-solid">Simpan Data</button>
                </div>
            </form>
            
        </div>
        </div>
    </div>
    <!-- Modal Edit Member -->
    <div class="modal fade" id="editMemberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                        <g clip-path="url(#clip0_161_3396)">
                          <path d="M6.153 35.8472C4.14728 33.9101 2.54746 31.5928 1.44687 29.0307C0.346277 26.4686 -0.233034 23.713 -0.257264 20.9247C-0.281494 18.1363 0.249842 15.371 1.30574 12.7902C2.36164 10.2094 3.92095 7.86469 5.8927 5.89294C7.86445 3.9212 10.2091 2.36188 12.79 1.30598C15.3708 0.250086 18.1361 -0.28125 20.9244 -0.25702C23.7128 -0.232789 26.4684 0.346521 29.0305 1.44711C31.5926 2.5477 33.9098 4.14753 35.847 6.15324C39.6723 10.1139 41.789 15.4185 41.7411 20.9247C41.6933 26.4308 39.4848 31.6979 35.5912 35.5914C31.6976 39.485 26.4306 41.6935 20.9244 41.7414C15.4183 41.7892 10.1136 39.6726 6.153 35.8472ZM23.94 21.0002L29.883 15.0572L26.922 12.0962L21 18.0392L15.057 12.0962L12.096 15.0572L18.039 21.0002L12.096 26.9432L15.057 29.9042L21 23.9612L26.943 29.9042L29.904 26.9432L23.961 21.0002H23.94Z" fill="black"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_161_3396">
                            <rect width="42" height="42" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg></span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="title-form">
                        <span >Ubah Biodata Diri</span>
                    </div>
                    
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
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="box-regis pl-cus">
                                <span class="cart-title-head">Alamat Usaha Saat Ini</span>
                                <div class="form-primer">
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
                        </form>
                   
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btx primer-border" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btx primer-solid">Simpan Data</button>
                </div>
            </form>
            
        </div>
        </div>
    </div>
    
 
<?php include("footer.php") ?>

<script>
        var map2 = L.map('map2').setView([-6.5718599,106.9005411], 9);

        // Tambahkan peta dari sumber data OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map2);

        // Tambahkan penanda pada peta kedua
        // var marker2 = L.marker([52.5, -0.09]).addTo(map2);
        // marker2.bindPopup("<b>Halo!</b><br>Selamat datang di peta kedua.").openPopup();
</script>