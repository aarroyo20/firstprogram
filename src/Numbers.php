<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2/11/2019
 * Time: 3:04 PM
 */
declare(strict_types=1);
final class Numbers
{
  private $numbers;

  private function __construct(string $numbers)
  {
    $this->ensureIsValidNumber($numbers);
    $this->numbers = $numbers;
  }
    public static function fromString(string $numbers):self
    {
      return new self($numbers);
    }
    public function __toString():string
    {
      return $this->numbers;
    }
    private function ensureIsValidNumber(string $numbers):void
    {
      if (!filter_var($numbers,filter:FILTER_VALIDATE_NUMBERS)) {
        throw new InvalidArgumentException(
            sprintf(
                '"%s" is nto a valid number',
                $numbers
            )
        );
      }
    }

}

?>

