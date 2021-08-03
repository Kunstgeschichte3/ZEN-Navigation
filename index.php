<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zen-Navigation</title>
    <script src="assets/lazysizes.min.js" async=""></script>
    <script src="assets/app.js" defer></script>
</head>

<body>
    <header>
        <nav></nav>
    </header>
    <main>
        <article>
            <h1>zen-Navigation, Dirk Gentley, Ideosynkrasie und Fotografieren</h1>
            <p>Das Assignment vom 13.05. hat uns fühlen lassen, dass alles irgendwie zusammenhängt, wie Dirk Gentley
                immer so schön sagt. Wenn wir auf dem Heimweg nicht noch diesen Park gesehen hätten, wäre Gab nicht auf
                die Mauer geklettert, wäre ich nicht an der Mauer entlang gelaufen und hätte Stimmen gehört, hätte ich
                die unsichtbaren Leute auf dem Spielplatz nicht angesprochen und wir uns nicht kennengelernt. Aber so
                kam es und hat dazu geführt, dass wir sogar mit zu ihnen nach Hause gegangen sind und zufällig
                schwarz-weiß-Fotos auf dem Tisch liegen sehen und einen Kommilitonen auf einem der Fotos wiedererkannt
                haben. Wir haben herausgefunden, dass wir uns schon einmal auf einer Geburtstagsparty unbewusst begegnet
                sein müssen und bald auf das selbe Konzert gehen werden. Und Robert hat uns kürzlich auf seine
                Foto-Ausstellung eingeladen. </p>
            <p>Inspiriert davon, wollen wir mehr mit der zen-Navigation forschen, künstlerisch forschen. Wir wollen uns
                wieder von der Intuition leiten lassen und herausfinden was dabei passiert. Geleitet von der Frage „wie
                wirkt die Umgebung auf mich?“, beobachten wir wie wir uns in der Umgebung, durch die wir uns bewegen
                fühlen und warum, wobei das „warum“ aufgrund der ständigen Bewegung manchmal nur angerissen wird oder
                gar unbeantwortet bleibt. Wie erfahren wir leibkörperlich den Raum bzw. den Stadtraum. </p>
            <p>Mit der von Holger Schulze beschriebenen Ideosynkrasie als Methode, fragen wir uns …
                Spacing – Wo sind wir?
                „together in this location, at a certain point in time, under rather specific conditions of work, of
                work assignments, of individual work budgets and with particular individual goals and wishes related to
                this activity today.“</p>
            <p>Timing – In welchem Moment sind wir?
                „Only by means of timing (…) we become capable of understanding our own peculiar biases and focuses: as
                researchers.“</p>
            <p>Embodying – Wie bewegen wir uns?
                „We are embodying this place. More and more, the longer we are staying here. The location is in us
                then.“</p>
            <p>Intervening – Was passiert hier gerade?
                „Who is doing what? What happened before that? Who might be intending to do what next – or might he or
                she just be pretending to, or hiding from this?“
                „We cherish our idiosyncratic sensibilities.“</p>
            <p>Performing – Wie verhalten wir uns wirken zurück auf Umgebung? Wie nehmen wir Einfluss?
                „Such situations – be it of apparatuses or of humanoids – are sensible constellations. We might just
                crush them with our mere presence, and our rude ignorance as outsiders, as creatures who intervene.“
            </p>
            <p>Transmitting – Wie ist unser ganz individuelles Empfinden?
                „Can you feel it?“</p>
            <p>Zitate: Schulze, Holger. 2016. Idiosyncrasy as Method. Seismograf (August). <a
                    href="https://seismograf.org/en/fokus/fluid-sounds/idiosyncracy-as-method">https://seismograf.org/en/fokus/fluid-sounds/idiosyncracy-as-method</a>,
                aufgerufen 22.07.21</p>
            <p>Als Darstellungsmethode, aber auch als Gegenstand der Forschung nutzen wir die analoge Fotografie. Es
                wird also einerseits abgelichtet, was uns für den Moment und die Empfindung auffällt und andererseits
                wird das Fotografieren zwangsläufig Teil der Erfahrung. Neben den Bildern nehmen wir Sprachnachrichten
                auf, die entweder Gedanken auf die Bilder bezogen oder unabhängig von diesen festhalten. So ergänzen
                sich sehbares und hörbares.</p>


        </article>
        <?php
        $dirbase = "content";
        function getFiles(){
            $dirbase = "content";
            $files=array();
            if($dir=opendir($dirbase)){
                while($file=readdir($dir)){
                    if($file[0]!='.' && $file!='.' && $file!='..' && $file!=basename(__FILE__)){
                        $files[]=$file;
                    }   
                }
                closedir($dir);
            }
            natsort($files); //sort
            return $files;
        }
        ?>

        <?
        function type($ext){
            switch ($ext) {
                case "jpg":
                case "jpeg":
                case "png":
                case "gif":
                    $type = "img";
                    break;
                case "mp4":
                case "ogg":
                case "mp3":
                    $type = "audio";
                    break;
                case "txt":
                    $type = "txt";
                    break;
            }
        
        return $type;
        }
    $id = 1;
    
    function getDuration($path) {
        $cmd = "ffmpeg -i " . escapeshellarg($path) . " 2>&1 | grep 'Duration' | cut -d ' ' -f 4 | sed s/,//";
        #$cmd = "ffmpeg -i " . escapeshellarg($path) . " 2>&1 | grep Duration | awk '{print $2}' | tr -d ,";
        return exec($cmd);
    }
    
    $durations = array();
    $durations = array (
        '#001' => '00:00:41.22',
        '#002' => '00:00:34.50',
        '#003' => '00:00:43.18',
        '#004' => '00:00:29.36',
        '#005' => '00:00:44.07',
        '#008' => '00:00:18.56',
        '#009' => '00:00:16.98',
        '#011' => '00:00:15.09',
        '#012' => '00:00:18.93',
        '#013' => '00:00:21.54',
        '#014' => '00:01:03.08',
        '#016' => '00:00:17.75',
        '#017' => '00:00:35.54',
        '#019' => '00:00:21.30',
        '#020' => '00:01:04.78',
        '#022' => '00:01:04.42',
        '#024' => '00:00:19.00',
        '#026' => '00:00:18.75',
        '#028' => '00:00:12.20',
        '#029' => '00:00:18.50',
        '#031' => '00:01:04.22',
        '#032' => '00:00:15.06',
        '#034' => '00:00:49.59',
        '#035' => '00:00:15.06',
        '#036' => '00:00:37.12',
        '#040' => '00:00:58.38',
        '#042' => '00:00:20.35',
        '#044' => '00:00:18.94',
        '#045' => '00:00:24.22',
        '#049' => '00:00:27.44',
        '#052' => '00:00:14.88',
        '#053' => '00:00:35.02',
        '#054' => '00:03:00.68',
        '#055' => '00:00:46.40',
        '#056' => '00:00:31.76',
        '#057' => '00:01:01.78',
        '#058' => '00:00:50.58',
        '#059' => '00:01:30.27',
        '#060' => '00:00:36.81',
        '#061' => '00:00:27.37',
        '#063' => '00:00:27.38',
        '#064' => '00:00:34.79',
        '#065' => '00:00:27.93',
        '#067' => '00:00:24.80',
        '#068' => '00:00:42.97',
        '#070' => '00:01:04.99',
        '#071' => '00:00:53.78',
        '#072' => '00:00:12.98',
        '#073' => '00:00:35.78',
        '#075' => '00:00:24.68',
        '#076' => '00:00:38.14',
        '#077' => '00:00:08.44',
        '#079' => '00:00:36.85',
        '#080' => '00:00:48.81',
        '#081' => '00:00:17.01',
        '#082' => '00:01:10.84',
        '#083' => '00:00:23.13',
        '#085' => '00:00:42.89',
        '#087' => '00:00:43.34',
        '#088' => '00:00:14.24',
        '#090' => '00:01:05.13',
        '#092' => '00:00:38.83',
        '#093' => '00:02:31.18',
        '#094' => '00:00:51.74',
        '#096' => '00:00:25.94',
        '#097' => '00:00:36.49',
        '#098' => '00:00:42.25',
        '#100' => '00:00:31.51',
        '#101' => '00:02:49.52',
        '#102' => '00:01:10.24',
        '#103' => '00:00:42.27',
        '#105' => '00:00:50.35',
        '#106' => '00:00:19.86',
        '#107' => '00:00:29.61',
        '#109' => '00:01:05.19',
        '#110' => '00:00:21.41',
        '#111' => '00:01:02.47',
        '#112' => '00:00:46.28',
        '#114' => '00:00:35.94',
        '#115' => '00:01:21.72',
        '#116' => '00:00:24.44',
        '#117' => '00:00:34.96',
        '#119' => '00:00:21.46',
        '#120' => '00:00:11.96',
        '#121' => '00:00:18.17',
        '#123' => '00:00:15.47',
        '#125' => '00:00:39.60',
        '#127' => '00:00:37.77',
        '#128' => '00:00:25.39',
        '#129' => '00:00:21.42',
        '#130' => '00:00:31.50',
        '#131' => '00:00:18.10',
        '#133' => '00:01:29.18',
        '#134' => '00:00:32.96',
        '#137' => '00:00:13.67',
        '#139' => '00:01:02.71',
        '#140' => '00:01:02.95',
        '#141' => '00:00:11.50',
        '#143' => '00:00:55.11',
        '#145' => '00:00:15.20',
        '#147' => '00:00:10.82',
        '#148' => '00:00:37.29',
        '#150' => '00:00:48.25',
        '#151' => '00:00:36.70',
        '#152' => '00:00:25.05',
        '#153' => '00:01:00.63',
        '#154' => '00:00:36.11',
        '#155' => '00:01:08.40',
        '#156' => '00:00:34.48',
        '#157' => '00:00:37.84',
        '#158' => '00:00:27.62',
        '#159' => '00:00:58.90',
        '#160' => '00:00:34.64',
        '#162' => '00:00:32.21',
        '#163' => '00:00:10.82',
        '#165' => '00:00:34.44',
        '#167' => '00:00:26.53',
        '#168' => '00:00:22.08',
        '#170' => '00:00:42.80',
        '#171' => '00:00:26.66',
        '#173' => '00:00:19.74',
        '#175' => '00:00:50.53',
        '#176' => '00:00:36.04',
        '#177' => '00:00:17.22',
        '#178' => '00:00:25.11',
        '#180' => '00:01:27.16',
        '#181' => '00:00:15.84',
        '#182' => '00:00:36.13',
        '#183' => '00:00:37.05',
        '#184' => '00:00:26.49',
        '#185' => '00:00:28.10',
        '#186' => '00:00:16.83',
        '#188' => '00:00:21.55',
        '#190' => '00:00:55.60',
        '#192' => '00:00:24.10',
        '#194' => '00:00:31.13',
        '#196' => '00:00:06.09',
        '#197' => '00:00:55.31',
        '#198' => '00:00:30.02',
        '#200' => '00:01:21.71',
        '#202' => '00:00:38.23',
        '#203' => '00:00:18.51',
        '#205' => '00:00:17.10',
        '#207' => '00:01:20.36',
        '#208' => '00:00:23.76',
        '#209' => '00:00:28.88',
        '#210' => '00:00:20.49',
        '#212' => '00:00:57.43',
        '#214' => '00:00:49.82',
        '#215' => '00:00:17.86',
        '#216' => '00:00:08.86',
        '#218' => '00:00:32.22',
        '#219' => '00:00:05.38',
        '#220' => '00:00:07.79',
        '#221' => '00:00:11.83',
        '#223' => '00:00:49.07',
        '#224' => '00:00:23.22',
        '#226' => '00:00:16.78',
        '#227' => '00:00:28.74',
        '#229' => '00:00:13.69',
        '#231' => '00:00:18.05',
        '#232' => '00:00:23.44',
        '#234' => '00:00:03.51',
        '#236' => '00:00:11.71',
        '#238' => '00:00:11.43',
        '#240' => '00:00:27.02',
        '#241' => '00:00:17.42',
        '#244' => '00:00:27.20',
        '#246' => '00:00:42.45',
        '#247' => '00:00:15.19',
        '#248' => '00:00:37.37',
        '#249' => '00:01:02.61',
        '#252' => '00:00:13.14',
        '#253' => '00:01:07.54',
        '#254' => '00:01:08.66',
        '#256' => '00:07:44.55',
    );
    foreach(getFiles() as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $url="$dirbase/$file";
        $midurl="$dirbase/mid/$file";
        $lourl="$dirbase/lo/$file";
        $xlourl="$dirbase/xlo/$file";
        $filename = pathinfo($file, PATHINFO_FILENAME); 
        $info = explode("_", $filename);
        $inf = $info;
        $num = $inf[0];
        unset($inf[0]);
        $caption = implode(" - ",$inf);

        if (type($ext) == "txt") {
            if ($caption[0] === "#")  {
                $caption= substr($caption, 1);
            }
        ?>

        <h2><?=$caption?></h2>
        <?
        }
        elseif (type($ext) == "") {

        }
        else {
        ?>

        <article>
            <div class='<?=type($ext)?>'>

                <? if (type($ext) == "img"):
            ?>

                <div id="lb<?=$id?>" class="lightbox">
                    <a href="#unset"><img src="<?=$lourl?>" data-src="<?=$url?>" alt="<?=$caption?>" class="lazyload"
                            data-id="<?=$id?>"></a>
                </div>
                <div id="th<?=$id?>" class="thumb">
                    <a href="#lb<?=$id++?>"><img src="<?=$xlourl?>" data-src="<?=$lourl?>" alt="<?=$caption?>"
                            class="lazyload"></a>
                    <p class="cap"><?=$caption?></p>
                </div>

                <? endif ?>
                <? if (type($ext) == "audio"):
            
            #$dur = getDuration($url);
            $dur = $durations["#".$num];
        ?>


            <div class="tape">
                <button data-id="<?=$num?>" data-src="<?=$url?>" data-caption="<?=$caption?> &mdash; <?=$num?>" data-currtime="0" data-duration="<?=$dur?>" class="ctrl pause" ></button>
                <div class="caption"><?=$caption?> &mdash; <?=$num?> &mdash; <span class="currtime" id="currtime<?=$num?>"></span> <code><?=$dur?></code></div>
            </div>

            
                <? endif; ?>

            </div>
        </article>
        <?    
            }
        }
    ?>


    </main>
    <footer>
        <section class='player-container'>
            <div class="player">
                <figure>
                    <button id="thaBtn" data-id="" class="ctrl pause" ></button>
                    <figcaption id="player-caption"><!--Gab &mdash; 004 &mdash; <code>00:00:29.36</code>--></figcaption>
                    <input
                        class="seek"
                        type="range"
                        min="0"
                        max="100"
                        value="0"
                        step="0.0001"
                    />
                    <audio controls src="" preload="auto">
                        Your browser does not support the
                        <code>audio</code> element.
                    </audio>
                    <span id="player-duration"></span>
                </figure>
            </div>
        </section>

        <!--
            <? print_r($durations)?>
        -->

    </footer>
</body>

</html>