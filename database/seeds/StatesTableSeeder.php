<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(!DB::table('states')->where('code', 11)->first())
        	DB::table('states')->insert(['country_id' => 30, 'code' => 11, 'uf' => 'RO', 'name' => 'Rondônia', 'active' => true]);
		
		if(!DB::table('states')->where('code', 12)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 12, 'uf' => 'AC', 'name' => 'Acre', 'active' => true]);

		if(!DB::table('states')->where('code', 13)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 13, 'uf' => 'AM', 'name' => 'Amazonas', 'active' => true]);

		if(!DB::table('states')->where('code', 14)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 14, 'uf' => 'RR', 'name' => 'Roraima', 'active' => true]);

		if(!DB::table('states')->where('code', 15)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 15, 'uf' => 'PA', 'name' => 'Pará', 'active' => true]);

		if(!DB::table('states')->where('code', 16)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 16, 'uf' => 'AP', 'name' => 'Amapá', 'active' => true]);

		if(!DB::table('states')->where('code', 17)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 17, 'uf' => 'TO', 'name' => 'Tocantins', 'active' => true]);

		if(!DB::table('states')->where('code', 21)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 21, 'uf' => 'MA', 'name' => 'Maranhão', 'active' => true]);

		if(!DB::table('states')->where('code', 22)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 22, 'uf' => 'PI', 'name' => 'Piauí', 'active' => true]);

		if(!DB::table('states')->where('code', 23)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 23, 'uf' => 'CE', 'name' => 'Ceará', 'active' => true]);

		if(!DB::table('states')->where('code', 24)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 24, 'uf' => 'RN', 'name' => 'Rio Grande do Norte', 'active' => true]);	

		if(!DB::table('states')->where('code', 25)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 25, 'uf' => 'PB', 'name' => 'Paraíba', 'active' => true]);

		if(!DB::table('states')->where('code', 26)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 26, 'uf' => 'PE', 'name' => 'Pernambuco', 'active' => true]);

		if(!DB::table('states')->where('code', 27)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 27, 'uf' => 'AL', 'name' => 'Alagoas', 'active' => true]);

		if(!DB::table('states')->where('code', 28)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 28, 'uf' => 'SE', 'name' => 'Sergipe', 'active' => true]);

		if(!DB::table('states')->where('code', 29)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 29, 'uf' => 'BA', 'name' => 'Bahia', 'active' => true]);

		if(!DB::table('states')->where('code', 31)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 31, 'uf' => 'MG', 'name' => 'Minas Gerais', 'active' => true]);

		if(!DB::table('states')->where('code', 32)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 32, 'uf' => 'ES', 'name' => 'Espírito Santo', 'active' => true]);

		if(!DB::table('states')->where('code', 33)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 33, 'uf' => 'RJ', 'name' => 'Rio de Janeiro', 'active' => true]);

		if(!DB::table('states')->where('code', 35)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 35, 'uf' => 'SP', 'name' => 'São Paulo', 'active' => true]);

		if(!DB::table('states')->where('code', 41)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 41, 'uf' => 'PR', 'name' => 'Paraná', 'active' => true]);

		if(!DB::table('states')->where('code', 42)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 42, 'uf' => 'SC', 'name' => 'Santa Catarina', 'active' => true]);

		if(!DB::table('states')->where('code', 43)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 43, 'uf' => 'RS', 'name' => 'Rio Grande do Sul', 'active' => true]);

		if(!DB::table('states')->where('code', 50)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 50, 'uf' => 'MS', 'name' => 'Mato Grosso do Sul', 'active' => true]);

		if(!DB::table('states')->where('code', 51)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 51, 'uf' => 'MT', 'name' => 'Mato Grosso', 'active' => true]);

		if(!DB::table('states')->where('code', 52)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 52, 'uf' => 'GO', 'name' => 'Goiás', 'active' => true]);

		if(!DB::table('states')->where('code', 53)->first())
			DB::table('states')->insert(['country_id' => 30, 'code' => 53, 'uf' => 'DF', 'name' => 'Distrito Federal', 'active' => true]);

		
    }

}
