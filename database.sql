# 1.Write a statement that will select the City column from the Customers table.
# drop database test_schema; Удалить саму базу.
# SELECT City
# FROM customers;

# 2.Select all the different values from the Country column in the Customers table.
# SELECT DISTINCT *
# FROM customers;

# 3.Select all records where the City column has the value "Berlin".
# SELECT *
# FROM customers
# WHERE City = 'Berlin';

# 4.Use the NOT keyword to select all records where City is NOT "Berlin".
# SELECT *
# FROM customers
# WHERE City != 'Berlin';

# 5.Select all records where the City column has the value 'Berlin' and the PostalCode
# column has the value 12209.
# SELECT *
# FROM customers
# WHERE City = 'Berlin'
# AND PostalCode = '12209';

# 6.Select all records from the Customers table, sort the result reversed alphabetically by the column City.
# SELECT *
# FROM customers
# ORDER BY City DESC;

# 7.Select all records from the Customers table, sort the result alphabetically, first by the column Country,
# then, by the column City.
# SELECT *
# FROM customers
# ORDER BY Country, City ASC;

# 8.Insert a new record in the Customers table.
# INSERT INTO customers(CustomerName, ContactName, Address, City, PostalCode, Country)
# VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');

# 9.Select all records from the Customers where the PostalCode column is empty.
# SELECT *
# FROM customers
# WHERE PostalCode = '';

# 10.Select all records from the Customers where the PostalCode column is NOT empty.
# SELECT *
# FROM customers
# WHERE PostalCode != '';

# 11.Set the value of the City columns to 'Oslo', but only the ones where the Country column has the value
# "Norway".
# UPDATE customers
# SET City = 'Oslo'
# WHERE Country = 'Norway';

# 12.Update the City value and the Country value.
# UPDATE customers
# SET City = 'Mexico', Country = 'Mexico'
# WHERE Country = 'Norway';

# 13.Delete all the records from the Customers table where the Country value is 'Norway'.
# DELETE FROM Customers
# WHERE Country='Norway';

# 14.Delete all the records from the Customers table.
# DELETE
# FROM customers;

# 15.Select all records where the value of the City column contains the letter "a".
# SELECT *
# FROM customers
# WHERE City LIKE  '%a%';

# 16.Select all records where the value of the City column ends with the letter "a".
# SELECT *
# FROM customers
# WHERE City LIKE '%a';

# 17.Select all records where the value of the City column starts with letter "a" and ends with the letter "b".
# SELECT *
# FROM customers
# WHERE City LIKE 'a%b';

# 18.Select all records where the value of the City column does NOT start with the letter "a".
# SELECT *
# FROM customers
# WHERE City NOT LIKE 'a%';

# 19.Use the IN operator to select all the records where Country is NOT "Norway" and NOT "France".
# SELECT Country
# FROM customers
# WHERE Country NOT IN ('Norway','France');

# 20.Use the IN operator to select all the records where Country is either "Norway" or "France".
# SELECT Country
# FROM customers
# WHERE Country IN ('Norway','France');

# 21.Use the BETWEEN operator to select all the records where the value of the Price column is NOT between 10
# and 20.
# SELECT *
# FROM products
# WHERE Price NOT BETWEEN '10' AND '20';

# 22.Use the BETWEEN operator to select all the records
# where the value of the ProductName column is alphabetically between 'Geitost' and 'Pavlova'.
# SELECT *
# FROM products
# WHERE ProductName BETWEEN 'Geitost'  AND 'Pavlova'
# ORDER BY ProductName ASC ;

# 23.Choose the correct JOIN clause to select all the records from the Customers table plus all the matches in
# the Orders table.
# SELECT customers.CustomerName, orders.OrderID
# FROM customers
# LEFT JOIN orders
# ON customers.CustomerID = orders.OrderID;

# 24.Choose the correct JOIN Find out the number of orders made for each city (city) from the Customers table.
# SELECT customers.City, COUNT(o.OrderID) AS Num
# FROM customers
# INNER JOIN orders o on customers.CustomerID = o.CustomerID
# GROUP BY customers.City
# ORDER BY Num DESC;
# Отсортировала ещё и частоте заказов

# 25.Find out the total cost of orders for the user.
# SELECT customers.CustomerID, SUM(p.Price * od.Quantity)
# FROM customers
#          INNER JOIN orders o on customers.CustomerID = o.CustomerID
#          INNER JOIN order_details od on o.OrderID = od.OrderID
#          INNER JOIN products p on od.ProductID = p.ProductID
# GROUP BY customers.CustomerID;

# 26.Choose the correct JOIN  From the (Product) table, display only those products that have a Supplier: New Orleans
# Cajun Delights (2) and Tokyo Traders (4) and add the SupplierName to the product output
# SELECT p.ProductName, s.SupplierName
# FROM products
#          INNER JOIN products p
#          INNER JOIN suppliers s on s.SupplierID = p.SupplierID
# WHERE s.SupplierName IN ('New Orleans',
#                          'Cajun Delights',
#                          'Tokyo Traders')
# GROUP BY p.ProductName, s.SupplierName

# 27. Choose the correct JOIN. Display the average amount of all orders for each date (OrderDate) in the (Orders) table,
# if the average amount of orders on that day was more than 30.
# Add to each date the person who accepted the order from the Employees table on that day
# SELECT orders.OrderDate,CONCAT(e.FirstName, ' ', e.LastName) AS employee, AVG(od.Quantity) AS Average
# FROM orders
# LEFT JOIN order_details od on orders.OrderID = od.OrderID
# LEFT JOIN employees e on e.EmployeeID = orders.EmployeeID
# GROUP BY 1,2
# HAVING Average > 30;

# 28.Use Group By. List the number of customers in each country, ordered by the country with the most customers first.
# SELECT customers.Country, COUNT(o.CustomerID) AS Num
# FROM customers
# INNER JOIN orders o on customers.CustomerID = o.CustomerID
# GROUP BY customers.Country
# ORDER BY Num DESC;

# 29.Use Group By List the number of customers in each country.
# SELECT customers.Country, SUM(customers.CustomerID) as Sum
# FROM customers
# GROUP BY customers.Country;