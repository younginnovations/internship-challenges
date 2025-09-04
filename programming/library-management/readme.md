## YIPL Internship Task: Build a RESTful Library Management API

### **What you need to do**

* If you haven't already, take a [git class in codeschool](https://www.simplilearn.com/learn-git-basics-skillup).
* Once complete, create a private repo called `yipl-backend-2025` in [github](https://github.com/new)
* Solve the problem detailed below
* Push your code to the repo (make sure that you have multiple commits with proper messages) 
* Invite `yi-internship` to that particular private repo
* Before submit your application, you must have a **proper `README.md` file** in your repository with the following:
  * Project overview
  * How to set up the project
  * How to install dependencies (if any)
  * How to run the code  
  * Optional: how to run tests, if applicable

### **Problem**

##### **Library Management application** 
Create a RESTful API for a library management system using any programming language/framework of your choice. The API should manage books and authors with proper database relations, validation, and query parameters.

##### **Requirements**
### 1. Database Setup
- Use SQLite as the database
- Create two related tables:
  - `authors` table with fields: `id`, `name`, `email`, `created_at`
  - `books` table with fields: `id`, `title`, `isbn`, `published_year`, `author_id` (foreign key to authors), `created_at`
- You must include:
  - A migration file to create the schema automatically.
  - A seeder file with sample data for authors and books.

### 2. API Endpoints

#### Authors CRUD:
- `GET /authors` - List all authors (with optional query parameters)
- `POST /authors` - Create a new author

#### Books CRUD:
- `GET /books` - List all books (with optional query parameters)
- `POST /books` - Create a new book
- `PUT /books/:id` - Update book

## 3. Validation
* **Author validation:**

  * Name: required, minimum 2 characters
  * Email: required, valid email format

* **Book validation:**

  * Title: required, minimum 1 character
  * Published Year: valid year 
  * ISBN: valid ISBN
     * A valid ISBN is a sequence of exactly 10 digits, with no spaces, dashes, or letters allowed. For example, 1234567890 and 9876543211 are valid ISBNs, while 12345, 12345678901, 12345abc90, and 12345-6789 are invalid.

* Return clear and descriptive error messages on validation failure.


### 4. Query Parameters
For `GET /authors`:
- `name` - filter by author name (partial match)
- `sort` - Sorts authors by the number of books they've written, with the highest first by default.
- `order` - sort order (asc, desc)

For `GET /books`:
- `title` - filter by book title (partial match)
- `author` - filter by author name
- `year` - filter by published year
- `sort` - sort by field (title, published_year, created_at)
- `order` - sort order (asc, desc)

### 5. Additional Features
- When getting a single author, include their books in the response
- When getting a single book, include author details
- Implement proper error handling (404 for not found, 400 for bad requests, etc.)

## Evaluation Criteria
- Code organization and readability
- Proper use of database relations and SQL queries
- Validation implementation
- Query parameter handling
- Documentation (README with setup instructions)

## Bonus Points
- Add pagination to list endpoints
- Add unit tests
- Add search functionality across multiple fields
- Add Swagger/OpenAPI, Docker, GitHub Actions, Logging
- Use any core programming language (Python, PHP, Node.js, etc.) without depending on frameworks (Express.js, NestJS, Django, Laravel, etc.)
- If you have your own ideas for additional features, feel free to implement them