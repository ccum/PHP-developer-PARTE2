<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/employees', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $str = file_get_contents(__DIR__ . '/employees.json');
	$listEmployees = (array)json_decode($str,TRUE);
	return $this->renderer->render($response, 'employees.phtml', ["listEmployees" => $listEmployees]);
});
$app->get('/employeDetail/{id}', function ($request, $response, $args){
    $str = file_get_contents(__DIR__ . '/employees.json');
	$listEmployees = (array)json_decode($str,TRUE);
	$employeeReturn;

	foreach ($listEmployees as $employee)
	{
    	
    	if($employee['id']== $args['id']){
    		$employeeReturn= $employee;

    		
		}
	}
	$this->logger->info("Buscar '/' ". $employeeReturn['name']);
	return $this->renderer->render($response, 'employeDetail.phtml', ["employeeReturn" => $employeeReturn]);
});
