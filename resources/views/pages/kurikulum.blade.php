@extends('layouts.app')
@section('title', 'Kurikulum Perjalanan Wisata')

@section('content')
<main>
    <section>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 profil">
            <h5 class="h5-profil mt-5">A. Kelompok Mata Kuliah</h5>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mata Kuliah Kompetensi Umum</td>
                <td>8</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mata Kuliah Kompetensi Utama</td>
                <td>98</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mata Kuliah Kompetensi Pendukung</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>110</td>
            </tr>
            </table>
            <h5 class="h5-profil mt-5">B. Daftar Matakuliah</h5>
            <h6>1. Matakuliah Umum</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>00053122</td>
                <td>Pendidikan Agama</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>00051112</td>
                <td>Pendidikan Kewarnegaraan</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>00053132</td>
                <td>Bahasa Indonesia</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>44230492</td>
                <td>Statistik Pariwisata dan SPSS</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Jumlah</td>
                <td>8</td>
            </tr>
            </table>
            <h6>2. Matakuliah Utama</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>44232343</td>
                <td>Akomodasi dan Restoran</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>44232352</td>
                <td>Ekonomi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>44230012</td>
                <td>Pengantar Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>44230712</td>
                <td>Geografi Pariwisata I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>44230722</td>
                <td>Geografi Pariwisata II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>44230283</td>
                <td>Kebudayaan dan Kesenian Indonesia</td>
                <td>3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>44232592</td>
                <td>Dasar-dasar Manajemen</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>44230812</td>
                <td>Bahasa Inggris I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>44230822</td>
                <td>Bahasa Inggris II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>10</td>
                <td>44230832</td>
                <td>Bahasa Inggris III</td>
                <td>2</td>
            </tr>
            <tr>
                <td>11</td>
                <td>44232372</td>
                <td>Sistem Teknologi Informasi</td>
                <td>2</td>
            </tr>
            <tr>
                <td>12</td>
                <td>44232383</td>
                <td>Dasar-dasar MICE</td>
                <td>3</td>
            </tr>
            <tr>
                <td>13</td>
                <td>44230022</td>
                <td>Sejarah Indonesia</td>
                <td>2</td>
            </tr>
            <tr>
                <td>14</td>
                <td>44230403</td>
                <td>P3K dan SAR</td>
                <td>3</td>
            </tr>
            <tr>
                <td>15</td>
                <td>44232583</td>
                <td>Akuntansi</td>
                <td>3</td>
            </tr>
            <tr>
                <td>16</td>
                <td>44232392</td>
                <td>Wisata Museum</td>
                <td>2</td>
            </tr>
            <tr>
                <td>17</td>
                <td>44232403</td>
                <td>Studi Wilayah Pariwisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td>18</td>
                <td>44232414</td>
                <td>Antropologi dan Sosiologi</td>
                <td>4</td>
            </tr>
            <tr>
                <td>19</td>
                <td>44232422</td>
                <td>Pengantar Pemanduan</td>
                <td>2</td>
            </tr>
            <tr>
                <td>20</td>
                <td>44232432</td>
                <td>Pemanduan I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>21</td>
                <td>44232442</td>
                <td>Pemanduan II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>22</td>
                <td>44232452</td>
                <td>Pemanduan III</td>
                <td>2</td>
            </tr>
            <tr>
                <td>23</td>
                <td>44232463</td>
                <td>Tarif dan Dokumen Pasasi</td>
                <td>3</td>
            </tr>
            <tr>
                <td>24</td>
                <td>44230272</td>
                <td>Psikologi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>25</td>
                <td>44232472</td>
                <td>Tradisi Etnik Nusantara</td>
                <td>2</td>
            </tr>
            <tr>
                <td>26</td>
                <td>44230472</td>
                <td>Reservasi I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>27</td>
                <td>44230482</td>
                <td>Reservasi II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>28</td>
                <td>44230243</td>
                <td>Pabean, Imigrasi dan Karantina</td>
                <td>3</td>
            </tr>
            <tr>
                <td>29</td>
                <td>44230842</td>
                <td>Pemasaran Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>30</td>
                <td>44232482</td>
                <td>Hubungan Lintas Budaya</td>
                <td>2</td>
            </tr>
            <tr>
                <td>31</td>
                <td>44232492</td>
                <td>Hukum dan Kebijakan Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>32</td>
                <td>44232502</td>
                <td>Metodologi Riset Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>33</td>
                <td>44232513</td>
                <td>Manajemen dan Bisnis Pariwisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td>34</td>
                <td>44232524</td>
                <td>Manajemen Angkatan Laut, Udara dan Darat</td>
                <td>4</td>
            </tr>
            <tr>
                <td>35</td>
                <td>44232532</td>
                <td>Kewirausahaan</td>
                <td>2</td>
            </tr>
            <tr>
                <td>36</td>
                <td>44232542</td>
                <td>Etika dan Kepribadian</td>
                <td>2</td>
            </tr>
            <tr>
                <td>37</td>
                <td>44232552</td>
                <td>Teknik Interpretasi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>38</td>
                <td>44232563</td>
                <td>Perencanaan Perjalanan Wisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td>39</td>
                <td>44231004</td>
                <td>Praktek Kerja Lapangan</td>
                <td>4</td>
            </tr>
            <tr>
                <td>40</td>
                <td>44232574</td>
                <td>Tugas Akhir</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Jumlah</td>
                <td>98</td>
            </tr>
            </table>
            <h6>3. Matakuliah Pendukung</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>44230312</td>
                <td>Bahasa Jepang I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>44230322</td>
                <td>Bahasa Jepang II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Jumlah</td>
                <td>4</td>
            </tr>
            </table>
        </div>
        <div class="col-lg-6 profil">
            <h5 class="h5-profil mt-5">Matakuliah Per Semester</h5>
            <h6>Semester 1</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Pendidikan Agama</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sejarah Indonesia</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bahasa Indonesia</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Akomodasi dan Restoran</td>
                <td>3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ekonomi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pengantar Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Geografi Pariwisata 1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Sistem Teknologi Informasi</td>
                <td>2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Dasar-dasar Manajemen</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>19</td>
            </tr>
            </table>
            <h6>Semester 2</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bahasa Inggris I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kebudayaann dan Kesenian Indonesia</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dasar-dasar MICE</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Geografi Pariwisata Indonesia II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Bahasa Jepang I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pengantar Pemanduan</td>
                <td>2</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kewarnegaraan</td>
                <td>3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>P3K SAR</td>
                <td>3</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Akuntansi</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>22</td>
            </tr>
            </table>
            <h6>Semester 3</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Wisata Museum</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bahasa Inggris II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bahasa Jepang II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Perencanaan Perjalanan Wisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Studi Wilayah Pariwisata</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Antropologi dan Sosiologi</td>
                <td>3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Pemanduan I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Tarif Dokumen Pasasi</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>21</td>
            </tr>
            </table>
            <h6>Semester 4</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Psikologi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tradisi Etnik Nusantara</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pemanduan II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Reservasi I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pemasaran Pariwisata I</td>
                <td>2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pabean, Imigrasi dan Karantina</td>
                <td>3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Hubungan Lintas Budaya</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Hukum dan Kebijakan Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Etika dan Kepribadian</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>19</td>
            </tr>
            </table>
            <h6>Semester 5</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bahasa Inggris III</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Statistik Pariwisata dan SPSS</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Reservasi II</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Metodologi Riset Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Manajemen Bisnis Perjalanan Wisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Manajemen Angkutan Laut, Darat dan Udara</td>
                <td>4</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Pemanduan III</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Kewirausahaan</td>
                <td>2</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Pemasaran Pariwisata II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>21</td>
            </tr>
            </table>
            <h6>Semester 6</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Praktik Kerja Lapangan</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tugas Akhir</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah</td>
                <td>8</td>
            </tr>
            </table>
        </div>
        <div class="col-lg-6 kurikulum">
            <h5 class="h5-kurikulum mt-5">Deskripsi Matakuliah</h5>
            <h6>1. Matakuliah Umum</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>00053122</td>
                <td>Pendidikan Agama</td>
                <td>2</td>
            </tr>
            <tr>
                <td>2</td>
                <td>00051112</td>
                <td>Pendidikan Kewarnegaraan</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>00053132</td>
                <td>Bahasa Indonesia</td>
                <td>2</td>
            </tr>
            <tr>
                <td>4</td>
                <td>44230492</td>
                <td>Statistik Pariwisata dan SPSS</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                dasar-dasar statistik dan mampu mengumpulkan, mengolah,
                menganalisa, menginterpretasikan, menyajikan dan
                memanfaatkan data secara manual maupun dengan menggunakan
                fasilitas software komputer.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                This course will introduce students to different types of
                statistics and statistical methods. Students will then be
                able to determine which statistic and /or method is
                appropriate for a given situation using a software computer
                programme (SPSS).
                </td>
            </tr>
            </table>
            <h6 style="padding-top: 5px">2. Matakuliah Pendukung</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>44230312</td>
                <td>Bahasa Jepang I</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat dasar dalam berkomunikasi secara lisan
                maupun tertulis dengan media bahasa Asing pilihan yakni
                Mandarin atau Jepang yang baik dan benar dengan
                berkonsentrasi di dalam structure,listening dan speaking.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this course is to gain Basic Japan or mandarin
                skills through language focus, vocabulary and speaking.
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>44230322</td>
                <td>Bahasa Jepang II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat dasar dalam berkomunikasi secara lisan
                maupun tertulis dengan media Bahasa Asing pilihan yakni
                Mandarin atau Jepang yang baik dan benar dengan
                berkonsentrasi di dalam speechwork,vocabulary dan reading.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this course is to gain Intermediate level
                Mandarin or Japanese skills through speechwork,vocabulary
                dan reading.
                </td>
            </tr>
            </table>
            <h6>3. Matakuliah Utama</h6>
            <table style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>44232343</td>
                <td>Akomodasi dan Restoran</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki memahami
                peran hotel dan restoran bagi kepariwisataan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                This course provides a basic understanding of the lodging
                and food and beverages service industry by tracing the
                industry’s growth and development, reviewing the
                organization of hotel and food and beverage operations, and
                by focusing on industry opportunities and future trends.
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>44232352</td>
                <td>Ekonomi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki dasar
                pengetahuan ekonomi dan dapat memahami kaitan antara
                perkembangan kepariwisataan dengan ekonomi.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                This course examines the fundamental economic principles as
                they apply to the tourism industry and explores the impacts
                of leisure and tourism on regional and national economics.
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>44230012</td>
                <td>Pengantar Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan mata kuliah ini diharapkan mahasiswa memiliki
                pengetahuan dasar yang cukup mengenai ruang lingkup
                kepariwisataan dalam kaitannya dengan bidang perjalanan
                wisata, pemandu wisata, perhotelan dan restoran secara
                komprehensif dan pendekatan tematik.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The key objective of tourisme principles and practice is to
                provide a comprehensive groundling in the subject of
                tourisme to all students. It takes a thematic approach to
                the subject, underpinning the various concepts associated
                with tourisme and demonstrating the linkages within the
                complex subject area.
                </td>
            </tr>
            <tr>
                <td>4.</td>
                <td>44230712</td>
                <td>Geografi Pariwisata I</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan geografi pariwisata Indonesia dan Asia untuk
                menyusun perencanaan perjalanan wisata dan perencanaan
                pemanduan wisata,serta mengkomunikasikannya kepada
                wisatawan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                Tourism Geography reveals how geographic perspectives can
                inform and illuminate the study of tourism. The course seeks
                to assist students to become to be more knowledgeable in
                tourism geography around Indonesia and Asia and thus capable
                to convey it to the tourist.
                </td>
            </tr>
            <tr>
                <td>5.</td>
                <td>44230722</td>
                <td>Geografi Pariwisata II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan geografi pariwisata Australia dan Amerika untuk
                menyusun perencanaan perjalanan wisata dan perencanaan
                pemanduan wisata, serta mengkomunikasikannya kepada
                wisatawan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course seeks to assist students to become to be more
                knowledgeable in tourism geography around Australia and
                America thus capable to convey it to the tourist.The course
                will explores the factors that have encouraged the
                development of both domestic and international forms of
                tourism, highlighting ways in which patterns of tourism have
                evolved and continue to evolve.
                </td>
            </tr>
            <tr>
                <td>6.</td>
                <td>44230283</td>
                <td>Kebudayaan dan Kesenian Indonesia</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan dan mampu mengapresiasikan nilai-nilai budaya
                bangsa Indonesia kepada wisatawan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                Within this course, students are expected to explore and
                appreciate the nation culture and values and conveyed to
                tourist.
                </td>
            </tr>
            <tr>
                <td>7.</td>
                <td>44232592</td>
                <td>Dasar-dasar Manajemen</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan mata kulah ini diharapka mahasiswa mampu menerapkan
                tentang konsep dasar manajemen dan perusahaan/organisasi,
                serta peran dari manager terutama dalam lingkungan global.
                Secara garis besar mata kuliah ini akan membahas ke-empat
                fungsi dasar dari manajemen, yakni planning,organizing,
                leading, dan controlling.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                This course prepares students with a comprehensive
                introduction to effective management principles and conduct
                through planning, organizing ,leading and controliing. It
                not only aims at providing students with an introduction to
                contemporary management concepts and skills, it also
                encourages students to put these concepts and skills into
                practice.
                </td>
            </tr>
            <tr>
                <td>8.</td>
                <td>44230812</td>
                <td>Bahasa Inggris I</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat dasar dalamberkomunikasi secara lisan
                maupun tertulis dengan media bahasa Inggris yang baik dan
                benar dengan berkonsentrasi di dalam structure,listening dan
                speaking.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this course is to gain Basic English skills
                through language focus, vocabulary and speaking.
                </td>
            </tr>
            <tr>
                <td>9.</td>
                <td>44230822</td>
                <td>Bahasa Inggris II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat dasar dalam berkomunikasi secara lisan
                maupun tertulis dengan media bahasa Inggris yang baik dan
                benar dengan berkonsentrasi di dalam speechwork,vocabulary
                dan reading.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this course is to gain Intermediate English
                skills through speechwork,vocabulary dan reading.
                </td>
            </tr>
            <tr>
                <td>10.</td>
                <td>44230832</td>
                <td>Bahasa Inggris III</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat dasar dalamberkomunikasi secara lisan
                maupun tertulis dengan media bahasa Inggris yang baik dan
                benar dengan berkonsentrasi di dalam writing dan
                scenario/case studies.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this course is to gain Advance English skills
                through writing dan scenario/case studies.
                </td>
            </tr>
            <tr>
                <td>11.</td>
                <td>44232372</td>
                <td>Sistem Teknologi Informasi</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini mahasiswa mampu mengimplementasikan
                teknologi informasi ke dalam industri pariwisata serta
                berbagai area yang terkait di dalam industri tersebut secara
                komprehensif.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                This course focusing on the implementation and use of
                information technology in the actual tourism industry, this
                course takes a very pragmatic and pointed approach to
                introducing technology as it applies to the business world.
                </td>
            </tr>
            <tr>
                <td>12.</td>
                <td>44232383</td>
                <td>Dasar-dasar MICE</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat mahir dalam memandu program pelaksanaan
                pariwisata konferensi dan bisnis
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                Through this course students will gain an understanding of
                the key issues concerning the MICE industry and the effects
                the sector has on the tourism and hospitality industry in
                Indonesia.
                </td>
            </tr>
            <tr>
                <td>13.</td>
                <td>44230022</td>
                <td>Sejarah Indonesia</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan dan mampu mengapresiasikan nilai-nilai sejarah
                bangsa Indonesia kepada wisatawan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course seeks to assist students to become more familiar
                with ways of knowing in the arts and humanities and to be
                more knowledgeable and capable in a range of to appreciate
                the value of indonesian history and shared it to the
                tourist.
                </td>
            </tr>
            <tr>
                <td>14.</td>
                <td>44230403</td>
                <td>P3K dan SAR</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki Trampil
                dalam menolong diri sendiri dan menolong wisatawan apabila
                terjadi musibah.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The unit develop student to be skillful in helping their own
                selves and the tourists if accidents occured.
                </td>
            </tr>
            <tr>
                <td>15.</td>
                <td>44232583</td>
                <td>Akuntansi</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki dasar
                pengetahuan dan ketrampilan akuntansi dan prosedur
                perbankan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                Accounting principles is a course that introduces students
                to the fundamentals offinancial accounting and managerial
                accounting. After completing this course, the students are
                expected to be able to understand how to use and interpret
                accounting information..
                </td>
            </tr>
            <tr>
                <td>16.</td>
                <td>44232392</td>
                <td>Wisata Museum</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pemahaman dari wisata museum serta bisa mengaplikasikan
                suatu bentuk yang konkrit untuk menarik wisatawan untuk
                berkunjung ke Museum.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this unit is to provide a critical review of the
                management of the museum in providing either a principal or
                ancillary attraction for tourist destination
                </td>
            </tr>
            <tr>
                <td>17.</td>
                <td>44232403</td>
                <td>Studi Wilayah Pariwisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Mata kuliah ini memberikan pemahaman tentang pengelolaan
                destinasi dan Obyek Daya Tarik Wisata (ODTW) mulai
                perencanaan, pengembangan dan pengawasan meliputi
                operasional, pemasaran dan sumber daya manusia (SDM) Mata
                kuliah ini mengarahkan mahasiswa untuk memiliki kepekaan
                dalam menemukenali potensi wisata di destinasi dan ODTW
                serta meramunya menjadi sebuah daya tarik wisata.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aims of this course is to develop an understanding of
                the basic concepts of tourism planning for public and
                private sector community also provide a service learning
                opportunity to students.
                </td>
            </tr>
            </table>
        </div>
        <div class="col-lg-6 kurikulum">
            <h5 class="h5-kurikulum mt-5">Deskripsi Matakuliah</h5>
            <h6>Matakuliah Utama</h6>
            <table style="width: 100%">
            <tr>
                <td>18.</td>
                <td>44232414</td>
                <td>Antropologi dan Sosiologi</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan mengenai konsep dasar sosiologi sebagai
                penunjang kepentingan lembaga pariwisata, pemahaman tentang
                dasar-dasar antropologi yang berisi pemhaman tentang
                mempelajari kebudayaan lain, struktur dari hubungan sosial
                antar manusia serta membahas sistem kepercayaan yang berada
                di masayarakat.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                This course is an introduction to sociology as a way of
                understanding the world which could be related to the
                tourism filed and to introduce students to the
                anthropological study of different cultures, including ways
                of comparing and contrasting the structures of social
                relationships and belief systems that operate in different
                cultural.
                </td>
            </tr>
            <tr>
                <td>19.</td>
                <td>44232422</td>
                <td>Pengantar Pemanduan</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa mempunyai
                dasar-dasar ilmu dalam memandu yang akan diaplikasikan dan
                diintegrasikan ke dalam jenjang praktek memandu.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course will be introducing the basic knowledge and the
                job description of a tour guide that later will be implied
                and integrated in the next semester.
                </td>
            </tr>
            <tr>
                <td>20.</td>
                <td>44232432</td>
                <td>Pemanduan I</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat mahir dalam memandu program pelaksanaan
                pariwisata ekologi.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aims of the course is to gain guiding tour skill to be
                more knowledgeable in tourism the ecology area.
                </td>
            </tr>
            <tr>
                <td>21.</td>
                <td>44232442</td>
                <td>Pemanduan II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat mahir dalam memandu program pelaksanaan
                pariwisata budaya.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aims of the course is to gain guiding tour skill to be
                more knowledgeable in tourism the cultural area.
                </td>
            </tr>
            <tr>
                <td>22.</td>
                <td>44232452</td>
                <td>Pemanduan III</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                ketrampilan tingkat mahir dalam memandu program pelaksanaan
                pariwisata pendidikan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aims of the course is to gain guiding tour skill to be
                more knowledgeable in tourism the eeducation area.
                </td>
            </tr>
            <tr>
                <td>23.</td>
                <td>44232463</td>
                <td>Tarif dan Dokumen Pasasi</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki praktis
                mengenai cara-cara pengisian dan penghitungan tiket dan
                dokumen-dokumen pasasi.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course seeks to assist students to become more familiar
                with ways of knowing in the airline fare and passage
                documents.
                </td>
            </tr>
            <tr>
                <td>24.</td>
                <td>44230272</td>
                <td>Psikologi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan mengenai pentingnya sikap dan tingkah laku dalam
                memelihara hubungan antarmanusia, dan mahasiswa dapat
                menghadapi dan melayani wisatawan dengan analisa psikologis.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                An introduction to the field of tourism sciences, and an
                overview of the scale and scope of the industry and business
                of tourism; the cooperative and dynamic nature of decision
                making in tourism; the contributions made by various
                disciplines towards understanding the consequences of
                tourism trade and activity; and identification of critical
                issues in the study of travel and tourism.
                </td>
            </tr>
            <tr>
                <td>25.</td>
                <td>44232472</td>
                <td>Tradisi Etnik Nusantara</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan Mata kuliah ini diharapkan mahasiswa mempunyai
                berbagai macam keahlian di bidang kesenian dari Indonesia
                seperti seni musik, seni tari, seni lukis dan
                lain-lain.Tujuan dari mata kuliah ini adalah sebagai apreasi
                anak bangsa untuk memelihara kebudayaan Indonesia.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course aims at students to participate and acknowledge
                the vast and richness of Indonesia Art and Culture.The
                students will learn various of art form that in the end of
                the course the students will have to perform their options.
                </td>
            </tr>
            <tr>
                <td>26.</td>
                <td>44230472</td>
                <td>Reservasi I</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Mata kuliah ini memberikan pemahaman tentang Reservasi
                melalui pembelajaran sari sebuah sistem yang disebut CRS
                yang digunakan oleh Hotel sampai dengan Bandara.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The method for learning for reservation is based on a system
                called Computer Reservation System (CRS) which is a
                Computer-based interactive electronic data systems providing
                direct access through terminals to airline, hotel and other
                operators’computers, to establish product availability, make
                reservations and print tickets.
                </td>
            </tr>
            <tr>
                <td>27.</td>
                <td>44230482</td>
                <td>Reservasi II</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Mata kuliah ini memberikan pemahaman tentang Reservasi
                melalui pembelajaran sari sebuah sistem yang disebut Abacus.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The method for learning for reservation is Abacu which is
                the one of the main computer reservationsystems (CRS)
                serving the Asian andPacific region, include AllNippon
                Airways, Cathay Pacific, ChinaAirlines, Malaysia Airlines,
                Philippine Airlines,RoyalBrunei and Singapore Airlines as
                principalshareholders, with a partnership agreementwith the
                Amadeus and Worldspansystems.
                </td>
            </tr>
            <tr>
                <td>28.</td>
                <td>44230243</td>
                <td>Pabean, Imigrasi dan Karantina</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan dan kemampuan pelayanan wisatawan tentang pabean
                dan fungsinya sebagai pengatur lalu lintas manusia dan
                barang-barang melalui pelabuhan; dan tentang keimigrasian,
                prosedur pemberian ijin keluar masuk Indonesia dan peraturan
                lalu lintas manusia; serta memiliki pengetahuan dan
                kemampuan pelayanan wisatawan tentang higiene, sanitasi dan
                peraturan-peraturan karantina.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course seeks to assist students to become more familiar
                with ways of knowing in the custom, immigration and
                quarantine area.
                </td>
            </tr>
            <tr>
                <td>29.</td>
                <td>44230842</td>
                <td>Pemasaran Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan tentang pemasaran,pengumpulan data dan
                pengelolaannya, perencanaan, faktor-faktor yang mempengaruhi
                pemasaran, usaha-usaha yang dilakukan untuk mempopulerkan
                produk wisata.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The course focuses on the basic principles of tourism and
                hospitality marketing management so as to establish a
                framework upon which to understand business development.
                </td>
            </tr>
            <tr>
                <td>30.</td>
                <td>44232482</td>
                <td>Hubungan Lintas Budaya</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pemahaman dan dapat melayani wisatawan dengan pendekatan
                kultural, serta dapat memahami, mengapresiasi dan menghadapi
                masyarakat dan ODTW.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aim of this course is to allow students to gain an
                understanding through learning and experience the cross
                culture in every part of the world.
                </td>
            </tr>
            <tr>
                <td>31.</td>
                <td>44232492</td>
                <td>Hukum dan Kebijakan Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan mata kuliah ini diharapkan mahasiswa harus memiliki
                pengetahuan tentang hukum dan kebijakan pariwisata yang
                mengatur dan menata semua bentuk usaha yang terkait dengan
                kepariwisataan khususnya Indonesia.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                To introduce students to the various perspectives on social
                policy and fasilitate an understanding of contemporary
                debates on the development of public polic. To enable
                students to apprrciate the moral and ethical issues involved
                in leissure and tourism policy.
                </td>
            </tr>
            <tr>
                <td>32.</td>
                <td>44232502</td>
                <td>Metodologi Riset Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                mengetahui tentang tata cara mengadakan penelitian,
                pengumpulan data, mengidentifikasikan, mengolah dan
                menganalisa masalah untuk menyusun laporan dan karya tulis
                tentang kepariwisataan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The unit focuses upon the knowledge and skills required to
                understand, excute and evaluate research.
                </td>
            </tr>
            <tr>
                <td>33.</td>
                <td>44232513</td>
                <td>Manajemen Bisnis Perjalanan Wisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki peranan
                dan fungsi perusahaan Usaha Perjalanan Wisata dan Usaha
                Pramuwisata dalam menunjang pengembangan kepariwisataan
                Nasional.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The aims are to provide an overview of the tour operation
                sector and to apply business management approaches sector.
                In particular the unit will provide an academic framework to
                convert operational experience into a disciplined approach
                to the sector.
                </td>
            </tr>
            <tr>
                <td>34.</td>
                <td>44232524</td>
                <td>Manajemen Angkutan Laut, Darat dan Udara</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                pengetahuan dasar-dasar penjualan jasaangkutan niaga dan
                mahasiswa Siap kerja pada semua bagian administrasi
                perusahaan angkutan dan muatan darat/laut/udara.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The unit aims to develop students awareness of the
                principles of transport management and provide students with
                understanding the relationship and inter dependence between
                transport and tourism.
                </td>
            </tr>
            <tr>
                <td>35.</td>
                <td>44232532</td>
                <td>Kewirausahaan</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki rasa
                percaya diri dan menanamkan kemampuan untuk mempengaruhi
                serta meyakinkan orang lain untuk membeli produk wisata, dan
                untuk memanfaatkan peluang usaha.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                Students will learn to effectively organize, develop,
                create, and manage a business. Projects will include
                developing a business plan, real and/or simulated work
                experiences, and projects related to tourism business
                ownership.
                </td>
            </tr>
            <tr>
                <td>36.</td>
                <td>44232542</td>
                <td>Etika dan Kepribadian</td>
                <td>2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki dan
                menerapkan tata hubungan antar manusia, dalam cara bersikap,
                bertingkah laku dan bergaul, dengan lingkungan dan wisatawan
                yang mempunyai latar belakang budaya berbeda.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The unit develop student soft skill communication that will
                be useful before entering the tourism industry.
                </td>
            </tr>
            <tr>
                <td>37.</td>
                <td>44232552</td>
                <td>Teknik Interpretasi Pariwisata</td>
                <td>2</td>
            </tr>
            <tr>
                <td>38.</td>
                <td>44232563</td>
                <td>Perencanaan Perjalanan Wisata</td>
                <td>3</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa memiliki
                kemampuan untuk membuat perencanaan acara-acara perjalanan
                wisata, penghitungan harga dan pengaturan administrasi dan
                operasinya.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                Through this course students will have the skills to create
                a tour package, calculating the fare and price,
                administration and operation.
                </td>
            </tr>
            <tr>
                <td>39.</td>
                <td>44231004</td>
                <td>Praktek Kerja Lapangan</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Dengan matakuliah ini diharapkan mahasiswa mendapatkan
                ketrampilan praktis dan membuat laporan praktik kerja, dan
                dapat mengukur kemampuan mahasiswa secara akademik dalam
                mengobservasi dan melakukan praktik kerja lapangan.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The Internship Program allows the students to gain practical
                experience in the workplace before receiving their degrees.
                The internship is a required academic course. The student
                locates companies willing to hire interns full time .The SBA
                Internship program supervises the students and awards
                academic credits (4 SCH) upon successful completion of all
                the required assignments.
                </td>
            </tr>
            <tr>
                <td>40.</td>
                <td>44232574</td>
                <td>Tugas Akhir</td>
                <td>4</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px; border-bottom: 2px solid aqua">
                Tugas akhir merupakan sarana pengukur kemampusan akademik
                secara integratif atasa dasar alur penalaran analisis dan
                sistematis sesuai bidang peminatan ilmu yang ditekuni.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 5px">
                The project is the culmination of the student’s learning
                experience on the course, requiring the development of the
                intellectual capacity to plan and carry out an
                accademical-sound research project.
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top: 10px; border-bottom: 3px solid aqua">
                Jumlah
                </td>
                <td>98</td>
            </tr>
            </table>
        </div>
        </div>
    </div>
    </section>
    <!-- Back to top -->
    <a
    id="back-to-top"
    href="#"
    class="btn btn-light btn-lg back-to-top"
    role="button"
    ><i class="fas fa-chevron-up"></i
    ></a>
    </main>
@endsection