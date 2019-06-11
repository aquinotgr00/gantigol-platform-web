<?php

namespace Modules\Shipment\Seeders;

use Illuminate\Database\Seeder;

class SubdistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // import from RajaOngkir
        $subdistricts = array(
            array(
                "id" => 1,
                "name" => "Arongan Lambalek",
                "city_id" => 1,
            ),
            array(
                "id" => 2,
                "name" => "Bubon",
                "city_id" => 1,
            ),
            array(
                "id" => 3,
                "name" => "Johan Pahlawan",
                "city_id" => 1,
            ),
            array(
                "id" => 4,
                "name" => "Kaway XVI",
                "city_id" => 1,
            ),
            array(
                "id" => 5,
                "name" => "Meureubo",
                "city_id" => 1,
            ),
            array(
                "id" => 6,
                "name" => "Pante Ceureumen (Pantai Ceuremen)",
                "city_id" => 1,
            ),
            array(
                "id" => 7,
                "name" => "Panton Reu",
                "city_id" => 1,
            ),
            array(
                "id" => 8,
                "name" => "Samatiga",
                "city_id" => 1,
            ),
            array(
                "id" => 9,
                "name" => "Sungai Mas",
                "city_id" => 1,
            ),
            array(
                "id" => 10,
                "name" => "Woyla",
                "city_id" => 1,
            ),
            array(
                "id" => 11,
                "name" => "Woyla Barat",
                "city_id" => 1,
            ),
            array(
                "id" => 12,
                "name" => "Woyla Timur",
                "city_id" => 1,
            ),
            array(
                "id" => 13,
                "name" => "Babah Rot",
                "city_id" => 2,
            ),
            array(
                "id" => 14,
                "name" => "Blang Pidie",
                "city_id" => 2,
            ),
            array(
                "id" => 15,
                "name" => "Jeumpa",
                "city_id" => 2,
            ),
            array(
                "id" => 16,
                "name" => "Kuala Batee",
                "city_id" => 2,
            ),
            array(
                "id" => 17,
                "name" => "Lembah Sabil",
                "city_id" => 2,
            ),
            array(
                "id" => 18,
                "name" => "Manggeng",
                "city_id" => 2,
            ),
            array(
                "id" => 19,
                "name" => "Setia",
                "city_id" => 2,
            ),
            array(
                "id" => 20,
                "name" => "Susoh",
                "city_id" => 2,
            ),
            array(
                "id" => 21,
                "name" => "Tangan-Tangan",
                "city_id" => 2,
            ),
            array(
                "id" => 22,
                "name" => "Baitussalam",
                "city_id" => 3,
            ),
            array(
                "id" => 23,
                "name" => "Blank Bintang",
                "city_id" => 3,
            ),
            array(
                "id" => 24,
                "name" => "Darul Imarah",
                "city_id" => 3,
            ),
            array(
                "id" => 25,
                "name" => "Darul Kamal",
                "city_id" => 3,
            ),
            array(
                "id" => 26,
                "name" => "Darussalam",
                "city_id" => 3,
            ),
            array(
                "id" => 27,
                "name" => "Indrapuri",
                "city_id" => 3,
            ),
            array(
                "id" => 28,
                "name" => "Ingin Jaya",
                "city_id" => 3,
            ),
            array(
                "id" => 29,
                "name" => "Kota Cot Glie (Kuta Cot Glie)",
                "city_id" => 3,
            ),
            array(
                "id" => 30,
                "name" => "Kota Jantho",
                "city_id" => 3,
            ),
            array(
                "id" => 31,
                "name" => "Kota Malaka (Kuta Malaka)",
                "city_id" => 3,
            ),
            array(
                "id" => 32,
                "name" => "Krueng Barona Jaya",
                "city_id" => 3,
            ),
            array(
                "id" => 33,
                "name" => "Kuta Baro",
                "city_id" => 3,
            ),
            array(
                "id" => 34,
                "name" => "Lembah Seulawah",
                "city_id" => 3,
            ),
            array(
                "id" => 35,
                "name" => "Leupung",
                "city_id" => 3,
            ),
            array(
                "id" => 36,
                "name" => "Lhoknga (Lho'nga)",
                "city_id" => 3,
            ),
            array(
                "id" => 37,
                "name" => "Lhoong",
                "city_id" => 3,
            ),
            array(
                "id" => 38,
                "name" => "Mantasiek (Montasik)",
                "city_id" => 3,
            ),
            array(
                "id" => 39,
                "name" => "Mesjid Raya",
                "city_id" => 3,
            ),
            array(
                "id" => 40,
                "name" => "Peukan Bada",
                "city_id" => 3,
            ),
            array(
                "id" => 41,
                "name" => "Pulo Aceh",
                "city_id" => 3,
            ),
            array(
                "id" => 42,
                "name" => "Seulimeum",
                "city_id" => 3,
            ),
            array(
                "id" => 43,
                "name" => "Simpang Tiga",
                "city_id" => 3,
            ),
            array(
                "id" => 44,
                "name" => "Suka Makmur",
                "city_id" => 3,
            ),
            array(
                "id" => 45,
                "name" => "Darul Hikmah",
                "city_id" => 4,
            ),
            array(
                "id" => 46,
                "name" => "Indra Jaya",
                "city_id" => 4,
            ),
            array(
                "id" => 47,
                "name" => "Jaya",
                "city_id" => 4,
            ),
            array(
                "id" => 48,
                "name" => "Keude Panga",
                "city_id" => 4,
            ),
            array(
                "id" => 49,
                "name" => "Krueng Sabee",
                "city_id" => 4,
            ),
            array(
                "id" => 50,
                "name" => "Pasie Raya",
                "city_id" => 4,
            ),
            array(
                "id" => 51,
                "name" => "Sampoiniet",
                "city_id" => 4,
            ),
            array(
                "id" => 52,
                "name" => "Setia Bakti",
                "city_id" => 4,
            ),
            array(
                "id" => 53,
                "name" => "Teunom",
                "city_id" => 4,
            ),
            array(
                "id" => 54,
                "name" => "Bakongan",
                "city_id" => 5,
            ),
            array(
                "id" => 55,
                "name" => "Bakongan Timur",
                "city_id" => 5,
            ),
            array(
                "id" => 56,
                "name" => "Kluet Selatan",
                "city_id" => 5,
            ),
            array(
                "id" => 57,
                "name" => "Kluet Tengah",
                "city_id" => 5,
            ),
            array(
                "id" => 58,
                "name" => "Kluet Timur",
                "city_id" => 5,
            ),
            array(
                "id" => 59,
                "name" => "Kluet Utara",
                "city_id" => 5,
            ),
            array(
                "id" => 60,
                "name" => "Kota Bahagia",
                "city_id" => 5,
            ),
            array(
                "id" => 61,
                "name" => "Labuhan Haji",
                "city_id" => 5,
            ),
            array(
                "id" => 62,
                "name" => "Labuhan Haji Barat",
                "city_id" => 5,
            ),
            array(
                "id" => 63,
                "name" => "Labuhan Haji Timur",
                "city_id" => 5,
            ),
            array(
                "id" => 64,
                "name" => "Meukek",
                "city_id" => 5,
            ),
            array(
                "id" => 65,
                "name" => "Pasie Raja",
                "city_id" => 5,
            ),
            array(
                "id" => 66,
                "name" => "Sama Dua",
                "city_id" => 5,
            ),
            array(
                "id" => 67,
                "name" => "Sawang",
                "city_id" => 5,
            ),
            array(
                "id" => 68,
                "name" => "Tapak Tuan",
                "city_id" => 5,
            ),
            array(
                "id" => 69,
                "name" => "Trumon",
                "city_id" => 5,
            ),
            array(
                "id" => 70,
                "name" => "Trumon Tengah",
                "city_id" => 5,
            ),
            array(
                "id" => 71,
                "name" => "Trumon Timur",
                "city_id" => 5,
            ),
            array(
                "id" => 72,
                "name" => "Danau Paris",
                "city_id" => 6,
            ),
            array(
                "id" => 73,
                "name" => "Gunung Meriah (Mariah)",
                "city_id" => 6,
            ),
            array(
                "id" => 74,
                "name" => "Kota Baharu",
                "city_id" => 6,
            ),
            array(
                "id" => 75,
                "name" => "Kuala Baru",
                "city_id" => 6,
            ),
            array(
                "id" => 76,
                "name" => "Pulau Banyak",
                "city_id" => 6,
            ),
            array(
                "id" => 77,
                "name" => "Pulau Banyak Barat",
                "city_id" => 6,
            ),
            array(
                "id" => 78,
                "name" => "Simpang Kanan",
                "city_id" => 6,
            ),
            array(
                "id" => 79,
                "name" => "Singkil",
                "city_id" => 6,
            ),
            array(
                "id" => 80,
                "name" => "Singkil Utara",
                "city_id" => 6,
            ),
            array(
                "id" => 81,
                "name" => "Singkohor",
                "city_id" => 6,
            ),
            array(
                "id" => 82,
                "name" => "Suro Makmur",
                "city_id" => 6,
            ),
            array(
                "id" => 83,
                "name" => "Banda Mulia",
                "city_id" => 7,
            ),
            array(
                "id" => 84,
                "name" => "Bandar Pusaka",
                "city_id" => 7,
            ),
            array(
                "id" => 85,
                "name" => "Bendahara",
                "city_id" => 7,
            ),
            array(
                "id" => 86,
                "name" => "Karang Baru",
                "city_id" => 7,
            ),
            array(
                "id" => 87,
                "name" => "Kejuruan Muda",
                "city_id" => 7,
            ),
            array(
                "id" => 88,
                "name" => "Kota Kuala Simpang",
                "city_id" => 7,
            ),
            array(
                "id" => 89,
                "name" => "Manyak Payed",
                "city_id" => 7,
            ),
            array(
                "id" => 90,
                "name" => "Rantau",
                "city_id" => 7,
            ),
            array(
                "id" => 91,
                "name" => "Sekerak",
                "city_id" => 7,
            ),
            array(
                "id" => 92,
                "name" => "Seruway",
                "city_id" => 7,
            ),
            array(
                "id" => 93,
                "name" => "Tamiang Hulu",
                "city_id" => 7,
            ),
            array(
                "id" => 94,
                "name" => "Tenggulun",
                "city_id" => 7,
            ),
            array(
                "id" => 95,
                "name" => "Atu Lintang",
                "city_id" => 8,
            ),
            array(
                "id" => 96,
                "name" => "Bebesen",
                "city_id" => 8,
            ),
            array(
                "id" => 97,
                "name" => "Bies",
                "city_id" => 8,
            ),
            array(
                "id" => 98,
                "name" => "Bintang",
                "city_id" => 8,
            ),
            array(
                "id" => 99,
                "name" => "Celala",
                "city_id" => 8,
            ),
            array(
                "id" => 100,
                "name" => "Jagong Jeget",
                "city_id" => 8,
            ),
            array(
                "id" => 101,
                "name" => "Kebayakan",
                "city_id" => 8,
            ),
            array(
                "id" => 102,
                "name" => "Ketol",
                "city_id" => 8,
            ),
            array(
                "id" => 103,
                "name" => "Kute Panang",
                "city_id" => 8,
            ),
            array(
                "id" => 104,
                "name" => "Linge",
                "city_id" => 8,
            ),
            array(
                "id" => 105,
                "name" => "Lut Tawar",
                "city_id" => 8,
            ),
            array(
                "id" => 106,
                "name" => "Pegasing",
                "city_id" => 8,
            ),
            array(
                "id" => 107,
                "name" => "Rusip Antara",
                "city_id" => 8,
            ),
            array(
                "id" => 108,
                "name" => "Silih Nara",
                "city_id" => 8,
            ),
            array(
                "id" => 109,
                "name" => "Babul Makmur",
                "city_id" => 9,
            ),
            array(
                "id" => 110,
                "name" => "Babul Rahmah",
                "city_id" => 9,
            ),
            array(
                "id" => 111,
                "name" => "Babussalam",
                "city_id" => 9,
            ),
            array(
                "id" => 112,
                "name" => "Badar",
                "city_id" => 9,
            ),
            array(
                "id" => 113,
                "name" => "Bambel",
                "city_id" => 9,
            ),
            array(
                "id" => 114,
                "name" => "Bukit Tusam",
                "city_id" => 9,
            ),
            array(
                "id" => 115,
                "name" => "Darul Hasanah",
                "city_id" => 9,
            ),
            array(
                "id" => 116,
                "name" => "Deleng Pokhisen",
                "city_id" => 9,
            ),
            array(
                "id" => 117,
                "name" => "Ketambe",
                "city_id" => 9,
            ),
            array(
                "id" => 118,
                "name" => "Lawe Alas",
                "city_id" => 9,
            ),
            array(
                "id" => 119,
                "name" => "Lawe Bulan",
                "city_id" => 9,
            ),
            array(
                "id" => 120,
                "name" => "Lawe Sigala-Gala",
                "city_id" => 9,
            ),
            array(
                "id" => 121,
                "name" => "Lawe Sumur",
                "city_id" => 9,
            ),
            array(
                "id" => 122,
                "name" => "Leuser",
                "city_id" => 9,
            ),
            array(
                "id" => 123,
                "name" => "Semadam",
                "city_id" => 9,
            ),
            array(
                "id" => 124,
                "name" => "Tanah Alas",
                "city_id" => 9,
            ),
            array(
                "id" => 125,
                "name" => "Banda Alam",
                "city_id" => 10,
            ),
            array(
                "id" => 126,
                "name" => "Birem Bayeun",
                "city_id" => 10,
            ),
            array(
                "id" => 127,
                "name" => "Darul Aman",
                "city_id" => 10,
            ),
            array(
                "id" => 128,
                "name" => "Darul Falah",
                "city_id" => 10,
            ),
            array(
                "id" => 129,
                "name" => "Darul Iksan (Ihsan)",
                "city_id" => 10,
            ),
            array(
                "id" => 130,
                "name" => "Idi Rayeuk",
                "city_id" => 10,
            ),
            array(
                "id" => 131,
                "name" => "Idi Timur",
                "city_id" => 10,
            ),
            array(
                "id" => 132,
                "name" => "Idi Tunong",
                "city_id" => 10,
            ),
            array(
                "id" => 133,
                "name" => "Indra Makmur",
                "city_id" => 10,
            ),
            array(
                "id" => 134,
                "name" => "Julok",
                "city_id" => 10,
            ),
            array(
                "id" => 135,
                "name" => "Madat",
                "city_id" => 10,
            ),
            array(
                "id" => 136,
                "name" => "Nurussalam",
                "city_id" => 10,
            ),
            array(
                "id" => 137,
                "name" => "Pante Bidari (Beudari)",
                "city_id" => 10,
            ),
            array(
                "id" => 138,
                "name" => "Peudawa",
                "city_id" => 10,
            ),
            array(
                "id" => 139,
                "name" => "Peunaron",
                "city_id" => 10,
            ),
            array(
                "id" => 140,
                "name" => "Peureulak",
                "city_id" => 10,
            ),
            array(
                "id" => 141,
                "name" => "Peureulak Barat",
                "city_id" => 10,
            ),
            array(
                "id" => 142,
                "name" => "Peureulak Timur",
                "city_id" => 10,
            ),
            array(
                "id" => 143,
                "name" => "Rantau Selamat",
                "city_id" => 10,
            ),
            array(
                "id" => 144,
                "name" => "Ranto Peureulak",
                "city_id" => 10,
            ),
            array(
                "id" => 145,
                "name" => "Serba Jadi",
                "city_id" => 10,
            ),
            array(
                "id" => 146,
                "name" => "Simpang Jernih",
                "city_id" => 10,
            ),
            array(
                "id" => 147,
                "name" => "Simpang Ulim",
                "city_id" => 10,
            ),
            array(
                "id" => 148,
                "name" => "Sungai Raya",
                "city_id" => 10,
            ),
            array(
                "id" => 149,
                "name" => "Baktiya",
                "city_id" => 11,
            ),
            array(
                "id" => 150,
                "name" => "Baktiya Barat",
                "city_id" => 11,
            ),
            array(
                "id" => 151,
                "name" => "Banda Baro",
                "city_id" => 11,
            ),
            array(
                "id" => 152,
                "name" => "Cot Girek",
                "city_id" => 11,
            ),
            array(
                "id" => 153,
                "name" => "Dewantara",
                "city_id" => 11,
            ),
            array(
                "id" => 154,
                "name" => "Geuredong Pase",
                "city_id" => 11,
            ),
            array(
                "id" => 155,
                "name" => "Kuta Makmur",
                "city_id" => 11,
            ),
            array(
                "id" => 156,
                "name" => "Langkahan",
                "city_id" => 11,
            ),
            array(
                "id" => 157,
                "name" => "Lapang",
                "city_id" => 11,
            ),
            array(
                "id" => 158,
                "name" => "Lhoksukon",
                "city_id" => 11,
            ),
            array(
                "id" => 159,
                "name" => "Matangkuli",
                "city_id" => 11,
            ),
            array(
                "id" => 160,
                "name" => "Meurah Mulia",
                "city_id" => 11,
            ),
            array(
                "id" => 161,
                "name" => "Muara Batu",
                "city_id" => 11,
            ),
            array(
                "id" => 162,
                "name" => "Nibong",
                "city_id" => 11,
            ),
            array(
                "id" => 163,
                "name" => "Nisam",
                "city_id" => 11,
            ),
            array(
                "id" => 164,
                "name" => "Nisam Antara",
                "city_id" => 11,
            ),
            array(
                "id" => 165,
                "name" => "Paya Bakong",
                "city_id" => 11,
            ),
            array(
                "id" => 166,
                "name" => "Pirak Timur",
                "city_id" => 11,
            ),
            array(
                "id" => 167,
                "name" => "Samudera",
                "city_id" => 11,
            ),
            array(
                "id" => 168,
                "name" => "Sawang",
                "city_id" => 11,
            ),
            array(
                "id" => 169,
                "name" => "Seunuddon (Seunudon)",
                "city_id" => 11,
            ),
            array(
                "id" => 170,
                "name" => "Simpang Kramat (Keramat)",
                "city_id" => 11,
            ),
            array(
                "id" => 171,
                "name" => "Syamtalira Aron",
                "city_id" => 11,
            ),
            array(
                "id" => 172,
                "name" => "Syamtalira Bayu",
                "city_id" => 11,
            ),
            array(
                "id" => 173,
                "name" => "Tanah Jambo Aye",
                "city_id" => 11,
            ),
            array(
                "id" => 174,
                "name" => "Tanah Luas",
                "city_id" => 11,
            ),
            array(
                "id" => 175,
                "name" => "Tanah Pasir",
                "city_id" => 11,
            ),
            array(
                "id" => 176,
                "name" => "Ampek Nagari (IV Nagari )",
                "city_id" => 12,
            ),
            array(
                "id" => 177,
                "name" => "Banuhampu",
                "city_id" => 12,
            ),
            array(
                "id" => 178,
                "name" => "Baso",
                "city_id" => 12,
            ),
            array(
                "id" => 179,
                "name" => "Candung",
                "city_id" => 12,
            ),
            array(
                "id" => 180,
                "name" => "IV Angkat Candung (Ampek Angkek)",
                "city_id" => 12,
            ),
            array(
                "id" => 181,
                "name" => "IV Koto (Ampek Koto)",
                "city_id" => 12,
            ),
            array(
                "id" => 182,
                "name" => "Kamang Magek",
                "city_id" => 12,
            ),
            array(
                "id" => 183,
                "name" => "Lubuk Basung",
                "city_id" => 12,
            ),
            array(
                "id" => 184,
                "name" => "Malakak",
                "city_id" => 12,
            ),
            array(
                "id" => 185,
                "name" => "Matur",
                "city_id" => 12,
            ),
            array(
                "id" => 186,
                "name" => "Palembayan",
                "city_id" => 12,
            ),
            array(
                "id" => 187,
                "name" => "Palupuh",
                "city_id" => 12,
            ),
            array(
                "id" => 188,
                "name" => "Sungai Pua (Puar)",
                "city_id" => 12,
            ),
            array(
                "id" => 189,
                "name" => "Tanjung Mutiara",
                "city_id" => 12,
            ),
            array(
                "id" => 190,
                "name" => "Tanjung Raya",
                "city_id" => 12,
            ),
            array(
                "id" => 191,
                "name" => "Tilatang Kamang",
                "city_id" => 12,
            ),
            array(
                "id" => 192,
                "name" => "Alor Barat Daya",
                "city_id" => 13,
            ),
            array(
                "id" => 193,
                "name" => "Alor Barat Laut",
                "city_id" => 13,
            ),
            array(
                "id" => 194,
                "name" => "Alor Selatan",
                "city_id" => 13,
            ),
            array(
                "id" => 195,
                "name" => "Alor Tengah Utara",
                "city_id" => 13,
            ),
            array(
                "id" => 196,
                "name" => "Alor Timur",
                "city_id" => 13,
            ),
            array(
                "id" => 197,
                "name" => "Alor Timur Laut",
                "city_id" => 13,
            ),
            array(
                "id" => 198,
                "name" => "Kabola",
                "city_id" => 13,
            ),
            array(
                "id" => 199,
                "name" => "Lembur",
                "city_id" => 13,
            ),
            array(
                "id" => 200,
                "name" => "Mataru",
                "city_id" => 13,
            ),
            array(
                "id" => 201,
                "name" => "Pantar",
                "city_id" => 13,
            ),
            array(
                "id" => 202,
                "name" => "Pantar Barat",
                "city_id" => 13,
            ),
            array(
                "id" => 203,
                "name" => "Pantar Barat Laut",
                "city_id" => 13,
            ),
            array(
                "id" => 204,
                "name" => "Pantar Tengah",
                "city_id" => 13,
            ),
            array(
                "id" => 205,
                "name" => "Pantar Timur",
                "city_id" => 13,
            ),
            array(
                "id" => 206,
                "name" => "Pulau Pura",
                "city_id" => 13,
            ),
            array(
                "id" => 207,
                "name" => "Pureman",
                "city_id" => 13,
            ),
            array(
                "id" => 208,
                "name" => "Teluk Mutiara",
                "city_id" => 13,
            ),
            array(
                "id" => 209,
                "name" => "Baguala",
                "city_id" => 14,
            ),
            array(
                "id" => 210,
                "name" => "Leitimur Selatan",
                "city_id" => 14,
            ),
            array(
                "id" => 211,
                "name" => "Nusaniwe (Nusanive)",
                "city_id" => 14,
            ),
            array(
                "id" => 212,
                "name" => "Sirimau",
                "city_id" => 14,
            ),
            array(
                "id" => 213,
                "name" => "Teluk Ambon",
                "city_id" => 14,
            ),
            array(
                "id" => 214,
                "name" => "Aek Kuasan",
                "city_id" => 15,
            ),
            array(
                "id" => 215,
                "name" => "Aek Ledong",
                "city_id" => 15,
            ),
            array(
                "id" => 216,
                "name" => "Aek Songsongan",
                "city_id" => 15,
            ),
            array(
                "id" => 217,
                "name" => "Air Batu",
                "city_id" => 15,
            ),
            array(
                "id" => 218,
                "name" => "Air Joman",
                "city_id" => 15,
            ),
            array(
                "id" => 219,
                "name" => "Bandar Pasir Mandoge",
                "city_id" => 15,
            ),
            array(
                "id" => 220,
                "name" => "Bandar Pulau",
                "city_id" => 15,
            ),
            array(
                "id" => 221,
                "name" => "Buntu Pane",
                "city_id" => 15,
            ),
            array(
                "id" => 222,
                "name" => "Kisaran Barat Kota",
                "city_id" => 15,
            ),
            array(
                "id" => 223,
                "name" => "Kisaran Timur Kota",
                "city_id" => 15,
            ),
            array(
                "id" => 224,
                "name" => "Meranti",
                "city_id" => 15,
            ),
            array(
                "id" => 225,
                "name" => "Pulau Rakyat",
                "city_id" => 15,
            ),
            array(
                "id" => 226,
                "name" => "Pulo Bandring",
                "city_id" => 15,
            ),
            array(
                "id" => 227,
                "name" => "Rahuning",
                "city_id" => 15,
            ),
            array(
                "id" => 228,
                "name" => "Rawang Panca Arga",
                "city_id" => 15,
            ),
            array(
                "id" => 229,
                "name" => "Sei Dadap",
                "city_id" => 15,
            ),
            array(
                "id" => 230,
                "name" => "Sei Kepayang",
                "city_id" => 15,
            ),
            array(
                "id" => 231,
                "name" => "Sei Kepayang Barat",
                "city_id" => 15,
            ),
            array(
                "id" => 232,
                "name" => "Sei Kepayang Timur",
                "city_id" => 15,
            ),
            array(
                "id" => 233,
                "name" => "Setia Janji",
                "city_id" => 15,
            ),
            array(
                "id" => 234,
                "name" => "Silau Laut",
                "city_id" => 15,
            ),
            array(
                "id" => 235,
                "name" => "Simpang Empat",
                "city_id" => 15,
            ),
            array(
                "id" => 236,
                "name" => "Tanjung Balai",
                "city_id" => 15,
            ),
            array(
                "id" => 237,
                "name" => "Teluk Dalam",
                "city_id" => 15,
            ),
            array(
                "id" => 238,
                "name" => "Tinggi Raja",
                "city_id" => 15,
            ),
            array(
                "id" => 239,
                "name" => "Agats",
                "city_id" => 16,
            ),
            array(
                "id" => 240,
                "name" => "Akat",
                "city_id" => 16,
            ),
            array(
                "id" => 241,
                "name" => "Atsy / Atsj",
                "city_id" => 16,
            ),
            array(
                "id" => 242,
                "name" => "Ayip",
                "city_id" => 16,
            ),
            array(
                "id" => 243,
                "name" => "Betcbamu",
                "city_id" => 16,
            ),
            array(
                "id" => 244,
                "name" => "Der Koumur",
                "city_id" => 16,
            ),
            array(
                "id" => 245,
                "name" => "Fayit",
                "city_id" => 16,
            ),
            array(
                "id" => 246,
                "name" => "Jetsy",
                "city_id" => 16,
            ),
            array(
                "id" => 247,
                "name" => "Joerat",
                "city_id" => 16,
            ),
            array(
                "id" => 248,
                "name" => "Kolf Braza",
                "city_id" => 16,
            ),
            array(
                "id" => 249,
                "name" => "Kopay",
                "city_id" => 16,
            ),
            array(
                "id" => 250,
                "name" => "Pantai Kasuari",
                "city_id" => 16,
            ),
            array(
                "id" => 251,
                "name" => "Pulau Tiga",
                "city_id" => 16,
            ),
            array(
                "id" => 252,
                "name" => "Safan",
                "city_id" => 16,
            ),
            array(
                "id" => 253,
                "name" => "Sawa Erma",
                "city_id" => 16,
            ),
            array(
                "id" => 254,
                "name" => "Sirets",
                "city_id" => 16,
            ),
            array(
                "id" => 255,
                "name" => "Suator",
                "city_id" => 16,
            ),
            array(
                "id" => 256,
                "name" => "Suru-suru",
                "city_id" => 16,
            ),
            array(
                "id" => 257,
                "name" => "Unir Sirau",
                "city_id" => 16,
            ),
            array(
                "id" => 258,
                "name" => "Abiansemal",
                "city_id" => 17,
            ),
            array(
                "id" => 259,
                "name" => "Kuta",
                "city_id" => 17,
            ),
            array(
                "id" => 260,
                "name" => "Kuta Selatan",
                "city_id" => 17,
            ),
            array(
                "id" => 261,
                "name" => "Kuta Utara",
                "city_id" => 17,
            ),
            array(
                "id" => 262,
                "name" => "Mengwi",
                "city_id" => 17,
            ),
            array(
                "id" => 263,
                "name" => "Petang",
                "city_id" => 17,
            ),
            array(
                "id" => 264,
                "name" => "Awayan",
                "city_id" => 18,
            ),
            array(
                "id" => 265,
                "name" => "Batu Mandi",
                "city_id" => 18,
            ),
            array(
                "id" => 266,
                "name" => "Halong",
                "city_id" => 18,
            ),
            array(
                "id" => 267,
                "name" => "Juai",
                "city_id" => 18,
            ),
            array(
                "id" => 268,
                "name" => "Lampihong",
                "city_id" => 18,
            ),
            array(
                "id" => 269,
                "name" => "Paringin",
                "city_id" => 18,
            ),
            array(
                "id" => 270,
                "name" => "Paringin Selatan",
                "city_id" => 18,
            ),
            array(
                "id" => 271,
                "name" => "Tebing Tinggi",
                "city_id" => 18,
            ),
            array(
                "id" => 272,
                "name" => "Balikpapan Barat",
                "city_id" => 19,
            ),
            array(
                "id" => 273,
                "name" => "Balikpapan Kota",
                "city_id" => 19,
            ),
            array(
                "id" => 274,
                "name" => "Balikpapan Selatan",
                "city_id" => 19,
            ),
            array(
                "id" => 275,
                "name" => "Balikpapan Tengah",
                "city_id" => 19,
            ),
            array(
                "id" => 276,
                "name" => "Balikpapan Timur",
                "city_id" => 19,
            ),
            array(
                "id" => 277,
                "name" => "Balikpapan Utara",
                "city_id" => 19,
            ),
            array(
                "id" => 278,
                "name" => "Baiturrahman",
                "city_id" => 20,
            ),
            array(
                "id" => 279,
                "name" => "Banda Raya",
                "city_id" => 20,
            ),
            array(
                "id" => 280,
                "name" => "Jaya Baru",
                "city_id" => 20,
            ),
            array(
                "id" => 281,
                "name" => "Kuta Alam",
                "city_id" => 20,
            ),
            array(
                "id" => 282,
                "name" => "Kuta Raja",
                "city_id" => 20,
            ),
            array(
                "id" => 283,
                "name" => "Lueng Bata",
                "city_id" => 20,
            ),
            array(
                "id" => 284,
                "name" => "Meuraxa",
                "city_id" => 20,
            ),
            array(
                "id" => 285,
                "name" => "Syiah Kuala",
                "city_id" => 20,
            ),
            array(
                "id" => 286,
                "name" => "Ulee Kareng",
                "city_id" => 20,
            ),
            array(
                "id" => 287,
                "name" => "Bumi Waras",
                "city_id" => 21,
            ),
            array(
                "id" => 288,
                "name" => "Enggal",
                "city_id" => 21,
            ),
            array(
                "id" => 289,
                "name" => "Kedamaian",
                "city_id" => 21,
            ),
            array(
                "id" => 290,
                "name" => "Kedaton",
                "city_id" => 21,
            ),
            array(
                "id" => 291,
                "name" => "Kemiling",
                "city_id" => 21,
            ),
            array(
                "id" => 292,
                "name" => "Labuhan Ratu",
                "city_id" => 21,
            ),
            array(
                "id" => 293,
                "name" => "Langkapura",
                "city_id" => 21,
            ),
            array(
                "id" => 294,
                "name" => "Panjang",
                "city_id" => 21,
            ),
            array(
                "id" => 295,
                "name" => "Rajabasa",
                "city_id" => 21,
            ),
            array(
                "id" => 296,
                "name" => "Sukabumi",
                "city_id" => 21,
            ),
            array(
                "id" => 297,
                "name" => "Sukarame",
                "city_id" => 21,
            ),
            array(
                "id" => 298,
                "name" => "Tanjung Karang Barat",
                "city_id" => 21,
            ),
            array(
                "id" => 299,
                "name" => "Tanjung Karang Pusat",
                "city_id" => 21,
            ),
            array(
                "id" => 300,
                "name" => "Tanjung Karang Timur",
                "city_id" => 21,
            ),
            array(
                "id" => 301,
                "name" => "Tanjung Senang",
                "city_id" => 21,
            ),
            array(
                "id" => 302,
                "name" => "Telukbetung Barat",
                "city_id" => 21,
            ),
            array(
                "id" => 303,
                "name" => "Telukbetung Selatan",
                "city_id" => 21,
            ),
            array(
                "id" => 304,
                "name" => "Telukbetung Timur",
                "city_id" => 21,
            ),
            array(
                "id" => 305,
                "name" => "Telukbetung Utara",
                "city_id" => 21,
            ),
            array(
                "id" => 306,
                "name" => "Way Halim",
                "city_id" => 21,
            ),
            array(
                "id" => 307,
                "name" => "Arjasari",
                "city_id" => 22,
            ),
            array(
                "id" => 308,
                "name" => "Baleendah",
                "city_id" => 22,
            ),
            array(
                "id" => 309,
                "name" => "Banjaran",
                "city_id" => 22,
            ),
            array(
                "id" => 310,
                "name" => "Bojongsoang",
                "city_id" => 22,
            ),
            array(
                "id" => 311,
                "name" => "Cangkuang",
                "city_id" => 22,
            ),
            array(
                "id" => 312,
                "name" => "Cicalengka",
                "city_id" => 22,
            ),
            array(
                "id" => 313,
                "name" => "Cikancung",
                "city_id" => 22,
            ),
            array(
                "id" => 314,
                "name" => "Cilengkrang",
                "city_id" => 22,
            ),
            array(
                "id" => 315,
                "name" => "Cileunyi",
                "city_id" => 22,
            ),
            array(
                "id" => 316,
                "name" => "Cimaung",
                "city_id" => 22,
            ),
            array(
                "id" => 317,
                "name" => "Cimeunyan",
                "city_id" => 22,
            ),
            array(
                "id" => 318,
                "name" => "Ciparay",
                "city_id" => 22,
            ),
            array(
                "id" => 319,
                "name" => "Ciwidey",
                "city_id" => 22,
            ),
            array(
                "id" => 320,
                "name" => "Dayeuhkolot",
                "city_id" => 22,
            ),
            array(
                "id" => 321,
                "name" => "Ibun",
                "city_id" => 22,
            ),
            array(
                "id" => 322,
                "name" => "Katapang",
                "city_id" => 22,
            ),
            array(
                "id" => 323,
                "name" => "Kertasari",
                "city_id" => 22,
            ),
            array(
                "id" => 324,
                "name" => "Kutawaringin",
                "city_id" => 22,
            ),
            array(
                "id" => 325,
                "name" => "Majalaya",
                "city_id" => 22,
            ),
            array(
                "id" => 326,
                "name" => "Margaasih",
                "city_id" => 22,
            ),
            array(
                "id" => 327,
                "name" => "Margahayu",
                "city_id" => 22,
            ),
            array(
                "id" => 328,
                "name" => "Nagreg",
                "city_id" => 22,
            ),
            array(
                "id" => 329,
                "name" => "Pacet",
                "city_id" => 22,
            ),
            array(
                "id" => 330,
                "name" => "Pameungpeuk",
                "city_id" => 22,
            ),
            array(
                "id" => 331,
                "name" => "Pangalengan",
                "city_id" => 22,
            ),
            array(
                "id" => 332,
                "name" => "Paseh",
                "city_id" => 22,
            ),
            array(
                "id" => 333,
                "name" => "Pasirjambu",
                "city_id" => 22,
            ),
            array(
                "id" => 334,
                "name" => "Ranca Bali",
                "city_id" => 22,
            ),
            array(
                "id" => 335,
                "name" => "Rancaekek",
                "city_id" => 22,
            ),
            array(
                "id" => 336,
                "name" => "Solokan Jeruk",
                "city_id" => 22,
            ),
            array(
                "id" => 337,
                "name" => "Soreang",
                "city_id" => 22,
            ),
            array(
                "id" => 338,
                "name" => "Andir",
                "city_id" => 23,
            ),
            array(
                "id" => 339,
                "name" => "Antapani (Cicadas)",
                "city_id" => 23,
            ),
            array(
                "id" => 340,
                "name" => "Arcamanik",
                "city_id" => 23,
            ),
            array(
                "id" => 341,
                "name" => "Astana Anyar",
                "city_id" => 23,
            ),
            array(
                "id" => 342,
                "name" => "Babakan Ciparay",
                "city_id" => 23,
            ),
            array(
                "id" => 343,
                "name" => "Bandung Kidul",
                "city_id" => 23,
            ),
            array(
                "id" => 344,
                "name" => "Bandung Kulon",
                "city_id" => 23,
            ),
            array(
                "id" => 345,
                "name" => "Bandung Wetan",
                "city_id" => 23,
            ),
            array(
                "id" => 346,
                "name" => "Batununggal",
                "city_id" => 23,
            ),
            array(
                "id" => 347,
                "name" => "Bojongloa Kaler",
                "city_id" => 23,
            ),
            array(
                "id" => 348,
                "name" => "Bojongloa Kidul",
                "city_id" => 23,
            ),
            array(
                "id" => 349,
                "name" => "Buahbatu (Margacinta)",
                "city_id" => 23,
            ),
            array(
                "id" => 350,
                "name" => "Cibeunying Kaler",
                "city_id" => 23,
            ),
            array(
                "id" => 351,
                "name" => "Cibeunying Kidul",
                "city_id" => 23,
            ),
            array(
                "id" => 352,
                "name" => "Cibiru",
                "city_id" => 23,
            ),
            array(
                "id" => 353,
                "name" => "Cicendo",
                "city_id" => 23,
            ),
            array(
                "id" => 354,
                "name" => "Cidadap",
                "city_id" => 23,
            ),
            array(
                "id" => 355,
                "name" => "Cinambo",
                "city_id" => 23,
            ),
            array(
                "id" => 356,
                "name" => "Coblong",
                "city_id" => 23,
            ),
            array(
                "id" => 357,
                "name" => "Gedebage",
                "city_id" => 23,
            ),
            array(
                "id" => 358,
                "name" => "Kiaracondong",
                "city_id" => 23,
            ),
            array(
                "id" => 359,
                "name" => "Lengkong",
                "city_id" => 23,
            ),
            array(
                "id" => 360,
                "name" => "Mandalajati",
                "city_id" => 23,
            ),
            array(
                "id" => 361,
                "name" => "Panyileukan",
                "city_id" => 23,
            ),
            array(
                "id" => 362,
                "name" => "Rancasari",
                "city_id" => 23,
            ),
            array(
                "id" => 363,
                "name" => "Regol",
                "city_id" => 23,
            ),
            array(
                "id" => 364,
                "name" => "Sukajadi",
                "city_id" => 23,
            ),
            array(
                "id" => 365,
                "name" => "Sukasari",
                "city_id" => 23,
            ),
            array(
                "id" => 366,
                "name" => "Sumur Bandung",
                "city_id" => 23,
            ),
            array(
                "id" => 367,
                "name" => "Ujung Berung",
                "city_id" => 23,
            ),
            array(
                "id" => 368,
                "name" => "Batujajar",
                "city_id" => 24,
            ),
            array(
                "id" => 369,
                "name" => "Cihampelas",
                "city_id" => 24,
            ),
            array(
                "id" => 370,
                "name" => "Cikalong Wetan",
                "city_id" => 24,
            ),
            array(
                "id" => 371,
                "name" => "Cililin",
                "city_id" => 24,
            ),
            array(
                "id" => 372,
                "name" => "Cipatat",
                "city_id" => 24,
            ),
            array(
                "id" => 373,
                "name" => "Cipeundeuy",
                "city_id" => 24,
            ),
            array(
                "id" => 374,
                "name" => "Cipongkor",
                "city_id" => 24,
            ),
            array(
                "id" => 375,
                "name" => "Cisarua",
                "city_id" => 24,
            ),
            array(
                "id" => 376,
                "name" => "Gununghalu",
                "city_id" => 24,
            ),
            array(
                "id" => 377,
                "name" => "Lembang",
                "city_id" => 24,
            ),
            array(
                "id" => 378,
                "name" => "Ngamprah",
                "city_id" => 24,
            ),
            array(
                "id" => 379,
                "name" => "Padalarang",
                "city_id" => 24,
            ),
            array(
                "id" => 380,
                "name" => "Parongpong",
                "city_id" => 24,
            ),
            array(
                "id" => 381,
                "name" => "Rongga",
                "city_id" => 24,
            ),
            array(
                "id" => 382,
                "name" => "Saguling",
                "city_id" => 24,
            ),
            array(
                "id" => 383,
                "name" => "Sindangkerta",
                "city_id" => 24,
            ),
            array(
                "id" => 384,
                "name" => "Balantak",
                "city_id" => 25,
            ),
            array(
                "id" => 385,
                "name" => "Balantak Selatan",
                "city_id" => 25,
            ),
            array(
                "id" => 386,
                "name" => "Balantak Utara",
                "city_id" => 25,
            ),
            array(
                "id" => 387,
                "name" => "Batui",
                "city_id" => 25,
            ),
            array(
                "id" => 388,
                "name" => "Batui Selatan",
                "city_id" => 25,
            ),
            array(
                "id" => 389,
                "name" => "Bualemo (Boalemo)",
                "city_id" => 25,
            ),
            array(
                "id" => 390,
                "name" => "Bunta",
                "city_id" => 25,
            ),
            array(
                "id" => 391,
                "name" => "Kintom",
                "city_id" => 25,
            ),
            array(
                "id" => 392,
                "name" => "Lamala",
                "city_id" => 25,
            ),
            array(
                "id" => 393,
                "name" => "Lobu",
                "city_id" => 25,
            ),
            array(
                "id" => 394,
                "name" => "Luwuk",
                "city_id" => 25,
            ),
            array(
                "id" => 395,
                "name" => "Luwuk Selatan",
                "city_id" => 25,
            ),
            array(
                "id" => 396,
                "name" => "Luwuk Timur",
                "city_id" => 25,
            ),
            array(
                "id" => 397,
                "name" => "Luwuk Utara",
                "city_id" => 25,
            ),
            array(
                "id" => 398,
                "name" => "Mantoh",
                "city_id" => 25,
            ),
            array(
                "id" => 399,
                "name" => "Masama",
                "city_id" => 25,
            ),
            array(
                "id" => 400,
                "name" => "Moilong",
                "city_id" => 25,
            ),
            array(
                "id" => 401,
                "name" => "Nambo",
                "city_id" => 25,
            ),
            array(
                "id" => 402,
                "name" => "Nuhon",
                "city_id" => 25,
            ),
            array(
                "id" => 403,
                "name" => "Pagimana",
                "city_id" => 25,
            ),
            array(
                "id" => 404,
                "name" => "Simpang Raya",
                "city_id" => 25,
            ),
            array(
                "id" => 405,
                "name" => "Toili",
                "city_id" => 25,
            ),
            array(
                "id" => 406,
                "name" => "Toili Barat",
                "city_id" => 25,
            ),
            array(
                "id" => 407,
                "name" => "Banggai",
                "city_id" => 26,
            ),
            array(
                "id" => 408,
                "name" => "Banggai Selatan",
                "city_id" => 26,
            ),
            array(
                "id" => 409,
                "name" => "Banggai Tengah",
                "city_id" => 26,
            ),
            array(
                "id" => 410,
                "name" => "Banggai Utara",
                "city_id" => 26,
            ),
            array(
                "id" => 411,
                "name" => "Bangkurung",
                "city_id" => 26,
            ),
            array(
                "id" => 412,
                "name" => "Bokan Kepulauan",
                "city_id" => 26,
            ),
            array(
                "id" => 413,
                "name" => "Buko",
                "city_id" => 26,
            ),
            array(
                "id" => 414,
                "name" => "Buko Selatan",
                "city_id" => 26,
            ),
            array(
                "id" => 415,
                "name" => "Bulagi",
                "city_id" => 26,
            ),
            array(
                "id" => 416,
                "name" => "Bulagi Selatan",
                "city_id" => 26,
            ),
            array(
                "id" => 417,
                "name" => "Bulagi Utara",
                "city_id" => 26,
            ),
            array(
                "id" => 418,
                "name" => "Labobo (Lobangkurung)",
                "city_id" => 26,
            ),
            array(
                "id" => 419,
                "name" => "Liang",
                "city_id" => 26,
            ),
            array(
                "id" => 420,
                "name" => "Peling Tengah",
                "city_id" => 26,
            ),
            array(
                "id" => 421,
                "name" => "Tinangkung",
                "city_id" => 26,
            ),
            array(
                "id" => 422,
                "name" => "Tinangkung Selatan",
                "city_id" => 26,
            ),
            array(
                "id" => 423,
                "name" => "Tinangkung Utara",
                "city_id" => 26,
            ),
            array(
                "id" => 424,
                "name" => "Totikum (Totikung)",
                "city_id" => 26,
            ),
            array(
                "id" => 425,
                "name" => "Totikum Selatan",
                "city_id" => 26,
            ),
            array(
                "id" => 426,
                "name" => "Bakam",
                "city_id" => 27,
            ),
            array(
                "id" => 427,
                "name" => "Belinyu",
                "city_id" => 27,
            ),
            array(
                "id" => 428,
                "name" => "Mendo Barat",
                "city_id" => 27,
            ),
            array(
                "id" => 429,
                "name" => "Merawang",
                "city_id" => 27,
            ),
            array(
                "id" => 430,
                "name" => "Pemali",
                "city_id" => 27,
            ),
            array(
                "id" => 431,
                "name" => "Puding Besar",
                "city_id" => 27,
            ),
            array(
                "id" => 432,
                "name" => "Riau Silip",
                "city_id" => 27,
            ),
            array(
                "id" => 433,
                "name" => "Sungai Liat",
                "city_id" => 27,
            ),
            array(
                "id" => 434,
                "name" => "Jebus",
                "city_id" => 28,
            ),
            array(
                "id" => 435,
                "name" => "Kelapa",
                "city_id" => 28,
            ),
            array(
                "id" => 436,
                "name" => "Mentok (Muntok)",
                "city_id" => 28,
            ),
            array(
                "id" => 437,
                "name" => "Parittiga",
                "city_id" => 28,
            ),
            array(
                "id" => 438,
                "name" => "Simpang Teritip",
                "city_id" => 28,
            ),
            array(
                "id" => 439,
                "name" => "Tempilang",
                "city_id" => 28,
            ),
            array(
                "id" => 440,
                "name" => "Air Gegas",
                "city_id" => 29,
            ),
            array(
                "id" => 441,
                "name" => "Kepulauan Pongok",
                "city_id" => 29,
            ),
            array(
                "id" => 442,
                "name" => "Lepar Pongok",
                "city_id" => 29,
            ),
            array(
                "id" => 443,
                "name" => "Payung",
                "city_id" => 29,
            ),
            array(
                "id" => 444,
                "name" => "Pulau Besar",
                "city_id" => 29,
            ),
            array(
                "id" => 445,
                "name" => "Simpang Rimba",
                "city_id" => 29,
            ),
            array(
                "id" => 446,
                "name" => "Toboali",
                "city_id" => 29,
            ),
            array(
                "id" => 447,
                "name" => "Tukak Sadai",
                "city_id" => 29,
            ),
            array(
                "id" => 448,
                "name" => "Koba",
                "city_id" => 30,
            ),
            array(
                "id" => 449,
                "name" => "Lubuk Besar",
                "city_id" => 30,
            ),
            array(
                "id" => 450,
                "name" => "Namang",
                "city_id" => 30,
            ),
            array(
                "id" => 451,
                "name" => "Pangkalan Baru",
                "city_id" => 30,
            ),
            array(
                "id" => 452,
                "name" => "Simpang Katis",
                "city_id" => 30,
            ),
            array(
                "id" => 453,
                "name" => "Sungai Selan",
                "city_id" => 30,
            ),
            array(
                "id" => 454,
                "name" => "Arosbaya",
                "city_id" => 31,
            ),
            array(
                "id" => 455,
                "name" => "Bangkalan",
                "city_id" => 31,
            ),
            array(
                "id" => 456,
                "name" => "Blega",
                "city_id" => 31,
            ),
            array(
                "id" => 457,
                "name" => "Burneh",
                "city_id" => 31,
            ),
            array(
                "id" => 458,
                "name" => "Galis",
                "city_id" => 31,
            ),
            array(
                "id" => 459,
                "name" => "Geger",
                "city_id" => 31,
            ),
            array(
                "id" => 460,
                "name" => "Kamal",
                "city_id" => 31,
            ),
            array(
                "id" => 461,
                "name" => "Klampis",
                "city_id" => 31,
            ),
            array(
                "id" => 462,
                "name" => "Kokop",
                "city_id" => 31,
            ),
            array(
                "id" => 463,
                "name" => "Konang",
                "city_id" => 31,
            ),
            array(
                "id" => 464,
                "name" => "Kwanyar",
                "city_id" => 31,
            ),
            array(
                "id" => 465,
                "name" => "Labang",
                "city_id" => 31,
            ),
            array(
                "id" => 466,
                "name" => "Modung",
                "city_id" => 31,
            ),
            array(
                "id" => 467,
                "name" => "Sepulu",
                "city_id" => 31,
            ),
            array(
                "id" => 468,
                "name" => "Socah",
                "city_id" => 31,
            ),
            array(
                "id" => 469,
                "name" => "Tanah Merah",
                "city_id" => 31,
            ),
            array(
                "id" => 470,
                "name" => "Tanjungbumi",
                "city_id" => 31,
            ),
            array(
                "id" => 471,
                "name" => "Tragah",
                "city_id" => 31,
            ),
            array(
                "id" => 472,
                "name" => "Bangli",
                "city_id" => 32,
            ),
            array(
                "id" => 473,
                "name" => "Kintamani",
                "city_id" => 32,
            ),
            array(
                "id" => 474,
                "name" => "Susut",
                "city_id" => 32,
            ),
            array(
                "id" => 475,
                "name" => "Tembuku",
                "city_id" => 32,
            ),
            array(
                "id" => 476,
                "name" => "Aluh-Aluh",
                "city_id" => 33,
            ),
            array(
                "id" => 477,
                "name" => "Aranio",
                "city_id" => 33,
            ),
            array(
                "id" => 478,
                "name" => "Astambul",
                "city_id" => 33,
            ),
            array(
                "id" => 479,
                "name" => "Beruntung Baru",
                "city_id" => 33,
            ),
            array(
                "id" => 480,
                "name" => "Gambut",
                "city_id" => 33,
            ),
            array(
                "id" => 481,
                "name" => "Karang Intan",
                "city_id" => 33,
            ),
            array(
                "id" => 482,
                "name" => "Kertak Hanyar",
                "city_id" => 33,
            ),
            array(
                "id" => 483,
                "name" => "Martapura Barat",
                "city_id" => 33,
            ),
            array(
                "id" => 484,
                "name" => "Martapura Kota",
                "city_id" => 33,
            ),
            array(
                "id" => 485,
                "name" => "Martapura Timur",
                "city_id" => 33,
            ),
            array(
                "id" => 486,
                "name" => "Mataraman",
                "city_id" => 33,
            ),
            array(
                "id" => 487,
                "name" => "Pengaron",
                "city_id" => 33,
            ),
            array(
                "id" => 488,
                "name" => "Peramasan",
                "city_id" => 33,
            ),
            array(
                "id" => 489,
                "name" => "Sambung Makmur",
                "city_id" => 33,
            ),
            array(
                "id" => 490,
                "name" => "Sei/Sungai Pinang",
                "city_id" => 33,
            ),
            array(
                "id" => 491,
                "name" => "Sei/Sungai Tabuk",
                "city_id" => 33,
            ),
            array(
                "id" => 492,
                "name" => "Simpang Empat",
                "city_id" => 33,
            ),
            array(
                "id" => 493,
                "name" => "Tatah Makmur",
                "city_id" => 33,
            ),
            array(
                "id" => 494,
                "name" => "Telaga Bauntung",
                "city_id" => 33,
            ),
            array(
                "id" => 495,
                "name" => "Banjar",
                "city_id" => 34,
            ),
            array(
                "id" => 496,
                "name" => "Langensari",
                "city_id" => 34,
            ),
            array(
                "id" => 497,
                "name" => "Pataruman",
                "city_id" => 34,
            ),
            array(
                "id" => 498,
                "name" => "Purwaharja",
                "city_id" => 34,
            ),
            array(
                "id" => 499,
                "name" => "Banjar Baru Selatan",
                "city_id" => 35,
            ),
            array(
                "id" => 500,
                "name" => "Banjar Baru Utara",
                "city_id" => 35,
            ),
            array(
                "id" => 501,
                "name" => "Cempaka",
                "city_id" => 35,
            ),
            array(
                "id" => 502,
                "name" => "Landasan Ulin",
                "city_id" => 35,
            ),
            array(
                "id" => 503,
                "name" => "Liang Anggang",
                "city_id" => 35,
            ),
            array(
                "id" => 504,
                "name" => "Banjarmasin Barat",
                "city_id" => 36,
            ),
            array(
                "id" => 505,
                "name" => "Banjarmasin Selatan",
                "city_id" => 36,
            ),
            array(
                "id" => 506,
                "name" => "Banjarmasin Tengah",
                "city_id" => 36,
            ),
            array(
                "id" => 507,
                "name" => "Banjarmasin Timur",
                "city_id" => 36,
            ),
            array(
                "id" => 508,
                "name" => "Banjarmasin Utara",
                "city_id" => 36,
            ),
            array(
                "id" => 509,
                "name" => "Banjarmangu",
                "city_id" => 37,
            ),
            array(
                "id" => 510,
                "name" => "Banjarnegara",
                "city_id" => 37,
            ),
            array(
                "id" => 511,
                "name" => "Batur",
                "city_id" => 37,
            ),
            array(
                "id" => 512,
                "name" => "Bawang",
                "city_id" => 37,
            ),
            array(
                "id" => 513,
                "name" => "Kalibening",
                "city_id" => 37,
            ),
            array(
                "id" => 514,
                "name" => "Karangkobar",
                "city_id" => 37,
            ),
            array(
                "id" => 515,
                "name" => "Madukara",
                "city_id" => 37,
            ),
            array(
                "id" => 516,
                "name" => "Mandiraja",
                "city_id" => 37,
            ),
            array(
                "id" => 517,
                "name" => "Pagedongan",
                "city_id" => 37,
            ),
            array(
                "id" => 518,
                "name" => "Pagentan",
                "city_id" => 37,
            ),
            array(
                "id" => 519,
                "name" => "Pandanarum",
                "city_id" => 37,
            ),
            array(
                "id" => 520,
                "name" => "Pejawaran",
                "city_id" => 37,
            ),
            array(
                "id" => 521,
                "name" => "Punggelan",
                "city_id" => 37,
            ),
            array(
                "id" => 522,
                "name" => "Purwonegoro",
                "city_id" => 37,
            ),
            array(
                "id" => 523,
                "name" => "Purworejo Klampok",
                "city_id" => 37,
            ),
            array(
                "id" => 524,
                "name" => "Rakit",
                "city_id" => 37,
            ),
            array(
                "id" => 525,
                "name" => "Sigaluh",
                "city_id" => 37,
            ),
            array(
                "id" => 526,
                "name" => "Susukan",
                "city_id" => 37,
            ),
            array(
                "id" => 527,
                "name" => "Wanadadi (Wonodadi)",
                "city_id" => 37,
            ),
            array(
                "id" => 528,
                "name" => "Wanayasa",
                "city_id" => 37,
            ),
            array(
                "id" => 529,
                "name" => "Bantaeng",
                "city_id" => 38,
            ),
            array(
                "id" => 530,
                "name" => "Bissappu",
                "city_id" => 38,
            ),
            array(
                "id" => 531,
                "name" => "Eremerasa",
                "city_id" => 38,
            ),
            array(
                "id" => 532,
                "name" => "Gantarang Keke (Gantareng Keke)",
                "city_id" => 38,
            ),
            array(
                "id" => 533,
                "name" => "Pajukukang",
                "city_id" => 38,
            ),
            array(
                "id" => 534,
                "name" => "Sinoa",
                "city_id" => 38,
            ),
            array(
                "id" => 535,
                "name" => "Tompobulu",
                "city_id" => 38,
            ),
            array(
                "id" => 536,
                "name" => "Uluere",
                "city_id" => 38,
            ),
            array(
                "id" => 537,
                "name" => "Bambang Lipuro",
                "city_id" => 39,
            ),
            array(
                "id" => 538,
                "name" => "Banguntapan",
                "city_id" => 39,
            ),
            array(
                "id" => 539,
                "name" => "Bantul",
                "city_id" => 39,
            ),
            array(
                "id" => 540,
                "name" => "Dlingo",
                "city_id" => 39,
            ),
            array(
                "id" => 541,
                "name" => "Imogiri",
                "city_id" => 39,
            ),
            array(
                "id" => 542,
                "name" => "Jetis",
                "city_id" => 39,
            ),
            array(
                "id" => 543,
                "name" => "Kasihan",
                "city_id" => 39,
            ),
            array(
                "id" => 544,
                "name" => "Kretek",
                "city_id" => 39,
            ),
            array(
                "id" => 545,
                "name" => "Pajangan",
                "city_id" => 39,
            ),
            array(
                "id" => 546,
                "name" => "Pandak",
                "city_id" => 39,
            ),
            array(
                "id" => 547,
                "name" => "Piyungan",
                "city_id" => 39,
            ),
            array(
                "id" => 548,
                "name" => "Pleret",
                "city_id" => 39,
            ),
            array(
                "id" => 549,
                "name" => "Pundong",
                "city_id" => 39,
            ),
            array(
                "id" => 550,
                "name" => "Sanden",
                "city_id" => 39,
            ),
            array(
                "id" => 551,
                "name" => "Sedayu",
                "city_id" => 39,
            ),
            array(
                "id" => 552,
                "name" => "Sewon",
                "city_id" => 39,
            ),
            array(
                "id" => 553,
                "name" => "Srandakan",
                "city_id" => 39,
            ),
            array(
                "id" => 554,
                "name" => "Air Kumbang",
                "city_id" => 40,
            ),
            array(
                "id" => 555,
                "name" => "Air Salek",
                "city_id" => 40,
            ),
            array(
                "id" => 556,
                "name" => "Banyuasin I",
                "city_id" => 40,
            ),
            array(
                "id" => 557,
                "name" => "Banyuasin II",
                "city_id" => 40,
            ),
            array(
                "id" => 558,
                "name" => "Banyuasin III",
                "city_id" => 40,
            ),
            array(
                "id" => 559,
                "name" => "Betung",
                "city_id" => 40,
            ),
            array(
                "id" => 560,
                "name" => "Makarti Jaya",
                "city_id" => 40,
            ),
            array(
                "id" => 561,
                "name" => "Muara Padang",
                "city_id" => 40,
            ),
            array(
                "id" => 562,
                "name" => "Muara Sugihan",
                "city_id" => 40,
            ),
            array(
                "id" => 563,
                "name" => "Muara Telang",
                "city_id" => 40,
            ),
            array(
                "id" => 564,
                "name" => "Pulau Rimau",
                "city_id" => 40,
            ),
            array(
                "id" => 565,
                "name" => "Rambutan",
                "city_id" => 40,
            ),
            array(
                "id" => 566,
                "name" => "Rantau Bayur",
                "city_id" => 40,
            ),
            array(
                "id" => 567,
                "name" => "Sembawa",
                "city_id" => 40,
            ),
            array(
                "id" => 568,
                "name" => "Suak Tapeh",
                "city_id" => 40,
            ),
            array(
                "id" => 569,
                "name" => "Sumber Marga Telang",
                "city_id" => 40,
            ),
            array(
                "id" => 570,
                "name" => "Talang Kelapa",
                "city_id" => 40,
            ),
            array(
                "id" => 571,
                "name" => "Tanjung Lago",
                "city_id" => 40,
            ),
            array(
                "id" => 572,
                "name" => "Tungkal Ilir",
                "city_id" => 40,
            ),
            array(
                "id" => 573,
                "name" => "Ajibarang",
                "city_id" => 41,
            ),
            array(
                "id" => 574,
                "name" => "Banyumas",
                "city_id" => 41,
            ),
            array(
                "id" => 575,
                "name" => "Baturaden",
                "city_id" => 41,
            ),
            array(
                "id" => 576,
                "name" => "Cilongok",
                "city_id" => 41,
            ),
            array(
                "id" => 577,
                "name" => "Gumelar",
                "city_id" => 41,
            ),
            array(
                "id" => 578,
                "name" => "Jatilawang",
                "city_id" => 41,
            ),
            array(
                "id" => 579,
                "name" => "Kalibagor",
                "city_id" => 41,
            ),
            array(
                "id" => 580,
                "name" => "Karanglewas",
                "city_id" => 41,
            ),
            array(
                "id" => 581,
                "name" => "Kebasen",
                "city_id" => 41,
            ),
            array(
                "id" => 582,
                "name" => "Kedung Banteng",
                "city_id" => 41,
            ),
            array(
                "id" => 583,
                "name" => "Kembaran",
                "city_id" => 41,
            ),
            array(
                "id" => 584,
                "name" => "Kemranjen",
                "city_id" => 41,
            ),
            array(
                "id" => 585,
                "name" => "Lumbir",
                "city_id" => 41,
            ),
            array(
                "id" => 586,
                "name" => "Patikraja",
                "city_id" => 41,
            ),
            array(
                "id" => 587,
                "name" => "Pekuncen",
                "city_id" => 41,
            ),
            array(
                "id" => 588,
                "name" => "Purwojati",
                "city_id" => 41,
            ),
            array(
                "id" => 589,
                "name" => "Purwokerto Barat",
                "city_id" => 41,
            ),
            array(
                "id" => 590,
                "name" => "Purwokerto Selatan",
                "city_id" => 41,
            ),
            array(
                "id" => 591,
                "name" => "Purwokerto Timur",
                "city_id" => 41,
            ),
            array(
                "id" => 592,
                "name" => "Purwokerto Utara",
                "city_id" => 41,
            ),
            array(
                "id" => 593,
                "name" => "Rawalo",
                "city_id" => 41,
            ),
            array(
                "id" => 594,
                "name" => "Sokaraja",
                "city_id" => 41,
            ),
            array(
                "id" => 595,
                "name" => "Somagede",
                "city_id" => 41,
            ),
            array(
                "id" => 596,
                "name" => "Sumbang",
                "city_id" => 41,
            ),
            array(
                "id" => 597,
                "name" => "Sumpiuh",
                "city_id" => 41,
            ),
            array(
                "id" => 598,
                "name" => "Tambak",
                "city_id" => 41,
            ),
            array(
                "id" => 599,
                "name" => "Wangon",
                "city_id" => 41,
            ),
            array(
                "id" => 600,
                "name" => "Bangorejo",
                "city_id" => 42,
            ),
            array(
                "id" => 601,
                "name" => "Banyuwangi",
                "city_id" => 42,
            ),
            array(
                "id" => 602,
                "name" => "Cluring",
                "city_id" => 42,
            ),
            array(
                "id" => 603,
                "name" => "Gambiran",
                "city_id" => 42,
            ),
            array(
                "id" => 604,
                "name" => "Genteng",
                "city_id" => 42,
            ),
            array(
                "id" => 605,
                "name" => "Giri",
                "city_id" => 42,
            ),
            array(
                "id" => 606,
                "name" => "Glagah",
                "city_id" => 42,
            ),
            array(
                "id" => 607,
                "name" => "Glenmore",
                "city_id" => 42,
            ),
            array(
                "id" => 608,
                "name" => "Kabat",
                "city_id" => 42,
            ),
            array(
                "id" => 609,
                "name" => "Kalibaru",
                "city_id" => 42,
            ),
            array(
                "id" => 610,
                "name" => "Kalipuro",
                "city_id" => 42,
            ),
            array(
                "id" => 611,
                "name" => "Licin",
                "city_id" => 42,
            ),
            array(
                "id" => 612,
                "name" => "Muncar",
                "city_id" => 42,
            ),
            array(
                "id" => 613,
                "name" => "Pesanggaran",
                "city_id" => 42,
            ),
            array(
                "id" => 614,
                "name" => "Purwoharjo",
                "city_id" => 42,
            ),
            array(
                "id" => 615,
                "name" => "Rogojampi",
                "city_id" => 42,
            ),
            array(
                "id" => 616,
                "name" => "Sempu",
                "city_id" => 42,
            ),
            array(
                "id" => 617,
                "name" => "Siliragung",
                "city_id" => 42,
            ),
            array(
                "id" => 618,
                "name" => "Singojuruh",
                "city_id" => 42,
            ),
            array(
                "id" => 619,
                "name" => "Songgon",
                "city_id" => 42,
            ),
            array(
                "id" => 620,
                "name" => "Srono",
                "city_id" => 42,
            ),
            array(
                "id" => 621,
                "name" => "Tegaldlimo",
                "city_id" => 42,
            ),
            array(
                "id" => 622,
                "name" => "Tegalsari",
                "city_id" => 42,
            ),
            array(
                "id" => 623,
                "name" => "Wongsorejo",
                "city_id" => 42,
            ),
            array(
                "id" => 624,
                "name" => "Alalak",
                "city_id" => 43,
            ),
            array(
                "id" => 625,
                "name" => "Anjir Muara",
                "city_id" => 43,
            ),
            array(
                "id" => 626,
                "name" => "Anjir Pasar",
                "city_id" => 43,
            ),
            array(
                "id" => 627,
                "name" => "Bakumpai",
                "city_id" => 43,
            ),
            array(
                "id" => 628,
                "name" => "Barambai",
                "city_id" => 43,
            ),
            array(
                "id" => 629,
                "name" => "Belawang",
                "city_id" => 43,
            ),
            array(
                "id" => 630,
                "name" => "Cerbon",
                "city_id" => 43,
            ),
            array(
                "id" => 631,
                "name" => "Jejangkit",
                "city_id" => 43,
            ),
            array(
                "id" => 632,
                "name" => "Kuripan",
                "city_id" => 43,
            ),
            array(
                "id" => 633,
                "name" => "Mandastana",
                "city_id" => 43,
            ),
            array(
                "id" => 634,
                "name" => "Marabahan",
                "city_id" => 43,
            ),
            array(
                "id" => 635,
                "name" => "Mekar Sari",
                "city_id" => 43,
            ),
            array(
                "id" => 636,
                "name" => "Rantau Badauh",
                "city_id" => 43,
            ),
            array(
                "id" => 637,
                "name" => "Tabukan",
                "city_id" => 43,
            ),
            array(
                "id" => 638,
                "name" => "Tabunganen",
                "city_id" => 43,
            ),
            array(
                "id" => 639,
                "name" => "Tamban",
                "city_id" => 43,
            ),
            array(
                "id" => 640,
                "name" => "Wanaraya",
                "city_id" => 43,
            ),
            array(
                "id" => 641,
                "name" => "Dusun Hilir",
                "city_id" => 44,
            ),
            array(
                "id" => 642,
                "name" => "Dusun Selatan",
                "city_id" => 44,
            ),
            array(
                "id" => 643,
                "name" => "Dusun Utara",
                "city_id" => 44,
            ),
            array(
                "id" => 644,
                "name" => "Gunung Bintang Awai",
                "city_id" => 44,
            ),
            array(
                "id" => 645,
                "name" => "Jenamas",
                "city_id" => 44,
            ),
            array(
                "id" => 646,
                "name" => "Karau Kuala",
                "city_id" => 44,
            ),
            array(
                "id" => 647,
                "name" => "Awang",
                "city_id" => 45,
            ),
            array(
                "id" => 648,
                "name" => "Benua Lima",
                "city_id" => 45,
            ),
            array(
                "id" => 649,
                "name" => "Dusun Tengah",
                "city_id" => 45,
            ),
            array(
                "id" => 650,
                "name" => "Dusun Timur",
                "city_id" => 45,
            ),
            array(
                "id" => 651,
                "name" => "Karusen Janang",
                "city_id" => 45,
            ),
            array(
                "id" => 652,
                "name" => "Paju Epat",
                "city_id" => 45,
            ),
            array(
                "id" => 653,
                "name" => "Paku",
                "city_id" => 45,
            ),
            array(
                "id" => 654,
                "name" => "Patangkep Tutui",
                "city_id" => 45,
            ),
            array(
                "id" => 655,
                "name" => "Pematang Karau",
                "city_id" => 45,
            ),
            array(
                "id" => 656,
                "name" => "Raren Batuah",
                "city_id" => 45,
            ),
            array(
                "id" => 657,
                "name" => "Gunung Purei",
                "city_id" => 46,
            ),
            array(
                "id" => 658,
                "name" => "Gunung Timang",
                "city_id" => 46,
            ),
            array(
                "id" => 659,
                "name" => "Lahei",
                "city_id" => 46,
            ),
            array(
                "id" => 660,
                "name" => "Lahei Barat",
                "city_id" => 46,
            ),
            array(
                "id" => 661,
                "name" => "Montallat (Montalat)",
                "city_id" => 46,
            ),
            array(
                "id" => 662,
                "name" => "Teweh Baru",
                "city_id" => 46,
            ),
            array(
                "id" => 663,
                "name" => "Teweh Selatan",
                "city_id" => 46,
            ),
            array(
                "id" => 664,
                "name" => "Teweh Tengah",
                "city_id" => 46,
            ),
            array(
                "id" => 665,
                "name" => "Teweh Timur",
                "city_id" => 46,
            ),
            array(
                "id" => 666,
                "name" => "Balusu",
                "city_id" => 47,
            ),
            array(
                "id" => 667,
                "name" => "Barru",
                "city_id" => 47,
            ),
            array(
                "id" => 668,
                "name" => "Mallusetasi",
                "city_id" => 47,
            ),
            array(
                "id" => 669,
                "name" => "Pujananting",
                "city_id" => 47,
            ),
            array(
                "id" => 670,
                "name" => "Soppeng Riaja",
                "city_id" => 47,
            ),
            array(
                "id" => 671,
                "name" => "Tanete Riaja",
                "city_id" => 47,
            ),
            array(
                "id" => 672,
                "name" => "Tanete Rilau",
                "city_id" => 47,
            ),
            array(
                "id" => 673,
                "name" => "Batam Kota",
                "city_id" => 48,
            ),
            array(
                "id" => 674,
                "name" => "Batu Aji",
                "city_id" => 48,
            ),
            array(
                "id" => 675,
                "name" => "Batu Ampar",
                "city_id" => 48,
            ),
            array(
                "id" => 676,
                "name" => "Belakang Padang",
                "city_id" => 48,
            ),
            array(
                "id" => 677,
                "name" => "Bengkong",
                "city_id" => 48,
            ),
            array(
                "id" => 678,
                "name" => "Bulang",
                "city_id" => 48,
            ),
            array(
                "id" => 679,
                "name" => "Galang",
                "city_id" => 48,
            ),
            array(
                "id" => 680,
                "name" => "Lubuk Baja",
                "city_id" => 48,
            ),
            array(
                "id" => 681,
                "name" => "Nongsa",
                "city_id" => 48,
            ),
            array(
                "id" => 682,
                "name" => "Sagulung",
                "city_id" => 48,
            ),
            array(
                "id" => 683,
                "name" => "Sei/Sungai Beduk",
                "city_id" => 48,
            ),
            array(
                "id" => 684,
                "name" => "Sekupang",
                "city_id" => 48,
            ),
            array(
                "id" => 685,
                "name" => "Bandar",
                "city_id" => 49,
            ),
            array(
                "id" => 686,
                "name" => "Banyuputih",
                "city_id" => 49,
            ),
            array(
                "id" => 687,
                "name" => "Batang",
                "city_id" => 49,
            ),
            array(
                "id" => 688,
                "name" => "Bawang",
                "city_id" => 49,
            ),
            array(
                "id" => 689,
                "name" => "Blado",
                "city_id" => 49,
            ),
            array(
                "id" => 690,
                "name" => "Gringsing",
                "city_id" => 49,
            ),
            array(
                "id" => 691,
                "name" => "Kandeman",
                "city_id" => 49,
            ),
            array(
                "id" => 692,
                "name" => "Limpung",
                "city_id" => 49,
            ),
            array(
                "id" => 693,
                "name" => "Pecalungan",
                "city_id" => 49,
            ),
            array(
                "id" => 694,
                "name" => "Reban",
                "city_id" => 49,
            ),
            array(
                "id" => 695,
                "name" => "Subah",
                "city_id" => 49,
            ),
            array(
                "id" => 696,
                "name" => "Tersono",
                "city_id" => 49,
            ),
            array(
                "id" => 697,
                "name" => "Tulis",
                "city_id" => 49,
            ),
            array(
                "id" => 698,
                "name" => "Warungasem",
                "city_id" => 49,
            ),
            array(
                "id" => 699,
                "name" => "Wonotunggal",
                "city_id" => 49,
            ),
            array(
                "id" => 700,
                "name" => "Bajubang",
                "city_id" => 50,
            ),
            array(
                "id" => 701,
                "name" => "Batin XXIV",
                "city_id" => 50,
            ),
            array(
                "id" => 702,
                "name" => "Maro Sebo Ilir",
                "city_id" => 50,
            ),
            array(
                "id" => 703,
                "name" => "Maro Sebo Ulu",
                "city_id" => 50,
            ),
            array(
                "id" => 704,
                "name" => "Mersam",
                "city_id" => 50,
            ),
            array(
                "id" => 705,
                "name" => "Muara Bulian",
                "city_id" => 50,
            ),
            array(
                "id" => 706,
                "name" => "Muara Tembesi",
                "city_id" => 50,
            ),
            array(
                "id" => 707,
                "name" => "Pemayung",
                "city_id" => 50,
            ),
            array(
                "id" => 708,
                "name" => "Batu",
                "city_id" => 51,
            ),
            array(
                "id" => 709,
                "name" => "Bumiaji",
                "city_id" => 51,
            ),
            array(
                "id" => 710,
                "name" => "Junrejo",
                "city_id" => 51,
            ),
            array(
                "id" => 711,
                "name" => "Air Putih",
                "city_id" => 52,
            ),
            array(
                "id" => 712,
                "name" => "Limapuluh",
                "city_id" => 52,
            ),
            array(
                "id" => 713,
                "name" => "Medang Deras",
                "city_id" => 52,
            ),
            array(
                "id" => 714,
                "name" => "Sei Balai",
                "city_id" => 52,
            ),
            array(
                "id" => 715,
                "name" => "Sei Suka",
                "city_id" => 52,
            ),
            array(
                "id" => 716,
                "name" => "Talawi",
                "city_id" => 52,
            ),
            array(
                "id" => 717,
                "name" => "Tanjung Tiram",
                "city_id" => 52,
            ),
            array(
                "id" => 718,
                "name" => "Batupoaro",
                "city_id" => 53,
            ),
            array(
                "id" => 719,
                "name" => "Betoambari",
                "city_id" => 53,
            ),
            array(
                "id" => 720,
                "name" => "Bungi",
                "city_id" => 53,
            ),
            array(
                "id" => 721,
                "name" => "Kokalukuna",
                "city_id" => 53,
            ),
            array(
                "id" => 722,
                "name" => "Lea-Lea",
                "city_id" => 53,
            ),
            array(
                "id" => 723,
                "name" => "Murhum",
                "city_id" => 53,
            ),
            array(
                "id" => 724,
                "name" => "Sora Walio (Sorowalio)",
                "city_id" => 53,
            ),
            array(
                "id" => 725,
                "name" => "Wolio",
                "city_id" => 53,
            ),
            array(
                "id" => 726,
                "name" => "Babelan",
                "city_id" => 54,
            ),
            array(
                "id" => 727,
                "name" => "Bojongmangu",
                "city_id" => 54,
            ),
            array(
                "id" => 728,
                "name" => "Cabangbungin",
                "city_id" => 54,
            ),
            array(
                "id" => 729,
                "name" => "Cibarusah",
                "city_id" => 54,
            ),
            array(
                "id" => 730,
                "name" => "Cibitung",
                "city_id" => 54,
            ),
            array(
                "id" => 731,
                "name" => "Cikarang Barat",
                "city_id" => 54,
            ),
            array(
                "id" => 732,
                "name" => "Cikarang Pusat",
                "city_id" => 54,
            ),
            array(
                "id" => 733,
                "name" => "Cikarang Selatan",
                "city_id" => 54,
            ),
            array(
                "id" => 734,
                "name" => "Cikarang Timur",
                "city_id" => 54,
            ),
            array(
                "id" => 735,
                "name" => "Cikarang Utara",
                "city_id" => 54,
            ),
            array(
                "id" => 736,
                "name" => "Karangbahagia",
                "city_id" => 54,
            ),
            array(
                "id" => 737,
                "name" => "Kedung Waringin",
                "city_id" => 54,
            ),
            array(
                "id" => 738,
                "name" => "Muara Gembong",
                "city_id" => 54,
            ),
            array(
                "id" => 739,
                "name" => "Pebayuran",
                "city_id" => 54,
            ),
            array(
                "id" => 740,
                "name" => "Serang Baru",
                "city_id" => 54,
            ),
            array(
                "id" => 741,
                "name" => "Setu",
                "city_id" => 54,
            ),
            array(
                "id" => 742,
                "name" => "Sukakarya",
                "city_id" => 54,
            ),
            array(
                "id" => 743,
                "name" => "Sukatani",
                "city_id" => 54,
            ),
            array(
                "id" => 744,
                "name" => "Sukawangi",
                "city_id" => 54,
            ),
            array(
                "id" => 745,
                "name" => "Tambelang",
                "city_id" => 54,
            ),
            array(
                "id" => 746,
                "name" => "Tambun Selatan",
                "city_id" => 54,
            ),
            array(
                "id" => 747,
                "name" => "Tambun Utara",
                "city_id" => 54,
            ),
            array(
                "id" => 748,
                "name" => "Tarumajaya",
                "city_id" => 54,
            ),
            array(
                "id" => 749,
                "name" => "Bantar Gebang",
                "city_id" => 55,
            ),
            array(
                "id" => 750,
                "name" => "Bekasi Barat",
                "city_id" => 55,
            ),
            array(
                "id" => 751,
                "name" => "Bekasi Selatan",
                "city_id" => 55,
            ),
            array(
                "id" => 752,
                "name" => "Bekasi Timur",
                "city_id" => 55,
            ),
            array(
                "id" => 753,
                "name" => "Bekasi Utara",
                "city_id" => 55,
            ),
            array(
                "id" => 754,
                "name" => "Jati Sampurna",
                "city_id" => 55,
            ),
            array(
                "id" => 755,
                "name" => "Jatiasih",
                "city_id" => 55,
            ),
            array(
                "id" => 756,
                "name" => "Medan Satria",
                "city_id" => 55,
            ),
            array(
                "id" => 757,
                "name" => "Mustika Jaya",
                "city_id" => 55,
            ),
            array(
                "id" => 758,
                "name" => "Pondok Gede",
                "city_id" => 55,
            ),
            array(
                "id" => 759,
                "name" => "Pondok Melati",
                "city_id" => 55,
            ),
            array(
                "id" => 760,
                "name" => "Rawalumbu",
                "city_id" => 55,
            ),
            array(
                "id" => 761,
                "name" => "Badau",
                "city_id" => 56,
            ),
            array(
                "id" => 762,
                "name" => "Membalong",
                "city_id" => 56,
            ),
            array(
                "id" => 763,
                "name" => "Selat Nasik",
                "city_id" => 56,
            ),
            array(
                "id" => 764,
                "name" => "Sijuk",
                "city_id" => 56,
            ),
            array(
                "id" => 765,
                "name" => "Tanjung Pandan",
                "city_id" => 56,
            ),
            array(
                "id" => 766,
                "name" => "Damar",
                "city_id" => 57,
            ),
            array(
                "id" => 767,
                "name" => "Dendang",
                "city_id" => 57,
            ),
            array(
                "id" => 768,
                "name" => "Gantung",
                "city_id" => 57,
            ),
            array(
                "id" => 769,
                "name" => "Kelapa Kampit",
                "city_id" => 57,
            ),
            array(
                "id" => 770,
                "name" => "Manggar",
                "city_id" => 57,
            ),
            array(
                "id" => 771,
                "name" => "Simpang Pesak",
                "city_id" => 57,
            ),
            array(
                "id" => 772,
                "name" => "Simpang Renggiang",
                "city_id" => 57,
            ),
            array(
                "id" => 773,
                "name" => "Atambua Barat",
                "city_id" => 58,
            ),
            array(
                "id" => 774,
                "name" => "Atambua Kota",
                "city_id" => 58,
            ),
            array(
                "id" => 775,
                "name" => "Atambua Selatan",
                "city_id" => 58,
            ),
            array(
                "id" => 776,
                "name" => "Botin Leo Bele",
                "city_id" => 58,
            ),
            array(
                "id" => 777,
                "name" => "Io Kufeu",
                "city_id" => 58,
            ),
            array(
                "id" => 778,
                "name" => "Kakuluk Mesak",
                "city_id" => 58,
            ),
            array(
                "id" => 779,
                "name" => "Kobalima",
                "city_id" => 58,
            ),
            array(
                "id" => 780,
                "name" => "Kobalima Timur",
                "city_id" => 58,
            ),
            array(
                "id" => 781,
                "name" => "Laen Manen",
                "city_id" => 58,
            ),
            array(
                "id" => 782,
                "name" => "Lamaknen",
                "city_id" => 58,
            ),
            array(
                "id" => 783,
                "name" => "Lamaknen Selatan",
                "city_id" => 58,
            ),
            array(
                "id" => 784,
                "name" => "Lasiolat",
                "city_id" => 58,
            ),
            array(
                "id" => 785,
                "name" => "Malaka Barat",
                "city_id" => 58,
            ),
            array(
                "id" => 786,
                "name" => "Malaka Tengah",
                "city_id" => 58,
            ),
            array(
                "id" => 787,
                "name" => "Malaka Timur",
                "city_id" => 58,
            ),
            array(
                "id" => 788,
                "name" => "Nanaet Duabesi",
                "city_id" => 58,
            ),
            array(
                "id" => 789,
                "name" => "Raihat",
                "city_id" => 58,
            ),
            array(
                "id" => 790,
                "name" => "Raimanuk",
                "city_id" => 58,
            ),
            array(
                "id" => 791,
                "name" => "Rinhat",
                "city_id" => 58,
            ),
            array(
                "id" => 792,
                "name" => "Sasitamean",
                "city_id" => 58,
            ),
            array(
                "id" => 793,
                "name" => "Tasifeto Barat",
                "city_id" => 58,
            ),
            array(
                "id" => 794,
                "name" => "Tasifeto Timur",
                "city_id" => 58,
            ),
            array(
                "id" => 795,
                "name" => "Weliman",
                "city_id" => 58,
            ),
            array(
                "id" => 796,
                "name" => "Wewiku",
                "city_id" => 58,
            ),
            array(
                "id" => 797,
                "name" => "Bandar",
                "city_id" => 59,
            ),
            array(
                "id" => 798,
                "name" => "Bener Kelipah",
                "city_id" => 59,
            ),
            array(
                "id" => 799,
                "name" => "Bukit",
                "city_id" => 59,
            ),
            array(
                "id" => 800,
                "name" => "Gajah Putih",
                "city_id" => 59,
            ),
            array(
                "id" => 801,
                "name" => "Mesidah",
                "city_id" => 59,
            ),
            array(
                "id" => 802,
                "name" => "Permata",
                "city_id" => 59,
            ),
            array(
                "id" => 803,
                "name" => "Pintu Rime Gayo",
                "city_id" => 59,
            ),
            array(
                "id" => 804,
                "name" => "Syiah Utama",
                "city_id" => 59,
            ),
            array(
                "id" => 805,
                "name" => "Timang Gajah",
                "city_id" => 59,
            ),
            array(
                "id" => 806,
                "name" => "Wih Pesam",
                "city_id" => 59,
            ),
            array(
                "id" => 807,
                "name" => "Bantan",
                "city_id" => 60,
            ),
            array(
                "id" => 808,
                "name" => "Bengkalis",
                "city_id" => 60,
            ),
            array(
                "id" => 809,
                "name" => "Bukit Batu",
                "city_id" => 60,
            ),
            array(
                "id" => 810,
                "name" => "Mandau",
                "city_id" => 60,
            ),
            array(
                "id" => 811,
                "name" => "Pinggir",
                "city_id" => 60,
            ),
            array(
                "id" => 812,
                "name" => "Rupat",
                "city_id" => 60,
            ),
            array(
                "id" => 813,
                "name" => "Rupat Utara",
                "city_id" => 60,
            ),
            array(
                "id" => 814,
                "name" => "Siak Kecil",
                "city_id" => 60,
            ),
            array(
                "id" => 815,
                "name" => "Bengkayang",
                "city_id" => 61,
            ),
            array(
                "id" => 816,
                "name" => "Capkala",
                "city_id" => 61,
            ),
            array(
                "id" => 817,
                "name" => "Jagoi Babang",
                "city_id" => 61,
            ),
            array(
                "id" => 818,
                "name" => "Ledo",
                "city_id" => 61,
            ),
            array(
                "id" => 819,
                "name" => "Lembah Bawang",
                "city_id" => 61,
            ),
            array(
                "id" => 820,
                "name" => "Lumar",
                "city_id" => 61,
            ),
            array(
                "id" => 821,
                "name" => "Monterado",
                "city_id" => 61,
            ),
            array(
                "id" => 822,
                "name" => "Samalantan",
                "city_id" => 61,
            ),
            array(
                "id" => 823,
                "name" => "Sanggau Ledo",
                "city_id" => 61,
            ),
            array(
                "id" => 824,
                "name" => "Seluas",
                "city_id" => 61,
            ),
            array(
                "id" => 825,
                "name" => "Siding",
                "city_id" => 61,
            ),
            array(
                "id" => 826,
                "name" => "Sungai Betung",
                "city_id" => 61,
            ),
            array(
                "id" => 827,
                "name" => "Sungai Raya",
                "city_id" => 61,
            ),
            array(
                "id" => 828,
                "name" => "Sungai Raya Kepulauan",
                "city_id" => 61,
            ),
            array(
                "id" => 829,
                "name" => "Suti Semarang",
                "city_id" => 61,
            ),
            array(
                "id" => 830,
                "name" => "Teriak",
                "city_id" => 61,
            ),
            array(
                "id" => 831,
                "name" => "Tujuh Belas",
                "city_id" => 61,
            ),
            array(
                "id" => 832,
                "name" => "Gading Cempaka",
                "city_id" => 62,
            ),
            array(
                "id" => 833,
                "name" => "Kampung Melayu",
                "city_id" => 62,
            ),
            array(
                "id" => 834,
                "name" => "Muara Bangka Hulu",
                "city_id" => 62,
            ),
            array(
                "id" => 835,
                "name" => "Ratu Agung",
                "city_id" => 62,
            ),
            array(
                "id" => 836,
                "name" => "Ratu Samban",
                "city_id" => 62,
            ),
            array(
                "id" => 837,
                "name" => "Selebar",
                "city_id" => 62,
            ),
            array(
                "id" => 838,
                "name" => "Singaran Pati",
                "city_id" => 62,
            ),
            array(
                "id" => 839,
                "name" => "Sungai Serut",
                "city_id" => 62,
            ),
            array(
                "id" => 840,
                "name" => "Teluk Segara",
                "city_id" => 62,
            ),
            array(
                "id" => 841,
                "name" => "Air Nipis",
                "city_id" => 63,
            ),
            array(
                "id" => 842,
                "name" => "Bunga Mas",
                "city_id" => 63,
            ),
            array(
                "id" => 843,
                "name" => "Kedurang",
                "city_id" => 63,
            ),
            array(
                "id" => 844,
                "name" => "Kedurang Ilir",
                "city_id" => 63,
            ),
            array(
                "id" => 845,
                "name" => "Kota Manna",
                "city_id" => 63,
            ),
            array(
                "id" => 846,
                "name" => "Manna",
                "city_id" => 63,
            ),
            array(
                "id" => 847,
                "name" => "Pasar Manna",
                "city_id" => 63,
            ),
            array(
                "id" => 848,
                "name" => "Pino",
                "city_id" => 63,
            ),
            array(
                "id" => 849,
                "name" => "Pinoraya",
                "city_id" => 63,
            ),
            array(
                "id" => 850,
                "name" => "Seginim",
                "city_id" => 63,
            ),
            array(
                "id" => 851,
                "name" => "Ulu Manna",
                "city_id" => 63,
            ),
            array(
                "id" => 852,
                "name" => "Bang Haji",
                "city_id" => 64,
            ),
            array(
                "id" => 853,
                "name" => "Karang Tinggi",
                "city_id" => 64,
            ),
            array(
                "id" => 854,
                "name" => "Merigi Kelindang",
                "city_id" => 64,
            ),
            array(
                "id" => 855,
                "name" => "Merigi Sakti",
                "city_id" => 64,
            ),
            array(
                "id" => 856,
                "name" => "Pagar Jati",
                "city_id" => 64,
            ),
            array(
                "id" => 857,
                "name" => "Pematang Tiga",
                "city_id" => 64,
            ),
            array(
                "id" => 858,
                "name" => "Pondok Kelapa",
                "city_id" => 64,
            ),
            array(
                "id" => 859,
                "name" => "Pondok Kubang",
                "city_id" => 64,
            ),
            array(
                "id" => 860,
                "name" => "Taba Penanjung",
                "city_id" => 64,
            ),
            array(
                "id" => 861,
                "name" => "Talang Empat",
                "city_id" => 64,
            ),
            array(
                "id" => 862,
                "name" => "Air Besi",
                "city_id" => 65,
            ),
            array(
                "id" => 863,
                "name" => "Air Napal",
                "city_id" => 65,
            ),
            array(
                "id" => 864,
                "name" => "Air Padang",
                "city_id" => 65,
            ),
            array(
                "id" => 865,
                "name" => "Arga Makmur",
                "city_id" => 65,
            ),
            array(
                "id" => 866,
                "name" => "Arma Jaya",
                "city_id" => 65,
            ),
            array(
                "id" => 867,
                "name" => "Batik Nau",
                "city_id" => 65,
            ),
            array(
                "id" => 868,
                "name" => "Enggano",
                "city_id" => 65,
            ),
            array(
                "id" => 869,
                "name" => "Giri Mulia",
                "city_id" => 65,
            ),
            array(
                "id" => 870,
                "name" => "Hulu Palik",
                "city_id" => 65,
            ),
            array(
                "id" => 871,
                "name" => "Kerkap",
                "city_id" => 65,
            ),
            array(
                "id" => 872,
                "name" => "Ketahun",
                "city_id" => 65,
            ),
            array(
                "id" => 873,
                "name" => "Lais",
                "city_id" => 65,
            ),
            array(
                "id" => 874,
                "name" => "Napal Putih",
                "city_id" => 65,
            ),
            array(
                "id" => 875,
                "name" => "Padang Jaya",
                "city_id" => 65,
            ),
            array(
                "id" => 876,
                "name" => "Putri Hijau",
                "city_id" => 65,
            ),
            array(
                "id" => 877,
                "name" => "Tanjung Agung Palik",
                "city_id" => 65,
            ),
            array(
                "id" => 878,
                "name" => "Ulok Kupai",
                "city_id" => 65,
            ),
            array(
                "id" => 879,
                "name" => "Batu Putih",
                "city_id" => 66,
            ),
            array(
                "id" => 880,
                "name" => "Biatan",
                "city_id" => 66,
            ),
            array(
                "id" => 881,
                "name" => "Biduk-Biduk",
                "city_id" => 66,
            ),
            array(
                "id" => 882,
                "name" => "Derawan (Pulau Derawan)",
                "city_id" => 66,
            ),
            array(
                "id" => 883,
                "name" => "Gunung Tabur",
                "city_id" => 66,
            ),
            array(
                "id" => 884,
                "name" => "Kelay",
                "city_id" => 66,
            ),
            array(
                "id" => 885,
                "name" => "Maratua",
                "city_id" => 66,
            ),
            array(
                "id" => 886,
                "name" => "Sambaliung",
                "city_id" => 66,
            ),
            array(
                "id" => 887,
                "name" => "Segah",
                "city_id" => 66,
            ),
            array(
                "id" => 888,
                "name" => "Tabalar",
                "city_id" => 66,
            ),
            array(
                "id" => 889,
                "name" => "Talisayan",
                "city_id" => 66,
            ),
            array(
                "id" => 890,
                "name" => "Tanjung Redeb",
                "city_id" => 66,
            ),
            array(
                "id" => 891,
                "name" => "Teluk Bayur",
                "city_id" => 66,
            ),
            array(
                "id" => 892,
                "name" => "Aimando Padaido",
                "city_id" => 67,
            ),
            array(
                "id" => 893,
                "name" => "Andey (Andei)",
                "city_id" => 67,
            ),
            array(
                "id" => 894,
                "name" => "Biak Barat",
                "city_id" => 67,
            ),
            array(
                "id" => 895,
                "name" => "Biak Kota",
                "city_id" => 67,
            ),
            array(
                "id" => 896,
                "name" => "Biak Timur",
                "city_id" => 67,
            ),
            array(
                "id" => 897,
                "name" => "Biak Utara",
                "city_id" => 67,
            ),
            array(
                "id" => 898,
                "name" => "Bondifuar",
                "city_id" => 67,
            ),
            array(
                "id" => 899,
                "name" => "Bruyadori",
                "city_id" => 67,
            ),
            array(
                "id" => 900,
                "name" => "Numfor Barat",
                "city_id" => 67,
            ),
            array(
                "id" => 901,
                "name" => "Numfor Timur",
                "city_id" => 67,
            ),
            array(
                "id" => 902,
                "name" => "Oridek",
                "city_id" => 67,
            ),
            array(
                "id" => 903,
                "name" => "Orkeri",
                "city_id" => 67,
            ),
            array(
                "id" => 904,
                "name" => "Padaido",
                "city_id" => 67,
            ),
            array(
                "id" => 905,
                "name" => "Poiru",
                "city_id" => 67,
            ),
            array(
                "id" => 906,
                "name" => "Samofa",
                "city_id" => 67,
            ),
            array(
                "id" => 907,
                "name" => "Swandiwe",
                "city_id" => 67,
            ),
            array(
                "id" => 908,
                "name" => "Warsa",
                "city_id" => 67,
            ),
            array(
                "id" => 909,
                "name" => "Yawosi",
                "city_id" => 67,
            ),
            array(
                "id" => 910,
                "name" => "Yendidori",
                "city_id" => 67,
            ),
            array(
                "id" => 911,
                "name" => "Ambalawi",
                "city_id" => 68,
            ),
            array(
                "id" => 912,
                "name" => "Belo",
                "city_id" => 68,
            ),
            array(
                "id" => 913,
                "name" => "Bolo",
                "city_id" => 68,
            ),
            array(
                "id" => 914,
                "name" => "Donggo",
                "city_id" => 68,
            ),
            array(
                "id" => 915,
                "name" => "Lambitu",
                "city_id" => 68,
            ),
            array(
                "id" => 916,
                "name" => "Lambu",
                "city_id" => 68,
            ),
            array(
                "id" => 917,
                "name" => "Langgudu",
                "city_id" => 68,
            ),
            array(
                "id" => 918,
                "name" => "Madapangga",
                "city_id" => 68,
            ),
            array(
                "id" => 919,
                "name" => "Monta",
                "city_id" => 68,
            ),
            array(
                "id" => 920,
                "name" => "Palibelo",
                "city_id" => 68,
            ),
            array(
                "id" => 921,
                "name" => "Parado",
                "city_id" => 68,
            ),
            array(
                "id" => 922,
                "name" => "Sanggar",
                "city_id" => 68,
            ),
            array(
                "id" => 923,
                "name" => "Sape",
                "city_id" => 68,
            ),
            array(
                "id" => 924,
                "name" => "Soromandi",
                "city_id" => 68,
            ),
            array(
                "id" => 925,
                "name" => "Tambora",
                "city_id" => 68,
            ),
            array(
                "id" => 926,
                "name" => "Wawo",
                "city_id" => 68,
            ),
            array(
                "id" => 927,
                "name" => "Wera",
                "city_id" => 68,
            ),
            array(
                "id" => 928,
                "name" => "Woha",
                "city_id" => 68,
            ),
            array(
                "id" => 929,
                "name" => "Asakota",
                "city_id" => 69,
            ),
            array(
                "id" => 930,
                "name" => "Mpunda",
                "city_id" => 69,
            ),
            array(
                "id" => 931,
                "name" => "Raba",
                "city_id" => 69,
            ),
            array(
                "id" => 932,
                "name" => "Rasanae Barat",
                "city_id" => 69,
            ),
            array(
                "id" => 933,
                "name" => "Rasanae Timur",
                "city_id" => 69,
            ),
            array(
                "id" => 934,
                "name" => "Binjai Barat",
                "city_id" => 70,
            ),
            array(
                "id" => 935,
                "name" => "Binjai Kota",
                "city_id" => 70,
            ),
            array(
                "id" => 936,
                "name" => "Binjai Selatan",
                "city_id" => 70,
            ),
            array(
                "id" => 937,
                "name" => "Binjai Timur",
                "city_id" => 70,
            ),
            array(
                "id" => 938,
                "name" => "Binjai Utara",
                "city_id" => 70,
            ),
            array(
                "id" => 939,
                "name" => "Bintan Pesisir",
                "city_id" => 71,
            ),
            array(
                "id" => 940,
                "name" => "Bintan Timur",
                "city_id" => 71,
            ),
            array(
                "id" => 941,
                "name" => "Bintan Utara",
                "city_id" => 71,
            ),
            array(
                "id" => 942,
                "name" => "Gunung Kijang",
                "city_id" => 71,
            ),
            array(
                "id" => 943,
                "name" => "Mantang",
                "city_id" => 71,
            ),
            array(
                "id" => 944,
                "name" => "Seri/Sri Kuala Lobam",
                "city_id" => 71,
            ),
            array(
                "id" => 945,
                "name" => "Tambelan",
                "city_id" => 71,
            ),
            array(
                "id" => 946,
                "name" => "Teluk Bintan",
                "city_id" => 71,
            ),
            array(
                "id" => 947,
                "name" => "Teluk Sebong",
                "city_id" => 71,
            ),
            array(
                "id" => 948,
                "name" => "Toapaya",
                "city_id" => 71,
            ),
            array(
                "id" => 949,
                "name" => "Ganda Pura",
                "city_id" => 72,
            ),
            array(
                "id" => 950,
                "name" => "Jangka",
                "city_id" => 72,
            ),
            array(
                "id" => 951,
                "name" => "Jeumpa",
                "city_id" => 72,
            ),
            array(
                "id" => 952,
                "name" => "Jeunieb",
                "city_id" => 72,
            ),
            array(
                "id" => 953,
                "name" => "Juli",
                "city_id" => 72,
            ),
            array(
                "id" => 954,
                "name" => "Kota Juang",
                "city_id" => 72,
            ),
            array(
                "id" => 955,
                "name" => "Kuala",
                "city_id" => 72,
            ),
            array(
                "id" => 956,
                "name" => "Kuta Blang",
                "city_id" => 72,
            ),
            array(
                "id" => 957,
                "name" => "Makmur",
                "city_id" => 72,
            ),
            array(
                "id" => 958,
                "name" => "Pandrah",
                "city_id" => 72,
            ),
            array(
                "id" => 959,
                "name" => "Peudada",
                "city_id" => 72,
            ),
            array(
                "id" => 960,
                "name" => "Peulimbang (Plimbang)",
                "city_id" => 72,
            ),
            array(
                "id" => 961,
                "name" => "Peusangan",
                "city_id" => 72,
            ),
            array(
                "id" => 962,
                "name" => "Peusangan Selatan",
                "city_id" => 72,
            ),
            array(
                "id" => 963,
                "name" => "Peusangan Siblah Krueng",
                "city_id" => 72,
            ),
            array(
                "id" => 964,
                "name" => "Samalanga",
                "city_id" => 72,
            ),
            array(
                "id" => 965,
                "name" => "Simpang Mamplam",
                "city_id" => 72,
            ),
            array(
                "id" => 966,
                "name" => "Aertembaga (Bitung Timur)",
                "city_id" => 73,
            ),
            array(
                "id" => 967,
                "name" => "Girian",
                "city_id" => 73,
            ),
            array(
                "id" => 968,
                "name" => "Lembeh Selatan (Bitung Selatan)",
                "city_id" => 73,
            ),
            array(
                "id" => 969,
                "name" => "Lembeh Utara",
                "city_id" => 73,
            ),
            array(
                "id" => 970,
                "name" => "Madidir (Bitung Tengah)",
                "city_id" => 73,
            ),
            array(
                "id" => 971,
                "name" => "Maesa",
                "city_id" => 73,
            ),
            array(
                "id" => 972,
                "name" => "Matuari (Bitung Barat)",
                "city_id" => 73,
            ),
            array(
                "id" => 973,
                "name" => "Ranowulu (Bitung Utara)",
                "city_id" => 73,
            ),
            array(
                "id" => 974,
                "name" => "Bakung",
                "city_id" => 74,
            ),
            array(
                "id" => 975,
                "name" => "Binangun",
                "city_id" => 74,
            ),
            array(
                "id" => 976,
                "name" => "Doko",
                "city_id" => 74,
            ),
            array(
                "id" => 977,
                "name" => "Gandusari",
                "city_id" => 74,
            ),
            array(
                "id" => 978,
                "name" => "Garum",
                "city_id" => 74,
            ),
            array(
                "id" => 979,
                "name" => "Kademangan",
                "city_id" => 74,
            ),
            array(
                "id" => 980,
                "name" => "Kanigoro",
                "city_id" => 74,
            ),
            array(
                "id" => 981,
                "name" => "Kesamben",
                "city_id" => 74,
            ),
            array(
                "id" => 982,
                "name" => "Nglegok",
                "city_id" => 74,
            ),
            array(
                "id" => 983,
                "name" => "Panggungrejo",
                "city_id" => 74,
            ),
            array(
                "id" => 984,
                "name" => "Ponggok",
                "city_id" => 74,
            ),
            array(
                "id" => 985,
                "name" => "Sanan Kulon",
                "city_id" => 74,
            ),
            array(
                "id" => 986,
                "name" => "Selopuro",
                "city_id" => 74,
            ),
            array(
                "id" => 987,
                "name" => "Selorejo",
                "city_id" => 74,
            ),
            array(
                "id" => 988,
                "name" => "Srengat",
                "city_id" => 74,
            ),
            array(
                "id" => 989,
                "name" => "Sutojayan",
                "city_id" => 74,
            ),
            array(
                "id" => 990,
                "name" => "Talun",
                "city_id" => 74,
            ),
            array(
                "id" => 991,
                "name" => "Udanawu",
                "city_id" => 74,
            ),
            array(
                "id" => 992,
                "name" => "Wates",
                "city_id" => 74,
            ),
            array(
                "id" => 993,
                "name" => "Wlingi",
                "city_id" => 74,
            ),
            array(
                "id" => 994,
                "name" => "Wonodadi",
                "city_id" => 74,
            ),
            array(
                "id" => 995,
                "name" => "Wonotirto",
                "city_id" => 74,
            ),
            array(
                "id" => 996,
                "name" => "Kepanjen Kidul",
                "city_id" => 75,
            ),
            array(
                "id" => 997,
                "name" => "Sanan Wetan",
                "city_id" => 75,
            ),
            array(
                "id" => 998,
                "name" => "Sukorejo",
                "city_id" => 75,
            ),
            array(
                "id" => 999,
                "name" => "Banjarejo",
                "city_id" => 76,
            ),
            array(
                "id" => 1000,
                "name" => "Blora kota",
                "city_id" => 76,
            ),
            array(
                "id" => 1001,
                "name" => "Bogorejo",
                "city_id" => 76,
            ),
            array(
                "id" => 1002,
                "name" => "Cepu",
                "city_id" => 76,
            ),
            array(
                "id" => 1003,
                "name" => "Japah",
                "city_id" => 76,
            ),
            array(
                "id" => 1004,
                "name" => "Jati",
                "city_id" => 76,
            ),
            array(
                "id" => 1005,
                "name" => "Jepon",
                "city_id" => 76,
            ),
            array(
                "id" => 1006,
                "name" => "Jiken",
                "city_id" => 76,
            ),
            array(
                "id" => 1007,
                "name" => "Kedungtuban",
                "city_id" => 76,
            ),
            array(
                "id" => 1008,
                "name" => "Kradenan",
                "city_id" => 76,
            ),
            array(
                "id" => 1009,
                "name" => "Kunduran",
                "city_id" => 76,
            ),
            array(
                "id" => 1010,
                "name" => "Ngawen",
                "city_id" => 76,
            ),
            array(
                "id" => 1011,
                "name" => "Randublatung",
                "city_id" => 76,
            ),
            array(
                "id" => 1012,
                "name" => "Sambong",
                "city_id" => 76,
            ),
            array(
                "id" => 1013,
                "name" => "Todanan",
                "city_id" => 76,
            ),
            array(
                "id" => 1014,
                "name" => "Tunjungan",
                "city_id" => 76,
            ),
            array(
                "id" => 1015,
                "name" => "Botumoita (Botumoito)",
                "city_id" => 77,
            ),
            array(
                "id" => 1016,
                "name" => "Dulupi",
                "city_id" => 77,
            ),
            array(
                "id" => 1017,
                "name" => "Mananggu",
                "city_id" => 77,
            ),
            array(
                "id" => 1018,
                "name" => "Paguyaman",
                "city_id" => 77,
            ),
            array(
                "id" => 1019,
                "name" => "Paguyaman Pantai",
                "city_id" => 77,
            ),
            array(
                "id" => 1020,
                "name" => "Tilamuta",
                "city_id" => 77,
            ),
            array(
                "id" => 1021,
                "name" => "Wonosari",
                "city_id" => 77,
            ),
            array(
                "id" => 1022,
                "name" => "Babakan Madang",
                "city_id" => 78,
            ),
            array(
                "id" => 1023,
                "name" => "Bojonggede",
                "city_id" => 78,
            ),
            array(
                "id" => 1024,
                "name" => "Caringin",
                "city_id" => 78,
            ),
            array(
                "id" => 1025,
                "name" => "Cariu",
                "city_id" => 78,
            ),
            array(
                "id" => 1026,
                "name" => "Ciampea",
                "city_id" => 78,
            ),
            array(
                "id" => 1027,
                "name" => "Ciawi",
                "city_id" => 78,
            ),
            array(
                "id" => 1028,
                "name" => "Cibinong",
                "city_id" => 78,
            ),
            array(
                "id" => 1029,
                "name" => "Cibungbulang",
                "city_id" => 78,
            ),
            array(
                "id" => 1030,
                "name" => "Cigombong",
                "city_id" => 78,
            ),
            array(
                "id" => 1031,
                "name" => "Cigudeg",
                "city_id" => 78,
            ),
            array(
                "id" => 1032,
                "name" => "Cijeruk",
                "city_id" => 78,
            ),
            array(
                "id" => 1033,
                "name" => "Cileungsi",
                "city_id" => 78,
            ),
            array(
                "id" => 1034,
                "name" => "Ciomas",
                "city_id" => 78,
            ),
            array(
                "id" => 1035,
                "name" => "Cisarua",
                "city_id" => 78,
            ),
            array(
                "id" => 1036,
                "name" => "Ciseeng",
                "city_id" => 78,
            ),
            array(
                "id" => 1037,
                "name" => "Citeureup",
                "city_id" => 78,
            ),
            array(
                "id" => 1038,
                "name" => "Dramaga",
                "city_id" => 78,
            ),
            array(
                "id" => 1039,
                "name" => "Gunung Putri",
                "city_id" => 78,
            ),
            array(
                "id" => 1040,
                "name" => "Gunung Sindur",
                "city_id" => 78,
            ),
            array(
                "id" => 1041,
                "name" => "Jasinga",
                "city_id" => 78,
            ),
            array(
                "id" => 1042,
                "name" => "Jonggol",
                "city_id" => 78,
            ),
            array(
                "id" => 1043,
                "name" => "Kemang",
                "city_id" => 78,
            ),
            array(
                "id" => 1044,
                "name" => "Klapa Nunggal (Kelapa Nunggal)",
                "city_id" => 78,
            ),
            array(
                "id" => 1045,
                "name" => "Leuwiliang",
                "city_id" => 78,
            ),
            array(
                "id" => 1046,
                "name" => "Leuwisadeng",
                "city_id" => 78,
            ),
            array(
                "id" => 1047,
                "name" => "Megamendung",
                "city_id" => 78,
            ),
            array(
                "id" => 1048,
                "name" => "Nanggung",
                "city_id" => 78,
            ),
            array(
                "id" => 1049,
                "name" => "Pamijahan",
                "city_id" => 78,
            ),
            array(
                "id" => 1050,
                "name" => "Parung",
                "city_id" => 78,
            ),
            array(
                "id" => 1051,
                "name" => "Parung Panjang",
                "city_id" => 78,
            ),
            array(
                "id" => 1052,
                "name" => "Ranca Bungur",
                "city_id" => 78,
            ),
            array(
                "id" => 1053,
                "name" => "Rumpin",
                "city_id" => 78,
            ),
            array(
                "id" => 1054,
                "name" => "Sukajaya",
                "city_id" => 78,
            ),
            array(
                "id" => 1055,
                "name" => "Sukamakmur",
                "city_id" => 78,
            ),
            array(
                "id" => 1056,
                "name" => "Sukaraja",
                "city_id" => 78,
            ),
            array(
                "id" => 1057,
                "name" => "Tajurhalang",
                "city_id" => 78,
            ),
            array(
                "id" => 1058,
                "name" => "Tamansari",
                "city_id" => 78,
            ),
            array(
                "id" => 1059,
                "name" => "Tanjungsari",
                "city_id" => 78,
            ),
            array(
                "id" => 1060,
                "name" => "Tenjo",
                "city_id" => 78,
            ),
            array(
                "id" => 1061,
                "name" => "Tenjolaya",
                "city_id" => 78,
            ),
            array(
                "id" => 1062,
                "name" => "Bogor Barat - Kota",
                "city_id" => 79,
            ),
            array(
                "id" => 1063,
                "name" => "Bogor Selatan - Kota",
                "city_id" => 79,
            ),
            array(
                "id" => 1064,
                "name" => "Bogor Tengah - Kota",
                "city_id" => 79,
            ),
            array(
                "id" => 1065,
                "name" => "Bogor Timur - Kota",
                "city_id" => 79,
            ),
            array(
                "id" => 1066,
                "name" => "Bogor Utara - Kota",
                "city_id" => 79,
            ),
            array(
                "id" => 1067,
                "name" => "Tanah Sereal",
                "city_id" => 79,
            ),
            array(
                "id" => 1068,
                "name" => "Balen",
                "city_id" => 80,
            ),
            array(
                "id" => 1069,
                "name" => "Baureno",
                "city_id" => 80,
            ),
            array(
                "id" => 1070,
                "name" => "Bojonegoro",
                "city_id" => 80,
            ),
            array(
                "id" => 1071,
                "name" => "Bubulan",
                "city_id" => 80,
            ),
            array(
                "id" => 1072,
                "name" => "Dander",
                "city_id" => 80,
            ),
            array(
                "id" => 1073,
                "name" => "Gayam",
                "city_id" => 80,
            ),
            array(
                "id" => 1074,
                "name" => "Gondang",
                "city_id" => 80,
            ),
            array(
                "id" => 1075,
                "name" => "Kalitidu",
                "city_id" => 80,
            ),
            array(
                "id" => 1076,
                "name" => "Kanor",
                "city_id" => 80,
            ),
            array(
                "id" => 1077,
                "name" => "Kapas",
                "city_id" => 80,
            ),
            array(
                "id" => 1078,
                "name" => "Kasiman",
                "city_id" => 80,
            ),
            array(
                "id" => 1079,
                "name" => "Kedewan",
                "city_id" => 80,
            ),
            array(
                "id" => 1080,
                "name" => "Kedungadem",
                "city_id" => 80,
            ),
            array(
                "id" => 1081,
                "name" => "Kepoh Baru",
                "city_id" => 80,
            ),
            array(
                "id" => 1082,
                "name" => "Malo",
                "city_id" => 80,
            ),
            array(
                "id" => 1083,
                "name" => "Margomulyo",
                "city_id" => 80,
            ),
            array(
                "id" => 1084,
                "name" => "Ngambon",
                "city_id" => 80,
            ),
            array(
                "id" => 1085,
                "name" => "Ngasem",
                "city_id" => 80,
            ),
            array(
                "id" => 1086,
                "name" => "Ngraho",
                "city_id" => 80,
            ),
            array(
                "id" => 1087,
                "name" => "Padangan",
                "city_id" => 80,
            ),
            array(
                "id" => 1088,
                "name" => "Purwosari",
                "city_id" => 80,
            ),
            array(
                "id" => 1089,
                "name" => "Sekar",
                "city_id" => 80,
            ),
            array(
                "id" => 1090,
                "name" => "Sugihwaras",
                "city_id" => 80,
            ),
            array(
                "id" => 1091,
                "name" => "Sukosewu",
                "city_id" => 80,
            ),
            array(
                "id" => 1092,
                "name" => "Sumberrejo",
                "city_id" => 80,
            ),
            array(
                "id" => 1093,
                "name" => "Tambakrejo",
                "city_id" => 80,
            ),
            array(
                "id" => 1094,
                "name" => "Temayang",
                "city_id" => 80,
            ),
            array(
                "id" => 1095,
                "name" => "Trucuk",
                "city_id" => 80,
            ),
            array(
                "id" => 1096,
                "name" => "Bilalang",
                "city_id" => 81,
            ),
            array(
                "id" => 1097,
                "name" => "Bolaang",
                "city_id" => 81,
            ),
            array(
                "id" => 1098,
                "name" => "Bolaang Timur",
                "city_id" => 81,
            ),
            array(
                "id" => 1099,
                "name" => "Dumoga",
                "city_id" => 81,
            ),
            array(
                "id" => 1100,
                "name" => "Dumoga Barat",
                "city_id" => 81,
            ),
            array(
                "id" => 1101,
                "name" => "Dumoga Tengah",
                "city_id" => 81,
            ),
            array(
                "id" => 1102,
                "name" => "Dumoga Tenggara",
                "city_id" => 81,
            ),
            array(
                "id" => 1103,
                "name" => "Dumoga Timur",
                "city_id" => 81,
            ),
            array(
                "id" => 1104,
                "name" => "Dumoga Utara",
                "city_id" => 81,
            ),
            array(
                "id" => 1105,
                "name" => "Lolak",
                "city_id" => 81,
            ),
            array(
                "id" => 1106,
                "name" => "Lolayan",
                "city_id" => 81,
            ),
            array(
                "id" => 1107,
                "name" => "Passi Barat",
                "city_id" => 81,
            ),
            array(
                "id" => 1108,
                "name" => "Passi Timur",
                "city_id" => 81,
            ),
            array(
                "id" => 1109,
                "name" => "Poigar",
                "city_id" => 81,
            ),
            array(
                "id" => 1110,
                "name" => "Sangtombolang",
                "city_id" => 81,
            ),
            array(
                "id" => 1111,
                "name" => "Bolaang Uki",
                "city_id" => 82,
            ),
            array(
                "id" => 1112,
                "name" => "Pinolosian",
                "city_id" => 82,
            ),
            array(
                "id" => 1113,
                "name" => "Pinolosian Tengah",
                "city_id" => 82,
            ),
            array(
                "id" => 1114,
                "name" => "Pinolosian Timur",
                "city_id" => 82,
            ),
            array(
                "id" => 1115,
                "name" => "Posigadan",
                "city_id" => 82,
            ),
            array(
                "id" => 1116,
                "name" => "Kotabunan",
                "city_id" => 83,
            ),
            array(
                "id" => 1117,
                "name" => "Modayag",
                "city_id" => 83,
            ),
            array(
                "id" => 1118,
                "name" => "Modayag Barat",
                "city_id" => 83,
            ),
            array(
                "id" => 1119,
                "name" => "Nuangan",
                "city_id" => 83,
            ),
            array(
                "id" => 1120,
                "name" => "Tutuyan",
                "city_id" => 83,
            ),
            array(
                "id" => 1121,
                "name" => "Bintauna",
                "city_id" => 84,
            ),
            array(
                "id" => 1122,
                "name" => "Bolang Itang Barat",
                "city_id" => 84,
            ),
            array(
                "id" => 1123,
                "name" => "Bolang Itang Timur",
                "city_id" => 84,
            ),
            array(
                "id" => 1124,
                "name" => "Kaidipang",
                "city_id" => 84,
            ),
            array(
                "id" => 1125,
                "name" => "Pinogaluman",
                "city_id" => 84,
            ),
            array(
                "id" => 1126,
                "name" => "Sangkub",
                "city_id" => 84,
            ),
            array(
                "id" => 1127,
                "name" => "Kabaena",
                "city_id" => 85,
            ),
            array(
                "id" => 1128,
                "name" => "Kabaena Barat",
                "city_id" => 85,
            ),
            array(
                "id" => 1129,
                "name" => "Kabaena Selatan",
                "city_id" => 85,
            ),
            array(
                "id" => 1130,
                "name" => "Kabaena Tengah",
                "city_id" => 85,
            ),
            array(
                "id" => 1131,
                "name" => "Kabaena Timur",
                "city_id" => 85,
            ),
            array(
                "id" => 1132,
                "name" => "Kabaena Utara",
                "city_id" => 85,
            ),
            array(
                "id" => 1133,
                "name" => "Kepulauan Masaloka Raya",
                "city_id" => 85,
            ),
            array(
                "id" => 1134,
                "name" => "Lentarai Jaya S. (Lantari Jaya)",
                "city_id" => 85,
            ),
            array(
                "id" => 1135,
                "name" => "Mata Oleo",
                "city_id" => 85,
            ),
            array(
                "id" => 1136,
                "name" => "Mata Usu",
                "city_id" => 85,
            ),
            array(
                "id" => 1137,
                "name" => "Poleang",
                "city_id" => 85,
            ),
            array(
                "id" => 1138,
                "name" => "Poleang Barat",
                "city_id" => 85,
            ),
            array(
                "id" => 1139,
                "name" => "Poleang Selatan",
                "city_id" => 85,
            ),
            array(
                "id" => 1140,
                "name" => "Poleang Tengah",
                "city_id" => 85,
            ),
            array(
                "id" => 1141,
                "name" => "Poleang Tenggara",
                "city_id" => 85,
            ),
            array(
                "id" => 1142,
                "name" => "Poleang Timur",
                "city_id" => 85,
            ),
            array(
                "id" => 1143,
                "name" => "Poleang Utara",
                "city_id" => 85,
            ),
            array(
                "id" => 1144,
                "name" => "Rarowatu",
                "city_id" => 85,
            ),
            array(
                "id" => 1145,
                "name" => "Rarowatu Utara",
                "city_id" => 85,
            ),
            array(
                "id" => 1146,
                "name" => "Rumbia",
                "city_id" => 85,
            ),
            array(
                "id" => 1147,
                "name" => "Rumbia Tengah",
                "city_id" => 85,
            ),
            array(
                "id" => 1148,
                "name" => "Tontonunu (Tontonuwu)",
                "city_id" => 85,
            ),
            array(
                "id" => 1149,
                "name" => "Binakal",
                "city_id" => 86,
            ),
            array(
                "id" => 1150,
                "name" => "Bondowoso",
                "city_id" => 86,
            ),
            array(
                "id" => 1151,
                "name" => "Botolinggo",
                "city_id" => 86,
            ),
            array(
                "id" => 1152,
                "name" => "Cermee",
                "city_id" => 86,
            ),
            array(
                "id" => 1153,
                "name" => "Curahdami",
                "city_id" => 86,
            ),
            array(
                "id" => 1154,
                "name" => "Grujugan",
                "city_id" => 86,
            ),
            array(
                "id" => 1155,
                "name" => "Jambe Sari Darus Sholah",
                "city_id" => 86,
            ),
            array(
                "id" => 1156,
                "name" => "Klabang",
                "city_id" => 86,
            ),
            array(
                "id" => 1157,
                "name" => "Maesan",
                "city_id" => 86,
            ),
            array(
                "id" => 1158,
                "name" => "Pakem",
                "city_id" => 86,
            ),
            array(
                "id" => 1159,
                "name" => "Prajekan",
                "city_id" => 86,
            ),
            array(
                "id" => 1160,
                "name" => "Pujer",
                "city_id" => 86,
            ),
            array(
                "id" => 1161,
                "name" => "Sempol",
                "city_id" => 86,
            ),
            array(
                "id" => 1162,
                "name" => "Sukosari",
                "city_id" => 86,
            ),
            array(
                "id" => 1163,
                "name" => "Sumber Wringin",
                "city_id" => 86,
            ),
            array(
                "id" => 1164,
                "name" => "Taman Krocok",
                "city_id" => 86,
            ),
            array(
                "id" => 1165,
                "name" => "Tamanan",
                "city_id" => 86,
            ),
            array(
                "id" => 1166,
                "name" => "Tapen",
                "city_id" => 86,
            ),
            array(
                "id" => 1167,
                "name" => "Tegalampel",
                "city_id" => 86,
            ),
            array(
                "id" => 1168,
                "name" => "Tenggarang",
                "city_id" => 86,
            ),
            array(
                "id" => 1169,
                "name" => "Tlogosari",
                "city_id" => 86,
            ),
            array(
                "id" => 1170,
                "name" => "Wonosari",
                "city_id" => 86,
            ),
            array(
                "id" => 1171,
                "name" => "Wringin",
                "city_id" => 86,
            ),
            array(
                "id" => 1172,
                "name" => "Ajangale",
                "city_id" => 87,
            ),
            array(
                "id" => 1173,
                "name" => "Amali",
                "city_id" => 87,
            ),
            array(
                "id" => 1174,
                "name" => "Awangpone",
                "city_id" => 87,
            ),
            array(
                "id" => 1175,
                "name" => "Barebbo",
                "city_id" => 87,
            ),
            array(
                "id" => 1176,
                "name" => "Bengo",
                "city_id" => 87,
            ),
            array(
                "id" => 1177,
                "name" => "Bontocani",
                "city_id" => 87,
            ),
            array(
                "id" => 1178,
                "name" => "Cenrana",
                "city_id" => 87,
            ),
            array(
                "id" => 1179,
                "name" => "Cina",
                "city_id" => 87,
            ),
            array(
                "id" => 1180,
                "name" => "Dua Boccoe",
                "city_id" => 87,
            ),
            array(
                "id" => 1181,
                "name" => "Kahu",
                "city_id" => 87,
            ),
            array(
                "id" => 1182,
                "name" => "Kajuara",
                "city_id" => 87,
            ),
            array(
                "id" => 1183,
                "name" => "Lamuru",
                "city_id" => 87,
            ),
            array(
                "id" => 1184,
                "name" => "Lappariaja",
                "city_id" => 87,
            ),
            array(
                "id" => 1185,
                "name" => "Libureng",
                "city_id" => 87,
            ),
            array(
                "id" => 1186,
                "name" => "Mare",
                "city_id" => 87,
            ),
            array(
                "id" => 1187,
                "name" => "Palakka",
                "city_id" => 87,
            ),
            array(
                "id" => 1188,
                "name" => "Patimpeng",
                "city_id" => 87,
            ),
            array(
                "id" => 1189,
                "name" => "Ponre",
                "city_id" => 87,
            ),
            array(
                "id" => 1190,
                "name" => "Salomekko",
                "city_id" => 87,
            ),
            array(
                "id" => 1191,
                "name" => "Sibulue",
                "city_id" => 87,
            ),
            array(
                "id" => 1192,
                "name" => "Tanete Riattang",
                "city_id" => 87,
            ),
            array(
                "id" => 1193,
                "name" => "Tanete Riattang Barat",
                "city_id" => 87,
            ),
            array(
                "id" => 1194,
                "name" => "Tanete Riattang Timur",
                "city_id" => 87,
            ),
            array(
                "id" => 1195,
                "name" => "Tellu Limpoe",
                "city_id" => 87,
            ),
            array(
                "id" => 1196,
                "name" => "Tellu Siattinge",
                "city_id" => 87,
            ),
            array(
                "id" => 1197,
                "name" => "Tonra",
                "city_id" => 87,
            ),
            array(
                "id" => 1198,
                "name" => "Ulaweng",
                "city_id" => 87,
            ),
            array(
                "id" => 1199,
                "name" => "Bone",
                "city_id" => 88,
            ),
            array(
                "id" => 1200,
                "name" => "Bone Raya",
                "city_id" => 88,
            ),
            array(
                "id" => 1201,
                "name" => "Bonepantai",
                "city_id" => 88,
            ),
            array(
                "id" => 1202,
                "name" => "Botu Pingge",
                "city_id" => 88,
            ),
            array(
                "id" => 1203,
                "name" => "Bulango Selatan",
                "city_id" => 88,
            ),
            array(
                "id" => 1204,
                "name" => "Bulango Timur",
                "city_id" => 88,
            ),
            array(
                "id" => 1205,
                "name" => "Bulango Ulu",
                "city_id" => 88,
            ),
            array(
                "id" => 1206,
                "name" => "Bulango Utara",
                "city_id" => 88,
            ),
            array(
                "id" => 1207,
                "name" => "Bulawa",
                "city_id" => 88,
            ),
            array(
                "id" => 1208,
                "name" => "Kabila",
                "city_id" => 88,
            ),
            array(
                "id" => 1209,
                "name" => "Kabila Bone",
                "city_id" => 88,
            ),
            array(
                "id" => 1210,
                "name" => "Pinogu",
                "city_id" => 88,
            ),
            array(
                "id" => 1211,
                "name" => "Suwawa",
                "city_id" => 88,
            ),
            array(
                "id" => 1212,
                "name" => "Suwawa Selatan",
                "city_id" => 88,
            ),
            array(
                "id" => 1213,
                "name" => "Suwawa Tengah",
                "city_id" => 88,
            ),
            array(
                "id" => 1214,
                "name" => "Suwawa Timur",
                "city_id" => 88,
            ),
            array(
                "id" => 1215,
                "name" => "Tapa",
                "city_id" => 88,
            ),
            array(
                "id" => 1216,
                "name" => "Tilongkabila",
                "city_id" => 88,
            ),
            array(
                "id" => 1217,
                "name" => "Bontang Barat",
                "city_id" => 89,
            ),
            array(
                "id" => 1218,
                "name" => "Bontang Selatan",
                "city_id" => 89,
            ),
            array(
                "id" => 1219,
                "name" => "Bontang Utara",
                "city_id" => 89,
            ),
            array(
                "id" => 1220,
                "name" => "Ambatkwi (Ambatkui)",
                "city_id" => 90,
            ),
            array(
                "id" => 1221,
                "name" => "Arimop",
                "city_id" => 90,
            ),
            array(
                "id" => 1222,
                "name" => "Bomakia",
                "city_id" => 90,
            ),
            array(
                "id" => 1223,
                "name" => "Firiwage",
                "city_id" => 90,
            ),
            array(
                "id" => 1224,
                "name" => "Fofi",
                "city_id" => 90,
            ),
            array(
                "id" => 1225,
                "name" => "Iniyandit",
                "city_id" => 90,
            ),
            array(
                "id" => 1226,
                "name" => "Jair",
                "city_id" => 90,
            ),
            array(
                "id" => 1227,
                "name" => "Kawagit",
                "city_id" => 90,
            ),
            array(
                "id" => 1228,
                "name" => "Ki",
                "city_id" => 90,
            ),
            array(
                "id" => 1229,
                "name" => "Kombay",
                "city_id" => 90,
            ),
            array(
                "id" => 1230,
                "name" => "Kombut",
                "city_id" => 90,
            ),
            array(
                "id" => 1231,
                "name" => "Kouh",
                "city_id" => 90,
            ),
            array(
                "id" => 1232,
                "name" => "Mandobo",
                "city_id" => 90,
            ),
            array(
                "id" => 1233,
                "name" => "Manggelum",
                "city_id" => 90,
            ),
            array(
                "id" => 1234,
                "name" => "Mindiptana",
                "city_id" => 90,
            ),
            array(
                "id" => 1235,
                "name" => "Ninati",
                "city_id" => 90,
            ),
            array(
                "id" => 1236,
                "name" => "Sesnuk",
                "city_id" => 90,
            ),
            array(
                "id" => 1237,
                "name" => "Subur",
                "city_id" => 90,
            ),
            array(
                "id" => 1238,
                "name" => "Waropko",
                "city_id" => 90,
            ),
            array(
                "id" => 1239,
                "name" => "Yaniruma",
                "city_id" => 90,
            ),
            array(
                "id" => 1240,
                "name" => "Ampel",
                "city_id" => 91,
            ),
            array(
                "id" => 1241,
                "name" => "Andong",
                "city_id" => 91,
            ),
            array(
                "id" => 1242,
                "name" => "Banyudono",
                "city_id" => 91,
            ),
            array(
                "id" => 1243,
                "name" => "Boyolali",
                "city_id" => 91,
            ),
            array(
                "id" => 1244,
                "name" => "Cepogo",
                "city_id" => 91,
            ),
            array(
                "id" => 1245,
                "name" => "Juwangi",
                "city_id" => 91,
            ),
            array(
                "id" => 1246,
                "name" => "Karanggede",
                "city_id" => 91,
            ),
            array(
                "id" => 1247,
                "name" => "Kemusu",
                "city_id" => 91,
            ),
            array(
                "id" => 1248,
                "name" => "Klego",
                "city_id" => 91,
            ),
            array(
                "id" => 1249,
                "name" => "Mojosongo",
                "city_id" => 91,
            ),
            array(
                "id" => 1250,
                "name" => "Musuk",
                "city_id" => 91,
            ),
            array(
                "id" => 1251,
                "name" => "Ngemplak",
                "city_id" => 91,
            ),
            array(
                "id" => 1252,
                "name" => "Nogosari",
                "city_id" => 91,
            ),
            array(
                "id" => 1253,
                "name" => "Sambi",
                "city_id" => 91,
            ),
            array(
                "id" => 1254,
                "name" => "Sawit",
                "city_id" => 91,
            ),
            array(
                "id" => 1255,
                "name" => "Selo",
                "city_id" => 91,
            ),
            array(
                "id" => 1256,
                "name" => "Simo",
                "city_id" => 91,
            ),
            array(
                "id" => 1257,
                "name" => "Teras",
                "city_id" => 91,
            ),
            array(
                "id" => 1258,
                "name" => "Wonosegoro",
                "city_id" => 91,
            ),
            array(
                "id" => 1259,
                "name" => "Banjarharjo",
                "city_id" => 92,
            ),
            array(
                "id" => 1260,
                "name" => "Bantarkawung",
                "city_id" => 92,
            ),
            array(
                "id" => 1261,
                "name" => "Brebes",
                "city_id" => 92,
            ),
            array(
                "id" => 1262,
                "name" => "Bulakamba",
                "city_id" => 92,
            ),
            array(
                "id" => 1263,
                "name" => "Bumiayu",
                "city_id" => 92,
            ),
            array(
                "id" => 1264,
                "name" => "Jatibarang",
                "city_id" => 92,
            ),
            array(
                "id" => 1265,
                "name" => "Kersana",
                "city_id" => 92,
            ),
            array(
                "id" => 1266,
                "name" => "Ketanggungan",
                "city_id" => 92,
            ),
            array(
                "id" => 1267,
                "name" => "Larangan",
                "city_id" => 92,
            ),
            array(
                "id" => 1268,
                "name" => "Losari",
                "city_id" => 92,
            ),
            array(
                "id" => 1269,
                "name" => "Paguyangan",
                "city_id" => 92,
            ),
            array(
                "id" => 1270,
                "name" => "Salem",
                "city_id" => 92,
            ),
            array(
                "id" => 1271,
                "name" => "Sirampog",
                "city_id" => 92,
            ),
            array(
                "id" => 1272,
                "name" => "Songgom",
                "city_id" => 92,
            ),
            array(
                "id" => 1273,
                "name" => "Tanjung",
                "city_id" => 92,
            ),
            array(
                "id" => 1274,
                "name" => "Tonjong",
                "city_id" => 92,
            ),
            array(
                "id" => 1275,
                "name" => "Wanasari",
                "city_id" => 92,
            ),
            array(
                "id" => 1276,
                "name" => "Aur Birugo Tigo Baleh",
                "city_id" => 93,
            ),
            array(
                "id" => 1277,
                "name" => "Guguk Panjang (Guguak Panjang)",
                "city_id" => 93,
            ),
            array(
                "id" => 1278,
                "name" => "Mandiangin Koto Selayan",
                "city_id" => 93,
            ),
            array(
                "id" => 1279,
                "name" => "Banjar",
                "city_id" => 94,
            ),
            array(
                "id" => 1280,
                "name" => "Buleleng",
                "city_id" => 94,
            ),
            array(
                "id" => 1281,
                "name" => "Busungbiu",
                "city_id" => 94,
            ),
            array(
                "id" => 1282,
                "name" => "Gerokgak",
                "city_id" => 94,
            ),
            array(
                "id" => 1283,
                "name" => "Kubutambahan",
                "city_id" => 94,
            ),
            array(
                "id" => 1284,
                "name" => "Sawan",
                "city_id" => 94,
            ),
            array(
                "id" => 1285,
                "name" => "Seririt",
                "city_id" => 94,
            ),
            array(
                "id" => 1286,
                "name" => "Sukasada",
                "city_id" => 94,
            ),
            array(
                "id" => 1287,
                "name" => "Tejakula",
                "city_id" => 94,
            ),
            array(
                "id" => 1288,
                "name" => "Bonto Bahari",
                "city_id" => 95,
            ),
            array(
                "id" => 1289,
                "name" => "Bontotiro",
                "city_id" => 95,
            ),
            array(
                "id" => 1290,
                "name" => "Bulukumba (Bulukumpa)",
                "city_id" => 95,
            ),
            array(
                "id" => 1291,
                "name" => "Gantorang/Gantarang (Gangking)",
                "city_id" => 95,
            ),
            array(
                "id" => 1292,
                "name" => "Hero Lange-Lange (Herlang)",
                "city_id" => 95,
            ),
            array(
                "id" => 1293,
                "name" => "Kajang",
                "city_id" => 95,
            ),
            array(
                "id" => 1294,
                "name" => "Kindang",
                "city_id" => 95,
            ),
            array(
                "id" => 1295,
                "name" => "Rilau Ale",
                "city_id" => 95,
            ),
            array(
                "id" => 1296,
                "name" => "Ujung Bulu",
                "city_id" => 95,
            ),
            array(
                "id" => 1297,
                "name" => "Ujung Loe",
                "city_id" => 95,
            ),
            array(
                "id" => 1298,
                "name" => "Peso",
                "city_id" => 96,
            ),
            array(
                "id" => 1299,
                "name" => "Peso Hilir/Ilir",
                "city_id" => 96,
            ),
            array(
                "id" => 1300,
                "name" => "Pulau Bunyu",
                "city_id" => 96,
            ),
            array(
                "id" => 1301,
                "name" => "Sekatak",
                "city_id" => 96,
            ),
            array(
                "id" => 1302,
                "name" => "Tanjung Palas",
                "city_id" => 96,
            ),
            array(
                "id" => 1303,
                "name" => "Tanjung Palas Barat",
                "city_id" => 96,
            ),
            array(
                "id" => 1304,
                "name" => "Tanjung Palas Tengah",
                "city_id" => 96,
            ),
            array(
                "id" => 1305,
                "name" => "Tanjung Palas Timur",
                "city_id" => 96,
            ),
            array(
                "id" => 1306,
                "name" => "Tanjung Palas Utara",
                "city_id" => 96,
            ),
            array(
                "id" => 1307,
                "name" => "Tanjung Selor",
                "city_id" => 96,
            ),
            array(
                "id" => 1308,
                "name" => "Bathin II Babeko",
                "city_id" => 97,
            ),
            array(
                "id" => 1309,
                "name" => "Bathin II Pelayang",
                "city_id" => 97,
            ),
            array(
                "id" => 1310,
                "name" => "Bathin III",
                "city_id" => 97,
            ),
            array(
                "id" => 1311,
                "name" => "Bathin III Ulu",
                "city_id" => 97,
            ),
            array(
                "id" => 1312,
                "name" => "Bungo Dani",
                "city_id" => 97,
            ),
            array(
                "id" => 1313,
                "name" => "Jujuhan",
                "city_id" => 97,
            ),
            array(
                "id" => 1314,
                "name" => "Jujuhan Ilir",
                "city_id" => 97,
            ),
            array(
                "id" => 1315,
                "name" => "Limbur Lubuk Mengkuang",
                "city_id" => 97,
            ),
            array(
                "id" => 1316,
                "name" => "Muko-Muko Batin VII",
                "city_id" => 97,
            ),
            array(
                "id" => 1317,
                "name" => "Pasar Muara Bungo",
                "city_id" => 97,
            ),
            array(
                "id" => 1318,
                "name" => "Pelepat",
                "city_id" => 97,
            ),
            array(
                "id" => 1319,
                "name" => "Pelepat Ilir",
                "city_id" => 97,
            ),
            array(
                "id" => 1320,
                "name" => "Rantau Pandan",
                "city_id" => 97,
            ),
            array(
                "id" => 1321,
                "name" => "Rimbo Tengah",
                "city_id" => 97,
            ),
            array(
                "id" => 1322,
                "name" => "Tanah Sepenggal",
                "city_id" => 97,
            ),
            array(
                "id" => 1323,
                "name" => "Tanah Sepenggal Lintas",
                "city_id" => 97,
            ),
            array(
                "id" => 1324,
                "name" => "Tanah Tumbuh",
                "city_id" => 97,
            ),
            array(
                "id" => 1325,
                "name" => "Biau",
                "city_id" => 98,
            ),
            array(
                "id" => 1326,
                "name" => "Bokat",
                "city_id" => 98,
            ),
            array(
                "id" => 1327,
                "name" => "Bukal",
                "city_id" => 98,
            ),
            array(
                "id" => 1328,
                "name" => "Bunobogu",
                "city_id" => 98,
            ),
            array(
                "id" => 1329,
                "name" => "Gadung",
                "city_id" => 98,
            ),
            array(
                "id" => 1330,
                "name" => "Karamat",
                "city_id" => 98,
            ),
            array(
                "id" => 1331,
                "name" => "Lakea (Lipunoto)",
                "city_id" => 98,
            ),
            array(
                "id" => 1332,
                "name" => "Momunu",
                "city_id" => 98,
            ),
            array(
                "id" => 1333,
                "name" => "Paleleh",
                "city_id" => 98,
            ),
            array(
                "id" => 1334,
                "name" => "Paleleh Barat",
                "city_id" => 98,
            ),
            array(
                "id" => 1335,
                "name" => "Tiloan",
                "city_id" => 98,
            ),
            array(
                "id" => 1336,
                "name" => "Airbuaya",
                "city_id" => 99,
            ),
            array(
                "id" => 1337,
                "name" => "Batabual",
                "city_id" => 99,
            ),
            array(
                "id" => 1338,
                "name" => "Fena Leisela",
                "city_id" => 99,
            ),
            array(
                "id" => 1339,
                "name" => "Lilialy",
                "city_id" => 99,
            ),
            array(
                "id" => 1340,
                "name" => "Lolong Guba",
                "city_id" => 99,
            ),
            array(
                "id" => 1341,
                "name" => "Namlea",
                "city_id" => 99,
            ),
            array(
                "id" => 1342,
                "name" => "Teluk Kaiely",
                "city_id" => 99,
            ),
            array(
                "id" => 1343,
                "name" => "Waeapo",
                "city_id" => 99,
            ),
            array(
                "id" => 1344,
                "name" => "Waelata",
                "city_id" => 99,
            ),
            array(
                "id" => 1345,
                "name" => "Waplau",
                "city_id" => 99,
            ),
            array(
                "id" => 1346,
                "name" => "Ambalau",
                "city_id" => 100,
            ),
            array(
                "id" => 1347,
                "name" => "Fena Fafan",
                "city_id" => 100,
            ),
            array(
                "id" => 1348,
                "name" => "Kepala Madan",
                "city_id" => 100,
            ),
            array(
                "id" => 1349,
                "name" => "Leksula",
                "city_id" => 100,
            ),
            array(
                "id" => 1350,
                "name" => "Namrole",
                "city_id" => 100,
            ),
            array(
                "id" => 1351,
                "name" => "Waesama",
                "city_id" => 100,
            ),
            array(
                "id" => 1352,
                "name" => "Batauga",
                "city_id" => 101,
            ),
            array(
                "id" => 1353,
                "name" => "Batu Atas",
                "city_id" => 101,
            ),
            array(
                "id" => 1354,
                "name" => "Gu",
                "city_id" => 101,
            ),
            array(
                "id" => 1355,
                "name" => "Kadatua",
                "city_id" => 101,
            ),
            array(
                "id" => 1356,
                "name" => "Kapontori",
                "city_id" => 101,
            ),
            array(
                "id" => 1357,
                "name" => "Lakudo",
                "city_id" => 101,
            ),
            array(
                "id" => 1358,
                "name" => "Lapandewa",
                "city_id" => 101,
            ),
            array(
                "id" => 1359,
                "name" => "Lasalimu",
                "city_id" => 101,
            ),
            array(
                "id" => 1360,
                "name" => "Lasalimu Selatan",
                "city_id" => 101,
            ),
            array(
                "id" => 1361,
                "name" => "Mawasangka",
                "city_id" => 101,
            ),
            array(
                "id" => 1362,
                "name" => "Mawasangka Tengah",
                "city_id" => 101,
            ),
            array(
                "id" => 1363,
                "name" => "Mawasangka Timur",
                "city_id" => 101,
            ),
            array(
                "id" => 1364,
                "name" => "Pasar Wajo",
                "city_id" => 101,
            ),
            array(
                "id" => 1365,
                "name" => "Sampolawa",
                "city_id" => 101,
            ),
            array(
                "id" => 1366,
                "name" => "Sangia Mambulu",
                "city_id" => 101,
            ),
            array(
                "id" => 1367,
                "name" => "Siompu",
                "city_id" => 101,
            ),
            array(
                "id" => 1368,
                "name" => "Siompu Barat",
                "city_id" => 101,
            ),
            array(
                "id" => 1369,
                "name" => "Siontapia (Siontapina)",
                "city_id" => 101,
            ),
            array(
                "id" => 1370,
                "name" => "Talaga Raya (Telaga Raya)",
                "city_id" => 101,
            ),
            array(
                "id" => 1371,
                "name" => "Wabula",
                "city_id" => 101,
            ),
            array(
                "id" => 1372,
                "name" => "Wolowa",
                "city_id" => 101,
            ),
            array(
                "id" => 1373,
                "name" => "Bonegunu",
                "city_id" => 102,
            ),
            array(
                "id" => 1374,
                "name" => "Kambowa",
                "city_id" => 102,
            ),
            array(
                "id" => 1375,
                "name" => "Kulisusu (Kalingsusu/Kalisusu)",
                "city_id" => 102,
            ),
            array(
                "id" => 1376,
                "name" => "Kulisusu Barat",
                "city_id" => 102,
            ),
            array(
                "id" => 1377,
                "name" => "Kulisusu Utara",
                "city_id" => 102,
            ),
            array(
                "id" => 1378,
                "name" => "Wakorumba Utara",
                "city_id" => 102,
            ),
            array(
                "id" => 1379,
                "name" => "Banjarsari",
                "city_id" => 103,
            ),
            array(
                "id" => 1380,
                "name" => "Baregbeg",
                "city_id" => 103,
            ),
            array(
                "id" => 1381,
                "name" => "Ciamis",
                "city_id" => 103,
            ),
            array(
                "id" => 1382,
                "name" => "Cidolog",
                "city_id" => 103,
            ),
            array(
                "id" => 1383,
                "name" => "Cihaurbeuti",
                "city_id" => 103,
            ),
            array(
                "id" => 1384,
                "name" => "Cijeungjing",
                "city_id" => 103,
            ),
            array(
                "id" => 1385,
                "name" => "Cikoneng",
                "city_id" => 103,
            ),
            array(
                "id" => 1386,
                "name" => "Cimaragas",
                "city_id" => 103,
            ),
            array(
                "id" => 1387,
                "name" => "Cipaku",
                "city_id" => 103,
            ),
            array(
                "id" => 1388,
                "name" => "Cisaga",
                "city_id" => 103,
            ),
            array(
                "id" => 1389,
                "name" => "Jatinagara",
                "city_id" => 103,
            ),
            array(
                "id" => 1390,
                "name" => "Kawali",
                "city_id" => 103,
            ),
            array(
                "id" => 1391,
                "name" => "Lakbok",
                "city_id" => 103,
            ),
            array(
                "id" => 1392,
                "name" => "Lumbung",
                "city_id" => 103,
            ),
            array(
                "id" => 1393,
                "name" => "Pamarican",
                "city_id" => 103,
            ),
            array(
                "id" => 1394,
                "name" => "Panawangan",
                "city_id" => 103,
            ),
            array(
                "id" => 1395,
                "name" => "Panjalu",
                "city_id" => 103,
            ),
            array(
                "id" => 1396,
                "name" => "Panumbangan",
                "city_id" => 103,
            ),
            array(
                "id" => 1397,
                "name" => "Purwadadi",
                "city_id" => 103,
            ),
            array(
                "id" => 1398,
                "name" => "Rajadesa",
                "city_id" => 103,
            ),
            array(
                "id" => 1399,
                "name" => "Rancah",
                "city_id" => 103,
            ),
            array(
                "id" => 1400,
                "name" => "Sadananya",
                "city_id" => 103,
            ),
            array(
                "id" => 1401,
                "name" => "Sindangkasih",
                "city_id" => 103,
            ),
            array(
                "id" => 1402,
                "name" => "Sukadana",
                "city_id" => 103,
            ),
            array(
                "id" => 1403,
                "name" => "Sukamantri",
                "city_id" => 103,
            ),
            array(
                "id" => 1404,
                "name" => "Tambaksari",
                "city_id" => 103,
            ),
            array(
                "id" => 1405,
                "name" => "Agrabinta",
                "city_id" => 104,
            ),
            array(
                "id" => 1406,
                "name" => "Bojongpicung",
                "city_id" => 104,
            ),
            array(
                "id" => 1407,
                "name" => "Campaka",
                "city_id" => 104,
            ),
            array(
                "id" => 1408,
                "name" => "Campaka Mulya",
                "city_id" => 104,
            ),
            array(
                "id" => 1409,
                "name" => "Cianjur",
                "city_id" => 104,
            ),
            array(
                "id" => 1410,
                "name" => "Cibeber",
                "city_id" => 104,
            ),
            array(
                "id" => 1411,
                "name" => "Cibinong",
                "city_id" => 104,
            ),
            array(
                "id" => 1412,
                "name" => "Cidaun",
                "city_id" => 104,
            ),
            array(
                "id" => 1413,
                "name" => "Cijati",
                "city_id" => 104,
            ),
            array(
                "id" => 1414,
                "name" => "Cikadu",
                "city_id" => 104,
            ),
            array(
                "id" => 1415,
                "name" => "Cikalongkulon",
                "city_id" => 104,
            ),
            array(
                "id" => 1416,
                "name" => "Cilaku",
                "city_id" => 104,
            ),
            array(
                "id" => 1417,
                "name" => "Cipanas",
                "city_id" => 104,
            ),
            array(
                "id" => 1418,
                "name" => "Ciranjang",
                "city_id" => 104,
            ),
            array(
                "id" => 1419,
                "name" => "Cugenang",
                "city_id" => 104,
            ),
            array(
                "id" => 1420,
                "name" => "Gekbrong",
                "city_id" => 104,
            ),
            array(
                "id" => 1421,
                "name" => "Haurwangi",
                "city_id" => 104,
            ),
            array(
                "id" => 1422,
                "name" => "Kadupandak",
                "city_id" => 104,
            ),
            array(
                "id" => 1423,
                "name" => "Karangtengah",
                "city_id" => 104,
            ),
            array(
                "id" => 1424,
                "name" => "Leles",
                "city_id" => 104,
            ),
            array(
                "id" => 1425,
                "name" => "Mande",
                "city_id" => 104,
            ),
            array(
                "id" => 1426,
                "name" => "Naringgul",
                "city_id" => 104,
            ),
            array(
                "id" => 1427,
                "name" => "Pacet",
                "city_id" => 104,
            ),
            array(
                "id" => 1428,
                "name" => "Pagelaran",
                "city_id" => 104,
            ),
            array(
                "id" => 1429,
                "name" => "Pasirkuda",
                "city_id" => 104,
            ),
            array(
                "id" => 1430,
                "name" => "Sindangbarang",
                "city_id" => 104,
            ),
            array(
                "id" => 1431,
                "name" => "Sukaluyu",
                "city_id" => 104,
            ),
            array(
                "id" => 1432,
                "name" => "Sukanagara",
                "city_id" => 104,
            ),
            array(
                "id" => 1433,
                "name" => "Sukaresmi",
                "city_id" => 104,
            ),
            array(
                "id" => 1434,
                "name" => "Takokak",
                "city_id" => 104,
            ),
            array(
                "id" => 1435,
                "name" => "Tanggeung",
                "city_id" => 104,
            ),
            array(
                "id" => 1436,
                "name" => "Warungkondang",
                "city_id" => 104,
            ),
            array(
                "id" => 1437,
                "name" => "Adipala",
                "city_id" => 105,
            ),
            array(
                "id" => 1438,
                "name" => "Bantarsari",
                "city_id" => 105,
            ),
            array(
                "id" => 1439,
                "name" => "Binangun",
                "city_id" => 105,
            ),
            array(
                "id" => 1440,
                "name" => "Cilacap Selatan",
                "city_id" => 105,
            ),
            array(
                "id" => 1441,
                "name" => "Cilacap Tengah",
                "city_id" => 105,
            ),
            array(
                "id" => 1442,
                "name" => "Cilacap Utara",
                "city_id" => 105,
            ),
            array(
                "id" => 1443,
                "name" => "Cimanggu",
                "city_id" => 105,
            ),
            array(
                "id" => 1444,
                "name" => "Cipari",
                "city_id" => 105,
            ),
            array(
                "id" => 1445,
                "name" => "Dayeuhluhur",
                "city_id" => 105,
            ),
            array(
                "id" => 1446,
                "name" => "Gandrungmangu",
                "city_id" => 105,
            ),
            array(
                "id" => 1447,
                "name" => "Jeruklegi",
                "city_id" => 105,
            ),
            array(
                "id" => 1448,
                "name" => "Kampung Laut",
                "city_id" => 105,
            ),
            array(
                "id" => 1449,
                "name" => "Karangpucung",
                "city_id" => 105,
            ),
            array(
                "id" => 1450,
                "name" => "Kawunganten",
                "city_id" => 105,
            ),
            array(
                "id" => 1451,
                "name" => "Kedungreja",
                "city_id" => 105,
            ),
            array(
                "id" => 1452,
                "name" => "Kesugihan",
                "city_id" => 105,
            ),
            array(
                "id" => 1453,
                "name" => "Kroya",
                "city_id" => 105,
            ),
            array(
                "id" => 1454,
                "name" => "Majenang",
                "city_id" => 105,
            ),
            array(
                "id" => 1455,
                "name" => "Maos",
                "city_id" => 105,
            ),
            array(
                "id" => 1456,
                "name" => "Nusawungu",
                "city_id" => 105,
            ),
            array(
                "id" => 1457,
                "name" => "Patimuan",
                "city_id" => 105,
            ),
            array(
                "id" => 1458,
                "name" => "Sampang",
                "city_id" => 105,
            ),
            array(
                "id" => 1459,
                "name" => "Sidareja",
                "city_id" => 105,
            ),
            array(
                "id" => 1460,
                "name" => "Wanareja",
                "city_id" => 105,
            ),
            array(
                "id" => 1461,
                "name" => "Cibeber",
                "city_id" => 106,
            ),
            array(
                "id" => 1462,
                "name" => "Cilegon",
                "city_id" => 106,
            ),
            array(
                "id" => 1463,
                "name" => "Citangkil",
                "city_id" => 106,
            ),
            array(
                "id" => 1464,
                "name" => "Ciwandan",
                "city_id" => 106,
            ),
            array(
                "id" => 1465,
                "name" => "Gerogol",
                "city_id" => 106,
            ),
            array(
                "id" => 1466,
                "name" => "Jombang",
                "city_id" => 106,
            ),
            array(
                "id" => 1467,
                "name" => "Pulomerak",
                "city_id" => 106,
            ),
            array(
                "id" => 1468,
                "name" => "Purwakarta",
                "city_id" => 106,
            ),
            array(
                "id" => 1469,
                "name" => "Cimahi Selatan",
                "city_id" => 107,
            ),
            array(
                "id" => 1470,
                "name" => "Cimahi Tengah",
                "city_id" => 107,
            ),
            array(
                "id" => 1471,
                "name" => "Cimahi Utara",
                "city_id" => 107,
            ),
            array(
                "id" => 1472,
                "name" => "Arjawinangun",
                "city_id" => 108,
            ),
            array(
                "id" => 1473,
                "name" => "Astanajapura",
                "city_id" => 108,
            ),
            array(
                "id" => 1474,
                "name" => "Babakan",
                "city_id" => 108,
            ),
            array(
                "id" => 1475,
                "name" => "Beber",
                "city_id" => 108,
            ),
            array(
                "id" => 1476,
                "name" => "Ciledug",
                "city_id" => 108,
            ),
            array(
                "id" => 1477,
                "name" => "Ciwaringin",
                "city_id" => 108,
            ),
            array(
                "id" => 1478,
                "name" => "Depok",
                "city_id" => 108,
            ),
            array(
                "id" => 1479,
                "name" => "Dukupuntang",
                "city_id" => 108,
            ),
            array(
                "id" => 1480,
                "name" => "Gebang",
                "city_id" => 108,
            ),
            array(
                "id" => 1481,
                "name" => "Gegesik",
                "city_id" => 108,
            ),
            array(
                "id" => 1482,
                "name" => "Gempol",
                "city_id" => 108,
            ),
            array(
                "id" => 1483,
                "name" => "Greged (Greget)",
                "city_id" => 108,
            ),
            array(
                "id" => 1484,
                "name" => "Gunung Jati (Cirebon Utara)",
                "city_id" => 108,
            ),
            array(
                "id" => 1485,
                "name" => "Jamblang",
                "city_id" => 108,
            ),
            array(
                "id" => 1486,
                "name" => "Kaliwedi",
                "city_id" => 108,
            ),
            array(
                "id" => 1487,
                "name" => "Kapetakan",
                "city_id" => 108,
            ),
            array(
                "id" => 1488,
                "name" => "Karangsembung",
                "city_id" => 108,
            ),
            array(
                "id" => 1489,
                "name" => "Karangwareng",
                "city_id" => 108,
            ),
            array(
                "id" => 1490,
                "name" => "Kedawung",
                "city_id" => 108,
            ),
            array(
                "id" => 1491,
                "name" => "Klangenan",
                "city_id" => 108,
            ),
            array(
                "id" => 1492,
                "name" => "Lemahabang",
                "city_id" => 108,
            ),
            array(
                "id" => 1493,
                "name" => "Losari",
                "city_id" => 108,
            ),
            array(
                "id" => 1494,
                "name" => "Mundu",
                "city_id" => 108,
            ),
            array(
                "id" => 1495,
                "name" => "Pabedilan",
                "city_id" => 108,
            ),
            array(
                "id" => 1496,
                "name" => "Pabuaran",
                "city_id" => 108,
            ),
            array(
                "id" => 1497,
                "name" => "Palimanan",
                "city_id" => 108,
            ),
            array(
                "id" => 1498,
                "name" => "Pangenan",
                "city_id" => 108,
            ),
            array(
                "id" => 1499,
                "name" => "Panguragan",
                "city_id" => 108,
            ),
            array(
                "id" => 1500,
                "name" => "Pasaleman",
                "city_id" => 108,
            ),
            array(
                "id" => 1501,
                "name" => "Plered",
                "city_id" => 108,
            ),
            array(
                "id" => 1502,
                "name" => "Plumbon",
                "city_id" => 108,
            ),
            array(
                "id" => 1503,
                "name" => "Sedong",
                "city_id" => 108,
            ),
            array(
                "id" => 1504,
                "name" => "Sumber",
                "city_id" => 108,
            ),
            array(
                "id" => 1505,
                "name" => "Suranenggala",
                "city_id" => 108,
            ),
            array(
                "id" => 1506,
                "name" => "Susukan",
                "city_id" => 108,
            ),
            array(
                "id" => 1507,
                "name" => "Susukan Lebak",
                "city_id" => 108,
            ),
            array(
                "id" => 1508,
                "name" => "Talun (Cirebon Selatan)",
                "city_id" => 108,
            ),
            array(
                "id" => 1509,
                "name" => "Tengah Tani",
                "city_id" => 108,
            ),
            array(
                "id" => 1510,
                "name" => "Waled",
                "city_id" => 108,
            ),
            array(
                "id" => 1511,
                "name" => "Weru",
                "city_id" => 108,
            ),
            array(
                "id" => 1512,
                "name" => "Harjamukti",
                "city_id" => 109,
            ),
            array(
                "id" => 1513,
                "name" => "Kejaksan",
                "city_id" => 109,
            ),
            array(
                "id" => 1514,
                "name" => "Kesambi",
                "city_id" => 109,
            ),
            array(
                "id" => 1515,
                "name" => "Lemahwungkuk",
                "city_id" => 109,
            ),
            array(
                "id" => 1516,
                "name" => "Pekalipan",
                "city_id" => 109,
            ),
            array(
                "id" => 1517,
                "name" => "Berampu (Brampu)",
                "city_id" => 110,
            ),
            array(
                "id" => 1518,
                "name" => "Gunung Sitember",
                "city_id" => 110,
            ),
            array(
                "id" => 1519,
                "name" => "Lae Parira",
                "city_id" => 110,
            ),
            array(
                "id" => 1520,
                "name" => "Parbuluan",
                "city_id" => 110,
            ),
            array(
                "id" => 1521,
                "name" => "Pegagan Hilir",
                "city_id" => 110,
            ),
            array(
                "id" => 1522,
                "name" => "Sidikalang",
                "city_id" => 110,
            ),
            array(
                "id" => 1523,
                "name" => "Siempat Nempu",
                "city_id" => 110,
            ),
            array(
                "id" => 1524,
                "name" => "Siempat Nempu Hilir",
                "city_id" => 110,
            ),
            array(
                "id" => 1525,
                "name" => "Siempat Nempu Hulu",
                "city_id" => 110,
            ),
            array(
                "id" => 1526,
                "name" => "Silahi Sabungan",
                "city_id" => 110,
            ),
            array(
                "id" => 1527,
                "name" => "Silima Pungga-Pungga",
                "city_id" => 110,
            ),
            array(
                "id" => 1528,
                "name" => "Sitinjo",
                "city_id" => 110,
            ),
            array(
                "id" => 1529,
                "name" => "Sumbul",
                "city_id" => 110,
            ),
            array(
                "id" => 1530,
                "name" => "Tanah Pinem",
                "city_id" => 110,
            ),
            array(
                "id" => 1531,
                "name" => "Tiga Lingga",
                "city_id" => 110,
            ),
            array(
                "id" => 1532,
                "name" => "Bowobado",
                "city_id" => 111,
            ),
            array(
                "id" => 1533,
                "name" => "Kapiraya",
                "city_id" => 111,
            ),
            array(
                "id" => 1534,
                "name" => "Tigi",
                "city_id" => 111,
            ),
            array(
                "id" => 1535,
                "name" => "Tigi Barat",
                "city_id" => 111,
            ),
            array(
                "id" => 1536,
                "name" => "Tigi Timur",
                "city_id" => 111,
            ),
            array(
                "id" => 1537,
                "name" => "Bangun Purba",
                "city_id" => 112,
            ),
            array(
                "id" => 1538,
                "name" => "Batang Kuis",
                "city_id" => 112,
            ),
            array(
                "id" => 1539,
                "name" => "Beringin",
                "city_id" => 112,
            ),
            array(
                "id" => 1540,
                "name" => "Biru-Biru",
                "city_id" => 112,
            ),
            array(
                "id" => 1541,
                "name" => "Deli Tua",
                "city_id" => 112,
            ),
            array(
                "id" => 1542,
                "name" => "Galang",
                "city_id" => 112,
            ),
            array(
                "id" => 1543,
                "name" => "Gunung Meriah",
                "city_id" => 112,
            ),
            array(
                "id" => 1544,
                "name" => "Hamparan Perak",
                "city_id" => 112,
            ),
            array(
                "id" => 1545,
                "name" => "Kutalimbaru",
                "city_id" => 112,
            ),
            array(
                "id" => 1546,
                "name" => "Labuhan Deli",
                "city_id" => 112,
            ),
            array(
                "id" => 1547,
                "name" => "Lubuk Pakam",
                "city_id" => 112,
            ),
            array(
                "id" => 1548,
                "name" => "Namo Rambe",
                "city_id" => 112,
            ),
            array(
                "id" => 1549,
                "name" => "Pagar Merbau",
                "city_id" => 112,
            ),
            array(
                "id" => 1550,
                "name" => "Pancur Batu",
                "city_id" => 112,
            ),
            array(
                "id" => 1551,
                "name" => "Pantai Labu",
                "city_id" => 112,
            ),
            array(
                "id" => 1552,
                "name" => "Patumbak",
                "city_id" => 112,
            ),
            array(
                "id" => 1553,
                "name" => "Percut Sei Tuan",
                "city_id" => 112,
            ),
            array(
                "id" => 1554,
                "name" => "Sibolangit",
                "city_id" => 112,
            ),
            array(
                "id" => 1555,
                "name" => "Sinembah Tanjung Muda Hilir",
                "city_id" => 112,
            ),
            array(
                "id" => 1556,
                "name" => "Sinembah Tanjung Muda Hulu",
                "city_id" => 112,
            ),
            array(
                "id" => 1557,
                "name" => "Sunggal",
                "city_id" => 112,
            ),
            array(
                "id" => 1558,
                "name" => "Tanjung Morawa",
                "city_id" => 112,
            ),
            array(
                "id" => 1559,
                "name" => "Bonang",
                "city_id" => 113,
            ),
            array(
                "id" => 1560,
                "name" => "Demak",
                "city_id" => 113,
            ),
            array(
                "id" => 1561,
                "name" => "Dempet",
                "city_id" => 113,
            ),
            array(
                "id" => 1562,
                "name" => "Gajah",
                "city_id" => 113,
            ),
            array(
                "id" => 1563,
                "name" => "Guntur",
                "city_id" => 113,
            ),
            array(
                "id" => 1564,
                "name" => "Karang Tengah",
                "city_id" => 113,
            ),
            array(
                "id" => 1565,
                "name" => "Karanganyar",
                "city_id" => 113,
            ),
            array(
                "id" => 1566,
                "name" => "Karangawen",
                "city_id" => 113,
            ),
            array(
                "id" => 1567,
                "name" => "Kebonagung",
                "city_id" => 113,
            ),
            array(
                "id" => 1568,
                "name" => "Mijen",
                "city_id" => 113,
            ),
            array(
                "id" => 1569,
                "name" => "Mranggen",
                "city_id" => 113,
            ),
            array(
                "id" => 1570,
                "name" => "Sayung",
                "city_id" => 113,
            ),
            array(
                "id" => 1571,
                "name" => "Wedung",
                "city_id" => 113,
            ),
            array(
                "id" => 1572,
                "name" => "Wonosalam",
                "city_id" => 113,
            ),
            array(
                "id" => 1573,
                "name" => "Denpasar Barat",
                "city_id" => 114,
            ),
            array(
                "id" => 1574,
                "name" => "Denpasar Selatan",
                "city_id" => 114,
            ),
            array(
                "id" => 1575,
                "name" => "Denpasar Timur",
                "city_id" => 114,
            ),
            array(
                "id" => 1576,
                "name" => "Denpasar Utara",
                "city_id" => 114,
            ),
            array(
                "id" => 1577,
                "name" => "Beji",
                "city_id" => 115,
            ),
            array(
                "id" => 1578,
                "name" => "Bojongsari",
                "city_id" => 115,
            ),
            array(
                "id" => 1579,
                "name" => "Cilodong",
                "city_id" => 115,
            ),
            array(
                "id" => 1580,
                "name" => "Cimanggis",
                "city_id" => 115,
            ),
            array(
                "id" => 1581,
                "name" => "Cinere",
                "city_id" => 115,
            ),
            array(
                "id" => 1582,
                "name" => "Cipayung",
                "city_id" => 115,
            ),
            array(
                "id" => 1583,
                "name" => "Limo",
                "city_id" => 115,
            ),
            array(
                "id" => 1584,
                "name" => "Pancoran Mas",
                "city_id" => 115,
            ),
            array(
                "id" => 1585,
                "name" => "Sawangan",
                "city_id" => 115,
            ),
            array(
                "id" => 1586,
                "name" => "Sukmajaya",
                "city_id" => 115,
            ),
            array(
                "id" => 1587,
                "name" => "Tapos",
                "city_id" => 115,
            ),
            array(
                "id" => 1588,
                "name" => "Asam Jujuhan",
                "city_id" => 116,
            ),
            array(
                "id" => 1589,
                "name" => "Koto Baru",
                "city_id" => 116,
            ),
            array(
                "id" => 1590,
                "name" => "Koto Besar",
                "city_id" => 116,
            ),
            array(
                "id" => 1591,
                "name" => "Koto Salak",
                "city_id" => 116,
            ),
            array(
                "id" => 1592,
                "name" => "Padang Laweh",
                "city_id" => 116,
            ),
            array(
                "id" => 1593,
                "name" => "Pulau Punjung",
                "city_id" => 116,
            ),
            array(
                "id" => 1594,
                "name" => "Sembilan Koto (IX Koto)",
                "city_id" => 116,
            ),
            array(
                "id" => 1595,
                "name" => "Sitiung",
                "city_id" => 116,
            ),
            array(
                "id" => 1596,
                "name" => "Sungai Rumbai",
                "city_id" => 116,
            ),
            array(
                "id" => 1597,
                "name" => "Timpeh",
                "city_id" => 116,
            ),
            array(
                "id" => 1598,
                "name" => "Tiumang",
                "city_id" => 116,
            ),
            array(
                "id" => 1599,
                "name" => "Dogiyai",
                "city_id" => 117,
            ),
            array(
                "id" => 1600,
                "name" => "Kamu",
                "city_id" => 117,
            ),
            array(
                "id" => 1601,
                "name" => "Kamu Selatan",
                "city_id" => 117,
            ),
            array(
                "id" => 1602,
                "name" => "Kamu Timur",
                "city_id" => 117,
            ),
            array(
                "id" => 1603,
                "name" => "Kamu Utara (Ikrar/Ikrat)",
                "city_id" => 117,
            ),
            array(
                "id" => 1604,
                "name" => "Mapia",
                "city_id" => 117,
            ),
            array(
                "id" => 1605,
                "name" => "Mapia Barat",
                "city_id" => 117,
            ),
            array(
                "id" => 1606,
                "name" => "Mapia Tengah",
                "city_id" => 117,
            ),
            array(
                "id" => 1607,
                "name" => "Piyaiye (Sukikai)",
                "city_id" => 117,
            ),
            array(
                "id" => 1608,
                "name" => "Sukikai Selatan",
                "city_id" => 117,
            ),
            array(
                "id" => 1609,
                "name" => "Dompu",
                "city_id" => 118,
            ),
            array(
                "id" => 1610,
                "name" => "Hu'u",
                "city_id" => 118,
            ),
            array(
                "id" => 1611,
                "name" => "Kempo",
                "city_id" => 118,
            ),
            array(
                "id" => 1612,
                "name" => "Kilo",
                "city_id" => 118,
            ),
            array(
                "id" => 1613,
                "name" => "Menggelewa (Manggelewa)",
                "city_id" => 118,
            ),
            array(
                "id" => 1614,
                "name" => "Pajo",
                "city_id" => 118,
            ),
            array(
                "id" => 1615,
                "name" => "Pekat",
                "city_id" => 118,
            ),
            array(
                "id" => 1616,
                "name" => "Woja",
                "city_id" => 118,
            ),
            array(
                "id" => 1617,
                "name" => "Balaesang",
                "city_id" => 119,
            ),
            array(
                "id" => 1618,
                "name" => "Balaesang Tanjung",
                "city_id" => 119,
            ),
            array(
                "id" => 1619,
                "name" => "Banawa",
                "city_id" => 119,
            ),
            array(
                "id" => 1620,
                "name" => "Banawa Selatan",
                "city_id" => 119,
            ),
            array(
                "id" => 1621,
                "name" => "Banawa Tengah",
                "city_id" => 119,
            ),
            array(
                "id" => 1622,
                "name" => "Damsol (Dampelas Sojol)",
                "city_id" => 119,
            ),
            array(
                "id" => 1623,
                "name" => "Labuan",
                "city_id" => 119,
            ),
            array(
                "id" => 1624,
                "name" => "Pinembani",
                "city_id" => 119,
            ),
            array(
                "id" => 1625,
                "name" => "Rio Pakava (Riopakawa)",
                "city_id" => 119,
            ),
            array(
                "id" => 1626,
                "name" => "Sindue",
                "city_id" => 119,
            ),
            array(
                "id" => 1627,
                "name" => "Sindue Tobata",
                "city_id" => 119,
            ),
            array(
                "id" => 1628,
                "name" => "Sindue Tombusabora",
                "city_id" => 119,
            ),
            array(
                "id" => 1629,
                "name" => "Sirenja",
                "city_id" => 119,
            ),
            array(
                "id" => 1630,
                "name" => "Sojol",
                "city_id" => 119,
            ),
            array(
                "id" => 1631,
                "name" => "Sojol Utara",
                "city_id" => 119,
            ),
            array(
                "id" => 1632,
                "name" => "Tanantovea",
                "city_id" => 119,
            ),
            array(
                "id" => 1633,
                "name" => "Bukit Kapur",
                "city_id" => 120,
            ),
            array(
                "id" => 1634,
                "name" => "Dumai Barat",
                "city_id" => 120,
            ),
            array(
                "id" => 1635,
                "name" => "Dumai Kota",
                "city_id" => 120,
            ),
            array(
                "id" => 1636,
                "name" => "Dumai Selatan",
                "city_id" => 120,
            ),
            array(
                "id" => 1637,
                "name" => "Dumai Timur",
                "city_id" => 120,
            ),
            array(
                "id" => 1638,
                "name" => "Medang Kampai",
                "city_id" => 120,
            ),
            array(
                "id" => 1639,
                "name" => "Sungai Sembilan",
                "city_id" => 120,
            ),
            array(
                "id" => 1640,
                "name" => "Lintang Kanan",
                "city_id" => 121,
            ),
            array(
                "id" => 1641,
                "name" => "Muara Pinang",
                "city_id" => 121,
            ),
            array(
                "id" => 1642,
                "name" => "Pasemah Air Keruh",
                "city_id" => 121,
            ),
            array(
                "id" => 1643,
                "name" => "Pendopo",
                "city_id" => 121,
            ),
            array(
                "id" => 1644,
                "name" => "Pendopo Barat",
                "city_id" => 121,
            ),
            array(
                "id" => 1645,
                "name" => "Saling",
                "city_id" => 121,
            ),
            array(
                "id" => 1646,
                "name" => "Sikap Dalam",
                "city_id" => 121,
            ),
            array(
                "id" => 1647,
                "name" => "Talang Padang",
                "city_id" => 121,
            ),
            array(
                "id" => 1648,
                "name" => "Tebing Tinggi",
                "city_id" => 121,
            ),
            array(
                "id" => 1649,
                "name" => "Ulu Musi",
                "city_id" => 121,
            ),
            array(
                "id" => 1650,
                "name" => "Detukeli",
                "city_id" => 122,
            ),
            array(
                "id" => 1651,
                "name" => "Detusoko",
                "city_id" => 122,
            ),
            array(
                "id" => 1652,
                "name" => "Ende",
                "city_id" => 122,
            ),
            array(
                "id" => 1653,
                "name" => "Ende Selatan",
                "city_id" => 122,
            ),
            array(
                "id" => 1654,
                "name" => "Ende Tengah",
                "city_id" => 122,
            ),
            array(
                "id" => 1655,
                "name" => "Ende Timur",
                "city_id" => 122,
            ),
            array(
                "id" => 1656,
                "name" => "Ende Utara",
                "city_id" => 122,
            ),
            array(
                "id" => 1657,
                "name" => "Kelimutu",
                "city_id" => 122,
            ),
            array(
                "id" => 1658,
                "name" => "Kotabaru",
                "city_id" => 122,
            ),
            array(
                "id" => 1659,
                "name" => "Lepembusu Kelisoke",
                "city_id" => 122,
            ),
            array(
                "id" => 1660,
                "name" => "Lio Timur",
                "city_id" => 122,
            ),
            array(
                "id" => 1661,
                "name" => "Maukaro",
                "city_id" => 122,
            ),
            array(
                "id" => 1662,
                "name" => "Maurole",
                "city_id" => 122,
            ),
            array(
                "id" => 1663,
                "name" => "Nangapanda",
                "city_id" => 122,
            ),
            array(
                "id" => 1664,
                "name" => "Ndona",
                "city_id" => 122,
            ),
            array(
                "id" => 1665,
                "name" => "Ndona Timur",
                "city_id" => 122,
            ),
            array(
                "id" => 1666,
                "name" => "Ndori",
                "city_id" => 122,
            ),
            array(
                "id" => 1667,
                "name" => "Pulau Ende",
                "city_id" => 122,
            ),
            array(
                "id" => 1668,
                "name" => "Wewaria",
                "city_id" => 122,
            ),
            array(
                "id" => 1669,
                "name" => "Wolojita",
                "city_id" => 122,
            ),
            array(
                "id" => 1670,
                "name" => "Wolowaru",
                "city_id" => 122,
            ),
            array(
                "id" => 1671,
                "name" => "Alla",
                "city_id" => 123,
            ),
            array(
                "id" => 1672,
                "name" => "Anggeraja",
                "city_id" => 123,
            ),
            array(
                "id" => 1673,
                "name" => "Baraka",
                "city_id" => 123,
            ),
            array(
                "id" => 1674,
                "name" => "Baroko",
                "city_id" => 123,
            ),
            array(
                "id" => 1675,
                "name" => "Bungin",
                "city_id" => 123,
            ),
            array(
                "id" => 1676,
                "name" => "Buntu Batu",
                "city_id" => 123,
            ),
            array(
                "id" => 1677,
                "name" => "Cendana",
                "city_id" => 123,
            ),
            array(
                "id" => 1678,
                "name" => "Curio",
                "city_id" => 123,
            ),
            array(
                "id" => 1679,
                "name" => "Enrekang",
                "city_id" => 123,
            ),
            array(
                "id" => 1680,
                "name" => "Maiwa",
                "city_id" => 123,
            ),
            array(
                "id" => 1681,
                "name" => "Malua",
                "city_id" => 123,
            ),
            array(
                "id" => 1682,
                "name" => "Masalle",
                "city_id" => 123,
            ),
            array(
                "id" => 1683,
                "name" => "Bombarai (Bomberay)",
                "city_id" => 124,
            ),
            array(
                "id" => 1684,
                "name" => "Fakfak",
                "city_id" => 124,
            ),
            array(
                "id" => 1685,
                "name" => "Fakfak Barat",
                "city_id" => 124,
            ),
            array(
                "id" => 1686,
                "name" => "Fakfak Tengah",
                "city_id" => 124,
            ),
            array(
                "id" => 1687,
                "name" => "Fakfak Timur",
                "city_id" => 124,
            ),
            array(
                "id" => 1688,
                "name" => "Karas",
                "city_id" => 124,
            ),
            array(
                "id" => 1689,
                "name" => "Kokas",
                "city_id" => 124,
            ),
            array(
                "id" => 1690,
                "name" => "Kramongmongga (Kramamongga)",
                "city_id" => 124,
            ),
            array(
                "id" => 1691,
                "name" => "Teluk Patipi",
                "city_id" => 124,
            ),
            array(
                "id" => 1692,
                "name" => "Adonara",
                "city_id" => 125,
            ),
            array(
                "id" => 1693,
                "name" => "Adonara Barat",
                "city_id" => 125,
            ),
            array(
                "id" => 1694,
                "name" => "Adonara Tengah",
                "city_id" => 125,
            ),
            array(
                "id" => 1695,
                "name" => "Adonara Timur",
                "city_id" => 125,
            ),
            array(
                "id" => 1696,
                "name" => "Demon Pagong",
                "city_id" => 125,
            ),
            array(
                "id" => 1697,
                "name" => "Ile Boleng",
                "city_id" => 125,
            ),
            array(
                "id" => 1698,
                "name" => "Ile Bura",
                "city_id" => 125,
            ),
            array(
                "id" => 1699,
                "name" => "Ile Mandiri",
                "city_id" => 125,
            ),
            array(
                "id" => 1700,
                "name" => "Kelubagolit (Klubagolit)",
                "city_id" => 125,
            ),
            array(
                "id" => 1701,
                "name" => "Larantuka",
                "city_id" => 125,
            ),
            array(
                "id" => 1702,
                "name" => "Lewolema",
                "city_id" => 125,
            ),
            array(
                "id" => 1703,
                "name" => "Solor Barat",
                "city_id" => 125,
            ),
            array(
                "id" => 1704,
                "name" => "Solor Selatan",
                "city_id" => 125,
            ),
            array(
                "id" => 1705,
                "name" => "Solor Timur",
                "city_id" => 125,
            ),
            array(
                "id" => 1706,
                "name" => "Tanjung Bunga",
                "city_id" => 125,
            ),
            array(
                "id" => 1707,
                "name" => "Titehena",
                "city_id" => 125,
            ),
            array(
                "id" => 1708,
                "name" => "Witihama (Watihama)",
                "city_id" => 125,
            ),
            array(
                "id" => 1709,
                "name" => "Wotan Ulumado",
                "city_id" => 125,
            ),
            array(
                "id" => 1710,
                "name" => "Wulanggitang",
                "city_id" => 125,
            ),
            array(
                "id" => 1711,
                "name" => "Banjarwangi",
                "city_id" => 126,
            ),
            array(
                "id" => 1712,
                "name" => "Banyuresmi",
                "city_id" => 126,
            ),
            array(
                "id" => 1713,
                "name" => "Bayongbong",
                "city_id" => 126,
            ),
            array(
                "id" => 1714,
                "name" => "Blubur Limbangan",
                "city_id" => 126,
            ),
            array(
                "id" => 1715,
                "name" => "Bungbulang",
                "city_id" => 126,
            ),
            array(
                "id" => 1716,
                "name" => "Caringin",
                "city_id" => 126,
            ),
            array(
                "id" => 1717,
                "name" => "Cibalong",
                "city_id" => 126,
            ),
            array(
                "id" => 1718,
                "name" => "Cibatu",
                "city_id" => 126,
            ),
            array(
                "id" => 1719,
                "name" => "Cibiuk",
                "city_id" => 126,
            ),
            array(
                "id" => 1720,
                "name" => "Cigedug",
                "city_id" => 126,
            ),
            array(
                "id" => 1721,
                "name" => "Cihurip",
                "city_id" => 126,
            ),
            array(
                "id" => 1722,
                "name" => "Cikajang",
                "city_id" => 126,
            ),
            array(
                "id" => 1723,
                "name" => "Cikelet",
                "city_id" => 126,
            ),
            array(
                "id" => 1724,
                "name" => "Cilawu",
                "city_id" => 126,
            ),
            array(
                "id" => 1725,
                "name" => "Cisewu",
                "city_id" => 126,
            ),
            array(
                "id" => 1726,
                "name" => "Cisompet",
                "city_id" => 126,
            ),
            array(
                "id" => 1727,
                "name" => "Cisurupan",
                "city_id" => 126,
            ),
            array(
                "id" => 1728,
                "name" => "Garut Kota",
                "city_id" => 126,
            ),
            array(
                "id" => 1729,
                "name" => "Kadungora",
                "city_id" => 126,
            ),
            array(
                "id" => 1730,
                "name" => "Karangpawitan",
                "city_id" => 126,
            ),
            array(
                "id" => 1731,
                "name" => "Karangtengah",
                "city_id" => 126,
            ),
            array(
                "id" => 1732,
                "name" => "Kersamanah",
                "city_id" => 126,
            ),
            array(
                "id" => 1733,
                "name" => "Leles",
                "city_id" => 126,
            ),
            array(
                "id" => 1734,
                "name" => "Leuwigoong",
                "city_id" => 126,
            ),
            array(
                "id" => 1735,
                "name" => "Malangbong",
                "city_id" => 126,
            ),
            array(
                "id" => 1736,
                "name" => "Mekarmukti",
                "city_id" => 126,
            ),
            array(
                "id" => 1737,
                "name" => "Pakenjeng",
                "city_id" => 126,
            ),
            array(
                "id" => 1738,
                "name" => "Pameungpeuk",
                "city_id" => 126,
            ),
            array(
                "id" => 1739,
                "name" => "Pamulihan",
                "city_id" => 126,
            ),
            array(
                "id" => 1740,
                "name" => "Pangatikan",
                "city_id" => 126,
            ),
            array(
                "id" => 1741,
                "name" => "Pasirwangi",
                "city_id" => 126,
            ),
            array(
                "id" => 1742,
                "name" => "Peundeuy",
                "city_id" => 126,
            ),
            array(
                "id" => 1743,
                "name" => "Samarang",
                "city_id" => 126,
            ),
            array(
                "id" => 1744,
                "name" => "Selaawi",
                "city_id" => 126,
            ),
            array(
                "id" => 1745,
                "name" => "Singajaya",
                "city_id" => 126,
            ),
            array(
                "id" => 1746,
                "name" => "Sucinaraja",
                "city_id" => 126,
            ),
            array(
                "id" => 1747,
                "name" => "Sukaresmi",
                "city_id" => 126,
            ),
            array(
                "id" => 1748,
                "name" => "Sukawening",
                "city_id" => 126,
            ),
            array(
                "id" => 1749,
                "name" => "Talegong",
                "city_id" => 126,
            ),
            array(
                "id" => 1750,
                "name" => "Tarogong Kaler",
                "city_id" => 126,
            ),
            array(
                "id" => 1751,
                "name" => "Tarogong Kidul",
                "city_id" => 126,
            ),
            array(
                "id" => 1752,
                "name" => "Wanaraja",
                "city_id" => 126,
            ),
            array(
                "id" => 1753,
                "name" => "Blang Jerango",
                "city_id" => 127,
            ),
            array(
                "id" => 1754,
                "name" => "Blang Kejeren",
                "city_id" => 127,
            ),
            array(
                "id" => 1755,
                "name" => "Blang Pegayon",
                "city_id" => 127,
            ),
            array(
                "id" => 1756,
                "name" => "Dabun Gelang (Debun Gelang)",
                "city_id" => 127,
            ),
            array(
                "id" => 1757,
                "name" => "Kuta Panjang",
                "city_id" => 127,
            ),
            array(
                "id" => 1758,
                "name" => "Pantan Cuaca",
                "city_id" => 127,
            ),
            array(
                "id" => 1759,
                "name" => "Pining (Pinding)",
                "city_id" => 127,
            ),
            array(
                "id" => 1760,
                "name" => "Putri Betung",
                "city_id" => 127,
            ),
            array(
                "id" => 1761,
                "name" => "Rikit Gaib",
                "city_id" => 127,
            ),
            array(
                "id" => 1762,
                "name" => "Terangun (Terangon)",
                "city_id" => 127,
            ),
            array(
                "id" => 1763,
                "name" => "Teripe/Tripe Jaya",
                "city_id" => 127,
            ),
            array(
                "id" => 1764,
                "name" => "Belah Batuh (Blahbatuh)",
                "city_id" => 128,
            ),
            array(
                "id" => 1765,
                "name" => "Gianyar",
                "city_id" => 128,
            ),
            array(
                "id" => 1766,
                "name" => "Payangan",
                "city_id" => 128,
            ),
            array(
                "id" => 1767,
                "name" => "Sukawati",
                "city_id" => 128,
            ),
            array(
                "id" => 1768,
                "name" => "Tampak Siring",
                "city_id" => 128,
            ),
            array(
                "id" => 1769,
                "name" => "Tegallalang",
                "city_id" => 128,
            ),
            array(
                "id" => 1770,
                "name" => "Ubud",
                "city_id" => 128,
            ),
            array(
                "id" => 1771,
                "name" => "Asparaga",
                "city_id" => 129,
            ),
            array(
                "id" => 1772,
                "name" => "Batudaa",
                "city_id" => 129,
            ),
            array(
                "id" => 1773,
                "name" => "Batudaa Pantai",
                "city_id" => 129,
            ),
            array(
                "id" => 1774,
                "name" => "Bilato",
                "city_id" => 129,
            ),
            array(
                "id" => 1775,
                "name" => "Biluhu",
                "city_id" => 129,
            ),
            array(
                "id" => 1776,
                "name" => "Boliohuto (Boliyohuto)",
                "city_id" => 129,
            ),
            array(
                "id" => 1777,
                "name" => "Bongomeme",
                "city_id" => 129,
            ),
            array(
                "id" => 1778,
                "name" => "Dungaliyo",
                "city_id" => 129,
            ),
            array(
                "id" => 1779,
                "name" => "Limboto",
                "city_id" => 129,
            ),
            array(
                "id" => 1780,
                "name" => "Limboto Barat",
                "city_id" => 129,
            ),
            array(
                "id" => 1781,
                "name" => "Mootilango",
                "city_id" => 129,
            ),
            array(
                "id" => 1782,
                "name" => "Pulubala",
                "city_id" => 129,
            ),
            array(
                "id" => 1783,
                "name" => "Tabongo",
                "city_id" => 129,
            ),
            array(
                "id" => 1784,
                "name" => "Telaga",
                "city_id" => 129,
            ),
            array(
                "id" => 1785,
                "name" => "Telaga Biru",
                "city_id" => 129,
            ),
            array(
                "id" => 1786,
                "name" => "Telaga Jaya",
                "city_id" => 129,
            ),
            array(
                "id" => 1787,
                "name" => "Tibawa",
                "city_id" => 129,
            ),
            array(
                "id" => 1788,
                "name" => "Tilango",
                "city_id" => 129,
            ),
            array(
                "id" => 1789,
                "name" => "Tolangohula",
                "city_id" => 129,
            ),
            array(
                "id" => 1790,
                "name" => "Dumbo Raya",
                "city_id" => 130,
            ),
            array(
                "id" => 1791,
                "name" => "Dungingi",
                "city_id" => 130,
            ),
            array(
                "id" => 1792,
                "name" => "Hulonthalangi",
                "city_id" => 130,
            ),
            array(
                "id" => 1793,
                "name" => "Kota Barat",
                "city_id" => 130,
            ),
            array(
                "id" => 1794,
                "name" => "Kota Selatan",
                "city_id" => 130,
            ),
            array(
                "id" => 1795,
                "name" => "Kota Tengah",
                "city_id" => 130,
            ),
            array(
                "id" => 1796,
                "name" => "Kota Timur",
                "city_id" => 130,
            ),
            array(
                "id" => 1797,
                "name" => "Kota Utara",
                "city_id" => 130,
            ),
            array(
                "id" => 1798,
                "name" => "Sipatana",
                "city_id" => 130,
            ),
            array(
                "id" => 1799,
                "name" => "Anggrek",
                "city_id" => 131,
            ),
            array(
                "id" => 1800,
                "name" => "Atinggola",
                "city_id" => 131,
            ),
            array(
                "id" => 1801,
                "name" => "Biau",
                "city_id" => 131,
            ),
            array(
                "id" => 1802,
                "name" => "Gentuma Raya",
                "city_id" => 131,
            ),
            array(
                "id" => 1803,
                "name" => "Kwandang",
                "city_id" => 131,
            ),
            array(
                "id" => 1804,
                "name" => "Monano",
                "city_id" => 131,
            ),
            array(
                "id" => 1805,
                "name" => "Ponelo Kepulauan",
                "city_id" => 131,
            ),
            array(
                "id" => 1806,
                "name" => "Sumalata",
                "city_id" => 131,
            ),
            array(
                "id" => 1807,
                "name" => "Sumalata Timur",
                "city_id" => 131,
            ),
            array(
                "id" => 1808,
                "name" => "Tolinggula",
                "city_id" => 131,
            ),
            array(
                "id" => 1809,
                "name" => "Tomolito",
                "city_id" => 131,
            ),
            array(
                "id" => 1810,
                "name" => "Bajeng",
                "city_id" => 132,
            ),
            array(
                "id" => 1811,
                "name" => "Bajeng Barat",
                "city_id" => 132,
            ),
            array(
                "id" => 1812,
                "name" => "Barombong",
                "city_id" => 132,
            ),
            array(
                "id" => 1813,
                "name" => "Biringbulu",
                "city_id" => 132,
            ),
            array(
                "id" => 1814,
                "name" => "Bontolempangang",
                "city_id" => 132,
            ),
            array(
                "id" => 1815,
                "name" => "Bontomarannu",
                "city_id" => 132,
            ),
            array(
                "id" => 1816,
                "name" => "Bontonompo",
                "city_id" => 132,
            ),
            array(
                "id" => 1817,
                "name" => "Bontonompo Selatan",
                "city_id" => 132,
            ),
            array(
                "id" => 1818,
                "name" => "Bungaya",
                "city_id" => 132,
            ),
            array(
                "id" => 1819,
                "name" => "Manuju",
                "city_id" => 132,
            ),
            array(
                "id" => 1820,
                "name" => "Pallangga",
                "city_id" => 132,
            ),
            array(
                "id" => 1821,
                "name" => "Parangloe",
                "city_id" => 132,
            ),
            array(
                "id" => 1822,
                "name" => "Parigi",
                "city_id" => 132,
            ),
            array(
                "id" => 1823,
                "name" => "Pattallassang",
                "city_id" => 132,
            ),
            array(
                "id" => 1824,
                "name" => "Somba Opu (Upu)",
                "city_id" => 132,
            ),
            array(
                "id" => 1825,
                "name" => "Tinggimoncong",
                "city_id" => 132,
            ),
            array(
                "id" => 1826,
                "name" => "Tombolo Pao",
                "city_id" => 132,
            ),
            array(
                "id" => 1827,
                "name" => "Tompobulu",
                "city_id" => 132,
            ),
            array(
                "id" => 1828,
                "name" => "Balong Panggang",
                "city_id" => 133,
            ),
            array(
                "id" => 1829,
                "name" => "Benjeng",
                "city_id" => 133,
            ),
            array(
                "id" => 1830,
                "name" => "Bungah",
                "city_id" => 133,
            ),
            array(
                "id" => 1831,
                "name" => "Cerme",
                "city_id" => 133,
            ),
            array(
                "id" => 1832,
                "name" => "Driyorejo",
                "city_id" => 133,
            ),
            array(
                "id" => 1833,
                "name" => "Duduk Sampeyan",
                "city_id" => 133,
            ),
            array(
                "id" => 1834,
                "name" => "Dukun",
                "city_id" => 133,
            ),
            array(
                "id" => 1835,
                "name" => "Gresik",
                "city_id" => 133,
            ),
            array(
                "id" => 1836,
                "name" => "Kebomas",
                "city_id" => 133,
            ),
            array(
                "id" => 1837,
                "name" => "Kedamean",
                "city_id" => 133,
            ),
            array(
                "id" => 1838,
                "name" => "Manyar",
                "city_id" => 133,
            ),
            array(
                "id" => 1839,
                "name" => "Menganti",
                "city_id" => 133,
            ),
            array(
                "id" => 1840,
                "name" => "Panceng",
                "city_id" => 133,
            ),
            array(
                "id" => 1841,
                "name" => "Sangkapura",
                "city_id" => 133,
            ),
            array(
                "id" => 1842,
                "name" => "Sidayu",
                "city_id" => 133,
            ),
            array(
                "id" => 1843,
                "name" => "Tambak",
                "city_id" => 133,
            ),
            array(
                "id" => 1844,
                "name" => "Ujung Pangkah",
                "city_id" => 133,
            ),
            array(
                "id" => 1845,
                "name" => "Wringin Anom",
                "city_id" => 133,
            ),
            array(
                "id" => 1846,
                "name" => "Brati",
                "city_id" => 134,
            ),
            array(
                "id" => 1847,
                "name" => "Gabus",
                "city_id" => 134,
            ),
            array(
                "id" => 1848,
                "name" => "Geyer",
                "city_id" => 134,
            ),
            array(
                "id" => 1849,
                "name" => "Godong",
                "city_id" => 134,
            ),
            array(
                "id" => 1850,
                "name" => "Grobogan",
                "city_id" => 134,
            ),
            array(
                "id" => 1851,
                "name" => "Gubug",
                "city_id" => 134,
            ),
            array(
                "id" => 1852,
                "name" => "Karangrayung",
                "city_id" => 134,
            ),
            array(
                "id" => 1853,
                "name" => "Kedungjati",
                "city_id" => 134,
            ),
            array(
                "id" => 1854,
                "name" => "Klambu",
                "city_id" => 134,
            ),
            array(
                "id" => 1855,
                "name" => "Kradenan",
                "city_id" => 134,
            ),
            array(
                "id" => 1856,
                "name" => "Ngaringan",
                "city_id" => 134,
            ),
            array(
                "id" => 1857,
                "name" => "Penawangan",
                "city_id" => 134,
            ),
            array(
                "id" => 1858,
                "name" => "Pulokulon",
                "city_id" => 134,
            ),
            array(
                "id" => 1859,
                "name" => "Purwodadi",
                "city_id" => 134,
            ),
            array(
                "id" => 1860,
                "name" => "Tanggungharjo",
                "city_id" => 134,
            ),
            array(
                "id" => 1861,
                "name" => "Tawangharjo",
                "city_id" => 134,
            ),
            array(
                "id" => 1862,
                "name" => "Tegowanu",
                "city_id" => 134,
            ),
            array(
                "id" => 1863,
                "name" => "Toroh",
                "city_id" => 134,
            ),
            array(
                "id" => 1864,
                "name" => "Wirosari",
                "city_id" => 134,
            ),
            array(
                "id" => 1865,
                "name" => "Gedang Sari",
                "city_id" => 135,
            ),
            array(
                "id" => 1866,
                "name" => "Girisubo",
                "city_id" => 135,
            ),
            array(
                "id" => 1867,
                "name" => "Karangmojo",
                "city_id" => 135,
            ),
            array(
                "id" => 1868,
                "name" => "Ngawen",
                "city_id" => 135,
            ),
            array(
                "id" => 1869,
                "name" => "Nglipar",
                "city_id" => 135,
            ),
            array(
                "id" => 1870,
                "name" => "Paliyan",
                "city_id" => 135,
            ),
            array(
                "id" => 1871,
                "name" => "Panggang",
                "city_id" => 135,
            ),
            array(
                "id" => 1872,
                "name" => "Patuk",
                "city_id" => 135,
            ),
            array(
                "id" => 1873,
                "name" => "Playen",
                "city_id" => 135,
            ),
            array(
                "id" => 1874,
                "name" => "Ponjong",
                "city_id" => 135,
            ),
            array(
                "id" => 1875,
                "name" => "Purwosari",
                "city_id" => 135,
            ),
            array(
                "id" => 1876,
                "name" => "Rongkop",
                "city_id" => 135,
            ),
            array(
                "id" => 1877,
                "name" => "Sapto Sari",
                "city_id" => 135,
            ),
            array(
                "id" => 1878,
                "name" => "Semanu",
                "city_id" => 135,
            ),
            array(
                "id" => 1879,
                "name" => "Semin",
                "city_id" => 135,
            ),
            array(
                "id" => 1880,
                "name" => "Tanjungsari",
                "city_id" => 135,
            ),
            array(
                "id" => 1881,
                "name" => "Tepus",
                "city_id" => 135,
            ),
            array(
                "id" => 1882,
                "name" => "Wonosari",
                "city_id" => 135,
            ),
            array(
                "id" => 1883,
                "name" => "Damang Batu",
                "city_id" => 136,
            ),
            array(
                "id" => 1884,
                "name" => "Kahayan Hulu Utara",
                "city_id" => 136,
            ),
            array(
                "id" => 1885,
                "name" => "Kurun",
                "city_id" => 136,
            ),
            array(
                "id" => 1886,
                "name" => "Manuhing",
                "city_id" => 136,
            ),
            array(
                "id" => 1887,
                "name" => "Manuhing Raya",
                "city_id" => 136,
            ),
            array(
                "id" => 1888,
                "name" => "Mihing Raya",
                "city_id" => 136,
            ),
            array(
                "id" => 1889,
                "name" => "Miri Manasa",
                "city_id" => 136,
            ),
            array(
                "id" => 1890,
                "name" => "Rungan",
                "city_id" => 136,
            ),
            array(
                "id" => 1891,
                "name" => "Rungan Barat",
                "city_id" => 136,
            ),
            array(
                "id" => 1892,
                "name" => "Rungan Hulu",
                "city_id" => 136,
            ),
            array(
                "id" => 1893,
                "name" => "Sepang (Sepang Simin)",
                "city_id" => 136,
            ),
            array(
                "id" => 1894,
                "name" => "Tewah",
                "city_id" => 136,
            ),
            array(
                "id" => 1895,
                "name" => "Gunungsitoli",
                "city_id" => 137,
            ),
            array(
                "id" => 1896,
                "name" => "Gunungsitoli Alo'oa",
                "city_id" => 137,
            ),
            array(
                "id" => 1897,
                "name" => "Gunungsitoli Barat",
                "city_id" => 137,
            ),
            array(
                "id" => 1898,
                "name" => "Gunungsitoli Idanoi",
                "city_id" => 137,
            ),
            array(
                "id" => 1899,
                "name" => "Gunungsitoli Selatan",
                "city_id" => 137,
            ),
            array(
                "id" => 1900,
                "name" => "Gunungsitoli Utara",
                "city_id" => 137,
            ),
            array(
                "id" => 1901,
                "name" => "Ibu",
                "city_id" => 138,
            ),
            array(
                "id" => 1902,
                "name" => "Ibu Selatan",
                "city_id" => 138,
            ),
            array(
                "id" => 1903,
                "name" => "Ibu Utara",
                "city_id" => 138,
            ),
            array(
                "id" => 1904,
                "name" => "Jailolo",
                "city_id" => 138,
            ),
            array(
                "id" => 1905,
                "name" => "Jailolo Selatan",
                "city_id" => 138,
            ),
            array(
                "id" => 1906,
                "name" => "Loloda",
                "city_id" => 138,
            ),
            array(
                "id" => 1907,
                "name" => "Sahu",
                "city_id" => 138,
            ),
            array(
                "id" => 1908,
                "name" => "Sahu Timur",
                "city_id" => 138,
            ),
            array(
                "id" => 1909,
                "name" => "Bacan",
                "city_id" => 139,
            ),
            array(
                "id" => 1910,
                "name" => "Bacan Barat",
                "city_id" => 139,
            ),
            array(
                "id" => 1911,
                "name" => "Bacan Barat Utara",
                "city_id" => 139,
            ),
            array(
                "id" => 1912,
                "name" => "Bacan Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1913,
                "name" => "Bacan Timur",
                "city_id" => 139,
            ),
            array(
                "id" => 1914,
                "name" => "Bacan Timur Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1915,
                "name" => "Bacan Timur Tengah",
                "city_id" => 139,
            ),
            array(
                "id" => 1916,
                "name" => "Gane Barat",
                "city_id" => 139,
            ),
            array(
                "id" => 1917,
                "name" => "Gane Barat Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1918,
                "name" => "Gane Barat Utara",
                "city_id" => 139,
            ),
            array(
                "id" => 1919,
                "name" => "Gane Timur",
                "city_id" => 139,
            ),
            array(
                "id" => 1920,
                "name" => "Gane Timur Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1921,
                "name" => "Gane Timur Tengah",
                "city_id" => 139,
            ),
            array(
                "id" => 1922,
                "name" => "Kasiruta Barat",
                "city_id" => 139,
            ),
            array(
                "id" => 1923,
                "name" => "Kasiruta Timur",
                "city_id" => 139,
            ),
            array(
                "id" => 1924,
                "name" => "Kayoa",
                "city_id" => 139,
            ),
            array(
                "id" => 1925,
                "name" => "Kayoa Barat",
                "city_id" => 139,
            ),
            array(
                "id" => 1926,
                "name" => "Kayoa Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1927,
                "name" => "Kayoa Utara",
                "city_id" => 139,
            ),
            array(
                "id" => 1928,
                "name" => "Kepulauan Botanglomang",
                "city_id" => 139,
            ),
            array(
                "id" => 1929,
                "name" => "Kepulauan Joronga",
                "city_id" => 139,
            ),
            array(
                "id" => 1930,
                "name" => "Makian (Pulau Makian)",
                "city_id" => 139,
            ),
            array(
                "id" => 1931,
                "name" => "Makian Barat (Pulau Makian)",
                "city_id" => 139,
            ),
            array(
                "id" => 1932,
                "name" => "Mandioli Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1933,
                "name" => "Mandioli Utara",
                "city_id" => 139,
            ),
            array(
                "id" => 1934,
                "name" => "Obi",
                "city_id" => 139,
            ),
            array(
                "id" => 1935,
                "name" => "Obi Barat",
                "city_id" => 139,
            ),
            array(
                "id" => 1936,
                "name" => "Obi Selatan",
                "city_id" => 139,
            ),
            array(
                "id" => 1937,
                "name" => "Obi Timur",
                "city_id" => 139,
            ),
            array(
                "id" => 1938,
                "name" => "Obi Utara",
                "city_id" => 139,
            ),
            array(
                "id" => 1939,
                "name" => "Patani",
                "city_id" => 140,
            ),
            array(
                "id" => 1940,
                "name" => "Patani Barat",
                "city_id" => 140,
            ),
            array(
                "id" => 1941,
                "name" => "Patani Utara",
                "city_id" => 140,
            ),
            array(
                "id" => 1942,
                "name" => "Pulau Gebe",
                "city_id" => 140,
            ),
            array(
                "id" => 1943,
                "name" => "Weda",
                "city_id" => 140,
            ),
            array(
                "id" => 1944,
                "name" => "Weda Selatan",
                "city_id" => 140,
            ),
            array(
                "id" => 1945,
                "name" => "Weda Tengah",
                "city_id" => 140,
            ),
            array(
                "id" => 1946,
                "name" => "Weda Utara",
                "city_id" => 140,
            ),
            array(
                "id" => 1947,
                "name" => "Kota Maba",
                "city_id" => 141,
            ),
            array(
                "id" => 1948,
                "name" => "Maba",
                "city_id" => 141,
            ),
            array(
                "id" => 1949,
                "name" => "Maba Selatan",
                "city_id" => 141,
            ),
            array(
                "id" => 1950,
                "name" => "Maba Tengah",
                "city_id" => 141,
            ),
            array(
                "id" => 1951,
                "name" => "Maba Utara",
                "city_id" => 141,
            ),
            array(
                "id" => 1952,
                "name" => "Wasile",
                "city_id" => 141,
            ),
            array(
                "id" => 1953,
                "name" => "Wasile Selatan",
                "city_id" => 141,
            ),
            array(
                "id" => 1954,
                "name" => "Wasile Tengah",
                "city_id" => 141,
            ),
            array(
                "id" => 1955,
                "name" => "Wasile Timur",
                "city_id" => 141,
            ),
            array(
                "id" => 1956,
                "name" => "Wasile Utara",
                "city_id" => 141,
            ),
            array(
                "id" => 1957,
                "name" => "Galela",
                "city_id" => 142,
            ),
            array(
                "id" => 1958,
                "name" => "Galela Barat",
                "city_id" => 142,
            ),
            array(
                "id" => 1959,
                "name" => "Galela Selatan",
                "city_id" => 142,
            ),
            array(
                "id" => 1960,
                "name" => "Galela Utara",
                "city_id" => 142,
            ),
            array(
                "id" => 1961,
                "name" => "Kao",
                "city_id" => 142,
            ),
            array(
                "id" => 1962,
                "name" => "Kao Barat",
                "city_id" => 142,
            ),
            array(
                "id" => 1963,
                "name" => "Kao Teluk",
                "city_id" => 142,
            ),
            array(
                "id" => 1964,
                "name" => "Kao Utara",
                "city_id" => 142,
            ),
            array(
                "id" => 1965,
                "name" => "Loloda Kepulauan",
                "city_id" => 142,
            ),
            array(
                "id" => 1966,
                "name" => "Loloda Utara",
                "city_id" => 142,
            ),
            array(
                "id" => 1967,
                "name" => "Malifut",
                "city_id" => 142,
            ),
            array(
                "id" => 1968,
                "name" => "Tobelo",
                "city_id" => 142,
            ),
            array(
                "id" => 1969,
                "name" => "Tobelo Barat",
                "city_id" => 142,
            ),
            array(
                "id" => 1970,
                "name" => "Tobelo Selatan",
                "city_id" => 142,
            ),
            array(
                "id" => 1971,
                "name" => "Tobelo Tengah",
                "city_id" => 142,
            ),
            array(
                "id" => 1972,
                "name" => "Tobelo Timur",
                "city_id" => 142,
            ),
            array(
                "id" => 1973,
                "name" => "Tobelo Utara",
                "city_id" => 142,
            ),
            array(
                "id" => 1974,
                "name" => "Angkinang",
                "city_id" => 143,
            ),
            array(
                "id" => 1975,
                "name" => "Daha Barat",
                "city_id" => 143,
            ),
            array(
                "id" => 1976,
                "name" => "Daha Selatan",
                "city_id" => 143,
            ),
            array(
                "id" => 1977,
                "name" => "Daha Utara",
                "city_id" => 143,
            ),
            array(
                "id" => 1978,
                "name" => "Kalumpang (Kelumpang)",
                "city_id" => 143,
            ),
            array(
                "id" => 1979,
                "name" => "Kandangan",
                "city_id" => 143,
            ),
            array(
                "id" => 1980,
                "name" => "Loksado",
                "city_id" => 143,
            ),
            array(
                "id" => 1981,
                "name" => "Padang Batung",
                "city_id" => 143,
            ),
            array(
                "id" => 1982,
                "name" => "Simpur",
                "city_id" => 143,
            ),
            array(
                "id" => 1983,
                "name" => "Sungai Raya",
                "city_id" => 143,
            ),
            array(
                "id" => 1984,
                "name" => "Telaga Langsat",
                "city_id" => 143,
            ),
            array(
                "id" => 1985,
                "name" => "Barabai",
                "city_id" => 144,
            ),
            array(
                "id" => 1986,
                "name" => "Batang Alai Selatan",
                "city_id" => 144,
            ),
            array(
                "id" => 1987,
                "name" => "Batang Alai Timur",
                "city_id" => 144,
            ),
            array(
                "id" => 1988,
                "name" => "Batang Alai Utara",
                "city_id" => 144,
            ),
            array(
                "id" => 1989,
                "name" => "Batu Benawa",
                "city_id" => 144,
            ),
            array(
                "id" => 1990,
                "name" => "Hantakan",
                "city_id" => 144,
            ),
            array(
                "id" => 1991,
                "name" => "Haruyan",
                "city_id" => 144,
            ),
            array(
                "id" => 1992,
                "name" => "Labuan Amas Selatan",
                "city_id" => 144,
            ),
            array(
                "id" => 1993,
                "name" => "Labuan Amas Utara",
                "city_id" => 144,
            ),
            array(
                "id" => 1994,
                "name" => "Limpasu",
                "city_id" => 144,
            ),
            array(
                "id" => 1995,
                "name" => "Pandawan",
                "city_id" => 144,
            ),
            array(
                "id" => 1996,
                "name" => "Amuntai Selatan",
                "city_id" => 145,
            ),
            array(
                "id" => 1997,
                "name" => "Amuntai Tengah",
                "city_id" => 145,
            ),
            array(
                "id" => 1998,
                "name" => "Amuntai Utara",
                "city_id" => 145,
            ),
            array(
                "id" => 1999,
                "name" => "Babirik",
                "city_id" => 145,
            ),
            array(
                "id" => 2000,
                "name" => "Banjang",
                "city_id" => 145,
            ),
            array(
                "id" => 2001,
                "name" => "Danau Panggang",
                "city_id" => 145,
            ),
            array(
                "id" => 2002,
                "name" => "Haur Gading",
                "city_id" => 145,
            ),
            array(
                "id" => 2003,
                "name" => "Paminggir",
                "city_id" => 145,
            ),
            array(
                "id" => 2004,
                "name" => "Sungai Pandan",
                "city_id" => 145,
            ),
            array(
                "id" => 2005,
                "name" => "Sungai Tabukan",
                "city_id" => 145,
            ),
            array(
                "id" => 2006,
                "name" => "Bakti Raja",
                "city_id" => 146,
            ),
            array(
                "id" => 2007,
                "name" => "Dolok Sanggul",
                "city_id" => 146,
            ),
            array(
                "id" => 2008,
                "name" => "Lintong Nihuta",
                "city_id" => 146,
            ),
            array(
                "id" => 2009,
                "name" => "Onan Ganjang",
                "city_id" => 146,
            ),
            array(
                "id" => 2010,
                "name" => "Pakkat",
                "city_id" => 146,
            ),
            array(
                "id" => 2011,
                "name" => "Paranginan",
                "city_id" => 146,
            ),
            array(
                "id" => 2012,
                "name" => "Parlilitan",
                "city_id" => 146,
            ),
            array(
                "id" => 2013,
                "name" => "Pollung",
                "city_id" => 146,
            ),
            array(
                "id" => 2014,
                "name" => "Sijama Polang",
                "city_id" => 146,
            ),
            array(
                "id" => 2015,
                "name" => "Tara Bintang",
                "city_id" => 146,
            ),
            array(
                "id" => 2016,
                "name" => "Batang Tuaka",
                "city_id" => 147,
            ),
            array(
                "id" => 2017,
                "name" => "Concong",
                "city_id" => 147,
            ),
            array(
                "id" => 2018,
                "name" => "Enok",
                "city_id" => 147,
            ),
            array(
                "id" => 2019,
                "name" => "Gaung",
                "city_id" => 147,
            ),
            array(
                "id" => 2020,
                "name" => "Gaung Anak Serka",
                "city_id" => 147,
            ),
            array(
                "id" => 2021,
                "name" => "Kateman",
                "city_id" => 147,
            ),
            array(
                "id" => 2022,
                "name" => "Kempas",
                "city_id" => 147,
            ),
            array(
                "id" => 2023,
                "name" => "Kemuning",
                "city_id" => 147,
            ),
            array(
                "id" => 2024,
                "name" => "Keritang",
                "city_id" => 147,
            ),
            array(
                "id" => 2025,
                "name" => "Kuala Indragiri",
                "city_id" => 147,
            ),
            array(
                "id" => 2026,
                "name" => "Mandah",
                "city_id" => 147,
            ),
            array(
                "id" => 2027,
                "name" => "Pelangiran",
                "city_id" => 147,
            ),
            array(
                "id" => 2028,
                "name" => "Pulau Burung",
                "city_id" => 147,
            ),
            array(
                "id" => 2029,
                "name" => "Reteh",
                "city_id" => 147,
            ),
            array(
                "id" => 2030,
                "name" => "Sungai Batang",
                "city_id" => 147,
            ),
            array(
                "id" => 2031,
                "name" => "Tanah Merah",
                "city_id" => 147,
            ),
            array(
                "id" => 2032,
                "name" => "Teluk Belengkong",
                "city_id" => 147,
            ),
            array(
                "id" => 2033,
                "name" => "Tembilahan",
                "city_id" => 147,
            ),
            array(
                "id" => 2034,
                "name" => "Tembilahan Hulu",
                "city_id" => 147,
            ),
            array(
                "id" => 2035,
                "name" => "Tempuling",
                "city_id" => 147,
            ),
            array(
                "id" => 2036,
                "name" => "Batang Cenaku",
                "city_id" => 148,
            ),
            array(
                "id" => 2037,
                "name" => "Batang Gansal",
                "city_id" => 148,
            ),
            array(
                "id" => 2038,
                "name" => "Batang Peranap",
                "city_id" => 148,
            ),
            array(
                "id" => 2039,
                "name" => "Kelayang",
                "city_id" => 148,
            ),
            array(
                "id" => 2040,
                "name" => "Kuala Cenaku",
                "city_id" => 148,
            ),
            array(
                "id" => 2041,
                "name" => "Lirik",
                "city_id" => 148,
            ),
            array(
                "id" => 2042,
                "name" => "Lubuk Batu Jaya",
                "city_id" => 148,
            ),
            array(
                "id" => 2043,
                "name" => "Pasir Penyu",
                "city_id" => 148,
            ),
            array(
                "id" => 2044,
                "name" => "Peranap",
                "city_id" => 148,
            ),
            array(
                "id" => 2045,
                "name" => "Rakit Kulim",
                "city_id" => 148,
            ),
            array(
                "id" => 2046,
                "name" => "Rengat",
                "city_id" => 148,
            ),
            array(
                "id" => 2047,
                "name" => "Rengat Barat",
                "city_id" => 148,
            ),
            array(
                "id" => 2048,
                "name" => "Seberida",
                "city_id" => 148,
            ),
            array(
                "id" => 2049,
                "name" => "Sungai Lala",
                "city_id" => 148,
            ),
            array(
                "id" => 2050,
                "name" => "Anjatan",
                "city_id" => 149,
            ),
            array(
                "id" => 2051,
                "name" => "Arahan",
                "city_id" => 149,
            ),
            array(
                "id" => 2052,
                "name" => "Balongan",
                "city_id" => 149,
            ),
            array(
                "id" => 2053,
                "name" => "Bangodua",
                "city_id" => 149,
            ),
            array(
                "id" => 2054,
                "name" => "Bongas",
                "city_id" => 149,
            ),
            array(
                "id" => 2055,
                "name" => "Cantigi",
                "city_id" => 149,
            ),
            array(
                "id" => 2056,
                "name" => "Cikedung",
                "city_id" => 149,
            ),
            array(
                "id" => 2057,
                "name" => "Gabuswetan",
                "city_id" => 149,
            ),
            array(
                "id" => 2058,
                "name" => "Gantar",
                "city_id" => 149,
            ),
            array(
                "id" => 2059,
                "name" => "Haurgeulis",
                "city_id" => 149,
            ),
            array(
                "id" => 2060,
                "name" => "Indramayu",
                "city_id" => 149,
            ),
            array(
                "id" => 2061,
                "name" => "Jatibarang",
                "city_id" => 149,
            ),
            array(
                "id" => 2062,
                "name" => "Juntinyuat",
                "city_id" => 149,
            ),
            array(
                "id" => 2063,
                "name" => "Kandanghaur",
                "city_id" => 149,
            ),
            array(
                "id" => 2064,
                "name" => "Karangampel",
                "city_id" => 149,
            ),
            array(
                "id" => 2065,
                "name" => "Kedokan Bunder",
                "city_id" => 149,
            ),
            array(
                "id" => 2066,
                "name" => "Kertasemaya",
                "city_id" => 149,
            ),
            array(
                "id" => 2067,
                "name" => "Krangkeng",
                "city_id" => 149,
            ),
            array(
                "id" => 2068,
                "name" => "Kroya",
                "city_id" => 149,
            ),
            array(
                "id" => 2069,
                "name" => "Lelea",
                "city_id" => 149,
            ),
            array(
                "id" => 2070,
                "name" => "Lohbener",
                "city_id" => 149,
            ),
            array(
                "id" => 2071,
                "name" => "Losarang",
                "city_id" => 149,
            ),
            array(
                "id" => 2072,
                "name" => "Pasekan",
                "city_id" => 149,
            ),
            array(
                "id" => 2073,
                "name" => "Patrol",
                "city_id" => 149,
            ),
            array(
                "id" => 2074,
                "name" => "Sindang",
                "city_id" => 149,
            ),
            array(
                "id" => 2075,
                "name" => "Sliyeg",
                "city_id" => 149,
            ),
            array(
                "id" => 2076,
                "name" => "Sukagumiwang",
                "city_id" => 149,
            ),
            array(
                "id" => 2077,
                "name" => "Sukra",
                "city_id" => 149,
            ),
            array(
                "id" => 2078,
                "name" => "Trisi/Terisi",
                "city_id" => 149,
            ),
            array(
                "id" => 2079,
                "name" => "Tukdana",
                "city_id" => 149,
            ),
            array(
                "id" => 2080,
                "name" => "Widasari",
                "city_id" => 149,
            ),
            array(
                "id" => 2081,
                "name" => "Agisiga",
                "city_id" => 150,
            ),
            array(
                "id" => 2082,
                "name" => "Biandoga",
                "city_id" => 150,
            ),
            array(
                "id" => 2083,
                "name" => "Hitadipa",
                "city_id" => 150,
            ),
            array(
                "id" => 2084,
                "name" => "Homeo (Homeyo)",
                "city_id" => 150,
            ),
            array(
                "id" => 2085,
                "name" => "Sugapa",
                "city_id" => 150,
            ),
            array(
                "id" => 2086,
                "name" => "Wandai",
                "city_id" => 150,
            ),
            array(
                "id" => 2087,
                "name" => "Cengkareng",
                "city_id" => 151,
            ),
            array(
                "id" => 2088,
                "name" => "Grogol Petamburan",
                "city_id" => 151,
            ),
            array(
                "id" => 2089,
                "name" => "Kalideres",
                "city_id" => 151,
            ),
            array(
                "id" => 2090,
                "name" => "Kebon Jeruk",
                "city_id" => 151,
            ),
            array(
                "id" => 2091,
                "name" => "Kembangan",
                "city_id" => 151,
            ),
            array(
                "id" => 2092,
                "name" => "Palmerah",
                "city_id" => 151,
            ),
            array(
                "id" => 2093,
                "name" => "Taman Sari",
                "city_id" => 151,
            ),
            array(
                "id" => 2094,
                "name" => "Tambora",
                "city_id" => 151,
            ),
            array(
                "id" => 2095,
                "name" => "Cempaka Putih",
                "city_id" => 152,
            ),
            array(
                "id" => 2096,
                "name" => "Gambir",
                "city_id" => 152,
            ),
            array(
                "id" => 2097,
                "name" => "Johar Baru",
                "city_id" => 152,
            ),
            array(
                "id" => 2098,
                "name" => "Kemayoran",
                "city_id" => 152,
            ),
            array(
                "id" => 2099,
                "name" => "Menteng",
                "city_id" => 152,
            ),
            array(
                "id" => 2100,
                "name" => "Sawah Besar",
                "city_id" => 152,
            ),
            array(
                "id" => 2101,
                "name" => "Senen",
                "city_id" => 152,
            ),
            array(
                "id" => 2102,
                "name" => "Tanah Abang",
                "city_id" => 152,
            ),
            array(
                "id" => 2103,
                "name" => "Cilandak",
                "city_id" => 153,
            ),
            array(
                "id" => 2104,
                "name" => "Jagakarsa",
                "city_id" => 153,
            ),
            array(
                "id" => 2105,
                "name" => "Kebayoran Baru",
                "city_id" => 153,
            ),
            array(
                "id" => 2106,
                "name" => "Kebayoran Lama",
                "city_id" => 153,
            ),
            array(
                "id" => 2107,
                "name" => "Mampang Prapatan",
                "city_id" => 153,
            ),
            array(
                "id" => 2108,
                "name" => "Pancoran",
                "city_id" => 153,
            ),
            array(
                "id" => 2109,
                "name" => "Pasar Minggu",
                "city_id" => 153,
            ),
            array(
                "id" => 2110,
                "name" => "Pesanggrahan",
                "city_id" => 153,
            ),
            array(
                "id" => 2111,
                "name" => "Setia Budi",
                "city_id" => 153,
            ),
            array(
                "id" => 2112,
                "name" => "Tebet",
                "city_id" => 153,
            ),
            array(
                "id" => 2113,
                "name" => "Cakung",
                "city_id" => 154,
            ),
            array(
                "id" => 2114,
                "name" => "Cipayung",
                "city_id" => 154,
            ),
            array(
                "id" => 2115,
                "name" => "Ciracas",
                "city_id" => 154,
            ),
            array(
                "id" => 2116,
                "name" => "Duren Sawit",
                "city_id" => 154,
            ),
            array(
                "id" => 2117,
                "name" => "Jatinegara",
                "city_id" => 154,
            ),
            array(
                "id" => 2118,
                "name" => "Kramat Jati",
                "city_id" => 154,
            ),
            array(
                "id" => 2119,
                "name" => "Makasar",
                "city_id" => 154,
            ),
            array(
                "id" => 2120,
                "name" => "Matraman",
                "city_id" => 154,
            ),
            array(
                "id" => 2121,
                "name" => "Pasar Rebo",
                "city_id" => 154,
            ),
            array(
                "id" => 2122,
                "name" => "Pulo Gadung",
                "city_id" => 154,
            ),
            array(
                "id" => 2123,
                "name" => "Cilincing",
                "city_id" => 155,
            ),
            array(
                "id" => 2124,
                "name" => "Kelapa Gading",
                "city_id" => 155,
            ),
            array(
                "id" => 2125,
                "name" => "Koja",
                "city_id" => 155,
            ),
            array(
                "id" => 2126,
                "name" => "Pademangan",
                "city_id" => 155,
            ),
            array(
                "id" => 2127,
                "name" => "Penjaringan",
                "city_id" => 155,
            ),
            array(
                "id" => 2128,
                "name" => "Tanjung Priok",
                "city_id" => 155,
            ),
            array(
                "id" => 2129,
                "name" => "Danau Teluk",
                "city_id" => 156,
            ),
            array(
                "id" => 2130,
                "name" => "Jambi Selatan",
                "city_id" => 156,
            ),
            array(
                "id" => 2131,
                "name" => "Jambi Timur",
                "city_id" => 156,
            ),
            array(
                "id" => 2132,
                "name" => "Jelutung",
                "city_id" => 156,
            ),
            array(
                "id" => 2133,
                "name" => "Kota Baru",
                "city_id" => 156,
            ),
            array(
                "id" => 2134,
                "name" => "Pasar Jambi",
                "city_id" => 156,
            ),
            array(
                "id" => 2135,
                "name" => "Pelayangan",
                "city_id" => 156,
            ),
            array(
                "id" => 2136,
                "name" => "Telanaipura",
                "city_id" => 156,
            ),
            array(
                "id" => 2137,
                "name" => "Airu",
                "city_id" => 157,
            ),
            array(
                "id" => 2138,
                "name" => "Demta",
                "city_id" => 157,
            ),
            array(
                "id" => 2139,
                "name" => "Depapre",
                "city_id" => 157,
            ),
            array(
                "id" => 2140,
                "name" => "Ebungfau (Ebungfa)",
                "city_id" => 157,
            ),
            array(
                "id" => 2141,
                "name" => "Gresi Selatan",
                "city_id" => 157,
            ),
            array(
                "id" => 2142,
                "name" => "Kaureh",
                "city_id" => 157,
            ),
            array(
                "id" => 2143,
                "name" => "Kemtuk",
                "city_id" => 157,
            ),
            array(
                "id" => 2144,
                "name" => "Kemtuk Gresi",
                "city_id" => 157,
            ),
            array(
                "id" => 2145,
                "name" => "Nambluong",
                "city_id" => 157,
            ),
            array(
                "id" => 2146,
                "name" => "Nimbokrang",
                "city_id" => 157,
            ),
            array(
                "id" => 2147,
                "name" => "Nimboran",
                "city_id" => 157,
            ),
            array(
                "id" => 2148,
                "name" => "Ravenirara",
                "city_id" => 157,
            ),
            array(
                "id" => 2149,
                "name" => "Sentani",
                "city_id" => 157,
            ),
            array(
                "id" => 2150,
                "name" => "Sentani Barat",
                "city_id" => 157,
            ),
            array(
                "id" => 2151,
                "name" => "Sentani Timur",
                "city_id" => 157,
            ),
            array(
                "id" => 2152,
                "name" => "Unurum Guay",
                "city_id" => 157,
            ),
            array(
                "id" => 2153,
                "name" => "Waibu",
                "city_id" => 157,
            ),
            array(
                "id" => 2154,
                "name" => "Yapsi",
                "city_id" => 157,
            ),
            array(
                "id" => 2155,
                "name" => "Yokari",
                "city_id" => 157,
            ),
            array(
                "id" => 2156,
                "name" => "Abepura",
                "city_id" => 158,
            ),
            array(
                "id" => 2157,
                "name" => "Heram",
                "city_id" => 158,
            ),
            array(
                "id" => 2158,
                "name" => "Jayapura Selatan",
                "city_id" => 158,
            ),
            array(
                "id" => 2159,
                "name" => "Jayapura Utara",
                "city_id" => 158,
            ),
            array(
                "id" => 2160,
                "name" => "Muara Tami",
                "city_id" => 158,
            ),
            array(
                "id" => 2161,
                "name" => "Asologaima (Asalogaima)",
                "city_id" => 159,
            ),
            array(
                "id" => 2162,
                "name" => "Asolokobal",
                "city_id" => 159,
            ),
            array(
                "id" => 2163,
                "name" => "Asotipo",
                "city_id" => 159,
            ),
            array(
                "id" => 2164,
                "name" => "Bolakme",
                "city_id" => 159,
            ),
            array(
                "id" => 2165,
                "name" => "Bpiri",
                "city_id" => 159,
            ),
            array(
                "id" => 2166,
                "name" => "Bugi",
                "city_id" => 159,
            ),
            array(
                "id" => 2167,
                "name" => "Hubikiak",
                "city_id" => 159,
            ),
            array(
                "id" => 2168,
                "name" => "Hubikosi (Hobikosi)",
                "city_id" => 159,
            ),
            array(
                "id" => 2169,
                "name" => "Ibele",
                "city_id" => 159,
            ),
            array(
                "id" => 2170,
                "name" => "Itlay Hisage",
                "city_id" => 159,
            ),
            array(
                "id" => 2171,
                "name" => "Koragi",
                "city_id" => 159,
            ),
            array(
                "id" => 2172,
                "name" => "Kurulu",
                "city_id" => 159,
            ),
            array(
                "id" => 2173,
                "name" => "Libarek",
                "city_id" => 159,
            ),
            array(
                "id" => 2174,
                "name" => "Maima",
                "city_id" => 159,
            ),
            array(
                "id" => 2175,
                "name" => "Molagalome",
                "city_id" => 159,
            ),
            array(
                "id" => 2176,
                "name" => "Muliama",
                "city_id" => 159,
            ),
            array(
                "id" => 2177,
                "name" => "Musatfak",
                "city_id" => 159,
            ),
            array(
                "id" => 2178,
                "name" => "Napua",
                "city_id" => 159,
            ),
            array(
                "id" => 2179,
                "name" => "Pelebaga",
                "city_id" => 159,
            ),
            array(
                "id" => 2180,
                "name" => "Piramid",
                "city_id" => 159,
            ),
            array(
                "id" => 2181,
                "name" => "Pisugi",
                "city_id" => 159,
            ),
            array(
                "id" => 2182,
                "name" => "Popugoba",
                "city_id" => 159,
            ),
            array(
                "id" => 2183,
                "name" => "Siepkosi",
                "city_id" => 159,
            ),
            array(
                "id" => 2184,
                "name" => "Silo Karno Doga",
                "city_id" => 159,
            ),
            array(
                "id" => 2185,
                "name" => "Taelarek",
                "city_id" => 159,
            ),
            array(
                "id" => 2186,
                "name" => "Tagime",
                "city_id" => 159,
            ),
            array(
                "id" => 2187,
                "name" => "Tagineri",
                "city_id" => 159,
            ),
            array(
                "id" => 2188,
                "name" => "Trikora",
                "city_id" => 159,
            ),
            array(
                "id" => 2189,
                "name" => "Usilimo",
                "city_id" => 159,
            ),
            array(
                "id" => 2190,
                "name" => "Wadangku",
                "city_id" => 159,
            ),
            array(
                "id" => 2191,
                "name" => "Walaik",
                "city_id" => 159,
            ),
            array(
                "id" => 2192,
                "name" => "Walelagama",
                "city_id" => 159,
            ),
            array(
                "id" => 2193,
                "name" => "Wame",
                "city_id" => 159,
            ),
            array(
                "id" => 2194,
                "name" => "Wamena",
                "city_id" => 159,
            ),
            array(
                "id" => 2195,
                "name" => "Welesi",
                "city_id" => 159,
            ),
            array(
                "id" => 2196,
                "name" => "Wesaput",
                "city_id" => 159,
            ),
            array(
                "id" => 2197,
                "name" => "Wita Waya",
                "city_id" => 159,
            ),
            array(
                "id" => 2198,
                "name" => "Wollo (Wolo)",
                "city_id" => 159,
            ),
            array(
                "id" => 2199,
                "name" => "Wouma",
                "city_id" => 159,
            ),
            array(
                "id" => 2200,
                "name" => "Yalengga",
                "city_id" => 159,
            ),
            array(
                "id" => 2201,
                "name" => "Ajung",
                "city_id" => 160,
            ),
            array(
                "id" => 2202,
                "name" => "Ambulu",
                "city_id" => 160,
            ),
            array(
                "id" => 2203,
                "name" => "Arjasa",
                "city_id" => 160,
            ),
            array(
                "id" => 2204,
                "name" => "Balung",
                "city_id" => 160,
            ),
            array(
                "id" => 2205,
                "name" => "Bangsalsari",
                "city_id" => 160,
            ),
            array(
                "id" => 2206,
                "name" => "Gumuk Mas",
                "city_id" => 160,
            ),
            array(
                "id" => 2207,
                "name" => "Jelbuk",
                "city_id" => 160,
            ),
            array(
                "id" => 2208,
                "name" => "Jenggawah",
                "city_id" => 160,
            ),
            array(
                "id" => 2209,
                "name" => "Jombang",
                "city_id" => 160,
            ),
            array(
                "id" => 2210,
                "name" => "Kalisat",
                "city_id" => 160,
            ),
            array(
                "id" => 2211,
                "name" => "Kaliwates",
                "city_id" => 160,
            ),
            array(
                "id" => 2212,
                "name" => "Kencong",
                "city_id" => 160,
            ),
            array(
                "id" => 2213,
                "name" => "Ledokombo",
                "city_id" => 160,
            ),
            array(
                "id" => 2214,
                "name" => "Mayang",
                "city_id" => 160,
            ),
            array(
                "id" => 2215,
                "name" => "Mumbulsari",
                "city_id" => 160,
            ),
            array(
                "id" => 2216,
                "name" => "Pakusari",
                "city_id" => 160,
            ),
            array(
                "id" => 2217,
                "name" => "Panti",
                "city_id" => 160,
            ),
            array(
                "id" => 2218,
                "name" => "Patrang",
                "city_id" => 160,
            ),
            array(
                "id" => 2219,
                "name" => "Puger",
                "city_id" => 160,
            ),
            array(
                "id" => 2220,
                "name" => "Rambipuji",
                "city_id" => 160,
            ),
            array(
                "id" => 2221,
                "name" => "Semboro",
                "city_id" => 160,
            ),
            array(
                "id" => 2222,
                "name" => "Silo",
                "city_id" => 160,
            ),
            array(
                "id" => 2223,
                "name" => "Sukorambi",
                "city_id" => 160,
            ),
            array(
                "id" => 2224,
                "name" => "Sukowono",
                "city_id" => 160,
            ),
            array(
                "id" => 2225,
                "name" => "Sumber Baru",
                "city_id" => 160,
            ),
            array(
                "id" => 2226,
                "name" => "Sumber Jambe",
                "city_id" => 160,
            ),
            array(
                "id" => 2227,
                "name" => "Sumber Sari",
                "city_id" => 160,
            ),
            array(
                "id" => 2228,
                "name" => "Tanggul",
                "city_id" => 160,
            ),
            array(
                "id" => 2229,
                "name" => "Tempurejo",
                "city_id" => 160,
            ),
            array(
                "id" => 2230,
                "name" => "Umbulsari",
                "city_id" => 160,
            ),
            array(
                "id" => 2231,
                "name" => "Wuluhan",
                "city_id" => 160,
            ),
            array(
                "id" => 2232,
                "name" => "Jembrana",
                "city_id" => 161,
            ),
            array(
                "id" => 2233,
                "name" => "Melaya",
                "city_id" => 161,
            ),
            array(
                "id" => 2234,
                "name" => "Mendoyo",
                "city_id" => 161,
            ),
            array(
                "id" => 2235,
                "name" => "Negara",
                "city_id" => 161,
            ),
            array(
                "id" => 2236,
                "name" => "Pekutatan",
                "city_id" => 161,
            ),
            array(
                "id" => 2237,
                "name" => "Arungkeke",
                "city_id" => 162,
            ),
            array(
                "id" => 2238,
                "name" => "Bangkala",
                "city_id" => 162,
            ),
            array(
                "id" => 2239,
                "name" => "Bangkala Barat",
                "city_id" => 162,
            ),
            array(
                "id" => 2240,
                "name" => "Batang",
                "city_id" => 162,
            ),
            array(
                "id" => 2241,
                "name" => "Binamu",
                "city_id" => 162,
            ),
            array(
                "id" => 2242,
                "name" => "Bontoramba",
                "city_id" => 162,
            ),
            array(
                "id" => 2243,
                "name" => "Kelara",
                "city_id" => 162,
            ),
            array(
                "id" => 2244,
                "name" => "Rumbia",
                "city_id" => 162,
            ),
            array(
                "id" => 2245,
                "name" => "Tamalatea",
                "city_id" => 162,
            ),
            array(
                "id" => 2246,
                "name" => "Tarowang",
                "city_id" => 162,
            ),
            array(
                "id" => 2247,
                "name" => "Turatea",
                "city_id" => 162,
            ),
            array(
                "id" => 2248,
                "name" => "Bangsri",
                "city_id" => 163,
            ),
            array(
                "id" => 2249,
                "name" => "Batealit",
                "city_id" => 163,
            ),
            array(
                "id" => 2250,
                "name" => "Donorojo",
                "city_id" => 163,
            ),
            array(
                "id" => 2251,
                "name" => "Jepara",
                "city_id" => 163,
            ),
            array(
                "id" => 2252,
                "name" => "Kalinyamatan",
                "city_id" => 163,
            ),
            array(
                "id" => 2253,
                "name" => "Karimunjawa",
                "city_id" => 163,
            ),
            array(
                "id" => 2254,
                "name" => "Kedung",
                "city_id" => 163,
            ),
            array(
                "id" => 2255,
                "name" => "Keling",
                "city_id" => 163,
            ),
            array(
                "id" => 2256,
                "name" => "Kembang",
                "city_id" => 163,
            ),
            array(
                "id" => 2257,
                "name" => "Mayong",
                "city_id" => 163,
            ),
            array(
                "id" => 2258,
                "name" => "Mlonggo",
                "city_id" => 163,
            ),
            array(
                "id" => 2259,
                "name" => "Nalumsari",
                "city_id" => 163,
            ),
            array(
                "id" => 2260,
                "name" => "Pakis Aji",
                "city_id" => 163,
            ),
            array(
                "id" => 2261,
                "name" => "Pecangaan",
                "city_id" => 163,
            ),
            array(
                "id" => 2262,
                "name" => "Tahunan",
                "city_id" => 163,
            ),
            array(
                "id" => 2263,
                "name" => "Welahan",
                "city_id" => 163,
            ),
            array(
                "id" => 2264,
                "name" => "Bandar Kedung Mulyo",
                "city_id" => 164,
            ),
            array(
                "id" => 2265,
                "name" => "Bareng",
                "city_id" => 164,
            ),
            array(
                "id" => 2266,
                "name" => "Diwek",
                "city_id" => 164,
            ),
            array(
                "id" => 2267,
                "name" => "Gudo",
                "city_id" => 164,
            ),
            array(
                "id" => 2268,
                "name" => "Jogoroto",
                "city_id" => 164,
            ),
            array(
                "id" => 2269,
                "name" => "Jombang",
                "city_id" => 164,
            ),
            array(
                "id" => 2270,
                "name" => "Kabuh",
                "city_id" => 164,
            ),
            array(
                "id" => 2271,
                "name" => "Kesamben",
                "city_id" => 164,
            ),
            array(
                "id" => 2272,
                "name" => "Kudu",
                "city_id" => 164,
            ),
            array(
                "id" => 2273,
                "name" => "Megaluh",
                "city_id" => 164,
            ),
            array(
                "id" => 2274,
                "name" => "Mojoagung",
                "city_id" => 164,
            ),
            array(
                "id" => 2275,
                "name" => "Mojowarno",
                "city_id" => 164,
            ),
            array(
                "id" => 2276,
                "name" => "Ngoro",
                "city_id" => 164,
            ),
            array(
                "id" => 2277,
                "name" => "Ngusikan",
                "city_id" => 164,
            ),
            array(
                "id" => 2278,
                "name" => "Perak",
                "city_id" => 164,
            ),
            array(
                "id" => 2279,
                "name" => "Peterongan",
                "city_id" => 164,
            ),
            array(
                "id" => 2280,
                "name" => "Plandaan",
                "city_id" => 164,
            ),
            array(
                "id" => 2281,
                "name" => "Ploso",
                "city_id" => 164,
            ),
            array(
                "id" => 2282,
                "name" => "Sumobito",
                "city_id" => 164,
            ),
            array(
                "id" => 2283,
                "name" => "Tembelang",
                "city_id" => 164,
            ),
            array(
                "id" => 2284,
                "name" => "Wonosalam",
                "city_id" => 164,
            ),
            array(
                "id" => 2285,
                "name" => "Buruway",
                "city_id" => 165,
            ),
            array(
                "id" => 2286,
                "name" => "Kaimana",
                "city_id" => 165,
            ),
            array(
                "id" => 2287,
                "name" => "Kambraw (Kamberau)",
                "city_id" => 165,
            ),
            array(
                "id" => 2288,
                "name" => "Teluk Arguni Atas",
                "city_id" => 165,
            ),
            array(
                "id" => 2289,
                "name" => "Teluk Arguni Bawah (Yerusi)",
                "city_id" => 165,
            ),
            array(
                "id" => 2290,
                "name" => "Teluk Etna",
                "city_id" => 165,
            ),
            array(
                "id" => 2291,
                "name" => "Yamor",
                "city_id" => 165,
            ),
            array(
                "id" => 2292,
                "name" => "Bangkinang",
                "city_id" => 166,
            ),
            array(
                "id" => 2293,
                "name" => "Bangkinang Seberang",
                "city_id" => 166,
            ),
            array(
                "id" => 2294,
                "name" => "Gunung Sahilan",
                "city_id" => 166,
            ),
            array(
                "id" => 2295,
                "name" => "Kampar",
                "city_id" => 166,
            ),
            array(
                "id" => 2296,
                "name" => "Kampar Kiri",
                "city_id" => 166,
            ),
            array(
                "id" => 2297,
                "name" => "Kampar Kiri Hilir",
                "city_id" => 166,
            ),
            array(
                "id" => 2298,
                "name" => "Kampar Kiri Hulu",
                "city_id" => 166,
            ),
            array(
                "id" => 2299,
                "name" => "Kampar Kiri Tengah",
                "city_id" => 166,
            ),
            array(
                "id" => 2300,
                "name" => "Kampar Timur",
                "city_id" => 166,
            ),
            array(
                "id" => 2301,
                "name" => "Kampar Utara",
                "city_id" => 166,
            ),
            array(
                "id" => 2302,
                "name" => "Koto Kampar Hulu",
                "city_id" => 166,
            ),
            array(
                "id" => 2303,
                "name" => "Kuok (Bangkinang Barat)",
                "city_id" => 166,
            ),
            array(
                "id" => 2304,
                "name" => "Perhentian Raja",
                "city_id" => 166,
            ),
            array(
                "id" => 2305,
                "name" => "Rumbio Jaya",
                "city_id" => 166,
            ),
            array(
                "id" => 2306,
                "name" => "Salo",
                "city_id" => 166,
            ),
            array(
                "id" => 2307,
                "name" => "Siak Hulu",
                "city_id" => 166,
            ),
            array(
                "id" => 2308,
                "name" => "Tambang",
                "city_id" => 166,
            ),
            array(
                "id" => 2309,
                "name" => "Tapung",
                "city_id" => 166,
            ),
            array(
                "id" => 2310,
                "name" => "Tapung Hilir",
                "city_id" => 166,
            ),
            array(
                "id" => 2311,
                "name" => "Tapung Hulu",
                "city_id" => 166,
            ),
            array(
                "id" => 2312,
                "name" => "XIII Koto Kampar",
                "city_id" => 166,
            ),
            array(
                "id" => 2313,
                "name" => "Basarang",
                "city_id" => 167,
            ),
            array(
                "id" => 2314,
                "name" => "Bataguh",
                "city_id" => 167,
            ),
            array(
                "id" => 2315,
                "name" => "Dadahup",
                "city_id" => 167,
            ),
            array(
                "id" => 2316,
                "name" => "Kapuas Barat",
                "city_id" => 167,
            ),
            array(
                "id" => 2317,
                "name" => "Kapuas Hilir",
                "city_id" => 167,
            ),
            array(
                "id" => 2318,
                "name" => "Kapuas Hulu",
                "city_id" => 167,
            ),
            array(
                "id" => 2319,
                "name" => "Kapuas Kuala",
                "city_id" => 167,
            ),
            array(
                "id" => 2320,
                "name" => "Kapuas Murung",
                "city_id" => 167,
            ),
            array(
                "id" => 2321,
                "name" => "Kapuas Tengah",
                "city_id" => 167,
            ),
            array(
                "id" => 2322,
                "name" => "Kapuas Timur",
                "city_id" => 167,
            ),
            array(
                "id" => 2323,
                "name" => "Mandau Talawang",
                "city_id" => 167,
            ),
            array(
                "id" => 2324,
                "name" => "Mantangai",
                "city_id" => 167,
            ),
            array(
                "id" => 2325,
                "name" => "Pasak Talawang",
                "city_id" => 167,
            ),
            array(
                "id" => 2326,
                "name" => "Pulau Petak",
                "city_id" => 167,
            ),
            array(
                "id" => 2327,
                "name" => "Selat",
                "city_id" => 167,
            ),
            array(
                "id" => 2328,
                "name" => "Tamban Catur",
                "city_id" => 167,
            ),
            array(
                "id" => 2329,
                "name" => "Timpah",
                "city_id" => 167,
            ),
            array(
                "id" => 2330,
                "name" => "Badau",
                "city_id" => 168,
            ),
            array(
                "id" => 2331,
                "name" => "Batang Lupar",
                "city_id" => 168,
            ),
            array(
                "id" => 2332,
                "name" => "Bika",
                "city_id" => 168,
            ),
            array(
                "id" => 2333,
                "name" => "Boyan Tanjung",
                "city_id" => 168,
            ),
            array(
                "id" => 2334,
                "name" => "Bunut Hilir",
                "city_id" => 168,
            ),
            array(
                "id" => 2335,
                "name" => "Bunut Hulu",
                "city_id" => 168,
            ),
            array(
                "id" => 2336,
                "name" => "Embaloh Hilir",
                "city_id" => 168,
            ),
            array(
                "id" => 2337,
                "name" => "Embaloh Hulu",
                "city_id" => 168,
            ),
            array(
                "id" => 2338,
                "name" => "Empanang",
                "city_id" => 168,
            ),
            array(
                "id" => 2339,
                "name" => "Hulu Gurung",
                "city_id" => 168,
            ),
            array(
                "id" => 2340,
                "name" => "Jongkong (Jengkong)",
                "city_id" => 168,
            ),
            array(
                "id" => 2341,
                "name" => "Kalis",
                "city_id" => 168,
            ),
            array(
                "id" => 2342,
                "name" => "Mentebah",
                "city_id" => 168,
            ),
            array(
                "id" => 2343,
                "name" => "Pengkadan (Batu Datu)",
                "city_id" => 168,
            ),
            array(
                "id" => 2344,
                "name" => "Puring Kencana",
                "city_id" => 168,
            ),
            array(
                "id" => 2345,
                "name" => "Putussibau Selatan",
                "city_id" => 168,
            ),
            array(
                "id" => 2346,
                "name" => "Putussibau Utara",
                "city_id" => 168,
            ),
            array(
                "id" => 2347,
                "name" => "Seberuang",
                "city_id" => 168,
            ),
            array(
                "id" => 2348,
                "name" => "Selimbau",
                "city_id" => 168,
            ),
            array(
                "id" => 2349,
                "name" => "Semitau",
                "city_id" => 168,
            ),
            array(
                "id" => 2350,
                "name" => "Silat Hilir",
                "city_id" => 168,
            ),
            array(
                "id" => 2351,
                "name" => "Silat Hulu",
                "city_id" => 168,
            ),
            array(
                "id" => 2352,
                "name" => "Suhaid",
                "city_id" => 168,
            ),
            array(
                "id" => 2353,
                "name" => "Colomadu",
                "city_id" => 169,
            ),
            array(
                "id" => 2354,
                "name" => "Gondangrejo",
                "city_id" => 169,
            ),
            array(
                "id" => 2355,
                "name" => "Jaten",
                "city_id" => 169,
            ),
            array(
                "id" => 2356,
                "name" => "Jatipuro",
                "city_id" => 169,
            ),
            array(
                "id" => 2357,
                "name" => "Jatiyoso",
                "city_id" => 169,
            ),
            array(
                "id" => 2358,
                "name" => "Jenawi",
                "city_id" => 169,
            ),
            array(
                "id" => 2359,
                "name" => "Jumantono",
                "city_id" => 169,
            ),
            array(
                "id" => 2360,
                "name" => "Jumapolo",
                "city_id" => 169,
            ),
            array(
                "id" => 2361,
                "name" => "Karanganyar",
                "city_id" => 169,
            ),
            array(
                "id" => 2362,
                "name" => "Karangpandan",
                "city_id" => 169,
            ),
            array(
                "id" => 2363,
                "name" => "Kebakkramat",
                "city_id" => 169,
            ),
            array(
                "id" => 2364,
                "name" => "Kerjo",
                "city_id" => 169,
            ),
            array(
                "id" => 2365,
                "name" => "Matesih",
                "city_id" => 169,
            ),
            array(
                "id" => 2366,
                "name" => "Mojogedang",
                "city_id" => 169,
            ),
            array(
                "id" => 2367,
                "name" => "Ngargoyoso",
                "city_id" => 169,
            ),
            array(
                "id" => 2368,
                "name" => "Tasikmadu",
                "city_id" => 169,
            ),
            array(
                "id" => 2369,
                "name" => "Tawangmangu",
                "city_id" => 169,
            ),
            array(
                "id" => 2370,
                "name" => "Abang",
                "city_id" => 170,
            ),
            array(
                "id" => 2371,
                "name" => "Bebandem",
                "city_id" => 170,
            ),
            array(
                "id" => 2372,
                "name" => "Karang Asem",
                "city_id" => 170,
            ),
            array(
                "id" => 2373,
                "name" => "Kubu",
                "city_id" => 170,
            ),
            array(
                "id" => 2374,
                "name" => "Manggis",
                "city_id" => 170,
            ),
            array(
                "id" => 2375,
                "name" => "Rendang",
                "city_id" => 170,
            ),
            array(
                "id" => 2376,
                "name" => "Selat",
                "city_id" => 170,
            ),
            array(
                "id" => 2377,
                "name" => "Sidemen",
                "city_id" => 170,
            ),
            array(
                "id" => 2378,
                "name" => "Banyusari",
                "city_id" => 171,
            ),
            array(
                "id" => 2379,
                "name" => "Batujaya",
                "city_id" => 171,
            ),
            array(
                "id" => 2380,
                "name" => "Ciampel",
                "city_id" => 171,
            ),
            array(
                "id" => 2381,
                "name" => "Cibuaya",
                "city_id" => 171,
            ),
            array(
                "id" => 2382,
                "name" => "Cikampek",
                "city_id" => 171,
            ),
            array(
                "id" => 2383,
                "name" => "Cilamaya Kulon",
                "city_id" => 171,
            ),
            array(
                "id" => 2384,
                "name" => "Cilamaya Wetan",
                "city_id" => 171,
            ),
            array(
                "id" => 2385,
                "name" => "Cilebar",
                "city_id" => 171,
            ),
            array(
                "id" => 2386,
                "name" => "Jatisari",
                "city_id" => 171,
            ),
            array(
                "id" => 2387,
                "name" => "Jayakerta",
                "city_id" => 171,
            ),
            array(
                "id" => 2388,
                "name" => "Karawang Barat",
                "city_id" => 171,
            ),
            array(
                "id" => 2389,
                "name" => "Karawang Timur",
                "city_id" => 171,
            ),
            array(
                "id" => 2390,
                "name" => "Klari",
                "city_id" => 171,
            ),
            array(
                "id" => 2391,
                "name" => "Kotabaru",
                "city_id" => 171,
            ),
            array(
                "id" => 2392,
                "name" => "Kutawaluya",
                "city_id" => 171,
            ),
            array(
                "id" => 2393,
                "name" => "Lemahabang",
                "city_id" => 171,
            ),
            array(
                "id" => 2394,
                "name" => "Majalaya",
                "city_id" => 171,
            ),
            array(
                "id" => 2395,
                "name" => "Pakisjaya",
                "city_id" => 171,
            ),
            array(
                "id" => 2396,
                "name" => "Pangkalan",
                "city_id" => 171,
            ),
            array(
                "id" => 2397,
                "name" => "Pedes",
                "city_id" => 171,
            ),
            array(
                "id" => 2398,
                "name" => "Purwasari",
                "city_id" => 171,
            ),
            array(
                "id" => 2399,
                "name" => "Rawamerta",
                "city_id" => 171,
            ),
            array(
                "id" => 2400,
                "name" => "Rengasdengklok",
                "city_id" => 171,
            ),
            array(
                "id" => 2401,
                "name" => "Talagasari",
                "city_id" => 171,
            ),
            array(
                "id" => 2402,
                "name" => "Tegalwaru",
                "city_id" => 171,
            ),
            array(
                "id" => 2403,
                "name" => "Telukjambe Barat",
                "city_id" => 171,
            ),
            array(
                "id" => 2404,
                "name" => "Telukjambe Timur",
                "city_id" => 171,
            ),
            array(
                "id" => 2405,
                "name" => "Tempuran",
                "city_id" => 171,
            ),
            array(
                "id" => 2406,
                "name" => "Tirtajaya",
                "city_id" => 171,
            ),
            array(
                "id" => 2407,
                "name" => "Tirtamulya",
                "city_id" => 171,
            ),
            array(
                "id" => 2408,
                "name" => "Belat",
                "city_id" => 172,
            ),
            array(
                "id" => 2409,
                "name" => "Buru",
                "city_id" => 172,
            ),
            array(
                "id" => 2410,
                "name" => "Durai",
                "city_id" => 172,
            ),
            array(
                "id" => 2411,
                "name" => "Karimun",
                "city_id" => 172,
            ),
            array(
                "id" => 2412,
                "name" => "Kundur",
                "city_id" => 172,
            ),
            array(
                "id" => 2413,
                "name" => "Kundur Barat",
                "city_id" => 172,
            ),
            array(
                "id" => 2414,
                "name" => "Kundur Utara",
                "city_id" => 172,
            ),
            array(
                "id" => 2415,
                "name" => "Meral",
                "city_id" => 172,
            ),
            array(
                "id" => 2416,
                "name" => "Meral Barat",
                "city_id" => 172,
            ),
            array(
                "id" => 2417,
                "name" => "Moro",
                "city_id" => 172,
            ),
            array(
                "id" => 2418,
                "name" => "Tebing",
                "city_id" => 172,
            ),
            array(
                "id" => 2419,
                "name" => "Ungar",
                "city_id" => 172,
            ),
            array(
                "id" => 2420,
                "name" => "Barus Jahe",
                "city_id" => 173,
            ),
            array(
                "id" => 2421,
                "name" => "Brastagi (Berastagi)",
                "city_id" => 173,
            ),
            array(
                "id" => 2422,
                "name" => "Dolat Rayat",
                "city_id" => 173,
            ),
            array(
                "id" => 2423,
                "name" => "Juhar",
                "city_id" => 173,
            ),
            array(
                "id" => 2424,
                "name" => "Kabanjahe",
                "city_id" => 173,
            ),
            array(
                "id" => 2425,
                "name" => "Kuta Buluh",
                "city_id" => 173,
            ),
            array(
                "id" => 2426,
                "name" => "Laubaleng",
                "city_id" => 173,
            ),
            array(
                "id" => 2427,
                "name" => "Mardinding",
                "city_id" => 173,
            ),
            array(
                "id" => 2428,
                "name" => "Merdeka",
                "city_id" => 173,
            ),
            array(
                "id" => 2429,
                "name" => "Merek",
                "city_id" => 173,
            ),
            array(
                "id" => 2430,
                "name" => "Munte",
                "city_id" => 173,
            ),
            array(
                "id" => 2431,
                "name" => "Nama Teran",
                "city_id" => 173,
            ),
            array(
                "id" => 2432,
                "name" => "Payung",
                "city_id" => 173,
            ),
            array(
                "id" => 2433,
                "name" => "Simpang Empat",
                "city_id" => 173,
            ),
            array(
                "id" => 2434,
                "name" => "Tiga Binanga",
                "city_id" => 173,
            ),
            array(
                "id" => 2435,
                "name" => "Tiga Panah",
                "city_id" => 173,
            ),
            array(
                "id" => 2436,
                "name" => "Tiganderket",
                "city_id" => 173,
            ),
            array(
                "id" => 2437,
                "name" => "Bukit Raya",
                "city_id" => 174,
            ),
            array(
                "id" => 2438,
                "name" => "Kamipang",
                "city_id" => 174,
            ),
            array(
                "id" => 2439,
                "name" => "Katingan Hilir",
                "city_id" => 174,
            ),
            array(
                "id" => 2440,
                "name" => "Katingan Hulu",
                "city_id" => 174,
            ),
            array(
                "id" => 2441,
                "name" => "Katingan Kuala",
                "city_id" => 174,
            ),
            array(
                "id" => 2442,
                "name" => "Katingan Tengah",
                "city_id" => 174,
            ),
            array(
                "id" => 2443,
                "name" => "Marikit",
                "city_id" => 174,
            ),
            array(
                "id" => 2444,
                "name" => "Mendawai",
                "city_id" => 174,
            ),
            array(
                "id" => 2445,
                "name" => "Petak Malai",
                "city_id" => 174,
            ),
            array(
                "id" => 2446,
                "name" => "Pulau Malan",
                "city_id" => 174,
            ),
            array(
                "id" => 2447,
                "name" => "Sanaman Mantikei (Senamang Mantikei)",
                "city_id" => 174,
            ),
            array(
                "id" => 2448,
                "name" => "Tasik Payawan",
                "city_id" => 174,
            ),
            array(
                "id" => 2449,
                "name" => "Tewang Sanggalang Garing (Sangalang)",
                "city_id" => 174,
            ),
            array(
                "id" => 2450,
                "name" => "Kaur Selatan",
                "city_id" => 175,
            ),
            array(
                "id" => 2451,
                "name" => "Kaur Tengah",
                "city_id" => 175,
            ),
            array(
                "id" => 2452,
                "name" => "Kaur Utara",
                "city_id" => 175,
            ),
            array(
                "id" => 2453,
                "name" => "Kelam Tengah",
                "city_id" => 175,
            ),
            array(
                "id" => 2454,
                "name" => "Kinal",
                "city_id" => 175,
            ),
            array(
                "id" => 2455,
                "name" => "Luas",
                "city_id" => 175,
            ),
            array(
                "id" => 2456,
                "name" => "Lungkang Kule",
                "city_id" => 175,
            ),
            array(
                "id" => 2457,
                "name" => "Maje",
                "city_id" => 175,
            ),
            array(
                "id" => 2458,
                "name" => "Muara Sahung",
                "city_id" => 175,
            ),
            array(
                "id" => 2459,
                "name" => "Nasal",
                "city_id" => 175,
            ),
            array(
                "id" => 2460,
                "name" => "Padang Guci Hilir",
                "city_id" => 175,
            ),
            array(
                "id" => 2461,
                "name" => "Padang Guci Hulu",
                "city_id" => 175,
            ),
            array(
                "id" => 2462,
                "name" => "Semidang Gumai (Gumay)",
                "city_id" => 175,
            ),
            array(
                "id" => 2463,
                "name" => "Tanjung Kemuning",
                "city_id" => 175,
            ),
            array(
                "id" => 2464,
                "name" => "Tetap (Muara Tetap)",
                "city_id" => 175,
            ),
            array(
                "id" => 2465,
                "name" => "Kepulauan Karimata",
                "city_id" => 176,
            ),
            array(
                "id" => 2466,
                "name" => "Pulau Maya (Pulau Maya Karimata)",
                "city_id" => 176,
            ),
            array(
                "id" => 2467,
                "name" => "Seponti",
                "city_id" => 176,
            ),
            array(
                "id" => 2468,
                "name" => "Simpang Hilir",
                "city_id" => 176,
            ),
            array(
                "id" => 2469,
                "name" => "Sukadana",
                "city_id" => 176,
            ),
            array(
                "id" => 2470,
                "name" => "Teluk Batang",
                "city_id" => 176,
            ),
            array(
                "id" => 2471,
                "name" => "Adimulyo",
                "city_id" => 177,
            ),
            array(
                "id" => 2472,
                "name" => "Alian/Aliyan",
                "city_id" => 177,
            ),
            array(
                "id" => 2473,
                "name" => "Ambal",
                "city_id" => 177,
            ),
            array(
                "id" => 2474,
                "name" => "Ayah",
                "city_id" => 177,
            ),
            array(
                "id" => 2475,
                "name" => "Bonorowo",
                "city_id" => 177,
            ),
            array(
                "id" => 2476,
                "name" => "Buayan",
                "city_id" => 177,
            ),
            array(
                "id" => 2477,
                "name" => "Buluspesantren",
                "city_id" => 177,
            ),
            array(
                "id" => 2478,
                "name" => "Gombong",
                "city_id" => 177,
            ),
            array(
                "id" => 2479,
                "name" => "Karanganyar",
                "city_id" => 177,
            ),
            array(
                "id" => 2480,
                "name" => "Karanggayam",
                "city_id" => 177,
            ),
            array(
                "id" => 2481,
                "name" => "Karangsambung",
                "city_id" => 177,
            ),
            array(
                "id" => 2482,
                "name" => "Kebumen",
                "city_id" => 177,
            ),
            array(
                "id" => 2483,
                "name" => "Klirong",
                "city_id" => 177,
            ),
            array(
                "id" => 2484,
                "name" => "Kutowinangun",
                "city_id" => 177,
            ),
            array(
                "id" => 2485,
                "name" => "Kuwarasan",
                "city_id" => 177,
            ),
            array(
                "id" => 2486,
                "name" => "Mirit",
                "city_id" => 177,
            ),
            array(
                "id" => 2487,
                "name" => "Padureso",
                "city_id" => 177,
            ),
            array(
                "id" => 2488,
                "name" => "Pejagoan",
                "city_id" => 177,
            ),
            array(
                "id" => 2489,
                "name" => "Petanahan",
                "city_id" => 177,
            ),
            array(
                "id" => 2490,
                "name" => "Poncowarno",
                "city_id" => 177,
            ),
            array(
                "id" => 2491,
                "name" => "Prembun",
                "city_id" => 177,
            ),
            array(
                "id" => 2492,
                "name" => "Puring",
                "city_id" => 177,
            ),
            array(
                "id" => 2493,
                "name" => "Rowokele",
                "city_id" => 177,
            ),
            array(
                "id" => 2494,
                "name" => "Sadang",
                "city_id" => 177,
            ),
            array(
                "id" => 2495,
                "name" => "Sempor",
                "city_id" => 177,
            ),
            array(
                "id" => 2496,
                "name" => "Sruweng",
                "city_id" => 177,
            ),
            array(
                "id" => 2497,
                "name" => "Badas",
                "city_id" => 178,
            ),
            array(
                "id" => 2498,
                "name" => "Banyakan",
                "city_id" => 178,
            ),
            array(
                "id" => 2499,
                "name" => "Gampengrejo",
                "city_id" => 178,
            ),
            array(
                "id" => 2500,
                "name" => "Grogol",
                "city_id" => 178,
            ),
            array(
                "id" => 2501,
                "name" => "Gurah",
                "city_id" => 178,
            ),
            array(
                "id" => 2502,
                "name" => "Kandangan",
                "city_id" => 178,
            ),
            array(
                "id" => 2503,
                "name" => "Kandat",
                "city_id" => 178,
            ),
            array(
                "id" => 2504,
                "name" => "Kayen Kidul",
                "city_id" => 178,
            ),
            array(
                "id" => 2505,
                "name" => "Kepung",
                "city_id" => 178,
            ),
            array(
                "id" => 2506,
                "name" => "Kras",
                "city_id" => 178,
            ),
            array(
                "id" => 2507,
                "name" => "Kunjang",
                "city_id" => 178,
            ),
            array(
                "id" => 2508,
                "name" => "Mojo",
                "city_id" => 178,
            ),
            array(
                "id" => 2509,
                "name" => "Ngadiluwih",
                "city_id" => 178,
            ),
            array(
                "id" => 2510,
                "name" => "Ngancar",
                "city_id" => 178,
            ),
            array(
                "id" => 2511,
                "name" => "Ngasem",
                "city_id" => 178,
            ),
            array(
                "id" => 2512,
                "name" => "Pagu",
                "city_id" => 178,
            ),
            array(
                "id" => 2513,
                "name" => "Papar",
                "city_id" => 178,
            ),
            array(
                "id" => 2514,
                "name" => "Pare",
                "city_id" => 178,
            ),
            array(
                "id" => 2515,
                "name" => "Plemahan",
                "city_id" => 178,
            ),
            array(
                "id" => 2516,
                "name" => "Plosoklaten",
                "city_id" => 178,
            ),
            array(
                "id" => 2517,
                "name" => "Puncu",
                "city_id" => 178,
            ),
            array(
                "id" => 2518,
                "name" => "Purwoasri",
                "city_id" => 178,
            ),
            array(
                "id" => 2519,
                "name" => "Ringinrejo",
                "city_id" => 178,
            ),
            array(
                "id" => 2520,
                "name" => "Semen",
                "city_id" => 178,
            ),
            array(
                "id" => 2521,
                "name" => "Tarokan",
                "city_id" => 178,
            ),
            array(
                "id" => 2522,
                "name" => "Wates",
                "city_id" => 178,
            ),
            array(
                "id" => 2523,
                "name" => "Kediri Kota",
                "city_id" => 179,
            ),
            array(
                "id" => 2524,
                "name" => "Mojoroto",
                "city_id" => 179,
            ),
            array(
                "id" => 2525,
                "name" => "Pesantren",
                "city_id" => 179,
            ),
            array(
                "id" => 2526,
                "name" => "Arso",
                "city_id" => 180,
            ),
            array(
                "id" => 2527,
                "name" => "Arso Timur",
                "city_id" => 180,
            ),
            array(
                "id" => 2528,
                "name" => "Senggi",
                "city_id" => 180,
            ),
            array(
                "id" => 2529,
                "name" => "Skamto (Skanto)",
                "city_id" => 180,
            ),
            array(
                "id" => 2530,
                "name" => "Towe",
                "city_id" => 180,
            ),
            array(
                "id" => 2531,
                "name" => "Waris",
                "city_id" => 180,
            ),
            array(
                "id" => 2532,
                "name" => "Web",
                "city_id" => 180,
            ),
            array(
                "id" => 2533,
                "name" => "Boja",
                "city_id" => 181,
            ),
            array(
                "id" => 2534,
                "name" => "Brangsong",
                "city_id" => 181,
            ),
            array(
                "id" => 2535,
                "name" => "Cepiring",
                "city_id" => 181,
            ),
            array(
                "id" => 2536,
                "name" => "Gemuh",
                "city_id" => 181,
            ),
            array(
                "id" => 2537,
                "name" => "Kaliwungu",
                "city_id" => 181,
            ),
            array(
                "id" => 2538,
                "name" => "Kaliwungu Selatan",
                "city_id" => 181,
            ),
            array(
                "id" => 2539,
                "name" => "Kangkung",
                "city_id" => 181,
            ),
            array(
                "id" => 2540,
                "name" => "Kendal",
                "city_id" => 181,
            ),
            array(
                "id" => 2541,
                "name" => "Limbangan",
                "city_id" => 181,
            ),
            array(
                "id" => 2542,
                "name" => "Ngampel",
                "city_id" => 181,
            ),
            array(
                "id" => 2543,
                "name" => "Pagerruyung",
                "city_id" => 181,
            ),
            array(
                "id" => 2544,
                "name" => "Patean",
                "city_id" => 181,
            ),
            array(
                "id" => 2545,
                "name" => "Patebon",
                "city_id" => 181,
            ),
            array(
                "id" => 2546,
                "name" => "Pegandon",
                "city_id" => 181,
            ),
            array(
                "id" => 2547,
                "name" => "Plantungan",
                "city_id" => 181,
            ),
            array(
                "id" => 2548,
                "name" => "Ringinarum",
                "city_id" => 181,
            ),
            array(
                "id" => 2549,
                "name" => "Rowosari",
                "city_id" => 181,
            ),
            array(
                "id" => 2550,
                "name" => "Singorojo",
                "city_id" => 181,
            ),
            array(
                "id" => 2551,
                "name" => "Sukorejo",
                "city_id" => 181,
            ),
            array(
                "id" => 2552,
                "name" => "Weleri",
                "city_id" => 181,
            ),
            array(
                "id" => 2553,
                "name" => "Abeli",
                "city_id" => 182,
            ),
            array(
                "id" => 2554,
                "name" => "Baruga",
                "city_id" => 182,
            ),
            array(
                "id" => 2555,
                "name" => "Kadia",
                "city_id" => 182,
            ),
            array(
                "id" => 2556,
                "name" => "Kambu",
                "city_id" => 182,
            ),
            array(
                "id" => 2557,
                "name" => "Kendari",
                "city_id" => 182,
            ),
            array(
                "id" => 2558,
                "name" => "Kendari Barat",
                "city_id" => 182,
            ),
            array(
                "id" => 2559,
                "name" => "Mandonga",
                "city_id" => 182,
            ),
            array(
                "id" => 2560,
                "name" => "Poasia",
                "city_id" => 182,
            ),
            array(
                "id" => 2561,
                "name" => "Puuwatu",
                "city_id" => 182,
            ),
            array(
                "id" => 2562,
                "name" => "Wua-Wua",
                "city_id" => 182,
            ),
            array(
                "id" => 2563,
                "name" => "Bermani Ilir",
                "city_id" => 183,
            ),
            array(
                "id" => 2564,
                "name" => "Kebawetan (Kabawetan)",
                "city_id" => 183,
            ),
            array(
                "id" => 2565,
                "name" => "Kepahiang",
                "city_id" => 183,
            ),
            array(
                "id" => 2566,
                "name" => "Merigi",
                "city_id" => 183,
            ),
            array(
                "id" => 2567,
                "name" => "Muara Kemumu",
                "city_id" => 183,
            ),
            array(
                "id" => 2568,
                "name" => "Seberang Musi",
                "city_id" => 183,
            ),
            array(
                "id" => 2569,
                "name" => "Tebat Karai",
                "city_id" => 183,
            ),
            array(
                "id" => 2570,
                "name" => "Ujan Mas",
                "city_id" => 183,
            ),
            array(
                "id" => 2571,
                "name" => "Jemaja",
                "city_id" => 184,
            ),
            array(
                "id" => 2572,
                "name" => "Jemaja Timur",
                "city_id" => 184,
            ),
            array(
                "id" => 2573,
                "name" => "Palmatak",
                "city_id" => 184,
            ),
            array(
                "id" => 2574,
                "name" => "Siantan",
                "city_id" => 184,
            ),
            array(
                "id" => 2575,
                "name" => "Siantan Selatan",
                "city_id" => 184,
            ),
            array(
                "id" => 2576,
                "name" => "Siantan Tengah",
                "city_id" => 184,
            ),
            array(
                "id" => 2577,
                "name" => "Siantan Timur",
                "city_id" => 184,
            ),
            array(
                "id" => 2578,
                "name" => "Aru Selatan",
                "city_id" => 185,
            ),
            array(
                "id" => 2579,
                "name" => "Aru Selatan Timur",
                "city_id" => 185,
            ),
            array(
                "id" => 2580,
                "name" => "Aru Selatan Utara",
                "city_id" => 185,
            ),
            array(
                "id" => 2581,
                "name" => "Aru Tengah",
                "city_id" => 185,
            ),
            array(
                "id" => 2582,
                "name" => "Aru Tengah Selatan",
                "city_id" => 185,
            ),
            array(
                "id" => 2583,
                "name" => "Aru Tengah Timur",
                "city_id" => 185,
            ),
            array(
                "id" => 2584,
                "name" => "Aru Utara",
                "city_id" => 185,
            ),
            array(
                "id" => 2585,
                "name" => "Aru Utara Timur Batuley",
                "city_id" => 185,
            ),
            array(
                "id" => 2586,
                "name" => "Pulau-Pulau Aru",
                "city_id" => 185,
            ),
            array(
                "id" => 2587,
                "name" => "Sir-Sir",
                "city_id" => 185,
            ),
            array(
                "id" => 2588,
                "name" => "Pagai Selatan",
                "city_id" => 186,
            ),
            array(
                "id" => 2589,
                "name" => "Pagai Utara",
                "city_id" => 186,
            ),
            array(
                "id" => 2590,
                "name" => "Siberut Barat",
                "city_id" => 186,
            ),
            array(
                "id" => 2591,
                "name" => "Siberut Barat Daya",
                "city_id" => 186,
            ),
            array(
                "id" => 2592,
                "name" => "Siberut Selatan",
                "city_id" => 186,
            ),
            array(
                "id" => 2593,
                "name" => "Siberut Tengah",
                "city_id" => 186,
            ),
            array(
                "id" => 2594,
                "name" => "Siberut Utara",
                "city_id" => 186,
            ),
            array(
                "id" => 2595,
                "name" => "Sikakap",
                "city_id" => 186,
            ),
            array(
                "id" => 2596,
                "name" => "Sipora Selatan",
                "city_id" => 186,
            ),
            array(
                "id" => 2597,
                "name" => "Sipora Utara",
                "city_id" => 186,
            ),
            array(
                "id" => 2598,
                "name" => "Merbau",
                "city_id" => 187,
            ),
            array(
                "id" => 2599,
                "name" => "Pulaumerbau",
                "city_id" => 187,
            ),
            array(
                "id" => 2600,
                "name" => "Rangsang",
                "city_id" => 187,
            ),
            array(
                "id" => 2601,
                "name" => "Rangsang Barat",
                "city_id" => 187,
            ),
            array(
                "id" => 2602,
                "name" => "Rangsang Pesisir",
                "city_id" => 187,
            ),
            array(
                "id" => 2603,
                "name" => "Tasik Putri Puyu",
                "city_id" => 187,
            ),
            array(
                "id" => 2604,
                "name" => "Tebing Tinggi",
                "city_id" => 187,
            ),
            array(
                "id" => 2605,
                "name" => "Tebing Tinggi Barat",
                "city_id" => 187,
            ),
            array(
                "id" => 2606,
                "name" => "Tebing Tinggi Timur",
                "city_id" => 187,
            ),
            array(
                "id" => 2607,
                "name" => "Kendahe",
                "city_id" => 188,
            ),
            array(
                "id" => 2608,
                "name" => "Kepulauan Marore",
                "city_id" => 188,
            ),
            array(
                "id" => 2609,
                "name" => "Manganitu",
                "city_id" => 188,
            ),
            array(
                "id" => 2610,
                "name" => "Manganitu Selatan",
                "city_id" => 188,
            ),
            array(
                "id" => 2611,
                "name" => "Nusa Tabukan",
                "city_id" => 188,
            ),
            array(
                "id" => 2612,
                "name" => "Tabukan Selatan",
                "city_id" => 188,
            ),
            array(
                "id" => 2613,
                "name" => "Tabukan Selatan Tengah",
                "city_id" => 188,
            ),
            array(
                "id" => 2614,
                "name" => "Tabukan Selatan Tenggara",
                "city_id" => 188,
            ),
            array(
                "id" => 2615,
                "name" => "Tabukan Tengah",
                "city_id" => 188,
            ),
            array(
                "id" => 2616,
                "name" => "Tabukan Utara",
                "city_id" => 188,
            ),
            array(
                "id" => 2617,
                "name" => "Tahuna",
                "city_id" => 188,
            ),
            array(
                "id" => 2618,
                "name" => "Tahuna Barat",
                "city_id" => 188,
            ),
            array(
                "id" => 2619,
                "name" => "Tahuna Timur",
                "city_id" => 188,
            ),
            array(
                "id" => 2620,
                "name" => "Tamako",
                "city_id" => 188,
            ),
            array(
                "id" => 2621,
                "name" => "Tatoareng",
                "city_id" => 188,
            ),
            array(
                "id" => 2622,
                "name" => "Kepulauan Seribu Selatan",
                "city_id" => 189,
            ),
            array(
                "id" => 2623,
                "name" => "Kepulauan Seribu Utara",
                "city_id" => 189,
            ),
            array(
                "id" => 2624,
                "name" => "Biaro",
                "city_id" => 190,
            ),
            array(
                "id" => 2625,
                "name" => "Siau Barat",
                "city_id" => 190,
            ),
            array(
                "id" => 2626,
                "name" => "Siau Barat Selatan",
                "city_id" => 190,
            ),
            array(
                "id" => 2627,
                "name" => "Siau Barat Utara",
                "city_id" => 190,
            ),
            array(
                "id" => 2628,
                "name" => "Siau Tengah",
                "city_id" => 190,
            ),
            array(
                "id" => 2629,
                "name" => "Siau Timur",
                "city_id" => 190,
            ),
            array(
                "id" => 2630,
                "name" => "Siau Timur Selatan",
                "city_id" => 190,
            ),
            array(
                "id" => 2631,
                "name" => "Tagulandang",
                "city_id" => 190,
            ),
            array(
                "id" => 2632,
                "name" => "Tagulandang Selatan",
                "city_id" => 190,
            ),
            array(
                "id" => 2633,
                "name" => "Tagulandang Utara",
                "city_id" => 190,
            ),
            array(
                "id" => 2634,
                "name" => "Lede",
                "city_id" => 191,
            ),
            array(
                "id" => 2635,
                "name" => "Mangoli Barat",
                "city_id" => 191,
            ),
            array(
                "id" => 2636,
                "name" => "Mangoli Selatan",
                "city_id" => 191,
            ),
            array(
                "id" => 2637,
                "name" => "Mangoli Tengah",
                "city_id" => 191,
            ),
            array(
                "id" => 2638,
                "name" => "Mangoli Timur",
                "city_id" => 191,
            ),
            array(
                "id" => 2639,
                "name" => "Mangoli Utara",
                "city_id" => 191,
            ),
            array(
                "id" => 2640,
                "name" => "Mangoli Utara Timur",
                "city_id" => 191,
            ),
            array(
                "id" => 2641,
                "name" => "Sanana",
                "city_id" => 191,
            ),
            array(
                "id" => 2642,
                "name" => "Sanana Utara",
                "city_id" => 191,
            ),
            array(
                "id" => 2643,
                "name" => "Sulabesi Barat",
                "city_id" => 191,
            ),
            array(
                "id" => 2644,
                "name" => "Sulabesi Selatan",
                "city_id" => 191,
            ),
            array(
                "id" => 2645,
                "name" => "Sulabesi Tengah",
                "city_id" => 191,
            ),
            array(
                "id" => 2646,
                "name" => "Sulabesi Timur",
                "city_id" => 191,
            ),
            array(
                "id" => 2647,
                "name" => "Taliabu Barat",
                "city_id" => 191,
            ),
            array(
                "id" => 2648,
                "name" => "Taliabu Barat Laut",
                "city_id" => 191,
            ),
            array(
                "id" => 2649,
                "name" => "Taliabu Selatan",
                "city_id" => 191,
            ),
            array(
                "id" => 2650,
                "name" => "Taliabu Timur",
                "city_id" => 191,
            ),
            array(
                "id" => 2651,
                "name" => "Taliabu Timur Selatan",
                "city_id" => 191,
            ),
            array(
                "id" => 2652,
                "name" => "Taliabu Utara",
                "city_id" => 191,
            ),
            array(
                "id" => 2653,
                "name" => "Beo",
                "city_id" => 192,
            ),
            array(
                "id" => 2654,
                "name" => "Beo Selatan",
                "city_id" => 192,
            ),
            array(
                "id" => 2655,
                "name" => "Beo Utara",
                "city_id" => 192,
            ),
            array(
                "id" => 2656,
                "name" => "Damao (Damau)",
                "city_id" => 192,
            ),
            array(
                "id" => 2657,
                "name" => "Essang",
                "city_id" => 192,
            ),
            array(
                "id" => 2658,
                "name" => "Essang Selatan",
                "city_id" => 192,
            ),
            array(
                "id" => 2659,
                "name" => "Gemeh",
                "city_id" => 192,
            ),
            array(
                "id" => 2660,
                "name" => "Kabaruan",
                "city_id" => 192,
            ),
            array(
                "id" => 2661,
                "name" => "Kalongan",
                "city_id" => 192,
            ),
            array(
                "id" => 2662,
                "name" => "Lirung",
                "city_id" => 192,
            ),
            array(
                "id" => 2663,
                "name" => "Melonguane",
                "city_id" => 192,
            ),
            array(
                "id" => 2664,
                "name" => "Melonguane Timur",
                "city_id" => 192,
            ),
            array(
                "id" => 2665,
                "name" => "Miangas",
                "city_id" => 192,
            ),
            array(
                "id" => 2666,
                "name" => "Moronge",
                "city_id" => 192,
            ),
            array(
                "id" => 2667,
                "name" => "Nanusa",
                "city_id" => 192,
            ),
            array(
                "id" => 2668,
                "name" => "Pulutan",
                "city_id" => 192,
            ),
            array(
                "id" => 2669,
                "name" => "Rainis",
                "city_id" => 192,
            ),
            array(
                "id" => 2670,
                "name" => "Salibabu",
                "city_id" => 192,
            ),
            array(
                "id" => 2671,
                "name" => "Tampan Amma",
                "city_id" => 192,
            ),
            array(
                "id" => 2672,
                "name" => "Angkaisera",
                "city_id" => 193,
            ),
            array(
                "id" => 2673,
                "name" => "Kepulauan Ambai",
                "city_id" => 193,
            ),
            array(
                "id" => 2674,
                "name" => "Kosiwo",
                "city_id" => 193,
            ),
            array(
                "id" => 2675,
                "name" => "Poom",
                "city_id" => 193,
            ),
            array(
                "id" => 2676,
                "name" => "Pulau Kurudu",
                "city_id" => 193,
            ),
            array(
                "id" => 2677,
                "name" => "Pulau Yerui",
                "city_id" => 193,
            ),
            array(
                "id" => 2678,
                "name" => "Raimbawi",
                "city_id" => 193,
            ),
            array(
                "id" => 2679,
                "name" => "Teluk Ampimoi",
                "city_id" => 193,
            ),
            array(
                "id" => 2680,
                "name" => "Windesi",
                "city_id" => 193,
            ),
            array(
                "id" => 2681,
                "name" => "Wonawa",
                "city_id" => 193,
            ),
            array(
                "id" => 2682,
                "name" => "Yapen Barat",
                "city_id" => 193,
            ),
            array(
                "id" => 2683,
                "name" => "Yapen Selatan",
                "city_id" => 193,
            ),
            array(
                "id" => 2684,
                "name" => "Yapen Timur",
                "city_id" => 193,
            ),
            array(
                "id" => 2685,
                "name" => "Yapen Utara",
                "city_id" => 193,
            ),
            array(
                "id" => 2686,
                "name" => "Air Hangat",
                "city_id" => 194,
            ),
            array(
                "id" => 2687,
                "name" => "Air Hangat Barat",
                "city_id" => 194,
            ),
            array(
                "id" => 2688,
                "name" => "Air Hangat Timur",
                "city_id" => 194,
            ),
            array(
                "id" => 2689,
                "name" => "Batang Merangin",
                "city_id" => 194,
            ),
            array(
                "id" => 2690,
                "name" => "Bukitkerman",
                "city_id" => 194,
            ),
            array(
                "id" => 2691,
                "name" => "Danau Kerinci",
                "city_id" => 194,
            ),
            array(
                "id" => 2692,
                "name" => "Depati Tujuh",
                "city_id" => 194,
            ),
            array(
                "id" => 2693,
                "name" => "Gunung Kerinci",
                "city_id" => 194,
            ),
            array(
                "id" => 2694,
                "name" => "Gunung Raya",
                "city_id" => 194,
            ),
            array(
                "id" => 2695,
                "name" => "Gunung Tujuh",
                "city_id" => 194,
            ),
            array(
                "id" => 2696,
                "name" => "Kayu Aro",
                "city_id" => 194,
            ),
            array(
                "id" => 2697,
                "name" => "Kayu Aro Barat",
                "city_id" => 194,
            ),
            array(
                "id" => 2698,
                "name" => "Keliling Danau",
                "city_id" => 194,
            ),
            array(
                "id" => 2699,
                "name" => "Sitinjau Laut",
                "city_id" => 194,
            ),
            array(
                "id" => 2700,
                "name" => "Siulak",
                "city_id" => 194,
            ),
            array(
                "id" => 2701,
                "name" => "Siulak Mukai",
                "city_id" => 194,
            ),
            array(
                "id" => 2702,
                "name" => "Air Upas",
                "city_id" => 195,
            ),
            array(
                "id" => 2703,
                "name" => "Benua Kayong",
                "city_id" => 195,
            ),
            array(
                "id" => 2704,
                "name" => "Delta Pawan",
                "city_id" => 195,
            ),
            array(
                "id" => 2705,
                "name" => "Hulu Sungai",
                "city_id" => 195,
            ),
            array(
                "id" => 2706,
                "name" => "Jelai Hulu",
                "city_id" => 195,
            ),
            array(
                "id" => 2707,
                "name" => "Kendawangan",
                "city_id" => 195,
            ),
            array(
                "id" => 2708,
                "name" => "Manis Mata",
                "city_id" => 195,
            ),
            array(
                "id" => 2709,
                "name" => "Marau",
                "city_id" => 195,
            ),
            array(
                "id" => 2710,
                "name" => "Matan Hilir Selatan",
                "city_id" => 195,
            ),
            array(
                "id" => 2711,
                "name" => "Matan Hilir Utara",
                "city_id" => 195,
            ),
            array(
                "id" => 2712,
                "name" => "Muara Pawan",
                "city_id" => 195,
            ),
            array(
                "id" => 2713,
                "name" => "Nanga Tayap",
                "city_id" => 195,
            ),
            array(
                "id" => 2714,
                "name" => "Pemahan",
                "city_id" => 195,
            ),
            array(
                "id" => 2715,
                "name" => "Sandai",
                "city_id" => 195,
            ),
            array(
                "id" => 2716,
                "name" => "Simpang Dua",
                "city_id" => 195,
            ),
            array(
                "id" => 2717,
                "name" => "Simpang Hulu",
                "city_id" => 195,
            ),
            array(
                "id" => 2718,
                "name" => "Singkup",
                "city_id" => 195,
            ),
            array(
                "id" => 2719,
                "name" => "Sungai Laur",
                "city_id" => 195,
            ),
            array(
                "id" => 2720,
                "name" => "Sungai Melayu Rayak",
                "city_id" => 195,
            ),
            array(
                "id" => 2721,
                "name" => "Tumbang Titi",
                "city_id" => 195,
            ),
            array(
                "id" => 2722,
                "name" => "Bayat",
                "city_id" => 196,
            ),
            array(
                "id" => 2723,
                "name" => "Cawas",
                "city_id" => 196,
            ),
            array(
                "id" => 2724,
                "name" => "Ceper",
                "city_id" => 196,
            ),
            array(
                "id" => 2725,
                "name" => "Delanggu",
                "city_id" => 196,
            ),
            array(
                "id" => 2726,
                "name" => "Gantiwarno",
                "city_id" => 196,
            ),
            array(
                "id" => 2727,
                "name" => "Jatinom",
                "city_id" => 196,
            ),
            array(
                "id" => 2728,
                "name" => "Jogonalan",
                "city_id" => 196,
            ),
            array(
                "id" => 2729,
                "name" => "Juwiring",
                "city_id" => 196,
            ),
            array(
                "id" => 2730,
                "name" => "Kalikotes",
                "city_id" => 196,
            ),
            array(
                "id" => 2731,
                "name" => "Karanganom",
                "city_id" => 196,
            ),
            array(
                "id" => 2732,
                "name" => "Karangdowo",
                "city_id" => 196,
            ),
            array(
                "id" => 2733,
                "name" => "Karangnongko",
                "city_id" => 196,
            ),
            array(
                "id" => 2734,
                "name" => "Kebonarum",
                "city_id" => 196,
            ),
            array(
                "id" => 2735,
                "name" => "Kemalang",
                "city_id" => 196,
            ),
            array(
                "id" => 2736,
                "name" => "Klaten Selatan",
                "city_id" => 196,
            ),
            array(
                "id" => 2737,
                "name" => "Klaten Tengah",
                "city_id" => 196,
            ),
            array(
                "id" => 2738,
                "name" => "Klaten Utara",
                "city_id" => 196,
            ),
            array(
                "id" => 2739,
                "name" => "Manisrenggo",
                "city_id" => 196,
            ),
            array(
                "id" => 2740,
                "name" => "Ngawen",
                "city_id" => 196,
            ),
            array(
                "id" => 2741,
                "name" => "Pedan",
                "city_id" => 196,
            ),
            array(
                "id" => 2742,
                "name" => "Polanharjo",
                "city_id" => 196,
            ),
            array(
                "id" => 2743,
                "name" => "Prambanan",
                "city_id" => 196,
            ),
            array(
                "id" => 2744,
                "name" => "Trucuk",
                "city_id" => 196,
            ),
            array(
                "id" => 2745,
                "name" => "Tulung",
                "city_id" => 196,
            ),
            array(
                "id" => 2746,
                "name" => "Wedi",
                "city_id" => 196,
            ),
            array(
                "id" => 2747,
                "name" => "Wonosari",
                "city_id" => 196,
            ),
            array(
                "id" => 2748,
                "name" => "Banjarangkan",
                "city_id" => 197,
            ),
            array(
                "id" => 2749,
                "name" => "Dawan",
                "city_id" => 197,
            ),
            array(
                "id" => 2750,
                "name" => "Klungkung",
                "city_id" => 197,
            ),
            array(
                "id" => 2751,
                "name" => "Nusapenida",
                "city_id" => 197,
            ),
            array(
                "id" => 2752,
                "name" => "Baula",
                "city_id" => 198,
            ),
            array(
                "id" => 2753,
                "name" => "Kolaka",
                "city_id" => 198,
            ),
            array(
                "id" => 2754,
                "name" => "Ladongi",
                "city_id" => 198,
            ),
            array(
                "id" => 2755,
                "name" => "Lalolae",
                "city_id" => 198,
            ),
            array(
                "id" => 2756,
                "name" => "Lambandia (Lambadia)",
                "city_id" => 198,
            ),
            array(
                "id" => 2757,
                "name" => "Latambaga",
                "city_id" => 198,
            ),
            array(
                "id" => 2758,
                "name" => "Loea",
                "city_id" => 198,
            ),
            array(
                "id" => 2759,
                "name" => "Mowewe",
                "city_id" => 198,
            ),
            array(
                "id" => 2760,
                "name" => "Poli Polia",
                "city_id" => 198,
            ),
            array(
                "id" => 2761,
                "name" => "Polinggona",
                "city_id" => 198,
            ),
            array(
                "id" => 2762,
                "name" => "Pomalaa",
                "city_id" => 198,
            ),
            array(
                "id" => 2763,
                "name" => "Samaturu",
                "city_id" => 198,
            ),
            array(
                "id" => 2764,
                "name" => "Tanggetada",
                "city_id" => 198,
            ),
            array(
                "id" => 2765,
                "name" => "Tinondo",
                "city_id" => 198,
            ),
            array(
                "id" => 2766,
                "name" => "Tirawuta",
                "city_id" => 198,
            ),
            array(
                "id" => 2767,
                "name" => "Toari",
                "city_id" => 198,
            ),
            array(
                "id" => 2768,
                "name" => "Uluiwoi",
                "city_id" => 198,
            ),
            array(
                "id" => 2769,
                "name" => "Watumbangga (Watubanggo)",
                "city_id" => 198,
            ),
            array(
                "id" => 2770,
                "name" => "Wolo",
                "city_id" => 198,
            ),
            array(
                "id" => 2771,
                "name" => "Wundulako",
                "city_id" => 198,
            ),
            array(
                "id" => 2772,
                "name" => "Batu Putih",
                "city_id" => 199,
            ),
            array(
                "id" => 2773,
                "name" => "Katoi",
                "city_id" => 199,
            ),
            array(
                "id" => 2774,
                "name" => "Kodeoha",
                "city_id" => 199,
            ),
            array(
                "id" => 2775,
                "name" => "Lasusua",
                "city_id" => 199,
            ),
            array(
                "id" => 2776,
                "name" => "Lombai (Lambai)",
                "city_id" => 199,
            ),
            array(
                "id" => 2777,
                "name" => "Ngapa",
                "city_id" => 199,
            ),
            array(
                "id" => 2778,
                "name" => "Pakue",
                "city_id" => 199,
            ),
            array(
                "id" => 2779,
                "name" => "Pakue Tengah",
                "city_id" => 199,
            ),
            array(
                "id" => 2780,
                "name" => "Pakue Utara",
                "city_id" => 199,
            ),
            array(
                "id" => 2781,
                "name" => "Porehu",
                "city_id" => 199,
            ),
            array(
                "id" => 2782,
                "name" => "Ranteangin",
                "city_id" => 199,
            ),
            array(
                "id" => 2783,
                "name" => "Tiwu",
                "city_id" => 199,
            ),
            array(
                "id" => 2784,
                "name" => "Tolala",
                "city_id" => 199,
            ),
            array(
                "id" => 2785,
                "name" => "Watunohu",
                "city_id" => 199,
            ),
            array(
                "id" => 2786,
                "name" => "Wawo",
                "city_id" => 199,
            ),
            array(
                "id" => 2787,
                "name" => "Abuki",
                "city_id" => 200,
            ),
            array(
                "id" => 2788,
                "name" => "Amonggedo",
                "city_id" => 200,
            ),
            array(
                "id" => 2789,
                "name" => "Anggaberi",
                "city_id" => 200,
            ),
            array(
                "id" => 2790,
                "name" => "Asinua",
                "city_id" => 200,
            ),
            array(
                "id" => 2791,
                "name" => "Besulutu",
                "city_id" => 200,
            ),
            array(
                "id" => 2792,
                "name" => "Bondoala",
                "city_id" => 200,
            ),
            array(
                "id" => 2793,
                "name" => "Kapoiala (Kapoyala)",
                "city_id" => 200,
            ),
            array(
                "id" => 2794,
                "name" => "Konawe",
                "city_id" => 200,
            ),
            array(
                "id" => 2795,
                "name" => "Lalonggasumeeto",
                "city_id" => 200,
            ),
            array(
                "id" => 2796,
                "name" => "Lambuya",
                "city_id" => 200,
            ),
            array(
                "id" => 2797,
                "name" => "Latoma",
                "city_id" => 200,
            ),
            array(
                "id" => 2798,
                "name" => "Meluhu",
                "city_id" => 200,
            ),
            array(
                "id" => 2799,
                "name" => "Onembute",
                "city_id" => 200,
            ),
            array(
                "id" => 2800,
                "name" => "Pondidaha",
                "city_id" => 200,
            ),
            array(
                "id" => 2801,
                "name" => "Puriala",
                "city_id" => 200,
            ),
            array(
                "id" => 2802,
                "name" => "Routa",
                "city_id" => 200,
            ),
            array(
                "id" => 2803,
                "name" => "Sampara",
                "city_id" => 200,
            ),
            array(
                "id" => 2804,
                "name" => "Soropia",
                "city_id" => 200,
            ),
            array(
                "id" => 2805,
                "name" => "Tongauna",
                "city_id" => 200,
            ),
            array(
                "id" => 2806,
                "name" => "Uepai (Uwepai)",
                "city_id" => 200,
            ),
            array(
                "id" => 2807,
                "name" => "Unaaha",
                "city_id" => 200,
            ),
            array(
                "id" => 2808,
                "name" => "Wawonii Barat",
                "city_id" => 200,
            ),
            array(
                "id" => 2809,
                "name" => "Wawonii Selatan",
                "city_id" => 200,
            ),
            array(
                "id" => 2810,
                "name" => "Wawonii Tengah",
                "city_id" => 200,
            ),
            array(
                "id" => 2811,
                "name" => "Wawonii Tenggara",
                "city_id" => 200,
            ),
            array(
                "id" => 2812,
                "name" => "Wawonii Timur",
                "city_id" => 200,
            ),
            array(
                "id" => 2813,
                "name" => "Wawonii Timur Laut",
                "city_id" => 200,
            ),
            array(
                "id" => 2814,
                "name" => "Wawonii Utara",
                "city_id" => 200,
            ),
            array(
                "id" => 2815,
                "name" => "Wawotobi",
                "city_id" => 200,
            ),
            array(
                "id" => 2816,
                "name" => "Wonggeduku",
                "city_id" => 200,
            ),
            array(
                "id" => 2817,
                "name" => "Andoolo",
                "city_id" => 201,
            ),
            array(
                "id" => 2818,
                "name" => "Angata",
                "city_id" => 201,
            ),
            array(
                "id" => 2819,
                "name" => "Baito",
                "city_id" => 201,
            ),
            array(
                "id" => 2820,
                "name" => "Basala",
                "city_id" => 201,
            ),
            array(
                "id" => 2821,
                "name" => "Benua",
                "city_id" => 201,
            ),
            array(
                "id" => 2822,
                "name" => "Buke",
                "city_id" => 201,
            ),
            array(
                "id" => 2823,
                "name" => "Kolono",
                "city_id" => 201,
            ),
            array(
                "id" => 2824,
                "name" => "Konda",
                "city_id" => 201,
            ),
            array(
                "id" => 2825,
                "name" => "Laeya",
                "city_id" => 201,
            ),
            array(
                "id" => 2826,
                "name" => "Lainea",
                "city_id" => 201,
            ),
            array(
                "id" => 2827,
                "name" => "Lalembuu / Lalumbuu",
                "city_id" => 201,
            ),
            array(
                "id" => 2828,
                "name" => "Landono",
                "city_id" => 201,
            ),
            array(
                "id" => 2829,
                "name" => "Laonti",
                "city_id" => 201,
            ),
            array(
                "id" => 2830,
                "name" => "Moramo",
                "city_id" => 201,
            ),
            array(
                "id" => 2831,
                "name" => "Moramo Utara",
                "city_id" => 201,
            ),
            array(
                "id" => 2832,
                "name" => "Mowila",
                "city_id" => 201,
            ),
            array(
                "id" => 2833,
                "name" => "Palangga",
                "city_id" => 201,
            ),
            array(
                "id" => 2834,
                "name" => "Palangga Selatan",
                "city_id" => 201,
            ),
            array(
                "id" => 2835,
                "name" => "Ranomeeto",
                "city_id" => 201,
            ),
            array(
                "id" => 2836,
                "name" => "Ranomeeto Barat",
                "city_id" => 201,
            ),
            array(
                "id" => 2837,
                "name" => "Tinanggea",
                "city_id" => 201,
            ),
            array(
                "id" => 2838,
                "name" => "Wolasi",
                "city_id" => 201,
            ),
            array(
                "id" => 2839,
                "name" => "Andowia",
                "city_id" => 202,
            ),
            array(
                "id" => 2840,
                "name" => "Asera",
                "city_id" => 202,
            ),
            array(
                "id" => 2841,
                "name" => "Langgikima",
                "city_id" => 202,
            ),
            array(
                "id" => 2842,
                "name" => "Lasolo",
                "city_id" => 202,
            ),
            array(
                "id" => 2843,
                "name" => "Lembo",
                "city_id" => 202,
            ),
            array(
                "id" => 2844,
                "name" => "Molawe",
                "city_id" => 202,
            ),
            array(
                "id" => 2845,
                "name" => "Motui",
                "city_id" => 202,
            ),
            array(
                "id" => 2846,
                "name" => "Oheo",
                "city_id" => 202,
            ),
            array(
                "id" => 2847,
                "name" => "Sawa",
                "city_id" => 202,
            ),
            array(
                "id" => 2848,
                "name" => "Wiwirano",
                "city_id" => 202,
            ),
            array(
                "id" => 2849,
                "name" => "Hampang",
                "city_id" => 203,
            ),
            array(
                "id" => 2850,
                "name" => "Kelumpang Barat",
                "city_id" => 203,
            ),
            array(
                "id" => 2851,
                "name" => "Kelumpang Hilir",
                "city_id" => 203,
            ),
            array(
                "id" => 2852,
                "name" => "Kelumpang Hulu",
                "city_id" => 203,
            ),
            array(
                "id" => 2853,
                "name" => "Kelumpang Selatan",
                "city_id" => 203,
            ),
            array(
                "id" => 2854,
                "name" => "Kelumpang Tengah",
                "city_id" => 203,
            ),
            array(
                "id" => 2855,
                "name" => "Kelumpang Utara",
                "city_id" => 203,
            ),
            array(
                "id" => 2856,
                "name" => "Pamukan Barat",
                "city_id" => 203,
            ),
            array(
                "id" => 2857,
                "name" => "Pamukan Selatan",
                "city_id" => 203,
            ),
            array(
                "id" => 2858,
                "name" => "Pamukan Utara",
                "city_id" => 203,
            ),
            array(
                "id" => 2859,
                "name" => "Pulau Laut Barat",
                "city_id" => 203,
            ),
            array(
                "id" => 2860,
                "name" => "Pulau Laut Kepulauan",
                "city_id" => 203,
            ),
            array(
                "id" => 2861,
                "name" => "Pulau Laut Selatan",
                "city_id" => 203,
            ),
            array(
                "id" => 2862,
                "name" => "Pulau Laut Tanjung Selayar",
                "city_id" => 203,
            ),
            array(
                "id" => 2863,
                "name" => "Pulau Laut Tengah",
                "city_id" => 203,
            ),
            array(
                "id" => 2864,
                "name" => "Pulau Laut Timur",
                "city_id" => 203,
            ),
            array(
                "id" => 2865,
                "name" => "Pulau Laut Utara",
                "city_id" => 203,
            ),
            array(
                "id" => 2866,
                "name" => "Pulau Sebuku",
                "city_id" => 203,
            ),
            array(
                "id" => 2867,
                "name" => "Pulau Sembilan",
                "city_id" => 203,
            ),
            array(
                "id" => 2868,
                "name" => "Sampanahan",
                "city_id" => 203,
            ),
            array(
                "id" => 2869,
                "name" => "Sungai Durian",
                "city_id" => 203,
            ),
            array(
                "id" => 2870,
                "name" => "Kotamobagu Barat",
                "city_id" => 204,
            ),
            array(
                "id" => 2871,
                "name" => "Kotamobagu Selatan",
                "city_id" => 204,
            ),
            array(
                "id" => 2872,
                "name" => "Kotamobagu Timur",
                "city_id" => 204,
            ),
            array(
                "id" => 2873,
                "name" => "Kotamobagu Utara",
                "city_id" => 204,
            ),
            array(
                "id" => 2874,
                "name" => "Arut Selatan",
                "city_id" => 205,
            ),
            array(
                "id" => 2875,
                "name" => "Arut Utara",
                "city_id" => 205,
            ),
            array(
                "id" => 2876,
                "name" => "Kotawaringin Lama",
                "city_id" => 205,
            ),
            array(
                "id" => 2877,
                "name" => "Kumai",
                "city_id" => 205,
            ),
            array(
                "id" => 2878,
                "name" => "Pangkalan Banteng",
                "city_id" => 205,
            ),
            array(
                "id" => 2879,
                "name" => "Pangkalan Lada",
                "city_id" => 205,
            ),
            array(
                "id" => 2880,
                "name" => "Antang Kalang",
                "city_id" => 206,
            ),
            array(
                "id" => 2881,
                "name" => "Baamang",
                "city_id" => 206,
            ),
            array(
                "id" => 2882,
                "name" => "Bukit Santuei",
                "city_id" => 206,
            ),
            array(
                "id" => 2883,
                "name" => "Cempaga",
                "city_id" => 206,
            ),
            array(
                "id" => 2884,
                "name" => "Cempaga Hulu",
                "city_id" => 206,
            ),
            array(
                "id" => 2885,
                "name" => "Kota Besi",
                "city_id" => 206,
            ),
            array(
                "id" => 2886,
                "name" => "Mentawa Baru (Ketapang)",
                "city_id" => 206,
            ),
            array(
                "id" => 2887,
                "name" => "Mentaya Hilir Selatan",
                "city_id" => 206,
            ),
            array(
                "id" => 2888,
                "name" => "Mentaya Hilir Utara",
                "city_id" => 206,
            ),
            array(
                "id" => 2889,
                "name" => "Mentaya Hulu",
                "city_id" => 206,
            ),
            array(
                "id" => 2890,
                "name" => "Parenggean",
                "city_id" => 206,
            ),
            array(
                "id" => 2891,
                "name" => "Pulau Hanaut",
                "city_id" => 206,
            ),
            array(
                "id" => 2892,
                "name" => "Seranau",
                "city_id" => 206,
            ),
            array(
                "id" => 2893,
                "name" => "Telaga Antang",
                "city_id" => 206,
            ),
            array(
                "id" => 2894,
                "name" => "Telawang",
                "city_id" => 206,
            ),
            array(
                "id" => 2895,
                "name" => "Teluk Sampit",
                "city_id" => 206,
            ),
            array(
                "id" => 2896,
                "name" => "Tualan Hulu",
                "city_id" => 206,
            ),
            array(
                "id" => 2897,
                "name" => "Benai",
                "city_id" => 207,
            ),
            array(
                "id" => 2898,
                "name" => "Cerenti",
                "city_id" => 207,
            ),
            array(
                "id" => 2899,
                "name" => "Gunung Toar",
                "city_id" => 207,
            ),
            array(
                "id" => 2900,
                "name" => "Hulu Kuantan",
                "city_id" => 207,
            ),
            array(
                "id" => 2901,
                "name" => "Inuman",
                "city_id" => 207,
            ),
            array(
                "id" => 2902,
                "name" => "Kuantan Hilir",
                "city_id" => 207,
            ),
            array(
                "id" => 2903,
                "name" => "Kuantan Hilir Seberang",
                "city_id" => 207,
            ),
            array(
                "id" => 2904,
                "name" => "Kuantan Mudik",
                "city_id" => 207,
            ),
            array(
                "id" => 2905,
                "name" => "Kuantan Tengah",
                "city_id" => 207,
            ),
            array(
                "id" => 2906,
                "name" => "Logas Tanah Darat",
                "city_id" => 207,
            ),
            array(
                "id" => 2907,
                "name" => "Pangean",
                "city_id" => 207,
            ),
            array(
                "id" => 2908,
                "name" => "Pucuk Rantau",
                "city_id" => 207,
            ),
            array(
                "id" => 2909,
                "name" => "Sentajo Raya",
                "city_id" => 207,
            ),
            array(
                "id" => 2910,
                "name" => "Singingi",
                "city_id" => 207,
            ),
            array(
                "id" => 2911,
                "name" => "Singingi Hilir",
                "city_id" => 207,
            ),
            array(
                "id" => 2912,
                "name" => "Batu Ampar",
                "city_id" => 208,
            ),
            array(
                "id" => 2913,
                "name" => "Kuala Mandor-B",
                "city_id" => 208,
            ),
            array(
                "id" => 2914,
                "name" => "Kubu",
                "city_id" => 208,
            ),
            array(
                "id" => 2915,
                "name" => "Rasau Jaya",
                "city_id" => 208,
            ),
            array(
                "id" => 2916,
                "name" => "Sei/Sungai Ambawang",
                "city_id" => 208,
            ),
            array(
                "id" => 2917,
                "name" => "Sei/Sungai Kakap",
                "city_id" => 208,
            ),
            array(
                "id" => 2918,
                "name" => "Sei/Sungai Raya",
                "city_id" => 208,
            ),
            array(
                "id" => 2919,
                "name" => "Teluk/Telok Pakedai",
                "city_id" => 208,
            ),
            array(
                "id" => 2920,
                "name" => "Terentang",
                "city_id" => 208,
            ),
            array(
                "id" => 2921,
                "name" => "Bae",
                "city_id" => 209,
            ),
            array(
                "id" => 2922,
                "name" => "Dawe",
                "city_id" => 209,
            ),
            array(
                "id" => 2923,
                "name" => "Gebog",
                "city_id" => 209,
            ),
            array(
                "id" => 2924,
                "name" => "Jati",
                "city_id" => 209,
            ),
            array(
                "id" => 2925,
                "name" => "Jekulo",
                "city_id" => 209,
            ),
            array(
                "id" => 2926,
                "name" => "Kaliwungu",
                "city_id" => 209,
            ),
            array(
                "id" => 2927,
                "name" => "Kudus Kota",
                "city_id" => 209,
            ),
            array(
                "id" => 2928,
                "name" => "Mejobo",
                "city_id" => 209,
            ),
            array(
                "id" => 2929,
                "name" => "Undaan",
                "city_id" => 209,
            ),
            array(
                "id" => 2930,
                "name" => "Galur",
                "city_id" => 210,
            ),
            array(
                "id" => 2931,
                "name" => "Girimulyo",
                "city_id" => 210,
            ),
            array(
                "id" => 2932,
                "name" => "Kalibawang",
                "city_id" => 210,
            ),
            array(
                "id" => 2933,
                "name" => "Kokap",
                "city_id" => 210,
            ),
            array(
                "id" => 2934,
                "name" => "Lendah",
                "city_id" => 210,
            ),
            array(
                "id" => 2935,
                "name" => "Nanggulan",
                "city_id" => 210,
            ),
            array(
                "id" => 2936,
                "name" => "Panjatan",
                "city_id" => 210,
            ),
            array(
                "id" => 2937,
                "name" => "Pengasih",
                "city_id" => 210,
            ),
            array(
                "id" => 2938,
                "name" => "Samigaluh",
                "city_id" => 210,
            ),
            array(
                "id" => 2939,
                "name" => "Sentolo",
                "city_id" => 210,
            ),
            array(
                "id" => 2940,
                "name" => "Temon",
                "city_id" => 210,
            ),
            array(
                "id" => 2941,
                "name" => "Wates",
                "city_id" => 210,
            ),
            array(
                "id" => 2942,
                "name" => "Ciawigebang",
                "city_id" => 211,
            ),
            array(
                "id" => 2943,
                "name" => "Cibeureum",
                "city_id" => 211,
            ),
            array(
                "id" => 2944,
                "name" => "Cibingbin",
                "city_id" => 211,
            ),
            array(
                "id" => 2945,
                "name" => "Cidahu",
                "city_id" => 211,
            ),
            array(
                "id" => 2946,
                "name" => "Cigandamekar",
                "city_id" => 211,
            ),
            array(
                "id" => 2947,
                "name" => "Cigugur",
                "city_id" => 211,
            ),
            array(
                "id" => 2948,
                "name" => "Cilebak",
                "city_id" => 211,
            ),
            array(
                "id" => 2949,
                "name" => "Cilimus",
                "city_id" => 211,
            ),
            array(
                "id" => 2950,
                "name" => "Cimahi",
                "city_id" => 211,
            ),
            array(
                "id" => 2951,
                "name" => "Ciniru",
                "city_id" => 211,
            ),
            array(
                "id" => 2952,
                "name" => "Cipicung",
                "city_id" => 211,
            ),
            array(
                "id" => 2953,
                "name" => "Ciwaru",
                "city_id" => 211,
            ),
            array(
                "id" => 2954,
                "name" => "Darma",
                "city_id" => 211,
            ),
            array(
                "id" => 2955,
                "name" => "Garawangi",
                "city_id" => 211,
            ),
            array(
                "id" => 2956,
                "name" => "Hantara",
                "city_id" => 211,
            ),
            array(
                "id" => 2957,
                "name" => "Jalaksana",
                "city_id" => 211,
            ),
            array(
                "id" => 2958,
                "name" => "Japara",
                "city_id" => 211,
            ),
            array(
                "id" => 2959,
                "name" => "Kadugede",
                "city_id" => 211,
            ),
            array(
                "id" => 2960,
                "name" => "Kalimanggis",
                "city_id" => 211,
            ),
            array(
                "id" => 2961,
                "name" => "Karangkancana",
                "city_id" => 211,
            ),
            array(
                "id" => 2962,
                "name" => "Kramat Mulya",
                "city_id" => 211,
            ),
            array(
                "id" => 2963,
                "name" => "Kuningan",
                "city_id" => 211,
            ),
            array(
                "id" => 2964,
                "name" => "Lebakwangi",
                "city_id" => 211,
            ),
            array(
                "id" => 2965,
                "name" => "Luragung",
                "city_id" => 211,
            ),
            array(
                "id" => 2966,
                "name" => "Maleber",
                "city_id" => 211,
            ),
            array(
                "id" => 2967,
                "name" => "Mandirancan",
                "city_id" => 211,
            ),
            array(
                "id" => 2968,
                "name" => "Nusaherang",
                "city_id" => 211,
            ),
            array(
                "id" => 2969,
                "name" => "Pancalang",
                "city_id" => 211,
            ),
            array(
                "id" => 2970,
                "name" => "Pasawahan",
                "city_id" => 211,
            ),
            array(
                "id" => 2971,
                "name" => "Selajambe",
                "city_id" => 211,
            ),
            array(
                "id" => 2972,
                "name" => "Sindangagung",
                "city_id" => 211,
            ),
            array(
                "id" => 2973,
                "name" => "Subang",
                "city_id" => 211,
            ),
            array(
                "id" => 2974,
                "name" => "Amabi Oefeto",
                "city_id" => 212,
            ),
            array(
                "id" => 2975,
                "name" => "Amabi Oefeto Timur",
                "city_id" => 212,
            ),
            array(
                "id" => 2976,
                "name" => "Amarasi",
                "city_id" => 212,
            ),
            array(
                "id" => 2977,
                "name" => "Amarasi Barat",
                "city_id" => 212,
            ),
            array(
                "id" => 2978,
                "name" => "Amarasi Selatan",
                "city_id" => 212,
            ),
            array(
                "id" => 2979,
                "name" => "Amarasi Timur",
                "city_id" => 212,
            ),
            array(
                "id" => 2980,
                "name" => "Amfoang Barat Daya",
                "city_id" => 212,
            ),
            array(
                "id" => 2981,
                "name" => "Amfoang Barat Laut",
                "city_id" => 212,
            ),
            array(
                "id" => 2982,
                "name" => "Amfoang Selatan",
                "city_id" => 212,
            ),
            array(
                "id" => 2983,
                "name" => "Amfoang Tengah",
                "city_id" => 212,
            ),
            array(
                "id" => 2984,
                "name" => "Amfoang Timur",
                "city_id" => 212,
            ),
            array(
                "id" => 2985,
                "name" => "Amfoang Utara",
                "city_id" => 212,
            ),
            array(
                "id" => 2986,
                "name" => "Fatuleu",
                "city_id" => 212,
            ),
            array(
                "id" => 2987,
                "name" => "Fatuleu Barat",
                "city_id" => 212,
            ),
            array(
                "id" => 2988,
                "name" => "Fatuleu Tengah",
                "city_id" => 212,
            ),
            array(
                "id" => 2989,
                "name" => "Kupang Barat",
                "city_id" => 212,
            ),
            array(
                "id" => 2990,
                "name" => "Kupang Tengah",
                "city_id" => 212,
            ),
            array(
                "id" => 2991,
                "name" => "Kupang Timur",
                "city_id" => 212,
            ),
            array(
                "id" => 2992,
                "name" => "Nekamese",
                "city_id" => 212,
            ),
            array(
                "id" => 2993,
                "name" => "Semau",
                "city_id" => 212,
            ),
            array(
                "id" => 2994,
                "name" => "Semau Selatan",
                "city_id" => 212,
            ),
            array(
                "id" => 2995,
                "name" => "Sulamu",
                "city_id" => 212,
            ),
            array(
                "id" => 2996,
                "name" => "Taebenu",
                "city_id" => 212,
            ),
            array(
                "id" => 2997,
                "name" => "Takari",
                "city_id" => 212,
            ),
            array(
                "id" => 2998,
                "name" => "Alak",
                "city_id" => 213,
            ),
            array(
                "id" => 2999,
                "name" => "Kelapa Lima",
                "city_id" => 213,
            ),
            array(
                "id" => 3000,
                "name" => "Kota Lama",
                "city_id" => 213,
            ),
            array(
                "id" => 3001,
                "name" => "Kota Raja",
                "city_id" => 213,
            ),
            array(
                "id" => 3002,
                "name" => "Maulafa",
                "city_id" => 213,
            ),
            array(
                "id" => 3003,
                "name" => "Oebobo",
                "city_id" => 213,
            ),
            array(
                "id" => 3004,
                "name" => "Barong Tongkok",
                "city_id" => 214,
            ),
            array(
                "id" => 3005,
                "name" => "Bentian Besar",
                "city_id" => 214,
            ),
            array(
                "id" => 3006,
                "name" => "Bongan",
                "city_id" => 214,
            ),
            array(
                "id" => 3007,
                "name" => "Damai",
                "city_id" => 214,
            ),
            array(
                "id" => 3008,
                "name" => "Jempang",
                "city_id" => 214,
            ),
            array(
                "id" => 3009,
                "name" => "Laham",
                "city_id" => 214,
            ),
            array(
                "id" => 3010,
                "name" => "Linggang Bigung",
                "city_id" => 214,
            ),
            array(
                "id" => 3011,
                "name" => "Long Apari",
                "city_id" => 214,
            ),
            array(
                "id" => 3012,
                "name" => "Long Bagun",
                "city_id" => 214,
            ),
            array(
                "id" => 3013,
                "name" => "Long Hubung",
                "city_id" => 214,
            ),
            array(
                "id" => 3014,
                "name" => "Long Iram",
                "city_id" => 214,
            ),
            array(
                "id" => 3015,
                "name" => "Long Pahangai",
                "city_id" => 214,
            ),
            array(
                "id" => 3016,
                "name" => "Manor Bulatin (Mook Manaar Bulatn)",
                "city_id" => 214,
            ),
            array(
                "id" => 3017,
                "name" => "Melak",
                "city_id" => 214,
            ),
            array(
                "id" => 3018,
                "name" => "Muara Lawa",
                "city_id" => 214,
            ),
            array(
                "id" => 3019,
                "name" => "Muara Pahu",
                "city_id" => 214,
            ),
            array(
                "id" => 3020,
                "name" => "Nyuatan",
                "city_id" => 214,
            ),
            array(
                "id" => 3021,
                "name" => "Penyinggahan",
                "city_id" => 214,
            ),
            array(
                "id" => 3022,
                "name" => "Sekolaq Darat",
                "city_id" => 214,
            ),
            array(
                "id" => 3023,
                "name" => "Siluq Ngurai",
                "city_id" => 214,
            ),
            array(
                "id" => 3024,
                "name" => "Tering",
                "city_id" => 214,
            ),
            array(
                "id" => 3025,
                "name" => "Anggana",
                "city_id" => 215,
            ),
            array(
                "id" => 3026,
                "name" => "Kembang Janggut",
                "city_id" => 215,
            ),
            array(
                "id" => 3027,
                "name" => "Kenohan",
                "city_id" => 215,
            ),
            array(
                "id" => 3028,
                "name" => "Kota Bangun",
                "city_id" => 215,
            ),
            array(
                "id" => 3029,
                "name" => "Loa Janan",
                "city_id" => 215,
            ),
            array(
                "id" => 3030,
                "name" => "Loa Kulu",
                "city_id" => 215,
            ),
            array(
                "id" => 3031,
                "name" => "Marang Kayu",
                "city_id" => 215,
            ),
            array(
                "id" => 3032,
                "name" => "Muara Badak",
                "city_id" => 215,
            ),
            array(
                "id" => 3033,
                "name" => "Muara Jawa",
                "city_id" => 215,
            ),
            array(
                "id" => 3034,
                "name" => "Muara Kaman",
                "city_id" => 215,
            ),
            array(
                "id" => 3035,
                "name" => "Muara Muntai",
                "city_id" => 215,
            ),
            array(
                "id" => 3036,
                "name" => "Muara Wis",
                "city_id" => 215,
            ),
            array(
                "id" => 3037,
                "name" => "Samboja (Semboja)",
                "city_id" => 215,
            ),
            array(
                "id" => 3038,
                "name" => "Sanga-Sanga",
                "city_id" => 215,
            ),
            array(
                "id" => 3039,
                "name" => "Sebulu",
                "city_id" => 215,
            ),
            array(
                "id" => 3040,
                "name" => "Tabang",
                "city_id" => 215,
            ),
            array(
                "id" => 3041,
                "name" => "Tenggarong",
                "city_id" => 215,
            ),
            array(
                "id" => 3042,
                "name" => "Tenggarong Seberang",
                "city_id" => 215,
            ),
            array(
                "id" => 3043,
                "name" => "Batu Ampar",
                "city_id" => 216,
            ),
            array(
                "id" => 3044,
                "name" => "Bengalon",
                "city_id" => 216,
            ),
            array(
                "id" => 3045,
                "name" => "Busang",
                "city_id" => 216,
            ),
            array(
                "id" => 3046,
                "name" => "Kaliorang",
                "city_id" => 216,
            ),
            array(
                "id" => 3047,
                "name" => "Karangan",
                "city_id" => 216,
            ),
            array(
                "id" => 3048,
                "name" => "Kaubun",
                "city_id" => 216,
            ),
            array(
                "id" => 3049,
                "name" => "Kongbeng",
                "city_id" => 216,
            ),
            array(
                "id" => 3050,
                "name" => "Long Mesangat (Mesengat)",
                "city_id" => 216,
            ),
            array(
                "id" => 3051,
                "name" => "Muara Ancalong",
                "city_id" => 216,
            ),
            array(
                "id" => 3052,
                "name" => "Muara Bengkal",
                "city_id" => 216,
            ),
            array(
                "id" => 3053,
                "name" => "Muara Wahau",
                "city_id" => 216,
            ),
            array(
                "id" => 3054,
                "name" => "Rantau Pulung",
                "city_id" => 216,
            ),
            array(
                "id" => 3055,
                "name" => "Sandaran",
                "city_id" => 216,
            ),
            array(
                "id" => 3056,
                "name" => "Sangatta Selatan",
                "city_id" => 216,
            ),
            array(
                "id" => 3057,
                "name" => "Sangatta Utara",
                "city_id" => 216,
            ),
            array(
                "id" => 3058,
                "name" => "Sangkulirang",
                "city_id" => 216,
            ),
            array(
                "id" => 3059,
                "name" => "Telen",
                "city_id" => 216,
            ),
            array(
                "id" => 3060,
                "name" => "Teluk Pandan",
                "city_id" => 216,
            ),
            array(
                "id" => 3061,
                "name" => "Bilah Barat",
                "city_id" => 217,
            ),
            array(
                "id" => 3062,
                "name" => "Bilah Hilir",
                "city_id" => 217,
            ),
            array(
                "id" => 3063,
                "name" => "Bilah Hulu",
                "city_id" => 217,
            ),
            array(
                "id" => 3064,
                "name" => "Panai Hilir",
                "city_id" => 217,
            ),
            array(
                "id" => 3065,
                "name" => "Panai Hulu",
                "city_id" => 217,
            ),
            array(
                "id" => 3066,
                "name" => "Panai Tengah",
                "city_id" => 217,
            ),
            array(
                "id" => 3067,
                "name" => "Pangkatan",
                "city_id" => 217,
            ),
            array(
                "id" => 3068,
                "name" => "Rantau Selatan",
                "city_id" => 217,
            ),
            array(
                "id" => 3069,
                "name" => "Rantau Utara",
                "city_id" => 217,
            ),
            array(
                "id" => 3070,
                "name" => "Kampung Rakyat",
                "city_id" => 218,
            ),
            array(
                "id" => 3071,
                "name" => "Kota Pinang",
                "city_id" => 218,
            ),
            array(
                "id" => 3072,
                "name" => "Sei/Sungai Kanan",
                "city_id" => 218,
            ),
            array(
                "id" => 3073,
                "name" => "Silangkitang",
                "city_id" => 218,
            ),
            array(
                "id" => 3074,
                "name" => "Torgamba",
                "city_id" => 218,
            ),
            array(
                "id" => 3075,
                "name" => "Aek Kuo",
                "city_id" => 219,
            ),
            array(
                "id" => 3076,
                "name" => "Aek Natas",
                "city_id" => 219,
            ),
            array(
                "id" => 3077,
                "name" => "Kuala Ledong (Kualuh Leidong)",
                "city_id" => 219,
            ),
            array(
                "id" => 3078,
                "name" => "Kualuh Hilir",
                "city_id" => 219,
            ),
            array(
                "id" => 3079,
                "name" => "Kualuh Hulu",
                "city_id" => 219,
            ),
            array(
                "id" => 3080,
                "name" => "Kualuh Selatan",
                "city_id" => 219,
            ),
            array(
                "id" => 3081,
                "name" => "Marbau",
                "city_id" => 219,
            ),
            array(
                "id" => 3082,
                "name" => "Na IX-X",
                "city_id" => 219,
            ),
            array(
                "id" => 3083,
                "name" => "Gumay Talang",
                "city_id" => 220,
            ),
            array(
                "id" => 3084,
                "name" => "Gumay Ulu",
                "city_id" => 220,
            ),
            array(
                "id" => 3085,
                "name" => "Jarai",
                "city_id" => 220,
            ),
            array(
                "id" => 3086,
                "name" => "Kikim Barat",
                "city_id" => 220,
            ),
            array(
                "id" => 3087,
                "name" => "Kikim Selatan",
                "city_id" => 220,
            ),
            array(
                "id" => 3088,
                "name" => "Kikim Tengah",
                "city_id" => 220,
            ),
            array(
                "id" => 3089,
                "name" => "Kikim Timur",
                "city_id" => 220,
            ),
            array(
                "id" => 3090,
                "name" => "Kota Agung",
                "city_id" => 220,
            ),
            array(
                "id" => 3091,
                "name" => "Lahat",
                "city_id" => 220,
            ),
            array(
                "id" => 3092,
                "name" => "Merapi Barat",
                "city_id" => 220,
            ),
            array(
                "id" => 3093,
                "name" => "Merapi Selatan",
                "city_id" => 220,
            ),
            array(
                "id" => 3094,
                "name" => "Merapi Timur",
                "city_id" => 220,
            ),
            array(
                "id" => 3095,
                "name" => "Muarapayang",
                "city_id" => 220,
            ),
            array(
                "id" => 3096,
                "name" => "Mulak Ulu",
                "city_id" => 220,
            ),
            array(
                "id" => 3097,
                "name" => "Pagar Gunung",
                "city_id" => 220,
            ),
            array(
                "id" => 3098,
                "name" => "Pajar Bulan",
                "city_id" => 220,
            ),
            array(
                "id" => 3099,
                "name" => "Pseksu",
                "city_id" => 220,
            ),
            array(
                "id" => 3100,
                "name" => "Pulau Pinang",
                "city_id" => 220,
            ),
            array(
                "id" => 3101,
                "name" => "Sukamerindu",
                "city_id" => 220,
            ),
            array(
                "id" => 3102,
                "name" => "Tanjung Sakti Pumi",
                "city_id" => 220,
            ),
            array(
                "id" => 3103,
                "name" => "Tanjung Sakti Pumu",
                "city_id" => 220,
            ),
            array(
                "id" => 3104,
                "name" => "Tanjung Tebat",
                "city_id" => 220,
            ),
            array(
                "id" => 3105,
                "name" => "Batangkawa",
                "city_id" => 221,
            ),
            array(
                "id" => 3106,
                "name" => "Belantikan Raya",
                "city_id" => 221,
            ),
            array(
                "id" => 3107,
                "name" => "Bulik",
                "city_id" => 221,
            ),
            array(
                "id" => 3108,
                "name" => "Bulik Timur",
                "city_id" => 221,
            ),
            array(
                "id" => 3109,
                "name" => "Delang",
                "city_id" => 221,
            ),
            array(
                "id" => 3110,
                "name" => "Lamandau",
                "city_id" => 221,
            ),
            array(
                "id" => 3111,
                "name" => "Menthobi Raya",
                "city_id" => 221,
            ),
            array(
                "id" => 3112,
                "name" => "Sematu Jaya",
                "city_id" => 221,
            ),
            array(
                "id" => 3113,
                "name" => "Babat",
                "city_id" => 222,
            ),
            array(
                "id" => 3114,
                "name" => "Bluluk",
                "city_id" => 222,
            ),
            array(
                "id" => 3115,
                "name" => "Brondong",
                "city_id" => 222,
            ),
            array(
                "id" => 3116,
                "name" => "Deket",
                "city_id" => 222,
            ),
            array(
                "id" => 3117,
                "name" => "Glagah",
                "city_id" => 222,
            ),
            array(
                "id" => 3118,
                "name" => "Kalitengah",
                "city_id" => 222,
            ),
            array(
                "id" => 3119,
                "name" => "Karang Geneng",
                "city_id" => 222,
            ),
            array(
                "id" => 3120,
                "name" => "Karangbinangun",
                "city_id" => 222,
            ),
            array(
                "id" => 3121,
                "name" => "Kedungpring",
                "city_id" => 222,
            ),
            array(
                "id" => 3122,
                "name" => "Kembangbahu",
                "city_id" => 222,
            ),
            array(
                "id" => 3123,
                "name" => "Lamongan",
                "city_id" => 222,
            ),
            array(
                "id" => 3124,
                "name" => "Laren",
                "city_id" => 222,
            ),
            array(
                "id" => 3125,
                "name" => "Maduran",
                "city_id" => 222,
            ),
            array(
                "id" => 3126,
                "name" => "Mantup",
                "city_id" => 222,
            ),
            array(
                "id" => 3127,
                "name" => "Modo",
                "city_id" => 222,
            ),
            array(
                "id" => 3128,
                "name" => "Ngimbang",
                "city_id" => 222,
            ),
            array(
                "id" => 3129,
                "name" => "Paciran",
                "city_id" => 222,
            ),
            array(
                "id" => 3130,
                "name" => "Pucuk",
                "city_id" => 222,
            ),
            array(
                "id" => 3131,
                "name" => "Sambeng",
                "city_id" => 222,
            ),
            array(
                "id" => 3132,
                "name" => "Sarirejo",
                "city_id" => 222,
            ),
            array(
                "id" => 3133,
                "name" => "Sekaran",
                "city_id" => 222,
            ),
            array(
                "id" => 3134,
                "name" => "Solokuro",
                "city_id" => 222,
            ),
            array(
                "id" => 3135,
                "name" => "Sugio",
                "city_id" => 222,
            ),
            array(
                "id" => 3136,
                "name" => "Sukodadi",
                "city_id" => 222,
            ),
            array(
                "id" => 3137,
                "name" => "Sukorame",
                "city_id" => 222,
            ),
            array(
                "id" => 3138,
                "name" => "Tikung",
                "city_id" => 222,
            ),
            array(
                "id" => 3139,
                "name" => "Turi",
                "city_id" => 222,
            ),
            array(
                "id" => 3140,
                "name" => "Air Hitam",
                "city_id" => 223,
            ),
            array(
                "id" => 3141,
                "name" => "Balik Bukit",
                "city_id" => 223,
            ),
            array(
                "id" => 3142,
                "name" => "Bandar Negeri Suoh",
                "city_id" => 223,
            ),
            array(
                "id" => 3143,
                "name" => "Batu Brak",
                "city_id" => 223,
            ),
            array(
                "id" => 3144,
                "name" => "Batu Ketulis",
                "city_id" => 223,
            ),
            array(
                "id" => 3145,
                "name" => "Belalau",
                "city_id" => 223,
            ),
            array(
                "id" => 3146,
                "name" => "Gedung Surian",
                "city_id" => 223,
            ),
            array(
                "id" => 3147,
                "name" => "Kebun Tebu",
                "city_id" => 223,
            ),
            array(
                "id" => 3148,
                "name" => "Lumbok Seminung",
                "city_id" => 223,
            ),
            array(
                "id" => 3149,
                "name" => "Pagar Dewa",
                "city_id" => 223,
            ),
            array(
                "id" => 3150,
                "name" => "Sekincau",
                "city_id" => 223,
            ),
            array(
                "id" => 3151,
                "name" => "Sukau",
                "city_id" => 223,
            ),
            array(
                "id" => 3152,
                "name" => "Sumber Jaya",
                "city_id" => 223,
            ),
            array(
                "id" => 3153,
                "name" => "Suoh",
                "city_id" => 223,
            ),
            array(
                "id" => 3154,
                "name" => "Way Tenong",
                "city_id" => 223,
            ),
            array(
                "id" => 3155,
                "name" => "Bakauheni",
                "city_id" => 224,
            ),
            array(
                "id" => 3156,
                "name" => "Candipuro",
                "city_id" => 224,
            ),
            array(
                "id" => 3157,
                "name" => "Jati Agung",
                "city_id" => 224,
            ),
            array(
                "id" => 3158,
                "name" => "Kalianda",
                "city_id" => 224,
            ),
            array(
                "id" => 3159,
                "name" => "Katibung",
                "city_id" => 224,
            ),
            array(
                "id" => 3160,
                "name" => "Ketapang",
                "city_id" => 224,
            ),
            array(
                "id" => 3161,
                "name" => "Merbau Mataram",
                "city_id" => 224,
            ),
            array(
                "id" => 3162,
                "name" => "Natar",
                "city_id" => 224,
            ),
            array(
                "id" => 3163,
                "name" => "Palas",
                "city_id" => 224,
            ),
            array(
                "id" => 3164,
                "name" => "Penengahan",
                "city_id" => 224,
            ),
            array(
                "id" => 3165,
                "name" => "Rajabasa",
                "city_id" => 224,
            ),
            array(
                "id" => 3166,
                "name" => "Sidomulyo",
                "city_id" => 224,
            ),
            array(
                "id" => 3167,
                "name" => "Sragi",
                "city_id" => 224,
            ),
            array(
                "id" => 3168,
                "name" => "Tanjung Bintang",
                "city_id" => 224,
            ),
            array(
                "id" => 3169,
                "name" => "Tanjung Sari",
                "city_id" => 224,
            ),
            array(
                "id" => 3170,
                "name" => "Way Panji",
                "city_id" => 224,
            ),
            array(
                "id" => 3171,
                "name" => "Way Sulan",
                "city_id" => 224,
            ),
            array(
                "id" => 3172,
                "name" => "Anak Ratu Aji",
                "city_id" => 225,
            ),
            array(
                "id" => 3173,
                "name" => "Anak Tuha",
                "city_id" => 225,
            ),
            array(
                "id" => 3174,
                "name" => "Bandar Mataram",
                "city_id" => 225,
            ),
            array(
                "id" => 3175,
                "name" => "Bandar Surabaya",
                "city_id" => 225,
            ),
            array(
                "id" => 3176,
                "name" => "Bangunrejo",
                "city_id" => 225,
            ),
            array(
                "id" => 3177,
                "name" => "Bekri",
                "city_id" => 225,
            ),
            array(
                "id" => 3178,
                "name" => "Bumi Nabung",
                "city_id" => 225,
            ),
            array(
                "id" => 3179,
                "name" => "Bumi Ratu Nuban",
                "city_id" => 225,
            ),
            array(
                "id" => 3180,
                "name" => "Gunung Sugih",
                "city_id" => 225,
            ),
            array(
                "id" => 3181,
                "name" => "Kalirejo",
                "city_id" => 225,
            ),
            array(
                "id" => 3182,
                "name" => "Kota Gajah",
                "city_id" => 225,
            ),
            array(
                "id" => 3183,
                "name" => "Padang Ratu",
                "city_id" => 225,
            ),
            array(
                "id" => 3184,
                "name" => "Pubian",
                "city_id" => 225,
            ),
            array(
                "id" => 3185,
                "name" => "Punggur",
                "city_id" => 225,
            ),
            array(
                "id" => 3186,
                "name" => "Putra Rumbia",
                "city_id" => 225,
            ),
            array(
                "id" => 3187,
                "name" => "Rumbia",
                "city_id" => 225,
            ),
            array(
                "id" => 3188,
                "name" => "Selagai Lingga",
                "city_id" => 225,
            ),
            array(
                "id" => 3189,
                "name" => "Sendang Agung",
                "city_id" => 225,
            ),
            array(
                "id" => 3190,
                "name" => "Seputih Agung",
                "city_id" => 225,
            ),
            array(
                "id" => 3191,
                "name" => "Seputih Banyak",
                "city_id" => 225,
            ),
            array(
                "id" => 3192,
                "name" => "Seputih Mataram",
                "city_id" => 225,
            ),
            array(
                "id" => 3193,
                "name" => "Seputih Raman",
                "city_id" => 225,
            ),
            array(
                "id" => 3194,
                "name" => "Seputih Surabaya",
                "city_id" => 225,
            ),
            array(
                "id" => 3195,
                "name" => "Terbanggi Besar",
                "city_id" => 225,
            ),
            array(
                "id" => 3196,
                "name" => "Terusan Nunyai",
                "city_id" => 225,
            ),
            array(
                "id" => 3197,
                "name" => "Trimurjo",
                "city_id" => 225,
            ),
            array(
                "id" => 3198,
                "name" => "Way Pangubuan (Pengubuan)",
                "city_id" => 225,
            ),
            array(
                "id" => 3199,
                "name" => "Way Seputih",
                "city_id" => 225,
            ),
            array(
                "id" => 3200,
                "name" => "Bandar Sribawono",
                "city_id" => 226,
            ),
            array(
                "id" => 3201,
                "name" => "Batanghari",
                "city_id" => 226,
            ),
            array(
                "id" => 3202,
                "name" => "Batanghari Nuban",
                "city_id" => 226,
            ),
            array(
                "id" => 3203,
                "name" => "Braja Slebah",
                "city_id" => 226,
            ),
            array(
                "id" => 3204,
                "name" => "Bumi Agung",
                "city_id" => 226,
            ),
            array(
                "id" => 3205,
                "name" => "Gunung Pelindung",
                "city_id" => 226,
            ),
            array(
                "id" => 3206,
                "name" => "Jabung",
                "city_id" => 226,
            ),
            array(
                "id" => 3207,
                "name" => "Labuhan Maringgai",
                "city_id" => 226,
            ),
            array(
                "id" => 3208,
                "name" => "Labuhan Ratu",
                "city_id" => 226,
            ),
            array(
                "id" => 3209,
                "name" => "Marga Sekampung",
                "city_id" => 226,
            ),
            array(
                "id" => 3210,
                "name" => "Margatiga",
                "city_id" => 226,
            ),
            array(
                "id" => 3211,
                "name" => "Mataram Baru",
                "city_id" => 226,
            ),
            array(
                "id" => 3212,
                "name" => "Melinting",
                "city_id" => 226,
            ),
            array(
                "id" => 3213,
                "name" => "Metro Kibang",
                "city_id" => 226,
            ),
            array(
                "id" => 3214,
                "name" => "Pasir Sakti",
                "city_id" => 226,
            ),
            array(
                "id" => 3215,
                "name" => "Pekalongan",
                "city_id" => 226,
            ),
            array(
                "id" => 3216,
                "name" => "Purbolinggo",
                "city_id" => 226,
            ),
            array(
                "id" => 3217,
                "name" => "Raman Utara",
                "city_id" => 226,
            ),
            array(
                "id" => 3218,
                "name" => "Sekampung",
                "city_id" => 226,
            ),
            array(
                "id" => 3219,
                "name" => "Sekampung Udik",
                "city_id" => 226,
            ),
            array(
                "id" => 3220,
                "name" => "Sukadana",
                "city_id" => 226,
            ),
            array(
                "id" => 3221,
                "name" => "Waway Karya",
                "city_id" => 226,
            ),
            array(
                "id" => 3222,
                "name" => "Way Bungur (Purbolinggo Utara)",
                "city_id" => 226,
            ),
            array(
                "id" => 3223,
                "name" => "Way Jepara",
                "city_id" => 226,
            ),
            array(
                "id" => 3224,
                "name" => "Abung Barat",
                "city_id" => 227,
            ),
            array(
                "id" => 3225,
                "name" => "Abung Kunang",
                "city_id" => 227,
            ),
            array(
                "id" => 3226,
                "name" => "Abung Pekurun",
                "city_id" => 227,
            ),
            array(
                "id" => 3227,
                "name" => "Abung Selatan",
                "city_id" => 227,
            ),
            array(
                "id" => 3228,
                "name" => "Abung Semuli",
                "city_id" => 227,
            ),
            array(
                "id" => 3229,
                "name" => "Abung Surakarta",
                "city_id" => 227,
            ),
            array(
                "id" => 3230,
                "name" => "Abung Tengah",
                "city_id" => 227,
            ),
            array(
                "id" => 3231,
                "name" => "Abung Timur",
                "city_id" => 227,
            ),
            array(
                "id" => 3232,
                "name" => "Abung Tinggi",
                "city_id" => 227,
            ),
            array(
                "id" => 3233,
                "name" => "Blambangan Pagar",
                "city_id" => 227,
            ),
            array(
                "id" => 3234,
                "name" => "Bukit Kemuning",
                "city_id" => 227,
            ),
            array(
                "id" => 3235,
                "name" => "Bunga Mayang",
                "city_id" => 227,
            ),
            array(
                "id" => 3236,
                "name" => "Hulu Sungkai",
                "city_id" => 227,
            ),
            array(
                "id" => 3237,
                "name" => "Kotabumi",
                "city_id" => 227,
            ),
            array(
                "id" => 3238,
                "name" => "Kotabumi Selatan",
                "city_id" => 227,
            ),
            array(
                "id" => 3239,
                "name" => "Kotabumi Utara",
                "city_id" => 227,
            ),
            array(
                "id" => 3240,
                "name" => "Muara Sungkai",
                "city_id" => 227,
            ),
            array(
                "id" => 3241,
                "name" => "Sungkai Barat",
                "city_id" => 227,
            ),
            array(
                "id" => 3242,
                "name" => "Sungkai Jaya",
                "city_id" => 227,
            ),
            array(
                "id" => 3243,
                "name" => "Sungkai Selatan",
                "city_id" => 227,
            ),
            array(
                "id" => 3244,
                "name" => "Sungkai Tengah",
                "city_id" => 227,
            ),
            array(
                "id" => 3245,
                "name" => "Sungkai Utara",
                "city_id" => 227,
            ),
            array(
                "id" => 3246,
                "name" => "Tanjung Raja",
                "city_id" => 227,
            ),
            array(
                "id" => 3247,
                "name" => "Air Besar",
                "city_id" => 228,
            ),
            array(
                "id" => 3248,
                "name" => "Banyuke Hulu",
                "city_id" => 228,
            ),
            array(
                "id" => 3249,
                "name" => "Jelimpo",
                "city_id" => 228,
            ),
            array(
                "id" => 3250,
                "name" => "Kuala Behe",
                "city_id" => 228,
            ),
            array(
                "id" => 3251,
                "name" => "Mandor",
                "city_id" => 228,
            ),
            array(
                "id" => 3252,
                "name" => "Mempawah Hulu",
                "city_id" => 228,
            ),
            array(
                "id" => 3253,
                "name" => "Menjalin",
                "city_id" => 228,
            ),
            array(
                "id" => 3254,
                "name" => "Menyuke",
                "city_id" => 228,
            ),
            array(
                "id" => 3255,
                "name" => "Meranti",
                "city_id" => 228,
            ),
            array(
                "id" => 3256,
                "name" => "Ngabang",
                "city_id" => 228,
            ),
            array(
                "id" => 3257,
                "name" => "Sebangki",
                "city_id" => 228,
            ),
            array(
                "id" => 3258,
                "name" => "Sengah Temila",
                "city_id" => 228,
            ),
            array(
                "id" => 3259,
                "name" => "Sompak",
                "city_id" => 228,
            ),
            array(
                "id" => 3260,
                "name" => "Babalan",
                "city_id" => 229,
            ),
            array(
                "id" => 3261,
                "name" => "Bahorok",
                "city_id" => 229,
            ),
            array(
                "id" => 3262,
                "name" => "Batang Serangan",
                "city_id" => 229,
            ),
            array(
                "id" => 3263,
                "name" => "Besitang",
                "city_id" => 229,
            ),
            array(
                "id" => 3264,
                "name" => "Binjai",
                "city_id" => 229,
            ),
            array(
                "id" => 3265,
                "name" => "Brandan Barat",
                "city_id" => 229,
            ),
            array(
                "id" => 3266,
                "name" => "Gebang",
                "city_id" => 229,
            ),
            array(
                "id" => 3267,
                "name" => "Hinai",
                "city_id" => 229,
            ),
            array(
                "id" => 3268,
                "name" => "Kuala",
                "city_id" => 229,
            ),
            array(
                "id" => 3269,
                "name" => "Kutambaru",
                "city_id" => 229,
            ),
            array(
                "id" => 3270,
                "name" => "Padang Tualang",
                "city_id" => 229,
            ),
            array(
                "id" => 3271,
                "name" => "Pangkalan Susu",
                "city_id" => 229,
            ),
            array(
                "id" => 3272,
                "name" => "Pematang Jaya",
                "city_id" => 229,
            ),
            array(
                "id" => 3273,
                "name" => "Salapian",
                "city_id" => 229,
            ),
            array(
                "id" => 3274,
                "name" => "Sawit Seberang",
                "city_id" => 229,
            ),
            array(
                "id" => 3275,
                "name" => "Secanggang",
                "city_id" => 229,
            ),
            array(
                "id" => 3276,
                "name" => "Sei Binge (Bingai)",
                "city_id" => 229,
            ),
            array(
                "id" => 3277,
                "name" => "Sei Lepan",
                "city_id" => 229,
            ),
            array(
                "id" => 3278,
                "name" => "Selesai",
                "city_id" => 229,
            ),
            array(
                "id" => 3279,
                "name" => "Sirapit (Serapit)",
                "city_id" => 229,
            ),
            array(
                "id" => 3280,
                "name" => "Stabat",
                "city_id" => 229,
            ),
            array(
                "id" => 3281,
                "name" => "Tanjungpura",
                "city_id" => 229,
            ),
            array(
                "id" => 3282,
                "name" => "Wampu",
                "city_id" => 229,
            ),
            array(
                "id" => 3283,
                "name" => "Langsa Barat",
                "city_id" => 230,
            ),
            array(
                "id" => 3284,
                "name" => "Langsa Baro",
                "city_id" => 230,
            ),
            array(
                "id" => 3285,
                "name" => "Langsa Kota",
                "city_id" => 230,
            ),
            array(
                "id" => 3286,
                "name" => "Langsa Lama",
                "city_id" => 230,
            ),
            array(
                "id" => 3287,
                "name" => "Langsa Timur",
                "city_id" => 230,
            ),
            array(
                "id" => 3288,
                "name" => "Balingga",
                "city_id" => 231,
            ),
            array(
                "id" => 3289,
                "name" => "Dimba",
                "city_id" => 231,
            ),
            array(
                "id" => 3290,
                "name" => "Gamelia",
                "city_id" => 231,
            ),
            array(
                "id" => 3291,
                "name" => "Kuyawage",
                "city_id" => 231,
            ),
            array(
                "id" => 3292,
                "name" => "Makki (Maki)",
                "city_id" => 231,
            ),
            array(
                "id" => 3293,
                "name" => "Malagaineri (Malagineri)",
                "city_id" => 231,
            ),
            array(
                "id" => 3294,
                "name" => "Pirime",
                "city_id" => 231,
            ),
            array(
                "id" => 3295,
                "name" => "Poga",
                "city_id" => 231,
            ),
            array(
                "id" => 3296,
                "name" => "Tiom",
                "city_id" => 231,
            ),
            array(
                "id" => 3297,
                "name" => "Tiomneri",
                "city_id" => 231,
            ),
            array(
                "id" => 3298,
                "name" => "Banjarsari",
                "city_id" => 232,
            ),
            array(
                "id" => 3299,
                "name" => "Bayah",
                "city_id" => 232,
            ),
            array(
                "id" => 3300,
                "name" => "Bojongmanik",
                "city_id" => 232,
            ),
            array(
                "id" => 3301,
                "name" => "Cibadak",
                "city_id" => 232,
            ),
            array(
                "id" => 3302,
                "name" => "Cibeber",
                "city_id" => 232,
            ),
            array(
                "id" => 3303,
                "name" => "Cigemblong",
                "city_id" => 232,
            ),
            array(
                "id" => 3304,
                "name" => "Cihara",
                "city_id" => 232,
            ),
            array(
                "id" => 3305,
                "name" => "Cijaku",
                "city_id" => 232,
            ),
            array(
                "id" => 3306,
                "name" => "Cikulur",
                "city_id" => 232,
            ),
            array(
                "id" => 3307,
                "name" => "Cileles",
                "city_id" => 232,
            ),
            array(
                "id" => 3308,
                "name" => "Cilograng",
                "city_id" => 232,
            ),
            array(
                "id" => 3309,
                "name" => "Cimarga",
                "city_id" => 232,
            ),
            array(
                "id" => 3310,
                "name" => "Cipanas",
                "city_id" => 232,
            ),
            array(
                "id" => 3311,
                "name" => "Cirinten",
                "city_id" => 232,
            ),
            array(
                "id" => 3312,
                "name" => "Curugbitung",
                "city_id" => 232,
            ),
            array(
                "id" => 3313,
                "name" => "Gunung Kencana",
                "city_id" => 232,
            ),
            array(
                "id" => 3314,
                "name" => "Kalanganyar",
                "city_id" => 232,
            ),
            array(
                "id" => 3315,
                "name" => "Lebakgedong",
                "city_id" => 232,
            ),
            array(
                "id" => 3316,
                "name" => "Leuwidamar",
                "city_id" => 232,
            ),
            array(
                "id" => 3317,
                "name" => "Maja",
                "city_id" => 232,
            ),
            array(
                "id" => 3318,
                "name" => "Malingping",
                "city_id" => 232,
            ),
            array(
                "id" => 3319,
                "name" => "Muncang",
                "city_id" => 232,
            ),
            array(
                "id" => 3320,
                "name" => "Panggarangan",
                "city_id" => 232,
            ),
            array(
                "id" => 3321,
                "name" => "Rangkasbitung",
                "city_id" => 232,
            ),
            array(
                "id" => 3322,
                "name" => "Sajira",
                "city_id" => 232,
            ),
            array(
                "id" => 3323,
                "name" => "Sobang",
                "city_id" => 232,
            ),
            array(
                "id" => 3324,
                "name" => "Wanasalam",
                "city_id" => 232,
            ),
            array(
                "id" => 3325,
                "name" => "Warunggunung",
                "city_id" => 232,
            ),
            array(
                "id" => 3326,
                "name" => "Amen",
                "city_id" => 233,
            ),
            array(
                "id" => 3327,
                "name" => "Bingin Kuning",
                "city_id" => 233,
            ),
            array(
                "id" => 3328,
                "name" => "Lebong Atas",
                "city_id" => 233,
            ),
            array(
                "id" => 3329,
                "name" => "Lebong Sakti",
                "city_id" => 233,
            ),
            array(
                "id" => 3330,
                "name" => "Lebong Selatan",
                "city_id" => 233,
            ),
            array(
                "id" => 3331,
                "name" => "Lebong Tengah",
                "city_id" => 233,
            ),
            array(
                "id" => 3332,
                "name" => "Lebong Utara",
                "city_id" => 233,
            ),
            array(
                "id" => 3333,
                "name" => "Pelabai",
                "city_id" => 233,
            ),
            array(
                "id" => 3334,
                "name" => "Pinang Belapis",
                "city_id" => 233,
            ),
            array(
                "id" => 3335,
                "name" => "Rimbo Pengadang",
                "city_id" => 233,
            ),
            array(
                "id" => 3336,
                "name" => "Topos",
                "city_id" => 233,
            ),
            array(
                "id" => 3337,
                "name" => "Uram Jaya",
                "city_id" => 233,
            ),
            array(
                "id" => 3338,
                "name" => "Atadei",
                "city_id" => 234,
            ),
            array(
                "id" => 3339,
                "name" => "Buyasuri (Buyasari)",
                "city_id" => 234,
            ),
            array(
                "id" => 3340,
                "name" => "Ile Ape",
                "city_id" => 234,
            ),
            array(
                "id" => 3341,
                "name" => "Ile Ape Timur",
                "city_id" => 234,
            ),
            array(
                "id" => 3342,
                "name" => "Lebatukan",
                "city_id" => 234,
            ),
            array(
                "id" => 3343,
                "name" => "Nagawutung",
                "city_id" => 234,
            ),
            array(
                "id" => 3344,
                "name" => "Nubatukan",
                "city_id" => 234,
            ),
            array(
                "id" => 3345,
                "name" => "Omesuri",
                "city_id" => 234,
            ),
            array(
                "id" => 3346,
                "name" => "Wulandoni (Wulandioni)",
                "city_id" => 234,
            ),
            array(
                "id" => 3347,
                "name" => "Banda Sakti",
                "city_id" => 235,
            ),
            array(
                "id" => 3348,
                "name" => "Blang Mangat",
                "city_id" => 235,
            ),
            array(
                "id" => 3349,
                "name" => "Muara Dua",
                "city_id" => 235,
            ),
            array(
                "id" => 3350,
                "name" => "Muara Satu",
                "city_id" => 235,
            ),
            array(
                "id" => 3351,
                "name" => "Akabiluru",
                "city_id" => 236,
            ),
            array(
                "id" => 3352,
                "name" => "Bukik Barisan",
                "city_id" => 236,
            ),
            array(
                "id" => 3353,
                "name" => "Guguak (Gugu)",
                "city_id" => 236,
            ),
            array(
                "id" => 3354,
                "name" => "Gunuang Omeh (Gunung Mas)",
                "city_id" => 236,
            ),
            array(
                "id" => 3355,
                "name" => "Harau",
                "city_id" => 236,
            ),
            array(
                "id" => 3356,
                "name" => "Kapur IX/Sembilan",
                "city_id" => 236,
            ),
            array(
                "id" => 3357,
                "name" => "Lareh Sago Halaban",
                "city_id" => 236,
            ),
            array(
                "id" => 3358,
                "name" => "Luak (Luhak)",
                "city_id" => 236,
            ),
            array(
                "id" => 3359,
                "name" => "Mungka",
                "city_id" => 236,
            ),
            array(
                "id" => 3360,
                "name" => "Pangkalan Koto Baru",
                "city_id" => 236,
            ),
            array(
                "id" => 3361,
                "name" => "Payakumbuh",
                "city_id" => 236,
            ),
            array(
                "id" => 3362,
                "name" => "Situjuah Limo/Lima Nagari",
                "city_id" => 236,
            ),
            array(
                "id" => 3363,
                "name" => "Suliki",
                "city_id" => 236,
            ),
            array(
                "id" => 3364,
                "name" => "Lingga",
                "city_id" => 237,
            ),
            array(
                "id" => 3365,
                "name" => "Lingga Timur",
                "city_id" => 237,
            ),
            array(
                "id" => 3366,
                "name" => "Lingga Utara",
                "city_id" => 237,
            ),
            array(
                "id" => 3367,
                "name" => "Selayar",
                "city_id" => 237,
            ),
            array(
                "id" => 3368,
                "name" => "Senayang",
                "city_id" => 237,
            ),
            array(
                "id" => 3369,
                "name" => "Singkep",
                "city_id" => 237,
            ),
            array(
                "id" => 3370,
                "name" => "Singkep Barat",
                "city_id" => 237,
            ),
            array(
                "id" => 3371,
                "name" => "Singkep Pesisir",
                "city_id" => 237,
            ),
            array(
                "id" => 3372,
                "name" => "Batu Layar",
                "city_id" => 238,
            ),
            array(
                "id" => 3373,
                "name" => "Gerung",
                "city_id" => 238,
            ),
            array(
                "id" => 3374,
                "name" => "Gunungsari",
                "city_id" => 238,
            ),
            array(
                "id" => 3375,
                "name" => "Kediri",
                "city_id" => 238,
            ),
            array(
                "id" => 3376,
                "name" => "Kuripan",
                "city_id" => 238,
            ),
            array(
                "id" => 3377,
                "name" => "Labuapi",
                "city_id" => 238,
            ),
            array(
                "id" => 3378,
                "name" => "Lembar",
                "city_id" => 238,
            ),
            array(
                "id" => 3379,
                "name" => "Lingsar",
                "city_id" => 238,
            ),
            array(
                "id" => 3380,
                "name" => "Narmada",
                "city_id" => 238,
            ),
            array(
                "id" => 3381,
                "name" => "Sekotong",
                "city_id" => 238,
            ),
            array(
                "id" => 3382,
                "name" => "Batukliang",
                "city_id" => 239,
            ),
            array(
                "id" => 3383,
                "name" => "Batukliang Utara",
                "city_id" => 239,
            ),
            array(
                "id" => 3384,
                "name" => "Janapria",
                "city_id" => 239,
            ),
            array(
                "id" => 3385,
                "name" => "Jonggat",
                "city_id" => 239,
            ),
            array(
                "id" => 3386,
                "name" => "Kopang",
                "city_id" => 239,
            ),
            array(
                "id" => 3387,
                "name" => "Praya",
                "city_id" => 239,
            ),
            array(
                "id" => 3388,
                "name" => "Praya Barat",
                "city_id" => 239,
            ),
            array(
                "id" => 3389,
                "name" => "Praya Barat Daya",
                "city_id" => 239,
            ),
            array(
                "id" => 3390,
                "name" => "Praya Tengah",
                "city_id" => 239,
            ),
            array(
                "id" => 3391,
                "name" => "Praya Timur",
                "city_id" => 239,
            ),
            array(
                "id" => 3392,
                "name" => "Pringgarata",
                "city_id" => 239,
            ),
            array(
                "id" => 3393,
                "name" => "Pujut",
                "city_id" => 239,
            ),
            array(
                "id" => 3394,
                "name" => "Aikmel",
                "city_id" => 240,
            ),
            array(
                "id" => 3395,
                "name" => "Jerowaru",
                "city_id" => 240,
            ),
            array(
                "id" => 3396,
                "name" => "Keruak",
                "city_id" => 240,
            ),
            array(
                "id" => 3397,
                "name" => "Labuhan Haji",
                "city_id" => 240,
            ),
            array(
                "id" => 3398,
                "name" => "Masbagik",
                "city_id" => 240,
            ),
            array(
                "id" => 3399,
                "name" => "Montong Gading",
                "city_id" => 240,
            ),
            array(
                "id" => 3400,
                "name" => "Pringgabaya",
                "city_id" => 240,
            ),
            array(
                "id" => 3401,
                "name" => "Pringgasela",
                "city_id" => 240,
            ),
            array(
                "id" => 3402,
                "name" => "Sakra",
                "city_id" => 240,
            ),
            array(
                "id" => 3403,
                "name" => "Sakra Barat",
                "city_id" => 240,
            ),
            array(
                "id" => 3404,
                "name" => "Sakra Timur",
                "city_id" => 240,
            ),
            array(
                "id" => 3405,
                "name" => "Sambalia (Sambelia)",
                "city_id" => 240,
            ),
            array(
                "id" => 3406,
                "name" => "Selong",
                "city_id" => 240,
            ),
            array(
                "id" => 3407,
                "name" => "Sembalun",
                "city_id" => 240,
            ),
            array(
                "id" => 3408,
                "name" => "Sikur",
                "city_id" => 240,
            ),
            array(
                "id" => 3409,
                "name" => "Suela (Suwela)",
                "city_id" => 240,
            ),
            array(
                "id" => 3410,
                "name" => "Sukamulia",
                "city_id" => 240,
            ),
            array(
                "id" => 3411,
                "name" => "Suralaga",
                "city_id" => 240,
            ),
            array(
                "id" => 3412,
                "name" => "Terara",
                "city_id" => 240,
            ),
            array(
                "id" => 3413,
                "name" => "Wanasaba",
                "city_id" => 240,
            ),
            array(
                "id" => 3414,
                "name" => "Bayan",
                "city_id" => 241,
            ),
            array(
                "id" => 3415,
                "name" => "Gangga",
                "city_id" => 241,
            ),
            array(
                "id" => 3416,
                "name" => "Kayangan",
                "city_id" => 241,
            ),
            array(
                "id" => 3417,
                "name" => "Pemenang",
                "city_id" => 241,
            ),
            array(
                "id" => 3418,
                "name" => "Tanjung",
                "city_id" => 241,
            ),
            array(
                "id" => 3419,
                "name" => "Lubuk Linggau Barat Dua (II)",
                "city_id" => 242,
            ),
            array(
                "id" => 3420,
                "name" => "Lubuk Linggau Barat Satu (I)",
                "city_id" => 242,
            ),
            array(
                "id" => 3421,
                "name" => "Lubuk Linggau Selatan Dua (II)",
                "city_id" => 242,
            ),
            array(
                "id" => 3422,
                "name" => "Lubuk Linggau Selatan Satu (I)",
                "city_id" => 242,
            ),
            array(
                "id" => 3423,
                "name" => "Lubuk Linggau Timur Dua (II)",
                "city_id" => 242,
            ),
            array(
                "id" => 3424,
                "name" => "Lubuk Linggau Timur Satu (I)",
                "city_id" => 242,
            ),
            array(
                "id" => 3425,
                "name" => "Lubuk Linggau Utara Dua (II)",
                "city_id" => 242,
            ),
            array(
                "id" => 3426,
                "name" => "Lubuk Linggau Utara Satu (I)",
                "city_id" => 242,
            ),
            array(
                "id" => 3427,
                "name" => "Candipuro",
                "city_id" => 243,
            ),
            array(
                "id" => 3428,
                "name" => "Gucialit",
                "city_id" => 243,
            ),
            array(
                "id" => 3429,
                "name" => "Jatiroto",
                "city_id" => 243,
            ),
            array(
                "id" => 3430,
                "name" => "Kedungjajang",
                "city_id" => 243,
            ),
            array(
                "id" => 3431,
                "name" => "Klakah",
                "city_id" => 243,
            ),
            array(
                "id" => 3432,
                "name" => "Kunir",
                "city_id" => 243,
            ),
            array(
                "id" => 3433,
                "name" => "Lumajang",
                "city_id" => 243,
            ),
            array(
                "id" => 3434,
                "name" => "Padang",
                "city_id" => 243,
            ),
            array(
                "id" => 3435,
                "name" => "Pasirian",
                "city_id" => 243,
            ),
            array(
                "id" => 3436,
                "name" => "Pasrujambe/Pasujambe",
                "city_id" => 243,
            ),
            array(
                "id" => 3437,
                "name" => "Pronojiwo",
                "city_id" => 243,
            ),
            array(
                "id" => 3438,
                "name" => "Randuagung",
                "city_id" => 243,
            ),
            array(
                "id" => 3439,
                "name" => "Ranuyoso",
                "city_id" => 243,
            ),
            array(
                "id" => 3440,
                "name" => "Rowokangkung",
                "city_id" => 243,
            ),
            array(
                "id" => 3441,
                "name" => "Senduro",
                "city_id" => 243,
            ),
            array(
                "id" => 3442,
                "name" => "Sukodono",
                "city_id" => 243,
            ),
            array(
                "id" => 3443,
                "name" => "Sumbersuko",
                "city_id" => 243,
            ),
            array(
                "id" => 3444,
                "name" => "Tekung",
                "city_id" => 243,
            ),
            array(
                "id" => 3445,
                "name" => "Tempeh",
                "city_id" => 243,
            ),
            array(
                "id" => 3446,
                "name" => "Tempursari",
                "city_id" => 243,
            ),
            array(
                "id" => 3447,
                "name" => "Yosowilangun",
                "city_id" => 243,
            ),
            array(
                "id" => 3448,
                "name" => "Bajo",
                "city_id" => 244,
            ),
            array(
                "id" => 3449,
                "name" => "Bajo Barat",
                "city_id" => 244,
            ),
            array(
                "id" => 3450,
                "name" => "Basse Sangtempe Utara",
                "city_id" => 244,
            ),
            array(
                "id" => 3451,
                "name" => "Bassesang Tempe (Bastem)",
                "city_id" => 244,
            ),
            array(
                "id" => 3452,
                "name" => "Belopa",
                "city_id" => 244,
            ),
            array(
                "id" => 3453,
                "name" => "Belopa Utara",
                "city_id" => 244,
            ),
            array(
                "id" => 3454,
                "name" => "Bua",
                "city_id" => 244,
            ),
            array(
                "id" => 3455,
                "name" => "Bua Ponrang (Bupon)",
                "city_id" => 244,
            ),
            array(
                "id" => 3456,
                "name" => "Kamanre",
                "city_id" => 244,
            ),
            array(
                "id" => 3457,
                "name" => "Lamasi",
                "city_id" => 244,
            ),
            array(
                "id" => 3458,
                "name" => "Lamasi Timur",
                "city_id" => 244,
            ),
            array(
                "id" => 3459,
                "name" => "Larompong",
                "city_id" => 244,
            ),
            array(
                "id" => 3460,
                "name" => "Larompong Selatan",
                "city_id" => 244,
            ),
            array(
                "id" => 3461,
                "name" => "Latimojong",
                "city_id" => 244,
            ),
            array(
                "id" => 3462,
                "name" => "Ponrang",
                "city_id" => 244,
            ),
            array(
                "id" => 3463,
                "name" => "Ponrang Selatan",
                "city_id" => 244,
            ),
            array(
                "id" => 3464,
                "name" => "Suli",
                "city_id" => 244,
            ),
            array(
                "id" => 3465,
                "name" => "Suli Barat",
                "city_id" => 244,
            ),
            array(
                "id" => 3466,
                "name" => "Walenrang",
                "city_id" => 244,
            ),
            array(
                "id" => 3467,
                "name" => "Walenrang Barat",
                "city_id" => 244,
            ),
            array(
                "id" => 3468,
                "name" => "Walenrang Timur",
                "city_id" => 244,
            ),
            array(
                "id" => 3469,
                "name" => "Walenrang Utara",
                "city_id" => 244,
            ),
            array(
                "id" => 3470,
                "name" => "Angkona",
                "city_id" => 245,
            ),
            array(
                "id" => 3471,
                "name" => "Burau",
                "city_id" => 245,
            ),
            array(
                "id" => 3472,
                "name" => "Kalaena",
                "city_id" => 245,
            ),
            array(
                "id" => 3473,
                "name" => "Malili",
                "city_id" => 245,
            ),
            array(
                "id" => 3474,
                "name" => "Mangkutana",
                "city_id" => 245,
            ),
            array(
                "id" => 3475,
                "name" => "Nuha",
                "city_id" => 245,
            ),
            array(
                "id" => 3476,
                "name" => "Tomoni",
                "city_id" => 245,
            ),
            array(
                "id" => 3477,
                "name" => "Tomoni Timur",
                "city_id" => 245,
            ),
            array(
                "id" => 3478,
                "name" => "Towuti",
                "city_id" => 245,
            ),
            array(
                "id" => 3479,
                "name" => "Wasuponda",
                "city_id" => 245,
            ),
            array(
                "id" => 3480,
                "name" => "Wotu",
                "city_id" => 245,
            ),
            array(
                "id" => 3481,
                "name" => "Baebunta",
                "city_id" => 246,
            ),
            array(
                "id" => 3482,
                "name" => "Bone-Bone",
                "city_id" => 246,
            ),
            array(
                "id" => 3483,
                "name" => "Limbong",
                "city_id" => 246,
            ),
            array(
                "id" => 3484,
                "name" => "Malangke",
                "city_id" => 246,
            ),
            array(
                "id" => 3485,
                "name" => "Malangke Barat",
                "city_id" => 246,
            ),
            array(
                "id" => 3486,
                "name" => "Mappedeceng",
                "city_id" => 246,
            ),
            array(
                "id" => 3487,
                "name" => "Masamba",
                "city_id" => 246,
            ),
            array(
                "id" => 3488,
                "name" => "Rampi",
                "city_id" => 246,
            ),
            array(
                "id" => 3489,
                "name" => "Sabbang",
                "city_id" => 246,
            ),
            array(
                "id" => 3490,
                "name" => "Seko",
                "city_id" => 246,
            ),
            array(
                "id" => 3491,
                "name" => "Sukamaju",
                "city_id" => 246,
            ),
            array(
                "id" => 3492,
                "name" => "Tana Lili",
                "city_id" => 246,
            ),
            array(
                "id" => 3493,
                "name" => "Balerejo",
                "city_id" => 247,
            ),
            array(
                "id" => 3494,
                "name" => "Dagangan",
                "city_id" => 247,
            ),
            array(
                "id" => 3495,
                "name" => "Dolopo",
                "city_id" => 247,
            ),
            array(
                "id" => 3496,
                "name" => "Geger",
                "city_id" => 247,
            ),
            array(
                "id" => 3497,
                "name" => "Gemarang",
                "city_id" => 247,
            ),
            array(
                "id" => 3498,
                "name" => "Jiwan",
                "city_id" => 247,
            ),
            array(
                "id" => 3499,
                "name" => "Kare",
                "city_id" => 247,
            ),
            array(
                "id" => 3500,
                "name" => "Kebonsari",
                "city_id" => 247,
            ),
            array(
                "id" => 3501,
                "name" => "Madiun",
                "city_id" => 247,
            ),
            array(
                "id" => 3502,
                "name" => "Mejayan",
                "city_id" => 247,
            ),
            array(
                "id" => 3503,
                "name" => "Pilangkenceng",
                "city_id" => 247,
            ),
            array(
                "id" => 3504,
                "name" => "Saradan",
                "city_id" => 247,
            ),
            array(
                "id" => 3505,
                "name" => "Sawahan",
                "city_id" => 247,
            ),
            array(
                "id" => 3506,
                "name" => "Wonoasri",
                "city_id" => 247,
            ),
            array(
                "id" => 3507,
                "name" => "Wungu",
                "city_id" => 247,
            ),
            array(
                "id" => 3508,
                "name" => "Kartoharjo",
                "city_id" => 248,
            ),
            array(
                "id" => 3509,
                "name" => "Manguharjo",
                "city_id" => 248,
            ),
            array(
                "id" => 3510,
                "name" => "Taman",
                "city_id" => 248,
            ),
            array(
                "id" => 3511,
                "name" => "Bandongan",
                "city_id" => 249,
            ),
            array(
                "id" => 3512,
                "name" => "Borobudur",
                "city_id" => 249,
            ),
            array(
                "id" => 3513,
                "name" => "Candimulyo",
                "city_id" => 249,
            ),
            array(
                "id" => 3514,
                "name" => "Dukun",
                "city_id" => 249,
            ),
            array(
                "id" => 3515,
                "name" => "Grabag",
                "city_id" => 249,
            ),
            array(
                "id" => 3516,
                "name" => "Kajoran",
                "city_id" => 249,
            ),
            array(
                "id" => 3517,
                "name" => "Kaliangkrik",
                "city_id" => 249,
            ),
            array(
                "id" => 3518,
                "name" => "Mertoyudan",
                "city_id" => 249,
            ),
            array(
                "id" => 3519,
                "name" => "Mungkid",
                "city_id" => 249,
            ),
            array(
                "id" => 3520,
                "name" => "Muntilan",
                "city_id" => 249,
            ),
            array(
                "id" => 3521,
                "name" => "Ngablak",
                "city_id" => 249,
            ),
            array(
                "id" => 3522,
                "name" => "Ngluwar",
                "city_id" => 249,
            ),
            array(
                "id" => 3523,
                "name" => "Pakis",
                "city_id" => 249,
            ),
            array(
                "id" => 3524,
                "name" => "Salam",
                "city_id" => 249,
            ),
            array(
                "id" => 3525,
                "name" => "Salaman",
                "city_id" => 249,
            ),
            array(
                "id" => 3526,
                "name" => "Sawangan",
                "city_id" => 249,
            ),
            array(
                "id" => 3527,
                "name" => "Secang",
                "city_id" => 249,
            ),
            array(
                "id" => 3528,
                "name" => "Srumbung",
                "city_id" => 249,
            ),
            array(
                "id" => 3529,
                "name" => "Tegalrejo",
                "city_id" => 249,
            ),
            array(
                "id" => 3530,
                "name" => "Tempuran",
                "city_id" => 249,
            ),
            array(
                "id" => 3531,
                "name" => "Windusari",
                "city_id" => 249,
            ),
            array(
                "id" => 3532,
                "name" => "Magelang Selatan",
                "city_id" => 250,
            ),
            array(
                "id" => 3533,
                "name" => "Magelang Tengah",
                "city_id" => 250,
            ),
            array(
                "id" => 3534,
                "name" => "Magelang Utara",
                "city_id" => 250,
            ),
            array(
                "id" => 3535,
                "name" => "Barat",
                "city_id" => 251,
            ),
            array(
                "id" => 3536,
                "name" => "Bendo",
                "city_id" => 251,
            ),
            array(
                "id" => 3537,
                "name" => "Karangrejo",
                "city_id" => 251,
            ),
            array(
                "id" => 3538,
                "name" => "Karas",
                "city_id" => 251,
            ),
            array(
                "id" => 3539,
                "name" => "Kartoharjo (Kertoharjo)",
                "city_id" => 251,
            ),
            array(
                "id" => 3540,
                "name" => "Kawedanan",
                "city_id" => 251,
            ),
            array(
                "id" => 3541,
                "name" => "Lembeyan",
                "city_id" => 251,
            ),
            array(
                "id" => 3542,
                "name" => "Magetan",
                "city_id" => 251,
            ),
            array(
                "id" => 3543,
                "name" => "Maospati",
                "city_id" => 251,
            ),
            array(
                "id" => 3544,
                "name" => "Ngariboyo",
                "city_id" => 251,
            ),
            array(
                "id" => 3545,
                "name" => "Nguntoronadi",
                "city_id" => 251,
            ),
            array(
                "id" => 3546,
                "name" => "Panekan",
                "city_id" => 251,
            ),
            array(
                "id" => 3547,
                "name" => "Parang",
                "city_id" => 251,
            ),
            array(
                "id" => 3548,
                "name" => "Plaosan",
                "city_id" => 251,
            ),
            array(
                "id" => 3549,
                "name" => "Poncol",
                "city_id" => 251,
            ),
            array(
                "id" => 3550,
                "name" => "Sidorejo",
                "city_id" => 251,
            ),
            array(
                "id" => 3551,
                "name" => "Sukomoro",
                "city_id" => 251,
            ),
            array(
                "id" => 3552,
                "name" => "Takeran",
                "city_id" => 251,
            ),
            array(
                "id" => 3553,
                "name" => "Argapura",
                "city_id" => 252,
            ),
            array(
                "id" => 3554,
                "name" => "Banjaran",
                "city_id" => 252,
            ),
            array(
                "id" => 3555,
                "name" => "Bantarujeg",
                "city_id" => 252,
            ),
            array(
                "id" => 3556,
                "name" => "Cigasong",
                "city_id" => 252,
            ),
            array(
                "id" => 3557,
                "name" => "Cikijing",
                "city_id" => 252,
            ),
            array(
                "id" => 3558,
                "name" => "Cingambul",
                "city_id" => 252,
            ),
            array(
                "id" => 3559,
                "name" => "Dawuan",
                "city_id" => 252,
            ),
            array(
                "id" => 3560,
                "name" => "Jatitujuh",
                "city_id" => 252,
            ),
            array(
                "id" => 3561,
                "name" => "Jatiwangi",
                "city_id" => 252,
            ),
            array(
                "id" => 3562,
                "name" => "Kadipaten",
                "city_id" => 252,
            ),
            array(
                "id" => 3563,
                "name" => "Kasokandel",
                "city_id" => 252,
            ),
            array(
                "id" => 3564,
                "name" => "Kertajati",
                "city_id" => 252,
            ),
            array(
                "id" => 3565,
                "name" => "Lemahsugih",
                "city_id" => 252,
            ),
            array(
                "id" => 3566,
                "name" => "Leuwimunding",
                "city_id" => 252,
            ),
            array(
                "id" => 3567,
                "name" => "Ligung",
                "city_id" => 252,
            ),
            array(
                "id" => 3568,
                "name" => "Maja",
                "city_id" => 252,
            ),
            array(
                "id" => 3569,
                "name" => "Majalengka",
                "city_id" => 252,
            ),
            array(
                "id" => 3570,
                "name" => "Malausma",
                "city_id" => 252,
            ),
            array(
                "id" => 3571,
                "name" => "Palasah",
                "city_id" => 252,
            ),
            array(
                "id" => 3572,
                "name" => "Panyingkiran",
                "city_id" => 252,
            ),
            array(
                "id" => 3573,
                "name" => "Rajagaluh",
                "city_id" => 252,
            ),
            array(
                "id" => 3574,
                "name" => "Sindang",
                "city_id" => 252,
            ),
            array(
                "id" => 3575,
                "name" => "Sindangwangi",
                "city_id" => 252,
            ),
            array(
                "id" => 3576,
                "name" => "Sukahaji",
                "city_id" => 252,
            ),
            array(
                "id" => 3577,
                "name" => "Sumberjaya",
                "city_id" => 252,
            ),
            array(
                "id" => 3578,
                "name" => "Talaga",
                "city_id" => 252,
            ),
            array(
                "id" => 3579,
                "name" => "Banggae",
                "city_id" => 253,
            ),
            array(
                "id" => 3580,
                "name" => "Banggae Timur",
                "city_id" => 253,
            ),
            array(
                "id" => 3581,
                "name" => "Malunda",
                "city_id" => 253,
            ),
            array(
                "id" => 3582,
                "name" => "Pamboang",
                "city_id" => 253,
            ),
            array(
                "id" => 3583,
                "name" => "Sendana",
                "city_id" => 253,
            ),
            array(
                "id" => 3584,
                "name" => "Tammeredo Sendana",
                "city_id" => 253,
            ),
            array(
                "id" => 3585,
                "name" => "Tubo (Tubo Sendana)",
                "city_id" => 253,
            ),
            array(
                "id" => 3586,
                "name" => "Ulumunda",
                "city_id" => 253,
            ),
            array(
                "id" => 3587,
                "name" => "Biring Kanaya",
                "city_id" => 254,
            ),
            array(
                "id" => 3588,
                "name" => "Bontoala",
                "city_id" => 254,
            ),
            array(
                "id" => 3589,
                "name" => "Makassar",
                "city_id" => 254,
            ),
            array(
                "id" => 3590,
                "name" => "Mamajang",
                "city_id" => 254,
            ),
            array(
                "id" => 3591,
                "name" => "Manggala",
                "city_id" => 254,
            ),
            array(
                "id" => 3592,
                "name" => "Mariso",
                "city_id" => 254,
            ),
            array(
                "id" => 3593,
                "name" => "Panakkukang",
                "city_id" => 254,
            ),
            array(
                "id" => 3594,
                "name" => "Rappocini",
                "city_id" => 254,
            ),
            array(
                "id" => 3595,
                "name" => "Tallo",
                "city_id" => 254,
            ),
            array(
                "id" => 3596,
                "name" => "Tamalanrea",
                "city_id" => 254,
            ),
            array(
                "id" => 3597,
                "name" => "Tamalate",
                "city_id" => 254,
            ),
            array(
                "id" => 3598,
                "name" => "Ujung Pandang",
                "city_id" => 254,
            ),
            array(
                "id" => 3599,
                "name" => "Ujung Tanah",
                "city_id" => 254,
            ),
            array(
                "id" => 3600,
                "name" => "Wajo",
                "city_id" => 254,
            ),
            array(
                "id" => 3601,
                "name" => "Ampelgading",
                "city_id" => 255,
            ),
            array(
                "id" => 3602,
                "name" => "Bantur",
                "city_id" => 255,
            ),
            array(
                "id" => 3603,
                "name" => "Bululawang",
                "city_id" => 255,
            ),
            array(
                "id" => 3604,
                "name" => "Dampit",
                "city_id" => 255,
            ),
            array(
                "id" => 3605,
                "name" => "Dau",
                "city_id" => 255,
            ),
            array(
                "id" => 3606,
                "name" => "Donomulyo",
                "city_id" => 255,
            ),
            array(
                "id" => 3607,
                "name" => "Gedangan",
                "city_id" => 255,
            ),
            array(
                "id" => 3608,
                "name" => "Gondanglegi",
                "city_id" => 255,
            ),
            array(
                "id" => 3609,
                "name" => "Jabung",
                "city_id" => 255,
            ),
            array(
                "id" => 3610,
                "name" => "Kalipare",
                "city_id" => 255,
            ),
            array(
                "id" => 3611,
                "name" => "Karangploso",
                "city_id" => 255,
            ),
            array(
                "id" => 3612,
                "name" => "Kasembon",
                "city_id" => 255,
            ),
            array(
                "id" => 3613,
                "name" => "Kepanjen",
                "city_id" => 255,
            ),
            array(
                "id" => 3614,
                "name" => "Kromengan",
                "city_id" => 255,
            ),
            array(
                "id" => 3615,
                "name" => "Lawang",
                "city_id" => 255,
            ),
            array(
                "id" => 3616,
                "name" => "Ngajung (Ngajum)",
                "city_id" => 255,
            ),
            array(
                "id" => 3617,
                "name" => "Ngantang",
                "city_id" => 255,
            ),
            array(
                "id" => 3618,
                "name" => "Pagak",
                "city_id" => 255,
            ),
            array(
                "id" => 3619,
                "name" => "Pagelaran",
                "city_id" => 255,
            ),
            array(
                "id" => 3620,
                "name" => "Pakis",
                "city_id" => 255,
            ),
            array(
                "id" => 3621,
                "name" => "Pakisaji",
                "city_id" => 255,
            ),
            array(
                "id" => 3622,
                "name" => "Poncokusumo",
                "city_id" => 255,
            ),
            array(
                "id" => 3623,
                "name" => "Pujon",
                "city_id" => 255,
            ),
            array(
                "id" => 3624,
                "name" => "Singosari",
                "city_id" => 255,
            ),
            array(
                "id" => 3625,
                "name" => "Sumbermanjing Wetan",
                "city_id" => 255,
            ),
            array(
                "id" => 3626,
                "name" => "Sumberpucung",
                "city_id" => 255,
            ),
            array(
                "id" => 3627,
                "name" => "Tajinan",
                "city_id" => 255,
            ),
            array(
                "id" => 3628,
                "name" => "Tirtoyudo",
                "city_id" => 255,
            ),
            array(
                "id" => 3629,
                "name" => "Tumpang",
                "city_id" => 255,
            ),
            array(
                "id" => 3630,
                "name" => "Turen",
                "city_id" => 255,
            ),
            array(
                "id" => 3631,
                "name" => "Wagir",
                "city_id" => 255,
            ),
            array(
                "id" => 3632,
                "name" => "Wajak",
                "city_id" => 255,
            ),
            array(
                "id" => 3633,
                "name" => "Wonosari",
                "city_id" => 255,
            ),
            array(
                "id" => 3634,
                "name" => "Blimbing",
                "city_id" => 256,
            ),
            array(
                "id" => 3635,
                "name" => "Kedungkandang",
                "city_id" => 256,
            ),
            array(
                "id" => 3636,
                "name" => "Klojen",
                "city_id" => 256,
            ),
            array(
                "id" => 3637,
                "name" => "Lowokwaru",
                "city_id" => 256,
            ),
            array(
                "id" => 3638,
                "name" => "Sukun",
                "city_id" => 256,
            ),
            array(
                "id" => 3639,
                "name" => "Bahau Hulu",
                "city_id" => 257,
            ),
            array(
                "id" => 3640,
                "name" => "Kayan Hilir",
                "city_id" => 257,
            ),
            array(
                "id" => 3641,
                "name" => "Kayan Hulu",
                "city_id" => 257,
            ),
            array(
                "id" => 3642,
                "name" => "Kayan Selatan",
                "city_id" => 257,
            ),
            array(
                "id" => 3643,
                "name" => "Malinau Barat",
                "city_id" => 257,
            ),
            array(
                "id" => 3644,
                "name" => "Malinau Kota",
                "city_id" => 257,
            ),
            array(
                "id" => 3645,
                "name" => "Malinau Selatan",
                "city_id" => 257,
            ),
            array(
                "id" => 3646,
                "name" => "Malinau Selatan Hilir",
                "city_id" => 257,
            ),
            array(
                "id" => 3647,
                "name" => "Malinau Selatan Hulu",
                "city_id" => 257,
            ),
            array(
                "id" => 3648,
                "name" => "Malinau Utara",
                "city_id" => 257,
            ),
            array(
                "id" => 3649,
                "name" => "Mentarang",
                "city_id" => 257,
            ),
            array(
                "id" => 3650,
                "name" => "Mentarang Hulu",
                "city_id" => 257,
            ),
            array(
                "id" => 3651,
                "name" => "Pujungan",
                "city_id" => 257,
            ),
            array(
                "id" => 3652,
                "name" => "Sungai Boh",
                "city_id" => 257,
            ),
            array(
                "id" => 3653,
                "name" => "Sungai Tubu",
                "city_id" => 257,
            ),
            array(
                "id" => 3654,
                "name" => "Damer",
                "city_id" => 258,
            ),
            array(
                "id" => 3655,
                "name" => "Dawelor Dawera",
                "city_id" => 258,
            ),
            array(
                "id" => 3656,
                "name" => "Kepulauan Romang",
                "city_id" => 258,
            ),
            array(
                "id" => 3657,
                "name" => "Kisar Utara",
                "city_id" => 258,
            ),
            array(
                "id" => 3658,
                "name" => "Mdona Hyera/Hiera",
                "city_id" => 258,
            ),
            array(
                "id" => 3659,
                "name" => "Moa Lakor",
                "city_id" => 258,
            ),
            array(
                "id" => 3660,
                "name" => "Pulau Lakor",
                "city_id" => 258,
            ),
            array(
                "id" => 3661,
                "name" => "Pulau Letti (Leti Moa Lakor)",
                "city_id" => 258,
            ),
            array(
                "id" => 3662,
                "name" => "Pulau Masela",
                "city_id" => 258,
            ),
            array(
                "id" => 3663,
                "name" => "Pulau Pulau Babar",
                "city_id" => 258,
            ),
            array(
                "id" => 3664,
                "name" => "Pulau Pulau Terselatan",
                "city_id" => 258,
            ),
            array(
                "id" => 3665,
                "name" => "Pulau Wetang",
                "city_id" => 258,
            ),
            array(
                "id" => 3666,
                "name" => "Pulau-Pulau Babar Timur",
                "city_id" => 258,
            ),
            array(
                "id" => 3667,
                "name" => "Wetar",
                "city_id" => 258,
            ),
            array(
                "id" => 3668,
                "name" => "Wetar Barat",
                "city_id" => 258,
            ),
            array(
                "id" => 3669,
                "name" => "Wetar Timur",
                "city_id" => 258,
            ),
            array(
                "id" => 3670,
                "name" => "Wetar Utara",
                "city_id" => 258,
            ),
            array(
                "id" => 3671,
                "name" => "Amahai",
                "city_id" => 259,
            ),
            array(
                "id" => 3672,
                "name" => "Banda",
                "city_id" => 259,
            ),
            array(
                "id" => 3673,
                "name" => "Leihitu",
                "city_id" => 259,
            ),
            array(
                "id" => 3674,
                "name" => "Leihitu Barat",
                "city_id" => 259,
            ),
            array(
                "id" => 3675,
                "name" => "Masohi Kota",
                "city_id" => 259,
            ),
            array(
                "id" => 3676,
                "name" => "Nusalaut",
                "city_id" => 259,
            ),
            array(
                "id" => 3677,
                "name" => "Pulau Haruku",
                "city_id" => 259,
            ),
            array(
                "id" => 3678,
                "name" => "Salahutu",
                "city_id" => 259,
            ),
            array(
                "id" => 3679,
                "name" => "Saparua",
                "city_id" => 259,
            ),
            array(
                "id" => 3680,
                "name" => "Saparua Timur",
                "city_id" => 259,
            ),
            array(
                "id" => 3681,
                "name" => "Seram Utara",
                "city_id" => 259,
            ),
            array(
                "id" => 3682,
                "name" => "Seram Utara Barat",
                "city_id" => 259,
            ),
            array(
                "id" => 3683,
                "name" => "Seram Utara Timur Kobi",
                "city_id" => 259,
            ),
            array(
                "id" => 3684,
                "name" => "Seram Utara Timur Seti",
                "city_id" => 259,
            ),
            array(
                "id" => 3685,
                "name" => "Tehoru",
                "city_id" => 259,
            ),
            array(
                "id" => 3686,
                "name" => "Teluk Elpaputih",
                "city_id" => 259,
            ),
            array(
                "id" => 3687,
                "name" => "Telutih",
                "city_id" => 259,
            ),
            array(
                "id" => 3688,
                "name" => "Teon Nila Serua",
                "city_id" => 259,
            ),
            array(
                "id" => 3689,
                "name" => "Hoat Sorbay",
                "city_id" => 260,
            ),
            array(
                "id" => 3690,
                "name" => "Kei Besar",
                "city_id" => 260,
            ),
            array(
                "id" => 3691,
                "name" => "Kei Besar Selatan",
                "city_id" => 260,
            ),
            array(
                "id" => 3692,
                "name" => "Kei Besar Selatan Barat",
                "city_id" => 260,
            ),
            array(
                "id" => 3693,
                "name" => "Kei Besar Utara Barat",
                "city_id" => 260,
            ),
            array(
                "id" => 3694,
                "name" => "Kei Besar Utara Timur",
                "city_id" => 260,
            ),
            array(
                "id" => 3695,
                "name" => "Kei Kecil",
                "city_id" => 260,
            ),
            array(
                "id" => 3696,
                "name" => "Kei Kecil Barat",
                "city_id" => 260,
            ),
            array(
                "id" => 3697,
                "name" => "Kei Kecil Timur",
                "city_id" => 260,
            ),
            array(
                "id" => 3698,
                "name" => "Kei Kecil Timur Selatan",
                "city_id" => 260,
            ),
            array(
                "id" => 3699,
                "name" => "Manyeuw",
                "city_id" => 260,
            ),
            array(
                "id" => 3700,
                "name" => "Kormomolin",
                "city_id" => 261,
            ),
            array(
                "id" => 3701,
                "name" => "Molu Maru",
                "city_id" => 261,
            ),
            array(
                "id" => 3702,
                "name" => "Nirunmas",
                "city_id" => 261,
            ),
            array(
                "id" => 3703,
                "name" => "Selaru",
                "city_id" => 261,
            ),
            array(
                "id" => 3704,
                "name" => "Tanimbar Selatan",
                "city_id" => 261,
            ),
            array(
                "id" => 3705,
                "name" => "Tanimbar Utara",
                "city_id" => 261,
            ),
            array(
                "id" => 3706,
                "name" => "Wermakatian (Wer Maktian)",
                "city_id" => 261,
            ),
            array(
                "id" => 3707,
                "name" => "Wertamrian",
                "city_id" => 261,
            ),
            array(
                "id" => 3708,
                "name" => "Wuarlabobar",
                "city_id" => 261,
            ),
            array(
                "id" => 3709,
                "name" => "Yaru",
                "city_id" => 261,
            ),
            array(
                "id" => 3710,
                "name" => "Aralle (Arrale)",
                "city_id" => 262,
            ),
            array(
                "id" => 3711,
                "name" => "Balla",
                "city_id" => 262,
            ),
            array(
                "id" => 3712,
                "name" => "Bambang",
                "city_id" => 262,
            ),
            array(
                "id" => 3713,
                "name" => "Buntumalangka",
                "city_id" => 262,
            ),
            array(
                "id" => 3714,
                "name" => "Mamasa",
                "city_id" => 262,
            ),
            array(
                "id" => 3715,
                "name" => "Mambi",
                "city_id" => 262,
            ),
            array(
                "id" => 3716,
                "name" => "Mehalaan",
                "city_id" => 262,
            ),
            array(
                "id" => 3717,
                "name" => "Messawa",
                "city_id" => 262,
            ),
            array(
                "id" => 3718,
                "name" => "Nosu",
                "city_id" => 262,
            ),
            array(
                "id" => 3719,
                "name" => "Pana",
                "city_id" => 262,
            ),
            array(
                "id" => 3720,
                "name" => "Rantebulahan Timur",
                "city_id" => 262,
            ),
            array(
                "id" => 3721,
                "name" => "Sesena Padang",
                "city_id" => 262,
            ),
            array(
                "id" => 3722,
                "name" => "Sumarorong",
                "city_id" => 262,
            ),
            array(
                "id" => 3723,
                "name" => "Tabang",
                "city_id" => 262,
            ),
            array(
                "id" => 3724,
                "name" => "Tabulahan",
                "city_id" => 262,
            ),
            array(
                "id" => 3725,
                "name" => "Tanduk Kalua",
                "city_id" => 262,
            ),
            array(
                "id" => 3726,
                "name" => "Tawalian",
                "city_id" => 262,
            ),
            array(
                "id" => 3727,
                "name" => "Benuki",
                "city_id" => 263,
            ),
            array(
                "id" => 3728,
                "name" => "Mamberamo Hilir/Ilir",
                "city_id" => 263,
            ),
            array(
                "id" => 3729,
                "name" => "Mamberamo Hulu/Ulu",
                "city_id" => 263,
            ),
            array(
                "id" => 3730,
                "name" => "Mamberamo Tengah",
                "city_id" => 263,
            ),
            array(
                "id" => 3731,
                "name" => "Mamberamo Tengah Timur",
                "city_id" => 263,
            ),
            array(
                "id" => 3732,
                "name" => "Rofaer (Rufaer)",
                "city_id" => 263,
            ),
            array(
                "id" => 3733,
                "name" => "Sawai",
                "city_id" => 263,
            ),
            array(
                "id" => 3734,
                "name" => "Waropen Atas",
                "city_id" => 263,
            ),
            array(
                "id" => 3735,
                "name" => "Eragayam",
                "city_id" => 264,
            ),
            array(
                "id" => 3736,
                "name" => "Ilugwa",
                "city_id" => 264,
            ),
            array(
                "id" => 3737,
                "name" => "Kelila",
                "city_id" => 264,
            ),
            array(
                "id" => 3738,
                "name" => "Kobakma",
                "city_id" => 264,
            ),
            array(
                "id" => 3739,
                "name" => "Megabilis (Megambilis)",
                "city_id" => 264,
            ),
            array(
                "id" => 3740,
                "name" => "Bonehau",
                "city_id" => 265,
            ),
            array(
                "id" => 3741,
                "name" => "Budong-Budong",
                "city_id" => 265,
            ),
            array(
                "id" => 3742,
                "name" => "Kalukku",
                "city_id" => 265,
            ),
            array(
                "id" => 3743,
                "name" => "Kalumpang",
                "city_id" => 265,
            ),
            array(
                "id" => 3744,
                "name" => "Karossa",
                "city_id" => 265,
            ),
            array(
                "id" => 3745,
                "name" => "Kep. Bala Balakang",
                "city_id" => 265,
            ),
            array(
                "id" => 3746,
                "name" => "Mamuju",
                "city_id" => 265,
            ),
            array(
                "id" => 3747,
                "name" => "Pangale",
                "city_id" => 265,
            ),
            array(
                "id" => 3748,
                "name" => "Papalang",
                "city_id" => 265,
            ),
            array(
                "id" => 3749,
                "name" => "Sampaga",
                "city_id" => 265,
            ),
            array(
                "id" => 3750,
                "name" => "Simboro dan Kepulauan",
                "city_id" => 265,
            ),
            array(
                "id" => 3751,
                "name" => "Tapalang",
                "city_id" => 265,
            ),
            array(
                "id" => 3752,
                "name" => "Tapalang Barat",
                "city_id" => 265,
            ),
            array(
                "id" => 3753,
                "name" => "Tobadak",
                "city_id" => 265,
            ),
            array(
                "id" => 3754,
                "name" => "Tommo",
                "city_id" => 265,
            ),
            array(
                "id" => 3755,
                "name" => "Topoyo",
                "city_id" => 265,
            ),
            array(
                "id" => 3756,
                "name" => "Bambaira",
                "city_id" => 266,
            ),
            array(
                "id" => 3757,
                "name" => "Bambalamotu",
                "city_id" => 266,
            ),
            array(
                "id" => 3758,
                "name" => "Baras",
                "city_id" => 266,
            ),
            array(
                "id" => 3759,
                "name" => "Bulu Taba",
                "city_id" => 266,
            ),
            array(
                "id" => 3760,
                "name" => "Dapurang",
                "city_id" => 266,
            ),
            array(
                "id" => 3761,
                "name" => "Duripoku",
                "city_id" => 266,
            ),
            array(
                "id" => 3762,
                "name" => "Lariang",
                "city_id" => 266,
            ),
            array(
                "id" => 3763,
                "name" => "Pasangkayu",
                "city_id" => 266,
            ),
            array(
                "id" => 3764,
                "name" => "Pedongga",
                "city_id" => 266,
            ),
            array(
                "id" => 3765,
                "name" => "Sarjo",
                "city_id" => 266,
            ),
            array(
                "id" => 3766,
                "name" => "Sarudu",
                "city_id" => 266,
            ),
            array(
                "id" => 3767,
                "name" => "Tikke Raya",
                "city_id" => 266,
            ),
            array(
                "id" => 3768,
                "name" => "Bunaken",
                "city_id" => 267,
            ),
            array(
                "id" => 3769,
                "name" => "Bunaken Kepulauan",
                "city_id" => 267,
            ),
            array(
                "id" => 3770,
                "name" => "Malalayang",
                "city_id" => 267,
            ),
            array(
                "id" => 3771,
                "name" => "Mapanget",
                "city_id" => 267,
            ),
            array(
                "id" => 3772,
                "name" => "Paal Dua",
                "city_id" => 267,
            ),
            array(
                "id" => 3773,
                "name" => "Sario",
                "city_id" => 267,
            ),
            array(
                "id" => 3774,
                "name" => "Singkil",
                "city_id" => 267,
            ),
            array(
                "id" => 3775,
                "name" => "Tikala",
                "city_id" => 267,
            ),
            array(
                "id" => 3776,
                "name" => "Tuminiting",
                "city_id" => 267,
            ),
            array(
                "id" => 3777,
                "name" => "Wanea",
                "city_id" => 267,
            ),
            array(
                "id" => 3778,
                "name" => "Wenang",
                "city_id" => 267,
            ),
            array(
                "id" => 3779,
                "name" => "Batahan",
                "city_id" => 268,
            ),
            array(
                "id" => 3780,
                "name" => "Batang Natal",
                "city_id" => 268,
            ),
            array(
                "id" => 3781,
                "name" => "Bukit Malintang",
                "city_id" => 268,
            ),
            array(
                "id" => 3782,
                "name" => "Huta Bargot",
                "city_id" => 268,
            ),
            array(
                "id" => 3783,
                "name" => "Kotanopan",
                "city_id" => 268,
            ),
            array(
                "id" => 3784,
                "name" => "Langga Bayu (Lingga Bayu)",
                "city_id" => 268,
            ),
            array(
                "id" => 3785,
                "name" => "Lembah Sorik Merapi",
                "city_id" => 268,
            ),
            array(
                "id" => 3786,
                "name" => "Muara Batang Gadis",
                "city_id" => 268,
            ),
            array(
                "id" => 3787,
                "name" => "Muara Sipongi",
                "city_id" => 268,
            ),
            array(
                "id" => 3788,
                "name" => "Naga Juang",
                "city_id" => 268,
            ),
            array(
                "id" => 3789,
                "name" => "Natal",
                "city_id" => 268,
            ),
            array(
                "id" => 3790,
                "name" => "Pakantan",
                "city_id" => 268,
            ),
            array(
                "id" => 3791,
                "name" => "Panyabungan Barat",
                "city_id" => 268,
            ),
            array(
                "id" => 3792,
                "name" => "Panyabungan Kota",
                "city_id" => 268,
            ),
            array(
                "id" => 3793,
                "name" => "Panyabungan Selatan",
                "city_id" => 268,
            ),
            array(
                "id" => 3794,
                "name" => "Panyabungan Timur",
                "city_id" => 268,
            ),
            array(
                "id" => 3795,
                "name" => "Panyabungan Utara",
                "city_id" => 268,
            ),
            array(
                "id" => 3796,
                "name" => "Puncak Sorik Marapi/Merapi",
                "city_id" => 268,
            ),
            array(
                "id" => 3797,
                "name" => "Ranto Baek/Baik",
                "city_id" => 268,
            ),
            array(
                "id" => 3798,
                "name" => "Siabu",
                "city_id" => 268,
            ),
            array(
                "id" => 3799,
                "name" => "Sinunukan",
                "city_id" => 268,
            ),
            array(
                "id" => 3800,
                "name" => "Tambangan",
                "city_id" => 268,
            ),
            array(
                "id" => 3801,
                "name" => "Ulu Pungkut",
                "city_id" => 268,
            ),
            array(
                "id" => 3802,
                "name" => "Cibal",
                "city_id" => 269,
            ),
            array(
                "id" => 3803,
                "name" => "Cibal Barat",
                "city_id" => 269,
            ),
            array(
                "id" => 3804,
                "name" => "Langke Rembong",
                "city_id" => 269,
            ),
            array(
                "id" => 3805,
                "name" => "Lelak",
                "city_id" => 269,
            ),
            array(
                "id" => 3806,
                "name" => "Rahong Utara",
                "city_id" => 269,
            ),
            array(
                "id" => 3807,
                "name" => "Reok",
                "city_id" => 269,
            ),
            array(
                "id" => 3808,
                "name" => "Reok Barat",
                "city_id" => 269,
            ),
            array(
                "id" => 3809,
                "name" => "Ruteng",
                "city_id" => 269,
            ),
            array(
                "id" => 3810,
                "name" => "Satar Mese",
                "city_id" => 269,
            ),
            array(
                "id" => 3811,
                "name" => "Satar Mese Barat",
                "city_id" => 269,
            ),
            array(
                "id" => 3812,
                "name" => "Wae Rii",
                "city_id" => 269,
            ),
            array(
                "id" => 3813,
                "name" => "Boleng",
                "city_id" => 270,
            ),
            array(
                "id" => 3814,
                "name" => "Komodo",
                "city_id" => 270,
            ),
            array(
                "id" => 3815,
                "name" => "Kuwus",
                "city_id" => 270,
            ),
            array(
                "id" => 3816,
                "name" => "Lembor",
                "city_id" => 270,
            ),
            array(
                "id" => 3817,
                "name" => "Lembor Selatan",
                "city_id" => 270,
            ),
            array(
                "id" => 3818,
                "name" => "Macang Pacar",
                "city_id" => 270,
            ),
            array(
                "id" => 3819,
                "name" => "Mbeliling",
                "city_id" => 270,
            ),
            array(
                "id" => 3820,
                "name" => "Ndoso",
                "city_id" => 270,
            ),
            array(
                "id" => 3821,
                "name" => "Sano Nggoang",
                "city_id" => 270,
            ),
            array(
                "id" => 3822,
                "name" => "Welak",
                "city_id" => 270,
            ),
            array(
                "id" => 3823,
                "name" => "Borong",
                "city_id" => 271,
            ),
            array(
                "id" => 3824,
                "name" => "Elar",
                "city_id" => 271,
            ),
            array(
                "id" => 3825,
                "name" => "Elar Selatan",
                "city_id" => 271,
            ),
            array(
                "id" => 3826,
                "name" => "Kota Komba",
                "city_id" => 271,
            ),
            array(
                "id" => 3827,
                "name" => "Lamba Leda",
                "city_id" => 271,
            ),
            array(
                "id" => 3828,
                "name" => "Poco Ranaka",
                "city_id" => 271,
            ),
            array(
                "id" => 3829,
                "name" => "Poco Ranaka Timur",
                "city_id" => 271,
            ),
            array(
                "id" => 3830,
                "name" => "Rana Mese",
                "city_id" => 271,
            ),
            array(
                "id" => 3831,
                "name" => "Sambi Rampas",
                "city_id" => 271,
            ),
            array(
                "id" => 3832,
                "name" => "Manokwari Barat",
                "city_id" => 272,
            ),
            array(
                "id" => 3833,
                "name" => "Manokwari Selatan",
                "city_id" => 272,
            ),
            array(
                "id" => 3834,
                "name" => "Manokwari Timur",
                "city_id" => 272,
            ),
            array(
                "id" => 3835,
                "name" => "Manokwari Utara",
                "city_id" => 272,
            ),
            array(
                "id" => 3836,
                "name" => "Masni",
                "city_id" => 272,
            ),
            array(
                "id" => 3837,
                "name" => "Prafi",
                "city_id" => 272,
            ),
            array(
                "id" => 3838,
                "name" => "Sidey",
                "city_id" => 272,
            ),
            array(
                "id" => 3839,
                "name" => "Tanah Rubuh",
                "city_id" => 272,
            ),
            array(
                "id" => 3840,
                "name" => "Warmare",
                "city_id" => 272,
            ),
            array(
                "id" => 3841,
                "name" => "Dataran Isim",
                "city_id" => 273,
            ),
            array(
                "id" => 3842,
                "name" => "Momi Waren",
                "city_id" => 273,
            ),
            array(
                "id" => 3843,
                "name" => "Neney (Nenei)",
                "city_id" => 273,
            ),
            array(
                "id" => 3844,
                "name" => "Oransbari",
                "city_id" => 273,
            ),
            array(
                "id" => 3845,
                "name" => "Ransiki",
                "city_id" => 273,
            ),
            array(
                "id" => 3846,
                "name" => "Tahota (Tohota)",
                "city_id" => 273,
            ),
            array(
                "id" => 3847,
                "name" => "Assue",
                "city_id" => 274,
            ),
            array(
                "id" => 3848,
                "name" => "Bamgi",
                "city_id" => 274,
            ),
            array(
                "id" => 3849,
                "name" => "Citakmitak",
                "city_id" => 274,
            ),
            array(
                "id" => 3850,
                "name" => "Edera",
                "city_id" => 274,
            ),
            array(
                "id" => 3851,
                "name" => "Haju",
                "city_id" => 274,
            ),
            array(
                "id" => 3852,
                "name" => "Kaibar",
                "city_id" => 274,
            ),
            array(
                "id" => 3853,
                "name" => "Minyamur",
                "city_id" => 274,
            ),
            array(
                "id" => 3854,
                "name" => "Nambioman Bapai (Mambioman)",
                "city_id" => 274,
            ),
            array(
                "id" => 3855,
                "name" => "Obaa",
                "city_id" => 274,
            ),
            array(
                "id" => 3856,
                "name" => "Passue",
                "city_id" => 274,
            ),
            array(
                "id" => 3857,
                "name" => "Passue Bawah",
                "city_id" => 274,
            ),
            array(
                "id" => 3858,
                "name" => "Syahcame",
                "city_id" => 274,
            ),
            array(
                "id" => 3859,
                "name" => "Ti Zain",
                "city_id" => 274,
            ),
            array(
                "id" => 3860,
                "name" => "Venaha",
                "city_id" => 274,
            ),
            array(
                "id" => 3861,
                "name" => "Yakomi",
                "city_id" => 274,
            ),
            array(
                "id" => 3862,
                "name" => "Bantimurung",
                "city_id" => 275,
            ),
            array(
                "id" => 3863,
                "name" => "Bontoa (Maros Utara)",
                "city_id" => 275,
            ),
            array(
                "id" => 3864,
                "name" => "Camba",
                "city_id" => 275,
            ),
            array(
                "id" => 3865,
                "name" => "Cenrana",
                "city_id" => 275,
            ),
            array(
                "id" => 3866,
                "name" => "Lau",
                "city_id" => 275,
            ),
            array(
                "id" => 3867,
                "name" => "Mallawa",
                "city_id" => 275,
            ),
            array(
                "id" => 3868,
                "name" => "Mandai",
                "city_id" => 275,
            ),
            array(
                "id" => 3869,
                "name" => "Maros Baru",
                "city_id" => 275,
            ),
            array(
                "id" => 3870,
                "name" => "Marusu",
                "city_id" => 275,
            ),
            array(
                "id" => 3871,
                "name" => "Moncongloe",
                "city_id" => 275,
            ),
            array(
                "id" => 3872,
                "name" => "Simbang",
                "city_id" => 275,
            ),
            array(
                "id" => 3873,
                "name" => "Tanralili",
                "city_id" => 275,
            ),
            array(
                "id" => 3874,
                "name" => "Tompu Bulu",
                "city_id" => 275,
            ),
            array(
                "id" => 3875,
                "name" => "Turikale",
                "city_id" => 275,
            ),
            array(
                "id" => 3876,
                "name" => "Ampenan",
                "city_id" => 276,
            ),
            array(
                "id" => 3877,
                "name" => "Cakranegara",
                "city_id" => 276,
            ),
            array(
                "id" => 3878,
                "name" => "Mataram",
                "city_id" => 276,
            ),
            array(
                "id" => 3879,
                "name" => "Sandubaya (Sandujaya)",
                "city_id" => 276,
            ),
            array(
                "id" => 3880,
                "name" => "Sekarbela",
                "city_id" => 276,
            ),
            array(
                "id" => 3881,
                "name" => "Selaparang (Selaprang)",
                "city_id" => 276,
            ),
            array(
                "id" => 3882,
                "name" => "Aifat",
                "city_id" => 277,
            ),
            array(
                "id" => 3883,
                "name" => "Aifat Selatan",
                "city_id" => 277,
            ),
            array(
                "id" => 3884,
                "name" => "Aifat Timur",
                "city_id" => 277,
            ),
            array(
                "id" => 3885,
                "name" => "Aifat Timur Jauh",
                "city_id" => 277,
            ),
            array(
                "id" => 3886,
                "name" => "Aifat Timur Selatan",
                "city_id" => 277,
            ),
            array(
                "id" => 3887,
                "name" => "Aifat Timur Tengah",
                "city_id" => 277,
            ),
            array(
                "id" => 3888,
                "name" => "Aifat Utara",
                "city_id" => 277,
            ),
            array(
                "id" => 3889,
                "name" => "Aitinyo",
                "city_id" => 277,
            ),
            array(
                "id" => 3890,
                "name" => "Aitinyo Barat",
                "city_id" => 277,
            ),
            array(
                "id" => 3891,
                "name" => "Aitinyo Raya",
                "city_id" => 277,
            ),
            array(
                "id" => 3892,
                "name" => "Aitinyo Tengah",
                "city_id" => 277,
            ),
            array(
                "id" => 3893,
                "name" => "Aitinyo Utara",
                "city_id" => 277,
            ),
            array(
                "id" => 3894,
                "name" => "Ayamaru",
                "city_id" => 277,
            ),
            array(
                "id" => 3895,
                "name" => "Ayamaru Barat",
                "city_id" => 277,
            ),
            array(
                "id" => 3896,
                "name" => "Ayamaru Jaya",
                "city_id" => 277,
            ),
            array(
                "id" => 3897,
                "name" => "Ayamaru Selatan",
                "city_id" => 277,
            ),
            array(
                "id" => 3898,
                "name" => "Ayamaru Selatan Jaya",
                "city_id" => 277,
            ),
            array(
                "id" => 3899,
                "name" => "Ayamaru Tengah",
                "city_id" => 277,
            ),
            array(
                "id" => 3900,
                "name" => "Ayamaru Timur",
                "city_id" => 277,
            ),
            array(
                "id" => 3901,
                "name" => "Ayamaru Timur Selatan",
                "city_id" => 277,
            ),
            array(
                "id" => 3902,
                "name" => "Ayamaru Utara",
                "city_id" => 277,
            ),
            array(
                "id" => 3903,
                "name" => "Ayamaru Utara Timur",
                "city_id" => 277,
            ),
            array(
                "id" => 3904,
                "name" => "Mare",
                "city_id" => 277,
            ),
            array(
                "id" => 3905,
                "name" => "Mare Selatan",
                "city_id" => 277,
            ),
            array(
                "id" => 3906,
                "name" => "Medan Amplas",
                "city_id" => 278,
            ),
            array(
                "id" => 3907,
                "name" => "Medan Area",
                "city_id" => 278,
            ),
            array(
                "id" => 3908,
                "name" => "Medan Barat",
                "city_id" => 278,
            ),
            array(
                "id" => 3909,
                "name" => "Medan Baru",
                "city_id" => 278,
            ),
            array(
                "id" => 3910,
                "name" => "Medan Belawan Kota",
                "city_id" => 278,
            ),
            array(
                "id" => 3911,
                "name" => "Medan Deli",
                "city_id" => 278,
            ),
            array(
                "id" => 3912,
                "name" => "Medan Denai",
                "city_id" => 278,
            ),
            array(
                "id" => 3913,
                "name" => "Medan Helvetia",
                "city_id" => 278,
            ),
            array(
                "id" => 3914,
                "name" => "Medan Johor",
                "city_id" => 278,
            ),
            array(
                "id" => 3915,
                "name" => "Medan Kota",
                "city_id" => 278,
            ),
            array(
                "id" => 3916,
                "name" => "Medan Labuhan",
                "city_id" => 278,
            ),
            array(
                "id" => 3917,
                "name" => "Medan Maimun",
                "city_id" => 278,
            ),
            array(
                "id" => 3918,
                "name" => "Medan Marelan",
                "city_id" => 278,
            ),
            array(
                "id" => 3919,
                "name" => "Medan Perjuangan",
                "city_id" => 278,
            ),
            array(
                "id" => 3920,
                "name" => "Medan Petisah",
                "city_id" => 278,
            ),
            array(
                "id" => 3921,
                "name" => "Medan Polonia",
                "city_id" => 278,
            ),
            array(
                "id" => 3922,
                "name" => "Medan Selayang",
                "city_id" => 278,
            ),
            array(
                "id" => 3923,
                "name" => "Medan Sunggal",
                "city_id" => 278,
            ),
            array(
                "id" => 3924,
                "name" => "Medan Tembung",
                "city_id" => 278,
            ),
            array(
                "id" => 3925,
                "name" => "Medan Timur",
                "city_id" => 278,
            ),
            array(
                "id" => 3926,
                "name" => "Medan Tuntungan",
                "city_id" => 278,
            ),
            array(
                "id" => 3927,
                "name" => "Belimbing",
                "city_id" => 279,
            ),
            array(
                "id" => 3928,
                "name" => "Belimbing Hulu",
                "city_id" => 279,
            ),
            array(
                "id" => 3929,
                "name" => "Ella Hilir",
                "city_id" => 279,
            ),
            array(
                "id" => 3930,
                "name" => "Menukung",
                "city_id" => 279,
            ),
            array(
                "id" => 3931,
                "name" => "Nanga Pinoh",
                "city_id" => 279,
            ),
            array(
                "id" => 3932,
                "name" => "Pinoh Selatan",
                "city_id" => 279,
            ),
            array(
                "id" => 3933,
                "name" => "Pinoh Utara",
                "city_id" => 279,
            ),
            array(
                "id" => 3934,
                "name" => "Sayan",
                "city_id" => 279,
            ),
            array(
                "id" => 3935,
                "name" => "Sokan",
                "city_id" => 279,
            ),
            array(
                "id" => 3936,
                "name" => "Tanah Pinoh",
                "city_id" => 279,
            ),
            array(
                "id" => 3937,
                "name" => "Tanah Pinoh Barat",
                "city_id" => 279,
            ),
            array(
                "id" => 3938,
                "name" => "Bangko",
                "city_id" => 280,
            ),
            array(
                "id" => 3939,
                "name" => "Bangko Barat",
                "city_id" => 280,
            ),
            array(
                "id" => 3940,
                "name" => "Batang Masumai",
                "city_id" => 280,
            ),
            array(
                "id" => 3941,
                "name" => "Jangkat",
                "city_id" => 280,
            ),
            array(
                "id" => 3942,
                "name" => "Lembah Masurai",
                "city_id" => 280,
            ),
            array(
                "id" => 3943,
                "name" => "Margo Tabir",
                "city_id" => 280,
            ),
            array(
                "id" => 3944,
                "name" => "Muara Siau",
                "city_id" => 280,
            ),
            array(
                "id" => 3945,
                "name" => "Nalo Tantan",
                "city_id" => 280,
            ),
            array(
                "id" => 3946,
                "name" => "Pamenang",
                "city_id" => 280,
            ),
            array(
                "id" => 3947,
                "name" => "Pamenang Barat",
                "city_id" => 280,
            ),
            array(
                "id" => 3948,
                "name" => "Pamenang Selatan",
                "city_id" => 280,
            ),
            array(
                "id" => 3949,
                "name" => "Pangkalan Jambu",
                "city_id" => 280,
            ),
            array(
                "id" => 3950,
                "name" => "Renah Pembarap",
                "city_id" => 280,
            ),
            array(
                "id" => 3951,
                "name" => "Renah Pemenang",
                "city_id" => 280,
            ),
            array(
                "id" => 3952,
                "name" => "Sungai Manau",
                "city_id" => 280,
            ),
            array(
                "id" => 3953,
                "name" => "Sungai Tenang",
                "city_id" => 280,
            ),
            array(
                "id" => 3954,
                "name" => "Tabir",
                "city_id" => 280,
            ),
            array(
                "id" => 3955,
                "name" => "Tabir Barat",
                "city_id" => 280,
            ),
            array(
                "id" => 3956,
                "name" => "Tabir Ilir",
                "city_id" => 280,
            ),
            array(
                "id" => 3957,
                "name" => "Tabir Lintas",
                "city_id" => 280,
            ),
            array(
                "id" => 3958,
                "name" => "Tabir Selatan",
                "city_id" => 280,
            ),
            array(
                "id" => 3959,
                "name" => "Tabir Timur",
                "city_id" => 280,
            ),
            array(
                "id" => 3960,
                "name" => "Tabir Ulu",
                "city_id" => 280,
            ),
            array(
                "id" => 3961,
                "name" => "Tiang Pumpung",
                "city_id" => 280,
            ),
            array(
                "id" => 3962,
                "name" => "Animha",
                "city_id" => 281,
            ),
            array(
                "id" => 3963,
                "name" => "Eligobel",
                "city_id" => 281,
            ),
            array(
                "id" => 3964,
                "name" => "Ilyawab",
                "city_id" => 281,
            ),
            array(
                "id" => 3965,
                "name" => "Jagebob",
                "city_id" => 281,
            ),
            array(
                "id" => 3966,
                "name" => "Kaptel",
                "city_id" => 281,
            ),
            array(
                "id" => 3967,
                "name" => "Kimaam",
                "city_id" => 281,
            ),
            array(
                "id" => 3968,
                "name" => "Kurik",
                "city_id" => 281,
            ),
            array(
                "id" => 3969,
                "name" => "Malind",
                "city_id" => 281,
            ),
            array(
                "id" => 3970,
                "name" => "Merauke",
                "city_id" => 281,
            ),
            array(
                "id" => 3971,
                "name" => "Muting",
                "city_id" => 281,
            ),
            array(
                "id" => 3972,
                "name" => "Naukenjerai",
                "city_id" => 281,
            ),
            array(
                "id" => 3973,
                "name" => "Ngguti (Nggunti)",
                "city_id" => 281,
            ),
            array(
                "id" => 3974,
                "name" => "Okaba",
                "city_id" => 281,
            ),
            array(
                "id" => 3975,
                "name" => "Semangga",
                "city_id" => 281,
            ),
            array(
                "id" => 3976,
                "name" => "Sota",
                "city_id" => 281,
            ),
            array(
                "id" => 3977,
                "name" => "Tabonji",
                "city_id" => 281,
            ),
            array(
                "id" => 3978,
                "name" => "Tanah Miring",
                "city_id" => 281,
            ),
            array(
                "id" => 3979,
                "name" => "Tubang",
                "city_id" => 281,
            ),
            array(
                "id" => 3980,
                "name" => "Ulilin",
                "city_id" => 281,
            ),
            array(
                "id" => 3981,
                "name" => "Waan",
                "city_id" => 281,
            ),
            array(
                "id" => 3982,
                "name" => "Mesuji",
                "city_id" => 282,
            ),
            array(
                "id" => 3983,
                "name" => "Mesuji Timur",
                "city_id" => 282,
            ),
            array(
                "id" => 3984,
                "name" => "Panca Jaya",
                "city_id" => 282,
            ),
            array(
                "id" => 3985,
                "name" => "Rawa Jitu Utara",
                "city_id" => 282,
            ),
            array(
                "id" => 3986,
                "name" => "Simpang Pematang",
                "city_id" => 282,
            ),
            array(
                "id" => 3987,
                "name" => "Tanjung Raya",
                "city_id" => 282,
            ),
            array(
                "id" => 3988,
                "name" => "Way Serdang",
                "city_id" => 282,
            ),
            array(
                "id" => 3989,
                "name" => "Metro Barat",
                "city_id" => 283,
            ),
            array(
                "id" => 3990,
                "name" => "Metro Pusat",
                "city_id" => 283,
            ),
            array(
                "id" => 3991,
                "name" => "Metro Selatan",
                "city_id" => 283,
            ),
            array(
                "id" => 3992,
                "name" => "Metro Timur",
                "city_id" => 283,
            ),
            array(
                "id" => 3993,
                "name" => "Metro Utara",
                "city_id" => 283,
            ),
            array(
                "id" => 3994,
                "name" => "Agimuga",
                "city_id" => 284,
            ),
            array(
                "id" => 3995,
                "name" => "Jila",
                "city_id" => 284,
            ),
            array(
                "id" => 3996,
                "name" => "Jita",
                "city_id" => 284,
            ),
            array(
                "id" => 3997,
                "name" => "Kuala Kencana",
                "city_id" => 284,
            ),
            array(
                "id" => 3998,
                "name" => "Mimika Barat (Mibar)",
                "city_id" => 284,
            ),
            array(
                "id" => 3999,
                "name" => "Mimika Barat Jauh",
                "city_id" => 284,
            ),
            array(
                "id" => 4000,
                "name" => "Mimika Barat Tengah",
                "city_id" => 284,
            ),
            array(
                "id" => 4001,
                "name" => "Mimika Baru",
                "city_id" => 284,
            ),
            array(
                "id" => 4002,
                "name" => "Mimika Timur",
                "city_id" => 284,
            ),
            array(
                "id" => 4003,
                "name" => "Mimika Timur Jauh",
                "city_id" => 284,
            ),
            array(
                "id" => 4004,
                "name" => "Mimika Timur Tengah",
                "city_id" => 284,
            ),
            array(
                "id" => 4005,
                "name" => "Tembagapura",
                "city_id" => 284,
            ),
            array(
                "id" => 4006,
                "name" => "Eris",
                "city_id" => 285,
            ),
            array(
                "id" => 4007,
                "name" => "Kakas",
                "city_id" => 285,
            ),
            array(
                "id" => 4008,
                "name" => "Kakas Barat",
                "city_id" => 285,
            ),
            array(
                "id" => 4009,
                "name" => "Kawangkoan",
                "city_id" => 285,
            ),
            array(
                "id" => 4010,
                "name" => "Kawangkoan Barat",
                "city_id" => 285,
            ),
            array(
                "id" => 4011,
                "name" => "Kawangkoan Utara",
                "city_id" => 285,
            ),
            array(
                "id" => 4012,
                "name" => "Kombi",
                "city_id" => 285,
            ),
            array(
                "id" => 4013,
                "name" => "Langowan Barat",
                "city_id" => 285,
            ),
            array(
                "id" => 4014,
                "name" => "Langowan Selatan",
                "city_id" => 285,
            ),
            array(
                "id" => 4015,
                "name" => "Langowan Timur",
                "city_id" => 285,
            ),
            array(
                "id" => 4016,
                "name" => "Langowan Utara",
                "city_id" => 285,
            ),
            array(
                "id" => 4017,
                "name" => "Lembean Timur",
                "city_id" => 285,
            ),
            array(
                "id" => 4018,
                "name" => "Mandolang",
                "city_id" => 285,
            ),
            array(
                "id" => 4019,
                "name" => "Pineleng",
                "city_id" => 285,
            ),
            array(
                "id" => 4020,
                "name" => "Remboken",
                "city_id" => 285,
            ),
            array(
                "id" => 4021,
                "name" => "Sonder",
                "city_id" => 285,
            ),
            array(
                "id" => 4022,
                "name" => "Tombariri",
                "city_id" => 285,
            ),
            array(
                "id" => 4023,
                "name" => "Tombariri Timur",
                "city_id" => 285,
            ),
            array(
                "id" => 4024,
                "name" => "Tombulu",
                "city_id" => 285,
            ),
            array(
                "id" => 4025,
                "name" => "Tompaso",
                "city_id" => 285,
            ),
            array(
                "id" => 4026,
                "name" => "Tompaso Barat",
                "city_id" => 285,
            ),
            array(
                "id" => 4027,
                "name" => "Tondano Barat",
                "city_id" => 285,
            ),
            array(
                "id" => 4028,
                "name" => "Tondano Selatan",
                "city_id" => 285,
            ),
            array(
                "id" => 4029,
                "name" => "Tondano Timur",
                "city_id" => 285,
            ),
            array(
                "id" => 4030,
                "name" => "Tondano Utara",
                "city_id" => 285,
            ),
            array(
                "id" => 4031,
                "name" => "Amurang",
                "city_id" => 286,
            ),
            array(
                "id" => 4032,
                "name" => "Amurang Barat",
                "city_id" => 286,
            ),
            array(
                "id" => 4033,
                "name" => "Amurang Timur",
                "city_id" => 286,
            ),
            array(
                "id" => 4034,
                "name" => "Kumelembuai",
                "city_id" => 286,
            ),
            array(
                "id" => 4035,
                "name" => "Maesaan",
                "city_id" => 286,
            ),
            array(
                "id" => 4036,
                "name" => "Modoinding",
                "city_id" => 286,
            ),
            array(
                "id" => 4037,
                "name" => "Motoling",
                "city_id" => 286,
            ),
            array(
                "id" => 4038,
                "name" => "Motoling Barat",
                "city_id" => 286,
            ),
            array(
                "id" => 4039,
                "name" => "Motoling Timur",
                "city_id" => 286,
            ),
            array(
                "id" => 4040,
                "name" => "Ranoyapo",
                "city_id" => 286,
            ),
            array(
                "id" => 4041,
                "name" => "Sinonsayang",
                "city_id" => 286,
            ),
            array(
                "id" => 4042,
                "name" => "Suluun Tareran",
                "city_id" => 286,
            ),
            array(
                "id" => 4043,
                "name" => "Tareran",
                "city_id" => 286,
            ),
            array(
                "id" => 4044,
                "name" => "Tatapaan",
                "city_id" => 286,
            ),
            array(
                "id" => 4045,
                "name" => "Tenga",
                "city_id" => 286,
            ),
            array(
                "id" => 4046,
                "name" => "Tompaso Baru",
                "city_id" => 286,
            ),
            array(
                "id" => 4047,
                "name" => "Tumpaan",
                "city_id" => 286,
            ),
            array(
                "id" => 4048,
                "name" => "Belang",
                "city_id" => 287,
            ),
            array(
                "id" => 4049,
                "name" => "Pasan",
                "city_id" => 287,
            ),
            array(
                "id" => 4050,
                "name" => "Pusomaen",
                "city_id" => 287,
            ),
            array(
                "id" => 4051,
                "name" => "Ratahan",
                "city_id" => 287,
            ),
            array(
                "id" => 4052,
                "name" => "Ratahan Timur",
                "city_id" => 287,
            ),
            array(
                "id" => 4053,
                "name" => "Ratatotok",
                "city_id" => 287,
            ),
            array(
                "id" => 4054,
                "name" => "Silian Raya",
                "city_id" => 287,
            ),
            array(
                "id" => 4055,
                "name" => "Tombatu",
                "city_id" => 287,
            ),
            array(
                "id" => 4056,
                "name" => "Tombatu Timur",
                "city_id" => 287,
            ),
            array(
                "id" => 4057,
                "name" => "Tombatu Utara",
                "city_id" => 287,
            ),
            array(
                "id" => 4058,
                "name" => "Touluaan",
                "city_id" => 287,
            ),
            array(
                "id" => 4059,
                "name" => "Touluaan Selatan",
                "city_id" => 287,
            ),
            array(
                "id" => 4060,
                "name" => "Airmadidi",
                "city_id" => 288,
            ),
            array(
                "id" => 4061,
                "name" => "Dimembe",
                "city_id" => 288,
            ),
            array(
                "id" => 4062,
                "name" => "Kalawat",
                "city_id" => 288,
            ),
            array(
                "id" => 4063,
                "name" => "Kauditan",
                "city_id" => 288,
            ),
            array(
                "id" => 4064,
                "name" => "Kema",
                "city_id" => 288,
            ),
            array(
                "id" => 4065,
                "name" => "Likupang Barat",
                "city_id" => 288,
            ),
            array(
                "id" => 4066,
                "name" => "Likupang Selatan",
                "city_id" => 288,
            ),
            array(
                "id" => 4067,
                "name" => "Likupang Timur",
                "city_id" => 288,
            ),
            array(
                "id" => 4068,
                "name" => "Talawaan",
                "city_id" => 288,
            ),
            array(
                "id" => 4069,
                "name" => "Wori",
                "city_id" => 288,
            ),
            array(
                "id" => 4070,
                "name" => "Bangsal",
                "city_id" => 289,
            ),
            array(
                "id" => 4071,
                "name" => "Dawar Blandong",
                "city_id" => 289,
            ),
            array(
                "id" => 4072,
                "name" => "Dlanggu",
                "city_id" => 289,
            ),
            array(
                "id" => 4073,
                "name" => "Gedeg",
                "city_id" => 289,
            ),
            array(
                "id" => 4074,
                "name" => "Gondang",
                "city_id" => 289,
            ),
            array(
                "id" => 4075,
                "name" => "Jatirejo",
                "city_id" => 289,
            ),
            array(
                "id" => 4076,
                "name" => "Jetis",
                "city_id" => 289,
            ),
            array(
                "id" => 4077,
                "name" => "Kemlagi",
                "city_id" => 289,
            ),
            array(
                "id" => 4078,
                "name" => "Kutorejo",
                "city_id" => 289,
            ),
            array(
                "id" => 4079,
                "name" => "Mojoanyar",
                "city_id" => 289,
            ),
            array(
                "id" => 4080,
                "name" => "Mojosari",
                "city_id" => 289,
            ),
            array(
                "id" => 4081,
                "name" => "Ngoro",
                "city_id" => 289,
            ),
            array(
                "id" => 4082,
                "name" => "Pacet",
                "city_id" => 289,
            ),
            array(
                "id" => 4083,
                "name" => "Pungging",
                "city_id" => 289,
            ),
            array(
                "id" => 4084,
                "name" => "Puri",
                "city_id" => 289,
            ),
            array(
                "id" => 4085,
                "name" => "Sooko",
                "city_id" => 289,
            ),
            array(
                "id" => 4086,
                "name" => "Trawas",
                "city_id" => 289,
            ),
            array(
                "id" => 4087,
                "name" => "Trowulan",
                "city_id" => 289,
            ),
            array(
                "id" => 4088,
                "name" => "Magersari",
                "city_id" => 290,
            ),
            array(
                "id" => 4089,
                "name" => "Prajurit Kulon",
                "city_id" => 290,
            ),
            array(
                "id" => 4090,
                "name" => "Bahodopi",
                "city_id" => 291,
            ),
            array(
                "id" => 4091,
                "name" => "Bumi Raya",
                "city_id" => 291,
            ),
            array(
                "id" => 4092,
                "name" => "Bungku Barat",
                "city_id" => 291,
            ),
            array(
                "id" => 4093,
                "name" => "Bungku Pesisir",
                "city_id" => 291,
            ),
            array(
                "id" => 4094,
                "name" => "Bungku Selatan",
                "city_id" => 291,
            ),
            array(
                "id" => 4095,
                "name" => "Bungku Tengah",
                "city_id" => 291,
            ),
            array(
                "id" => 4096,
                "name" => "Bungku Timur",
                "city_id" => 291,
            ),
            array(
                "id" => 4097,
                "name" => "Bungku Utara",
                "city_id" => 291,
            ),
            array(
                "id" => 4098,
                "name" => "Lembo",
                "city_id" => 291,
            ),
            array(
                "id" => 4099,
                "name" => "Lembo Raya",
                "city_id" => 291,
            ),
            array(
                "id" => 4100,
                "name" => "Mamosalato",
                "city_id" => 291,
            ),
            array(
                "id" => 4101,
                "name" => "Menui Kepulauan",
                "city_id" => 291,
            ),
            array(
                "id" => 4102,
                "name" => "Mori Atas",
                "city_id" => 291,
            ),
            array(
                "id" => 4103,
                "name" => "Mori Utara",
                "city_id" => 291,
            ),
            array(
                "id" => 4104,
                "name" => "Petasia",
                "city_id" => 291,
            ),
            array(
                "id" => 4105,
                "name" => "Petasia Barat",
                "city_id" => 291,
            ),
            array(
                "id" => 4106,
                "name" => "Petasia Timur",
                "city_id" => 291,
            ),
            array(
                "id" => 4107,
                "name" => "Soyo Jaya",
                "city_id" => 291,
            ),
            array(
                "id" => 4108,
                "name" => "Wita Ponda",
                "city_id" => 291,
            ),
            array(
                "id" => 4109,
                "name" => "Abab",
                "city_id" => 292,
            ),
            array(
                "id" => 4110,
                "name" => "Benakat",
                "city_id" => 292,
            ),
            array(
                "id" => 4111,
                "name" => "Gelumbang",
                "city_id" => 292,
            ),
            array(
                "id" => 4112,
                "name" => "Gunung Megang",
                "city_id" => 292,
            ),
            array(
                "id" => 4113,
                "name" => "Kelekar",
                "city_id" => 292,
            ),
            array(
                "id" => 4114,
                "name" => "Lawang Kidul",
                "city_id" => 292,
            ),
            array(
                "id" => 4115,
                "name" => "Lembak",
                "city_id" => 292,
            ),
            array(
                "id" => 4116,
                "name" => "Lubai",
                "city_id" => 292,
            ),
            array(
                "id" => 4117,
                "name" => "Muara Belida",
                "city_id" => 292,
            ),
            array(
                "id" => 4118,
                "name" => "Muara Enim",
                "city_id" => 292,
            ),
            array(
                "id" => 4119,
                "name" => "Penukal (Penukal Abab)",
                "city_id" => 292,
            ),
            array(
                "id" => 4120,
                "name" => "Penukal Utara",
                "city_id" => 292,
            ),
            array(
                "id" => 4121,
                "name" => "Rambang",
                "city_id" => 292,
            ),
            array(
                "id" => 4122,
                "name" => "Rambang Dangku",
                "city_id" => 292,
            ),
            array(
                "id" => 4123,
                "name" => "Semendo Darat Laut",
                "city_id" => 292,
            ),
            array(
                "id" => 4124,
                "name" => "Semendo Darat Tengah",
                "city_id" => 292,
            ),
            array(
                "id" => 4125,
                "name" => "Semendo Darat Ulu",
                "city_id" => 292,
            ),
            array(
                "id" => 4126,
                "name" => "Sungai Rotan",
                "city_id" => 292,
            ),
            array(
                "id" => 4127,
                "name" => "Talang Ubi",
                "city_id" => 292,
            ),
            array(
                "id" => 4128,
                "name" => "Tanah Abang",
                "city_id" => 292,
            ),
            array(
                "id" => 4129,
                "name" => "Tanjung Agung",
                "city_id" => 292,
            ),
            array(
                "id" => 4130,
                "name" => "Ujan Mas",
                "city_id" => 292,
            ),
            array(
                "id" => 4131,
                "name" => "Bahar Selatan",
                "city_id" => 293,
            ),
            array(
                "id" => 4132,
                "name" => "Bahar Utara",
                "city_id" => 293,
            ),
            array(
                "id" => 4133,
                "name" => "Jambi Luar Kota",
                "city_id" => 293,
            ),
            array(
                "id" => 4134,
                "name" => "Kumpeh",
                "city_id" => 293,
            ),
            array(
                "id" => 4135,
                "name" => "Kumpeh Ulu",
                "city_id" => 293,
            ),
            array(
                "id" => 4136,
                "name" => "Maro Sebo",
                "city_id" => 293,
            ),
            array(
                "id" => 4137,
                "name" => "Mestong",
                "city_id" => 293,
            ),
            array(
                "id" => 4138,
                "name" => "Sekernan",
                "city_id" => 293,
            ),
            array(
                "id" => 4139,
                "name" => "Sungai Bahar",
                "city_id" => 293,
            ),
            array(
                "id" => 4140,
                "name" => "Sungai Gelam",
                "city_id" => 293,
            ),
            array(
                "id" => 4141,
                "name" => "Taman Rajo / Rejo",
                "city_id" => 293,
            ),
            array(
                "id" => 4142,
                "name" => "Air Dikit",
                "city_id" => 294,
            ),
            array(
                "id" => 4143,
                "name" => "Air Majunto",
                "city_id" => 294,
            ),
            array(
                "id" => 4144,
                "name" => "Air Rami",
                "city_id" => 294,
            ),
            array(
                "id" => 4145,
                "name" => "Ipuh (Muko-Muko Selatan)",
                "city_id" => 294,
            ),
            array(
                "id" => 4146,
                "name" => "Kota Mukomuko (Mukomuko Utara)",
                "city_id" => 294,
            ),
            array(
                "id" => 4147,
                "name" => "Lubuk Pinang",
                "city_id" => 294,
            ),
            array(
                "id" => 4148,
                "name" => "Malin Deman",
                "city_id" => 294,
            ),
            array(
                "id" => 4149,
                "name" => "Penarik",
                "city_id" => 294,
            ),
            array(
                "id" => 4150,
                "name" => "Pondok Suguh",
                "city_id" => 294,
            ),
            array(
                "id" => 4151,
                "name" => "Selagan Raya",
                "city_id" => 294,
            ),
            array(
                "id" => 4152,
                "name" => "Sungai Rumbai",
                "city_id" => 294,
            ),
            array(
                "id" => 4153,
                "name" => "Teramang Jaya",
                "city_id" => 294,
            ),
            array(
                "id" => 4154,
                "name" => "Teras Terunjam",
                "city_id" => 294,
            ),
            array(
                "id" => 4155,
                "name" => "V Koto",
                "city_id" => 294,
            ),
            array(
                "id" => 4156,
                "name" => "XIV Koto",
                "city_id" => 294,
            ),
            array(
                "id" => 4157,
                "name" => "Barangka",
                "city_id" => 295,
            ),
            array(
                "id" => 4158,
                "name" => "Batalaiwaru (Batalaiworu)",
                "city_id" => 295,
            ),
            array(
                "id" => 4159,
                "name" => "Batukara",
                "city_id" => 295,
            ),
            array(
                "id" => 4160,
                "name" => "Bone (Bone Tondo)",
                "city_id" => 295,
            ),
            array(
                "id" => 4161,
                "name" => "Duruka",
                "city_id" => 295,
            ),
            array(
                "id" => 4162,
                "name" => "Kabangka",
                "city_id" => 295,
            ),
            array(
                "id" => 4163,
                "name" => "Kabawo",
                "city_id" => 295,
            ),
            array(
                "id" => 4164,
                "name" => "Katobu",
                "city_id" => 295,
            ),
            array(
                "id" => 4165,
                "name" => "Kontu Kowuna",
                "city_id" => 295,
            ),
            array(
                "id" => 4166,
                "name" => "Kontunaga",
                "city_id" => 295,
            ),
            array(
                "id" => 4167,
                "name" => "Kusambi",
                "city_id" => 295,
            ),
            array(
                "id" => 4168,
                "name" => "Lasalepa",
                "city_id" => 295,
            ),
            array(
                "id" => 4169,
                "name" => "Lawa",
                "city_id" => 295,
            ),
            array(
                "id" => 4170,
                "name" => "Lohia",
                "city_id" => 295,
            ),
            array(
                "id" => 4171,
                "name" => "Maginti",
                "city_id" => 295,
            ),
            array(
                "id" => 4172,
                "name" => "Maligano",
                "city_id" => 295,
            ),
            array(
                "id" => 4173,
                "name" => "Marobo",
                "city_id" => 295,
            ),
            array(
                "id" => 4174,
                "name" => "Napabalano",
                "city_id" => 295,
            ),
            array(
                "id" => 4175,
                "name" => "Napano Kusambi",
                "city_id" => 295,
            ),
            array(
                "id" => 4176,
                "name" => "Parigi",
                "city_id" => 295,
            ),
            array(
                "id" => 4177,
                "name" => "Pasi Kolaga",
                "city_id" => 295,
            ),
            array(
                "id" => 4178,
                "name" => "Pasir Putih",
                "city_id" => 295,
            ),
            array(
                "id" => 4179,
                "name" => "Sawerigadi (Sawerigading/Sewergadi)",
                "city_id" => 295,
            ),
            array(
                "id" => 4180,
                "name" => "Tiworo Kepulauan",
                "city_id" => 295,
            ),
            array(
                "id" => 4181,
                "name" => "Tiworo Selatan",
                "city_id" => 295,
            ),
            array(
                "id" => 4182,
                "name" => "Tiworo Tengah",
                "city_id" => 295,
            ),
            array(
                "id" => 4183,
                "name" => "Tiworo Utara",
                "city_id" => 295,
            ),
            array(
                "id" => 4184,
                "name" => "Tongkuno",
                "city_id" => 295,
            ),
            array(
                "id" => 4185,
                "name" => "Tongkuno Selatan",
                "city_id" => 295,
            ),
            array(
                "id" => 4186,
                "name" => "Towea",
                "city_id" => 295,
            ),
            array(
                "id" => 4187,
                "name" => "Wa Daga",
                "city_id" => 295,
            ),
            array(
                "id" => 4188,
                "name" => "Wakorumba Selatan",
                "city_id" => 295,
            ),
            array(
                "id" => 4189,
                "name" => "Watopute",
                "city_id" => 295,
            ),
            array(
                "id" => 4190,
                "name" => "Barito Tuhup Raya",
                "city_id" => 296,
            ),
            array(
                "id" => 4191,
                "name" => "Laung Tuhup",
                "city_id" => 296,
            ),
            array(
                "id" => 4192,
                "name" => "Murung",
                "city_id" => 296,
            ),
            array(
                "id" => 4193,
                "name" => "Permata Intan",
                "city_id" => 296,
            ),
            array(
                "id" => 4194,
                "name" => "Seribu Riam",
                "city_id" => 296,
            ),
            array(
                "id" => 4195,
                "name" => "Sumber Barito",
                "city_id" => 296,
            ),
            array(
                "id" => 4196,
                "name" => "Sungai Babuat",
                "city_id" => 296,
            ),
            array(
                "id" => 4197,
                "name" => "Tanah Siang",
                "city_id" => 296,
            ),
            array(
                "id" => 4198,
                "name" => "Tanah Siang Selatan",
                "city_id" => 296,
            ),
            array(
                "id" => 4199,
                "name" => "Uut Murung",
                "city_id" => 296,
            ),
            array(
                "id" => 4200,
                "name" => "Babat Supat",
                "city_id" => 297,
            ),
            array(
                "id" => 4201,
                "name" => "Babat Toman",
                "city_id" => 297,
            ),
            array(
                "id" => 4202,
                "name" => "Batanghari Leko",
                "city_id" => 297,
            ),
            array(
                "id" => 4203,
                "name" => "Bayung Lencir",
                "city_id" => 297,
            ),
            array(
                "id" => 4204,
                "name" => "Keluang",
                "city_id" => 297,
            ),
            array(
                "id" => 4205,
                "name" => "Lais",
                "city_id" => 297,
            ),
            array(
                "id" => 4206,
                "name" => "Lalan (Sungai Lalan)",
                "city_id" => 297,
            ),
            array(
                "id" => 4207,
                "name" => "Lawang Wetan",
                "city_id" => 297,
            ),
            array(
                "id" => 4208,
                "name" => "Plakat Tinggi (Pelakat Tinggi)",
                "city_id" => 297,
            ),
            array(
                "id" => 4209,
                "name" => "Sanga Desa",
                "city_id" => 297,
            ),
            array(
                "id" => 4210,
                "name" => "Sekayu",
                "city_id" => 297,
            ),
            array(
                "id" => 4211,
                "name" => "Sungai Keruh",
                "city_id" => 297,
            ),
            array(
                "id" => 4212,
                "name" => "Sungai Lilin",
                "city_id" => 297,
            ),
            array(
                "id" => 4213,
                "name" => "Tungkal Jaya",
                "city_id" => 297,
            ),
            array(
                "id" => 4214,
                "name" => "Batukuning Lakitan Ulu (BTS)/Cecar",
                "city_id" => 298,
            ),
            array(
                "id" => 4215,
                "name" => "Jaya Loka",
                "city_id" => 298,
            ),
            array(
                "id" => 4216,
                "name" => "Karang Dapo",
                "city_id" => 298,
            ),
            array(
                "id" => 4217,
                "name" => "Karang Jaya",
                "city_id" => 298,
            ),
            array(
                "id" => 4218,
                "name" => "Megang Sakti",
                "city_id" => 298,
            ),
            array(
                "id" => 4219,
                "name" => "Muara Beliti",
                "city_id" => 298,
            ),
            array(
                "id" => 4220,
                "name" => "Muara Kelingi",
                "city_id" => 298,
            ),
            array(
                "id" => 4221,
                "name" => "Muara Lakitan",
                "city_id" => 298,
            ),
            array(
                "id" => 4222,
                "name" => "Nibung",
                "city_id" => 298,
            ),
            array(
                "id" => 4223,
                "name" => "Purwodadi",
                "city_id" => 298,
            ),
            array(
                "id" => 4224,
                "name" => "Rawas Ilir",
                "city_id" => 298,
            ),
            array(
                "id" => 4225,
                "name" => "Rawas Ulu",
                "city_id" => 298,
            ),
            array(
                "id" => 4226,
                "name" => "Rupit",
                "city_id" => 298,
            ),
            array(
                "id" => 4227,
                "name" => "Selangit",
                "city_id" => 298,
            ),
            array(
                "id" => 4228,
                "name" => "STL Ulu Terawas",
                "city_id" => 298,
            ),
            array(
                "id" => 4229,
                "name" => "Sukakarya",
                "city_id" => 298,
            ),
            array(
                "id" => 4230,
                "name" => "Sumber Harta",
                "city_id" => 298,
            ),
            array(
                "id" => 4231,
                "name" => "Tiang Pumpung Kepungut",
                "city_id" => 298,
            ),
            array(
                "id" => 4232,
                "name" => "Tuah Negeri",
                "city_id" => 298,
            ),
            array(
                "id" => 4233,
                "name" => "Tugumulyo",
                "city_id" => 298,
            ),
            array(
                "id" => 4234,
                "name" => "Ulu Rawas",
                "city_id" => 298,
            ),
            array(
                "id" => 4235,
                "name" => "Dipa",
                "city_id" => 299,
            ),
            array(
                "id" => 4236,
                "name" => "Makimi",
                "city_id" => 299,
            ),
            array(
                "id" => 4237,
                "name" => "Menou",
                "city_id" => 299,
            ),
            array(
                "id" => 4238,
                "name" => "Moora",
                "city_id" => 299,
            ),
            array(
                "id" => 4239,
                "name" => "Nabire",
                "city_id" => 299,
            ),
            array(
                "id" => 4240,
                "name" => "Nabire Barat",
                "city_id" => 299,
            ),
            array(
                "id" => 4241,
                "name" => "Napan",
                "city_id" => 299,
            ),
            array(
                "id" => 4242,
                "name" => "Siriwo",
                "city_id" => 299,
            ),
            array(
                "id" => 4243,
                "name" => "Teluk Kimi",
                "city_id" => 299,
            ),
            array(
                "id" => 4244,
                "name" => "Teluk Umar",
                "city_id" => 299,
            ),
            array(
                "id" => 4245,
                "name" => "Uwapa",
                "city_id" => 299,
            ),
            array(
                "id" => 4246,
                "name" => "Wanggar",
                "city_id" => 299,
            ),
            array(
                "id" => 4247,
                "name" => "Wapoga",
                "city_id" => 299,
            ),
            array(
                "id" => 4248,
                "name" => "Yaro (Yaro Kabisay)",
                "city_id" => 299,
            ),
            array(
                "id" => 4249,
                "name" => "Yaur",
                "city_id" => 299,
            ),
            array(
                "id" => 4250,
                "name" => "Beutong",
                "city_id" => 300,
            ),
            array(
                "id" => 4251,
                "name" => "Beutong Ateuh Banggalang",
                "city_id" => 300,
            ),
            array(
                "id" => 4252,
                "name" => "Darul Makmur",
                "city_id" => 300,
            ),
            array(
                "id" => 4253,
                "name" => "Kuala",
                "city_id" => 300,
            ),
            array(
                "id" => 4254,
                "name" => "Kuala Pesisir",
                "city_id" => 300,
            ),
            array(
                "id" => 4255,
                "name" => "Seunagan",
                "city_id" => 300,
            ),
            array(
                "id" => 4256,
                "name" => "Seunagan Timur",
                "city_id" => 300,
            ),
            array(
                "id" => 4257,
                "name" => "Suka Makmue",
                "city_id" => 300,
            ),
            array(
                "id" => 4258,
                "name" => "Tadu Raya",
                "city_id" => 300,
            ),
            array(
                "id" => 4259,
                "name" => "Tripa Makmur",
                "city_id" => 300,
            ),
            array(
                "id" => 4260,
                "name" => "Aesesa",
                "city_id" => 301,
            ),
            array(
                "id" => 4261,
                "name" => "Aesesa Selatan",
                "city_id" => 301,
            ),
            array(
                "id" => 4262,
                "name" => "Boawae",
                "city_id" => 301,
            ),
            array(
                "id" => 4263,
                "name" => "Keo Tengah",
                "city_id" => 301,
            ),
            array(
                "id" => 4264,
                "name" => "Mauponggo",
                "city_id" => 301,
            ),
            array(
                "id" => 4265,
                "name" => "Nangaroro",
                "city_id" => 301,
            ),
            array(
                "id" => 4266,
                "name" => "Wolowae",
                "city_id" => 301,
            ),
            array(
                "id" => 4267,
                "name" => "Bunguran Barat",
                "city_id" => 302,
            ),
            array(
                "id" => 4268,
                "name" => "Bunguran Selatan",
                "city_id" => 302,
            ),
            array(
                "id" => 4269,
                "name" => "Bunguran Tengah",
                "city_id" => 302,
            ),
            array(
                "id" => 4270,
                "name" => "Bunguran Timur",
                "city_id" => 302,
            ),
            array(
                "id" => 4271,
                "name" => "Bunguran Timur Laut",
                "city_id" => 302,
            ),
            array(
                "id" => 4272,
                "name" => "Bunguran Utara",
                "city_id" => 302,
            ),
            array(
                "id" => 4273,
                "name" => "Midai",
                "city_id" => 302,
            ),
            array(
                "id" => 4274,
                "name" => "Pulau Laut",
                "city_id" => 302,
            ),
            array(
                "id" => 4275,
                "name" => "Pulau Tiga",
                "city_id" => 302,
            ),
            array(
                "id" => 4276,
                "name" => "Serasan",
                "city_id" => 302,
            ),
            array(
                "id" => 4277,
                "name" => "Serasan Timur",
                "city_id" => 302,
            ),
            array(
                "id" => 4278,
                "name" => "Subi",
                "city_id" => 302,
            ),
            array(
                "id" => 4279,
                "name" => "Alama",
                "city_id" => 303,
            ),
            array(
                "id" => 4280,
                "name" => "Dal",
                "city_id" => 303,
            ),
            array(
                "id" => 4281,
                "name" => "Embetpen",
                "city_id" => 303,
            ),
            array(
                "id" => 4282,
                "name" => "Gearek",
                "city_id" => 303,
            ),
            array(
                "id" => 4283,
                "name" => "Geselma (Geselema)",
                "city_id" => 303,
            ),
            array(
                "id" => 4284,
                "name" => "Inikgal",
                "city_id" => 303,
            ),
            array(
                "id" => 4285,
                "name" => "Iniye",
                "city_id" => 303,
            ),
            array(
                "id" => 4286,
                "name" => "Kegayem",
                "city_id" => 303,
            ),
            array(
                "id" => 4287,
                "name" => "Kenyam",
                "city_id" => 303,
            ),
            array(
                "id" => 4288,
                "name" => "Kilmid",
                "city_id" => 303,
            ),
            array(
                "id" => 4289,
                "name" => "Kora",
                "city_id" => 303,
            ),
            array(
                "id" => 4290,
                "name" => "Koroptak",
                "city_id" => 303,
            ),
            array(
                "id" => 4291,
                "name" => "Krepkuri",
                "city_id" => 303,
            ),
            array(
                "id" => 4292,
                "name" => "Mam",
                "city_id" => 303,
            ),
            array(
                "id" => 4293,
                "name" => "Mapenduma",
                "city_id" => 303,
            ),
            array(
                "id" => 4294,
                "name" => "Mbua (Mbuga)",
                "city_id" => 303,
            ),
            array(
                "id" => 4295,
                "name" => "Mbua Tengah",
                "city_id" => 303,
            ),
            array(
                "id" => 4296,
                "name" => "Mbulmu Yalma",
                "city_id" => 303,
            ),
            array(
                "id" => 4297,
                "name" => "Mebarok",
                "city_id" => 303,
            ),
            array(
                "id" => 4298,
                "name" => "Moba",
                "city_id" => 303,
            ),
            array(
                "id" => 4299,
                "name" => "Mugi",
                "city_id" => 303,
            ),
            array(
                "id" => 4300,
                "name" => "Nenggeagin",
                "city_id" => 303,
            ),
            array(
                "id" => 4301,
                "name" => "Nirkuri",
                "city_id" => 303,
            ),
            array(
                "id" => 4302,
                "name" => "Paro",
                "city_id" => 303,
            ),
            array(
                "id" => 4303,
                "name" => "Pasir Putih",
                "city_id" => 303,
            ),
            array(
                "id" => 4304,
                "name" => "Pija",
                "city_id" => 303,
            ),
            array(
                "id" => 4305,
                "name" => "Wosak",
                "city_id" => 303,
            ),
            array(
                "id" => 4306,
                "name" => "Wusi",
                "city_id" => 303,
            ),
            array(
                "id" => 4307,
                "name" => "Wutpaga",
                "city_id" => 303,
            ),
            array(
                "id" => 4308,
                "name" => "Yal",
                "city_id" => 303,
            ),
            array(
                "id" => 4309,
                "name" => "Yenggelo",
                "city_id" => 303,
            ),
            array(
                "id" => 4310,
                "name" => "Yigi",
                "city_id" => 303,
            ),
            array(
                "id" => 4311,
                "name" => "Aimere",
                "city_id" => 304,
            ),
            array(
                "id" => 4312,
                "name" => "Bajawa",
                "city_id" => 304,
            ),
            array(
                "id" => 4313,
                "name" => "Bajawa Utara",
                "city_id" => 304,
            ),
            array(
                "id" => 4314,
                "name" => "Golewa",
                "city_id" => 304,
            ),
            array(
                "id" => 4315,
                "name" => "Golewa Barat",
                "city_id" => 304,
            ),
            array(
                "id" => 4316,
                "name" => "Golewa Selatan",
                "city_id" => 304,
            ),
            array(
                "id" => 4317,
                "name" => "Inerie",
                "city_id" => 304,
            ),
            array(
                "id" => 4318,
                "name" => "Jerebuu",
                "city_id" => 304,
            ),
            array(
                "id" => 4319,
                "name" => "Riung",
                "city_id" => 304,
            ),
            array(
                "id" => 4320,
                "name" => "Riung Barat",
                "city_id" => 304,
            ),
            array(
                "id" => 4321,
                "name" => "Soa",
                "city_id" => 304,
            ),
            array(
                "id" => 4322,
                "name" => "Wolomeze (Riung Selatan)",
                "city_id" => 304,
            ),
            array(
                "id" => 4323,
                "name" => "Bagor",
                "city_id" => 305,
            ),
            array(
                "id" => 4324,
                "name" => "Baron",
                "city_id" => 305,
            ),
            array(
                "id" => 4325,
                "name" => "Berbek",
                "city_id" => 305,
            ),
            array(
                "id" => 4326,
                "name" => "Gondang",
                "city_id" => 305,
            ),
            array(
                "id" => 4327,
                "name" => "Jatikalen",
                "city_id" => 305,
            ),
            array(
                "id" => 4328,
                "name" => "Kertosono",
                "city_id" => 305,
            ),
            array(
                "id" => 4329,
                "name" => "Lengkong",
                "city_id" => 305,
            ),
            array(
                "id" => 4330,
                "name" => "Loceret",
                "city_id" => 305,
            ),
            array(
                "id" => 4331,
                "name" => "Nganjuk",
                "city_id" => 305,
            ),
            array(
                "id" => 4332,
                "name" => "Ngetos",
                "city_id" => 305,
            ),
            array(
                "id" => 4333,
                "name" => "Ngluyu",
                "city_id" => 305,
            ),
            array(
                "id" => 4334,
                "name" => "Ngronggot",
                "city_id" => 305,
            ),
            array(
                "id" => 4335,
                "name" => "Pace",
                "city_id" => 305,
            ),
            array(
                "id" => 4336,
                "name" => "Patianrowo",
                "city_id" => 305,
            ),
            array(
                "id" => 4337,
                "name" => "Prambon",
                "city_id" => 305,
            ),
            array(
                "id" => 4338,
                "name" => "Rejoso",
                "city_id" => 305,
            ),
            array(
                "id" => 4339,
                "name" => "Sawahan",
                "city_id" => 305,
            ),
            array(
                "id" => 4340,
                "name" => "Sukomoro",
                "city_id" => 305,
            ),
            array(
                "id" => 4341,
                "name" => "Tanjunganom",
                "city_id" => 305,
            ),
            array(
                "id" => 4342,
                "name" => "Wilangan",
                "city_id" => 305,
            ),
            array(
                "id" => 4343,
                "name" => "Bringin",
                "city_id" => 306,
            ),
            array(
                "id" => 4344,
                "name" => "Geneng",
                "city_id" => 306,
            ),
            array(
                "id" => 4345,
                "name" => "Gerih",
                "city_id" => 306,
            ),
            array(
                "id" => 4346,
                "name" => "Jogorogo",
                "city_id" => 306,
            ),
            array(
                "id" => 4347,
                "name" => "Karanganyar",
                "city_id" => 306,
            ),
            array(
                "id" => 4348,
                "name" => "Karangjati",
                "city_id" => 306,
            ),
            array(
                "id" => 4349,
                "name" => "Kasreman",
                "city_id" => 306,
            ),
            array(
                "id" => 4350,
                "name" => "Kedunggalar",
                "city_id" => 306,
            ),
            array(
                "id" => 4351,
                "name" => "Kendal",
                "city_id" => 306,
            ),
            array(
                "id" => 4352,
                "name" => "Kwadungan",
                "city_id" => 306,
            ),
            array(
                "id" => 4353,
                "name" => "Mantingan",
                "city_id" => 306,
            ),
            array(
                "id" => 4354,
                "name" => "Ngawi",
                "city_id" => 306,
            ),
            array(
                "id" => 4355,
                "name" => "Ngrambe",
                "city_id" => 306,
            ),
            array(
                "id" => 4356,
                "name" => "Padas",
                "city_id" => 306,
            ),
            array(
                "id" => 4357,
                "name" => "Pangkur",
                "city_id" => 306,
            ),
            array(
                "id" => 4358,
                "name" => "Paron",
                "city_id" => 306,
            ),
            array(
                "id" => 4359,
                "name" => "Pitu",
                "city_id" => 306,
            ),
            array(
                "id" => 4360,
                "name" => "Sine",
                "city_id" => 306,
            ),
            array(
                "id" => 4361,
                "name" => "Widodaren",
                "city_id" => 306,
            ),
            array(
                "id" => 4362,
                "name" => "Bawolato",
                "city_id" => 307,
            ),
            array(
                "id" => 4363,
                "name" => "Botomuzoi",
                "city_id" => 307,
            ),
            array(
                "id" => 4364,
                "name" => "Gido",
                "city_id" => 307,
            ),
            array(
                "id" => 4365,
                "name" => "Hili Serangkai (Hilisaranggu)",
                "city_id" => 307,
            ),
            array(
                "id" => 4366,
                "name" => "Hiliduho",
                "city_id" => 307,
            ),
            array(
                "id" => 4367,
                "name" => "Idano Gawo",
                "city_id" => 307,
            ),
            array(
                "id" => 4368,
                "name" => "Ma'u",
                "city_id" => 307,
            ),
            array(
                "id" => 4369,
                "name" => "Sogae Adu (Sogaeadu)",
                "city_id" => 307,
            ),
            array(
                "id" => 4370,
                "name" => "Somolo-Molo (Samolo)",
                "city_id" => 307,
            ),
            array(
                "id" => 4371,
                "name" => "Ulugawo",
                "city_id" => 307,
            ),
            array(
                "id" => 4372,
                "name" => "Lahomi (Gahori)",
                "city_id" => 308,
            ),
            array(
                "id" => 4373,
                "name" => "Lolofitu Moi",
                "city_id" => 308,
            ),
            array(
                "id" => 4374,
                "name" => "Mandrehe",
                "city_id" => 308,
            ),
            array(
                "id" => 4375,
                "name" => "Mandrehe Barat",
                "city_id" => 308,
            ),
            array(
                "id" => 4376,
                "name" => "Mandrehe Utara",
                "city_id" => 308,
            ),
            array(
                "id" => 4377,
                "name" => "Moro'o",
                "city_id" => 308,
            ),
            array(
                "id" => 4378,
                "name" => "Sirombu",
                "city_id" => 308,
            ),
            array(
                "id" => 4379,
                "name" => "Ulu Moro'o (Ulu Narwo)",
                "city_id" => 308,
            ),
            array(
                "id" => 4380,
                "name" => "Amandraya",
                "city_id" => 309,
            ),
            array(
                "id" => 4381,
                "name" => "Aramo",
                "city_id" => 309,
            ),
            array(
                "id" => 4382,
                "name" => "Boronadu",
                "city_id" => 309,
            ),
            array(
                "id" => 4383,
                "name" => "Fanayama",
                "city_id" => 309,
            ),
            array(
                "id" => 4384,
                "name" => "Gomo",
                "city_id" => 309,
            ),
            array(
                "id" => 4385,
                "name" => "Hibala",
                "city_id" => 309,
            ),
            array(
                "id" => 4386,
                "name" => "Hilimegai",
                "city_id" => 309,
            ),
            array(
                "id" => 4387,
                "name" => "Hilisalawa'ahe (Hilisalawaahe)",
                "city_id" => 309,
            ),
            array(
                "id" => 4388,
                "name" => "Huruna",
                "city_id" => 309,
            ),
            array(
                "id" => 4389,
                "name" => "Lahusa",
                "city_id" => 309,
            ),
            array(
                "id" => 4390,
                "name" => "Lolomatua",
                "city_id" => 309,
            ),
            array(
                "id" => 4391,
                "name" => "Lolowau",
                "city_id" => 309,
            ),
            array(
                "id" => 4392,
                "name" => "Maniamolo",
                "city_id" => 309,
            ),
            array(
                "id" => 4393,
                "name" => "Mazino",
                "city_id" => 309,
            ),
            array(
                "id" => 4394,
                "name" => "Mazo",
                "city_id" => 309,
            ),
            array(
                "id" => 4395,
                "name" => "O'o'u (Oou)",
                "city_id" => 309,
            ),
            array(
                "id" => 4396,
                "name" => "Onohazumba",
                "city_id" => 309,
            ),
            array(
                "id" => 4397,
                "name" => "Pulau-Pulau Batu",
                "city_id" => 309,
            ),
            array(
                "id" => 4398,
                "name" => "Pulau-Pulau Batu Barat",
                "city_id" => 309,
            ),
            array(
                "id" => 4399,
                "name" => "Pulau-Pulau Batu Timur",
                "city_id" => 309,
            ),
            array(
                "id" => 4400,
                "name" => "Pulau-Pulau Batu Utara",
                "city_id" => 309,
            ),
            array(
                "id" => 4401,
                "name" => "Sidua'ori",
                "city_id" => 309,
            ),
            array(
                "id" => 4402,
                "name" => "Simuk",
                "city_id" => 309,
            ),
            array(
                "id" => 4403,
                "name" => "Somambawa",
                "city_id" => 309,
            ),
            array(
                "id" => 4404,
                "name" => "Susua",
                "city_id" => 309,
            ),
            array(
                "id" => 4405,
                "name" => "Tanah Masa",
                "city_id" => 309,
            ),
            array(
                "id" => 4406,
                "name" => "Teluk Dalam",
                "city_id" => 309,
            ),
            array(
                "id" => 4407,
                "name" => "Toma",
                "city_id" => 309,
            ),
            array(
                "id" => 4408,
                "name" => "Ulunoyo",
                "city_id" => 309,
            ),
            array(
                "id" => 4409,
                "name" => "Ulususua",
                "city_id" => 309,
            ),
            array(
                "id" => 4410,
                "name" => "Umbunasi",
                "city_id" => 309,
            ),
            array(
                "id" => 4411,
                "name" => "Afulu",
                "city_id" => 310,
            ),
            array(
                "id" => 4412,
                "name" => "Alasa",
                "city_id" => 310,
            ),
            array(
                "id" => 4413,
                "name" => "Alasa Talumuzoi",
                "city_id" => 310,
            ),
            array(
                "id" => 4414,
                "name" => "Lahewa",
                "city_id" => 310,
            ),
            array(
                "id" => 4415,
                "name" => "Lahewa Timur",
                "city_id" => 310,
            ),
            array(
                "id" => 4416,
                "name" => "Lotu",
                "city_id" => 310,
            ),
            array(
                "id" => 4417,
                "name" => "Namohalu Esiwa",
                "city_id" => 310,
            ),
            array(
                "id" => 4418,
                "name" => "Sawo",
                "city_id" => 310,
            ),
            array(
                "id" => 4419,
                "name" => "Sitolu Ori",
                "city_id" => 310,
            ),
            array(
                "id" => 4420,
                "name" => "Tugala Oyo",
                "city_id" => 310,
            ),
            array(
                "id" => 4421,
                "name" => "Tuhemberua",
                "city_id" => 310,
            ),
            array(
                "id" => 4422,
                "name" => "Krayan",
                "city_id" => 311,
            ),
            array(
                "id" => 4423,
                "name" => "Krayan Selatan",
                "city_id" => 311,
            ),
            array(
                "id" => 4424,
                "name" => "Lumbis",
                "city_id" => 311,
            ),
            array(
                "id" => 4425,
                "name" => "Lumbis Ogong",
                "city_id" => 311,
            ),
            array(
                "id" => 4426,
                "name" => "Nunukan",
                "city_id" => 311,
            ),
            array(
                "id" => 4427,
                "name" => "Nunukan Selatan",
                "city_id" => 311,
            ),
            array(
                "id" => 4428,
                "name" => "Sebatik",
                "city_id" => 311,
            ),
            array(
                "id" => 4429,
                "name" => "Sebatik Barat",
                "city_id" => 311,
            ),
            array(
                "id" => 4430,
                "name" => "Sebatik Tengah",
                "city_id" => 311,
            ),
            array(
                "id" => 4431,
                "name" => "Sebatik Timur",
                "city_id" => 311,
            ),
            array(
                "id" => 4432,
                "name" => "Sebatik Utara",
                "city_id" => 311,
            ),
            array(
                "id" => 4433,
                "name" => "Sebuku",
                "city_id" => 311,
            ),
            array(
                "id" => 4434,
                "name" => "Sei Menggaris",
                "city_id" => 311,
            ),
            array(
                "id" => 4435,
                "name" => "Sembakung",
                "city_id" => 311,
            ),
            array(
                "id" => 4436,
                "name" => "Tulin Onsoi",
                "city_id" => 311,
            ),
            array(
                "id" => 4437,
                "name" => "Indralaya",
                "city_id" => 312,
            ),
            array(
                "id" => 4438,
                "name" => "Indralaya Selatan",
                "city_id" => 312,
            ),
            array(
                "id" => 4439,
                "name" => "Indralaya Utara",
                "city_id" => 312,
            ),
            array(
                "id" => 4440,
                "name" => "Kandis",
                "city_id" => 312,
            ),
            array(
                "id" => 4441,
                "name" => "Lubuk Keliat",
                "city_id" => 312,
            ),
            array(
                "id" => 4442,
                "name" => "Muara Kuang",
                "city_id" => 312,
            ),
            array(
                "id" => 4443,
                "name" => "Payaraman",
                "city_id" => 312,
            ),
            array(
                "id" => 4444,
                "name" => "Pemulutan",
                "city_id" => 312,
            ),
            array(
                "id" => 4445,
                "name" => "Pemulutan Barat",
                "city_id" => 312,
            ),
            array(
                "id" => 4446,
                "name" => "Pemulutan Selatan",
                "city_id" => 312,
            ),
            array(
                "id" => 4447,
                "name" => "Rambang Kuang",
                "city_id" => 312,
            ),
            array(
                "id" => 4448,
                "name" => "Rantau Alai",
                "city_id" => 312,
            ),
            array(
                "id" => 4449,
                "name" => "Rantau Panjang",
                "city_id" => 312,
            ),
            array(
                "id" => 4450,
                "name" => "Sungai Pinang",
                "city_id" => 312,
            ),
            array(
                "id" => 4451,
                "name" => "Tanjung Batu",
                "city_id" => 312,
            ),
            array(
                "id" => 4452,
                "name" => "Tanjung Raja",
                "city_id" => 312,
            ),
            array(
                "id" => 4453,
                "name" => "Air Sugihan",
                "city_id" => 313,
            ),
            array(
                "id" => 4454,
                "name" => "Cengal",
                "city_id" => 313,
            ),
            array(
                "id" => 4455,
                "name" => "Jejawi",
                "city_id" => 313,
            ),
            array(
                "id" => 4456,
                "name" => "Kayu Agung",
                "city_id" => 313,
            ),
            array(
                "id" => 4457,
                "name" => "Lempuing",
                "city_id" => 313,
            ),
            array(
                "id" => 4458,
                "name" => "Lempuing Jaya",
                "city_id" => 313,
            ),
            array(
                "id" => 4459,
                "name" => "Mesuji",
                "city_id" => 313,
            ),
            array(
                "id" => 4460,
                "name" => "Mesuji Makmur",
                "city_id" => 313,
            ),
            array(
                "id" => 4461,
                "name" => "Mesuji Raya",
                "city_id" => 313,
            ),
            array(
                "id" => 4462,
                "name" => "Pampangan",
                "city_id" => 313,
            ),
            array(
                "id" => 4463,
                "name" => "Pangkalan Lampam",
                "city_id" => 313,
            ),
            array(
                "id" => 4464,
                "name" => "Pedamaran",
                "city_id" => 313,
            ),
            array(
                "id" => 4465,
                "name" => "Pedamaran Timur",
                "city_id" => 313,
            ),
            array(
                "id" => 4466,
                "name" => "Sirah Pulau Padang",
                "city_id" => 313,
            ),
            array(
                "id" => 4467,
                "name" => "Sungai Menang",
                "city_id" => 313,
            ),
            array(
                "id" => 4468,
                "name" => "Tanjung Lubuk",
                "city_id" => 313,
            ),
            array(
                "id" => 4469,
                "name" => "Teluk Gelam",
                "city_id" => 313,
            ),
            array(
                "id" => 4470,
                "name" => "Tulung Selapan",
                "city_id" => 313,
            ),
            array(
                "id" => 4471,
                "name" => "Baturaja Barat",
                "city_id" => 314,
            ),
            array(
                "id" => 4472,
                "name" => "Baturaja Timur",
                "city_id" => 314,
            ),
            array(
                "id" => 4473,
                "name" => "Lengkiti",
                "city_id" => 314,
            ),
            array(
                "id" => 4474,
                "name" => "Lubuk Batang",
                "city_id" => 314,
            ),
            array(
                "id" => 4475,
                "name" => "Lubuk Raja",
                "city_id" => 314,
            ),
            array(
                "id" => 4476,
                "name" => "Muara Jaya",
                "city_id" => 314,
            ),
            array(
                "id" => 4477,
                "name" => "Pengandonan",
                "city_id" => 314,
            ),
            array(
                "id" => 4478,
                "name" => "Peninjauan",
                "city_id" => 314,
            ),
            array(
                "id" => 4479,
                "name" => "Semidang Aji",
                "city_id" => 314,
            ),
            array(
                "id" => 4480,
                "name" => "Sinar Peninjauan",
                "city_id" => 314,
            ),
            array(
                "id" => 4481,
                "name" => "Sosoh Buay Rayap",
                "city_id" => 314,
            ),
            array(
                "id" => 4482,
                "name" => "Ulu Ogan",
                "city_id" => 314,
            ),
            array(
                "id" => 4483,
                "name" => "Banding Agung",
                "city_id" => 315,
            ),
            array(
                "id" => 4484,
                "name" => "Buana Pemaca",
                "city_id" => 315,
            ),
            array(
                "id" => 4485,
                "name" => "Buay Pemaca",
                "city_id" => 315,
            ),
            array(
                "id" => 4486,
                "name" => "Buay Pematang Ribu Ranau Tengah",
                "city_id" => 315,
            ),
            array(
                "id" => 4487,
                "name" => "Buay Rawan",
                "city_id" => 315,
            ),
            array(
                "id" => 4488,
                "name" => "Buay Runjung",
                "city_id" => 315,
            ),
            array(
                "id" => 4489,
                "name" => "Buay Sandang Aji",
                "city_id" => 315,
            ),
            array(
                "id" => 4490,
                "name" => "Kisam Ilir",
                "city_id" => 315,
            ),
            array(
                "id" => 4491,
                "name" => "Kisam Tinggi",
                "city_id" => 315,
            ),
            array(
                "id" => 4492,
                "name" => "Mekakau Ilir",
                "city_id" => 315,
            ),
            array(
                "id" => 4493,
                "name" => "Muaradua",
                "city_id" => 315,
            ),
            array(
                "id" => 4494,
                "name" => "Muaradua Kisam",
                "city_id" => 315,
            ),
            array(
                "id" => 4495,
                "name" => "Pulau Beringin",
                "city_id" => 315,
            ),
            array(
                "id" => 4496,
                "name" => "Runjung Agung",
                "city_id" => 315,
            ),
            array(
                "id" => 4497,
                "name" => "Simpang",
                "city_id" => 315,
            ),
            array(
                "id" => 4498,
                "name" => "Sindang Danau",
                "city_id" => 315,
            ),
            array(
                "id" => 4499,
                "name" => "Sungai Are",
                "city_id" => 315,
            ),
            array(
                "id" => 4500,
                "name" => "Tiga Dihaji",
                "city_id" => 315,
            ),
            array(
                "id" => 4501,
                "name" => "Warkuk Ranau Selatan",
                "city_id" => 315,
            ),
            array(
                "id" => 4502,
                "name" => "Belitang",
                "city_id" => 316,
            ),
            array(
                "id" => 4503,
                "name" => "Belitang II",
                "city_id" => 316,
            ),
            array(
                "id" => 4504,
                "name" => "Belitang III",
                "city_id" => 316,
            ),
            array(
                "id" => 4505,
                "name" => "Belitang Jaya",
                "city_id" => 316,
            ),
            array(
                "id" => 4506,
                "name" => "Belitang Madang Raya",
                "city_id" => 316,
            ),
            array(
                "id" => 4507,
                "name" => "Belitang Mulya",
                "city_id" => 316,
            ),
            array(
                "id" => 4508,
                "name" => "Buay Madang",
                "city_id" => 316,
            ),
            array(
                "id" => 4509,
                "name" => "Buay Madang Timur",
                "city_id" => 316,
            ),
            array(
                "id" => 4510,
                "name" => "Buay Pemuka Bangsa Raja",
                "city_id" => 316,
            ),
            array(
                "id" => 4511,
                "name" => "Buay Pemuka Beliung / Peliung",
                "city_id" => 316,
            ),
            array(
                "id" => 4512,
                "name" => "Bunga Mayang",
                "city_id" => 316,
            ),
            array(
                "id" => 4513,
                "name" => "Cempaka",
                "city_id" => 316,
            ),
            array(
                "id" => 4514,
                "name" => "Jayapura",
                "city_id" => 316,
            ),
            array(
                "id" => 4515,
                "name" => "Madang Suku I",
                "city_id" => 316,
            ),
            array(
                "id" => 4516,
                "name" => "Madang Suku II",
                "city_id" => 316,
            ),
            array(
                "id" => 4517,
                "name" => "Madang Suku III",
                "city_id" => 316,
            ),
            array(
                "id" => 4518,
                "name" => "Martapura",
                "city_id" => 316,
            ),
            array(
                "id" => 4519,
                "name" => "Semendawai Barat",
                "city_id" => 316,
            ),
            array(
                "id" => 4520,
                "name" => "Semendawai Suku III",
                "city_id" => 316,
            ),
            array(
                "id" => 4521,
                "name" => "Semendawai Timur",
                "city_id" => 316,
            ),
            array(
                "id" => 4522,
                "name" => "Arjosari",
                "city_id" => 317,
            ),
            array(
                "id" => 4523,
                "name" => "Bandar",
                "city_id" => 317,
            ),
            array(
                "id" => 4524,
                "name" => "Donorojo",
                "city_id" => 317,
            ),
            array(
                "id" => 4525,
                "name" => "Kebon Agung",
                "city_id" => 317,
            ),
            array(
                "id" => 4526,
                "name" => "Nawangan",
                "city_id" => 317,
            ),
            array(
                "id" => 4527,
                "name" => "Ngadirojo",
                "city_id" => 317,
            ),
            array(
                "id" => 4528,
                "name" => "Pacitan",
                "city_id" => 317,
            ),
            array(
                "id" => 4529,
                "name" => "Pringkuku",
                "city_id" => 317,
            ),
            array(
                "id" => 4530,
                "name" => "Punung",
                "city_id" => 317,
            ),
            array(
                "id" => 4531,
                "name" => "Sudimoro",
                "city_id" => 317,
            ),
            array(
                "id" => 4532,
                "name" => "Tegalombo",
                "city_id" => 317,
            ),
            array(
                "id" => 4533,
                "name" => "Tulakan",
                "city_id" => 317,
            ),
            array(
                "id" => 4534,
                "name" => "Bungus Teluk Kabung",
                "city_id" => 318,
            ),
            array(
                "id" => 4535,
                "name" => "Koto Tangah",
                "city_id" => 318,
            ),
            array(
                "id" => 4536,
                "name" => "Kuranji",
                "city_id" => 318,
            ),
            array(
                "id" => 4537,
                "name" => "Lubuk Begalung",
                "city_id" => 318,
            ),
            array(
                "id" => 4538,
                "name" => "Lubuk Kilangan",
                "city_id" => 318,
            ),
            array(
                "id" => 4539,
                "name" => "Nanggalo",
                "city_id" => 318,
            ),
            array(
                "id" => 4540,
                "name" => "Padang Barat",
                "city_id" => 318,
            ),
            array(
                "id" => 4541,
                "name" => "Padang Selatan",
                "city_id" => 318,
            ),
            array(
                "id" => 4542,
                "name" => "Padang Timur",
                "city_id" => 318,
            ),
            array(
                "id" => 4543,
                "name" => "Padang Utara",
                "city_id" => 318,
            ),
            array(
                "id" => 4544,
                "name" => "Pauh",
                "city_id" => 318,
            ),
            array(
                "id" => 4545,
                "name" => "Aek Nabara Barumun",
                "city_id" => 319,
            ),
            array(
                "id" => 4546,
                "name" => "Barumun",
                "city_id" => 319,
            ),
            array(
                "id" => 4547,
                "name" => "Barumun Selatan",
                "city_id" => 319,
            ),
            array(
                "id" => 4548,
                "name" => "Barumun Tengah",
                "city_id" => 319,
            ),
            array(
                "id" => 4549,
                "name" => "Batang Lubu Sutam",
                "city_id" => 319,
            ),
            array(
                "id" => 4550,
                "name" => "Huristak",
                "city_id" => 319,
            ),
            array(
                "id" => 4551,
                "name" => "Huta Raja Tinggi",
                "city_id" => 319,
            ),
            array(
                "id" => 4552,
                "name" => "Lubuk Barumun",
                "city_id" => 319,
            ),
            array(
                "id" => 4553,
                "name" => "Sihapas Barumun",
                "city_id" => 319,
            ),
            array(
                "id" => 4554,
                "name" => "Sosa",
                "city_id" => 319,
            ),
            array(
                "id" => 4555,
                "name" => "Sosopan",
                "city_id" => 319,
            ),
            array(
                "id" => 4556,
                "name" => "Ulu Barumun",
                "city_id" => 319,
            ),
            array(
                "id" => 4557,
                "name" => "Batang Onang",
                "city_id" => 320,
            ),
            array(
                "id" => 4558,
                "name" => "Dolok",
                "city_id" => 320,
            ),
            array(
                "id" => 4559,
                "name" => "Dolok Sigompulon",
                "city_id" => 320,
            ),
            array(
                "id" => 4560,
                "name" => "Halongonan",
                "city_id" => 320,
            ),
            array(
                "id" => 4561,
                "name" => "Hulu Sihapas",
                "city_id" => 320,
            ),
            array(
                "id" => 4562,
                "name" => "Padang Bolak",
                "city_id" => 320,
            ),
            array(
                "id" => 4563,
                "name" => "Padang Bolak Julu",
                "city_id" => 320,
            ),
            array(
                "id" => 4564,
                "name" => "Portibi",
                "city_id" => 320,
            ),
            array(
                "id" => 4565,
                "name" => "Simangambat",
                "city_id" => 320,
            ),
            array(
                "id" => 4566,
                "name" => "Padang Panjang Barat",
                "city_id" => 321,
            ),
            array(
                "id" => 4567,
                "name" => "Padang Panjang Timur",
                "city_id" => 321,
            ),
            array(
                "id" => 4568,
                "name" => "2 X 11 Enam Lingkung",
                "city_id" => 322,
            ),
            array(
                "id" => 4569,
                "name" => "2 X 11 Kayu Tanam",
                "city_id" => 322,
            ),
            array(
                "id" => 4570,
                "name" => "Batang Anai",
                "city_id" => 322,
            ),
            array(
                "id" => 4571,
                "name" => "Batang Gasan",
                "city_id" => 322,
            ),
            array(
                "id" => 4572,
                "name" => "Enam Lingkung",
                "city_id" => 322,
            ),
            array(
                "id" => 4573,
                "name" => "IV Koto Aur Malintang",
                "city_id" => 322,
            ),
            array(
                "id" => 4574,
                "name" => "Lubuk Alung",
                "city_id" => 322,
            ),
            array(
                "id" => 4575,
                "name" => "Nan Sabaris",
                "city_id" => 322,
            ),
            array(
                "id" => 4576,
                "name" => "Padang Sago",
                "city_id" => 322,
            ),
            array(
                "id" => 4577,
                "name" => "Patamuan",
                "city_id" => 322,
            ),
            array(
                "id" => 4578,
                "name" => "Sintuk/Sintuak Toboh Gadang",
                "city_id" => 322,
            ),
            array(
                "id" => 4579,
                "name" => "Sungai Geringging/Garingging",
                "city_id" => 322,
            ),
            array(
                "id" => 4580,
                "name" => "Sungai Limau",
                "city_id" => 322,
            ),
            array(
                "id" => 4581,
                "name" => "Ulakan Tapakih/Tapakis",
                "city_id" => 322,
            ),
            array(
                "id" => 4582,
                "name" => "V Koto Kampung Dalam",
                "city_id" => 322,
            ),
            array(
                "id" => 4583,
                "name" => "V Koto Timur",
                "city_id" => 322,
            ),
            array(
                "id" => 4584,
                "name" => "VII Koto Sungai Sarik",
                "city_id" => 322,
            ),
            array(
                "id" => 4585,
                "name" => "Padang Sidempuan Angkola Julu",
                "city_id" => 323,
            ),
            array(
                "id" => 4586,
                "name" => "Padang Sidempuan Batunadua",
                "city_id" => 323,
            ),
            array(
                "id" => 4587,
                "name" => "Padang Sidempuan Hutaimbaru",
                "city_id" => 323,
            ),
            array(
                "id" => 4588,
                "name" => "Padang Sidempuan Selatan",
                "city_id" => 323,
            ),
            array(
                "id" => 4589,
                "name" => "Padang Sidempuan Tenggara",
                "city_id" => 323,
            ),
            array(
                "id" => 4590,
                "name" => "Padang Sidempuan Utara (Padangsidimpuan)",
                "city_id" => 323,
            ),
            array(
                "id" => 4591,
                "name" => "Dempo Selatan",
                "city_id" => 324,
            ),
            array(
                "id" => 4592,
                "name" => "Dempo Tengah",
                "city_id" => 324,
            ),
            array(
                "id" => 4593,
                "name" => "Dempo Utara",
                "city_id" => 324,
            ),
            array(
                "id" => 4594,
                "name" => "Pagar Alam Selatan",
                "city_id" => 324,
            ),
            array(
                "id" => 4595,
                "name" => "Pagar Alam Utara",
                "city_id" => 324,
            ),
            array(
                "id" => 4596,
                "name" => "Kerajaan",
                "city_id" => 325,
            ),
            array(
                "id" => 4597,
                "name" => "Pagindar",
                "city_id" => 325,
            ),
            array(
                "id" => 4598,
                "name" => "Pergetteng Getteng Sengkut",
                "city_id" => 325,
            ),
            array(
                "id" => 4599,
                "name" => "Salak",
                "city_id" => 325,
            ),
            array(
                "id" => 4600,
                "name" => "Siempat Rube",
                "city_id" => 325,
            ),
            array(
                "id" => 4601,
                "name" => "Sitellu Tali Urang Jehe",
                "city_id" => 325,
            ),
            array(
                "id" => 4602,
                "name" => "Sitellu Tali Urang Julu",
                "city_id" => 325,
            ),
            array(
                "id" => 4603,
                "name" => "Tinada",
                "city_id" => 325,
            ),
            array(
                "id" => 4604,
                "name" => "Bukit Batu",
                "city_id" => 326,
            ),
            array(
                "id" => 4605,
                "name" => "Jekan Raya",
                "city_id" => 326,
            ),
            array(
                "id" => 4606,
                "name" => "Pahandut",
                "city_id" => 326,
            ),
            array(
                "id" => 4607,
                "name" => "Rakumpit",
                "city_id" => 326,
            ),
            array(
                "id" => 4608,
                "name" => "Sebangau",
                "city_id" => 326,
            ),
            array(
                "id" => 4609,
                "name" => "Alang-Alang Lebar",
                "city_id" => 327,
            ),
            array(
                "id" => 4610,
                "name" => "Bukit Kecil",
                "city_id" => 327,
            ),
            array(
                "id" => 4611,
                "name" => "Gandus",
                "city_id" => 327,
            ),
            array(
                "id" => 4612,
                "name" => "Ilir Barat I",
                "city_id" => 327,
            ),
            array(
                "id" => 4613,
                "name" => "Ilir Barat II",
                "city_id" => 327,
            ),
            array(
                "id" => 4614,
                "name" => "Ilir Timur I",
                "city_id" => 327,
            ),
            array(
                "id" => 4615,
                "name" => "Ilir Timur II",
                "city_id" => 327,
            ),
            array(
                "id" => 4616,
                "name" => "Kalidoni",
                "city_id" => 327,
            ),
            array(
                "id" => 4617,
                "name" => "Kemuning",
                "city_id" => 327,
            ),
            array(
                "id" => 4618,
                "name" => "Kertapati",
                "city_id" => 327,
            ),
            array(
                "id" => 4619,
                "name" => "Plaju",
                "city_id" => 327,
            ),
            array(
                "id" => 4620,
                "name" => "Sako",
                "city_id" => 327,
            ),
            array(
                "id" => 4621,
                "name" => "Seberang Ulu I",
                "city_id" => 327,
            ),
            array(
                "id" => 4622,
                "name" => "Seberang Ulu II",
                "city_id" => 327,
            ),
            array(
                "id" => 4623,
                "name" => "Sematang Borang",
                "city_id" => 327,
            ),
            array(
                "id" => 4624,
                "name" => "Sukarami",
                "city_id" => 327,
            ),
            array(
                "id" => 4625,
                "name" => "Bara",
                "city_id" => 328,
            ),
            array(
                "id" => 4626,
                "name" => "Mungkajang",
                "city_id" => 328,
            ),
            array(
                "id" => 4627,
                "name" => "Sendana",
                "city_id" => 328,
            ),
            array(
                "id" => 4628,
                "name" => "Telluwanua",
                "city_id" => 328,
            ),
            array(
                "id" => 4629,
                "name" => "Wara",
                "city_id" => 328,
            ),
            array(
                "id" => 4630,
                "name" => "Wara Barat",
                "city_id" => 328,
            ),
            array(
                "id" => 4631,
                "name" => "Wara Selatan",
                "city_id" => 328,
            ),
            array(
                "id" => 4632,
                "name" => "Wara Timur",
                "city_id" => 328,
            ),
            array(
                "id" => 4633,
                "name" => "Wara Utara",
                "city_id" => 328,
            ),
            array(
                "id" => 4634,
                "name" => "Mantikulore",
                "city_id" => 329,
            ),
            array(
                "id" => 4635,
                "name" => "Palu Barat",
                "city_id" => 329,
            ),
            array(
                "id" => 4636,
                "name" => "Palu Selatan",
                "city_id" => 329,
            ),
            array(
                "id" => 4637,
                "name" => "Palu Timur",
                "city_id" => 329,
            ),
            array(
                "id" => 4638,
                "name" => "Palu Utara",
                "city_id" => 329,
            ),
            array(
                "id" => 4639,
                "name" => "Tatanga",
                "city_id" => 329,
            ),
            array(
                "id" => 4640,
                "name" => "Tawaeli",
                "city_id" => 329,
            ),
            array(
                "id" => 4641,
                "name" => "Ulujadi",
                "city_id" => 329,
            ),
            array(
                "id" => 4642,
                "name" => "Batumarmar",
                "city_id" => 330,
            ),
            array(
                "id" => 4643,
                "name" => "Galis",
                "city_id" => 330,
            ),
            array(
                "id" => 4644,
                "name" => "Kadur",
                "city_id" => 330,
            ),
            array(
                "id" => 4645,
                "name" => "Larangan",
                "city_id" => 330,
            ),
            array(
                "id" => 4646,
                "name" => "Pademawu",
                "city_id" => 330,
            ),
            array(
                "id" => 4647,
                "name" => "Pakong",
                "city_id" => 330,
            ),
            array(
                "id" => 4648,
                "name" => "Palenga'an",
                "city_id" => 330,
            ),
            array(
                "id" => 4649,
                "name" => "Pamekasan",
                "city_id" => 330,
            ),
            array(
                "id" => 4650,
                "name" => "Pasean",
                "city_id" => 330,
            ),
            array(
                "id" => 4651,
                "name" => "Pegantenan",
                "city_id" => 330,
            ),
            array(
                "id" => 4652,
                "name" => "Proppo",
                "city_id" => 330,
            ),
            array(
                "id" => 4653,
                "name" => "Tlanakan",
                "city_id" => 330,
            ),
            array(
                "id" => 4654,
                "name" => "Waru",
                "city_id" => 330,
            ),
            array(
                "id" => 4655,
                "name" => "Angsana",
                "city_id" => 331,
            ),
            array(
                "id" => 4656,
                "name" => "Banjar",
                "city_id" => 331,
            ),
            array(
                "id" => 4657,
                "name" => "Bojong",
                "city_id" => 331,
            ),
            array(
                "id" => 4658,
                "name" => "Cadasari",
                "city_id" => 331,
            ),
            array(
                "id" => 4659,
                "name" => "Carita",
                "city_id" => 331,
            ),
            array(
                "id" => 4660,
                "name" => "Cibaliung",
                "city_id" => 331,
            ),
            array(
                "id" => 4661,
                "name" => "Cibitung",
                "city_id" => 331,
            ),
            array(
                "id" => 4662,
                "name" => "Cigeulis",
                "city_id" => 331,
            ),
            array(
                "id" => 4663,
                "name" => "Cikeudal (Cikedal)",
                "city_id" => 331,
            ),
            array(
                "id" => 4664,
                "name" => "Cikeusik",
                "city_id" => 331,
            ),
            array(
                "id" => 4665,
                "name" => "Cimanggu",
                "city_id" => 331,
            ),
            array(
                "id" => 4666,
                "name" => "Cimanuk",
                "city_id" => 331,
            ),
            array(
                "id" => 4667,
                "name" => "Cipeucang",
                "city_id" => 331,
            ),
            array(
                "id" => 4668,
                "name" => "Cisata",
                "city_id" => 331,
            ),
            array(
                "id" => 4669,
                "name" => "Jiput",
                "city_id" => 331,
            ),
            array(
                "id" => 4670,
                "name" => "Kaduhejo",
                "city_id" => 331,
            ),
            array(
                "id" => 4671,
                "name" => "Karang Tanjung",
                "city_id" => 331,
            ),
            array(
                "id" => 4672,
                "name" => "Koroncong",
                "city_id" => 331,
            ),
            array(
                "id" => 4673,
                "name" => "Labuan",
                "city_id" => 331,
            ),
            array(
                "id" => 4674,
                "name" => "Majasari",
                "city_id" => 331,
            ),
            array(
                "id" => 4675,
                "name" => "Mandalawangi",
                "city_id" => 331,
            ),
            array(
                "id" => 4676,
                "name" => "Mekarjaya",
                "city_id" => 331,
            ),
            array(
                "id" => 4677,
                "name" => "Menes",
                "city_id" => 331,
            ),
            array(
                "id" => 4678,
                "name" => "Munjul",
                "city_id" => 331,
            ),
            array(
                "id" => 4679,
                "name" => "Pagelaran",
                "city_id" => 331,
            ),
            array(
                "id" => 4680,
                "name" => "Pandeglang",
                "city_id" => 331,
            ),
            array(
                "id" => 4681,
                "name" => "Panimbang",
                "city_id" => 331,
            ),
            array(
                "id" => 4682,
                "name" => "Patia",
                "city_id" => 331,
            ),
            array(
                "id" => 4683,
                "name" => "Picung",
                "city_id" => 331,
            ),
            array(
                "id" => 4684,
                "name" => "Pulosari",
                "city_id" => 331,
            ),
            array(
                "id" => 4685,
                "name" => "Saketi",
                "city_id" => 331,
            ),
            array(
                "id" => 4686,
                "name" => "Sindangresmi",
                "city_id" => 331,
            ),
            array(
                "id" => 4687,
                "name" => "Sobang",
                "city_id" => 331,
            ),
            array(
                "id" => 4688,
                "name" => "Sukaresmi",
                "city_id" => 331,
            ),
            array(
                "id" => 4689,
                "name" => "Sumur",
                "city_id" => 331,
            ),
            array(
                "id" => 4690,
                "name" => "Cigugur",
                "city_id" => 332,
            ),
            array(
                "id" => 4691,
                "name" => "Cijulang",
                "city_id" => 332,
            ),
            array(
                "id" => 4692,
                "name" => "Cimerak",
                "city_id" => 332,
            ),
            array(
                "id" => 4693,
                "name" => "Kalipucang",
                "city_id" => 332,
            ),
            array(
                "id" => 4694,
                "name" => "Langkaplancar",
                "city_id" => 332,
            ),
            array(
                "id" => 4695,
                "name" => "Mangunjaya",
                "city_id" => 332,
            ),
            array(
                "id" => 4696,
                "name" => "Padaherang",
                "city_id" => 332,
            ),
            array(
                "id" => 4697,
                "name" => "Pangandaran",
                "city_id" => 332,
            ),
            array(
                "id" => 4698,
                "name" => "Parigi",
                "city_id" => 332,
            ),
            array(
                "id" => 4699,
                "name" => "Sidamulih",
                "city_id" => 332,
            ),
            array(
                "id" => 4700,
                "name" => "Balocci",
                "city_id" => 333,
            ),
            array(
                "id" => 4701,
                "name" => "Bungoro",
                "city_id" => 333,
            ),
            array(
                "id" => 4702,
                "name" => "Labakkang",
                "city_id" => 333,
            ),
            array(
                "id" => 4703,
                "name" => "Liukang Kalmas (Kalukuang Masalima)",
                "city_id" => 333,
            ),
            array(
                "id" => 4704,
                "name" => "Liukang Tangaya",
                "city_id" => 333,
            ),
            array(
                "id" => 4705,
                "name" => "Liukang Tupabbiring",
                "city_id" => 333,
            ),
            array(
                "id" => 4706,
                "name" => "Liukang Tupabbiring Utara",
                "city_id" => 333,
            ),
            array(
                "id" => 4707,
                "name" => "Mandalle",
                "city_id" => 333,
            ),
            array(
                "id" => 4708,
                "name" => "Marang (Ma Rang)",
                "city_id" => 333,
            ),
            array(
                "id" => 4709,
                "name" => "Minasa Tene",
                "city_id" => 333,
            ),
            array(
                "id" => 4710,
                "name" => "Pangkajene",
                "city_id" => 333,
            ),
            array(
                "id" => 4711,
                "name" => "Segeri",
                "city_id" => 333,
            ),
            array(
                "id" => 4712,
                "name" => "Tondong Tallasa",
                "city_id" => 333,
            ),
            array(
                "id" => 4713,
                "name" => "Bukit Intan",
                "city_id" => 334,
            ),
            array(
                "id" => 4714,
                "name" => "Gabek",
                "city_id" => 334,
            ),
            array(
                "id" => 4715,
                "name" => "Gerunggang",
                "city_id" => 334,
            ),
            array(
                "id" => 4716,
                "name" => "Girimaya",
                "city_id" => 334,
            ),
            array(
                "id" => 4717,
                "name" => "Pangkal Balam",
                "city_id" => 334,
            ),
            array(
                "id" => 4718,
                "name" => "Rangkui",
                "city_id" => 334,
            ),
            array(
                "id" => 4719,
                "name" => "Taman Sari",
                "city_id" => 334,
            ),
            array(
                "id" => 4720,
                "name" => "Aradide",
                "city_id" => 335,
            ),
            array(
                "id" => 4721,
                "name" => "Bibida",
                "city_id" => 335,
            ),
            array(
                "id" => 4722,
                "name" => "Bogobaida",
                "city_id" => 335,
            ),
            array(
                "id" => 4723,
                "name" => "Dumadama",
                "city_id" => 335,
            ),
            array(
                "id" => 4724,
                "name" => "Ekadide",
                "city_id" => 335,
            ),
            array(
                "id" => 4725,
                "name" => "Kebo",
                "city_id" => 335,
            ),
            array(
                "id" => 4726,
                "name" => "Paniai Barat",
                "city_id" => 335,
            ),
            array(
                "id" => 4727,
                "name" => "Paniai Timur",
                "city_id" => 335,
            ),
            array(
                "id" => 4728,
                "name" => "Siriwo",
                "city_id" => 335,
            ),
            array(
                "id" => 4729,
                "name" => "Yatamo",
                "city_id" => 335,
            ),
            array(
                "id" => 4730,
                "name" => "Bacukiki",
                "city_id" => 336,
            ),
            array(
                "id" => 4731,
                "name" => "Bacukiki Barat",
                "city_id" => 336,
            ),
            array(
                "id" => 4732,
                "name" => "Soreang",
                "city_id" => 336,
            ),
            array(
                "id" => 4733,
                "name" => "Ujung",
                "city_id" => 336,
            ),
            array(
                "id" => 4734,
                "name" => "Pariaman Selatan",
                "city_id" => 337,
            ),
            array(
                "id" => 4735,
                "name" => "Pariaman Tengah",
                "city_id" => 337,
            ),
            array(
                "id" => 4736,
                "name" => "Pariaman Timur",
                "city_id" => 337,
            ),
            array(
                "id" => 4737,
                "name" => "Pariaman Utara",
                "city_id" => 337,
            ),
            array(
                "id" => 4738,
                "name" => "Ampibabo",
                "city_id" => 338,
            ),
            array(
                "id" => 4739,
                "name" => "Balinggi",
                "city_id" => 338,
            ),
            array(
                "id" => 4740,
                "name" => "Bolano",
                "city_id" => 338,
            ),
            array(
                "id" => 4741,
                "name" => "Bolano Lambunu/Lambulu",
                "city_id" => 338,
            ),
            array(
                "id" => 4742,
                "name" => "Kasimbar",
                "city_id" => 338,
            ),
            array(
                "id" => 4743,
                "name" => "Mepanga",
                "city_id" => 338,
            ),
            array(
                "id" => 4744,
                "name" => "Moutong",
                "city_id" => 338,
            ),
            array(
                "id" => 4745,
                "name" => "Ongka Malino",
                "city_id" => 338,
            ),
            array(
                "id" => 4746,
                "name" => "Palasa",
                "city_id" => 338,
            ),
            array(
                "id" => 4747,
                "name" => "Parigi",
                "city_id" => 338,
            ),
            array(
                "id" => 4748,
                "name" => "Parigi Barat",
                "city_id" => 338,
            ),
            array(
                "id" => 4749,
                "name" => "Parigi Selatan",
                "city_id" => 338,
            ),
            array(
                "id" => 4750,
                "name" => "Parigi Tengah",
                "city_id" => 338,
            ),
            array(
                "id" => 4751,
                "name" => "Parigi Utara",
                "city_id" => 338,
            ),
            array(
                "id" => 4752,
                "name" => "Sausu",
                "city_id" => 338,
            ),
            array(
                "id" => 4753,
                "name" => "Siniu",
                "city_id" => 338,
            ),
            array(
                "id" => 4754,
                "name" => "Taopa",
                "city_id" => 338,
            ),
            array(
                "id" => 4755,
                "name" => "Tinombo",
                "city_id" => 338,
            ),
            array(
                "id" => 4756,
                "name" => "Tinombo Selatan",
                "city_id" => 338,
            ),
            array(
                "id" => 4757,
                "name" => "Tomini",
                "city_id" => 338,
            ),
            array(
                "id" => 4758,
                "name" => "Toribulu",
                "city_id" => 338,
            ),
            array(
                "id" => 4759,
                "name" => "Torue",
                "city_id" => 338,
            ),
            array(
                "id" => 4760,
                "name" => "Bonjol",
                "city_id" => 339,
            ),
            array(
                "id" => 4761,
                "name" => "Duo Koto (II Koto)",
                "city_id" => 339,
            ),
            array(
                "id" => 4762,
                "name" => "Lubuk Sikaping",
                "city_id" => 339,
            ),
            array(
                "id" => 4763,
                "name" => "Mapat Tunggul",
                "city_id" => 339,
            ),
            array(
                "id" => 4764,
                "name" => "Mapat Tunggul Selatan",
                "city_id" => 339,
            ),
            array(
                "id" => 4765,
                "name" => "Padang Gelugur",
                "city_id" => 339,
            ),
            array(
                "id" => 4766,
                "name" => "Panti",
                "city_id" => 339,
            ),
            array(
                "id" => 4767,
                "name" => "Rao",
                "city_id" => 339,
            ),
            array(
                "id" => 4768,
                "name" => "Rao Selatan",
                "city_id" => 339,
            ),
            array(
                "id" => 4769,
                "name" => "Rao Utara",
                "city_id" => 339,
            ),
            array(
                "id" => 4770,
                "name" => "Simpang Alahan Mati",
                "city_id" => 339,
            ),
            array(
                "id" => 4771,
                "name" => "Tigo Nagari (III Nagari)",
                "city_id" => 339,
            ),
            array(
                "id" => 4772,
                "name" => "Gunung Tuleh",
                "city_id" => 340,
            ),
            array(
                "id" => 4773,
                "name" => "Kinali",
                "city_id" => 340,
            ),
            array(
                "id" => 4774,
                "name" => "Koto Balingka",
                "city_id" => 340,
            ),
            array(
                "id" => 4775,
                "name" => "Lembah Melintang",
                "city_id" => 340,
            ),
            array(
                "id" => 4776,
                "name" => "Luhak Nan Duo",
                "city_id" => 340,
            ),
            array(
                "id" => 4777,
                "name" => "Pasaman",
                "city_id" => 340,
            ),
            array(
                "id" => 4778,
                "name" => "Ranah Batahan",
                "city_id" => 340,
            ),
            array(
                "id" => 4779,
                "name" => "Sasak Ranah Pasisir/Pesisie",
                "city_id" => 340,
            ),
            array(
                "id" => 4780,
                "name" => "Sei Beremas",
                "city_id" => 340,
            ),
            array(
                "id" => 4781,
                "name" => "Sungai Aur",
                "city_id" => 340,
            ),
            array(
                "id" => 4782,
                "name" => "Talamau",
                "city_id" => 340,
            ),
            array(
                "id" => 4783,
                "name" => "Batu Engau",
                "city_id" => 341,
            ),
            array(
                "id" => 4784,
                "name" => "Batu Sopang",
                "city_id" => 341,
            ),
            array(
                "id" => 4785,
                "name" => "Kuaro",
                "city_id" => 341,
            ),
            array(
                "id" => 4786,
                "name" => "Long Ikis",
                "city_id" => 341,
            ),
            array(
                "id" => 4787,
                "name" => "Long Kali",
                "city_id" => 341,
            ),
            array(
                "id" => 4788,
                "name" => "Muara Komam",
                "city_id" => 341,
            ),
            array(
                "id" => 4789,
                "name" => "Muara Samu",
                "city_id" => 341,
            ),
            array(
                "id" => 4790,
                "name" => "Pasir Belengkong",
                "city_id" => 341,
            ),
            array(
                "id" => 4791,
                "name" => "Tanah Grogot",
                "city_id" => 341,
            ),
            array(
                "id" => 4792,
                "name" => "Tanjung Harapan",
                "city_id" => 341,
            ),
            array(
                "id" => 4793,
                "name" => "Bangil",
                "city_id" => 342,
            ),
            array(
                "id" => 4794,
                "name" => "Beji",
                "city_id" => 342,
            ),
            array(
                "id" => 4795,
                "name" => "Gempol",
                "city_id" => 342,
            ),
            array(
                "id" => 4796,
                "name" => "Gondang Wetan",
                "city_id" => 342,
            ),
            array(
                "id" => 4797,
                "name" => "Grati",
                "city_id" => 342,
            ),
            array(
                "id" => 4798,
                "name" => "Kejayan",
                "city_id" => 342,
            ),
            array(
                "id" => 4799,
                "name" => "Kraton",
                "city_id" => 342,
            ),
            array(
                "id" => 4800,
                "name" => "Lekok",
                "city_id" => 342,
            ),
            array(
                "id" => 4801,
                "name" => "Lumbang",
                "city_id" => 342,
            ),
            array(
                "id" => 4802,
                "name" => "Nguling",
                "city_id" => 342,
            ),
            array(
                "id" => 4803,
                "name" => "Pandaan",
                "city_id" => 342,
            ),
            array(
                "id" => 4804,
                "name" => "Pasrepan",
                "city_id" => 342,
            ),
            array(
                "id" => 4805,
                "name" => "Pohjentrek",
                "city_id" => 342,
            ),
            array(
                "id" => 4806,
                "name" => "Prigen",
                "city_id" => 342,
            ),
            array(
                "id" => 4807,
                "name" => "Purwodadi",
                "city_id" => 342,
            ),
            array(
                "id" => 4808,
                "name" => "Purwosari",
                "city_id" => 342,
            ),
            array(
                "id" => 4809,
                "name" => "Puspo",
                "city_id" => 342,
            ),
            array(
                "id" => 4810,
                "name" => "Rejoso",
                "city_id" => 342,
            ),
            array(
                "id" => 4811,
                "name" => "Rembang",
                "city_id" => 342,
            ),
            array(
                "id" => 4812,
                "name" => "Sukorejo",
                "city_id" => 342,
            ),
            array(
                "id" => 4813,
                "name" => "Tosari",
                "city_id" => 342,
            ),
            array(
                "id" => 4814,
                "name" => "Tutur",
                "city_id" => 342,
            ),
            array(
                "id" => 4815,
                "name" => "Winongan",
                "city_id" => 342,
            ),
            array(
                "id" => 4816,
                "name" => "Wonorejo",
                "city_id" => 342,
            ),
            array(
                "id" => 4817,
                "name" => "Bugul Kidul",
                "city_id" => 343,
            ),
            array(
                "id" => 4818,
                "name" => "Gadingrejo",
                "city_id" => 343,
            ),
            array(
                "id" => 4819,
                "name" => "Panggungrejo",
                "city_id" => 343,
            ),
            array(
                "id" => 4820,
                "name" => "Purworejo",
                "city_id" => 343,
            ),
            array(
                "id" => 4821,
                "name" => "Batangan",
                "city_id" => 344,
            ),
            array(
                "id" => 4822,
                "name" => "Cluwak",
                "city_id" => 344,
            ),
            array(
                "id" => 4823,
                "name" => "Dukuhseti",
                "city_id" => 344,
            ),
            array(
                "id" => 4824,
                "name" => "Gabus",
                "city_id" => 344,
            ),
            array(
                "id" => 4825,
                "name" => "Gembong",
                "city_id" => 344,
            ),
            array(
                "id" => 4826,
                "name" => "Gunungwungkal",
                "city_id" => 344,
            ),
            array(
                "id" => 4827,
                "name" => "Jaken",
                "city_id" => 344,
            ),
            array(
                "id" => 4828,
                "name" => "Jakenan",
                "city_id" => 344,
            ),
            array(
                "id" => 4829,
                "name" => "Juwana",
                "city_id" => 344,
            ),
            array(
                "id" => 4830,
                "name" => "Kayen",
                "city_id" => 344,
            ),
            array(
                "id" => 4831,
                "name" => "Margorejo",
                "city_id" => 344,
            ),
            array(
                "id" => 4832,
                "name" => "Margoyoso",
                "city_id" => 344,
            ),
            array(
                "id" => 4833,
                "name" => "Pati",
                "city_id" => 344,
            ),
            array(
                "id" => 4834,
                "name" => "Pucakwangi",
                "city_id" => 344,
            ),
            array(
                "id" => 4835,
                "name" => "Sukolilo",
                "city_id" => 344,
            ),
            array(
                "id" => 4836,
                "name" => "Tambakromo",
                "city_id" => 344,
            ),
            array(
                "id" => 4837,
                "name" => "Tayu",
                "city_id" => 344,
            ),
            array(
                "id" => 4838,
                "name" => "Tlogowungu",
                "city_id" => 344,
            ),
            array(
                "id" => 4839,
                "name" => "Trangkil",
                "city_id" => 344,
            ),
            array(
                "id" => 4840,
                "name" => "Wedarijaksa",
                "city_id" => 344,
            ),
            array(
                "id" => 4841,
                "name" => "Winong",
                "city_id" => 344,
            ),
            array(
                "id" => 4842,
                "name" => "Lamposi Tigo Nagari",
                "city_id" => 345,
            ),
            array(
                "id" => 4843,
                "name" => "Payakumbuh Barat",
                "city_id" => 345,
            ),
            array(
                "id" => 4844,
                "name" => "Payakumbuh Selatan",
                "city_id" => 345,
            ),
            array(
                "id" => 4845,
                "name" => "Payakumbuh Timur",
                "city_id" => 345,
            ),
            array(
                "id" => 4846,
                "name" => "Payakumbuh Utara",
                "city_id" => 345,
            ),
            array(
                "id" => 4847,
                "name" => "Anggi",
                "city_id" => 346,
            ),
            array(
                "id" => 4848,
                "name" => "Anggi Gida",
                "city_id" => 346,
            ),
            array(
                "id" => 4849,
                "name" => "Catubouw",
                "city_id" => 346,
            ),
            array(
                "id" => 4850,
                "name" => "Didohu",
                "city_id" => 346,
            ),
            array(
                "id" => 4851,
                "name" => "Hingk",
                "city_id" => 346,
            ),
            array(
                "id" => 4852,
                "name" => "Membey",
                "city_id" => 346,
            ),
            array(
                "id" => 4853,
                "name" => "Menyambouw (Minyambouw)",
                "city_id" => 346,
            ),
            array(
                "id" => 4854,
                "name" => "Sururey",
                "city_id" => 346,
            ),
            array(
                "id" => 4855,
                "name" => "Taige",
                "city_id" => 346,
            ),
            array(
                "id" => 4856,
                "name" => "Testega",
                "city_id" => 346,
            ),
            array(
                "id" => 4857,
                "name" => "Aboy",
                "city_id" => 347,
            ),
            array(
                "id" => 4858,
                "name" => "Alemsom",
                "city_id" => 347,
            ),
            array(
                "id" => 4859,
                "name" => "Awinbon",
                "city_id" => 347,
            ),
            array(
                "id" => 4860,
                "name" => "Batani",
                "city_id" => 347,
            ),
            array(
                "id" => 4861,
                "name" => "Batom",
                "city_id" => 347,
            ),
            array(
                "id" => 4862,
                "name" => "Bime",
                "city_id" => 347,
            ),
            array(
                "id" => 4863,
                "name" => "Borme",
                "city_id" => 347,
            ),
            array(
                "id" => 4864,
                "name" => "Eipumek",
                "city_id" => 347,
            ),
            array(
                "id" => 4865,
                "name" => "Iwur (Okiwur)",
                "city_id" => 347,
            ),
            array(
                "id" => 4866,
                "name" => "Jetfa",
                "city_id" => 347,
            ),
            array(
                "id" => 4867,
                "name" => "Kalomdol",
                "city_id" => 347,
            ),
            array(
                "id" => 4868,
                "name" => "Kawor",
                "city_id" => 347,
            ),
            array(
                "id" => 4869,
                "name" => "Kiwirok",
                "city_id" => 347,
            ),
            array(
                "id" => 4870,
                "name" => "Kiwirok Timur",
                "city_id" => 347,
            ),
            array(
                "id" => 4871,
                "name" => "Mofinop",
                "city_id" => 347,
            ),
            array(
                "id" => 4872,
                "name" => "Murkim",
                "city_id" => 347,
            ),
            array(
                "id" => 4873,
                "name" => "Nongme",
                "city_id" => 347,
            ),
            array(
                "id" => 4874,
                "name" => "Ok Aom",
                "city_id" => 347,
            ),
            array(
                "id" => 4875,
                "name" => "Okbab",
                "city_id" => 347,
            ),
            array(
                "id" => 4876,
                "name" => "Okbape",
                "city_id" => 347,
            ),
            array(
                "id" => 4877,
                "name" => "Okbemtau",
                "city_id" => 347,
            ),
            array(
                "id" => 4878,
                "name" => "Okbibab",
                "city_id" => 347,
            ),
            array(
                "id" => 4879,
                "name" => "Okhika",
                "city_id" => 347,
            ),
            array(
                "id" => 4880,
                "name" => "Oklip",
                "city_id" => 347,
            ),
            array(
                "id" => 4881,
                "name" => "Oksamol",
                "city_id" => 347,
            ),
            array(
                "id" => 4882,
                "name" => "Oksebang",
                "city_id" => 347,
            ),
            array(
                "id" => 4883,
                "name" => "Oksibil",
                "city_id" => 347,
            ),
            array(
                "id" => 4884,
                "name" => "Oksop",
                "city_id" => 347,
            ),
            array(
                "id" => 4885,
                "name" => "Pamek",
                "city_id" => 347,
            ),
            array(
                "id" => 4886,
                "name" => "Pepera",
                "city_id" => 347,
            ),
            array(
                "id" => 4887,
                "name" => "Serambakon",
                "city_id" => 347,
            ),
            array(
                "id" => 4888,
                "name" => "Tarup",
                "city_id" => 347,
            ),
            array(
                "id" => 4889,
                "name" => "Teiraplu",
                "city_id" => 347,
            ),
            array(
                "id" => 4890,
                "name" => "Weime",
                "city_id" => 347,
            ),
            array(
                "id" => 4891,
                "name" => "Bojong",
                "city_id" => 348,
            ),
            array(
                "id" => 4892,
                "name" => "Buaran",
                "city_id" => 348,
            ),
            array(
                "id" => 4893,
                "name" => "Doro",
                "city_id" => 348,
            ),
            array(
                "id" => 4894,
                "name" => "Kajen",
                "city_id" => 348,
            ),
            array(
                "id" => 4895,
                "name" => "Kandangserang",
                "city_id" => 348,
            ),
            array(
                "id" => 4896,
                "name" => "Karanganyar",
                "city_id" => 348,
            ),
            array(
                "id" => 4897,
                "name" => "Karangdadap",
                "city_id" => 348,
            ),
            array(
                "id" => 4898,
                "name" => "Kedungwuni",
                "city_id" => 348,
            ),
            array(
                "id" => 4899,
                "name" => "Kesesi",
                "city_id" => 348,
            ),
            array(
                "id" => 4900,
                "name" => "Lebakbarang",
                "city_id" => 348,
            ),
            array(
                "id" => 4901,
                "name" => "Paninggaran",
                "city_id" => 348,
            ),
            array(
                "id" => 4902,
                "name" => "Petungkriono/Petungkriyono",
                "city_id" => 348,
            ),
            array(
                "id" => 4903,
                "name" => "Siwalan",
                "city_id" => 348,
            ),
            array(
                "id" => 4904,
                "name" => "Sragi",
                "city_id" => 348,
            ),
            array(
                "id" => 4905,
                "name" => "Talun",
                "city_id" => 348,
            ),
            array(
                "id" => 4906,
                "name" => "Tirto",
                "city_id" => 348,
            ),
            array(
                "id" => 4907,
                "name" => "Wiradesa",
                "city_id" => 348,
            ),
            array(
                "id" => 4908,
                "name" => "Wonokerto",
                "city_id" => 348,
            ),
            array(
                "id" => 4909,
                "name" => "Wonopringgo",
                "city_id" => 348,
            ),
            array(
                "id" => 4910,
                "name" => "Pekalongan Barat",
                "city_id" => 349,
            ),
            array(
                "id" => 4911,
                "name" => "Pekalongan Selatan",
                "city_id" => 349,
            ),
            array(
                "id" => 4912,
                "name" => "Pekalongan Timur",
                "city_id" => 349,
            ),
            array(
                "id" => 4913,
                "name" => "Pekalongan Utara",
                "city_id" => 349,
            ),
            array(
                "id" => 4914,
                "name" => "Bukit Raya",
                "city_id" => 350,
            ),
            array(
                "id" => 4915,
                "name" => "Lima Puluh",
                "city_id" => 350,
            ),
            array(
                "id" => 4916,
                "name" => "Marpoyan Damai",
                "city_id" => 350,
            ),
            array(
                "id" => 4917,
                "name" => "Payung Sekaki",
                "city_id" => 350,
            ),
            array(
                "id" => 4918,
                "name" => "Pekanbaru Kota",
                "city_id" => 350,
            ),
            array(
                "id" => 4919,
                "name" => "Rumbai",
                "city_id" => 350,
            ),
            array(
                "id" => 4920,
                "name" => "Rumbai Pesisir",
                "city_id" => 350,
            ),
            array(
                "id" => 4921,
                "name" => "Sail",
                "city_id" => 350,
            ),
            array(
                "id" => 4922,
                "name" => "Senapelan",
                "city_id" => 350,
            ),
            array(
                "id" => 4923,
                "name" => "Sukajadi",
                "city_id" => 350,
            ),
            array(
                "id" => 4924,
                "name" => "Tampan",
                "city_id" => 350,
            ),
            array(
                "id" => 4925,
                "name" => "Tenayan Raya",
                "city_id" => 350,
            ),
            array(
                "id" => 4926,
                "name" => "Bandar Petalangan",
                "city_id" => 351,
            ),
            array(
                "id" => 4927,
                "name" => "Bandar Sei Kijang",
                "city_id" => 351,
            ),
            array(
                "id" => 4928,
                "name" => "Bunut",
                "city_id" => 351,
            ),
            array(
                "id" => 4929,
                "name" => "Kerumutan",
                "city_id" => 351,
            ),
            array(
                "id" => 4930,
                "name" => "Kuala Kampar",
                "city_id" => 351,
            ),
            array(
                "id" => 4931,
                "name" => "Langgam",
                "city_id" => 351,
            ),
            array(
                "id" => 4932,
                "name" => "Pangkalan Kerinci",
                "city_id" => 351,
            ),
            array(
                "id" => 4933,
                "name" => "Pangkalan Kuras",
                "city_id" => 351,
            ),
            array(
                "id" => 4934,
                "name" => "Pangkalan Lesung",
                "city_id" => 351,
            ),
            array(
                "id" => 4935,
                "name" => "Pelalawan",
                "city_id" => 351,
            ),
            array(
                "id" => 4936,
                "name" => "Teluk Meranti",
                "city_id" => 351,
            ),
            array(
                "id" => 4937,
                "name" => "Ukui",
                "city_id" => 351,
            ),
            array(
                "id" => 4938,
                "name" => "Ampelgading",
                "city_id" => 352,
            ),
            array(
                "id" => 4939,
                "name" => "Bantarbolang",
                "city_id" => 352,
            ),
            array(
                "id" => 4940,
                "name" => "Belik",
                "city_id" => 352,
            ),
            array(
                "id" => 4941,
                "name" => "Bodeh",
                "city_id" => 352,
            ),
            array(
                "id" => 4942,
                "name" => "Comal",
                "city_id" => 352,
            ),
            array(
                "id" => 4943,
                "name" => "Moga",
                "city_id" => 352,
            ),
            array(
                "id" => 4944,
                "name" => "Pemalang",
                "city_id" => 352,
            ),
            array(
                "id" => 4945,
                "name" => "Petarukan",
                "city_id" => 352,
            ),
            array(
                "id" => 4946,
                "name" => "Pulosari",
                "city_id" => 352,
            ),
            array(
                "id" => 4947,
                "name" => "Randudongkal",
                "city_id" => 352,
            ),
            array(
                "id" => 4948,
                "name" => "Taman",
                "city_id" => 352,
            ),
            array(
                "id" => 4949,
                "name" => "Ulujami",
                "city_id" => 352,
            ),
            array(
                "id" => 4950,
                "name" => "Warungpring",
                "city_id" => 352,
            ),
            array(
                "id" => 4951,
                "name" => "Watukumpul",
                "city_id" => 352,
            ),
            array(
                "id" => 4952,
                "name" => "Siantar Barat",
                "city_id" => 353,
            ),
            array(
                "id" => 4953,
                "name" => "Siantar Marihat",
                "city_id" => 353,
            ),
            array(
                "id" => 4954,
                "name" => "Siantar Marimbun",
                "city_id" => 353,
            ),
            array(
                "id" => 4955,
                "name" => "Siantar Martoba",
                "city_id" => 353,
            ),
            array(
                "id" => 4956,
                "name" => "Siantar Selatan",
                "city_id" => 353,
            ),
            array(
                "id" => 4957,
                "name" => "Siantar Sitalasari",
                "city_id" => 353,
            ),
            array(
                "id" => 4958,
                "name" => "Siantar Timur",
                "city_id" => 353,
            ),
            array(
                "id" => 4959,
                "name" => "Siantar Utara",
                "city_id" => 353,
            ),
            array(
                "id" => 4960,
                "name" => "Babulu",
                "city_id" => 354,
            ),
            array(
                "id" => 4961,
                "name" => "Penajam",
                "city_id" => 354,
            ),
            array(
                "id" => 4962,
                "name" => "Sepaku",
                "city_id" => 354,
            ),
            array(
                "id" => 4963,
                "name" => "Waru",
                "city_id" => 354,
            ),
            array(
                "id" => 4964,
                "name" => "Gedong Tataan (Gedung Tataan)",
                "city_id" => 355,
            ),
            array(
                "id" => 4965,
                "name" => "Kedondong",
                "city_id" => 355,
            ),
            array(
                "id" => 4966,
                "name" => "Marga Punduh",
                "city_id" => 355,
            ),
            array(
                "id" => 4967,
                "name" => "Negeri Katon",
                "city_id" => 355,
            ),
            array(
                "id" => 4968,
                "name" => "Padang Cermin",
                "city_id" => 355,
            ),
            array(
                "id" => 4969,
                "name" => "Punduh Pidada (Pedada)",
                "city_id" => 355,
            ),
            array(
                "id" => 4970,
                "name" => "Tegineneng",
                "city_id" => 355,
            ),
            array(
                "id" => 4971,
                "name" => "Way Khilau",
                "city_id" => 355,
            ),
            array(
                "id" => 4972,
                "name" => "Way Lima",
                "city_id" => 355,
            ),
            array(
                "id" => 4973,
                "name" => "Bengkunat",
                "city_id" => 356,
            ),
            array(
                "id" => 4974,
                "name" => "Bengkunat Belimbing",
                "city_id" => 356,
            ),
            array(
                "id" => 4975,
                "name" => "Karya Penggawa",
                "city_id" => 356,
            ),
            array(
                "id" => 4976,
                "name" => "Krui Selatan",
                "city_id" => 356,
            ),
            array(
                "id" => 4977,
                "name" => "Lemong",
                "city_id" => 356,
            ),
            array(
                "id" => 4978,
                "name" => "Ngambur",
                "city_id" => 356,
            ),
            array(
                "id" => 4979,
                "name" => "Pesisir Selatan",
                "city_id" => 356,
            ),
            array(
                "id" => 4980,
                "name" => "Pesisir Tengah",
                "city_id" => 356,
            ),
            array(
                "id" => 4981,
                "name" => "Pesisir Utara",
                "city_id" => 356,
            ),
            array(
                "id" => 4982,
                "name" => "Pulau Pisang",
                "city_id" => 356,
            ),
            array(
                "id" => 4983,
                "name" => "Way Krui",
                "city_id" => 356,
            ),
            array(
                "id" => 4984,
                "name" => "Airpura",
                "city_id" => 357,
            ),
            array(
                "id" => 4985,
                "name" => "Basa Ampek Balai Tapan",
                "city_id" => 357,
            ),
            array(
                "id" => 4986,
                "name" => "Batang Kapas",
                "city_id" => 357,
            ),
            array(
                "id" => 4987,
                "name" => "Bayang",
                "city_id" => 357,
            ),
            array(
                "id" => 4988,
                "name" => "IV Jurai",
                "city_id" => 357,
            ),
            array(
                "id" => 4989,
                "name" => "IV Nagari Bayang Utara",
                "city_id" => 357,
            ),
            array(
                "id" => 4990,
                "name" => "Koto XI Tarusan",
                "city_id" => 357,
            ),
            array(
                "id" => 4991,
                "name" => "Lengayang",
                "city_id" => 357,
            ),
            array(
                "id" => 4992,
                "name" => "Linggo Sari Baganti",
                "city_id" => 357,
            ),
            array(
                "id" => 4993,
                "name" => "Lunang",
                "city_id" => 357,
            ),
            array(
                "id" => 4994,
                "name" => "Pancung Soal",
                "city_id" => 357,
            ),
            array(
                "id" => 4995,
                "name" => "Ranah Ampek Hulu Tapan",
                "city_id" => 357,
            ),
            array(
                "id" => 4996,
                "name" => "Ranah Pesisir",
                "city_id" => 357,
            ),
            array(
                "id" => 4997,
                "name" => "Silaut",
                "city_id" => 357,
            ),
            array(
                "id" => 4998,
                "name" => "Sutera",
                "city_id" => 357,
            ),
            array(
                "id" => 4999,
                "name" => "Batee",
                "city_id" => 358,
            ),
            array(
                "id" => 5000,
                "name" => "Delima",
                "city_id" => 358,
            ),
            array(
                "id" => 5001,
                "name" => "Geumpang",
                "city_id" => 358,
            ),
            array(
                "id" => 5002,
                "name" => "Glumpang Baro",
                "city_id" => 358,
            ),
            array(
                "id" => 5003,
                "name" => "Glumpang Tiga (Geulumpang Tiga)",
                "city_id" => 358,
            ),
            array(
                "id" => 5004,
                "name" => "Grong Grong",
                "city_id" => 358,
            ),
            array(
                "id" => 5005,
                "name" => "Indrajaya",
                "city_id" => 358,
            ),
            array(
                "id" => 5006,
                "name" => "Kembang Tanjong (Tanjung)",
                "city_id" => 358,
            ),
            array(
                "id" => 5007,
                "name" => "Keumala",
                "city_id" => 358,
            ),
            array(
                "id" => 5008,
                "name" => "Kota Sigli",
                "city_id" => 358,
            ),
            array(
                "id" => 5009,
                "name" => "Mane",
                "city_id" => 358,
            ),
            array(
                "id" => 5010,
                "name" => "Mila",
                "city_id" => 358,
            ),
            array(
                "id" => 5011,
                "name" => "Muara Tiga",
                "city_id" => 358,
            ),
            array(
                "id" => 5012,
                "name" => "Mutiara",
                "city_id" => 358,
            ),
            array(
                "id" => 5013,
                "name" => "Mutiara Timur",
                "city_id" => 358,
            ),
            array(
                "id" => 5014,
                "name" => "Padang Tiji",
                "city_id" => 358,
            ),
            array(
                "id" => 5015,
                "name" => "Peukan Baro",
                "city_id" => 358,
            ),
            array(
                "id" => 5016,
                "name" => "Pidie",
                "city_id" => 358,
            ),
            array(
                "id" => 5017,
                "name" => "Sakti",
                "city_id" => 358,
            ),
            array(
                "id" => 5018,
                "name" => "Simpang Tiga",
                "city_id" => 358,
            ),
            array(
                "id" => 5019,
                "name" => "Tangse",
                "city_id" => 358,
            ),
            array(
                "id" => 5020,
                "name" => "Tiro/Truseb",
                "city_id" => 358,
            ),
            array(
                "id" => 5021,
                "name" => "Titeue",
                "city_id" => 358,
            ),
            array(
                "id" => 5022,
                "name" => "Bandar Baru",
                "city_id" => 359,
            ),
            array(
                "id" => 5023,
                "name" => "Bandar Dua",
                "city_id" => 359,
            ),
            array(
                "id" => 5024,
                "name" => "Jangka Buya",
                "city_id" => 359,
            ),
            array(
                "id" => 5025,
                "name" => "Meurah Dua",
                "city_id" => 359,
            ),
            array(
                "id" => 5026,
                "name" => "Meureudu",
                "city_id" => 359,
            ),
            array(
                "id" => 5027,
                "name" => "Panteraja",
                "city_id" => 359,
            ),
            array(
                "id" => 5028,
                "name" => "Trienggadeng",
                "city_id" => 359,
            ),
            array(
                "id" => 5029,
                "name" => "Ulim",
                "city_id" => 359,
            ),
            array(
                "id" => 5030,
                "name" => "Batulappa",
                "city_id" => 360,
            ),
            array(
                "id" => 5031,
                "name" => "Cempa",
                "city_id" => 360,
            ),
            array(
                "id" => 5032,
                "name" => "Duampanua",
                "city_id" => 360,
            ),
            array(
                "id" => 5033,
                "name" => "Lanrisang",
                "city_id" => 360,
            ),
            array(
                "id" => 5034,
                "name" => "Lembang",
                "city_id" => 360,
            ),
            array(
                "id" => 5035,
                "name" => "Mattiro Bulu",
                "city_id" => 360,
            ),
            array(
                "id" => 5036,
                "name" => "Mattiro Sompe",
                "city_id" => 360,
            ),
            array(
                "id" => 5037,
                "name" => "Paleteang",
                "city_id" => 360,
            ),
            array(
                "id" => 5038,
                "name" => "Patampanua",
                "city_id" => 360,
            ),
            array(
                "id" => 5039,
                "name" => "Suppa",
                "city_id" => 360,
            ),
            array(
                "id" => 5040,
                "name" => "Tiroang",
                "city_id" => 360,
            ),
            array(
                "id" => 5041,
                "name" => "Watang Sawitto",
                "city_id" => 360,
            ),
            array(
                "id" => 5042,
                "name" => "Buntulia",
                "city_id" => 361,
            ),
            array(
                "id" => 5043,
                "name" => "Dengilo",
                "city_id" => 361,
            ),
            array(
                "id" => 5044,
                "name" => "Duhiadaa",
                "city_id" => 361,
            ),
            array(
                "id" => 5045,
                "name" => "Lemito",
                "city_id" => 361,
            ),
            array(
                "id" => 5046,
                "name" => "Marisa",
                "city_id" => 361,
            ),
            array(
                "id" => 5047,
                "name" => "Paguat",
                "city_id" => 361,
            ),
            array(
                "id" => 5048,
                "name" => "Patilanggio",
                "city_id" => 361,
            ),
            array(
                "id" => 5049,
                "name" => "Popayato",
                "city_id" => 361,
            ),
            array(
                "id" => 5050,
                "name" => "Popayato Barat",
                "city_id" => 361,
            ),
            array(
                "id" => 5051,
                "name" => "Popayato Timur",
                "city_id" => 361,
            ),
            array(
                "id" => 5052,
                "name" => "Randangan",
                "city_id" => 361,
            ),
            array(
                "id" => 5053,
                "name" => "Taluditi (Taluduti)",
                "city_id" => 361,
            ),
            array(
                "id" => 5054,
                "name" => "Wanggarasi",
                "city_id" => 361,
            ),
            array(
                "id" => 5055,
                "name" => "Alu (Allu)",
                "city_id" => 362,
            ),
            array(
                "id" => 5056,
                "name" => "Anreapi",
                "city_id" => 362,
            ),
            array(
                "id" => 5057,
                "name" => "Balanipa",
                "city_id" => 362,
            ),
            array(
                "id" => 5058,
                "name" => "Binuang",
                "city_id" => 362,
            ),
            array(
                "id" => 5059,
                "name" => "Bulo",
                "city_id" => 362,
            ),
            array(
                "id" => 5060,
                "name" => "Campalagian",
                "city_id" => 362,
            ),
            array(
                "id" => 5061,
                "name" => "Limboro",
                "city_id" => 362,
            ),
            array(
                "id" => 5062,
                "name" => "Luyo",
                "city_id" => 362,
            ),
            array(
                "id" => 5063,
                "name" => "Mapilli",
                "city_id" => 362,
            ),
            array(
                "id" => 5064,
                "name" => "Matakali",
                "city_id" => 362,
            ),
            array(
                "id" => 5065,
                "name" => "Matangnga",
                "city_id" => 362,
            ),
            array(
                "id" => 5066,
                "name" => "Polewali",
                "city_id" => 362,
            ),
            array(
                "id" => 5067,
                "name" => "Tapango",
                "city_id" => 362,
            ),
            array(
                "id" => 5068,
                "name" => "Tinambung",
                "city_id" => 362,
            ),
            array(
                "id" => 5069,
                "name" => "Tubbi Taramanu (Tutar/Tutallu)",
                "city_id" => 362,
            ),
            array(
                "id" => 5070,
                "name" => "Wonomulyo",
                "city_id" => 362,
            ),
            array(
                "id" => 5071,
                "name" => "Babadan",
                "city_id" => 363,
            ),
            array(
                "id" => 5072,
                "name" => "Badegan",
                "city_id" => 363,
            ),
            array(
                "id" => 5073,
                "name" => "Balong",
                "city_id" => 363,
            ),
            array(
                "id" => 5074,
                "name" => "Bungkal",
                "city_id" => 363,
            ),
            array(
                "id" => 5075,
                "name" => "Jambon",
                "city_id" => 363,
            ),
            array(
                "id" => 5076,
                "name" => "Jenangan",
                "city_id" => 363,
            ),
            array(
                "id" => 5077,
                "name" => "Jetis",
                "city_id" => 363,
            ),
            array(
                "id" => 5078,
                "name" => "Kauman",
                "city_id" => 363,
            ),
            array(
                "id" => 5079,
                "name" => "Mlarak",
                "city_id" => 363,
            ),
            array(
                "id" => 5080,
                "name" => "Ngebel",
                "city_id" => 363,
            ),
            array(
                "id" => 5081,
                "name" => "Ngrayun",
                "city_id" => 363,
            ),
            array(
                "id" => 5082,
                "name" => "Ponorogo",
                "city_id" => 363,
            ),
            array(
                "id" => 5083,
                "name" => "Pudak",
                "city_id" => 363,
            ),
            array(
                "id" => 5084,
                "name" => "Pulung",
                "city_id" => 363,
            ),
            array(
                "id" => 5085,
                "name" => "Sambit",
                "city_id" => 363,
            ),
            array(
                "id" => 5086,
                "name" => "Sampung",
                "city_id" => 363,
            ),
            array(
                "id" => 5087,
                "name" => "Sawoo",
                "city_id" => 363,
            ),
            array(
                "id" => 5088,
                "name" => "Siman",
                "city_id" => 363,
            ),
            array(
                "id" => 5089,
                "name" => "Slahung",
                "city_id" => 363,
            ),
            array(
                "id" => 5090,
                "name" => "Sooko",
                "city_id" => 363,
            ),
            array(
                "id" => 5091,
                "name" => "Sukorejo",
                "city_id" => 363,
            ),
            array(
                "id" => 5092,
                "name" => "Anjongan",
                "city_id" => 364,
            ),
            array(
                "id" => 5093,
                "name" => "Mempawah Hilir",
                "city_id" => 364,
            ),
            array(
                "id" => 5094,
                "name" => "Mempawah Timur",
                "city_id" => 364,
            ),
            array(
                "id" => 5095,
                "name" => "Sadaniang",
                "city_id" => 364,
            ),
            array(
                "id" => 5096,
                "name" => "Segedong",
                "city_id" => 364,
            ),
            array(
                "id" => 5097,
                "name" => "Sei/Sungai Kunyit",
                "city_id" => 364,
            ),
            array(
                "id" => 5098,
                "name" => "Sei/Sungai Pinyuh",
                "city_id" => 364,
            ),
            array(
                "id" => 5099,
                "name" => "Siantan",
                "city_id" => 364,
            ),
            array(
                "id" => 5100,
                "name" => "Toho",
                "city_id" => 364,
            ),
            array(
                "id" => 5101,
                "name" => "Pontianak Barat",
                "city_id" => 365,
            ),
            array(
                "id" => 5102,
                "name" => "Pontianak Kota",
                "city_id" => 365,
            ),
            array(
                "id" => 5103,
                "name" => "Pontianak Selatan",
                "city_id" => 365,
            ),
            array(
                "id" => 5104,
                "name" => "Pontianak Tenggara",
                "city_id" => 365,
            ),
            array(
                "id" => 5105,
                "name" => "Pontianak Timur",
                "city_id" => 365,
            ),
            array(
                "id" => 5106,
                "name" => "Pontianak Utara",
                "city_id" => 365,
            ),
            array(
                "id" => 5107,
                "name" => "Lage",
                "city_id" => 366,
            ),
            array(
                "id" => 5108,
                "name" => "Lore Barat",
                "city_id" => 366,
            ),
            array(
                "id" => 5109,
                "name" => "Lore Piore",
                "city_id" => 366,
            ),
            array(
                "id" => 5110,
                "name" => "Lore Selatan",
                "city_id" => 366,
            ),
            array(
                "id" => 5111,
                "name" => "Lore Tengah",
                "city_id" => 366,
            ),
            array(
                "id" => 5112,
                "name" => "Lore Timur",
                "city_id" => 366,
            ),
            array(
                "id" => 5113,
                "name" => "Lore Utara",
                "city_id" => 366,
            ),
            array(
                "id" => 5114,
                "name" => "Pamona Barat",
                "city_id" => 366,
            ),
            array(
                "id" => 5115,
                "name" => "Pamona Puselemba",
                "city_id" => 366,
            ),
            array(
                "id" => 5116,
                "name" => "Pamona Selatan",
                "city_id" => 366,
            ),
            array(
                "id" => 5117,
                "name" => "Pamona Tenggara",
                "city_id" => 366,
            ),
            array(
                "id" => 5118,
                "name" => "Pamona Timur",
                "city_id" => 366,
            ),
            array(
                "id" => 5119,
                "name" => "Pamona Utara",
                "city_id" => 366,
            ),
            array(
                "id" => 5120,
                "name" => "Poso Kota",
                "city_id" => 366,
            ),
            array(
                "id" => 5121,
                "name" => "Poso Kota Selatan",
                "city_id" => 366,
            ),
            array(
                "id" => 5122,
                "name" => "Poso Kota Utara",
                "city_id" => 366,
            ),
            array(
                "id" => 5123,
                "name" => "Poso Pesisir",
                "city_id" => 366,
            ),
            array(
                "id" => 5124,
                "name" => "Poso Pesisir Selatan",
                "city_id" => 366,
            ),
            array(
                "id" => 5125,
                "name" => "Poso Pesisir Utara",
                "city_id" => 366,
            ),
            array(
                "id" => 5126,
                "name" => "Cambai",
                "city_id" => 367,
            ),
            array(
                "id" => 5127,
                "name" => "Prabumulih Barat",
                "city_id" => 367,
            ),
            array(
                "id" => 5128,
                "name" => "Prabumulih Selatan",
                "city_id" => 367,
            ),
            array(
                "id" => 5129,
                "name" => "Prabumulih Timur",
                "city_id" => 367,
            ),
            array(
                "id" => 5130,
                "name" => "Prabumulih Utara",
                "city_id" => 367,
            ),
            array(
                "id" => 5131,
                "name" => "Rambang Kapak Tengah",
                "city_id" => 367,
            ),
            array(
                "id" => 5132,
                "name" => "Adi Luwih",
                "city_id" => 368,
            ),
            array(
                "id" => 5133,
                "name" => "Ambarawa",
                "city_id" => 368,
            ),
            array(
                "id" => 5134,
                "name" => "Banyumas",
                "city_id" => 368,
            ),
            array(
                "id" => 5135,
                "name" => "Gading Rejo",
                "city_id" => 368,
            ),
            array(
                "id" => 5136,
                "name" => "Pagelaran",
                "city_id" => 368,
            ),
            array(
                "id" => 5137,
                "name" => "Pagelaran Utara",
                "city_id" => 368,
            ),
            array(
                "id" => 5138,
                "name" => "Pardasuka",
                "city_id" => 368,
            ),
            array(
                "id" => 5139,
                "name" => "Pringsewu",
                "city_id" => 368,
            ),
            array(
                "id" => 5140,
                "name" => "Sukoharjo",
                "city_id" => 368,
            ),
            array(
                "id" => 5141,
                "name" => "Bantaran",
                "city_id" => 369,
            ),
            array(
                "id" => 5142,
                "name" => "Banyu Anyar",
                "city_id" => 369,
            ),
            array(
                "id" => 5143,
                "name" => "Besuk",
                "city_id" => 369,
            ),
            array(
                "id" => 5144,
                "name" => "Dringu",
                "city_id" => 369,
            ),
            array(
                "id" => 5145,
                "name" => "Gading",
                "city_id" => 369,
            ),
            array(
                "id" => 5146,
                "name" => "Gending",
                "city_id" => 369,
            ),
            array(
                "id" => 5147,
                "name" => "Kota Anyar",
                "city_id" => 369,
            ),
            array(
                "id" => 5148,
                "name" => "Kraksaan",
                "city_id" => 369,
            ),
            array(
                "id" => 5149,
                "name" => "Krejengan",
                "city_id" => 369,
            ),
            array(
                "id" => 5150,
                "name" => "Krucil",
                "city_id" => 369,
            ),
            array(
                "id" => 5151,
                "name" => "Kuripan",
                "city_id" => 369,
            ),
            array(
                "id" => 5152,
                "name" => "Leces",
                "city_id" => 369,
            ),
            array(
                "id" => 5153,
                "name" => "Lumbang",
                "city_id" => 369,
            ),
            array(
                "id" => 5154,
                "name" => "Maron",
                "city_id" => 369,
            ),
            array(
                "id" => 5155,
                "name" => "Paiton",
                "city_id" => 369,
            ),
            array(
                "id" => 5156,
                "name" => "Pajarakan",
                "city_id" => 369,
            ),
            array(
                "id" => 5157,
                "name" => "Pakuniran",
                "city_id" => 369,
            ),
            array(
                "id" => 5158,
                "name" => "Sukapura",
                "city_id" => 369,
            ),
            array(
                "id" => 5159,
                "name" => "Sumber",
                "city_id" => 369,
            ),
            array(
                "id" => 5160,
                "name" => "Sumberasih",
                "city_id" => 369,
            ),
            array(
                "id" => 5161,
                "name" => "Tegal Siwalan",
                "city_id" => 369,
            ),
            array(
                "id" => 5162,
                "name" => "Tiris",
                "city_id" => 369,
            ),
            array(
                "id" => 5163,
                "name" => "Tongas",
                "city_id" => 369,
            ),
            array(
                "id" => 5164,
                "name" => "Wonomerto",
                "city_id" => 369,
            ),
            array(
                "id" => 5165,
                "name" => "Kademangan",
                "city_id" => 370,
            ),
            array(
                "id" => 5166,
                "name" => "Kanigaran",
                "city_id" => 370,
            ),
            array(
                "id" => 5167,
                "name" => "Kedopok (Kedopak)",
                "city_id" => 370,
            ),
            array(
                "id" => 5168,
                "name" => "Mayangan",
                "city_id" => 370,
            ),
            array(
                "id" => 5169,
                "name" => "Wonoasih",
                "city_id" => 370,
            ),
            array(
                "id" => 5170,
                "name" => "Banama Tingang",
                "city_id" => 371,
            ),
            array(
                "id" => 5171,
                "name" => "Jabiren Raya",
                "city_id" => 371,
            ),
            array(
                "id" => 5172,
                "name" => "Kahayan Hilir",
                "city_id" => 371,
            ),
            array(
                "id" => 5173,
                "name" => "Kahayan Kuala",
                "city_id" => 371,
            ),
            array(
                "id" => 5174,
                "name" => "Kahayan Tengah",
                "city_id" => 371,
            ),
            array(
                "id" => 5175,
                "name" => "Maliku",
                "city_id" => 371,
            ),
            array(
                "id" => 5176,
                "name" => "Pandih Batu",
                "city_id" => 371,
            ),
            array(
                "id" => 5177,
                "name" => "Sebangau Kuala",
                "city_id" => 371,
            ),
            array(
                "id" => 5178,
                "name" => "Morotai Jaya",
                "city_id" => 372,
            ),
            array(
                "id" => 5179,
                "name" => "Morotai Selatan",
                "city_id" => 372,
            ),
            array(
                "id" => 5180,
                "name" => "Morotai Selatan Barat",
                "city_id" => 372,
            ),
            array(
                "id" => 5181,
                "name" => "Morotai Timur",
                "city_id" => 372,
            ),
            array(
                "id" => 5182,
                "name" => "Morotai Utara",
                "city_id" => 372,
            ),
            array(
                "id" => 5183,
                "name" => "Agadugume",
                "city_id" => 373,
            ),
            array(
                "id" => 5184,
                "name" => "Beoga",
                "city_id" => 373,
            ),
            array(
                "id" => 5185,
                "name" => "Doufu",
                "city_id" => 373,
            ),
            array(
                "id" => 5186,
                "name" => "Gome",
                "city_id" => 373,
            ),
            array(
                "id" => 5187,
                "name" => "Ilaga",
                "city_id" => 373,
            ),
            array(
                "id" => 5188,
                "name" => "Pogoma",
                "city_id" => 373,
            ),
            array(
                "id" => 5189,
                "name" => "Sinak",
                "city_id" => 373,
            ),
            array(
                "id" => 5190,
                "name" => "Wangbe",
                "city_id" => 373,
            ),
            array(
                "id" => 5191,
                "name" => "Fawi",
                "city_id" => 374,
            ),
            array(
                "id" => 5192,
                "name" => "Ilu",
                "city_id" => 374,
            ),
            array(
                "id" => 5193,
                "name" => "Jigonikme",
                "city_id" => 374,
            ),
            array(
                "id" => 5194,
                "name" => "Mewoluk (Mewulok)",
                "city_id" => 374,
            ),
            array(
                "id" => 5195,
                "name" => "Mulia",
                "city_id" => 374,
            ),
            array(
                "id" => 5196,
                "name" => "Tingginambut",
                "city_id" => 374,
            ),
            array(
                "id" => 5197,
                "name" => "Torere",
                "city_id" => 374,
            ),
            array(
                "id" => 5198,
                "name" => "Yamo",
                "city_id" => 374,
            ),
            array(
                "id" => 5199,
                "name" => "Bobotsari",
                "city_id" => 375,
            ),
            array(
                "id" => 5200,
                "name" => "Bojongsari",
                "city_id" => 375,
            ),
            array(
                "id" => 5201,
                "name" => "Bukateja",
                "city_id" => 375,
            ),
            array(
                "id" => 5202,
                "name" => "Kaligondang",
                "city_id" => 375,
            ),
            array(
                "id" => 5203,
                "name" => "Kalimanah",
                "city_id" => 375,
            ),
            array(
                "id" => 5204,
                "name" => "Karanganyar",
                "city_id" => 375,
            ),
            array(
                "id" => 5205,
                "name" => "Karangjambu",
                "city_id" => 375,
            ),
            array(
                "id" => 5206,
                "name" => "Karangmoncol",
                "city_id" => 375,
            ),
            array(
                "id" => 5207,
                "name" => "Karangreja",
                "city_id" => 375,
            ),
            array(
                "id" => 5208,
                "name" => "Kejobong",
                "city_id" => 375,
            ),
            array(
                "id" => 5209,
                "name" => "Kemangkon",
                "city_id" => 375,
            ),
            array(
                "id" => 5210,
                "name" => "Kertanegara",
                "city_id" => 375,
            ),
            array(
                "id" => 5211,
                "name" => "Kutasari",
                "city_id" => 375,
            ),
            array(
                "id" => 5212,
                "name" => "Mrebet",
                "city_id" => 375,
            ),
            array(
                "id" => 5213,
                "name" => "Padamara",
                "city_id" => 375,
            ),
            array(
                "id" => 5214,
                "name" => "Pengadegan",
                "city_id" => 375,
            ),
            array(
                "id" => 5215,
                "name" => "Purbalingga",
                "city_id" => 375,
            ),
            array(
                "id" => 5216,
                "name" => "Rembang",
                "city_id" => 375,
            ),
            array(
                "id" => 5217,
                "name" => "Babakancikao",
                "city_id" => 376,
            ),
            array(
                "id" => 5218,
                "name" => "Bojong",
                "city_id" => 376,
            ),
            array(
                "id" => 5219,
                "name" => "Bungursari",
                "city_id" => 376,
            ),
            array(
                "id" => 5220,
                "name" => "Campaka",
                "city_id" => 376,
            ),
            array(
                "id" => 5221,
                "name" => "Cibatu",
                "city_id" => 376,
            ),
            array(
                "id" => 5222,
                "name" => "Darangdan",
                "city_id" => 376,
            ),
            array(
                "id" => 5223,
                "name" => "Jatiluhur",
                "city_id" => 376,
            ),
            array(
                "id" => 5224,
                "name" => "Kiarapedes",
                "city_id" => 376,
            ),
            array(
                "id" => 5225,
                "name" => "Maniis",
                "city_id" => 376,
            ),
            array(
                "id" => 5226,
                "name" => "Pasawahan",
                "city_id" => 376,
            ),
            array(
                "id" => 5227,
                "name" => "Plered",
                "city_id" => 376,
            ),
            array(
                "id" => 5228,
                "name" => "Pondoksalam",
                "city_id" => 376,
            ),
            array(
                "id" => 5229,
                "name" => "Purwakarta",
                "city_id" => 376,
            ),
            array(
                "id" => 5230,
                "name" => "Sukasari",
                "city_id" => 376,
            ),
            array(
                "id" => 5231,
                "name" => "Sukatani",
                "city_id" => 376,
            ),
            array(
                "id" => 5232,
                "name" => "Tegal Waru",
                "city_id" => 376,
            ),
            array(
                "id" => 5233,
                "name" => "Wanayasa",
                "city_id" => 376,
            ),
            array(
                "id" => 5234,
                "name" => "Bagelen",
                "city_id" => 377,
            ),
            array(
                "id" => 5235,
                "name" => "Banyuurip",
                "city_id" => 377,
            ),
            array(
                "id" => 5236,
                "name" => "Bayan",
                "city_id" => 377,
            ),
            array(
                "id" => 5237,
                "name" => "Bener",
                "city_id" => 377,
            ),
            array(
                "id" => 5238,
                "name" => "Bruno",
                "city_id" => 377,
            ),
            array(
                "id" => 5239,
                "name" => "Butuh",
                "city_id" => 377,
            ),
            array(
                "id" => 5240,
                "name" => "Gebang",
                "city_id" => 377,
            ),
            array(
                "id" => 5241,
                "name" => "Grabag",
                "city_id" => 377,
            ),
            array(
                "id" => 5242,
                "name" => "Kaligesing",
                "city_id" => 377,
            ),
            array(
                "id" => 5243,
                "name" => "Kemiri",
                "city_id" => 377,
            ),
            array(
                "id" => 5244,
                "name" => "Kutoarjo",
                "city_id" => 377,
            ),
            array(
                "id" => 5245,
                "name" => "Loano",
                "city_id" => 377,
            ),
            array(
                "id" => 5246,
                "name" => "Ngombol",
                "city_id" => 377,
            ),
            array(
                "id" => 5247,
                "name" => "Pituruh",
                "city_id" => 377,
            ),
            array(
                "id" => 5248,
                "name" => "Purwodadi",
                "city_id" => 377,
            ),
            array(
                "id" => 5249,
                "name" => "Purworejo",
                "city_id" => 377,
            ),
            array(
                "id" => 5250,
                "name" => "Ayau",
                "city_id" => 378,
            ),
            array(
                "id" => 5251,
                "name" => "Batanta Selatan",
                "city_id" => 378,
            ),
            array(
                "id" => 5252,
                "name" => "Batanta Utara",
                "city_id" => 378,
            ),
            array(
                "id" => 5253,
                "name" => "Kepulauan Ayau",
                "city_id" => 378,
            ),
            array(
                "id" => 5254,
                "name" => "Kepulauan Sembilan",
                "city_id" => 378,
            ),
            array(
                "id" => 5255,
                "name" => "Kofiau",
                "city_id" => 378,
            ),
            array(
                "id" => 5256,
                "name" => "Kota Waisai",
                "city_id" => 378,
            ),
            array(
                "id" => 5257,
                "name" => "Meos Mansar",
                "city_id" => 378,
            ),
            array(
                "id" => 5258,
                "name" => "Misool (Misool Utara)",
                "city_id" => 378,
            ),
            array(
                "id" => 5259,
                "name" => "Misool Barat",
                "city_id" => 378,
            ),
            array(
                "id" => 5260,
                "name" => "Misool Selatan",
                "city_id" => 378,
            ),
            array(
                "id" => 5261,
                "name" => "Misool Timur",
                "city_id" => 378,
            ),
            array(
                "id" => 5262,
                "name" => "Salawati Barat",
                "city_id" => 378,
            ),
            array(
                "id" => 5263,
                "name" => "Salawati Tengah",
                "city_id" => 378,
            ),
            array(
                "id" => 5264,
                "name" => "Salawati Utara (Samate)",
                "city_id" => 378,
            ),
            array(
                "id" => 5265,
                "name" => "Supnin",
                "city_id" => 378,
            ),
            array(
                "id" => 5266,
                "name" => "Teluk Mayalibit",
                "city_id" => 378,
            ),
            array(
                "id" => 5267,
                "name" => "Tiplol Mayalibit",
                "city_id" => 378,
            ),
            array(
                "id" => 5268,
                "name" => "Waigeo Barat",
                "city_id" => 378,
            ),
            array(
                "id" => 5269,
                "name" => "Waigeo Barat Kepulauan",
                "city_id" => 378,
            ),
            array(
                "id" => 5270,
                "name" => "Waigeo Selatan",
                "city_id" => 378,
            ),
            array(
                "id" => 5271,
                "name" => "Waigeo Timur",
                "city_id" => 378,
            ),
            array(
                "id" => 5272,
                "name" => "Waigeo Utara",
                "city_id" => 378,
            ),
            array(
                "id" => 5273,
                "name" => "Warwabomi",
                "city_id" => 378,
            ),
            array(
                "id" => 5274,
                "name" => "Bermani Ulu",
                "city_id" => 379,
            ),
            array(
                "id" => 5275,
                "name" => "Bermani Ulu Raya",
                "city_id" => 379,
            ),
            array(
                "id" => 5276,
                "name" => "Binduriang",
                "city_id" => 379,
            ),
            array(
                "id" => 5277,
                "name" => "Curup",
                "city_id" => 379,
            ),
            array(
                "id" => 5278,
                "name" => "Curup Selatan",
                "city_id" => 379,
            ),
            array(
                "id" => 5279,
                "name" => "Curup Tengah",
                "city_id" => 379,
            ),
            array(
                "id" => 5280,
                "name" => "Curup Timur",
                "city_id" => 379,
            ),
            array(
                "id" => 5281,
                "name" => "Curup Utara",
                "city_id" => 379,
            ),
            array(
                "id" => 5282,
                "name" => "Kota Padang",
                "city_id" => 379,
            ),
            array(
                "id" => 5283,
                "name" => "Padang Ulak Tanding",
                "city_id" => 379,
            ),
            array(
                "id" => 5284,
                "name" => "Selupu Rejang",
                "city_id" => 379,
            ),
            array(
                "id" => 5285,
                "name" => "Sindang Beliti Ilir",
                "city_id" => 379,
            ),
            array(
                "id" => 5286,
                "name" => "Sindang Beliti Ulu",
                "city_id" => 379,
            ),
            array(
                "id" => 5287,
                "name" => "Sindang Daratan",
                "city_id" => 379,
            ),
            array(
                "id" => 5288,
                "name" => "Sindang Kelingi",
                "city_id" => 379,
            ),
            array(
                "id" => 5289,
                "name" => "Bulu",
                "city_id" => 380,
            ),
            array(
                "id" => 5290,
                "name" => "Gunem",
                "city_id" => 380,
            ),
            array(
                "id" => 5291,
                "name" => "Kaliori",
                "city_id" => 380,
            ),
            array(
                "id" => 5292,
                "name" => "Kragan",
                "city_id" => 380,
            ),
            array(
                "id" => 5293,
                "name" => "Lasem",
                "city_id" => 380,
            ),
            array(
                "id" => 5294,
                "name" => "Pamotan",
                "city_id" => 380,
            ),
            array(
                "id" => 5295,
                "name" => "Pancur",
                "city_id" => 380,
            ),
            array(
                "id" => 5296,
                "name" => "Rembang",
                "city_id" => 380,
            ),
            array(
                "id" => 5297,
                "name" => "Sale",
                "city_id" => 380,
            ),
            array(
                "id" => 5298,
                "name" => "Sarang",
                "city_id" => 380,
            ),
            array(
                "id" => 5299,
                "name" => "Sedan",
                "city_id" => 380,
            ),
            array(
                "id" => 5300,
                "name" => "Sluke",
                "city_id" => 380,
            ),
            array(
                "id" => 5301,
                "name" => "Sulang",
                "city_id" => 380,
            ),
            array(
                "id" => 5302,
                "name" => "Sumber",
                "city_id" => 380,
            ),
            array(
                "id" => 5303,
                "name" => "Bagan Sinembah",
                "city_id" => 381,
            ),
            array(
                "id" => 5304,
                "name" => "Bangko",
                "city_id" => 381,
            ),
            array(
                "id" => 5305,
                "name" => "Bangko Pusaka (Pusako)",
                "city_id" => 381,
            ),
            array(
                "id" => 5306,
                "name" => "Batu Hampar",
                "city_id" => 381,
            ),
            array(
                "id" => 5307,
                "name" => "Kubu",
                "city_id" => 381,
            ),
            array(
                "id" => 5308,
                "name" => "Kubu Babussalam",
                "city_id" => 381,
            ),
            array(
                "id" => 5309,
                "name" => "Pasir Limau Kapas",
                "city_id" => 381,
            ),
            array(
                "id" => 5310,
                "name" => "Pekaitan",
                "city_id" => 381,
            ),
            array(
                "id" => 5311,
                "name" => "Pujud",
                "city_id" => 381,
            ),
            array(
                "id" => 5312,
                "name" => "Rantau Kopar",
                "city_id" => 381,
            ),
            array(
                "id" => 5313,
                "name" => "Rimba Melintang",
                "city_id" => 381,
            ),
            array(
                "id" => 5314,
                "name" => "Simpang Kanan",
                "city_id" => 381,
            ),
            array(
                "id" => 5315,
                "name" => "Sinaboi (Senaboi)",
                "city_id" => 381,
            ),
            array(
                "id" => 5316,
                "name" => "Tanah Putih",
                "city_id" => 381,
            ),
            array(
                "id" => 5317,
                "name" => "Tanah Putih Tanjung Melawan",
                "city_id" => 381,
            ),
            array(
                "id" => 5318,
                "name" => "Bangun Purba",
                "city_id" => 382,
            ),
            array(
                "id" => 5319,
                "name" => "Bonai Darussalam",
                "city_id" => 382,
            ),
            array(
                "id" => 5320,
                "name" => "Kabun",
                "city_id" => 382,
            ),
            array(
                "id" => 5321,
                "name" => "Kepenuhan",
                "city_id" => 382,
            ),
            array(
                "id" => 5322,
                "name" => "Kepenuhan Hulu",
                "city_id" => 382,
            ),
            array(
                "id" => 5323,
                "name" => "Kunto Darussalam",
                "city_id" => 382,
            ),
            array(
                "id" => 5324,
                "name" => "Pagaran Tapah Darussalam",
                "city_id" => 382,
            ),
            array(
                "id" => 5325,
                "name" => "Pendalian IV Koto",
                "city_id" => 382,
            ),
            array(
                "id" => 5326,
                "name" => "Rambah",
                "city_id" => 382,
            ),
            array(
                "id" => 5327,
                "name" => "Rambah Hilir",
                "city_id" => 382,
            ),
            array(
                "id" => 5328,
                "name" => "Rambah Samo",
                "city_id" => 382,
            ),
            array(
                "id" => 5329,
                "name" => "Rokan IV Koto",
                "city_id" => 382,
            ),
            array(
                "id" => 5330,
                "name" => "Tambusai",
                "city_id" => 382,
            ),
            array(
                "id" => 5331,
                "name" => "Tambusai Utara",
                "city_id" => 382,
            ),
            array(
                "id" => 5332,
                "name" => "Tandun",
                "city_id" => 382,
            ),
            array(
                "id" => 5333,
                "name" => "Ujung Batu",
                "city_id" => 382,
            ),
            array(
                "id" => 5334,
                "name" => "Landu Leko",
                "city_id" => 383,
            ),
            array(
                "id" => 5335,
                "name" => "Lobalain",
                "city_id" => 383,
            ),
            array(
                "id" => 5336,
                "name" => "Ndao Nuse",
                "city_id" => 383,
            ),
            array(
                "id" => 5337,
                "name" => "Pantai Baru",
                "city_id" => 383,
            ),
            array(
                "id" => 5338,
                "name" => "Rote Barat",
                "city_id" => 383,
            ),
            array(
                "id" => 5339,
                "name" => "Rote Barat Daya",
                "city_id" => 383,
            ),
            array(
                "id" => 5340,
                "name" => "Rote Barat Laut",
                "city_id" => 383,
            ),
            array(
                "id" => 5341,
                "name" => "Rote Selatan",
                "city_id" => 383,
            ),
            array(
                "id" => 5342,
                "name" => "Rote Tengah",
                "city_id" => 383,
            ),
            array(
                "id" => 5343,
                "name" => "Rote Timur",
                "city_id" => 383,
            ),
            array(
                "id" => 5344,
                "name" => "Sukajaya",
                "city_id" => 384,
            ),
            array(
                "id" => 5345,
                "name" => "Sukakarya",
                "city_id" => 384,
            ),
            array(
                "id" => 5346,
                "name" => "Hawu Mehara",
                "city_id" => 385,
            ),
            array(
                "id" => 5347,
                "name" => "Raijua",
                "city_id" => 385,
            ),
            array(
                "id" => 5348,
                "name" => "Sabu Barat",
                "city_id" => 385,
            ),
            array(
                "id" => 5349,
                "name" => "Sabu Liae",
                "city_id" => 385,
            ),
            array(
                "id" => 5350,
                "name" => "Sabu Tengah",
                "city_id" => 385,
            ),
            array(
                "id" => 5351,
                "name" => "Sabu Timur",
                "city_id" => 385,
            ),
            array(
                "id" => 5352,
                "name" => "Argomulyo",
                "city_id" => 386,
            ),
            array(
                "id" => 5353,
                "name" => "Sidomukti",
                "city_id" => 386,
            ),
            array(
                "id" => 5354,
                "name" => "Sidorejo",
                "city_id" => 386,
            ),
            array(
                "id" => 5355,
                "name" => "Tingkir",
                "city_id" => 386,
            ),
            array(
                "id" => 5356,
                "name" => "Loa Janan Ilir",
                "city_id" => 387,
            ),
            array(
                "id" => 5357,
                "name" => "Palaran",
                "city_id" => 387,
            ),
            array(
                "id" => 5358,
                "name" => "Samarinda Ilir",
                "city_id" => 387,
            ),
            array(
                "id" => 5359,
                "name" => "Samarinda Kota",
                "city_id" => 387,
            ),
            array(
                "id" => 5360,
                "name" => "Samarinda Seberang",
                "city_id" => 387,
            ),
            array(
                "id" => 5361,
                "name" => "Samarinda Ulu",
                "city_id" => 387,
            ),
            array(
                "id" => 5362,
                "name" => "Samarinda Utara",
                "city_id" => 387,
            ),
            array(
                "id" => 5363,
                "name" => "Sambutan",
                "city_id" => 387,
            ),
            array(
                "id" => 5364,
                "name" => "Sungai Kunjang",
                "city_id" => 387,
            ),
            array(
                "id" => 5365,
                "name" => "Sungai Pinang",
                "city_id" => 387,
            ),
            array(
                "id" => 5366,
                "name" => "Galing",
                "city_id" => 388,
            ),
            array(
                "id" => 5367,
                "name" => "Jawai",
                "city_id" => 388,
            ),
            array(
                "id" => 5368,
                "name" => "Jawai Selatan",
                "city_id" => 388,
            ),
            array(
                "id" => 5369,
                "name" => "Paloh",
                "city_id" => 388,
            ),
            array(
                "id" => 5370,
                "name" => "Pemangkat",
                "city_id" => 388,
            ),
            array(
                "id" => 5371,
                "name" => "Sajad",
                "city_id" => 388,
            ),
            array(
                "id" => 5372,
                "name" => "Sajingan Besar",
                "city_id" => 388,
            ),
            array(
                "id" => 5373,
                "name" => "Salatiga",
                "city_id" => 388,
            ),
            array(
                "id" => 5374,
                "name" => "Sambas",
                "city_id" => 388,
            ),
            array(
                "id" => 5375,
                "name" => "Sebawi",
                "city_id" => 388,
            ),
            array(
                "id" => 5376,
                "name" => "Sejangkung",
                "city_id" => 388,
            ),
            array(
                "id" => 5377,
                "name" => "Selakau",
                "city_id" => 388,
            ),
            array(
                "id" => 5378,
                "name" => "Selakau Timur",
                "city_id" => 388,
            ),
            array(
                "id" => 5379,
                "name" => "Semparuk",
                "city_id" => 388,
            ),
            array(
                "id" => 5380,
                "name" => "Subah",
                "city_id" => 388,
            ),
            array(
                "id" => 5381,
                "name" => "Tangaran",
                "city_id" => 388,
            ),
            array(
                "id" => 5382,
                "name" => "Tebas",
                "city_id" => 388,
            ),
            array(
                "id" => 5383,
                "name" => "Tekarang",
                "city_id" => 388,
            ),
            array(
                "id" => 5384,
                "name" => "Teluk Keramat",
                "city_id" => 388,
            ),
            array(
                "id" => 5385,
                "name" => "Harian",
                "city_id" => 389,
            ),
            array(
                "id" => 5386,
                "name" => "Nainggolan",
                "city_id" => 389,
            ),
            array(
                "id" => 5387,
                "name" => "Onan Runggu",
                "city_id" => 389,
            ),
            array(
                "id" => 5388,
                "name" => "Palipi",
                "city_id" => 389,
            ),
            array(
                "id" => 5389,
                "name" => "Pangururan",
                "city_id" => 389,
            ),
            array(
                "id" => 5390,
                "name" => "Ronggur Nihuta",
                "city_id" => 389,
            ),
            array(
                "id" => 5391,
                "name" => "Sianjur Mula-Mula",
                "city_id" => 389,
            ),
            array(
                "id" => 5392,
                "name" => "Simanindo",
                "city_id" => 389,
            ),
            array(
                "id" => 5393,
                "name" => "Sitio-Tio",
                "city_id" => 389,
            ),
            array(
                "id" => 5394,
                "name" => "Banyuates",
                "city_id" => 390,
            ),
            array(
                "id" => 5395,
                "name" => "Camplong",
                "city_id" => 390,
            ),
            array(
                "id" => 5396,
                "name" => "Jrengik",
                "city_id" => 390,
            ),
            array(
                "id" => 5397,
                "name" => "Karang Penang",
                "city_id" => 390,
            ),
            array(
                "id" => 5398,
                "name" => "Kedungdung",
                "city_id" => 390,
            ),
            array(
                "id" => 5399,
                "name" => "Ketapang",
                "city_id" => 390,
            ),
            array(
                "id" => 5400,
                "name" => "Omben",
                "city_id" => 390,
            ),
            array(
                "id" => 5401,
                "name" => "Pangarengan",
                "city_id" => 390,
            ),
            array(
                "id" => 5402,
                "name" => "Robatal",
                "city_id" => 390,
            ),
            array(
                "id" => 5403,
                "name" => "Sampang",
                "city_id" => 390,
            ),
            array(
                "id" => 5404,
                "name" => "Sokobanah",
                "city_id" => 390,
            ),
            array(
                "id" => 5405,
                "name" => "Sreseh",
                "city_id" => 390,
            ),
            array(
                "id" => 5406,
                "name" => "Tambelangan",
                "city_id" => 390,
            ),
            array(
                "id" => 5407,
                "name" => "Torjun",
                "city_id" => 390,
            ),
            array(
                "id" => 5408,
                "name" => "Balai",
                "city_id" => 391,
            ),
            array(
                "id" => 5409,
                "name" => "Beduai (Beduwai)",
                "city_id" => 391,
            ),
            array(
                "id" => 5410,
                "name" => "Bonti",
                "city_id" => 391,
            ),
            array(
                "id" => 5411,
                "name" => "Entikong",
                "city_id" => 391,
            ),
            array(
                "id" => 5412,
                "name" => "Jangkang",
                "city_id" => 391,
            ),
            array(
                "id" => 5413,
                "name" => "Kapuas (Sanggau Kapuas)",
                "city_id" => 391,
            ),
            array(
                "id" => 5414,
                "name" => "Kembayan",
                "city_id" => 391,
            ),
            array(
                "id" => 5415,
                "name" => "Meliau",
                "city_id" => 391,
            ),
            array(
                "id" => 5416,
                "name" => "Mukok",
                "city_id" => 391,
            ),
            array(
                "id" => 5417,
                "name" => "Noyan",
                "city_id" => 391,
            ),
            array(
                "id" => 5418,
                "name" => "Parindu",
                "city_id" => 391,
            ),
            array(
                "id" => 5419,
                "name" => "Sekayam",
                "city_id" => 391,
            ),
            array(
                "id" => 5420,
                "name" => "Tayan Hilir",
                "city_id" => 391,
            ),
            array(
                "id" => 5421,
                "name" => "Tayan Hulu",
                "city_id" => 391,
            ),
            array(
                "id" => 5422,
                "name" => "Toba",
                "city_id" => 391,
            ),
            array(
                "id" => 5423,
                "name" => "Apawer Hulu",
                "city_id" => 392,
            ),
            array(
                "id" => 5424,
                "name" => "Bonggo",
                "city_id" => 392,
            ),
            array(
                "id" => 5425,
                "name" => "Bonggo Timur",
                "city_id" => 392,
            ),
            array(
                "id" => 5426,
                "name" => "Pantai Barat",
                "city_id" => 392,
            ),
            array(
                "id" => 5427,
                "name" => "Pantai Timur",
                "city_id" => 392,
            ),
            array(
                "id" => 5428,
                "name" => "Pantai Timur Barat",
                "city_id" => 392,
            ),
            array(
                "id" => 5429,
                "name" => "Sarmi",
                "city_id" => 392,
            ),
            array(
                "id" => 5430,
                "name" => "Sarmi Selatan",
                "city_id" => 392,
            ),
            array(
                "id" => 5431,
                "name" => "Sarmi Timur",
                "city_id" => 392,
            ),
            array(
                "id" => 5432,
                "name" => "Tor Atas",
                "city_id" => 392,
            ),
            array(
                "id" => 5433,
                "name" => "Air Hitam",
                "city_id" => 393,
            ),
            array(
                "id" => 5434,
                "name" => "Batang Asai",
                "city_id" => 393,
            ),
            array(
                "id" => 5435,
                "name" => "Bathin VIII (Batin VIII)",
                "city_id" => 393,
            ),
            array(
                "id" => 5436,
                "name" => "Cermin Nan Gadang",
                "city_id" => 393,
            ),
            array(
                "id" => 5437,
                "name" => "Limun",
                "city_id" => 393,
            ),
            array(
                "id" => 5438,
                "name" => "Mandiangin",
                "city_id" => 393,
            ),
            array(
                "id" => 5439,
                "name" => "Pauh",
                "city_id" => 393,
            ),
            array(
                "id" => 5440,
                "name" => "Pelawan",
                "city_id" => 393,
            ),
            array(
                "id" => 5441,
                "name" => "Sarolangun",
                "city_id" => 393,
            ),
            array(
                "id" => 5442,
                "name" => "Singkut",
                "city_id" => 393,
            ),
            array(
                "id" => 5443,
                "name" => "Barangin",
                "city_id" => 394,
            ),
            array(
                "id" => 5444,
                "name" => "Lembah Segar",
                "city_id" => 394,
            ),
            array(
                "id" => 5445,
                "name" => "Silungkang",
                "city_id" => 394,
            ),
            array(
                "id" => 5446,
                "name" => "Talawi",
                "city_id" => 394,
            ),
            array(
                "id" => 5447,
                "name" => "Belitang",
                "city_id" => 395,
            ),
            array(
                "id" => 5448,
                "name" => "Belitang Hilir",
                "city_id" => 395,
            ),
            array(
                "id" => 5449,
                "name" => "Belitang Hulu",
                "city_id" => 395,
            ),
            array(
                "id" => 5450,
                "name" => "Nanga Mahap",
                "city_id" => 395,
            ),
            array(
                "id" => 5451,
                "name" => "Nanga Taman",
                "city_id" => 395,
            ),
            array(
                "id" => 5452,
                "name" => "Sekadau Hilir",
                "city_id" => 395,
            ),
            array(
                "id" => 5453,
                "name" => "Sekadau Hulu",
                "city_id" => 395,
            ),
            array(
                "id" => 5454,
                "name" => "Benteng",
                "city_id" => 396,
            ),
            array(
                "id" => 5455,
                "name" => "Bontoharu",
                "city_id" => 396,
            ),
            array(
                "id" => 5456,
                "name" => "Bontomanai",
                "city_id" => 396,
            ),
            array(
                "id" => 5457,
                "name" => "Bontomatene",
                "city_id" => 396,
            ),
            array(
                "id" => 5458,
                "name" => "Bontosikuyu",
                "city_id" => 396,
            ),
            array(
                "id" => 5459,
                "name" => "Buki",
                "city_id" => 396,
            ),
            array(
                "id" => 5460,
                "name" => "Pasilambena",
                "city_id" => 396,
            ),
            array(
                "id" => 5461,
                "name" => "Pasimarannu",
                "city_id" => 396,
            ),
            array(
                "id" => 5462,
                "name" => "Pasimassunggu",
                "city_id" => 396,
            ),
            array(
                "id" => 5463,
                "name" => "Pasimasunggu Timur",
                "city_id" => 396,
            ),
            array(
                "id" => 5464,
                "name" => "Takabonerate",
                "city_id" => 396,
            ),
            array(
                "id" => 5465,
                "name" => "Air Periukan",
                "city_id" => 397,
            ),
            array(
                "id" => 5466,
                "name" => "Ilir Talo",
                "city_id" => 397,
            ),
            array(
                "id" => 5467,
                "name" => "Lubuk Sandi",
                "city_id" => 397,
            ),
            array(
                "id" => 5468,
                "name" => "Seluma",
                "city_id" => 397,
            ),
            array(
                "id" => 5469,
                "name" => "Seluma Barat",
                "city_id" => 397,
            ),
            array(
                "id" => 5470,
                "name" => "Seluma Selatan",
                "city_id" => 397,
            ),
            array(
                "id" => 5471,
                "name" => "Seluma Timur",
                "city_id" => 397,
            ),
            array(
                "id" => 5472,
                "name" => "Seluma Utara",
                "city_id" => 397,
            ),
            array(
                "id" => 5473,
                "name" => "Semidang Alas",
                "city_id" => 397,
            ),
            array(
                "id" => 5474,
                "name" => "Semidang Alas Maras",
                "city_id" => 397,
            ),
            array(
                "id" => 5475,
                "name" => "Sukaraja",
                "city_id" => 397,
            ),
            array(
                "id" => 5476,
                "name" => "Talo",
                "city_id" => 397,
            ),
            array(
                "id" => 5477,
                "name" => "Talo Kecil",
                "city_id" => 397,
            ),
            array(
                "id" => 5478,
                "name" => "Ulu Talo",
                "city_id" => 397,
            ),
            array(
                "id" => 5479,
                "name" => "Ambarawa",
                "city_id" => 398,
            ),
            array(
                "id" => 5480,
                "name" => "Bancak",
                "city_id" => 398,
            ),
            array(
                "id" => 5481,
                "name" => "Bandungan",
                "city_id" => 398,
            ),
            array(
                "id" => 5482,
                "name" => "Banyubiru",
                "city_id" => 398,
            ),
            array(
                "id" => 5483,
                "name" => "Bawen",
                "city_id" => 398,
            ),
            array(
                "id" => 5484,
                "name" => "Bergas",
                "city_id" => 398,
            ),
            array(
                "id" => 5485,
                "name" => "Bringin",
                "city_id" => 398,
            ),
            array(
                "id" => 5486,
                "name" => "Getasan",
                "city_id" => 398,
            ),
            array(
                "id" => 5487,
                "name" => "Jambu",
                "city_id" => 398,
            ),
            array(
                "id" => 5488,
                "name" => "Kaliwungu",
                "city_id" => 398,
            ),
            array(
                "id" => 5489,
                "name" => "Pabelan",
                "city_id" => 398,
            ),
            array(
                "id" => 5490,
                "name" => "Pringapus",
                "city_id" => 398,
            ),
            array(
                "id" => 5491,
                "name" => "Sumowono",
                "city_id" => 398,
            ),
            array(
                "id" => 5492,
                "name" => "Suruh",
                "city_id" => 398,
            ),
            array(
                "id" => 5493,
                "name" => "Susukan",
                "city_id" => 398,
            ),
            array(
                "id" => 5494,
                "name" => "Tengaran",
                "city_id" => 398,
            ),
            array(
                "id" => 5495,
                "name" => "Tuntang",
                "city_id" => 398,
            ),
            array(
                "id" => 5496,
                "name" => "Ungaran Barat",
                "city_id" => 398,
            ),
            array(
                "id" => 5497,
                "name" => "Ungaran Timur",
                "city_id" => 398,
            ),
            array(
                "id" => 5498,
                "name" => "Banyumanik",
                "city_id" => 399,
            ),
            array(
                "id" => 5499,
                "name" => "Candisari",
                "city_id" => 399,
            ),
            array(
                "id" => 5500,
                "name" => "Gajah Mungkur",
                "city_id" => 399,
            ),
            array(
                "id" => 5501,
                "name" => "Gayamsari",
                "city_id" => 399,
            ),
            array(
                "id" => 5502,
                "name" => "Genuk",
                "city_id" => 399,
            ),
            array(
                "id" => 5503,
                "name" => "Gunungpati",
                "city_id" => 399,
            ),
            array(
                "id" => 5504,
                "name" => "Mijen",
                "city_id" => 399,
            ),
            array(
                "id" => 5505,
                "name" => "Ngaliyan",
                "city_id" => 399,
            ),
            array(
                "id" => 5506,
                "name" => "Pedurungan",
                "city_id" => 399,
            ),
            array(
                "id" => 5507,
                "name" => "Semarang Barat",
                "city_id" => 399,
            ),
            array(
                "id" => 5508,
                "name" => "Semarang Selatan",
                "city_id" => 399,
            ),
            array(
                "id" => 5509,
                "name" => "Semarang Tengah",
                "city_id" => 399,
            ),
            array(
                "id" => 5510,
                "name" => "Semarang Timur",
                "city_id" => 399,
            ),
            array(
                "id" => 5511,
                "name" => "Semarang Utara",
                "city_id" => 399,
            ),
            array(
                "id" => 5512,
                "name" => "Tembalang",
                "city_id" => 399,
            ),
            array(
                "id" => 5513,
                "name" => "Tugu",
                "city_id" => 399,
            ),
            array(
                "id" => 5514,
                "name" => "Amalatu",
                "city_id" => 400,
            ),
            array(
                "id" => 5515,
                "name" => "Elpaputih",
                "city_id" => 400,
            ),
            array(
                "id" => 5516,
                "name" => "Huamual",
                "city_id" => 400,
            ),
            array(
                "id" => 5517,
                "name" => "Huamual Belakang (Waisala)",
                "city_id" => 400,
            ),
            array(
                "id" => 5518,
                "name" => "Inamosol",
                "city_id" => 400,
            ),
            array(
                "id" => 5519,
                "name" => "Kairatu",
                "city_id" => 400,
            ),
            array(
                "id" => 5520,
                "name" => "Kairatu Barat",
                "city_id" => 400,
            ),
            array(
                "id" => 5521,
                "name" => "Kepulauan Manipa",
                "city_id" => 400,
            ),
            array(
                "id" => 5522,
                "name" => "Seram Barat",
                "city_id" => 400,
            ),
            array(
                "id" => 5523,
                "name" => "Taniwel",
                "city_id" => 400,
            ),
            array(
                "id" => 5524,
                "name" => "Taniwel Timur",
                "city_id" => 400,
            ),
            array(
                "id" => 5525,
                "name" => "Bula",
                "city_id" => 401,
            ),
            array(
                "id" => 5526,
                "name" => "Bula Barat",
                "city_id" => 401,
            ),
            array(
                "id" => 5527,
                "name" => "Gorom Timur",
                "city_id" => 401,
            ),
            array(
                "id" => 5528,
                "name" => "Kian Darat",
                "city_id" => 401,
            ),
            array(
                "id" => 5529,
                "name" => "Kilmury",
                "city_id" => 401,
            ),
            array(
                "id" => 5530,
                "name" => "Pulau Gorong (Gorom)",
                "city_id" => 401,
            ),
            array(
                "id" => 5531,
                "name" => "Pulau Panjang",
                "city_id" => 401,
            ),
            array(
                "id" => 5532,
                "name" => "Seram Timur",
                "city_id" => 401,
            ),
            array(
                "id" => 5533,
                "name" => "Siritaun Wida Timur",
                "city_id" => 401,
            ),
            array(
                "id" => 5534,
                "name" => "Siwalalat",
                "city_id" => 401,
            ),
            array(
                "id" => 5535,
                "name" => "Teluk Waru",
                "city_id" => 401,
            ),
            array(
                "id" => 5536,
                "name" => "Teor",
                "city_id" => 401,
            ),
            array(
                "id" => 5537,
                "name" => "Tutuk Tolu",
                "city_id" => 401,
            ),
            array(
                "id" => 5538,
                "name" => "Wakate",
                "city_id" => 401,
            ),
            array(
                "id" => 5539,
                "name" => "Werinama",
                "city_id" => 401,
            ),
            array(
                "id" => 5540,
                "name" => "Anyar",
                "city_id" => 402,
            ),
            array(
                "id" => 5541,
                "name" => "Bandung",
                "city_id" => 402,
            ),
            array(
                "id" => 5542,
                "name" => "Baros",
                "city_id" => 402,
            ),
            array(
                "id" => 5543,
                "name" => "Binuang",
                "city_id" => 402,
            ),
            array(
                "id" => 5544,
                "name" => "Bojonegara",
                "city_id" => 402,
            ),
            array(
                "id" => 5545,
                "name" => "Carenang (Cerenang)",
                "city_id" => 402,
            ),
            array(
                "id" => 5546,
                "name" => "Cikande",
                "city_id" => 402,
            ),
            array(
                "id" => 5547,
                "name" => "Cikeusal",
                "city_id" => 402,
            ),
            array(
                "id" => 5548,
                "name" => "Cinangka",
                "city_id" => 402,
            ),
            array(
                "id" => 5549,
                "name" => "Ciomas",
                "city_id" => 402,
            ),
            array(
                "id" => 5550,
                "name" => "Ciruas",
                "city_id" => 402,
            ),
            array(
                "id" => 5551,
                "name" => "Gunungsari",
                "city_id" => 402,
            ),
            array(
                "id" => 5552,
                "name" => "Jawilan",
                "city_id" => 402,
            ),
            array(
                "id" => 5553,
                "name" => "Kibin",
                "city_id" => 402,
            ),
            array(
                "id" => 5554,
                "name" => "Kopo",
                "city_id" => 402,
            ),
            array(
                "id" => 5555,
                "name" => "Kragilan",
                "city_id" => 402,
            ),
            array(
                "id" => 5556,
                "name" => "Kramatwatu",
                "city_id" => 402,
            ),
            array(
                "id" => 5557,
                "name" => "Lebak Wangi",
                "city_id" => 402,
            ),
            array(
                "id" => 5558,
                "name" => "Mancak",
                "city_id" => 402,
            ),
            array(
                "id" => 5559,
                "name" => "Pabuaran",
                "city_id" => 402,
            ),
            array(
                "id" => 5560,
                "name" => "Padarincang",
                "city_id" => 402,
            ),
            array(
                "id" => 5561,
                "name" => "Pamarayan",
                "city_id" => 402,
            ),
            array(
                "id" => 5562,
                "name" => "Petir",
                "city_id" => 402,
            ),
            array(
                "id" => 5563,
                "name" => "Pontang",
                "city_id" => 402,
            ),
            array(
                "id" => 5564,
                "name" => "Pulo Ampel",
                "city_id" => 402,
            ),
            array(
                "id" => 5565,
                "name" => "Tanara",
                "city_id" => 402,
            ),
            array(
                "id" => 5566,
                "name" => "Tirtayasa",
                "city_id" => 402,
            ),
            array(
                "id" => 5567,
                "name" => "Tunjung Teja",
                "city_id" => 402,
            ),
            array(
                "id" => 5568,
                "name" => "Waringin Kurung",
                "city_id" => 402,
            ),
            array(
                "id" => 5569,
                "name" => "Cipocok Jaya",
                "city_id" => 403,
            ),
            array(
                "id" => 5570,
                "name" => "Curug",
                "city_id" => 403,
            ),
            array(
                "id" => 5571,
                "name" => "Kasemen",
                "city_id" => 403,
            ),
            array(
                "id" => 5572,
                "name" => "Serang",
                "city_id" => 403,
            ),
            array(
                "id" => 5573,
                "name" => "Taktakan",
                "city_id" => 403,
            ),
            array(
                "id" => 5574,
                "name" => "Walantaka",
                "city_id" => 403,
            ),
            array(
                "id" => 5575,
                "name" => "Bandar Khalifah",
                "city_id" => 404,
            ),
            array(
                "id" => 5576,
                "name" => "Bintang Bayu",
                "city_id" => 404,
            ),
            array(
                "id" => 5577,
                "name" => "Dolok Masihul",
                "city_id" => 404,
            ),
            array(
                "id" => 5578,
                "name" => "Dolok Merawan",
                "city_id" => 404,
            ),
            array(
                "id" => 5579,
                "name" => "Kotarih",
                "city_id" => 404,
            ),
            array(
                "id" => 5580,
                "name" => "Pantai Cermin",
                "city_id" => 404,
            ),
            array(
                "id" => 5581,
                "name" => "Pegajahan",
                "city_id" => 404,
            ),
            array(
                "id" => 5582,
                "name" => "Perbaungan",
                "city_id" => 404,
            ),
            array(
                "id" => 5583,
                "name" => "Sei Bamban",
                "city_id" => 404,
            ),
            array(
                "id" => 5584,
                "name" => "Sei Rampah",
                "city_id" => 404,
            ),
            array(
                "id" => 5585,
                "name" => "Serba Jadi",
                "city_id" => 404,
            ),
            array(
                "id" => 5586,
                "name" => "Silinda",
                "city_id" => 404,
            ),
            array(
                "id" => 5587,
                "name" => "Sipispis",
                "city_id" => 404,
            ),
            array(
                "id" => 5588,
                "name" => "Tanjung Beringin",
                "city_id" => 404,
            ),
            array(
                "id" => 5589,
                "name" => "Tebing Syahbandar",
                "city_id" => 404,
            ),
            array(
                "id" => 5590,
                "name" => "Tebing Tinggi",
                "city_id" => 404,
            ),
            array(
                "id" => 5591,
                "name" => "Teluk Mengkudu",
                "city_id" => 404,
            ),
            array(
                "id" => 5592,
                "name" => "Batu Ampar",
                "city_id" => 405,
            ),
            array(
                "id" => 5593,
                "name" => "Danau Seluluk",
                "city_id" => 405,
            ),
            array(
                "id" => 5594,
                "name" => "Danau Sembuluh",
                "city_id" => 405,
            ),
            array(
                "id" => 5595,
                "name" => "Hanau",
                "city_id" => 405,
            ),
            array(
                "id" => 5596,
                "name" => "Seruyan Hilir",
                "city_id" => 405,
            ),
            array(
                "id" => 5597,
                "name" => "Seruyan Hilir Timur",
                "city_id" => 405,
            ),
            array(
                "id" => 5598,
                "name" => "Seruyan Hulu",
                "city_id" => 405,
            ),
            array(
                "id" => 5599,
                "name" => "Seruyan Raya",
                "city_id" => 405,
            ),
            array(
                "id" => 5600,
                "name" => "Seruyan Tengah",
                "city_id" => 405,
            ),
            array(
                "id" => 5601,
                "name" => "Suling Tambun",
                "city_id" => 405,
            ),
            array(
                "id" => 5602,
                "name" => "Bunga Raya",
                "city_id" => 406,
            ),
            array(
                "id" => 5603,
                "name" => "Dayun",
                "city_id" => 406,
            ),
            array(
                "id" => 5604,
                "name" => "Kandis",
                "city_id" => 406,
            ),
            array(
                "id" => 5605,
                "name" => "Kerinci Kanan",
                "city_id" => 406,
            ),
            array(
                "id" => 5606,
                "name" => "Koto Gasib",
                "city_id" => 406,
            ),
            array(
                "id" => 5607,
                "name" => "Lubuk Dalam",
                "city_id" => 406,
            ),
            array(
                "id" => 5608,
                "name" => "Mempura",
                "city_id" => 406,
            ),
            array(
                "id" => 5609,
                "name" => "Minas",
                "city_id" => 406,
            ),
            array(
                "id" => 5610,
                "name" => "Pusako",
                "city_id" => 406,
            ),
            array(
                "id" => 5611,
                "name" => "Sabak Auh",
                "city_id" => 406,
            ),
            array(
                "id" => 5612,
                "name" => "Siak",
                "city_id" => 406,
            ),
            array(
                "id" => 5613,
                "name" => "Sungai Apit",
                "city_id" => 406,
            ),
            array(
                "id" => 5614,
                "name" => "Sungai Mandau",
                "city_id" => 406,
            ),
            array(
                "id" => 5615,
                "name" => "Tualang",
                "city_id" => 406,
            ),
            array(
                "id" => 5616,
                "name" => "Sibolga Kota",
                "city_id" => 407,
            ),
            array(
                "id" => 5617,
                "name" => "Sibolga Sambas",
                "city_id" => 407,
            ),
            array(
                "id" => 5618,
                "name" => "Sibolga Selatan",
                "city_id" => 407,
            ),
            array(
                "id" => 5619,
                "name" => "Sibolga Utara",
                "city_id" => 407,
            ),
            array(
                "id" => 5620,
                "name" => "Baranti",
                "city_id" => 408,
            ),
            array(
                "id" => 5621,
                "name" => "Dua Pitue",
                "city_id" => 408,
            ),
            array(
                "id" => 5622,
                "name" => "Kulo",
                "city_id" => 408,
            ),
            array(
                "id" => 5623,
                "name" => "Maritengngae",
                "city_id" => 408,
            ),
            array(
                "id" => 5624,
                "name" => "Panca Lautan (Lautang)",
                "city_id" => 408,
            ),
            array(
                "id" => 5625,
                "name" => "Panca Rijang",
                "city_id" => 408,
            ),
            array(
                "id" => 5626,
                "name" => "Pitu Raise/Riase",
                "city_id" => 408,
            ),
            array(
                "id" => 5627,
                "name" => "Pitu Riawa",
                "city_id" => 408,
            ),
            array(
                "id" => 5628,
                "name" => "Tellu Limpoe",
                "city_id" => 408,
            ),
            array(
                "id" => 5629,
                "name" => "Watang Pulu",
                "city_id" => 408,
            ),
            array(
                "id" => 5630,
                "name" => "Wattang Sidenreng (Watang Sidenreng)",
                "city_id" => 408,
            ),
            array(
                "id" => 5631,
                "name" => "Balongbendo",
                "city_id" => 409,
            ),
            array(
                "id" => 5632,
                "name" => "Buduran",
                "city_id" => 409,
            ),
            array(
                "id" => 5633,
                "name" => "Candi",
                "city_id" => 409,
            ),
            array(
                "id" => 5634,
                "name" => "Gedangan",
                "city_id" => 409,
            ),
            array(
                "id" => 5635,
                "name" => "Jabon",
                "city_id" => 409,
            ),
            array(
                "id" => 5636,
                "name" => "Krembung",
                "city_id" => 409,
            ),
            array(
                "id" => 5637,
                "name" => "Krian",
                "city_id" => 409,
            ),
            array(
                "id" => 5638,
                "name" => "Porong",
                "city_id" => 409,
            ),
            array(
                "id" => 5639,
                "name" => "Prambon",
                "city_id" => 409,
            ),
            array(
                "id" => 5640,
                "name" => "Sedati",
                "city_id" => 409,
            ),
            array(
                "id" => 5641,
                "name" => "Sidoarjo",
                "city_id" => 409,
            ),
            array(
                "id" => 5642,
                "name" => "Sukodono",
                "city_id" => 409,
            ),
            array(
                "id" => 5643,
                "name" => "Taman",
                "city_id" => 409,
            ),
            array(
                "id" => 5644,
                "name" => "Tanggulangin",
                "city_id" => 409,
            ),
            array(
                "id" => 5645,
                "name" => "Tarik",
                "city_id" => 409,
            ),
            array(
                "id" => 5646,
                "name" => "Tulangan",
                "city_id" => 409,
            ),
            array(
                "id" => 5647,
                "name" => "Waru",
                "city_id" => 409,
            ),
            array(
                "id" => 5648,
                "name" => "Wonoayu",
                "city_id" => 409,
            ),
            array(
                "id" => 5649,
                "name" => "Dolo",
                "city_id" => 410,
            ),
            array(
                "id" => 5650,
                "name" => "Dolo Barat",
                "city_id" => 410,
            ),
            array(
                "id" => 5651,
                "name" => "Dolo Selatan",
                "city_id" => 410,
            ),
            array(
                "id" => 5652,
                "name" => "Gumbasa",
                "city_id" => 410,
            ),
            array(
                "id" => 5653,
                "name" => "Kinovaru",
                "city_id" => 410,
            ),
            array(
                "id" => 5654,
                "name" => "Kulawi",
                "city_id" => 410,
            ),
            array(
                "id" => 5655,
                "name" => "Kulawi Selatan",
                "city_id" => 410,
            ),
            array(
                "id" => 5656,
                "name" => "Lindu",
                "city_id" => 410,
            ),
            array(
                "id" => 5657,
                "name" => "Marawola",
                "city_id" => 410,
            ),
            array(
                "id" => 5658,
                "name" => "Marawola Barat",
                "city_id" => 410,
            ),
            array(
                "id" => 5659,
                "name" => "Nokilalaki",
                "city_id" => 410,
            ),
            array(
                "id" => 5660,
                "name" => "Palolo",
                "city_id" => 410,
            ),
            array(
                "id" => 5661,
                "name" => "Pipikoro",
                "city_id" => 410,
            ),
            array(
                "id" => 5662,
                "name" => "Sigi Biromaru",
                "city_id" => 410,
            ),
            array(
                "id" => 5663,
                "name" => "Tanambulava",
                "city_id" => 410,
            ),
            array(
                "id" => 5664,
                "name" => "IV Nagari",
                "city_id" => 411,
            ),
            array(
                "id" => 5665,
                "name" => "Kamang Baru",
                "city_id" => 411,
            ),
            array(
                "id" => 5666,
                "name" => "Koto VII",
                "city_id" => 411,
            ),
            array(
                "id" => 5667,
                "name" => "Kupitan",
                "city_id" => 411,
            ),
            array(
                "id" => 5668,
                "name" => "Lubuak Tarok",
                "city_id" => 411,
            ),
            array(
                "id" => 5669,
                "name" => "Sijunjung",
                "city_id" => 411,
            ),
            array(
                "id" => 5670,
                "name" => "Sumpur Kudus",
                "city_id" => 411,
            ),
            array(
                "id" => 5671,
                "name" => "Tanjung Gadang",
                "city_id" => 411,
            ),
            array(
                "id" => 5672,
                "name" => "Alok",
                "city_id" => 412,
            ),
            array(
                "id" => 5673,
                "name" => "Alok Barat",
                "city_id" => 412,
            ),
            array(
                "id" => 5674,
                "name" => "Alok Timur",
                "city_id" => 412,
            ),
            array(
                "id" => 5675,
                "name" => "Bola",
                "city_id" => 412,
            ),
            array(
                "id" => 5676,
                "name" => "Doreng",
                "city_id" => 412,
            ),
            array(
                "id" => 5677,
                "name" => "Hewokloang",
                "city_id" => 412,
            ),
            array(
                "id" => 5678,
                "name" => "Kangae",
                "city_id" => 412,
            ),
            array(
                "id" => 5679,
                "name" => "Kewapante",
                "city_id" => 412,
            ),
            array(
                "id" => 5680,
                "name" => "Koting",
                "city_id" => 412,
            ),
            array(
                "id" => 5681,
                "name" => "Lela",
                "city_id" => 412,
            ),
            array(
                "id" => 5682,
                "name" => "Magepanda",
                "city_id" => 412,
            ),
            array(
                "id" => 5683,
                "name" => "Mapitara",
                "city_id" => 412,
            ),
            array(
                "id" => 5684,
                "name" => "Mego",
                "city_id" => 412,
            ),
            array(
                "id" => 5685,
                "name" => "Nelle (Maumerei)",
                "city_id" => 412,
            ),
            array(
                "id" => 5686,
                "name" => "Nita",
                "city_id" => 412,
            ),
            array(
                "id" => 5687,
                "name" => "Paga",
                "city_id" => 412,
            ),
            array(
                "id" => 5688,
                "name" => "Palue",
                "city_id" => 412,
            ),
            array(
                "id" => 5689,
                "name" => "Talibura",
                "city_id" => 412,
            ),
            array(
                "id" => 5690,
                "name" => "Tana Wawo",
                "city_id" => 412,
            ),
            array(
                "id" => 5691,
                "name" => "Waiblama",
                "city_id" => 412,
            ),
            array(
                "id" => 5692,
                "name" => "Waigete",
                "city_id" => 412,
            ),
            array(
                "id" => 5693,
                "name" => "Bandar",
                "city_id" => 413,
            ),
            array(
                "id" => 5694,
                "name" => "Bandar Huluan",
                "city_id" => 413,
            ),
            array(
                "id" => 5695,
                "name" => "Bandar Masilam",
                "city_id" => 413,
            ),
            array(
                "id" => 5696,
                "name" => "Bosar Maligas",
                "city_id" => 413,
            ),
            array(
                "id" => 5697,
                "name" => "Dolok Batu Nanggar",
                "city_id" => 413,
            ),
            array(
                "id" => 5698,
                "name" => "Dolok Panribuan",
                "city_id" => 413,
            ),
            array(
                "id" => 5699,
                "name" => "Dolok Pardamean",
                "city_id" => 413,
            ),
            array(
                "id" => 5700,
                "name" => "Dolok Silau",
                "city_id" => 413,
            ),
            array(
                "id" => 5701,
                "name" => "Girsang Sipangan Bolon",
                "city_id" => 413,
            ),
            array(
                "id" => 5702,
                "name" => "Gunung Malela",
                "city_id" => 413,
            ),
            array(
                "id" => 5703,
                "name" => "Gunung Maligas",
                "city_id" => 413,
            ),
            array(
                "id" => 5704,
                "name" => "Haranggaol Horison",
                "city_id" => 413,
            ),
            array(
                "id" => 5705,
                "name" => "Hatonduhan",
                "city_id" => 413,
            ),
            array(
                "id" => 5706,
                "name" => "Huta Bayu Raja",
                "city_id" => 413,
            ),
            array(
                "id" => 5707,
                "name" => "Jawa Maraja Bah Jambi",
                "city_id" => 413,
            ),
            array(
                "id" => 5708,
                "name" => "Jorlang Hataran",
                "city_id" => 413,
            ),
            array(
                "id" => 5709,
                "name" => "Panei",
                "city_id" => 413,
            ),
            array(
                "id" => 5710,
                "name" => "Panombeian Panei",
                "city_id" => 413,
            ),
            array(
                "id" => 5711,
                "name" => "Pematang Bandar",
                "city_id" => 413,
            ),
            array(
                "id" => 5712,
                "name" => "Pematang Sidamanik",
                "city_id" => 413,
            ),
            array(
                "id" => 5713,
                "name" => "Pematang Silima Huta",
                "city_id" => 413,
            ),
            array(
                "id" => 5714,
                "name" => "Purba",
                "city_id" => 413,
            ),
            array(
                "id" => 5715,
                "name" => "Raya",
                "city_id" => 413,
            ),
            array(
                "id" => 5716,
                "name" => "Raya Kahean",
                "city_id" => 413,
            ),
            array(
                "id" => 5717,
                "name" => "Siantar",
                "city_id" => 413,
            ),
            array(
                "id" => 5718,
                "name" => "Sidamanik",
                "city_id" => 413,
            ),
            array(
                "id" => 5719,
                "name" => "Silimakuta",
                "city_id" => 413,
            ),
            array(
                "id" => 5720,
                "name" => "Silou Kahean",
                "city_id" => 413,
            ),
            array(
                "id" => 5721,
                "name" => "Tanah Jawa",
                "city_id" => 413,
            ),
            array(
                "id" => 5722,
                "name" => "Tapian Dolok",
                "city_id" => 413,
            ),
            array(
                "id" => 5723,
                "name" => "Ujung Padang",
                "city_id" => 413,
            ),
            array(
                "id" => 5724,
                "name" => "Alapan (Alafan)",
                "city_id" => 414,
            ),
            array(
                "id" => 5725,
                "name" => "Salang",
                "city_id" => 414,
            ),
            array(
                "id" => 5726,
                "name" => "Simeuleu Barat",
                "city_id" => 414,
            ),
            array(
                "id" => 5727,
                "name" => "Simeuleu Tengah",
                "city_id" => 414,
            ),
            array(
                "id" => 5728,
                "name" => "Simeuleu Timur",
                "city_id" => 414,
            ),
            array(
                "id" => 5729,
                "name" => "Simeulue Cut",
                "city_id" => 414,
            ),
            array(
                "id" => 5730,
                "name" => "Teluk Dalam",
                "city_id" => 414,
            ),
            array(
                "id" => 5731,
                "name" => "Teupah Barat",
                "city_id" => 414,
            ),
            array(
                "id" => 5732,
                "name" => "Teupah Selatan",
                "city_id" => 414,
            ),
            array(
                "id" => 5733,
                "name" => "Teupah Tengah",
                "city_id" => 414,
            ),
            array(
                "id" => 5734,
                "name" => "Singkawang Barat",
                "city_id" => 415,
            ),
            array(
                "id" => 5735,
                "name" => "Singkawang Selatan",
                "city_id" => 415,
            ),
            array(
                "id" => 5736,
                "name" => "Singkawang Tengah",
                "city_id" => 415,
            ),
            array(
                "id" => 5737,
                "name" => "Singkawang Timur",
                "city_id" => 415,
            ),
            array(
                "id" => 5738,
                "name" => "Singkawang Utara",
                "city_id" => 415,
            ),
            array(
                "id" => 5739,
                "name" => "Bulupoddo",
                "city_id" => 416,
            ),
            array(
                "id" => 5740,
                "name" => "Pulau Sembilan",
                "city_id" => 416,
            ),
            array(
                "id" => 5741,
                "name" => "Sinjai Barat",
                "city_id" => 416,
            ),
            array(
                "id" => 5742,
                "name" => "Sinjai Borong",
                "city_id" => 416,
            ),
            array(
                "id" => 5743,
                "name" => "Sinjai Selatan",
                "city_id" => 416,
            ),
            array(
                "id" => 5744,
                "name" => "Sinjai Tengah",
                "city_id" => 416,
            ),
            array(
                "id" => 5745,
                "name" => "Sinjai Timur",
                "city_id" => 416,
            ),
            array(
                "id" => 5746,
                "name" => "Sinjai Utara",
                "city_id" => 416,
            ),
            array(
                "id" => 5747,
                "name" => "Tellu Limpoe",
                "city_id" => 416,
            ),
            array(
                "id" => 5748,
                "name" => "Ambalau",
                "city_id" => 417,
            ),
            array(
                "id" => 5749,
                "name" => "Binjai Hulu",
                "city_id" => 417,
            ),
            array(
                "id" => 5750,
                "name" => "Dedai",
                "city_id" => 417,
            ),
            array(
                "id" => 5751,
                "name" => "Kayan Hilir",
                "city_id" => 417,
            ),
            array(
                "id" => 5752,
                "name" => "Kayan Hulu",
                "city_id" => 417,
            ),
            array(
                "id" => 5753,
                "name" => "Kelam Permai",
                "city_id" => 417,
            ),
            array(
                "id" => 5754,
                "name" => "Ketungau Hilir",
                "city_id" => 417,
            ),
            array(
                "id" => 5755,
                "name" => "Ketungau Hulu",
                "city_id" => 417,
            ),
            array(
                "id" => 5756,
                "name" => "Ketungau Tengah",
                "city_id" => 417,
            ),
            array(
                "id" => 5757,
                "name" => "Sepauk",
                "city_id" => 417,
            ),
            array(
                "id" => 5758,
                "name" => "Serawai (Nanga Serawai)",
                "city_id" => 417,
            ),
            array(
                "id" => 5759,
                "name" => "Sintang",
                "city_id" => 417,
            ),
            array(
                "id" => 5760,
                "name" => "Sungai Tebelian",
                "city_id" => 417,
            ),
            array(
                "id" => 5761,
                "name" => "Tempunak",
                "city_id" => 417,
            ),
            array(
                "id" => 5762,
                "name" => "Arjasa",
                "city_id" => 418,
            ),
            array(
                "id" => 5763,
                "name" => "Asembagus",
                "city_id" => 418,
            ),
            array(
                "id" => 5764,
                "name" => "Banyuglugur",
                "city_id" => 418,
            ),
            array(
                "id" => 5765,
                "name" => "Banyuputih",
                "city_id" => 418,
            ),
            array(
                "id" => 5766,
                "name" => "Besuki",
                "city_id" => 418,
            ),
            array(
                "id" => 5767,
                "name" => "Bungatan",
                "city_id" => 418,
            ),
            array(
                "id" => 5768,
                "name" => "Jangkar",
                "city_id" => 418,
            ),
            array(
                "id" => 5769,
                "name" => "Jatibanteng",
                "city_id" => 418,
            ),
            array(
                "id" => 5770,
                "name" => "Kapongan",
                "city_id" => 418,
            ),
            array(
                "id" => 5771,
                "name" => "Kendit",
                "city_id" => 418,
            ),
            array(
                "id" => 5772,
                "name" => "Mangaran",
                "city_id" => 418,
            ),
            array(
                "id" => 5773,
                "name" => "Mlandingan",
                "city_id" => 418,
            ),
            array(
                "id" => 5774,
                "name" => "Panarukan",
                "city_id" => 418,
            ),
            array(
                "id" => 5775,
                "name" => "Panji",
                "city_id" => 418,
            ),
            array(
                "id" => 5776,
                "name" => "Situbondo",
                "city_id" => 418,
            ),
            array(
                "id" => 5777,
                "name" => "Suboh",
                "city_id" => 418,
            ),
            array(
                "id" => 5778,
                "name" => "Sumbermalang",
                "city_id" => 418,
            ),
            array(
                "id" => 5779,
                "name" => "Berbah",
                "city_id" => 419,
            ),
            array(
                "id" => 5780,
                "name" => "Cangkringan",
                "city_id" => 419,
            ),
            array(
                "id" => 5781,
                "name" => "Depok",
                "city_id" => 419,
            ),
            array(
                "id" => 5782,
                "name" => "Gamping",
                "city_id" => 419,
            ),
            array(
                "id" => 5783,
                "name" => "Godean",
                "city_id" => 419,
            ),
            array(
                "id" => 5784,
                "name" => "Kalasan",
                "city_id" => 419,
            ),
            array(
                "id" => 5785,
                "name" => "Minggir",
                "city_id" => 419,
            ),
            array(
                "id" => 5786,
                "name" => "Mlati",
                "city_id" => 419,
            ),
            array(
                "id" => 5787,
                "name" => "Moyudan",
                "city_id" => 419,
            ),
            array(
                "id" => 5788,
                "name" => "Ngaglik",
                "city_id" => 419,
            ),
            array(
                "id" => 5789,
                "name" => "Ngemplak",
                "city_id" => 419,
            ),
            array(
                "id" => 5790,
                "name" => "Pakem",
                "city_id" => 419,
            ),
            array(
                "id" => 5791,
                "name" => "Prambanan",
                "city_id" => 419,
            ),
            array(
                "id" => 5792,
                "name" => "Seyegan",
                "city_id" => 419,
            ),
            array(
                "id" => 5793,
                "name" => "Sleman",
                "city_id" => 419,
            ),
            array(
                "id" => 5794,
                "name" => "Tempel",
                "city_id" => 419,
            ),
            array(
                "id" => 5795,
                "name" => "Turi",
                "city_id" => 419,
            ),
            array(
                "id" => 5796,
                "name" => "Bukit Sundi",
                "city_id" => 420,
            ),
            array(
                "id" => 5797,
                "name" => "Danau Kembar",
                "city_id" => 420,
            ),
            array(
                "id" => 5798,
                "name" => "Gunung Talang",
                "city_id" => 420,
            ),
            array(
                "id" => 5799,
                "name" => "Hiliran Gumanti",
                "city_id" => 420,
            ),
            array(
                "id" => 5800,
                "name" => "IX Koto Sei Lasi",
                "city_id" => 420,
            ),
            array(
                "id" => 5801,
                "name" => "Junjung Sirih",
                "city_id" => 420,
            ),
            array(
                "id" => 5802,
                "name" => "Kubung",
                "city_id" => 420,
            ),
            array(
                "id" => 5803,
                "name" => "Lembah Gumanti",
                "city_id" => 420,
            ),
            array(
                "id" => 5804,
                "name" => "Lembang Jaya",
                "city_id" => 420,
            ),
            array(
                "id" => 5805,
                "name" => "Pantai Cermin",
                "city_id" => 420,
            ),
            array(
                "id" => 5806,
                "name" => "Payung Sekaki",
                "city_id" => 420,
            ),
            array(
                "id" => 5807,
                "name" => "Tigo Lurah",
                "city_id" => 420,
            ),
            array(
                "id" => 5808,
                "name" => "X Koto Diatas",
                "city_id" => 420,
            ),
            array(
                "id" => 5809,
                "name" => "X Koto Singkarak",
                "city_id" => 420,
            ),
            array(
                "id" => 5810,
                "name" => "Lubuk Sikarah",
                "city_id" => 421,
            ),
            array(
                "id" => 5811,
                "name" => "Tanjung Harapan",
                "city_id" => 421,
            ),
            array(
                "id" => 5812,
                "name" => "Koto Parik Gadang Diateh",
                "city_id" => 422,
            ),
            array(
                "id" => 5813,
                "name" => "Pauh Duo",
                "city_id" => 422,
            ),
            array(
                "id" => 5814,
                "name" => "Sangir",
                "city_id" => 422,
            ),
            array(
                "id" => 5815,
                "name" => "Sangir Balai Janggo",
                "city_id" => 422,
            ),
            array(
                "id" => 5816,
                "name" => "Sangir Batang Hari",
                "city_id" => 422,
            ),
            array(
                "id" => 5817,
                "name" => "Sangir Jujuan",
                "city_id" => 422,
            ),
            array(
                "id" => 5818,
                "name" => "Sungai Pagu",
                "city_id" => 422,
            ),
            array(
                "id" => 5819,
                "name" => "Citta",
                "city_id" => 423,
            ),
            array(
                "id" => 5820,
                "name" => "Donri-Donri",
                "city_id" => 423,
            ),
            array(
                "id" => 5821,
                "name" => "Ganra",
                "city_id" => 423,
            ),
            array(
                "id" => 5822,
                "name" => "Lalabata",
                "city_id" => 423,
            ),
            array(
                "id" => 5823,
                "name" => "Lili Rilau",
                "city_id" => 423,
            ),
            array(
                "id" => 5824,
                "name" => "Liliraja (Lili Riaja)",
                "city_id" => 423,
            ),
            array(
                "id" => 5825,
                "name" => "Mario Riawa",
                "city_id" => 423,
            ),
            array(
                "id" => 5826,
                "name" => "Mario Riwawo",
                "city_id" => 423,
            ),
            array(
                "id" => 5827,
                "name" => "Aimas",
                "city_id" => 424,
            ),
            array(
                "id" => 5828,
                "name" => "Beraur",
                "city_id" => 424,
            ),
            array(
                "id" => 5829,
                "name" => "Klabot",
                "city_id" => 424,
            ),
            array(
                "id" => 5830,
                "name" => "Klamono",
                "city_id" => 424,
            ),
            array(
                "id" => 5831,
                "name" => "Klaso",
                "city_id" => 424,
            ),
            array(
                "id" => 5832,
                "name" => "Klawak",
                "city_id" => 424,
            ),
            array(
                "id" => 5833,
                "name" => "Klayili",
                "city_id" => 424,
            ),
            array(
                "id" => 5834,
                "name" => "Makbon",
                "city_id" => 424,
            ),
            array(
                "id" => 5835,
                "name" => "Mariat",
                "city_id" => 424,
            ),
            array(
                "id" => 5836,
                "name" => "Maudus",
                "city_id" => 424,
            ),
            array(
                "id" => 5837,
                "name" => "Mayamuk",
                "city_id" => 424,
            ),
            array(
                "id" => 5838,
                "name" => "Moisegen",
                "city_id" => 424,
            ),
            array(
                "id" => 5839,
                "name" => "Salawati",
                "city_id" => 424,
            ),
            array(
                "id" => 5840,
                "name" => "Salawati Selatan",
                "city_id" => 424,
            ),
            array(
                "id" => 5841,
                "name" => "Sayosa",
                "city_id" => 424,
            ),
            array(
                "id" => 5842,
                "name" => "Seget",
                "city_id" => 424,
            ),
            array(
                "id" => 5843,
                "name" => "Segun",
                "city_id" => 424,
            ),
            array(
                "id" => 5844,
                "name" => "Sorong",
                "city_id" => 425,
            ),
            array(
                "id" => 5845,
                "name" => "Sorong Barat",
                "city_id" => 425,
            ),
            array(
                "id" => 5846,
                "name" => "Sorong Kepulauan",
                "city_id" => 425,
            ),
            array(
                "id" => 5847,
                "name" => "Sorong Manoi",
                "city_id" => 425,
            ),
            array(
                "id" => 5848,
                "name" => "Sorong Timur",
                "city_id" => 425,
            ),
            array(
                "id" => 5849,
                "name" => "Sorong Utara",
                "city_id" => 425,
            ),
            array(
                "id" => 5850,
                "name" => "Fokour",
                "city_id" => 426,
            ),
            array(
                "id" => 5851,
                "name" => "Inanwatan (Inawatan)",
                "city_id" => 426,
            ),
            array(
                "id" => 5852,
                "name" => "Kais (Matemani Kais)",
                "city_id" => 426,
            ),
            array(
                "id" => 5853,
                "name" => "Kokoda",
                "city_id" => 426,
            ),
            array(
                "id" => 5854,
                "name" => "Kokoda Utara",
                "city_id" => 426,
            ),
            array(
                "id" => 5855,
                "name" => "Konda",
                "city_id" => 426,
            ),
            array(
                "id" => 5856,
                "name" => "Matemani",
                "city_id" => 426,
            ),
            array(
                "id" => 5857,
                "name" => "Moswaren",
                "city_id" => 426,
            ),
            array(
                "id" => 5858,
                "name" => "Saifi",
                "city_id" => 426,
            ),
            array(
                "id" => 5859,
                "name" => "Sawiat",
                "city_id" => 426,
            ),
            array(
                "id" => 5860,
                "name" => "Seremuk",
                "city_id" => 426,
            ),
            array(
                "id" => 5861,
                "name" => "Teminabuan",
                "city_id" => 426,
            ),
            array(
                "id" => 5862,
                "name" => "Wayer",
                "city_id" => 426,
            ),
            array(
                "id" => 5863,
                "name" => "Gemolong",
                "city_id" => 427,
            ),
            array(
                "id" => 5864,
                "name" => "Gesi",
                "city_id" => 427,
            ),
            array(
                "id" => 5865,
                "name" => "Gondang",
                "city_id" => 427,
            ),
            array(
                "id" => 5866,
                "name" => "Jenar",
                "city_id" => 427,
            ),
            array(
                "id" => 5867,
                "name" => "Kalijambe",
                "city_id" => 427,
            ),
            array(
                "id" => 5868,
                "name" => "Karangmalang",
                "city_id" => 427,
            ),
            array(
                "id" => 5869,
                "name" => "Kedawung",
                "city_id" => 427,
            ),
            array(
                "id" => 5870,
                "name" => "Masaran",
                "city_id" => 427,
            ),
            array(
                "id" => 5871,
                "name" => "Miri",
                "city_id" => 427,
            ),
            array(
                "id" => 5872,
                "name" => "Mondokan",
                "city_id" => 427,
            ),
            array(
                "id" => 5873,
                "name" => "Ngrampal",
                "city_id" => 427,
            ),
            array(
                "id" => 5874,
                "name" => "Plupuh",
                "city_id" => 427,
            ),
            array(
                "id" => 5875,
                "name" => "Sambirejo",
                "city_id" => 427,
            ),
            array(
                "id" => 5876,
                "name" => "Sambung Macan",
                "city_id" => 427,
            ),
            array(
                "id" => 5877,
                "name" => "Sidoharjo",
                "city_id" => 427,
            ),
            array(
                "id" => 5878,
                "name" => "Sragen",
                "city_id" => 427,
            ),
            array(
                "id" => 5879,
                "name" => "Sukodono",
                "city_id" => 427,
            ),
            array(
                "id" => 5880,
                "name" => "Sumberlawang",
                "city_id" => 427,
            ),
            array(
                "id" => 5881,
                "name" => "Tangen",
                "city_id" => 427,
            ),
            array(
                "id" => 5882,
                "name" => "Tanon",
                "city_id" => 427,
            ),
            array(
                "id" => 5883,
                "name" => "Binong",
                "city_id" => 428,
            ),
            array(
                "id" => 5884,
                "name" => "Blanakan",
                "city_id" => 428,
            ),
            array(
                "id" => 5885,
                "name" => "Ciasem",
                "city_id" => 428,
            ),
            array(
                "id" => 5886,
                "name" => "Ciater",
                "city_id" => 428,
            ),
            array(
                "id" => 5887,
                "name" => "Cibogo",
                "city_id" => 428,
            ),
            array(
                "id" => 5888,
                "name" => "Cijambe",
                "city_id" => 428,
            ),
            array(
                "id" => 5889,
                "name" => "Cikaum",
                "city_id" => 428,
            ),
            array(
                "id" => 5890,
                "name" => "Cipeundeuy",
                "city_id" => 428,
            ),
            array(
                "id" => 5891,
                "name" => "Cipunagara",
                "city_id" => 428,
            ),
            array(
                "id" => 5892,
                "name" => "Cisalak",
                "city_id" => 428,
            ),
            array(
                "id" => 5893,
                "name" => "Compreng",
                "city_id" => 428,
            ),
            array(
                "id" => 5894,
                "name" => "Dawuan",
                "city_id" => 428,
            ),
            array(
                "id" => 5895,
                "name" => "Jalancagak",
                "city_id" => 428,
            ),
            array(
                "id" => 5896,
                "name" => "Kalijati",
                "city_id" => 428,
            ),
            array(
                "id" => 5897,
                "name" => "Kasomalang",
                "city_id" => 428,
            ),
            array(
                "id" => 5898,
                "name" => "Legonkulon",
                "city_id" => 428,
            ),
            array(
                "id" => 5899,
                "name" => "Pabuaran",
                "city_id" => 428,
            ),
            array(
                "id" => 5900,
                "name" => "Pagaden",
                "city_id" => 428,
            ),
            array(
                "id" => 5901,
                "name" => "Pagaden Barat",
                "city_id" => 428,
            ),
            array(
                "id" => 5902,
                "name" => "Pamanukan",
                "city_id" => 428,
            ),
            array(
                "id" => 5903,
                "name" => "Patokbeusi",
                "city_id" => 428,
            ),
            array(
                "id" => 5904,
                "name" => "Purwadadi",
                "city_id" => 428,
            ),
            array(
                "id" => 5905,
                "name" => "Pusakajaya",
                "city_id" => 428,
            ),
            array(
                "id" => 5906,
                "name" => "Pusakanagara",
                "city_id" => 428,
            ),
            array(
                "id" => 5907,
                "name" => "Sagalaherang",
                "city_id" => 428,
            ),
            array(
                "id" => 5908,
                "name" => "Serangpanjang",
                "city_id" => 428,
            ),
            array(
                "id" => 5909,
                "name" => "Subang",
                "city_id" => 428,
            ),
            array(
                "id" => 5910,
                "name" => "Sukasari",
                "city_id" => 428,
            ),
            array(
                "id" => 5911,
                "name" => "Tambakdahan",
                "city_id" => 428,
            ),
            array(
                "id" => 5912,
                "name" => "Tanjungsiang",
                "city_id" => 428,
            ),
            array(
                "id" => 5913,
                "name" => "Longkib",
                "city_id" => 429,
            ),
            array(
                "id" => 5914,
                "name" => "Penanggalan",
                "city_id" => 429,
            ),
            array(
                "id" => 5915,
                "name" => "Rundeng",
                "city_id" => 429,
            ),
            array(
                "id" => 5916,
                "name" => "Simpang Kiri",
                "city_id" => 429,
            ),
            array(
                "id" => 5917,
                "name" => "Sultan Daulat",
                "city_id" => 429,
            ),
            array(
                "id" => 5918,
                "name" => "Bantargadung",
                "city_id" => 430,
            ),
            array(
                "id" => 5919,
                "name" => "Bojong Genteng",
                "city_id" => 430,
            ),
            array(
                "id" => 5920,
                "name" => "Caringin",
                "city_id" => 430,
            ),
            array(
                "id" => 5921,
                "name" => "Ciambar",
                "city_id" => 430,
            ),
            array(
                "id" => 5922,
                "name" => "Cibadak",
                "city_id" => 430,
            ),
            array(
                "id" => 5923,
                "name" => "Cibitung",
                "city_id" => 430,
            ),
            array(
                "id" => 5924,
                "name" => "Cicantayan",
                "city_id" => 430,
            ),
            array(
                "id" => 5925,
                "name" => "Cicurug",
                "city_id" => 430,
            ),
            array(
                "id" => 5926,
                "name" => "Cidadap",
                "city_id" => 430,
            ),
            array(
                "id" => 5927,
                "name" => "Cidahu",
                "city_id" => 430,
            ),
            array(
                "id" => 5928,
                "name" => "Cidolog",
                "city_id" => 430,
            ),
            array(
                "id" => 5929,
                "name" => "Ciemas",
                "city_id" => 430,
            ),
            array(
                "id" => 5930,
                "name" => "Cikakak",
                "city_id" => 430,
            ),
            array(
                "id" => 5931,
                "name" => "Cikembar",
                "city_id" => 430,
            ),
            array(
                "id" => 5932,
                "name" => "Cikidang",
                "city_id" => 430,
            ),
            array(
                "id" => 5933,
                "name" => "Cimanggu",
                "city_id" => 430,
            ),
            array(
                "id" => 5934,
                "name" => "Ciracap",
                "city_id" => 430,
            ),
            array(
                "id" => 5935,
                "name" => "Cireunghas",
                "city_id" => 430,
            ),
            array(
                "id" => 5936,
                "name" => "Cisaat",
                "city_id" => 430,
            ),
            array(
                "id" => 5937,
                "name" => "Cisolok",
                "city_id" => 430,
            ),
            array(
                "id" => 5938,
                "name" => "Curugkembar",
                "city_id" => 430,
            ),
            array(
                "id" => 5939,
                "name" => "Geger Bitung",
                "city_id" => 430,
            ),
            array(
                "id" => 5940,
                "name" => "Gunung Guruh",
                "city_id" => 430,
            ),
            array(
                "id" => 5941,
                "name" => "Jampang Kulon",
                "city_id" => 430,
            ),
            array(
                "id" => 5942,
                "name" => "Jampang Tengah",
                "city_id" => 430,
            ),
            array(
                "id" => 5943,
                "name" => "Kabandungan",
                "city_id" => 430,
            ),
            array(
                "id" => 5944,
                "name" => "Kadudampit",
                "city_id" => 430,
            ),
            array(
                "id" => 5945,
                "name" => "Kalapa Nunggal",
                "city_id" => 430,
            ),
            array(
                "id" => 5946,
                "name" => "Kali Bunder",
                "city_id" => 430,
            ),
            array(
                "id" => 5947,
                "name" => "Kebonpedes",
                "city_id" => 430,
            ),
            array(
                "id" => 5948,
                "name" => "Lengkong",
                "city_id" => 430,
            ),
            array(
                "id" => 5949,
                "name" => "Nagrak",
                "city_id" => 430,
            ),
            array(
                "id" => 5950,
                "name" => "Nyalindung",
                "city_id" => 430,
            ),
            array(
                "id" => 5951,
                "name" => "Pabuaran",
                "city_id" => 430,
            ),
            array(
                "id" => 5952,
                "name" => "Parakan Salak",
                "city_id" => 430,
            ),
            array(
                "id" => 5953,
                "name" => "Parung Kuda",
                "city_id" => 430,
            ),
            array(
                "id" => 5954,
                "name" => "Pelabuhan/Palabuhan Ratu",
                "city_id" => 430,
            ),
            array(
                "id" => 5955,
                "name" => "Purabaya",
                "city_id" => 430,
            ),
            array(
                "id" => 5956,
                "name" => "Sagaranten",
                "city_id" => 430,
            ),
            array(
                "id" => 5957,
                "name" => "Simpenan",
                "city_id" => 430,
            ),
            array(
                "id" => 5958,
                "name" => "Sukabumi",
                "city_id" => 430,
            ),
            array(
                "id" => 5959,
                "name" => "Sukalarang",
                "city_id" => 430,
            ),
            array(
                "id" => 5960,
                "name" => "Sukaraja",
                "city_id" => 430,
            ),
            array(
                "id" => 5961,
                "name" => "Surade",
                "city_id" => 430,
            ),
            array(
                "id" => 5962,
                "name" => "Tegal Buleud",
                "city_id" => 430,
            ),
            array(
                "id" => 5963,
                "name" => "Waluran",
                "city_id" => 430,
            ),
            array(
                "id" => 5964,
                "name" => "Warung Kiara",
                "city_id" => 430,
            ),
            array(
                "id" => 5965,
                "name" => "Baros",
                "city_id" => 431,
            ),
            array(
                "id" => 5966,
                "name" => "Cibeureum",
                "city_id" => 431,
            ),
            array(
                "id" => 5967,
                "name" => "Cikole",
                "city_id" => 431,
            ),
            array(
                "id" => 5968,
                "name" => "Citamiang",
                "city_id" => 431,
            ),
            array(
                "id" => 5969,
                "name" => "Gunung Puyuh",
                "city_id" => 431,
            ),
            array(
                "id" => 5970,
                "name" => "Lembursitu",
                "city_id" => 431,
            ),
            array(
                "id" => 5971,
                "name" => "Warudoyong",
                "city_id" => 431,
            ),
            array(
                "id" => 5972,
                "name" => "Balai Riam",
                "city_id" => 432,
            ),
            array(
                "id" => 5973,
                "name" => "Jelai",
                "city_id" => 432,
            ),
            array(
                "id" => 5974,
                "name" => "Pantai Lunci",
                "city_id" => 432,
            ),
            array(
                "id" => 5975,
                "name" => "Permata Kecubung",
                "city_id" => 432,
            ),
            array(
                "id" => 5976,
                "name" => "Sukamara",
                "city_id" => 432,
            ),
            array(
                "id" => 5977,
                "name" => "Baki",
                "city_id" => 433,
            ),
            array(
                "id" => 5978,
                "name" => "Bendosari",
                "city_id" => 433,
            ),
            array(
                "id" => 5979,
                "name" => "Bulu",
                "city_id" => 433,
            ),
            array(
                "id" => 5980,
                "name" => "Gatak",
                "city_id" => 433,
            ),
            array(
                "id" => 5981,
                "name" => "Grogol",
                "city_id" => 433,
            ),
            array(
                "id" => 5982,
                "name" => "Kartasura",
                "city_id" => 433,
            ),
            array(
                "id" => 5983,
                "name" => "Mojolaban",
                "city_id" => 433,
            ),
            array(
                "id" => 5984,
                "name" => "Nguter",
                "city_id" => 433,
            ),
            array(
                "id" => 5985,
                "name" => "Polokarto",
                "city_id" => 433,
            ),
            array(
                "id" => 5986,
                "name" => "Sukoharjo",
                "city_id" => 433,
            ),
            array(
                "id" => 5987,
                "name" => "Tawangsari",
                "city_id" => 433,
            ),
            array(
                "id" => 5988,
                "name" => "Weru",
                "city_id" => 433,
            ),
            array(
                "id" => 5989,
                "name" => "Kota Waikabubak",
                "city_id" => 434,
            ),
            array(
                "id" => 5990,
                "name" => "Lamboya",
                "city_id" => 434,
            ),
            array(
                "id" => 5991,
                "name" => "Lamboya Barat",
                "city_id" => 434,
            ),
            array(
                "id" => 5992,
                "name" => "Loli",
                "city_id" => 434,
            ),
            array(
                "id" => 5993,
                "name" => "Tana Righu",
                "city_id" => 434,
            ),
            array(
                "id" => 5994,
                "name" => "Wanokaka",
                "city_id" => 434,
            ),
            array(
                "id" => 5995,
                "name" => "Kodi",
                "city_id" => 435,
            ),
            array(
                "id" => 5996,
                "name" => "Kodi Balaghar",
                "city_id" => 435,
            ),
            array(
                "id" => 5997,
                "name" => "Kodi Bangedo",
                "city_id" => 435,
            ),
            array(
                "id" => 5998,
                "name" => "Kodi Utara",
                "city_id" => 435,
            ),
            array(
                "id" => 5999,
                "name" => "Kota Tambolaka",
                "city_id" => 435,
            ),
            array(
                "id" => 6000,
                "name" => "Loura (Laura)",
                "city_id" => 435,
            ),
            array(
                "id" => 6001,
                "name" => "Wewewa Barat",
                "city_id" => 435,
            ),
            array(
                "id" => 6002,
                "name" => "Wewewa Selatan",
                "city_id" => 435,
            ),
            array(
                "id" => 6003,
                "name" => "Wewewa Tengah (Wewera Tengah)",
                "city_id" => 435,
            ),
            array(
                "id" => 6004,
                "name" => "Wewewa Timur",
                "city_id" => 435,
            ),
            array(
                "id" => 6005,
                "name" => "Wewewa Utara",
                "city_id" => 435,
            ),
            array(
                "id" => 6006,
                "name" => "Katikutana",
                "city_id" => 436,
            ),
            array(
                "id" => 6007,
                "name" => "Katikutana Selatan",
                "city_id" => 436,
            ),
            array(
                "id" => 6008,
                "name" => "Mamboro",
                "city_id" => 436,
            ),
            array(
                "id" => 6009,
                "name" => "Umbu Ratu Nggay",
                "city_id" => 436,
            ),
            array(
                "id" => 6010,
                "name" => "Umbu Ratu Nggay Barat",
                "city_id" => 436,
            ),
            array(
                "id" => 6011,
                "name" => "Haharu",
                "city_id" => 437,
            ),
            array(
                "id" => 6012,
                "name" => "Kahaunguweti (Kahaungu Eti)",
                "city_id" => 437,
            ),
            array(
                "id" => 6013,
                "name" => "Kambata Mapambuhang",
                "city_id" => 437,
            ),
            array(
                "id" => 6014,
                "name" => "Kambera",
                "city_id" => 437,
            ),
            array(
                "id" => 6015,
                "name" => "Kanatang",
                "city_id" => 437,
            ),
            array(
                "id" => 6016,
                "name" => "Karera",
                "city_id" => 437,
            ),
            array(
                "id" => 6017,
                "name" => "Katala Hamu Lingu",
                "city_id" => 437,
            ),
            array(
                "id" => 6018,
                "name" => "Kota Waingapu",
                "city_id" => 437,
            ),
            array(
                "id" => 6019,
                "name" => "Lewa",
                "city_id" => 437,
            ),
            array(
                "id" => 6020,
                "name" => "Lewa Tidahu",
                "city_id" => 437,
            ),
            array(
                "id" => 6021,
                "name" => "Mahu",
                "city_id" => 437,
            ),
            array(
                "id" => 6022,
                "name" => "Matawai Lappau (La Pawu)",
                "city_id" => 437,
            ),
            array(
                "id" => 6023,
                "name" => "Ngadu Ngala",
                "city_id" => 437,
            ),
            array(
                "id" => 6024,
                "name" => "Nggaha Oriangu",
                "city_id" => 437,
            ),
            array(
                "id" => 6025,
                "name" => "Paberiwai",
                "city_id" => 437,
            ),
            array(
                "id" => 6026,
                "name" => "Pahunga Lodu",
                "city_id" => 437,
            ),
            array(
                "id" => 6027,
                "name" => "Pandawai",
                "city_id" => 437,
            ),
            array(
                "id" => 6028,
                "name" => "Pinupahar (Pirapahar)",
                "city_id" => 437,
            ),
            array(
                "id" => 6029,
                "name" => "Rindi",
                "city_id" => 437,
            ),
            array(
                "id" => 6030,
                "name" => "Tabundung",
                "city_id" => 437,
            ),
            array(
                "id" => 6031,
                "name" => "Umalulu",
                "city_id" => 437,
            ),
            array(
                "id" => 6032,
                "name" => "Wula Waijelu",
                "city_id" => 437,
            ),
            array(
                "id" => 6033,
                "name" => "Alas",
                "city_id" => 438,
            ),
            array(
                "id" => 6034,
                "name" => "Alas Barat",
                "city_id" => 438,
            ),
            array(
                "id" => 6035,
                "name" => "Batulanteh",
                "city_id" => 438,
            ),
            array(
                "id" => 6036,
                "name" => "Buer",
                "city_id" => 438,
            ),
            array(
                "id" => 6037,
                "name" => "Empang",
                "city_id" => 438,
            ),
            array(
                "id" => 6038,
                "name" => "Labangka",
                "city_id" => 438,
            ),
            array(
                "id" => 6039,
                "name" => "Labuhan Badas",
                "city_id" => 438,
            ),
            array(
                "id" => 6040,
                "name" => "Lantung",
                "city_id" => 438,
            ),
            array(
                "id" => 6041,
                "name" => "Lape (Lape Lopok)",
                "city_id" => 438,
            ),
            array(
                "id" => 6042,
                "name" => "Lenangguar",
                "city_id" => 438,
            ),
            array(
                "id" => 6043,
                "name" => "Lopok",
                "city_id" => 438,
            ),
            array(
                "id" => 6044,
                "name" => "Lunyuk",
                "city_id" => 438,
            ),
            array(
                "id" => 6045,
                "name" => "Maronge",
                "city_id" => 438,
            ),
            array(
                "id" => 6046,
                "name" => "Moyo Hilir",
                "city_id" => 438,
            ),
            array(
                "id" => 6047,
                "name" => "Moyo Hulu",
                "city_id" => 438,
            ),
            array(
                "id" => 6048,
                "name" => "Moyo Utara",
                "city_id" => 438,
            ),
            array(
                "id" => 6049,
                "name" => "Orong Telu",
                "city_id" => 438,
            ),
            array(
                "id" => 6050,
                "name" => "Plampang",
                "city_id" => 438,
            ),
            array(
                "id" => 6051,
                "name" => "Rhee",
                "city_id" => 438,
            ),
            array(
                "id" => 6052,
                "name" => "Ropang",
                "city_id" => 438,
            ),
            array(
                "id" => 6053,
                "name" => "Sumbawa",
                "city_id" => 438,
            ),
            array(
                "id" => 6054,
                "name" => "Tarano",
                "city_id" => 438,
            ),
            array(
                "id" => 6055,
                "name" => "Unter Iwes (Unterwiris)",
                "city_id" => 438,
            ),
            array(
                "id" => 6056,
                "name" => "Utan",
                "city_id" => 438,
            ),
            array(
                "id" => 6057,
                "name" => "Brang Ene",
                "city_id" => 439,
            ),
            array(
                "id" => 6058,
                "name" => "Brang Rea",
                "city_id" => 439,
            ),
            array(
                "id" => 6059,
                "name" => "Jereweh",
                "city_id" => 439,
            ),
            array(
                "id" => 6060,
                "name" => "Maluk",
                "city_id" => 439,
            ),
            array(
                "id" => 6061,
                "name" => "Poto Tano",
                "city_id" => 439,
            ),
            array(
                "id" => 6062,
                "name" => "Sateluk (Seteluk)",
                "city_id" => 439,
            ),
            array(
                "id" => 6063,
                "name" => "Sekongkang",
                "city_id" => 439,
            ),
            array(
                "id" => 6064,
                "name" => "Taliwang",
                "city_id" => 439,
            ),
            array(
                "id" => 6065,
                "name" => "Buahdua",
                "city_id" => 440,
            ),
            array(
                "id" => 6066,
                "name" => "Cibugel",
                "city_id" => 440,
            ),
            array(
                "id" => 6067,
                "name" => "Cimalaka",
                "city_id" => 440,
            ),
            array(
                "id" => 6068,
                "name" => "Cimanggung",
                "city_id" => 440,
            ),
            array(
                "id" => 6069,
                "name" => "Cisarua",
                "city_id" => 440,
            ),
            array(
                "id" => 6070,
                "name" => "Cisitu",
                "city_id" => 440,
            ),
            array(
                "id" => 6071,
                "name" => "Conggeang",
                "city_id" => 440,
            ),
            array(
                "id" => 6072,
                "name" => "Darmaraja",
                "city_id" => 440,
            ),
            array(
                "id" => 6073,
                "name" => "Ganeas",
                "city_id" => 440,
            ),
            array(
                "id" => 6074,
                "name" => "Jatigede",
                "city_id" => 440,
            ),
            array(
                "id" => 6075,
                "name" => "Jatinangor",
                "city_id" => 440,
            ),
            array(
                "id" => 6076,
                "name" => "Jatinunggal",
                "city_id" => 440,
            ),
            array(
                "id" => 6077,
                "name" => "Pamulihan",
                "city_id" => 440,
            ),
            array(
                "id" => 6078,
                "name" => "Paseh",
                "city_id" => 440,
            ),
            array(
                "id" => 6079,
                "name" => "Rancakalong",
                "city_id" => 440,
            ),
            array(
                "id" => 6080,
                "name" => "Situraja",
                "city_id" => 440,
            ),
            array(
                "id" => 6081,
                "name" => "Sukasari",
                "city_id" => 440,
            ),
            array(
                "id" => 6082,
                "name" => "Sumedang Selatan",
                "city_id" => 440,
            ),
            array(
                "id" => 6083,
                "name" => "Sumedang Utara",
                "city_id" => 440,
            ),
            array(
                "id" => 6084,
                "name" => "Surian",
                "city_id" => 440,
            ),
            array(
                "id" => 6085,
                "name" => "Tanjungkerta",
                "city_id" => 440,
            ),
            array(
                "id" => 6086,
                "name" => "Tanjungmedar",
                "city_id" => 440,
            ),
            array(
                "id" => 6087,
                "name" => "Tanjungsari",
                "city_id" => 440,
            ),
            array(
                "id" => 6088,
                "name" => "Tomo",
                "city_id" => 440,
            ),
            array(
                "id" => 6089,
                "name" => "Ujungjaya",
                "city_id" => 440,
            ),
            array(
                "id" => 6090,
                "name" => "Wado",
                "city_id" => 440,
            ),
            array(
                "id" => 6091,
                "name" => "Ambunten",
                "city_id" => 441,
            ),
            array(
                "id" => 6092,
                "name" => "Arjasa",
                "city_id" => 441,
            ),
            array(
                "id" => 6093,
                "name" => "Batang Batang",
                "city_id" => 441,
            ),
            array(
                "id" => 6094,
                "name" => "Batuan",
                "city_id" => 441,
            ),
            array(
                "id" => 6095,
                "name" => "Batuputih",
                "city_id" => 441,
            ),
            array(
                "id" => 6096,
                "name" => "Bluto",
                "city_id" => 441,
            ),
            array(
                "id" => 6097,
                "name" => "Dasuk",
                "city_id" => 441,
            ),
            array(
                "id" => 6098,
                "name" => "Dungkek",
                "city_id" => 441,
            ),
            array(
                "id" => 6099,
                "name" => "Ganding",
                "city_id" => 441,
            ),
            array(
                "id" => 6100,
                "name" => "Gapura",
                "city_id" => 441,
            ),
            array(
                "id" => 6101,
                "name" => "Gayam",
                "city_id" => 441,
            ),
            array(
                "id" => 6102,
                "name" => "Gili Ginting (Giligenteng)",
                "city_id" => 441,
            ),
            array(
                "id" => 6103,
                "name" => "Guluk Guluk",
                "city_id" => 441,
            ),
            array(
                "id" => 6104,
                "name" => "Kalianget",
                "city_id" => 441,
            ),
            array(
                "id" => 6105,
                "name" => "Kangayan",
                "city_id" => 441,
            ),
            array(
                "id" => 6106,
                "name" => "Kota Sumenep",
                "city_id" => 441,
            ),
            array(
                "id" => 6107,
                "name" => "Lenteng",
                "city_id" => 441,
            ),
            array(
                "id" => 6108,
                "name" => "Manding",
                "city_id" => 441,
            ),
            array(
                "id" => 6109,
                "name" => "Masalembu",
                "city_id" => 441,
            ),
            array(
                "id" => 6110,
                "name" => "Nonggunong",
                "city_id" => 441,
            ),
            array(
                "id" => 6111,
                "name" => "Pasongsongan",
                "city_id" => 441,
            ),
            array(
                "id" => 6112,
                "name" => "Pragaan",
                "city_id" => 441,
            ),
            array(
                "id" => 6113,
                "name" => "Ra'as (Raas)",
                "city_id" => 441,
            ),
            array(
                "id" => 6114,
                "name" => "Rubaru",
                "city_id" => 441,
            ),
            array(
                "id" => 6115,
                "name" => "Sapeken",
                "city_id" => 441,
            ),
            array(
                "id" => 6116,
                "name" => "Saronggi",
                "city_id" => 441,
            ),
            array(
                "id" => 6117,
                "name" => "Talango",
                "city_id" => 441,
            ),
            array(
                "id" => 6118,
                "name" => "Hamparan Rawang",
                "city_id" => 442,
            ),
            array(
                "id" => 6119,
                "name" => "Koto Baru",
                "city_id" => 442,
            ),
            array(
                "id" => 6120,
                "name" => "Kumun Debai",
                "city_id" => 442,
            ),
            array(
                "id" => 6121,
                "name" => "Pesisir Bukit",
                "city_id" => 442,
            ),
            array(
                "id" => 6122,
                "name" => "Pondok Tinggi",
                "city_id" => 442,
            ),
            array(
                "id" => 6123,
                "name" => "Sungai Bungkal",
                "city_id" => 442,
            ),
            array(
                "id" => 6124,
                "name" => "Sungai Penuh",
                "city_id" => 442,
            ),
            array(
                "id" => 6125,
                "name" => "Tanah Kampung",
                "city_id" => 442,
            ),
            array(
                "id" => 6126,
                "name" => "Kepulauan Aruri",
                "city_id" => 443,
            ),
            array(
                "id" => 6127,
                "name" => "Supiori Barat",
                "city_id" => 443,
            ),
            array(
                "id" => 6128,
                "name" => "Supiori Selatan",
                "city_id" => 443,
            ),
            array(
                "id" => 6129,
                "name" => "Supiori Timur",
                "city_id" => 443,
            ),
            array(
                "id" => 6130,
                "name" => "Supiori Utara",
                "city_id" => 443,
            ),
            array(
                "id" => 6131,
                "name" => "Asemrowo",
                "city_id" => 444,
            ),
            array(
                "id" => 6132,
                "name" => "Benowo",
                "city_id" => 444,
            ),
            array(
                "id" => 6133,
                "name" => "Bubutan",
                "city_id" => 444,
            ),
            array(
                "id" => 6134,
                "name" => "Bulak",
                "city_id" => 444,
            ),
            array(
                "id" => 6135,
                "name" => "Dukuh Pakis",
                "city_id" => 444,
            ),
            array(
                "id" => 6136,
                "name" => "Gayungan",
                "city_id" => 444,
            ),
            array(
                "id" => 6137,
                "name" => "Genteng",
                "city_id" => 444,
            ),
            array(
                "id" => 6138,
                "name" => "Gubeng",
                "city_id" => 444,
            ),
            array(
                "id" => 6139,
                "name" => "Gununganyar",
                "city_id" => 444,
            ),
            array(
                "id" => 6140,
                "name" => "Jambangan",
                "city_id" => 444,
            ),
            array(
                "id" => 6141,
                "name" => "Karangpilang",
                "city_id" => 444,
            ),
            array(
                "id" => 6142,
                "name" => "Kenjeran",
                "city_id" => 444,
            ),
            array(
                "id" => 6143,
                "name" => "Krembangan",
                "city_id" => 444,
            ),
            array(
                "id" => 6144,
                "name" => "Lakar Santri",
                "city_id" => 444,
            ),
            array(
                "id" => 6145,
                "name" => "Mulyorejo",
                "city_id" => 444,
            ),
            array(
                "id" => 6146,
                "name" => "Pabean Cantikan",
                "city_id" => 444,
            ),
            array(
                "id" => 6147,
                "name" => "Pakal",
                "city_id" => 444,
            ),
            array(
                "id" => 6148,
                "name" => "Rungkut",
                "city_id" => 444,
            ),
            array(
                "id" => 6149,
                "name" => "Sambikerep",
                "city_id" => 444,
            ),
            array(
                "id" => 6150,
                "name" => "Sawahan",
                "city_id" => 444,
            ),
            array(
                "id" => 6151,
                "name" => "Semampir",
                "city_id" => 444,
            ),
            array(
                "id" => 6152,
                "name" => "Simokerto",
                "city_id" => 444,
            ),
            array(
                "id" => 6153,
                "name" => "Sukolilo",
                "city_id" => 444,
            ),
            array(
                "id" => 6154,
                "name" => "Sukomanunggal",
                "city_id" => 444,
            ),
            array(
                "id" => 6155,
                "name" => "Tambaksari",
                "city_id" => 444,
            ),
            array(
                "id" => 6156,
                "name" => "Tandes",
                "city_id" => 444,
            ),
            array(
                "id" => 6157,
                "name" => "Tegalsari",
                "city_id" => 444,
            ),
            array(
                "id" => 6158,
                "name" => "Tenggilis Mejoyo",
                "city_id" => 444,
            ),
            array(
                "id" => 6159,
                "name" => "Wiyung",
                "city_id" => 444,
            ),
            array(
                "id" => 6160,
                "name" => "Wonocolo",
                "city_id" => 444,
            ),
            array(
                "id" => 6161,
                "name" => "Wonokromo",
                "city_id" => 444,
            ),
            array(
                "id" => 6162,
                "name" => "Banjarsari",
                "city_id" => 445,
            ),
            array(
                "id" => 6163,
                "name" => "Jebres",
                "city_id" => 445,
            ),
            array(
                "id" => 6164,
                "name" => "Laweyan",
                "city_id" => 445,
            ),
            array(
                "id" => 6165,
                "name" => "Pasar Kliwon",
                "city_id" => 445,
            ),
            array(
                "id" => 6166,
                "name" => "Serengan",
                "city_id" => 445,
            ),
            array(
                "id" => 6167,
                "name" => "Banua Lawas",
                "city_id" => 446,
            ),
            array(
                "id" => 6168,
                "name" => "Bintang Ara",
                "city_id" => 446,
            ),
            array(
                "id" => 6169,
                "name" => "Haruai",
                "city_id" => 446,
            ),
            array(
                "id" => 6170,
                "name" => "Jaro",
                "city_id" => 446,
            ),
            array(
                "id" => 6171,
                "name" => "Kelua (Klua)",
                "city_id" => 446,
            ),
            array(
                "id" => 6172,
                "name" => "Muara Harus",
                "city_id" => 446,
            ),
            array(
                "id" => 6173,
                "name" => "Muara Uya",
                "city_id" => 446,
            ),
            array(
                "id" => 6174,
                "name" => "Murung Pudak",
                "city_id" => 446,
            ),
            array(
                "id" => 6175,
                "name" => "Pugaan",
                "city_id" => 446,
            ),
            array(
                "id" => 6176,
                "name" => "Tanjung",
                "city_id" => 446,
            ),
            array(
                "id" => 6177,
                "name" => "Tanta",
                "city_id" => 446,
            ),
            array(
                "id" => 6178,
                "name" => "Upau",
                "city_id" => 446,
            ),
            array(
                "id" => 6179,
                "name" => "Baturiti",
                "city_id" => 447,
            ),
            array(
                "id" => 6180,
                "name" => "Kediri",
                "city_id" => 447,
            ),
            array(
                "id" => 6181,
                "name" => "Kerambitan",
                "city_id" => 447,
            ),
            array(
                "id" => 6182,
                "name" => "Marga",
                "city_id" => 447,
            ),
            array(
                "id" => 6183,
                "name" => "Penebel",
                "city_id" => 447,
            ),
            array(
                "id" => 6184,
                "name" => "Pupuan",
                "city_id" => 447,
            ),
            array(
                "id" => 6185,
                "name" => "Selemadeg",
                "city_id" => 447,
            ),
            array(
                "id" => 6186,
                "name" => "Selemadeg / Salamadeg Timur",
                "city_id" => 447,
            ),
            array(
                "id" => 6187,
                "name" => "Selemadeg / Salemadeg Barat",
                "city_id" => 447,
            ),
            array(
                "id" => 6188,
                "name" => "Tabanan",
                "city_id" => 447,
            ),
            array(
                "id" => 6189,
                "name" => "Galesong",
                "city_id" => 448,
            ),
            array(
                "id" => 6190,
                "name" => "Galesong Selatan",
                "city_id" => 448,
            ),
            array(
                "id" => 6191,
                "name" => "Galesong Utara",
                "city_id" => 448,
            ),
            array(
                "id" => 6192,
                "name" => "Mangara Bombang",
                "city_id" => 448,
            ),
            array(
                "id" => 6193,
                "name" => "Mappakasunggu",
                "city_id" => 448,
            ),
            array(
                "id" => 6194,
                "name" => "Patallassang",
                "city_id" => 448,
            ),
            array(
                "id" => 6195,
                "name" => "Polombangkeng Selatan (Polobangkeng)",
                "city_id" => 448,
            ),
            array(
                "id" => 6196,
                "name" => "Polombangkeng Utara (Polobangkeng)",
                "city_id" => 448,
            ),
            array(
                "id" => 6197,
                "name" => "Sanrobone",
                "city_id" => 448,
            ),
            array(
                "id" => 6198,
                "name" => "Abun",
                "city_id" => 449,
            ),
            array(
                "id" => 6199,
                "name" => "Amberbaken",
                "city_id" => 449,
            ),
            array(
                "id" => 6200,
                "name" => "Fef (Peef)",
                "city_id" => 449,
            ),
            array(
                "id" => 6201,
                "name" => "Kebar",
                "city_id" => 449,
            ),
            array(
                "id" => 6202,
                "name" => "Kwoor",
                "city_id" => 449,
            ),
            array(
                "id" => 6203,
                "name" => "Miyah (Meyah)",
                "city_id" => 449,
            ),
            array(
                "id" => 6204,
                "name" => "Moraid",
                "city_id" => 449,
            ),
            array(
                "id" => 6205,
                "name" => "Mubrani",
                "city_id" => 449,
            ),
            array(
                "id" => 6206,
                "name" => "Sausapor",
                "city_id" => 449,
            ),
            array(
                "id" => 6207,
                "name" => "Senopi",
                "city_id" => 449,
            ),
            array(
                "id" => 6208,
                "name" => "Syujak",
                "city_id" => 449,
            ),
            array(
                "id" => 6209,
                "name" => "Yembun",
                "city_id" => 449,
            ),
            array(
                "id" => 6210,
                "name" => "Betayau",
                "city_id" => 450,
            ),
            array(
                "id" => 6211,
                "name" => "Sesayap",
                "city_id" => 450,
            ),
            array(
                "id" => 6212,
                "name" => "Sesayap Hilir",
                "city_id" => 450,
            ),
            array(
                "id" => 6213,
                "name" => "Tana Lia (Tanah Lia)",
                "city_id" => 450,
            ),
            array(
                "id" => 6214,
                "name" => "Bittuang",
                "city_id" => 451,
            ),
            array(
                "id" => 6215,
                "name" => "Bonggakaradeng",
                "city_id" => 451,
            ),
            array(
                "id" => 6216,
                "name" => "Gandang Batu Sillanan",
                "city_id" => 451,
            ),
            array(
                "id" => 6217,
                "name" => "Kurra",
                "city_id" => 451,
            ),
            array(
                "id" => 6218,
                "name" => "Makale",
                "city_id" => 451,
            ),
            array(
                "id" => 6219,
                "name" => "Makale Selatan",
                "city_id" => 451,
            ),
            array(
                "id" => 6220,
                "name" => "Makale Utara",
                "city_id" => 451,
            ),
            array(
                "id" => 6221,
                "name" => "Malimbong Balepe",
                "city_id" => 451,
            ),
            array(
                "id" => 6222,
                "name" => "Mappak",
                "city_id" => 451,
            ),
            array(
                "id" => 6223,
                "name" => "Masanda",
                "city_id" => 451,
            ),
            array(
                "id" => 6224,
                "name" => "Mengkendek",
                "city_id" => 451,
            ),
            array(
                "id" => 6225,
                "name" => "Rano",
                "city_id" => 451,
            ),
            array(
                "id" => 6226,
                "name" => "Rantetayo",
                "city_id" => 451,
            ),
            array(
                "id" => 6227,
                "name" => "Rembon",
                "city_id" => 451,
            ),
            array(
                "id" => 6228,
                "name" => "Saluputti",
                "city_id" => 451,
            ),
            array(
                "id" => 6229,
                "name" => "Sangalla (Sanggala)",
                "city_id" => 451,
            ),
            array(
                "id" => 6230,
                "name" => "Sangalla Selatan",
                "city_id" => 451,
            ),
            array(
                "id" => 6231,
                "name" => "Sangalla Utara",
                "city_id" => 451,
            ),
            array(
                "id" => 6232,
                "name" => "Simbuang",
                "city_id" => 451,
            ),
            array(
                "id" => 6233,
                "name" => "Angsana",
                "city_id" => 452,
            ),
            array(
                "id" => 6234,
                "name" => "Batulicin",
                "city_id" => 452,
            ),
            array(
                "id" => 6235,
                "name" => "Karang Bintang",
                "city_id" => 452,
            ),
            array(
                "id" => 6236,
                "name" => "Kuranji",
                "city_id" => 452,
            ),
            array(
                "id" => 6237,
                "name" => "Kusan Hilir",
                "city_id" => 452,
            ),
            array(
                "id" => 6238,
                "name" => "Kusan Hulu",
                "city_id" => 452,
            ),
            array(
                "id" => 6239,
                "name" => "Mantewe",
                "city_id" => 452,
            ),
            array(
                "id" => 6240,
                "name" => "Satui",
                "city_id" => 452,
            ),
            array(
                "id" => 6241,
                "name" => "Simpang Empat",
                "city_id" => 452,
            ),
            array(
                "id" => 6242,
                "name" => "Sungai Loban",
                "city_id" => 452,
            ),
            array(
                "id" => 6243,
                "name" => "Batipuh",
                "city_id" => 453,
            ),
            array(
                "id" => 6244,
                "name" => "Batipuh Selatan",
                "city_id" => 453,
            ),
            array(
                "id" => 6245,
                "name" => "Lima Kaum",
                "city_id" => 453,
            ),
            array(
                "id" => 6246,
                "name" => "Lintau Buo",
                "city_id" => 453,
            ),
            array(
                "id" => 6247,
                "name" => "Lintau Buo Utara",
                "city_id" => 453,
            ),
            array(
                "id" => 6248,
                "name" => "Padang Ganting",
                "city_id" => 453,
            ),
            array(
                "id" => 6249,
                "name" => "Pariangan",
                "city_id" => 453,
            ),
            array(
                "id" => 6250,
                "name" => "Rambatan",
                "city_id" => 453,
            ),
            array(
                "id" => 6251,
                "name" => "Salimpaung",
                "city_id" => 453,
            ),
            array(
                "id" => 6252,
                "name" => "Sepuluh Koto (X Koto)",
                "city_id" => 453,
            ),
            array(
                "id" => 6253,
                "name" => "Sungai Tarab",
                "city_id" => 453,
            ),
            array(
                "id" => 6254,
                "name" => "Sungayang",
                "city_id" => 453,
            ),
            array(
                "id" => 6255,
                "name" => "Tanjung Baru",
                "city_id" => 453,
            ),
            array(
                "id" => 6256,
                "name" => "Tanjung Emas",
                "city_id" => 453,
            ),
            array(
                "id" => 6257,
                "name" => "Bajuin",
                "city_id" => 454,
            ),
            array(
                "id" => 6258,
                "name" => "Bati-Bati",
                "city_id" => 454,
            ),
            array(
                "id" => 6259,
                "name" => "Batu Ampar",
                "city_id" => 454,
            ),
            array(
                "id" => 6260,
                "name" => "Bumi Makmur",
                "city_id" => 454,
            ),
            array(
                "id" => 6261,
                "name" => "Jorong",
                "city_id" => 454,
            ),
            array(
                "id" => 6262,
                "name" => "Kintap",
                "city_id" => 454,
            ),
            array(
                "id" => 6263,
                "name" => "Kurau",
                "city_id" => 454,
            ),
            array(
                "id" => 6264,
                "name" => "Panyipatan",
                "city_id" => 454,
            ),
            array(
                "id" => 6265,
                "name" => "Pelaihari",
                "city_id" => 454,
            ),
            array(
                "id" => 6266,
                "name" => "Takisung",
                "city_id" => 454,
            ),
            array(
                "id" => 6267,
                "name" => "Tambang Ulang",
                "city_id" => 454,
            ),
            array(
                "id" => 6268,
                "name" => "Balaraja",
                "city_id" => 455,
            ),
            array(
                "id" => 6269,
                "name" => "Cikupa",
                "city_id" => 455,
            ),
            array(
                "id" => 6270,
                "name" => "Cisauk",
                "city_id" => 455,
            ),
            array(
                "id" => 6271,
                "name" => "Cisoka",
                "city_id" => 455,
            ),
            array(
                "id" => 6272,
                "name" => "Curug",
                "city_id" => 455,
            ),
            array(
                "id" => 6273,
                "name" => "Gunung Kaler",
                "city_id" => 455,
            ),
            array(
                "id" => 6274,
                "name" => "Jambe",
                "city_id" => 455,
            ),
            array(
                "id" => 6275,
                "name" => "Jayanti",
                "city_id" => 455,
            ),
            array(
                "id" => 6276,
                "name" => "Kelapa Dua",
                "city_id" => 455,
            ),
            array(
                "id" => 6277,
                "name" => "Kemiri",
                "city_id" => 455,
            ),
            array(
                "id" => 6278,
                "name" => "Kosambi",
                "city_id" => 455,
            ),
            array(
                "id" => 6279,
                "name" => "Kresek",
                "city_id" => 455,
            ),
            array(
                "id" => 6280,
                "name" => "Kronjo",
                "city_id" => 455,
            ),
            array(
                "id" => 6281,
                "name" => "Legok",
                "city_id" => 455,
            ),
            array(
                "id" => 6282,
                "name" => "Mauk",
                "city_id" => 455,
            ),
            array(
                "id" => 6283,
                "name" => "Mekar Baru",
                "city_id" => 455,
            ),
            array(
                "id" => 6284,
                "name" => "Pagedangan",
                "city_id" => 455,
            ),
            array(
                "id" => 6285,
                "name" => "Pakuhaji",
                "city_id" => 455,
            ),
            array(
                "id" => 6286,
                "name" => "Panongan",
                "city_id" => 455,
            ),
            array(
                "id" => 6287,
                "name" => "Pasar Kemis",
                "city_id" => 455,
            ),
            array(
                "id" => 6288,
                "name" => "Rajeg",
                "city_id" => 455,
            ),
            array(
                "id" => 6289,
                "name" => "Sepatan",
                "city_id" => 455,
            ),
            array(
                "id" => 6290,
                "name" => "Sepatan Timur",
                "city_id" => 455,
            ),
            array(
                "id" => 6291,
                "name" => "Sindang Jaya",
                "city_id" => 455,
            ),
            array(
                "id" => 6292,
                "name" => "Solear",
                "city_id" => 455,
            ),
            array(
                "id" => 6293,
                "name" => "Sukadiri",
                "city_id" => 455,
            ),
            array(
                "id" => 6294,
                "name" => "Sukamulya",
                "city_id" => 455,
            ),
            array(
                "id" => 6295,
                "name" => "Teluknaga",
                "city_id" => 455,
            ),
            array(
                "id" => 6296,
                "name" => "Tigaraksa",
                "city_id" => 455,
            ),
            array(
                "id" => 6297,
                "name" => "Batuceper",
                "city_id" => 456,
            ),
            array(
                "id" => 6298,
                "name" => "Benda",
                "city_id" => 456,
            ),
            array(
                "id" => 6299,
                "name" => "Cibodas",
                "city_id" => 456,
            ),
            array(
                "id" => 6300,
                "name" => "Ciledug",
                "city_id" => 456,
            ),
            array(
                "id" => 6301,
                "name" => "Cipondoh",
                "city_id" => 456,
            ),
            array(
                "id" => 6302,
                "name" => "Jatiuwung",
                "city_id" => 456,
            ),
            array(
                "id" => 6303,
                "name" => "Karang Tengah",
                "city_id" => 456,
            ),
            array(
                "id" => 6304,
                "name" => "Karawaci",
                "city_id" => 456,
            ),
            array(
                "id" => 6305,
                "name" => "Larangan",
                "city_id" => 456,
            ),
            array(
                "id" => 6306,
                "name" => "Neglasari",
                "city_id" => 456,
            ),
            array(
                "id" => 6307,
                "name" => "Periuk",
                "city_id" => 456,
            ),
            array(
                "id" => 6308,
                "name" => "Pinang (Penang)",
                "city_id" => 456,
            ),
            array(
                "id" => 6309,
                "name" => "Tangerang",
                "city_id" => 456,
            ),
            array(
                "id" => 6310,
                "name" => "Ciputat",
                "city_id" => 457,
            ),
            array(
                "id" => 6311,
                "name" => "Ciputat Timur",
                "city_id" => 457,
            ),
            array(
                "id" => 6312,
                "name" => "Pamulang",
                "city_id" => 457,
            ),
            array(
                "id" => 6313,
                "name" => "Pondok Aren",
                "city_id" => 457,
            ),
            array(
                "id" => 6314,
                "name" => "Serpong",
                "city_id" => 457,
            ),
            array(
                "id" => 6315,
                "name" => "Serpong Utara",
                "city_id" => 457,
            ),
            array(
                "id" => 6316,
                "name" => "Setu",
                "city_id" => 457,
            ),
            array(
                "id" => 6317,
                "name" => "Air Naningan",
                "city_id" => 458,
            ),
            array(
                "id" => 6318,
                "name" => "Bandar Negeri Semuong",
                "city_id" => 458,
            ),
            array(
                "id" => 6319,
                "name" => "Bulok",
                "city_id" => 458,
            ),
            array(
                "id" => 6320,
                "name" => "Cukuh Balak",
                "city_id" => 458,
            ),
            array(
                "id" => 6321,
                "name" => "Gisting",
                "city_id" => 458,
            ),
            array(
                "id" => 6322,
                "name" => "Gunung Alip",
                "city_id" => 458,
            ),
            array(
                "id" => 6323,
                "name" => "Kelumbayan",
                "city_id" => 458,
            ),
            array(
                "id" => 6324,
                "name" => "Kelumbayan Barat",
                "city_id" => 458,
            ),
            array(
                "id" => 6325,
                "name" => "Kota Agung (Kota Agung Pusat)",
                "city_id" => 458,
            ),
            array(
                "id" => 6326,
                "name" => "Kota Agung Barat",
                "city_id" => 458,
            ),
            array(
                "id" => 6327,
                "name" => "Kota Agung Timur",
                "city_id" => 458,
            ),
            array(
                "id" => 6328,
                "name" => "Limau",
                "city_id" => 458,
            ),
            array(
                "id" => 6329,
                "name" => "Pematang Sawa",
                "city_id" => 458,
            ),
            array(
                "id" => 6330,
                "name" => "Pugung",
                "city_id" => 458,
            ),
            array(
                "id" => 6331,
                "name" => "Pulau Panggung",
                "city_id" => 458,
            ),
            array(
                "id" => 6332,
                "name" => "Semaka",
                "city_id" => 458,
            ),
            array(
                "id" => 6333,
                "name" => "Sumberejo",
                "city_id" => 458,
            ),
            array(
                "id" => 6334,
                "name" => "Talang Padang",
                "city_id" => 458,
            ),
            array(
                "id" => 6335,
                "name" => "Ulubelu",
                "city_id" => 458,
            ),
            array(
                "id" => 6336,
                "name" => "Wonosobo",
                "city_id" => 458,
            ),
            array(
                "id" => 6337,
                "name" => "Datuk Bandar",
                "city_id" => 459,
            ),
            array(
                "id" => 6338,
                "name" => "Datuk Bandar Timur",
                "city_id" => 459,
            ),
            array(
                "id" => 6339,
                "name" => "Sei Tualang Raso",
                "city_id" => 459,
            ),
            array(
                "id" => 6340,
                "name" => "Tanjung Balai Selatan",
                "city_id" => 459,
            ),
            array(
                "id" => 6341,
                "name" => "Tanjung Balai Utara",
                "city_id" => 459,
            ),
            array(
                "id" => 6342,
                "name" => "Teluk Nibung",
                "city_id" => 459,
            ),
            array(
                "id" => 6343,
                "name" => "Batang Asam",
                "city_id" => 460,
            ),
            array(
                "id" => 6344,
                "name" => "Betara",
                "city_id" => 460,
            ),
            array(
                "id" => 6345,
                "name" => "Bram Itam",
                "city_id" => 460,
            ),
            array(
                "id" => 6346,
                "name" => "Kuala Betara",
                "city_id" => 460,
            ),
            array(
                "id" => 6347,
                "name" => "Merlung",
                "city_id" => 460,
            ),
            array(
                "id" => 6348,
                "name" => "Muara Papalik",
                "city_id" => 460,
            ),
            array(
                "id" => 6349,
                "name" => "Pengabuan",
                "city_id" => 460,
            ),
            array(
                "id" => 6350,
                "name" => "Renah Mendaluh",
                "city_id" => 460,
            ),
            array(
                "id" => 6351,
                "name" => "Seberang Kota",
                "city_id" => 460,
            ),
            array(
                "id" => 6352,
                "name" => "Senyerang",
                "city_id" => 460,
            ),
            array(
                "id" => 6353,
                "name" => "Tebing Tinggi",
                "city_id" => 460,
            ),
            array(
                "id" => 6354,
                "name" => "Tungkal Ilir",
                "city_id" => 460,
            ),
            array(
                "id" => 6355,
                "name" => "Tungkal Ulu",
                "city_id" => 460,
            ),
            array(
                "id" => 6356,
                "name" => "Berbak",
                "city_id" => 461,
            ),
            array(
                "id" => 6357,
                "name" => "Dendang",
                "city_id" => 461,
            ),
            array(
                "id" => 6358,
                "name" => "Geragai",
                "city_id" => 461,
            ),
            array(
                "id" => 6359,
                "name" => "Kuala Jambi",
                "city_id" => 461,
            ),
            array(
                "id" => 6360,
                "name" => "Mendahara",
                "city_id" => 461,
            ),
            array(
                "id" => 6361,
                "name" => "Mendahara Ulu",
                "city_id" => 461,
            ),
            array(
                "id" => 6362,
                "name" => "Muara Sabak Barat",
                "city_id" => 461,
            ),
            array(
                "id" => 6363,
                "name" => "Muara Sabak Timur",
                "city_id" => 461,
            ),
            array(
                "id" => 6364,
                "name" => "Nipah Panjang",
                "city_id" => 461,
            ),
            array(
                "id" => 6365,
                "name" => "Rantau Rasau",
                "city_id" => 461,
            ),
            array(
                "id" => 6366,
                "name" => "Sadu",
                "city_id" => 461,
            ),
            array(
                "id" => 6367,
                "name" => "Bukit Bestari",
                "city_id" => 462,
            ),
            array(
                "id" => 6368,
                "name" => "Tanjung Pinang Barat",
                "city_id" => 462,
            ),
            array(
                "id" => 6369,
                "name" => "Tanjung Pinang Kota",
                "city_id" => 462,
            ),
            array(
                "id" => 6370,
                "name" => "Tanjung Pinang Timur",
                "city_id" => 462,
            ),
            array(
                "id" => 6371,
                "name" => "Aek Bilah",
                "city_id" => 463,
            ),
            array(
                "id" => 6372,
                "name" => "Angkola Barat (Padang Sidempuan)",
                "city_id" => 463,
            ),
            array(
                "id" => 6373,
                "name" => "Angkola Sangkunur",
                "city_id" => 463,
            ),
            array(
                "id" => 6374,
                "name" => "Angkola Selatan (Siais)",
                "city_id" => 463,
            ),
            array(
                "id" => 6375,
                "name" => "Angkola Timur (Padang Sidempuan)",
                "city_id" => 463,
            ),
            array(
                "id" => 6376,
                "name" => "Arse",
                "city_id" => 463,
            ),
            array(
                "id" => 6377,
                "name" => "Batang Angkola",
                "city_id" => 463,
            ),
            array(
                "id" => 6378,
                "name" => "Batang Toru",
                "city_id" => 463,
            ),
            array(
                "id" => 6379,
                "name" => "Marancar",
                "city_id" => 463,
            ),
            array(
                "id" => 6380,
                "name" => "Muara Batang Toru",
                "city_id" => 463,
            ),
            array(
                "id" => 6381,
                "name" => "Saipar Dolok Hole",
                "city_id" => 463,
            ),
            array(
                "id" => 6382,
                "name" => "Sayur Matinggi",
                "city_id" => 463,
            ),
            array(
                "id" => 6383,
                "name" => "Sipirok",
                "city_id" => 463,
            ),
            array(
                "id" => 6384,
                "name" => "Tano Tombangan Angkola",
                "city_id" => 463,
            ),
            array(
                "id" => 6385,
                "name" => "Andam Dewi",
                "city_id" => 464,
            ),
            array(
                "id" => 6386,
                "name" => "Badiri",
                "city_id" => 464,
            ),
            array(
                "id" => 6387,
                "name" => "Barus",
                "city_id" => 464,
            ),
            array(
                "id" => 6388,
                "name" => "Barus Utara",
                "city_id" => 464,
            ),
            array(
                "id" => 6389,
                "name" => "Kolang",
                "city_id" => 464,
            ),
            array(
                "id" => 6390,
                "name" => "Lumut",
                "city_id" => 464,
            ),
            array(
                "id" => 6391,
                "name" => "Manduamas",
                "city_id" => 464,
            ),
            array(
                "id" => 6392,
                "name" => "Pandan",
                "city_id" => 464,
            ),
            array(
                "id" => 6393,
                "name" => "Pasaribu Tobing",
                "city_id" => 464,
            ),
            array(
                "id" => 6394,
                "name" => "Pinangsori",
                "city_id" => 464,
            ),
            array(
                "id" => 6395,
                "name" => "Sarudik",
                "city_id" => 464,
            ),
            array(
                "id" => 6396,
                "name" => "Sibabangun",
                "city_id" => 464,
            ),
            array(
                "id" => 6397,
                "name" => "Sirandorung",
                "city_id" => 464,
            ),
            array(
                "id" => 6398,
                "name" => "Sitahuis",
                "city_id" => 464,
            ),
            array(
                "id" => 6399,
                "name" => "Sorkam",
                "city_id" => 464,
            ),
            array(
                "id" => 6400,
                "name" => "Sorkam Barat",
                "city_id" => 464,
            ),
            array(
                "id" => 6401,
                "name" => "Sosor Gadong",
                "city_id" => 464,
            ),
            array(
                "id" => 6402,
                "name" => "Suka Bangun",
                "city_id" => 464,
            ),
            array(
                "id" => 6403,
                "name" => "Tapian Nauli",
                "city_id" => 464,
            ),
            array(
                "id" => 6404,
                "name" => "Tukka",
                "city_id" => 464,
            ),
            array(
                "id" => 6405,
                "name" => "Adian Koting",
                "city_id" => 465,
            ),
            array(
                "id" => 6406,
                "name" => "Garoga",
                "city_id" => 465,
            ),
            array(
                "id" => 6407,
                "name" => "Muara",
                "city_id" => 465,
            ),
            array(
                "id" => 6408,
                "name" => "Pagaran",
                "city_id" => 465,
            ),
            array(
                "id" => 6409,
                "name" => "Pahae Jae",
                "city_id" => 465,
            ),
            array(
                "id" => 6410,
                "name" => "Pahae Julu",
                "city_id" => 465,
            ),
            array(
                "id" => 6411,
                "name" => "Pangaribuan",
                "city_id" => 465,
            ),
            array(
                "id" => 6412,
                "name" => "Parmonangan",
                "city_id" => 465,
            ),
            array(
                "id" => 6413,
                "name" => "Purbatua",
                "city_id" => 465,
            ),
            array(
                "id" => 6414,
                "name" => "Siatas Barita",
                "city_id" => 465,
            ),
            array(
                "id" => 6415,
                "name" => "Siborong-Borong",
                "city_id" => 465,
            ),
            array(
                "id" => 6416,
                "name" => "Simangumban",
                "city_id" => 465,
            ),
            array(
                "id" => 6417,
                "name" => "Sipahutar",
                "city_id" => 465,
            ),
            array(
                "id" => 6418,
                "name" => "Sipoholon",
                "city_id" => 465,
            ),
            array(
                "id" => 6419,
                "name" => "Tarutung",
                "city_id" => 465,
            ),
            array(
                "id" => 6420,
                "name" => "Bakarangan",
                "city_id" => 466,
            ),
            array(
                "id" => 6421,
                "name" => "Binuang",
                "city_id" => 466,
            ),
            array(
                "id" => 6422,
                "name" => "Bungur",
                "city_id" => 466,
            ),
            array(
                "id" => 6423,
                "name" => "Candi Laras Selatan",
                "city_id" => 466,
            ),
            array(
                "id" => 6424,
                "name" => "Candi Laras Utara",
                "city_id" => 466,
            ),
            array(
                "id" => 6425,
                "name" => "Hatungun",
                "city_id" => 466,
            ),
            array(
                "id" => 6426,
                "name" => "Lokpaikat",
                "city_id" => 466,
            ),
            array(
                "id" => 6427,
                "name" => "Piani",
                "city_id" => 466,
            ),
            array(
                "id" => 6428,
                "name" => "Salam Babaris",
                "city_id" => 466,
            ),
            array(
                "id" => 6429,
                "name" => "Tapin Selatan",
                "city_id" => 466,
            ),
            array(
                "id" => 6430,
                "name" => "Tapin Tengah",
                "city_id" => 466,
            ),
            array(
                "id" => 6431,
                "name" => "Tapin Utara",
                "city_id" => 466,
            ),
            array(
                "id" => 6432,
                "name" => "Tarakan Barat",
                "city_id" => 467,
            ),
            array(
                "id" => 6433,
                "name" => "Tarakan Tengah",
                "city_id" => 467,
            ),
            array(
                "id" => 6434,
                "name" => "Tarakan Timur",
                "city_id" => 467,
            ),
            array(
                "id" => 6435,
                "name" => "Tarakan Utara",
                "city_id" => 467,
            ),
            array(
                "id" => 6436,
                "name" => "Bantarkalong",
                "city_id" => 468,
            ),
            array(
                "id" => 6437,
                "name" => "Bojongasih",
                "city_id" => 468,
            ),
            array(
                "id" => 6438,
                "name" => "Bojonggambir",
                "city_id" => 468,
            ),
            array(
                "id" => 6439,
                "name" => "Ciawi",
                "city_id" => 468,
            ),
            array(
                "id" => 6440,
                "name" => "Cibalong",
                "city_id" => 468,
            ),
            array(
                "id" => 6441,
                "name" => "Cigalontang",
                "city_id" => 468,
            ),
            array(
                "id" => 6442,
                "name" => "Cikalong",
                "city_id" => 468,
            ),
            array(
                "id" => 6443,
                "name" => "Cikatomas",
                "city_id" => 468,
            ),
            array(
                "id" => 6444,
                "name" => "Cineam",
                "city_id" => 468,
            ),
            array(
                "id" => 6445,
                "name" => "Cipatujah",
                "city_id" => 468,
            ),
            array(
                "id" => 6446,
                "name" => "Cisayong",
                "city_id" => 468,
            ),
            array(
                "id" => 6447,
                "name" => "Culamega",
                "city_id" => 468,
            ),
            array(
                "id" => 6448,
                "name" => "Gunung Tanjung",
                "city_id" => 468,
            ),
            array(
                "id" => 6449,
                "name" => "Jamanis",
                "city_id" => 468,
            ),
            array(
                "id" => 6450,
                "name" => "Jatiwaras",
                "city_id" => 468,
            ),
            array(
                "id" => 6451,
                "name" => "Kadipaten",
                "city_id" => 468,
            ),
            array(
                "id" => 6452,
                "name" => "Karang Jaya",
                "city_id" => 468,
            ),
            array(
                "id" => 6453,
                "name" => "Karangnunggal",
                "city_id" => 468,
            ),
            array(
                "id" => 6454,
                "name" => "Leuwisari",
                "city_id" => 468,
            ),
            array(
                "id" => 6455,
                "name" => "Mangunreja",
                "city_id" => 468,
            ),
            array(
                "id" => 6456,
                "name" => "Manonjaya",
                "city_id" => 468,
            ),
            array(
                "id" => 6457,
                "name" => "Padakembang",
                "city_id" => 468,
            ),
            array(
                "id" => 6458,
                "name" => "Pagerageung",
                "city_id" => 468,
            ),
            array(
                "id" => 6459,
                "name" => "Pancatengah",
                "city_id" => 468,
            ),
            array(
                "id" => 6460,
                "name" => "Parungponteng",
                "city_id" => 468,
            ),
            array(
                "id" => 6461,
                "name" => "Puspahiang",
                "city_id" => 468,
            ),
            array(
                "id" => 6462,
                "name" => "Rajapolah",
                "city_id" => 468,
            ),
            array(
                "id" => 6463,
                "name" => "Salawu",
                "city_id" => 468,
            ),
            array(
                "id" => 6464,
                "name" => "Salopa",
                "city_id" => 468,
            ),
            array(
                "id" => 6465,
                "name" => "Sariwangi",
                "city_id" => 468,
            ),
            array(
                "id" => 6466,
                "name" => "Singaparna",
                "city_id" => 468,
            ),
            array(
                "id" => 6467,
                "name" => "Sodonghilir",
                "city_id" => 468,
            ),
            array(
                "id" => 6468,
                "name" => "Sukahening",
                "city_id" => 468,
            ),
            array(
                "id" => 6469,
                "name" => "Sukaraja",
                "city_id" => 468,
            ),
            array(
                "id" => 6470,
                "name" => "Sukarame",
                "city_id" => 468,
            ),
            array(
                "id" => 6471,
                "name" => "Sukaratu",
                "city_id" => 468,
            ),
            array(
                "id" => 6472,
                "name" => "Sukaresik",
                "city_id" => 468,
            ),
            array(
                "id" => 6473,
                "name" => "Tanjungjaya",
                "city_id" => 468,
            ),
            array(
                "id" => 6474,
                "name" => "Taraju",
                "city_id" => 468,
            ),
            array(
                "id" => 6475,
                "name" => "Bungursari",
                "city_id" => 469,
            ),
            array(
                "id" => 6476,
                "name" => "Cibeureum",
                "city_id" => 469,
            ),
            array(
                "id" => 6477,
                "name" => "Cihideung",
                "city_id" => 469,
            ),
            array(
                "id" => 6478,
                "name" => "Cipedes",
                "city_id" => 469,
            ),
            array(
                "id" => 6479,
                "name" => "Indihiang",
                "city_id" => 469,
            ),
            array(
                "id" => 6480,
                "name" => "Kawalu",
                "city_id" => 469,
            ),
            array(
                "id" => 6481,
                "name" => "Mangkubumi",
                "city_id" => 469,
            ),
            array(
                "id" => 6482,
                "name" => "Purbaratu",
                "city_id" => 469,
            ),
            array(
                "id" => 6483,
                "name" => "Tamansari",
                "city_id" => 469,
            ),
            array(
                "id" => 6484,
                "name" => "Tawang",
                "city_id" => 469,
            ),
            array(
                "id" => 6485,
                "name" => "Bajenis",
                "city_id" => 470,
            ),
            array(
                "id" => 6486,
                "name" => "Padang Hilir",
                "city_id" => 470,
            ),
            array(
                "id" => 6487,
                "name" => "Padang Hulu",
                "city_id" => 470,
            ),
            array(
                "id" => 6488,
                "name" => "Rambutan",
                "city_id" => 470,
            ),
            array(
                "id" => 6489,
                "name" => "Tebing Tinggi Kota",
                "city_id" => 470,
            ),
            array(
                "id" => 6490,
                "name" => "Muara Tabir",
                "city_id" => 471,
            ),
            array(
                "id" => 6491,
                "name" => "Rimbo Bujang",
                "city_id" => 471,
            ),
            array(
                "id" => 6492,
                "name" => "Rimbo Ilir",
                "city_id" => 471,
            ),
            array(
                "id" => 6493,
                "name" => "Rimbo Ulu",
                "city_id" => 471,
            ),
            array(
                "id" => 6494,
                "name" => "Serai Serumpun",
                "city_id" => 471,
            ),
            array(
                "id" => 6495,
                "name" => "Sumay",
                "city_id" => 471,
            ),
            array(
                "id" => 6496,
                "name" => "Tebo Ilir",
                "city_id" => 471,
            ),
            array(
                "id" => 6497,
                "name" => "Tebo Tengah",
                "city_id" => 471,
            ),
            array(
                "id" => 6498,
                "name" => "Tebo Ulu",
                "city_id" => 471,
            ),
            array(
                "id" => 6499,
                "name" => "Tengah Ilir",
                "city_id" => 471,
            ),
            array(
                "id" => 6500,
                "name" => "VII Koto",
                "city_id" => 471,
            ),
            array(
                "id" => 6501,
                "name" => "VII Koto Ilir",
                "city_id" => 471,
            ),
            array(
                "id" => 6502,
                "name" => "Adiwerna",
                "city_id" => 472,
            ),
            array(
                "id" => 6503,
                "name" => "Balapulang",
                "city_id" => 472,
            ),
            array(
                "id" => 6504,
                "name" => "Bojong",
                "city_id" => 472,
            ),
            array(
                "id" => 6505,
                "name" => "Bumijawa",
                "city_id" => 472,
            ),
            array(
                "id" => 6506,
                "name" => "Dukuhturi",
                "city_id" => 472,
            ),
            array(
                "id" => 6507,
                "name" => "Dukuhwaru",
                "city_id" => 472,
            ),
            array(
                "id" => 6508,
                "name" => "Jatinegara",
                "city_id" => 472,
            ),
            array(
                "id" => 6509,
                "name" => "Kedung Banteng",
                "city_id" => 472,
            ),
            array(
                "id" => 6510,
                "name" => "Kramat",
                "city_id" => 472,
            ),
            array(
                "id" => 6511,
                "name" => "Lebaksiu",
                "city_id" => 472,
            ),
            array(
                "id" => 6512,
                "name" => "Margasari",
                "city_id" => 472,
            ),
            array(
                "id" => 6513,
                "name" => "Pagerbarang",
                "city_id" => 472,
            ),
            array(
                "id" => 6514,
                "name" => "Pangkah",
                "city_id" => 472,
            ),
            array(
                "id" => 6515,
                "name" => "Slawi",
                "city_id" => 472,
            ),
            array(
                "id" => 6516,
                "name" => "Surodadi",
                "city_id" => 472,
            ),
            array(
                "id" => 6517,
                "name" => "Talang",
                "city_id" => 472,
            ),
            array(
                "id" => 6518,
                "name" => "Tarub",
                "city_id" => 472,
            ),
            array(
                "id" => 6519,
                "name" => "Warurejo",
                "city_id" => 472,
            ),
            array(
                "id" => 6520,
                "name" => "Margadana",
                "city_id" => 473,
            ),
            array(
                "id" => 6521,
                "name" => "Tegal Barat",
                "city_id" => 473,
            ),
            array(
                "id" => 6522,
                "name" => "Tegal Selatan",
                "city_id" => 473,
            ),
            array(
                "id" => 6523,
                "name" => "Tegal Timur",
                "city_id" => 473,
            ),
            array(
                "id" => 6524,
                "name" => "Aranday",
                "city_id" => 474,
            ),
            array(
                "id" => 6525,
                "name" => "Aroba",
                "city_id" => 474,
            ),
            array(
                "id" => 6526,
                "name" => "Babo",
                "city_id" => 474,
            ),
            array(
                "id" => 6527,
                "name" => "Bintuni",
                "city_id" => 474,
            ),
            array(
                "id" => 6528,
                "name" => "Biscoop",
                "city_id" => 474,
            ),
            array(
                "id" => 6529,
                "name" => "Dataran Beimes",
                "city_id" => 474,
            ),
            array(
                "id" => 6530,
                "name" => "Fafurwar (Irorutu)",
                "city_id" => 474,
            ),
            array(
                "id" => 6531,
                "name" => "Kaitaro",
                "city_id" => 474,
            ),
            array(
                "id" => 6532,
                "name" => "Kamundan",
                "city_id" => 474,
            ),
            array(
                "id" => 6533,
                "name" => "Kuri",
                "city_id" => 474,
            ),
            array(
                "id" => 6534,
                "name" => "Manimeri",
                "city_id" => 474,
            ),
            array(
                "id" => 6535,
                "name" => "Masyeta",
                "city_id" => 474,
            ),
            array(
                "id" => 6536,
                "name" => "Mayado",
                "city_id" => 474,
            ),
            array(
                "id" => 6537,
                "name" => "Merdey",
                "city_id" => 474,
            ),
            array(
                "id" => 6538,
                "name" => "Moskona Barat",
                "city_id" => 474,
            ),
            array(
                "id" => 6539,
                "name" => "Moskona Selatan",
                "city_id" => 474,
            ),
            array(
                "id" => 6540,
                "name" => "Moskona Timur",
                "city_id" => 474,
            ),
            array(
                "id" => 6541,
                "name" => "Moskona Utara",
                "city_id" => 474,
            ),
            array(
                "id" => 6542,
                "name" => "Sumuri (Simuri)",
                "city_id" => 474,
            ),
            array(
                "id" => 6543,
                "name" => "Tembuni",
                "city_id" => 474,
            ),
            array(
                "id" => 6544,
                "name" => "Tomu",
                "city_id" => 474,
            ),
            array(
                "id" => 6545,
                "name" => "Tuhiba",
                "city_id" => 474,
            ),
            array(
                "id" => 6546,
                "name" => "Wamesa (Idoor)",
                "city_id" => 474,
            ),
            array(
                "id" => 6547,
                "name" => "Weriagar",
                "city_id" => 474,
            ),
            array(
                "id" => 6548,
                "name" => "Kuri Wamesa",
                "city_id" => 475,
            ),
            array(
                "id" => 6549,
                "name" => "Naikere (Wasior Barat)",
                "city_id" => 475,
            ),
            array(
                "id" => 6550,
                "name" => "Nikiwar",
                "city_id" => 475,
            ),
            array(
                "id" => 6551,
                "name" => "Rasiei",
                "city_id" => 475,
            ),
            array(
                "id" => 6552,
                "name" => "Roon",
                "city_id" => 475,
            ),
            array(
                "id" => 6553,
                "name" => "Roswar",
                "city_id" => 475,
            ),
            array(
                "id" => 6554,
                "name" => "Rumberpon",
                "city_id" => 475,
            ),
            array(
                "id" => 6555,
                "name" => "Soug Jaya",
                "city_id" => 475,
            ),
            array(
                "id" => 6556,
                "name" => "Teluk Duairi (Wasior Utara)",
                "city_id" => 475,
            ),
            array(
                "id" => 6557,
                "name" => "Wamesa",
                "city_id" => 475,
            ),
            array(
                "id" => 6558,
                "name" => "Wasior",
                "city_id" => 475,
            ),
            array(
                "id" => 6559,
                "name" => "Windesi",
                "city_id" => 475,
            ),
            array(
                "id" => 6560,
                "name" => "Wondiboy (Wasior Selatan)",
                "city_id" => 475,
            ),
            array(
                "id" => 6561,
                "name" => "Bansari",
                "city_id" => 476,
            ),
            array(
                "id" => 6562,
                "name" => "Bejen",
                "city_id" => 476,
            ),
            array(
                "id" => 6563,
                "name" => "Bulu",
                "city_id" => 476,
            ),
            array(
                "id" => 6564,
                "name" => "Candiroto",
                "city_id" => 476,
            ),
            array(
                "id" => 6565,
                "name" => "Gemawang",
                "city_id" => 476,
            ),
            array(
                "id" => 6566,
                "name" => "Jumo",
                "city_id" => 476,
            ),
            array(
                "id" => 6567,
                "name" => "Kaloran",
                "city_id" => 476,
            ),
            array(
                "id" => 6568,
                "name" => "Kandangan",
                "city_id" => 476,
            ),
            array(
                "id" => 6569,
                "name" => "Kedu",
                "city_id" => 476,
            ),
            array(
                "id" => 6570,
                "name" => "Kledung",
                "city_id" => 476,
            ),
            array(
                "id" => 6571,
                "name" => "Kranggan",
                "city_id" => 476,
            ),
            array(
                "id" => 6572,
                "name" => "Ngadirejo",
                "city_id" => 476,
            ),
            array(
                "id" => 6573,
                "name" => "Parakan",
                "city_id" => 476,
            ),
            array(
                "id" => 6574,
                "name" => "Pringsurat",
                "city_id" => 476,
            ),
            array(
                "id" => 6575,
                "name" => "Selopampang",
                "city_id" => 476,
            ),
            array(
                "id" => 6576,
                "name" => "Temanggung",
                "city_id" => 476,
            ),
            array(
                "id" => 6577,
                "name" => "Tembarak",
                "city_id" => 476,
            ),
            array(
                "id" => 6578,
                "name" => "Tlogomulyo",
                "city_id" => 476,
            ),
            array(
                "id" => 6579,
                "name" => "Tretep",
                "city_id" => 476,
            ),
            array(
                "id" => 6580,
                "name" => "Wonoboyo",
                "city_id" => 476,
            ),
            array(
                "id" => 6581,
                "name" => "Moti (Pulau Moti)",
                "city_id" => 477,
            ),
            array(
                "id" => 6582,
                "name" => "Pulau Batang Dua",
                "city_id" => 477,
            ),
            array(
                "id" => 6583,
                "name" => "Pulau Hiri",
                "city_id" => 477,
            ),
            array(
                "id" => 6584,
                "name" => "Pulau Ternate",
                "city_id" => 477,
            ),
            array(
                "id" => 6585,
                "name" => "Ternate Selatan (Kota)",
                "city_id" => 477,
            ),
            array(
                "id" => 6586,
                "name" => "Ternate Tengah (Kota)",
                "city_id" => 477,
            ),
            array(
                "id" => 6587,
                "name" => "Ternate Utara (Kota)",
                "city_id" => 477,
            ),
            array(
                "id" => 6588,
                "name" => "Oba",
                "city_id" => 478,
            ),
            array(
                "id" => 6589,
                "name" => "Oba Selatan",
                "city_id" => 478,
            ),
            array(
                "id" => 6590,
                "name" => "Oba Tengah",
                "city_id" => 478,
            ),
            array(
                "id" => 6591,
                "name" => "Oba Utara",
                "city_id" => 478,
            ),
            array(
                "id" => 6592,
                "name" => "Tidore (Pulau Tidore)",
                "city_id" => 478,
            ),
            array(
                "id" => 6593,
                "name" => "Tidore Selatan",
                "city_id" => 478,
            ),
            array(
                "id" => 6594,
                "name" => "Tidore Timur (Pulau Tidore)",
                "city_id" => 478,
            ),
            array(
                "id" => 6595,
                "name" => "Tidore Utara",
                "city_id" => 478,
            ),
            array(
                "id" => 6596,
                "name" => "Amanatun Selatan",
                "city_id" => 479,
            ),
            array(
                "id" => 6597,
                "name" => "Amanatun Utara",
                "city_id" => 479,
            ),
            array(
                "id" => 6598,
                "name" => "Amanuban Barat",
                "city_id" => 479,
            ),
            array(
                "id" => 6599,
                "name" => "Amanuban Selatan",
                "city_id" => 479,
            ),
            array(
                "id" => 6600,
                "name" => "Amanuban Tengah",
                "city_id" => 479,
            ),
            array(
                "id" => 6601,
                "name" => "Amanuban Timur",
                "city_id" => 479,
            ),
            array(
                "id" => 6602,
                "name" => "Batu Putih",
                "city_id" => 479,
            ),
            array(
                "id" => 6603,
                "name" => "Boking",
                "city_id" => 479,
            ),
            array(
                "id" => 6604,
                "name" => "Fatukopa",
                "city_id" => 479,
            ),
            array(
                "id" => 6605,
                "name" => "Fatumnasi",
                "city_id" => 479,
            ),
            array(
                "id" => 6606,
                "name" => "Fautmolo",
                "city_id" => 479,
            ),
            array(
                "id" => 6607,
                "name" => "Kie (Ki'e)",
                "city_id" => 479,
            ),
            array(
                "id" => 6608,
                "name" => "Kok Baun",
                "city_id" => 479,
            ),
            array(
                "id" => 6609,
                "name" => "Kolbano",
                "city_id" => 479,
            ),
            array(
                "id" => 6610,
                "name" => "Kot Olin",
                "city_id" => 479,
            ),
            array(
                "id" => 6611,
                "name" => "Kota Soe",
                "city_id" => 479,
            ),
            array(
                "id" => 6612,
                "name" => "Kualin",
                "city_id" => 479,
            ),
            array(
                "id" => 6613,
                "name" => "Kuanfatu",
                "city_id" => 479,
            ),
            array(
                "id" => 6614,
                "name" => "Kuatnana",
                "city_id" => 479,
            ),
            array(
                "id" => 6615,
                "name" => "Mollo Barat",
                "city_id" => 479,
            ),
            array(
                "id" => 6616,
                "name" => "Mollo Selatan",
                "city_id" => 479,
            ),
            array(
                "id" => 6617,
                "name" => "Mollo Tengah",
                "city_id" => 479,
            ),
            array(
                "id" => 6618,
                "name" => "Mollo Utara",
                "city_id" => 479,
            ),
            array(
                "id" => 6619,
                "name" => "Noebana",
                "city_id" => 479,
            ),
            array(
                "id" => 6620,
                "name" => "Noebeba",
                "city_id" => 479,
            ),
            array(
                "id" => 6621,
                "name" => "Nunbena",
                "city_id" => 479,
            ),
            array(
                "id" => 6622,
                "name" => "Nunkolo",
                "city_id" => 479,
            ),
            array(
                "id" => 6623,
                "name" => "Oenino",
                "city_id" => 479,
            ),
            array(
                "id" => 6624,
                "name" => "Polen",
                "city_id" => 479,
            ),
            array(
                "id" => 6625,
                "name" => "Santian",
                "city_id" => 479,
            ),
            array(
                "id" => 6626,
                "name" => "Tobu",
                "city_id" => 479,
            ),
            array(
                "id" => 6627,
                "name" => "Toianas",
                "city_id" => 479,
            ),
            array(
                "id" => 6628,
                "name" => "Biboki Anleu",
                "city_id" => 480,
            ),
            array(
                "id" => 6629,
                "name" => "Biboki Feotleu",
                "city_id" => 480,
            ),
            array(
                "id" => 6630,
                "name" => "Biboki Moenleu",
                "city_id" => 480,
            ),
            array(
                "id" => 6631,
                "name" => "Biboki Selatan",
                "city_id" => 480,
            ),
            array(
                "id" => 6632,
                "name" => "Biboki Tan Pah",
                "city_id" => 480,
            ),
            array(
                "id" => 6633,
                "name" => "Biboki Utara",
                "city_id" => 480,
            ),
            array(
                "id" => 6634,
                "name" => "Bikomi Nilulat",
                "city_id" => 480,
            ),
            array(
                "id" => 6635,
                "name" => "Bikomi Selatan",
                "city_id" => 480,
            ),
            array(
                "id" => 6636,
                "name" => "Bikomi Tengah",
                "city_id" => 480,
            ),
            array(
                "id" => 6637,
                "name" => "Bikomi Utara",
                "city_id" => 480,
            ),
            array(
                "id" => 6638,
                "name" => "Insana",
                "city_id" => 480,
            ),
            array(
                "id" => 6639,
                "name" => "Insana Barat",
                "city_id" => 480,
            ),
            array(
                "id" => 6640,
                "name" => "Insana Fafinesu",
                "city_id" => 480,
            ),
            array(
                "id" => 6641,
                "name" => "Insana Tengah",
                "city_id" => 480,
            ),
            array(
                "id" => 6642,
                "name" => "Insana Utara",
                "city_id" => 480,
            ),
            array(
                "id" => 6643,
                "name" => "Kota Kefamenanu",
                "city_id" => 480,
            ),
            array(
                "id" => 6644,
                "name" => "Miomaffo Barat",
                "city_id" => 480,
            ),
            array(
                "id" => 6645,
                "name" => "Miomaffo Tengah",
                "city_id" => 480,
            ),
            array(
                "id" => 6646,
                "name" => "Miomaffo Timur",
                "city_id" => 480,
            ),
            array(
                "id" => 6647,
                "name" => "Musi",
                "city_id" => 480,
            ),
            array(
                "id" => 6648,
                "name" => "Mutis",
                "city_id" => 480,
            ),
            array(
                "id" => 6649,
                "name" => "Naibenu",
                "city_id" => 480,
            ),
            array(
                "id" => 6650,
                "name" => "Noemuti",
                "city_id" => 480,
            ),
            array(
                "id" => 6651,
                "name" => "Noemuti Timur",
                "city_id" => 480,
            ),
            array(
                "id" => 6652,
                "name" => "Ajibata",
                "city_id" => 481,
            ),
            array(
                "id" => 6653,
                "name" => "Balige",
                "city_id" => 481,
            ),
            array(
                "id" => 6654,
                "name" => "Bonatua Lunasi",
                "city_id" => 481,
            ),
            array(
                "id" => 6655,
                "name" => "Bor-Bor",
                "city_id" => 481,
            ),
            array(
                "id" => 6656,
                "name" => "Habinsaran",
                "city_id" => 481,
            ),
            array(
                "id" => 6657,
                "name" => "Laguboti",
                "city_id" => 481,
            ),
            array(
                "id" => 6658,
                "name" => "Lumban Julu",
                "city_id" => 481,
            ),
            array(
                "id" => 6659,
                "name" => "Nassau",
                "city_id" => 481,
            ),
            array(
                "id" => 6660,
                "name" => "Parmaksian",
                "city_id" => 481,
            ),
            array(
                "id" => 6661,
                "name" => "Pintu Pohan Meranti",
                "city_id" => 481,
            ),
            array(
                "id" => 6662,
                "name" => "Porsea",
                "city_id" => 481,
            ),
            array(
                "id" => 6663,
                "name" => "Siantar Narumonda",
                "city_id" => 481,
            ),
            array(
                "id" => 6664,
                "name" => "Sigumpar",
                "city_id" => 481,
            ),
            array(
                "id" => 6665,
                "name" => "Silaen",
                "city_id" => 481,
            ),
            array(
                "id" => 6666,
                "name" => "Tampahan",
                "city_id" => 481,
            ),
            array(
                "id" => 6667,
                "name" => "Uluan",
                "city_id" => 481,
            ),
            array(
                "id" => 6668,
                "name" => "Ampana Kota",
                "city_id" => 482,
            ),
            array(
                "id" => 6669,
                "name" => "Ampana Tete",
                "city_id" => 482,
            ),
            array(
                "id" => 6670,
                "name" => "Togean",
                "city_id" => 482,
            ),
            array(
                "id" => 6671,
                "name" => "Tojo",
                "city_id" => 482,
            ),
            array(
                "id" => 6672,
                "name" => "Tojo Barat",
                "city_id" => 482,
            ),
            array(
                "id" => 6673,
                "name" => "Ulu Bongka",
                "city_id" => 482,
            ),
            array(
                "id" => 6674,
                "name" => "Una - Una",
                "city_id" => 482,
            ),
            array(
                "id" => 6675,
                "name" => "Walea Besar",
                "city_id" => 482,
            ),
            array(
                "id" => 6676,
                "name" => "Walea Kepulauan",
                "city_id" => 482,
            ),
            array(
                "id" => 6677,
                "name" => "Baolan",
                "city_id" => 483,
            ),
            array(
                "id" => 6678,
                "name" => "Basidondo",
                "city_id" => 483,
            ),
            array(
                "id" => 6679,
                "name" => "Dako Pamean",
                "city_id" => 483,
            ),
            array(
                "id" => 6680,
                "name" => "Dampal Selatan",
                "city_id" => 483,
            ),
            array(
                "id" => 6681,
                "name" => "Dampal Utara",
                "city_id" => 483,
            ),
            array(
                "id" => 6682,
                "name" => "Dondo",
                "city_id" => 483,
            ),
            array(
                "id" => 6683,
                "name" => "Galang",
                "city_id" => 483,
            ),
            array(
                "id" => 6684,
                "name" => "Lampasio",
                "city_id" => 483,
            ),
            array(
                "id" => 6685,
                "name" => "Ogo Deide",
                "city_id" => 483,
            ),
            array(
                "id" => 6686,
                "name" => "Tolitoli Utara",
                "city_id" => 483,
            ),
            array(
                "id" => 6687,
                "name" => "Airgaram",
                "city_id" => 484,
            ),
            array(
                "id" => 6688,
                "name" => "Anawi",
                "city_id" => 484,
            ),
            array(
                "id" => 6689,
                "name" => "Aweku",
                "city_id" => 484,
            ),
            array(
                "id" => 6690,
                "name" => "Bewani",
                "city_id" => 484,
            ),
            array(
                "id" => 6691,
                "name" => "Biuk",
                "city_id" => 484,
            ),
            array(
                "id" => 6692,
                "name" => "Bogonuk",
                "city_id" => 484,
            ),
            array(
                "id" => 6693,
                "name" => "Bokondini",
                "city_id" => 484,
            ),
            array(
                "id" => 6694,
                "name" => "Bokoneri",
                "city_id" => 484,
            ),
            array(
                "id" => 6695,
                "name" => "Danime",
                "city_id" => 484,
            ),
            array(
                "id" => 6696,
                "name" => "Dow",
                "city_id" => 484,
            ),
            array(
                "id" => 6697,
                "name" => "Dundu (Ndundu)",
                "city_id" => 484,
            ),
            array(
                "id" => 6698,
                "name" => "Egiam",
                "city_id" => 484,
            ),
            array(
                "id" => 6699,
                "name" => "Geya",
                "city_id" => 484,
            ),
            array(
                "id" => 6700,
                "name" => "Gika",
                "city_id" => 484,
            ),
            array(
                "id" => 6701,
                "name" => "Gilubandu (Gilumbandu/Gilimbandu)",
                "city_id" => 484,
            ),
            array(
                "id" => 6702,
                "name" => "Goyage",
                "city_id" => 484,
            ),
            array(
                "id" => 6703,
                "name" => "Gundagi (Gudage)",
                "city_id" => 484,
            ),
            array(
                "id" => 6704,
                "name" => "Kai",
                "city_id" => 484,
            ),
            array(
                "id" => 6705,
                "name" => "Kamboneri",
                "city_id" => 484,
            ),
            array(
                "id" => 6706,
                "name" => "Kanggime (Kanggima )",
                "city_id" => 484,
            ),
            array(
                "id" => 6707,
                "name" => "Karubaga",
                "city_id" => 484,
            ),
            array(
                "id" => 6708,
                "name" => "Kembu",
                "city_id" => 484,
            ),
            array(
                "id" => 6709,
                "name" => "Kondaga (Konda)",
                "city_id" => 484,
            ),
            array(
                "id" => 6710,
                "name" => "Kuari",
                "city_id" => 484,
            ),
            array(
                "id" => 6711,
                "name" => "Kubu",
                "city_id" => 484,
            ),
            array(
                "id" => 6712,
                "name" => "Li Anogomma",
                "city_id" => 484,
            ),
            array(
                "id" => 6713,
                "name" => "Nabunage",
                "city_id" => 484,
            ),
            array(
                "id" => 6714,
                "name" => "Nelawi",
                "city_id" => 484,
            ),
            array(
                "id" => 6715,
                "name" => "Numba",
                "city_id" => 484,
            ),
            array(
                "id" => 6716,
                "name" => "Nunggawi (Munggawi)",
                "city_id" => 484,
            ),
            array(
                "id" => 6717,
                "name" => "Panaga",
                "city_id" => 484,
            ),
            array(
                "id" => 6718,
                "name" => "Poganeri",
                "city_id" => 484,
            ),
            array(
                "id" => 6719,
                "name" => "Tagime",
                "city_id" => 484,
            ),
            array(
                "id" => 6720,
                "name" => "Tagineri",
                "city_id" => 484,
            ),
            array(
                "id" => 6721,
                "name" => "Telenggeme",
                "city_id" => 484,
            ),
            array(
                "id" => 6722,
                "name" => "Timori",
                "city_id" => 484,
            ),
            array(
                "id" => 6723,
                "name" => "Umagi",
                "city_id" => 484,
            ),
            array(
                "id" => 6724,
                "name" => "Wakuwo",
                "city_id" => 484,
            ),
            array(
                "id" => 6725,
                "name" => "Wari (Taiyeve)",
                "city_id" => 484,
            ),
            array(
                "id" => 6726,
                "name" => "Wenam",
                "city_id" => 484,
            ),
            array(
                "id" => 6727,
                "name" => "Wina",
                "city_id" => 484,
            ),
            array(
                "id" => 6728,
                "name" => "Wonoki (Woniki)",
                "city_id" => 484,
            ),
            array(
                "id" => 6729,
                "name" => "Wugi",
                "city_id" => 484,
            ),
            array(
                "id" => 6730,
                "name" => "Wunin (Wumin)",
                "city_id" => 484,
            ),
            array(
                "id" => 6731,
                "name" => "Yuko",
                "city_id" => 484,
            ),
            array(
                "id" => 6732,
                "name" => "Yuneri",
                "city_id" => 484,
            ),
            array(
                "id" => 6733,
                "name" => "Tomohon Barat",
                "city_id" => 485,
            ),
            array(
                "id" => 6734,
                "name" => "Tomohon Selatan",
                "city_id" => 485,
            ),
            array(
                "id" => 6735,
                "name" => "Tomohon Tengah",
                "city_id" => 485,
            ),
            array(
                "id" => 6736,
                "name" => "Tomohon Timur",
                "city_id" => 485,
            ),
            array(
                "id" => 6737,
                "name" => "Tomohon Utara",
                "city_id" => 485,
            ),
            array(
                "id" => 6738,
                "name" => "Awan Rante Karua",
                "city_id" => 486,
            ),
            array(
                "id" => 6739,
                "name" => "Balusu",
                "city_id" => 486,
            ),
            array(
                "id" => 6740,
                "name" => "Bangkelekila",
                "city_id" => 486,
            ),
            array(
                "id" => 6741,
                "name" => "Baruppu",
                "city_id" => 486,
            ),
            array(
                "id" => 6742,
                "name" => "Buntao",
                "city_id" => 486,
            ),
            array(
                "id" => 6743,
                "name" => "Buntu Pepasan",
                "city_id" => 486,
            ),
            array(
                "id" => 6744,
                "name" => "Dende' Piongan Napo",
                "city_id" => 486,
            ),
            array(
                "id" => 6745,
                "name" => "Kapalla Pitu (Kapala Pitu)",
                "city_id" => 486,
            ),
            array(
                "id" => 6746,
                "name" => "Kesu",
                "city_id" => 486,
            ),
            array(
                "id" => 6747,
                "name" => "Nanggala",
                "city_id" => 486,
            ),
            array(
                "id" => 6748,
                "name" => "Rantebua",
                "city_id" => 486,
            ),
            array(
                "id" => 6749,
                "name" => "Rantepao",
                "city_id" => 486,
            ),
            array(
                "id" => 6750,
                "name" => "Rindingallo",
                "city_id" => 486,
            ),
            array(
                "id" => 6751,
                "name" => "Sa'dan",
                "city_id" => 486,
            ),
            array(
                "id" => 6752,
                "name" => "Sanggalangi",
                "city_id" => 486,
            ),
            array(
                "id" => 6753,
                "name" => "Sesean",
                "city_id" => 486,
            ),
            array(
                "id" => 6754,
                "name" => "Sesean Suloara",
                "city_id" => 486,
            ),
            array(
                "id" => 6755,
                "name" => "Sopai",
                "city_id" => 486,
            ),
            array(
                "id" => 6756,
                "name" => "Tallunglipu",
                "city_id" => 486,
            ),
            array(
                "id" => 6757,
                "name" => "Tikala",
                "city_id" => 486,
            ),
            array(
                "id" => 6758,
                "name" => "Tondon",
                "city_id" => 486,
            ),
            array(
                "id" => 6759,
                "name" => "Bendungan",
                "city_id" => 487,
            ),
            array(
                "id" => 6760,
                "name" => "Dongko",
                "city_id" => 487,
            ),
            array(
                "id" => 6761,
                "name" => "Durenan",
                "city_id" => 487,
            ),
            array(
                "id" => 6762,
                "name" => "Gandusari",
                "city_id" => 487,
            ),
            array(
                "id" => 6763,
                "name" => "Kampak",
                "city_id" => 487,
            ),
            array(
                "id" => 6764,
                "name" => "Karangan",
                "city_id" => 487,
            ),
            array(
                "id" => 6765,
                "name" => "Munjungan",
                "city_id" => 487,
            ),
            array(
                "id" => 6766,
                "name" => "Panggul",
                "city_id" => 487,
            ),
            array(
                "id" => 6767,
                "name" => "Pogalan",
                "city_id" => 487,
            ),
            array(
                "id" => 6768,
                "name" => "Pule",
                "city_id" => 487,
            ),
            array(
                "id" => 6769,
                "name" => "Suruh",
                "city_id" => 487,
            ),
            array(
                "id" => 6770,
                "name" => "Trenggalek",
                "city_id" => 487,
            ),
            array(
                "id" => 6771,
                "name" => "Tugu",
                "city_id" => 487,
            ),
            array(
                "id" => 6772,
                "name" => "Watulimo",
                "city_id" => 487,
            ),
            array(
                "id" => 6773,
                "name" => "Kur Selatan",
                "city_id" => 488,
            ),
            array(
                "id" => 6774,
                "name" => "Pulau Dullah Selatan",
                "city_id" => 488,
            ),
            array(
                "id" => 6775,
                "name" => "Pulau Dullah Utara",
                "city_id" => 488,
            ),
            array(
                "id" => 6776,
                "name" => "Pulau Tayando Tam",
                "city_id" => 488,
            ),
            array(
                "id" => 6777,
                "name" => "Pulau-Pulau Kur",
                "city_id" => 488,
            ),
            array(
                "id" => 6778,
                "name" => "Bancar",
                "city_id" => 489,
            ),
            array(
                "id" => 6779,
                "name" => "Bangilan",
                "city_id" => 489,
            ),
            array(
                "id" => 6780,
                "name" => "Grabagan",
                "city_id" => 489,
            ),
            array(
                "id" => 6781,
                "name" => "Jatirogo",
                "city_id" => 489,
            ),
            array(
                "id" => 6782,
                "name" => "Jenu",
                "city_id" => 489,
            ),
            array(
                "id" => 6783,
                "name" => "Kenduruan",
                "city_id" => 489,
            ),
            array(
                "id" => 6784,
                "name" => "Kerek",
                "city_id" => 489,
            ),
            array(
                "id" => 6785,
                "name" => "Merakurak",
                "city_id" => 489,
            ),
            array(
                "id" => 6786,
                "name" => "Montong",
                "city_id" => 489,
            ),
            array(
                "id" => 6787,
                "name" => "Palang",
                "city_id" => 489,
            ),
            array(
                "id" => 6788,
                "name" => "Parengan",
                "city_id" => 489,
            ),
            array(
                "id" => 6789,
                "name" => "Plumpang",
                "city_id" => 489,
            ),
            array(
                "id" => 6790,
                "name" => "Rengel",
                "city_id" => 489,
            ),
            array(
                "id" => 6791,
                "name" => "Semanding",
                "city_id" => 489,
            ),
            array(
                "id" => 6792,
                "name" => "Senori",
                "city_id" => 489,
            ),
            array(
                "id" => 6793,
                "name" => "Singgahan",
                "city_id" => 489,
            ),
            array(
                "id" => 6794,
                "name" => "Soko",
                "city_id" => 489,
            ),
            array(
                "id" => 6795,
                "name" => "Tambakboyo",
                "city_id" => 489,
            ),
            array(
                "id" => 6796,
                "name" => "Tuban",
                "city_id" => 489,
            ),
            array(
                "id" => 6797,
                "name" => "Widang",
                "city_id" => 489,
            ),
            array(
                "id" => 6798,
                "name" => "Banjar Agung",
                "city_id" => 490,
            ),
            array(
                "id" => 6799,
                "name" => "Banjar Baru",
                "city_id" => 490,
            ),
            array(
                "id" => 6800,
                "name" => "Banjar Margo",
                "city_id" => 490,
            ),
            array(
                "id" => 6801,
                "name" => "Dente Teladas",
                "city_id" => 490,
            ),
            array(
                "id" => 6802,
                "name" => "Gedung Aji",
                "city_id" => 490,
            ),
            array(
                "id" => 6803,
                "name" => "Gedung Aji Baru",
                "city_id" => 490,
            ),
            array(
                "id" => 6804,
                "name" => "Gedung Meneng",
                "city_id" => 490,
            ),
            array(
                "id" => 6805,
                "name" => "Menggala",
                "city_id" => 490,
            ),
            array(
                "id" => 6806,
                "name" => "Menggala Timur",
                "city_id" => 490,
            ),
            array(
                "id" => 6807,
                "name" => "Meraksa Aji",
                "city_id" => 490,
            ),
            array(
                "id" => 6808,
                "name" => "Penawar Aji",
                "city_id" => 490,
            ),
            array(
                "id" => 6809,
                "name" => "Penawar Tama",
                "city_id" => 490,
            ),
            array(
                "id" => 6810,
                "name" => "Rawa Pitu",
                "city_id" => 490,
            ),
            array(
                "id" => 6811,
                "name" => "Rawajitu Selatan",
                "city_id" => 490,
            ),
            array(
                "id" => 6812,
                "name" => "Rawajitu Timur",
                "city_id" => 490,
            ),
            array(
                "id" => 6813,
                "name" => "Gunung Agung",
                "city_id" => 491,
            ),
            array(
                "id" => 6814,
                "name" => "Gunung Terang",
                "city_id" => 491,
            ),
            array(
                "id" => 6815,
                "name" => "Lambu Kibang",
                "city_id" => 491,
            ),
            array(
                "id" => 6816,
                "name" => "Pagar Dewa",
                "city_id" => 491,
            ),
            array(
                "id" => 6817,
                "name" => "Tulang Bawang Tengah",
                "city_id" => 491,
            ),
            array(
                "id" => 6818,
                "name" => "Tulang Bawang Udik",
                "city_id" => 491,
            ),
            array(
                "id" => 6819,
                "name" => "Tumijajar",
                "city_id" => 491,
            ),
            array(
                "id" => 6820,
                "name" => "Way Kenanga",
                "city_id" => 491,
            ),
            array(
                "id" => 6821,
                "name" => "Bandung",
                "city_id" => 492,
            ),
            array(
                "id" => 6822,
                "name" => "Besuki",
                "city_id" => 492,
            ),
            array(
                "id" => 6823,
                "name" => "Boyolangu",
                "city_id" => 492,
            ),
            array(
                "id" => 6824,
                "name" => "Campur Darat",
                "city_id" => 492,
            ),
            array(
                "id" => 6825,
                "name" => "Gondang",
                "city_id" => 492,
            ),
            array(
                "id" => 6826,
                "name" => "Kalidawir",
                "city_id" => 492,
            ),
            array(
                "id" => 6827,
                "name" => "Karang Rejo",
                "city_id" => 492,
            ),
            array(
                "id" => 6828,
                "name" => "Kauman",
                "city_id" => 492,
            ),
            array(
                "id" => 6829,
                "name" => "Kedungwaru",
                "city_id" => 492,
            ),
            array(
                "id" => 6830,
                "name" => "Ngantru",
                "city_id" => 492,
            ),
            array(
                "id" => 6831,
                "name" => "Ngunut",
                "city_id" => 492,
            ),
            array(
                "id" => 6832,
                "name" => "Pagerwojo",
                "city_id" => 492,
            ),
            array(
                "id" => 6833,
                "name" => "Pakel",
                "city_id" => 492,
            ),
            array(
                "id" => 6834,
                "name" => "Pucanglaban",
                "city_id" => 492,
            ),
            array(
                "id" => 6835,
                "name" => "Rejotangan",
                "city_id" => 492,
            ),
            array(
                "id" => 6836,
                "name" => "Sendang",
                "city_id" => 492,
            ),
            array(
                "id" => 6837,
                "name" => "Sumbergempol",
                "city_id" => 492,
            ),
            array(
                "id" => 6838,
                "name" => "Tanggung Gunung",
                "city_id" => 492,
            ),
            array(
                "id" => 6839,
                "name" => "Tulungagung",
                "city_id" => 492,
            ),
            array(
                "id" => 6840,
                "name" => "Belawa",
                "city_id" => 493,
            ),
            array(
                "id" => 6841,
                "name" => "Bola",
                "city_id" => 493,
            ),
            array(
                "id" => 6842,
                "name" => "Gilireng",
                "city_id" => 493,
            ),
            array(
                "id" => 6843,
                "name" => "Keera",
                "city_id" => 493,
            ),
            array(
                "id" => 6844,
                "name" => "Majauleng",
                "city_id" => 493,
            ),
            array(
                "id" => 6845,
                "name" => "Maniang Pajo",
                "city_id" => 493,
            ),
            array(
                "id" => 6846,
                "name" => "Pammana",
                "city_id" => 493,
            ),
            array(
                "id" => 6847,
                "name" => "Penrang",
                "city_id" => 493,
            ),
            array(
                "id" => 6848,
                "name" => "Pitumpanua",
                "city_id" => 493,
            ),
            array(
                "id" => 6849,
                "name" => "Sabbang Paru",
                "city_id" => 493,
            ),
            array(
                "id" => 6850,
                "name" => "Sajoanging",
                "city_id" => 493,
            ),
            array(
                "id" => 6851,
                "name" => "Takkalalla",
                "city_id" => 493,
            ),
            array(
                "id" => 6852,
                "name" => "Tana Sitolo",
                "city_id" => 493,
            ),
            array(
                "id" => 6853,
                "name" => "Tempe",
                "city_id" => 493,
            ),
            array(
                "id" => 6854,
                "name" => "Binongko",
                "city_id" => 494,
            ),
            array(
                "id" => 6855,
                "name" => "Kaledupa",
                "city_id" => 494,
            ),
            array(
                "id" => 6856,
                "name" => "Kaledupa Selatan",
                "city_id" => 494,
            ),
            array(
                "id" => 6857,
                "name" => "Togo Binongko",
                "city_id" => 494,
            ),
            array(
                "id" => 6858,
                "name" => "Tomia",
                "city_id" => 494,
            ),
            array(
                "id" => 6859,
                "name" => "Tomia Timur",
                "city_id" => 494,
            ),
            array(
                "id" => 6860,
                "name" => "Wangi-Wangi",
                "city_id" => 494,
            ),
            array(
                "id" => 6861,
                "name" => "Wangi-Wangi Selatan",
                "city_id" => 494,
            ),
            array(
                "id" => 6862,
                "name" => "Demba Masirei",
                "city_id" => 495,
            ),
            array(
                "id" => 6863,
                "name" => "Inggerus",
                "city_id" => 495,
            ),
            array(
                "id" => 6864,
                "name" => "Kirihi",
                "city_id" => 495,
            ),
            array(
                "id" => 6865,
                "name" => "Masirei",
                "city_id" => 495,
            ),
            array(
                "id" => 6866,
                "name" => "Oudate Waropen",
                "city_id" => 495,
            ),
            array(
                "id" => 6867,
                "name" => "Risei Sayati",
                "city_id" => 495,
            ),
            array(
                "id" => 6868,
                "name" => "Ureifasei",
                "city_id" => 495,
            ),
            array(
                "id" => 6869,
                "name" => "Wapoga Inggerus",
                "city_id" => 495,
            ),
            array(
                "id" => 6870,
                "name" => "Waropen Bawah",
                "city_id" => 495,
            ),
            array(
                "id" => 6871,
                "name" => "Bahuga",
                "city_id" => 496,
            ),
            array(
                "id" => 6872,
                "name" => "Banjit",
                "city_id" => 496,
            ),
            array(
                "id" => 6873,
                "name" => "Baradatu",
                "city_id" => 496,
            ),
            array(
                "id" => 6874,
                "name" => "Blambangan Umpu",
                "city_id" => 496,
            ),
            array(
                "id" => 6875,
                "name" => "Buay Bahuga",
                "city_id" => 496,
            ),
            array(
                "id" => 6876,
                "name" => "Bumi Agung",
                "city_id" => 496,
            ),
            array(
                "id" => 6877,
                "name" => "Gunung Labuhan",
                "city_id" => 496,
            ),
            array(
                "id" => 6878,
                "name" => "Kasui",
                "city_id" => 496,
            ),
            array(
                "id" => 6879,
                "name" => "Negara Batin",
                "city_id" => 496,
            ),
            array(
                "id" => 6880,
                "name" => "Negeri Agung",
                "city_id" => 496,
            ),
            array(
                "id" => 6881,
                "name" => "Negeri Besar",
                "city_id" => 496,
            ),
            array(
                "id" => 6882,
                "name" => "Pakuan Ratu",
                "city_id" => 496,
            ),
            array(
                "id" => 6883,
                "name" => "Rebang Tangkas",
                "city_id" => 496,
            ),
            array(
                "id" => 6884,
                "name" => "Way Tuba",
                "city_id" => 496,
            ),
            array(
                "id" => 6885,
                "name" => "Baturetno",
                "city_id" => 497,
            ),
            array(
                "id" => 6886,
                "name" => "Batuwarno",
                "city_id" => 497,
            ),
            array(
                "id" => 6887,
                "name" => "Bulukerto",
                "city_id" => 497,
            ),
            array(
                "id" => 6888,
                "name" => "Eromoko",
                "city_id" => 497,
            ),
            array(
                "id" => 6889,
                "name" => "Girimarto",
                "city_id" => 497,
            ),
            array(
                "id" => 6890,
                "name" => "Giritontro",
                "city_id" => 497,
            ),
            array(
                "id" => 6891,
                "name" => "Giriwoyo",
                "city_id" => 497,
            ),
            array(
                "id" => 6892,
                "name" => "Jatipurno",
                "city_id" => 497,
            ),
            array(
                "id" => 6893,
                "name" => "Jatiroto",
                "city_id" => 497,
            ),
            array(
                "id" => 6894,
                "name" => "Jatisrono",
                "city_id" => 497,
            ),
            array(
                "id" => 6895,
                "name" => "Karangtengah",
                "city_id" => 497,
            ),
            array(
                "id" => 6896,
                "name" => "Kismantoro",
                "city_id" => 497,
            ),
            array(
                "id" => 6897,
                "name" => "Manyaran",
                "city_id" => 497,
            ),
            array(
                "id" => 6898,
                "name" => "Ngadirojo",
                "city_id" => 497,
            ),
            array(
                "id" => 6899,
                "name" => "Nguntoronadi",
                "city_id" => 497,
            ),
            array(
                "id" => 6900,
                "name" => "Paranggupito",
                "city_id" => 497,
            ),
            array(
                "id" => 6901,
                "name" => "Pracimantoro",
                "city_id" => 497,
            ),
            array(
                "id" => 6902,
                "name" => "Puhpelem",
                "city_id" => 497,
            ),
            array(
                "id" => 6903,
                "name" => "Purwantoro",
                "city_id" => 497,
            ),
            array(
                "id" => 6904,
                "name" => "Selogiri",
                "city_id" => 497,
            ),
            array(
                "id" => 6905,
                "name" => "Sidoharjo",
                "city_id" => 497,
            ),
            array(
                "id" => 6906,
                "name" => "Slogohimo",
                "city_id" => 497,
            ),
            array(
                "id" => 6907,
                "name" => "Tirtomoyo",
                "city_id" => 497,
            ),
            array(
                "id" => 6908,
                "name" => "Wonogiri",
                "city_id" => 497,
            ),
            array(
                "id" => 6909,
                "name" => "Wuryantoro",
                "city_id" => 497,
            ),
            array(
                "id" => 6910,
                "name" => "Garung",
                "city_id" => 498,
            ),
            array(
                "id" => 6911,
                "name" => "Kalibawang",
                "city_id" => 498,
            ),
            array(
                "id" => 6912,
                "name" => "Kalikajar",
                "city_id" => 498,
            ),
            array(
                "id" => 6913,
                "name" => "Kaliwiro",
                "city_id" => 498,
            ),
            array(
                "id" => 6914,
                "name" => "Kejajar",
                "city_id" => 498,
            ),
            array(
                "id" => 6915,
                "name" => "Kepil",
                "city_id" => 498,
            ),
            array(
                "id" => 6916,
                "name" => "Kertek",
                "city_id" => 498,
            ),
            array(
                "id" => 6917,
                "name" => "Leksono",
                "city_id" => 498,
            ),
            array(
                "id" => 6918,
                "name" => "Mojotengah",
                "city_id" => 498,
            ),
            array(
                "id" => 6919,
                "name" => "Sapuran",
                "city_id" => 498,
            ),
            array(
                "id" => 6920,
                "name" => "Selomerto",
                "city_id" => 498,
            ),
            array(
                "id" => 6921,
                "name" => "Sukoharjo",
                "city_id" => 498,
            ),
            array(
                "id" => 6922,
                "name" => "Wadaslintang",
                "city_id" => 498,
            ),
            array(
                "id" => 6923,
                "name" => "Watumalang",
                "city_id" => 498,
            ),
            array(
                "id" => 6924,
                "name" => "Wonosobo",
                "city_id" => 498,
            ),
            array(
                "id" => 6925,
                "name" => "Amuma",
                "city_id" => 499,
            ),
            array(
                "id" => 6926,
                "name" => "Anggruk",
                "city_id" => 499,
            ),
            array(
                "id" => 6927,
                "name" => "Bomela",
                "city_id" => 499,
            ),
            array(
                "id" => 6928,
                "name" => "Dekai",
                "city_id" => 499,
            ),
            array(
                "id" => 6929,
                "name" => "Dirwemna (Diruwena)",
                "city_id" => 499,
            ),
            array(
                "id" => 6930,
                "name" => "Duram",
                "city_id" => 499,
            ),
            array(
                "id" => 6931,
                "name" => "Endomen",
                "city_id" => 499,
            ),
            array(
                "id" => 6932,
                "name" => "Hereapini (Hereanini)",
                "city_id" => 499,
            ),
            array(
                "id" => 6933,
                "name" => "Hilipuk",
                "city_id" => 499,
            ),
            array(
                "id" => 6934,
                "name" => "Hogio (Hugio)",
                "city_id" => 499,
            ),
            array(
                "id" => 6935,
                "name" => "Holuon",
                "city_id" => 499,
            ),
            array(
                "id" => 6936,
                "name" => "Kabianggama (Kabianggema)",
                "city_id" => 499,
            ),
            array(
                "id" => 6937,
                "name" => "Kayo",
                "city_id" => 499,
            ),
            array(
                "id" => 6938,
                "name" => "Kona",
                "city_id" => 499,
            ),
            array(
                "id" => 6939,
                "name" => "Koropun (Korupun)",
                "city_id" => 499,
            ),
            array(
                "id" => 6940,
                "name" => "Kosarek",
                "city_id" => 499,
            ),
            array(
                "id" => 6941,
                "name" => "Kurima",
                "city_id" => 499,
            ),
            array(
                "id" => 6942,
                "name" => "Kwelemdua (Kwelamdua)",
                "city_id" => 499,
            ),
            array(
                "id" => 6943,
                "name" => "Kwikma",
                "city_id" => 499,
            ),
            array(
                "id" => 6944,
                "name" => "Langda",
                "city_id" => 499,
            ),
            array(
                "id" => 6945,
                "name" => "Lolat",
                "city_id" => 499,
            ),
            array(
                "id" => 6946,
                "name" => "Mugi",
                "city_id" => 499,
            ),
            array(
                "id" => 6947,
                "name" => "Musaik",
                "city_id" => 499,
            ),
            array(
                "id" => 6948,
                "name" => "Nalca",
                "city_id" => 499,
            ),
            array(
                "id" => 6949,
                "name" => "Ninia",
                "city_id" => 499,
            ),
            array(
                "id" => 6950,
                "name" => "Nipsan",
                "city_id" => 499,
            ),
            array(
                "id" => 6951,
                "name" => "Obio",
                "city_id" => 499,
            ),
            array(
                "id" => 6952,
                "name" => "Panggema",
                "city_id" => 499,
            ),
            array(
                "id" => 6953,
                "name" => "Pasema",
                "city_id" => 499,
            ),
            array(
                "id" => 6954,
                "name" => "Pronggoli (Proggoli)",
                "city_id" => 499,
            ),
            array(
                "id" => 6955,
                "name" => "Puldama",
                "city_id" => 499,
            ),
            array(
                "id" => 6956,
                "name" => "Samenage",
                "city_id" => 499,
            ),
            array(
                "id" => 6957,
                "name" => "Sela",
                "city_id" => 499,
            ),
            array(
                "id" => 6958,
                "name" => "Seredela (Seredala)",
                "city_id" => 499,
            ),
            array(
                "id" => 6959,
                "name" => "Silimo",
                "city_id" => 499,
            ),
            array(
                "id" => 6960,
                "name" => "Soba",
                "city_id" => 499,
            ),
            array(
                "id" => 6961,
                "name" => "Sobaham",
                "city_id" => 499,
            ),
            array(
                "id" => 6962,
                "name" => "Soloikma",
                "city_id" => 499,
            ),
            array(
                "id" => 6963,
                "name" => "Sumo",
                "city_id" => 499,
            ),
            array(
                "id" => 6964,
                "name" => "Suntamon",
                "city_id" => 499,
            ),
            array(
                "id" => 6965,
                "name" => "Suru Suru",
                "city_id" => 499,
            ),
            array(
                "id" => 6966,
                "name" => "Talambo",
                "city_id" => 499,
            ),
            array(
                "id" => 6967,
                "name" => "Tangma",
                "city_id" => 499,
            ),
            array(
                "id" => 6968,
                "name" => "Ubahak",
                "city_id" => 499,
            ),
            array(
                "id" => 6969,
                "name" => "Ubalihi",
                "city_id" => 499,
            ),
            array(
                "id" => 6970,
                "name" => "Ukha",
                "city_id" => 499,
            ),
            array(
                "id" => 6971,
                "name" => "Walma",
                "city_id" => 499,
            ),
            array(
                "id" => 6972,
                "name" => "Werima",
                "city_id" => 499,
            ),
            array(
                "id" => 6973,
                "name" => "Wusuma",
                "city_id" => 499,
            ),
            array(
                "id" => 6974,
                "name" => "Yahuliambut",
                "city_id" => 499,
            ),
            array(
                "id" => 6975,
                "name" => "Yogosem",
                "city_id" => 499,
            ),
            array(
                "id" => 6976,
                "name" => "Abenaho",
                "city_id" => 500,
            ),
            array(
                "id" => 6977,
                "name" => "Apalapsili",
                "city_id" => 500,
            ),
            array(
                "id" => 6978,
                "name" => "Benawa",
                "city_id" => 500,
            ),
            array(
                "id" => 6979,
                "name" => "Elelim",
                "city_id" => 500,
            ),
            array(
                "id" => 6980,
                "name" => "Welarek",
                "city_id" => 500,
            ),
            array(
                "id" => 6981,
                "name" => "Danurejan",
                "city_id" => 501,
            ),
            array(
                "id" => 6982,
                "name" => "Gedong Tengen",
                "city_id" => 501,
            ),
            array(
                "id" => 6983,
                "name" => "Gondokusuman",
                "city_id" => 501,
            ),
            array(
                "id" => 6984,
                "name" => "Gondomanan",
                "city_id" => 501,
            ),
            array(
                "id" => 6985,
                "name" => "Jetis",
                "city_id" => 501,
            ),
            array(
                "id" => 6986,
                "name" => "Kotagede",
                "city_id" => 501,
            ),
            array(
                "id" => 6987,
                "name" => "Kraton",
                "city_id" => 501,
            ),
            array(
                "id" => 6988,
                "name" => "Mantrijeron",
                "city_id" => 501,
            ),
            array(
                "id" => 6989,
                "name" => "Mergangsan",
                "city_id" => 501,
            ),
            array(
                "id" => 6990,
                "name" => "Ngampilan",
                "city_id" => 501,
            ),
            array(
                "id" => 6991,
                "name" => "Pakualaman",
                "city_id" => 501,
            ),
            array(
                "id" => 6992,
                "name" => "Tegalrejo",
                "city_id" => 501,
            ),
            array(
                "id" => 6993,
                "name" => "Umbulharjo",
                "city_id" => 501,
            ),
            array(
                "id" => 6994,
                "name" => "Wirobrajan",
                "city_id" => 501,
            ),
        );

        foreach($subdistricts as $subdistrict) { \Modules\Shipment\Subdistrict::create($subdistrict); };
    }
}
