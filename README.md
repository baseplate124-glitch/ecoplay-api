# Ecoplay - Componente PHP

## 📌 Objetivo
Este componente en **PHP** permite gestionar los eco‑puntos de los usuarios dentro del proyecto **Ecoplay**, complementando el front‑end desarrollado en React/Vite.

## ⚙️ Requisitos
- PHP 7.4 o superior
- Servidor local (XAMPP, Laragon, WAMP, etc.)
- Base de datos MySQL con la tabla `eco_puntos`:
  ```sql
  CREATE TABLE eco_puntos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    puntos INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );
EvidenciaGA7-220501096-AA4-EV03/
├── src/          # Front-end React
├── public/       # Archivos estáticos
├── php/
│   └── Componente.php   # Componente PHP para eco-puntos
└── README.md
<?php
require_once 'Componente.php';

// Conexión a la base de datos
$componente = new ComponenteEcoPuntos("localhost", "root", "", "ecoplay");

// Registrar puntos
$componente->registrarPuntos(1, 50);

// Consultar puntos acumulados
$total = $componente->obtenerPuntos(1);
echo "El usuario tiene $total eco-puntos.";
?>
