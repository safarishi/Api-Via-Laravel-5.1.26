<?php

class IndexControllerTest extends TestCase
{
    public function testIndex()
    {
        $this->get('v5/articles?column_id=5')
            ->see('"OperType":"5"');
    }
}