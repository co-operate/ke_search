Feature: Basic search
  As a website visitor,
  I want to use a fulltext search
  in order to find content on the website.

  Scenario: Looking for a search form
    Given I am on "/search/default-search"
    Then I should see a "#ke_search_sword" element
    
  Scenario: Searching for a single word
    Given I am on "/search/default-search"
    And fill in "tx_kesearch_pi1[sword]" with "Pelican"
    Then I should see "Pelican From Wikipedia"
