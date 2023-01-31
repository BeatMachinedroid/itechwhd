@section('content')
    <div class="page-header">

    </div>
    <div class="row ">
        <div class="col-lg-12 addreq">
            <form action="/addaset" method="POST">
                <div class="card-body">
                    <h5 class="text-center">
                        <strong>
                            I - Asset Report
                        </strong>
                    </h5>
                </div>

                @csrf
                <div class="row formtype">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Asset Type</h6>
                            <select class="form-control" id="sel1" name="type">
                                <option >CCTV</option>
                                <option>Hardware</option>
                                <option >Laptop</option>
                                <option >Orion.Nodes</option>
                                <option >Orion.VIM.Hosts</option>
                                <option >Orion.VIM.VCenters</option>
                                <option >PRINTER</option>
                                <option >VOIP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>model</h6>
                            @error('subject')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="text" class="form-control" id="usr" name="model">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>serial</h6>
                            @error('detail')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <textarea class="form-control" rows="5" id="comment" name="serial"></textarea>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <h6>Location</h6>
                            <select class="form-control" id="sel2" name="location">
                                    <option value="1">KANTOR CABANG - AMBON</option>
                                    <option value="2">KANTOR CABANG - BAJOE</option>
                                    <option selected="selected" value="3">KANTOR CABANG - BAKAUHENI</option>
                                    <option value="4">KANTOR CABANG - BALIKPAPAN</option>
                                    <option value="5">KANTOR CABANG - BANDA ACEH</option>
                                    <option value="6">KANTOR CABANG - BANGKA</option>
                                    <option value="7">KANTOR CABANG - BATAM</option>
                                    <option value="8">KANTOR CABANG - BATU LICIN</option>
                                    <option value="9">KANTOR CABANG - BAU-BAU</option>
                                    <option value="10">KANTOR CABANG - BIAK</option>
                                    <option value="11">KANTOR CABANG - BITUNG</option>
                                    <option value="12">KANTOR CABANG - JEPARA</option>
                                    <option value="13">KANTOR CABANG - KAYANGAN</option>
                                    <option value="14">KANTOR CABANG - KETAPANG</option>
                                    <option value="15">KANTOR CABANG - KUPANG</option>
                                    <option value="16">KANTOR CABANG - LEMBAR</option>
                                    <option value="17">KANTOR CABANG - LUWUK</option>
                                    <option value="18">KANTOR CABANG - MERAK</option>
                                    <option value="19">KANTOR CABANG - MERAUKE</option>
                                    <option value="20">KANTOR CABANG - PADANG</option>
                                    <option value="21">KANTOR CABANG - PONTIANAK</option>
                                    <option value="22">KANTOR CABANG - SAPE</option>
                                    <option value="23">KANTOR CABANG - SELAYAR</option>
                                    <option value="24">KANTOR CABANG - SIBOLGA</option>
                                    <option value="25">KANTOR CABANG - SINGKIL</option>
                                    <option value="26">KANTOR CABANG - SORONG</option>
                                    <option value="27">KANTOR CABANG - SURABAYA</option>
                                    <option value="28">KANTOR CABANG - TERNATE</option>
                                    <option value="29">KANTOR CABANG - TUAL</option>
                                    <option value="30">KANTOR PUSAT - JAKARTA</option>
                                    <option value="31">KAPAL RORO - KMP. AMBU - AMBU</option>
                                    <option value="32">KAPAL RORO - KMP. ARAR</option>
                                    <option value="33">KAPAL RORO - KMP. ARIWANGAN</option>
                                    <option value="34">KAPAL RORO - KMP. AWU AWU</option>
                                    <option value="35">KAPAL RORO - KMP. BAHTERA MAS</option>
                                    <option value="36">KAPAL RORO - KMP. BAHTERA MAS II</option>
                                    <option value="37">KAPAL RORO - KMP. BALIBO</option>
                                    <option value="38">KAPAL RORO - KMP. BAMBIT</option>
                                    <option value="39">KAPAL RORO - KMP. BAMEGA JAYA</option>
                                    <option value="40">KAPAL RORO - KMP. BARAU</option>
                                    <option value="41">KAPAL RORO - KMP. BARONANG</option>
                                    <option value="42">KAPAL RORO - KMP. BATUMANDI</option>
                                    <option value="43">KAPAL RORO - KMP. BAWAL</option>
                                    <option value="44">KAPAL RORO - KMP. BELANAK</option>
                                    <option value="45">KAPAL RORO - KMP. BELIDA</option>
                                    <option value="46">KAPAL RORO - KMP. BILI</option>
                                    <option value="47">KAPAL RORO - KMP. BINAUL</option>
                                    <option value="48">KAPAL RORO - KMP. BIRAMATA</option>
                                    <option value="49">KAPAL RORO - KMP. BOBARA</option>
                                    <option value="50">KAPAL RORO - KMP. BONTOHARU</option>
                                    <option value="51">KAPAL RORO - KMP. BRR</option>
                                    <option value="52">KAPAL RORO - KMP. CAKALANG</option>
                                    <option value="53">KAPAL RORO - KMP. CAKALANG II</option>
                                    <option value="54">KAPAL RORO - KMP. CENGKIH AFO</option>
                                    <option value="55">KAPAL RORO - KMP. CUCUT</option>
                                    <option value="56">KAPAL RORO - KMP. DALENTEWOBA</option>
                                    <option value="57">KAPAL RORO - KMP. DANAU RANA</option>
                                    <option value="58">KAPAL RORO - KMP. DINGKIS</option>
                                    <option value="59">KAPAL RORO - KMP. DOLOSI</option>
                                    <option value="60">KAPAL RORO - KMP. ERANA</option>
                                    <option value="61">KAPAL RORO - KMP. FERRINDO 5</option>
                                    <option value="62">KAPAL RORO - KMP. GAJAH MADA</option>
                                    <option value="63">KAPAL RORO - KMP. GAMBOLO</option>
                                    <option value="64">KAPAL RORO - KMP. GILI IYANG</option>
                                    <option value="65">KAPAL RORO - KMP. GORANGO</option>
                                    <option value="66">KAPAL RORO - KMP. GORARE</option>
                                    <option value="67">KAPAL RORO - KMP. GOROPA</option>
                                    <option value="68">KAPAL RORO - KMP. GUNUNG PALONG</option>
                                    <option value="69">KAPAL RORO - KMP. GUTILA</option>
                                    <option value="70">KAPAL RORO - KMP. ILE APE</option>
                                    <option value="71">KAPAL RORO - KMP. ILE LABALEKAN</option>
                                    <option value="72">KAPAL RORO - KMP. ILE MANDIRI</option>
                                    <option value="73">KAPAL RORO - KMP. INELIKA</option>
                                    <option value="74">KAPAL RORO - KMP. INERIE</option>
                                    <option value="75">KAPAL RORO - KMP. INERIE II</option>
                                    <option value="76">KAPAL RORO - KMP. JATRA I</option>
                                    <option value="77">KAPAL RORO - KMP. JATRA II</option>
                                    <option value="78">KAPAL RORO - KMP. JATRA III</option>
                                    <option value="79">KAPAL RORO - KMP. JULUNG-JULUNG</option>
                                    <option value="80">KAPAL RORO - KMP. KAKAP</option>
                                    <option value="81">KAPAL RORO - KMP. KALABIA</option>
                                    <option value="82">KAPAL RORO - KMP. KALIBODRI</option>
                                    <option value="83">KAPAL RORO - KMP. KAMBANIRU</option>
                                    <option value="84">KAPAL RORO - KMP. KASUARI PASIFIK IV</option>
                                    <option value="85">KAPAL RORO - KMP. KERAPU</option>
                                    <option value="86">KAPAL RORO - KMP. KERAPU II</option>
                                    <option value="87">KAPAL RORO - KMP. KERAPU III</option>
                                    <option value="88">KAPAL RORO - KMP. KOKONAO</option>
                                    <option value="89">KAPAL RORO - KMP. KORMOMOLIN</option>
                                    <option value="90">KAPAL RORO - KMP. KUALA BATEE II</option>
                                    <option value="91">KAPAL RORO - KMP. KUNDUR</option>
                                    <option value="92">KAPAL RORO - KMP. KURISI</option>
                                    <option value="93">KAPAL RORO - KMP. LABUHAN HAJI</option>
                                    <option value="94">KAPAL RORO - KMP. LAKAAN</option>
                                    <option value="95">KAPAL RORO - KMP. LAYUR</option>
                                    <option value="96">KAPAL RORO - KMP. LEGUNDI</option>
                                    <option value="97">KAPAL RORO - KMP. LEMA</option>
                                    <option value="98">KAPAL RORO - KMP. LEMURU</option>
                                    <option value="99">KAPAL RORO - KMP. LOBSTER</option>
                                    <option value="100">KAPAL RORO - KMP. LOME</option>
                                    <option value="101">KAPAL RORO - KMP. LOMPA</option>
                                    <option value="102">KAPAL RORO - KMP. MADANI</option>
                                    <option value="103">KAPAL RORO - KMP. MADIDIHANG</option>
                                    <option value="104">KAPAL RORO - KMP. MAMBERAMO FOJA</option>
                                    <option value="105">KAPAL RORO - KMP. MAMING</option>
                                    <option value="106">KAPAL RORO - KMP. MANTA</option>
                                    <option value="107">KAPAL RORO - KMP. MANTA II</option>
                                    <option value="108">KAPAL RORO - KMP. MASIREI</option>
                                    <option value="109">KAPAL RORO - KMP. MENUMBING RAYA</option>
                                    <option value="110">KAPAL RORO - KMP. MERAK</option>
                                    <option value="111">KAPAL RORO - KMP. MERAWAN I</option>
                                    <option value="112">KAPAL RORO - KMP. MOINIT</option>
                                    <option value="113">KAPAL RORO - KMP. MUJAIR</option>
                                    <option value="114">KAPAL RORO - KMP. MURIA</option>
                                    <option value="115">KAPAL RORO - KMP. MUTIS</option>
                                    <option value="116">KAPAL RORO - KMP. MUYU</option>
                                    <option value="117">KAPAL RORO - KMP. NAMPARNOS</option>
                                    <option value="118">KAPAL RORO - KMP. NAPAN WAINAMI</option>
                                    <option value="119">KAPAL RORO - KMP. NGAFI</option>
                                    <option value="120">KAPAL RORO - KMP. NUKU</option>
                                    <option value="121">KAPAL RORO - KMP. PAPUYU</option>
                                    <option value="122">KAPAL RORO - KMP. PARAY</option>
                                    <option value="123">KAPAL RORO - KMP. PONCAN MOALE</option>
                                    <option value="124">KAPAL RORO - KMP. PORODISA</option>
                                    <option value="125">KAPAL RORO - KMP. PORTLINK</option>
                                    <option value="126">KAPAL RORO - KMP. PORTLINK II</option>
                                    <option value="127">KAPAL RORO - KMP. PORTLINK III</option>
                                    <option value="128">KAPAL RORO - KMP. PORTLINK V</option>
                                    <option value="129">KAPAL RORO - KMP. PORTLINK VII</option>
                                    <option value="130">KAPAL RORO - KMP. PORTLINK VIII</option>
                                    <option value="131">KAPAL RORO - KMP. PRATHITA IV</option>
                                    <option value="132">KAPAL RORO - KMP. PRIMAS I</option>
                                    <option value="133">KAPAL RORO - KMP. PULAU RUBIAH</option>
                                    <option value="134">KAPAL RORO - KMP. PULAU SAGORI</option>
                                    <option value="135">KAPAL RORO - KMP. PULO TELLO</option>
                                    <option value="136">KAPAL RORO - KMP. RAJA ENGGANO</option>
                                    <option value="137">KAPAL RORO - KMP. RANAKA</option>
                                    <option value="138">KAPAL RORO - KMP. RODITHA</option>
                                    <option value="139">KAPAL RORO - KMP. ROKATENDA</option>
                                    <option value="140">KAPAL RORO - KMP. SALUANG</option>
                                    <option value="141">KAPAL RORO - KMP. SAMANDAR</option>
                                    <option value="142">KAPAL RORO - KMP. SANGKE PALANGGA</option>
                                    <option value="143">KAPAL RORO - KMP. SEBUKU</option>
                                    <option value="144">KAPAL RORO - KMP. SEMAH</option>
                                    <option value="145">KAPAL RORO - KMP. SEMBILANG</option>
                                    <option value="146">KAPAL RORO - KMP. SEMUMU</option>
                                    <option value="147">KAPAL RORO - KMP. SENANGIN</option>
                                    <option value="148">KAPAL RORO - KMP. SIGINJAI</option>
                                    <option value="149">KAPAL RORO - KMP. SILOK</option>
                                    <option value="150">KAPAL RORO - KMP. SIMEULUE</option>
                                    <option value="151">KAPAL RORO - KMP. SULTAN MURHUM</option>
                                    <option value="152">KAPAL RORO - KMP. TANDEMAND</option>
                                    <option value="153">KAPAL RORO - KMP. TANJUNG API</option>
                                    <option value="154">KAPAL RORO - KMP. TANJUNG BURANG</option>
                                    <option value="155">KAPAL RORO - KMP. TANJUNG MADLAHAR</option>
                                    <option value="156">KAPAL RORO - KMP. TARUSI</option>
                                    <option value="157">KAPAL RORO - KMP. TELUK CENDRAWASIH I</option>
                                    <option value="158">KAPAL RORO - KMP. TELUK CENDRAWASIH II</option>
                                    <option value="159">KAPAL RORO - KMP. TELUK SINABANG</option>
                                    <option value="160">KAPAL RORO - KMP. TELUK SINGKIL</option>
                                    <option value="161">KAPAL RORO - KMP. TELUK TOLO</option>
                                    <option value="162">KAPAL RORO - KMP. TEMI</option>
                                    <option value="163">KAPAL RORO - KMP. TENGGIRI</option>
                                    <option value="164">KAPAL RORO - KMP. TERUBUK</option>
                                    <option value="165">KAPAL RORO - KMP. TERUBUK I</option>
                                    <option value="166">KAPAL RORO - KMP. TONGKOL</option>
                                    <option value="167">KAPAL RORO - KMP. TUNA</option>
                                    <option value="168">KAPAL RORO - KMP. TUNA TOMINI</option>
                                    <option value="169">KAPAL RORO - KMP. UMA KALADA</option>
                                    <option value="170">KAPAL RORO - KMP. WAYANGAN</option>
                                    <option value="171">KAPAL WISATA - KMP. ARWANA</option>
                                    <option value="172">KAPAL WISATA - KMP. KOMODO</option>
                                    <option value="173">PELABUHAN ASDP - AJIBATA</option>
                                    <option value="174">PELABUHAN ASDP - AMBARITA</option>
                                    <option value="175">PELABUHAN ASDP - BAJOE</option>
                                    <option value="176">PELABUHAN ASDP - BAKAUHENI</option>
                                    <option value="177">PELABUHAN ASDP - BASTIONG</option>
                                    <option value="178">PELABUHAN ASDP - BATULICIN</option>
                                    <option value="179">PELABUHAN ASDP - BITUNG</option>
                                    <option value="180">PELABUHAN ASDP - BOLOK</option>
                                    <option value="181">PELABUHAN ASDP - GALALA</option>
                                    <option value="182">PELABUHAN ASDP - GILIMANUK</option>
                                    <option value="183">PELABUHAN ASDP - HUNIMUA</option>
                                    <option value="184">PELABUHAN ASDP - KAMAL</option>
                                    <option value="185">PELABUHAN ASDP - KAYANGAN</option>
                                    <option value="186">PELABUHAN ASDP - KETAPANG</option>
                                    <option value="187">PELABUHAN ASDP - KOLAKA</option>
                                    <option value="188">PELABUHAN ASDP - LABUAN BAJO</option>
                                    <option value="189">PELABUHAN ASDP - LARANTUKA</option>
                                    <option value="190">PELABUHAN ASDP - LEMBAR</option>
                                    <option value="191">PELABUHAN ASDP - MERAK</option>
                                    <option value="192">PELABUHAN ASDP - NAMLEA</option>
                                    <option value="193">PELABUHAN ASDP - PACIRAN</option>
                                    <option value="194">PELABUHAN ASDP - PADANGBAI</option>
                                    <option value="195">PELABUHAN ASDP - PAGIMANA</option>
                                    <option value="196">PELABUHAN ASDP - PANAJAM</option>
                                    <option value="197">PELABUHAN ASDP - PATIMBAN</option>
                                    <option value="198">PELABUHAN ASDP - POKA</option>
                                    <option value="199">PELABUHAN ASDP - POTOTANO</option>
                                    <option value="200">PELABUHAN ASDP - ROTE</option>
                                    <option value="201">PELABUHAN ASDP - RUM</option>
                                    <option value="202">PELABUHAN ASDP - SAPE</option>
                                    <option value="203">PELABUHAN ASDP - SIDANGOLE</option>
                                    <option value="204">PELABUHAN ASDP - TANJUNG KELIAN</option>
                                    <option value="205">PELABUHAN ASDP - TANJUNG SERDANG</option>
                                    <option value="206">PELABUHAN ASDP - TANJUNG UBAN</option>
                                    <option value="207">PELABUHAN ASDP - TELAGA PUNGGUR</option>
                                    <option value="208">PELABUHAN ASDP - UJUNG</option>
                                    <option value="209">PELABUHAN ASDP - WAIPIRIT</option>
                                    <option value="210">PELABUHAN UPT - AGATS</option>
                                    <option value="211">PELABUHAN UPT - AIMERE</option>
                                    <option value="212">PELABUHAN UPT - AMAHAI</option>
                                    <option value="213">PELABUHAN UPT - AMOLENGO</option>
                                    <option value="214">PELABUHAN UPT - AMPANA</option>
                                    <option value="215">PELABUHAN UPT - AMURANG</option>
                                    <option value="216">PELABUHAN UPT - ANCAM</option>
                                    <option value="217">PELABUHAN UPT - ARAR</option>
                                    <option value="218">PELABUHAN UPT - AREFI</option>
                                    <option value="219">PELABUHAN UPT - ATSY</option>
                                    <option value="220">PELABUHAN UPT - BABANG</option>
                                    <option value="221">PELABUHAN UPT - BABO</option>
                                    <option value="222">PELABUHAN UPT - BADE</option>
                                    <option value="223">PELABUHAN UPT - BALOHAN</option>
                                    <option value="224">PELABUHAN UPT - BANDAELI</option>
                                    <option value="225">PELABUHAN UPT - BANGGAI</option>
                                    <option value="226">PELABUHAN UPT - BARANUSA</option>
                                    <option value="227">PELABUHAN UPT - BAROKO</option>
                                    <option value="228">PELABUHAN UPT - BATANG DUA</option>
                                    <option value="229">PELABUHAN UPT - BATUREBE</option>
                                    <option value="230">PELABUHAN UPT - BAU-BAU</option>
                                    <option value="231">PELABUHAN UPT - BAWEAN</option>
                                    <option value="232">PELABUHAN UPT - BENGKULU</option>
                                    <option value="233">PELABUHAN UPT - BENJINA</option>
                                    <option value="234">PELABUHAN UPT - BENTUNI</option>
                                    <option value="235">PELABUHAN UPT - BIAK</option>
                                    <option value="236">PELABUHAN UPT - BINTANG HARAPAN DESA</option>
                                    <option value="237">PELABUHAN UPT - BIRA</option>
                                    <option value="238">PELABUHAN UPT - BOBONG</option>
                                    <option value="239">PELABUHAN UPT - BONERATE</option>
                                    <option value="240">PELABUHAN UPT - BONITON</option>
                                    <option value="241">PELABUHAN UPT - DABO</option>
                                    <option value="242">PELABUHAN UPT - DARUBA</option>
                                    <option value="243">PELABUHAN UPT - DERI</option>
                                    <option value="244">PELABUHAN UPT - DOBO</option>
                                    <option value="245">PELABUHAN UPT - DOLONG</option>
                                    <option value="246">PELABUHAN UPT - DONGKALA</option>
                                    <option value="247">PELABUHAN UPT - DOWARA</option>
                                    <option value="248">PELABUHAN UPT - DUMAI</option>
                                    <option value="249">PELABUHAN UPT - DUPA</option>
                                    <option value="250">PELABUHAN UPT - ELAT</option>
                                    <option value="251">PELABUHAN UPT - ENDE</option>
                                    <option value="252">PELABUHAN UPT - FADOL</option>
                                    <option value="253">PELABUHAN UPT - FAK FAK</option>
                                    <option value="254">PELABUHAN UPT - FOLLEY</option>
                                    <option value="255">PELABUHAN UPT - GAG</option>
                                    <option value="256">PELABUHAN UPT - GARONGKONG</option>
                                    <option value="257">PELABUHAN UPT - GEBE</option>
                                    <option value="258">PELABUHAN UPT - GETENTIRI</option>
                                    <option value="259">PELABUHAN UPT - GORONTALO</option>
                                    <option value="260">PELABUHAN UPT - GRESIK</option>
                                    <option value="261">PELABUHAN UPT - GUNUNG SITOLI</option>
                                    <option value="262">PELABUHAN UPT - HAAR</option>
                                    <option value="263">PELABUHAN UPT - HANSISI</option>
                                    <option value="264">PELABUHAN UPT - HOLAT</option>
                                    <option value="265">PELABUHAN UPT - JAILOLO</option>
                                    <option value="266">PELABUHAN UPT - JAMPEA</option>
                                    <option value="267">PELABUHAN UPT - JEPARA</option>
                                    <option value="268">PELABUHAN UPT - KABARE</option>
                                    <option value="269">PELABUHAN UPT - KAILOLO</option>
                                    <option value="270">PELABUHAN UPT - KAIMANA</option>
                                    <option value="271">PELABUHAN UPT - KAIMER</option>
                                    <option value="272">PELABUHAN UPT - KALABAHI</option>
                                    <option value="273">PELABUHAN UPT - KALAOTOA</option>
                                    <option value="274">PELABUHAN UPT - KALIAM</option>
                                    <option value="275">PELABUHAN UPT - KALOBO</option>
                                    <option value="276">PELABUHAN UPT - KAMARU</option>
                                    <option value="277">PELABUHAN UPT - KARIANGAU</option>
                                    <option value="278">PELABUHAN UPT - KARIMUNJAWA</option>
                                    <option value="279">PELABUHAN UPT - KASIPUTE</option>
                                    <option value="280">PELABUHAN UPT - KASIRUTA</option>
                                    <option value="281">PELABUHAN UPT - KAYELI</option>
                                    <option value="282">PELABUHAN UPT - KAYOA</option>
                                    <option value="283">PELABUHAN UPT - KAYUADI</option>
                                    <option value="284">PELABUHAN UPT - KENDARI</option>
                                    <option value="285">PELABUHAN UPT - KEPI</option>
                                    <option value="286">PELABUHAN UPT - KESUI</option>
                                    <option value="287">PELABUHAN UPT - KIMAAM</option>
                                    <option value="288">PELABUHAN UPT - KOFIAU</option>
                                    <option value="289">PELABUHAN UPT - KOLONEDALE</option>
                                    <option value="290">PELABUHAN UPT - KUMAI</option>
                                    <option value="291">PELABUHAN UPT - KUPAL</option>
                                    <option value="292">PELABUHAN UPT - KUR</option>
                                    <option value="293">PELABUHAN UPT - LABUAN</option>
                                    <option value="294">PELABUHAN UPT - LABUHAN BAJO</option>
                                    <option value="295">PELABUHAN UPT - LABUHAN HAJI</option>
                                    <option value="296">PELABUHAN UPT - LAMTENG</option>
                                    <option value="297">PELABUHAN UPT - LARAT</option>
                                    <option value="298">PELABUHAN UPT - LASUSUA</option>
                                    <option value="299">PELABUHAN UPT - LENGGARA</option>
                                    <option value="300">PELABUHAN UPT - LEWOLEBA</option>
                                    <option value="301">PELABUHAN UPT - LIKUPANG</option>
                                    <option value="302">PELABUHAN UPT - LINMALAS</option>
                                    <option value="303">PELABUHAN UPT - LUWUK</option>
                                    <option value="304">PELABUHAN UPT - MAKIAN</option>
                                    <option value="305">PELABUHAN UPT - MANGGUR</option>
                                    <option value="306">PELABUHAN UPT - MANGOLE</option>
                                    <option value="307">PELABUHAN UPT - MANOKWARI</option>
                                    <option value="308">PELABUHAN UPT - MARISA</option>
                                    <option value="309">PELABUHAN UPT - MAROPOKOT</option>
                                    <option value="310">PELABUHAN UPT - MARORE</option>
                                    <option value="311">PELABUHAN UPT - MAWASANGKA</option>
                                    <option value="312">PELABUHAN UPT - MELONGUANE</option>
                                    <option value="313">PELABUHAN UPT - MENGKAPAN</option>
                                    <option value="314">PELABUHAN UPT - MERAUKE</option>
                                    <option value="315">PELABUHAN UPT - MOOR</option>
                                    <option value="316">PELABUHAN UPT - MOTI</option>
                                    <option value="317">PELABUHAN UPT - NABIRE</option>
                                    <option value="318">PELABUHAN UPT - NALAHIA</option>
                                    <option value="319">PELABUHAN UPT - NDAO</option>
                                    <option value="320">PELABUHAN UPT - NUMFOR</option>
                                    <option value="321">PELABUHAN UPT - NUNUKAN</option>
                                    <option value="322">PELABUHAN UPT - OBI</option>
                                    <option value="323">PELABUHAN UPT - PADANG</option>
                                    <option value="324">PELABUHAN UPT - PAM</option>
                                    <option value="325">PELABUHAN UPT - PAMATATA</option>
                                    <option value="326">PELABUHAN UPT - PANANARU</option>
                                    <option value="327">PELABUHAN UPT - PARIT SAREM</option>
                                    <option value="328">PELABUHAN UPT - PASOKAN</option>
                                    <option value="329">PELABUHAN UPT - PATANI</option>
                                    <option value="330">PELABUHAN UPT - PATUMBUKAN</option>
                                    <option value="331">PELABUHAN UPT - PINANG LUAR</option>
                                    <option value="332">PELABUHAN UPT - POMAKO</option>
                                    <option value="333">PELABUHAN UPT - PULAU BANYAK</option>
                                    <option value="334">PELABUHAN UPT - PULAU ENGGANO</option>
                                    <option value="335">PELABUHAN UPT - PULAU SIOMPU</option>
                                    <option value="336">PELABUHAN UPT - PULAU TELLO</option>
                                    <option value="337">PELABUHAN UPT - PULAU UT</option>
                                    <option value="338">PELABUHAN UPT - PURE</option>
                                    <option value="339">PELABUHAN UPT - RAHA</option>
                                    <option value="340">PELABUHAN UPT - RASAU JAYA</option>
                                    <option value="341">PELABUHAN UPT - RUPAT</option>
                                    <option value="342">PELABUHAN UPT - SABU</option>
                                    <option value="343">PELABUHAN UPT - SADAI</option>
                                    <option value="344">PELABUHAN UPT - SAKETA</option>
                                    <option value="345">PELABUHAN UPT - SALAKAN</option>
                                    <option value="346">PELABUHAN UPT - SANANA</option>
                                    <option value="347">PELABUHAN UPT - SAOSAFOR</option>
                                    <option value="348">PELABUHAN UPT - SAWAERMA</option>
                                    <option value="349">PELABUHAN UPT - SEBATIK</option>
                                    <option value="350">PELABUHAN UPT - SELAT BELIA (PULAU KUNDUR)</option>
                                    <option value="351">PELABUHAN UPT - SEMARANG</option>
                                    <option value="352">PELABUHAN UPT - SERUI</option>
                                    <option value="353">PELABUHAN UPT - SIBERUT</option>
                                    <option value="354">PELABUHAN UPT - SIBOLGA</option>
                                    <option value="355">PELABUHAN UPT - SIKABALUAN</option>
                                    <option value="356">PELABUHAN UPT - SIKAKAP</option>
                                    <option value="357">PELABUHAN UPT - SIMENGGARIS</option>
                                    <option value="358">PELABUHAN UPT - SINABANG</option>
                                    <option value="359">PELABUHAN UPT - SINGKIL</option>
                                    <option value="360">PELABUHAN UPT - SIWA</option>
                                    <option value="361">PELABUHAN UPT - SOFIFI</option>
                                    <option value="362">PELABUHAN UPT - SOLAL</option>
                                    <option value="363">PELABUHAN UPT - SOLOR</option>
                                    <option value="364">PELABUHAN UPT - SORONG</option>
                                    <option value="365">PELABUHAN UPT - SUBAIM</option>
                                    <option value="366">PELABUHAN UPT - SUNGAI MAYAM</option>
                                    <option value="367">PELABUHAN UPT - SUNGAI NIPAH</option>
                                    <option value="368">PELABUHAN UPT - TABARFANE</option>
                                    <option value="369">PELABUHAN UPT - TAIPA</option>
                                    <option value="370">PELABUHAN UPT - TAM</option>
                                    <option value="371">PELABUHAN UPT - TAMPO</option>
                                    <option value="372">PELABUHAN UPT - TANAH MERAH</option>
                                    <option value="373">PELABUHAN UPT - TANJUNG API API</option>
                                    <option value="374">PELABUHAN UPT - TANJUNG BALAI KARIMUN</option>
                                    <option value="375">PELABUHAN UPT - TANJUNG HARAPAN</option>
                                    <option value="376">PELABUHAN UPT - TANJUNG PINANG</option>
                                    <option value="377">PELABUHAN UPT - TANJUNG RHU</option>
                                    <option value="378">PELABUHAN UPT - TARAKAN</option>
                                    <option value="379">PELABUHAN UPT - TAYAN</option>
                                    <option value="380">PELABUHAN UPT - TAYANDO</option>
                                    <option value="381">PELABUHAN UPT - TEBAS KUALA</option>
                                    <option value="382">PELABUHAN UPT - TEBAS SEBERANG</option>
                                    <option value="383">PELABUHAN UPT - TELUK BATANG</option>
                                    <option value="384">PELABUHAN UPT - TELUK DALAM</option>
                                    <option value="385">PELABUHAN UPT - TELUK KALONG</option>
                                    <option value="386">PELABUHAN UPT - TENGGARONG KOTA</option>
                                    <option value="387">PELABUHAN UPT - TENGGARONG SEBERANG</option>
                                    <option value="388">PELABUHAN UPT - TERAYU</option>
                                    <option value="389">PELABUHAN UPT - TOBELO</option>
                                    <option value="390">PELABUHAN UPT - TOLANDONA</option>
                                    <option value="391">PELABUHAN UPT - TOLI TOLI</option>
                                    <option value="392">PELABUHAN UPT - TOLI-TOLI</option>
                                    <option value="393">PELABUHAN UPT - TOROBULU</option>
                                    <option value="394">PELABUHAN UPT - TUA PEJAT</option>
                                    <option value="395">PELABUHAN UPT - TUAL</option>
                                    <option value="396">PELABUHAN UPT - ULEE LHEUE</option>
                                    <option value="397">PELABUHAN UPT - UMEPUTIH</option>
                                    <option value="398">PELABUHAN UPT - WAAI</option>
                                    <option value="399">PELABUHAN UPT - WAARA</option>
                                    <option value="400">PELABUHAN UPT - WAHAI</option>
                                    <option value="401">PELABUHAN UPT - WAIGAMA</option>
                                    <option value="402">PELABUHAN UPT - WAIGEO (WAISAI)</option>
                                    <option value="403">PELABUHAN UPT - WAIKELO</option>
                                    <option value="404">PELABUHAN UPT - WAILEBET</option>
                                    <option value="405">PELABUHAN UPT - WAILEY</option>
                                    <option value="406">PELABUHAN UPT - WAIMAN</option>
                                    <option value="407">PELABUHAN UPT - WAINGAPU</option>
                                    <option value="408">PELABUHAN UPT - WAIWERANG</option>
                                    <option value="409">PELABUHAN UPT - WAKAI</option>
                                    <option value="410">PELABUHAN UPT - WANCI</option>
                                    <option value="411">PELABUHAN UPT - WAREN</option>
                                    <option value="412">PELABUHAN UPT - WASIOR</option>
                                    <option value="413">PELABUHAN UPT - WAYOM</option>
                                    <option value="414">PELABUHAN UPT - WEDA</option>
                                    <option value="415">PELABUHAN UPT - WEDUAR</option>
                                    <option value="416">PELABUHAN UPT - WEJIM</option>
                                    <option value="417">PELABUHAN UPT - YENANAS</option>
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
