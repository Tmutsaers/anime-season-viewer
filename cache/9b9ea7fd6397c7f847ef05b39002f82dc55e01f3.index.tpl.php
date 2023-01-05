<?php
/* Smarty version 3.1.47, created on 2023-01-05 14:20:03
  from '/shared/httpd/test-project/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b6dc937dd905_58735555',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '335798ae1c474b0a6f2c0667b11f8a350ad56969' => 
    array (
      0 => '/shared/httpd/test-project/templates/index.tpl',
      1 => 1672926697,
      2 => 'file',
    ),
    '46ac61f2d0b8816658442e1c04e481699980e3af' => 
    array (
      0 => '/shared/httpd/test-project/templates/tpl/seasonpicker.tpl',
      1 => 1672928181,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_63b6dc937dd905_58735555 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <div class="wrap main-container">
    
                        <div class="seasonpicker_container">
    <div class="seasonpicker_title">
        <h2> Pick a year and season </h2>
    </div>
    <div class="seasonpicker__inner">
        
        <iframe name="hiddenFrame" class="hide"></iframe>

        <form class="seasonpicker__inner-form" action="/index.php?action=submit" method="post">
            <label for="yearInput">Year</label>
            <input type="text" id="yearInput" name="year"><br><br>
            <label for="seasonInput">Season</label>
            <input type="text" id="seasonInput" name="season"><br><br>
            <input type="submit" value="Submit">
        </form>

        <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
    </div>
</div>
    <div class="animes_container">
        <div class="animes__inner-title">
            <h1 class="animes-general-title">Animes airing this season.</h1>
        </div>
        <div class="animes_inner">
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/4/75509.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11111/Another"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Another</h2>
                            </div>

                            <div class="anime__inner-description">
                                In class 3-3 of Yomiyama North Junior High, transfer student Kouichi Sakakibara makes his return after taking a sick leave for the first month of school. Among his new classmates, he is inexplicably drawn toward Mei Misaki—a reserved girl with an eyepatch whom he met in the hospital during his absence. But none of his classmates acknowledge her existence; they warn him not to acquaint himself with things that do not exist. Against their words of caution, Kouichi befriends Mei—soon learning of the sinister truth behind his friends' apprehension.

The ominous rumors revolve around a former student of the class 3-3. However, no one will share the full details of the grim event with Kouichi. Engrossed in the curse that plagues his class, Kouichi sets out to discover its connection to his new friend. As a series of tragedies arise around them, it is now up to Kouichi, Mei, and their classmates to unravel the eerie mystery—but doing so will come at a hefty price.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/1951/114976.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11235/Amagami_SS__Plus"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Amagami SS+ plus</h2>
                            </div>

                            <div class="anime__inner-description">
                                In the aftermath of Amagami SS, high school student Junichi Tachibana continues his relationships with the girls at his school. Amagami SS+ Plus offers a glimpse into what happened after the resolution of each girl's individual story. 

New events begin to take place between each of the girls and Junichi. Tsukasa Ayatsuji, the class representative, runs for student council president; Rihoko Sakurai, who has taken over the Tea Club with Junichi, still wants to confess her feelings to him; Ai Nanasaki questions the future of her relationship with Junichi when he leaves for college; Kaoru Tanamachi wonders if her relationship with Junichi will ever go any further; Sae Nakata and Junichi deal with classmates who still can't believe that someone so cute is his girlfriend; and Haruka Morishima wants to take their relationship to the next level and get married.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/11/35455.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/12021/Poyopoyo_Kansatsu_Nikki"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Poyopoyo</h2>
                            </div>

                            <div class="anime__inner-description">
                                Moe Sato is a young lady who finds a cat and starts taking care of him. Named Poyo due to his round shape, he quickly becomes a dear member of the Sato family. 

(Source: ANN)
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/11/35659.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11769/Gokujo__Gokurakuin_Joshikou_Ryou_Monogatari"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Gokujo.: Gokurakuin Joshikou Ryou Monogatari</h2>
                            </div>

                            <div class="anime__inner-description">
                                A story about the humorous misadventures of Akabane Aya, an arrogant high school girl who's constantly trying to outdo her classmates in everything (especially sex appeal), only to make a fool of herself in the process. Since the story takes place in an all-girls school, expect lots of yuri fanservice innuendos without much seriousness.
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/13/33003.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11491/Recorder_to_Randoseru_Do♪"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Recorder and Randsell</h2>
                            </div>

                            <div class="anime__inner-description">
                                Atsushi Miyagawa is an 11-year-old boy with the appearance of a fully-grown man. His 17-year-old sister, Atsumi, has the stature of a child! From Atsushi being arrested numerous times as a suspected predator to Atsumi constantly grabbed like a small child more times than she can count, many things go wrong for this curious sibling duo. Atsumi's classmate is even in love with Atsushi, oblivious to his true age!  Despite all this, indeed, there is not a single dull moment in the Miyagawa household.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/10/33591.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11371/Shin_Tennis_no_Ouji-sama"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>The Prince of Tennis II</h2>
                            </div>

                            <div class="anime__inner-description">
                                Ryouma Echizen is one of 50 nationally ranked middle school tennis players to receive an invitation for the Japan U-17 tennis training camp. Previously open only to high school players, the exclusive regiment trains the best players in the country for the upcoming U-17 World Cup. The high schoolers are not pleased that these middle schoolers are allowed into the camp, but the middle schoolers easily overwhelm them before they are halted by the coaches.

The rules of the camp are soon explained: the players are split into one of 16 courts based on skill, with the best players occupying Court 1. Players move up and down courts based on "shuffle matches" that occur before practice begins each day. In anticipation of a game, the middle schoolers are asked to pair up with one another, only to find out that they would not be playing doubles with their partners. Instead, they are pitted against each other in a tiebreaker-style game. The winner of the match would be allowed to stay to further develop their skills whereas the loser would be sent home.

For the sake of tennis, friendships and camaraderie are all put on the line. As the fierce competition between the middle and high schoolers persists, the situations they find themselves in goes deeper than just playing to remain in the camp.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/6/72743.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/10447/Aquarion_Evol"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Aquarion Evol</h2>
                            </div>

                            <div class="anime__inner-description">
                                12,000 years after the events in Genesis Aquarion, humans live on the star Vega under constant threat of trans-dimensional beings called Abductors. These enemies originate from Vega’s sister star Altair and raid Vega for human life. As a countermeasure, an organization known as Neo-DEAVA formed to combat the Abductors. They pilot advanced mecha suits called Aquaria and are strictly separated by gender. Boys and girls are not allowed contact; they are even restrained from fighting on the same battlefield. However, events take a shocking turn when an advanced Abductor mecha suit joins the fray. Two teenagers, Mikono and Amata, are dragged into the conflict. Unknowingly, Amata performs a taboo when he summons an Aquaria and initializes what is called the Forbidden Union between male and female Aquaria. Neo-DEAVA is shocked, and the repercussions of Amata’s actions are much farther reaching than he realizes. How was he able to summon an Aquaria? Where did he learn to form a Forbidden Union? And why was Mikono also able to pilot the mecha suit?
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/13/34043.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11241/Brave_10"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Brave 10</h2>
                            </div>

                            <div class="anime__inner-description">
                                Isanami, a young priestess of Izumo, is forced to watch as a group of evil ninja burn her temple to the ground and slaughter the people within, leaving her no choice but to flee into the forest to escape the same fate. By chance, she stumbles upon Saizou Kirigakure, a masterless ninja from the Iga school. The two travel to Ueda Castle to ask Yukimura Sanada for help. Isanami's possession of a strange and devastating power is revealed, and Sanada readily agrees to help her, gathering ten brave warriors to Isanami's side.

Thus begins Brave 10, a story set in the Warring States period. It follows Saizou and Isanami's journey throughout the war-laden lands in search of brave warriors to serve under Yukimura's banner, each possessing powerful skills of their own. They'll have to travel far and wide, all while trying to fend off those who would chase after the dark power that she possesses to make it their own.
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/2/35372.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11341/Tantei_Opera_Milky_Holmes_Dai_2_Maku"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Detective Opera Milky Holmes 2</h2>
                            </div>

                            <div class="anime__inner-description">
                                Second season of Tantei Opera Milky Holmes.
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2></h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/1760/98794.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11013/Inu_x_Boku_SS"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Inu X Boku Secret Service</h2>
                            </div>

                            <div class="anime__inner-description">
                                Ririchiyo Shirakiin is the sheltered daughter of a renowned family. With her petite build and wealthy status, Ririchiyo has been a protected and dependent girl her entire life, but now she has decided to change all that. However, there is just one problem—the young girl has a sharp tongue she can't control, and terrible communication skills.

With some help from a childhood friend, Ririchiyo takes up residence in Maison de Ayakashi, a secluded high-security apartment complex that, as the unsociable 15-year-old soon discovers, is home to a host of bizarre individuals. Furthermore, their quirky personalities are not the strangest things about them: each inhabitant of the Maison de Ayakashi, including Ririchiyo, is actually half-human, half-youkai.

But Ririchiyo's troubles have only just begun. As a requirement of staying in her new home, she must be accompanied by a Secret Service agent. Ririchiyo's new partner, Soushi Miketsukami, is handsome, quiet... but ridiculously clingy and creepily submissive. With Soushi, her new supernatural neighbors, and the beginning of high school, Ririchiyo definitely seems to have a difficult path ahead of her.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Tuesdays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/3/37449.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11665/Natsume_Yuujinchou_Shi"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Natsume's Book of Friends Season 4</h2>
                            </div>

                            <div class="anime__inner-description">
                                Takashi Natsume, the timid youkai expert and master of the Book of Friends, continues his journey towards self-understanding and acceptance with the help of friends both new and old. His most important ally is still his gluttonous and sake-loving bodyguard, the arrogant but fiercely protective wolf spirit Madara—or Nyanko-sensei, as Madara is called when in his usual disguise of an unassuming, pudgy cat.

Natsume, while briefly separated from Nyanko-sensei, is ambushed and kidnapped by a strange group of masked, monkey-like youkai, who have spirited him away to their forest as they desperately search for the Book of Friends. Realizing that his "servant" has been taken out from right under his nose, Nyanko-sensei enlists the help of Natsume's youkai friends and mounts a rescue operation. However, the forest of the monkey spirits holds many dangerous enemies, including the Matoba Clan, Natsume's old nemesis.

Stretching from the formidable hideout of the Matoba to Natsume's own childhood home, Natsume Yuujinchou Shi is a sweeping but familiar return to a world of danger and friendship, where Natsume will finally confront the demons of his own past.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Tuesdays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/12/59405.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11433/Ano_Natsu_de_Matteru"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Waiting in the Summer</h2>
                            </div>

                            <div class="anime__inner-description">
                                While testing out his camera on a bridge one summer night, Kaito Kirishima sees a blue light streaking across the sky, only to be blown off the railing seconds later. Just before succumbing to unconsciousness, a hand reaches down to grab ahold of his own. Dazed and confused, Kaito wakes up the next morning wondering how he ended up back in his own room with no apparent injuries or any recollection of the night before. As he proceeds with his normal school life, Kaito and his friends discuss what to do with his camera, finally deciding to make a film with it over their upcoming summer break. Noticing that Kaito has an interest in the new upperclassmen Ichika Takatsuki, his friend Tetsurou Ishigaki decides to invite her, as well as her friend Remon Yamano, to join them in their movie project.

In what becomes one of the most entertaining and exciting summers of their lives, Kaito and his friends find that their time spent together is not just about creating a film, but something much more meaningful that will force them to confront their true feelings and each other.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Tuesdays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/3/33257.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11843/Danshi_Koukousei_no_Nichijou"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Daily Lives of High School Boys</h2>
                            </div>

                            <div class="anime__inner-description">
                                Roaming the halls of the all-boys Sanada North High School are three close comrades: the eccentric ringleader with a hyperactive imagination Hidenori, the passionate Yoshitake, and the rational and prudent Tadakuni. Their lives are filled with giant robots, true love, and intense drama... in their colorful imaginations, at least. In reality, they are just an everyday trio of ordinary guys trying to pass the time, but who said everyday life couldn't be interesting? Whether it's an intricate RPG reenactment or an unexpected romantic encounter on the riverbank at sunset, Danshi Koukousei no Nichijou is rife with bizarre yet hilariously relatable situations that are anything but mundane.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Wednesdays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/2/35039.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11179/Papa_no_Iukoto_wo_Kikinasai"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Listen to Me, Girls. I Am Your Father!</h2>
                            </div>

                            <div class="anime__inner-description">
                                Yuuta Segawa has just started his freshman year of university. One day, his sister Yuri, who raised him after their parents died, asks him to take care of her daughters Hina, Sora and Miu while she and her husband go overseas on a business trip. Yuuta grudgingly accepts, but tragedy strikes when their plane goes missing and all passengers are presumed dead. In an effort to prevent the three girls from being split up, Yuuta goes against their family and takes them in, just as his sister took him in when he had no one else.

Now the four find themselves in a new and peculiar situation: Yuuta must learn how to balance his new responsibilities—as the newest member of the Street Observation Research Society, a club for people watching, and also as a father figure—while Sora, Miu, and Hina come to terms with the loss of their parents.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Fridays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/5/53909.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11285/Black★Rock_Shooter_TV"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Black Rock Shooter</h2>
                            </div>

                            <div class="anime__inner-description">
                                On the first day of junior high school, Mato Kuroi happens to run into Yomi Takanashi, a shy, withdrawn girl whom she immediately takes an interest in. Mato tries her best to make conversation with Yomi, wanting to befriend her. At first, she is avoided, but the ice breaks when Yomi happens to notice a decorative blue bird attached to Mato's phone, which is from the book "Li'l Birds At Play." Discovering they have a common interest, the two form a strong friendship.

In an alternate universe, the young girls exist as parallel beings, Mato as Black★Rock Shooter, and Yomi as Dead Master. Somehow, what happens in one world seems to have an effect on the other, and unaware of this fact, the girls unknowingly become entangled by the threads of fate.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Fridays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/1331/111940.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11617/High_School_DxD"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>High School DxD</h2>
                            </div>

                            <div class="anime__inner-description">
                                High school student Issei Hyoudou is your run-of-the-mill pervert who does nothing productive with his life, peeping on women and dreaming of having his own harem one day. Things seem to be looking up for Issei when a beautiful girl asks him out on a date, although she turns out to be a fallen angel who brutally kills him! However, he gets a second chance at life when beautiful senior student Rias Gremory, who is a top-class devil, revives him as her servant, recruiting Issei into the ranks of the school's Occult Research club.

Slowly adjusting to his new life, Issei must train and fight in order to survive in the violent world of angels and devils. Each new adventure leads to many hilarious (and risqué) moments with his new comrades, all the while keeping his new life a secret from his friends and family in High School DxD!

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Fridays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/11/75580.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11751/Senki_Zesshou_Symphogear"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Symphogear</h2>
                            </div>

                            <div class="anime__inner-description">
                                Tsubasa Kazanari and Kanade Amou—the idol duo known as Zwei Wing—use their songs to power ancient weapons known as "symphogears" to combat a deadly alien race called the "Noise." While the general public is aware of the Noise's existence, knowledge of the symphogears are kept a secret. When the Noise attack one of Zwei Wing's concerts, Kanade sacrifices herself to protect a young girl named Hibiki Tachibana, leaving Tsubasa devastated and a fragment of her symphogear embedded within Hibiki.

Two years pass and Hibiki is once again dragged into a Noise attack. While rescuing a young girl who has been left behind during the evacuation, she awakens the power of Kanade's symphogear lying within her. Although Tsubasa still grieves over the loss of Kanade, both girls must now learn to work together using their powers to defend humanity against the Noise.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Fridays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/5/35635.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/12321/Thermae_Romae"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Thermae Romae</h2>
                            </div>

                            <div class="anime__inner-description">
                                Lucius Modestus, an ancient Roman architect, finds himself job-hunting due to having trouble coming up with new ideas. As his demeanor and personality become dismal, his friends try taking him to a bathhouse for him to relax. Unable to unwind in the bustling and crowded bath, Lucius dips his head in the water. Down there, he finds a secret tunnel that transports him to a modern-day Japanese bathhouse, providing him the inspiration he needed to make a new creation.

Loaded with what seems to be knowledge way ahead of his time, Lucius does his best to try and recreate his findings, usually inferior in quality due to his circumstances. However, the sheer ingenuity may be just enough to gain the attention of the citizens and regain his reputation as an architect.

[Written by MAL Rewrite]
 
Note: MAL considers this show to be three episodes and not five. See More Info for additional details.
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Fridays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/9/87197.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11079/Kill_Me_Baby"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Kill Me Baby</h2>
                            </div>

                            <div class="anime__inner-description">
                                Kill Me Baby is the touching story of Yasuna, a normal (?) high school girl, and Sonya, her best friend who happens to be an assassin. Unfortunately, little Sonya's trained assassin instincts often work against her and others in her daily high school life, as Yasuna's often-broken wrist can attest to. She just wanted a hug, but she ended up with a broken neck. Isn't it sad? No, it's hilarious.

Not even Yasuna's intense ninja training can prepare her for the exciting adventures in this explosive 4-panel manga adaptation.
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Saturdays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/6/73987.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11697/Area_no_Kishi"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>The Knight in the Area</h2>
                            </div>

                            <div class="anime__inner-description">
                                Kakeru and Suguru are brothers who both have a flaming passion for soccer. However, while Suguru becomes a rising star in the Japanese youth soccer system, Kakeru decides to take on a managerial role after struggling on the field. But due to a cruel twist of fate, Kakeru ends up reevaluating the role he has chosen.

In hopes of one day being able to enter the World Cup by becoming a member of the national team, Kakeru trains harder than anyone else. He isn’t alone in this quest for glory, though. Kakeru's childhood friend, Nana, is a soccer prodigy of her own, with the wicked nickname “Little Witch”. She is a top-ranked player and is already playing for Nadeshiko Japan, the Japanese women’s national team. Nana's success gives Kakeru the extra push he needs to reach for his goals.

Soccer and adolescent fervor combine for an epic, emotional ride. Check it out for yourself in Area no Kishi!
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Saturdays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/2/75559.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11319/Zero_no_Tsukaima_F"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>The Familiar of Zero F</h2>
                            </div>

                            <div class="anime__inner-description">
                                Saito Hiraga and Louise Françoise Le Blanc de La Vallière go on the offensive after the events of Zero no Tsukaima: Princesses no Rondo. Together, they face off against King Joseph in the Holy City of Romalia with the help of two others who control the power of the "void." But in the midst of the many conflicts ahead of them, an ancient evil begins to stir in the shadows. 

Will their close bonds blossom into something more or will they be shattered through the ever increasing difficulty of the tasks that they must undertake? Zero no Tsukaima F follows the story of Louise and Saito as they face their final challenges together.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Sundays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/13/36247.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/8917/Mouretsu_Pirates"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Bodacious Space Pirates</h2>
                            </div>

                            <div class="anime__inner-description">
                                Far in the future, where interstellar travel is considered commonplace, high school student Marika Katou balances her duties in the space yacht club and her job as a restaurant waitress. Following a chance encounter with a peculiar pair of customers, Marika meets them again and learns that her absent father has passed away.

During his life, he was known as the legendary pirate "Gonzaemon." He has left behind his infamous ship Bentenmaru and its crew exclusively for Marika to inherit. With one of the few remaining Letters of Marque that permit legal piracy, Marika must choose whether to stay as a regular student or take up a second life as a high-octane space pirate.

As Marika ponders her decision, the delicate situation attracts the eyes of various government agencies and the mysterious transfer student Chiaki Kurihara, all eager to see if the upcoming captain lives up to her father's reputation. If the crew of the Bentenmaru want to maintain their status, they will need to set sail into the vast expanse of space and once again become a name to be feared.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Sundays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/7/50439.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11227/Rinne_no_Lagrange"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Lagrange: The Flower of Rin-ne</h2>
                            </div>

                            <div class="anime__inner-description">
                                Madoka Kyouno is an energetic girl who is full of passion. As the proud, and only, member of the Kamogawa Girls' High School Jersey Club, she goes around helping people in need.

Madoka's life is turned upside down when she is suddenly asked by a mysterious girl named Lan to pilot a robot. Motivated by her desire to protect the people and city of Kamogawa, Madoka agrees to pilot the resurrected Vox robot to fight against extraterrestrials that have come to attack Earth.

(Source: VIZ Media)
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Sundays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/12/76179.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/12191/Smile_Precure"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Glitter Force</h2>
                            </div>

                            <div class="anime__inner-description">
                                To teenager Miyuki Hoshizora, fairy tales are a world of wondrous encounters and happy endings. Inspired by her love for these stories, she lives every day searching for happiness. While running late on her first day of school as a transfer student, Miyuki meets Candy—a mysterious fairy from the world of fairy tales, Märchenland. However, when Candy disappears as quickly as she appeared, Miyuki is left believing the encounter was only a dream.

After an eventful first day, Miyuki finds a mysterious library at school. While combing through the bookshelves, she is transported next to Candy, who claims to be searching for the so-called legendary warriors, Precure. When forced to protect Candy's and everyone else's happiness, Miyuki transforms into "Cure Happy," one of the Precure warriors! As Cure Happy, Miyuki is now tasked with finding the other legendary warriors and protecting the world from destruction, all while possibly discovering her very own happy ending.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="anime-container">
                    <div class="anime__inner">

                        <div class="anime__inner-top">
                            <div class="anime__inner-day">
                                <h2>Sundays</h2>
                            </div>
                            <div class="anime__inner-image">
                                <img src="https://cdn.myanimelist.net/images/anime/1044/103654.jpg">
                                <a class="block-link" href="https://myanimelist.net/anime/11597/Nisemonogatari"></a>
                            </div>
                        </div>

                        <div class="anime__inner-bottom">
                            <div class="anime__inner-title">
                                <h2>Nisemonogatari</h2>
                            </div>

                            <div class="anime__inner-description">
                                Surviving a vampire attack, meeting several girls plagued by supernatural entities, and just trying to get through life are some of the things high school student Koyomi Araragi has had to deal with lately. On top of all this, he wakes up one morning to find himself kidnapped and tied up by his girlfriend Hitagi Senjougahara. Having run afoul of Deishuu Kaiki, a swindler who conned Senjougahara's family, she has taken it upon herself to imprison Araragi to keep him safe from the con man. But when Araragi gets a frantic message from his sister Karen, he learns that the fraud has set his sights on her.

Along with Karen's troubles, his other sister, Tsukihi, is having issues of her own. And when two mysterious women who seem to know more than they should about Araragi and his special group of friends step into their lives, not even he could anticipate their true goals, nor the catastrophic truths soon to be revealed.

[Written by MAL Rewrite]
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
    </div>    
        
    </div>

</body>

</html><?php }
}
