<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $fumetti = [
        [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
            "artists" => [
                "José Luis García-López",
                "Clay Mann",
                "Rafael Albuquerque",
                "Patrick Gleason",
                "Dan Jurgens",
                "Joe Shuster",
                "Neal Adams",
                "Curt Swan",
                "John Cassaday",
                "Olivier Coipel",
                "Jim Lee"
            ],
            "writers" => [
                "Brad Meltzer",
                "Tom King",
                "Scott Snyder",
                "Geoff Johns",
                "Brian Michael Bendis",
                "Paul Dini",
                "Louise Simonson",
                "Richard Donner",
                "Marv Wolfman",
                "Peter J. Tomasi",
                "Dan Jurgens",
                "Jerry Siegel",
                "Paul Levitz"
            ],
        ],
        [
            "title" => "American Vampire 1976 #1",
            "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
            "thumb" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5GAtpDL5Xh88ucNNJx-bDEZrSpLnPCassMQ&usqp=CAU",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "sale_date" => "2020-10-06",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Scott Snyder"
            ],
        ],
        [
            "title" => "Aquaman Vol. 4: Underworld",
            "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
            "thumb" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5GAtpDL5Xh88ucNNJx-bDEZrSpLnPCassMQ&usqp=CAU",
            "price" => "$16.99",
            "series" => "Aquaman",
            "sale_date" => "2018-01-24",
            "type" => "graphic novel",
            "artists" => [
                "Stjepan Sejic"
            ],
            "writers" => [
                "Dan Abnett"
            ],
        ],
        [
            "title" => "Batgirl #1",
            "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.",
            "thumb" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5GAtpDL5Xh88ucNNJx-bDEZrSpLnPCassMQ&usqp=CAU",
            "price" => "$2.99",
            "series" => "Batgirl",
            "sale_date" => "2016-07-27",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Hope Larson"
            ],
        ],
        [
            "title" => "Batman #56",
            "description" => "The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast, whose rampage across Gotham City takes a toll on Nightwing when he’s injured in the fray. Blaming himself for his ward’s fate, Batman gets grimmer than usual—and vows to take the Russian assassin down like the Berlin Wall. Is even Gotham City ready for that much violence? The streets will run red like borscht if the Dark Knight gets his way against this Soviet scourge.",
            "thumb" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5GAtpDL5Xh88ucNNJx-bDEZrSpLnPCassMQ&usqp=CAU",
            "price" => "$3.99",
            "series" => "Batman",
            "sale_date" => "2018-10-03",
            "type" => "comic book",
            "artists" => [
                "Tony S. Daniel"
            ],
            "writers" => [
                "Tom King"
            ],
        ],
        [
            "title" => "Batman Beyond #1",
            "description" => "“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends. But is the original Joker really back as well? Inspired by the possible return of their role model, the Jokerz have taken over an entire section of Gotham City and are determined to wreak havoc in the still-rebuilding city. While Batman battles chaos on the streets, his friend Dana is at the mercy of the new leader of the now-unified gang.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "sale_date" => "2016-10-26",
            "type" => "comic book",
            "artists" => [
                "Bernard Chang"
            ],
            "writers" => [
                "Dan Jurgens"
            ],
        ],
        [
            "title" => "Batman/Superman #1",
            "description" => "Up in the sky, in the dark of the night, trust no one - for the infected walk among us. Spinning out of the devastating events of THE BATMAN WHO LAUGHS, Superman and Batman are together once more in an all-new monthly series - and they're facing a terrifying new threat that could strike from anywhere. The Dark Knight and the Man of Steel must journey into the depths of Gotham City to learn which of their fellow heroes has been transformed into the horrifying horseman of their most dangerous and deranged foe ever. Our heroes will need to fight to survive, but an even more dangerous question lurkes in the shadows: Can Superman and Batman even trust each other?",
            "thumb" => "https://static.dc.com/2023-01/riddler%403x.png?w=1173",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "sale_date" => "2019-08-28",
            "type" => "comic book",
            "artists" => [
                "David Marquez"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "Batman/Superman Annual #1",
            "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman, who would win? The combatants? Mr. Mxyzptlk and Bat-Mite. And in this battle for the ages, you will find out if a fifth-dimensional imp can bleed. It’s all in this, the ultimate slugfest between the Dark Knight and the Man of Steel-plus a whole lot of magic!",
            "thumb" => "data:image/jpeg;base64,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",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Clayton Henry",
                "Gleb Melnikov",
                "Dale Eaglesham"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "Batman: The Joker War Zone #1",
            "description" => "Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight and his allies! Enter the “war zone” with short stories featuring characters like Cassandra Cain, Stephanie Brown, and Luke Fox and see how they’re fighting back in a city under siege! Also, the brutal full debut of the mysterious new anti-hero known as Clownhunter!",
            "thumb" => "https://ilfattoalimentare.it/wp-content/uploads/2021/03/popeye-compie-91-anni-storia-braccio-ferro-v5-46965.jpg",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Guillem March",
                "Ashley A. Woods",
                "Olivier Coipel",
                "James Stokoe",
                "Darko Lafuente"
            ],
            "writers" => [
                "Sam Johns",
                "Joshua Williamson",
                "John Ridley"
            ],
        ],
        [
            "title" => "Batman: Three Jokers #1",
            "description" => "Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!",
            "thumb" => "https://images2-wpc.corriereobjects.it/uCHtWq3ixtl7NvsWBKCwGA2HNB0=/fit-in/1000x750/style.corriere.it/assets/uploads/2022/12/20xi4.jpg",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "sale_date" => "2020-08-25",
            "type" => "comic book",
            "artists" => [
                "Jason Fabok"
            ],
            "writers" => [
                "Geoff Johns"
            ],
        ],
        [
            "title" => "Batman: White Knight Presents: Harley Quinn #1",
            "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "sale_date" => "2020-10-20",
            "type" => "comic book",
            "artists" => [
                "Matteo Scalera"
            ],
            "writers" => [
                "Katana Collins"
            ],
        ],
        [
            "title" => "Catwoman Vol. 1: Copycats",
            "description" => "Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
            "price" => "$16.99",
            "series" => "Catwoman",
            "sale_date" => "2019-04-10",
            "type" => "graphic novel",
            "artists" => [
                "Fernando Blanco",
                "Joëlle Jones"
            ],
            "writers" => [
                "Joëlle Jones"
            ],
        ],
    ];

    return view('main-layout', compact('fumetti'));
});
