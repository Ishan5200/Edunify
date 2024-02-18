// api/addSchool.js

import { query } from '../../lib/db';

export default async function addSchool(req, res) {
  const { name, address, city, state, contact, email, file } = req.body;

  try {
    const result = await query(
      `
      INSERT INTO schools (name, address, city, state, contact, email, file)
      VALUES (?, ?, ?, ?, ?, ?, ?)
    `,
      [name, address, city, state, contact, email, file]
    );

    res.status(200).json({ success: true, data: result });
  } catch (error) {
    console.error('Error adding school:', error);
    res.status(500).json({ success: false, error: 'Error adding school' });
  }
}