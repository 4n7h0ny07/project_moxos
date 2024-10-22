<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_reset_tokens_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2017_11_26_015000_create_user_roles_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2018_03_11_000000_add_user_settings',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2024_06_17_135301_create_grupos_table',
                'batch' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2024_06_17_135453_create_personas_table',
                'batch' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2024_06_17_135530_create_permisos_table',
                'batch' => 4,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2024_06_17_135557_create_requerimientos_table',
                'batch' => 5,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2024_06_17_135641_create_coordenadas_table',
                'batch' => 5,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2024_06_17_135732_create_altas_activos_table',
                'batch' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2024_06_17_135745_create_bajas_activos_table',
                'batch' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2024_07_06_143710_create_catalogos_table',
                'batch' => 7,
            ),
            32 => 
            array (
                'id' => 35,
                'migration' => '2024_07_06_155800_create_catalogo_detalles_table',
                'batch' => 8,
            ),
            33 => 
            array (
                'id' => 36,
                'migration' => '2024_08_24_145212_create_vacations_table',
                'batch' => 8,
            ),
            34 => 
            array (
                'id' => 37,
                'migration' => '2024_08_27_220953_create_finiquitos_table',
                'batch' => 9,
            ),
            35 => 
            array (
                'id' => 39,
                'migration' => '2024_09_05_143959_create_marcas_table',
                'batch' => 10,
            ),
            36 => 
            array (
                'id' => 40,
                'migration' => '2024_09_05_144037_create_types_table',
                'batch' => 11,
            ),
            37 => 
            array (
                'id' => 41,
                'migration' => '2024_09_05_144114_create_polizas_table',
                'batch' => 11,
            ),
            38 => 
            array (
                'id' => 42,
                'migration' => '2024_09_05_145105_create_acta_entregas_table',
                'batch' => 11,
            ),
            39 => 
            array (
                'id' => 43,
                'migration' => '2024_10_01_163216_create_certificates_table',
                'batch' => 12,
            ),
            40 => 
            array (
                'id' => 44,
                'migration' => '2024_10_03_192800_create_productos_table',
                'batch' => 13,
            ),
        ));
        
        
    }
}