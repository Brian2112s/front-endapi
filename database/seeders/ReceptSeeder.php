<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceptSeeder extends Seeder
{
    public function run(): void
    {
        $categories = DB::table('categories')->pluck('id', 'category_name');

DB::table('recipes')->insert([
    [
        'recipe_name' => 'Gevuld broodje ei',
        'category_id' => $categories['Ontbijt'],
        'ingredients' => 'Eieren, broodje, kaas, tomaat, peper, zout',
        'nutritional_values' => '300 kcal, 15g eiwit, 20g koolhydraten, 15g vet',
        'difficulty' => 'easy',
        'preparation_time' => 15,   
        'image' => 'images/ei.webp',
        'instructions' => '1. Kook de eieren hard. 2. Snijd het broodje open en hol het iets uit. 3. Prak de eieren met kaas, tomaat, peper en zout. 4. Vul het broodje met dit mengsel en verwarm 5 minuten in de oven.'
    ],
    [
        'recipe_name' => 'Ei muffins',
        'category_id' => $categories['Ontbijt'],
        'ingredients' => 'Eieren, paprika, ui, spinazie, kaas',
        'nutritional_values' => '250 kcal, 12g eiwit, 10g koolhydraten, 18g vet',
        'difficulty' => 'easy',
        'preparation_time' => 20,
        'image' => 'images/ei_muffins.webp',
        'instructions' => '1. Verwarm de oven voor op 180Â°C. Klop de eieren los met zout en peper. 2. Snijd de groenten fijn en meng met de eieren en kaas. 3. Giet in muffinvormpjes en bak 15 minuten.'
    ],
    [
        'recipe_name' => 'Havermout met Banaan',
        'category_id' => $categories['Ontbijt'],
        'ingredients' => 'Havermout, melk, banaan, honing',
        'nutritional_values' => '350 kcal, 10g eiwit, 40g koolhydraten, 10g vet',
        'difficulty' => 'easy',
        'preparation_time' => 10,
        'image' => 'images/havermout.jpg',
        'instructions' => '1. Verwarm de melk in een pan. 2. Voeg havermout toe en laat 5 minuten koken. 3. Snijd de banaan in plakjes. 4. Giet de pap in een kom, voeg banaan en honing toe en serveer warm.'
    ],
    [
        'recipe_name' => 'Krokante spelttoast',
        'category_id' => $categories['Ontbijt'],
        'ingredients' => 'Speltbrood, avocado, cherrytomaat, citroen',
        'nutritional_values' => '280 kcal, 6g eiwit, 22g koolhydraten, 16g vet',
        'difficulty' => 'easy',
        'preparation_time' => 10,
        'image' => 'images/krokante_spelttoast.jpeg',
        'instructions' => '1. Rooster het speltbrood krokant. 2. Prak de avocado met citroensap, peper en zout. 2. Besmeer de toast met avocado en garneer met gehalveerde cherrytomaatjes.'
    ],
    [
        'recipe_name' => 'Italiaanse Gordita',
        'category_id' => $categories['Ontbijt'],
        'ingredients' => 'Tortilla, mozzarella, pesto, tomaat, basilicum',
        'nutritional_values' => '320 kcal, 12g eiwit, 30g koolhydraten, 18g vet',
        'difficulty' => 'medium',
        'preparation_time' => 15,
        'image' => 'images/italiaanse_gordita.png',
        'instructions' => '1. Verwarm de tortilla kort in een pan. 2. Besmeer met pesto. 3. Voeg plakjes mozzarella en tomaat toe. 4. Vouw de tortilla dubbel en bak tot de kaas smelt. 5. Garneer met verse basilicum.'
    ],
    [
        'recipe_name' => 'Ontbijt wrap met gerookte zalm',
        'category_id' => $categories['Ontbijt'],
        'ingredients' => 'Wrap, gerookte zalm, roomkaas, spinazie',
        'nutritional_values' => '400 kcal, 20g eiwit, 25g koolhydraten, 22g vet',
        'difficulty' => 'medium',
        'preparation_time' => 10,
        'image' => 'images/Ontbwijtwrapmetgerooktezalm.png',
        'instructions' => '1. Besmeer de wrap met roomkaas. 2. Beleg met spinazie en plakjes gerookte zalm. 3. Rol strak op en snijd eventueel in stukken. 4. Serveer koud als frisse ontbijtoptie.'
    ],






[
    'recipe_name' => 'Loaded Fries met Pulled Chicken',
    'category_id' => $categories['Hoofdgerechten'],
    'ingredients' => 'Friet, pulled chicken, kaas, jalapeños, BBQ-saus, lente-ui',
    'nutritional_values' => '750 kcal, 35g eiwit, 60g koolhydraten, 40g vet',
    'difficulty' => 'medium',
    'preparation_time' => 35,
    'instructions' => "1. Bak de friet goudbruin in de oven of frituur.\n2. Verwarm de pulled chicken in een pan met een beetje BBQ-saus.\n3. Leg de friet op een schaal, verdeel de pulled chicken erover.\n4. Strooi geraspte kaas erover en gratineer 5 min in oven.\n5. Garneer met jalapeños, lente-ui en extra saus.",
    'image' => 'images/Loaded_Fries_met_Pulled_Chicken.webp',
],
[
    'recipe_name' => 'Ossenhaas met rode wijnsaus',
    'category_id' => $categories['Hoofdgerechten'],
    'ingredients' => 'Ossenhaas, rode wijn, sjalotten, roomboter, peper, zout',
    'nutritional_values' => '600 kcal, 45g eiwit, 10g koolhydraten, 40g vet',
    'difficulty' => 'hard',
    'preparation_time' => 40,
    'instructions' => "1. Kruid de ossenhaas met peper en zout.\n2. Bak het vlees rondom bruin in boter.\n3. Haal uit de pan en laat rusten.\n4. Fruit sjalotten in dezelfde pan.\n5. Blus af met rode wijn en laat inkoken.\n6. Voeg boter toe voor binding en serveer over vlees.",
    'image' => 'images/ossenhaas.webp',
],
[
    'recipe_name' => 'Knoflookbrood',
    'category_id' => $categories['Hoofdgerechten'],
    'ingredients' => 'Stokbrood, knoflook, boter, peterselie, zout',
    'nutritional_values' => '300 kcal, 5g eiwit, 30g koolhydraten, 18g vet',
    'difficulty' => 'easy',
    'preparation_time' => 15,
    'instructions' => "1. Meng zachte boter met geperste knoflook en peterselie.\n2. Snijd het stokbrood in.\n3. Besmeer de inkepingen met het botermengsel.\n4. Verwarm 10 min in oven op 180°C.\n5. Serveer warm als bijgerecht of snack.",
    'image' => 'images/knoflookbrood.jpg',
],
[
    'recipe_name' => 'Pizza Margherita',
    'category_id' => $categories['Hoofdgerechten'],
    'ingredients' => 'Pizzadeeg, tomatensaus, mozzarella, basilicum, olijfolie',
    'nutritional_values' => '500 kcal, 20g eiwit, 55g koolhydraten, 20g vet',
    'difficulty' => 'medium',
    'preparation_time' => 25,
    'instructions' => "1. Rol het deeg uit tot gewenste dikte.\n2. Besmeer met tomatensaus.\n3. Verdeel mozzarella en wat olijfolie.\n4. Bak 12-15 min in oven op 220°C.\n5. Garneer met verse basilicum.",
    'image' => 'images/pizza-Margherita.jpg',
],
[
    'recipe_name' => 'Hollandse pan',
    'category_id' => $categories['Hoofdgerechten'],
    'ingredients' => 'Aardappelen, boerenkool, rookworst, mosterd, boter',
    'nutritional_values' => '650 kcal, 25g eiwit, 50g koolhydraten, 35g vet',
    'difficulty' => 'easy',
    'preparation_time' => 30,
    'instructions' => "1. Schil en kook aardappelen met boerenkool in 1 pan.\n2. Voeg zout toe en kook 20 minuten.\n3. Verwarm de rookworst apart.\n4. Stamp aardappelen en kool met boter en mosterd.\n5. Serveer met gesneden rookworst bovenop.",
    'image' => 'images/hollandse-pan.jpg',
],
[
    'recipe_name' => 'Lasagne',
    'category_id' => $categories['Hoofdgerechten'],
    'ingredients' => 'Lasagnebladen, gehakt, tomatensaus, bechamelsaus, kaas',
    'nutritional_values' => '700 kcal, 30g eiwit, 50g koolhydraten, 35g vet',
    'difficulty' => 'medium',
    'preparation_time' => 45,
    'instructions' => "1. Bak gehakt rul met ui en knoflook.\n2. Voeg tomatensaus toe en laat sudderen.\n3. Begin met laag saus, dan lasagnebladen, dan bechamel.\n4. Herhaal en eindig met kaas.\n5. Bak 30 min in oven op 200°C.",
    'image' => 'images/lasagne.jpg',
],




[
                'recipe_name' => 'Kippensoep',
                'category_id' =>  $categories['Soepen'],
                'ingredients' => 'Kipfilet, prei, wortel, selderij, vermicelli, bouillonblokjes, water, peper, zout',
                'nutritional_values' => '200 kcal per portie',
                'difficulty' => 'easy',
                'preparation_time' => 45,
                'image' => 'kippensoep.jpg',
                'instructions' => "1. Breng water aan de kook met bouillonblokjes. 2. Voeg kipfilet toe en kook 20 minuten. 3. Haal de kip eruit en trek in stukjes. 4. Snijd groenten en voeg toe. 5. Laat 15 minuten koken. 6. Voeg vermicelli en kip toe. 7. Kook nog 5 minuten. 8. Breng op smaak met peper en zout."
            ],
            [
                'recipe_name' => 'Tomatensoep',
                'category_id' =>  $categories['Soepen'],
                'ingredients' => 'Tomaten, ui, knoflook, bouillon, basilicum, peper, zout, olijfolie',
                'nutritional_values' => '150 kcal per portie',
                'difficulty' => 'easy',
                'preparation_time' => 40,
                'image' => 'tomatensoep.jpg',
                'instructions' => "1. Snijd tomaten, ui en knoflook. 2. Fruit ui en knoflook in olie. 3. Voeg tomaten toe en bak kort. 4. Giet bouillon erbij en laat 20 min koken. 5. Pureer de soep. 6. Breng op smaak met peper, zout en basilicum."
            ],
            [
                'recipe_name' => 'Groentesoep',
                'category_id' =>  $categories['Soepen'],
                'ingredients' => 'Prei, wortel, selderij, sperziebonen, bloemkool, bouillon, peper, zout, vermicelli',
                'nutritional_values' => '180 kcal per portie',
                'difficulty' => 'easy',
                'preparation_time' => 40,
                'image' => 'groentesoep.jpg',
                'instructions' => "1. Breng bouillon aan de kook. 2. Snijd alle groenten in stukjes. 3. Voeg groenten toe aan de bouillon. 4. Laat 20 minuten koken. 5. Voeg vermicelli toe. 6. Kook nog 5 minuten. 7. Breng op smaak met peper en zout."
            ],
            [
                'recipe_name' => 'Broccolisoep',
                'category_id' =>  $categories['Soepen'],
                'ingredients' => 'Broccoli, ui, knoflook, bouillon, room, peper, zout',
                'nutritional_values' => '160 kcal per portie',
                'difficulty' => 'medium',
                'preparation_time' => 35,
                'image' => 'broccolisoep.jpg',
                'instructions' => "1. Snijd broccoli, ui en knoflook. 2. Fruit ui en knoflook. 3. Voeg broccoli toe en bak kort. 4. Voeg bouillon toe en kook 15 minuten. 5. Pureer de soep. 6. Voeg room toe en roer goed. 7. Breng op smaak."
            ],
            [
                'recipe_name' => 'Pompoensoep',
                'category_id' =>  $categories['Soepen'],
                'ingredients' => 'Pompoen, ui, knoflook, bouillon, kokosmelk, kerriepoeder, peper, zout',
                'nutritional_values' => '190 kcal per portie',
                'difficulty' => 'medium',
                'preparation_time' => 40,
                'image' => 'pompoensoep.jpg',
                'instructions' => "1. Schil en snijd de pompoen. 2. Fruit ui en knoflook. 3. Voeg pompoen toe en bak 5 min. 4. Voeg bouillon en kerrie toe. 5. Kook 20 min. 6. Pureer de soep. 7. Voeg kokosmelk toe en roer goed. 8. Breng op smaak."
            ],
            [
                'recipe_name' => 'Erwtensoep',
                'category_id' =>  $categories['Soepen'],
                'ingredients' => 'Spliterwten, prei, selderij, rookworst, aardappel, bouillon, laurierblad, peper, zout',
                'nutritional_values' => '250 kcal per portie',
                'difficulty' => 'hard',
                'preparation_time' => 90,
                'image' => 'erwtensoep.jpg',
                'instructions' => "1. Spoel erwten en kook met bouillon en laurierblad 45 min. 2. Voeg gesneden groenten en aardappel toe. 3. Laat 30 min koken. 4. Voeg rookworst toe en verwarm 10 min. 5. Verwijder laurier. 6. Breng op smaak met peper en zout."
            ],
        





]);
    }
}
