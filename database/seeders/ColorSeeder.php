<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = new Color();
        $color->name = 'cerulean';
        $color->year = 2000;
        $color->color = '#98B2D1';
        $color->pantone_value = '15-4020';
        $color->save();

        $color = new Color();
        $color->name = 'fuchsia rose';
        $color->year = 2001;
        $color->color = '#C74375';
        $color->pantone_value = '17-2031';
        $color->save();

        $color = new Color();
        $color->name = 'true red';
        $color->year = 2002;
        $color->color = '#BF1932';
        $color->pantone_value = '19-1664';
        $color->save();

        $color = new Color();
        $color->name = 'aqua sky';
        $color->year = 2003;
        $color->color = '#7BC4C4';
        $color->pantone_value = '14-4811';
        $color->save();

        $color = new Color();
        $color->name = 'tigerlily';
        $color->year = 2004;
        $color->color = '#E2583E';
        $color->pantone_value = '17-1456';
        $color->save();

        $color = new Color();
        $color->name = 'blue turquoise';
        $color->year = 2005;
        $color->color = '#53B0AE';
        $color->pantone_value = '15-5217';
        $color->save();

        $color = new Color();
        $color->name = 'sand dollar';
        $color->year = 2006;
        $color->color = '#DECDBE';
        $color->pantone_value = '13-1106';
        $color->save();

        $color = new Color();
        $color->name = 'chili pepper';
        $color->year = 2007;
        $color->color = '#9B1B30';
        $color->pantone_value = '19-1557';
        $color->save();

        $color = new Color();
        $color->name = 'blue iris';
        $color->year = 2008;
        $color->color = '#5A5B9F';
        $color->pantone_value = '18-3943';
        $color->save();

        $color = new Color();
        $color->name = 'mimosa';
        $color->year = 2009;
        $color->color = '#F0C05A';
        $color->pantone_value = '14-0848';
        $color->save();

        $color = new Color();
        $color->name = 'turquoise';
        $color->year = 2010;
        $color->color = '#45B5AA';
        $color->pantone_value = '15-5519';
        $color->save();

        $color = new Color();
        $color->name = 'honeysuckle';
        $color->year = 2011;
        $color->color = '#D94F70';
        $color->pantone_value = '18-2120';
        $color->save();
    }
}
