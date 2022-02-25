<?php
// - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ 
// e stampati a schermo i valori delle relative proprietà 

class Movie {
    public $title;
    public int $year;
    public string $genre;
    public $plot;

    function __construct($_title, $_year, $_genre, $_plot) {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->plot = $_plot;
    }

    public function getMovieInfos() {
        return
        "<h2 class='py-1'> $this->title </h2>" . "<br>" .
        "<div><b> YEAR: </b> $this->year </div>" . "<br>" . 
        "<div><b> GENRE: </b> $this->genre  </div>" . "<br>" . 
        "<h5 class='pt-2' my-2'>  PLOT </h5>" .
        "<p> $this->plot </p>";
    }
}

$vForVendetta = new Movie("V for Vendetta", "2006", "Action, Mystery, Thriller", "Following world war, London is a police state occupied by a fascist government, and a vigilante known only as V (Hugo Weaving) uses terrorist tactics to fight the oppressors of the world in which he now lives. When V saves a young woman named Evey (Natalie Portman) from the secret police, he discovers an ally in his fight against England's oppressors.");
$theGreenMile = new Movie("The Green Mile", "1999", "Drama, Fantasy", "Paul Edgecomb (Tom Hanks) walked the mile with a variety of cons. He had never encountered someone like John Coffey (Michael Clarke Duncan), a massive black man convicted of brutally killing a pair of young sisters. Coffey had the size and strength to kill anyone, but not the demeanor. Beyond his simple, naive nature and a deathly fear of the dark, Coffey seemed to possess a prodigious, supernatural gift. Paul began to question whether Coffey was truly guilty of murdering the two girls. ");
$trainspotting = new Movie("Trainspotting", "2004", "Drama, Comedy", "Heroin addict Mark Renton (Ewan McGregor) stumbles through bad ideas and sobriety attempts with his unreliable friends -- Sick Boy (Jonny Lee Miller), Begbie (Robert Carlyle), Spud (Ewen Bremner) and Tommy (Kevin McKidd). He also has an underage girlfriend, Diane (Kelly Macdonald), along for the ride. After cleaning up and moving from Edinburgh to London, Mark finds he can't escape the life he left behind when Begbie shows up at his front door on the lam, and a scheming Sick Boy follows");
$pulpFiction = new Movie("Pulp Fiction", "2002", "Crime, Drama", "Vincent Vega (John Travolta) and Jules Winnfield (Samuel L. Jackson) are hitmen with a penchant for philosophical discussions. In this ultra-hip, multi-strand crime movie, their storyline is interwoven with those of their boss, gangster Marsellus Wallace (Ving Rhames); his actress wife, Mia (Uma Thurman); struggling boxer Butch Coolidge (Bruce Willis) ; master fixer Winston Wolfe (Harvey Keitel) and a nervous pair of armed robbers, 'Pumpkin' (Tim Roth) and 'Honey Bunny' (Amanda Plummer).");
$fightClub = new Movie("Fight Club", "1999", "Drama, Mystery, Thriller", "A depressed man (Edward Norton) suffering from insomnia meets a strange soap salesman named Tyler Durden (Brad Pitt) and soon finds himself living in his squalid house after his perfect apartment is destroyed. The two bored men form an underground club with strict rules and fight other men who are fed up with their mundane lives. Their perfect partnership frays when Marla (Helena Bonham Carter), a fellow support group crasher, attracts Tyler's attention.");
$fullMetalJacket = new Movie("Full Metal Jacket", "2001", "War, Drama, History", "Stanley Kubrick's take on the Vietnam War follows smart-aleck Private Davis (Matthew Modine), quickly christened 'Joker' by his foul-mouthed drill sergeant (R. Lee Ermey), and pudgy Private Lawrence (Vincent D'Onofrio), nicknamed 'Gomer Pyle', as they endure the rigors of basic training. Though Pyle takes a frightening detour, Joker graduates to the Marine Corps and is sent to Vietnam as a journalist, covering -- and eventually participating in -- the bloody Battle of Hué.");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES OOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-danger">

    <div class="container py-5 mx-auto">
       <h1 class="text-light">MOVIES CARDS</h1>
        <div class="cards-container py-5 d-flex flex-wrap justify-content-between">
            <div class="card col-4 my-2 p-4 bg-light border-danger">
                <div class="movie-infos p-3">
                    <?php echo $vForVendetta->getMovieInfos(); ?>
                </div>
            </div>

            <div class="card col-4 my-2 p-4 bg-light border-danger">
                <div class="movie-infos p-3">
                    <?php echo $theGreenMile->getMovieInfos(); ?>
                </div>    
            </div>

            <div class="card col-4 my-2 p-4 bg-light border-danger">
            <div class="movie-infos p-3">
                    <?php echo $trainspotting->getMovieInfos(); ?>
                </div>
            </div>

            <div class="card col-4 my-2 p-4 bg-light border-danger">
                <div class="movie-infos p-3">
                    <?php echo $pulpFiction->getMovieInfos(); ?>
                </div>
            </div>

            <div class="card col-4 my-2 p-4 bg-light border-danger">
                <div class="movie-infos p-3">
                    <?php echo $fightClub->getMovieInfos(); ?>
                </div>
            </div>

            <div class="card col-4 my-2 p-4 bg-light border-danger">
                <div class="movie-infos p-3">
                    <?php echo $fullMetalJacket->getMovieInfos(); ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>