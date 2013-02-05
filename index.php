<!DOCTYPE html>
<?php require_once("class_logic.php"); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ATM Machine - Demo</title>
        <script type="text/javascript">
            function validate(){
                var regex = /^-?(?:\d+|\d*\.\d+)$/;
                var result = true;
                var amount = document.getElementById("amount").value;
                console.log(amount);
                if(!regex.test(amount)){
                    alert("Error : Entered amount is invalid");
                    result = false;
                }
                if(isNaN(amount)){
                    
                }
                if(amount<0){
                    alert("Error : Entered amount is invalid");
                    result = false;                   
                }
                return result;
            }
        </script>
    </head>
    <body>
        <div style="margin:auto; border: 1px solid #ccc; width:50%; height:500px; padding:5px;">
            <center><h1><u>ATM Machine</u></h1>
                <form action="" method="post" onsubmit="return validate();">
                    Enter Amount : <input type="text" id="amount" name="amount" value="" />
                    <input type="submit" name="submit" value="Submit" /><br/>
                </form>
            </center>
            <?php
            $logic = new logic();
            if (isset($_POST['amount'])) {
                echo "<h3>Result : </h3>";
                $result = $logic->calculateAmount($_POST['amount']);
                if (!empty($result)) {
                    $i = 0;
                    foreach ($result as $res):
                        if ($res) {
                            echo $res . " x " . $logic->_denominations_array[$i] . "<br/>";
                        }
                        $i++;
                    endforeach;
                } else {
                    echo "<font color='red'><h4>Invalid Amount</h4></font>";
                }
            }
            ?>
        </div>
    </body>
</html>