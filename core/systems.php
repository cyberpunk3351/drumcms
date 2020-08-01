<?php
  // function checkId(string $id): bool {
  //   return (bool)preg_match('/^[1-9][0-9]\*$/', $id);
  // }



  function template(string $path, array $vars = []) : string{
		$systemTemplateRenererIntoFullPath = "views/$path.php"; 
		extract($vars);
		ob_start();
		include($systemTemplateRenererIntoFullPath);
    return ob_get_clean();
    // return '';
  }
  
	function parseUrl(string $url, array $routes) : array{
		$res = [
			'controller' => 'errors/e404',
			'params' => []
		];
		
		foreach($routes as $route){
			$matches = [];

			if(preg_match($route['test'], $url, $matches)){
				$res['controller'] = $route['controller'];

				if(isset($route['params'])){
					foreach($route['params'] as $name => $num){
						$res['params'][$name] = $matches[$num];
					}
				}

				break;
			}
		}


		return $res;
	}

?>