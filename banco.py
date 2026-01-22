import sqlite3

conn = sqlite3.connect("membros.db")
cursor = conn.cursor()

cursor.execute("""
CREATE TABLE IF NOT EXISTS membros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    data_nascimento DATE,
    estado_civil TEXT,
    telefone TEXT,
    email TEXT,
    endereco TEXT,
    data_cadastro DATE
)
""")

conn.commit()
conn.close()
