import sqlite3
from datetime import date

def cadastrar_membro():
    conn = sqlite3.connect("membros.db")
    cursor = conn.cursor()

    print("\n=== Cadastro de Novo Membro ===")

    nome = input("Nome: ")
    data_nascimento = input("Data de nascimento (AAAA-MM-DD): ")
    estado_civil = input("Estado civil: ")
    telefone = input("Telefone: ")
    email = input("Email: ")
    endereco = input("Endereço: ")

    data_cadastro = date.today()

    cursor.execute("""
        INSERT INTO membros
        (nome, data_nascimento, estado_civil, telefone, email, endereco, data_cadastro)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    """, (
        nome,
        data_nascimento,
        estado_civil,
        telefone,
        email,
        endereco,
        data_cadastro
    ))

    conn.commit()
    conn.close()

    print("\n✅ Membro cadastrado com sucesso!\n")


def menu():
    while True:
        print("====== SISTEMA DE CADASTRO DE MEMBROS ======")
        print("1 - Cadastrar novo membro")
        print("2 - Sair")

        opcao = input("Escolha uma opção: ")

        if opcao == "1":
            cadastrar_membro()

        elif opcao == "2":
            print("\n👋 Sistema encerrado. Deus abençoe!")
            break

        else:
            print("\n❌ Opção inválida. Tente novamente.\n")


# Executa o sistema
menu()


