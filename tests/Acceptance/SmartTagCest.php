<?php
namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SmartTagCest
{
    public function _before(AcceptanceTester $I) //run each test
    {
        // open html file
        $I->amOnPage('/index.html'); 
        $I->waitForElement('#postContentInput', 3); // Wait for textarea to appear
    }

    // Test that WordPress-related keywords trigger correct tag suggestions
    public function wordpressKeywordDetection(AcceptanceTester $I)
    {
        // Enter text containing the keyword "wordpress"
        $I->fillField('#postContentInput', 'I love using wordpress for my website');
        // click suggest tags button
        $I->click('#suggestTagsButton');
        // check if the tags are present
        $I->see('WordPress');
        $I->see('Themes');
        $I->see('Plugins');
    }

    // Test that marketing-related keywords are suggested correctly
    public function marketingCaseInsensitive(AcceptanceTester $I)
    {
        // Enter text containing the keyword "marketing"
        $I->fillField('#postContentInput', 'MARKETING campaigns need good planning');
        $I->click('#suggestTagsButton');
        // check if the tags are present
        $I->see('Marketing');
        $I->see('SEO');
        $I->see('Content');
    }

    // Test that both keywords are present and WordPress takes priority
    public function bothKeywordsPresentPriority(AcceptanceTester $I)
    {
        // Enter text containing both keywords
        $I->fillField('#postContentInput', 'Using wordpress for marketing campaigns');
        $I->click('#suggestTagsButton');
        $I->see('WordPress');
        $I->see('Themes');
        $I->see('Plugins');
        $I->dontSee('Marketing'); // Only if WordPress takes priority   
    }
}
