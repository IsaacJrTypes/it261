<?php
//we need to define the page that we are on as the page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home';
        $body = 'home';
        break;
    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
}

$nav['daily.php'] = 'Switch';
$nav['troubleshoot.php'] = 'Troubleshoot';
$nav['calculator.php'] = 'Calculator';
$nav['email.php'] = 'Email';
$nav['gallery.php'] = 'Gallery';
$nav['database.php'] = 'Database';

date_default_timezone_set('America/Los_Angeles');//sets timezone
//GLOBAL VARIABLE are capitallized and start with $_GET
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

//switch
switch($today) {
    case 'Thursday': 
        $philosopher = 'Marcus Aurelius';
        $pic = 'marcus.jpg';
        $alt = 'Scupture of Marcus Aurelius\'s head';
        $divClass = 'brown';
        $quote = 'The soul becomes dyed with the colour of its thoughts';
        $content = '<b>Marcus Aurelius</b>was a Roman emperor from 161 to 180 and a Stoic philosopher. He was the last of the rulers known as the Five Good Emperors (a term coined some 13 centuries later by Niccolò Machiavelli), and the last emperor of the Pax Romana (27 BC to 180 AD), an age of relative peace and stability for the Roman Empire. He served as Roman consul in 140, 145, and 161.';
        break;
    case 'Friday': 
        $philosopher = 'Seneca';
        $pic = 'seneca.jpg';
        $alt = 'Scupture of Seneca\'s head';
        $divClass = 'darkbrown';
        $quote = 'Luck is what happens when preparation meets opportunity';
        $content = '<b>Lucius Annaeus Seneca the Younger</b>was born in Cordoba in Hispania, and raised in Rome, where he was trained in rhetoric and philosophy. His father was Seneca the Elder, his elder brother was Lucius Junius Gallio Annaeanus, and his nephew was the poet Lucan. In AD 41, Seneca was exiled to the island of Corsica under emperor Claudius, but was allowed to return in 49 to become a tutor to Nero. When Nero became emperor in 54, Seneca became his advisor and the praetorian prefect Sextus Afranius Burrus, provided competent government for the first five years of Nero\'s reign. Seneca\'s influence over Nero declined with time, and in 65 Seneca was forced to take his own life for alleged complicity in the Pisonian conspiracy to assassinate Nero, in which he was likely to have been innocent. His stoic and calm suicide has become the subject of numerous paintings.';
        break;
    case 'Saturday': 
        $philosopher = 'Immanuel Kant'; 
        $pic = 'kant.jpg';
        $alt = 'Scupture of Immanuel Kant\'s head';
        $divClass = 'lightyellow';
        $quote = 'All our knowledge begins with the senses, proceeds then to the understanding, and ends with reason. There is nothing higher than reason';
        $content = '<b>Immanuel Kant</b> was a German philosopher and one of the central Enlightenment thinkers.Born in Königsberg, Kant\'s comprehensive and systematic works in epistemology, metaphysics, ethics, and aesthetics have made him one of the most influential figures in modern Western philosophy.';
        break;
    case 'Sunday': 
        $philosopher = 'Confucius'; 
        $pic = 'confusious.jpg';
        $alt = 'Scupture of Confusious';
        $divClass = 'lightgreen';
        $quote = 'The man who asks a question is a fool for a minute, the man who does not ask is a fool for life.';
        $content = '<b>Confucius</b>  was a Chinese philosopher, poet and politician of the Spring and Autumn period who was traditionally considered the paragon of Chinese sages. Confucius\'s teachings and philosophy formed the basis of East Asian culture and society, and continues to remain influential across China and East Asia as of today.';

        break;
    case 'Monday': 
        $philosopher = 'Plato'; 
        $pic = 'plato.jpg';
        $alt = 'Scupture of Plato\'s head';
        $divClass = 'default';
        $quote = '“Do not train a child to learn by force or harshness; but direct them to it by what amuses their minds, so that you may be better able to discover with accuracy the peculiar bent of the genius of each.”';
        $content = '<b>Plato</b> was an Athenian philosopher during the Classical period in Ancient Greece, founder of the Platonist school of thought and the Academy, the first institution of higher learning in the Western world';
        break;
    case 'Tuesday': 
        $philosopher = 'Epictetus'; 
        $pic = 'epictetus.jpg';
        $alt = 'Scupture of Epictetus\'s head';
        $divClass = 'lightorange';
        $quote = 'He who laughs at himself never runs out of things to laugh at.';
        $content = '<b>Epictetus</b>  was a Greek Stoic philosopher. He was born into slavery at Hierapolis, Phrygia (present day Pamukkale, Turkey) and lived in Rome until his banishment, when he went to Nicopolis in northwestern Greece for the rest of his life. His teachings were written down and published by his pupil Arrian in his Discourses and Enchiridion';

        break;
    case 'Wednesday': 
        $philosopher = 'Aristotle'; 
        $pic = 'aristotle.jpg';
        $alt = 'Scupture of Aristotle\'s head';
        $divClass = 'coffee';
        $quote = 'Excellence is an art won by training and habituation. We do not act rightly because we have virtue or excellence, but we rather have those because we have acted rightly. We are what we repeatedly do. Excellence, then, is not an act but a habit.';
        $content = '<b>Aristotle</b> was a Greek philosopher and polymath during the Classical period in Ancient Greece. Taught by Plato, he was the founder of the Lyceum, the Peripatetic school of philosophy, and the Aristotelian tradition. His writings cover many subjects including physics, biology, zoology, metaphysics, logic, ethics, aesthetics, poetry, theatre, music, rhetoric, psychology, linguistics, economics, politics, meteorology, geology and government. Aristotle provided a complex synthesis of the various philosophies existing prior to him. It was above all from his teachings that the West inherited its intellectual lexicon, as well as problems and methods of inquiry. As a result, his philosophy has exerted a unique influence on almost every form of knowledge in the West and it continues to be a subject of contemporary philosophical discussion.';
        break;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <title><?php echo $title;?></title>
  </head>
<body class="<?php echo $body;?>">
    <header>
        <div id="inner-header">
            <h1 id="logo">
            <a href="../index.php">
                <img src="images/php-logo.svg" alt="Php Logo" />
            </a>
            </h1>

            <nav>
                <ul>
                <?php foreach ($nav as $key => $value) {
                    echo '<li style="list-style-type:none;"><a style="text-decoration:none;" href="'.$key.'">'.$value.'</a></li>';
                }?>
                </ul>
            </nav>
        </div>
        <!-- end inner header -->
        </header>