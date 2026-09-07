# 📌 Evidencia AA5_EV01 - Servicio Web en PHP

Este proyecto corresponde a la evidencia **GA7-220501096-AA5-EV01** del programa ADSO.  
Se construyó un servicio web en **PHP** que permite el **registro** y **autenticación de usuarios** con conexión a una base de datos MySQL.

---

## 🚀 Requisitos
- PHP 7.4 o superior
- Servidor web (Apache, Nginx o Railway)
- MySQL 5.7 o superior
- Herramienta de pruebas (Postman o similar)
- Git para versionamiento

## 📂 Estructura del proyecto
api/
├── db.php          # Conexión a la base de datos
├── register.php    # Registro de usuarios
└── login.php       # Inicio de sesión
README.md


---

## ⚙️ Configuración de la base de datos
Ejecutar el siguiente script SQL en MySQL:

```sql
CREATE DATABASE usuarios_db;
USE usuarios_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

