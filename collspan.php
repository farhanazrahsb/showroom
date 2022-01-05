<div id="accordion">
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Mesin
        </button>
    </div>
    <div id="menuone" class="collapse">
    <div class="card-body">
        <?php
        include "koneksi/koneksi.php";
        $id_type = $_GET['id_type'];
        $query = mysqli_query($koneksi, "SELECT * FROM mesin WHERE id_type = '$id_type'");
        while ($var=mysqli_fetch_array($query)) {
        ?>
            <table class="table" style="text-align: left;">
            <tr>
                <td>Diameter x Langkah(mm)</td>
                <td>:</td>
                <td><?php echo $var['diameter']; ?></td>
            </tr>
            <tr>
                <td>Perbandingan Kompresi</td>
                <td>:</td>
                <td><?php echo $var['kompresi']; ?></td>
            </tr>
            <tr>
                <td>Jumlah/Tipe Silinder</td>
                <td>:</td>
                <td><?php echo $var['jumlah_silinder']; ?></td>
            </tr>
            <tr>
                <td>Kapasitas Silinder(CC)</td>
                <td>:</td>
                <td><?php echo $var['kapasitas_silinder']; ?></td>
            </tr>
            <tr>
                <td>Sistme Bahan Bakar</td>
                <td>:</td>
                <td><?php echo $var['sistem_bbm']; ?></td>
            </tr>
            <tr>
                <td>Bahan Bakar</td>
                <td>:</td>
                <td><?php echo $var['bbm']; ?></td>
            </tr>
            <tr>
                <td>Daya Maksimum</td>
                <td>:</td>
                <td><?php echo $var['daya_maks']; ?></td>
            </tr>
            <tr>
                <td>Torsi Minimum</td>
                <td>:</td>
                <td><?php echo $var['torsi_maks']; ?></td>
            </tr>
            <tr>
                <td>Tipe Mesin</td>
                <td>:</td>
                <td><?php echo $var['tipe_mesin']; ?></td>
            </tr>
            <tr>
                <td>Sistem Penggerak Roda</td>
                <td>:</td>
                <td><?php echo $var['penggerak_roda']; ?></td>
            </tr>
            </table>
        <?php
        }
        ?> 
    </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Transmisi
        </button>
    </div>
    <div id="menutwo" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM transmisi WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Perbandingan Gigi 1st</td>
            <td>:</td>
            <td><?php echo $var['gigi1']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 2nd</td>
            <td>:</td>
            <td><?php echo $var['gigi2']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 3rd</td>
            <td>:</td>
            <td><?php echo $var['gigi3']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 4th</td>
            <td>:</td>
            <td><?php echo $var['gigi4']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 5th</td>
            <td>:</td>
            <td><?php echo $var['gigi5']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 6th</td>
            <td>:</td>
            <td><?php echo $var['gigi6']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 7th</td>
            <td>:</td>
            <td><?php echo $var['gigi7']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi 8th</td>
            <td>:</td>
            <td><?php echo $var['gigi8']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi Reverse</td>
            <td>:</td>
            <td><?php echo $var['gigi_reverse']; ?></td>
        </tr>
        <tr>
            <td>Perbandingan Gigi Akhir</td>
            <td>:</td>
            <td><?php echo $var['gigi_akhir']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Exterior
        </button>
    </div>
    <div id="menu3" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM exterior WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Handle Pintu Krom</td>
            <td>:</td>
            <td><?php echo $var['handle']; ?></td>
        </tr>
        <tr>
            <td>Lampu Rem Belakang Tengah</td>
            <td>:</td>
            <td><?php echo $var['lamp_rem']; ?></td>
        </tr>
        <tr>
            <td>Lampu Tanda Belok Samping</td>
            <td>:</td>
            <td><?php echo $var['lamp_belok']; ?></td>
        </tr>
        <tr>
            <td>Lampu Kabut</td>
            <td>:</td>
            <td><?php echo $var['lamp_kabut']; ?></td>
        </tr>
        <tr>
            <td>Spion Otomatis</td>
            <td>:</td>
            <td><?php echo $var['spion_auto']; ?></td>
        </tr>
        <tr>
            <td>Kaca Depan Jendela Otomatis</td>
            <td>:</td>
            <td><?php echo $var['kaca_depan_auto']; ?></td>
        </tr>
        <tr>
            <td>Kaca Belakang Jendela Otomatis</td>
            <td>:</td>
            <td><?php echo $var['kaca_belakang_auto']; ?></td>
        </tr>
        <tr>
            <td>Electric Sunroof</td>
            <td>:</td>
            <td><?php echo $var['sunroof']; ?></td>
        </tr>
        <tr>
            <td>Manual Sunroof</td>
            <td>:</td>
            <td><?php echo $var['sunroof_manual']; ?></td>
        </tr>
        <tr>
            <td>Roof Back</td>
            <td>:</td>
            <td><?php echo $var['roof_back']; ?></td>
        </tr>
        <tr>
            <td>Wiper Depan</td>
            <td>:</td>
            <td><?php echo $var['wiper_depan']; ?></td>
        </tr>
        <tr>
            <td>Wiper Belakang</td>
            <td>:</td>
            <td><?php echo $var['wiper_belakang']; ?></td>
        </tr>
        <tr>
            <td>Gril Krom</td>
            <td>:</td>
            <td><?php echo $var['gril']; ?></td>
        </tr>
        <tr>
            <td>Spoiler Bemper Bawah</td>
            <td>:</td>
            <td><?php echo $var['spoiler_bwh']; ?></td>
        </tr>
        <tr>
            <td>Spoiler Bemper Belakang</td>
            <td>:</td>
            <td><?php echo $var['spoiler_belakang']; ?></td>
        </tr>
        <tr>
            <td>Spoiler Samping</td>
            <td>:</td>
            <td><?php echo $var['spoiler_samping']; ?></td>
        </tr>
        <tr>
            <td>Mufler Cutter</td>
            <td>:</td>
            <td><?php echo $var['mufler']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Interior
        </button>
    </div>
    <div id="menu4" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM interior WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Socket Aksesoris</td>
            <td>:</td>
            <td><?php echo $var['socket']; ?></td>
        </tr>
        <tr>
            <td>Asbak</td>
            <td>:</td>
            <td><?php echo $var['asbak']; ?></td>
        </tr>
        <tr>
            <td>Saku Pintu</td>
            <td>:</td>
            <td><?php echo $var['saku_pintu']; ?></td>
        </tr>
        <tr>
            <td>Saku Pintu Belakang</td>
            <td>:</td>
            <td><?php echo $var['saku_belakang']; ?></td>
        </tr>
        <tr>
            <td>Foldable Grip Assist</td>
            <td>:</td>
            <td><?php echo $var['foldable']; ?></td>
        </tr>
        <tr>
            <td>Sandar Kepala Depan</td>
            <td>:</td>
            <td><?php echo $var['sandar_depan']; ?></td>
        </tr>
        <tr>
            <td>Sandar kepala Belakang</td>
            <td>:</td>
            <td><?php echo $var['sandar_belakang']; ?></td>
        </tr>
        <tr>
            <td>Laci Depan</td>
            <td>:</td>
            <td><?php echo $var['laci_dpn']; ?></td>
        </tr>
        <tr>
            <td>Kaca Spion Dalam</td>
            <td>:</td>
            <td><?php echo $var['spion_dlm']; ?></td>
        </tr>
        <tr>
            <td>Jok Kulit</td>
            <td>:</td>
            <td><?php echo $var['jok_kulit']; ?></td>
        </tr>
        <tr>
            <td>Kursi Belakang(3 Baris)</td>
            <td>:</td>
            <td><?php echo $var['kursi_belakang']; ?></td>
        </tr>
        <tr>
            <td>Kursi Belakang Dapat Dilipat</td>
            <td>:</td>
            <td><?php echo $var['kursi_belakang_lipat']; ?></td>
        </tr>
        <tr>
            <td>Roda Kemudi</td>
            <td>:</td>
            <td><?php echo $var['kemudi']; ?></td>
        </tr>
        <tr>
            <td>Tachometer</td>
            <td>:</td>
            <td><?php echo $var['tachometer']; ?></td>
        </tr>
        <tr>
            <td>Kaca Hias</td>
            <td>:</td>
            <td><?php echo $var['kaca_hias']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Dimensi
        </button>
    </div>
    <div id="menu5" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM dimensi WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Berat Kosong Tanpa Muatan(Kg)</td>
            <td>:</td>
            <td><?php echo $var['berat_tanpa_muatan']; ?></td>
        </tr>
        <tr>
            <td>Berat Kosong Dengan Muatan(Kg)</td>
            <td>:</td>
            <td><?php echo $var['berat_muatan']; ?></td>
        </tr>
        <tr>
            <td>Jarak Pijak Depan(mm)</td>
            <td>:</td>
            <td><?php echo $var['jarak_depan']; ?></td>
        </tr>
        <tr>
            <td>Jarak Rendah Kendaraan(mm)</td>
            <td>:</td>
            <td><?php echo $var['jarak_rendah']; ?></td>
        </tr>
        <tr>
            <td>Jarak Pijak Belakang(mm)</td>
            <td>:</td>
            <td><?php echo $var['jarak_belakang']; ?></td>
        </tr>
        <tr>
            <td>Kapasitas Tangki(L)</td>
            <td>:</td>
            <td><?php echo $var['kapasitas_tangki']; ?></td>
        </tr>
        <tr>
            <td>Kapasitas Penumpang(Orang)</td>
            <td>:</td>
            <td><?php echo $var['kapasitas_penumpang']; ?></td>
        </tr>
        <tr>
            <td>Radius Putar/Momen Puntir(m)</td>
            <td>:</td>
            <td><?php echo $var['radius']; ?></td>
        </tr>
        <tr>
            <td>Panjang Kendaraan(mm)</td>
            <td>:</td>
            <td><?php echo $var['panjang']; ?></td>
        </tr>
        <tr>
            <td>Tinggi Kendaraan(mm)</td>
            <td>:</td>
            <td><?php echo $var['tinggi']; ?></td>
        </tr>
        <tr>
            <td>Lebar Kendaraan(mm)</td>
            <td>:</td>
            <td><?php echo $var['lebar']; ?></td>
        </tr>
        <tr>
            <td>Sumbu Roda/Jarak Poros Roda(mm)</td>
            <td>:</td>
            <td><?php echo $var['sumbu_roda']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Kenyamanan
        </button>
    </div>
    <div id="menu6" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM kenyamanan WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Pendingin Udara</td>
            <td>:</td>
            <td><?php echo $var['pendingin']; ?></td>
        </tr>
        <tr>
            <td>Audio Sistem</td>
            <td>:</td>
            <td><?php echo $var['audio']; ?></td>
        </tr>
        <tr>
            <td>TV/Video Ruang Belakang</td>
            <td>:</td>
            <td><?php echo $var['audio_belakang']; ?></td>
        </tr>
        <tr>
            <td>Pengeras Suara/Speaker(pcs)</td>
            <td>:</td>
            <td><?php echo $var['speaker']; ?></td>
        </tr>
        <tr>
            <td>Konsol Tengah</td>
            <td>:</td>
            <td><?php echo $var['konsol_tengah']; ?></td>
        </tr>
        <tr>
            <td>Kontrol Iklim</td>
            <td>:</td>
            <td><?php echo $var['kontrol_iklim']; ?></td>
        </tr>
        <tr>
            <td>Kontrol Perjalanan</td>
            <td>:</td>
            <td><?php echo $var['kontrol_perjalanan']; ?></td>
        </tr>
        <tr>
            <td>Pengingat Kunci</td>
            <td>:</td>
            <td><?php echo $var['pengingat_kunci']; ?></td>
        </tr>
        <tr>
            <td>Power Steering</td>
            <td>:</td>
            <td><?php echo $var['power_steering']; ?></td>
        </tr>
        <tr>
            <td>Jendela Otomatis</td>
            <td>:</td>
            <td><?php echo $var['jendela_auto']; ?></td>
        </tr>
        <tr>
            <td>Navigasi Satelit/GPS</td>
            <td>:</td>
            <td><?php echo $var['gps']; ?></td>
        </tr>
        <tr>
            <td>Pengingat Sabuk Pengaman</td>
            <td>:</td>
            <td><?php echo $var['sabuk']; ?></td>
        </tr>
        <tr>
            <td>Material/Bahan Pelapis Kursi</td>
            <td>:</td>
            <td><?php echo $var['bahan_kursi']; ?></td>
        </tr>
        <tr>
            <td>Anti Kabut Kaca Belakang</td>
            <td>:</td>
            <td><?php echo $var['kaca_belakang_kabut']; ?></td>
        </tr>
        <tr>
            <td>Penyesuaian Setir/Tilt Steering</td>
            <td>:</td>
            <td><?php echo $var['tilt_steering']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu7" aria-expanded="false" aria-controls="menu7" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Keamanan Dan Keselamatan
        </button>
    </div>
    <div id="menu7" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM keamanan WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Alarm</td>
            <td>:</td>
            <td><?php echo $var['alarm']; ?></td>
        </tr>
        <tr>
            <td>Anti Lock Breaking System(ABS</td>
            <td>:</td>
            <td><?php echo $var['abs']; ?></td>
        </tr>
        <tr>
            <td>Kunci Sentral/Central Lock</td>
            <td>:</td>
            <td><?php echo $var['kunci_sentral']; ?></td>
        </tr>
        <tr>
            <td>Child Lock</td>
            <td>:</td>
            <td><?php echo $var['child_lock']; ?></td>
        </tr>
        <tr>
            <td>Bantal Udara/Airbag Pengemudi</td>
            <td>:</td>
            <td><?php echo $var['airbag_kemudi']; ?></td>
        </tr>
        <tr>
            <td>Bantal Udara/Airbag Depan</td>
            <td>:</td>
            <td><?php echo $var['airbag_depan']; ?></td>
        </tr>
        <tr>
            <td>Bantal Udara/Airbag Samping</td>
            <td>:</td>
            <td><?php echo $var['airbag_samping']; ?></td>
        </tr>
        <tr>
            <td>Electronic Stability Program(ESP)</td>
            <td>:</td>
            <td><?php echo $var['esp']; ?></td>
        </tr>
        <tr>
            <td>Euro NCAP Occupant Protection</td>
            <td>:</td>
            <td><?php echo $var['occupant_protect']; ?></td>
        </tr>
        <tr>
            <td>Euro NCAP Child Protection</td>
            <td>:</td>
            <td><?php echo $var['child_protect']; ?></td>
        </tr>
        <tr>
            <td>Euro NCAP Pedestrian Protection</td>
            <td>:</td>
            <td><?php echo $var['pedestrian_protect']; ?></td>
        </tr>
        <tr>
            <td>Euro NCAP Overall Rating</td>
            <td>:</td>
            <td><?php echo $var['overall_rating']; ?></td>
        </tr>
        <tr>
            <td>Sabuk Pengaman Depan</td>
            <td>:</td>
            <td><?php echo $var['sabuk_depan']; ?></td>
        </tr>
        <tr>
            <td>Sabuk Pengaman Belakang</td>
            <td>:</td>
            <td><?php echo $var['sabuk_belakang']; ?></td>
        </tr>
        <tr>
            <td>Sabuk Pengaman Pretensioner</td>
            <td>:</td>
            <td><?php echo $var['sabuk_pretensioner']; ?></td>
        </tr>
        <tr>
            <td>Immobiliser</td>
            <td>:</td>
            <td><?php echo $var['immobiliser']; ?></td>
        </tr>
        <tr>
            <td>Sensor Hujan</td>
            <td>:</td>
            <td><?php echo $var['sensor_hujan']; ?></td>
        </tr>
        <tr>
            <td>Sensor Parkir</td>
            <td>:</td>
            <td><?php echo $var['sensor_parkir']; ?></td>
        </tr>
        <tr>
            <td>Kaca Spion Belakang/Rear Reflector</td>
            <td>:</td>
            <td><?php echo $var['spion_belakang']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu8" aria-expanded="false" aria-controls="menu8" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Sasis, Ban Dan Velg
        </button>
    </div>
    <div id="menu8" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM parts WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Velg/Alloy Wheels</td>
            <td>:</td>
            <td><?php echo $var['velg']; ?></td>
        </tr>
        <tr>
            <td>Sistem Kemudi/Steering</td>
            <td>:</td>
            <td><?php echo $var['steering']; ?></td>
        </tr>
        <tr>
            <td>Ukuran Ban Depan Dan Belakang</td>
            <td>:</td>
            <td><?php echo $var['ukuran_ban']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu9" aria-expanded="false" aria-controls="menu9" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Rem
        </button>
    </div>
    <div id="menu9" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM parts WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Rem Depan</td>
            <td>:</td>
            <td><?php echo $var['rem_depan']; ?></td>
        </tr>
        <tr>
            <td>Rem Belakang</td>
            <td>:</td>
            <td><?php echo $var['rem_belakang']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu10" aria-expanded="false" aria-controls="menu10" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Suspension
        </button>
    </div>
    <div id="menu10" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM parts WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Suspensi Depan</td>
            <td>:</td>
            <td><?php echo $var['suspensi_depan']; ?></td>
        </tr>
        <tr>
            <td>Suspensi Belakang</td>
            <td>:</td>
            <td><?php echo $var['suspensi_belakang']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <button class="btn btn-info btn-block" type="button" data-toggle="collapse"  href="#menu11" aria-expanded="false" aria-controls="menu11" style="text-align: left;">
            <span class="collapsed"><i class="fa fa-plus"></i></span> 
            <span class="expanded"><i class="fa fa-minus"></i></span> 
            &nbsp;Warna
        </button>
    </div>
    <div id="menu11" class="collapse">
    <div class="card-body">
    <?php
    include "koneksi/koneksi.php";
    $id_type = $_GET['id_type'];
    $query = mysqli_query($koneksi, "SELECT * FROM parts WHERE id_type = '$id_type'");
    while ($var=mysqli_fetch_array($query)) {
    ?>
    <table class="table" style="text-align: left;">
        <tr>
            <td>Warna</td>
            <td>:</td>
            <td><?php echo $var['warna']; ?></td>
        </tr>
    </table>
    <?php
    }
    ?> 
    </div>
    </div>
</div>
</div>