
SELECT column1, column2, ...
FROM table_name
WHERE condition;

select * from property where type = "office";

SELECT * FROM `property` WHERE is_sold = "0";


SELECT * FROM `property` WHERE is_sold = "0" AND type = "flat";

SELECT * FROM property WHERE sq_feet >= "1200";


SELECT * FROM `property` WHERE evidance_date >= "2020-10-01" AND evidance_date <= "2020-10-31";

SELECT * FROM property WHERE discription LIKE "wifi%";

SELECT * FROM property WHERE discription LIKE "%wifi%";

SELECT customer.*,customer_contact.contact FROM `customer` INNER JOIN customer_contact ON customer.id = customer_contact.customer_id;

SELECT customer.*,customer_contact.contact FROM `customer` LEFT JOIN customer_contact ON customer.id = customer_contact.customer_id

-- The SELECT DISTINCT statement is used to return only distinct (different) values.
SELECT DISTINCT Country FROM Customers;

select * from products where price 50 between and  60;


select * from products where city in(paris, london);

ALTER TABLE `customer_property` ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`);

select * from products where price <> 18;

-- And Or Not
select * from customers 
where country = "Germany" AND City = "Berlin";

select * from customers 
where City = "Berlin" OR City = "Berlin";

select * from customers 
where NOT City = "moskow";

select * from customers 
order by Country;

select * from Customers
order by City DESC;



insert into Customers
values(x,y,z,);



update customers 
set Country = "Germany", City = "Berlin"
where CustomerId = 1;


SELECT property.type,property.sq_feet ,customer.firstname,customer.lastname FROM customer_property
 INNER JOIN customer on customer_property.customer_id = customer.id
 INNER JOIN property on customer_property.property_id = property.id

SELECT property.type,property.sq_feet ,customer.firstname,customer.lastname FROM customer_property
 INNER JOIN customer on customer_property.customer_id = customer.id
  INNER JOIN property on customer_property.property_id = property.id
   WHERE customer.firstname = "jigar"


SELECT property.type,property.sq_feet ,customer.firstname,customer.lastname FROM customer_property INNER JOIN customer on customer_property.customer_id = customer.id
 INNER JOIN property on customer_property.property_id = property.id
 WHERE property.is_sold = "0"

-- It is the WHERE clause that determines how many records will be updated.

update customers 
set ContactName = "Jaun"
where Country = "Maxico";

-- Be careful when updating records. If you omit the WHERE clause, ALL records will be updated!


update Customers
set Contactname = "jaun";

delete from Customers
where Country = "Rusia";

-- It is possible to delete all rows in a table without deleting the table. This means that the table structure, attributes, and indexes will be intact:

delete from Customers;

select MIN(Price) as LagestPrice
from products

select columnname1, columnname2
from table1
INNER JOIN table2
on table1.id = table2.id;


select order.orderID, customers.CustomerName
from orders
left join customers
on
order.customerid = customer.CustomerId;


-- full outer join
select customers.customername,orders.orderID
from customers
full outer join order
on customer.customerID = order.CustomerId
-- where condition
order by customers.customername;


-- union all
select * as type,contactname,city,country
from customers
union  
select * contactname,city,country
from suppliers;


SELECT customer.firstname,customer.lastname,COUNT(contact) FROM customer
 INNER JOIN customer_contact on customer.id = customer_contact.customer_id
  GROUP BY customer.id


SELECT customer.firstname,customer.lastname,COUNT(contact) FROM customer
 left JOIN customer_contact on customer.id = customer_contact.customer_id 
 GROUP BY customer.id

 SELECT l1.name,l2.name as parent_name FROM location as l1
  INNER JOIN location as l2 
  ON l1.parent_id = l2.id















-- practice

select * from table_name;

select distinct * from table_name;


select * from table_name
where Country = "Germany";



select COUNT(salary),firstname from employe
group by firstname;




select employees.lastname, orders.COUNT(orderID) from employes 
INNER join orders on employes.employeID = orders = orderID 
group by lastname
having COUNT(orderID) > 10;

 

select orderID,quntity
case 
      when quantity < 10 THEN "Qunaitty is less then 10";
      when quantity > 10 THEN "quantity is greater than 10";
      when quantity = 10 then "Qunatity is equal to 10";
      END as QuantityText
      from orderDetail;




select * from table_name
where Country = "Germany"  AND City = "Berlin";

select * from table_name
where City = "Berlin" OR City = "Maxico";
order by City;

select * from table_name
where not Country = "Germany";

select * from table_name
order by Country;

select * from table_name
order by City DESC;


insert into table_name values('Germany','rusia','poland');

update table_name
set Country = "Rusia"
where Customerid = 1;


delete from table_name
where CustomerId = 1;

select MIN(price)
from table_name;

select MAX(price)
from table_name;


select COUNT(price)
from table_name;

select AVG(price)
from table_name;

select Sum(price)
from table_name;


select * from table_name
where address LIKE "wifi%";

select * from table_name
where Country 
IN ("Germanuy","Rusia");


select * from table_name
where Price 
between 10 and 20;


select] * from table_name
where Price 
not between 10 and 20;


-- between charecher example

select * from table_name
where country 
between "Germany" and "Rusia"
order by Country;


-- Alis
select column_name as alias_name
from table_name;


select customer.customername, order.orderID
from customer
INNER join orders
on customer.customerID = orders.customersID;


select customers.customername, order.orderID
from customers
left join orders 
on customer.customerID = orders.customersID

-- The IS NOT NULL operator is used to test for non-empty values (NOT NULL values).
select * from table_name
where contactname is not null;

-- The IS NULL operator is used to test for empty values (NULL values).
select * from table_name
where contactname is null;




