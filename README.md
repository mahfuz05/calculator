## TASK
For our public facing application, we want to build a calculator based on emojis. As a proof
of concept, you need to build the app to support the initial set of calculations:

    👽 Addition (Alien U+1F47D)
    💀 Subtraction (Skull U+1F480)
    👻 Multiplication (Ghost U+1F47B)
    😱 Division (Scream U+1F631)
Acceptance criteria
    When I view the website
    And I want to calculate 1 - Alien - 1
    Then I should receive the response 2

When I view the website
    And I want to calculate 10 - Skull - 5
    Then I should receive the response 5

When I view the website
    And I want to calculate 2 – Ghost - 2
    Then I should receive the response 4

When I view the website
    And I want to calculate 2 – Scream - 2
    Then I should receive the response 1
    
Additional details
● Use symphony/laravel or plain PHP programming language
● Use React or jQuery library
● You MUST include a readme file explaining your approach and steps required to run
your app.
● A minimum UI should include a form with two text fields for operands and a dropdown
list for the operator.
● The answer should be calculated server-side and returned via JSON over HTTP protocol.
● You may choose different symbols 

## How to Run

1. curl -s "https://laravel.build/example-app" | bash
2. cd example-app
3. ./vendor/bin/sail up
4. ./vendor/bin/sail test
