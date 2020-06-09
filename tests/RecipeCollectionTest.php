<?php

use PHPUnit\Framework\TestCase;

class RecipeCollectionTest extends TestCase
{
    /** @test */
    function canBeWithEmptyTitle()
    {
        $recipeCollection = new RecipeCollection();

        $this->assertInstanceOf(RecipeCollection::class, $recipeCollection);

        $this->assertEquals('', $recipeCollection->getTitle());
    }

    /** @test */
    function canBeWithTitle()
    {
        $recipeCollection = new RecipeCollection("Treehouse Recipes");

        $this->assertEquals("Treehouse Recipes", $recipeCollection->getTitle());
    }
}
