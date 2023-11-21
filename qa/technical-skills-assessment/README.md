# Technical Skills Assessment for Quality Assurance Officer 

**Must Do: Test case**
1. Let’s say you are in a team focused on building a time tracking software just like this one. [https://www.toptal.com/project-managers/tomato-timer](https://www.toptal.com/project-managers/tomato-timer)​ (Note: this is just the site for reference/visualization)

**Currently, a user can login, add an activity and start tracking the time right now.** As an QA officer for this project, you are required to prepare test case scenarios for a new feature. The feature is the introduction of a technique called **Pomodoro** within an already built start stop timer.

Here is the feature story for the application. As a user, I would like to be able to use the pomodoro technique of burst and break by default whenever I start a timer.

**Acceptance Criteria**
- The very first burst should start automatically when I start the timer.
- The length of the burst would be 25 minutes at start.
- Button should function as it is named i.e Start, Stop and Reset
- This should also trigger a notification that says: _“It's burst time. Stay focused!”_
- 30 seconds before the burst, there should be another browser notification: _“Your break begins in 30 seconds. Wrap up!”_
- After 30 seconds, the burst gets over and the break begins.
- Once the timer reaches to 0s the current burst time, Switch to the break tab duration of 5 minutes.
- The timer starts counting down for the break. There is another notification: _“The break has begun. Please stop working and go have fun!”_
- Once the break is over, the timer should switch to Pomodoro again.
- At this phase, User should be moved to Pomodoro tab and the break counter should not be visible.
- However, the countdown doesn't begin until the user comes back and actually clicks the **Start** button.
- Once the user starts the second burst, the same process is followed and next break starts after another 25 minutes.


**2. Automation test (Bonus points)**

Requirement:

- Use Selenium with any language (JAVA prefered) to automate following cases: 
- - [TestSite](https://the-internet.herokuapp.com/)
- Create driver setup and teardown function
- Create function for each test cases
    
A. WAPtoautomateloginpagefrom“BasicAuth”pageandvalidate.User:admin Password:admin

B. WAPtoautomate“Checkboxes”pagebytickingboxesandvalidatingit.

