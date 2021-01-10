
    <?php

    /*=============================================
    =           Biến trong PHP 			          =
    =============================================*/
    
        $firstVariable = "This is a variable of PHP.";
        $secondVariable = "This is a second variable of PHP.";	

        echo $firstVariable . '<br> <br>';        
        echo $secondVariable. '<br> <br>';

     // PHP data types 
     
        $varsPHP = [

	        [ 
	        	"varName" => "String",
	        	"varValue" => "Apple"
	        ],

	        [ 
	        	"varName" => "Integer",
	        	"varValue" => 123 
	        ],

	        [ 
	        	"varName" => "Float",
	        	"varValue" => 12.3
	        ],

	        [ 
	        	"varName" => "Boolean",
	        	"varValue" => true    
	        ],

	        [ 
	        	"varName" => "Null",
	        	"varValue" => null
	        ],
	        

        ]; 
     	foreach ($varsPHP as $varPHP) {
     		echo "\"{$varPHP['varValue']}\" is a \"{$varPHP['varName']}\" variable." . '<br> <br>';
     	}
    



    /*=====  End of Biến trong PHP  ======*/
    
    
    /*=============================================
    =PHP Câu lệnh If ... Else, Switch, và Toán Tử =
    =============================================*/
    

    	// if else 
    	
    	$varQuantities = count($varsPHP);
    	if ($varQuantities<=5) {
    		$result = 1;
    	}
    	else{
    		$result = 0;
    	}

    	// switch
    	
    	switch ($result) {
    		case 1:
    			echo "Số lượng biến trong mảng là {$varQuantities}. Nên sử dụng If Else". '<br> <br>';
    			break;

    		case 0:
    			echo "Số lượng biến trong mảng là {$varQuantities}. Nên sử dụng Switch". '<br> <br>';
    			break; 		
    		
    	}
		// khi đối tượng tiếp xúc có quá nhiều trường hợp hoặc nhiều kết quả thì nên dùng switch còn lại nên dùng If Else


    
    /*=====  End of Section PHP Câu lệnh If ... Else, Switch, và Toán Tử   ======*/
       
        
    





	/*=============================================
	=            Vòng Lặp Trong PHP         =
	=============================================*/
	

    //  Vòng Lặp For cho số chạy từ 1 đến 10
    	
    	echo "Vòng Lặp For cho số chạy từ 1 đến 10". '<br>';
    	for ($i= 0; $i <= 10 ; $i++) { 
    		echo $i. '<br>';

    	}
		 
	// Vòng lặp while cho chạy random 1 mảng cho tới khi nhận được số chỉ định
		echo "Vòng lặp while cho chạy random 1 mảng cho tới khi nhận được số chỉ định". '<br> <br>';
		$numbWanted = rand(1,10);
		echo "Số chỉ định là  {$numbWanted}". '<br><br>';
		
		while (($ranNumb = rand(1,10)) != $numbWanted) {
			echo "Bạn vừa quay ra {$ranNumb}. Chúc bạn may mắn lần sau. " . '<br>';
		}

		echo "Chúc mừng bạn đã quay ra {$ranNumb} và trúng giải độc đắc." . '<br> <br>';

	// Vòng lặp while cho chạy từ 10 về 0
	
		echo "Vòng lặp while cho chạy từ 10 về 0". '<br> <br>';

		$x = 10;

		do {
		  echo "The number is: $x <br>";
		  $x--;
		} while ($x >= 0);



	// Sựu khác biệt giữa break và continue là break sẽ phá vỡ vòng lặp khi có một điều kiện đúng còn continue sẽ tiêps tục vòng lặp và bỏ qua giá trị đấy 
	
	// Vòng lặp foreach cho hiện mảng varsPHP cho cho tới khi gặp hàm có giá trị varName là Float thì dừng lại 	
	
		echo "Vòng lặp foreach cho hiện mảng varsPHP cho cho tới khi gặp hàm có giá trị varName là Float thì dừng lại ". '<br> <br>';

		$varWanted = "Float";

		foreach ($varsPHP as $varPHP) {

			if ($varPHP['varName'] === $varWanted) {
				break;
			}
			echo "\"{$varPHP['varValue']}\" is a \"{$varPHP['varName']}\" variable." . '<br> <br>';
			
		}




	// Vòng lặp foreach cho hiện mảng varsPHP cho cho tới khi gặp hàm có giá trị varName là Float thì bỏ qua giá trị đó	
	
		echo "Vòng lặp foreach cho hiện mảng varsPHP cho cho tới khi gặp hàm có giá trị varName là Float thì bỏ qua giá trị đó	 ". '<br> <br>';

		$varWanted = "Float";

		foreach ($varsPHP as $varPHP) {

			if ($varPHP['varName'] === $varWanted) {
				continue;
			}
			echo "\"{$varPHP['varValue']}\" is a \"{$varPHP['varName']}\" variable." . '<br> <br>';
			
		}

	
	
	/*=====  End of Vòng Lặp Trong PHP  ======*/
	


	/*=========================================
	=            Dumping trong PHP            =
	=========================================*/
	
		// Có 3 cách để in ra 1 mảng giá trị trong php 
		// Cách 1:Dùng print_r
			echo "Có 3 cách để in ra 1 mảng giá trị trong php ". '<br> <br>';
			echo "Cách 1:Dùng print_r ". '<br> <br>';

			echo "<pre>";
			print_r($varsPHP);
			echo "</pre>";

		// Cách 2:Dùng var_dump 
			echo "Cách 2:Dùng var_dump  ". '<br> <br>';
			echo '<pre>' , var_dump($varsPHP) , '</pre>';

		// Cách 3:Dùng vòng lặp (While, Foreach, For...)
			echo "Cách 3:Dùng vòng lặp (While, Foreach, For...)  ". '<br> <br>';
			foreach ($varsPHP as $varPHP) {

			if ($varPHP['varName'] === $varWanted) {
				continue;
			}
			echo "\"{$varPHP['varValue']}\" is a \"{$varPHP['varName']}\" variable." . '<br> <br>';
			
		}

		// Thẻ  <pre></pre> được dùng trong hàm để giữ nguyên format trong source code 
	/*=====  End of Dumping trong PHP  ======*/
	

	/*==========================================
	=            Function trong PHP            =
	==========================================*/
	
	// tác dục của function là lấy dữ liệu vào và thực hiện các thao tác xử lý đã được lập trình sẵn  
	
	/*----------  Tạo function myFullName có arguments là $firstName và $lastName là các args bắt buộc  ----------*/
	
	function myFullName($firstName, $lastName, $lackArg = 'Nhập thiếu dữ liệu rồi') {

		if (($firstName) === '') {
			return $lackArg;
		}
		
		return "{$firstName} {$lastName}";		
		
	}

	$myFullName = myFullName('Quan', 'Doan');
	echo $myFullName. '<br><br>';

	/*---------- End of  Tạo function myFullName có arguments là $firstName và $lastName là các args bắt buộc  ----------*/



	/*----------  Tạo function myFullName có argument $firstName là một optional   ----------*/

	function myFullName2($firstName, $lastName) {

		if (($firstName) === '') {
			return $lastName;
		}
		
		return "{$firstName} {$lastName}";		
		
	}

	$myFullName2 = myFullName2('', 'Doan');
	echo $myFullName2. '<br><br>';


	/*----------  End of Tạo function myFullName có argument $firstName là một optional   ----------*/

	/*----------  Tạo function myFullName nhận vào args $firstName và $lastName và  là một function có giá trị trả về   ----------*/

	function getFirstName($firstName) {
		
		return $firstName;		
		
	}

	$firstName = getFirstName('Quan');

	function getlastName($lastName) {
		
		return $lastName;		
		
	}

	$lastName = getlastName('Doan');


	function myFullName3($firstName, $lastName) {
		
		return "{$firstName} {$lastName}";		
		
	}

	$myFullName3 = myFullName3($firstName, $lastName);
	echo $myFullName3. '<br><br>';


	/*----------  End of Tạo function myFullName nhận vào args $firstName và $lastName và  là một function có giá trị trả về   ----------*/
	
	

	/*=====  End of Function trong PHP  ======*/
	
