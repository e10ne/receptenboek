# recipes
    - id | int primary autoIncrement
    - name | varchar(20)
    - description | varchar(255)
    - preperation | text
    - image_url | varchar(255)
    - date_created | date current_timestamp()

# ingredients
    - id | int primary autoIncrement
    - name | varchar(20)


# recipe_ingredients
    - recipe_id
    - ingredient_id