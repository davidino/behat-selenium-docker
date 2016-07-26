<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When /^I search for "([^"]*)"$/
     */
    public function iSearchFor($key)
    {
        $this->fillField("s", $key);
        $this->pressButton("Search");
    }
    /**
     * @Given /^I am on blogs page$/
     */
    public function iAmOnBlogsPage()
    {
        $this->visit("/blog");
    }
}
