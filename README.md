# 📚 Biblioteca

### Gestión de Biblioteca Universitaria

Este proyecto tiene como objetivo facilitar la administración y el uso de una biblioteca, proporcionando funcionalidades para la gestión de usuarios, libros, reservas, préstamos y más.

---

## 🧑‍🤝‍🧑 Niveles / Tipos de Usuarios

- **Personal de Atención y Administración**: Administrativo, Bibliotecario
- **Usuario Interno**: Lector (Estudiantes, Profesores)
- **Usuario Externo**: Visitante

---

## 🔒 Sistema de Acceso Cerrado

Este sistema utiliza un **acceso restringido** donde solo los usuarios previamente creados en la base de datos pueden acceder. Los nuevos usuarios deben ser registrados por un administrador, ya sea directamente en el sistema o en la base de datos, y **no existe una página de registro de usuarios** para el público general. Los usuarios registrados tienen acceso a:

- **Consulta de información de libros**
- **Realización de reservas de libros**

---

## 🗄️ Estructura Inicial de la Base de Datos

### **Tabla: Usuarios (Users)**
Define los usuarios generales de la biblioteca.

### **Tabla: Lectores (Readers)**
| Campo         | Descripción                      |
|---------------|----------------------------------|
| Id            | Identificador único              |
| Code          | Código o DNI                     |
| Name          | Nombre                           |
| Last Name     | Apellido                         |
| Birth Date    | Fecha de Nacimiento              |
| Nationality   | Nacionalidad                     |
| Email         | Correo Electrónico               |
| Phone         | Teléfono                         |
| Address       | Dirección                        |
| Document Type | Tipo de Documento (DNI, Pasaporte, etc) |

### **Tabla: Autores (Authors)**
| Campo         | Descripción                      |
|---------------|----------------------------------|
| Id            | Identificador único              |
| Name          | Nombre                           |
| Last Name     | Apellido                         |
| Birth Date    | Fecha de Nacimiento              |
| Nationality   | Nacionalidad                     |

### **Tabla: Carreras (Careers)**
| Campo         | Descripción |
|---------------|-------------|
| Id            | Identificador único |
| Name          | Nombre de la Carrera |

### **Tabla: Libros (Books)**
| Campo           | Descripción                           |
|-----------------|---------------------------------------|
| Id              | Identificador único                   |
| Code_Local      | Código Local                          |
| Title           | Título                                |
| Author_Id       | Clave Foránea de Autor                |
| Publisher_Id    | Clave Foránea de Editorial            |
| Published_Year  | Año de Publicación                    |
| ISBN            | ISBN del libro                        |

### **Tabla: Editoriales (Publishers)**
| Campo         | Descripción |
|---------------|-------------|
| Id            | Identificador único |
| Name          | Nombre de la Editorial |

### **Tabla: Categorías (Categories)**
| Campo         | Descripción |
|---------------|-------------|
| Id            | Identificador único |
| Name          | Nombre de la Categoría |

### **Otras Tablas Importantes**
- **Libros_Categorías (Books_Categories)**: Relación entre libros y categorías
- **Descripciones (Descriptions)**: Información detallada de cada libro (resumen, sinopsis, número de páginas)
- **Copias (Copies)**: Información de las copias de los libros y su disponibilidad
- **Reservas (Reservations)**: Reservas de copias de libros realizadas por los lectores
- **Préstamos (Loans)**: Información de los préstamos realizados y su estado
- **Multas (Fines)**: Gestión de multas en caso de devoluciones tardías o perdidas

---

## 🗂️ Enums y Valores Predeterminados

### Roles
- **Personal de Atención y Administración**: Administrativo, Bibliotecario

### Tipos de Lectores
- **Lector Interno**: Estudiantes y Profesores
- **Lector Externo**: Visitantes

### Estado de Libros
- **Disponible**
- **En Espera**
- **Reservado**
- **No Disponible**

---

## ⚙️ Estructura de la Aplicación

La aplicación está organizada en cuatro capas principales:

1. **Frontend**: Interfaz para los usuarios
2. **Backend**: Lógica y control de operaciones
3. **Base de Datos**: Almacenamiento de información
4. **API**: Gestión de comunicación entre sistemas

---

## 🌟 Funcionalidades

1. **Consulta de libros**
2. **Reservas y préstamos de ejemplares**
3. **Gestión de usuarios y roles**
4. **Aplicación de multas por retrasos o pérdidas**

--- 

Este README está diseñado para ayudarte a comprender rápidamente la funcionalidad y estructura de la aplicación. ¡Esperamos que esta biblioteca sea una herramienta útil y fácil de usar! 📖✨
