<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(BajasActivosTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(CoordenadasTableSeeder::class);
        $this->call(FiniquitosTableSeeder::class);
        $this->call(PasswordResetTokensTableSeeder::class);
        $this->call(VacationsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(ActaEntregasTableSeeder::class);
        $this->call(AltasActivosTableSeeder::class);
        $this->call(CatalogosTableSeeder::class);
        $this->call(CatalogoDetallesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(GruposTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PersonasTableSeeder::class);
        $this->call(PolizasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(RequerimientosTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
    }
}
