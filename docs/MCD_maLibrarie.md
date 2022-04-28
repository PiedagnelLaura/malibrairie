# Dans Mocodo

```mcd
Author: author_reference, name
:
Edition: edition_reference, name

writes, 0N Author, 11 Book
Book: product_reference, title, description, image, price
product, 11 Book, 0N Edition

:
belongs to, 1N Book, 1N Category
Category: category_reference, name
```
