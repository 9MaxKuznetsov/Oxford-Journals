<?php
require_once "db.php";
if($_GET['click']){
	$q = strip_tags($_GET['q']);

		$arr = explode(' ', $q);
		if(!empty($arr[0])) $resarr['title'] = $arr[0];
		if(!empty($arr[1])) $resarr['text'] = $arr[1];
		$like = '';
		if(count($resarr) > 0){
			foreach($resarr as $key => $value){
				$like .= "`$key` LIKE '%$value%' AND ";
			}
		}
		if(($pos = strpos($like, 'AND'))!== false){
			$like = substr($like, 0, -strlen('AND '));
		}
		$where = "WHERE $like";
		$sql = "SELECT * FROM `articles` $where";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				while($row = mysqli_fetch_assoc($res)){
					$data[] = $row;
				}
			}else{
				$data = 'Нечего не найдено';
			}
		}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Oxford Journals - Max Kuznetsov</title>
  <link rel="preload" href="fonts/opensans.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="fonts/opensansbold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="fonts/opensanslight.woff2" as="font" type="font/woff2" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,400i,700&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header class="header">
    <div class="header-wrapper">
      <ul class="header-list">
        <li class="header-list__item">
          <div class="header__menu">
            <ul class="actions-list">
              <li class="actions-list__item">Sign In</li>
              <li class="actions-list__item">Sign Up</li>
            </ul>
          </div>
        </li>
        <li class="header-list__item header-list__item--logo">
          <div class="header__logo">
            <a class="header__logo-link" href="index.html">
              <h1>
              <span class="visually-hidden">Oxford Journals</span>
              <picture class="header__picture">
                <source media="(min-width: 960px)" srcset="img/logo-full.svg">
                <img class="header__image" src="img/logo.svg" height="45" width="330" alt="Oxford Journals" />
              </picture>
            </h1>
            </a>
          </div>
        </li>
        <li class="header-list__item">
          <div class="search">
            <button class="search__button search__button--show"></button>
			<form name="" action="" method="GET">
			<table>
			<tr>
					<td><input class="search__input search__input--show" type="text" name="q" placeholder="Search: Start typing your text here"/></td>
				<td><input type="submit" name="click" ></td>
			</tr>
			</table>
			</form>
            <button class="search__button-close search__button-close--show"></button>
          </div>
        </li>
        <li class="header-list__item burger">
          <button class="burger__button"></button>
        </li>
      </ul>
      <nav class="header__nav header__nav--show">
        <div class="header__nav-wrapper">
          <ul class="nav-list">
            <li class="nav-list__item"><a class="nav-list__link" href="#">Journals A to Z</a></li>
            <li class="nav-list__item"><a class="nav-list__link" href="#">Journals by Subject</a></li>
            <li class="nav-list__item"><a class="nav-list__link" href="#">Customer Servives</a></li>
            <li class="nav-list__item"><a class="nav-list__link" href="#">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main class="main">
    <section class="search">
       <ul class="news-list">
		<?php
		
			if(is_array($data)){ ?>
				<?php for($i = 0; $i < count($data); $i++){ ?>
					<li >
					  <a class="promo-item promo-item--full" href="#">
						<h2 class="promo-item__header" style='color:blue'><?=$data[$i]['title']?></h2>
						<p class="promo-item__description">
							<?=$data[$i]['text'];?>
						</p>
					  </a>
					  <hr >
					</li>
				<?php } ?>
				  
			
			<?}else{?>
					<li>
					  <a class="promo-item promo-item--full" href="#">
						<h2 class="promo-item__header">Нечего не найдено</h2>
						<p class="promo-item__description">
							По вашему запросу к сожалению нечего не найдено!
						</p>
					  </a>
					  <hr >
					</li>
			<?}?>
		
   </ul>
    </section>
  </main>
  <footer class="footer">
    <div class="footer-wrapper">
      <p class="footer__description"><span>Oxford</span> University Press is a department of the University of Oxford. It furthers the University's objective of excellence in research, scholarship, and education by publishing worldwide.</p>
      <img src="img/logo-footer.svg" alt="Oxford Journals" class="footer__logo" width="150" height="42">
    </div>
  </footer>
  <script src="js/menu.js"></script>
  <script src="js/search.js"></script>
</body>
