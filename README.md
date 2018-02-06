# Mini-Project

Problem Statement:

FooDelight is the ultimate platform for the customer to satisfy his hunger. With the
help of FooDelight the customer can order not only order food at his door step but can
also learn the whole recipie by himself. The customer can thus create a dish all by
himself or FooDelight is always present 24x7 to to serve him delicious and sizzling
selected cuisines from all over the world.
The administrator can view all the orders placed and completed. Apart from this, the
admin can exercise control over the whole platform.

Scope of the project:
Features:

• Registered users:
1. The users will be provided with a user id that shall be considered for any transaction through the
platform.
2. The registered users will be able to select food items, add them to the cart and place the order for
delivery within stipulated amount of time.
3. The registered users will also be able to edit and reorder one of their previous orders, hence saving
their time.
4. They will be applicable for schemes and coupons during festivals and other auspicious occasions.

• Non-registered users:
1. Non-registered users will be able to view the food items and coupons available for order.
2. These type of users will not be able to place orders unless registered.
3. There will be no access to the recipies of the food items as well.

• Admin:
1. The admin will have control over the whole transaction of the customers.
2. He will be able to modify/reject the orders if required.
3. The admin will have the authority to feed new discounts as well as update the menu and prices
depending on the scenario.

• Special features:
1. The users can edit and reorder their previous orders.
2. The top grossing food items, season specialities will be visible to the users on the home screen.
3. Recommendations will be available for the user depending on the food items selected.

Hardware Requirements For Project:
Processor : Intel dual Core ,i3
RAM : 2 GB
Hard Disk : 10 GB
Web Server For Data Storage : Apache

Software Requirements For Project:
Operating System : Ubuntu 14.04 64 bit OS
Front End : HTML, CSS, Javascript, Bootstrap.
Server Side Script : PHP
Database : MongoDB 3.2 64bit version

Database Name : Foodelight
Collections:
1)User
It stores the basic information of the customer.
Ex:
{
	"_id" : ObjectId("57f605083cc41f6a0b8b4567"),
	"username" : "Anurag Rane",
	"email" : "anurag@gmail.com",
	"pass" : "anurag",
	"mobile" : "9745863210",
	"address" : "B1-103 , Mahalaxmi Vihar, Pune.",
	"type" : "user",
	"orders" : 2,
	"user_orders" : [
		{
			"order_no" : 21,
			"qty" : [
				{
					"dish_id" : ObjectId("57e9761e3cc41fe8158b4571"),
					"qty" : "1"
				},
				{
					"dish_id" : ObjectId("57e975983cc41fef0a8b457d"),
					"qty" : "1"
				}
			],
			"order_date" : "06.10.16",
			"order-time" : "13:34:27",
			"total" : 409,
			"order_status" : "confirmed"
		},
		{
			"order_no" : 30,
			"qty" : [
				{
					"dish_id" : ObjectId("57e9785c3cc41fa6128b4572"),
					"qty" : "2"
				}
			],
			"order_date" : "06.10.16",
			"order-time" : "14:46:23",
			"total" : 156,
			"order_status" : "confirmed"
		}
	]
}

2)fooditems
It stores the information about all the food itmes available.
Ex:
{
	"_id" : ObjectId("57e975983cc41fef0a8b457d"),
	"dish_name" : "Four Seasons",
	"dish_desc" : "Black Olives, Spicy Jalapenos, Baby Corn, Onions ",
	"dish_cost" : "198",
	"category" : "Pizza"
}

##GridFS is a specification for storing and retrieving files that exceed the BSON-document size limit of 16 MB.
##GridFS stores files in two collections:
3)fs.chunks
chunks stores the binary chunks.
4)fs.files
files stores the file’s metadata.

5)order_no
It stores the current order number.
Ex:
{ "_id" : ObjectId("57ed27c583fe89f4d864411b"), "no" : 34 }

6)system.indexes

7)tmporders
It stores the temporary order.
Ex:
{
	"_id" : ObjectId("57f87422cfea73a91e4eede2"),
	"order_no" : 34,
	"email" : null,
	"qty" : [ ]
}

Steps to run the project:
a)Restore the database 
Using the mongorestore command restore the Foodelight database which is present in dump/Foodelight folder.

b)Localhost
Copy all the folders(excluding dump/Feoodelight) and files into the var/www/html folder i.e in the default root folder of the web server.

c)Run
open the index.php to start the project
