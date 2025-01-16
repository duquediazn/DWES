CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;

CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    isbn VARCHAR(13) UNIQUE NOT NULL,
    disponibilidad BOOLEAN NOT NULL
);

INSERT INTO libros (titulo, autor, isbn, disponibilidad) VALUES
('Cien años de soledad', 'Gabriel García Márquez', '9788437604947', 1),
('Don Quijote de la Mancha', 'Miguel de Cervantes', '9788420471839', 1),
('El amor en los tiempos del cólera', 'Gabriel García Márquez', '9780307389732', 1),
('Crimen y castigo', 'Fiódor Dostoyevski', '9780143107637', 1),
('La metamorfosis', 'Franz Kafka', '9780805210576', 1),
('1984', 'George Orwell', '9780451524935', 0),
('Rebelión en la granja', 'George Orwell', '9780451526342', 1),
('El principito', 'Antoine de Saint-Exupéry', '9780156012195', 1),
('Fahrenheit 451', 'Ray Bradbury', '9781451673319', 1),
('El gran Gatsby', 'F. Scott Fitzgerald', '9780743273565', 0),
('Matar a un ruiseñor', 'Harper Lee', '9780061120084', 1),
('El viejo y el mar', 'Ernest Hemingway', '9780684801223', 1),
('En busca del tiempo perdido', 'Marcel Proust', '9780679645689', 1),
('Ulises', 'James Joyce', '9780199535675', 0),
('La montaña mágica', 'Thomas Mann', '9780679772873', 1),
('El extranjero', 'Albert Camus', '9780679720207', 1),
('La náusea', 'Jean-Paul Sartre', '9780679722003', 1),
('Madame Bovary', 'Gustave Flaubert', '9780140449129', 0),
('Orgullo y prejuicio', 'Jane Austen', '9780141439518', 1),
('Jane Eyre', 'Charlotte Brontë', '9780142437209', 1);
