<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('countries')->where('code', 4)->first())
        	DB::table('countries')->insert(['code' => 4, 'name' => 'Afeganistão' , 'iso' => 'AFG ', 'active' => false]);

	  	if(!DB::table('countries')->where('code', 710)->first())
	  		DB::table('countries')->insert(['code' => 710, 'name' => 'África do Sul' , 'iso' => 'ZAF ', 'active' => false]);

		if(!DB::table('countries')->where('code', 8)->first())
			DB::table('countries')->insert(['code' => 8, 'name' => 'Albânia' , 'iso' => 'ALB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 276)->first())
			DB::table('countries')->insert(['code' => 276, 'name' => 'Alemanha' , 'iso' => 'DEU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 20)->first())
			DB::table('countries')->insert(['code' => 20 , 'name' => 'Andorra' , 'iso' => 'AND ', 'active' => false]);

		if(!DB::table('countries')->where('code', 24)->first())
			DB::table('countries')->insert(['code' => 24 , 'name' => 'Angola' , 'iso' => 'AGO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 660)->first())
			DB::table('countries')->insert(['code' => 660 , 'name' => 'Anguilla' , 'iso' => 'AIA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 28 )->first())
			DB::table('countries')->insert(['code' => 28 , 'name' => 'Antígua e Barbuda' , 'iso' => 'ATG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 682)->first())
			DB::table('countries')->insert(['code' => 682 , 'name' => 'Arábia Saudita' , 'iso' => 'SAU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 12 )->first())
			DB::table('countries')->insert(['code' => 12 , 'name' => 'Argélia' , 'iso' => 'DZA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 32 )->first())
			DB::table('countries')->insert(['code' => 32 , 'name' => 'Argentina' , 'iso' => 'ARG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 51 )->first())
			DB::table('countries')->insert(['code' => 51 , 'name' => 'Armênia' , 'iso' => 'ARM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 533)->first())
			DB::table('countries')->insert(['code' => 533 , 'name' => 'Aruba' , 'iso' => 'ABW ', 'active' => false]);

		if(!DB::table('countries')->where('code', 36 )->first())
			DB::table('countries')->insert(['code' => 36 , 'name' => 'Austrália' , 'iso' => 'AUS ', 'active' => false]);

		if(!DB::table('countries')->where('code', 40 )->first())
			DB::table('countries')->insert(['code' => 40 , 'name' => 'Áustria' , 'iso' => 'AUT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 31 )->first())
			DB::table('countries')->insert(['code' => 31 , 'name' => 'Azerbaijão' , 'iso' => 'AZE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 44 )->first())
			DB::table('countries')->insert(['code' => 44 , 'name' => 'Bahamas' , 'iso' => 'BHS ', 'active' => false]);

		if(!DB::table('countries')->where('code', 50 )->first())
			DB::table('countries')->insert(['code' => 50 , 'name' => 'Bangladesh' , 'iso' => 'BGD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 52 )->first())
			DB::table('countries')->insert(['code' => 52 , 'name' => 'Barbados' , 'iso' => 'BRB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 48 )->first())
			DB::table('countries')->insert(['code' => 48 , 'name' => 'Barein' , 'iso' => 'BHR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 56 )->first())
			DB::table('countries')->insert(['code' => 56 , 'name' => 'Bélgica' , 'iso' => 'BEL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 84 )->first())
			DB::table('countries')->insert(['code' => 84 , 'name' => 'Belize' , 'iso' => 'BLZ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 204)->first())
			DB::table('countries')->insert(['code' => 204 , 'name' => 'Benin' , 'iso' => 'BEN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 60 )->first())
			DB::table('countries')->insert(['code' => 60 , 'name' => 'Bermuda' , 'iso' => 'BMU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 112)->first())
			DB::table('countries')->insert(['code' => 112 , 'name' => 'Bielorússia' , 'iso' => 'BLR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 68 )->first())
			DB::table('countries')->insert(['code' => 68 , 'name' => 'Bolívia' , 'iso' => 'BOL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 535)->first())
			DB::table('countries')->insert(['code' => 535 , 'name' => 'Bonaire, Santo Eustáquio e Saba' , 'iso' => 'BES ', 'active' => false]);

		if(!DB::table('countries')->where('code', 70 )->first())
			DB::table('countries')->insert(['code' => 70 , 'name' => 'Bósnia-Herzegovina' , 'iso' => 'BIH ', 'active' => false]);

		if(!DB::table('countries')->where('code', 72 )->first())
			DB::table('countries')->insert(['code' => 72 , 'name' => 'Botsuana' , 'iso' => 'BWA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 76 )->first())
			DB::table('countries')->insert(['code' => 76 , 'name' => 'Brasil' , 'iso' => 'BRA ', 'active' => true]);

		if(!DB::table('countries')->where('code', 96 )->first())
			DB::table('countries')->insert(['code' => 96 , 'name' => 'Brunei' , 'iso' => 'BRN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 100)->first())
			DB::table('countries')->insert(['code' => 100 , 'name' => 'Bulgária' , 'iso' => 'BGR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 854)->first())
			DB::table('countries')->insert(['code' => 854 , 'name' => 'Burkina Faso' , 'iso' => 'BFA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 108)->first())
			DB::table('countries')->insert(['code' => 108 , 'name' => 'Burundi' , 'iso' => 'BDI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 64 )->first())
			DB::table('countries')->insert(['code' => 64 , 'name' => 'Butão' , 'iso' => 'BTN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 132)->first())
			DB::table('countries')->insert(['code' => 132 , 'name' => 'Cabo Verde' , 'iso' => 'CPV ', 'active' => false]);

		if(!DB::table('countries')->where('code', 120)->first())
			DB::table('countries')->insert(['code' => 120 , 'name' => 'Camarões' , 'iso' => 'CMR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 116)->first())
			DB::table('countries')->insert(['code' => 116 , 'name' => 'Camboja' , 'iso' => 'KHM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 124)->first())
			DB::table('countries')->insert(['code' => 124 , 'name' => 'Canadá' , 'iso' => 'CAN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 398)->first())
			DB::table('countries')->insert(['code' => 398 , 'name' => 'Casaquistão' , 'iso' => 'KAZ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 634)->first())
			DB::table('countries')->insert(['code' => 634 , 'name' => 'Catar' , 'iso' => 'QAT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 148)->first())
			DB::table('countries')->insert(['code' => 148 , 'name' => 'Chade' , 'iso' => 'TCD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 152)->first())
			DB::table('countries')->insert(['code' => 152 , 'name' => 'Chile' , 'iso' => 'CHL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 156)->first())
			DB::table('countries')->insert(['code' => 156 , 'name' => 'China' , 'iso' => 'CHN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 344)->first())
			DB::table('countries')->insert(['code' => 344 , 'name' => 'China, Hong Kong' , 'iso' => 'HKG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 446)->first())
			DB::table('countries')->insert(['code' => 446 , 'name' => 'China, Macao' , 'iso' => 'MAC ', 'active' => false]);

		if(!DB::table('countries')->where('code', 196)->first())
			DB::table('countries')->insert(['code' => 196 , 'name' => 'Chipre' , 'iso' => 'CYP ', 'active' => false]);

		if(!DB::table('countries')->where('code', 702)->first())
			DB::table('countries')->insert(['code' => 702 , 'name' => 'Cingapura' , 'iso' => 'SGP ', 'active' => false]);

		if(!DB::table('countries')->where('code', 170)->first())
			DB::table('countries')->insert(['code' => 170 , 'name' => 'Colômbia' , 'iso' => 'COL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 174)->first())
			DB::table('countries')->insert(['code' => 174 , 'name' => 'Comores' , 'iso' => 'COM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 178)->first())
			DB::table('countries')->insert(['code' => 178 , 'name' => 'Congo' , 'iso' => 'COG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 408)->first())
			DB::table('countries')->insert(['code' => 408 , 'name' => 'Coréia do Norte' , 'iso' => 'PRK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 410)->first())
			DB::table('countries')->insert(['code' => 410 , 'name' => 'Coréia do Sul' , 'iso' => 'KOR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 384)->first())
			DB::table('countries')->insert(['code' => 384 , 'name' => 'Costa do Marfim' , 'iso' => 'CIV ', 'active' => false]);

		if(!DB::table('countries')->where('code', 188)->first())
			DB::table('countries')->insert(['code' => 188 , 'name' => 'Costa Rica' , 'iso' => 'CRI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 191)->first())
			DB::table('countries')->insert(['code' => 191 , 'name' => 'Croácia' , 'iso' => 'HRV ', 'active' => false]);

		if(!DB::table('countries')->where('code', 192)->first())
			DB::table('countries')->insert(['code' => 192 , 'name' => 'Cuba' , 'iso' => 'CUB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 531)->first())
			DB::table('countries')->insert(['code' => 531 , 'name' => 'Curaçao' , 'iso' => 'CUW ', 'active' => false]);

		if(!DB::table('countries')->where('code', 208)->first())
			DB::table('countries')->insert(['code' => 208 , 'name' => 'Dinamarca' , 'iso' => 'DNK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 262)->first())
			DB::table('countries')->insert(['code' => 262 , 'name' => 'Djibouti' , 'iso' => 'DJI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 212)->first())
			DB::table('countries')->insert(['code' => 212 , 'name' => 'Dominica' , 'iso' => 'DMA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 818)->first())
			DB::table('countries')->insert(['code' => 818 , 'name' => 'Egito' , 'iso' => 'EGY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 222)->first())
			DB::table('countries')->insert(['code' => 222 , 'name' => 'El Salvador' , 'iso' => 'SLV ', 'active' => false]);

		if(!DB::table('countries')->where('code', 784)->first())
			DB::table('countries')->insert(['code' => 784 , 'name' => 'Emirados Árabes Unidos' , 'iso' => 'ARE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 218)->first())
			DB::table('countries')->insert(['code' => 218 , 'name' => 'Equador' , 'iso' => 'ECU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 232)->first())
			DB::table('countries')->insert(['code' => 232 , 'name' => 'Eritréia' , 'iso' => 'ERI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 703)->first())
			DB::table('countries')->insert(['code' => 703 , 'name' => 'Eslováquia' , 'iso' => 'SVK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 705)->first())
			DB::table('countries')->insert(['code' => 705 , 'name' => 'Eslovênia' , 'iso' => 'SVN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 724)->first())
			DB::table('countries')->insert(['code' => 724 , 'name' => 'Espanha' , 'iso' => 'ESP ', 'active' => false]);

		if(!DB::table('countries')->where('code', 840)->first())
			DB::table('countries')->insert(['code' => 840 , 'name' => 'Estados Unidos da América' , 'iso' => 'USA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 233)->first())
			DB::table('countries')->insert(['code' => 233 , 'name' => 'Estônia' , 'iso' => 'EST ', 'active' => false]);

		if(!DB::table('countries')->where('code', 231)->first())
			DB::table('countries')->insert(['code' => 231 , 'name' => 'Etiópia' , 'iso' => 'ETH ', 'active' => false]);

		if(!DB::table('countries')->where('code', 242)->first())
			DB::table('countries')->insert(['code' => 242 , 'name' => 'Fiji' , 'iso' => 'FJI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 608)->first())
			DB::table('countries')->insert(['code' => 608 , 'name' => 'Filipinas' , 'iso' => 'PHL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 246)->first())
			DB::table('countries')->insert(['code' => 246 , 'name' => 'Finlândia' , 'iso' => 'FIN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 250)->first())
			DB::table('countries')->insert(['code' => 250 , 'name' => 'França' , 'iso' => 'FRA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 266)->first())
			DB::table('countries')->insert(['code' => 266 , 'name' => 'Gabão' , 'iso' => 'GAB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 270)->first())
			DB::table('countries')->insert(['code' => 270 , 'name' => 'Gâmbia' , 'iso' => 'GMB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 288)->first())
			DB::table('countries')->insert(['code' => 288 , 'name' => 'Gana' , 'iso' => 'GHA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 268)->first())
			DB::table('countries')->insert(['code' => 268 , 'name' => 'Geórgia' , 'iso' => 'GEO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 292)->first())
			DB::table('countries')->insert(['code' => 292 , 'name' => 'Gibraltar' , 'iso' => 'GIB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 308)->first())
			DB::table('countries')->insert(['code' => 308 , 'name' => 'Granada' , 'iso' => 'GRD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 300)->first())
			DB::table('countries')->insert(['code' => 300 , 'name' => 'Grécia' , 'iso' => 'GRC ', 'active' => false]);

		if(!DB::table('countries')->where('code', 304)->first())
			DB::table('countries')->insert(['code' => 304 , 'name' => 'Groenlândia' , 'iso' => 'GRL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 316)->first())
			DB::table('countries')->insert(['code' => 316 , 'name' => 'Guam' , 'iso' => 'GUM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 320)->first())
			DB::table('countries')->insert(['code' => 320 , 'name' => 'Guatemala' , 'iso' => 'GTM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 831)->first())
			DB::table('countries')->insert(['code' => 831 , 'name' => 'Guernsey' , 'iso' => 'GGY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 328)->first())
			DB::table('countries')->insert(['code' => 328 , 'name' => 'Guiana' , 'iso' => 'GUY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 254)->first())
			DB::table('countries')->insert(['code' => 254 , 'name' => 'Guiana Francesa' , 'iso' => 'GUF ', 'active' => false]);

		if(!DB::table('countries')->where('code', 324)->first())
			DB::table('countries')->insert(['code' => 324 , 'name' => 'Guiné' , 'iso' => 'GIN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 226)->first())
			DB::table('countries')->insert(['code' => 226 , 'name' => 'Guiné Equatorial' , 'iso' => 'GNQ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 624)->first())
			DB::table('countries')->insert(['code' => 624 , 'name' => 'Guiné-Bissau' , 'iso' => 'GNB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 332)->first())
			DB::table('countries')->insert(['code' => 332 , 'name' => 'Haiti' , 'iso' => 'HTI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 528)->first())
			DB::table('countries')->insert(['code' => 528 , 'name' => 'Holanda' , 'iso' => 'NLD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 340)->first())
			DB::table('countries')->insert(['code' => 340 , 'name' => 'Honduras' , 'iso' => 'HND ', 'active' => false]);

		if(!DB::table('countries')->where('code', 348)->first())
			DB::table('countries')->insert(['code' => 348 , 'name' => 'Hungria' , 'iso' => 'HUN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 887)->first())
			DB::table('countries')->insert(['code' => 887 , 'name' => 'Iêmen' , 'iso' => 'YEM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 833)->first())
			DB::table('countries')->insert(['code' => 833 , 'name' => 'Ilha de Man' , 'iso' => 'IMN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 312)->first())
			DB::table('countries')->insert(['code' => 312 , 'name' => 'Ilha Guadalupe' , 'iso' => 'GLP ', 'active' => false]);

		if(!DB::table('countries')->where('code', 574)->first())
			DB::table('countries')->insert(['code' => 574 , 'name' => 'Ilha Norfolk' , 'iso' => 'NFK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 638)->first())
			DB::table('countries')->insert(['code' => 638 , 'name' => 'Ilha Reunião' , 'iso' => 'REU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 248)->first())
			DB::table('countries')->insert(['code' => 248 , 'name' => 'Ilhas Alanda' , 'iso' => 'ALA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 136)->first())
			DB::table('countries')->insert(['code' => 136 , 'name' => 'Ilhas Cayman' , 'iso' => 'CYM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 184)->first())
			DB::table('countries')->insert(['code' => 184 , 'name' => 'Ilhas Cook' , 'iso' => 'COK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 830)->first())
			DB::table('countries')->insert(['code' => 830 , 'name' => 'Ilhas do Canal' , 'iso' => ' ', 'active' => false]);

		if(!DB::table('countries')->where('code', 234)->first())
			DB::table('countries')->insert(['code' => 234 , 'name' => 'Ilhas Faeroe' , 'iso' => 'FRO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 238)->first())
			DB::table('countries')->insert(['code' => 238 , 'name' => 'Ilhas Falkland' , 'iso' => 'FLK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 580)->first())
			DB::table('countries')->insert(['code' => 580 , 'name' => 'Ilhas Marianas' , 'iso' => 'MNP ', 'active' => false]);

		if(!DB::table('countries')->where('code', 584)->first())
			DB::table('countries')->insert(['code' => 584 , 'name' => 'Ilhas Marshall' , 'iso' => 'MHL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 90 )->first())
			DB::table('countries')->insert(['code' => 90 , 'name' => 'Ilhas Salomão' , 'iso' => 'SLB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 796)->first())
			DB::table('countries')->insert(['code' => 796 , 'name' => 'Ilhas Turks e Caicos' , 'iso' => 'TCA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 850)->first())
			DB::table('countries')->insert(['code' => 850 , 'name' => 'Ilhas Virgens' , 'iso' => 'VIR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 92 )->first())
			DB::table('countries')->insert(['code' => 92 , 'name' => 'Ilhas Virgens Britânicas' , 'iso' => 'VGB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 876)->first())
			DB::table('countries')->insert(['code' => 876 , 'name' => 'Ilhas Wallis e Futuna' , 'iso' => 'WLF ', 'active' => false]);

		if(!DB::table('countries')->where('code', 356)->first())
			DB::table('countries')->insert(['code' => 356 , 'name' => 'Índia' , 'iso' => 'IND ', 'active' => false]);

		if(!DB::table('countries')->where('code', 360)->first())
			DB::table('countries')->insert(['code' => 360 , 'name' => 'Indonésia' , 'iso' => 'IDN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 364)->first())
			DB::table('countries')->insert(['code' => 364 , 'name' => 'Irã' , 'iso' => 'IRN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 368)->first())
			DB::table('countries')->insert(['code' => 368 , 'name' => 'Iraque' , 'iso' => 'IRQ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 372)->first())
			DB::table('countries')->insert(['code' => 372 , 'name' => 'Irlanda' , 'iso' => 'IRL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 352)->first())
			DB::table('countries')->insert(['code' => 352 , 'name' => 'Islândia' , 'iso' => 'ISL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 376)->first())
			DB::table('countries')->insert(['code' => 376 , 'name' => 'Israel' , 'iso' => 'ISR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 380)->first())
			DB::table('countries')->insert(['code' => 380 , 'name' => 'Itália' , 'iso' => 'ITA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 388)->first())
			DB::table('countries')->insert(['code' => 388 , 'name' => 'Jamaica' , 'iso' => 'JAM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 392)->first())
			DB::table('countries')->insert(['code' => 392 , 'name' => 'Japão' , 'iso' => 'JPN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 832)->first())
			DB::table('countries')->insert(['code' => 832 , 'name' => 'Jersey' , 'iso' => 'JEY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 400)->first())
			DB::table('countries')->insert(['code' => 400 , 'name' => 'Jordânia' , 'iso' => 'JOR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 296)->first())
			DB::table('countries')->insert(['code' => 296 , 'name' => 'Kiribati' , 'iso' => 'KIR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 414)->first())
			DB::table('countries')->insert(['code' => 414 , 'name' => 'Kuwait' , 'iso' => 'KWT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 418)->first())
			DB::table('countries')->insert(['code' => 418 , 'name' => 'Laos' , 'iso' => 'LAO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 426)->first())
			DB::table('countries')->insert(['code' => 426 , 'name' => 'Lesoto' , 'iso' => 'LSO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 428)->first())
			DB::table('countries')->insert(['code' => 428 , 'name' => 'Letônia' , 'iso' => 'LVA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 422)->first())
			DB::table('countries')->insert(['code' => 422 , 'name' => 'Líbano' , 'iso' => 'LBN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 430)->first())
			DB::table('countries')->insert(['code' => 430 , 'name' => 'Libéria' , 'iso' => 'LBR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 434)->first())
			DB::table('countries')->insert(['code' => 434 , 'name' => 'Líbia' , 'iso' => 'LBY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 438)->first())
			DB::table('countries')->insert(['code' => 438 , 'name' => 'Liechtenstein' , 'iso' => 'LIE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 440)->first())
			DB::table('countries')->insert(['code' => 440 , 'name' => 'Lituânia' , 'iso' => 'LTU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 442)->first())
			DB::table('countries')->insert(['code' => 442 , 'name' => 'Luxemburgo' , 'iso' => 'LUX ', 'active' => false]);

		if(!DB::table('countries')->where('code', 807)->first())
			DB::table('countries')->insert(['code' => 807 , 'name' => 'Macedônia' , 'iso' => 'MKD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 450)->first())
			DB::table('countries')->insert(['code' => 450 , 'name' => 'Madagáscar' , 'iso' => 'MDG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 458)->first())
			DB::table('countries')->insert(['code' => 458 , 'name' => 'Malásia' , 'iso' => 'MYS ', 'active' => false]);

		if(!DB::table('countries')->where('code', 454)->first())
			DB::table('countries')->insert(['code' => 454 , 'name' => 'Malauí' , 'iso' => 'MWI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 462)->first())
			DB::table('countries')->insert(['code' => 462 , 'name' => 'Maldivas' , 'iso' => 'MDV ', 'active' => false]);

		if(!DB::table('countries')->where('code', 466)->first())
			DB::table('countries')->insert(['code' => 466 , 'name' => 'Mali' , 'iso' => 'MLI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 470)->first())
			DB::table('countries')->insert(['code' => 470 , 'name' => 'Malta' , 'iso' => 'MLT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 504)->first())
			DB::table('countries')->insert(['code' => 504 , 'name' => 'Marrocos' , 'iso' => 'MAR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 474)->first())
			DB::table('countries')->insert(['code' => 474 , 'name' => 'Martinica' , 'iso' => 'MTQ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 480)->first())
			DB::table('countries')->insert(['code' => 480 , 'name' => 'Maurício' , 'iso' => 'MUS ', 'active' => false]);

		if(!DB::table('countries')->where('code', 478)->first())
			DB::table('countries')->insert(['code' => 478 , 'name' => 'Mauritânia' , 'iso' => 'MRT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 175)->first())
			DB::table('countries')->insert(['code' => 175 , 'name' => 'Mayotte' , 'iso' => 'MYT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 484)->first())
			DB::table('countries')->insert(['code' => 484 , 'name' => 'México' , 'iso' => 'MEX ', 'active' => false]);

		if(!DB::table('countries')->where('code', 104)->first())
			DB::table('countries')->insert(['code' => 104 , 'name' => 'Mianma' , 'iso' => 'MMR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 583)->first())
			DB::table('countries')->insert(['code' => 583 , 'name' => 'Micronésia' , 'iso' => 'FSM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 508)->first())
			DB::table('countries')->insert(['code' => 508 , 'name' => 'Moçambique' , 'iso' => 'MOZ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 498)->first())
			DB::table('countries')->insert(['code' => 498 , 'name' => 'Moldávia' , 'iso' => 'MDA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 492)->first())
			DB::table('countries')->insert(['code' => 492 , 'name' => 'Mônaco' , 'iso' => 'MCO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 496)->first())
			DB::table('countries')->insert(['code' => 496 , 'name' => 'Mongólia' , 'iso' => 'MNG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 499)->first())
			DB::table('countries')->insert(['code' => 499 , 'name' => 'Montenegro' , 'iso' => 'MNE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 500)->first())
			DB::table('countries')->insert(['code' => 500 , 'name' => 'Montserrat' , 'iso' => 'MSR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 516)->first())
			DB::table('countries')->insert(['code' => 516 , 'name' => 'Namíbia' , 'iso' => 'NAM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 520)->first())
			DB::table('countries')->insert(['code' => 520 , 'name' => 'Nauru' , 'iso' => 'NRU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 524)->first())
			DB::table('countries')->insert(['code' => 524 , 'name' => 'Nepal' , 'iso' => 'NPL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 558)->first())
			DB::table('countries')->insert(['code' => 558 , 'name' => 'Nicarágua' , 'iso' => 'NIC ', 'active' => false]);

		if(!DB::table('countries')->where('code', 562)->first())
			DB::table('countries')->insert(['code' => 562 , 'name' => 'Níger' , 'iso' => 'NER ', 'active' => false]);

		if(!DB::table('countries')->where('code', 566)->first())
			DB::table('countries')->insert(['code' => 566 , 'name' => 'Nigéria' , 'iso' => 'NGA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 570)->first())
			DB::table('countries')->insert(['code' => 570 , 'name' => 'Niue' , 'iso' => 'NIU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 578)->first())
			DB::table('countries')->insert(['code' => 578 , 'name' => 'Noruega' , 'iso' => 'NOR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 540)->first())
			DB::table('countries')->insert(['code' => 540 , 'name' => 'Nova Caledônia' , 'iso' => 'NCL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 554)->first())
			DB::table('countries')->insert(['code' => 554 , 'name' => 'Nova Zelândia' , 'iso' => 'NZL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 512)->first())
			DB::table('countries')->insert(['code' => 512 , 'name' => 'Omã' , 'iso' => 'OMN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 585)->first())
			DB::table('countries')->insert(['code' => 585 , 'name' => 'Palau' , 'iso' => 'PLW ', 'active' => false]);

		if(!DB::table('countries')->where('code', 275)->first())
			DB::table('countries')->insert(['code' => 275 , 'name' => 'Palestina' , 'iso' => 'PSE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 591)->first())
			DB::table('countries')->insert(['code' => 591 , 'name' => 'Panamá' , 'iso' => 'PAN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 598)->first())
			DB::table('countries')->insert(['code' => 598 , 'name' => 'Papua Nova Guiné' , 'iso' => 'PNG ', 'active' => false]);

		if(!DB::table('countries')->where('code', 586)->first())
			DB::table('countries')->insert(['code' => 586 , 'name' => 'Paquistão' , 'iso' => 'PAK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 600)->first())
			DB::table('countries')->insert(['code' => 600 , 'name' => 'Paraguai' , 'iso' => 'PRY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 604)->first())
			DB::table('countries')->insert(['code' => 604 , 'name' => 'Peru' , 'iso' => 'PER ', 'active' => false]);

		if(!DB::table('countries')->where('code', 612)->first())
			DB::table('countries')->insert(['code' => 612 , 'name' => 'Pitcairn' , 'iso' => 'PCN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 258)->first())
			DB::table('countries')->insert(['code' => 258 , 'name' => 'Polinésia Francesa' , 'iso' => 'PYF ', 'active' => false]);

		if(!DB::table('countries')->where('code', 616)->first())
			DB::table('countries')->insert(['code' => 616 , 'name' => 'Polônia' , 'iso' => 'POL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 630)->first())
			DB::table('countries')->insert(['code' => 630 , 'name' => 'Porto Rico' , 'iso' => 'PRI ', 'active' => false]);

		if(!DB::table('countries')->where('code', 620)->first())
			DB::table('countries')->insert(['code' => 620 , 'name' => 'Portugal' , 'iso' => 'PRT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 404)->first())
			DB::table('countries')->insert(['code' => 404 , 'name' => 'Quênia' , 'iso' => 'KEN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 417)->first())
			DB::table('countries')->insert(['code' => 417 , 'name' => 'Quirguistão' , 'iso' => 'KGZ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 826)->first())
			DB::table('countries')->insert(['code' => 826 , 'name' => 'Reino Unido' , 'iso' => 'GBR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 140)->first())
			DB::table('countries')->insert(['code' => 140 , 'name' => 'República Centro Africana' , 'iso' => 'CAF ', 'active' => false]);

		if(!DB::table('countries')->where('code', 180)->first())
			DB::table('countries')->insert(['code' => 180 , 'name' => 'República Democrática do Congo' , 'iso' => 'COD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 214)->first())
			DB::table('countries')->insert(['code' => 214 , 'name' => 'República Dominicana' , 'iso' => 'DOM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 203)->first())
			DB::table('countries')->insert(['code' => 203 , 'name' => 'República Tcheca' , 'iso' => 'CZE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 642)->first())
			DB::table('countries')->insert(['code' => 642 , 'name' => 'Romênia' , 'iso' => 'ROU ', 'active' => false]);

		if(!DB::table('countries')->where('code', 646)->first())
			DB::table('countries')->insert(['code' => 646 , 'name' => 'Ruanda' , 'iso' => 'RWA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 643)->first())
			DB::table('countries')->insert(['code' => 643 , 'name' => 'Rússia (Federação Russa)' , 'iso' => 'RUS ', 'active' => false]);

		if(!DB::table('countries')->where('code', 732)->first())
			DB::table('countries')->insert(['code' => 732 , 'name' => 'Saara Ocidental' , 'iso' => 'ESH ', 'active' => false]);

		if(!DB::table('countries')->where('code', 663)->first())
			DB::table('countries')->insert(['code' => 663 , 'name' => 'Saint Martin (parte francesa)' , 'iso' => 'MAF ', 'active' => false]);

		if(!DB::table('countries')->where('code', 534)->first())
			DB::table('countries')->insert(['code' => 534 , 'name' => 'Saint Martin (parte holandesa)' , 'iso' => 'SXM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 666)->first())
			DB::table('countries')->insert(['code' => 666 , 'name' => 'Saint Pierre e Miquelon' , 'iso' => 'SPM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 882)->first())
			DB::table('countries')->insert(['code' => 882 , 'name' => 'Samoa' , 'iso' => 'WSM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 16 )->first())
			DB::table('countries')->insert(['code' => 16 , 'name' => 'Samoa Americana' , 'iso' => 'ASM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 674)->first())
			DB::table('countries')->insert(['code' => 674 , 'name' => 'San Marino' , 'iso' => 'SMR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 654)->first())
			DB::table('countries')->insert(['code' => 654 , 'name' => 'Santa Helena' , 'iso' => 'SHN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 662)->first())
			DB::table('countries')->insert(['code' => 662 , 'name' => 'Santa Lúcia' , 'iso' => 'LCA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 652)->first())
			DB::table('countries')->insert(['code' => 652 , 'name' => 'São Bartolomeu' , 'iso' => 'BLM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 659)->first())
			DB::table('countries')->insert(['code' => 659 , 'name' => 'São Cristóvão e Nevis' , 'iso' => 'KNA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 678)->first())
			DB::table('countries')->insert(['code' => 678 , 'name' => 'São Tome e Príncipe' , 'iso' => 'STP ', 'active' => false]);

		if(!DB::table('countries')->where('code', 670)->first())
			DB::table('countries')->insert(['code' => 670 , 'name' => 'São Vicente e Granadinas' , 'iso' => 'VCT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 680)->first())
			DB::table('countries')->insert(['code' => 680 , 'name' => 'Sark' , 'iso' => ' ', 'active' => false]);

		if(!DB::table('countries')->where('code', 690)->first())
			DB::table('countries')->insert(['code' => 690 , 'name' => 'Seichelles' , 'iso' => 'SYC ', 'active' => false]);

		if(!DB::table('countries')->where('code', 686)->first())
			DB::table('countries')->insert(['code' => 686 , 'name' => 'Senegal' , 'iso' => 'SEN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 694)->first())
			DB::table('countries')->insert(['code' => 694 , 'name' => 'Serra Leoa' , 'iso' => 'SLE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 688)->first())
			DB::table('countries')->insert(['code' => 688 , 'name' => 'Sérvia' , 'iso' => 'SRB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 760)->first())
			DB::table('countries')->insert(['code' => 760 , 'name' => 'Síria' , 'iso' => 'SYR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 706)->first())
			DB::table('countries')->insert(['code' => 706 , 'name' => 'Somália' , 'iso' => 'SOM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 144)->first())
			DB::table('countries')->insert(['code' => 144 , 'name' => 'Sri Lanka' , 'iso' => 'LKA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 748)->first())
			DB::table('countries')->insert(['code' => 748 , 'name' => 'Suazilândia' , 'iso' => 'SWZ ', 'active' => false]);

		if(!DB::table('countries')->where('code', 728)->first())
			DB::table('countries')->insert(['code' => 728 , 'name' => 'Sudão do Sul' , 'iso' => 'SSD ', 'active' => false]);

		if(!DB::table('countries')->where('code', 729)->first())
			DB::table('countries')->insert(['code' => 729 , 'name' => 'Sudão' , 'iso' => 'SDN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 752)->first())
			DB::table('countries')->insert(['code' => 752 , 'name' => 'Suécia' , 'iso' => 'SWE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 756)->first())
			DB::table('countries')->insert(['code' => 756 , 'name' => 'Suíça' , 'iso' => 'CHE ', 'active' => false]);

		if(!DB::table('countries')->where('code', 740)->first())
			DB::table('countries')->insert(['code' => 740 , 'name' => 'Suriname' , 'iso' => 'SUR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 744)->first())
			DB::table('countries')->insert(['code' => 744 , 'name' => 'Svalbard e Jan Mayen Islands' , 'iso' => 'SJM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 762)->first())
			DB::table('countries')->insert(['code' => 762 , 'name' => 'Tadjiquistão' , 'iso' => 'TJK ', 'active' => false]);

		if(!DB::table('countries')->where('code', 764)->first())
			DB::table('countries')->insert(['code' => 764 , 'name' => 'Tailândia' , 'iso' => 'THA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 834)->first())
			DB::table('countries')->insert(['code' => 834 , 'name' => 'Tanzânia' , 'iso' => 'TZA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 626)->first())
			DB::table('countries')->insert(['code' => 626 , 'name' => 'Timor Leste' , 'iso' => 'TLS ', 'active' => false]);

		if(!DB::table('countries')->where('code', 768)->first())
			DB::table('countries')->insert(['code' => 768 , 'name' => 'Togo' , 'iso' => 'TGO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 772)->first())
			DB::table('countries')->insert(['code' => 772 , 'name' => 'Tokelau' , 'iso' => 'TKL ', 'active' => false]);

		if(!DB::table('countries')->where('code', 776)->first())
			DB::table('countries')->insert(['code' => 776 , 'name' => 'Tonga' , 'iso' => 'TON ', 'active' => false]);

		if(!DB::table('countries')->where('code', 780)->first())
			DB::table('countries')->insert(['code' => 780 , 'name' => 'Trinidad e Tobago' , 'iso' => 'TTO ', 'active' => false]);

		if(!DB::table('countries')->where('code', 788)->first())
			DB::table('countries')->insert(['code' => 788 , 'name' => 'Tunísia' , 'iso' => 'TUN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 795)->first())
			DB::table('countries')->insert(['code' => 795 , 'name' => 'Turcomenistão' , 'iso' => 'TKM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 792)->first())
			DB::table('countries')->insert(['code' => 792 , 'name' => 'Turquia' , 'iso' => 'TUR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 798)->first())
			DB::table('countries')->insert(['code' => 798 , 'name' => 'Tuvalu' , 'iso' => 'TUV ', 'active' => false]);

		if(!DB::table('countries')->where('code', 804)->first())
			DB::table('countries')->insert(['code' => 804 , 'name' => 'Ucrânia' , 'iso' => 'UKR ', 'active' => false]);

		if(!DB::table('countries')->where('code', 800)->first())
			DB::table('countries')->insert(['code' => 800 , 'name' => 'Uganda' , 'iso' => 'UGA ', 'active' => false]);

		if(!DB::table('countries')->where('code', 858)->first())
			DB::table('countries')->insert(['code' => 858 , 'name' => 'Uruguai' , 'iso' => 'URY ', 'active' => false]);

		if(!DB::table('countries')->where('code', 860)->first())
			DB::table('countries')->insert(['code' => 860 , 'name' => 'Uzbequistão' , 'iso' => 'UZB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 548)->first())
			DB::table('countries')->insert(['code' => 548 , 'name' => 'Vanuatu' , 'iso' => 'VUT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 336)->first())
			DB::table('countries')->insert(['code' => 336 , 'name' => 'Vaticano' , 'iso' => 'VAT ', 'active' => false]);

		if(!DB::table('countries')->where('code', 862)->first())
			DB::table('countries')->insert(['code' => 862 , 'name' => 'Venezuela' , 'iso' => 'VEN ', 'active' => false]);

		if(!DB::table('countries')->where('code', 704)->first())
			DB::table('countries')->insert(['code' => 704 , 'name' => 'Vietnã' , 'iso' => 'VNM ', 'active' => false]);

		if(!DB::table('countries')->where('code', 894)->first())
			DB::table('countries')->insert(['code' => 894 , 'name' => 'Zâmbia' , 'iso' => 'ZMB ', 'active' => false]);

		if(!DB::table('countries')->where('code', 716)->first())
			DB::table('countries')->insert(['code' => 716 , 'name' => 'Zimbábue' , 'iso' => 'ZWE ', 'active' => false]);

    }
}
