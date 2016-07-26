Feature: Blog Search
  In order to search blogs
  As a sauce user
  I need see blogs

  @javascript
  Scenario: Search Behat Blogs
    Given I am on "/wiki/Pagina_principale"
    When I fill in "search" with "behat"
    And I press "go"
    Then I should see "Behat"

  Scenario: Search Behat Blogs
    Given I am on "/wiki/Pagina_principale"
    When I fill in "search" with "php"
    And I press "go"
    Then I should see "php"