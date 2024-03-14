<?php

namespace Database\Seeders;

use App\Models\Content;
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
            'title' => '<span class="up">HI!</span>',
            'sub_title' => '<span class="down">I am John Doe</span>',
            'body' => '<p class="header-subtitle">FRONTEND WEB DESIGNER</p>',
            'button' => '<button class="btn btn-primary">Visit My Works</button>',
            'slide' => '0',
            'slide_url' => null,
            'slide_title' => null,
            'slide_description' => null,
        ]);

        // Section home
        Content::create([
            'section_id' => '2',
            'title' => '<p class="section-subtitle">Who Am I ?</p>',
            'sub_title' => '<h2 class="section-title mb-3">About Me</h2>',
            'body' => '<p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aliquid ad provident aut
                            fuga animi soluta quae eos non cupiditate voluptates dolorem, doloremque quos dicta quibusdam
                            impedit iure nemo a iste
                            <br>culpa! Quasi quibusdam hic recusandae delectus velit officiis explicabo voluptatibus! Nemo
                            esse similique, voluptates labore distinctio, placeat explicabo facilis molestias, blanditiis
                            culpa iusto voluptatem ratione eligendi a, quia temporibus velit vero ipsa sint ex voluptatum
                            expedita aliquid! Debitis, nam!
                        </p>',
            'button' => '<a target="_blank" href="download" class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</a>',
            'slide' => '0',
            'slide_url' => null,
            'slide_title' => null,
            'slide_description' => null,
        ]);

        // Section Portfolio
        Content::create([
            'section_id' => '3',
            'title' => '<p class="section-subtitle">What I Did ?</p>',
            'sub_title' => '<h6 class="section-title mb-6">Portfolio</h6>',
            'body' => '<p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aliquid ad provident aut
                            fuga animi soluta quae eos non cupiditate voluptates dolorem, doloremque quos dicta quibusdam
                            impedit iure nemo a iste
                            <br>culpa! Quasi quibusdam hic recusandae delectus velit officiis explicabo voluptatibus! Nemo
                            esse similique, voluptates labore distinctio, placeat explicabo facilis molestias, blanditiis
                            culpa iusto voluptatem ratione eligendi a, quia temporibus velit vero ipsa sint ex voluptatum
                            expedita aliquid! Debitis, nam!
                        </p>',
            'button' => '<a target="_blank" href="download" class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</a>',
            'slide' => '1',
            'slide_url' => null,
            'slide_title' => null,
            'slide_description' => null,
        ]);

        // Section Contact Me
        Content::create([
            'section_id' => '6',
            'title' => '<p class="section-subtitle">How can you communicate?</p>',
            'sub_title' => '<h6 class="section-title mb-5">Contact Me</h6>',
            'body' => '
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email" requried>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control"
                            placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form>',
            'button' => '<a target="_blank" href="download" class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</a>',
            'slide' => '0',
            'slide_url' => null,
            'slide_title' => null,
            'slide_description' => null,
        ]);
    }
}
