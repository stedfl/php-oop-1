<?php
include __DIR__ . '/modals/Movie.php';

$movie_1 = new Movie("La Leggenda del pianista sull'oceano", ["drammatico", "musicale", "sentimentale"], 1998, new Crew(["Tim Roth", "Pruitt Taylor Vince"], "Giuseppe Tornatore", "Francesco Tornatore", "Medusa Distribuzione"),"The Legend of 900" );
$movie_1->set_poster("https://m.media-amazon.com/images/I/71aWiw3TB-L._AC_SL1200_.jpg");
$movie_1->set_description();

$movie_2 = new Movie("Moulin Rouge", ["drammatico", "musicale"], 2001, new Crew(["Nicole Kidman", "Ewan McGregor", "John Leguizamo"], "Baz Luhrmann"));
$movie_2->set_poster("https://guidatv.sky.it/uuid/9a244376-d700-461a-be95-9fefdcecb303/cover?md5ChecksumParam=ae779f31a869c5435816fdab4c03890d");
$movie_2->set_description();

$movie_3 = new Movie("Erin Brockovich - Forte come la verità", ["biografico"], 2000, new Crew(["Julia Roberts", "Albert Finney", "Aaron Eckhart"], "Steven Soderbergh", "Danny DeVito", "Universal Pictures"), "Erin Brockovich");
?>