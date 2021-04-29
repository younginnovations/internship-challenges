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
- 2.Store the response data into a **sqlite** database. 
	- (bonus point) Normalize the data and store into relational structure
	- (bonus point) Fetch the data from the newly stored sqlite database
- 3. List overall sale of each petroleam product by country. Note: Do not count zero during average calulation
- 4. List average sale of each petroleum  product for 2 years of interval
- 5. At which year each petroleum product had the least sale. Note: Do not count zero as least sale
- 6. Write a **cli** OR **web** application to above achieve solution.

The solution output for **problem 4** should be something like this. Note the average calculation is fake:

|        Product         |    Year   |      Avg         |
|------------------------|-----------|------------------|
|         Petrol         | 2010-2014 |    228816.8      |
|         Petrol         | 2013-2014 |    114037.4      |
|         Petrol         | 2011-2012 |    66709.6       |
|         Petrol         | 2009-2010 |    66709.6       |
|         Petrol         | 2007-2008 |    66709.6       |
|         Diesel         | 2011-2012 |    746576.2      |
|         Diesel         | 2009-2010 |     392539       |
|         Diesel         | 2007-2008 |    305472.8      |
|        Kerosene        | 2013-2014 |    30743.2       |
|        Kerosene        | 2009-2010 |     141116       |
|        Kerosene        | 2007-2008 |    320349.4      |
| Aviation Turbine Fuel  | 2013-2014 |    117967.8      |
| Aviation Turbine Fuel  | 2011-2012 |    69723.4       |
| Aviation Turbine Fuel  | 2009-2010 |    58857.8       |
|    Light Diesel Oil    | 2013-2014 |     242.5        |
|    Light Diesel Oil    | 2011-2012 |      278         |
|    Light Diesel Oil    | 2009-2010 |     1420.8       |
|      Furnace Oil       | 2013-2014 |433.3333333333333 |
|      Furnace Oil       | 2011-2012 |     3186.4       |
|      Furnace Oil       | 2009-2010 |    13806.8       |
|       LPG in MT        | 2013-2014 |    207738.8      |
|       LPG in MT        | 2011-2012 |    105677.6      |
|       LPG in MT        | 2009-2010 |    57734.8       |
| Mineral Turpentine Oil | 2013-2014 |       0          |
| Mineral Turpentine Oil | 2011-2012 |       0          |
| Mineral Turpentine Oil | 2009-2010 |       84         |

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
