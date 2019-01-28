<?php

class {replace}Test extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->json('POST', '/user', array('name' => 'Sally'))
            ->seeJson(array(
                'created' => true,
            ));
    }
}