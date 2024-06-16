<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Introducción a la Pesca con Mosca',
                'description' => 'Aprende los conceptos básicos de la pesca con mosca, desde el equipo necesario hasta las técnicas de lanzamiento.',
                'idcategory' => 1,
                'image' => 'images/course/intro_pesca_mosca.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Pesca de Altura: Marlines y Atunes',
                'description' => 'Descubre cómo pescar los majestuosos marlines y los poderosos atunes en alta mar.',
                'idcategory' => 2,
                'image' => 'images/course/pesca_altura_marlines_atunes.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Técnicas Avanzadas de Pesca en Ríos',
                'description' => 'Domina técnicas como el mending y la pesca con ninfas ponderadas para capturar peces en ríos de aguas rápidas.',
                'idcategory' => 3,
                'image' => 'images/course/tecnicas_avanzadas_rios.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Pesca de Lucio: El Depredador de los Lagos',
                'description' => 'Aprende a capturar el esquivo lucio, uno de los depredadores más desafiantes de los lagos y embalses.',
                'idcategory' => 3,
                'image' => 'images/course/pesca_lucio.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Pesca en Hielo: Secretos del Hielo',
                'description' => 'Sumérgete en el mundo de la pesca en hielo y aprende a atrapar peces bajo capas de hielo con técnicas especializadas.',
                'idcategory' => 4,
                'image' => 'images/course/pesca_hielo.jpg',
            ],
            [
                'id' => 6,
                'name' => 'Montaje de Moscas: Arte y Técnica',
                'description' => 'Aprende a atar tus propias moscas de pesca, desde imitaciones realistas hasta patrones creativos.',
                'idcategory' => 5,
                'image' => 'images/course/montaje_moscas.jpg',
            ],
            [
                'id' => 7,
                'name' => 'Pesca a Spinning: Dominando el Arte',
                'description' => 'Domina la técnica de pesca a spinning y aprende a utilizar señuelos artificiales para atraer a los peces depredadores.',
                'idcategory' => 6,
                'image' => 'images/course/pesca_spinning.jpg',
            ],
            [
                'id' => 8,
                'name' => 'Seguridad en la Pesca Deportiva',
                'description' => 'Aprende sobre la seguridad en la pesca deportiva, desde la navegación segura hasta la protección contra los elementos.',
                'idcategory' => 7,
                'image' => 'images/course/seguridad_pesca.jpg',
            ],
            [
                'id' => 9,
                'name' => 'Principios de la Pesca con Señuelos',
                'description' => 'Descubre los principios fundamentales de la pesca con señuelos y cómo aplicarlos en diferentes entornos acuáticos.',
                'idcategory' => 6,
                'image' => 'images/course/pesca_senuelos.jpg',
            ],
            [
                'id' => 10,
                'name' => 'Pesca en Kayak: Aventura en Aguas Tranquilas',
                'description' => 'Explora la pesca en kayak y descubre cómo atrapar peces mientras navegas en aguas tranquilas y ríos sinuosos.',
                'idcategory' => 3,
                'image' => 'images/course/pesca_kayak.jpg',
            ],
            [
                'id' => 11,
                'name' => 'Entrenamiento Físico para Pescadores',
                'description' => 'Aprende ejercicios y técnicas de entrenamiento específicos para mejorar tu rendimiento y resistencia en la pesca deportiva.',
                'idcategory' => 8,
                'image' => 'images/course/entrenamiento_fisico_pesca.jpg',
            ], 
            [
                'id' => 12,                
                'name' => 'Nudos de Pesca: Técnicas Esenciales',
                'description' => 'Domina una variedad de nudos de pesca, desde los básicos hasta los más avanzados, para asegurar tus aparejos con seguridad.',
                'idcategory' => 5,
                'image' => 'images/course/nudos_pesca.jpg',
            ],
            [
                'id' => 13,
                'name' => 'Pesca de Truchas: Secretos del Arroyo',
                'description' => 'Descubre los secretos de la pesca de truchas en arroyos y riachuelos, incluyendo técnicas de presentación y selección de moscas.',
                'idcategory' => 3,
                'image' => 'images/course/pesca_truchas_arroyo.jpg',
            ],
            [
                'id' => 14,
                'name' => 'Pesca en Aguas Salobres: Mundo Intermedio',
                'description' => 'Explora las aguas salobres y aprende a pescar especies únicas que habitan en la interfaz entre el agua dulce y el agua salada.',
                'idcategory' => 2,
                'image' => 'images/course/pesca_aguas_salobres.jpg',
            ],
            [
                'id' => 15,
                'name' => 'Pesca desde Embarcación: Estrategias Marítimas',
                'description' => 'Aprende las mejores estrategias y técnicas para pescar desde embarcaciones, incluyendo la navegación y la localización de puntos de pesca.',
                'idcategory' => 2,
                'image' => 'images/course/pesca_embarcacion.jpg',
            ],
            [
                'id' => 16,
                'name' => 'Pesca de Carpas: Captura el Gigante Dorado',
                'description' => 'Descubre cómo atrapar las esquivas carpas, desde la elección del cebo hasta la configuración del equipo.',
                'idcategory' => 3,
                'image' => 'images/course/pesca_carpas.jpg',
            ],
            [
                'id' => 17,
                'name' => 'Pesca en la Costa: Tesoros del Litoral',
                'description' => 'Explora la pesca en la costa y aprende a pescar una variedad de especies costeras, desde peces de roca hasta surfcasting.',
                'idcategory' => 2,
                'image' => 'images/course/pesca_costa.jpg',
            ],
            [
                'id' => 18,
                'name' => 'Pesca en el Río Amazonas: Tesoros de la Selva',
                'description' => 'Embárcate en una aventura de pesca en el legendario río Amazonas y descubre las especies únicas que lo habitan.',
                'idcategory' => 9,
                'image' => 'images/course/pesca_rio_amazonas.jpg',
            ],
            [
                'id' => 19,
                'name' => 'Pesca de Pez Vela: Enfrenta al Velero del Mar',
                'description' => 'Aprende a pescar el poderoso pez vela, conocido por su velocidad y agilidad en aguas abiertas.',
                'idcategory' => 2,
                'image' => 'images/course/pesca_pez_vela.jpg',
            ],
            [
                'id' => 20,
                'name' => 'Pesca en los Fiordos: Aventura en los Glaciares',
                'description' => 'Explora los impresionantes fiordos y glaciares mientras pescas en aguas frías y cristalinas.',
                'idcategory' => 9,
                'image' => 'images/course/pesca_fiordos.jpg',
            ],
        ];

        $course = $this->faker->randomElement($courses);

        return [
            'id' => $course['id'],
            'name' => $course['name'],
            'description' => $course['description'],
            'idcategory' => $course['idcategory'],
            'image' => $course['image'],
        ];
    }
}
