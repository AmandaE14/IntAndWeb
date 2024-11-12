SELECT books.name 
FROM books
JOIN libraryBook ON books.id = libraryBook.bookID
JOIN library ON library.id = libraryBook.libraryID;