Jeremie Fraeys 

May 9th, 2017

# Description

One of the merchants was facing a problem keeping up with orders for cookies. The merchant needs help to sort and organize cookie orders in a way that will help them to plan their production in order to fulfill the orders. The data was acquired from a JSON file provided by Shopify.

# Code example:

Solution

![solution](https://cloud.githubusercontent.com/assets/13443851/25878981/ac9b29a6-34fc-11e7-92ab-85a91887d734.PNG)

Sorting algorithm

![sorting](https://cloud.githubusercontent.com/assets/13443851/25879167/14d457a8-34fe-11e7-840e-bb8c1173dd2b.PNG)

# Motivation: 

This is a mini project for an application to Shopify (Internship fall 2017). 

The requirements were:

1. Read all orders from the paginated API.
2. Any order without cookies can be fulfilled.
3. Prioritize fulfilling orders with the highest amount of cookies.
4. If orders have the same amount of cookies, prioritize the order with the lowest ID.
5. If an order has an amount of cookies bigger than the remaining cookies, skip the order.


# Installation: 
The source file is in the .zip folder as well as on Github at https://github.com/jfraeys/shopify_cookies.git

---

## License & copyright

© Jeremie Fraeys

Licensed under [MIT License](LICENSE)

