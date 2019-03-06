## Petroleum Report

### What you need to do

* If you haven’t already, take a [git class in codeschool](https://www.codeschool.com/courses/try-git).
* Once complete, create a private repo called “yipl-intern-petroleum-report” in [bitbucket](https://bitbucket.org)
* Solve the problem detailed below
* Push your code to the repo (make sure that you have multiple commits with proper messages)
* Invite internship-bitbucket@yipl.com.np to that particular private repo
* Submit your application

#### Problem

- Fetch data for Petroleum Products from the data.json file using an **API call**. API endpoint [https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json](https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json)
- Store the response data into a **sqlite** database. 
	- (bonus point) Normalize the data and store into relational structure
	- (bonus point) Fetch the data from the newly stored sqlite database
- Generate report showing **min**, **max** and **average** Sale of each Petroleum Product for 5 years interval
- Write a **cli** application to above achieve solution
- Please omit the ‘0’ values when calculating average and minimum value of the product.

In php,
`php report.php`

In python,
`python report.py`

In node,
`node report.js`

Running the above command should give the following tabular output in the cli:

|        Product         |    Year   |  Min   |  Max   |        Avg         |
|------------------------|-----------|--------|--------|--------------------|
|         Petrol         | 2010-2014 | 187641 | 283567 |      228816.8      |
|         Petrol         | 2005-2009 | 80989  | 162275 |      114037.4      |
|         Petrol         | 2000-2004 | 59245  | 75989  |      66709.6       |
|         Diesel         | 2010-2014 | 648513 | 901393 |      746576.2      |
|         Diesel         | 2005-2009 | 294329 | 612505 |       392539       |
|         Diesel         | 2000-2004 | 286233 | 326060 |      305472.8      |
|        Kerosene        | 2010-2014 | 18628  | 49495  |      30743.2       |
|        Kerosene        | 2005-2009 | 55788  | 226637 |       141116       |
|        Kerosene        | 2000-2004 | 239328 | 386592 |      320349.4      |
| Aviation Turbine Fuel  | 2010-2014 | 101314 | 139404 |      117967.8      |
| Aviation Turbine Fuel  | 2005-2009 | 63778  | 82631  |      69723.4       |
| Aviation Turbine Fuel  | 2000-2004 | 47453  | 66825  |      58857.8       |
|    Light Diesel Oil    | 2010-2014 |  227   |  258   |       242.5        |
|    Light Diesel Oil    | 2005-2009 |  179   |  377   |        278         |
|    Light Diesel Oil    | 2000-2004 |   88   |  3416  |       1420.8       |
|      Furnace Oil       | 2010-2014 |  435   |  2450  | 1433.3333333333333 |
|      Furnace Oil       | 2005-2009 |  2171  |  4558  |       3186.4       |
|      Furnace Oil       | 2000-2004 |  2696  | 20934  |      13806.8       |
|       LPG in MT        | 2010-2014 | 159286 | 258299 |      207738.8      |
|       LPG in MT        | 2005-2009 | 81005  | 141171 |      105677.6      |
|       LPG in MT        | 2000-2004 | 40102  | 77594  |      57734.8       |
| Mineral Turpentine Oil | 2010-2014 |   0    |   0    |         0          |
| Mineral Turpentine Oil | 2005-2009 |   0    |   0    |         0          |
| Mineral Turpentine Oil | 2000-2004 |   36   |  132   |         84         |



### Bonus points

* If you can write and include unit tests for your code.
* If you write readme files with the instructions necessary to run the code

Note: If you are creating a separate class file, your class filename should be "reportgenerator.php", "reportgenerator.py" and so on for other languages.


