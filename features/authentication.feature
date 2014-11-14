# Note: This does not yet align 100% with out of the box devise. I will work on that.

Feature: Authentication
    In order to protect my assets stored within a system
    As any user
    I would like to be verified as the rightful owner of those assets through authentication
    
    Scenario: No authenticated user within the system
        Given a user exists with email: "someuser@someuser.com"
        And I am not authenticated
        When I go to the home page
        Then I should not see "Signed in as someuser@somewhere.com."
        And I should see "Username"
        And I should see "Login"
        And I should not see "Sign up"

    Scenario: Login with wrong password or email
        Given I go to the home page 
        And I fill in "Username" with "username"
        And I fill in "Password" with "password"
        When I press "Login"
        Then I should see "Invalid username or password, try again"
    # Scenario: An authenticated user within the system
    #     Given a user exists with email: "someuser@someuser.com", password: "somepassword"
    #     And I am not authenticated

    #     When I go to the sign in page
    #     Then I should not see "Sign up"
    #     And I should see "Forgot your password?"
        
    #     When I fill in "user_email" with "someuser@someuser.com"
    #     And I fill in "user_password" with "somepassword"
    #     And I press "Sign in"
    #     Then I should see "Signed in as someuser@someuser.com."
    #     And I should not see "Sign in"

    # Scenario: Sign in but wrong password and no email address
    #     Given I am not authenticated
    #     When I go to the sign in page
    #     And I fill in "user_email" with "someuser@someuser.com"
    #     And I fill in "user_password" with "somepassword"
    #     And I press "Sign in"
    #     Then I should see "Invalid email or password."
    #     And I should not see "Signed in as someuser@someuser.com."
    #     And the "user_password" field should equal ""
    #     And the "user_email" field should equal "someuser@someuser.com"
