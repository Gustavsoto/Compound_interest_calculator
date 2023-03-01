<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div>
        <div div class="row align-items-center" style="height: 100vh; background: #416d16;">
            <div class="mx-auto col-10 col-md-8 col-lg-6" style="border-radius: 25px;
        background: #73AD21;
        padding: 20px;
        width: 800px;
        height: auto;">
                <?php
                    $name = $_POST['name'];
                    $amount = $_POST['amount'];
                    $weeks = $_POST['weeks'];
                    $percentage = calculate_percent($name);
                    $comp_interest = get_compound_interest($amount, $weeks, $percentage);
                    echo "<h3> Hello, $name </h3>";
                    echo "<h3> Your borrowed: $amount euros </h3>";
                    echo "<h3> The amount with interest will have to be returned after $weeks weeks.</h3>";
                    echo "<h3> You will have to repay: $comp_interest euros</h3>";
                    print_weekly_pay($amount, $weeks, $percentage);

                    function calculate_percent($name){
                        $percent = 0.2;
                        $names = explode(" ",$name);
                        $max = sizeof($names);
                        $vowels = array("a", "e", "i", "o", "u");
                        for($x = 0; $x < $max; $x++){
                        $letters = str_split($names[$x]);
                        if(in_array($letters[1], $vowels) && in_array($letters[2], $vowels)){
                            $percent = 0.1;
                            break;
                        }
                        }
                        return $percent;
                    }
                    function get_compound_interest($amount, $weeks, $percentage){
                        $end_cost = $amount * (1 + $percentage)**$weeks;
                        return $end_cost;
                    }
                    function print_weekly_pay ($amount, $weeks, $percentage){
                        $old_increment = $amount;
                        for($i = 1; $i <= $weeks; $i++){
                        $current_week = (string) $i;
                        if(str_ends_with($current_week, '1')){
                            $current_week .= "st";
                        } else if (str_ends_with($current_week, '2')){
                            $current_week .= "nd";
                        } else if (str_ends_with($current_week, '3')){
                            $current_week .= "rd";
                        } else {
                            $current_week .= "th";
                        }
                        $increment = get_compound_interest($amount, $i, $percentage) - $old_increment;
                        echo "<h3> In the $current_week week, the amount will increase by $increment euro</h3>";
                        $old_increment = $old_increment + $increment;
                        }
                    }
                ?>
            </div>
        </div>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>