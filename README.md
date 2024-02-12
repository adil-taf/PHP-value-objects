# PHP-value-objects
In this example application, i explore the concept of **Value Objects** as a powerful alternative to complex validation processes. **Value objects** play a crucial role in maintaining clean, reusable, and maintainable code. The scenario revolves around calculating shipping costs based on the **Billable Weight**. This weight is determined by comparing the actual weight of an item with its **Dimensional Weight (DIM weight)** (calculated as width × height × length divided by a dimension divisor). The final **Billable Weight** is the maximum value between the DIM weight and the actual weight

`Billable Weight = max(DIM Weight, Actual Weight)`

By leveraging value objects, we simplify the validation logic and create a more robust solution.


To test the application:

1. Clone the project using the command:
```shell
git clone https://github.com/adil-taf/PHP-value-objects.git
```
2. Navigate to the project's docker directory:
```shell
cd docker/
```
3. Build the application container using the command:
```shell
docker-compose up --build
```
4.  Open a web browser and navigate to http://localhost:8006.
