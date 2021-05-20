## Petroleum Report

### What you need to do

* If you haven’t already, take a [git class in codeschool](https://www.codeschool.com/courses/try-git).
* Once complete, create a private repo called “yipl-intern-petroleum-report” in [bitbucket](https://bitbucket.org)
* Solve the problem detailed below
* Push your code to the repo (make sure that you have multiple commits with proper messages)
* Invite internship-bitbucket@yipl.com.np to that particular private repo
* Submit your application

#### Problem

- 1. Fetch data for Petroleum Products from the data.json file using an **API call**. API endpoint [https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json](https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json)
- 2. Store the response data into a **sqlite** database. 
	- (bonus point) Normalize the data and store into relational structure
	- (bonus point) Fetch the data from the newly stored sqlite database
- 3. List overall sale of each petroleam product by country. 
- 4. List average sale of each petroleum  product for 2 years of interval. Note: Do not count zero during average calulation
- 5. At which year each petroleum product had the least sale. Note: Do not count zero as least sale
- 6. Write a **cli** OR **web** application to above achieve solution.

The solution output for **problem iv** should be like this. Note the average calculation on thble may not be correct:

|        Product         |    Year   |      Avg         |
|------------------------|-----------|------------------|
| Aviation Turbine Fuel  | 2007-2008 |    207084.0      |
| Aviation Turbine Fuel  | 2009-2010 |348235.428571429  |
| Aviation Turbine Fuel  | 2011-2012 |   248060.75      |
| Aviation Turbine Fuel  | 2013-2014 |73994.8571428571  |
|         Diesel         | 2007-2008 |    82163.625     |
|         Diesel         | 2009-2010 |     71094.0      |
|         Diesel         | 2011-2012 |   118675.375     |
|         Diesel         | 2013-2014 |    363918.0      |
|     Furnace Oil        | 2007-2008 |   142151.625     |
|     Furnace Oil        | 2009-2010 | 389477.714285714 |
|     Furnace Oil        | 2011-2012 |    78666.5       |
|     Furnace Oil        | 2013-2014 |    244323.0      |
|       Kerosene         | 2007-2008 | 270216.428571429 |
|       Kerosene         | 2009-2010 |    253161.875    |
|       Kerosene         | 2011-2012 |     249039.0     |
|       Kerosene         | 2013-2014 |     178934.0     |
|       LPG in MT        | 2007-2008 | 134808.857142857 |
|       LPG in MT        | 2009-2010 |     200637.25    |
|       LPG in MT        | 2011-2012 |      18239.0     |
|       LPG in MT        | 2013-2014 |      200786.0    |
| Mineral Turpentine Oil | 2007-2008 |      92322.0     |
| Mineral Turpentine Oil | 2009-2010 | 142559.571428571 |
| Mineral Turpentine Oil | 2011-2012 | 66709.1666666667 |
| Mineral Turpentine Oil | 2013-2014 | 171711.666666667 |
|        Petrol          | 2007-2008 | 139038.428571429 |
|        Petrol          | 2009-2010 |      189581.0    |
|        Petrol          | 2011-2012 |      29087.875   |
|        Petrol          | 2013-2014 |      227916.8    |


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


Note: If you are creating a separate class file, your class filename should be "reportgenerator.php", "reportgenerator.py" and so on for other languages.
