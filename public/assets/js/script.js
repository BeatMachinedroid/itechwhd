(function ($) {
    "use strict";
    var $wrapper = $(".main-wrapper");
    var $pageWrapper = $(".page-wrapper");
    var $slimScrolls = $(".slimscroll");
    var Sidemenu = function () {
        this.$menuItem = $("#sidebar-menu a");
    };
    function init() {
        var $this = Sidemenu;
        $("#sidebar-menu a").on("click", function (e) {
            if ($(this).parent().hasClass("submenu")) {
                e.preventDefault();
            }
            if (!$(this).hasClass("subdrop")) {
                $("ul", $(this).parents("ul:first")).slideUp(350);
                $("a", $(this).parents("ul:first")).removeClass("subdrop");
                $(this).next("ul").slideDown(350);
                $(this).addClass("subdrop");
            } else if ($(this).hasClass("subdrop")) {
                $(this).removeClass("subdrop");
                $(this).next("ul").slideUp(350);
            }
        });
        $("#sidebar-menu ul li.submenu a.active")
            .parents("li:last")
            .children("a:first")
            .addClass("active")
            .trigger("click");
    }
    init();
    $("body").append('<div class="sidebar-overlay"></div>');
    $(document).on("click", "#mobile_btn", function () {
        $wrapper.toggleClass("slide-nav");
        $(".sidebar-overlay").toggleClass("opened");
        $("html").addClass("menu-opened");
        return false;
    });
    $(".sidebar-overlay").on("click", function () {
        $wrapper.removeClass("slide-nav");
        $(".sidebar-overlay").removeClass("opened");
        $("html").removeClass("menu-opened");
    });
    if ($(".page-wrapper").length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
    }
    $(window).resize(function () {
        if ($(".page-wrapper").length > 0) {
            var height = $(window).height();
            $(".page-wrapper").css("min-height", height);
        }
    });
    if ($(".select").length > 0) {
        $(".select").select2({ minimumResultsForSearch: -1, width: "100%" });
    }
    if ($(".datetimepicker").length > 0) {
        $(".datetimepicker").datetimepicker({
            format: "DD/MM/YYYY",
            icons: {
                up: "fa fa-angle-up",
                down: "fa fa-angle-down",
                next: "fa fa-angle-right",
                previous: "fa fa-angle-left",
            },
        });
        $(".datetimepicker")
            .on("dp.show", function () {
                $(this)
                    .closest(".table-responsive")
                    .removeClass("table-responsive")
                    .addClass("temp");
            })
            .on("dp.hide", function () {
                $(this)
                    .closest(".temp")
                    .addClass("table-responsive")
                    .removeClass("temp");
            });
    }
    if ($('[data-toggle="tooltip"]').length > 0) {
        $('[data-toggle="tooltip"]').tooltip();
    }
    if ($(".datatable").length > 0) {
        $(".datatable").DataTable({ bFilter: false });
    }
    if ($(".clickable-row").length > 0) {
        $(document).on("click", ".clickable-row", function () {
            window.location = $(this).data("href");
        });
    }
    $(document).on("click", "#check_all", function () {
        $(".checkmail").click();
        return false;
    });
    if ($(".checkmail").length > 0) {
        $(".checkmail").each(function () {
            $(this).on("click", function () {
                if ($(this).closest("tr").hasClass("checked")) {
                    $(this).closest("tr").removeClass("checked");
                } else {
                    $(this).closest("tr").addClass("checked");
                }
            });
        });
    }
    $(document).on("click", ".mail-important", function () {
        $(this).find("i.fa").toggleClass("fa-star").toggleClass("fa-star-o");
    });
    if ($(".summernote").length > 0) {
        $(".summernote").summernote({
            height: 200,
            minHeight: null,
            maxHeight: null,
            focus: false,
        });
    }
    if ($(".proimage-thumb li a").length > 0) {
        var full_image = $(this).attr("href");
        $(".proimage-thumb li a").click(function () {
            full_image = $(this).attr("href");
            $(".pro-image img").attr("src", full_image);
            $(".pro-image img").parent().attr("href", full_image);
            return false;
        });
    }
    if ($("#pro_popup").length > 0) {
        $("#pro_popup").lightGallery({ thumbnail: true, selector: "a" });
    }
    if ($slimScrolls.length > 0) {
        $slimScrolls.slimScroll({
            height: "auto",
            width: "100%",
            position: "right",
            size: "7px",
            color: "#ccc",
            allowPageScroll: false,
            wheelStep: 10,
            touchScrollStep: 100,
        });
        var wHeight = $(window).height() - 60;
        $slimScrolls.height(wHeight);
        $(".sidebar .slimScrollDiv").height(wHeight);
        $(window).resize(function () {
            var rHeight = $(window).height() - 60;
            $slimScrolls.height(rHeight);
            $(".sidebar .slimScrollDiv").height(rHeight);
        });
    }
    $(document).on("click", "#toggle_btn", function () {
        if ($("body").hasClass("mini-sidebar")) {
            $("body").removeClass("mini-sidebar");
            $(".subdrop + ul").slideDown();
        } else {
            $("body").addClass("mini-sidebar");
            $(".subdrop + ul").slideUp();
        }
        setTimeout(function () {
            mA.redraw();
            mL.redraw();
        }, 300);
        return false;
    });
    $(document).on("mouseover", function (e) {
        e.stopPropagation();
        if (
            $("body").hasClass("mini-sidebar") &&
            $("#toggle_btn").is(":visible")
        ) {
            var targ = $(e.target).closest(".sidebar").length;
            if (targ) {
                $("body").addClass("expand-menu");
                $(".subdrop + ul").slideDown();
            } else {
                $("body").removeClass("expand-menu");
                $(".subdrop + ul").slideUp();
            }
            return false;
        }
    });

    $(document).ready(function(){
        $("#category").change(function(){
            if($(this).val() == "1"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Cyber Attack">Cyber Attack</option> ');
            }else if($(this).val() == "2"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Access Lane Kendaraan & Kendaraan Motor">Access Lane Kendaraan & Kendaraan Motor</option><option value="Access Lane Penumpang">Access Lane Penumpang</option><option value="Business Operation">Business Operation</option><option value="Loket Kendaraan (Non Sistem Verifikasi)">Loket Kendaraan (Non Sistem Verifikasi)</option><option value="Loket Kendaraan (System Verifikasi)">Loket Kendaraan (System Verifikasi)</option><option value="Loket Kendaraan Motor">Loket Kendaraan Motor</option><option value="Loket Penumpang">Loket Penumpang</option><option value="Pelabuhan">Pelabuhan</option><option value="Vending Machine Cashless">Vending Machine Cashless</option>');
            }else if($(this).val() == "3"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Cabang">Cabang</option><option value="Data Center">Data Center</option>');
            }else if($(this).val() == "4"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Business Operation">Business Operation</option><option value="Enterprise">Enterprise</option><option value="Operation Support">Operation Support</option>');
            }else if($(this).val() == "5"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Service & Storage">Service & Storage</option>');
            }else if($(this).val() == "6"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Layanan Instalasi Aplikasi">Layanan Instalasi Aplikasi</option><option value="Layanan Managemen Akun & Hak Akses">Layanan Managemen Akun & Hak Akses</option><option value="Layanan Penanganan Insiden dan Masalah">Layanan Penanganan Insiden dan Masalah</option>');
            }else if($(this).val() == "7"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Perangkat Keras">Perangkat Keras</option><option value="Perangkat Lunak">Perangkat Lunak</option>');
            }else if($(this).val() == "8"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Layanan Jaringan Eksternal">Layanan Jaringan Eksternal</option><option value="Layanan Jaringan Internal">Layanan Jaringan Internal</option><option value="Layanan Komunikasi">Layanan Komunikasi</option><option value="Layanan Monitoring">Layanan Monitoring</option>');
            }else if($(this).val() == "9"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Modifikasi Aplikasi">Modifikasi Aplikasi</option><option value="Pelatihan Teknologi Informasi">Pelatihan Teknologi Informasi</option><option value="Pembangunan Aplikasi Baru">Pembangunan Aplikasi Baru</option><option value="Pendampingan Implementasi">Pendampingan Implementasi</option><option value="Penyediaan Data">Penyediaan Data</option>');
            }else if($(this).val() == "10"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Database Object Release">Database Object Release</option><option value="Hak Akses Database">Hak Akses Database</option><option value="Permintaan Schema Database">Permintaan Schema Database</option><option value="Permintaan Source Code">Permintaan Source Code</option><option value="Source Code Release">Source Code Release</option>');
            }else if($(this).val() == "11"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Perangkat Ticketing">Perangkat Ticketing</option>');
            }else if($(this).val() == "12"){
                $("#sub_catogory").show();
                $("#sub_catogory").empty();
                $("#sub_catogory").append('<option value=""></option><option value="Perangkat">Perangkat</option>');
            }else{
                $("#sub_catogory").hide();
                $("#sub_catogory").empty();
            }
        });
    });
    $(document).ready(function(){
        $("#sub_catogory").change(function(){
            if($(this).val() == "Access Lane Kendaraan & Kendaraan Motor"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Accsess Point Dermaga Kendaraan">Accsess Point Dermaga Kendaraan</option><option value="Barier Gate - rear side (complete with loop )">Barier Gate - rear side (complete with loop )</option><option value="Barrier Gate">Barrier Gate</option><option value="Handheld Reader">Handheld Reader</option><option value="Manless 2004">Manless 200</option><option value="Manless Standard<">Manless Standard</option>');
            }else if($(this).val() == "Access Lane Penumpang"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Accsess Point Dermaga Penumpang">Accsess Point Dermaga Penumpang</option><option value="Gate Turnstile">Gate Turnstile</option><option value="Gate Turnstile Dermaga">Gate Turnstile Dermaga</option><option value="Handheld Reader">Handheld Reader</option>');
            }else if($(this).val() == "Business Operation"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Change Request (CR)">Change Request (CR)</option>');
            }else if($(this).val() == "Loket Kendaraan (Non Sistem Verifikasi)"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Boomgate Loket">Boomgate Loket</option><option value="Cash Drawer">Cash Drawer</option><option value="CCTV B -  Jenis Golongan Kendaraan">CCTV B -  Jenis Golongan Kendaraan</option><option value="CCTV C -  Panjang">CCTV C -  Panjang</option><option value="CCTV Capture front end (ANPR)">CCTV Capture front end (ANPR)</option><option value="Display Tarif & Golongan c/w support (Incl. Casing)">Display Tarif & Golongan c/w support (Incl. Casing)</option><option value="Gantry Kendaraan (bisa masuk Kendaraan Bus)">Gantry Kendaraan (bisa masuk Kendaraan Bus)</option><option value="Hub / Switch Loket (8 port)D-Link DGS-1100-05PD">Hub / Switch Loket (8 port)D-Link DGS-1100-05PD</option><option value="I/O Controller">I/O Controller</option><option value="Jaringan (Network)">Jaringan (Network)</option><option value="Mini Printer Loket">Mini Printer Loket</option><option value="PC Based POS (Tanpa customer display)">PC Based POS (Tanpa customer display)</option><option value="Pc LCS">Pc LCS</option><option value="Reader e-KTP Desktop">Reader e-KTP Desktop</option><option value="Reader eMoney">Reader eMoney</option><option value="Reader Group Casing">Reader Group Casing</option><option value="Reader QRCode">Reader QRCode</option><option value="UPS Loket">UPS Loket</option>');
            }else if($(this).val() == "Loket Kendaraan (System Verifikasi)"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Barier Gate - rear side (complete with loop )">Barier Gate - rear side (complete with loop )</option><option value="Boomgate loket">Boomgate loket</option><option value="Cash Drawer">Cash Drawer</option><option value="CCTV B - Jenis Golongan Kendaraan">CCTV B - Jenis Golongan Kendaraan</option><option value="CCTV C - Panjang">CCTV C - Panjang</option><option value="CCTV Capture front end (ANPR)">CCTV Capture front end (ANPR)</option><option value="Display Tarif & Golongan c/w support (Incl. Casing)">Display Tarif & Golongan c/w support (Incl. Casing)</option><option value="Gantry Sensor">Gantry Sensor</option><option value="Hub / Switch Loket (8 port)D-Link DGS-1100-08PD">Hub / Switch Loket (8 port)D-Link DGS-1100-08PD</option><option value="I/O Controller">I/O Controller</option><option value="Jaringan (Network)">Jaringan (Network)</option><option value="Jembatan Timbang">Jembatan Timbang</option><option value="Mini Printer Loket">Mini Printer Loket</option><option value="Mobile Reader e-KTP">Mobile Reader e-KTP</option><option value="Optical Barrier">Optical Barrier</option><option value="PC Based POS">PC Based POS</option><option value="Pc LCS">Pc LCS</option><option value="Reader e-KTP Desktop">Reader e-KTP Desktop</option><option value="Reader eMoney">Reader eMoney</option><option value="Reader Group Casing">Reader Group Casing</option><option value="Reader QRCode">Reader QRCode</option><option value="Sensor">Sensor</option><option value="Sensor Kelas Kendaraan">Sensor Kelas Kendaraan</option><option value="UPS Loket 3Kva">UPS Loket 3Kva</option>');
            }else if($(this).val() == "Loket Kendaraan Motor"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Barrier Gate">Barrier Gate</option><option value="Cash Drawer">Cash Drawer</option><option value="CCTV Capture front end">CCTV Capture front end</option><option value="Hub / Switch Loket (5 port)D-Link DGS-1100-05PD">Hub / Switch Loket (5 port)D-Link DGS-1100-05PD</option><option value="I/O Controller">I/O Controller</option><option value="Mini Printer Loket">Mini Printer Loket</option><option value="PC Based POS(menggunakan customer display)">PC Based POS(menggunakan customer display)</option><option value="Reader e-KTP Desktop">Reader e-KTP Desktop</option><option value="Reader eMoney">Reader eMoney</option><option value="Reader Group Casing">Reader Group Casing</option><option value="Reader QRCode">Reader QRCode</option><option value="UPS Loket">UPS Loket</option>');
            }else if($(this).val() == "Loket Penumpang"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Cash Drawer">Cash Drawer</option><option value="Jaringan (Network)">Jaringan (Network)</option><option value="Mikrofon Loket">Mikrofon Loket</option><option value="Mini Printer Loket">Mini Printer Loket</option><option value="PC Based POS">PC Based POS</option><option value="Reader e-KTP Desktop">Reader e-KTP Desktop</option><option value="Reader eMoney">Reader eMoney</option><option value="Reader Group Casing">Reader Group Casing</option><option value="Reader Passport">Reader Passport</option><option value="Reader QRCode">Reader QRCode</option><option value="UPS Loket">UPS Loket</option>');
            }else if($(this).val() == "Pelabuhan"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""><option value="Display Monitoring CCTV - LED">Display Monitoring CCTV - LED</option><option value="Ferizy">Ferizy</option><option value="Hub / Switch (16 port)">Hub / Switch (16 port)</option><option value="Jaringan ASTINET">Jaringan ASTINET</option><option value="Jaringan lokal">Jaringan lokal</option><option value="Jembatan Timbang">Jembatan Timbang</option><option value="PTC">PTC</option><option value="Server Cloud">Server Cloud</option><option value="Server Lokal">Server Lokal</option><option value="Switch FO">Switch FO</option>');
            }else if($(this).val() == "Vending Machine Cashless"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Barcode Scanner">Barcode Scanner</option><option value="Casing">Casing</option><option value="Display TouchSreen 19">Display TouchSreen 19"</option><option value="E-KTP Reader">E-KTP Reader</option><option value="Embedded PC">Embedded PC</option><option value="E-Money Reader">E-Money Reader</option><option value="Jaringan (Network)">Jaringan (Network)</option><option value="Kiosk Printer">Kiosk Printer</option><option value="UPS">UPS</option>');
            }else if($(this).val() == "Cabang"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Bakauheni">Bakauheni</option><option value="Ketapang">Ketapang</option><option value="Merak">Merak</option>');
            }else if($(this).val() == "Data Center"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="DC01-TELKOM SIGMA">DC01-TELKOM SIGMA</option><option value="DC02-INDOSAT">DC02-INDOSAT</option><option value="DCH0-KANTOR PUSAT">DCH0-KANTOR PUSAT</option>');
            }else if($(this).val() == "Business Operation"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Aplikasi Pembelian Token Prabayar">Aplikasi Pembelian Token Prabayar</option><option value="ASDP Superior">ASDP Superior</option><option value="Change Request SAP">Change Request SAP</option><option value="E-DRP">E-DRP</option><option value="E-Ticketing System (ASDP Managed)">E-Ticketing System (ASDP Managed)</option><option value="IMS">IMS</option><option value="Informasi Jadwal Kapal & Tarif">Informasi Jadwal Kapal & Tarif</option><option value="Tenant">Tenant</option><option value="Vessel Monitoring System (VSM)">Vessel Monitoring System (VSM)</option>');
            }else if($(this).val() == "Enterprise"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Business Work Container Edition (ESB)">Business Work Container Edition (ESB)</option><option value="Enterprise Architecture Tools">Enterprise Architecture Tools</option><option value="Power BI">Power BI</option><option value="SAP">SAP</option><option value="Website ASDP">Website ASDP</option><option value="Whistle Blower System">Whistle Blower System</option>');
            }else if($(this).val() == "Operation Support"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Absensi">Absensi</option><option value="Ambar">Ambar</option><option value="BBM">BBM</option><option value="Customer Relationship Management">Customer Relationship Management</option><option value="DigiMOM">DigiMOM</option><option value="Digital Management System">Digital Management System</option><option value="E-Bas">E-Bas</option><option value="Electronic Office">Electronic Office</option><option value="Elsa">Elsa</option><option value="E-Office">E-Office</option><option value="E-PPT">E-PPT</option><option value="ERM (Electronic Risk Management)">ERM (Electronic Risk Management)</option><option value="ESS">ESS</option><option value="FIDIAS (Financial Digital System)">FIDIAS (Financial Digital System)</option><option value="HCIS">HCIS</option><option value="Human Capital Information System">Human Capital Information System</option><option value="IBS">IBS</option><option value="Info ASDP">Info ASDP</option><option value="intranet.indonesiaferry.id">intranet.indonesiaferry.id</option><option value="Legalnet">Legalnet</option><option value="Monitoring KPI">Monitoring KPI</option><option value="Portal ASDP">Portal ASDP</option><option value="Portal Legal Information">Portal Legal Information</option><option value="Procurement, Inventory, and Assset Management">Procurement, Inventory, and Assset Management</option><option value="Produksi Pendapatan Pelabuhan">Produksi Pendapatan Pelabuhan</option><option value="Semprotan (Sistem Monitoring Produksi dan Pendapatan)">Semprotan (Sistem Monitoring Produksi dan Pendapatan)</option><option value="Ship Maintenance System">Ship Maintenance System</option><option value="SIM TI">SIM TI</option><option value="Sistem Managmen Keselamatan">Sistem Managmen Keselamatan</option><option value="SMART Rekrutmen">SMART Rekrutmen</option><option value="Superior">Superior</option>');
            }else if($(this).val() == "Layanan Instalasi Aplikasi"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Instalasi Aplikasi Dekstop Korporat">Instalasi Aplikasi Dekstop Korporat</option><option value="Instalasi Aplikasi Dekstop Non Korporat">Instalasi Aplikasi Dekstop Non Korporat</option>');
            }else if($(this).val() == "Layanan Managemen Akun & Hak Akses"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Akun/Akses Active Directory">Akun/Akses Active Directory</option><option value="Akun/Akses Aplikasi">Akun/Akses Aplikasi</option><option value="Akun/Akses Email">Akun/Akses Email</option><option value="Akun/Akses Koneksi Internet / Wifi">Akun/Akses Koneksi Internet / Wifi</option><option value="Akun/Akses Koneksi LAN">Akun/Akses Koneksi LAN</option><option value="Akun/Akses Koneksi VIdeo Conference">Akun/Akses Koneksi VIdeo Conference</option><option value="Akun/Akses Koneksi Voip">Akun/Akses Koneksi Voip</option>');
            }else if($(this).val() == "Layanan Penanganan Insiden dan Masalah"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Pelaporan Help Desk">Pelaporan Help Desk</option><option value="Penanganan dan Resolusi">Penanganan dan Resolusi</option><option value="SAP">SAP</option>');
            }else if($(this).val() == "Perangkat Keras"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Komponen Perangkat Komputer">Komponen Perangkat Komputer</option><option value="Laptop">Laptop</option><option value="Personal Computer">Personal Computer</option><option value="Printer">Printer</option><option value="Scanner">Scanner</option><option value="UPS PC dan Perangkat Server">UPS PC dan Perangkat Server</option>');
            }else if($(this).val() == "Perangkat Lunak"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Adobe Master Collection">Adobe Master Collection</option><option value="Anti-Virus (Apex One)">Anti-Virus (Apex One)</option><option value="AutoCAD">AutoCAD</option><option value="Corel Draw">Corel Draw</option><option value="License Zoom Account">License Zoom Account</option><option value="Lisensi Software Lainnya">Lisensi Software Lainnya</option><option value="Lumion">Lumion</option><option value="Microsoft Office">Microsoft Office</option><option value="Microsoft Project">Microsoft Project</option><option value="Microsoft Visio">Microsoft Visio</option><option value="Nitron PDF">Nitron PDF</option><option value="Operating System (Windows)">Operating System (Windows)</option><option value="Sketchup">Sketchup</option>');
            }else if($(this).val() == "Layanan Jaringan Eksternal"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option selected="selected" value="Internet">Internet</option><option value="Layanan Jaringan DC Indosat">Layanan Jaringan DC Indosat</option>');
            }else if($(this).val() == "Layanan Jaringan Internal"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Local Arean Network (LAN)">Local Arean Network (LAN)</option><option value="Virtual Private Network (VPN)">Virtual Private Network (VPN)</option><option value="Wide Area Network">Wide Area Network</option><option value="Wifi Kantor Pusat">Wifi Kantor Pusat</option>');
            }else if($(this).val() == "Layanan Komunikasi"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="E-Mail">E-Mail</option><option value="File Sharing">File Sharing</option><option value="Teleconference">Teleconference</option><option value="Video Conference">Video Conference</option><option value="Voice Over Internet Protocol (Voip)">Voice Over Internet Protocol (Voip)</option>');
            }else if($(this).val() == "Layanan Monitoring"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Closed Circuit Television (CCTV)">Closed Circuit Television (CCTV)</option>');
            }else if($(this).val() == "Modifikasi Aplikasi"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Modifikasi Aplikasi">Modifikasi Aplikasi</option>');
            }else if($(this).val() == "Pelatihan Teknologi Informasi"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Pelatihan Teknologi Informasi">Pelatihan Teknologi Informasi</option>');
            }else if($(this).val() == "Pembangunan Aplikasi Baru"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Pembangunan Aplikasi">Pembangunan Aplikasi</option><option value="Penyusunan Dokument Kebutuhan Bisnis">Penyusunan Dokument Kebutuhan Bisnis</option>');
            }else if($(this).val() == "Pendampingan Implementasi"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Pendampingan Implementasi">Pendampingan Implementasi</option>');
            }else if($(this).val() == "Penyediaan Data"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Penyediaan Data">Penyediaan Data</option>');
            }else if($(this).val() == "Perangkat Ticketing"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Barrier Gate">Barrier Gate</option><option value="CCTV">CCTV</option><option value="Komponen Perangkat Ticketing Lainnya">Komponen Perangkat Ticketing Lainnya</option><option value="Mesin EDC">Mesin EDC</option><option value="Mobile Device">Mobile Device</option><option value="Other">Other</option><option value="Personal Computer (PC)">Personal Computer (PC)</option><option value="Printer Thermal">Printer Thermal</option><option value="QR Scan Barcode">QR Scan Barcode</option><option value="Scanner">Scanner</option><option value="Sensor">Sensor</option><option value="Stabilizer">Stabilizer</option><option value="Surge Protector">Surge Protector</option><option value="Turnstile">Turnstile</option><option value="UPS">UPS</option><option value="Wireless Access Point">Wireless Access Point</option>');
            }else if($(this).val() == "Perangkat"){
                $("#sub_category_type").show();
                $("#sub_category_type").empty();
                $("#sub_category_type").append('<option value=""></option><option value="Acces Card RFID">Acces Card RFID</option><option value="Barrier Gate">Barrier Gate</option><option value="CCTV">CCTV</option><option value="Finger Print Access">Finger Print Access</option><option value="Keyboard Kasir">Keyboard Kasir</option><option value="Layar Monitor Kasir">Layar Monitor Kasir</option><option value="Looping Sensor">Looping Sensor</option><option value="Magnet Pintu Akses">Magnet Pintu Akses</option><option value="Mini PC">Mini PC</option><option value="Mouse Kasir">Mouse Kasir</option><option value="Personal Computer Admin">Personal Computer Admin</option><option value="Printer Thermal">Printer Thermal</option><option value="QR Scan Barcode">QR Scan Barcode</option><option value="Server Parking">Server Parking</option><option value="Speaker">Speaker</option><option value="Switch Hub">Switch Hub</option><option value="Taping RFID">Taping RFID</option><option value="UPS">UPS</option><option value="Vld Sensor">Vld Sensor</option>');
            }else{
                $("#sub_category_type").hide();
                $("#sub_category_type").empty();
            }
        })
    });

    document.getElementById("show-form").addEventListener("click", function() {
        document.getElementById("notes").style.display = "flex";
      });


})(jQuery);

// $('select').change(function(){
//     if (($('select#category option').val() == '1')) {
//        $('#sub_catogory').show();
//     } else {
//        $('#sub_catogory').hide();
//     }
//  });

