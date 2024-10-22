<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Farid Rea Zelada',
                'email' => 'farea@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$GkXuFN4Xgrgqznlr/lJfROKmrYVVUxDiTtmYQG0BP4zMvP9ukasM6',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-06-13 18:53:27',
                'updated_at' => '2024-06-13 18:59:54',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'walter Camama',
                'email' => 'waltercamama@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Ou9FsP21sVKh4UdWKVWS.eWUj3wzJseylPRYEqbmdH41ZGnRw6Zpq',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-06-13 19:15:38',
                'updated_at' => '2024-08-22 19:02:32',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Assiya Hurtado Tejada',
                'email' => 'assiyahurtado@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$2tlaOPpihU6b8mWcMJGzseyeafL6MCiDrV5DFLdqB8xKQWD0Fl7iW',
                'remember_token' => 'KHtWmd5Ep3aAulhyaTuy9EGVlFqTiYkFG4E7WlSb0ZY6NxiWQkfzZyH9Sofn',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-07-26 14:05:11',
                'updated_at' => '2024-07-26 14:07:26',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Juan Carlos Revollo Vallejos',
                'email' => 'jcrevollo@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$wRxhQNC6tc.UpHRbxrQQHOZKHWLuqZcftNDD6bz3UqHz6umXv0Wju',
                'remember_token' => 'BvmvfVRoVL7jQtyQeXESNezwZPjoxiNrCddXbg6BAUgeuXiHG0KXpJuf6zuB',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-07-30 19:27:24',
                'updated_at' => '2024-07-30 19:27:24',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Carmen Rosa Rodriguez',
                'email' => 'crodriguez@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$HJ2s4aUlIQGGQhpozr6JFuZIju/5IqvSXbOdsDH7.yVFx5fS//Sa2',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-07-30 20:12:44',
                'updated_at' => '2024-07-30 20:12:44',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'name' => 'Hugo Rodriguez',
                'email' => 'hugorodriguez@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$zK7gRbPV5PYEFrWCoodpz.wheM44jrDgr5IX6Kprf7RjHsb1n/e5m',
                'remember_token' => 'wLYT2jMMIwS0J8N0lGjLzWoCQCViLzzvoecJ8dpky5JKLMDwAi8VlN33Fwkp',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-08-14 14:46:52',
                'updated_at' => '2024-08-24 14:06:26',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 2,
                'name' => 'Yaskara Manu Caller',
                'email' => 'yaskaramanu@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$eYBNxNdRDSOaLkvJ8ikeGO./HA76lQ74h/7CX1fxgURyvIiT3bozS',
                'remember_token' => 'V2Yl7wictkllVNq852SDAoZWn8U9dEZPwD9Q53ZEtWbERsyu0mog33qxPGal',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-08-26 13:51:14',
                'updated_at' => '2024-08-26 13:51:14',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'name' => 'Huascar Roca Yumacale',
                'email' => 'huascarroca@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$ys6gLVRbvmj79bUR3z8CR.kLDVcEEG9fVHto2sKRAEeJiO9zLkJCi',
                'remember_token' => 'LQG8hHuXxReiYgiN0ac7M6X0krmWztf5S7xVFg2ZKPXomuWIt1oy4X61V1rj',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-09-03 22:30:41',
                'updated_at' => '2024-09-03 22:30:41',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 2,
                'name' => 'Tania Tamara Salce Bustamante',
                'email' => 'polizas@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$2Vj5ogbl21AWTLbQhTBGY.8y3m/sLJ4PxHBcwcLLfAIveGMb5hWnu',
                'remember_token' => 'n0ct6sooJJT4zxCC7fNuCszpe0PYaouZENyhzLzpz0VHSbJTvFSczkZdE3Q2',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-09-07 13:52:42',
                'updated_at' => '2024-09-07 13:52:42',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 2,
                'name' => 'Eloy Ribera',
                'email' => 'eribera@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$PUHxkFaSgrsf5Xn3nFWJUujCGSe9RRJX6c/GZpATTTPJ0wMj53Cxq',
                'remember_token' => 'qCahRraYFLeO5Dhng7aCS6dyNRzAQQYsQMkSNaSa4xfgxmkOlG4tGKwkoEFv',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-09-20 20:12:35',
                'updated_at' => '2024-09-20 20:12:35',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 2,
                'name' => 'Carlos Cuellar Muchairo',
                'email' => 'carloscuellar@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$1yFQMVnlCJXRYG0p6tAF8.JBZoS/7v3ltifX/Y2W/ADA5NnkwFuSS',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-09-20 20:33:38',
                'updated_at' => '2024-09-20 20:33:38',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 2,
                'name' => 'Rigoberto coronado',
                'email' => 'rigobertocoronado@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$UfCZCcjy9WIwhmjzkxb0DefSuLhsum4EfCPI4gJ8giAe8WmmWIZeK',
                'remember_token' => 'LkSM9RGuXcSrRUlHfEOqS1bTz3ILdNwgaeewcYShimKkHeV3aabN87P41V2g',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-10-02 13:38:39',
                'updated_at' => '2024-10-02 13:38:39',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 4,
                'name' => 'Bladimir Arteaga Porcel',
                'email' => 'bladimirarteaga@moxos.com.bo',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$12$pmHgHltvLpFX0beJcIlic.Te2VGa320.auSwr1RYyvcdg35Ouc71S',
                'remember_token' => 'nzVQtPUiW6TEKPMC1txl8vy2VIZNxJ8oRZdhJnX2MkMTKQjnwI7Yt0KxVHLa',
                'settings' => '{"locale":"es"}',
                'created_at' => '2024-10-02 19:43:10',
                'updated_at' => '2024-10-02 19:43:10',
            ),
        ));
        
        
    }
}