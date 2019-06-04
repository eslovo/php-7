<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 04.06.2019
 * Time: 11:08
 */



include_once dirname(__FILE__).'/layout/header.php';
?>

    <div class="w3-container w3-teal">
        <h1>Null Coalescing Operator: <strong>??</strong></h1>
    </div>

    <p>Returns first value that exists and is not NULL</p>

    <div class="w3-container">

        <div class="w3-code jsHigh">
            <strong>$value = $user_value ?? $default_value;</strong><br/><br/>

            // Same as:
            if(isset($user_value)){<br/>
            &nbsp;&nbsp;&nbsp;$value = $user_value;<br/>
            } else {<br/>
            &nbsp;&nbsp;&nbsp;$value = $default_value;<br/>
            }<br/>
        </div>

        <p><stront>echo $page_title ?? 'My Page Title';</stront></p>
        <p><stront>$username = $_POST['username'] ?? 'guest';</stront></p>
        <p><stront>$value = $a ?? $b ?? $c ?? $d ?? $default;</stront></p>


    </div>
<?php

include_once dirname(__FILE__).'/layout/footer.php';
