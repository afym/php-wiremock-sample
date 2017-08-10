<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $config = new \Afym\Operations\Application\Configuration("/tmp/test.json");
        $app = new ApplicationV1($config);

        $response = $app->addMessageResponse(1, 2);

        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    private function createTestJson() {

        file_put_contents("/tmp/test.json","{
  \"credentials\" : {
    \"oauth\" : {
      \"user\" : \"sosalakcouriosasakapearson\",
      \"password\" : \"wathsadsyouawjwatch\"
    }
  },
  \"operations\" : {
    \"wsdl\" : \"http://www.dneonline.com/calculator.asmx?WSDL\"
  },
  \"messages\" : {
    \"endpoint\" : {
      \"math\" : \"http://numbersapi.com/{number}/math\",
      \"trivia\" : \"http://numbersapi.com/{number}\"
    }
  }
}");
    }
}