<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Slide;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Section home
        Content::create([
            'section_id' => '1',
            'title' => '<span class="up">Hola!</span>',
            'sub_title' => '<span class="down">Soy Jorge Usuga</span>',
            'body' => '<p class="header-subtitle">DESARROLLADOR FULL-STACK</p>',
            // 'button' => '<button class="btn btn-primary">Visit My Works</button>',
            'button' => '',
        ]);

        // Section home
        Content::create([
            'section_id' => '2',
            'title' => '<p class="section-subtitle">¿Quién soy?</p>',
            'sub_title' => '<h2 class="section-title mb-3">Sobre mí</h2>',
            'body' => '<p>
                            Soy un apasionado Técnico en Programación de Software con 4 años de experiencia, especializado en Desarrollo 
                            FullStack con enfoque en Backend. Tengo amplio dominio en tecnologías como Laravel, Symfony, Java, PHP, MySQL,
                            Mongo DB, PostgreSQL, Microsoft SQL Server, SQLite, JavaScript, Node.js y Express.js. Destaco por mi habilidad 
                            para resolver problemas y tomar decisiones eficientes, así como por mis habilidades comunicativas y capacidad 
                            para trabajar en equipo. Estoy comprometido con el aprendizaje continuo y en busca de nuevas oportunidades 
                            para crecer y contribuir al campo de la informática y el desarrollo de software.
                        </p>',
            'button' => '<a target="_blank" href="download" class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</a>',
        ]);

        // Section Portfolio
        Content::create([
            'section_id' => '3',
            'title' => '<p class="section-subtitle">¿Qué he hecho?</p>',
            'sub_title' => '<h6 class="section-title mb-6">Portafolio</h6>',
            'body' => '',
            'button' => '<a target="_blank" href="download" class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</a>',

        ]);

        // Create slides

        Slide::create([
            'content_id' => '3',
            'slide' => '1',
            'slide_url' => 'projects/finanzas.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>Finanzas Personales</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Esté proyecto logro satisfacer la necesidad de tener un sistema de gastos personales, fue desarrollado con las tecnologías LARAVEL, MYSQL, JS, AJAX.
                </p>',
        ]);

        Slide::create([
            'content_id' => '3',
            'slide' => '1',
            'slide_url' => 'projects/servipublicos.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>Servipublicos</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Desarrollamos una página web en WordPress para mostrar evidencias de trabajos en el municipio de Ceylán, cumpliendo así con las expectativas del cliente de manera efectiva.
                </p>',
        ]);

        Slide::create([
            'content_id' => '3',
            'slide' => '0',
            'slide_url' => 'projects/ego.png',
            'slide_class' => 'portfolio-card-img',
            'slide_title' => '<h4>Servi Repuesto EGO</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Esté proyecto logro satisfacer las necesidades principales del cliente para optimizar su negocio y finanzas, además de lograr una optima organización del inventario, fue desarrollado con las tecnologías JAVA y MYSQL.
                </p>',
        ]);

        Slide::create([
            'content_id' => '3',
            'slide' => '1',
            'slide_url' => 'projects/store.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>Sistema POS</h4>',
            'slide_description' => '<p class="font-weight-normal">
            Esté proyecto logro satisfacer las necesidades principales del cliente para optimizar su negocio y finanzas, además de lograr una optima organización de las finanzas e inventario, fue desarrollado con las tecnologías PHP, MYSQL, JS, AJAX.
            </p>',
        ]);

        Slide::create([
            'content_id' => '3',
            'slide' => '1',
            'slide_url' => 'projects/xgron.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>PWA XGRON</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Una PWA desarrollada en Laravel y MySQL para el manejo eficiente de operaciones internas. Facilita la generación y almacenamiento de informes, optimizando la gestión de información de manera eficaz y segura.
                </p>',
        ]);

        Slide::create([
            'content_id' => '3',
            'slide' => '0',
            'slide_url' => 'projects/health.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>Sistema quiz</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Esté proyecto es una plataforma de cuestionarios y recursos, relacionado al área de la salud, logro satisfacer las necesidades principales del cliente para optimizar sus conocimientos en el área de salud, fue desarrollado con las tecnologías PHP, MYSQL, JS, LARAVEL.
                </p>',
        ]); 

        Slide::create([
            'content_id' => '3',
            'slide' => '0',
            'slide_url' => 'projects/agente_a.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>Agente-A</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Con tecnología JSP y IoT este proyecto fue implementado con el fin de reducir la mortalidad de aves en los galpones desarrrollado en JAVA, el uso de MYSQL mejoro contabilidad de éste.
                </p>',
        ]);

        Slide::create([
            'content_id' => '3',
            'slide' => '1',
            'slide_url' => 'projects/rifas.png',
            'slide_class' => 'img-responsive rounded',
            'slide_title' => '<h4>Sistema Rifas</h4>',
            'slide_description' => '<p class="font-weight-normal">
                Esté proyecto logro satisfacer las necesidades principales del cliente para optimizar su negocio y generar ingresos, además de lograr una optima organización de las finanzas, fue desarrollado con las tecnologías PHP, MYSQL, WORDPRESS, AJAX, WOOCOMMERCE.
                </p>',
        ]);

        // Section Contact Me
        Content::create([
            'section_id' => '6',
            'title' => '<p class="section-subtitle">¿Cómo puedes comunicarte?</p>',
            'sub_title' => '<h6 class="section-title mb-5">Contacte conmigo</h6>',
            'body' => '
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Tú nombre" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Ingresa tu correo" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control"
                            placeholder="Escribe algo"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Enviar mensaje" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form>',
            'button' => '<a target="_blank" href="download" class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</a>',
        ]);
    }
}
