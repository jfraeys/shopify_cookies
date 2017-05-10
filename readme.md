Jeremie Fraeys
May 9th

# Description

One of the merchant was facing a problem to keepup with orders of cookies. The merchant needs help to organize the orders in a way that, one knows how many orders will not be fulfilled. Using a JSON file provided by shopify the data is aquired.

# Code example:

Solution

![solution](https://cloud.githubusercontent.com/assets/13443851/25878981/ac9b29a6-34fc-11e7-92ab-85a91887d734.PNG)

Sorting algorithm

![sorting](https://cloud.githubusercontent.com/assets/13443851/25878982/b235e5ea-34fc-11e7-9f42-2471e1fadfad.PNG)

# Motivation: 

This is a mini project for an application to Shopify(internship fall 2017). 

The requirement were:

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

