# recipes
    - id | int primary autoIncrement
    - name | varchar(20) unique
    - description | varchar(255)
    - preperation | text
    - image_url | varchar(255) unique
    - date_created | date current_timestamp()

# ingredients
    - id | int primary autoIncrement
    - name | varchar(20) unique

# recipe_ingredients
    - recipe_id | int
    - ingredient_id | int