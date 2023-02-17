# 242. Diseña un programa que lea una matriz y un número y devuelva una nueva matriz:
# la que resulta de multiplicar la matriz por el número. (El producto de un número por una matriz
# es la matriz que resulta de multiplicar cada elemento por dicho número)

import random


def rellenarMatriz():
    matriz = []

    # Rellenar matriz con numeros aleatorios del 0 al 10
    for i in range(5):
        matriz.append([])
        for j in range(5):
            matriz[i].append(random.randint(0, 10))

    return matriz


# ----- Programa -----
numero = int(input("Introduce por cuantas veces quieres multiplicar los numeros de la matriz: "))
matrizA = rellenarMatriz()

matrizB = []

for i in range(len(matrizA)):
    matrizB.append([])
    for j in range(len(matrizA[i])):
        matrizB[i].append(matrizA[i][j] * 2)

print(f'Matriz A: {matrizA}')
print('----------------------------------------------------------------------------------------------')
print(f'Matriz B: {matrizB}')
