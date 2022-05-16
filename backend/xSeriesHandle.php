<?php
    require_once 'dao/connect.php';
    $queryModel = "select type_name from productType where class_id = 1;";
    $resultModel = $conn -> query($queryModel);

    $modelList = array();
    if($resultModel){
        while ($row = $resultModel->fetch_array(MYSQLI_ASSOC)){
            $modelList[] = $row["type_name"];
        }
    }
    $modelSize = sizeof($modelList);
    
    $partQuery = "select imgPath from productPartImg left join productType "
            . "using(type_id) where type_name = 'X3'";
    $resultPart = $conn -> query($partQuery);
    
    $partImgList = array();
    if($resultPart){
        while ($row = $resultPart -> fetch_array(MYSQLI_ASSOC)){
            $partImgList[] = $row["imgPath"];
        }
    }
    $partImgSize = sizeof($partImgList);
    
    $queryInfor = "select len_wid_hei, basic_len, ground_clearance, weight, "
            . "distance, speed, charging from productInfor left join productType"
            . " using(type_id) where type_name = 'X3'";
    $resultInfor = $conn -> query($queryInfor);
    
    $inforList = array();
    if($resultInfor){
        while ($row = $resultInfor -> fetch_array(MYSQLI_ASSOC)){
            $inforList[] = (
                    array(
                        "len_wid_hei" => $row["len_wid_hei"],
                        "basic_len" => $row["basic_len"],
                        "ground_clearance" => $row["ground_clearance"],
                        "weight" => $row["weight"],
                        "distance" => $row["distance"],
                        "speed" => $row["speed"],
                        "charging" => $row["charging"]
                    )
            );
        }
    }
    $inforSize = sizeof($inforList);

    $query = 'select class_id,type_id, colour,colour_value, gradient,image_path,'
        . ' type_name, name, description from productType inner join productClass on '
        . 'productType.class_id = productClass.id inner join '
        . 'productDetail using (type_id) left join colourList '
        . 'using (colour_id)  where type_name = "X3"';
    $result = $conn -> query($query);

    $colour_list = array();
    if($result){
        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            $colour_list[] = (
                        array(
                            "colour" => $row["colour"],
                            "colour_value" => $row["colour_value"],
                            "gradient" => $row["gradient"],
                            "image_path" => $row["image_path"],
                            "type_name" => $row["type_name"],
                            "class_name" => $row["name"],
                            "sub-title" => $row["description"])
                        );
        }
    }
    $result_size = sizeof($colour_list);
    if (isset($_GET['model'])){
        $modelValue = $_GET['model'];
        
        $partQuery = "select imgPath from productPartImg left join productType "
                    . "using(type_id) where type_name = '".$modelValue."'";
        $resultPart = $conn -> query($partQuery);

        $partImgList = array();
        if($resultPart){
            while ($row = $resultPart -> fetch_array(MYSQLI_ASSOC)){
                $partImgList[] = $row["imgPath"];
            }
        }
        $partImgSize = sizeof($partImgList);
        
        $queryInfor = "select len_wid_hei, basic_len, ground_clearance, weight, "
                . "distance, speed, charging from productInfor left join productType"
                . " using(type_id) where type_name = '".$modelValue."'";
        $resultInfor = $conn -> query($queryInfor);

        $inforList = array();
        if($resultInfor){
            while ($row = $resultInfor -> fetch_array(MYSQLI_ASSOC)){
                $inforList[] = (
                        array(
                            "len_wid_hei" => $row["len_wid_hei"],
                            "basic_len" => $row["basic_len"],
                            "ground_clearance" => $row["ground_clearance"],
                            "weight" => $row["weight"],
                            "distance" => $row["distance"],
                            "speed" => $row["speed"],
                            "charging" => $row["charging"]
                        )
                );
            }
        }
        $inforSize = sizeof($inforList);
        
        $query = 'select class_id,type_id, colour,colour_value, gradient,image_path,'
            . ' type_name, name, description from productType inner join productClass on '
            . 'productType.class_id = productClass.id inner join '
            . 'productDetail using (type_id) left join colourList '
            . 'using (colour_id) where type_name = "'.$modelValue.'";';
        $result = $conn -> query($query);

        $colour_list = array();
        if($result){
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                $colour_list[] = (
                            array(
                                "colour" => $row["colour"],
                                "colour_value" => $row["colour_value"],
                                "gradient" => $row["gradient"],
                                "image_path" => $row["image_path"],
                                "type_name" => $row["type_name"],
                                "class_name" => $row["name"],
                                "sub-title" => $row["description"])
                            );
            }
        }
        $result_size = sizeof($colour_list);
    }
    $conn->close();
?>