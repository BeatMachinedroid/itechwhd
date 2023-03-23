@section('content')
    <div class="page-header">
        <div class="row align-items-center">

        </div>
    </div>
    <div class="row ">
        <div class="col-lg-12 addreq">
            <form action="{{ route('edit.proses') }}" method="POST">
                <div class="card-body">
                    <h5 class="text-center">
                        <strong>
                            I - Staf Report Edit
                        </strong>
                    </h5>
                </div>
                @csrf
                @method('PUT')
                <div class="row formtype">
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Username</h6>
                            <input type="text" class="form-control" id="usr" name="username" value="{{ $user->username }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Email</h6>
                            <input type="text" class="form-control" id="usr" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Phone</h6>
                            <input type="text" class="form-control" id="usr" name="phone" value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Role</h6>
                            <select class="form-control" id="sel1" name="role">
                                <option selected>{{ $user->role }}</option>
                                <option >User</option>
                                <option >Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>Location</h6>
                            <select class="form-control" id="sel2" name="location">
                                <option>{{ $user->location }}</option>
                                <option>KANTOR CABANG - AMBON</option>
                                <option>KANTOR CABANG - BAJOE</option>
                                <option>KANTOR CABANG - BAKAUHENI</option>
                                <option>KANTOR CABANG - BALIKPAPAN</option>
                                <option>KANTOR CABANG - BANDA ACEH</option>
                                <option>KANTOR CABANG - BANGKA</option>
                                <option>KANTOR CABANG - BATAM</option>
                                <option>KANTOR CABANG - BATU LICIN</option>
                                <option>KANTOR CABANG - BAU-BAU</option>
                                <option>KANTOR CABANG - BIAK</option>
                                <option>KANTOR CABANG - BITUNG</option>
                                <option>KANTOR CABANG - JEPARA</option>
                                <option>KANTOR CABANG - KAYANGAN</option>
                                <option>KANTOR CABANG - KETAPANG</option>
                                <option>KANTOR CABANG - KUPANG</option>
                                <option>KANTOR CABANG - LEMBAR</option>
                                <option>KANTOR CABANG - LUWUK</option>
                                <option>KANTOR CABANG - MERAK</option>
                                <option>KANTOR CABANG - MERAUKE</option>
                                <option>KANTOR CABANG - PADANG</option>
                                <option>KANTOR CABANG - PONTIANAK</option>
                                <option>KANTOR CABANG - SAPE</option>
                                <option>KANTOR CABANG - SELAYAR</option>
                                <option>KANTOR CABANG - SIBOLGA</option>
                                <option>KANTOR CABANG - SINGKIL</option>
                                <option>KANTOR CABANG - SORONG</option>
                                <option>KANTOR CABANG - SURABAYA</option>
                                <option>KANTOR CABANG - TERNATE</option>
                                <option>KANTOR CABANG - TUAL</option>
                                <option>KANTOR PUSAT - JAKARTA</option>
                                <option>KAPAL RORO - KMP. AMBU - AMBU</option>
                                <option>KAPAL RORO - KMP. ARAR</option>
                                <option>KAPAL RORO - KMP. ARIWANGAN</option>
                                <option>KAPAL RORO - KMP. AWU AWU</option>
                                <option>KAPAL RORO - KMP. BAHTERA MAS</option>
                                <option>KAPAL RORO - KMP. BAHTERA MAS II</option>
                                <option>KAPAL RORO - KMP. BALIBO</option>
                                <option>KAPAL RORO - KMP. BAMBIT</option>
                                <option>KAPAL RORO - KMP. BAMEGA JAYA</option>
                                <option>KAPAL RORO - KMP. BARAU</option>
                                <option>KAPAL RORO - KMP. BARONANG</option>
                                <option>KAPAL RORO - KMP. BATUMANDI</option>
                                <option>KAPAL RORO - KMP. BAWAL</option>
                                <option>KAPAL RORO - KMP. BELANAK</option>
                                <option>KAPAL RORO - KMP. BELIDA</option>
                                <option>KAPAL RORO - KMP. BILI</option>
                                <option>KAPAL RORO - KMP. BINAUL</option>
                                <option>KAPAL RORO - KMP. BIRAMATA</option>
                                <option>KAPAL RORO - KMP. BOBARA</option>
                                <option>KAPAL RORO - KMP. BONTOHARU</option>
                                <option>KAPAL RORO - KMP. BRR</option>
                                <option>KAPAL RORO - KMP. CAKALANG</option>
                                <option>KAPAL RORO - KMP. CAKALANG II</option>
                                <option>KAPAL RORO - KMP. CENGKIH AFO</option>
                                <option>KAPAL RORO - KMP. CUCUT</option>
                                <option>KAPAL RORO - KMP. DALENTEWOBA</option>
                                <option>KAPAL RORO - KMP. DANAU RANA</option>
                                <option>KAPAL RORO - KMP. DINGKIS</option>
                                <option>KAPAL RORO - KMP. DOLOSI</option>
                                <option>KAPAL RORO - KMP. ERANA</option>
                                <option>KAPAL RORO - KMP. FERRINDO 5</option>
                                <option>KAPAL RORO - KMP. GAJAH MADA</option>
                                <option>KAPAL RORO - KMP. GAMBOLO</option>
                                <option>KAPAL RORO - KMP. GILI IYANG</option>
                                <option>KAPAL RORO - KMP. GORANGO</option>
                                <option>KAPAL RORO - KMP. GORARE</option>
                                <option>KAPAL RORO - KMP. GOROPA</option>
                                <option>KAPAL RORO - KMP. GUNUNG PALONG</option>
                                <option>KAPAL RORO - KMP. GUTILA</option>
                                <option>KAPAL RORO - KMP. ILE APE</option>
                                <option>KAPAL RORO - KMP. ILE LABALEKAN</option>
                                <option>KAPAL RORO - KMP. ILE MANDIRI</option>
                                <option>KAPAL RORO - KMP. INELIKA</option>
                                <option>KAPAL RORO - KMP. INERIE</option>
                                <option>KAPAL RORO - KMP. INERIE II</option>
                                <option>KAPAL RORO - KMP. JATRA I</option>
                                <option>KAPAL RORO - KMP. JATRA II</option>
                                <option>KAPAL RORO - KMP. JATRA III</option>
                                <option>KAPAL RORO - KMP. JULUNG-JULUNG</option>
                                <option>KAPAL RORO - KMP. KAKAP</option>
                                <option>KAPAL RORO - KMP. KALABIA</option>
                                <option>KAPAL RORO - KMP. KALIBODRI</option>
                                <option>KAPAL RORO - KMP. KAMBANIRU</option>
                                <option>KAPAL RORO - KMP. KASUARI PASIFIK IV</option>
                                <option>KAPAL RORO - KMP. KERAPU</option>
                                <option>KAPAL RORO - KMP. KERAPU II</option>
                                <option>KAPAL RORO - KMP. KERAPU III</option>
                                <option>KAPAL RORO - KMP. KOKONAO</option>
                                <option>KAPAL RORO - KMP. KORMOMOLIN</option>
                                <option>KAPAL RORO - KMP. KUALA BATEE II</option>
                                <option>KAPAL RORO - KMP. KUNDUR</option>
                                <option>KAPAL RORO - KMP. KURISI</option>
                                <option>KAPAL RORO - KMP. LABUHAN HAJI</option>
                                <option>KAPAL RORO - KMP. LAKAAN</option>
                                <option>KAPAL RORO - KMP. LAYUR</option>
                                <option>KAPAL RORO - KMP. LEGUNDI</option>
                                <option>KAPAL RORO - KMP. LEMA</option>
                                <option>KAPAL RORO - KMP. LEMURU</option>
                                <option>KAPAL RORO - KMP. LOBSTER</option>
                                <option>KAPAL RORO - KMP. LOME</option>
                                <option>KAPAL RORO - KMP. LOMPA</option>
                                <option>KAPAL RORO - KMP. MADANI</option>
                                <option>KAPAL RORO - KMP. MADIDIHANG</option>
                                <option>KAPAL RORO - KMP. MAMBERAMO FOJA</option>
                                <option>KAPAL RORO - KMP. MAMING</option>
                                <option>KAPAL RORO - KMP. MANTA</option>
                                <option>KAPAL RORO - KMP. MANTA II</option>
                                <option>KAPAL RORO - KMP. MASIREI</option>
                                <option>KAPAL RORO - KMP. MENUMBING RAYA</option>
                                <option>KAPAL RORO - KMP. MERAK</option>
                                <option>KAPAL RORO - KMP. MERAWAN I</option>
                                <option>KAPAL RORO - KMP. MOINIT</option>
                                <option>KAPAL RORO - KMP. MUJAIR</option>
                                <option>KAPAL RORO - KMP. MURIA</option>
                                <option>KAPAL RORO - KMP. MUTIS</option>
                                <option>KAPAL RORO - KMP. MUYU</option>
                                <option>KAPAL RORO - KMP. NAMPARNOS</option>
                                <option>KAPAL RORO - KMP. NAPAN WAINAMI</option>
                                <option>KAPAL RORO - KMP. NGAFI</option>
                                <option>KAPAL RORO - KMP. NUKU</option>
                                <option>KAPAL RORO - KMP. PAPUYU</option>
                                <option>KAPAL RORO - KMP. PARAY</option>
                                <option>KAPAL RORO - KMP. PONCAN MOALE</option>
                                <option>KAPAL RORO - KMP. PORODISA</option>
                                <option>KAPAL RORO - KMP. PORTLINK</option>
                                <option>KAPAL RORO - KMP. PORTLINK II</option>
                                <option>KAPAL RORO - KMP. PORTLINK III</option>
                                <option>KAPAL RORO - KMP. PORTLINK V</option>
                                <option>KAPAL RORO - KMP. PORTLINK VII</option>
                                <option>KAPAL RORO - KMP. PORTLINK VIII</option>
                                <option>KAPAL RORO - KMP. PRATHITA IV</option>
                                <option>KAPAL RORO - KMP. PRIMAS I</option>
                                <option>KAPAL RORO - KMP. PULAU RUBIAH</option>
                                <option>KAPAL RORO - KMP. PULAU SAGORI</option>
                                <option>KAPAL RORO - KMP. PULO TELLO</option>
                                <option>KAPAL RORO - KMP. RAJA ENGGANO</option>
                                <option>KAPAL RORO - KMP. RANAKA</option>
                                <option>KAPAL RORO - KMP. RODITHA</option>
                                <option>KAPAL RORO - KMP. ROKATENDA</option>
                                <option>KAPAL RORO - KMP. SALUANG</option>
                                <option>KAPAL RORO - KMP. SAMANDAR</option>
                                <option>KAPAL RORO - KMP. SANGKE PALANGGA</option>
                                <option>KAPAL RORO - KMP. SEBUKU</option>
                                <option>KAPAL RORO - KMP. SEMAH</option>
                                <option>KAPAL RORO - KMP. SEMBILANG</option>
                                <option>KAPAL RORO - KMP. SEMUMU</option>
                                <option>KAPAL RORO - KMP. SENANGIN</option>
                                <option>KAPAL RORO - KMP. SIGINJAI</option>
                                <option>KAPAL RORO - KMP. SILOK</option>
                                <option>KAPAL RORO - KMP. SIMEULUE</option>
                                <option>KAPAL RORO - KMP. SULTAN MURHUM</option>
                                <option>KAPAL RORO - KMP. TANDEMAND</option>
                                <option>KAPAL RORO - KMP. TANJUNG API</option>
                                <option>KAPAL RORO - KMP. TANJUNG BURANG</option>
                                <option>KAPAL RORO - KMP. TANJUNG MADLAHAR</option>
                                <option>KAPAL RORO - KMP. TARUSI</option>
                                <option>KAPAL RORO - KMP. TELUK CENDRAWASIH I</option>
                                <option>KAPAL RORO - KMP. TELUK CENDRAWASIH II</option>
                                <option>KAPAL RORO - KMP. TELUK SINABANG</option>
                                <option>KAPAL RORO - KMP. TELUK SINGKIL</option>
                                <option>KAPAL RORO - KMP. TELUK TOLO</option>
                                <option>KAPAL RORO - KMP. TEMI</option>
                                <option>KAPAL RORO - KMP. TENGGIRI</option>
                                <option>KAPAL RORO - KMP. TERUBUK</option>
                                <option>KAPAL RORO - KMP. TERUBUK I</option>
                                <option>KAPAL RORO - KMP. TONGKOL</option>
                                <option>KAPAL RORO - KMP. TUNA</option>
                                <option>KAPAL RORO - KMP. TUNA TOMINI</option>
                                <option>KAPAL RORO - KMP. UMA KALADA</option>
                                <option>KAPAL RORO - KMP. WAYANGAN</option>
                                <option>KAPAL WISATA - KMP. ARWANA</option>
                                <option>KAPAL WISATA - KMP. KOMODO</option>
                                <option>PELABUHAN ASDP - AJIBATA</option>
                                <option>PELABUHAN ASDP - AMBARITA</option>
                                <option>PELABUHAN ASDP - BAJOE</option>
                                <option>PELABUHAN ASDP - BAKAUHENI</option>
                                <option>PELABUHAN ASDP - BASTIONG</option>
                                <option>PELABUHAN ASDP - BATULICIN</option>
                                <option>PELABUHAN ASDP - BITUNG</option>
                                <option>PELABUHAN ASDP - BOLOK</option>
                                <option>PELABUHAN ASDP - GALALA</option>
                                <option>PELABUHAN ASDP - GILIMANUK</option>
                                <option>PELABUHAN ASDP - HUNIMUA</option>
                                <option>PELABUHAN ASDP - KAMAL</option>
                                <option>PELABUHAN ASDP - KAYANGAN</option>
                                <option>PELABUHAN ASDP - KETAPANG</option>
                                <option>PELABUHAN ASDP - KOLAKA</option>
                                <option>PELABUHAN ASDP - LABUAN BAJO</option>
                                <option>PELABUHAN ASDP - LARANTUKA</option>
                                <option>PELABUHAN ASDP - LEMBAR</option>
                                <option>PELABUHAN ASDP - MERAK</option>
                                <option>PELABUHAN ASDP - NAMLEA</option>
                                <option>PELABUHAN ASDP - PACIRAN</option>
                                <option>PELABUHAN ASDP - PADANGBAI</option>
                                <option>PELABUHAN ASDP - PAGIMANA</option>
                                <option>PELABUHAN ASDP - PANAJAM</option>
                                <option>PELABUHAN ASDP - PATIMBAN</option>
                                <option>PELABUHAN ASDP - POKA</option>
                                <option>PELABUHAN ASDP - POTOTANO</option>
                                <option>PELABUHAN ASDP - ROTE</option>
                                <option>PELABUHAN ASDP - RUM</option>
                                <option>PELABUHAN ASDP - SAPE</option>
                                <option>PELABUHAN ASDP - SIDANGOLE</option>
                                <option>PELABUHAN ASDP - TANJUNG KELIAN</option>
                                <option>PELABUHAN ASDP - TANJUNG SERDANG</option>
                                <option>PELABUHAN ASDP - TANJUNG UBAN</option>
                                <option>PELABUHAN ASDP - TELAGA PUNGGUR</option>
                                <option>PELABUHAN ASDP - UJUNG</option>
                                <option>PELABUHAN ASDP - WAIPIRIT</option>
                                <option>PELABUHAN UPT - AGATS</option>
                                <option>PELABUHAN UPT - AIMERE</option>
                                <option>PELABUHAN UPT - AMAHAI</option>
                                <option>PELABUHAN UPT - AMOLENGO</option>
                                <option>PELABUHAN UPT - AMPANA</option>
                                <option>PELABUHAN UPT - AMURANG</option>
                                <option>PELABUHAN UPT - ANCAM</option>
                                <option>PELABUHAN UPT - ARAR</option>
                                <option>PELABUHAN UPT - AREFI</option>
                                <option>PELABUHAN UPT - ATSY</option>
                                <option>PELABUHAN UPT - BABANG</option>
                                <option>PELABUHAN UPT - BABO</option>
                                <option>PELABUHAN UPT - BADE</option>
                                <option>PELABUHAN UPT - BALOHAN</option>
                                <option>PELABUHAN UPT - BANDAELI</option>
                                <option>PELABUHAN UPT - BANGGAI</option>
                                <option>PELABUHAN UPT - BARANUSA</option>
                                <option>PELABUHAN UPT - BAROKO</option>
                                <option>PELABUHAN UPT - BATANG DUA</option>
                                <option>PELABUHAN UPT - BATUREBE</option>
                                <option>PELABUHAN UPT - BAU-BAU</option>
                                <option>PELABUHAN UPT - BAWEAN</option>
                                <option>PELABUHAN UPT - BENGKULU</option>
                                <option>PELABUHAN UPT - BENJINA</option>
                                <option>PELABUHAN UPT - BENTUNI</option>
                                <option>PELABUHAN UPT - BIAK</option>
                                <option>PELABUHAN UPT - BINTANG HARAPAN DESA</option>
                                <option>PELABUHAN UPT - BIRA</option>
                                <option>PELABUHAN UPT - BOBONG</option>
                                <option>PELABUHAN UPT - BONERATE</option>
                                <option>PELABUHAN UPT - BONITON</option>
                                <option>PELABUHAN UPT - DABO</option>
                                <option>PELABUHAN UPT - DARUBA</option>
                                <option>PELABUHAN UPT - DERI</option>
                                <option>PELABUHAN UPT - DOBO</option>
                                <option>PELABUHAN UPT - DOLONG</option>
                                <option>PELABUHAN UPT - DONGKALA</option>
                                <option>PELABUHAN UPT - DOWARA</option>
                                <option>PELABUHAN UPT - DUMAI</option>
                                <option>PELABUHAN UPT - DUPA</option>
                                <option>PELABUHAN UPT - ELAT</option>
                                <option>PELABUHAN UPT - ENDE</option>
                                <option>PELABUHAN UPT - FADOL</option>
                                <option>PELABUHAN UPT - FAK FAK</option>
                                <option>PELABUHAN UPT - FOLLEY</option>
                                <option>PELABUHAN UPT - GAG</option>
                                <option>PELABUHAN UPT - GARONGKONG</option>
                                <option>PELABUHAN UPT - GEBE</option>
                                <option>PELABUHAN UPT - GETENTIRI</option>
                                <option>PELABUHAN UPT - GORONTALO</option>
                                <option>PELABUHAN UPT - GRESIK</option>
                                <option>PELABUHAN UPT - GUNUNG SITOLI</option>
                                <option>PELABUHAN UPT - HAAR</option>
                                <option>PELABUHAN UPT - HANSISI</option>
                                <option>PELABUHAN UPT - HOLAT</option>
                                <option>PELABUHAN UPT - JAILOLO</option>
                                <option>PELABUHAN UPT - JAMPEA</option>
                                <option>PELABUHAN UPT - JEPARA</option>
                                <option>PELABUHAN UPT - KABARE</option>
                                <option>PELABUHAN UPT - KAILOLO</option>
                                <option>PELABUHAN UPT - KAIMANA</option>
                                <option>PELABUHAN UPT - KAIMER</option>
                                <option>PELABUHAN UPT - KALABAHI</option>
                                <option>PELABUHAN UPT - KALAOTOA</option>
                                <option>PELABUHAN UPT - KALIAM</option>
                                <option>PELABUHAN UPT - KALOBO</option>
                                <option>PELABUHAN UPT - KAMARU</option>
                                <option>PELABUHAN UPT - KARIANGAU</option>
                                <option>PELABUHAN UPT - KARIMUNJAWA</option>
                                <option>PELABUHAN UPT - KASIPUTE</option>
                                <option>PELABUHAN UPT - KASIRUTA</option>
                                <option>PELABUHAN UPT - KAYELI</option>
                                <option>PELABUHAN UPT - KAYOA</option>
                                <option>PELABUHAN UPT - KAYUADI</option>
                                <option>PELABUHAN UPT - KENDARI</option>
                                <option>PELABUHAN UPT - KEPI</option>
                                <option>PELABUHAN UPT - KESUI</option>
                                <option>PELABUHAN UPT - KIMAAM</option>
                                <option>PELABUHAN UPT - KOFIAU</option>
                                <option>PELABUHAN UPT - KOLONEDALE</option>
                                <option>PELABUHAN UPT - KUMAI</option>
                                <option>PELABUHAN UPT - KUPAL</option>
                                <option>PELABUHAN UPT - KUR</option>
                                <option>PELABUHAN UPT - LABUAN</option>
                                <option>PELABUHAN UPT - LABUHAN BAJO</option>
                                <option>PELABUHAN UPT - LABUHAN HAJI</option>
                                <option>PELABUHAN UPT - LAMTENG</option>
                                <option>PELABUHAN UPT - LARAT</option>
                                <option>PELABUHAN UPT - LASUSUA</option>
                                <option>PELABUHAN UPT - LENGGARA</option>
                                <option>PELABUHAN UPT - LEWOLEBA</option>
                                <option>PELABUHAN UPT - LIKUPANG</option>
                                <option>PELABUHAN UPT - LINMALAS</option>
                                <option>PELABUHAN UPT - LUWUK</option>
                                <option>PELABUHAN UPT - MAKIAN</option>
                                <option>PELABUHAN UPT - MANGGUR</option>
                                <option>PELABUHAN UPT - MANGOLE</option>
                                <option>PELABUHAN UPT - MANOKWARI</option>
                                <option>PELABUHAN UPT - MARISA</option>
                                <option>PELABUHAN UPT - MAROPOKOT</option>
                                <option>PELABUHAN UPT - MARORE</option>
                                <option>PELABUHAN UPT - MAWASANGKA</option>
                                <option>PELABUHAN UPT - MELONGUANE</option>
                                <option>PELABUHAN UPT - MENGKAPAN</option>
                                <option>PELABUHAN UPT - MERAUKE</option>
                                <option>PELABUHAN UPT - MOOR</option>
                                <option>PELABUHAN UPT - MOTI</option>
                                <option>PELABUHAN UPT - NABIRE</option>
                                <option>PELABUHAN UPT - NALAHIA</option>
                                <option>PELABUHAN UPT - NDAO</option>
                                <option>PELABUHAN UPT - NUMFOR</option>
                                <option>PELABUHAN UPT - NUNUKAN</option>
                                <option>PELABUHAN UPT - OBI</option>
                                <option>PELABUHAN UPT - PADANG</option>
                                <option>PELABUHAN UPT - PAM</option>
                                <option>PELABUHAN UPT - PAMATATA</option>
                                <option>PELABUHAN UPT - PANANARU</option>
                                <option>PELABUHAN UPT - PARIT SAREM</option>
                                <option>PELABUHAN UPT - PASOKAN</option>
                                <option>PELABUHAN UPT - PATANI</option>
                                <option>PELABUHAN UPT - PATUMBUKAN</option>
                                <option>PELABUHAN UPT - PINANG LUAR</option>
                                <option>PELABUHAN UPT - POMAKO</option>
                                <option>PELABUHAN UPT - PULAU BANYAK</option>
                                <option>PELABUHAN UPT - PULAU ENGGANO</option>
                                <option>PELABUHAN UPT - PULAU SIOMPU</option>
                                <option>PELABUHAN UPT - PULAU TELLO</option>
                                <option>PELABUHAN UPT - PULAU UT</option>
                                <option>PELABUHAN UPT - PURE</option>
                                <option>PELABUHAN UPT - RAHA</option>
                                <option>PELABUHAN UPT - RASAU JAYA</option>
                                <option>PELABUHAN UPT - RUPAT</option>
                                <option>PELABUHAN UPT - SABU</option>
                                <option>PELABUHAN UPT - SADAI</option>
                                <option>PELABUHAN UPT - SAKETA</option>
                                <option>PELABUHAN UPT - SALAKAN</option>
                                <option>PELABUHAN UPT - SANANA</option>
                                <option>PELABUHAN UPT - SAOSAFOR</option>
                                <option>PELABUHAN UPT - SAWAERMA</option>
                                <option>PELABUHAN UPT - SEBATIK</option>
                                <option>PELABUHAN UPT - SELAT BELIA (PULAU KUNDUR)</option>
                                <option>PELABUHAN UPT - SEMARANG</option>
                                <option>PELABUHAN UPT - SERUI</option>
                                <option>PELABUHAN UPT - SIBERUT</option>
                                <option>PELABUHAN UPT - SIBOLGA</option>
                                <option>PELABUHAN UPT - SIKABALUAN</option>
                                <option>PELABUHAN UPT - SIKAKAP</option>
                                <option>PELABUHAN UPT - SIMENGGARIS</option>
                                <option>PELABUHAN UPT - SINABANG</option>
                                <option>PELABUHAN UPT - SINGKIL</option>
                                <option>PELABUHAN UPT - SIWA</option>
                                <option>PELABUHAN UPT - SOFIFI</option>
                                <option>PELABUHAN UPT - SOLAL</option>
                                <option>PELABUHAN UPT - SOLOR</option>
                                <option>PELABUHAN UPT - SORONG</option>
                                <option>PELABUHAN UPT - SUBAIM</option>
                                <option>PELABUHAN UPT - SUNGAI MAYAM</option>
                                <option>PELABUHAN UPT - SUNGAI NIPAH</option>
                                <option>PELABUHAN UPT - TABARFANE</option>
                                <option>PELABUHAN UPT - TAIPA</option>
                                <option>PELABUHAN UPT - TAM</option>
                                <option>PELABUHAN UPT - TAMPO</option>
                                <option>PELABUHAN UPT - TANAH MERAH</option>
                                <option>PELABUHAN UPT - TANJUNG API API</option>
                                <option>PELABUHAN UPT - TANJUNG BALAI KARIMUN</option>
                                <option>PELABUHAN UPT - TANJUNG HARAPAN</option>
                                <option>PELABUHAN UPT - TANJUNG PINANG</option>
                                <option>PELABUHAN UPT - TANJUNG RHU</option>
                                <option>PELABUHAN UPT - TARAKAN</option>
                                <option>PELABUHAN UPT - TAYAN</option>
                                <option>PELABUHAN UPT - TAYANDO</option>
                                <option>PELABUHAN UPT - TEBAS KUALA</option>
                                <option>PELABUHAN UPT - TEBAS SEBERANG</option>
                                <option>PELABUHAN UPT - TELUK BATANG</option>
                                <option>PELABUHAN UPT - TELUK DALAM</option>
                                <option>PELABUHAN UPT - TELUK KALONG</option>
                                <option>PELABUHAN UPT - TENGGARONG KOTA</option>
                                <option>PELABUHAN UPT - TENGGARONG SEBERANG</option>
                                <option>PELABUHAN UPT - TERAYU</option>
                                <option>PELABUHAN UPT - TOBELO</option>
                                <option>PELABUHAN UPT - TOLANDONA</option>
                                <option>PELABUHAN UPT - TOLI TOLI</option>
                                <option>PELABUHAN UPT - TOLI-TOLI</option>
                                <option>PELABUHAN UPT - TOROBULU</option>
                                <option>PELABUHAN UPT - TUA PEJAT</option>
                                <option>PELABUHAN UPT - TUAL</option>
                                <option>PELABUHAN UPT - ULEE LHEUE</option>
                                <option>PELABUHAN UPT - UMEPUTIH</option>
                                <option>PELABUHAN UPT - WAAI</option>
                                <option>PELABUHAN UPT - WAARA</option>
                                <option>PELABUHAN UPT - WAHAI</option>
                                <option>PELABUHAN UPT - WAIGAMA</option>
                                <option>PELABUHAN UPT - WAIGEO (WAISAI)</option>
                                <option>PELABUHAN UPT - WAIKELO</option>
                                <option>PELABUHAN UPT - WAILEBET</option>
                                <option>PELABUHAN UPT - WAILEY</option>
                                <option>PELABUHAN UPT - WAIMAN</option>
                                <option>PELABUHAN UPT - WAINGAPU</option>
                                <option>PELABUHAN UPT - WAIWERANG</option>
                                <option>PELABUHAN UPT - WAKAI</option>
                                <option>PELABUHAN UPT - WANCI</option>
                                <option>PELABUHAN UPT - WAREN</option>
                                <option>PELABUHAN UPT - WASIOR</option>
                                <option>PELABUHAN UPT - WAYOM</option>
                                <option>PELABUHAN UPT - WEDA</option>
                                <option>PELABUHAN UPT - WEDUAR</option>
                                <option>PELABUHAN UPT - WEJIM</option>
                                <option>PELABUHAN UPT - YENANAS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
