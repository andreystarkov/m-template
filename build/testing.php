<?

	$what = $_POST['what'];

	function generateBullshitMenu($rows = 4){
		$words = array("подбородки", "говяжий лук", "сервелат", "добрый артишок", "тесто обезжиренное", "шампиньоны", "ноги", "копыце сытое", "розамарин", "микро-овощи", "масло", "соль для ванн", "лайм", "зелень", "уныние", "тыква", "салат ольивьё", "ботинки");
		$names = array("карпаччо", "салат", "ролл", "паста ", "кремм-суп", "коктейль", "стейк", "бургер", "стакан", "хлебушек", "ризотто");
		$epit = array("поджареный", "нежный", "волшебный", "удивительный", "морской", "эпический", "прекрасный", "пикантный", "королевский");
		for($p=0;$p<$rows;$p++){
			if($p==0){ $class = " first-loaded"; }
			$out .= "<div class='row".$class."'>";
			for($i=0;$i<=2;$i++){
				$content = "";
				for($v=0;$v<=rand(2,3);$v++){
					$content .= $words[rand(0,count($words))].", ".$names[rand(1,count($names))]." ".$epit[rand(1,count($epit))].", ";
				}
				$name = $epit[rand(1,count($epit))]." ".$names[rand(1,count($names))];
				$string = "<div class='col-md-4'><article class='menu-post'><figure><figcaption><div class='menu-link'><div class='img-wrap'><img src='img/sample/".rand(1,3).".jpg' /></div><div class='caption'><b class='name'>".$name."</b><i class='about'>".$content."</i><span class='price'>".rand(150,5999)." р</span></div></div></figcaption></figure></article></div>";
				$out .= $string;
			}
			$out .= "</div>";
		}
		echo $out;
	}

	function generateBullshitMenu2($rows = 4){
		$words = array("подбородки", "говяжий лук", "сервелат", "добрый артишок", "тесто обезжиренное", "шампиньоны", "ноги", "копыце сытое", "розамарин", "микро-овощи", "масло", "соль для ванн", "лайм", "зелень", "уныние", "тыква", "салат ольивьё", "ботинки");
		$names = array("карпаччо", "салат", "ролл", "паста ", "кремм-суп", "коктейль", "стейк", "бургер", "стакан", "хлебушек", "ризотто");
		$epit = array("поджареный", "нежный", "волшебный", "удивительный", "морской", "эпический", "прекрасный", "пикантный", "королевский");
		for($p=0;$p<$rows;$p++){
			if($p==0){ $class = " first-loaded"; }
			$out .= "<div class='row".$class."'>";
			for($i=0;$i<=2;$i++){
				$content = "";
				for($v=0;$v<=rand(2,3);$v++){
					$content .= $words[rand(0,count($words))].", ".$names[rand(1,count($names))]." ".$epit[rand(1,count($epit))].", ";
				}
				$name = $epit[rand(1,count($epit))]." ".$names[rand(1,count($names))];
				$string = "<div class='col-md-4'><article class='menu-post'><figure><figcaption><div class='menu-link'><div class='img-wrap'><img src='img/sample/".rand(1,3).".jpg' /></div><div class='caption'><div class='menu-buttons'><div class='menu-btn vkusno'><span class='icon-basket'></span></div><div class='menu-btn sweet'><span class='icon ot-icon-heart'></span></div></div><b class='name'>".$name."</b><i class='about'>".$content."</i><span class='price'>".rand(150,5999)." р</span></div></div></figcaption></figure></article></div>";
				$out .= $string;
			}
			$out .= "</div>";
		}
		echo $out;
	}

	function generateBullshit($rows = 2){

		$words = array("подбородки", "«появились»", "исключительно", "вкусные", "ну за что", "вследствие", "уменьшения", "лиц", "заданную", "пользователем", "субдукцию","подбородки", "говяжий лук", "сервелат", "добрый артишок", "тесто обезжиренное", "шампиньоны", "ноги", "копыце сытое", "розамарин", "микро-овощи", "масло", "соль для ванн", "лайм", "зелень", "уныние", "тыква", "салат ольивьё", "ботинки","карпаччо", "салат", "ролл", "паста ", "кремм-суп", "коктейль", "стейк", "бургер", "стакан", "хлебушек", "ризотто");
		$names = array("поджареный", "нежный", "волшебный", "удивительный", "морской", "эпический", "прекрасный", "пикантный", "королевский", "новые", "рестораны", "закуски", "блюда", "воисхитительные", "удивительные", "невероятные", "угощения", "и", "рыбные");

		for($p=0;$p<$rows;$p++){
			if($p==0){ $class = " first-loaded"; }
			$out .= "<div class='row".$class."'>";
			for($i=0;$i<=2;$i++){
				$content = "";
				for($v=0;$v<=rand(4,5);$v++){
					$content .= $words[rand(0,count($words))]." ";
				}
				$name = $names[rand(1,count($names))]." ".$names[rand(1,5)];
				$string = "<div class='col-md-4'><article class='blog-post' style='visibility: visible;'><figure><a href='img/samples/".rand(1,3).".jpg' class='single_image'>
                                <div class='blog-img-wrap'>
                                    <div class='overlay'>
                                        <i class='fa fa-search'></i>
                                    </div>
                                    <img src='img/sample/".rand(1,3).".jpg' class='single_image'>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href='#' class='blog-category' data-toggle='tooltip' data-placement='top' data-original-title='See more posts'>".$name."</a></h2>
                            <p><a href='#' class='blog-post-title'>Сегодня, у многих успешно развивающихся компаний при проведении презентаций ".$content." <i class='fa fa-angle-right'></i></a></p>
                            </figcaption>
                        </figure>
                    </article></div>";
				$out .= $string;
			}
			$out .= "</div>";
		}
		echo $out;
	}

	$page = $_POST['page'];

	if($what == "news") {
		generateBullshit(2);
	}
	if($what == "menu"){
		generateBullshitMenu(2);
	}
	if($what == "menu2"){
		generateBullshitMenu2(1);
	}
?>