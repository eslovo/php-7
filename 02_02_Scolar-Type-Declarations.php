<?php
/**
 * Created by Lebedev Vitaly
 * Email: eslovo@gmail.com
 * Date: 02.06.2019 0:09
 */

include_once dirname(__FILE__).'/layout/header.php';

?>

    <div class="w3-container w3-teal">
        <h1>SCOLAR TYPE DECLARATIONS</h1>
    </div>

    <div class="w3-container">

    <h2>declare(strict_type=1)</h2>

    <ul class="w3-ul w3-hoverable" style="width:30%">
        <li>string</li>
        <li>integer</li>
        <li>array</li>
        <li>float</li>
        <li>bool</li>
    </ul>

    <p>PHP-7 enables declaration of types of vars in functions. When <strong>strict_type</strong> is set to 0 (the default state) all vars getting converted to predifined type. </p>

    <div class="w3-code jsHigh">
        <strong>declare(strict_type=0);</strong><br/><br/>

        function sum(int $a, int $b){<br/>
        echo gettype($a). " " . gettype($b);<br/>
        }<br/>
        sum(2, 3); // all integer<br/>
        sum("2", "3") // all integer<br/>
        sum(2.0, 3.0) // all integer
    </div>

    <p>When <strong>strict_type=1</strong> - PHP throws Errors</p>
        <div class="w3-code jsHigh">
            <strong>declare(strict_type=1);</strong><br/><br/>

            function sum(int $a, int $b){<br/>
            echo gettype($a). " " . gettype($b);<br/>
            }<br/>
            sum(2, 3); // all integer<br/>
            sum("2", "3") // TypeError: Argument must be of the type integer, string given<br/>
            sum(2.0, 3.0) // TypeError: Argument must be of the type integer, float given
        </div>
    </div>
<?php

include_once dirname(__FILE__).'/layout/footer.php';
