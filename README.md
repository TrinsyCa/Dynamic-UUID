# <div align=center>🚀 Dynamic Unique UUID 🚀</div>

A lightweight PHP utility to dynamically generate **random** or **unique UUID v4** values. This project ensures that generated UUIDs are both RFC 4122 compliant and unique within a specified database table.

## Features 🔍

- Generates standard **UUID v4** (random).
- Ensures **unique UUID** generation by checking against a database table.
- Simple and easy-to-integrate with your existing PHP & MySQL projects.
- Safe and compliant with **IETF** UUID v4 format.

## Installation 🚀

1. Clone or download this repository:
   ```bash
   git clone https://github.com/trinsyca/Dynamic-Unique-UUID.git
   ```

2. Configure your database connection inside ``conn.php``

## Usage ⚙️

1. Generate a random UUID v4:
   ```bash
   generateUUID();
   ```

2. Generate a unique UUID v4 (validated against your database):
   ```bash
   generateUniqueUUID($db, "your_table_name", "uuid_column_name");
   ```

### ⚠️ Note:
*Make sure to replace ``"your_table_name"`` and ``"uuid_column_name"`` with your actual table and column names where UUIDs are stored.*

## Example Output ✨
   ```bash
   Random UUID: e6b60ecf-9f3b-40d5-8c6c-4f7e8f5a9a42
   Unique UUID: 712b321e-0f6c-4e34-9a8e-7fa2c8a4d9ef
   ```
