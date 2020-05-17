<?php
use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //protected $fillable=['ci_p', 'primer_nom', 'seg_nom', 'paterno', 'materno'];
        /*
        Persona::insert([
            'ci_p'=>'1111',
            'primer_nom'=>'mauricio',
            'seg_nom'=>'andres',
            'paterno'=>'laurel',
            'materno'=>'corrales',
        ]);
        */
/*
        Persona::insert([
            'ci_p'=>'2222',
            'primer_nom'=>'ana',
            'seg_nom'=>'resp',
            'paterno'=>'dell',
            'materno'=>'qweqw',
        ]);
        */

       factory(Persona::class,10)->create([]);

    }
}
