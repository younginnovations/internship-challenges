## Petroleum Report

### What you need to do

* If you haven’t already, take a [git class in codeschool](https://www.simplilearn.com/learn-git-basics-skillup).
* Once complete, create a private repo called “yipl-intern-petroleum-report” in [bitbucket](https://bitbucket.org)
* Solve the problem detailed below
* Push your code to the repo (make sure that you have multiple commits with proper messages)
* Invite internship-bitbucket@yipl.com.np to that particular private repo
* Submit your application

#### Problem (Write a **cli** OR **web** application for task below.)

- 1. Fetch data for Petroleum Products from the data.json file using an **API call**. API endpoint [https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json](https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json)
- 2. Store the response data into a **sqlite** database. 
	- (bonus point) Normalize the data and store into relational structure
	- (bonus point) Fetch the data from the newly stored sqlite database
- 3. List the total sale of each petroleum. 
- 4. List the top 3 countries that have the highest and lowest total sales till date.
- 5. List average sale of each petroleum product for 4 years of interval. Note: Do not count zero sale during average calulation

The solution output for **problem iv** should be like this. Note the average calculation on table may not be correct:

|        Product         |    Year   |      Avg         |
|------------------------|-----------|------------------|
| Aviation Turbine Fuel  | 2007-2010 |    207084.0      |
| Aviation Turbine Fuel  | 2011-2014 | 348235.428571429 |
|         Diesel         | 2007-2010 |    82163.625     |
|         Diesel         | 2011-2014 |     71094.0      |
|     Furnace Oil        | 2007-2010 |    78666.5       |
|     Furnace Oil        | 2011-2014 |    244323.0      |
|       Kerosene         | 2007-2010 | 270216.428571429 |
|       Kerosene         | 2011-2014 |    253161.875    |
|       LPG in MT        | 2007-2010 | 134808.857142857 |
|       LPG in MT        | 2011-2014 |     200637.25    |
| Mineral Turpentine Oil | 2007-2010 |      92322.0     |
| Mineral Turpentine Oil | 2011-2014 | 142559.571428571 |
|        Petrol          | 2007-2010 | 139038.428571429 |
|        Petrol          | 2011-2014 |      189581.0    |


##### For CLI application 
In php,
`php report.php`

In python,
`python report.py`

In node,
`node report.js`


##### For Web application 
- The page should be viewable on a web browser from any url, hosted locally using native built-in web server or apache or nginx.
- Or, you could host your application on Cloud applicaiton platform provider like [Heroku](https://devcenter.heroku.com/start) and send us the link.



### Bonus points

* If you can write and include unit tests for your code.
* If you write readme files with the instructions necessary to run the code.
* Proper git commit message test and setup linter
* Implement solution in Object Oriented Programming
* Exception handling
* Log application error
* Dockerize this application
* Create a public API for the report generated in **problem iii, iv, v**


Note: If you are creating a separate class file, your class filename should be "reportgenerator.php", "reportgenerator.py" and so on for other languages.
