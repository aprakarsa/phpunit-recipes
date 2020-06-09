<?php

use PHPUnit\Framework\TestCase;

class RecipesTest extends TestCase
{
    /** @test */
    function canBeCreatedWithEmptyTitle()
    {
        $recipe = new Recipe();

        $this->assertInstanceOf('Recipe', $recipe);
        $this->assertEquals('', $recipe->getTitle());
    }

    /** @test */
    function addIngredientMustReceivedValidAmount()
    {
        $this->expectException(InvalidArgumentException::class);

        $recipe = new Recipe();

        $recipe->addIngredient("garlic", "two");
    }

    /** @test */
    function addIngredientMustReceivedValidMeasurement()
    {
        $this->expectExceptionMessage('Please enter a valid measurement: tsp, tbsp, cup, oz, lb, fl oz, pint, quart, gallon');

        $recipe = new Recipe();

        $recipe->addIngredient("garlic", 3, "kg");
    }

    /** @test */
    function canCallRecipeDirectly()
    {
        $recipe = new Recipe();

        $this->assertStringContainsString('The following methods are available for objects of this class', $recipe);
    }
}
