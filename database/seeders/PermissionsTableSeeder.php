<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2024-06-13 18:52:51',
                'updated_at' => '2024-06-13 18:52:51',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_grupos',
                'table_name' => 'grupos',
                'created_at' => '2024-06-18 13:31:57',
                'updated_at' => '2024-06-18 13:31:57',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_grupos',
                'table_name' => 'grupos',
                'created_at' => '2024-06-18 13:31:57',
                'updated_at' => '2024-06-18 13:31:57',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_grupos',
                'table_name' => 'grupos',
                'created_at' => '2024-06-18 13:31:57',
                'updated_at' => '2024-06-18 13:31:57',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_grupos',
                'table_name' => 'grupos',
                'created_at' => '2024-06-18 13:31:57',
                'updated_at' => '2024-06-18 13:31:57',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_grupos',
                'table_name' => 'grupos',
                'created_at' => '2024-06-18 13:31:57',
                'updated_at' => '2024-06-18 13:31:57',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_personas',
                'table_name' => 'personas',
                'created_at' => '2024-06-18 13:59:16',
                'updated_at' => '2024-06-18 13:59:16',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_personas',
                'table_name' => 'personas',
                'created_at' => '2024-06-18 13:59:16',
                'updated_at' => '2024-06-18 13:59:16',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_personas',
                'table_name' => 'personas',
                'created_at' => '2024-06-18 13:59:16',
                'updated_at' => '2024-06-18 13:59:16',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_personas',
                'table_name' => 'personas',
                'created_at' => '2024-06-18 13:59:16',
                'updated_at' => '2024-06-18 13:59:16',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_personas',
                'table_name' => 'personas',
                'created_at' => '2024-06-18 13:59:16',
                'updated_at' => '2024-06-18 13:59:16',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_requerimientos',
                'table_name' => 'requerimientos',
                'created_at' => '2024-06-18 19:18:57',
                'updated_at' => '2024-06-18 19:18:57',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_requerimientos',
                'table_name' => 'requerimientos',
                'created_at' => '2024-06-18 19:18:57',
                'updated_at' => '2024-06-18 19:18:57',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_requerimientos',
                'table_name' => 'requerimientos',
                'created_at' => '2024-06-18 19:18:57',
                'updated_at' => '2024-06-18 19:18:57',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_requerimientos',
                'table_name' => 'requerimientos',
                'created_at' => '2024-06-18 19:18:57',
                'updated_at' => '2024-06-18 19:18:57',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_requerimientos',
                'table_name' => 'requerimientos',
                'created_at' => '2024-06-18 19:18:57',
                'updated_at' => '2024-06-18 19:18:57',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_altas_activos',
                'table_name' => 'altas_activos',
                'created_at' => '2024-06-18 22:53:27',
                'updated_at' => '2024-06-18 22:53:27',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_altas_activos',
                'table_name' => 'altas_activos',
                'created_at' => '2024-06-18 22:53:27',
                'updated_at' => '2024-06-18 22:53:27',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_altas_activos',
                'table_name' => 'altas_activos',
                'created_at' => '2024-06-18 22:53:27',
                'updated_at' => '2024-06-18 22:53:27',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_altas_activos',
                'table_name' => 'altas_activos',
                'created_at' => '2024-06-18 22:53:27',
                'updated_at' => '2024-06-18 22:53:27',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_altas_activos',
                'table_name' => 'altas_activos',
                'created_at' => '2024-06-18 22:53:27',
                'updated_at' => '2024-06-18 22:53:27',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_catalogos',
                'table_name' => 'catalogos',
                'created_at' => '2024-07-06 15:08:33',
                'updated_at' => '2024-07-06 15:08:33',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_catalogos',
                'table_name' => 'catalogos',
                'created_at' => '2024-07-06 15:08:33',
                'updated_at' => '2024-07-06 15:08:33',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_catalogos',
                'table_name' => 'catalogos',
                'created_at' => '2024-07-06 15:08:33',
                'updated_at' => '2024-07-06 15:08:33',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_catalogos',
                'table_name' => 'catalogos',
                'created_at' => '2024-07-06 15:08:33',
                'updated_at' => '2024-07-06 15:08:33',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_catalogos',
                'table_name' => 'catalogos',
                'created_at' => '2024-07-06 15:08:33',
                'updated_at' => '2024-07-06 15:08:33',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_vacations',
                'table_name' => 'vacations',
                'created_at' => '2024-08-24 15:52:18',
                'updated_at' => '2024-08-24 15:52:18',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_vacations',
                'table_name' => 'vacations',
                'created_at' => '2024-08-24 15:52:18',
                'updated_at' => '2024-08-24 15:52:18',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_vacations',
                'table_name' => 'vacations',
                'created_at' => '2024-08-24 15:52:18',
                'updated_at' => '2024-08-24 15:52:18',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_vacations',
                'table_name' => 'vacations',
                'created_at' => '2024-08-24 15:52:18',
                'updated_at' => '2024-08-24 15:52:18',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_vacations',
                'table_name' => 'vacations',
                'created_at' => '2024-08-24 15:52:18',
                'updated_at' => '2024-08-24 15:52:18',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_finiquitos',
                'table_name' => 'finiquitos',
                'created_at' => '2024-08-28 22:58:59',
                'updated_at' => '2024-08-28 22:58:59',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_finiquitos',
                'table_name' => 'finiquitos',
                'created_at' => '2024-08-28 22:58:59',
                'updated_at' => '2024-08-28 22:58:59',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_finiquitos',
                'table_name' => 'finiquitos',
                'created_at' => '2024-08-28 22:58:59',
                'updated_at' => '2024-08-28 22:58:59',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_finiquitos',
                'table_name' => 'finiquitos',
                'created_at' => '2024-08-28 22:58:59',
                'updated_at' => '2024-08-28 22:58:59',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_finiquitos',
                'table_name' => 'finiquitos',
                'created_at' => '2024-08-28 22:58:59',
                'updated_at' => '2024-08-28 22:58:59',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_polizas',
                'table_name' => 'polizas',
                'created_at' => '2024-09-05 15:50:34',
                'updated_at' => '2024-09-05 15:50:34',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_polizas',
                'table_name' => 'polizas',
                'created_at' => '2024-09-05 15:50:34',
                'updated_at' => '2024-09-05 15:50:34',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_polizas',
                'table_name' => 'polizas',
                'created_at' => '2024-09-05 15:50:34',
                'updated_at' => '2024-09-05 15:50:34',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_polizas',
                'table_name' => 'polizas',
                'created_at' => '2024-09-05 15:50:34',
                'updated_at' => '2024-09-05 15:50:34',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_polizas',
                'table_name' => 'polizas',
                'created_at' => '2024-09-05 15:50:34',
                'updated_at' => '2024-09-05 15:50:34',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_pdf',
                'table_name' => 'pdf',
                'created_at' => '2024-10-01 19:13:43',
                'updated_at' => '2024-10-01 19:13:43',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_pdf',
                'table_name' => 'pdf',
                'created_at' => '2024-10-01 19:13:43',
                'updated_at' => '2024-10-01 19:13:43',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_pdf',
                'table_name' => 'pdf',
                'created_at' => '2024-10-01 19:13:43',
                'updated_at' => '2024-10-01 19:13:43',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_pdf',
                'table_name' => 'pdf',
                'created_at' => '2024-10-01 19:13:43',
                'updated_at' => '2024-10-01 19:13:43',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_pdf',
                'table_name' => 'pdf',
                'created_at' => '2024-10-01 19:13:43',
                'updated_at' => '2024-10-01 19:13:43',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_media',
                'table_name' => 'media',
                'created_at' => '2024-10-01 19:15:06',
                'updated_at' => '2024-10-01 19:15:06',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_media',
                'table_name' => 'media',
                'created_at' => '2024-10-01 19:15:06',
                'updated_at' => '2024-10-01 19:15:06',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_media',
                'table_name' => 'media',
                'created_at' => '2024-10-01 19:15:06',
                'updated_at' => '2024-10-01 19:15:06',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_media',
                'table_name' => 'media',
                'created_at' => '2024-10-01 19:15:06',
                'updated_at' => '2024-10-01 19:15:06',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_media',
                'table_name' => 'media',
                'created_at' => '2024-10-01 19:15:06',
                'updated_at' => '2024-10-01 19:15:06',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'certificate_pdf',
                'table_name' => NULL,
                'created_at' => '2024-10-01 20:22:51',
                'updated_at' => '2024-10-01 20:22:51',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'browse_marcas',
                'table_name' => 'marcas',
                'created_at' => '2024-10-03 19:52:50',
                'updated_at' => '2024-10-03 19:52:50',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'read_marcas',
                'table_name' => 'marcas',
                'created_at' => '2024-10-03 19:52:50',
                'updated_at' => '2024-10-03 19:52:50',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'edit_marcas',
                'table_name' => 'marcas',
                'created_at' => '2024-10-03 19:52:50',
                'updated_at' => '2024-10-03 19:52:50',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'add_marcas',
                'table_name' => 'marcas',
                'created_at' => '2024-10-03 19:52:50',
                'updated_at' => '2024-10-03 19:52:50',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'delete_marcas',
                'table_name' => 'marcas',
                'created_at' => '2024-10-03 19:52:50',
                'updated_at' => '2024-10-03 19:52:50',
            ),
            81 => 
            array (
                'id' => 87,
                'key' => 'browse_types',
                'table_name' => 'types',
                'created_at' => '2024-10-03 20:42:05',
                'updated_at' => '2024-10-03 20:42:05',
            ),
            82 => 
            array (
                'id' => 88,
                'key' => 'read_types',
                'table_name' => 'types',
                'created_at' => '2024-10-03 20:42:05',
                'updated_at' => '2024-10-03 20:42:05',
            ),
            83 => 
            array (
                'id' => 89,
                'key' => 'edit_types',
                'table_name' => 'types',
                'created_at' => '2024-10-03 20:42:05',
                'updated_at' => '2024-10-03 20:42:05',
            ),
            84 => 
            array (
                'id' => 90,
                'key' => 'add_types',
                'table_name' => 'types',
                'created_at' => '2024-10-03 20:42:05',
                'updated_at' => '2024-10-03 20:42:05',
            ),
            85 => 
            array (
                'id' => 91,
                'key' => 'delete_types',
                'table_name' => 'types',
                'created_at' => '2024-10-03 20:42:05',
                'updated_at' => '2024-10-03 20:42:05',
            ),
            86 => 
            array (
                'id' => 92,
                'key' => 'browse_productos',
                'table_name' => 'productos',
                'created_at' => '2024-10-03 21:01:31',
                'updated_at' => '2024-10-03 21:01:31',
            ),
            87 => 
            array (
                'id' => 93,
                'key' => 'read_productos',
                'table_name' => 'productos',
                'created_at' => '2024-10-03 21:01:31',
                'updated_at' => '2024-10-03 21:01:31',
            ),
            88 => 
            array (
                'id' => 94,
                'key' => 'edit_productos',
                'table_name' => 'productos',
                'created_at' => '2024-10-03 21:01:31',
                'updated_at' => '2024-10-03 21:01:31',
            ),
            89 => 
            array (
                'id' => 95,
                'key' => 'add_productos',
                'table_name' => 'productos',
                'created_at' => '2024-10-03 21:01:31',
                'updated_at' => '2024-10-03 21:01:31',
            ),
            90 => 
            array (
                'id' => 96,
                'key' => 'delete_productos',
                'table_name' => 'productos',
                'created_at' => '2024-10-03 21:01:31',
                'updated_at' => '2024-10-03 21:01:31',
            ),
            91 => 
            array (
                'id' => 97,
                'key' => 'browse_cobradores',
                'table_name' => 'cobradores',
                'created_at' => '2024-10-25 20:06:43',
                'updated_at' => '2024-10-25 20:06:43',
            ),
            92 => 
            array (
                'id' => 98,
                'key' => 'read_cobradores',
                'table_name' => 'cobradores',
                'created_at' => '2024-10-25 20:06:43',
                'updated_at' => '2024-10-25 20:06:43',
            ),
            93 => 
            array (
                'id' => 99,
                'key' => 'edit_cobradores',
                'table_name' => 'cobradores',
                'created_at' => '2024-10-25 20:06:43',
                'updated_at' => '2024-10-25 20:06:43',
            ),
            94 => 
            array (
                'id' => 100,
                'key' => 'add_cobradores',
                'table_name' => 'cobradores',
                'created_at' => '2024-10-25 20:06:43',
                'updated_at' => '2024-10-25 20:06:43',
            ),
            95 => 
            array (
                'id' => 101,
                'key' => 'delete_cobradores',
                'table_name' => 'cobradores',
                'created_at' => '2024-10-25 20:06:43',
                'updated_at' => '2024-10-25 20:06:43',
            ),
            96 => 
            array (
                'id' => 102,
                'key' => 'browse_promotores',
                'table_name' => 'promotores',
                'created_at' => '2024-10-25 20:13:59',
                'updated_at' => '2024-10-25 20:13:59',
            ),
            97 => 
            array (
                'id' => 103,
                'key' => 'read_promotores',
                'table_name' => 'promotores',
                'created_at' => '2024-10-25 20:13:59',
                'updated_at' => '2024-10-25 20:13:59',
            ),
            98 => 
            array (
                'id' => 104,
                'key' => 'edit_promotores',
                'table_name' => 'promotores',
                'created_at' => '2024-10-25 20:13:59',
                'updated_at' => '2024-10-25 20:13:59',
            ),
            99 => 
            array (
                'id' => 105,
                'key' => 'add_promotores',
                'table_name' => 'promotores',
                'created_at' => '2024-10-25 20:13:59',
                'updated_at' => '2024-10-25 20:13:59',
            ),
            100 => 
            array (
                'id' => 106,
                'key' => 'delete_promotores',
                'table_name' => 'promotores',
                'created_at' => '2024-10-25 20:13:59',
                'updated_at' => '2024-10-25 20:13:59',
            ),
            101 => 
            array (
                'id' => 107,
                'key' => 'browse_zktecodevices',
                'table_name' => 'zktecodevices',
                'created_at' => '2024-10-31 14:38:06',
                'updated_at' => '2024-10-31 14:38:06',
            ),
            102 => 
            array (
                'id' => 108,
                'key' => 'read_zktecodevices',
                'table_name' => 'zktecodevices',
                'created_at' => '2024-10-31 14:38:06',
                'updated_at' => '2024-10-31 14:38:06',
            ),
            103 => 
            array (
                'id' => 109,
                'key' => 'edit_zktecodevices',
                'table_name' => 'zktecodevices',
                'created_at' => '2024-10-31 14:38:06',
                'updated_at' => '2024-10-31 14:38:06',
            ),
            104 => 
            array (
                'id' => 110,
                'key' => 'add_zktecodevices',
                'table_name' => 'zktecodevices',
                'created_at' => '2024-10-31 14:38:06',
                'updated_at' => '2024-10-31 14:38:06',
            ),
            105 => 
            array (
                'id' => 111,
                'key' => 'delete_zktecodevices',
                'table_name' => 'zktecodevices',
                'created_at' => '2024-10-31 14:38:06',
                'updated_at' => '2024-10-31 14:38:06',
            ),
            106 => 
            array (
                'id' => 112,
                'key' => 'browse_gubications',
                'table_name' => 'gubications',
                'created_at' => '2024-11-05 15:29:27',
                'updated_at' => '2024-11-05 15:29:27',
            ),
            107 => 
            array (
                'id' => 113,
                'key' => 'read_gubications',
                'table_name' => 'gubications',
                'created_at' => '2024-11-05 15:29:27',
                'updated_at' => '2024-11-05 15:29:27',
            ),
            108 => 
            array (
                'id' => 114,
                'key' => 'edit_gubications',
                'table_name' => 'gubications',
                'created_at' => '2024-11-05 15:29:27',
                'updated_at' => '2024-11-05 15:29:27',
            ),
            109 => 
            array (
                'id' => 115,
                'key' => 'add_gubications',
                'table_name' => 'gubications',
                'created_at' => '2024-11-05 15:29:27',
                'updated_at' => '2024-11-05 15:29:27',
            ),
            110 => 
            array (
                'id' => 116,
                'key' => 'delete_gubications',
                'table_name' => 'gubications',
                'created_at' => '2024-11-05 15:29:27',
                'updated_at' => '2024-11-05 15:29:27',
            ),
        ));
        
        
    }
}