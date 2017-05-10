Jeremie Fraeys

One of the merchant was facing a problem to keepup with orders of cookies. The merchant needs help to organize the orders in a way that, one knows how many orders will not be fulfilled. Using a JSON file provided by shopify the data is aquired.

Code example:

Motivation: This is a mini project for an application to Shopify. The requirement were:

1. Read all orders from the paginated API.
2. Any order without cookies can be fulfilled.
3. Prioritize fulfilling orders with the highest amount of cookies.
4. If orders have the same amount of cookies, prioritize the order with the lowest ID.
5. If an order has an amount of cookies bigger than the remaining cookies, skip the order.


Installation: The source file is in the .zip folder as well as on Github at https://github.com/jfraeys/shopify_cookies.git

Tests
