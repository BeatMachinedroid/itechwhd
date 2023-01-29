<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            [
            'username'=>'IT WHD-Bakauheni',
            'email'=>'it.whdbakauheni@indonesiaferry.co.id',
            'location'=>'KANTOR CABANG - BAKAUHENI',
            'password'=>bcrypt('@K4mun4ny4?'),
            'role'=>'admin',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
            ]

        ]);

        DB::table('request_types')->insert([
            [
                'name' => 'Cyber Security',
            ],
            [
                'name' => 'KSO TELKOM',
            ],
            [
                'name' => 'Layanan Akses Server',
            ],
            [
                'name' => 'Layanan Aplikasi',
            ],
            [
                'name' => 'Layanan Data Center',
            ],
            [
                'name' => 'Layanan Dukungan Pengguna',
            ],
            [
                'name' => 'Layanan End User Computing',
            ],
            [
                'name' => 'Layanan Jaringan dan Komunikasi',
            ],
            [
                'name' => 'Layanan Solusi Bisnis',
            ],
            [
                'name' => 'Layanan Teknis Internal',
            ],
            [
                'name' => 'Layanan Ticketing',
            ],
            [
                'name' => 'Parking secure',
            ],
        ]);

        DB::table('request_type_cates')->insert([
            [
                'id_request' => '1',
                'name' => 'New Request',
            ],
            [
                'id_request' => '2',
                'name' => 'Access Lane Kendaraan & Kendaraan Motor',
            ],
            [
                'id_request' => '2',
                'name' => 'Access Lane Penumpang',
            ],
            [
                'id_request' => '2',
                'name' => 'Business Operation',
            ],
            [
                'id_request' => '2',
                'name' => 'Loket Kendaraan (Non Sistem Verifikasi)',
            ],
            [
                'id_request' => '2',
                'name' => 'Loket Kendaraan (System Verifikasi)',
            ],
            [
                'id_request' => '2',
                'name' => 'Loket Kendaraan Motor',
            ],
            [
                'id_request' => '2',
                'name' => 'Loket Penumpang',
            ],
            [
                'id_request' => '2',
                'name' => 'Pelabuhan',
            ],
            [
                'id_request' => '2',
                'name' => 'Vending Machine Cashless',
            ],
            [
                'id_request' => '3',
                'name' => 'Cabang',
            ],
            [
                'id_request' => '3',
                'name' => 'Data Center',
            ],
            [
                'id_request' => '4',
                'name' => 'Business Operation',
            ],
            [
                'id_request' => '4',
                'name' => 'Enterprise',
            ],
            [
                'id_request' => '4',
                'name' => 'Operation Support',
            ],
            [
                'id_request' => '5',
                'name' => 'Service & Storage',
            ],
            [
                'id_request' => '6',
                'name' => 'Layanan Instalasi Aplikasi',
            ],
            [
                'id_request' => '6',
                'name' => 'Layanan Managemen Akun & Hak Akses',
            ],
            [
                'id_request' => '6',
                'name' => 'Layanan Penanganan Insiden dan Masalah',
            ],
            [
                'id_request' => '7',
                'name' => 'Perangkat Keras',
            ],
            [
                'id_request' => '7',
                'name' => 'Perangkat Lunak',
            ],
            [
                'id_request' => '8',
                'name' => 'Layanan Jaringan Eksternal',
            ],
            [
                'id_request' => '8',
                'name' => 'Layanan Jaringan Internal',
            ],
            [
                'id_request' => '8',
                'name' => 'Layanan Komunikasi',
            ],
            [
                'id_request' => '8',
                'name' => 'Layanan Monitoring',
            ],
            [
                'id_request' => '9',
                'name' => 'Modifikasi Aplikasi',
            ],
            [
                'id_request' => '9',
                'name' => 'Pelatihan Teknologi Informasi',
            ],
            [
                'id_request' => '9',
                'name' => 'Pembangunan Aplikasi Baru',
            ],
            [
                'id_request' => '9',
                'name' => 'Pendampingan Implementasi',
            ],
            [
                'id_request' => '9',
                'name' => 'Penyediaan Data',
            ],
            [
                'id_request' => '10',
                'name' => 'Database Object Release',
            ],
            [
                'id_request' => '10',
                'name' => 'Hak Akses Database',
            ],
            [
                'id_request' => '10',
                'name' => 'Permintaan Schema Database',
            ],
            [
                'id_request' => '10',
                'name' => 'Permintaan Source Code',
            ],
            [
                'id_request' => '10',
                'name' => 'Source Code Release',
            ],
            [
                'id_request' => '11',
                'name' => 'Perangkat Ticketing',
            ],
            [
                'id_request' => '12',
                'name' => 'Perangkat',
            ]
        ]);

        DB::table('request_type_locals')->insert([
            [
                'id_request_cate' => '2',
                'name' => 'Accsess Point Dermaga Kendaraan',
            ],
            [
                'id_request_cate' => '2',
                'name' => 'Barier Gate - rear side (complete with loop)',
            ],
            [
                'id_request_cate' => '2',
                'name' => 'Barrier Gate',
            ],
            [
                'id_request_cate' => '2',
                'name' => 'Handheld Reader',
            ],
            [
                'id_request_cate' => '2',
                'name' => 'Manless 200',
            ],
            [
                'id_request_cate' => '2',
                'name' => 'Manless Standard',
            ],
            [
                'id_request_cate' => '3',
                'name' => 'Accsess Point Dermaga Penumpang',
            ],
            [
                'id_request_cate' => '3',
                'name' => 'Gate Turnstile',
            ],
            [
                'id_request_cate' => '3',
                'name' => 'Gate Turnstile Dermaga',
            ],
            [
                'id_request_cate' => '3',
                'name' => 'Handheld Reader',
            ],
            [
                'id_request_cate' => '4',
                'name' => 'Change Request (CR)',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Boomgate Loket',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Cash Drawer',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'CCTV B -  Jenis Golongan Kendaraan',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'CCTV C -  Panjang',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'CCTV Capture front end (ANPR)',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Display Tarif & Golongan c/w support (Incl. Casing)',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Gantry Kendaraan (bisa masuk Kendaraan Bus)',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Hub / Switch Loket (8 port)D-Link DGS-1100-05PD',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'I/O Controller',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Jaringan (Network)',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Mini Printer Loket',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'PC Based POS (Tanpa customer display)',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Pc LCS',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Reader e-KTP Desktop',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Reader eMoney',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Reader Group Casing',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'Reader QRCode',
            ],
            [
                'id_request_cate' => '5',
                'name' => 'UPS Loket',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Barier Gate - rear side (complete with loop )',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Boomgate loket',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Cash Drawer',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'CCTV B -  Jenis Golongan Kendaraan',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'CCTV C -  Panjang',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'CCTV Capture front end (ANPR)',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Display Tarif & Golongan c/w support (Incl. Casing)',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Gantry Sensor',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Hub / Switch Loket (8 port)D-Link DGS-1100-08PD',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'I/O Controller',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Jaringan (Network)',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Jembatan Timbang',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Mini Printer Loket',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Mobile Reader e-KTP',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Optical Barrier',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'PC Based POS',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Pc LCS',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Reader e-KTP Desktop',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Reader eMoney',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Reader Group Casing',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Reader QRCode',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Sensor',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'Sensor Kelas Kendaraan',
            ],
            [
                'id_request_cate' => '6',
                'name' => 'UPS Loket 3Kva',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Barrier Gate',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Cash Drawer',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'CCTV Capture front end',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Hub / Switch Loket (5 port)D-Link DGS-1100-05PD',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'I/O Controller',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Mini Printer Loket',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'PC Based POS(menggunakan customer display)',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Reader e-KTP Desktop',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Reader eMoney',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Reader Group Casing',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'Reader QRCode',
            ],
            [
                'id_request_cate' => '7',
                'name' => 'UPS Loket',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Cash Drawer',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Jaringan (Network)',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Mikrofon Loket',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Mini Printer Loket',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'PC Based POS',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Reader e-KTP Desktop',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Reader eMoney',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Reader Group Casing',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Server Lokal',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Reader Passport',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'Reader QRCode',
            ],
            [
                'id_request_cate' => '8',
                'name' => 'UPS Loket',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Display Monitoring CCTV - LED',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Ferizy',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Hub / Switch (16 port)',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Jaringan ASTINET',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Jaringan lokal',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Jembatan Timbang',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'PTC',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Server Cloud',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Server Lokal',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Switch FO',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Barcode Scanner',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Casing',
            ],
            [
                'id_request_cate' => '9',
                'name' => 'Display TouchSreen 19" ',
            ],
            [
                'id_request_cate' => '10',
                'name' => 'E-KTP Reader',
            ],
            [
                'id_request_cate' => '10',
                'name' => 'Embedded PC',
            ],
            [
                'id_request_cate' => '10',
                'name' => 'E-Money Reader',
            ],
            [
                'id_request_cate' => '10',
                'name' => 'Jaringan (Network)',
            ],
            [
                'id_request_cate' => '10',
                'name' => 'Kiosk Printer',
            ],
            [
                'id_request_cate' => '10',
                'name' => 'UPS',
            ],
            [
                'id_request_cate' => '11',
                'name' => 'Bakauheni',
            ],
            [
                'id_request_cate' => '11',
                'name' => 'ketapang',
            ],
            [
                'id_request_cate' => '11',
                'name' => 'Merak',
            ],
            [
                'id_request_cate' => '12',
                'name' => 'DC01-TELKOM SIGMA',
            ],
            [
                'id_request_cate' => '12',
                'name' => 'DC02-INDOSAT',
            ],
            [
                'id_request_cate' => '12',
                'name' => 'DCH0-KANTOR PUSAT',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'Aplikasi Pembelian Token Prabayar',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'ASDP Superior',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'Change Request SAP',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'E-DRP',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'E-Ticketing System (ASDP Managed)',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'IMS',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'Informasi Jadwal Kapal & Tarif',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'Tenant',
            ],
            [
                'id_request_cate' => '13',
                'name' => 'Vessel Monitoring System (VSM)',
            ],
            [
                'id_request_cate' => '14',
                'name' => 'Business Work Container Edition (ESB)',
            ],
            [
                'id_request_cate' => '14',
                'name' => 'Enterprise Architecture Tools',
            ],
            [
                'id_request_cate' => '14',
                'name' => 'Power BI',
            ],
            [
                'id_request_cate' => '14',
                'name' => 'SAP',
            ],
            [
                'id_request_cate' => '14',
                'name' => 'Website ASDP',
            ],
            [
                'id_request_cate' => '14',
                'name' => 'Whistle Blower System',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Absensi',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Ambar',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'BBM',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Customer Relationship Management',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'DigiMOM',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Digital Management System',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'E-Bas',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Electronic Office',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Elsa',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'E-PPT',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'ERM (Electronic Risk Management)',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'ESS',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'FIDIAS (Financial Digital System)',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'HCIS',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Human Capital Information System',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'IBS',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Info ASDP',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'intranet.indonesiaferry.id',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Legalnet',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Monitoring KPI',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Portal ASDP',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Portal Legal Information',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Procurement, Inventory, and Assset Management',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Produksi Pendapatan Pelabuhan',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Semprotan (Sistem Monitoring Produksi dan Pendapatan)',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Ship Maintenance System',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'SIM TI',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Sistem Managmen Keselamatan',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'SMART Rekrutmen',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Superior',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Tara',
            ],
            [
                'id_request_cate' => '15',
                'name' => 'Web CCTV',
            ],
            [
                'id_request_cate' => '17',
                'name' => 'Instalasi Aplikasi Dekstop Korporat',
            ],
            [
                'id_request_cate' => '17',
                'name' => 'Instalasi Aplikasi Dekstop Non Korporat',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Active Directory',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Aplikasi',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Email',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Aplikasi',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Koneksi Internet / Wifi',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Koneksi LAN',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Koneksi VIdeo Conference',
            ],
            [
                'id_request_cate' => '18',
                'name' => 'Akun/Akses Koneksi Voip',
            ],
            [
                'id_request_cate' => '19',
                'name' => 'Pelaporan Help Desk',
            ],
            [
                'id_request_cate' => '19',
                'name' => 'Penanganan dan Resolusi',
            ],
            [
                'id_request_cate' => '19',
                'name' => 'SAP',
            ],
            [
                'id_request_cate' => '20',
                'name' => 'Komponen Perangkat Komputer',
            ],
            [
                'id_request_cate' => '20',
                'name' => 'Laptop',
            ],
            [
                'id_request_cate' => '20',
                'name' => 'Personal Computer',
            ],
            [
                'id_request_cate' => '20',
                'name' => 'Printer',
            ],
            [
                'id_request_cate' => '20',
                'name' => 'Scanner',
            ],
            [
                'id_request_cate' => '20',
                'name' => 'UPS PC dan Perangkat Server',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Adobe Master Collection',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Anti-Virus (Kaspersky)',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'AutoCAD',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Corel Draw',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'License Zoom Account',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'License Zoom Account',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Lisensi Software Lainnya',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Lumion',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Microsoft Office',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Microsoft Project',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Microsoft Visio',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Nitron PDF',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Operating System (Windows)',
            ],
            [
                'id_request_cate' => '21',
                'name' => 'Sketchup',
            ],
            [
                'id_request_cate' => '22',
                'name' => 'internet',
            ],
            [
                'id_request_cate' => '22',
                'name' => 'Layanan Jaringan DC Indosat',
            ],
            [
                'id_request_cate' => '23',
                'name' => 'Local Arean Network (LAN)',
            ],
            [
                'id_request_cate' => '23',
                'name' => 'Virtual Private Network (VPN)',
            ],
            [
                'id_request_cate' => '23',
                'name' => 'Wide Area Network',
            ],
            [
                'id_request_cate' => '23',
                'name' => 'Wifi Kantor Pusat',
            ],
            [
                'id_request_cate' => '24',
                'name' => 'E-Mailt',
            ],
            [
                'id_request_cate' => '24',
                'name' => 'File Sharing',
            ],
            [
                'id_request_cate' => '24',
                'name' => 'Teleconference',
            ],
            [
                'id_request_cate' => '24',
                'name' => 'Video Conference',
            ],
            [
                'id_request_cate' => '24',
                'name' => 'Voice Over Internet Protocol (Voip)',
            ],
            [
                'id_request_cate' => '25',
                'name' => 'Closed Circuit Television (CCTV)',
            ],
            [
                'id_request_cate' => '26',
                'name' => 'Modifikasi Aplikasi',
            ],
            [
                'id_request_cate' => '27',
                'name' => 'Pelatihan Teknologi Informasi',
            ],
            [
                'id_request_cate' => '28',
                'name' => 'Pembangunan Aplikasi',
            ],
            [
                'id_request_cate' => '28',
                'name' => 'Penyusunan Dokument Kebutuhan Bisnis',
            ],
            [
                'id_request_cate' => '29',
                'name' => 'Pendampingan Implementasi',
            ],
            [
                'id_request_cate' => '30',
                'name' => 'Penyediaan Data',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Barrier Gate',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'CCTV',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Komponen Perangkat Ticketing Lainnya',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Mesin EDC',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Mobile Device',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Other',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Personal Computer (PC)',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'QR Scan Barcode',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Scanner',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Sensor',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Stabilizer',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Printer Thermal',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Surge Protector',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Turnstile',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'UPS',
            ],
            [
                'id_request_cate' => '36',
                'name' => 'Wireless Access Point',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Wireless Access Point',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Barrier Gate',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'CCTV',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Finger Print Access',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Keyboard Kasir',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Looping Sensor',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Magnet Pintu Akses',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Mini PC',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Mouse Kasir',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Personal Computer Admin',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Printer Thermal',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'QR Scan Barcode',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Server Parking',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Speaker',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Switch Hub',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Taping RFID',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'UPS',
            ],
            [
                'id_request_cate' => '37',
                'name' => 'Vld Sensor',
            ],

        ]);
    }
}
