<?php

use Illuminate\Database\Seeder;
use App\Games;
use App\User;

class DatabaseSeeder extends Seeder
{
    
private $arrayJuegos = array(
			array(
				'name' => 'Kingdom Hearts III Non-Deluxe',
				'price' => '69.99', 
				'category' => 'RPG', 
				'image' => 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/cover_290x414/public/media/image/2018/11/kh3-cover.jpg?itok=kxir_mUY', 
				'video' => 'https://youtu.be/a-fmsw5m0Ag', 
				'description' => 'El juego cuenta la tercera aventura de Sora quien va acompañado de sus amigos Donald y Goofy a través de mundos basados en películas clásicas de Disney combatiendo a los Sincorazón e Incorpóreos. Además, un mundo basado en Toy Story fue mostrado en acción, marcando así el debut de las películas de Pixar en la franquicia.', 
				'launch' => '2019-01-25',
				'creator' => 'Tetsuya Nomura',
				'editor' => 'Square Enix',
				'key' => 'E3NE-23DJ-DKR1'
			),
			array(
				'name' => 'Dishonored',
				'price' => '9.99', 
				'category' => 'Aventura', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/205100/header.jpg?t=1541465639', 
				'video' => 'https://youtu.be/KFBuIqXlj5E', 
				'description' => 'l juego tiene lugar en la ciudad industrial de Dunwall, una urbe que se encuentra azotada por una plaga letal, y sigue la historia de Corvo Attano, el legendario guardaespaldas de la emperatriz. Corvo es acusado injustamente de asesinarla, y luego de escapar a su ejecución se ve obligado a convertirse en un asesino para vengarse de los que conspiraron contra él.', 
				'launch' => '2012-9-11',
				'creator' => 'Arkane Studios',
				'editor' => 'Bethesda Softworks',
				'key' => 'JDD2-87SJ-01JS'
			),
			array(
				'name' => 'The Elder Scrolls V: Skyrim',
				'price' => '24.99', 
				'category' => 'RPG', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/489830/header.jpg?t=1533676854', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256672927/movie480.webm?t=1476991615', 
				'description' => 'La historia de Skyrim se centra en los esfuerzos del personaje, dovahkiin(sangre de dragon), para derrotar a Alduin, un dragón/dovah que, según la profecía, destruirá el mundo. La trama está fechada doscientos años después de los sucesos de Oblivion y tiene lugar en la provincia ficticia de Skyrim', 
				'launch' => '2019-10-10',
				'creator' => ' Bethesda Game Studios',
				'editor' => ' Bethesda Softworks',
				'key' => 'LSM4-D3D2-VB3N'
			),
			array(
				'name' => 'JUMP FORCE',
				'price' => '69.99', 
				'category' => 'Lucha', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/816020/header.jpg?t=1549929438', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256735104/movie480.webm?t=1542668734', 
				'description' => 'Los héroes más famosos del manga llegan a un nuevo campo de batalla: nuestro mundo. La Jump Force se une para enfrentarse a la amenaza más peligrosa y proteger el destino de toda la humanidad.

Crea tu propio avatar y lucha en el original modo Historia junto a los increíbles héroes de DRAGON BALL Z, ONE PIECE, NARUTO, BLEACH, HUNTER X HUNTER, YU-GI-OH!, YU YU HAKUSHO, SAINT SEIYA y muchos más.

O entra en la sala online para desafiar a otros jugadores y descubrir multitud de modos y actividades. ', 
				'launch' => '2019-02-15',
				'creator' => 'Spike Chunsoft',
				'editor' => 'Bandai Namco Entertainment',
				'key' => 'JORDI-PALET-IPV6'
			),
			array(
				'name' => 'BioShock Remastered',
				'price' => '19.99', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/409710/header.jpg?t=1531779427', 
				'video' => 'https://youtu.be/QtwY33n5WIo', 
				'description' => 'BioShock es un shooter único, repleto de armas y tácticas nunca vistas. Tendrás a tu disposición un variado arsenal, desde simples revólveres hasta lanzagranadas o lanzadores químicos, pero también tendrás que modificar tu ADN para crear un arma todavía más mortífera: tú.', 
				'launch' => '2016-10-16',
				'creator' => '2K Boston',
				'editor' => '2K',
				'key' => 'ASDF-GHJK-1234'
			),
			array(
				'name' => 'Warhammer 40,000: Mechanicus',
				'price' => '22.49', 
				'category' => 'Estrategia', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/673880/header.jpg?t=1549988374', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256736033/movie480.webm?t=1542626197', 
				'description' => 'Ponte al mando de las tropas humanas más tecnológicamente avanzadas del Imperum: el Adeptus Mechanicus. En la piel del Magos Dominus Faustinius, liderarás la expedición al nuevo planeta Silva Tenebris, que ha sido recientemente descubierto. Gestiona recursos, descubre tecnologías olvidadas, personaliza tu equipo y gestiona todos los movimientos de tus Tech-Priests.

Toda decisión que tomes afectará al desarrollo de las misiones y, en última instancia, decidirá el destino de las tropas que tienes bajo tus órdenes para superar más de 50 misiones diseñadas artesanalmente. Será importante que selecciones el camino correcto, ya que el Imperium depende de ello.', 
				'launch' => '2018-11-15',
				'creator' => 'Bulwark Studios',
				'editor' => 'Kasedo Games',
				'key' => 'LKJH-1345-GCSG'
			),
			array(
				'name' => 'Moonlighter',
				'price' => '19.99', 
				'category' => 'Aventura', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/606150/header.jpg?t=1549525488', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256700008/movie480.webm?t=1509636534', 
				'description' => '
Hace mucho, durante una excavación arqueológica se descubrió un conjunto de portales. La gente no tardó en darse cuenta de que esos pasadizos ancestrales conectaban con distintas dimensiones y reinos en los que los valientes e intrépidos aventureros podían encontrar majestuosos tesoros. Cerca del lugar de la excavación se fundó una pequeña aldea de comerciantes llamada Rynoka en la que los aventureros podían descansar y vender sus preciadas mercancías.
Moonlighter es un juego de acción RPG con elementos rogue-lite. Descubre la rutina diaria de Will, un comerciante aventurero que sueña con convertirse en un héroe.', 
				'launch' => '2018-05-29',
				'creator' => 'Digital Sun',
				'editor' => '11 bits Studios',
				'key' => 'QWVR-541-4123'
			),
			array(
				'name' => 'GOD EATER 3',
				'price' => '49.99', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/899440/header.jpg?t=1549639273', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256739724/movie480.webm?t=1547830864', 
				'description' => '
¡Ha llegado lo último en la aclamada saga de juegos de God Eater!
• ¡Lucha con estilo con armas celestiales totalmente nuevas!
¡Amplía tu armamento de combate a corta distancia con el arma celestial a dos manos ""filo mordedor"" y el hacha a dos manos ""luna pesada"", o lucha desde lejos con la nueva arma celestial ""pistola de rayos""!
• ¡Nuevas habilidades en batallas apasionantes!
¡Los ataques finta, terrestres y aéreos evolucionan en poderosas técnicas con artes de Ira! ¡Además, el nuevo ataque de carrera en picado te da gran libertad de movimiento para cazar aragamis!
• Nuevas y terroríficas amenazas: ¡aragamis de ceniza y ataques devoradores!
¡Aragamis de ceniza: peligrosos nuevos enemigos que pueden utilizar ataques devoradores y el modo Ira para aumentar su fuerza considerablemente! ¡No puedes subestimar a estos enemigos, y vas a necesitar llevar tus armas y tu estilo de juego al siguiente nivel! ', 
				'launch' => '2019-02-08',
				'creator' => 'BANDAI NAMCO Studios Inc.',
				'editor' => 'BANDAI NAMCO Entertainment',
				'key' => '1234-4321-SGSE'
			),
			array(
				'name' => 'CS:GO Prime Status Upgrade',
				'price' => '13.24', 
				'category' => 'FPS', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/subs/54029/header_586x192.jpg?t=1544227353', 
				'video' => 'https://www.youtube.com/watch?v=zWXVsMAcOSs', 
				'description' => 'Disfruta del juego de acción en línea n° 1 en el mundo. Sumérgete en el fragor de la guerra antiterrorista más realista con este archiconocido juego por equipos. Alíate con compañeros para superar misiones estratégicas, asalta bases enemigas, rescata rehenes, y recuerda que tu personaje contribuye al éxito del equipo y viceversa. ', 
				'launch' => '2012-08-21',
				'creator' => 'Valve, Hidden Path Entertainment',
				'editor' => 'Valve',
				'key' => 'ASDF-JJTB-3G5J'
			),
			
			array(
				'name' => 'The Witcher 3: Wild Hunt',
				'price' => '44.95', 
				'category' => 'Accion', 
				'image' => 'https://steamcdn-a.akamaihd.net/steam/apps/292030/header.jpg?t=1547822937', 
				'video' => 'https://steamcdn-a.akamaihd.net/steam/apps/256658589/movie480.webm?t=1528288687', 
				'description' => 'Es un juego de perspectiva en tercera persona, el jugador controla al protagonista Geralt de Rivia, un cazador de monstruos conocido como Lobo Blanco, es un brujo, el cual emprende un largo viaje a través de Los reinos del norte. En el juego, el jugador lucha contra el peligroso mundo mediante magia y espadas, mientras interactúa con los NPC y completa tanto misiones secundarias como la misión principal de la historia.', 
				'launch' => '2019-10-10',
				'creator' => 'CD PROJEKT RED',
				'editor' => ' CD PROJEKT RED',
				'key' => 'HDFS-PING-JAVA'	
			)
	);
private $arraySocios = array(
			array(
				'name' => 'gato',
				'subname' => 'gato', 
				'email' => 'gato@gmail.com', 
				'password' => 'gato',
				'address' => 'C/San gato 3', 
				'admin' => false, 
				'user' => 'gato'
				
			),
			array(
				'name' => 'Jose',
				'subname' => 'Herrera', 
				'email' => 'jose@gmail.com', 
				'password' => 'admin',
				'address' => 'C/San Carlos 2', 
				'admin' => true, 
				'user' => 'admin'
				
			)
	);

private $arrayAdmin = array(
			array(
				'name' => 'gato',
				'subname' => 'gato', 
				'email' => 'gato@gmail.com', 
				'password' => 'gato',
				'address' => 'C/San gato 3', 
				'user' => 'gato'
				
			),
			array(
				'name' => 'Jose',
				'subname' => 'Herrera', 
				'email' => 'jose@gmail.com', 
				'password' => 'admin',
				'address' => 'C/San Carlos 2', 
				'user' => 'admin'
				
			)
	);

    public function run()
    {
		self::seedCatalog();
		self::seedUsers();

    }
    private function seedCatalog() {
    	DB::table('games')->delete();
    	foreach ($this->arrayJuegos as $juegos) {
    		$p = new Games;
    		$p->name = $juegos['name']; 
    		$p->price = $juegos['price']; 
    		$p->category = $juegos['category']; 
    		$p->image = $juegos['image']; 
    		$p->video = $juegos['video']; 
    		$p->description = $juegos['description'];
    		$p->launch = $juegos['launch']; 
    		$p->creator = $juegos['creator']; 
    		$p->editor = $juegos['editor'];  
    		$p->key = $juegos['key']; 
    		$p->save();

    	}

    }
    private function seedUsers() {
    	DB::table('users')->delete();
    	foreach ($this->arraySocios as $users) {
    		$p = new user;
    		$p->name = $users['name']; 
    		$p->subname = $users['subname']; 
    		$p->email = $users['email']; 
    		$p->address = $users['address']; 
    		$p->admin = $users['admin']; 
    		$p->user = $users['user']; 
    		$p->password = bcrypt($users['password']); 
    		$p->save();

    	}

    }
}
