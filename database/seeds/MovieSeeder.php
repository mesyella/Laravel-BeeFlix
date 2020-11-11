<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $data = [];

        $data[0] = [
            'genre_id' => '1',
            'title' => 'Locke & Key' ,
            'photo' => 'img/locke.jpg',
            'description' => "Following their father's murder, three siblings move into a house filled with reality-bending keys; from the comics by Joe Hill and Gabriel Rodriguez.",
            'rating'=> 3,
        ];
        $data[1] = [
            'genre_id' => '1',
            'title' => 'Anne with an E',
            'photo' => 'img/anne.jpg',
            'description' => 'This reimagining of the classic book and film is a coming-of-age story about a young orphan who is seeking love, acceptance and her place in the world. Amybeth McNulty stars as Anne, a 13-year-old who has endured an abusive childhood in orphanages and the homes of strangers.' ,
            'rating'=> 4,
        ];
        $data[2] = [
            'genre_id' => '1',
            'title' => 'Guardian (Goblin)' ,
            'photo' => 'img/goblin.jpg',
            'description' => 'Guardian: The Lonely and Great God is a South Korean television series starring Gong Yoo in the title role with Kim Go-eun, Lee Dong-wook, Yoo In-na, and Yook Sung-jae. It was shown on the cable network tvN from December 2, 2016 to January 21, 2017. It was written by popular drama writer Kim Eun-sook.',
            'rating'=> 4,
        ];
        $data[3] = [
            'genre_id' => '1',
            'title' => 'Start-Up',
            'photo' => 'img/startup.jpg',
            'description' => "Seo Dal Mi has dreams of becoming Korea's own Steve Jobs, and with her genius first love, an investor, and a business insider by her side, her dream may be closer than she thinks",
            'rating'=> 5,
        ];
        $data[4] = [
            'genre_id' => '2',
            'title' => 'Robocar Poli',
            'photo' => 'img/poli.jpg',
            'description' => "It's never a dull day in Broomstown with the Robocar Poli Rescue Team protecting the beautiful town's vehicles and citizens from all sorts of dangers." ,
            'rating'=> 3,
        ];
        $data[5] = [
            'genre_id' => '2',
            'title' => 'Adventure Time' ,
            'photo' =>'img/adventure.jpg',
            'description' => "Twelve- year-old Finn battles evil in the Land of Ooo. Assisted by his magical dog, Jake, Finn roams the Land of Ooo righting wrongs and battling evil. Usually that evil comes in the form of the Ice King, who is in search of a wife. He's decided he should wed Princess Bubblegum, though she doesn't want to marry him. ",
            'rating'=>4,
        ];
        $data[6] = [
            'genre_id' => '2',
            'title' => 'We Bare Bears',
            'photo' => 'img/wbb.jpg',
            'description' => "Three brother bears awkwardly attempt to find their place in civilized society, whether they're looking for food, trying to make human friends, or scheming to become famous on the internet. Grizzly, Panda and Ice Bear stack atop one another when they leave their cave and explore the hipster environs of the San Francisco Bay Area, and it's clear the siblings have a lot to learn about a technologically driven world. By their side on many adventures are best friend Chloe (the only human character in the cast), fame-obsessed panda Nom Nom, and Charlie, aka Bigfoot.",
            'rating'=> 4,
        ];
        $data[7] = [
            'genre_id' => '2',
            'title' => 'PAW Patrol',
            'photo' => 'img/paw.jpg',
            'description' => "Six brave puppies, captained by a tech-savvy ten-year-old boy, Ryder, work together to accomplish high-stakes rescue missions to safeguard the residents of the Adventure Bay community.",
            'rating'=> 3,
        ];
        $data[8] = [
            'genre_id' => '3',
            'title' => 'Black Mirror',
            'photo' => 'img/blackmirror.jpg',
            'description' => "In an abstrusely dystopian future, several individuals grapple with the manipulative effects of cutting edge technology in their personal lives and behaviours.",
            'rating'=> 5,
        ];
        $data[9] = [
            'genre_id' => '3',
            'title' => '13 Reasons Why',
            'photo' => 'img/reasons.jpg',
            'description' =>"Newcomer Katherine Langford plays the role of Hannah, a young woman who takes her own life. Two weeks after her tragic death, a classmate named Clay finds a mysterious box on his porch. Inside the box are recordings made by Hannah -- on whom Clay had a crush -- in which she explains the 13 reasons why she chose to commit suicide.",
            'rating'=> 3,
        ];
        $data[10] = [
            'genre_id' => '3',
            'title' =>'How I Met Your Mother',
            'photo' => 'img/mother.jpg',
            'description' =>"Ted Mosby, an architect, recounts to his children the events that led him to meet their mother. His journey is made more eventful by the presence of his friends Lily, Marshall, Robin and Barney.",
            'rating'=> 4,
        ];
        $data[11] = [
            'genre_id' => '3',
            'title' => 'Sherlock',
            'photo' => 'img/sherlock.jpg',
            'description' => "Dr Watson, a former army doctor, finds himself sharing a flat with Sherlock Holmes, an eccentric individual with a knack for solving crimes. Together, they take on the most unusual cases.",
            'rating'=> 5,
        ];
        DB::table('movies')->insert($data);
    }
}
