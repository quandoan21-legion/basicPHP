<?php 

/* -------------------------------------------------------------------------- */
/*                               array_filter()                               */
/* -------------------------------------------------------------------------- */
     
    // Array_filter được dùng để có truyền 1 biến hoặc một mảng dữ liệu vào trong 1 function callback nếu function trả về đúng thì biến đó sẽ được trả về mảng  result
    // Kiểu dữ liệu của biến lúc trả về sẽ không bị thay đổi 
    echo "Array_filter()". '<br> <br>';
    function findingPvtsRyan($var) {

        return($var['name'] == "Ryan" && $var['rank'] == "Pvts" );
    }

    $savingPvtsRyan = [

        ["rank" => "Sgts",
         "name" => "Ryan"],

        ["rank" => "Pvts",
         "name" => "Doug"],

        ["rank" => "Lts",
         "name" => "Dan"],

        ["rank" => "Cpt",
         "name" => "Price"],

        ["rank" => "Sgts",
         "name" => "Soap"],

        ["rank" => "Sgts",
         "name" => "Gaz"],

        ["rank" => "Pvts",
         "name" => "Ryan"]

       
    ];
    print_r(array_filter($savingPvtsRyan,"findingPvtsRyan")) . '<br> <br>';


/* -------------------------------------------------------------------------- */

echo "  " . '<br> <br>';

/* -------------------------------------------------------------------------- */
/*                                 array_map()                                */
/* -------------------------------------------------------------------------- */
    // array_map() được dùng để có truyền biến, nột hoặc nhiều mảng dữ liệu vào trong 1 function callback và trả về một dữ liệu hoặc một mảng dữ liệu mới đã được định sẵn trong 
    // function của lập trinhf viên
    echo "Array_map()". '<br> <br>';

    function combatReport($var){
        // đoạn switch case này em không tìm được cách làm cho nó gọn hơn được  anh có thể hỗ trợ em được không  ?
        switch ($var['rank']) {
                     
            case "Pvts":
                switch ($var['name']) {

                    case "Jackson":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                    case "Mellish":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                    case "Caparzo":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                    case "Parker":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                    case "Reiben":
                       return "{$var['rank']} {$var['name']}. Status: Unknown";
                    break;

                    case "Ryan":
                       return "{$var['rank']} {$var['name']}. Status: Survive";
                    break;

                }
                
                break;
                     
            case "PFC":
                switch ($var['name']) {

                    case "Toynbe":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                }
                
                break;

            case "Medic":
                switch ($var['name']) {

                    case "Wade":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                }
                
                break;

            case "Cpl":
                switch ($var['name']) {

                    case "Henderson":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                    case "Upham":
                       return "{$var['rank']} {$var['name']}. Status: Unknown";
                    break;

                }
                
                break;
                     
            case "Sgts":
                switch ($var['name']) {

                    case "Horvath":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                    break;

                    case "Hill":
                       return "{$var['rank']} {$var['name']}. Status: Unknown";
                    break;

                }
                
                break;
                     
                     
            case "Lts":
                switch ($var['name']) {

                    case "Anderson":
                       return "{$var['rank']} {$var['name']}. Status: Unknown";
                    break;

                }
                
                break;
                     
            case "Cpts":
                switch ($var['name']) {
                    
                    case "Miller":
                       return "{$var['rank']} {$var['name']}. Status: Killed In Action";
                        break;

                    case "Hamill":
                       return "{$var['rank']} {$var['name']}. Status: Unknown";
                        break;
                }
                
                break;
                 
            
           
        }
       
    }

    $personelReport = [
        
        ["rank" => "Cpts",
         "name" => "Miller"],

        ["rank" => "Sgts",
         "name" => "Horvath"],

        ["rank" => "Pvts",
         "name" => "Reiben"],

        ["rank" => "Pvts",
         "name" => "Parker"],

        ["rank" => "Pvts",
         "name" => "Jackson"],

        ["rank" => "Pvts",
         "name" => "Mellish"],

        ["rank" => "Pvts",
         "name" => "Caparzo"],

        ["rank" => "Medic",
         "name" => "Wade"],

        ["rank" => "Cpl",
         "name" => "Upham"],

        ["rank" => "Pvts",
         "name" => "Ryan"],

        ["rank" => "Cpts",
         "name" => "Hamill"],

        ["rank" => "PFC",
         "name" => "Toynbe"],

        ["rank" => "Sgts",
         "name" => "Hill"],

        ["rank" => "Lts",
         "name" => "Anderson"],

        ["rank" => "Cpl",
         "name" => "Henderson"]
    ];
    

    echo "<pre>";
		print_r(array_map("combatReport",$personelReport));
	echo "</pre>" . '<br> <br>';
/* -------------------------------------------------------------------------- */



/* -------------------------------------------------------------------------- */
/*                               array_reduce()                               */
/* -------------------------------------------------------------------------- */

    // array_reduce() được dùng để lấy dữ liệu trong mảng và chuyển các kiểu dữ liệu đó trở về dạng string
    // nếu trong mảng không có dữ liệu thì sẽ trả về NULL
    
    echo "array_reduce()". '<br> <br>';
    function myfunction($v1,$v2){
        return $v1 . "-" . $v2;
    }

    $a=array(11,"Cat", 1.123);
    print_r(array_reduce($a,"myfunction")). '<br> <br>';
    echo " ". '<br> <br>';


/* -------------------------------------------------------------------------- */



/* -------------------------------------------------------------------------- */
/*                                   explode                                  */
/* -------------------------------------------------------------------------- */

    // function explore được dùng để biến từng từ trong 1 đoạn dữ liệu string thành dữ liệu trong mảng 
    echo "explode function". '<br> <br>';
    $str = "Saving Private Ryan";
    print_r (explode(" ",$str)). '<br> <br>';
     echo " ". '<br> <br>';

/* -------------------------------------------------------------------------- */



/* -------------------------------------------------------------------------- */
/*                                   implode                                  */
/* -------------------------------------------------------------------------- */

    // function implode được dùng để biến các dữ liệu trong mảng thành 1 đoạn dứ liệu string
    $arr = array('Saving','Private','Ryan');
    echo implode(" ",$arr);
     echo  " ". '<br> <br>';
/* -------------------------------------------------------------------------- */
