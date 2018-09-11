<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $languages = [
            'en' => 'English',
            'fr' => 'French',
            'bg' => 'Bulgarian',
            'mt' => 'Maltese',
            'hr' => 'Croatian',
            'de' => 'German',
            'pl' => 'Polish',
            'cs' => 'Czech',
            'el' => 'Greek',
            'pt' => 'Portuguese',
            'da' => 'Danish',
            'hu' => 'Hungarian',
            'ro' => 'Romanian',
            'nl' => 'Dutch',
            'ga' => 'Irish',
            'sk' => 'Slovak',
            'it' => 'Italian',
            'sl' => 'Slovenian',
            'et' => 'Estonian',
            'lv' => 'Latvian',
            'es' => 'Spanish',
            'fi' => 'Finnish',
            'lt' => 'Lithuanian',
            'sv' => 'Swedish'
        ];


        foreach ($languages as $key => $value) {
            create('App\Language', ['iso' => $key, 'name' => $value]);
        }


    }
}
