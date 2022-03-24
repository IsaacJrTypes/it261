<?php
ob_start();  // prevents header errors before reading the whole page!
//define the page that we are on as the page
date_default_timezone_set('America/Los_Angeles');//sets timezone
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have successfully logged on!!';
$errors = array();

function myError($myFile, $myLine, $errorMsg) {
    if(defined('DEBUG') && DEBUG) {
      echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
    }  else {
      echo ' Houston, we have a problem!';
      die();
    }  
}

//php for page switch
switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home Page';
        $body = '';
        $headline = 'A Tribute Website on Seattle\'s Music Scene';
        break;
    case 'daily.php':
        $title = 'Artist Of The Day';
        $body = '';
        $headline = '';
        break;
    case 'about.php':
        $title = 'About Our Screenshots';
        $body = '';
        $headline = 'Screenshot of Venues Database';
        break;
    case 'register.php':
        $title = 'Come As You Are';
        $body = 'login';
        $headline = 'Register Today!';
        break;
    case 'login.php':
        $title = 'Login Page';
        $body = 'login';
        $headline = 'Login';
        break;
    case 'venues.php':
        $title = 'Seattle Concert Venues';
        $body = '';
        $headline = 'List of My Favorite Seattle Concert Venues';
        break;
    case 'venue-view.php':
        $title = 'Venue Details';
        break;
    case 'contact.php':
        $title = 'Contact Page';
        $body = '';
        $headline = 'Vote for your favorite venue';
        break;
    case 'thx.php':
        $title = 'Thank You!';
        $body = '';
        $headline = '';
        break;
}

//php for artist switch page
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch content
switch($today) {
    case 'Sunday':
        $artist = 'Nirvana';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/z9LiPuVRyU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Characterized by their punk aesthetic, Nirvana\'s fusion of pop melodies with noise, combined with their themes of abjection and social alienation, brought them global popularity. Following extensive tours and the 1992 compilation album Incesticide and EP Hormoaning, the band released their highly anticipated third studio album, In Utero (1993). The album topped both the US and UK album charts, and was acclaimed by critics. Nirvana disbanded following Cobain\'s suicide in April 1994. Various posthumous releases have been overseen by Novoselic, Grohl, and Cobain\'s widow Courtney Love. The posthumous live album MTV Unplugged in New York (1994) won Best Alternative Music Performance at the 1996 Grammy Awards.';
        break;
    case 'Monday':
        $artist = 'Jimi Hendrix';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/OzlN0Guvous?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Hendrix was inspired by American rock and roll and electric blues. He favored overdriven amplifiers with high volume and gain, and was instrumental in popularizing the previously undesirable sounds caused by guitar amplifier feedback. He was also one of the first guitarists to make extensive use of tone-altering effects units in mainstream rock, such as fuzz distortion, Octavia, wah-wah, and Uni-Vibe. He was the first musician to use stereophonic phasing effects in recordings. Holly George-Warren of Rolling Stone commented: "Hendrix pioneered the use of the instrument as an electronic sound source. Players before him had experimented with feedback and distortion, but Hendrix turned those effects and others into a controlled, fluid vocabulary every bit as personal as the blues with which he began."';
        break;
    case 'Tuesday':
        $artist = 'Shabazz Palaces';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/7liGwmBuRL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Ishmael Butler (Group lead) notes that the work of Shabazz Palaces differs from his previous work stylistically. He cites his primary influences as "abstract", pulling from podcasts and mixtapes. Butler attributes the use of African percussion and jazz overtones to his family\'s musical preferences.';
        break;
    case 'Wednesday':
        $artist = 'Quincy Jones';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/Y7v5liq0XcU?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Jones came to prominence in the 1950s as a jazz arranger and conductor before working on pop music and film scores. In 1968, Jones became the first African American to be nominated for an Academy Award for Best Original Song for "The Eyes of Love" from the film Banning. Jones was also nominated for an Academy Award for Best Original Score for his work on the 1967 film In Cold Blood, making him the first African American to be nominated twice in the same year. Jones produced three of Michael Jackson\'s most successful albums: Off the Wall (1979), Thriller (1982), and Bad (1987). In 1985, Jones produced and conducted the charity song "We Are the World", which raised funds for victims of famine in Ethiopia.';
        break;
    case 'Thursday':
        $artist = 'Pearl Jam';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/CxKWTzr-k6s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Compared with the other grunge bands of the early 1990s, Pearl Jam\'s style is noticeably less heavy and harkens back to the classic rock music of the 1970s. Pearl Jam has cited many punk rock and classic rock bands as influences, including The Who, Led Zeppelin, Neil Young, Kiss and the Ramones. Pearl Jam\'s success has been attributed to its sound, which fuses "the riff-heavy stadium rock of the \'70s with the grit and anger of \'80s post-punk, without ever neglecting hooks and choruses." Gossard\'s rhythm guitar style is known for its sense of beat and groove, while McCready\'s lead guitar style, influenced by artists such as Jimi Hendrix, has been described as "feel-oriented" and "rootsy.';
        break;
    case 'Friday':
        $artist = 'Foo Fighters';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/EqWRaAF6_WY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Foo Fighters have been described as grunge, alternative rock, post-grunge, hard rock, and pop-rock. They were initially compared to Grohl\'s previous group, Nirvana. Grohl acknowledged that Kurt Cobain was an influence on his songwriting: "Through Kurt, I saw the beauty of minimalism and the importance of music that\'s stripped down." Foo Fighters also used the technique of shifting between quiet verses and loud choruses, which Grohl said was influenced by the members of Nirvana "liking The Knack, Bay City Rollers, Beatles, and ABBA as much as we liked Flipper and Black Flag, I suppose." ';
        break;
    case 'Saturday':
        $artist = 'Soundgarden';
        $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/O3APMu6zIiM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $content = 'Soundgarden were pioneers of the grunge music genre, which mixed elements of punk rock and metal to make a sludgy, murky sound through the use of fuzzy-sounding distortion in the guitars. "Soundgarden are quite good..." remarked Black Sabbath\'s Tony Iommi, "It\'s very much like the same sort of stuff that we would have done." Soundgarden\'s sound during the early years of the Seattle grunge scene has been described as consisting of "gnarled neo-Zeppelinisms". The influence of Led Zeppelin was evident, with Q magazine noting that Soundgarden were "in thrall to \'70s rock, but contemptuous of the genre\'s overt sexism and machismo." According to Sub Pop, the band had "a hunky lead singer and fused Led Zeppelin and the Butthole Surfers". The Butthole Surfers\' mix of punk, heavy metal and noise rock was a major influence on the early work of Soundgarden. The band was also influenced by the likes of the Ramones, Kiss, Accept, the Melvins and Saint Vitus. ';
        break;
}

//nav assoc list
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['venues.php'] = 'Venues';
$nav['contact.php'] = 'Contact';

//make link function
function make_links($nav) {
    $my_return = '';
    foreach ($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .='<li><a href="'.$key.'">'.$value.'</a></li>';
        }
    }//end foreach
    return $my_return;
}


?>