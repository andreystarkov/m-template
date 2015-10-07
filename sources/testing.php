<?

	function generateBullshit($rows = 2){

		$words = array("подбородки", "«появились»", "исключительно", "вкусные", "ну за что", "вследствие", "уменьшения", "лиц", "заданную", "пользователем", "субдукцию");
		$names = array("новые", "рестораны", "закуски", "блюда", "воисхитительные", "удивительные", "невероятные", "угощения", "и", "рыбные");

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

	sleep(2);

	generateBullshit(2);

?>