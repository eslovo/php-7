<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 14.06.2019
 * Time: 17:08
 */

namespace test\test;

class Test implements ITest
{

    /**
     * @param string $baz
     * @return string
     */

    public function bar (string $baz) : string
    {
        return __METHOD__.' got param: '.$baz;
    }
}