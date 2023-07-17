<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\Banner;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'name' => 'Carlos',
             'email' => 'desenvolvimento@adapti.info',
         ]);

         About::factory()->create([
             'number' => '27997669663',
             'email' => 'desenvolvimento@adapti.info',
             'image' => null,
             'description' => 'Adapti nasceu pela necessidade dos alunos dos cursos de Ciência e Engenharia da computação aplicarem os conhecimentos adquiridos no curso em prática, e se desenvolverem pessoalmente e profissionalmente. Então, a Adapti foi fundada em 2012, e nesse período já ajudamos diversos empresários e até prefeitura de nossa cidade a otimizar e melhorar seus processos por meio de soluções digitais.',
         ]);

         Banner::factory()->create([
            'title' => 'Nós desenvolvemos o seu sucesso!',
            'description' => 'Ajudamos você a alcançar seus objetivos, com soluções personalizadas e inovadoras.',
            'button_text' => 'Agende uma reunião',
            'message' => 'Olá, gostaria de agendar uma reunião.',
         ]);

         Service::factory()->create([
             'name' => 'Web Sites',
             'description' => 'Voltado para quem deseja ter presença digital e alavancar as suas vendas, consolidando a identidade visual, gerando reconhecimento a marca e melhorando o envolvimento com o público.',
             'message_text' => 'Olá, gostaria de saber mais sobre o desenvolvimento de sites.',
         ]);

        Service::factory()->create([
            'name' => 'Sistemas Web',
            'description' => 'Consiste na criação de uma solução online personalizada para automatizar os processos da sua empresa, possibilitando o aumento de produtividade e economia de tempo e dinheiro.',
            'message_text' => 'Olá, gostaria de saber mais sobre o desenvolvimento de sistemas.',
        ]);
    }
}
