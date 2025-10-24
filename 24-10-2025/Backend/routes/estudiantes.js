// routes/estudiantes.js
const express = require('express');
const router = express.Router();
const db = require('../db');

// Ruta para obtener todos los estudiantes
router.get('/', (req, res) => {
  const sql = 'SELECT * FROM estudiante';

  db.query(sql, (err, results) => {
    if (err) {
      console.error('Error al obtener estudiantes:', err);
      return res.status(500).json({ error: 'Error al obtener estudiantes' });
    }
    res.json(results);
  });
});

// Ruta para obtener un estudiante por documento_identidad
router.get('/:documento_identidad', (req, res) => {
  const documento = req.params.documento_identidad;
  const sql = 'SELECT * FROM estudiante WHERE documento_identidad = ?';

  db.query(sql, [documento], (err, results) => {
    if (err) {
      console.error('Error al obtener estudiante:', err);
      return res.status(500).json({ error: 'Error al obtener estudiante' });
    }
    if (results.length === 0) {
      return res.status(404).json({ message: 'Estudiante no encontrado' });
    }
    res.json(results[0]);
  });
});

// ✅ Ruta para eliminar un estudiante por documento_identidad
router.delete('/:documento_identidad', (req, res) => {
  const documento = req.params.documento_identidad;
  const sql = 'DELETE FROM estudiante WHERE documento_identidad = ?';

  db.query(sql, [documento], (err, result) => {
    if (err) {
      console.error('Error al eliminar estudiante:', err);
      return res.status(500).json({ error: 'Error al eliminar estudiante' });
    }
    if (result.affectedRows === 0) {
      return res.status(404).json({ message: 'Estudiante no encontrado' });
    }
    res.json({ message: 'Estudiante eliminado exitosamente' });
  });
});

// ✅ Ruta para editar (actualizar) un estudiante por documento_identidad
router.put('/:documento_identidad', (req, res) => {
  const documento = req.params.documento_identidad;
  const { nombre, apellido, edad, direccion, telefono } = req.body;

  // Validar que haya al menos un campo a actualizar
  if (!nombre && !apellido && !edad && !direccion && !telefono) {
    return res.status(400).json({ error: 'Debe enviar al menos un campo para actualizar' });
  }

  // Construir la consulta dinámica
  const campos = [];
  const valores = [];

  if (nombre) { campos.push('nombre = ?'); valores.push(nombre); }
  if (apellido) { campos.push('apellido = ?'); valores.push(apellido); }
  if (edad) { campos.push('edad = ?'); valores.push(edad); }
  if (direccion) { campos.push('direccion = ?'); valores.push(direccion); }
  if (telefono) { campos.push('telefono = ?'); valores.push(telefono); }

  const sql = `UPDATE estudiante SET ${campos.join(', ')} WHERE documento_identidad = ?`;
  valores.push(documento);

  db.query(sql, valores, (err, result) => {
    if (err) {
      console.error('Error al actualizar estudiante:', err);
      return res.status(500).json({ error: 'Error al actualizar estudiante' });
    }

    if (result.affectedRows === 0) {
      return res.status(404).json({ message: 'Estudiante no encontrado' });
    }

    res.json({ message: 'Estudiante actualizado exitosamente' });
  });
});

// ✅ Ruta para crear un nuevo estudiante
router.post('/', (req, res) => {
  const { documento_identidad, nombre, segundo_nombre, apellido, fecha_nacimiento, genero } = req.body;

  // Validar que los campos obligatorios estén presentes
  if (!documento_identidad || !nombre || !apellido || !fecha_nacimiento || !genero) {
    return res.status(400).json({
      error: 'Faltan campos obligatorios: documento_identidad, nombre, apellido, fecha_nacimiento, genero'
    });
  }

  const sql = `
    INSERT INTO estudiante (documento_identidad, nombre, segundo_nombre, apellido, fecha_nacimiento, genero)
    VALUES (?, ?, ?, ?, ?, ?)
  `;

  const valores = [
    documento_identidad,
    nombre,
    segundo_nombre || null, // Si no se envía, lo guarda como NULL
    apellido,
    fecha_nacimiento,
    genero
  ];

  db.query(sql, valores, (err, result) => {
    if (err) {
      console.error('Error al insertar estudiante:', err);

      if (err.code === 'ER_DUP_ENTRY') {
        return res.status(409).json({ error: 'El estudiante con ese documento ya existe' });
      }

      return res.status(500).json({ error: 'Error al crear estudiante' });
    }

    res.status(201).json({
      message: 'Estudiante creado exitosamente',
      estudiante: {
        documento_identidad,
        nombre,
        segundo_nombre: segundo_nombre || null,
        apellido,
        fecha_nacimiento,
        genero
      }
    });
  });
});




module.exports = router;
