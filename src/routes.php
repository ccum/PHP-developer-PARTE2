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
})->setName('employees');

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
})->setName('employeeDetail');

$app->get('/webservice/searchByRangeSalary/{min}/{max}', function ($request, $response, $args){
    
	$min = floatval($args['min']);
	$max = floatval($args['max']);
    $str = file_get_contents(__DIR__ . '/employees.json');
	$listEmployees = (array)json_decode($str,TRUE);
	$listResult = array();
	foreach ($listEmployees as $employee)
	{
   		$tempSalary = str_replace("$", "", $employee["salary"]);
   		$tempSalary = floatval(str_replace(",", "", $tempSalary));

   		$this->logger->info("salario float '/' ". $tempSalary);
    	if($tempSalary > $min and $tempSalary < $max)
    	{
    		array_push($listResult, (array)$employee);

		}
	}
	return $this->renderer->render($response, 'searchByRangeSalary.xml', ["listResult" => $listResult]);
});
