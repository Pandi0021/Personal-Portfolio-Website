
        <?php
         $conn = mysqli_connect("localhost","id20319582_pandi","IBvFm^J(=Nj()wN9","id20319582_ppw");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        } 
        $name =  $_REQUEST['names'];
    
    
     $sql = "INSERT INTO zite VALUES ('$name' )";
         
        if(mysqli_query($conn, $sql)){
     echo("");
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ZITE HOME!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<header class="showcase">
			<div class="showcase-top">
				<img src="logo.png" alt="" />

		        <a href="../index.php">ραи∂ι•🦋</a>
			</div>
			<div class="showcase-content">
				<h1>Web Sites</h1>
				<p>Use (VPN)</p>
				<a href="https://isaimini.vip/" class="btnli"
					>Isaimini <i class="fas fa-chevron-right btn-icon"></i
				></a>
				<a href="https://tamilprint.sardse.com/" class="btnli"
					>Tamilprint <i class="fas fa-chevron-right btn-icon"></i
				></a>
				
				<a href="https://moviesda3.com/tamil-2022-movies/" class="btnli"
					>Moviesda<i class="fas fa-chevron-right btn-icon"></i
				></a>

               <a href="https://tamilyogi.love/" class="btnli"
					>Tamilyogi<i class="fas fa-chevron-right btn-icon"></i
				></a>
               <a href="https://dvdplay.ink/" class="btnli"
					>dvdplay<i class="fas fa-chevron-right btn-icon"></i
				></a>
				               <a href="https://tamilgun.news/" class="btnli"
					>tamilgun<i class="fas fa-chevron-right btn-icon"></i
				></a>
				               <a href="https://yts.mx/" class="btnli"
					>yts.mx<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://ww3.5movierulz.ws/tamil-movie-free/" class="btnli"
					>5movierulz<i class="fas fa-chevron-right btn-icon"></i
				></a>				               <a href="https://ww3.putlockers.li/" class="btnli"
					>putlockers<i class="fas fa-chevron-right btn-icon"></i
				></a>				               <a href="https://ww4.1337x.buzz/" class="btnli"
					>1337x<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://filepursuit.com/" class="btnli"
					>filepursuit<i class="fas fa-chevron-right btn-icon"></i
				></a>
				
                <h1>Telegram</h1>
				<p>Use (VPN)</p>
				<a href="https://t.me/+QIopnG6tjK5hNmM1" class="btnli"
					>Movielink<i class="fas fa-chevron-right btn-icon"></i
				></a>
				<a href="https://t.me/M2LGROUPz2" class="btnli"
					>M2LGROUPzbot<i class="fas fa-chevron-right btn-icon"></i
				></a>
			
				<a href="https://t.me/TGMovies2Bot" class="btnli"
					>tgmovies2bot<i class="fas fa-chevron-right btn-icon"></i
				></a>
								<a href="https://t.me/tvseriezzz_group" class="btnli"
					>Allinonebot<i class="fas fa-chevron-right btn-icon"></i
				></a>
				
				<h1>Animes</h1>
	            <a href="https://www.crunchyroll.com/" class="btnli"
					>crunchyroll<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://9anime.vc/" class="btnli"
					>9anime<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://www.funimation.com/" class="btnli"
					>funimation<i class="fas fa-chevron-right btn-icon"></i
				></a>				               <a href="https://www1.gogoanime.ar/" class="btnli"
					>gogoanime<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://animedao.to/" class="btnli"
					>animedao<i class="fas fa-chevron-right btn-icon"></i
				></a>				               <a href="https://kissanime.com.ru/" class="btnli"
					>kissanime<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://www.contv.com/category-movie/159/anime/" class="btnli"
					>contv.com<i class="fas fa-chevron-right btn-icon"></i
				></a>
								               <a href="https://www.masterani.one/" class="btnli"
					>masterani.one<i class="fas fa-chevron-right btn-icon"></i
				></a>				               <a href="https://www.hulu.com/hub/anime" class="btnli"
					>hulu.com<i class="fas fa-chevron-right btn-icon"></i
				></a>			
		
                <h1>All In One Site</h1>
               <a href="https://unblockit.pet/" class="btnli"
					>Unblockit<i class="fas fa-chevron-right btn-icon"></i
				></a>
			</div>
			</header>
	
  <script  src="./script.js"></script>

</body>
</html>
