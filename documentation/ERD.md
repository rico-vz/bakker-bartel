# DB bakker-bartel

## Table: `users`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key |
| `employee_id` | `int(11)` | foreign key naar 'employees' + 'functions' + 'vacation_requests' |
| `username` | `varchar(255)` |
| `password` | `varchar(255)` |
| `email` | `varchar(255)` |
| `created_at` | `timestamp` |
| `remember_token` | `timestamp` |


## Table: `employees`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key, foreign key naar 'users' + 'functions' + 'vacation_requests' |
| `function_id` | `int(11)` | foreign key naar 'functions' |
| `first_name` | `varchar(255)` |
| `last_name` | `varchar(255)` |
| `date_of_birth` | `date` |
| `email` | `varchar(255)` |
| `phone` | `varchar(255)` |
| `address` | `varchar(255)` |
| `employee_since` | `date` |
| `updated_at` | `timestamp` |

## Table: `functions`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key, foreign key naar 'employees' |
| `employee_id` | `int(11)` | foreign key naar 'employees' + 'users' + 'vacation_requests' |
| `name` | `varchar(255)` |
| `salary` | `int(11)` |

## Table: `vacation_requests`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key |
| `created_at` | `timestamp` |
| `employee_id` | `int(11)` | foreign key naar 'employees' + 'functions' + 'users' |
| `start_date` | `date` |
| `end_date` | `date` |
| `reason` | `varchar(255)` |
| `status` | `ENUM('in behandeling', 'goedgekeurd', 'afgekeurd')` |

## Table: `orders`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key |
| `created_at` | `timestamp` |
| `name` | `varchar(255)` |
| `email` | `varchar(255)` |
| `phone` | `varchar(255)` |
| `total_price` | `int(11)` |
| `pickup_date` | `date` |
| `status` | `ENUM('in behandeling', 'klaar om op te halen', 'afgehandeld', 'geannuleerd')` |

## Table: `assortment`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key |
| `category` | `varchar(255)` |
| `product_name` | `varchar(255)` | foreign key naar 'products' |
| `price` | `int(11)` |
| `description` | `varchar(255)` |
| `image` | `varchar(255)` |

## Table: `products`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key |
| `product_name` | `varchar(255)` | foreign key naar 'assortment' |
| `made_at` | `date` |
| `status` | `ENUM('in voorraad', 'uit voorraad')` |

## Table: `stock`
| Column | Type | addition |
| --- | --- | --- |
| `id` | `int(11)` | primary key |
| `ingredient` | `varchar(255)` |
| `amount` | `int(11)` |
| `last_ordered` | `date` |
| `updated_at` | `timestamp` |

