<?php

use App\SurveyStat;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SurveyStat::create([
            'id' => 1,
            'title' => 'Seguridad, Calidad, Costo, Entrega, Motivación, Medio ambiente.'
        ]);

        SurveyStat::create([
            'id' => 2,
            'title' => 'Damaway, wise, 12 básicos.'
        ]);

        SurveyStat::create([
            'id' => 3,
            'title' => 'Seguridad y salud, Calidad y superioridad, medio ambiente, diversidad e inclusión.'
        ]);

        SurveyStat::create([
            'id' => 4,
            'title' => 'Comedor, Vigilancia, Sala code.'
        ]);

        SurveyStat::create([
            'id' => 5,
            'title' => 'Pantalla comunicación, Credencial, Sala Visión.'
        ]);

        SurveyStat::create([
            'id' => 6,
            'title' => 'Pasillo principal, Sala wise.'
        ]);

        SurveyStat::create([
            'id' => 7,
            'title' => 'Generación de cazaincidentes, acuerdos positivos, Casoles.'
        ]);

        SurveyStat::create([
            'id' => 8,
            'title' => 'Llevar una hidratación más saludable al mayor número de mexicanos.'
        ]);

        SurveyStat::create([
            'id' => 9,
            'title' => 'Garantizar un lugar de trabajo seguro y saludable.'
        ]);

        SurveyStat::create([
            'id' => 10,
            'title' => 'Satisfacción total de nuestros consumidores y clientes de manera sostenible.'
        ]);

        SurveyStat::create([
            'id' => 11,
            'title' => 'Registro de ABC, cero PNC.'
        ]);

        SurveyStat::create([
            'id' => 12,
            'title' => 'Menor a cuatro quejas al año.'
        ]);

        SurveyStat::create([
            'id' => 13,
            'title' => 'KPI de energía eléctrica 38 KW y agua 1.8'
        ]);

        SurveyStat::create([
            'id' => 14,
            'title' => 'Separación de residuos en nuestras áreas de trabajo'
        ]);

        SurveyStat::create([
            'id' => 15,
            'title' => 'Generar un impacto ambiental positivo y contribuir a la preservación del ambiente'
        ]);

        SurveyStat::create([
            'id' => 16,
            'title' => 'Garantizar que todos y todas puedan acceder a mismas oportunidades de desarrollo'
        ]);

        SurveyStat::create([
            'id' => 17,
            'title' => 'Garantizar un trabajo lugar de trabajo seguro y saludable'
        ]);

        SurveyStat::create([
            'id' => 18,
            'title' => 'Si'
        ]);

        SurveyStat::create([
            'id' => 19,
            'title' => 'No'
        ]);

        SurveyStat::create([
            'id' => 20,
            'title' => 'Generar un impacto ambiental positivo y contribuir a la preservación del ambiente'
        ]);
    }
}
