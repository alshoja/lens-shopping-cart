<?php

use Illuminate\Database\Seeder;

class EditorsPicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Editorspic::class, 10)->create();
    }
}
